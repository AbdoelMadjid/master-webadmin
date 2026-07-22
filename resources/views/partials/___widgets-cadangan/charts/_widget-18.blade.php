@php
    $widgetNumber = $widgetNumber ?? 18;
    $cardClass = $cardClass ?? 'card card-flush h-xl-100';
    $title = $title ?? 'Learn Activity';
    $subtitle = $subtitle ?? 'Hours per course';
    $chartId = $chartId ?? 'kt_charts_widget_18_chart';
    $chartClass = $chartClass ?? 'h-325px w-100 min-h-auto ps-4 pe-6';
@endphp

<!--begin::Chart widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800">{{ $title }}</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">{{ $subtitle }}</span>
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
                <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                    <span class="path6"></span>
                </i>
            </div>
            <!--end::Daterangepicker-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
        <!--begin::Chart-->
        <div id="{{ $chartId }}" class="{{ $chartClass }}"></div>
        <!--end::Chart-->
    </div>
    <!--end: Card Body-->
</div>
<!--end::Chart widget {{ $widgetNumber }}-->
