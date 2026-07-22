@extends('layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Account
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    @include('pages.pages.account.partials.details')
                    <!--end::Details-->
                    <!--begin::Navs-->
                    @include('pages.pages.account.partials.navs', ['active' => 'logs'])
                    <!--end::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::Login sessions-->
            <div class="card mb-5 mb-lg-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Heading-->
                    <div class="card-title">
                        <h3>Login Sessions</h3>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <div class="my-1 me-4">
                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2"
                                data-placeholder="Select Hours" data-hide-search="true">
                                <option value="1" selected="selected">
                                    1 Hours
                                </option>
                                <option value="2">6 Hours</option>
                                <option value="3">12 Hours</option>
                                <option value="4">24 Hours</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary my-1">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                            <!--begin::Thead-->
                            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                <tr>
                                    <th class="min-w-250px">Location</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-150px">Device</th>
                                    <th class="min-w-150px">IP Address</th>
                                    <th class="min-w-150px">Time</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fw-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="text-hover-primary text-gray-600">USA(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>Chrome - Windows</td>
                                    <td>236.125.56.78</td>
                                    <td>2 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>Safari - Mac OS</td>
                                    <td>236.125.56.78</td>
                                    <td>10 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="text-hover-primary text-gray-600">Norway(-)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-bold">ERR</span>
                                    </td>
                                    <td>Firefox - Windows</td>
                                    <td>236.125.56.10</td>
                                    <td>20 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="text-hover-primary text-gray-600">Japan(112)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>iOS - iPhone Pro</td>
                                    <td>236.125.56.54</td>
                                    <td>30 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" class="text-hover-primary text-gray-600">Italy(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-warning fs-7 fw-bold">WRN</span>
                                    </td>
                                    <td>Samsung Noted 5- Android</td>
                                    <td>236.100.56.50</td>
                                    <td>40 mins ago</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Login sessions-->
            <!--begin::Card-->
            <div class="card pt-4">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Logs</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-sm btn-light-primary">
                            <i class="ki-duotone ki-cloud-download fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span> </i>Download Report
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5"
                            id="kt_table_customers_logs">
                            <!--begin::Table body-->
                            <tbody>
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">
                                            500 ERR
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_8447_1173/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        10 Nov 2024, 2:40 pm
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">
                                            200 OK
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_9264_9791/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        24 Jun 2024, 6:05 pm
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">
                                            200 OK
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_9264_9791/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        25 Oct 2024, 5:30 pm
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">
                                            200 OK
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_9902_6354/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        19 Aug 2024, 11:05 am
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">
                                            500 ERR
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_8447_1173/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        10 Mar 2024, 11:05 am
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">
                                            404 WRN
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>
                                        POST /v1/customer/c_6606385303e80/not_found
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        25 Jul 2024, 8:43 pm
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">
                                            404 WRN
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>
                                        POST /v1/customer/c_6606385303e7f/not_found
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        25 Jul 2024, 6:43 am
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">
                                            404 WRN
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>
                                        POST /v1/customer/c_6606385303e80/not_found
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        25 Jul 2024, 2:40 pm
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">
                                            404 WRN
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>
                                        POST /v1/customer/c_6606385303e7f/not_found
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        10 Mar 2024, 10:30 am
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">
                                            404 WRN
                                        </div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>
                                        POST /v1/customer/c_6606385303e7f/not_found
                                    </td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">
                                        20 Jun 2024, 5:30 pm
                                    </td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/pages/user-profile/general.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/api-keys/api-keys.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection

