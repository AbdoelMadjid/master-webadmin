@php
    $widgetNumber = $widgetNumber ?? 2;
    $cardClass = $cardClass ?? 'card card-flush h-lg-100';
    $headerClass = $headerClass ?? 'card-header pt-5';
    $titleText = $titleText ?? 'External Links';
    $subtitleText = $subtitleText ?? 'Most used resources';
    $bodyClass = $bodyClass ?? 'card-body pt-5';
    $toolbarHtml = $toolbarHtml ?? <<<'HTML'
<div class="card-toolbar">
    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
        <i class="ki-duotone ki-dots-square fs-1">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
        </i>
    </button>
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
        <div class="menu-item px-3">
            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
        </div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">Create Invoice</a>
        </div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link flex-stack px-3">Create Payment
                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                    <i class="ki-duotone ki-information fs-6">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                </span>
            </a>
        </div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">Generate Bill</a>
        </div>
        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
            <a href="#" class="menu-link px-3">
                <span class="menu-title">Subscription</span>
                <span class="menu-arrow"></span>
            </a>
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Plans</a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Billing</a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Statements</a>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-3">
                    <div class="menu-content px-3">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                            <span class="form-check-label text-muted fs-6">Recuring</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item px-3 my-1">
            <a href="#" class="menu-link px-3">Settings</a>
        </div>
    </div>
</div>
HTML;
    $itemsHtml = $itemsHtml ?? <<<'HTML'
<div class="d-flex flex-stack">
    <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Google Analytics</a>
    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
        <i class="ki-duotone ki-exit-right-corner fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Facebook Ads</a>
    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
        <i class="ki-duotone ki-exit-right-corner fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Seranking</a>
    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
        <i class="ki-duotone ki-exit-right-corner fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
</div>
HTML;
@endphp

<!--begin::List widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Header-->
    <div class="{{ $headerClass }}">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">{{ $titleText }}</span>
            @if(!empty($subtitleText))
                <span class="text-gray-500 mt-1 fw-semibold fs-6">{{ $subtitleText }}</span>
            @endif
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        {!! $toolbarHtml !!}
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        {!! $itemsHtml !!}
    </div>
    <!--end::Body-->
</div>
<!--end::List widget {{ $widgetNumber }}-->
