<header id="js-header" class="u-header">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="g-bg-main">
            <div class="container g-py-5">
                <ul class="list-inline d-flex align-items-center g-mb-0">
                    <li class="list-inline-item d-none d-lg-inline-block">
                        <a class="u-link-v5 g-brd-around g-brd-white-opacity-0_2 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 g-rounded-20 text-uppercase g-px-20 g-py-10"
                            href="{{ route('education.apply-all-intake') }}">{{ __('education.apply_for_fall_intake') }}</a>
                    </li>

                    <!-- Language -->
                    @include('education.partials.toolbar.language')
                    <!-- End Language -->

                    <!-- Jump To -->
                    @include('education.partials.toolbar.jump-to')
                    <!-- End Jump To -->

                    <!-- Links -->
                    @include('education.partials.toolbar.links')
                    <!-- End Links -->

                    <!-- Search -->
                    @include('education.partials.toolbar.search')
                    <!-- End Search -->
                </ul>
            </div>
        </div>
        <!-- End Topbar -->

        <div class="container">
            <!-- Nav -->
            @include('education.partials.navbar')
            <!-- End Nav -->
        </div>
    </div>
</header>

