@php
    $widgetNumber = $widgetNumber ?? 13;
    $cardClass = $cardClass ?? 'card card-xl-stretch mb-xl-8 theme-dark-bg-body';
    $backgroundColor = $backgroundColor ?? '#F7D9E3';
    $title = $title ?? 'Earnings';
    $titleHref = $titleHref ?? '#';
    $titleClass = $titleClass ?? 'text-gray-900 text-hover-primary fw-bold fs-3';
    $chartClass = $chartClass ?? 'mixed-widget-13-chart';
    $chartStyle = $chartStyle ?? 'height: 100px';
    $symbol = $symbol ?? '$';
    $showSymbol = $showSymbol ?? true;
    $symbolClass = $symbolClass ?? 'text-gray-900 fw-bold fs-2x lh-0';
    $number = $number ?? '560';
    $numberClass = $numberClass ?? 'text-gray-900 fw-bold fs-3x me-2 lh-0';
    $text = $text ?? '+ 28% this week';
    $textClass = $textClass ?? 'text-gray-900 fw-bold fs-6 lh-0';
@endphp

<!--begin::Mixed Widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}" style="background-color: {{ $backgroundColor }}">
    <!--begin::Body-->
    <div class="card-body d-flex flex-column">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-grow-1">
            <!--begin::Title-->
            <a href="{{ $titleHref }}" class="{{ $titleClass }}">{{ $title }}</a>
            <!--end::Title-->
            <!--begin::Chart-->
            <div class="{{ $chartClass }}" style="{{ $chartStyle }}"></div>
            <!--end::Chart-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Stats-->
        <div class="pt-5">
            @if ($showSymbol)
                <!--begin::Symbol-->
                <span class="{{ $symbolClass }}">{{ $symbol }}</span>
                <!--end::Symbol-->
            @endif
            <!--begin::Number-->
            <span class="{{ $numberClass }}">{{ $number }}</span>
            <!--end::Number-->
            <!--begin::Text-->
            <span class="{{ $textClass }}">{{ $text }}</span>
            <!--end::Text-->
        </div>
        <!--end::Stats-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget {{ $widgetNumber }}-->
