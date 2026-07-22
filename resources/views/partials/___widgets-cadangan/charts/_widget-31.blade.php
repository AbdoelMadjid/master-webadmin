@php
    $widgetNumber = $widgetNumber ?? 31;
    $cardClass = $cardClass ?? 'card card-flush h-xl-100';
    $headerClass = $headerClass ?? 'card-header pt-7 mb-7';
    $titleClass = $titleClass ?? 'card-title align-items-start flex-column';
    $titleTextClass = $titleTextClass ?? 'card-label fw-bold text-gray-800';
    $subtitleClass = $subtitleClass ?? 'text-gray-500 mt-1 fw-semibold fs-6';
    $title = $title ?? 'Warephase stats';
    $subtitle = $subtitle ?? '8k social visitors';
    $bodyClass = $bodyClass ?? 'card-body d-flex align-items-end pt-0';
    $chartId = $chartId ?? 'kt_charts_widget_31_chart';
    $chartClass = $chartClass ?? 'w-100 h-300px';
    $toolbarView = $toolbarView ?? null;
    $toolbarData = $toolbarData ?? [];
    $bodyView = $bodyView ?? null;
    $bodyData = $bodyData ?? [];
@endphp

<!--begin::Chart widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Header-->
    <div class="{{ $headerClass }}">
        <!--begin::Title-->
        <h3 class="{{ $titleClass }}">
            <span class="{{ $titleTextClass }}">{{ $title }}</span>
            <span class="{{ $subtitleClass }}">{{ $subtitle }}</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            @if ($toolbarView)
                @include($toolbarView, $toolbarData)
            @else
                <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
            @endif
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        @if ($bodyView)
            @include($bodyView, array_merge(['chartId' => $chartId, 'chartClass' => $chartClass], $bodyData))
        @else
            <!--begin::Chart-->
            <div id="{{ $chartId }}" class="{{ $chartClass }}"></div>
            <!--end::Chart-->
        @endif
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget {{ $widgetNumber }}-->
