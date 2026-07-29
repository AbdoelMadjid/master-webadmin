@php
    use App\Models\PageConfig\WebFeature;
@endphp

<header id="js-header" class="u-header">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="g-bg-main">
            <div class="container g-py-5">
                <div class="d-flex align-items-center w-100" style="min-height: 40px;">
                    <!-- Left Side: Intake Button -->
                    @if(\App\Models\PageConfig\WebFeature::isFeatureActive('intake_button'))
                        <a class="u-link-v5 g-brd-around g-brd-white-opacity-0_2 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 g-rounded-20 text-uppercase text-nowrap g-px-15 g-py-8 d-none d-lg-inline-block"
                            href="{{ route('website.apply-all-intake') }}">{{ __('website.apply_for_fall_intake') }}</a>
                    @endif

                    <!-- Right Side: Language, Jump-To, Links, Search -->
                    <ul class="list-inline d-flex align-items-center g-mb-0 ml-auto">
                        <!-- Language -->
                        @if(\App\Models\PageConfig\WebFeature::isFeatureActive('language_switcher'))
                            @include('website.partials.toolbar.language')
                        @endif
                        <!-- End Language -->

                        <!-- Jump To -->
                        @include('website.partials.toolbar.jump-to')
                        <!-- End Jump To -->

                        <!-- Links -->
                        @include('website.partials.toolbar.links')
                        <!-- End Links -->

                        <!-- Search -->
                        @if(\App\Models\PageConfig\WebFeature::isFeatureActive('search_bar'))
                            @include('website.partials.toolbar.search')
                        @endif
                        <!-- End Search -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <div class="container">
            <!-- Nav -->
            @include('website.partials.navbar')
            <!-- End Nav -->
        </div>
    </div>
</header>

