<!--begin:Pages menu-->
<div class="menu-active-bg px-4 px-lg-0">
    <!--begin:Tabs nav-->
    <div class="d-flex w-100 overflow-auto">
        <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
            <!--begin:Nav item-->
            <li class="nav-item mx-lg-1">
                @php
                    // Daftar tab route lain yang dipakai
                    $otherTabs = [
                        'pages.account.*',
                        'pages.authentication.*',
                        'pages.utilities.*',
                        'pages.widgets.*',
                        // tambahkan kalau ada tab lain
                    ];

                    // cek apakah ada route yang match salah satu tab selain general
                    $isOtherActive = false;
                    foreach ($otherTabs as $tab) {
                        if (request()->routeIs($tab)) {
                            $isOtherActive = true;
                            break;
                        }
                    }

                    // default: aktifkan General kalau tidak ada tab lain yang aktif
                    $isActiveGeneral = request()->routeIs('pages.general.*') || !$isOtherActive;
                @endphp

                <a class="nav-link py-3 py-lg-6 {{ $isActiveGeneral ? 'active' : '' }} text-active-primary" href="javascript:void(0)"
                    data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_general">{{ __('menu.general') }}</a>
            </li>
            <!--end:Nav item-->
            <!--begin:Nav item-->
            <li class="nav-item mx-lg-1">
                <a class="nav-link py-3 py-lg-6 {{ request()->routeIs('pages.account.*') ? 'active' : '' }} text-active-primary"
                    href="javascript:void(0)" data-bs-toggle="tab"
                    data-bs-target="#kt_app_header_menu_pages_account">{{ __('menu.account') }}</a>
            </li>
            <!--end:Nav item-->
            <!--begin:Nav item-->
            <li class="nav-item mx-lg-1">
                <a class="nav-link py-3 py-lg-6 {{ request()->routeIs('pages.authentication.*') ? 'active' : '' }} text-active-primary"
                    href="javascript:void(0)" data-bs-toggle="tab"
                    data-bs-target="#kt_app_header_menu_pages_authentication">{{ __('menu.authentication') }}</a>
            </li>
            <!--end:Nav item-->
            <!--begin:Nav item-->
            <li class="nav-item mx-lg-1">
                <a class="nav-link py-3 py-lg-6 {{ request()->routeIs('pages.utilities.*') ? 'active' : '' }} text-active-primary"
                    href="javascript:void(0)" data-bs-toggle="tab"
                    data-bs-target="#kt_app_header_menu_pages_utilities">{{ __('menu.utilities') }}</a>
            </li>
            <!--end:Nav item-->
            <!--begin:Nav item-->
            <li class="nav-item mx-lg-1">
                <a class="nav-link py-3 py-lg-6 {{ request()->routeIs('pages.widgets.*') ? 'active' : '' }} text-active-primary"
                    href="javascript:void(0)" data-bs-toggle="tab"
                    data-bs-target="#kt_app_header_menu_pages_widgets">{{ __('menu.widgets') }}</a>
            </li>
            <!--end:Nav item-->
        </ul>
    </div>
    <!--end:Tabs nav-->
    <!--begin:Tab content-->
    <div class="tab-content py-4 py-lg-8 px-lg-7">
        <!--begin:Tab pane-->
        <div class="tab-pane {{ $isActiveGeneral ? 'active' : '' }} w-lg-1000px" id="kt_app_header_menu_pages_general">
            <!--layout-partial:layout/partials/header/_menu/__pages-general.html-->
            @include('layouts.partials.header._menu.__pages-general')
        </div>
        <!--end:Tab pane-->
        <!--begin:Tab pane-->
        <div class="tab-pane {{ request()->routeIs('pages.account.*') ? 'active' : '' }} w-lg-600px"
            id="kt_app_header_menu_pages_account">
            <!--layout-partial:layout/partials/header/_menu/__pages-account.html-->
            @include('layouts.partials.header._menu.__pages-account')
        </div>
        <!--end:Tab pane-->
        <!--begin:Tab pane-->
        <div class="tab-pane {{ request()->routeIs('pages.authentication.*') ? 'active' : '' }} w-lg-1000px"
            id="kt_app_header_menu_pages_authentication">
            <!--layout-partial:layout/partials/header/_menu/__pages-authentication.html-->
            @include('layouts.partials.header._menu.__pages-authentication')
        </div>
        <!--end:Tab pane-->
        <!--begin:Tab pane-->
        <div class="tab-pane {{ request()->routeIs('pages.utilities.*') ? 'active' : '' }} w-lg-1000px"
            id="kt_app_header_menu_pages_utilities">
            <!--layout-partial:layout/partials/header/_menu/__pages-utilities.html-->
            @include('layouts.partials.header._menu.__pages-utilities')
        </div>
        <!--end:Tab pane-->
        <!--begin:Tab pane-->
        <div class="tab-pane {{ request()->routeIs('pages.widgets.*') ? 'active' : '' }} w-lg-1000px"
            style="max-width: 860px;"
            id="kt_app_header_menu_pages_widgets">
            <!--layout-partial:layout/partials/header/_menu/__pages-widgets.html-->
            @include('layouts.partials.header._menu.__pages-widgets')
        </div>
        <!--end:Tab pane-->
    </div>
    <!--end:Tab content-->
</div>
<!--end:Pages menu-->
