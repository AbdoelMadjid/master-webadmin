<li class="list-inline-item g-pos-rel">
    <a id="jump-to-dropdown-invoker"
        class="d-block d-lg-none u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-py-7"
        href="#" aria-controls="jump-to-dropdown" aria-haspopup="true" aria-expanded="false"
        data-dropdown-event="hover" data-dropdown-target="#jump-to-dropdown" data-dropdown-type="css-animation"
        data-dropdown-duration="0" data-dropdown-hide-on-scroll="true" data-dropdown-animation-in="fadeIn"
        data-dropdown-animation-out="fadeOut">
        {{ __('education.jump_to') }}
        <i class="g-ml-3 fa fa-angle-down"></i>
    </a>
    <ul id="jump-to-dropdown"
        class="list-unstyled u-shadow-v39 g-brd-around g-brd-4 g-brd-white g-bg-secondary g-pos-abs g-left-0 g-z-index-99 g-mt-13"
        aria-labelledby="jump-to-dropdown-invoker">
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('education.apply-all-intake') }}">{{ __('education.apply_now') }}</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('education.campus-life') }}">{{ __('education.campus_life') }}</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('education.research') }}">{{ __('education.research') }}</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('education.help') }}">{{ __('education.help') }}</a>
        </li>
        <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
            <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default"
                href="{{ route('education.contacts') }}">{{ __('education.contacts') }}</a>
        </li>
        {{-- <li class="dropdown-item g-px-0 g-py-2">
            <a class="nav-link g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-default"
                href="{{ route('education.signin') }}">Sign in</a>
        </li> --}}

        @if (Route::has('login'))
            <li class="dropdown-item g-px-0 g-py-2">
                @auth
                    <a href="{{ route('homepage') }}"
                        class="nav-link g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-default">
                        {{ __('education.dashboard') }}
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="nav-link g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-default">
                        {{ __('education.sign_in') }}
                    </a>
                @endauth
            </li>
        @endif
    </ul>
</li>

