<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\ThemeFrontpage;
use App\Http\Requests\AppSupport\ThemeFrontpageRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ThemeFrontpageController extends Controller
{
    /**
     * Display a listing of frontpage themes and live preview.
     */
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'theme-list');
        $allowedTabs = ['theme-list', 'preview'];
        if (!in_array($activeTab, $allowedTabs, true)) {
            $activeTab = 'theme-list';
        }

        $themes = ThemeFrontpage::orderBy('is_active', 'desc')->orderBy('name', 'asc')->get();
        $activeTheme = ThemeFrontpage::getActiveTheme() ?? $themes->first();

        return view('pages.appsupport.theme-frontpage', compact('activeTab', 'themes', 'activeTheme'));
    }

    /**
     * Activate the selected frontpage theme.
     */
    public function activate($id): JsonResponse
    {
        $theme = ThemeFrontpage::findOrFail($id);
        $theme->setAsActive();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Theme '{$theme->name}' successfully set as active frontpage theme."
                : "Tema '{$theme->name}' berhasil diaktifkan sebagai tema utama beranda.",
        ]);
    }

    /**
     * Store a newly created theme in storage.
     */
    public function store(ThemeFrontpageRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $theme = ThemeFrontpage::create($validated);

        if (!empty($validated['is_active'])) {
            $theme->setAsActive();
        }

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Theme '{$theme->name}' successfully added."
                : "Tema '{$theme->name}' berhasil ditambahkan.",
        ]);
    }

    /**
     * Update the specified theme in storage.
     */
    public function update(ThemeFrontpageRequest $request, $id): JsonResponse
    {
        $theme = ThemeFrontpage::findOrFail($id);
        $validated = $request->validated();

        $theme->update($validated);

        if (!empty($validated['is_active'])) {
            $theme->setAsActive();
        }

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Theme '{$theme->name}' successfully updated."
                : "Tema '{$theme->name}' berhasil diperbarui.",
        ]);
    }

    /**
     * Remove the specified theme from storage.
     */
    public function destroy($id): JsonResponse
    {
        $theme = ThemeFrontpage::findOrFail($id);

        if ($theme->is_active) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en'
                    ? "Cannot delete active theme. Please activate another theme first."
                    : "Tidak dapat menghapus tema yang sedang aktif. Silakan aktifkan tema lain terlebih dahulu.",
            ], 422);
        }

        $theme->delete();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Theme '{$theme->name}' successfully deleted."
                : "Tema '{$theme->name}' berhasil dihapus.",
        ]);
    }
}