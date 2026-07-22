@php
    $widgetNumber = $widgetNumber ?? 7;
    $cardBodyClass = $cardBodyClass ?? 'd-flex flex-column p-0';
    $headerWrapClass = $headerWrapClass ?? 'flex-grow-1 card-p pb-0';
    $title = $title ?? 'Generate Reports';
    $titleTag = $titleTag ?? 'a';
    $titleClass = $titleClass ?? 'text-gray-900 text-hover-primary fw-bold fs-3';
    $titleHref = $titleHref ?? '#';
    $subtitle = $subtitle ?? 'Finance and accounting reports';
    $subtitleTag = $subtitleTag ?? 'div';
    $subtitleClass = $subtitleClass ?? 'text-muted fs-7 fw-bold';
    $value = $value ?? '$24,500';
    $valueClass = $valueClass ?? 'fw-bold fs-3 text-info';
    $chartClass = $chartClass ?? 'mixed-widget-7-chart card-rounded-bottom';
    $chartDataColorAttr = $chartDataColorAttr ?? 'data-kt-chart-color';
    $chartColor = $chartColor ?? 'info';
    $chartStyle = $chartStyle ?? 'height: 150px';
@endphp

<!--begin::Mixed Widget {{ $widgetNumber }}-->
<div class="card card-xl-stretch mb-xl-8">
    <!--begin::Body-->
    <div class="card-body {{ $cardBodyClass }}">
        <!--begin::Stats-->
        <div class="{{ $headerWrapClass }}">
            <div class="d-flex flex-stack flex-wrap">
                <div class="me-2">
                    @if ($titleTag === 'a')
                        <a href="{{ $titleHref }}" class="{{ $titleClass }}">{{ $title }}</a>
                    @else
                        <span class="{{ $titleClass }}">{{ $title }}</span>
                    @endif
                    @if ($subtitleTag === 'span')
                        <span class="{{ $subtitleClass }}">{{ $subtitle }}</span>
                    @else
                        <div class="{{ $subtitleClass }}">{{ $subtitle }}</div>
                    @endif
                </div>
                <div class="{{ $valueClass }}">{{ $value }}</div>
            </div>
        </div>
        <!--end::Stats-->
        <!--begin::Chart-->
        <div class="{{ $chartClass }}" {{ $chartDataColorAttr }}="{{ $chartColor }}" style="{{ $chartStyle }}"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget {{ $widgetNumber }}-->
