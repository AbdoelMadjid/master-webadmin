<?php

namespace App\Http\Controllers\PageConfig;

use App\Http\Controllers\Controller;
use App\Models\PageConfig\WebFeature;
use Illuminate\Http\Request;

class WebsiteFeatureController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->get('tab', 'feature-list');
        $features = WebFeature::orderBy('order', 'asc')->get();

        $totalFeatures = $features->count();
        $activeFeatures = $features->where('is_active', true)->count();
        $inactiveFeatures = $features->where('is_active', false)->count();

        return view('pages.pageconfig.website-features', compact(
            'activeTab',
            'features',
            'totalFeatures',
            'activeFeatures',
            'inactiveFeatures'
        ));
    }

    public function toggleStatus($id)
    {
        $feature = WebFeature::findOrFail($id);
        $feature->is_active = !$feature->is_active;
        $feature->save();

        WebFeature::clearFeatureCache();

        $statusText = $feature->is_active
            ? (app()->getLocale() == 'en' ? 'enabled (visible)' : 'diaktifkan (ditampilkan)')
            : (app()->getLocale() == 'en' ? 'disabled (hidden)' : 'dinonaktifkan (disembunyikan)');

        $featureName = app()->getLocale() == 'en' && !empty($feature->name_en) ? $feature->name_en : $feature->name;

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Feature '{$featureName}' status successfully {$statusText}."
                : "Status fitur '{$featureName}' berhasil {$statusText}.",
            'is_active' => $feature->is_active,
            'active' => $feature->is_active,
        ]);
    }

    public function bulkToggle(Request $request)
    {
        $request->validate([
            'is_active' => 'required|boolean',
        ]);

        $status = (bool) $request->input('is_active');
        WebFeature::query()->update(['is_active' => $status]);
        WebFeature::clearFeatureCache();

        $actionText = $status
            ? (app()->getLocale() == 'en' ? 'enabled (visible)' : 'diaktifkan (ditampilkan)')
            : (app()->getLocale() == 'en' ? 'disabled (hidden)' : 'dinonaktifkan (disembunyikan)');

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "All website features have been successfully {$actionText}."
                : "Semua fitur website berhasil {$actionText}.",
        ]);
    }
}
