<!--begin:Dashboards menu-->
<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
    <!--begin:Row-->
    <div class="row">
        <!--begin:Col-->
        <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                @foreach (config('header._header_dashboard.header_dashboard_card') as $card)
                    @php
                        $titleKey =
                            'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $card['title']));
                        $descKey = $titleKey . '_description';
                    @endphp
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <a href="{{ route($card['route']) }}"
                                class="menu-link {{ request()->routeIs($card['route']) ? 'active' : '' }}">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="{{ $card['icon'] }}">
                                        @for ($i = 1; $i <= $card['paths']; $i++)
                                            <span class="path{{ $i }}"></span>
                                        @endfor
                                    </i>
                                </span>
                                <span class="d-flex flex-column">
                                    <span
                                        class="fs-6 fw-bold text-gray-800">{{ __($titleKey) != $titleKey ? __($titleKey) : $card['title'] }}</span>
                                    <span
                                        class="fs-7 text-gray-600">{{ __($descKey) != $descKey ? __($descKey) : $card['description'] }}</span>
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!--end:Col-->
            </div>
            <!--end:Row-->
            <div class="separator separator-dashed mx-5 my-5"></div>
            <!--begin:Landing-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        {{ __('menu.landing_page_template') }}
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        {{ __('menu.landing_page_description') }}
                    </div>
                </div>
                <a href="{{ url('/landing') }}" class="btn btn-sm btn-primary fw-bold">
                    {{ __('menu.explore') }}
                </a>
            </div>
            <!--end:Landing-->
        </div>
        <!--end:Col-->
        <!--begin:Col-->
        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
            <!--begin:Heading-->
            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">{{ __('menu.more_dashboards') }}</h4>
            <!--end:Heading-->
            <!--begin:Menu item-->
            @foreach (config('header._header_dashboard.header_dashboard_other') as $menu)
                @php $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title'])); @endphp
                <div class="menu-item p-0 m-0">
                    <a href="{{ route($menu['route']) }}"
                        class="menu-link py-2 {{ request()->routeIs($menu['route']) ? 'active' : '' }}">
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
</div>
<!--end:Dashboards menu-->
