<!--begin::Footer-->
@php
    $activeAppProfil = \App\Models\AppSupport\AppProfil::active()->first();
    $footerYear = $activeAppProfil?->tahun ?? date('Y');
    $footerAuthor = $activeAppProfil?->pembuat ?? 'Keenthemes';
    $appName = $activeAppProfil?->nama_aplikasi ?? 'Master WebAdmin';

    $phpVersion = phpversion();
    $laravelVersion = app()->version();
@endphp
<div id="kt_app_footer" class="app-footer">
    <!--begin::Footer container-->
    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
        <!--begin::Copyright-->
        <div class="text-gray-900 order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">{{ $footerYear }}&copy;</span>
            <a href="javascript:void(0)" class="text-gray-800 text-hover-primary fw-bold">{{ $footerAuthor }}</a>
            <span class="text-muted fw-semibold ms-2">| {{ $appName }}</span>
            <span class="text-muted fw-semibold ms-3">Laravel {{ $laravelVersion }} | PHP {{ $phpVersion }}</span>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item"><a href="javascript:void(0)" class="menu-link px-2">About</a></li>
            <li class="menu-item"><a href="javascript:void(0)" class="menu-link px-2">Support</a></li>
            <li class="menu-item"><a href="javascript:void(0)" class="menu-link px-2">Purchase</a></li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Footer container-->
</div>
<!--end::Footer-->
