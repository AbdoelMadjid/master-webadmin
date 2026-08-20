<?php

namespace App\Services;

use App\Models\AppSupport\ThemeFrontpage;
use App\Models\AppSupport\AppProfil;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class WebsiteTemplateService
{
    /**
     * Cached instance of active theme model
     */
    protected static ?ThemeFrontpage $activeTheme = null;

    /**
     * Get the active ThemeFrontpage model instance, or null if none registered/active
     */
    public static function getActiveTheme(): ?ThemeFrontpage
    {
        if (static::$activeTheme === null) {
            try {
                if (Schema::hasTable('theme_frontpages')) {
                    static::$activeTheme = ThemeFrontpage::getActiveTheme();
                }
            } catch (\Throwable $e) {
                static::$activeTheme = null;
            }
        }

        return static::$activeTheme;
    }

    /**
     * Get active theme slug
     */
    public static function getActiveSlug(): string
    {
        $activeTheme = static::getActiveTheme();
        return $activeTheme ? $activeTheme->slug : 'default';
    }

    /**
     * Resolve frontpage view with automatic fallback cascade:
     * 1. {activeTheme->view_path}.{page} or theme.{active_slug}.{page}
     * 2. theme.default.{page}
     * 3. theme.default.home-page
     */
    public static function resolveView(string $page = 'home-page'): string
    {
        $activeTheme = static::getActiveTheme();

        if ($activeTheme) {
            // Check direct view_path column (e.g., "theme.default" or "theme.elegant")
            if (!empty($activeTheme->view_path)) {
                $customView = rtrim($activeTheme->view_path, '.') . '.' . $page;
                if (View::exists($customView)) {
                    return $customView;
                }
            }

            // Check slug fallback (e.g., "theme.elegant.home-page")
            $slugView = "theme.{$activeTheme->slug}.{$page}";
            if (View::exists($slugView)) {
                return $slugView;
            }
        }

        // Fallback 1: theme.default.{page}
        $defaultView = "theme.default.{$page}";
        if (View::exists($defaultView)) {
            return $defaultView;
        }

        // Fallback 2: theme.default.home-page
        return 'theme.default.home-page';
    }

    /**
     * Resolve auth view with automatic fallback cascade:
     * 1. auth.theme.{active_slug}.{page} or auth.{activeTheme->view_path}.{page}
     * 2. auth.theme.default.{page}
     * 3. auth.theme.default.login
     */
    public static function resolveAuthView(string $page = 'login'): string
    {
        $activeTheme = static::getActiveTheme();
        $slug = $activeTheme ? $activeTheme->slug : 'default';

        // Check auth.theme.{slug}.{page}
        $themeAuthView = "auth.theme.{$slug}.{$page}";
        if (View::exists($themeAuthView)) {
            return $themeAuthView;
        }

        if ($activeTheme && !empty($activeTheme->view_path)) {
            $pathAuthView = "auth." . rtrim($activeTheme->view_path, '.') . ".{$page}";
            if (View::exists($pathAuthView)) {
                return $pathAuthView;
            }
        }

        // Fallback 1: auth.theme.default.{page}
        $defaultAuthView = "auth.theme.default.{$page}";
        if (View::exists($defaultAuthView)) {
            return $defaultAuthView;
        }

        // Fallback 2: auth.theme.default.login
        return 'auth.theme.default.login';
    }

    /**
     * Resolve static template assets with fallback order:
     * 1. public/assets/templates/{active_slug}/$path
     * 2. public/assets/templates/default/$path
     * 3. public/assets/$path
     */
    public static function asset(string $path, ?string $templateSlug = null): string
    {
        $slug = $templateSlug ?? static::getActiveSlug();
        $path = ltrim($path, '/');

        // Strip redundant leading public/ or theme/{slug}/ prefixes if present
        $path = preg_replace('/^(public\/)?(theme\/[^\/]+\/)?/', '', $path);

        // 1. Direct theme folder (e.g., public/theme/default/css/style.bundle.css)
        $themeAssetPath = "theme/{$slug}/{$path}";
        if (file_exists(public_path($themeAssetPath))) {
            return asset($themeAssetPath);
        }

        // 2. Default theme folder fallback (e.g., public/theme/default/...)
        $defaultThemePath = "theme/default/{$path}";
        if (file_exists(public_path($defaultThemePath))) {
            return asset($defaultThemePath);
        }

        // 3. Specific template asset directory fallback
        $templateAssetPath = "assets/templates/{$slug}/{$path}";
        if (file_exists(public_path($templateAssetPath))) {
            return asset($templateAssetPath);
        }

        // 4. Fallback to public assets root path
        if (file_exists(public_path("assets/{$path}"))) {
            return asset("assets/{$path}");
        }

        return asset($path);
    }

    /**
     * Get active ThemeConfig model instance
     */
    public static function getActiveConfig()
    {
        $activeTheme = static::getActiveTheme();
        return $activeTheme ? $activeTheme->config : null;
    }

    /**
     * Get standardized website view data bundle for public pages
     */
    public static function getWebsiteViewData(): array
    {
        $webProfile = null;
        try {
            if (Schema::hasTable('app_profils')) {
                $webProfile = AppProfil::active()->first() ?? AppProfil::first();
            }
        } catch (\Throwable $e) {
            $webProfile = null;
        }

        $activeTheme = static::getActiveTheme();
        $themeConfig = $activeTheme ? $activeTheme->config : null;

        return [
            'activeTheme' => $activeTheme,
            'webProfile' => $webProfile,
            'themeConfig' => $themeConfig,
        ];
    }

    /**
     * Resolve feature view partial name (e.g. "_how-it-works" or "how-it-works")
     * into a valid view path cascade:
     * 1. {activeTheme->view_path}.features._{feature}
     * 2. theme.{slug}.features._{feature}
     * 3. theme.default.features._{feature}
     */
    public static function resolveFeatureView(string $featureFile, ?ThemeFrontpage $theme = null): ?string
    {
        $featureFile = trim($featureFile);
        if (empty($featureFile)) {
            return null;
        }

        // Clean filename, stripping extension
        $featureFile = preg_replace('/\.blade\.php$/', '', $featureFile);
        $featureName = ltrim($featureFile, '_');
        $fileWithUnderscore = '_' . $featureName;

        $targetTheme = $theme ?? static::getActiveTheme();
        $slug = $targetTheme ? $targetTheme->slug : static::getActiveSlug();

        // 1. Direct view_path check (e.g., "theme.default.features._how-it-works")
        if ($targetTheme && !empty($targetTheme->view_path)) {
            $viewPath = rtrim($targetTheme->view_path, '.') . '.features.' . $fileWithUnderscore;
            if (View::exists($viewPath)) {
                return $viewPath;
            }
            $viewPathNoUnderscore = rtrim($targetTheme->view_path, '.') . '.features.' . $featureName;
            if (View::exists($viewPathNoUnderscore)) {
                return $viewPathNoUnderscore;
            }
        }

        // 2. Slug check (e.g., "theme.elegant.features._how-it-works")
        $slugView = "theme.{$slug}.features.{$fileWithUnderscore}";
        if (View::exists($slugView)) {
            return $slugView;
        }

        // 3. Fallback to default theme features (e.g., "theme.default.features._how-it-works")
        $defaultView = "theme.default.features.{$fileWithUnderscore}";
        if (View::exists($defaultView)) {
            return $defaultView;
        }

        return null;
    }

    /**
     * Scan resources/views/theme/{slug}/features/ and return array of available feature files
     */
    public static function getAvailableFeatureFiles(?string $themeSlug = null): array
    {
        $slug = $themeSlug ?? static::getActiveSlug();
        $featuresDir = resource_path("views/theme/{$slug}/features");

        if (!file_exists($featuresDir) || !is_dir($featuresDir)) {
            $featuresDir = resource_path("views/theme/default/features");
        }

        if (!file_exists($featuresDir) || !is_dir($featuresDir)) {
            return [];
        }

        $files = glob($featuresDir . '/*.blade.php');
        $result = [];

        foreach ($files as $file) {
            $basename = basename($file, '.blade.php');
            $result[] = $basename;
        }

        return $result;
    }
}
