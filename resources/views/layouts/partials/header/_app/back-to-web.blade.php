<div class="app-navbar-item ms-1 ms-md-4">
    <!--begin::Menu wrapper-->
    <div
        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative">
        <a href="/">
            <i class="{{ formatIconClass('ki-duotone ki-teacher') }} fs-2">
                @for ($i = 1; $i <= keenicon_paths('ki-teacher'); $i++)
                    <span class="path{{ $i }}"></span>
                @endfor
            </i>
        </a>
    </div>
    <!--end::Menu wrapper-->
</div>
