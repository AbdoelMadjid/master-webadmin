<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <div id="kt_header_quick_actions_desktop" class="d-none d-lg-flex align-items-stretch">
        <!--begin::Search-->
        <div data-quick-action-item class="d-flex align-items-stretch">
            <div class="app-navbar-item align-items-stretch ms-1 ms-md-4">
                <!--layout-partial:partials/search/_dropdown.html-->
                @include('partials.search._dropdown')
            </div>
        </div>
        <!--end::Search-->

        <!--begin::Activities-->
        @if (isFeatureActive('topbar_activities'))
            <div data-quick-action-item class="d-flex align-items-stretch">
                @include('layouts.partials.header._app.activities')
            </div>
        @endif
        <!--end::Activities-->

        <!--begin::Notifications-->
        @if (isFeatureActive('topbar_notifications'))
            <div data-quick-action-item class="d-flex align-items-stretch">
                @include('layouts.partials.header._app.notifications')
            </div>
        @endif
        <!--end::Notifications-->

        <!--begin::Chat-->
        @if (isFeatureActive('topbar_chat'))
            <div data-quick-action-item class="d-flex align-items-stretch">
                @include('layouts.partials.header._app.chat')
            </div>
        @endif
        <!--end::Chat-->

        <!--begin::Language-->
        @if (isFeatureActive('topbar_language'))
            <div data-quick-action-item class="d-flex align-items-stretch">
                @include('layouts.partials.header._app.language')
            </div>
        @endif
        <!--end::Language-->

        <!--begin::My apps links-->
        @if (isFeatureActive('topbar_my_apps'))
            <div data-quick-action-item class="d-flex align-items-stretch">
                @include('layouts.partials.header._app.my-app-link')
            </div>
        @endif
        <!--end::My apps links-->

    </div>

    <div class="app-navbar-item d-lg-none ms-1 ms-md-2">
        <div class="btn btn-flex btn-icon btn-active-light-primary w-35px h-35px" data-kt-menu-trigger="click"
            data-kt-menu-attach="parent" data-kt-menu-placement="bottom">
            <i class="ki-duotone ki-category fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
                <span class="path4"></span>
            </i>
        </div>
        <div id="kt_header_quick_actions_mobile_menu" class="menu menu-sub menu-sub-dropdown w-275px p-3"
            data-kt-menu="true">
            <div id="kt_header_quick_actions_mobile_content" class="d-flex flex-row flex-wrap align-items-center"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var desktopContainer = document.getElementById('kt_header_quick_actions_desktop');
            var mobileMenu = document.getElementById('kt_header_quick_actions_mobile_menu');
            var mobileContent = document.getElementById('kt_header_quick_actions_mobile_content');
            if (!desktopContainer || !mobileMenu || !mobileContent) {
                return;
            }

            var items = Array.prototype.slice.call(desktopContainer.querySelectorAll('[data-quick-action-item]'));

            function syncQuickActions() {
                var isMobile = window.innerWidth < 992;

                items.forEach(function(item) {
                    item.classList.toggle('mb-2', isMobile);
                    item.classList.toggle('me-2', isMobile);
                    item.classList.remove('w-100');

                    if (isMobile) {
                        if (item.parentElement !== mobileContent) {
                            mobileContent.appendChild(item);
                        }
                    } else if (item.parentElement !== desktopContainer) {
                        desktopContainer.appendChild(item);
                    }

                });

            }

            syncQuickActions();
            window.addEventListener('resize', syncQuickActions);
        });
    </script>

    <!--begin::Theme mode-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <!--layout-partial:partials/theme-mode/_main.html-->
        @include('partials.theme-mode._main', ['themeModeTrigger' => 'hover'])
    </div>
    <!--end::Theme mode-->

    <!--begin::Back to Web-->
    @include('layouts.partials.header._app.back-to-web')
    <!--end::Back to Web-->

    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        @php
            $authUser = auth()->user();
            $avatar = getUserAvatarUrl($authUser);
            $avatarOnError = asset('assets/media/svg/avatars/default-avatar.svg');
        @endphp
        <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{ $avatar }}" class="rounded-3 user-avatar-img" id="topbar_user_avatar_img" alt="user"
                onerror="this.onerror=null;this.src='{{ $avatarOnError }}';" />
        </div>
        <!--layout-partial:partials/menus/_user-account-menu.html-->
        @include('partials.menus._user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->

    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
            <i class="ki-duotone ki-element-4 fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <!--end::Header menu toggle-->

    <!--begin::Aside toggle-->
    @if (request()->is('layouts/asides/aside-1') ||
            request()->is('layouts/asides/aside-2') ||
            request()->is('layouts/asides/aside-3') ||
            request()->is('layouts/asides/aside-4') ||
            request()->is('layouts/asides/aside-5'))
        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show aside">
            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_aside_toggle">
                <i class="ki-duotone ki-trello fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
            </div>
        </div>
    @endif
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
