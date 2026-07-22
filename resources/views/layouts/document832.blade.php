<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.3.2
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
    <title>{{ trim($__env->yieldContent('title')) ?: getPageTitle() }} | Documentation 8.3.2 </title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Extended Bootstrap Utilities by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.combase/utilities" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    @yield('styles')
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins-docs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style-docs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');
    </script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body data-bs-spy="scroll" data-bs-target="#kt_sidebar_nav">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="docs-page d-flex flex-row flex-column-fluid">

            @include('layouts.partials.docs._docs-aside')

            <!--begin::Wrapper-->
            <div class="docs-wrapper d-flex flex-column flex-row-fluid" id="kt_docs_wrapper">

                @include('layouts.partials.docs._header-docs')

                @yield('content')

                @include('layouts.partials.docs._footer-docs')

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Engage-->
    <div class="app-engage " id="kt_app_engage">


        <!--begin::Prebuilts toggle-->
        <a href="https://preview.keenthemes.com/metronic8" target="_blank" class="app-engage-btn hover-dark">
            <i class="ki-duotone ki-abstract-41 fs-1 pt-1 mb-2"><span class="path1"></span><span
                    class="path2"></span></i> Preview
        </a>
        <!--end::Prebuilts toggle-->

        <!--begin::Get help-->
        <a href="https://devs.keenthemes.com" target="_blank" class="app-engage-btn hover-primary">
            <i class="ki-duotone ki-like-shapes fs-1 pt-1 mb-2"><span class="path1"></span><span
                    class="path2"></span></i> Get Help
        </a>
        <!--end::Get help-->

        <!--begin::Prebuilts toggle-->
        <a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">
            <i class="ki-duotone ki-basket fs-2 pt-1 mb-2"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span><span class="path4"></span></i> Buy Now
        </a>
        <!--end::Prebuilts toggle-->

    </div>
    <!--end::Engage-->

    <!--begin::Engage modals-->
    <!--end::Engage modals-->


    <!--begin::Javascript-->
    <script>
        var hostUrl = "{{ asset('assets/') }}";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset('assets/js/custom/documentation/search.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    @yield('scripts')

    <script>
        $(document).ready(function() {
            $(document).on('click', 'a[href^="#"]', function(e) {
                var $link = $(this);
                var hash = $link.attr('href');

                if (!hash || hash === '#') {
                    return;
                }

                // Keep Bootstrap component toggles (tabs, collapse, etc.) untouched.
                if ($link.is('[data-bs-toggle], [data-kt-menu-trigger]')) {
                    return;
                }

                var target = $(hash);
                if (!target.length) {
                    return;
                }

                e.preventDefault();

                var headerHeight = $('#kt_docs_header').outerHeight() || 0;
                var top = target.offset().top - headerHeight - 16;

                history.pushState(null, null, window.location.pathname + hash);
                $('html, body').stop(true).animate({
                    scrollTop: Math.max(top, 0)
                }, 500);
            });
        });
    </script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
