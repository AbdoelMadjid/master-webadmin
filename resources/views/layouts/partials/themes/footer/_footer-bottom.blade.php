@php
    $activeTheme = \App\Services\WebsiteTemplateService::getActiveTheme();
    $themeConfig = $activeTheme?->config;

    $logoFooterUrl = $themeConfig?->logo_footer_url ?? template_asset('images/logos/landing.svg');
    $footerMenu = $themeConfig?->footer_menu_list ?? [
        ['title' => 'About', 'url' => '#how-it-works', 'target' => '_self'],
        ['title' => 'Support', 'url' => '#team', 'target' => '_self'],
        ['title' => 'Purchase', 'url' => '#pricing', 'target' => '_self'],
    ];

    $activeAppProfil = \App\Models\AppSupport\AppProfil::active()->first() ?? \App\Models\AppSupport\AppProfil::first();
    $footerYear = $activeAppProfil?->tahun ?? date('Y');
    $footerAuthor = $activeAppProfil?->pembuat ?? 'Master Admin Team';
@endphp
<div class="container">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
        <!--begin::Copyright-->
        <div class="d-flex align-items-center order-2 order-md-1">
            <!--begin::Logo-->
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ $logoFooterUrl }}" class="h-15px h-md-20px" />
            </a>
            <!--end::Logo image-->
            <!--begin::Logo image-->
            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1">&copy; {{ $footerYear }} {{ $footerAuthor }}</span>
            <!--end::Logo image-->
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
            @foreach($footerMenu as $item)
                @php
                    $url = $item['url'] ?? '#';
                    $target = $item['target'] ?? '_self';
                    $isAnchor = str_starts_with($url, '#');
                @endphp
                <li class="menu-item mx-2">
                    <a href="{{ $url }}"
                       target="{{ $target }}"
                       class="menu-link px-2"
                       @if($isAnchor) data-kt-scroll-toggle="true" @endif>
                        {{ $item['title'] ?? '' }}
                    </a>
                </li>
            @endforeach
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Wrapper-->
</div>
