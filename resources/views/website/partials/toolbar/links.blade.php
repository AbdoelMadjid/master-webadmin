@php
    use App\Models\PageConfig\MenuWebsite\TopNavigation;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;

    $topNavItems = TopNavigation::active()
        ->with(['children' => fn($q) => $q->active()->orderBy('order', 'asc')])
        ->parentOnly()
        ->ordered()
        ->get();

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

@foreach($topNavItems as $nav)
    @php
        $activeChildren = $nav->children->where('is_active', true);
    @endphp

    @if($activeChildren->count() > 0)
        <li class="list-inline-item g-pos-rel d-none d-lg-inline-block">
            <a id="top-nav-dropdown-invoker-{{ $nav->id }}"
                class="d-block u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase text-nowrap g-px-8 g-py-15"
                href="{{ $getTopNavUrl($nav) }}" aria-controls="top-nav-dropdown-{{ $nav->id }}" aria-haspopup="true" aria-expanded="false"
                data-dropdown-event="hover" data-dropdown-target="#top-nav-dropdown-{{ $nav->id }}" data-dropdown-type="css-animation"
                data-dropdown-duration="100" data-dropdown-hide-on-scroll="true" data-dropdown-animation-in="fadeIn"
                data-dropdown-animation-out="fadeOut">
                {{ $getTopNavTitle($nav) }}
                <i class="g-ml-3 fa fa-angle-down"></i>
            </a>

            <ul id="top-nav-dropdown-{{ $nav->id }}"
                class="list-unstyled u-shadow-v39 g-brd-around g-brd-4 g-brd-white g-bg-secondary g-pos-abs g-left-0 g-z-index-99 g-mt-5"
                aria-labelledby="top-nav-dropdown-invoker-{{ $nav->id }}">
                @foreach($activeChildren as $child)
                    <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
                        <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default text-nowrap"
                            href="{{ $getTopNavUrl($child) }}" target="{{ $child->target ?? '_self' }}">
                            {{ $getTopNavTitle($child) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @else
        <li class="list-inline-item d-none d-lg-inline-block">
            <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase text-nowrap g-px-8 g-py-15"
                href="{{ $getTopNavUrl($nav) }}" target="{{ $nav->target ?? '_self' }}">
                {{ $getTopNavTitle($nav) }}
            </a>
        </li>
    @endif
@endforeach

@if (Route::has('login'))
    <li class="list-inline-item d-none d-lg-inline-block">
        @auth
            <a href="{{ route('homepage') }}"
                class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10">
                {{ __('website.dashboard') }}
            </a>
        @else
            <a href="{{ route('login') }}"
                class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10">
                {{ __('website.sign_in') }}
            </a>
        @endauth
    </li>
@endif

