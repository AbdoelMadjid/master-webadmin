<?php

namespace App\Http\Controllers\PageConfig\MenuWebsite;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageConfig\MenuWebsite\FooterNavigationRequest;
use App\Models\PageConfig\MenuWebsite\FooterNavigation;
use App\Models\PageConfig\MenuWebsite\MainNavigation;
use Illuminate\Http\Request;

class FooterNavigationController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->get('tab', 'nav-list');
        $searchQuery = $request->get('q');
        $selectedColumn = $request->get('column');

        // Query for footer navigation list
        $navQuery = FooterNavigation::with(['mainNavigation'])
            ->orderBy('column', 'asc')
            ->orderBy('order', 'asc');

        if ($searchQuery) {
            $navQuery->where(function ($q) use ($searchQuery) {
                $q->where('title', 'like', "%{$searchQuery}%")
                    ->orWhere('title_en', 'like', "%{$searchQuery}%")
                    ->orWhere('url', 'like', "%{$searchQuery}%");
            });
        }

        if ($selectedColumn !== null && $selectedColumn !== '') {
            $navQuery->where('column', (int) $selectedColumn);
        }

        $navigations = $navQuery->get();

        // Main Navigation items for modal dropdown linking
        $mainNavigations = MainNavigation::with(['children'])
            ->whereNull('parent_id')
            ->orderBy('order', 'asc')
            ->get();

        // Statistics
        $totalNavs = FooterNavigation::count();
        $activeNavs = FooterNavigation::where('is_active', true)->count();
        $linkedNavs = FooterNavigation::whereNotNull('main_navigation_id')->count();

        return view('pages.pageconfig.menuwebsite.footer-navigation', compact(
            'activeTab',
            'searchQuery',
            'selectedColumn',
            'navigations',
            'mainNavigations',
            'totalNavs',
            'activeNavs',
            'linkedNavs'
        ));
    }

    public function store(FooterNavigationRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : true;
        $data['is_external'] = $request->has('is_external') ? (bool) $request->is_external : false;

        $navigation = FooterNavigation::create($data);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web footer navigation item created successfully.'
                : 'Item navigasi footer web berhasil ditambahkan.',
            'data' => $navigation,
        ]);
    }

    public function update(FooterNavigationRequest $request, $id)
    {
        $navigation = FooterNavigation::findOrFail($id);

        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : $navigation->is_active;
        $data['is_external'] = $request->has('is_external') ? (bool) $request->is_external : $navigation->is_external;

        $navigation->update($data);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web footer navigation item updated successfully.'
                : 'Item navigasi footer web berhasil diperbarui.',
            'data' => $navigation,
        ]);
    }

    public function destroy($id)
    {
        $navigation = FooterNavigation::findOrFail($id);
        $navigation->delete();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web footer navigation item deleted successfully.'
                : 'Item navigasi footer web berhasil dihapus.',
        ]);
    }

    public function toggleStatus($id)
    {
        $navigation = FooterNavigation::findOrFail($id);
        $navigation->is_active = !$navigation->is_active;
        $navigation->save();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Footer navigation status updated successfully.'
                : 'Status aktif navigasi footer berhasil diperbarui.',
            'is_active' => $navigation->is_active,
        ]);
    }

    public function reorder(Request $request)
    {
        $orders = $request->input('orders', []);

        foreach ($orders as $orderItem) {
            if (isset($orderItem['id']) && isset($orderItem['order'])) {
                FooterNavigation::where('id', $orderItem['id'])->update([
                    'order' => (int) $orderItem['order'],
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Footer menu order updated successfully.'
                : 'Urutan menu footer berhasil diperbarui.',
        ]);
    }
}
