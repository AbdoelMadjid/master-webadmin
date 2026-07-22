<div id="kt_docs_aside" class="docs-aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_docs_aside_toggle">

    <!--begin::Logo-->
    <div class="docs-aside-logo flex-column-auto h-75px px-7" id="kt_docs_aside_logo">
        <!--begin::Link-->
        <a href="/docs/index">
            <img alt="Logo" src="assets/media/logos/metronic.svg" class="theme-light-show h-25px" />
            <img alt="Logo" src="assets/media/logos/metronic-dark.svg" class="theme-dark-show h-25px" />
        </a>
        <!--end::Link-->
    </div>
    <!--end::Logo-->

    <!--begin::Select-->
    @include('layouts.partials.docs._aside-docs-select')
    <!--end::Select-->

    <!--begin::Aside Menu-->

    <!--begin::Menu wrapper-->
    <div class="docs-aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y mt-5 mb-5 mt-lg-0 mb-lg-5 mx-3" id="kt_docs_aside_menu_wrapper"
            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_docs_aside_logo, #kt_docs_aside_select, #kt_docs_aside_footer"
            data-kt-scroll-wrappers="#kt_docs_aside_menu" data-kt-scroll-offset="10px">


            @if (request()->is('docs/laravel/*'))
                <!--begin::Menu-->
                <div class="menu menu-fit menu-column menu-title-gray-800 menu-arrow-gray-500 menu-state-primary fw-semibold px-5"
                    id="#kt_docs_aside_menu" data-kt-menu="true">
                    @foreach (config('docs._laravel.menus_getting', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach
                </div>
                <!--end::Menu-->
            @else
                <!--begin::Menu-->
                <div class="menu menu-fit menu-column menu-title-gray-800 menu-arrow-gray-500 menu-state-primary fw-semibold px-5"
                    id="#kt_docs_aside_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Getting Started</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    {{-- @include('layouts.partials.docs._aside-docs-gettingstarted') --}}
                    @foreach (config('docs._getting.menus_getting', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Base</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    {{-- @include('layouts.partials.docs._aside-docs-base') --}}
                    @foreach (config('docs._base.menus_base', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach

                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Forms</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    {{-- @include('layouts.partials.docs._aside-docs-forms') --}}
                    @foreach (config('docs._forms.menus_forms', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Editors</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    {{-- @include('layouts.partials.docs._aside-docs-editors') --}}
                    @foreach (config('docs._editor.menus_editor', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Charts</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    {{-- @include('layouts.partials.docs._aside-docs-charts') --}}
                    @foreach (config('docs._charts.menus_charts', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">General</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    {{-- @include('layouts.partials.docs._aside-docs-general') --}}
                    @foreach (config('docs._general.menus_general', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <div class="h-30px"></div>
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu heading-->
                        <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Icons</h4>
                        <!--end:Menu heading-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    {{-- @include('layouts.partials.docs._aside-docs-icons') --}}
                    @foreach (config('docs._icons.menus_icons', []) as $menu)
                        @include('layouts.partials.docs._menu_item_docs', ['menu' => $menu])
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            @endif
        </div>
    </div>
    <!--end::Menu wrapper-->
    <!--begin::Footer-->
    <div class="d-flex flex-column flex-column-auto px-7 pb-7" id="kt_docs_aside_footer">
        <a href="https://devs.keenthemes.com" class="btn btn-success w-100 fw-bold" target="_blank">
            Get Support
        </a>
    </div>
    <!--end::Footer-->
</div>
