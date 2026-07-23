<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppSupport\MenuRequest;
use App\Http\Requests\AppSupport\MenuSortRequest;
use App\Models\AppSupport\Menu;
use App\Models\Permission;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Tampilkan daftar menu atau kembalikan data JSON jika AJAX
     */
    public function index(Request $request)
    {
        $allMenus = Menu::with(['subMenus', 'permissions', 'parentMenu'])
            ->orderBy('category')
            ->orderBy('orders')
            ->get();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data' => $allMenus,
            ]);
        }

        return view('pages.appsupport.menu', compact('allMenus'));
    }

    /**
     * Simpan data menu baru
     */
    public function store(MenuRequest $request)
    {
        $data = $request->validated();
        $data['active'] = $request->has('active') ? 1 : 0;
        $data['orders'] = $data['orders'] ?? 0;

        $menu = Menu::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Menu berhasil ditambahkan.',
            'data'    => $menu,
        ]);
    }

    /**
     * Dapatkan detail menu berdasarkan ID
     */
    public function show($id)
    {
        $menu = Menu::with(['subMenus', 'permissions', 'parentMenu'])->findOrFail($id);

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

        $data = $request->validated();
        $data['active'] = $request->has('active') ? 1 : 0;

        $menu->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Menu berhasil diperbarui.',
            'data'    => $menu,
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
     * Hapus menu dari database
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return response()->json([
            'success' => true,
            'message' => 'Menu berhasil dihapus.',
        ]);
    }
}
