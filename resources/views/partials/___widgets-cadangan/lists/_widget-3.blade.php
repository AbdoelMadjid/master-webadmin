@php
    $widgetNumber = $widgetNumber ?? 3;
    $cardClass = $cardClass ?? 'card card-flush h-xl-100';
    $headerClass = $headerClass ?? 'card-header pt-5';
    $titleText = $titleText ?? 'Channels';
    $titleClass = $titleClass ?? 'card-label fw-bold text-gray-900 fs-3';
    $subtitleText = $subtitleText ?? 'Users from all channels';
    $subtitleClass = $subtitleClass ?? 'text-gray-500 mt-1 fw-semibold fs-6';
    $bodyClass = $bodyClass ?? 'card-body';
@endphp

<!--begin::List widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Header-->
    <div class="{{ $headerClass }}">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="{{ $titleClass }}">{{ $titleText }}</span>
            <span class="{{ $subtitleClass }}">{{ $subtitleText }}</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        @if(!empty($toolbarHtml))
            {!! $toolbarHtml !!}
        @else
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                    <i class="ki-duotone ki-dots-square fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                </button>
                <!--begin::Menu 2-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                    data-kt-menu="true">
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
                <!--end::Menu 2-->
                <!--end::Menu-->
            </div>
        @endif
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        @if(!empty($itemsHtml))
            {!! $itemsHtml !!}
        @else
        <!--begin::Item-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Icon-->
                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-3 w-30px" alt="" />
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="flex-grow-1">
                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Dribbble</a>
                    <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Statistics-->
            <div class="d-flex align-items-center w-100 mw-125px">
                <!--begin::Progress-->
                <div class="progress h-6px w-100 me-2 bg-light-success">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--end::Progress-->
                <!--begin::Value-->
                <span class="text-gray-500 fw-semibold">65%</span>
                <!--end::Value-->
            </div>
            <!--end::Statistics-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-4"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Icon-->
                <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-3 w-30px" alt="" />
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="flex-grow-1">
                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Linked In</a>
                    <span class="text-gray-500 fw-semibold d-block fs-6">Social Media</span>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Statistics-->
            <div class="d-flex align-items-center w-100 mw-125px">
                <!--begin::Progress-->
                <div class="progress h-6px w-100 me-2 bg-light-warning">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--end::Progress-->
                <!--begin::Value-->
                <span class="text-gray-500 fw-semibold">87%</span>
                <!--end::Value-->
            </div>
            <!--end::Statistics-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-4"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Icon-->
                <img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-3 w-30px" alt="" />
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="flex-grow-1">
                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Slack</a>
                    <span class="text-gray-500 fw-semibold d-block fs-6">Messanger</span>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Statistics-->
            <div class="d-flex align-items-center w-100 mw-125px">
                <!--begin::Progress-->
                <div class="progress h-6px w-100 me-2 bg-light-primary">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-valuenow="44"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--end::Progress-->
                <!--begin::Value-->
                <span class="text-gray-500 fw-semibold">44%</span>
                <!--end::Value-->
            </div>
            <!--end::Statistics-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-4"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Icon-->
                <img src="assets/media/svg/brand-logos/google-icon.svg" class="me-3 w-30px" alt="" />
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="flex-grow-1">
                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Google</a>
                    <span class="text-gray-500 fw-semibold d-block fs-6">SEO & PPC</span>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Statistics-->
            <div class="d-flex align-items-center w-100 mw-125px">
                <!--begin::Progress-->
                <div class="progress h-6px w-100 me-2 bg-light-info">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--end::Progress-->
                <!--begin::Value-->
                <span class="text-gray-500 fw-semibold">70%</span>
                <!--end::Value-->
            </div>
            <!--end::Statistics-->
        </div>
        <!--end::Item-->
        @endif
    </div>
    <!--end::Body-->
</div>
<!--end::List widget {{ $widgetNumber }}-->
