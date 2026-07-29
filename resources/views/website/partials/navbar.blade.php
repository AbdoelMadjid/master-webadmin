@php
    try {
        $dbNavigations = \App\Models\PageConfig\MenuWebsite\MainNavigation::active()
            ->with(['children' => fn($q) => $q->active()->orderBy('order', 'asc')])
            ->parentOnly()
            ->ordered()
            ->get();
    } catch (\Throwable $e) {
        $dbNavigations = collect();
    }

    $getNavUrl = function ($navItem) {
        if (!$navItem) return '#';
        $url = trim($navItem->url);
        if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://') || str_starts_with($url, '/')) {
            return $url;
        }
        if (\Illuminate\Support\Facades\Route::has($url)) {
            return route($url);
        }
        return $url;
    };

    $getNavTitle = function ($navItem) {
        if (!$navItem) return '';
        if (app()->getLocale() == 'en' && !empty($navItem->title_en)) {
            return $navItem->title_en;
        }
        return $navItem->title;
    };

    $pagesMegaMenu = $dbNavigations->firstWhere('type', 'mega_menu');
    $topLevelNavs = $dbNavigations->where('type', '!=', 'mega_menu');
@endphp

<nav class="js-mega-menu navbar navbar-expand-lg g-px-0 g-py-5 g-py-0--lg">
    <!-- Logo -->
    <a class="navbar-brand g-max-width-170 g-max-width-200--lg" href="{{ route('website.home') }}">
        <img class="img-fluid g-hidden-lg-down" src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
        <img class="img-fluid g-width-80 g-hidden-md-down g-hidden-xl-up" src="{{ asset('assets/img/logo/logo-mini.png') }}" alt="Logo">
        <img class="img-fluid g-hidden-lg-up" src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
    </a>
    <!-- End Logo -->

    <!-- Responsive Toggle Button -->
    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0" type="button"
        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse"
        data-target="#navBar">
        <span class="hamburger hamburger--slider g-px-0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </span>
    </button>
    <!-- End Responsive Toggle Button -->

    <!-- Navigation -->
    <div id="navBar" class="collapse navbar-collapse">
        <ul class="navbar-nav align-items-lg-center g-py-30 g-py-0--lg ml-auto">
            @if($pagesMegaMenu)
                <!-- Pages - Mega Menu -->
                <li class="nav-item hs-has-mega-menu" data-animation-in="fadeIn" data-animation-out="fadeOut" data-position="left">
                    <a id="mega-menu-label-1"
                        class="nav-link text-nowrap g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                        href="#" aria-haspopup="true" aria-expanded="false">
                        {{ $getNavTitle($pagesMegaMenu) }}
                        <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                    </a>

                    <!-- Mega Menu -->
                    <div class="w-100 hs-mega-menu u-shadow-v39 g-brd-around g-brd-7 g-brd-white g-bg-secondary g-text-transform-none g-pa-30 g-pa-50--lg g-my-20 g-my-0--lg"
                        aria-labelledby="mega-menu-label-1">
                        <span class="d-block h1 g-brd-bottom g-brd-2 g-brd-main pb-2 mb-5">{{ $getNavTitle($pagesMegaMenu) }}</span>

                        <div class="row">
                            @for($col = 1; $col <= 4; $col++)
                                @php
                                    $colItems = $pagesMegaMenu->children->where('mega_menu_column', $col);
                                @endphp
                                <div class="col-sm-6 col-lg-3">
                                    <ul class="list-unstyled g-pr-30 mb-0">
                                        @foreach($colItems as $item)
                                            <li class="py-2">
                                                <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                                    href="{{ $getNavUrl($item) }}" target="{{ $item->target ?? '_self' }}">
                                                    {{ $getNavTitle($item) }}
                                                    <i class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                                </a>
                                            </li>
                                        @endforeach

                                        @if($col === 4)
                                            @if (Route::has('login'))
                                                <li class="py-2">
                                                    @auth
                                                        <a href="{{ route('homepage') }}"
                                                            class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5">
                                                            {{ __('website.dashboard') }}
                                                            <i class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('login') }}"
                                                            class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5">
                                                            {{ __('website.sign_in') }}
                                                            <i class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                                        </a>
                                                    @endauth
                                                </li>
                                            @endif
                                            <li class="py-2">
                                                <a class="d-flex g-brd-top g-brd-primary g-color-main g-color-primary--hover g-text-underline--none--hover g-pt-15 g-pb-5"
                                                    href="{{ route('home') }}">
                                                    {{ __('website.main') }}
                                                    <i class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <!-- End Mega Menu -->
                </li>
                <!-- End Pages - Mega Menu -->
            @endif

            <!-- Top Level Nav Items -->
            @foreach($topLevelNavs as $nav)
                @php
                    $activeChildren = $nav->children ? $nav->children->where('is_active', true) : collect();
                @endphp

                @if($activeChildren->count() > 0 || $nav->type === 'dropdown')
                    <li class="nav-item hs-has-sub-menu" data-animation-in="fadeIn" data-animation-out="fadeOut">
                        <a id="nav-link-dropdown-{{ $nav->id }}"
                            class="nav-link text-nowrap g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                            href="{{ $getNavUrl($nav) }}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-{{ $nav->id }}">
                            {{ $getNavTitle($nav) }}
                        </a>

                        <ul id="nav-submenu-{{ $nav->id }}"
                            class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-min-width-200 g-mt-0 mb-0"
                            aria-labelledby="nav-link-dropdown-{{ $nav->id }}">
                            @foreach($activeChildren as $child)
                                <li class="dropdown-item">
                                    <a class="nav-link g-color-main g-color-primary--hover g-py-8 g-px-15"
                                        href="{{ $getNavUrl($child) }}" target="{{ $child->target ?? '_self' }}">
                                        {{ $getNavTitle($child) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-nowrap g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                            href="{{ $getNavUrl($nav) }}" target="{{ $nav->target ?? '_self' }}">
                            {{ $getNavTitle($nav) }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <!-- End Navigation -->
</nav>
