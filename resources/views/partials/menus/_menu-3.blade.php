@php($vars = $vars ?? [])
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
    data-kt-menu="true">
    <!--begin::Heading-->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Payments
        </div>
    </div>
    <!--end::Heading-->
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="{{ $vars['invoice_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link px-3">
            Create Invoice
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="{{ $vars['payment_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link flex-stack px-3">
            Create Payment
            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                <i class="{{ $vars['info_icon_class'] ?? 'ki-duotone ki-information fs-6' }}">
                    @if ($vars['info_icon_duotone'] ?? true)
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    @endif
                </i>
            </span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="{{ $vars['bill_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link px-3">
            Generate Bill
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
        <a href="{{ $vars['subscription_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link px-3">
            <span class="menu-title">Subscription</span>
            <span class="menu-arrow"></span>
        </a>
        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ $vars['plans_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link px-3">
                    Plans
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ $vars['billing_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link px-3">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ $vars['statements_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link px-3">
                    Statements
                </a>
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
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                            name="notifications" />
                        <!--end::Input-->
                        <!--end::Label-->
                        <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
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
        <a href="{{ $vars['settings_href'] ?? ($vars['menu_href'] ?? 'javascript:void(0)') }}" class="menu-link px-3">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
