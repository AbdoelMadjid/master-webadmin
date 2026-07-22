<div class="container g-pt-100 g-pb-50">
    <!-- Heading -->
    <div class="g-max-width-645 text-center mx-auto">
        <h2 class="h1 mb-3">{{ __('education.learn_first_steps_title') }}</h2>
        <p>{{ __('education.learn_first_steps_description') }}</p>
    </div>
    <!-- End Heading -->

    <hr class="g-brd-secondary-light-v1 g-my-50">

    <div class="row">
        <div class="col-lg-5 order-lg-2 g-mb-50">
            <!-- List of Links -->
            <ul class="list-unstyled g-pl-15--lg mb-0">
                <!-- Links -->
                <li>
                    <div
                        class="media u-block-hover g-color-main g-text-underline--none--hover g-transition-0_5 g-px-10 g-py-15">
                        <div class="d-flex mr-4">
                            <span
                                class="u-icon-v3 u-icon-size--lg u-shadow-v35 g-color-blue g-color-white--hover g-bg-secondary-dark-v1 g-bg-main--hover g-font-size-20 rounded-circle">
                                <i class="icon-finance-067 u-line-icon-pro"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-blue g-color-main--hover g-font-primary mb-1">{{ __('education.learn_item_1_title') }}
                            </h3>
                            <p class="g-font-size-16 mb-0">{{ __('education.learn_item_1_text') }}</p>
                        </div>
                        <a class="u-link-v2" href="{{ route('education.future-students') }}"></a>
                    </div>
                </li>
                <!-- End Links -->

                <!-- Links -->
                <li>
                    <div
                        class="media u-block-hover g-color-main g-text-underline--none--hover g-transition-0_5 g-px-10 g-py-15">
                        <div class="d-flex mr-4">
                            <span
                                class="u-icon-v3 u-icon-size--lg u-shadow-v35 g-color-purple g-color-white--hover g-bg-secondary-dark-v1 g-bg-main--hover g-font-size-20 rounded-circle">
                                <i class="icon-education-103 u-line-icon-pro"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-purple g-color-main--hover g-font-primary mb-1">{{ __('education.learn_item_2_title') }}</h3>
                            <p class="g-font-size-16 mb-0">{{ __('education.learn_item_2_text') }}</p>
                        </div>
                        <a class="u-link-v2" href="{{ route('education.programs') }}"></a>
                    </div>
                </li>
                <!-- End Links -->

                <!-- Links -->
                <li>
                    <div
                        class="media u-block-hover g-color-main g-text-underline--none--hover g-transition-0_5 g-px-10 g-py-15">
                        <div class="d-flex mr-4">
                            <span
                                class="u-icon-v3 u-icon-size--lg u-shadow-v35 g-color-teal g-color-white--hover g-bg-secondary-dark-v1 g-bg-main--hover g-font-size-20 rounded-circle">
                                <i class="icon-education-124 u-line-icon-pro"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-teal g-color-main--hover g-font-primary mb-1">{{ __('education.learn_item_3_title') }}</h3>
                            <p class="g-font-size-16 mb-0">{{ __('education.learn_item_3_text') }}</p>
                        </div>
                        <a class="u-link-v2" href="{{ route('education.events') }}"></a>
                    </div>
                </li>
                <!-- End Links -->

                <!-- Links -->
                <li>
                    <div
                        class="media u-block-hover g-color-main g-text-underline--none--hover g-transition-0_5 g-px-10 g-py-15">
                        <div class="d-flex mr-4">
                            <span
                                class="u-icon-v3 u-icon-size--lg u-shadow-v35 g-color-brown g-color-white--hover g-bg-secondary-dark-v1 g-bg-main--hover g-font-size-20 rounded-circle">
                                <i class="icon-education-127 u-line-icon-pro"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-brown g-color-main--hover g-font-primary mb-1">{{ __('education.learn_item_4_title') }}
                            </h3>
                            <p class="g-font-size-16 mb-0">{{ __('education.learn_item_4_text') }}</p>
                        </div>
                        <a class="u-link-v2" href="{{ route('education.campus-life') }}"></a>
                    </div>
                </li>
                <!-- End Links -->
            </ul>
            <!-- End List of Links -->
        </div>

        <div class="col-lg-7 order-lg-1 g-pt-10 g-mb-60">
            <!-- Youtube Iframe -->
            <div
                class="embed-responsive embed-responsive-16by9 u-shadow-v36 g-brd-around g-brd-7 g-brd-white g-rounded-5 mb-4">
                <iframe src="https://www.youtube.com/embed/FxiskmF16gU?rel=0&amp;showinfo=0" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <!-- End Youtube Iframe -->

            <h4 class="h3 mb-0">{{ __('education.learn_explore_title') }}</h4>
            <a class="g-pl-30" href="#">&#8212; {{ __('education.learn_explore_link') }}</a>
        </div>
    </div>
</div>
