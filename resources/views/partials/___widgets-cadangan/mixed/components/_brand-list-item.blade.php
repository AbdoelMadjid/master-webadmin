@php
    $itemClass = $itemClass ?? 'd-flex flex-stack';
    $sectionClass = $sectionClass ?? 'd-flex align-items-center me-2';
    $symbolClass = $symbolClass ?? 'symbol symbol-50px me-3';
    $symbolLabelTag = $symbolLabelTag ?? 'div';
    $symbolLabelClass = $symbolLabelClass ?? 'symbol-label bg-light';
    $image = $image ?? 'assets/media/svg/brand-logos/plurk.svg';
    $imageClass = $imageClass ?? 'h-50';
    $titleWrapClass = $titleWrapClass ?? '';
    $href = $href ?? '#';
    $title = $title ?? '';
    $titleClass = $titleClass ?? 'fs-6 text-gray-800 text-hover-primary fw-bold';
    $subtitle = $subtitle ?? '';
    $subtitleClass = $subtitleClass ?? 'fs-7 text-muted fw-semibold mt-1';
    $badge = $badge ?? '';
    $badgeClass = $badgeClass ?? 'badge badge-light fw-semibold py-4 px-3';
@endphp

<!--begin::Item-->
<div class="{{ $itemClass }}">
    <!--begin::Section-->
    <div class="{{ $sectionClass }}">
        <!--begin::Symbol-->
        <div class="{{ $symbolClass }}">
            @if ($symbolLabelTag === 'span')
                <span class="{{ $symbolLabelClass }}">
                    <img src="{{ $image }}" class="{{ $imageClass }}" alt="" />
                </span>
            @else
                <div class="{{ $symbolLabelClass }}">
                    <img src="{{ $image }}" class="{{ $imageClass }}" alt="" />
                </div>
            @endif
        </div>
        <!--end::Symbol-->
        <!--begin::Title-->
        <div class="{{ $titleWrapClass }}">
            <a href="{{ $href }}" class="{{ $titleClass }}">{{ $title }}</a>
            <div class="{{ $subtitleClass }}">{{ $subtitle }}</div>
        </div>
        <!--end::Title-->
    </div>
    <!--end::Section-->
    <!--begin::Label-->
    <div class="{{ $badgeClass }}">{{ $badge }}</div>
    <!--end::Label-->
</div>
<!--end::Item-->
