@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('kt_app_toolbar')
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Toolbar start-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Input group-->
                        <div class="d-flex align-items-center flex-shrink-0">
                            <!--begin::Label-->
                            <span class="fs-7 text-gray-700 fw-bold pe-3 d-none d-md-block">Actions:</span>
                            <!--end::Label-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-shrink-0">
                                <!--begin::Button-->
                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                    title="Add a team member">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-active-color-success" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_invite_friends">
                                        <i class="ki-duotone ki-plus-square fs-2x">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </a>
                                </div>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                    title="Create new account">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-active-color-success" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_account">
                                        <i class="ki-duotone ki-check-square fs-2x">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </div>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                    title="Invite friends">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-active-color-success" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_campaign">
                                        <i class="ki-duotone ki-dots-square fs-2x">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </a>
                                </div>
                                <!--end::Button-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex align-items-center flex-shrink-0">
                            <!--begin::Desktop separartor-->
                            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                            <!--end::Desktop separartor-->
                            <!--begin::Label-->
                            <span class="fs-7 text-gray-700 fw-bold pe-4 ps-1 d-none d-md-block">Progress:</span>
                            <!--end::Label-->
                            <div class="progress w-100px w-xl-150px w-xxl-300px h-25px bg-light-success">
                                <div class="progress-bar rounded bg-success fs-7 fw-bold" role="progressbar" style="width: 72%;"
                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">72%</div>
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Toolbar start-->
                    <!--begin::Toolbar end-->
                    <div class="d-flex align-items-center">
                        <!--begin::Input group-->
                        <div class="me-3">
                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid" data-control="select2"
                                data-placeholder="Latest" data-hide-search="true">
                                <option value=""></option>
                                <option value="1" selected="selected">Today 16 Feb</option>
                                <option value="2">In Progress</option>
                                <option value="3">Done</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group=-->
                        <div class="m-0">
                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid w-md-125px" data-control="select2"
                                data-placeholder="Filters" data-hide-search="true">
                                <option value=""></option>
                                <option value="1" selected="selected">Filters</option>
                                <option value="2">In Progress</option>
                                <option value="3">Done</option>
                            </select>
                            <!--end::Content-->
                        </div>
                        <!--end::Input group=-->
                    </div>
                    <!--end::Toolbar end-->
                </div>
                <!--end::Toolbar container-->
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

