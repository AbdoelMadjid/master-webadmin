<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Spatie\Permission\PermissionRegistrar;

class MenuSeeder extends Seeder
{
    private array $allRoles = [];
    private array $seededUrlsByCategory = [];
    private array $seededPermissionNames = [];
    private array $menuLinkedPermissionIds = [];
    private int $orderCounter = 0;

    public function run(): void
    {
        $this->resetMenuSeedTables();
        $this->allRoles = Role::query()->pluck('name')->toArray();
        $translationSnapshot = $this->snapshotTranslationFiles();
        $blueprints = $this->buildBlueprints();

        try {
            $this->syncCustomMenuTranslations();

            DB::transaction(function () use ($blueprints) {
                $this->pruneUnknownCategories(array_keys($blueprints));

                foreach ($blueprints as $category => $config) {
                    $this->seededUrlsByCategory[$category] = [];

                    foreach ($config['menus'] as $menu) {
                        $this->seedNode(
                            item: $menu,
                            category: $category,
                            defaultPermissions: $config['default_permissions'],
                            defaultRoles: $config['default_roles']
                        );
                    }

                    if (($config['prune_missing'] ?? false) === true) {
                        $this->pruneMissingMenus($category, $this->seededUrlsByCategory[$category]);
                    }
                }

                $this->pruneStaleMenuPermissions();
            });

            $this->forgetPermissionCache();
        } catch (\Throwable $e) {
            $this->restoreTranslationFiles($translationSnapshot);
            $this->forgetPermissionCache();
            throw $e;
        }
    }

    private function resetMenuSeedTables(): void
    {
        $permissionTable = config('permission.table_names.permissions', 'permissions');
        $roleHasPermissionTable = config('permission.table_names.role_has_permissions', 'role_has_permissions');
        $modelHasPermissionTable = config('permission.table_names.model_has_permissions', 'model_has_permissions');
        $permissionPivotKey = config('permission.column_names.permission_pivot_key');
        if (!is_string($permissionPivotKey) || trim($permissionPivotKey) === '') {
            $permissionPivotKey = 'permission_id';
        }
        $menuPermissionTable = 'menu_permission';
        $menuTable = 'menus';
        $this->menuLinkedPermissionIds = [];

        if (Schema::hasTable($menuPermissionTable)) {
            $this->menuLinkedPermissionIds = DB::table($menuPermissionTable)
                ->select('permission_id')
                ->distinct()
                ->pluck('permission_id')
                ->map(fn($id) => (int) $id)
                ->filter(fn($id) => $id > 0)
                ->values()
                ->all();
        }

        $this->forgetPermissionCache();
        Schema::disableForeignKeyConstraints();
        try {
            if (Schema::hasTable($menuPermissionTable)) {
                DB::table($menuPermissionTable)->truncate();
            }

            if (Schema::hasTable($menuTable)) {
                DB::table($menuTable)->truncate();
            }
        } finally {
            Schema::enableForeignKeyConstraints();
        }

        if (!empty($this->menuLinkedPermissionIds)) {
            if (Schema::hasTable($roleHasPermissionTable)) {
                DB::table($roleHasPermissionTable)
                    ->whereIn($permissionPivotKey, $this->menuLinkedPermissionIds)
                    ->delete();
            }

            if (Schema::hasTable($modelHasPermissionTable)) {
                DB::table($modelHasPermissionTable)
                    ->whereIn($permissionPivotKey, $this->menuLinkedPermissionIds)
                    ->delete();
            }

            if (Schema::hasTable($permissionTable)) {
                DB::table($permissionTable)
                    ->whereIn('id', $this->menuLinkedPermissionIds)
                    ->delete();
            }
        }

        $this->forgetPermissionCache();
    }

