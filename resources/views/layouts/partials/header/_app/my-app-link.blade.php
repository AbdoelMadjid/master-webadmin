<div class="app-navbar-item ms-1 ms-md-4">
    <!--begin::Menu wrapper-->
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
        <i class="{{ formatIconClass('ki-duotone ki-element-11') }} fs-2">
            @for ($i = 1; $i <= keenicon_paths('ki-element-11'); $i++)
                <span class="path{{ $i }}"></span>
            @endfor
        </i>
    </div>
    <!--layout-partial:partials/menus/_my-apps-menu.html-->
    @include('partials.menus._my-apps-menu')
    <!--end::Menu wrapper-->
</div>
