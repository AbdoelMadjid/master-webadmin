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
            $profile = WebsiteProfile::getActiveProfile();
            if ($profile && !empty($profile->template_slug)) {
                return $profile->template_slug;
            }
        } catch (\Throwable $e) {
            Log::warning('Failed to load active website template slug: ' . $e->getMessage());
        }

        return config('website_templates.default', 'unify-education');
    }

    /**
     * Get list of all registered templates with active status
     */
    public static function getAvailableTemplates(): array
    {
        $activeSlug = static::getActiveTemplateSlug();
        $templates = config('website_templates.templates', []);

        foreach ($templates as $key => &$template) {
            $template['is_active'] = ($key === $activeSlug);
        }

        return $templates;
    }

    /**
     * Resolve Blade view path for the requested page name with fallback mechanism
     */
    public static function resolveView(string $pageName): string
    {
        $activeSlug = static::getActiveTemplateSlug();
        $defaultSlug = config('website_templates.default', 'unify-education');

        $activeViewPath = "website.templates.{$activeSlug}.{$pageName}";
        if (View::exists($activeViewPath)) {
            return $activeViewPath;
        }

        $defaultViewPath = "website.templates.{$defaultSlug}.{$pageName}";
        if (View::exists($defaultViewPath)) {
            return $defaultViewPath;
        }

        // Direct legacy view fallback
        $legacyViewPath = "website.{$pageName}";
        if (View::exists($legacyViewPath)) {
            return $legacyViewPath;
        }

        return $defaultViewPath;
    }

    /**
     * Resolve public asset URL for the active website template with fallback
     */
    public static function asset(string $path, ?string $templateSlug = null): string
    {
        $slug = $templateSlug ?? static::getActiveTemplateSlug();
        $cleanPath = ltrim($path, '/');

        // 1. Check template-specific asset folder (e.g. public/assets/templates/unify-education/...)
        $templateAssetRelative = "assets/templates/{$slug}/{$cleanPath}";
        if (file_exists(public_path($templateAssetRelative))) {
            return asset($templateAssetRelative);
        }

        // 2. Check default standard template asset folder
        $defaultSlug = config('website_templates.default', 'unify-education');
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
