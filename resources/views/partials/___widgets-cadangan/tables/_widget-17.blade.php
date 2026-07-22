<!--begin::Table widget 17-->
<div class="card card-flush border-0">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fs-3 fw-bold text-gray-800">Campaigns</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">Select a campaign & date range to view data</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                class="btn btn-sm btn-light d-flex align-items-center px-4">
                <!--begin::Display range-->
                <div class="text-gray-600 fw-bold">Loading date range...</div>
                <!--end::Display range-->
                <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
            </div>
            <!--end::Daterangepicker-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-6">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed align-middle gs-0 gy-6 my-0">
                <!--begin::Table head-->
                <thead>
                    <tr class="fs-7 fw-bold text-gray-500">
                        <th class="p-0 pb-3 w-150px text-start">STATUS</th>
                        <th class="p-0 pb-3 min-w-100px text-start">NAME</th>
                        <th class="p-0 pb-3 min-w-100px text-center">BUDGET</th>
                        <th class="p-0 pb-3 w-250px text-start">OPTIMIZATION SCORE</th>
                        <th class="p-0 pb-3 w-50px text-end">ACTION</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    <tr>
                        <td>
                            <span class="badge py-3 px-4 fs-7 badge-light-success">Live Now</span>
                        </td>
                        <td class="ps-0 text-start">
                            <span class="text-gray-800 fw-bold fs-6 d-block">Marni Schlanger</span>
                            <span class="text-gray-500 fw-semibold fs-7">20 Jul 2021</span>
                        </td>
                        <td class="text-center">
                            <span class="text-gray-800 fw-bold fs-6">$15</span>
                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                        </td>
                        <td class="ps-0 pe-20">
                            <div class="progress bg-light-primary rounded">
                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                    style="height: 12px;width: 120px" aria-valuenow="120" aria-valuemin="0"
                                    aria-valuemax="120px"></div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Reviewing</span>
                        </td>
                        <td class="ps-0 text-start">
                            <span class="text-gray-800 fw-bold fs-6 d-block">Addison Smart</span>
                            <span class="text-gray-500 fw-semibold fs-7">19 Jul 2021</span>
                        </td>
                        <td class="text-center">
                            <span class="text-gray-800 fw-bold fs-6">$10</span>
                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                        </td>
                        <td class="ps-0 pe-20">
                            <div class="progress bg-light-primary rounded">
                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                    style="height: 12px;width: 10px" aria-valuenow="10" aria-valuemin="0"
                                    aria-valuemax="10px"></div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Paused</span>
                        </td>
                        <td class="ps-0 text-start">
                            <span class="text-gray-800 fw-bold fs-6 d-block">Paul Melone</span>
                            <span class="text-gray-500 fw-semibold fs-7">21 Jul 2021</span>
                        </td>
                        <td class="text-center">
                            <span class="text-gray-800 fw-bold fs-6">$3</span>
                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                        </td>
                        <td class="ps-0 pe-20">
                            <div class="progress bg-light-primary rounded">
                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                    style="height: 12px;width: 60px" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="60px"></div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="badge py-3 px-4 fs-7 badge-light-success">Live Now</span>
                        </td>
                        <td class="ps-0 text-start">
                            <span class="text-gray-800 fw-bold fs-6 d-block">Marni Schlanger</span>
                            <span class="text-gray-500 fw-semibold fs-7">23 Jul 2021</span>
                        </td>
                        <td class="text-center">
                            <span class="text-gray-800 fw-bold fs-6">$23</span>
                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                        </td>
                        <td class="ps-0 pe-20">
                            <div class="progress bg-light-primary rounded">
                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                    style="height: 12px;width: 160px" aria-valuenow="160" aria-valuemin="0"
                                    aria-valuemax="160px"></div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <!--end::Table body-->
            </table>
        </div>
        <!--end::Table-->
        <!--begin::Separator-->
        <div class="separator separator-dashed border-gray-200 mb-n4"></div>
        <!--end::Separator-->
        <!--begin::Pagination-->
        <div class="d-flex flex-stack flex-wrap pt-10">
            <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
            <!--begin::Pages-->
            <ul class="pagination">
                <li class="page-item previous">
                    <a href="#" class="page-link">
                        <i class="previous"></i>
                    </a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">5</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">6</a>
                </li>
                <li class="page-item next">
                    <a href="#" class="page-link">
                        <i class="next"></i>
                    </a>
                </li>
            </ul>
            <!--end::Pages-->
        </div>
        <!--end::Pagination-->
    </div>
    <!--end: Card Body-->
</div>
<!--end::Table widget 17-->
