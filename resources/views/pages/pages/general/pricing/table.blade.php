@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Page
        @endslot
        @slot('li_2')
            General
        @endslot
        @slot('li_3')
            Pricing
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Pricing-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body px-10 px-lg-20 pt-17 pb-10">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-striped gy-7">
                            <!--begin::Table head-->
                            <thead class="align-middle">
                                <tr id="kt_pricing">
                                    <th>
                                        <!--begin::Nav group-->
                                        <div class="nav bg-light rounded-pill px-3 py-2 ms-9 mb-15 w-225px"
                                            data-kt-buttons="true">
                                            <!--begin::Nav link-->
                                            <button
                                                class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill"
                                                data-kt-plan="month">
                                                Monthly
                                            </button>
                                            <!--end::Nav link-->
                                            <!--begin::Nav link-->
                                            <button
                                                class="nav-link btn btn-active btn-active-dark fw-bold btn-color-gray-600 py-3 px-5 m-1 rounded-pill"
                                                data-kt-plan="annual">
                                                Annually
                                            </button>
                                            <!--end::Nav link-->
                                        </div>
                                        <!--end::Nav group-->
                                    </th>
                                    <th class="text-center min-w-200px">
                                        <div class="min-w-200px mb-15">
                                            <div class="text-primary fs-3 fw-bold mb-7">
                                                Free
                                            </div>
                                            <div
                                                class="fs-5x fw-semibold d-flex justify-content-center align-items-start lh-sm">
                                                <span class="align-self-start fs-2 mt-3">$</span>0
                                            </div>
                                            <div class="text-muted fw-bold mb-7">
                                                Monthly
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-light-primary fw-bold mx-auto">Start</a>
                                        </div>
                                    </th>
                                    <th class="text-center min-w-200px">
                                        <div class="min-w-200px bg-primary card-rounded py-12 mb-15">
                                            <div class="text-white fs-3 fw-bold mb-7">
                                                Pro
                                            </div>
                                            <div class="fs-5x text-white d-flex justify-content-center align-items-start">
                                                <span class="fs-2 mt-3">$</span>
                                                <span class="lh-sm fw-semibold" data-kt-plan-price-month="99"
                                                    data-kt-plan-price-annual="399">99</span>
                                            </div>
                                            <div class="text-white fw-bold mb-7">
                                                Monthly
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="btn bg-white bg-opacity-20 bg-hover-white text-hover-primary text-white fw-bold mx-auto">Start</a>
                                        </div>
                                    </th>
                                    <th class="text-center min-w-200px">
                                        <div class="min-w-200px mb-15">
                                            <div class="text-primary fs-3 fw-bold mb-7">
                                                Lifetime
                                            </div>
                                            <div class="fs-5x d-flex justify-content-center align-items-start">
                                                <span class="fs-2 mt-3">$</span>
                                                <span class="lh-sm fw-semibold" data-kt-plan-price-month="199"
                                                    data-kt-plan-price-annual="999">199</span>
                                            </div>
                                            <div class="text-muted fw-bold mb-7">
                                                Monthly
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-light-primary fw-bold mx-auto">Select</a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <th class="card-rounded-start">
                                        <div class="fw-bold d-flex align-items-center ps-9 fs-3">
                                            Sublicense Visuals
                                        </div>
                                    </th>
                                    <td>
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-7 flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="card-rounded-end">
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="card-rounded-start">
                                        <div class="fw-bold d-flex align-items-center ps-9 fs-3">
                                            Free Updates
                                        </div>
                                    </th>
                                    <td>
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-7 flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="card-rounded-end">
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="card-rounded-start">
                                        <div class="fw-bold d-flex align-items-center ps-9 fs-3">
                                            Theme Support
                                        </div>
                                    </th>
                                    <td>
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-7 flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="card-rounded-end">
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="card-rounded-start">
                                        <div class="fw-bold d-flex align-items-center ps-9 fs-3">
                                            Unlimited Websites
                                        </div>
                                    </th>
                                    <td>
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-7 flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="card-rounded-end">
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="card-rounded-start">
                                        <div class="fw-bold d-flex align-items-center ps-9 fs-3">
                                            DDOS Protection
                                        </div>
                                    </th>
                                    <td>
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-7 flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="card-rounded-end">
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="card-rounded-start">
                                        <div class="fw-bold d-flex align-items-center ps-9 fs-3">
                                            Domain Reseller
                                        </div>
                                    </th>
                                    <td>
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-7 flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="card-rounded-end">
                                        <div class="flex-root d-flex justify-content-center">
                                            <span class="h-40px w-40px d-flex flex-center d-block">
                                                <i class="ki-duotone ki-check fs-2x text-success"></i>
                                            </span>
                                            <span class="h-40px w-40px d-flex flex-center d-none">
                                                <i class="ki-duotone ki-cross fs-2x text-danger">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Pricing-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/pages/pricing/general.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection

