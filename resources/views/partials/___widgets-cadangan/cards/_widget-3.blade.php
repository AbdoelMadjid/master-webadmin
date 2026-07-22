<!--begin::Card widget 3-->
@php
    $cardClass = $cardClass ?? 'card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100';
    $backgroundColor = $backgroundColor ?? '#F1416C';
    $backgroundImage = $backgroundImage ?? 'assets/media/svg/shapes/wave-bg-red.svg';
    $iconContainerColor = $iconContainerColor ?? '#F1416C';
    $mainValue = $mainValue ?? '1.2k';
    $labelLine1 = $labelLine1 ?? 'Inbound';
    $labelLine2 = $labelLine2 ?? 'Calls';
    $footerValue = $footerValue ?? '935';
    $footerLabel = $footerLabel ?? 'Problems Solved';
@endphp
<div class="{{ $cardClass }}"
    style="background-color: {{ $backgroundColor }};background-image:url('{{ URL::asset($backgroundImage) }}')">
    <!--begin::Header-->
    <div class="card-header pt-5 mb-3">
        <!--begin::Icon-->
        <div class="d-flex flex-center rounded-circle h-80px w-80px"
            style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: {{ $iconContainerColor }}">
            <i class="ki-duotone ki-call text-white fs-2qx lh-0">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
                <span class="path5"></span>
                <span class="path6"></span>
                <span class="path7"></span>
                <span class="path8"></span>
            </i>
        </div>
        <!--end::Icon-->
    </div>
    <!--end::Header-->
    <!--begin::Card body-->
    <div class="card-body d-flex align-items-end mb-3">
        <!--begin::Info-->
        <div class="d-flex align-items-center">
            <span class="fs-4hx text-white fw-bold me-6">{{ $mainValue }}</span>
            <div class="fw-bold fs-6 text-white">
                <span class="d-block">{{ $labelLine1 }}</span>
                <span class="">{{ $labelLine2 }}</span>
            </div>
        </div>
        <!--end::Info-->
    </div>
    <!--end::Card body-->
    <!--begin::Card footer-->
    <div class="card-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
        <!--begin::Progress-->
        <div class="fw-bold text-white py-2">
            <span class="fs-1 d-block">{{ $footerValue }}</span>
            <span class="opacity-50">{{ $footerLabel }}</span>
        </div>
        <!--end::Progress-->
    </div>
    <!--end::Card footer-->
</div>
<!--end::Card widget 3-->
