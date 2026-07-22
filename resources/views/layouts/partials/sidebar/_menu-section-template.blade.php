<div class="menu-item pt-5">
    <div class="menu-content">
        <span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.pages') }}</span>
    </div>
</div>

<div data-kt-menu-trigger="click"
    class="menu-item {{ request()->routeIs(['dashboard', 'dashboards.*']) ? 'here show' : '' }} menu-accordion">
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
    <div class="menu-sub menu-sub-accordion">
        @foreach (config('sidebar._sidebar_dashboard.menus_dashboard', []) as $menu)
            @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
            <div class="menu-item">
                <a class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                    href="{{ route($menu['route']) }}">
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                    <span class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                </a>
            </div>
        @endforeach

        @php
            $collapsedMenus = config('sidebar._sidebar_dashboard.menus_dashboard_collapsed', []);
            $collapsedCount = count($collapsedMenus);
            $isActiveCollapse = collect($collapsedMenus)
                ->pluck('route')
                ->contains(fn($route) => request()->routeIs($route));

            $visibleText = $isActiveCollapse
                ? __('menu.show_less')
                : __('menu.show') . " {$collapsedCount} " . __('menu.more');
            $altText = $isActiveCollapse
                ? __('menu.show') . " {$collapsedCount} " . __('menu.more')
                : __('menu.show_less');
        @endphp

        <div class="menu-inner flex-column collapse {{ $isActiveCollapse ? 'show' : '' }}"
            id="kt_app_sidebar_menu_dashboards_collapse">
            @foreach (config('sidebar._sidebar_dashboard.menus_dashboard_collapsed', []) as $menu)
                @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                <div class="menu-item">
                    <a class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}"
                        href="{{ route($menu['route']) }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="menu-item">
            <div class="menu-content">
                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible {{ $isActiveCollapse ? '' : 'collapsed' }}"
                    data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                    data-kt-toggle-text="{{ $altText }}" aria-expanded="{{ $isActiveCollapse ? 'true' : 'false' }}">
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
</div>

@foreach (config('sidebar._sidebar_pages.pages_menus', []) as $menu)
    @include('layouts.partials.sidebar._menu-item-temp', ['menu' => $menu])
@endforeach

<div class="menu-item pt-5">
    <div class="menu-content">
        <span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.apps') }}</span>
    </div>
</div>
@foreach (config('sidebar._sidebar_apps.apps_menus', []) as $menu)
    @include('layouts.partials.sidebar._menu-item-temp', ['menu' => $menu])
@endforeach

<div class="menu-item pt-5">
    <div class="menu-content">
        <span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.layouts') }}</span>
    </div>
</div>
@foreach (config('sidebar._sidebar_layouts.layout_menus', []) as $menu)
    @include('layouts.partials.sidebar._menu-item-temp', ['menu' => $menu])
@endforeach

<div class="menu-item pt-5">
    <div class="menu-content">
        <span class="menu-heading fw-bold text-uppercase fs-7">{{ __('menu.help') }}</span>
    </div>
</div>
@foreach (config('sidebar._sidebar_helps.help_menus', []) as $menu)
    @include('layouts.partials.sidebar._menu-item-temp', ['menu' => $menu])
@endforeach
