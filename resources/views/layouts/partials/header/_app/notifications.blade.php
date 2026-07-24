@php
    $unreadResetRequestsCount = 0;
    $pendingUsersCount = 0;
    $pendingDeactivationsCount = 0;
    if (auth()->check()) {
        $authUser = auth()->user();
        $isAdminOrMaster = method_exists($authUser, 'hasAnyRole') 
            ? $authUser->hasAnyRole(['master', 'admin', 'Master', 'Admin'])
            : in_array(strtolower($authUser->role ?? ''), ['master', 'admin']);

        if ($isAdminOrMaster) {
            try {
                $unreadResetRequestsCount = \App\Models\ManajemenPengguna\PasswordResetRequest::where('status', 'pending')
                    ->where('is_read', false)
                    ->count();
            } catch (\Throwable $e) {
                $unreadResetRequestsCount = 0;
            }

            try {
                $pendingUsersCount = \App\Models\User::where('status', 'pending')
                    ->where('is_read', false)
                    ->count();
            } catch (\Throwable $e) {
                $pendingUsersCount = 0;
            }

            try {
                $pendingDeactivationsCount = \App\Models\User::where('status', 'deactivate_pending')
                    ->where('is_read', false)
                    ->count();
            } catch (\Throwable $e) {
                $pendingDeactivationsCount = 0;
            }
        }
    }
    $totalNotificationCount = $unreadResetRequestsCount + $pendingUsersCount + $pendingDeactivationsCount;
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
        <span id="topbar_notification_badge_wrapper">
            @if($totalNotificationCount > 0)
                <span class="bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                <span class="badge badge-circle badge-danger position-absolute top-0 start-100 translate-middle fs-9 h-18px w-18px me-1 mt-1">
                    {{ $totalNotificationCount }}
                </span>
            @endif
        </span>
    </div>
    <!--layout-partial:partials/menus/_notifications-menu.html-->
    @include('partials.menus._notifications-menu')
    <!--end::Menu wrapper-->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function fetchRealtimeNotifications() {
            if (typeof $ === 'undefined') return;
            $.ajax({
                url: "{{ route('notifications.fetch') }}",
                type: "GET",
                dataType: "json",
                success: function (res) {
                    if (res && res.success) {
                        var count = res.total_count || 0;
                        var badgeWrapper = $('#topbar_notification_badge_wrapper');
                        var tabBadgeWrapper = $('#topbar_notification_tab_badge');
                        var itemsContainer = $('#topbar_notifications_warning_items');

                        if (count > 0) {
                            badgeWrapper.html(
                                '<span class="bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>' +
                                '<span class="badge badge-circle badge-danger position-absolute top-0 start-100 translate-middle fs-9 h-18px w-18px me-1 mt-1">' + count + '</span>'
                            );
                            tabBadgeWrapper.html(
                                '<span class="badge badge-circle badge-danger fs-9 ms-1 h-16px w-16px">' + count + '</span>'
                            );
                        } else {
                            badgeWrapper.empty();
                            tabBadgeWrapper.empty();
                        }

                        if (res.html_peringatan && itemsContainer.length) {
                            itemsContainer.html(res.html_peringatan);
                        }
                    }
                }
            });
        }

        // Trigger update on bell icon click/hover
        $(document).on('click mouseenter', '#kt_menu_item_wow', function () {
            fetchRealtimeNotifications();
        });

        // Polling background setiap 10 detik
        setInterval(fetchRealtimeNotifications, 10000);
    });
</script>
