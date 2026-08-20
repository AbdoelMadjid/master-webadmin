@php
    $activeTheme = \App\Services\WebsiteTemplateService::getActiveTheme();
    $themeConfig = $activeTheme?->config;

    $headerMenu = $themeConfig?->header_menu_list ?? [
        ['title' => 'Home', 'url' => '#kt_body', 'target' => '_self'],
        ['title' => 'How it Works', 'url' => '#how-it-works', 'target' => '_self'],
        ['title' => 'Achievements', 'url' => '#achievements', 'target' => '_self'],
        ['title' => 'Team', 'url' => '#team', 'target' => '_self'],
        ['title' => 'Portfolio', 'url' => '#portfolio', 'target' => '_self'],
        ['title' => 'Pricing', 'url' => '#pricing', 'target' => '_self'],
    ];
@endphp
<div class="d-lg-block" id="kt_header_nav_wrapper">
    <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px"
        data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
        data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
        <!--begin::Menu-->
        <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
            id="kt_landing_menu">
            @foreach($headerMenu as $index => $item)
                @php
                    $url = $item['url'] ?? '#';
                    $target = $item['target'] ?? '_self';
                    $isAnchor = str_starts_with($url, '#');
                @endphp
                <!--begin::Menu item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link nav-link {{ $index === 0 ? 'active' : '' }} py-3 px-4 px-xxl-6"
                       href="{{ $url }}"
                       target="{{ $target }}"
                       @if($isAnchor) data-kt-scroll-toggle="true" @endif
                       data-kt-drawer-dismiss="true">
                        {{ $item['title'] ?? '' }}
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu item-->
            @endforeach
        </div>
        <!--end::Menu-->
    </div>
</div>