    private function forgetPermissionCache(): void
    {
        if (!app()->bound(PermissionRegistrar::class)) {
            return;
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    private function syncCustomMenuTranslations(): void
    {
        $entries = $this->collectCustomTranslationEntries();
        $manifest = $this->loadTranslationManifest();
        $manifest['id'] = $this->syncLocaleTranslations('id', $entries, $manifest['id'] ?? []);
        $manifest['en'] = $this->syncLocaleTranslations('en', $entries, $manifest['en'] ?? []);
        $this->saveTranslationManifest($manifest);
    }

    private function collectCustomTranslationEntries(): array
    {
        $entries = [];
        $customCategories = $this->preparedCustomCategories();

        foreach ($customCategories as $category => $custom) {
            $categoryKey = trim((string) ($custom['title_key'] ?? ''));
            if ($categoryKey === '') {
                $categoryKey = Str::of($category)->lower()->replace(' ', '_')->toString();
            }
            $idLabel = (string) ($custom['title'] ?? $category);
            $enLabel = (string) ($custom['title_en'] ?? $idLabel);
            $entries[$categoryKey] = [
                'id' => $idLabel,
                'en' => $enLabel,
            ];

            foreach ($custom['menus'] ?? [] as $menu) {
                $this->collectItemTranslationEntries($menu, $entries);
            }
        }

        return $entries;
    }

    private function preparedCustomCategories(): array
    {
        $prepared = [];
        $customCategories = config('menu_seeder.categories', []);

        foreach ($customCategories as $category => $custom) {
            $categorySlug = Str::of($category)->lower()->replace(' ', '_')->toString();
            $custom['menus'] = $this->injectDefaultTitleKeys($custom['menus'] ?? [], $categorySlug);
            $prepared[$category] = $custom;
        }

        return $prepared;
    }

    private function injectDefaultTitleKeys(array $items, string $categorySlug, array $parentPath = []): array
    {
        $result = [];

        foreach ($items as $item) {
            $title = (string) ($item['title'] ?? $item['name'] ?? '');
            $slug = Str::of($title)->lower()->replace([' ', '&', '/'], ['_', 'and', '_'])->toString();
            $currentPath = array_filter(array_merge($parentPath, [$slug]));

            if (!isset($item['title_key']) || trim((string) $item['title_key']) === '') {
                $item['title_key'] = trim("custom_{$categorySlug}_" . implode('_', $currentPath), '_');
            }

            if (!empty($item['children']) && is_array($item['children'])) {
                $item['children'] = $this->injectDefaultTitleKeys($item['children'], $categorySlug, $currentPath);
            }

            if (!empty($item['children_collapsed']) && is_array($item['children_collapsed'])) {
                $item['children_collapsed'] = $this->injectDefaultTitleKeys($item['children_collapsed'], $categorySlug, $currentPath);
            }

            $result[] = $item;
        }

        return $result;
    }

    private function collectItemTranslationEntries(array $item, array &$entries): void
    {
        $idLabel = (string) ($item['title'] ?? $item['name'] ?? '');
        if ($idLabel !== '') {
            $key = (string) ($item['title_key'] ?? Str::of($idLabel)->lower()->replace([' ', '&', '/'], ['_', 'and', '_'])->toString());
            $enLabel = (string) ($item['title_en'] ?? $idLabel);
            $entries[$key] = [
                'id' => $idLabel,
                'en' => $enLabel,
            ];
        }

        foreach ($item['children'] ?? [] as $child) {
            $this->collectItemTranslationEntries($child, $entries);
        }

        foreach ($item['children_collapsed'] ?? [] as $child) {
            $this->collectItemTranslationEntries($child, $entries);
        }
    }

    private function syncLocaleTranslations(string $locale, array $entries, array $managedKeys): array
    {
        $path = lang_path("{$locale}/menu.php");
        if (!File::exists($path)) {
            return [];
        }

        $existing = include $path;
        if (!is_array($existing)) {
            return [];
        }

        $content = File::get($path);
        $lines = preg_split('/\R/', $content) ?: [];
        $lineMap = $this->buildTranslationLineMap($lines);
        $managedLookup = array_fill_keys($managedKeys, true);
        $desiredKeys = array_keys($entries);

        $staleManaged = array_diff(array_keys($managedLookup), $desiredKeys);
        foreach ($staleManaged as $staleKey) {
            if (isset($lineMap[$staleKey])) {
                $lines[$lineMap[$staleKey]] = null;
                unset($lineMap[$staleKey]);
            }
        }

        $nextManaged = [];
        $insertLines = [];
        foreach ($entries as $key => $labels) {
            $value = (string) ($labels[$locale] ?? $labels['id'] ?? $key);

            $nextManaged[] = $key;
            $formatted = $this->formatTranslationLine($key, $value);
            if (isset($lineMap[$key])) {
                $lines[$lineMap[$key]] = $formatted;
            } else {
                $insertLines[] = $formatted;
            }
        }

        $lines = array_values(array_filter($lines, fn($line) => $line !== null));

        $endIndex = $this->findTranslationArrayEndIndex($lines);
        if ($endIndex === null) {
            $merged = $existing;
            foreach ($entries as $key => $labels) {
                $value = (string) ($labels[$locale] ?? $labels['id'] ?? $key);
                $merged[$key] = $value;
            }
            foreach ($staleManaged as $staleKey) {
                unset($merged[$staleKey]);
            }

            $export = var_export($merged, true);
            File::put($path, "<?php\n\nreturn {$export};\n");
            sort($nextManaged);
            return array_values(array_unique($nextManaged));
        }

        if (!empty($insertLines)) {
            sort($insertLines);
            array_splice($lines, $endIndex, 0, $insertLines);
        }

        File::put($path, implode("\n", $lines) . "\n");
        sort($nextManaged);
        return array_values(array_unique($nextManaged));
    }

    private function buildTranslationLineMap(array $lines): array
    {
        $map = [];
        foreach ($lines as $index => $line) {
            if (preg_match("/^\\s*'((?:\\\\'|[^'])*)'\\s*=>\\s*'(?:\\\\'|[^'])*',\\s*$/", $line, $matches) === 1) {
                $key = str_replace("\\'", "'", $matches[1]);
                $map[$key] = $index;
            }
        }

        return $map;
    }

    private function formatTranslationLine(string $key, string $value): string
    {
        $escapedKey = str_replace("'", "\\'", $key);
        $escapedValue = str_replace("'", "\\'", $value);

        return "    '{$escapedKey}' => '{$escapedValue}',";
    }

    private function findTranslationArrayEndIndex(array $lines): ?int
    {
        for ($i = count($lines) - 1; $i >= 0; $i--) {
            if (trim($lines[$i]) === '];') {
                return $i;
            }
        }

        return null;
    }

    private function translationManifestPath(): string
    {
        return lang_path('menu_seeder_manifest.php');
    }

    private function loadTranslationManifest(): array
    {
        $path = $this->translationManifestPath();
        if (!File::exists($path)) {
            return ['id' => [], 'en' => []];
        }

        $manifest = include $path;
        if (!is_array($manifest)) {
            return ['id' => [], 'en' => []];
        }

        return [
            'id' => array_values(array_unique(array_filter($manifest['id'] ?? [], 'is_string'))),
            'en' => array_values(array_unique(array_filter($manifest['en'] ?? [], 'is_string'))),
        ];
    }

    private function saveTranslationManifest(array $manifest): void
    {
        $path = $this->translationManifestPath();
        $content = "<?php\n\nreturn " . var_export([
            'id' => array_values(array_unique($manifest['id'] ?? [])),
            'en' => array_values(array_unique($manifest['en'] ?? [])),
        ], true) . ";\n";

        File::put($path, $content);
    }

    private function snapshotTranslationFiles(): array
    {
        $paths = [
            lang_path('id/menu.php'),
            lang_path('en/menu.php'),
            $this->translationManifestPath(),
        ];

        $snapshot = [];
        foreach ($paths as $path) {
            $exists = File::exists($path);
            $snapshot[$path] = [
                'exists' => $exists,
                'content' => $exists ? File::get($path) : null,
            ];
        }

        return $snapshot;
    }

    private function restoreTranslationFiles(array $snapshot): void
    {
        foreach ($snapshot as $path => $state) {
            if (($state['exists'] ?? false) === true) {
                File::put($path, (string) ($state['content'] ?? ''));
                continue;
            }

            if (File::exists($path)) {
                File::delete($path);
            }
        }
    }

    private function buildBlueprints(): array
    {
        $blueprints = [];
        foreach ($this->preparedCustomCategories() as $category => $custom) {
            $customMenus = $this->normalizeMany($custom['menus'] ?? []);
            if (empty($customMenus)) {
                continue;
            }

            $blueprints[$category] = [
                'default_permissions' => $custom['default_permissions'] ?? ['read'],
                'default_roles' => $custom['default_roles'] ?? ['admin'],
                'menus' => $customMenus,
                'prune_missing' => $custom['prune_missing'] ?? true,
            ];
        }

        return $blueprints;
    }

    private function resolveRoles(array $roles): array
    {
        if (in_array('*', $roles, true)) {
            return $this->allRoles;
        }

        return $roles;
    }

    private function normalizeMany(array $items, array $meta = []): array
    {
        return array_values(array_map(fn($item) => $this->normalizeItem($item, $meta), $items));
    }

    private function normalizeItem(array $item, array $inheritedMeta = []): array
    {
        $meta = array_filter([
            'dropdown' => $item['dropdown'] ?? ($inheritedMeta['dropdown'] ?? null),
            'target' => $item['target'] ?? ($inheritedMeta['target'] ?? null),
            'badge' => $item['badge'] ?? ($inheritedMeta['badge'] ?? null),
            'title_key' => $item['title_key'] ?? ($inheritedMeta['title_key'] ?? null),
            'collapsed' => $item['collapsed'] ?? ($inheritedMeta['collapsed'] ?? null),
        ], fn($value) => $value !== null);

        $children = [];
        foreach ($item['children'] ?? [] as $child) {
            $children[] = $this->normalizeItem($child);
        }
        foreach ($item['children_collapsed'] ?? [] as $child) {
            $children[] = $this->normalizeItem($child, ['collapsed' => true]);
        }

        return array_filter([
            'title' => $item['title'] ?? $item['name'] ?? null,
            'route' => $this->normalizeMenuUrl($item['route'] ?? null),
            'icon' => $item['icon'] ?? null,
            'paths' => $item['paths'] ?? null,
            'permissions' => $item['permissions'] ?? null,
            'roles' => $item['roles'] ?? null,
            'meta' => $meta ?: null,
            'children' => $children ?: null,
        ], fn($value) => $value !== null);
    }

    private function seedNode(
        array $item,
        string $category,
        array $defaultPermissions,
        array $defaultRoles,
        ?int $parentId = null,
        ?string $parentUrl = null
    ): Menu {
        $fallbackUrl = $this->buildFallbackMenuUrl($category, $parentUrl, (string) ($item['title'] ?? 'menu'));
        $url = $this->normalizeMenuUrl($item['route'] ?? $fallbackUrl) ?? $fallbackUrl;
        $this->seededUrlsByCategory[$category][] = $url;

        $menu = Menu::updateOrCreate([
            'category' => $category,
            'url' => $url,
        ], [
            'name' => $item['title'],
            'main_menu_id' => $parentId,
            'icon' => $item['icon'] ?? null,
            'paths' => $item['paths'] ?? null,
            'meta' => $item['meta'] ?? null,
            'orders' => $this->nextOrder(),
        ]);

        $permissions = $item['permissions'] ?? $defaultPermissions;
        $roles = $this->resolveRoles($item['roles'] ?? $defaultRoles);
        $this->syncMenuPermissions($menu, $permissions, $roles);

        foreach (array_values($item['children'] ?? []) as $child) {
            $this->seedNode(
                item: $child,
                category: $category,
                defaultPermissions: $defaultPermissions,
                defaultRoles: $defaultRoles,
                parentId: $menu->id,
                parentUrl: $url
            );
        }

        return $menu;
    }

    private function nextOrder(): int
    {
        $this->orderCounter++;
        return $this->orderCounter;
    }

    private function normalizeMenuUrl(?string $value): ?string
    {
        if ($value === null) {
            return null;
        }

        $normalized = trim($value);
        if ($normalized === '') {
            return null;
        }

        $normalized = str_replace(['\\', '.'], '/', $normalized);
        $normalized = preg_replace('#/+#', '/', $normalized) ?? $normalized;

        return trim($normalized, '/');
    }

    private function buildFallbackMenuUrl(string $category, ?string $parentUrl, string $title): string
    {
        $slug = Str::slug($title !== '' ? $title : 'menu');
        $base = $parentUrl ? $this->normalizeMenuUrl($parentUrl) : Str::slug((string) Str::of($category)->lower());

        return trim("{$base}/{$slug}", '/');
    }

    private function pruneMissingMenus(string $category, array $keepUrls): void
    {
        $keepUrls = array_values(array_unique($keepUrls));
        $staleMenus = Menu::query()
            ->where('category', $category)
            ->when(!empty($keepUrls), fn($q) => $q->whereNotIn('url', $keepUrls))
            ->get(['id', 'main_menu_id']);

        if ($staleMenus->isEmpty()) {
            return;
        }

        $staleIds = $staleMenus->pluck('id')->values();
        DB::table('menu_permission')->whereIn('menu_id', $staleIds)->delete();

        // Hapus dari leaf ke root agar aman terhadap FK self-reference.
        $nodes = $staleMenus->keyBy('id')->map(fn($m) => ['id' => $m->id, 'main_menu_id' => $m->main_menu_id])->values()->all();
        while (!empty($nodes)) {
            $parentIds = array_column($nodes, 'main_menu_id');
            $leafIds = array_values(array_map(
                fn($n) => $n['id'],
                array_filter($nodes, fn($n) => !in_array($n['id'], $parentIds, true))
            ));

            if (empty($leafIds)) {
                $leafIds = array_column($nodes, 'id');
            }

            Menu::query()->whereIn('id', $leafIds)->delete();
            $nodes = array_values(array_filter($nodes, fn($n) => !in_array($n['id'], $leafIds, true)));
        }
    }

    private function pruneUnknownCategories(array $allowedCategories): void
    {
        $allowedCategories = array_values(array_unique(array_filter($allowedCategories, fn($v) => is_string($v) && $v !== '')));

        $staleMenus = Menu::query()
            ->where(function ($query) use ($allowedCategories) {
                $query->whereNull('category');
                if (!empty($allowedCategories)) {
                    $query->orWhereNotIn('category', $allowedCategories);
                }
            })
            ->get(['id', 'main_menu_id']);

        if ($staleMenus->isEmpty()) {
            return;
        }

        $staleIds = $staleMenus->pluck('id')->values();
        DB::table('menu_permission')->whereIn('menu_id', $staleIds)->delete();

        $nodes = $staleMenus->keyBy('id')->map(fn($m) => ['id' => $m->id, 'main_menu_id' => $m->main_menu_id])->values()->all();
        while (!empty($nodes)) {
            $parentIds = array_column($nodes, 'main_menu_id');
            $leafIds = array_values(array_map(
                fn($n) => $n['id'],
                array_filter($nodes, fn($n) => !in_array($n['id'], $parentIds, true))
            ));

            if (empty($leafIds)) {
                $leafIds = array_column($nodes, 'id');
            }

            Menu::query()->whereIn('id', $leafIds)->delete();
            $nodes = array_values(array_filter($nodes, fn($n) => !in_array($n['id'], $leafIds, true)));
        }
    }

    private function syncMenuPermissions(Menu $menu, array $permissions, array $roles): void
    {
        $normalizedUrl = $this->normalizeMenuUrl($menu->url) ?? '';
        if ($normalizedUrl === '') {
            $menu->permissions()->sync([]);
            return;
        }

        $permissionIds = [];
        foreach ($permissions as $permission) {
            $permissionName = trim("{$permission} {$normalizedUrl}");
            $permissionModel = Permission::firstOrCreate([
                'name' => $permissionName,
                'guard_name' => 'web',
            ]);

            $permissionIds[] = $permissionModel->id;
            $this->seededPermissionNames[$permissionName] = true;

            if (!empty($roles)) {
                $permissionModel->assignRole($roles);
            }
        }

        $menu->permissions()->sync(array_values(array_unique($permissionIds)));
    }

    private function pruneStaleMenuPermissions(): void
    {
        if (empty($this->menuLinkedPermissionIds)) {
            return;
        }

        $seededNames = array_keys($this->seededPermissionNames);

        $stalePermissionIds = Permission::query()
            ->whereIn('id', $this->menuLinkedPermissionIds)
            ->where('guard_name', 'web')
            ->when(!empty($seededNames), fn($q) => $q->whereNotIn('name', $seededNames))
            ->pluck('id')
            ->all();

        if (empty($stalePermissionIds)) {
            return;
        }

        DB::table('permissions')->whereIn('id', $stalePermissionIds)->delete();
    }
}
