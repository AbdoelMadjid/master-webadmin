@php
    $widgetNumber = $widgetNumber ?? 1;
    $cardClass = $cardClass ?? 'card h-md-100';
    $dir = $dir ?? 'ltr';
    $titleHtml = $titleHtml ?? 'Have you tried<br />new <span class="fw-bolder">Mobile Application ?</span>';
    $illustrationLightSrc = $illustrationLightSrc ?? ($lightImage ?? 'assets/media/svg/illustrations/easy/1.svg');
    $illustrationDarkSrc = $illustrationDarkSrc ?? ($darkImage ?? 'assets/media/svg/illustrations/easy/1-dark.svg');
    $illustrationSrc = $illustrationSrc ?? ($singleImage ?? null);
    $primaryButton = array_merge([
        'text' => 'Try now',
        'class' => 'btn btn-sm btn-primary me-2',
        'href' => null,
        'modal_target' => '#kt_modal_create_app',
        'modal_toggle' => 'modal',
    ], $primaryButton ?? []);
    $secondaryButtonExists = array_key_exists('secondaryButton', get_defined_vars());
    if ($secondaryButtonExists && $secondaryButton === null) {
        $secondaryButton = null;
    } else {
        $secondaryButton = array_merge([
            'text' => 'Learn more',
            'class' => 'btn btn-sm btn-light',
            'href' => 'apps/invoices/view/invoice-1.html',
        ], $secondaryButton ?? []);
    }
@endphp

<!--begin::Engage widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}" @if($dir) dir="{{ $dir }}" @endif>
    <!--begin::Body-->
    <div class="card-body d-flex flex-column flex-center">
        <!--begin::Heading-->
        <div class="mb-2">
            <!--begin::Title-->
            <h1 class="fw-semibold text-gray-800 text-center lh-lg">{!! $titleHtml !!}</h1>
            <!--end::Title-->
            <!--begin::Illustration-->
            <div class="py-10 text-center">
                @if($illustrationSrc)
                    <img src="{{ $illustrationSrc }}" class="w-200px" alt="" />
                @else
                    <img src="{{ $illustrationLightSrc }}" class="theme-light-show w-200px" alt="" />
                    <img src="{{ $illustrationDarkSrc }}" class="theme-dark-show w-200px" alt="" />
                @endif
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Heading-->
        <!--begin::Links-->
        <div class="text-center mb-1">
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
