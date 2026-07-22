@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Layouts
        @endslot
        @slot('li_2')
            Toolbars
        @endslot
        @slot('action')
            <div class="d-flex align-items-center gap-2">
                <!--begin::Action wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Label-->
                    <span class="fs-7 fw-bold text-gray-700 pe-4 text-nowrap d-none d-md-block">Sort By:</span>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px" data-control="select2"
                        data-placeholder="Latest" data-hide-search="true">
                        <option value=""></option>
                        <option value="1" selected="selected">Latest</option>
                        <option value="2">In Progress</option>
                        <option value="3">Done</option>
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Action wrapper-->
                <!--begin::Action wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Separartor-->
                    <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                    <!--end::Separartor-->
                    <!--begin::Label-->
                    <span class="fs-7 text-gray-700 fw-bold">Impact Level:</span>
                    <!--end::Label-->
                    <!--begin::NoUiSlider-->
                    <div class="d-flex align-items-center ps-4">
                        <div id="kt_app_toolbar_slider" class="noUi-target noUi-target-success w-75px w-xxl-150px noUi-sm"></div>
                        <span id="kt_app_toolbar_slider_value"
                            class="d-flex flex-center bg-light-success rounded-circle w-35px h-35px ms-4 fs-7 fw-bold text-success"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Set impact level"></span>
                    </div>
                    <!--end::NoUiSlider-->
                    <!--begin::Separartor-->
                    <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                    <!--end::Separartor-->
                </div>
                <!--end::Action wrapper-->
                <!--begin::Action wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Label-->
                    <span class="fs-7 text-gray-700 fw-bold pe-3 d-none d-md-block">Quick Tools:</span>
                    <!--end::Label-->
                    <!--begin::Actions-->
                    <div class="d-flex">
                        <!--begin::Action-->
                        <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-success"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Add new page">
                            <i class="ki-duotone ki-file fs-2qx">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        <!--end::Action-->
                        <!--begin::Action-->
                        <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-success"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Add new category">
                            <i class="ki-duotone ki-add-files fs-2qx">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </a>
                        <!--end::Action-->
                        <!--begin::Action-->
                        <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-success"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Add new section">
                            <i class="ki-duotone ki-search-list fs-2qx">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </a>
                        <!--end::Action-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Action wrapper-->
            </div>
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            @include('layouts.partials._content')
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
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
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection

