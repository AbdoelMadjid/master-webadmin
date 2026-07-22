<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('education.campus-life') }}">{{ __('education.campus_life') }}</a>
</li>
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('education.research') }}">{{ __('education.research') }}</a>
</li>
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('education.help') }}">{{ __('education.help') }}</a>
</li>
<li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15"
        href="{{ route('education.contacts') }}">{{ __('education.contacts') }}</a>
</li>
{{-- <li class="list-inline-item d-none d-lg-inline-block">
    <a class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10"
        href="{{ route('education.signin') }}">Sign in</a>
</li> --}}

@if (Route::has('login'))
    <li class="list-inline-item d-none d-lg-inline-block">
        @auth
            <a href="{{ route('homepage') }}"
                class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10">
                {{ __('education.dashboard') }}
            </a>
        @else
            <a href="{{ route('login') }}"
                class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10">
                {{ __('education.sign_in') }}
            </a>
        @endauth
    </li>
@endif

