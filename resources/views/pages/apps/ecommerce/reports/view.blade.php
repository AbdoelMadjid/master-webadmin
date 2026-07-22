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
                            <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-ecommerce-order-filter="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                        </div>
                        <!--end::Search-->
                        <!--begin::Export buttons-->
                        <div id="kt_ecommerce_report_views_export" class="d-none"></div>
                        <!--end::Export buttons-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Daterangepicker-->
                        <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range"
                            id="kt_ecommerce_report_views_daterangepicker" />
                        <!--end::Daterangepicker-->
                        <!--begin::Filter-->
                        <div class="w-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Rating" data-kt-ecommerce-order-filter="rating">
                                <option></option>
                                <option value="all">All</option>
                                <option value="rating-5">5 Stars</option>
                                <option value="rating-4">4 Stars</option>
                                <option value="rating-3">3 Stars</option>
                                <option value="rating-2">2 Stars</option>
                                <option value="rating-1">1 Stars</option>
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
                        <div id="kt_ecommerce_report_views_export_menu"
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
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-150px">Product</th>
                                <th class="text-end min-w-100px">SKU</th>
                                <th class="text-end min-w-100px">Rating</th>
                                <th class="text-end min-w-100px">Price</th>
                                <th class="text-end min-w-70px">Viewed</th>
                                <th class="text-end min-w-100px">Percent</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/35.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 35</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03578006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$231.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>288200</span>
                                </td>
                                <td class="text-end pe-0">28.82%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/2.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02548001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$125.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>221560</span>
                                </td>
                                <td class="text-end pe-0">22.156%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/33.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 33</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01831002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$71.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>165348</span>
                                </td>
                                <td class="text-end pe-0">16.5348%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/47.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 47</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03849002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$229.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>151378</span>
                                </td>
                                <td class="text-end pe-0">15.13784%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/6.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03591005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$51.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>34703</span>
                                </td>
                                <td class="text-end pe-0">3.47027%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/39.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 39</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01521009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$41.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>27762</span>
                                </td>
                                <td class="text-end pe-0">2.77622%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/37.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 37</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02892002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$51.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>22210</span>
                                </td>
                                <td class="text-end pe-0">2.22097%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/36.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 36</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04211008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$158.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>17768</span>
                                </td>
                                <td class="text-end pe-0">1.77678%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/11.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01345009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$69.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>14214</span>
                                </td>
                                <td class="text-end pe-0">1.42142%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/17.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 17</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01370001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$280.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>11371</span>
                                </td>
                                <td class="text-end pe-0">1.13714%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/42.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 42</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02372004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$36.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>9097</span>
                                </td>
                                <td class="text-end pe-0">0.90971%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/38.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 38</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02650003</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$104.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>7278</span>
                                </td>
                                <td class="text-end pe-0">0.72777%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/46.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 46</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04531004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$11.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>5822</span>
                                </td>
                                <td class="text-end pe-0">0.58222%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/4.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04503009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$142.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>4658</span>
                                </td>
                                <td class="text-end pe-0">0.46577%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/29.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 29</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04982008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$95.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>3726</span>
                                </td>
                                <td class="text-end pe-0">0.37262%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/44.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 44</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04318007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$281.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2981</span>
                                </td>
                                <td class="text-end pe-0">0.29809%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/1.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04634002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$292.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2385</span>
                                </td>
                                <td class="text-end pe-0">0.23848%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/18.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 18</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01970001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$156.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>1908</span>
                                </td>
                                <td class="text-end pe-0">0.19078%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/14.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03448001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$139.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>1526</span>
                                </td>
                                <td class="text-end pe-0">0.15262%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/30.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 30</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01121008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$50.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>1221</span>
                                </td>
                                <td class="text-end pe-0">0.1221%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/22.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 22</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01547006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$50.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>977</span>
                                </td>
                                <td class="text-end pe-0">0.09768%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/45.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 45</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01879007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$246.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>781</span>
                                </td>
                                <td class="text-end pe-0">0.07814%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/49.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 49</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01409002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$15.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>625</span>
                                </td>
                                <td class="text-end pe-0">0.06251%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/16.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 16</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03132004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$19.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>500</span>
                                </td>
                                <td class="text-end pe-0">0.05001%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/5.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02500009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$285.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>400</span>
                                </td>
                                <td class="text-end pe-0">0.04001%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/13.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01259007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$67.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>320</span>
                                </td>
                                <td class="text-end pe-0">0.03201%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/28.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 28</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03466009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$290.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>256</span>
                                </td>
                                <td class="text-end pe-0">0.02561%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/41.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 41</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03199001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$161.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>205</span>
                                </td>
                                <td class="text-end pe-0">0.02048%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/21.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 21</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02830005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$41.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>164</span>
                                </td>
                                <td class="text-end pe-0">0.01639%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/23.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 23</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04164002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$223.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>131</span>
                                </td>
                                <td class="text-end pe-0">0.01311%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/32.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 32</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02452006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$150.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>105</span>
                                </td>
                                <td class="text-end pe-0">0.01049%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/25.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 25</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01947007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$78.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>84</span>
                                </td>
                                <td class="text-end pe-0">0.00839%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/48.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 48</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04963006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$240.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>67</span>
                                </td>
                                <td class="text-end pe-0">0.00671%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/9.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02696002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$256.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>54</span>
                                </td>
                                <td class="text-end pe-0">0.00537%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/43.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 43</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01688009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$128.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>43</span>
                                </td>
                                <td class="text-end pe-0">0.0043%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/12.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04832001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$50.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>34</span>
                                </td>
                                <td class="text-end pe-0">0.00344%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/26.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 26</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01152006</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$30.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>28</span>
                                </td>
                                <td class="text-end pe-0">0.00275%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/40.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 40</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03410004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$186.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>22</span>
                                </td>
                                <td class="text-end pe-0">0.0022%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/15.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02542004</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$201.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>18</span>
                                </td>
                                <td class="text-end pe-0">0.00176%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/7.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01248009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$233.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>14</span>
                                </td>
                                <td class="text-end pe-0">0.00141%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/50.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 50</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01371008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$202.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>11</span>
                                </td>
                                <td class="text-end pe-0">0.00113%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/34.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 34</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03624009</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$256.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>9</span>
                                </td>
                                <td class="text-end pe-0">0.0009%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/20.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 20</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03893002</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$189.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>7</span>
                                </td>
                                <td class="text-end pe-0">0.00072%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/24.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 24</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">02594005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$155.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>6</span>
                                </td>
                                <td class="text-end pe-0">0.00058%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/31.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 31</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">04494005</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$81.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>5</span>
                                </td>
                                <td class="text-end pe-0">0.00046%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/10.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01383008</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$274.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>4</span>
                                </td>
                                <td class="text-end pe-0">0.00037%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/3.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01406007</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$171.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>3</span>
                                </td>
                                <td class="text-end pe-0">0.0003%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/8.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01899001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$81.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2</span>
                                </td>
                                <td class="text-end pe-0">0.00024%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/27.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 27</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">01347001</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$108.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2</span>
                                </td>
                                <td class="text-end pe-0">0.00019%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="/apps/ecommerce/catalog/edit-product" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="
                                      background-image: url('assets/media/stock/ecommerce/19.png');
                                    "></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="/apps/ecommerce/catalog/edit-product"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                data-kt-ecommerce-product-filter="product_name">Product 19</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">03919003</span>
                                </td>
                                <td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
                                    <div class="rating justify-content-end">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-6"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span>$159.00</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span>2</span>
                                </td>
                                <td class="text-end pe-0">0.00015%</td>
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
    <script src="{{ asset('assets/js/custom/apps/ecommerce/reports/views/views.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
