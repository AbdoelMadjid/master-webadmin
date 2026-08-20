<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\ThemeFrontpage;
use App\Models\AppSupport\ThemeConfig;
use App\Http\Requests\AppSupport\ThemeFrontpageRequest;
use App\Http\Requests\AppSupport\ThemeConfigRequest;
use App\Http\Requests\AppSupport\ThemeFeatureEditorRequest;
use App\Services\WebsiteTemplateService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

class ThemeFrontpageController extends Controller
{
    /**
     * Display a listing of frontpage themes, config management, live preview, and feature editor.
     */
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'theme-list');
        $allowedTabs = ['theme-list', 'preview', 'theme-config', 'feature-editor'];
        if (!in_array($activeTab, $allowedTabs, true)) {
            $activeTab = 'theme-list';
        }

        $themes = ThemeFrontpage::with('config')->orderBy('is_active', 'desc')->orderBy('name', 'asc')->get();
        $activeTheme = ThemeFrontpage::getActiveTheme() ?? $themes->first();

        $selectedThemeId = $request->query('theme_id', $activeTheme?->id);
        $selectedTheme = $themes->firstWhere('id', $selectedThemeId) ?? $activeTheme;
        $selectedConfig = $selectedTheme?->config ?? new ThemeConfig();

        $availableFeatureFiles = WebsiteTemplateService::getAvailableFeatureFiles($selectedTheme?->slug);

        return view('pages.appsupport.theme-frontpage', compact(
            'activeTab',
            'themes',
            'activeTheme',
            'selectedTheme',
            'selectedConfig',
            'availableFeatureFiles'
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

    /**
     * Helper to resolve clean path for feature view file
     */
    protected function resolveFeatureFilePath(?string $themeSlug, string $featureFile): ?string
    {
        $slug = preg_replace('/[^a-zA-Z0-9_\-]/', '', $themeSlug ?: 'default');
        $fileClean = preg_replace('/\.blade\.php$/', '', trim($featureFile));
        $fileClean = preg_replace('/[^a-zA-Z0-9_\-]/', '', $fileClean);

        if (empty($fileClean)) {
            return null;
        }

        $baseDir = resource_path("views/theme/{$slug}/features");
        if (!File::exists($baseDir) || !File::isDirectory($baseDir)) {
            $baseDir = resource_path("views/theme/default/features");
            $slug = 'default';
        }

        $possibleNames = [$fileClean, '_' . ltrim($fileClean, '_')];
        foreach ($possibleNames as $name) {
            $filePath = $baseDir . '/' . $name . '.blade.php';
            if (File::exists($filePath)) {
                return realpath($filePath) ?: $filePath;
            }
        }

        return $baseDir . '/_' . ltrim($fileClean, '_') . '.blade.php';
    }

    /**
     * Read feature file content for Ace/CodeMirror editor
     */
    public function getFeatureContent(Request $request): JsonResponse
    {
        $themeId = $request->query('theme_id');
        $featureFile = $request->query('feature_file');

        if (empty($featureFile)) {
            return response()->json(['success' => false, 'message' => 'Feature file parameter is required.'], 422);
        }

        $theme = $themeId ? ThemeFrontpage::find($themeId) : ThemeFrontpage::getActiveTheme();
        $slug = $theme ? $theme->slug : 'default';

        $filePath = $this->resolveFeatureFilePath($slug, $featureFile);
        if (!$filePath || !File::exists($filePath)) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Feature file not found.' : 'File feature tidak ditemukan.',
            ], 404);
        }

        $content = File::get($filePath);
        $cleanFileName = basename($filePath);
        $backupPath = storage_path("app/theme_backups/{$slug}/{$cleanFileName}");
        $hasBackup = File::exists($backupPath);

        return response()->json([
            'success' => true,
            'file_name' => $cleanFileName,
            'content' => $content,
            'has_backup' => $hasBackup,
        ]);
    }

    /**
     * Update feature file content with automatic backup snapshot
     */
    public function updateFeatureContent(ThemeFeatureEditorRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $theme = !empty($validated['theme_id']) ? ThemeFrontpage::find($validated['theme_id']) : ThemeFrontpage::getActiveTheme();
        $slug = $theme ? $theme->slug : 'default';

        $filePath = $this->resolveFeatureFilePath($slug, $validated['feature_file']);
        if (!$filePath) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Invalid feature file path.' : 'Path file feature tidak valid.',
            ], 422);
        }

        // Security check: ensure target file is strictly inside resources/views/theme
        $themeViewsDir = realpath(resource_path('views/theme'));
        if ($themeViewsDir && !str_starts_with(realpath(dirname($filePath)) ?: dirname($filePath), $themeViewsDir)) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'Access denied: Path out of bounds.' : 'Akses ditolak: Path di luar batas.',
            ], 403);
        }

        // Ensure parent directory exists
        $dir = dirname($filePath);
        if (!File::exists($dir)) {
            File::makeDirectory($dir, 0755, true);
        }

        // Generate automatic backup snapshot if current file exists
        if (File::exists($filePath)) {
            $cleanFileName = basename($filePath);
            $backupDir = storage_path("app/theme_backups/{$slug}");
            if (!File::exists($backupDir)) {
                File::makeDirectory($backupDir, 0755, true);
            }
            File::copy($filePath, $backupDir . '/' . $cleanFileName);
        }

        // Save new content
        File::put($filePath, $validated['content']);

        // Flush cache
        WebsiteTemplateService::clearCache();

        return response()->json([
            'success' => true,
            'message' => app()->getLocale() == 'en'
                ? "Feature file '" . basename($filePath) . "' updated successfully."
                : "File feature '" . basename($filePath) . "' berhasil diperbarui.",
        ]);
    }

    /**
     * Restore feature file from automatic backup snapshot
     */
    public function restoreFeatureContent(Request $request): JsonResponse
    {
        $themeId = $request->input('theme_id');
        $featureFile = $request->input('feature_file');

        $theme = $themeId ? ThemeFrontpage::find($themeId) : ThemeFrontpage::getActiveTheme();
        $slug = $theme ? $theme->slug : 'default';

        $filePath = $this->resolveFeatureFilePath($slug, $featureFile);
        if (!$filePath) {
            return response()->json(['success' => false, 'message' => 'Invalid feature file path.'], 422);
        }

        $cleanFileName = basename($filePath);
        $backupPath = storage_path("app/theme_backups/{$slug}/{$cleanFileName}");

        if (!File::exists($backupPath)) {
            return response()->json([
                'success' => false,
                'message' => app()->getLocale() == 'en' ? 'No backup snapshot available for this file.' : 'Tidak ada backup snapshot untuk file ini.',
            ], 404);
        }

        $backupContent = File::get($backupPath);
        File::put($filePath, $backupContent);

        // Flush cache
        WebsiteTemplateService::clearCache();

        return response()->json([
            'success' => true,
            'content' => $backupContent,
            'message' => app()->getLocale() == 'en'
                ? "Feature file '{$cleanFileName}' restored from backup snapshot."
                : "File feature '{$cleanFileName}' berhasil dipulihkan dari backup snapshot.",
        ]);
    }
}