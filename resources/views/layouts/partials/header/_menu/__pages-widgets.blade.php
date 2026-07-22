@php
    $widgetsPrimaryMenus = [
        ['route' => 'pages.widgets.card', 'title' => __('menu.cards')],
        ['route' => 'pages.widgets.chart', 'title' => __('menu.charts')],
        ['route' => 'pages.widgets.engage', 'title' => __('menu.engage')],
        ['route' => 'pages.widgets.list', 'title' => __('menu.lists')],
    ];

    $widgetsCollapsedMenus = [
        ['route' => 'pages.widgets.maps', 'title' => __('menu.maps')],
        ['route' => 'pages.widgets.player', 'title' => __('menu.player')],
        ['route' => 'pages.widgets.slider', 'title' => __('menu.sliders')],
        ['route' => 'pages.widgets.table', 'title' => __('menu.tables')],
        ['route' => 'pages.widgets.timeline', 'title' => __('menu.timeline')],
        ['route' => 'pages.widgets.video', 'title' => __('menu.video')],
    ];
    $widgetsMenus = array_merge($widgetsPrimaryMenus, $widgetsCollapsedMenus);
    $widgetsMenusChunks = array_chunk($widgetsMenus, (int) ceil(count($widgetsMenus) / 3));
@endphp

<!--begin:Row-->
<div class="row">
    <div class="col-lg-5 mb-6 mb-lg-0">
        <div class="row">
            @foreach ($widgetsMenusChunks as $menusChunk)
                <div class="col-lg-4 mb-6 mb-lg-0">
                    @foreach ($menusChunk as $menu)
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span class="menu-title">{{ $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <div class="col-lg-7 d-flex justify-content-end">
        <img src="assets/media/stock/900x600/44.jpg" class="rounded w-100" style="max-width: 420px;" alt="" />
    </div>
</div>
<!--end:Row-->
