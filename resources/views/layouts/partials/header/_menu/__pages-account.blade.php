<!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-5 mb-6 mb-lg-0">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-6">
                <!--begin:Menu item-->
                @foreach (config('header._header_pages.account_col1') as $menu)
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
            <div class="col-lg-6">
                <!--begin:Menu item-->
                @foreach (config('header._header_pages.account_col2') as $menu)
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
    </div>
    <!--end:Col-->
    <!--begin:Col-->
    <div class="col-lg-7">
        <img src="assets/media/stock/900x600/46.jpg" class="rounded mw-100" alt="" />
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->
