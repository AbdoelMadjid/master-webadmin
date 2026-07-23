@php
    $unreadResetRequestsCount = 0;
    $pendingUsersCount = 0;
    if (auth()->check()) {
        try {
            $unreadResetRequestsCount = \App\Models\ManajemenPengguna\PasswordResetRequest::where('status', 'pending')
                ->where('is_read', false)
                ->count();
        } catch (\Throwable $e) {
            $unreadResetRequestsCount = 0;
        }

        try {
            $pendingUsersCount = \App\Models\User::where('status', 'pending')->count();
        } catch (\Throwable $e) {
            $pendingUsersCount = 0;
        }
    }
    $totalNotificationCount = $unreadResetRequestsCount + $pendingUsersCount;
@endphp

<div class="app-navbar-item ms-1 ms-md-4">
    <!--begin::Menu- wrapper-->
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
        <i class="ki-duotone ki-notification-status fs-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
        </i>
        @if($totalNotificationCount > 0)
            <span class="bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
            <span class="badge badge-circle badge-danger position-absolute top-0 start-100 translate-middle fs-9 h-18px w-18px me-1 mt-1">
                {{ $totalNotificationCount }}
            </span>
        @endif
    </div>
    <!--layout-partial:partials/menus/_notifications-menu.html-->
    @include('partials.menus._notifications-menu')
    <!--end::Menu wrapper-->
</div>
