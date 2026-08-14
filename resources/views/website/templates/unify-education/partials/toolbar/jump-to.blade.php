@php
    use App\Models\PageConfig\MenuWebsite\TopNavigation;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Cache;

    $topNavItems = Cache::remember('web_top_navigations', 86400, function () {
        return TopNavigation::active()
            ->with(['children' => fn($q) => $q->active()->orderBy('order', 'asc')])
            ->parentOnly()
            ->ordered()
            ->get();
    });

    $getTopNavUrl = function ($item) {
        if (empty($item->url) || $item->url === '#') {
            return '#';
        }
        if ($item->is_external || Str::startsWith($item->url, ['http://', 'https://', '/'])) {
            return $item->url;
        }
        if (Route::has($item->url)) {
            return route($item->url);
        }
        return url($item->url);
    };

    $getTopNavTitle = function ($item) {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($item->title_en)) {
            return $item->title_en;
        }
        return $item->title;
    };
@endphp

<li class="list-inline-item g-pos-rel">
    <a id="jump-to-dropdown-invoker"
        class="d-block d-lg-none u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-py-7"
        href="javascript:void(0);" aria-controls="jump-to-dropdown" aria-haspopup="true" aria-expanded="false"
        data-dropdown-event="click" data-dropdown-target="#jump-to-dropdown" data-dropdown-type="css-animation"
        data-dropdown-duration="200" data-dropdown-hide-on-scroll="false" data-dropdown-animation-in="fadeIn"
        data-dropdown-animation-out="fadeOut">
        {{ __('website.jump_to') }}
        <i class="g-ml-3 fa fa-angle-down"></i>
    </a>
    <ul id="jump-to-dropdown"
        class="list-unstyled u-shadow-v39 g-brd-around g-brd-4 g-brd-white g-bg-secondary g-pos-abs g-left-0 g-z-index-9999 g-mt-13"
        style="min-width: 220px; max-width: calc(100vw - 30px);"
        aria-labelledby="jump-to-dropdown-invoker">
        @if(\App\Models\PageConfig\WebFeature::isFeatureActive('intake_button'))
            <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
                <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                    style="white-space: normal;"
                    href="{{ route('website.apply-all-intake') }}">{{ __('website.apply_now') }}</a>
            </li>
        @endif

        @foreach($topNavItems as $nav)
            <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
                <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                    style="white-space: normal;"
                    href="{{ $getTopNavUrl($nav) }}" target="{{ $nav->target ?? '_self' }}">
                    {{ $getTopNavTitle($nav) }}
                </a>
            </li>
            @foreach($nav->children->where('is_active', true) as $child)
                <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2 g-pl-15">
                    <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                        style="white-space: normal;"
                        href="{{ $getTopNavUrl($child) }}" target="{{ $child->target ?? '_self' }}">
                        ↳ {{ $getTopNavTitle($child) }}
                    </a>
                </li>
            @endforeach
        @endforeach

        @if (Route::has('login') && \App\Models\PageConfig\WebFeature::isFeatureActive('login_button'))
            <li class="dropdown-item g-px-0 g-py-2">
                @auth
                    <a href="{{ route('homepage') }}"
                        class="nav-link g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-default"
                        style="white-space: normal;">
                        {{ __('website.dashboard') }}
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="nav-link g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-default"
                        style="white-space: normal;">
                        {{ __('website.sign_in') }}
                    </a>
                @endauth
            </li>
        @endif
    </ul>
</li>

