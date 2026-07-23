@php
    $assetBase = $theme_asset_base ?? 'assets';
    $currentLocale = app()->getLocale();
@endphp
<div class="app-navbar-item ms-1 ms-md-4">
    <!--begin::Menu wrapper-->
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end"
        data-bs-toggle="tooltip"
        title="{{ __('menu.language') }}">
        @if ($currentLocale == 'id')
            <img class="w-20px h-20px rounded-circle" src="{{ asset($assetBase . '/media/flags/indonesia.svg') }}" alt="Indonesia" />
        @else
            <img class="w-20px h-20px rounded-circle" src="{{ asset($assetBase . '/media/flags/united-states.svg') }}" alt="English" />
        @endif
    </div>

    <!--begin::Language Sub Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-175px" data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="{{ route('lang.switch', 'en') }}"
                class="menu-link d-flex px-5 {{ $currentLocale == 'en' ? 'active' : '' }}">
                <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="{{ asset($assetBase . '/media/flags/united-states.svg') }}" alt="English" />
                </span>
                {{ __('menu.english') }}
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <a href="{{ route('lang.switch', 'id') }}"
                class="menu-link d-flex px-5 {{ $currentLocale == 'id' ? 'active' : '' }}">
                <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="{{ asset($assetBase . '/media/flags/indonesia.svg') }}" alt="Indonesia" />
                </span>
                {{ __('menu.indonesian') }}
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Language Sub Menu-->
    <!--end::Menu wrapper-->
</div>
