<?php

namespace App\Http\Controllers\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageContent\SlideBannerRequest;
use App\Models\PageContent\SlideBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideBannerController extends Controller
{
    public function index()
    {
        if (!auth()->user()->can('read pagecontent/slide-banner') && !auth()->user()->hasRole('Super Admin')) {
            abort(403, app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk halaman ini.');
        }

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
        if (!auth()->user()->can('create pagecontent/slide-banner') && !auth()->user()->hasRole('Super Admin')) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk menambahkan data.',
            ], 403);
        }

        $validated = $request->validated();

        // Handle File Upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('pagecontent/slide-banner', 'public');
            $validated['image_url'] = 'storage/' . $path;
        }

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
        if (!auth()->user()->can('update pagecontent/slide-banner') && !auth()->user()->hasRole('Super Admin')) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk memperbarui data.',
            ], 403);
        }

        $banner = SlideBanner::findOrFail($id);
        $validated = $request->validated();

        // Handle File Upload & Old File Cleanup
        if ($request->hasFile('image')) {
            if ($banner->image_url && str_starts_with($banner->image_url, 'storage/')) {
                $oldPath = str_replace('storage/', '', $banner->image_url);
                Storage::disk('public')->delete($oldPath);
            }
            $path = $request->file('image')->store('pagecontent/slide-banner', 'public');
            $validated['image_url'] = 'storage/' . $path;
        }

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
        if (!auth()->user()->can('delete pagecontent/slide-banner') && !auth()->user()->hasRole('Super Admin')) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk menghapus data.',
            ], 403);
        }

        $banner = SlideBanner::findOrFail($id);
        $title = $banner->title_highlight;

        // Clean up uploaded image file from storage
        if ($banner->image_url && str_starts_with($banner->image_url, 'storage/')) {
            $oldPath = str_replace('storage/', '', $banner->image_url);
            Storage::disk('public')->delete($oldPath);
        }

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
        if (!auth()->user()->can('update pagecontent/slide-banner') && !auth()->user()->hasRole('Super Admin')) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Unauthorized action.' : 'Anda tidak memiliki hak akses untuk mengubah status.',
            ], 403);
        }

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
