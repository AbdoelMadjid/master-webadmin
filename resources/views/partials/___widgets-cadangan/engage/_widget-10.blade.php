@php
    $widgetNumber = $widgetNumber ?? 10;
    $cardClass = $cardClass ?? 'card card-flush h-md-100';
    $bodyClass = $bodyClass ?? 'card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0';
    $bodyStyle = $bodyStyle ?? "background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')";
    $contentClass = $contentClass ?? ($contentWrapperClass ?? 'mb-10');
    $titleHtml = $titleHtml ?? <<<'HTML'
<span class="me-2">Try our all new Enviroment with
    <br />
    <span class="position-relative d-inline-block text-danger">
        <a href="pages/user-profile/overview.html" class="text-danger opacity-75-hover">Pro Plan</a>
        <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
    </span></span>for Free
HTML;
    $titleClass = $titleClass ?? 'fs-2hx fw-bold text-gray-800 text-center mb-13';
    $descriptionHtml = $descriptionHtml ?? null;
    $descriptionClass = $descriptionClass ?? '';
    $actionsHtml = $actionsHtml ?? <<<'HTML'
<a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
HTML;
    $actionsClass = $actionsClass ?? 'text-center';
    $contentHtml = $contentHtml ?? trim(
        '<div class="' . $titleClass . '">' . $titleHtml . '</div>' .
        ($descriptionHtml ? '<div class="' . $descriptionClass . '">' . $descriptionHtml . '</div>' : '') .
        '<div class="' . $actionsClass . '">' . $actionsHtml . '</div>'
    );
    $illustrationHtml = $illustrationHtml ?? <<<'HTML'
<img class="mx-auto h-150px h-lg-200px theme-light-show" src="assets/media/illustrations/misc/upgrade.svg" alt="" />
<img class="mx-auto h-150px h-lg-200px theme-dark-show" src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
HTML;
@endphp

<!--begin::Engage widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Body-->
    <div class="{{ $bodyClass }}" @if($bodyStyle) style="{{ $bodyStyle }}" @endif>
        <!--begin::Wrapper-->
        <div class="{{ $contentClass }}">
            {!! $contentHtml !!}
        </div>
        <!--begin::Wrapper-->
        <!--begin::Illustration-->
        {!! $illustrationHtml !!}
        <!--end::Illustration-->
    </div>
    <!--end::Body-->
</div>
<!--end::Engage widget {{ $widgetNumber }}-->
