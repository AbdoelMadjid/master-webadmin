<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper d-flex flex-column h-100">
        <div id="kt_app_sidebar_menu_search" class="px-3 pt-5 pb-2 flex-column-auto" data-menu-search-skip="true">
            <div class="position-relative">
                <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle-y ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" id="kt_app_sidebar_menu_search_input"
                    class="form-control form-control-sm bg-transparent ps-11"
                    placeholder="{{ __('menu.search_menu_placeholder') }}" autocomplete="off" />
            </div>
            <div id="kt_app_sidebar_menu_search_empty" class="fs-8 text-muted pt-2 d-none">
                {{ __('menu.search_menu_not_found') }}
            </div>
        </div>
        <!--begin::Scroll wrapper-->
        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3 flex-column-fluid" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_menu_search, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
            data-kt-scroll-save-state="false">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="menu-item {{ request()->routeIs(['dashboard', 'dashboards.*']) ? 'here show' : '' }} menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon"><i class="ki-duotone ki-screen fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">{{ __('menu.dashboards') }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        @foreach (config('sidebar._sidebar_dashboard.menus_dashboard') as $menu)
                            @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                            <div class="menu-item">
                                <a class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                                    href="{{ route($menu['route']) }}">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span
                                        class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                                </a>
                            </div>
                        @endforeach

                        @php
                            $collapsedMenus = config('sidebar._sidebar_dashboard.menus_dashboard_collapsed') ?? [];
                            $collapsedCount = count($collapsedMenus);
                            $isActiveCollapse = collect($collapsedMenus)
                                ->pluck('route')
                                ->contains(fn($route) => request()->routeIs($route));

                            // teks yang sedang terlihat & teks alternatif yang akan dipakai oleh JS saat toggle
                            $visibleText = $isActiveCollapse
                                ? __('menu.show_less')
                                : __('menu.show') . " {$collapsedCount} " . __('menu.more');
                            $altText = $isActiveCollapse
                                ? __('menu.show') . " {$collapsedCount} " . __('menu.more')
                                : __('menu.show_less');
                        @endphp
                        <!--end:Menu item-->
                        <div class="menu-inner flex-column collapse {{ $isActiveCollapse ? 'show' : '' }}"
                            id="kt_app_sidebar_menu_dashboards_collapse">
                            @foreach (config('sidebar._sidebar_dashboard.menus_dashboard_collapsed') as $menu)
                                @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                                <div class="menu-item">
                                    <a class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                                        href="{{ route($menu['route']) }}">
                                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                        <span
                                            class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <!--end:Menu item-->
                        <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible {{ $isActiveCollapse ? '' : 'collapsed' }}"
                                    data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                                    data-kt-toggle-text="{{ $altText }}"
                                    aria-expanded="{{ $isActiveCollapse ? 'true' : 'false' }}">
                                    <span data-kt-toggle-text-target="true">{{ $visibleText }}</span>
                                    <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_demo.menu_demos') as $menu)
                    @include('layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item pt-5"><!--begin:Menu content-->
                    <div class="menu-content"><span
                            class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.pages') }}</span>
                    </div><!--end:Menu content-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_pages.pages_menus') as $menu)
                    @include('layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span
                            class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.apps') }}</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_apps.apps_menus') as $menu)
                    @include('layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span
                            class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.layouts') }}</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_layouts.layout_menus') as $menu)
                    @include('layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span
                            class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.help') }}</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item-->
                @foreach (config('sidebar._sidebar_helps.help_menus') as $menu)
                    @include('layouts.partials.sidebar._menu-item', ['menu' => $menu])
                @endforeach
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->

<script>
    (function() {
        const menu = document.getElementById('kt_app_sidebar_menu');
        const input = document.getElementById('kt_app_sidebar_menu_search_input');
        const emptyState = document.getElementById('kt_app_sidebar_menu_search_empty');

        if (!menu || !input || !emptyState) {
            return;
        }

        const allItems = Array.from(menu.querySelectorAll('.menu-item')).filter((item) => !item.dataset
            .menuSearchSkip);
        const allContainers = Array.from(menu.querySelectorAll('.menu-sub, .menu-inner'));
        const searchableTitles = Array.from(menu.querySelectorAll('.menu-link .menu-title'));

        const resetMenuSearch = () => {
            allItems.forEach((item) => {
                item.style.display = '';
                if (item.dataset.searchOpenedAccordion === '1') {
                    item.classList.remove('show');
                    delete item.dataset.searchOpenedAccordion;
                }
            });

            allContainers.forEach((container) => {
                container.style.display = '';
                if (container.dataset.searchOpenedCollapse === '1') {
                    container.classList.remove('show');
                    delete container.dataset.searchOpenedCollapse;
                }
            });

            emptyState.classList.add('d-none');
        };

        const revealWithParents = (startNode) => {
            let current = startNode;

            while (current && current !== menu) {
                if (current.classList?.contains('menu-item')) {
                    current.style.display = '';

                    if (current.classList.contains('menu-accordion') && !current.classList.contains('show')) {
                        current.classList.add('show');
                        current.dataset.searchOpenedAccordion = '1';
                    }
                }

                if (current.classList?.contains('menu-sub') || current.classList?.contains('menu-inner')) {
                    current.style.display = '';

                    if (current.classList.contains('collapse') && !current.classList.contains('show')) {
                        current.classList.add('show');
                        current.dataset.searchOpenedCollapse = '1';
                    }
                }

                current = current.parentElement;
            }
        };

        input.addEventListener('input', function() {
            const keyword = this.value.trim().toLowerCase();
            resetMenuSearch();

            if (!keyword) {
                return;
            }

            allItems.forEach((item) => {
                item.style.display = 'none';
            });

            allContainers.forEach((container) => {
                container.style.display = 'none';
            });

            const matches = searchableTitles.filter((title) => title.textContent.toLowerCase().includes(
                keyword));

            matches.forEach((title) => {
                const link = title.closest('.menu-link');
                const menuItem = link ? link.closest('.menu-item') : null;

                if (menuItem) {
                    revealWithParents(menuItem);
                }
            });

            emptyState.classList.toggle('d-none', matches.length > 0);
        });
    })();
</script>
