<!--begin::Card widget 4-->
@php
    $cardClass = $cardClass ?? 'card card-flush h-md-50 mb-5 mb-xl-10';
    $amount = $amount ?? '69,700';
    $badgeClass = $badgeClass ?? 'badge badge-light-success fs-base';
    $badgeIconClass = $badgeIconClass ?? 'ki-duotone ki-arrow-up fs-5 text-success ms-n1';
    $badgeValue = $badgeValue ?? '2.2%';
    $subtitle = $subtitle ?? 'Expected Earnings';
    $cardBodyClass = $cardBodyClass ?? 'card-body pt-2 pb-4 d-flex align-items-center';
    $chartId = $chartId ?? 'kt_card_widget_4_chart';
    $chartWrapperClass = $chartWrapperClass ?? 'd-flex flex-center me-5 pt-2';
    $labelsContainerClass = $labelsContainerClass ?? 'd-flex flex-column content-justify-center w-100';
    $row1Class = $row1Class ?? 'd-flex fs-6 fw-semibold align-items-center';
    $row2Class = $row2Class ?? 'd-flex fs-6 fw-semibold align-items-center my-3';
    $row3Class = $row3Class ?? 'd-flex fs-6 fw-semibold align-items-center';
    $bullet1Class = $bullet1Class ?? 'bullet w-8px h-6px rounded-2 bg-danger me-3';
    $bullet2Class = $bullet2Class ?? 'bullet w-8px h-6px rounded-2 bg-primary me-3';
    $bullet3Class = $bullet3Class ?? 'bullet w-8px h-6px rounded-2 me-3';
    $bullet3Style = $bullet3Style ?? 'background-color: #E4E6EF';
    $label1 = $label1 ?? 'Shoes';
    $label2 = $label2 ?? 'Gaming';
    $label3 = $label3 ?? 'Others';
    $value1 = $value1 ?? '$7,660';
    $value2 = $value2 ?? '$2,820';
    $value3 = $value3 ?? '$45,257';
    $labelClass = $labelClass ?? 'text-gray-500 flex-grow-1 me-4';
    $valueClass = $valueClass ?? 'fw-bolder text-gray-700 text-xxl-end';
    $showRowSeparator = $showRowSeparator ?? false;
    $rowSeparatorClass = $rowSeparatorClass ?? 'separator separator-dashed min-w-10px flex-grow-1 mx-2';
@endphp
<div class="{{ $cardClass }}">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <div class="card-title d-flex flex-column">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Currency-->
                <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                <!--end::Currency-->
                <!--begin::Amount-->
                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ $amount }}</span>
                <!--end::Amount-->
                <!--begin::Badge-->
                <span class="{{ $badgeClass }}">
                    <i class="{{ $badgeIconClass }}">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>{{ $badgeValue }}</span>
                <!--end::Badge-->
            </div>
            <!--end::Info-->
            <!--begin::Subtitle-->
            <span class="text-gray-500 pt-1 fw-semibold fs-6">{{ $subtitle }}</span>
            <!--end::Subtitle-->
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->
    <!--begin::Card body-->
    <div class="{{ $cardBodyClass }}">
        <!--begin::Chart-->
        <div class="{{ $chartWrapperClass }}">
            <div id="{{ $chartId }}" style="min-width: 70px; min-height: 70px" data-kt-size="70"
                data-kt-line="11"></div>
        </div>
        <!--end::Chart-->
        <!--begin::Labels-->
        <div class="{{ $labelsContainerClass }}">
            <!--begin::Label-->
            <div class="{{ $row1Class }}">
                <!--begin::Bullet-->
                <div class="{{ $bullet1Class }}"></div>
                <!--end::Bullet-->
                <!--begin::Label-->
                <div class="{{ $labelClass }}">{{ $label1 }}</div>
                <!--end::Label-->
                @if ($showRowSeparator)
                    <div class="{{ $rowSeparatorClass }}"></div>
                @endif
                <!--begin::Stats-->
                <div class="{{ $valueClass }}">{{ $value1 }}</div>
                <!--end::Stats-->
            </div>
            <!--end::Label-->
            <!--begin::Label-->
            <div class="{{ $row2Class }}">
                <!--begin::Bullet-->
                <div class="{{ $bullet2Class }}"></div>
                <!--end::Bullet-->
                <!--begin::Label-->
                <div class="{{ $labelClass }}">{{ $label2 }}</div>
                <!--end::Label-->
                @if ($showRowSeparator)
                    <div class="{{ $rowSeparatorClass }}"></div>
                @endif
                <!--begin::Stats-->
                <div class="{{ $valueClass }}">{{ $value2 }}</div>
                <!--end::Stats-->
            </div>
            <!--end::Label-->
            <!--begin::Label-->
            <div class="{{ $row3Class }}">
                <!--begin::Bullet-->
                <div class="{{ $bullet3Class }}" style="{{ $bullet3Style }}"></div>
                <!--end::Bullet-->
                <!--begin::Label-->
                <div class="{{ $labelClass }}">{{ $label3 }}</div>
                <!--end::Label-->
                @if ($showRowSeparator)
                    <div class="{{ $rowSeparatorClass }}"></div>
                @endif
                <!--begin::Stats-->
                <div class="{{ $valueClass }}">{{ $value3 }}</div>
                <!--end::Stats-->
            </div>
            <!--end::Label-->
        </div>
        <!--end::Labels-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card widget 4-->
