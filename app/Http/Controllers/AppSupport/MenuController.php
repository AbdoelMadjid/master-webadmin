<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppSupport\MenuBatchRequest;
use App\Http\Requests\AppSupport\MenuRequest;
use App\Http\Requests\AppSupport\MenuSortRequest;
use App\Models\AppSupport\Menu;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Tampilkan daftar menu atau kembalikan data JSON jika AJAX
     */
    /**
     * Tampilkan daftar menu atau kembalikan data JSON jika AJAX
     */
    public function index(Request $request)
    {
        $allMenus = Menu::getOrderedTree();
        $mainMenus = $allMenus->whereNull('main_menu_id')->values();
        $allRoles = \Spatie\Permission\Models\Role::orderBy('name')->get();

        $firstIcon = Menu::whereNotNull('icon')
            ->where('icon', '!=', '')
            ->where('icon', '!=', 'none')
            ->where('icon', '!=', '-')
            ->value('icon') ?? '';

        if (str_contains($firstIcon, 'ki-solid')) {
            $activeIconStyle = 'solid';
        } elseif (str_contains($firstIcon, 'ki-outline')) {
            $activeIconStyle = 'outline';
        } else {
            $activeIconStyle = 'duotone';
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data' => $allMenus,
                'active_icon_style' => $activeIconStyle,
            ]);
        }

        return view('pages.appsupport.menu', compact('allMenus', 'mainMenus', 'allRoles', 'activeIconStyle'));
    }

    /**
     * Helper untuk memproses file translasi lang/id/menu.php dan lang/en/menu.php
     */
    private function syncMenuTranslation(string $titleKey, string $nameId, ?string $nameEn = null): void
    {
        $locales = [
            'id' => $nameId,
            'en' => !empty($nameEn) ? $nameEn : $nameId,
        ];

        foreach ($locales as $locale => $label) {
            $path = lang_path("{$locale}/menu.php");
            if (!file_exists($path)) {
                continue;
            }

            $existing = include $path;
            if (!is_array($existing)) {
                $existing = [];
            }

            $existing[$titleKey] = $label;
            ksort($existing);

            $export = var_export($existing, true);
            $content = "<?php\n\nreturn {$export};\n";
            file_put_contents($path, $content);
        }
    }

    /**
     * Helper untuk membuat Spatie Permissions dan menghubungkannya dengan Menu & Roles
     */
    private function syncMenuPermissionsAndRoles(Menu $menu, array $permissionActions = [], array $roleNames = [], bool $isSyncMode = false): void
    {
        $urlPath = trim((string)($menu->url ?? ''), '/');
        if (empty($urlPath) || $urlPath === '#') {
            $urlPath = Str::slug($menu->name, '-');
        }

        $permissionIdsToAttach = [];
        if (!empty($permissionActions)) {
            foreach ($permissionActions as $action) {
                $actionName = strtolower(trim($action));
                if ($actionName === '') continue;

                $permName = "{$actionName} {$urlPath}";
                $perm = Permission::firstOrCreate(
                    ['name' => $permName],
                    ['guard_name' => 'web']
                );
                $permissionIdsToAttach[] = $perm->id;

                if (!empty($roleNames)) {
                    foreach ($roleNames as $roleName) {
                        $role = \Spatie\Permission\Models\Role::firstOrCreate(
                            ['name' => $roleName],
                            ['guard_name' => 'web']
                        );
                        if (!$role->hasPermissionTo($permName)) {
                            $role->givePermissionTo($perm);
                        }
                    }
                }
            }
        }

        if ($isSyncMode) {
            $existingPermIds = $menu->permissions()->pluck('permissions.id')->toArray();
            $permIdsToDetach = array_diff($existingPermIds, $permissionIdsToAttach);

            if (!empty($permIdsToDetach)) {
                $menu->permissions()->detach($permIdsToDetach);
            }

            if (!empty($permissionIdsToAttach)) {
                $menu->permissions()->syncWithoutDetaching($permissionIdsToAttach);
            }
        } else {
            if (!empty($permissionIdsToAttach)) {
                $menu->permissions()->syncWithoutDetaching($permissionIdsToAttach);
            }
        }
    }

    /**
     * Helper untuk memproses data menu & menyusun meta.title_key & meta.title_en
     */
    private function processMenuData(array $itemData, ?string $category = null, ?int $parentId = null, array $existingMeta = []): array
    {
        $name = $itemData['name'] ?? '';
        $titleEn = !empty($itemData['title_en']) ? trim($itemData['title_en']) : null;
        $customKey = !empty($itemData['title_key']) ? trim($itemData['title_key']) : null;
        $titleKey = $customKey ?: ('custom_' . Str::slug($name, '_'));

        unset($itemData['title_key']);
        unset($itemData['title_en']);

        $itemData['category'] = $category ?: ($itemData['category'] ?? null);
        $itemData['main_menu_id'] = $parentId;
        $itemData['active'] = isset($itemData['active']) ? (int)$itemData['active'] : 1;
        $itemData['orders'] = $itemData['orders'] ?? 0;
        if (!empty($itemData['icon'])) {
            $itemData['paths'] = keenicon_paths($itemData['icon'], (int)($itemData['paths'] ?? 0));
        }

        $meta = $existingMeta;
        $meta['title_key'] = $titleKey;
        if (!empty($titleEn)) {
            $meta['title_en'] = $titleEn;
        }
        $itemData['meta'] = $meta;

        // Auto sync file translasi lang/id/menu.php dan lang/en/menu.php
        $this->syncMenuTranslation($titleKey, $name, $titleEn);

        return $itemData;
    }

    /**
     * Simpan data menu baru
     */
    public function store(MenuRequest $request)
    {
        $validated = $request->validated();
        $validated['active'] = $request->has('active') ? 1 : 0;
        
        $permissions = $validated['permissions'] ?? ['read'];
        $roles = $validated['roles'] ?? ['admin'];
        unset($validated['permissions'], $validated['roles']);

        $data = $this->processMenuData($validated, $validated['category'] ?? null, $validated['main_menu_id'] ?? null);

        $menu = Menu::create($data);
        $this->syncMenuPermissionsAndRoles($menu, $permissions, $roles);

        $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

        return response()->json([
            'success'      => true,
            'message'      => 'Menu berhasil ditambahkan.',
            'data'         => $menu->load(['permissions']),
            'sidebar_html' => $sidebarHtml,
        ]);
    }

    /**
     * Simpan partai menu (Main Menu + Sub-Menus + Sub-Sub-Menus) dalam 1 transaksi
     */
    public function storeBatch(MenuBatchRequest $request)
    {
        $validated = $request->validated();
        $category = $validated['category'] ?? null;

        DB::beginTransaction();
        try {
            $batchMode = $validated['batch_mode'] ?? 'new';
            $existingId = $validated['existing_main_menu_id'] ?? null;

            if ($batchMode === 'existing' && $existingId) {
                $mainMenu = Menu::findOrFail($existingId);
            } else {
                // 1. Induk Utama (Level 0) selalu berupa kontainer -> Perizinan 'read', Role 'admin'
                $mainPermissions = ['read'];
                $mainRoles = ['admin'];
                unset($validated['main_menu']['permissions'], $validated['main_menu']['roles']);

                $mainData = $this->processMenuData($validated['main_menu'], $category);
                $mainMenu = Menu::create($mainData);
                $this->syncMenuPermissionsAndRoles($mainMenu, $mainPermissions, $mainRoles);
            }

            // 2. Buat Sub-Menus (Level 1) & Sub-Sub-Menus (Level 2)
            if (!empty($validated['sub_menus']) && is_array($validated['sub_menus'])) {
                foreach ($validated['sub_menus'] as $subIdx => $subData) {
                    $subSubMenusData = $subData['sub_sub_menus'] ?? [];
                    unset($subData['sub_sub_menus'], $subData['permissions'], $subData['roles']);

                    $hasChildren = !empty($subSubMenusData);

                    // Jika memiliki anak sub-menu (kontainer induk), perizinan 'read'. Jika route langsung (leaf), perizinan CRUD.
                    $subPermissions = $hasChildren ? ['read'] : ['create', 'read', 'update', 'delete'];
                    $subRoles = ['admin'];

                    $subData['orders'] = $subData['orders'] ?? ($subIdx + 1);
                    $subData = $this->processMenuData($subData, $mainMenu->category, $mainMenu->id);
                    $subMenu = Menu::create($subData);
                    $this->syncMenuPermissionsAndRoles($subMenu, $subPermissions, $subRoles);

                    if (!empty($subSubMenusData) && is_array($subSubMenusData)) {
                        foreach ($subSubMenusData as $subSubIdx => $subSubData) {
                            unset($subSubData['permissions'], $subSubData['roles']);

                            // Level 2 selalu merupakan route langsung (leaf) -> Perizinan CRUD, Role 'admin'
                            $subSubPermissions = ['create', 'read', 'update', 'delete'];
                            $subSubRoles = ['admin'];

                            $subSubData['orders'] = $subSubData['orders'] ?? ($subSubIdx + 1);
                            $subSubData = $this->processMenuData($subSubData, $mainMenu->category, $subMenu->id);
                            $subSubMenu = Menu::create($subSubData);
                            $this->syncMenuPermissionsAndRoles($subSubMenu, $subSubPermissions, $subSubRoles);
                        }
                    }
                }
            }

            DB::commit();

            $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

            return response()->json([
                'success'      => true,
                'message'      => "Partai menu '{$mainMenu->name}' beserta sub-menu berhasil disimpan.",
                'sidebar_html' => $sidebarHtml,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan partai menu: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Dapatkan detail menu berdasarkan ID
     */
    public function show($id)
    {
        $menu = Menu::with(['subMenus', 'permissions.roles', 'parentMenu'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data'    => $menu,
        ]);
    }

    /**
     * Perbarui data menu
     */
    public function update(MenuRequest $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validated();
        $validated['active'] = $request->has('active') ? 1 : 0;

        $permissions = $validated['permissions'] ?? [];
        $roles = $validated['roles'] ?? [];
        unset($validated['permissions'], $validated['roles']);

        $data = $this->processMenuData($validated, $validated['category'] ?? null, $validated['main_menu_id'] ?? null, $menu->meta ?? []);

        $menu->update($data);
        $this->syncMenuPermissionsAndRoles($menu, $permissions, $roles, true);

        $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

        return response()->json([
            'success'      => true,
            'message'      => 'Menu berhasil diperbarui.',
            'data'         => $menu->load(['permissions']),
            'sidebar_html' => $sidebarHtml,
        ]);
    }

    /**
     * Perbarui urutan (orders) banyak menu sekaligus dan kembalikan HTML sidebar terbaru
     */
    public function sort(MenuSortRequest $request)
    {
        $items = $request->validated()['orders'];

        foreach ($items as $item) {
            Menu::where('id', $item['id'])->update(['orders' => $item['orders']]);
        }

        // Render HTML sidebar terbaru secara real-time
        $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

        return response()->json([
            'success'      => true,
            'message'      => 'Urutan menu berhasil diperbarui.',
            'sidebar_html' => $sidebarHtml,
        ]);
    }

    /**
     * Ubah status aktif/non-aktif menu dan perbarui sidebar secara real-time
     */
    public function toggleStatus($id)
    {
        $menu = Menu::findOrFail($id);
        $newStatus = $menu->active ? 0 : 1;
        $menu->update(['active' => $newStatus]);

        $statusText = $newStatus ? 'diaktifkan' : 'dinonaktifkan';
        $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

        return response()->json([
            'success'      => true,
            'active'       => $newStatus,
            'message'      => "Menu '{$menu->name}' berhasil {$statusText}.",
            'sidebar_html' => $sidebarHtml,
        ]);
    }

    /**
     * Tambahkan permission baru ke menu
     */
    public function addPermission(Request $request, $id)
    {
        $request->validate([
            'action' => 'required|string|max:50|regex:/^[a-zA-Z0-9_\-]+$/',
        ], [
            'action.required' => 'Nama aksi permission wajib diisi.',
            'action.regex'    => 'Nama aksi hanya boleh berisi huruf, angka, underscore (_), dan hyphen (-).',
        ]);

        $menu = Menu::findOrFail($id);
        $action = strtolower(trim($request->input('action')));
        $menuUrl = menuNormalizePath($menu->url ?: $menu->name);
        $permissionName = "{$action} {$menuUrl}";

        // Simpan/temukan permission
        $permission = Permission::firstOrCreate([
            'name'       => $permissionName,
            'guard_name' => 'web',
        ]);

        // Hubungkan permission ke menu
        $menu->permissions()->syncWithoutDetaching([$permission->id]);

        return response()->json([
            'success'    => true,
            'message'    => "Permission '{$action}' berhasil ditambahkan ke menu '{$menu->name}'.",
            'permission' => [
                'id'     => $permission->id,
                'name'   => $permission->name,
                'action' => $action,
            ],
        ]);
    }

    /**
     * Hapus (detach) permission dari menu
     */
    public function removePermission($id, $permissionId)
    {
        $menu = Menu::findOrFail($id);
        $menu->permissions()->detach($permissionId);

        return response()->json([
            'success' => true,
            'message' => "Permission berhasil dihapus dari menu '{$menu->name}'.",
        ]);
    }

    /**
     * Otomatis menerjemahkan teks nama menu Bahasa Indonesia ke Bahasa Inggris (Bilingual Auto-Translator)
     */
    public function autoTranslate(Request $request)
    {
        $text = trim($request->input('text', ''));
        if (empty($text)) {
            return response()->json(['success' => true, 'translated' => '']);
        }

        // Kamus istilah menu populer untuk respon instan & akurat
        $dictionary = [
            'manajemen sekolah'     => 'School Management',
            'tahun ajaran'          => 'Academic Year',
            'identitas sekolah'     => 'School Profile',
            'data keahlian'         => 'Expertise Data',
            'bidang keahlian'       => 'Field of Expertise',
            'program keahlian'      => 'Expertise Program',
            'konsentrasi keahlian'  => 'Expertise Concentration',
            'navigasi utama'        => 'Main Navigation',
            'navigasi atas'         => 'Top Navigation',
            'navigasi footer'       => 'Footer Navigation',
            'menu website'          => 'Website Menu',
            'konfigurasi halaman'   => 'Page Configuration',
            'pengaturan sistem'     => 'System Settings',
            'manajemen user'        => 'User Management',
            'manajemen pengguna'    => 'User Management',
            'hak akses'             => 'Access Permissions',
            'peran & izin'          => 'Roles & Permissions',
            'data referensi'        => 'Reference Data',
            'log aktivitas'         => 'Activity Log',
            'riwayat login'         => 'Login History',
            'cadangan database'     => 'Database Backup',
            'profil pengguna'       => 'User Profile',
        ];

        $lower = strtolower($text);
        if (isset($dictionary[$lower])) {
            return response()->json([
                'success'    => true,
                'translated' => $dictionary[$lower],
            ]);
        }

        // Fallback layanan online Google Translate GTX API
        try {
            $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=id&tl=en&dt=t&q=" . urlencode($text);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
            $response = curl_exec($ch);
            curl_close($ch);

            if ($response) {
                $result = json_decode($response, true);
                if (isset($result[0][0][0])) {
                    $translated = ucwords(trim($result[0][0][0]));
                    return response()->json([
                        'success'    => true,
                        'translated' => $translated,
                    ]);
                }
            }
        } catch (\Exception $e) {
            // Ignore error
        }

        return response()->json([
            'success'    => true,
            'translated' => ucwords($text),
        ]);
    }

    /**
     * Helper untuk menghapus entri translasi dari lang/id/menu.php dan lang/en/menu.php berdasarkan title_key
     */
    private function removeMenuTranslationKeys(array $keys): void
    {
        $keys = array_filter(array_unique($keys));
        if (empty($keys)) {
            return;
        }

        $locales = ['id', 'en'];
        foreach ($locales as $locale) {
            $path = lang_path("{$locale}/menu.php");
            if (!file_exists($path)) {
                continue;
            }

            $existing = include $path;
            if (!is_array($existing)) {
                continue;
            }

            $changed = false;
            foreach ($keys as $key) {
                if (isset($existing[$key])) {
                    unset($existing[$key]);
                    $changed = true;
                }
            }

            if ($changed) {
                ksort($existing);
                $export = var_export($existing, true);
                $content = "<?php\n\nreturn {$export};\n";
                file_put_contents($path, $content);
            }
        }
    }

    /**
     * Helper rekursif untuk mengumpulkan seluruh ID menu turunan (Level 1, Level 2, dll) dan kuis title_key translasi
     */
    private function collectMenuHierarchyAndKeys(Menu $menu, array &$menuIds, array &$titleKeys): void
    {
        $menuIds[] = $menu->id;

        if (!empty($menu->meta['title_key'])) {
            $titleKeys[] = trim($menu->meta['title_key']);
        }

        $children = Menu::where('main_menu_id', $menu->id)->get();
        foreach ($children as $child) {
            $this->collectMenuHierarchyAndKeys($child, $menuIds, $titleKeys);
        }
    }

    /**
     * Hapus menu beserta seluruh turunan sub-menunya secara rekursif dari DB dan hapus kunci translasi dari file bilingual
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        $menuIds = [];
        $titleKeys = [];

        // 1. Kumpulkan seluruh ID menu (parent, anak, cucu) dan title_key translasi
        $this->collectMenuHierarchyAndKeys($menu, $menuIds, $titleKeys);

        DB::beginTransaction();
        try {
            // 2. Hapus relasi permissions pivot jika ada
            foreach ($menuIds as $mId) {
                $m = Menu::find($mId);
                if ($m) {
                    $m->permissions()->detach();
                }
            }

            // 3. Putuskan hubungan foreign key main_menu_id terlebih dahulu untuk mencegah FK constraint 1451
            Menu::whereIn('id', $menuIds)->update(['main_menu_id' => null]);

            // 4. Hapus seluruh menu dalam pohon hirarki dari DB
            Menu::whereIn('id', $menuIds)->delete();

            DB::commit();

            // 4. Hapus entri translasi bilingual dari lang/id/menu.php dan lang/en/menu.php
            $this->removeMenuTranslationKeys($titleKeys);

            $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

            $deletedCount = count($menuIds);
            $subText = $deletedCount > 1 ? " beserta " . ($deletedCount - 1) . " turunan sub-menunya" : "";

            return response()->json([
                'success'      => true,
                'message'      => "Menu '{$menu->name}'{$subText} dan kunci translasi kustomnya berhasil dihapus.",
                'sidebar_html' => $sidebarHtml,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus menu: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Ganti gaya seluruh ikon menu (ki-duotone, ki-solid, ki-outline) secara terpusat
     */
    public function switchIconStyle(Request $request)
    {
        $request->validate([
            'style' => 'required|string|in:duotone,solid,outline',
        ]);

        $style = $request->input('style');
        $targetPrefix = 'ki-' . $style;

        DB::beginTransaction();
        try {
            $menus = Menu::whereNotNull('icon')->where('icon', '!=', '')->where('icon', '!=', 'none')->where('icon', '!=', '-')->get();

            $updatedCount = 0;
            foreach ($menus as $menu) {
                $iconStr = trim($menu->icon);
                if (empty($iconStr)) continue;

                // Replace existing style prefix (ki-duotone, ki-solid, ki-outline) or prepend
                if (preg_match('/\bki-(duotone|solid|outline)\b/', $iconStr)) {
                    $newIcon = preg_replace('/\bki-(duotone|solid|outline)\b/', $targetPrefix, $iconStr);
                } else {
                    $newIcon = $targetPrefix . ' ' . $iconStr;
                }

                // Adjust path count based on Keenicons specifications
                $newPaths = (int) $menu->paths;
                if ($style === 'duotone') {
                    $newPaths = keenicon_paths($newIcon, $newPaths > 0 ? $newPaths : 2);
                } else {
                    $newPaths = 0; // Solid and Outline styles do not use child path spans
                }

                $menu->icon = $newIcon;
                $menu->paths = $newPaths;
                $menu->save();
                $updatedCount++;
            }

            DB::commit();

            $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

            $styleLabels = [
                'duotone' => 'Duotone (ki-duotone)',
                'solid'   => 'Solid (ki-solid)',
                'outline' => 'Outline (ki-outline)',
            ];
            $styleLabel = $styleLabels[$style] ?? $style;

            return response()->json([
                'success'      => true,
                'message'      => "Berhasil memperbarui {$updatedCount} ikon menu menjadi gaya {$styleLabel}.",
                'sidebar_html' => $sidebarHtml,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui gaya ikon menu: ' . $e->getMessage(),
            ], 500);
        }
    }
}
