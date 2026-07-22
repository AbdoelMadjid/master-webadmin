<!--begin::Card widget 8-->
@php
    $cardClass = $cardClass ?? 'card overflow-hidden h-md-50 mb-5 mb-xl-10';
    $amount = $amount ?? '69,700';
    $showCurrency = $showCurrency ?? true;
    $currency = $currency ?? '$';
    $showBadge = $showBadge ?? true;
    $badgeClass = $badgeClass ?? 'badge badge-light-success fs-base';
    $badgeIconClass = $badgeIconClass ?? 'ki-duotone ki-arrow-up fs-5 text-success ms-n1';
    $badgeValue = $badgeValue ?? '2.2%';
    $suffixText = $suffixText ?? '';
    $description = $description ?? 'Total Online Sales';
    $chartId = $chartId ?? 'kt_card_widget_8_chart';
@endphp
<div class="{{ $cardClass }}">
    <!--begin::Card body-->
    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
        <!--begin::Statistics-->
        <div class="mb-4 px-9">
            <!--begin::Info-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Currency-->
                @if ($showCurrency)
                    <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">{{ $currency }}</span>
                @endif
                <!--end::Currency-->
                <!--begin::Value-->
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ $amount }}</span>
                <!--end::Value-->
                @if (!empty($suffixText))
                    <span class="d-flex align-items-end text-gray-500 fs-6 fw-semibold me-2">{{ $suffixText }}</span>
                @endif
                <!--begin::Label-->
                @if ($showBadge)
                    <span class="{{ $badgeClass }}">
                        <i class="{{ $badgeIconClass }}">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>{{ $badgeValue }}</span>
                @endif
                <!--end::Label-->
            </div>
            <!--end::Info-->
            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">{{ $description }}</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->
        <!--begin::Chart-->
        <div id="{{ $chartId }}" class="min-h-auto" style="height: 125px"></div>
        <!--end::Chart-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card widget 8-->
