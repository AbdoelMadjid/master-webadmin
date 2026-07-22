<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.3.1
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <base href="{{ url('/') }}/">
    <title>{{ trim($__env->yieldContent('title')) ?: getPageTitle() }} - Metronic 832</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description"
        content="
            The most advanced Tailwind CSS & Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        " />
    <meta name="keywords"
        content="
            tailwind, tailwindcss, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="http://preview.keenthemes.com?page=index" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    {{--     
        <link href="{{ $theme_asset_base }}/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{ $theme_asset_base }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> 
    --}}
    @yield('styles')
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        @media (max-width: 991.98px) {
            #kt_app_body[data-kt-app-toolbar-fixed-mobile="false"] #kt_app_toolbar {
                position: relative !important;
                top: auto !important;
            }

            #kt_app_body[data-kt-app-toolbar-fixed-mobile="false"] #kt_app_content {
                padding-top: 1rem !important;
            }
        }
    </style>
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->
@php
    // tentukan layout
    $layout = 'dark-sidebar'; // default
    if (!empty($LightSidebar) && $LightSidebar === true) {
        $layout = 'light-sidebar';
    } elseif (!empty($withAside) && $withAside === true) {
        $layout = 'dark-sidebar aside';
    } elseif (!empty($LightHeader) && $LightHeader === true) {
        $layout = 'light-header';
    } elseif (!empty($DarkHeader) && $DarkHeader === true) {
        $layout = 'dark-header';
    } elseif (!empty($CorpLayout) && $CorpLayout === true) {
        $layout = 'corp';
    } elseif (!empty($FancyLayout) && $FancyLayout === true) {
        $layout = 'fancy';
    } elseif (!empty($CreativeLayout) && $CreativeLayout === true) {
        $layout = 'creative';
    } elseif (!empty($OverlayLayout) && $OverlayLayout === true) {
        $layout = 'overlay';
    } elseif (!empty($EmailLayout) && $EmailLayout === true) {
        $layout = 'emaillayout';
    } elseif (!empty($GeneralAuth) && $GeneralAuth === true) {
        $layout = 'generalauth';
    }
@endphp

<body
    id="{{ in_array($layout, ['corp', 'fancy', 'creative', 'overlay', 'emaillayout', 'generalauth']) ? 'kt_body' : 'kt_app_body' }}"
    {{-- hanya untuk layout sidebar/header --}}
    @if (!in_array($layout, ['corp', 'fancy', 'creative', 'overlay'])) data-kt-app-layout="{{ str_contains($layout, 'aside') ? 'dark-sidebar' : $layout }}"
        data-kt-app-header-fixed="true"
        data-kt-app-toolbar-enabled="true"
        @if ($layout === 'light-sidebar' || str_contains($layout, 'dark-sidebar'))
            data-kt-app-header-fixed="true"
            data-kt-app-header-fixed-mobile="true"
            data-kt-app-sidebar-enabled="true"
            data-kt-app-sidebar-fixed="true"
            data-kt-app-sidebar-hoverable="true"
            data-kt-app-sidebar-push-header="true"
            data-kt-app-sidebar-push-toolbar="true"
            data-kt-app-sidebar-push-footer="true"
            data-kt-app-toolbar-enabled="true"
            data-kt-app-toolbar-fixed="true"
            data-kt-app-toolbar-fixed-mobile="false" @endif
    @if ($layout === 'dark-sidebar aside') data-kt-app-aside-enabled="true"
            data-kt-app-aside-fixed="true"
            data-kt-app-aside-push-footer="true" @endif
    @endif

    class="
        @if (in_array($layout, ['corp', 'fancy', 'emaillayout'])) app-blank
        @elseif (in_array($layout, ['creative', 'overlay']))
            app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat
        @elseif (in_array($layout, ['generalauth']))
            app-blank bgi-size-cover bgi-position-center bgi-no-repeat
        @else
            app-default @endif">

    {{--
        <body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
            data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
            data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
            data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"
            data-kt-app-toolbar-enabled="true" data-kt-app-toolbar-fixed="true" data-kt-app-toolbar-fixed-mobile="true"
            class="app-default">
        --}}

    <!--layout-partial:partials/theme-mode/_init.html-->
    @include('partials.theme-mode._init')
    <!--layout-partial:layout/_default.html-->
    @include('layouts._default')
    <!--layout-partial:partials/_scrolltop.html-->
    @include('partials.drawers._engage-drawer')
    <!--layout-partial:partials/_scrolltop.html-->
    @include('partials._scrolltop')

    <!--begin::Modals-->
    @include('partials.modals._global')
    <!--end::Modals-->

    <!--begin::Javascript-->
    {{--  <script>
        var hostUrl = "{{ $theme_asset_base }}/";
    </script> --}}

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    {{-- <script src="{{ $theme_asset_base }}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ $theme_asset_base }}/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ $theme_asset_base }}/js/widgets.bundle.js"></script>
    <script src="{{ $theme_asset_base }}/js/custom/widgets.js"></script>
    <script src="{{ $theme_asset_base }}/js/custom/apps/chat/chat.js"></script>
    <script src="{{ $theme_asset_base }}/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{ $theme_asset_base }}/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{ $theme_asset_base }}/js/custom/utilities/modals/new-target.js"></script>
    <script src="{{ $theme_asset_base }}/js/custom/utilities/modals/users-search.js"></script> --}}
    @yield('scripts')
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
