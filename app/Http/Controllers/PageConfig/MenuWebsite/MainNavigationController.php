<?php

namespace App\Http\Controllers\PageConfig\MenuWebsite;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageConfig\MenuWebsite\MainNavigationRequest;
use App\Models\PageConfig\MenuWebsite\MainNavigation;
use Illuminate\Http\Request;

class MainNavigationController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->get('tab', 'menu-list');
        $searchQuery = $request->get('q');
        $selectedParentId = $request->get('parent_id');

        // Query for navigation list
        if ($searchQuery || ($selectedParentId !== null && $selectedParentId !== '')) {
            $navQuery = MainNavigation::with(['parent', 'children']);

            if ($searchQuery) {
                $navQuery->where(function ($q) use ($searchQuery) {
                    $q->where('title', 'like', "%{$searchQuery}%")
                        ->orWhere('title_en', 'like', "%{$searchQuery}%")
                        ->orWhere('url', 'like', "%{$searchQuery}%");
                });
            }

            if ($selectedParentId !== null && $selectedParentId !== '') {
                if ($selectedParentId === 'root') {
                    $navQuery->whereNull('parent_id');
                } else {
                    $navQuery->where('parent_id', $selectedParentId);
                }
            }

            $navigations = $navQuery->orderBy('order', 'asc')->get();
        } else {
            // Hierarchical order: Parents followed immediately by their child items
            $parents = MainNavigation::with(['parent', 'children' => function ($q) {
                $q->orderBy('mega_menu_column', 'asc')->orderBy('order', 'asc');
            }])
                ->whereNull('parent_id')
                ->orderBy('order', 'asc')
                ->get();

            $sortedNavigations = collect();
            foreach ($parents as $parent) {
                $sortedNavigations->push($parent);
                foreach ($parent->children as $child) {
                    $sortedNavigations->push($child);
                }
            }

            // Push any orphaned items if parent_id is set to non-existent parent
            $parentIds = $parents->pluck('id');
            $orphans = MainNavigation::with(['parent'])->whereNotNull('parent_id')->whereNotIn('parent_id', $parentIds)->get();
            foreach ($orphans as $orphan) {
                $sortedNavigations->push($orphan);
            }

            $navigations = $sortedNavigations;
        }

        // Top level parent items for modal dropdown selection
        $parentNavigations = MainNavigation::whereNull('parent_id')->orderBy('order', 'asc')->get();

        // Tree structure representation (Parents with children nested)
        $treeNavigations = MainNavigation::with(['children' => function ($q) {
            $q->orderBy('mega_menu_column', 'asc')->orderBy('order', 'asc');
        }])->whereNull('parent_id')->orderBy('order', 'asc')->get();

        // Statistics
        $totalNavs = MainNavigation::count();
        $activeNavs = MainNavigation::where('is_active', true)->count();
        $megaMenuNavs = MainNavigation::where('type', 'mega_menu')->orWhereNotNull('parent_id')->count();
        $externalNavs = MainNavigation::where('is_external', true)->count();

        return view('pages.pageconfig.menuwebsite.main-navigation', compact(
            'activeTab',
            'searchQuery',
            'selectedParentId',
            'navigations',
            'parentNavigations',
            'treeNavigations',
            'totalNavs',
            'activeNavs',
            'megaMenuNavs',
            'externalNavs'
        ));
    }

    public function store(MainNavigationRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : true;
        $data['is_external'] = $request->has('is_external') ? (bool) $request->is_external : false;

        $navigation = MainNavigation::create($data);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web navigation item created successfully.'
                : 'Item navigasi web berhasil ditambahkan.',
            'data' => $navigation,
        ]);
    }

    public function update(MainNavigationRequest $request, $id)
    {
        $navigation = MainNavigation::findOrFail($id);

        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : $navigation->is_active;
        $data['is_external'] = $request->has('is_external') ? (bool) $request->is_external : $navigation->is_external;

        $navigation->update($data);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web navigation item updated successfully.'
                : 'Item navigasi web berhasil diperbarui.',
            'data' => $navigation,
        ]);
    }

    public function destroy($id)
    {
        $navigation = MainNavigation::findOrFail($id);
        $navigation->delete();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web navigation item deleted successfully.'
                : 'Item navigasi web berhasil dihapus.',
        ]);
    }

    public function toggleStatus($id)
    {
        $navigation = MainNavigation::findOrFail($id);
        $navigation->is_active = !$navigation->is_active;
        $navigation->save();

        // Sync status across duplicate menu items pointing to the same URL target
        if (!empty($navigation->url) && $navigation->url !== '#') {
            MainNavigation::where('url', $navigation->url)->update([
                'is_active' => $navigation->is_active,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Navigation status updated successfully.'
                : 'Status aktif navigasi berhasil diperbarui.',
            'is_active' => $navigation->is_active,
        ]);
    }

    public function reorder(Request $request)
    {
        $orders = $request->input('orders', []);

        foreach ($orders as $orderItem) {
            if (isset($orderItem['id']) && isset($orderItem['order'])) {
                MainNavigation::where('id', $orderItem['id'])->update([
                    'order' => (int) $orderItem['order'],
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Menu order updated successfully.'
                : 'Urutan menu berhasil diperbarui.',
        ]);
    }
}
