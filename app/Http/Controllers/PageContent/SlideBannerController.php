<?php

namespace App\Http\Controllers\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageContent\SlideBannerRequest;
use App\Models\PageContent\SlideBanner;
use Illuminate\Http\Request;

class SlideBannerController extends Controller
{
    public function index()
    {
        $banners = SlideBanner::ordered()->get();
        $totalBanners = $banners->count();
        $activeBanners = $banners->where('is_active', true)->count();
        $inactiveBanners = $banners->where('is_active', false)->count();

        return view('pages.pagecontent.slide-banner', compact(
            'banners',
            'totalBanners',
            'activeBanners',
            'inactiveBanners'
        ));
    }

    public function store(SlideBannerRequest $request)
    {
        $validated = $request->validated();

        if (!isset($validated['order']) || $validated['order'] === null) {
            $maxOrder = SlideBanner::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        $validated['is_active'] = $request->has('is_active') ? (bool) $request->is_active : true;

        $banner = SlideBanner::create($validated);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Homepage slide banner created successfully.'
                : 'Slide banner beranda berhasil ditambahkan.',
            'data' => $banner,
        ]);
    }

    public function update(SlideBannerRequest $request, $id)
    {
        $banner = SlideBanner::findOrFail($id);
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active') ? (bool) $request->is_active : $banner->is_active;

        $banner->update($validated);

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? 'Homepage slide banner updated successfully.'
                : 'Slide banner beranda berhasil diperbarui.',
            'data' => $banner,
        ]);
    }

    public function destroy($id)
    {
        $banner = SlideBanner::findOrFail($id);
        $title = $banner->title_highlight;

        $banner->delete();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Slide banner '{$title}' deleted successfully."
                : "Slide banner '{$title}' berhasil dihapus.",
        ]);
    }

    public function toggleStatus($id)
    {
        $banner = SlideBanner::findOrFail($id);
        $banner->is_active = !$banner->is_active;
        $banner->save();

        $statusText = $banner->is_active
            ? (app()->getLocale() == 'en' ? 'enabled (visible)' : 'diaktifkan (ditampilkan)')
            : (app()->getLocale() == 'en' ? 'disabled (hidden)' : 'dinonaktifkan (disembunyikan)');

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Slide banner status successfully {$statusText}."
                : "Status slide banner berhasil {$statusText}.",
            'is_active' => $banner->is_active,
        ]);
    }
}
