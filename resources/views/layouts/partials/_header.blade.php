<!--begin::Header-->
<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
    data-kt-sticky-animation="false">
    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
        id="kt_app_header_container">
        {{--  <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span
                        class="path2"></span></i>
            </div>
        </div>
        <!--end::Sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="?page=index" class="d-lg-none">
                <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
            </a>
        </div>
        <!--end::Mobile logo--> --}}
        @if (!empty($LightHeader) && $LightHeader === true)
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                <a href="{{ route('homepage') }}">
                    <img alt="Logo" src="assets/media/logos/default.svg"
                        class="h-20px h-lg-30px app-sidebar-logo-default theme-light-show" />
                </a>
            </div>
        @elseif (!empty($DarkHeader) && $DarkHeader === true)
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                <a href="{{ route('homepage') }}">
                    <img alt="Logo" src="assets/media/logos/default-dark.svg"
                        class="h-20px h-lg-30px app-sidebar-logo-default" />
                </a>
            </div>
        @else
            <!--begin::Sidebar mobile toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
            </div>
            <!--end::Sidebar mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="?page=index" class="d-lg-none">
                    <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
                </a>
            </div>
        @endif
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--layout-partial:layout/partials/header/_menu/_menu.html-->
            @include('layouts.partials.header._menu._menu')
            <!--layout-partial:layout/partials/header/_navbar.html-->
            @include('layouts.partials.header._navbar')
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
