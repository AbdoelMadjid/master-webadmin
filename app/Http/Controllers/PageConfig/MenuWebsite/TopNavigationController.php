<?php

namespace App\Http\Controllers\PageConfig\MenuWebsite;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageConfig\MenuWebsite\TopNavigationRequest;
use App\Models\PageConfig\MenuWebsite\TopNavigation;
use Illuminate\Http\Request;

class TopNavigationController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->get('tab', 'nav-list');
        $searchQuery = $request->get('q');

        // Query for top navigation list
        if ($searchQuery) {
            $navigations = TopNavigation::with(['parent', 'children'])
                ->where(function ($q) use ($searchQuery) {
                    $q->where('title', 'like', "%{$searchQuery}%")
                        ->orWhere('title_en', 'like', "%{$searchQuery}%")
                        ->orWhere('url', 'like', "%{$searchQuery}%");
                })
                ->orderBy('order', 'asc')
                ->get();
        } else {
            // Hierarchical order: Parents followed immediately by their child items
            $parents = TopNavigation::with(['parent', 'children' => fn($q) => $q->orderBy('order', 'asc')])
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

            $parentIds = $parents->pluck('id');
            $orphans = TopNavigation::with(['parent'])->whereNotNull('parent_id')->whereNotIn('parent_id', $parentIds)->get();
            foreach ($orphans as $orphan) {
                $sortedNavigations->push($orphan);
            }

            $navigations = $sortedNavigations;
        }

        // Top level parent items for modal dropdown selection
        $parentNavigations = TopNavigation::whereNull('parent_id')->orderBy('order', 'asc')->get();

        // Statistics
        $totalNavs = TopNavigation::count();
        $activeNavs = TopNavigation::where('is_active', true)->count();
        $externalNavs = TopNavigation::where('is_external', true)->count();

        return view('pages.pageconfig.menuwebsite.top-navigation', compact(
            'activeTab',
            'searchQuery',
            'navigations',
            'parentNavigations',
            'totalNavs',
            'activeNavs',
            'externalNavs'
        ));
    }

    public function store(TopNavigationRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : true;
        $data['is_external'] = $request->has('is_external') ? (bool) $request->is_external : false;

        $navigation = TopNavigation::create($data);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web top navigation item created successfully.'
                : 'Item navigasi atas web berhasil ditambahkan.',
            'data' => $navigation,
        ]);
    }

    public function update(TopNavigationRequest $request, $id)
    {
        $navigation = TopNavigation::findOrFail($id);

        $data = $request->validated();
        $data['is_active'] = $request->has('is_active') ? (bool) $request->is_active : $navigation->is_active;
        $data['is_external'] = $request->has('is_external') ? (bool) $request->is_external : $navigation->is_external;

        $navigation->update($data);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web top navigation item updated successfully.'
                : 'Item navigasi atas web berhasil diperbarui.',
            'data' => $navigation,
        ]);
    }

    public function destroy($id)
    {
        $navigation = TopNavigation::findOrFail($id);
        $navigation->delete();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Web top navigation item deleted successfully.'
                : 'Item navigasi atas web berhasil dihapus.',
        ]);
    }

    public function toggleStatus($id)
    {
        $navigation = TopNavigation::findOrFail($id);
        $navigation->is_active = !$navigation->is_active;
        $navigation->save();

        // Sync status across duplicate menu items pointing to the same URL target
        if (!empty($navigation->url) && $navigation->url !== '#') {
            TopNavigation::where('url', $navigation->url)->update([
                'is_active' => $navigation->is_active,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Top navigation status updated successfully.'
                : 'Status aktif navigasi atas berhasil diperbarui.',
            'is_active' => $navigation->is_active,
        ]);
    }

    public function reorder(Request $request)
    {
        $orders = $request->input('orders', []);

        foreach ($orders as $orderItem) {
            if (isset($orderItem['id']) && isset($orderItem['order'])) {
                TopNavigation::where('id', $orderItem['id'])->update([
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
