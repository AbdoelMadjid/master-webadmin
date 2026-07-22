@php
    $widgetNumber = $widgetNumber ?? 16;
    $cardClass = $cardClass ?? 'card card-xl-stretch bg-body border-0';
    $bodyClass = $bodyClass ?? 'card-body pt-5 mb-xl-9 position-relative';
    $title = $title ?? 'User Base';
    $headingTitleWrapClass = $headingTitleWrapClass ?? '';
    $headingTitleTag = $headingTitleTag ?? 'h4';
    $headingTitleClass = $headingTitleClass ?? 'fw-bold text-gray-800 m-0';
    $headingSubtitle = $headingSubtitle ?? null;
    $headingSubtitleClass = $headingSubtitleClass ?? 'text-muted fw-semibold fs-7';

    $menuVariant = $menuVariant ?? 'filter';
    $menuId = $menuId ?? 'kt_menu_65a10ad53593a';
    $filterMenuUseCategoryIcon = $filterMenuUseCategoryIcon ?? false;

    $chartWrapperClass = $chartWrapperClass ?? 'd-flex flex-center mb-5 mb-xxl-0';
    $chartUseId = $chartUseId ?? true;
    $chartId = $chartId ?? 'kt_charts_mixed_widget_16_chart';
    $chartClass = $chartClass ?? '';
    $chartAttr = $chartAttr ?? 'data-kt-chart-color';
    $chartColor = $chartColor ?? null;
    $chartStyle = $chartStyle ?? 'height: 260px';

    $contentClass = $contentClass ?? 'text-center position-absolute bottom-0 start-50 translate-middle-x w-100 mb-10';
    $contentStyle = $contentStyle ?? null;
    $textClass = $textClass ?? 'fw-semibold fs-4 text-gray-500 mb-7 px-5';
    $textLine1 = $textLine1 ?? 'Long before you sit down to put the';
    $textLine2 = $textLine2 ?? 'make sure you breathe';
    $textIsHtml = $textIsHtml ?? false;
    $actionWrapperClass = $actionWrapperClass ?? 'm-0';
    $actionHref = $actionHref ?? '#';
    $actionClass = $actionClass ?? 'btn btn-success fw-semibold';
    $actionTarget = $actionTarget ?? '#kt_modal_invite_friends';
    $actionText = $actionText ?? 'Invite Users';
    $showActionModal = $showActionModal ?? true;

    $showFooter = $showFooter ?? false;
    $footerClass = $footerClass ?? 'card-footer d-flex flex-center py-5';
    $footerItems = $footerItems ?? [];
@endphp

<!--begin::Mixed Widget {{ $widgetNumber }}-->
<div class="{{ $cardClass }}">
    <!--begin::Body-->
    <div class="{{ $bodyClass }}">
        <!--begin::Heading-->
        <div class="d-flex flex-stack">
            <!--begin::Title-->
            <div class="{{ $headingTitleWrapClass }}">
                <{{ $headingTitleTag }} class="{{ $headingTitleClass }}">{{ $title }}</{{ $headingTitleTag }}>
                @if ($headingSubtitle)
                    <span class="{{ $headingSubtitleClass }}">{{ $headingSubtitle }}</span>
                @endif
            </div>
            <!--end::Title-->
            <!--begin::Menu-->
            @if ($menuVariant === 'payments')
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-6">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                </button>
                <!--begin::Menu 3-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                    data-kt-menu="true">
                    <!--begin::Heading-->
                    <div class="menu-item px-3">
                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Create Invoice</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                            <span class="ms-2" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference">
                                <i class="ki-duotone ki-information fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span></a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Generate Bill</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                        <a href="#" class="menu-link px-3">
                            <span class="menu-title">Subscription</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Plans</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Billing</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Statements</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3">
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                            checked="checked" name="notifications" />
                                        <!--end::Input-->
                                        <!--end::Label-->
                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                        <!--end::Label-->
                                    </label>
                                    <!--end::Switch-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-1">
                        <a href="#" class="menu-link px-3">Settings</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu 3-->
            @else
                <div class="me-1">
                    @if ($filterMenuUseCategoryIcon)
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                    @else
                        <button class="btn btn-icon btn-color-gray-500 w-auto px-0 btn-active-color-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1 me-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                    @endif
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="{{ $menuId }}">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true"
                                        data-close-on-select="false" data-placeholder="Select option"
                                        data-dropdown-parent="#{{ $menuId }}" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
            @endif
            <!--end::Menu-->
        </div>
        <!--end::Heading-->
        <!--begin::Chart-->
        <div class="{{ $chartWrapperClass }}">
            <div @if ($chartUseId) id="{{ $chartId }}" @endif class="{{ $chartClass }}"
                @if ($chartColor) {{ $chartAttr }}="{{ $chartColor }}" @endif style="{{ $chartStyle }}"></div>
        </div>
        <!--end::Chart-->
        <!--begin::Content-->
        <div class="{{ $contentClass }}" @if ($contentStyle) style="{{ $contentStyle }}" @endif>
            <!--begin::Text-->
            <p class="{{ $textClass }}">
                @if ($textIsHtml)
                    {!! $textLine1 !!}
                @else
                    {{ $textLine1 }}
                @endif
                @if ($textLine2)
                    <br />{{ $textLine2 }}
                @endif
            </p>
            <!--end::Text-->
            <!--begin::Action-->
            <div class="{{ $actionWrapperClass }}">
                <a href="{{ $actionHref }}" class="{{ $actionClass }}"
                    @if ($showActionModal) data-bs-toggle="modal" data-bs-target="{{ $actionTarget }}" @endif>{{ $actionText }}</a>
            </div>
            <!--ed::Action-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Body-->

    @if ($showFooter)
        <!--begin::Footer-->
        <div class="{{ $footerClass }}">
            @foreach ($footerItems as $item)
                <!--begin::Item-->
                <div class="{{ $item['wrapClass'] }}">
                    <!--begin::Bullet-->
                    <span class="{{ $item['bulletClass'] }}"></span>
                    <!--end::Bullet-->
                    <!--begin::Label-->
                    <span class="{{ $item['labelClass'] }}">{{ $item['label'] }}</span>
                    <!--end::Label-->
                </div>
                <!--ed::Item-->
            @endforeach
        </div>
        <!--ed::Info-->
    @endif
</div>
<!--end::Mixed Widget {{ $widgetNumber }}-->
