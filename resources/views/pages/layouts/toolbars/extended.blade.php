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
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap flex-md-nowrap">
                    <!--begin::Toolbar start-->
                    <div class="d-flex align-items-center flex-shrink-0 me-5">
                        <!--begin::Label-->
                        <span class="fs-7 fw-bold text-gray-700 pe-4 d-none d-md-block">Team:</span>
                        <!--end::Label-->
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover flex-shrink-0 me-2">
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-35px">
                                <div class="symbol-label fw-bold bg-warning text-inverse-warning">
                                    A
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-35px">
                                <img src="assets/media/avatars/300-1.jpg" alt="" />
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-35px">
                                <img src="assets/media/avatars/300-2.jpg" alt="" />
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-35px">
                                <div class="symbol-label fw-bold bg-primary text-inverse-primary">
                                    S
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-35px">
                                <img src="assets/media/avatars/300-5.jpg" alt="" />
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-35px">
                                <div class="symbol-label fw-bold bg-danger text-inverse-danger">
                                    P
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-35px">
                                <img src="assets/media/avatars/300-20.jpg" alt="" />
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Users-->
                        <!--begin::Button-->
                        <div data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Invite a team member">
                            <a href="javascript:void(0)" class="btn btn-sm btn-icon" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_invite_friends">
                                <i class="ki-duotone ki-plus-square fs-2hx text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </a>
                        </div>
                        <!--end::Button-->
                    </div>
                    <!--end::Toolbar start-->
                    <!--begin::Toolbar end-->
                    <div class="d-flex align-items-center overflow-auto">
                        <!--begin::Search-->
                        <div class="position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle-y ms-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" class="form-control form-control-sm form-control-solid w-150px ps-10"
                                name="Search Team" value="" placeholder="Search Team" />
                        </div>
                        <!--end::Search-->
                        <!--begin::Separartor-->
                        <div class="bullet bg-secondary h-35px w-1px mx-6"></div>
                        <!--end::Separartor-->
                        <!--begin::Label-->
                        <span class="fs-7 fw-bold text-gray-700 flex-shrink-0 pe-4 d-none d-md-block">Sort By:</span>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select class="form-select form-select-sm w-125px form-select-solid me-6" data-control="select2"
                            data-placeholder="Latest" data-hide-search="true">
                            <option value=""></option>
                            <option value="1" selected="selected">Latest</option>
                            <option value="2">In Progress</option>
                            <option value="3">Done</option>
                        </select>
                        <!--end::Select-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-icon btn-light-primary me-3" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Enable grid view">
                                <i class="ki-duotone ki-element-11 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-light" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Enable row view">
                                <i class="ki-duotone ki-row-horizontal fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                        </div>
                        <!--end::Actions-->
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

