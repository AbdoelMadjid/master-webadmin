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

        $activeIconStyle = getActiveIconStyle();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'data'    => $groupedFiturs,
                'active_icon_style' => $activeIconStyle,
            ]);
        }

        return view('pages.appsupport.app-fiturs', compact('groupedFiturs', 'activeIconStyle'));
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

    /**
     * Ganti gaya seluruh ikon menu (ki-duotone, ki-solid, ki-outline) secara terpusat dari halaman App Fiturs
     */
    public function switchIconStyle(Request $request)
    {
        $request->validate([
            'style' => 'required|string|in:duotone,solid,outline',
        ]);

        $style = $request->input('style');
        $targetPrefix = 'ki-' . $style;

        \Illuminate\Support\Facades\DB::beginTransaction();
        try {
            AppFitur::updateOrCreate(
                ['feature_key' => 'global_icon_style'],
                [
                    'feature_name' => 'Global Icon Style',
                    'category'     => 'UI Style',
                    'description'  => $style,
                    'active'       => 1,
                ]
            );

            $menus = \App\Models\AppSupport\Menu::whereNotNull('icon')->where('icon', '!=', '')->where('icon', '!=', 'none')->where('icon', '!=', '-')->get();

            $updatedCount = 0;
            foreach ($menus as $menu) {
                $iconStr = trim($menu->icon);
                if (empty($iconStr)) continue;

                if (preg_match('/\bki-(duotone|solid|outline)\b/', $iconStr)) {
                    $newIcon = preg_replace('/\bki-(duotone|solid|outline)\b/', $targetPrefix, $iconStr);
                } else {
                    $newIcon = $targetPrefix . ' ' . $iconStr;
                }

                $newPaths = (int) $menu->paths;
                if ($style === 'duotone') {
                    $newPaths = keenicon_paths($newIcon, $newPaths > 0 ? $newPaths : 2);
                } else {
                    $newPaths = 0;
                }

                $menu->icon = $newIcon;
                $menu->paths = $newPaths;
                $menu->save();
                $updatedCount++;
            }

            \Illuminate\Support\Facades\DB::commit();

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
            \Illuminate\Support\Facades\DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui gaya ikon menu: ' . $e->getMessage(),
            ], 500);
        }
    }
}
