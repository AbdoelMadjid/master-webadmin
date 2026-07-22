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
                        <div id="kt_ecommerce_report_sales_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Daterangepicker-->
                        <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
                            id="kt_ecommerce_report_sales_daterangepicker" />
                        <!--end::Daterangepicker-->
                        <!--begin::Export dropdown-->
                        <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span> </i>Export Report
                        </button>
                        <!--begin::Menu-->
                        <div id="kt_ecommerce_report_sales_export_menu"
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
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_sales_table">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">Date</th>
                                <th class="text-end min-w-75px">No. Orders</th>
                                <th class="text-end min-w-75px">Products Sold</th>
                                <th class="text-end min-w-75px">Tax</th>
                                <th class="text-end min-w-100px">Total</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td class="text-end pe-0">20</td>
                                <td class="text-end pe-0">22</td>
                                <td class="text-end pe-0">$74.00</td>
                                <td class="text-end">$496.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end pe-0">$47.00</td>
                                <td class="text-end">$315.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td class="text-end pe-0">7</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$15.00</td>
                                <td class="text-end">$100.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td class="text-end pe-0">15</td>
                                <td class="text-end pe-0">20</td>
                                <td class="text-end pe-0">$17.00</td>
                                <td class="text-end">$113.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td class="text-end pe-0">12</td>
                                <td class="text-end pe-0">15</td>
                                <td class="text-end pe-0">$84.00</td>
                                <td class="text-end">$560.00</td>
                            </tr>
                            <tr>
                                <td>May 05, 2024</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">15</td>
                                <td class="text-end pe-0">$62.00</td>
                                <td class="text-end">$412.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td class="text-end pe-0">18</td>
                                <td class="text-end pe-0">20</td>
                                <td class="text-end pe-0">$26.00</td>
                                <td class="text-end">$175.00</td>
                            </tr>
                            <tr>
                                <td>Jun 20, 2024</td>
                                <td class="text-end pe-0">5</td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end pe-0">$73.00</td>
                                <td class="text-end">$489.00</td>
                            </tr>
                            <tr>
                                <td>Mar 10, 2024</td>
                                <td class="text-end pe-0">1</td>
                                <td class="text-end pe-0">3</td>
                                <td class="text-end pe-0">$69.00</td>
                                <td class="text-end">$460.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">$57.00</td>
                                <td class="text-end">$381.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$73.00</td>
                                <td class="text-end">$489.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td class="text-end pe-0">11</td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end pe-0">$88.00</td>
                                <td class="text-end">$587.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td class="text-end pe-0">5</td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end pe-0">$19.00</td>
                                <td class="text-end">$127.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td class="text-end pe-0">20</td>
                                <td class="text-end pe-0">23</td>
                                <td class="text-end pe-0">$51.00</td>
                                <td class="text-end">$343.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$46.00</td>
                                <td class="text-end">$307.00</td>
                            </tr>
                            <tr>
                                <td>Mar 10, 2024</td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end pe-0">$75.00</td>
                                <td class="text-end">$499.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td class="text-end pe-0">15</td>
                                <td class="text-end pe-0">17</td>
                                <td class="text-end pe-0">$71.00</td>
                                <td class="text-end">$475.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end pe-0">18</td>
                                <td class="text-end pe-0">$89.00</td>
                                <td class="text-end">$592.00</td>
                            </tr>
                            <tr>
                                <td>Jun 20, 2024</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end pe-0">$30.00</td>
                                <td class="text-end">$202.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end pe-0">16</td>
                                <td class="text-end pe-0">$59.00</td>
                                <td class="text-end">$393.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">11</td>
                                <td class="text-end pe-0">$20.00</td>
                                <td class="text-end">$136.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td class="text-end pe-0">3</td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end pe-0">$83.00</td>
                                <td class="text-end">$551.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td class="text-end pe-0">7</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">$30.00</td>
                                <td class="text-end">$198.00</td>
                            </tr>
                            <tr>
                                <td>May 05, 2024</td>
                                <td class="text-end pe-0">7</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$19.00</td>
                                <td class="text-end">$124.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end pe-0">$51.00</td>
                                <td class="text-end">$339.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td class="text-end pe-0">13</td>
                                <td class="text-end pe-0">18</td>
                                <td class="text-end pe-0">$81.00</td>
                                <td class="text-end">$541.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">15</td>
                                <td class="text-end pe-0">$68.00</td>
                                <td class="text-end">$456.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$21.00</td>
                                <td class="text-end">$142.00</td>
                            </tr>
                            <tr>
                                <td>Nov 10, 2024</td>
                                <td class="text-end pe-0">17</td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end pe-0">$26.00</td>
                                <td class="text-end">$170.00</td>
                            </tr>
                            <tr>
                                <td>Mar 10, 2024</td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end pe-0">23</td>
                                <td class="text-end pe-0">$55.00</td>
                                <td class="text-end">$367.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">11</td>
                                <td class="text-end pe-0">$65.00</td>
                                <td class="text-end">$436.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td class="text-end pe-0">3</td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end pe-0">$3.00</td>
                                <td class="text-end">$20.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">13</td>
                                <td class="text-end pe-0">$33.00</td>
                                <td class="text-end">$223.00</td>
                            </tr>
                            <tr>
                                <td>Mar 10, 2024</td>
                                <td class="text-end pe-0">5</td>
                                <td class="text-end pe-0">8</td>
                                <td class="text-end pe-0">$29.00</td>
                                <td class="text-end">$193.00</td>
                            </tr>
                            <tr>
                                <td>Apr 15, 2024</td>
                                <td class="text-end pe-0">1</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">$73.00</td>
                                <td class="text-end">$486.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">$16.00</td>
                                <td class="text-end">$104.00</td>
                            </tr>
                            <tr>
                                <td>May 05, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$27.00</td>
                                <td class="text-end">$180.00</td>
                            </tr>
                            <tr>
                                <td>Jun 20, 2024</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">13</td>
                                <td class="text-end pe-0">$44.00</td>
                                <td class="text-end">$291.00</td>
                            </tr>
                            <tr>
                                <td>Aug 19, 2024</td>
                                <td class="text-end pe-0">5</td>
                                <td class="text-end pe-0">7</td>
                                <td class="text-end pe-0">$56.00</td>
                                <td class="text-end">$374.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end pe-0">17</td>
                                <td class="text-end pe-0">$43.00</td>
                                <td class="text-end">$285.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">14</td>
                                <td class="text-end pe-0">$25.00</td>
                                <td class="text-end">$169.00</td>
                            </tr>
                            <tr>
                                <td>Jul 25, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$39.00</td>
                                <td class="text-end">$257.00</td>
                            </tr>
                            <tr>
                                <td>May 05, 2024</td>
                                <td class="text-end pe-0">4</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">$18.00</td>
                                <td class="text-end">$117.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">$79.00</td>
                                <td class="text-end">$529.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td class="text-end pe-0">4</td>
                                <td class="text-end pe-0">9</td>
                                <td class="text-end pe-0">$69.00</td>
                                <td class="text-end">$463.00</td>
                            </tr>
                            <tr>
                                <td>Dec 20, 2024</td>
                                <td class="text-end pe-0">20</td>
                                <td class="text-end pe-0">23</td>
                                <td class="text-end pe-0">$7.00</td>
                                <td class="text-end">$44.00</td>
                            </tr>
                            <tr>
                                <td>Jun 24, 2024</td>
                                <td class="text-end pe-0">20</td>
                                <td class="text-end pe-0">25</td>
                                <td class="text-end pe-0">$15.00</td>
                                <td class="text-end">$98.00</td>
                            </tr>
                            <tr>
                                <td>Sep 22, 2024</td>
                                <td class="text-end pe-0">13</td>
                                <td class="text-end pe-0">18</td>
                                <td class="text-end pe-0">$74.00</td>
                                <td class="text-end">$490.00</td>
                            </tr>
                            <tr>
                                <td>Feb 21, 2024</td>
                                <td class="text-end pe-0">19</td>
                                <td class="text-end pe-0">24</td>
                                <td class="text-end pe-0">$8.00</td>
                                <td class="text-end">$51.00</td>
                            </tr>
                            <tr>
                                <td>Oct 25, 2024</td>
                                <td class="text-end pe-0">6</td>
                                <td class="text-end pe-0">10</td>
                                <td class="text-end pe-0">$18.00</td>
                                <td class="text-end">$118.00</td>
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
    <script src="{{ asset('assets/js/custom/apps/ecommerce/reports/sales/sales.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
