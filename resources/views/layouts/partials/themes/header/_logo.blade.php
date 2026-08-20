@php
    $activeTheme = \App\Services\WebsiteTemplateService::getActiveTheme();
    $themeConfig = $activeTheme?->config;

    $logoDefaultUrl = $themeConfig?->logo_default_url ?? template_asset('images/logos/landing.svg');
    $logoStickyUrl = $themeConfig?->logo_sticky_url ?? template_asset('images/logos/landing-dark.svg');
@endphp
<div class="d-flex align-items-center flex-equal">
    <!--begin::Mobile menu toggle-->
    <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
        <i class="ki-duotone ki-abstract-14 fs-2hx">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
    <!--end::Mobile menu toggle-->
    <!--begin::Logo image-->
    <a href="{{ url('/') }}">
        <img alt="Logo" src="{{ $logoDefaultUrl }}" class="logo-default h-25px h-lg-30px" />
        <img alt="Logo" src="{{ $logoStickyUrl }}" class="logo-sticky h-20px h-lg-25px" />
    </a>
    <!--end::Logo image-->
</div>
