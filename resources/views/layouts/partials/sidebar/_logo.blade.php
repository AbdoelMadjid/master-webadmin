<!--begin::Logo-->
@php
    $activeAppProfil = \App\Models\AppSupport\AppProfil::active()->first();
    $customLogoUrl = $activeAppProfil?->logo_url;
    $customLogoSmallUrl = $activeAppProfil?->logo_small_url ?: $customLogoUrl;
@endphp
<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!--begin::Logo image-->
    <a href="{{ route('homepage') }}">
        @if ($customLogoUrl || $customLogoSmallUrl)
            <!--Logo Utama (Expanded / Horizontal)-->
            <img alt="Logo" src="{{ $customLogoUrl ?: $customLogoSmallUrl }}" class="h-25px app-sidebar-logo-default" />
            <!--Logo Ringkas (Minimized / Square Icon)-->
            <img alt="Logo" src="{{ $customLogoSmallUrl ?: $customLogoUrl }}" class="h-20px app-sidebar-logo-minimize" />
        @else
            @if (!empty($LightSidebar) && $LightSidebar === true)
                {{-- Light-sidebar --}}
                <img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}"
                    class="h-25px app-sidebar-logo-default theme-light-show" />
                <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}"
                    class="h-25px app-sidebar-logo-default theme-dark-show" />
                <img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}" class="h-20px app-sidebar-logo-minimize" />
            @else
                {{-- Default: dark-sidebar --}}
                <img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="h-25px app-sidebar-logo-default" />
                <img alt="Logo" src="{{ asset('assets/media/logos/default-small.svg') }}" class="h-20px app-sidebar-logo-minimize" />
            @endif
        @endif
    </a>
    <!--end::Logo image-->
    <!--begin::Sidebar toggle-->
    <div id="kt_app_sidebar_toggle"
        class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
        data-kt-toggle-name="app-sidebar-minimize">
        <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Sidebar toggle-->
</div>
<!--end::Logo-->
