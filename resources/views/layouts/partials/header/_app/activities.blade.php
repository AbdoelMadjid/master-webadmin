<div class="app-navbar-item ms-1 ms-md-4">
    <!--begin::Drawer toggle-->
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
        id="kt_activities_toggle">
        <i class="{{ formatIconClass('ki-duotone ki-messages') }} fs-2">
            @for ($i = 1; $i <= keenicon_paths('ki-messages'); $i++)
                <span class="path{{ $i }}"></span>
            @endfor
        </i>
    </div>
    <!--end::Drawer toggle-->
</div>
