<div class="app-navbar-item ms-1 ms-md-4">
    <!--begin::Menu wrapper-->
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative"
        id="kt_drawer_chat_toggle">
        <i class="{{ formatIconClass('ki-duotone ki-message-text-2') }} fs-2">
            @for ($i = 1; $i <= keenicon_paths('ki-message-text-2'); $i++)
                <span class="path{{ $i }}"></span>
            @endfor
        </i>
        <span
            class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
        </span>
    </div>
    <!--end::Menu wrapper-->
</div>
