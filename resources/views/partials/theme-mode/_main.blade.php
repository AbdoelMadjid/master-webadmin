@php
    $themeModeTrigger = $themeModeTrigger ?? "{default:'click', lg: 'hover'}";
@endphp

<!--begin::Menu toggle-->
<a href="javascript:void(0)"
    class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
    data-kt-menu-trigger="{{ $themeModeTrigger }}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
    <i class="{{ formatIconClass('ki-duotone ki-night-day') }} theme-light-show fs-1">
        @for ($i = 1; $i <= keenicon_paths('ki-night-day'); $i++)
            <span class="path{{ $i }}"></span>
        @endfor
    </i>
    <i class="{{ formatIconClass('ki-duotone ki-moon') }} theme-dark-show fs-1">
        @for ($i = 1; $i <= keenicon_paths('ki-moon'); $i++)
            <span class="path{{ $i }}"></span>
        @endfor
    </i>
</a>
<!--begin::Menu toggle-->
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
    data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="{{ formatIconClass('ki-duotone ki-night-day') }} fs-2">
                    @for ($i = 1; $i <= keenicon_paths('ki-night-day'); $i++)
                        <span class="path{{ $i }}"></span>
                    @endfor
                </i>
            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="{{ formatIconClass('ki-duotone ki-moon') }} fs-2">
                    @for ($i = 1; $i <= keenicon_paths('ki-moon'); $i++)
                        <span class="path{{ $i }}"></span>
                    @endfor
                </i>
            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="javascript:void(0)" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="{{ formatIconClass('ki-duotone ki-screen') }} fs-2">
                    @for ($i = 1; $i <= keenicon_paths('ki-screen'); $i++)
                        <span class="path{{ $i }}"></span>
                    @endfor
                </i>
            </span>
            <span class="menu-title">
                System
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
