<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppSupport\MenuRequest;
use App\Models\AppSupport\Menu;
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
