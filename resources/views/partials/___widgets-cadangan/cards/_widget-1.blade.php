<!--begin::Card widget 1-->
<div class="card card-flush border-0 h-xl-100" data-bs-theme="light" style="background-color: #22232B">
    <!--begin::Header-->
    <div class="card-header pt-2">
        <!--begin::Title-->
        <h3 class="card-title">
            <span class="text-white fs-3 fw-bold me-2">Facebook Campaign</span>
            <span class="badge badge-success">Active</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            @include('partials.widgets.cards._toolbar-menu', [
                'buttonClass' => 'btn btn-icon bg-white bg-opacity-10 btn-color-white btn-active-success w-25px h-25px',
                'iconVariant' => 'black-right',
                'iconClass' => 'fs-5',
            ])
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body d-flex justify-content-between flex-column pt-1 px-0 pb-0">
        <!--begin::Wrapper-->
        <div class="d-flex flex-wrap px-9 mb-5">
            <!--begin::Stat-->
            <div class="rounded min-w-125px py-3 px-4 my-1 me-6" style="border: 1px dashed rgba(255, 255, 255, 0.15)">
                <!--begin::Number-->
                <div class="d-flex align-items-center">
                    <div class="text-white fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4368"
                        data-kt-countup-prefix="$">0</div>
                </div>
                <!--end::Number-->
                <!--begin::Label-->
                <div class="fw-semibold fs-6 text-white opacity-50">New Followers</div>
                <!--end::Label-->
            </div>
            <!--end::Stat-->
            <!--begin::Stat-->
            <div class="rounded min-w-125px py-3 px-4 my-1" style="border: 1px dashed rgba(255, 255, 255, 0.15)">
                <!--begin::Number-->
                <div class="d-flex align-items-center">
                    <div class="text-white fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="120,000">0</div>
                </div>
                <!--end::Number-->
                <!--begin::Label-->
                <div class="fw-semibold fs-6 text-white opacity-50">Followers Goal</div>
                <!--end::Label-->
            </div>
            <!--end::Stat-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Chart-->
        <div id="kt_card_widget_1_chart" data-kt-chart-color="primary" style="height: 105px"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Card widget 1-->
