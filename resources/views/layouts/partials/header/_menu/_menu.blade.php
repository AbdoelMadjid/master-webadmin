<!--begin::Menu wrapper-->
<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

    @hasanyrole('master|admin')

        <!--begin::Menu-->
        <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
            id="kt_app_header_menu" data-kt-menu="true">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                class="menu-item {{ request()->routeIs(['homepage', 'dashboards.*']) ? 'here show' : '' }} menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-title">{{ __('menu.dashboards') }}</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                    <!--layout-partial:layout/partials/header/_menu/__dashboards.html-->
                    @include('layouts.partials.header._menu.__dashboards')
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                id="page-menu-item"
                class="menu-item {{ request()->routeIs('pages.*') ? 'here show' : '' }} menu-lg-down-accordion me-0 me-lg-2">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-title">{{ __('menu.pages') }}</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                    <!--layout-partial:layout/partials/header/_menu/__pages.html-->
                    @include('layouts.partials.header._menu.__pages')
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                class="menu-item {{ request()->routeIs(['apps.*']) ? 'here show' : '' }} menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">

                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-title">{{ __('menu.apps') }}</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                    <!--begin:Menu item-->
                    @foreach (config('header._header_apps.apps_menus') as $menuApps)
                        @include('layouts.partials.header._menu._menu_item_apps', ['menu' => $menuApps])
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                class="menu-item {{ request()->routeIs(['layouts.*']) ? 'here show' : '' }} menu-lg-down-accordion me-0 me-lg-2">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-title">{{ __('menu.layouts') }}</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-900px w-xxl-950px">
                    <!--layout-partial:layout/partials/header/_menu/__layouts.html-->
                    @include('layouts.partials.header._menu.__layouts')
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                class="menu-item {{ request()->routeIs(['help.*']) ? 'here show' : '' }} menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-title">{{ __('menu.help') }}</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                    <!--begin:Menu item-->
                    @foreach (config('header._header_help.help_menus') as $menu)
                        @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                        @php
                            $menuHref = isset($menu['route']) ? route($menu['route']) : $menu['href'] ?? '#';
                            $isExternal = !isset($menu['route']);
                            $isActive = isset($menu['route']) && request()->routeIs($menu['route'] . '*');
                        @endphp
                        <div class="menu-item">
                            <a class="menu-link {{ $isActive ? 'active' : '' }}" href="{{ $menuHref }}"
                                @if (isset($menu['target'])) target="{{ $menu['target'] }}" @elseif($isExternal) target="_blank" @endif
                                @if (!empty($menu['tooltip'])) title="{{ __($titleKey . '_tooltip') != $titleKey . '_tooltip' ? __($titleKey . '_tooltip') : $menu['tooltip'] ?? '' }}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" @endif>
                                <span class="menu-icon">
                                    <i class="{{ $menu['icon'] }}">
                                        @for ($i = 1; $i <= $menu['paths']; $i++)
                                            <span class="path{{ $i }}"></span>
                                        @endfor
                                    </i>
                                </span>
                                <span
                                    class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div><!--end:Menu sub-->
            </div><!--end:Menu item-->
        </div>
        <!--end::Menu-->
    @endhasanyrole
    <!--begin::timmer-->
    <div class="d-none d-lg-flex align-items-center ms-4">
        <div class="d-flex align-items-center px-3 py-2 rounded-2 border border-gray-300 bg-light-primary">
            <i class="ki-duotone ki-time fs-3 text-primary me-2">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <span class="text-gray-700 fw-bold fs-6">
                {!! renderTime('header-menu-time') !!}
            </span>
        </div>
    </div>
</div>
<!--end::Menu wrapper-->
