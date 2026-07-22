@php
    $widgetNumber = $widgetNumber ?? 8;
    $cardClass = $cardClass ?? 'card border-0 h-md-100';
    $theme = $theme ?? 'light';
    $cardStyle = $cardStyle ?? 'background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)';
    $bodyClass = $bodyClass ?? 'card-body';
    $rowClass = $rowClass ?? 'row align-items-center h-100';
    $leftColClass = $leftColClass ?? 'col-7 ps-xl-13';
    $titleHtml = $titleHtml ?? '<span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get best offer</span><span class="fs-2qx fw-bold">Upgrade Your Plan</span>';
    $titleClass = $titleClass ?? ($titleWrapperClass ?? 'text-white mb-6 pt-6');
    $descriptionHtml = $descriptionHtml ?? ($textHtml ?? 'Flat cartoony and illustrations with vivid unblended purple hair lady');
    $descriptionClass = $descriptionClass ?? ($textClass ?? 'fw-semibold text-white fs-6 mb-8 d-block opacity-75');
    $itemsClass = $itemsClass ?? ($itemsWrapperClass ?? 'd-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20');
    $itemsHtml = $itemsHtml ?? '
        <div class="d-flex align-items-center me-5 me-xl-13">
            <div class="symbol symbol-30px symbol-circle me-3">
                <span class="symbol-label" style="background: #35C7FF">
                    <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
            </div>
            <div class="text-white">
                <span class="fw-semibold d-block fs-8 opacity-75">Projects</span>
                <span class="fw-bold fs-7">Up to 500</span>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="symbol symbol-30px symbol-circle me-3">
                <span class="symbol-label" style="background: #35C7FF">
                    <i class="ki-duotone ki-abstract-26 fs-5 text-white">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
            </div>
            <div class="text-white">
                <span class="fw-semibold opacity-75 d-block fs-8">Tasks</span>
                <span class="fw-bold fs-7">Unlimited</span>
            </div>
        </div>
    ';
    $actionsClass = $actionsClass ?? ($actionsWrapperClass ?? 'd-flex flex-column flex-sm-row d-grid gap-2');
    $actionsHtml = $actionsHtml ?? '
        <a href="#" class="btn btn-success flex-shrink-0 me-lg-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
        <a href="#" class="btn btn-primary flex-shrink-0" style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Read Guides</a>
    ';
    $rightColClass = $rightColClass ?? 'col-5 pt-10';
    $illustrationClass = $illustrationClass ?? 'bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px';
    $illustrationStyle = $illustrationStyle ?? "background-image:url('assets/media/svg/illustrations/easy/5.svg')";
    $illustrationHtml = $illustrationHtml ?? null;
@endphp

<!--begin::Engage widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}" @if($theme) data-bs-theme="{{ $theme }}" @endif @if($cardStyle) style="{{ $cardStyle }}" @endif>
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        <!--begin::Row-->
        <div class="{{ $rowClass }}">
            <!--begin::Col-->
            <div class="{{ $leftColClass }}">
                <!--begin::Title-->
                <div class="{{ $titleClass }}">
                    {!! $titleHtml !!}
                </div>
                <!--end::Title-->
                <!--begin::Text-->
                <span class="{{ $descriptionClass }}">{!! $descriptionHtml !!}</span>
                <!--end::Text-->
                <!--begin::Items-->
                <div class="{{ $itemsClass }}">
                    {!! $itemsHtml !!}
                </div>
                <!--end::Items-->
                <!--begin::Action-->
                <div class="{{ $actionsClass }}">
                    {!! $actionsHtml !!}
                </div>
                <!--end::Action-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="{{ $rightColClass }}">
                <!--begin::Illustration-->
                @if($illustrationHtml)
                    {!! $illustrationHtml !!}
                @else
                    <div class="{{ $illustrationClass }}" style="{{ $illustrationStyle }}"></div>
                @endif
                <!--end::Illustration-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Body-->
</div>
<!--end::Engage widget {{ $widgetNumber }}-->
