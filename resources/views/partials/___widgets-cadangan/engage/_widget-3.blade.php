@php
    $widgetNumber = $widgetNumber ?? 3;
    $cardClass = $cardClass ?? 'card bg-primary h-md-100';
    $theme = $theme ?? 'light';
    $titleHtml = $titleHtml ?? 'Delivery is easy<br /><span class="fw-bolder">Start Your Delivery</span>';
    $illustrationStyle = $illustrationStyle ?? "background-image:url('assets/media/svg/illustrations/easy/5.svg')";
    $primaryButton = array_merge([
        'text' => 'New Delivery',
        'class' => 'btn btn-sm bg-white btn-color-gray-800 me-2',
        'href' => null,
        'modal_target' => '#kt_modal_bidding',
        'modal_toggle' => 'modal',
    ], $primaryButton ?? []);
    $secondaryButtonExists = array_key_exists('secondaryButton', get_defined_vars());
    if ($secondaryButtonExists && $secondaryButton === null) {
        $secondaryButton = null;
    } else {
        $secondaryButton = array_merge([
            'text' => 'Quick Guide',
            'class' => 'btn btn-sm bg-white btn-color-white bg-opacity-20',
            'href' => 'pages/user-profile/projects.html',
        ], $secondaryButton ?? []);
    }
@endphp

<!--begin::Engage widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}" @if($theme) data-bs-theme="{{ $theme }}" @endif>
    <!--begin::Body-->
    <div class="card-body d-flex flex-column pt-13 pb-14">
        <!--begin::Heading-->
        <div class="m-0">
            <!--begin::Title-->
            <h1 class="fw-semibold text-white text-center lh-lg mb-9">{!! $titleHtml !!}</h1>
            <!--end::Title-->
            <!--begin::Illustration-->
            <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12"
                style="{{ $illustrationStyle }}"></div>
            <!--end::Illustration-->
        </div>
        <!--end::Heading-->
        <!--begin::Links-->
        <div class="text-center">
            <!--begin::Link-->
            <a class="{{ $primaryButton['class'] }}"
                @if(!empty($primaryButton['href'])) href="{{ $primaryButton['href'] }}" @endif
                @if(!empty($primaryButton['modal_target'])) data-bs-target="{{ $primaryButton['modal_target'] }}" @endif
                @if(!empty($primaryButton['modal_toggle'])) data-bs-toggle="{{ $primaryButton['modal_toggle'] }}" @endif>
                {{ $primaryButton['text'] }}
            </a>
            <!--end::Link-->
            @if(!empty($secondaryButton))
                <!--begin::Link-->
                <a class="{{ $secondaryButton['class'] }}" href="{{ $secondaryButton['href'] }}">{{ $secondaryButton['text'] }}</a>
                <!--end::Link-->
            @endif
        </div>
        <!--end::Links-->
    </div>
    <!--end::Body-->
</div>
<!--end::Engage widget {{ $widgetNumber }}-->
