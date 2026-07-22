@php
    $tag = $tag ?? 'h3';
    $wrapperClass = $wrapperClass ?? 'card-title align-items-start flex-column';
    $title = $title ?? '';
    $titleClass = $titleClass ?? 'card-label fw-bold fs-3 mb-1';
    $subtitle = $subtitle ?? '';
    $subtitleClass = $subtitleClass ?? 'text-muted fw-semibold fs-7';
@endphp

<{{ $tag }} class="{{ $wrapperClass }}">
    <span class="{{ $titleClass }}">{{ $title }}</span>
    <span class="{{ $subtitleClass }}">{{ $subtitle }}</span>
</{{ $tag }}>
