<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\ThemeFrontpage;
use App\Models\AppSupport\ThemeConfig;
use App\Http\Requests\AppSupport\ThemeFrontpageRequest;
use App\Http\Requests\AppSupport\ThemeConfigRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ThemeFrontpageController extends Controller
{
    /**
     * Display a listing of frontpage themes, config management, and live preview.
     */
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'theme-list');
        $allowedTabs = ['theme-list', 'preview', 'theme-config'];
        if (!in_array($activeTab, $allowedTabs, true)) {
            $activeTab = 'theme-list';
        }

        $themes = ThemeFrontpage::with('config')->orderBy('is_active', 'desc')->orderBy('name', 'asc')->get();
        $activeTheme = ThemeFrontpage::getActiveTheme() ?? $themes->first();

        $selectedThemeId = $request->query('theme_id', $activeTheme?->id);
        $selectedTheme = $themes->firstWhere('id', $selectedThemeId) ?? $activeTheme;
        $selectedConfig = $selectedTheme?->config ?? new ThemeConfig();

        return view('pages.appsupport.theme-frontpage', compact(
            'activeTab',
            'themes',
            'activeTheme',
            'selectedTheme',
            'selectedConfig'
        ));
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

    /**
     * Update theme configurations (logos, header menu, footer menu).
     */
    public function updateConfig(ThemeConfigRequest $request, $id): JsonResponse
    {
        $theme = ThemeFrontpage::findOrFail($id);
        $validated = $request->validated();

        $config = ThemeConfig::firstOrNew(['theme_frontpage_id' => $theme->id]);

        // Handle Default Logo Upload
        if ($request->hasFile('logo_default_file')) {
            $path = $request->file('logo_default_file')->store('themes/logos', 'public');
            $config->logo_default = $path;
        } elseif (array_key_exists('logo_default', $validated)) {
            $config->logo_default = $validated['logo_default'];
        }

        // Handle Sticky Logo Upload
        if ($request->hasFile('logo_sticky_file')) {
            $path = $request->file('logo_sticky_file')->store('themes/logos', 'public');
            $config->logo_sticky = $path;
        } elseif (array_key_exists('logo_sticky', $validated)) {
            $config->logo_sticky = $validated['logo_sticky'];
        }

        // Handle Footer Logo Upload
        if ($request->hasFile('logo_footer_file')) {
            $path = $request->file('logo_footer_file')->store('themes/logos', 'public');
            $config->logo_footer = $path;
        } elseif (array_key_exists('logo_footer', $validated)) {
            $config->logo_footer = $validated['logo_footer'];
        }

        // Handle Header & Footer Menus
        if (isset($validated['header_menu'])) {
            $config->header_menu = array_values($validated['header_menu']);
        }
        if (isset($validated['footer_menu'])) {
            $config->footer_menu = array_values($validated['footer_menu']);
        }

        $config->save();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Configurations for theme '{$theme->name}' successfully updated."
                : "Konfigurasi tema '{$theme->name}' berhasil disimpan.",
        ]);
    }
}