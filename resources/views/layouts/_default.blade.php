<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

        @if (
            (!empty($CorpLayout) && $CorpLayout === true) ||
                (!empty($FancyLayout) && $FancyLayout === true) ||
                (!empty($CreativeLayout) && $CreativeLayout === true) ||
                (!empty($EmailLayout) && $EmailLayout === true) ||
                (!empty($OverlayLayout) && $OverlayLayout === true))
            @yield('content')
        @else
            <!--layout-partial:layout/partials/_header.html-->
            @include('layouts.partials._header')
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                @if (!empty($LightHeader) && $LightHeader === true)
                @elseif (!empty($DarkHeader) && $DarkHeader === true)
                @else
                    <!--layout-partial:layout/partials/_sidebar.html-->
                    @include('layouts.partials._sidebar')
                @endif
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--layout-partial:layout/partials/_toolbar.html-->
                        @yield('toolbar')
                        <!--layout-partial:layout/partials/_content.html-->
                        @yield('content')
                    </div>
                    <!--end::Content wrapper-->
                    <!--layout-partial:layout/partials/_footer.html-->
                    @include('layouts.partials._footer')
                </div>
                <!--end:::Main-->
                @yield('kt_app_aside')
            </div>
        @endif
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--layout-partial:partials/_drawers.html-->
@include('partials._drawers')





