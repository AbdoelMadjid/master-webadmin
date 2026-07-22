@extends('layouts.document832')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!--begin::Content-->
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card card-docs flex-row-fluid mb-2" id="kt_docs_content_card">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <!--begin::Section-->
                    <div class="py-0">
                        <!--begin::Heading-->
                        <h1 class="fw-bold mb-5">
                            DataTables Export
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <a href="https://datatables.net/extensions/buttons/">Buttons</a>&nbsp; extension for DataTables
                            provides a framework with common options
                            and API that can be used with DataTables,
                            but is also very extensible, recognising that you will likely want to use buttons which perform
                            an action unique to your applications.
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <!--begin::Card-->
                            <div class="card card-p-0 card-flush border-0 bg-transparent">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-4"><span
                                                    class="path1"></span><span class="path2"></span></i> <input
                                                type="text" data-kt-filter="search"
                                                class="form-control form-control-solid w-250px ps-14"
                                                placeholder="Search Report" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Card title-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Export dropdown-->
                                        <button type="button" class="btn btn-primary" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> Export Report
                                        </button>
                                        <!--begin::Menu-->
                                        <div id="kt_datatable_example_export_menu" data-kt-menu="true"
                                            class="
        menu
        menu-sub
        menu-sub-dropdown
        menu-column
        menu-rounded
        menu-gray-600
        menu-state-bg-light-primary
        fw-semibold
        fs-7
        w-200px
        py-4">

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-export="copy">
                                                    Copy to clipboard
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-export="excel">
                                                    Export as Excel
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-export="csv">
                                                    Export as CSV
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javascript:void(0)" class="menu-link px-3" data-kt-export="pdf">
                                                    Export as PDF
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Export dropdown-->

                                        <!--begin::Hide default export buttons-->
                                        <div id="kt_datatable_example_buttons" class="d-none"></div>
                                        <!--end::Hide default export buttons->
                    </div>
                    <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body">

                                        <!--begin::Table-->
                                        <table class="table align-middle border rounded table-row-dashed fs-6 g-5 gs-5"
                                            id="kt_datatable_example">
                                            <thead>
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase">
                                                    <th class="min-w-100px">Customer Name</th>
                                                    <th class="min-w-100px">Email</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-100px">Date Joined</th>
                                                    <th class="text-end min-w-75px">No. Orders</th>
                                                    <th class="text-end min-w-75px">No. Products</th>
                                                    <th class="text-end min-w-100px pe-5">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Emma
                                                            Smith</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        05 May 2025, 10:30 am </td>
                                                    <td class="text-end pe-0">
                                                        90 </td>
                                                    <td class="text-end pe-0">
                                                        105 </td>
                                                    <td class="text-end">
                                                        $3434.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Melody
                                                            Macy</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        15 Apr 2025, 11:30 am </td>
                                                    <td class="text-end pe-0">
                                                        48 </td>
                                                    <td class="text-end pe-0">
                                                        62 </td>
                                                    <td class="text-end">
                                                        $2811.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Max
                                                            Smith</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">max@kt.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        10 Nov 2025, 11:30 am </td>
                                                    <td class="text-end pe-0">
                                                        48 </td>
                                                    <td class="text-end pe-0">
                                                        59 </td>
                                                    <td class="text-end">
                                                        $3106.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Sean
                                                            Bean</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">sean@dellito.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        10 Mar 2025, 8:43 pm </td>
                                                    <td class="text-end pe-0">
                                                        92 </td>
                                                    <td class="text-end pe-0">
                                                        99 </td>
                                                    <td class="text-end">
                                                        $3151.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Brian
                                                            Cox</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">brian@exchange.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        20 Jun 2025, 2:40 pm </td>
                                                    <td class="text-end pe-0">
                                                        40 </td>
                                                    <td class="text-end pe-0">
                                                        47 </td>
                                                    <td class="text-end">
                                                        $420.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Mikaela
                                                            Collins</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">mik@pex.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        24 Jun 2025, 6:05 pm </td>
                                                    <td class="text-end pe-0">
                                                        76 </td>
                                                    <td class="text-end pe-0">
                                                        85 </td>
                                                    <td class="text-end">
                                                        $2064.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Francis
                                                            Mitcham</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        25 Jul 2025, 9:23 pm </td>
                                                    <td class="text-end pe-0">
                                                        54 </td>
                                                    <td class="text-end pe-0">
                                                        66 </td>
                                                    <td class="text-end">
                                                        $1876.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Olivia
                                                            Wild</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        24 Jun 2025, 11:05 am </td>
                                                    <td class="text-end pe-0">
                                                        91 </td>
                                                    <td class="text-end pe-0">
                                                        98 </td>
                                                    <td class="text-end">
                                                        $4506.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Neil
                                                            Owen</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        21 Feb 2025, 6:05 pm </td>
                                                    <td class="text-end pe-0">
                                                        32 </td>
                                                    <td class="text-end pe-0">
                                                        47 </td>
                                                    <td class="text-end">
                                                        $597.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Dan
                                                            Wilson</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">dam@consilting.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        24 Jun 2025, 11:30 am </td>
                                                    <td class="text-end pe-0">
                                                        74 </td>
                                                    <td class="text-end pe-0">
                                                        83 </td>
                                                    <td class="text-end">
                                                        $4447.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Emma
                                                            Bold</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">emma@intenso.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        25 Oct 2025, 2:40 pm </td>
                                                    <td class="text-end pe-0">
                                                        85 </td>
                                                    <td class="text-end pe-0">
                                                        96 </td>
                                                    <td class="text-end">
                                                        $3943.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Ana
                                                            Crown</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        19 Aug 2025, 10:30 am </td>
                                                    <td class="text-end pe-0">
                                                        20 </td>
                                                    <td class="text-end pe-0">
                                                        27 </td>
                                                    <td class="text-end">
                                                        $672.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Robert
                                                            Doe</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">robert@benko.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        15 Apr 2025, 10:30 am </td>
                                                    <td class="text-end pe-0">
                                                        55 </td>
                                                    <td class="text-end pe-0">
                                                        69 </td>
                                                    <td class="text-end">
                                                        $4409.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">John
                                                            Miller</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">miller@mapple.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        24 Jun 2025, 11:05 am </td>
                                                    <td class="text-end pe-0">
                                                        22 </td>
                                                    <td class="text-end pe-0">
                                                        36 </td>
                                                    <td class="text-end">
                                                        $2579.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Lucy
                                                            Kunic</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">lucy.m@fentech.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        20 Dec 2025, 10:30 am </td>
                                                    <td class="text-end pe-0">
                                                        64 </td>
                                                    <td class="text-end pe-0">
                                                        71 </td>
                                                    <td class="text-end">
                                                        $2954.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Ethan
                                                            Wilder</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">ethan@loop.com.au</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        10 Nov 2025, 6:43 am </td>
                                                    <td class="text-end pe-0">
                                                        75 </td>
                                                    <td class="text-end pe-0">
                                                        90 </td>
                                                    <td class="text-end">
                                                        $3080.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Emma
                                                            Bold</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">emma@intenso.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        20 Jun 2025, 2:40 pm </td>
                                                    <td class="text-end pe-0">
                                                        95 </td>
                                                    <td class="text-end pe-0">
                                                        106 </td>
                                                    <td class="text-end">
                                                        $1791.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Emma
                                                            Smith</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        25 Jul 2025, 9:23 pm </td>
                                                    <td class="text-end pe-0">
                                                        91 </td>
                                                    <td class="text-end pe-0">
                                                        103 </td>
                                                    <td class="text-end">
                                                        $3121.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Melody
                                                            Macy</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">melody@altbox.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        25 Oct 2025, 6:05 pm </td>
                                                    <td class="text-end pe-0">
                                                        100 </td>
                                                    <td class="text-end pe-0">
                                                        114 </td>
                                                    <td class="text-end">
                                                        $2968.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Max
                                                            Smith</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">max@kt.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        24 Jun 2025, 10:10 pm </td>
                                                    <td class="text-end pe-0">
                                                        71 </td>
                                                    <td class="text-end pe-0">
                                                        81 </td>
                                                    <td class="text-end">
                                                        $2300.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Sean
                                                            Bean</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">sean@dellito.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        25 Jul 2025, 9:23 pm </td>
                                                    <td class="text-end pe-0">
                                                        81 </td>
                                                    <td class="text-end pe-0">
                                                        93 </td>
                                                    <td class="text-end">
                                                        $4702.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Brian
                                                            Cox</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">brian@exchange.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        20 Dec 2025, 6:05 pm </td>
                                                    <td class="text-end pe-0">
                                                        34 </td>
                                                    <td class="text-end pe-0">
                                                        49 </td>
                                                    <td class="text-end">
                                                        $325.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Mikaela
                                                            Collins</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">mik@pex.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        20 Jun 2025, 10:30 am </td>
                                                    <td class="text-end pe-0">
                                                        83 </td>
                                                    <td class="text-end pe-0">
                                                        94 </td>
                                                    <td class="text-end">
                                                        $2411.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Francis
                                                            Mitcham</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        20 Jun 2025, 11:30 am </td>
                                                    <td class="text-end pe-0">
                                                        61 </td>
                                                    <td class="text-end pe-0">
                                                        70 </td>
                                                    <td class="text-end">
                                                        $2668.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-gray-900 text-hover-primary">Olivia
                                                            Wild</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td>
                                                        10 Nov 2025, 8:43 pm </td>
                                                    <td class="text-end pe-0">
                                                        14 </td>
                                                    <td class="text-end pe-0">
                                                        25 </td>
                                                    <td class="text-end">
                                                        $1094.00
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Block-->

                            <!--begin::Code-->
                            <div class="py-5">
                                <!--begin::Highlight-->
                                <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                        title="Copy code">copy</button>
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                                href="#kt_highlight_68e52120ee185" role="tab">HTML</a></li>
                                        <li class="nav-item"> <a class="nav-link " data-bs-toggle="tab"
                                                href="#kt_highlight_68e52120ee189" role="tab">JAVASCRIPT</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="kt_highlight_68e52120ee185"
                                            role="tabpanel">
                                            <div class="highlight-code">
                                                <pre class="language-html" style="height:400px"><code class="language-html">&lt;div class=&quot;card card-p-0 card-flush&quot;&gt;
	&lt;div class=&quot;card-header align-items-center py-5 gap-2 gap-md-5&quot;&gt;
		&lt;div class=&quot;card-title&quot;&gt;
			&lt;!--begin::Search--&gt;
			&lt;div class=&quot;d-flex align-items-center position-relative my-1&quot;&gt;
				&lt;span class=&quot;svg-icon fs-1 position-absolute ms-4&quot;&gt;...&lt;/span&gt;
				&lt;input type=&quot;text&quot; data-kt-filter=&quot;search&quot; class=&quot;form-control form-control-solid w-250px ps-14&quot; placeholder=&quot;Search Report&quot; /&gt;
			&lt;/div&gt;
			&lt;!--end::Search--&gt;
			&lt;!--begin::Export buttons--&gt;
			&lt;div id=&quot;kt_datatable_example_1_export&quot; class=&quot;d-none&quot;&gt;&lt;/div&gt;
			&lt;!--end::Export buttons--&gt;
		&lt;/div&gt;
		&lt;div class=&quot;card-toolbar flex-row-fluid justify-content-end gap-5&quot;&gt;
			&lt;!--begin::Export dropdown--&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary&quot; data-kt-menu-trigger=&quot;click&quot; data-kt-menu-placement=&quot;bottom-end&quot;&gt;
				&lt;i class=&quot;ki-duotone ki-exit-down fs-2&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt;
				Export Report
			&lt;/button&gt;
			&lt;!--begin::Menu--&gt;
			&lt;div id=&quot;kt_datatable_example_export_menu&quot; class=&quot;menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4&quot; data-kt-menu=&quot;true&quot;&gt;
				&lt;!--begin::Menu item--&gt;
				&lt;div class=&quot;menu-item px-3&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot; data-kt-export=&quot;copy&quot;&gt;
					Copy to clipboard
					&lt;/a&gt;
				&lt;/div&gt;
				&lt;!--end::Menu item--&gt;
				&lt;!--begin::Menu item--&gt;
				&lt;div class=&quot;menu-item px-3&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot; data-kt-export=&quot;excel&quot;&gt;
					Export as Excel
					&lt;/a&gt;
				&lt;/div&gt;
				&lt;!--end::Menu item--&gt;
				&lt;!--begin::Menu item--&gt;
				&lt;div class=&quot;menu-item px-3&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot; data-kt-export=&quot;csv&quot;&gt;
					Export as CSV
					&lt;/a&gt;
				&lt;/div&gt;
				&lt;!--end::Menu item--&gt;
				&lt;!--begin::Menu item--&gt;
				&lt;div class=&quot;menu-item px-3&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;menu-link px-3&quot; data-kt-export=&quot;pdf&quot;&gt;
					Export as PDF
					&lt;/a&gt;
				&lt;/div&gt;
				&lt;!--end::Menu item--&gt;
			&lt;/div&gt;
			&lt;!--end::Menu--&gt;
			&lt;!--end::Export dropdown--&gt;

			&lt;!--begin::Hide default export buttons--&gt;
			&lt;div id=&quot;kt_datatable_example_buttons&quot; class=&quot;d-none&quot;&gt;&lt;/div&gt;
			&lt;!--end::Hide default export buttons-&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;card-body&quot;&gt;
		&lt;table class=&quot;table align-middle border rounded table-row-dashed fs-6 g-5&quot; id=&quot;kt_datatable_example&quot;&gt;
			&lt;thead&gt;
				&lt;!--begin::Table row--&gt;
				&lt;tr class=&quot;text-start text-gray-500 fw-bold fs-7 text-uppercase&quot;&gt;
					&lt;th class=&quot;min-w-100px&quot;&gt;Customer Name&lt;/th&gt;
					&lt;th class=&quot;min-w-100px&quot;&gt;Email&lt;/th&gt;
					&lt;th class=&quot;min-w-100px&quot;&gt;Status&lt;/th&gt;
					&lt;th class=&quot;min-w-100px&quot;&gt;Date Joined&lt;/th&gt;
					&lt;th class=&quot;text-end min-w-75px&quot;&gt;No. Orders&lt;/th&gt;
					&lt;th class=&quot;text-end min-w-75px&quot;&gt;No. Products&lt;/th&gt;
					&lt;th class=&quot;text-end min-w-100px pe-5&quot;&gt;Total&lt;/th&gt;
				&lt;/tr&gt;
				&lt;!--end::Table row--&gt;
			&lt;/thead&gt;
			&lt;tbody class=&quot;fw-semibold text-gray-600&quot;&gt;
				&lt;tr class=&quot;odd&quot;&gt;
					&lt;td&gt;
						&lt;a href=&quot;#&quot; class=&quot;text-gray-900 text-hover-primary&quot;&gt;Emma Smith&lt;/a&gt;
					&lt;/td&gt;
					&lt;td&gt;
						&lt;a href=&quot;#&quot; class=&quot;text-gray-900 text-hover-primary&quot;&gt;e.smith@kpmg.com.au&lt;/a&gt;
					&lt;/td&gt;
					&lt;td&gt;
						&lt;div class=&quot;badge badge-light-success&quot;&gt;Active&lt;/div&gt;
					&lt;/td&gt;
					&lt;td data-order=&quot;2022-03-10T14:40:00+05:00&quot;&gt;10 Mar 2022, 2:40 pm&lt;/td&gt;
					&lt;td class=&quot;text-end pe-0&quot;&gt;94&lt;/td&gt;
					&lt;td class=&quot;text-end pe-0&quot;&gt;103&lt;/td&gt;
					&lt;td class=&quot;text-end&quot;&gt;$500.00&lt;/td&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="kt_highlight_68e52120ee189" role="tabpanel">
                                            <div class="highlight-code">
                                                <pre class="language-javascript" style="height:400px"><code class="language-javascript">&quot;use strict&quot;;

