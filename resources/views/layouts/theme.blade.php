<!doctype html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.5
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
@php
    $activeAppProfil = \App\Models\AppSupport\AppProfil::active()->first() ?? \App\Models\AppSupport\AppProfil::first();
    $appName = $activeAppProfil?->nama_aplikasi ?? 'Master WebAdmin';
    $appDescription = $activeAppProfil?->deskripsi ?: $appName;
    $appFaviconUrl = $activeAppProfil?->favicon_url ?: template_asset('images/logos/favicon.ico');
    $activeThemeSlug = \App\Services\WebsiteTemplateService::getActiveSlug();
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <title>
        {{ $appName }} - {{ $appDescription }}
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="{{ $appDescription }}" />
    <meta name="keywords" content="{{ $appName }}, {{ $appDescription }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $appName }}" />
    <meta property="og:description" content="{{ $appDescription }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="{{ $appName }}" />
    <link rel="canonical" href="{{ url('/') }}" />
    <link rel="shortcut icon" href="{{ $appFaviconUrl }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ template_asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ template_asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-theme-slug="{{ $activeThemeSlug }}" class="bg-body position-relative app-blank theme-{{ $activeThemeSlug }}">
    <!--begin::Theme mode setup on page load-->
    @include('layouts.partials.themes._script-theme-mode')
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        @include('layouts.partials.themes._landing-header')
        <!--end::Header Section-->
        @yield('content')
        <!--begin::Footer Section-->
        @include('layouts.partials.themes._footer')
        <!--end::Footer Section-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "{{ template_asset('images/logos/') }}";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ template_asset('js/plugins.bundle.js') }}"></script>
    <script src="{{ template_asset('js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ template_asset('js/fslightbox.bundle.js') }}"></script>
    <script src="{{ template_asset('js/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ template_asset('js/landing.js') }}"></script>
    <script src="{{ template_asset('js/pricing-general.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
