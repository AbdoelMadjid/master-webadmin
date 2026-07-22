<!--begin::Mixed Widget 1-->
<div class="card card-xl-stretch mb-xl-8">
    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Header-->
        <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
            <!--begin::Heading-->
            <div class="d-flex flex-stack">
                <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                <div class="ms-1">
                    <!--begin::Menu-->
                    @include('partials.widgets.mixed.components._menu-trigger-category', [
                        'buttonClass' => 'btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3',
                    ])
                    <!--begin::Menu 3-->
                    @include('partials.widgets.mixed.components._menu-payments')
                    <!--end::Menu 3-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Heading-->
            <!--begin::Balance-->
            <div class="d-flex text-center flex-column text-white pt-8">
                <span class="fw-semibold fs-7">You Balance</span>
                <span class="fw-bold fs-2x pt-1">$37,562.00</span>
            </div>
            <!--end::Balance-->
        </div>
        <!--end::Header-->
        <!--begin::Items-->
        <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1"
            style="margin-top: -100px">
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-6">
                <!--begin::Symbol-->
                <div class="symbol symbol-45px w-40px me-5">
                    <span class="symbol-label bg-lighten">
                        <i class="ki-duotone ki-compass fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                </div>
                <!--end::Symbol-->
                <!--begin::Description-->
                <div class="d-flex align-items-center flex-wrap w-100">
                    <!--begin::Title-->
                    <div class="mb-1 pe-3 flex-grow-1">
                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                        <div class="text-gray-500 fw-semibold fs-7">100 Regions</div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="d-flex align-items-center">
                        <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Description-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-6">
                <!--begin::Symbol-->
                <div class="symbol symbol-45px w-40px me-5">
                    <span class="symbol-label bg-lighten">
                        <i class="ki-duotone ki-element-11 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                </div>
                <!--end::Symbol-->
                <!--begin::Description-->
                <div class="d-flex align-items-center flex-wrap w-100">
                    <!--begin::Title-->
                    <div class="mb-1 pe-3 flex-grow-1">
                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                        <div class="text-gray-500 fw-semibold fs-7">Quarter 2/3</div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="d-flex align-items-center">
                        <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Description-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-6">
                <!--begin::Symbol-->
                <div class="symbol symbol-45px w-40px me-5">
                    <span class="symbol-label bg-lighten">
                        <i class="ki-duotone ki-graph-up fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                        </i>
                    </span>
                </div>
                <!--end::Symbol-->
                <!--begin::Description-->
                <div class="d-flex align-items-center flex-wrap w-100">
                    <!--begin::Title-->
                    <div class="mb-1 pe-3 flex-grow-1">
                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
                        <div class="text-gray-500 fw-semibold fs-7">80% Rate</div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="d-flex align-items-center">
                        <div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Description-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="d-flex align-items-center">
                <!--begin::Symbol-->
                <div class="symbol symbol-45px w-40px me-5">
                    <span class="symbol-label bg-lighten">
                        <i class="ki-duotone ki-document fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                </div>
                <!--end::Symbol-->
                <!--begin::Description-->
                <div class="d-flex align-items-center flex-wrap w-100">
                    <!--begin::Title-->
                    <div class="mb-1 pe-3 flex-grow-1">
                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
                        <div class="text-gray-500 fw-semibold fs-7">3090 Refunds</div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="d-flex align-items-center">
                        <div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Description-->
            </div>
            <!--end::Item-->
        </div>
        <!--end::Items-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 1-->
