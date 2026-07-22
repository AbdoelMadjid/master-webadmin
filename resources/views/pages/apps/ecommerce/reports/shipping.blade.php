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
            eCommerce
        @endslot
        @slot('li_3')
            Reports
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-ecommerce-order-filter="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                        </div>
                        <!--end::Search-->
                        <!--begin::Export buttons-->
                        <div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Daterangepicker-->
                        <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
                            id="kt_ecommerce_report_shipping_daterangepicker" />
                        <!--end::Daterangepicker-->
                        <!--begin::Filter-->
                        <div class="w-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                <option></option>
                                <option value="all">All</option>
                                <option value="Completed">Completed</option>
                                <option value="In Transit">In Transit</option>
                                <option value="Pending">Pending</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Filter-->
                        <!--begin::Export dropdown-->
                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span> </i>Export Report
                        </button>
                        <!--begin::Menu-->
                        <div id="kt_ecommerce_report_shipping_export_menu"
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to
                                    clipboard</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-ecommerce-export="excel">Export
                                    as
                                    Excel</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as
                                    CSV</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as
                                    PDF</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Export dropdown-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">Date</th>
                                <th class="min-w-100px">Shipping Type</th>
                                <th class="min-w-100px">Shipping ID</th>
                                <th class="min-w-100px">Status</th>
                                <th class="text-end min-w-75px">No. Orders</th>
                                <th class="text-end min-w-100px">Total</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0033962</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end">$263.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0048349</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">12</td>
                                <td class="text-end">$597.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0042471</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">
                                        Cancelled
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end">$544.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0030815</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">
                                        In Transit
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">17</td>
                                <td class="text-end">$152.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0055114</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end">$559.00</td>
                            </tr>
                            <tr>
                                <td>May 05, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0034373</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">3</td>
                                <td class="text-end">$293.00</td>
                            </tr>
                            <tr>
                                <td>Jul 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0060745</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">12</td>
                                <td class="text-end">$189.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0068384</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end">$465.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0047268</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-warning">
                                        Pending
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end">$381.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0052185</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">11</td>
                                <td class="text-end">$139.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0058779</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end">$308.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0047456</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end">$320.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0061221</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">3</td>
                                <td class="text-end">$385.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0044243</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">
                                        Cancelled
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">7</td>
                                <td class="text-end">$490.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0055557</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end">$327.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0059135</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end">$574.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0036699</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">20</td>
                                <td class="text-end">$491.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0031239</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-warning">
                                        Pending
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">2</td>
                                <td class="text-end">$203.00</td>
                            </tr>
                            <tr>
                                <td>Mar 10, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0067284</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">2</td>
                                <td class="text-end">$219.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0061704</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">
                                        In Transit
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">2</td>
                                <td class="text-end">$536.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0068893</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-warning">
                                        Pending
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">11</td>
                                <td class="text-end">$536.00</td>
                            </tr>
                            <tr>
                                <td>May 05, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0051595</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">
                                        In Transit
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end">$559.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0051962</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end">$21.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0034891</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">11</td>
                                <td class="text-end">$432.00</td>
                            </tr>
                            <tr>
                                <td>Jun 20, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0069074</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-warning">
                                        Pending
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">4</td>
                                <td class="text-end">$395.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0056628</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">
                                        In Transit
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">13</td>
                                <td class="text-end">$528.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0047298</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">
                                        In Transit
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end">$78.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0066479</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">
                                        Cancelled
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end">$513.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0049570</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end">$62.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0047414</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">
                                        In Transit
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end">$288.00</td>
                            </tr>
                            <tr>
                                <td>Jun 20, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0035835</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">12</td>
                                <td class="text-end">$401.00</td>
                            </tr>
                            <tr>
                                <td>Mar 10, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0055606</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">
                                        Cancelled
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">1</td>
                                <td class="text-end">$298.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0030474</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-warning">
                                        Pending
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">15</td>
                                <td class="text-end">$123.00</td>
                            </tr>
                            <tr>
                                <td>May 05, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0045874</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">4</td>
                                <td class="text-end">$40.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0028705</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">17</td>
                                <td class="text-end">$373.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0036355</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-warning">
                                        Pending
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">3</td>
                                <td class="text-end">$201.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0056790</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end">$409.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0060445</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">5</td>
                                <td class="text-end">$286.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0058653</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end">$409.00</td>
                            </tr>
                            <tr>
                                <td>Jul 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0061626</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">3</td>
                                <td class="text-end">$152.00</td>
                            </tr>
                            <tr>
                                <td>Jul 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0044650</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">2</td>
                                <td class="text-end">$539.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0058814</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">
                                        Cancelled
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end">$286.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0032638</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">18</td>
                                <td class="text-end">$411.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0027085</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">
                                        Cancelled
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">11</td>
                                <td class="text-end">$355.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0053548</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end">$475.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0052364</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">12</td>
                                <td class="text-end">$575.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0055809</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">13</td>
                                <td class="text-end">$475.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0059420</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end">$53.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0061885</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-primary">
                                        In Transit
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">13</td>
                                <td class="text-end">$380.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td>Flat Shipping Rate</td>
                                <td>
                                    <a href="/apps/ecommerce/sales/details"
                                        class="text-gray-900 text-hover-primary">#SHP-0030236</a>
                                </td>
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">
                                        Completed
                                    </div>
                                    <!--end::Badges-->
                                </td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end">$153.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection
@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/ecommerce/reports/shipping/shipping.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
