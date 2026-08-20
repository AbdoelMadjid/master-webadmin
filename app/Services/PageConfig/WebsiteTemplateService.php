<?php

namespace App\Services\PageConfig;

use App\Models\PageConfig\WebsiteProfile;
use App\Models\PageConfig\WebFeature;
use App\Models\PageConfig\MenuWebsite\TopNavigation;
use App\Models\PageConfig\MenuWebsite\MainNavigation;
use App\Models\PageConfig\MenuWebsite\FooterNavigation;
use App\Models\PageContent\SlideBanner;
use App\Models\PageContent\CallToAction;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class WebsiteTemplateService
{
    /**
     * Get active template slug from WebsiteProfile or fallback config
     */
    public static function getActiveTemplateSlug(): string
    {
        try {
            $activeTheme = \App\Models\AppSupport\ThemeFrontpage::getActiveTheme();
            if ($activeTheme && !empty($activeTheme->slug)) {
                return $activeTheme->slug;
            }
            $profile = WebsiteProfile::getActiveProfile();
            if ($profile && !empty($profile->template_slug)) {
                return $profile->template_slug;
            }
        } catch (\Throwable $e) {
            Log::warning('Failed to load active website template slug: ' . $e->getMessage());
        }

        return 'default';
    }

    /**
     * Get list of all registered templates with active status
     */
    public static function getAvailableTemplates(): array
    {
        $activeSlug = static::getActiveTemplateSlug();
        return [
            'default' => [
                'key' => 'default',
                'name' => 'Metronic 8 Landing (Standard Default)',
                'name_id' => 'Metronic 8 Landing (Standar Bawaan)',
                'is_active' => ($activeSlug === 'default'),
            ],
        ];
    }

    /**
     * Resolve Blade view path for the requested page name with fallback mechanism
     */
    public static function resolveView(string $pageName): string
    {
        $activeSlug = static::getActiveTemplateSlug();

        // 1. Check theme folder (e.g. theme.default.home-page)
        $themeViewPath = "theme.{$activeSlug}.{$pageName}";
        if (View::exists($themeViewPath)) {
            return $themeViewPath;
        }

        // 2. Fallback to default theme
        $defaultThemePath = "theme.default.{$pageName}";
        if (View::exists($defaultThemePath)) {
            return $defaultThemePath;
        }

        return $defaultThemePath;
    }

    /**
     * Resolve public asset URL for the active website template with fallback
     */
    public static function asset(string $path, ?string $templateSlug = null): string
    {
        $slug = $templateSlug ?? static::getActiveTemplateSlug();
        $cleanPath = ltrim($path, '/');

        // 1. Check template-specific asset folder
        $templateAssetRelative = "assets/templates/{$slug}/{$cleanPath}";
        if (file_exists(public_path($templateAssetRelative))) {
            return asset($templateAssetRelative);
        }

        // 2. Check default standard template asset folder
        $defaultSlug = config('website_templates.default', 'default');
        if ($slug !== $defaultSlug) {
            $defaultAssetRelative = "assets/templates/{$defaultSlug}/{$cleanPath}";
            if (file_exists(public_path($defaultAssetRelative))) {
                return asset($defaultAssetRelative);
            }
        }

        // 3. Fallback to global asset folder (e.g. public/assets/...)
        return asset("assets/{$cleanPath}");
    }

    /**
     * Get aggregated website data payload for public website components
     */
    public static function getWebsiteViewData(): array
    {
        $webProfile = WebsiteProfile::getActiveProfile();

        $topNavs = class_exists(TopNavigation::class) && method_exists(TopNavigation::class, 'getTree')
            ? TopNavigation::getTree()
            : collect([]);

        $mainNavs = class_exists(MainNavigation::class) && method_exists(MainNavigation::class, 'getTree')
            ? MainNavigation::getTree()
            : collect([]);

        $footerNavs = class_exists(FooterNavigation::class) && method_exists(FooterNavigation::class, 'getGroupedFooterNavigations')
            ? FooterNavigation::getGroupedFooterNavigations()
            : collect([]);

        $slideBanners = class_exists(SlideBanner::class) && method_exists(SlideBanner::class, 'getActiveBanners')
            ? SlideBanner::getActiveBanners()
            : collect([]);

        $callToActions = class_exists(CallToAction::class) && method_exists(CallToAction::class, 'getActiveCTAs')
            ? CallToAction::getActiveCTAs()
            : collect([]);

        $webFeatures = class_exists(WebFeature::class)
            ? WebFeature::where('is_active', true)->pluck('is_active', 'feature_key')->toArray()
            : [];

        return compact(
            'webProfile',
            'topNavs',
            'mainNavs',
            'footerNavs',
            'slideBanners',
            'callToActions',
            'webFeatures'
        );
    }
}
