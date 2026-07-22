<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

if (!function_exists('menuCanReadUrl')) {
    function menuCanReadUrl(string $url): bool
    {
        if (!auth()->check() || $url === '') {
            return false;
        }

        $keys = [$url];
        $normalizedPath = menuNormalizePath($url);
        if ($normalizedPath !== '') {
            $keys[] = $normalizedPath;
            $keys[] = menuNormalizeKey($normalizedPath);
        } else {
            $normalized = menuNormalizeKey($url);
            if ($normalized !== '') {
                $keys[] = $normalized;
                $keys[] = str_replace('.', '/', $normalized);
            }
        }

        foreach (array_values(array_unique($keys)) as $key) {
            if (auth()->user()->can("read {$key}")) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('menuNormalizeKey')) {
    function menuNormalizeKey(string $value): string
    {
        $normalized = trim($value);
        $normalized = str_replace(['\\', '/'], '.', $normalized);
        $normalized = preg_replace('/\.+/', '.', $normalized) ?? $normalized;

        return trim($normalized, '.');
    }
}

if (!function_exists('menuNormalizePath')) {
    function menuNormalizePath(string $value): string
    {
        $normalized = trim($value);
        $normalized = str_replace(['\\', '.'], '/', $normalized);
        $normalized = preg_replace('#/+#', '/', $normalized) ?? $normalized;

        return trim($normalized, '/');
    }
}

if (!function_exists('sidebarAdditionalMenuSections')) {
    function sidebarAdditionalMenuSections(): array
    {
        if (!auth()->check()) {
            return [];
        }

        // Tentukan jenis link:
        // - route Laravel jika nama route ada
        // - href eksternal jika http/https
        // - href internal (prefix "/") untuk path biasa
        $resolveMenuLink = function (string $url): array {
            $urlPath = menuNormalizePath($url);
            $routeKey = menuNormalizeKey($urlPath !== '' ? $urlPath : $url);
            if ($routeKey !== '' && Route::has($routeKey)) {
                return ['route' => $routeKey];
            }

            if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
                return ['href' => $url];
            }

            if ($urlPath !== '') {
                return ['href' => '/' . $urlPath];
            }

            return ['href' => '#'];
        };

        $customOrder = array_keys(config('menu_seeder.categories', []));
        if (empty($customOrder)) {
            return [];
        }

        $rows = Menu::query()
            ->active()
            ->whereIn('category', $customOrder)
            ->orderBy('orders')
            ->get(['id', 'name', 'url', 'category', 'icon', 'paths', 'meta', 'main_menu_id', 'orders']);

        $categories = $rows->pluck('category')->filter()->unique()->values()->all();
        $preferredOrder = array_values(array_unique($customOrder));

        usort($categories, function ($a, $b) use ($preferredOrder) {
            $ai = array_search($a, $preferredOrder, true);
            $bi = array_search($b, $preferredOrder, true);
            $ai = $ai === false ? PHP_INT_MAX : $ai;
            $bi = $bi === false ? PHP_INT_MAX : $bi;

            return $ai <=> $bi ?: strcmp((string) $a, (string) $b);
        });

        $sections = [];
        foreach ($categories as $category) {
            $categoryRows = $rows->where('category', $category)->values();
            // Bentuk adjacency list: parent_id => children.
            $childrenByParent = $categoryRows->groupBy('main_menu_id');

            $mapNode = function ($node) use (&$mapNode, $childrenByParent, $resolveMenuLink) {
                // Map node secara rekursif dan urutkan anak sesuai kolom orders.
                $childrenMapped = $childrenByParent->get($node->id, collect())
                    ->sortBy('orders')
                    ->values()
                    ->map(fn($child) => $mapNode($child))
                    ->filter()
                    ->values();

                // Leaf tanpa izin read tidak ditampilkan.
                $allowedSelf = menuCanReadUrl((string) $node->url);
                if ($childrenMapped->isEmpty() && !$allowedSelf) {
                    return null;
                }

                $meta = is_array($node->meta) ? $node->meta : [];
                $mapped = ['title' => $node->name];

                if ($node->main_menu_id === null) {
                    $mapped['icon'] = $node->icon ?: 'ki-duotone ki-element-11 fs-2';
                    $mapped['paths'] = (int) ($node->paths ?? 0);
                }

                if ($childrenMapped->isEmpty()) {
                    $mapped = array_merge($mapped, $resolveMenuLink((string) $node->url));
                } else {
                    // Anak bisa dipisah menjadi normal vs collapsed (berdasarkan meta.collapsed).
                    $children = $childrenMapped->filter(function ($child) {
                        return !((bool) (($child['__meta']['collapsed'] ?? false)));
                    })->values()->all();

                    $childrenCollapsed = $childrenMapped->filter(function ($child) {
                        return (bool) (($child['__meta']['collapsed'] ?? false));
                    })->values()->all();

                    foreach ($children as &$child) {
                        unset($child['__meta']);
                    }
                    foreach ($childrenCollapsed as &$child) {
                        unset($child['__meta']);
                    }

                    $mapped['children'] = $children;
                    if (!empty($childrenCollapsed)) {
                        $mapped['children_collapsed'] = $childrenCollapsed;
                    }
                }

                foreach (['dropdown', 'target', 'badge', 'title_key'] as $key) {
                    if (array_key_exists($key, $meta)) {
                        $mapped[$key] = $meta[$key];
                    }
                }

                $mapped['__meta'] = $meta;

                return $mapped;
            };

            $menus = $childrenByParent->get(null, collect())
                ->sortBy('orders')
                ->values()
                ->map(fn($node) => $mapNode($node))
                ->filter()
                ->values()
                ->all();

            foreach ($menus as &$menu) {
                unset($menu['__meta']);
            }

            if (empty($menus)) {
                continue;
            }

            // Label section prioritaskan title_key dari config seeder kategori.
            $categoryConfig = config("menu_seeder.categories.{$category}", []);
            $categoryTitleKey = trim((string) ($categoryConfig['title_key'] ?? ''));
            $categorySlug = Str::of($category)->lower()->replace(' ', '_')->toString();
            $labelKey = 'menu.' . ($categoryTitleKey !== '' ? $categoryTitleKey : $categorySlug);
            $translated = __($labelKey);
            $label = $translated !== $labelKey ? $translated : Str::headline(strtolower($category));
            $sections[] = [
                'key' => $category,
                'label' => $label,
                'menus' => $menus,
            ];
        }

        return $sections;
    }
}

if (!function_exists('sidebarMenuSections')) {
    function sidebarMenuSections(): array
    {
        // Backward-compatible alias.
        return sidebarAdditionalMenuSections();
    }
}
