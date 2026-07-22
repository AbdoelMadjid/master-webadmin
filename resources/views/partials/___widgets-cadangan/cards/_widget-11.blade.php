<!--begin::Card widget 11-->
@php
    $cardClass = $cardClass ?? 'card card-flush h-xl-100';
    $cardStyle = $cardStyle ?? 'background-color: #F6E5CA';
    $coinName = $coinName ?? 'Bitcoin';
    $coinRate = $coinRate ?? '36,668 USD for 1 BTC';
    $shapeImage = $shapeImage ?? 'assets/media/svg/shapes/bitcoin.svg';
    $balance = $balance ?? '0.44554576 BTC';
    $balanceInUsd = $balanceInUsd ?? '19,335,45 USD';
@endphp
<div class="{{ $cardClass }}" style="{{ $cardStyle }}">
    <!--begin::Header-->
    <div class="card-header flex-nowrap pt-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-4 text-gray-800">{{ $coinName }}</span>
            <span class="mt-1 fw-semibold fs-7">{{ $coinRate }}</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            @include('partials.widgets.cards._toolbar-menu', [
                'buttonClass' => 'btn btn-icon justify-content-end',
                'iconVariant' => 'dots-square',
                'iconClass' => 'fs-1',
            ])
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body text-center pt-5">
        <!--begin::Image-->
        <img src="{{ URL::asset($shapeImage) }}" class="h-125px mb-5" alt="" />
        <!--end::Image-->
        <!--begin::Section-->
        <div class="text-start">
            <span class="d-block fw-bold fs-1 text-gray-800">{{ $balance }}</span>
            <span class="mt-1 fw-semibold fs-3">{{ $balanceInUsd }}</span>
        </div>
        <!--end::Section-->
    </div>
    <!--end::Body-->
</div>
<!--end::Card widget 11-->
