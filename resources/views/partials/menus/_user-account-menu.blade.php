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
