@php
    $isAltMenu = false;
    $assetBase = $theme_asset_base ?? 'assets';
    $authUser = auth()->user();
    $displayData = isset($current_user_display) && is_array($current_user_display) ? $current_user_display : [];
    $rawProfileName = $displayData['name'] ?? ($authUser?->name ?? 'Guest User');
    $profileName = function_exists('formatShortName') ? formatShortName($rawProfileName) : $rawProfileName;
    $profileEmail = $displayData['email'] ?? ($authUser?->email ?? '');
    $profileAvatar = getUserAvatarUrl($authUser, $displayData);
    $profileAvatarSeed = $authUser?->id ?: ($profileEmail !== '' ? $profileEmail : $profileName);
    $profileAvatarOnError = asset('assets/media/svg/avatars/default-avatar.svg');
    $profileRoles = '';
    if ($authUser) {
        if (method_exists($authUser, 'getRoleNames')) {
            $profileRoles = $authUser
                ->getRoleNames()
                ->map(fn($role) => function_exists('roleDisplayName') ? (roleDisplayName((string) $role) ?? (string) $role) : (string) $role)
                ->implode(', ');
        } elseif (isset($authUser->roles)) {
            $profileRoles = collect($authUser->roles)
                ->pluck('name')
                ->map(fn($role) => function_exists('roleDisplayName') ? (roleDisplayName((string) $role) ?? (string) $role) : (string) $role)
                ->implode(', ');
        } elseif (function_exists('getRoleName')) {
            $profileRoles = (string) (getRoleName() ?? '');
        }
    }
@endphp
<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
    data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" class="user-avatar-img" src="{{ $profileAvatar }}"
                    onerror="this.onerror=null;this.src='{{ $profileAvatarOnError }}';" />
            </div>
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold fs-5">{{ $profileName }}</div>
                @if ($profileRoles !== '')
                    <div class="text-success fw-semibold fs-7">{{ $profileRoles }}</div>
                @endif
                @if ($profileEmail !== '')
                    <a href="javascript:void(0)" class="fw-semibold text-muted text-hover-primary fs-7">
                        {{ $profileEmail }} </a>
                @endif
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    @if(session()->has('impersonator_id'))
        @php
            $impersonator = \App\Models\User::find(session('impersonator_id'));
        @endphp
        <div class="menu-item px-5 my-1">
            <a href="{{ route('manajemenpengguna.users.leave-impersonate') }}" class="menu-link px-5 text-danger fw-bold bg-light-danger rounded">
                <i class="ki-duotone ki-exit-right fs-3 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                Kembali ke Akun Asli ({{ $impersonator?->name ?? 'Admin' }})
            </a>
        </div>
        <div class="separator my-2"></div>
    @endif
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="{{ url('profil-pengguna') }}" class="menu-link px-5">
            {{ $isAltMenu ? 'My Profile' : __('menu.my_profile') }}
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="javascript:void(0)" class="menu-link px-5">
            <span class="menu-title">{{ $isAltMenu ? 'My Subscription' : __('menu.my_subscription') }}</span>
            <span class="menu-arrow"></span>
        </a>
        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <div class="menu-item px-3">
                <a href="{{ url('profil-pengguna?tab=referensi') }}" class="menu-link px-5">
                    {{ $isAltMenu ? 'Referrals' : __('menu.referrals') }}
                </a>
            </div>
            <div class="menu-item px-3">
                <a href="{{ url('profil-pengguna?tab=tagihan') }}" class="menu-link px-5">
                    {{ $isAltMenu ? 'Billing' : __('menu.billing') }}
                </a>
            </div>
            <div class="menu-item px-3">
                <a href="{{ url('profil-pengguna?tab=pernyataan') }}" class="menu-link d-flex flex-stack px-5">
                    {{ $isAltMenu ? 'Statements' : __('menu.statements') }}
                    <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                        title="{{ __('menu.view_your_statements') ?? 'View your statements' }}">
                        <i class="ki-duotone ki-information-5 fs-5"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                    </span>
                </a>
            </div>
            <div class="separator my-2"></div>
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                            name="notifications" />
                        <span class="form-check-label text-muted fs-7">
                            {{ $isAltMenu ? 'Notifications' : __('menu.notifications') }}
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="javascript:void(0)" class="menu-link px-5">
            <span class="menu-title position-relative">
                {{ __('menu.language') }}
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    @if (app()->getLocale() == 'id')
                        {{ __('menu.indonesian') }} <img class="w-15px h-15px rounded-1 ms-2"
                            src="{{ asset($assetBase . '/media/flags/indonesia.svg') }}" alt="" />
                    @else
                        {{ __('menu.english') }} <img class="w-15px h-15px rounded-1 ms-2"
                            src="{{ asset($assetBase . '/media/flags/united-states.svg') }}" alt="" />
                    @endif
                </span>
            </span>
        </a>
        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('lang.switch', 'en') }}"
                    class="menu-link d-flex px-5 {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset($assetBase . '/media/flags/united-states.svg') }}"
                            alt="" />
                    </span>
                    {{ __('menu.english') }}
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('lang.switch', 'id') }}"
                    class="menu-link d-flex px-5 {{ app()->getLocale() == 'id' ? 'active' : '' }}">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset($assetBase . '/media/flags/indonesia.svg') }}"
                            alt="" />
                    </span>
                    {{ __('menu.indonesian') }}
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1">
        <a href="{{ url('profil-pengguna?tab=pengaturan') }}" class="menu-link px-5">
            {{ $isAltMenu ? 'Account Settings' : __('menu.account_settings') }}
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="javascript:void(0)" class="menu-link px-5"
                onclick="event.preventDefault(); this.closest('form').submit();">
                {{ $isAltMenu ? 'Sign Out' : __('menu.sign_out') }}
            </a>
            {{-- <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link> --}}
        </form>
        {{-- <a href="{{ route('pages.authentication.layouts.corporate.sign-in') }}" class="menu-link px-5">
            Sign Out
        </a> --}}
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
