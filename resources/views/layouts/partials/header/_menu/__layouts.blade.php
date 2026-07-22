<!--begin:Dashboards menu-->
<div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
    <!--begin:Row-->
    <div class="row">
        <!--begin:Col-->
        <div class="col-lg-7">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                <div class="col-lg-4 mb-3">
                    <!--begin:Heading-->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">{{ __('menu.layouts') }}</h4>
                    <!--end:Heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_layouts.layouts') as $menu)
                        @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span
                                    class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Col-->
                <!--begin:Col-->
                <div class="col-lg-4 mb-3">
                    <!--begin:Heading-->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">{{ __('menu.toolbars') }}</h4>
                    <!--end:Heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_layouts.toolbars') as $menu)
                        @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span
                                    class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Col-->
                <!--begin:Col-->
                <div class="col-lg-4 mb-3">
                    <!--begin:Heading-->
                    <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">{{ __('menu.asides') }}</h4>
                    <!--end:Heading-->
                    <!--begin:Menu item-->
                    @foreach (config('header._header_layouts.asides') as $menu)
                        @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($menu['route']) }}"
                                class="menu-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
                                <span
                                    class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
                            </a>
                        </div>
                    @endforeach
                    <!--end:Menu item-->
                </div>
                <!--end:Col-->
            </div>
            <!--end:Row-->
            <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>
            <!--begin:Layout Builder-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        {{ __('menu.layout_builder') }}
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        {{ __('menu.layout_builder_description') }}
                    </div>
                </div>
                <a href="?page=layout-builder" class="btn btn-sm btn-primary fw-bold">
                    {{ __('menu.try_builder') }}
                </a>
            </div>
            <!--end:Layout Builder-->
        </div>
        <!--end:Col-->
        <!--begin:Col-->
        <div class="col-lg-5 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
            <img src="assets/media/stock/900x600/45.jpg" class="rounded mw-100" alt="" />
        </div>
        <!--end:Col-->
    </div>
    <!--end:Row-->
</div>
<!--end:Dashboards menu-->