// Class definition
var KTDatatablesExample = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll(&#039;tbody tr&#039;);

        tableRows.forEach(row =&gt; {
            const dateRow = row.querySelectorAll(&#039;td&#039;);
            const realDate = moment(dateRow[3].innerHTML, &quot;DD MMM YYYY, LT&quot;).format(); // select date from 4th column in table
            dateRow[3].setAttribute(&#039;data-order&#039;, realDate);
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            &quot;info&quot;: false,
            &#039;order&#039;: [],
            &#039;pageLength&#039;: 10,
        });
    }

    // Hook export buttons
    var exportButtons = () =&gt; {
        const documentTitle = &#039;Customer Orders Report&#039;;
        var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: &#039;copyHtml5&#039;,
                    title: documentTitle
                },
                {
                    extend: &#039;excelHtml5&#039;,
                    title: documentTitle
                },
                {
                    extend: &#039;csvHtml5&#039;,
                    title: documentTitle
                },
                {
                    extend: &#039;pdfHtml5&#039;,
                    title: documentTitle
                }
            ]
        }).container().appendTo($(&#039;#kt_datatable_example_buttons&#039;));

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll(&#039;#kt_datatable_example_export_menu [data-kt-export]&#039;);
        exportButtons.forEach(exportButton =&gt; {
            exportButton.addEventListener(&#039;click&#039;, e =&gt; {
                e.preventDefault();

                // Get clicked export value
                const exportValue = e.target.getAttribute(&#039;data-kt-export&#039;);
                const target = document.querySelector(&#039;.dt-buttons .buttons-&#039; + exportValue);

                // Trigger click event on hidden datatable export buttons
                target.click();
            });
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () =&gt; {
        const filterSearch = document.querySelector(&#039;[data-kt-filter=&quot;search&quot;]&#039;);
        filterSearch.addEventListener(&#039;keyup&#039;, function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector(&#039;#kt_datatable_example&#039;);

            if ( !table ) {
                return;
            }

            initDatatable();
            exportButtons();
            handleSearchDatatable();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesExample.init();
});</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end::Highlight-->
                            </div>
                            <!--end::Code-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Card Body-->
                </div>
                <!--end::Card-->

                {{-- <!--begin::Sidebar wrapper-->
                <div class="ms-7 flex-row-auto w-lg-250px">
                    <!--begin::Sidebar nav-->
                    <div class="card card-flush d-none d-lg-flex" data-kt-sticky="true"
                        data-kt-sticky-name="sidebar-navs" data-kt-sticky-offset="{default: false, lg: 250}"
                        data-kt-sticky-width="250px" data-kt-sticky-animation="false" data-kt-sticky-left="auto"
                        data-kt-sticky-top="25px" data-kt-sticky-zindex="5">
                        <!--begin::Card body-->
                        <div class="card-body px-0 px-6 py-6 min-h-300px">


                            <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                                <img src="https://devs.keenthemes.com/assets/media/banners/buy-metronic.png"
                                    alt="buy metronic" class="mw-100 rounded-3" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-html="true" data-bs-placement="top"
                                    data-bs-title="<b>License Reminder</b>"
                                    data-bs-content="One license allows using Metronic for a single deployment and all subsequent usage requires a separate license. <div class='mb-3'></div> If you plan to use Metronic in a Software as a Service (SaaS) model with paid subscriptions, you'll need an Extended License." />
                            </a>

                            <a href="https://keenthemes.com/products/templates-mega-bundle?utm_source=docs&utm_content=mega-bundle"
                                class="d-block mb-8">
                                <img src="https://devs.keenthemes.com/assets/media/banners/mega-bundle.png"
                                    alt="buy mega bundle" class="mw-100 rounded-3" />
                            </a>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Sidebar nav-->
                </div>
                <!--end::Sidebar wrapper--> --}}
            </div>
            <!--end::Container-->
        </div>
        <!--end::Content-->
    @endsection
    @section('scripts')
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <!--end::Vendors Javascript-->

        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('assets/js/custom/documentation/general/datatables/export.js') }}"></script>
        <!--end::Custom Javascript-->
    @endsection

