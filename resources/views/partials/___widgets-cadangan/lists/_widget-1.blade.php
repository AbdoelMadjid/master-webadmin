@php
    $widgetNumber = $widgetNumber ?? 1;
    $cardClass = $cardClass ?? 'card card-flush h-lg-100';
    $headerClass = $headerClass ?? 'card-header pt-5';
    $titleText = $titleText ?? 'Highlights';
    $subtitleText = $subtitleText ?? 'Latest social statistics';
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
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
        <div class="menu-item px-3">
            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
        </div>
        <div class="separator mb-3 opacity-75"></div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">New Ticket</a>
        </div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">New Customer</a>
        </div>
        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
            <a href="#" class="menu-link px-3">
                <span class="menu-title">New Group</span>
                <span class="menu-arrow"></span>
            </a>
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Admin Group</a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Staff Group</a>
                </div>
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Member Group</a>
                </div>
            </div>
        </div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link px-3">New Contact</a>
        </div>
        <div class="separator mt-3 opacity-75"></div>
        <div class="menu-item px-3">
            <div class="menu-content px-3 py-3">
                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
            </div>
        </div>
    </div>
</div>
HTML;
    $itemsHtml = $itemsHtml ?? <<<'HTML'
<div class="d-flex flex-stack">
    <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
    <div class="d-flex align-items-senter">
        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <span class="text-gray-900 fw-bolder fs-6">7.8</span>
        <span class="text-gray-500 fw-bold fs-6">/10</span>
    </div>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <div class="text-gray-700 fw-semibold fs-6 me-2">Instagram Followers</div>
    <div class="d-flex align-items-senter">
        <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <span class="text-gray-900 fw-bolder fs-6">730k</span>
    </div>
</div>
<div class="separator separator-dashed my-3"></div>
<div class="d-flex flex-stack">
    <div class="text-gray-700 fw-semibold fs-6 me-2">Google Ads CPC</div>
    <div class="d-flex align-items-senter">
        <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <span class="text-gray-900 fw-bolder fs-6">$2.09</span>
    </div>
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
<!--end::LIst widget {{ $widgetNumber }}-->
