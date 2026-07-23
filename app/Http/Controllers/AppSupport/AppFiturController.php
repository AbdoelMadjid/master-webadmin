<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\AppFitur;
use Illuminate\Http\Request;

class AppFiturController extends Controller
{
    /**
     * Tampilkan daftar fitur aplikasi untuk pengaturan tampilan
     */
    public function index(Request $request)
    {
        $categoryOrder = [
            'Sidebar Group',
            'Topbar Menu Group',
            'Topbar Navbar',
            'Floating Drawer',
        ];

        $groupedFiturs = AppFitur::all()
            ->groupBy('category')
            ->sortBy(function ($items, $category) use ($categoryOrder) {
                $pos = array_search($category, $categoryOrder, true);
                return $pos === false ? 999 : $pos;
            });

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => $groupedFiturs,
            ]);
        }

        return view('pages.appsupport.app-fiturs', compact('groupedFiturs'));
    }

    /**
     * Ubah status aktif/non-aktif fitur (Show/Hide)
     */
    public function toggleStatus($id)
    {
        $fitur = AppFitur::findOrFail($id);
        $newStatus = $fitur->active ? 0 : 1;
        $fitur->update(['active' => $newStatus]);

        $statusText = $newStatus ? 'diaktifkan (ditampilkan)' : 'dinonaktifkan (disembunyikan)';
        
        // Render sidebar HTML terbaru secara real-time
        $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

        return response()->json([
            'success'      => true,
            'active'       => $newStatus,
            'message'      => "Fitur '{$fitur->feature_name}' berhasil {$statusText}.",
            'sidebar_html' => $sidebarHtml,
        ]);
    }

    /**
     * Ubah status aktif/non-aktif secara massal (Bulk Toggle) per kategori fitur
     */
    public function bulkToggle(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'active'   => 'required|boolean',
        ]);

        $category = $request->input('category');
        $activeStatus = $request->input('active') ? 1 : 0;

        if ($category === 'all') {
            AppFitur::query()->update(['active' => $activeStatus]);
        } else {
            AppFitur::where('category', $category)->update(['active' => $activeStatus]);
        }

        $actionText = $activeStatus ? 'diaktifkan (ditampilkan)' : 'dinonaktifkan (disembunyikan)';
        $sidebarHtml = view('layouts.partials.sidebar._menu')->render();

        return response()->json([
            'success'      => true,
            'active'       => $activeStatus,
            'message'      => "Semua fitur pada kategori '{$category}' berhasil {$actionText}.",
            'sidebar_html' => $sidebarHtml,
        ]);
    }
}
