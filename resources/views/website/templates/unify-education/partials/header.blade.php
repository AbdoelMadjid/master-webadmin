@php
    use App\Models\PageConfig\WebFeature;
@endphp

<header id="js-header" class="u-header">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="g-bg-main">
            <div class="container g-py-5">
                <div class="d-flex align-items-center w-100" style="min-height: 40px;">
                    <!-- Left Side: Mobile Jump To & Desktop Intake Button -->
                    <ul class="list-inline d-flex align-items-center g-mb-0 d-lg-none">
                        @include('website.templates.unify-education.partials.toolbar.jump-to')
                    </ul>

                    @if(\App\Models\PageConfig\WebFeature::isFeatureActive('intake_button'))
                        <a class="u-link-v5 g-brd-around g-brd-white-opacity-0_2 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 g-rounded-20 text-uppercase text-nowrap g-px-15 g-py-8 d-none d-lg-inline-block"
                            href="{{ route('website.apply-all-intake') }}">{{ __('website.apply_for_fall_intake') }}</a>
                    @endif

                    <!-- Right Side: Language, Links, Search -->
                    <ul class="list-inline d-flex align-items-center g-mb-0 ml-auto">
                        <!-- Language -->
                        @if(\App\Models\PageConfig\WebFeature::isFeatureActive('language_switcher'))
                            @include('website.templates.unify-education.partials.toolbar.language')
                        @endif
                        <!-- End Language -->

                        <!-- Links -->
                        @include('website.templates.unify-education.partials.toolbar.links')
                        <!-- End Links -->

                        <!-- Search -->
                        @if(\App\Models\PageConfig\WebFeature::isFeatureActive('search_bar'))
                            @include('website.templates.unify-education.partials.toolbar.search')
                        @endif
                        <!-- End Search -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <div class="container">
            <!-- Nav -->
            @include('website.templates.unify-education.partials.navbar')
            <!-- End Nav -->
        </div>
    </div>
</header>

