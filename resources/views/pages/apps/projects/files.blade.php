@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Apps
        @endslot
        @slot('li_2')
            Projects
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Navbar-->
            <div class="card">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    @include('pages.apps.projects.partials.details')
                    <!--end::Details-->
                    <div class="separator"></div>
                    <!--begin::Nav-->
                    @include('pages.apps.projects.partials.nav', ['active' => 'files'])
                    <!--end::Nav-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::Toolbar-->
            <div class="d-flex flex-wrap flex-stack my-5">
                <!--begin::Heading-->
                <h3 class="fw-bold my-2">
                    Project Files
                    <span class="fs-6 text-gray-500 fw-semibold ms-1">+590</span>
                </h3>
                <!--end::Heading-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative me-4">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute translate-middle-y top-50 ms-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" id="kt_filter_search"
                            class="form-control form-control-sm form-control-solid bg-body fw-semibold fs-7 w-150px ps-11"
                            placeholder="Search" />
                    </div>
                    <!--end::Search-->
                    <a href="apps/file-manager/folders" class="btn btn-primary btn-sm fw-bolder">File Manager</a>
                </div>
                <!--end::Controls-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Row-->
            <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="assets/media/svg/files/pdf.svg" class="theme-light-show" alt="" />
                                    <img src="assets/media/svg/files/pdf-dark.svg" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Project Reqs..</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">
                                3 days ago
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="assets/media/svg/files/doc.svg" class="theme-light-show" alt="" />
                                    <img src="assets/media/svg/files/doc-dark.svg" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">CRM App Docs..</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">
                                3 days ago
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="assets/media/svg/files/css.svg" class="theme-light-show" alt="" />
                                    <img src="assets/media/svg/files/css-dark.svg" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">
                                    User CRUD Styles
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">
                                4 days ago
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="assets/media/svg/files/ai.svg" class="theme-light-show" alt="" />
                                    <img src="assets/media/svg/files/ai-dark.svg" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Product Logo</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">
                                5 days ago
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="assets/media/svg/files/sql.svg" class="theme-light-show" alt="" />
                                    <img src="assets/media/svg/files/sql-dark.svg" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Orders backup</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">
                                1 week ago
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="assets/media/svg/files/xml.svg" class="theme-light-show" alt="" />
                                    <img src="assets/media/svg/files/xml-dark.svg" class="theme-dark-show"
                                        alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">
                                    UTAIR CRM API Co..
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">
                                2 weeks ago
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="assets/media/svg/files/tif.svg" class="theme-light-show" alt="" />
                                    <img src="assets/media/svg/files/tif-dark.svg" class="theme-dark-show"
                                        alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">
                                    Tower Hill App..
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">
                                3 weeks ago
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
                        <!--begin::Image-->
                        <img src="assets/media/svg/files/upload.svg" class="mb-5" alt="" />
                        <!--end::Image-->
                        <!--begin::Link-->
                        <a href="javascript:void(0)" class="text-hover-primary fs-5 fw-bold mb-2">File Upload</a>
                        <!--end::Link-->
                        <!--begin::Description-->
                        <div class="fs-7 fw-semibold text-gray-500">
                            Drag and drop files here
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end:Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection

@section('scripts')
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
