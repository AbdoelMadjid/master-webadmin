@extends('education.partials.web-master')
@section('title', __('education.meta_title_home_page'))
@section('css')
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
@endsection
@section('content')
    <!-- Carousel Slider -->
    @include('education.content.carousel-slider')
    <!-- End Carousel Slider -->

    <!-- Find a Course -->
    @include('education.content.find-a-cource')
    <!-- End Find a Course -->

    <!-- Learn First Steps -->
    @include('education.content.learn-first-steps')
    <!-- End Learn First Steps -->

    <!-- Researches -->
    <div class="g-bg-main g-pos-rel">
        <div class="container g-pos-rel g-z-index-1 g-pt-100 g-pb-120">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-60">
                <h2 class="h1 text-center g-color-white">{{ __('education.home_research_with_unify') }}</h2>
            </div>
            <!-- End Heading -->

            <div class="row align-items-lg-center">
                <div class="col-lg-7 order-lg-2 g-mb-50">
                    <div class="g-pos-rel g-pl-15--lg">
                        <img class="img-fluid w-100 u-shadow-v19 g-brd-around g-brd-7 g-brd-secondary rounded"
                            src="assets/img-temp/600x400/img1.jpg" alt="Image Description">

                        <!-- Video Button -->
                        <div class="g-absolute-centered--y g-left-0 g-right-0 text-center mx-auto">
                            <a class="js-fancybox d-inline-block u-block-hover g-bg-white g-rounded-50 g-text-underline--none--hover g-transition-0_3 g-px-20 g-py-10"
                                href="javascript:;" data-src="//vimeo.com/167434033" data-speed="350">
                                <span class="d-flex align-items-center">
                                    <span
                                        class="u-icon-v3 g-width-30 g-height-30 g-color-white g-bg-primary g-bg-main--hover rounded-circle mr-3">
                                        <i class="g-font-size-13 g-ml-2 hs-icon hs-icon-play"></i>
                                    </span>
                                    <span class="g-color-primary g-color-main--hover">{{ __('education.home_play_video') }}</span>
                                </span>
                            </a>
                        </div>
                        <!-- End Video Button -->
                    </div>
                </div>

                <div class="col-lg-5 order-lg-1 g-mb-50">
                    <!-- Researches - Info -->
                    <div class="mb-5">
                        <h2 class="h3 g-color-white mb-4">{{ __('education.research_article_1_title') }}</h2>
                        <p class="g-color-white-opacity-0_7">{{ __('education.home_research_feature_desc') }}</p>
                    </div>

                    <div class="media g-max-width-300">
                        <div class="d-flex mr-3">
                            <div class="g-width-40 g-height-40">
                                <img class="img-fluid g-brd-around g-brd-2 g-brd-white rounded-circle"
                                    src="assets/img-temp/100x100/img1.jpg" alt="Image Description">
                            </div>
                        </div>
                        <div class="media-body">
                            <span class="d-block g-color-white g-font-secondary g-font-size-16 mb-2">{{ __('education.home_research_quote') }}</span>
                            <h5 class="h6 g-color-primary g-font-primary g-font-weight-700">{{ __('education.home_research_quote_author') }}</h5>
                        </div>
                    </div>
                    <!-- End Researches - Info -->
                </div>
            </div>
        </div>

        <!-- SVG Background Shape -->
        <svg class="g-pos-abs g-bottom-0 g-left-0" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323"
            enable-background="new 0 0 1920 323" xml:space="preserve">
            <polygon fill="#2c3856" points="0,323 1920,323 1920,0 " />
            <polygon fill="#293451" points="-0.5,322.5 -0.5,131.5 658.3,212.3 " />
        </svg>
        <!-- End SVG Background Shape -->
    </div>
    <!-- End Researches -->

    <!-- Research Statistics -->
    <div class="container g-mt-minus-70 g-pb-100">
        <div class="row">
            <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-20--lg">
                <!-- Research Block -->
                <div class="g-pa-10">
                    <div class="g-width-220 g-height-220 u-shadow-v37 rounded-circle g-pos-rel mx-auto">
                        <!-- Research - SVG Shape -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 187 187" enable-background="new 0 0 187 187" xml:space="preserve">
                            <g id="_x31_">
                                <circle fill="#ffffff" cx="93.5" cy="93.5" r="93.5" />
                                <circle fill="#ffffff" stroke="#f0f2f8" stroke-width="7" stroke-miterlimit="10"
                                    cx="93.5" cy="93.5" r="81" />
                                <path fill="none" stroke="#49c1aa" stroke-width="7" stroke-linecap="round"
                                    stroke-miterlimit="10" d="M93.5,12.5
                                                                  c44.7,0,81,36.3,81,81c0,21.3-8.2,40.6-21.6,55.1" />
                            </g>
                        </svg>
                        <!-- End Research - SVG Shape -->

                        <!-- Research - Info -->
                        <div class="text-center g-absolute-centered--y g-left-0 g-right-0 g-px-35">
                            <h4 class="h2 g-font-primary">{{ __('education.home_top_25') }}</h4>
                            <span class="d-block">{{ __('education.research_fact_top_25_desc') }}</span>
                        </div>
                        <!-- Research - Info -->
                    </div>
                </div>
                <!-- End Research Block -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-20--lg">
                <!-- Research Block -->
                <div class="g-pa-10">
                    <div class="g-width-220 g-height-220 u-shadow-v37 rounded-circle g-pos-rel mx-auto">
                        <!-- Research - SVG Shape -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 187 187" enable-background="new 0 0 187 187" xml:space="preserve">
                            <circle fill="#ffffff" cx="93.5" cy="93.5" r="93.5" />
                            <circle fill="#ffffff" stroke="#f0f2f8" stroke-width="7" stroke-miterlimit="10"
                                cx="93.5" cy="93.5" r="81" />
                            <path fill="none" stroke="#a27fcc" stroke-width="7" stroke-linecap="round"
                                stroke-miterlimit="10" d="M93.5,12.5
                                                                c43,0,78.2,33.6,80.8,75.9" />
                        </svg>
                        <!-- End Research - SVG Shape -->

                        <!-- Research - Info -->
                        <div class="text-center g-absolute-centered--y g-left-0 g-right-0 g-px-35">
                            <h4 class="h2 g-font-primary">100%</h4>
                            <span class="d-block">{{ __('education.research_fact_100_desc') }}</span>
                        </div>
                        <!-- Research - Info -->
                    </div>
                </div>
                <!-- End Research Block -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-20--lg">
                <!-- Research Block -->
                <div class="g-pa-10">
                    <div class="g-width-220 g-height-220 u-shadow-v37 rounded-circle g-pos-rel mx-auto">
                        <!-- Research - SVG Shape -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 187 187" enable-background="new 0 0 187 187"
                            xml:space="preserve">
                            <circle fill="#ffffff" cx="93.5" cy="93.5" r="93.5" />
                            <circle fill="#ffffff" stroke="#f0f2f8" stroke-width="7" stroke-miterlimit="10"
                                cx="93.5" cy="93.5" r="81" />
                            <path fill="none" stroke="#61a9d1" stroke-width="7" stroke-linecap="round"
                                stroke-miterlimit="10" d="M93.5,12.5
                                                                c26.7,0,50.4,12.9,65.2,32.9" />
                        </svg>
                        <!-- End Research - SVG Shape -->

                        <!-- Research - Info -->
                        <div class="text-center g-absolute-centered--y g-left-0 g-right-0 g-px-35">
                            <h4 class="h2 g-font-primary">70+</h4>
                            <span class="d-block">{{ __('education.research_fact_70_desc') }}</span>
                        </div>
                        <!-- Research - Info -->
                    </div>
                </div>
                <!-- End Research Block -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-20--lg">
                <!-- Research Block -->
                <div class="g-pa-10">
                    <div class="g-width-220 g-height-220 u-shadow-v37 rounded-circle g-pos-rel mx-auto">
                        <!-- Research - SVG Shape -->
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 187 187" enable-background="new 0 0 187 187"
                            xml:space="preserve">
                            <circle fill="#ffffff" cx="93.5" cy="93.5" r="93.5" />
                            <circle fill="#ffffff" stroke="#f0f2f8" stroke-width="7" stroke-miterlimit="10"
                                cx="93.5" cy="93.5" r="81" />
                            <path fill="#ffffff" stroke="#d16680" stroke-width="7" stroke-linecap="round"
                                stroke-miterlimit="10"
                                d="M93.5,12.5
                                                                c44.7,0,81,36.3,81,81s-36.3,81-81,81c-26.3,0-49.7-12.6-64.5-32" />
                        </svg>
                        <!-- End Research - SVG Shape -->

                        <!-- Research - Info -->
                        <div class="text-center g-absolute-centered--y g-left-0 g-right-0 g-px-35">
                            <h4 class="h2 g-font-primary">{{ __('education.home_tripling') }}</h4>
                            <span class="d-block">{{ __('education.research_fact_tripling_desc') }}</span>
                        </div>
                        <!-- Research - Info -->
                    </div>
                </div>
                <!-- End Research Block -->
            </div>
        </div>

        <!-- SVG Shape (Large Desktop) -->
        <div class="g-max-width-870 mx-auto">
            <svg class="g-hidden-md-down" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 758.2 172.3"
                enable-background="new 0 0 758.2 172.3" xml:space="preserve">
                <g id="Main_Circle">
                    <path fill="#f0f2f8" d="M324.4,118.7c0-29.5,24.7-53.6,54.8-53.6h0c30.2,0,54.8,24.1,54.8,53.6v0c0,29.5-24.7,53.6-54.8,53.6h0
                                                            C349,172.3,324.4,148.2,324.4,118.7L324.4,118.7" />

                    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="323.9412" y1="164.2837"
                        x2="383.4379" y2="129.9333"
                        gradientTransform="matrix(0.9061 0.1165 0.1165 0.8555 21.5988 -26.7912)">
                        <stop offset="0" style="stop-color:#f0f2f8;stop-opacity:0" />
                        <stop offset="0.5224" style="stop-color:#dbdfe8;stop-opacity:0.4179" />
                        <stop offset="1" style="stop-color:#ccd1dd;stop-opacity:0.8" />
                    </linearGradient>
                    <polygon fill="url(#SVGID_3_)" fill-opacity="0.36"
                        points="361.5,168.8 329.2,144.2 356.9,111.8 389.2,136.3  " />
                    <text transform="matrix(1.0223 0 0 1 358.4563 134.7857)" fill="#ffffff" font-family="'FontAwesome'"
                        font-size="43.6866px"></text>
                </g>
                <g id="Right">
                    <path fill="none" stroke="#f0f2f8" stroke-width="8" stroke-linecap="round"
                        stroke-miterlimit="10" d="M449.4,119.3h42.9
                                                            c8.3,0,15.1-6,15.1-13.3V5.3" />
                    <path fill="none" stroke="#f0f2f8" stroke-width="8" stroke-linecap="round"
                        stroke-miterlimit="10" d="M461.4,119.3h281
                                                            c6.6,0,12-6.4,12-14.1V4.3" />
                </g>
                <g id="Left">
                    <path fill="none" stroke="#f0f2f8" stroke-width="8" stroke-linecap="round"
                        stroke-miterlimit="10" d="M309.4,119.3h-42.9
                                                            c-8.3,0-15.1-6-15.1-13.3V5.3" />
                    <path fill="none" stroke="#f0f2f8" stroke-width="8" stroke-linecap="round"
                        stroke-miterlimit="10" d="M297.4,119.3h-281
                                                            c-6.6,0-12-6.4-12-14.1V4.3" />
                </g>
            </svg>
        </div>
        <!-- End SVG Shape (Large Desktop) -->

        <!-- SVG Shape (Small Devices) -->
        <div class="g-max-width-400 mx-auto">
            <svg class="g-hidden-lg-up" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407 172.3"
                enable-background="new 0 0 407 172.3" xml:space="preserve">
                <path fill="none" stroke="#f0f2f8" stroke-width="8" stroke-linecap="round" stroke-miterlimit="10" d="M134,118.1l-113.1,0
                                                          c-9.1,0-16.8-7-16.9-15.8c0-0.1,0-0.1,0-0.2V4" />
                <path fill="#f0f2f8" d="M148.4,118.7c0-29.5,24.7-53.6,54.8-53.6h0c30.2,0,54.8,24.1,54.8,53.6v0c0,29.5-24.7,53.6-54.8,53.6h0
                                                          C173,172.3,148.4,148.2,148.4,118.7L148.4,118.7" />
                <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="147.9412" y1="164.2837"
                    x2="207.4379" y2="129.9333" gradientTransform="matrix(0.9061 0.1165 0.1165 0.8555 5.0741 -6.294)">
                    <stop offset="0" style="stop-color:#f0f2f8;stop-opacity:0" />
                    <stop offset="0.5224" style="stop-color:#dbdfe8;stop-opacity:0.4179" />
                    <stop offset="1" style="stop-color:#ccd1dd;stop-opacity:0.8" />
                </linearGradient>
                <polygon fill="url(#SVGID_4_)" fill-opacity="0.36"
                    points="185.5,168.8 153.2,144.2 180.9,111.8 213.2,136.3 " />
                <text transform="matrix(1.0223 0 0 1 182.4563 134.7857)" fill="#ffffff" font-family="'FontAwesome'"
                    font-size="43.6866px"></text>
                <path fill="none" stroke="#f0f2f8" stroke-width="8" stroke-linecap="round" stroke-miterlimit="10" d="M403,4.9l0,99.3
                                                          c0,8-8,14.7-18,14.8c-0.1,0-0.1,0-0.2,0H273" />
            </svg>
        </div>
        <!-- End SVG Shape (Small Devices) -->

        <div class="g-max-width-300 text-center mx-auto">
            <p class="g-color-secondary-light-v1 mb-0">{{ __('education.home_facts_hall_desc') }}</p>
        </div>
    </div>
    <!-- End Research Statistics -->

    <!-- Testimonials -->
    <div class="g-bg-main-light-v2">
        <div class="container g-pt-70 g-pb-20">
            <div class="js-carousel" data-pagi-classes="u-carousel-indicators-v35--white g-pos-rel text-center">
                <!-- Testimonials -->
                <div class="js-slide">
                    <div class="row justify-content-lg-center g-mb-20">
                        <div class="col-md-3 col-lg-2 g-mb-20">
                            <img class="img-fluid u-shadow-v36 rounded-circle mx-auto"
                                src="assets/img-temp/200x200/img3.jpg" alt="Image Description">
                        </div>

                        <div class="col-md-9 col-lg-8 g-mb-20">
                            <!-- Testimonials - Content -->
                            <div class="media mb-3">
                                <div class="d-flex mr-3">
                                    <span
                                        class="g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                                </div>
                                <div class="media-body">
                                    <blockquote
                                        class="g-brd-left-none g-color-white g-font-style-italic g-font-size-20 g-pl-0">
                                        {{ __('education.future_testimonial_1_quote') }}
                                        <span
                                            class="align-self-end g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="g-pl-30">
                                <h3 class="h4 g-color-white-opacity-0_9 mb-0">Karolina Wellyan</h3>
                                <span class="d-block g-font-size-18 g-color-white-opacity-0_5 g-pl-20">&#8212;
                                    {{ __('education.future_bachelor_student') }}</span>
                            </div>
                            <!-- End Testimonials - Content -->
                        </div>
                    </div>
                </div>
                <!-- End Testimonials -->

                <!-- Testimonials -->
                <div class="js-slide">
                    <div class="row justify-content-lg-center g-mb-20">
                        <div class="col-md-3 col-lg-2 g-mb-20">
                            <img class="img-fluid u-shadow-v36 rounded-circle mx-auto"
                                src="assets/img-temp/200x200/img1.jpg" alt="Image Description">
                        </div>

                        <div class="col-md-9 col-lg-8 g-mb-20">
                            <!-- Testimonials - Content -->
                            <div class="media mb-3">
                                <div class="d-flex mr-3">
                                    <span
                                        class="g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                                </div>
                                <div class="media-body">
                                    <blockquote
                                        class="g-brd-left-none g-color-white g-font-style-italic g-font-size-20 g-pl-0">
                                        {{ __('education.future_testimonial_2_quote') }}
                                        <span
                                            class="align-self-end g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="g-pl-30">
                                <h3 class="h4 g-color-white-opacity-0_9 mb-0">Alex Watson</h3>
                                <span class="d-block g-font-size-18 g-color-white-opacity-0_5 g-pl-20">&#8212; {{ __('education.future_grad_2015') }}</span>
                            </div>
                            <!-- End Testimonials - Content -->
                        </div>
                    </div>
                </div>
                <!-- End Testimonials -->

                <!-- Testimonials -->
                <div class="js-slide">
                    <div class="row justify-content-lg-center g-mb-20">
                        <div class="col-md-3 col-lg-2 g-mb-20">
                            <img class="img-fluid u-shadow-v36 rounded-circle mx-auto"
                                src="assets/img-temp/200x200/img2.jpg" alt="Image Description">
                        </div>

                        <div class="col-md-9 col-lg-8 g-mb-20">
                            <!-- Testimonials - Content -->
                            <div class="media mb-3">
                                <div class="d-flex mr-3">
                                    <span
                                        class="g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                                </div>
                                <div class="media-body">
                                    <blockquote
                                        class="g-brd-left-none g-color-white g-font-style-italic g-font-size-20 g-pl-0">
                                        {{ __('education.future_testimonial_3_quote') }}
                                        <span
                                            class="align-self-end g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="g-pl-30">
                                <h3 class="h4 g-color-white-opacity-0_9 mb-0">Maria Olsson</h3>
                                <span class="d-block g-font-size-18 g-color-white-opacity-0_5 g-pl-20">&#8212; {{ __('education.future_grad_2017') }}</span>
                            </div>
                            <!-- End Testimonials - Content -->
                        </div>
                    </div>
                </div>
                <!-- End Testimonials -->

                <!-- Testimonials -->
                <div class="js-slide">
                    <div class="row justify-content-lg-center g-mb-20">
                        <div class="col-md-3 col-lg-2 g-mb-20">
                            <img class="img-fluid u-shadow-v36 rounded-circle mx-auto"
                                src="assets/img-temp/200x200/img4.jpg" alt="Image Description">
                        </div>

                        <div class="col-md-9 col-lg-8 g-mb-20">
                            <!-- Testimonials - Content -->
                            <div class="media mb-3">
                                <div class="d-flex mr-3">
                                    <span
                                        class="g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                                </div>
                                <div class="media-body">
                                    <blockquote
                                        class="g-brd-left-none g-color-white g-font-style-italic g-font-size-20 g-pl-0">
                                        {{ __('education.home_testimonial_4_quote') }}
                                        <span
                                            class="align-self-end g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="g-pl-30">
                                <h3 class="h4 g-color-white-opacity-0_9 mb-0">Brown Draxler</h3>
                                <span class="d-block g-font-size-18 g-color-white-opacity-0_5 g-pl-20">&#8212; {{ __('education.home_testimonial_4_role') }}</span>
                            </div>
                            <!-- End Testimonials - Content -->
                        </div>
                    </div>
                </div>
                <!-- End Testimonials -->
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Events -->
    <div class="g-bg-secondary">
        <div class="container g-py-100">
            <!-- Heading -->
            <div class="g-max-width-645 text-center g-mb-60 mx-auto">
                <h2 class="h1 mb-3">{{ __('education.home_events_heading') }}</h2>
                <p>{{ __('education.home_events_desc') }}</p>
            </div>
            <!-- End Heading -->

            <!-- More Events List -->
            <ul class="list-unstyled g-mb-60">
                <!-- Events Item -->
                <li
                    class="u-block-hover u-shadow-v37--hover g-bg-secondary-dark-v1 g-bg-white--hover rounded g-px-50 g-py-30 mb-4">
                    <div class="row align-items-lg-center">
                        <div class="col-md-3 col-lg-2 g-mb-30 g-mb-0--lg">
                            <div class="d-flex align-items-center mb-3">
                                <span
                                    class="g-color-primary g-font-weight-500 g-font-size-50 g-line-height-1 mr-3">12</span>
                                <div class="g-color-text-light-v1 text-center g-line-height-1_4">
                                    <span class="d-block">{{ __('education.home_month_nov') }}</span>
                                    <span class="d-block">2017</span>
                                </div>
                            </div>
                            <span class="d-block g-color-text-light-v1">{{ __('education.home_event_time') }}</span>
                        </div>
                        <div class="col-md-9 col-lg-8 g-mb-30 g-mb-0--lg">
                            <h3 class="h5 g-font-primary g-font-weight-500 mb-1">{{ __('education.home_event_1_title') }}</h3>
                            <p>{{ __('education.home_event_1_desc') }}</p>
                            <a class="d-inline-block u-link-v5 g-color-text-light-v1 g-color-primary--hover"
                                href="#">
                                <i class="align-middle g-color-primary mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                                {{ __('education.home_event_location_1') }}
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-block g-brd-2 g-brd-main-opacity-0_1 g-brd-primary--hover g-color-primary g-color-white--hover g-bg-primary--hover g-rounded-30 g-py-10"
                                href="#">{{ __('education.home_register_now') }}</a>
                        </div>
                    </div>
                    <a class="u-link-v2" href="#"></a>
                </li>
                <!-- End Events Item -->

                <!-- Events Item -->
                <li
                    class="u-block-hover u-shadow-v37--hover g-bg-secondary-dark-v2 g-bg-white--hover rounded g-px-50 g-pa-30 mb-4">
                    <div class="row align-items-lg-center">
                        <div class="col-md-3 col-lg-2 g-mb-30 g-mb-0--lg">
                            <div class="d-flex align-items-center mb-3">
                                <span
                                    class="g-color-primary g-font-weight-500 g-font-size-50 g-line-height-1 mr-3">05</span>
                                <div class="g-color-text-light-v1 text-center g-line-height-1_4">
                                    <span class="d-block">{{ __('education.home_month_dec') }}</span>
                                    <span class="d-block">2017</span>
                                </div>
                            </div>
                            <span class="d-block g-color-text-light-v1">{{ __('education.home_event_time') }}</span>
                        </div>
                        <div class="col-md-9 col-lg-8 g-mb-30 g-mb-0--lg">
                            <h3 class="h5 g-font-primary g-font-weight-500 mb-1">{{ __('education.home_event_2_title') }}</h3>
                            <p>{{ __('education.home_event_2_desc') }}</p>
                            <a class="d-inline-block u-link-v5 g-color-text-light-v1 g-color-primary--hover"
                                href="#">
                                <i class="align-middle g-color-primary mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                                {{ __('education.home_event_location_2') }}
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-block g-brd-2 g-brd-main-opacity-0_1 g-brd-primary--hover g-color-primary g-color-white--hover g-bg-primary--hover g-rounded-30 g-py-10"
                                href="#">{{ __('education.home_register_now') }}</a>
                        </div>
                    </div>
                    <a class="u-link-v2" href="#"></a>
                </li>
                <!-- End Events Item -->

                <!-- Events Item -->
                <li
                    class="u-block-hover u-shadow-v37--hover g-bg-secondary-dark-v1 g-bg-white--hover rounded g-px-50 g-pa-30 mb-4">
                    <div class="row align-items-lg-center">
                        <div class="col-md-3 col-lg-2 g-mb-30 g-mb-0--lg">
                            <div class="d-flex align-items-center mb-3">
                                <span
                                    class="g-color-primary g-font-weight-500 g-font-size-50 g-line-height-1 mr-3">23</span>
                                <div class="g-color-text-light-v1 text-center g-line-height-1_4">
                                    <span class="d-block">{{ __('education.home_month_dec') }}</span>
                                    <span class="d-block">2017</span>
                                </div>
                            </div>
                            <span class="d-block g-color-text-light-v1">{{ __('education.home_event_time') }}</span>
                        </div>
                        <div class="col-md-9 col-lg-8 g-mb-30 g-mb-0--lg">
                            <h3 class="h5 g-font-primary g-font-weight-500 mb-1">{{ __('education.home_event_3_title') }}</h3>
                            <p>{{ __('education.home_event_3_desc') }}</p>
                            <a class="d-inline-block u-link-v5 g-color-text-light-v1 g-color-primary--hover"
                                href="#">
                                <i class="align-middle g-color-primary mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                                {{ __('education.home_event_location_1') }}
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-block g-brd-2 g-brd-main-opacity-0_1 g-brd-primary--hover g-color-primary g-color-white--hover g-bg-primary--hover g-rounded-30 g-py-10"
                                href="#">{{ __('education.home_register_now') }}</a>
                        </div>
                    </div>
                    <a class="u-link-v2" href="#"></a>
                </li>
                <!-- End Events Item -->
            </ul>
            <!-- End More Events List -->

            <div class="text-center">
                <a class="btn u-shadow-v33 g-color-white g-color-white--hover g-bg-primary g-bg-main--hover g-rounded-30 g-px-25 g-py-10"
                    href="{{ route('education.events') }}">{{ __('education.home_view_all_events') }}</a>
            </div>
        </div>
    </div>
    <!-- End Events -->

    <!-- News -->
    <div class="container g-pt-100">
        <div class="g-px-30--lg">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-30">
                <h2 class="h1 mb-3">{{ __('education.home_latest_news_opinions') }}</h2>
                <p>{{ __('education.home_latest_news_desc') }}</p>
            </div>
            <!-- End Heading -->

            <!-- News Carousel -->
            <div class="js-carousel u-carousel-v5 g-mx-minus-15" data-slides-show="3" data-slides-scroll="1"
                data-arrows-classes="u-icon-v3 u-icon-size--sm g-absolute-centered--y g-color-primary g-color-white--hover g-bg-primary-opacity-0_1 g-bg-primary--hover rounded-circle g-pa-11"
                data-arrow-left-classes="fa fa-angle-left g-left-0 g-ml-minus-50--lg"
                data-arrow-right-classes="fa fa-angle-right g-right-0 g-mr-minus-50--lg"
                data-pagi-classes="u-carousel-indicators-v35 g-pos-rel text-center g-mt-30"
                data-responsive='[{
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 2
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "slidesToShow": 1
                 }
               }, {
                 "breakpoint": 554,
                 "settings": {
                   "slidesToShow": 1
                 }
               }]'>

                <!-- News -->
                <div class="js-slide u-shadow-v38 g-bg-size-cover g-bg-pos-center rounded g-mx-15 g-my-30"
                    style="background-image: url(assets/img-temp/400x500/img1.jpg);">
                    <article class="align-self-end text-center g-pos-rel g-z-index-1 g-pa-40 mx-auto">
                        <h3 class="g-color-white">{{ __('education.home_news_1_title') }}</h3>
                        <div class="mt-4">
                            <span class="d-block g-color-white g-font-size-16 mb-2">Neyton Burchie</span>
                            <div class="d-inline-block g-width-40 g-height-40">
                                <img class="img-fluid g-brd-around g-brd-2 g-brd-primary-opacity-0_1 rounded-circle"
                                    src="assets/img-temp/100x100/img3.jpg" alt="Image Description">
                            </div>
                        </div>
                        <a class="u-link-v2" href="{{ route('education.home') }}"></a>
                    </article>
                </div>
                <!-- End News -->

                <!-- News -->
                <div class="js-slide g-flex-centered u-shadow-v38 rounded g-mx-15 g-my-30">
                    <article class="g-pa-40">
                        <blockquote class="g-brd-left-none g-color-main-dark-v3 g-font-size-18 g-pl-0 mb-5">{{ __('education.home_news_2_quote') }}</blockquote>
                        <div class="text-center mb-3">
                            <span class="d-block g-color-text-light-v1 g-font-size-16 mb-2">Keith Margaret</span>
                            <div class="d-inline-block g-width-40 g-height-40">
                                <img class="img-fluid g-brd-around g-brd-2 g-brd-primary-opacity-0_1 rounded-circle"
                                    src="assets/img-temp/100x100/img2.jpg" alt="Image Description">
                            </div>
                        </div>
                        <a class="btn btn-block g-color-primary g-color-white--hover g-bg-primary-opacity-0_1 g-bg-primary--hover g-rounded-20 g-py-10"
                            href="{{ route('education.home') }}">{{ __('education.read_more') }}</a>
                    </article>
                </div>
                <!-- End News -->

                <!-- News -->
                <div class="js-slide u-shadow-v38 g-bg-size-cover g-bg-pos-center rounded g-mx-15 g-my-30"
                    style="background-image: url(assets/img-temp/400x500/img3.jpg);">
                    <article class="align-self-end text-center g-pos-rel g-z-index-1 g-pa-40 mx-auto">
                        <h3 class="g-color-white">{{ __('education.home_news_3_title') }}</h3>
                        <div class="mt-4">
                            <span class="d-block g-color-white g-font-size-16 mb-2">Tina Krueger</span>
                            <div class="d-inline-block g-width-40 g-height-40">
                                <img class="img-fluid g-brd-around g-brd-2 g-brd-primary-opacity-0_1 rounded-circle"
                                    src="assets/img-temp/100x100/img5.jpg" alt="Image Description">
                            </div>
                        </div>
                        <a class="u-link-v2" href="{{ route('education.home') }}"></a>
                    </article>
                </div>
                <!-- End News -->

                <!-- News -->
                <div class="js-slide g-flex-centered u-shadow-v38 rounded g-mx-15 g-my-30">
                    <article class="g-pa-40">
                        <blockquote class="g-brd-left-none g-color-main-dark-v3 g-font-size-18 g-pl-0 mb-5">{{ __('education.home_news_4_quote') }}</blockquote>
                        <div class="text-center mb-3">
                            <span class="d-block g-color-text-light-v1 g-font-size-16 mb-2">Neyton Burchie</span>
                            <div class="d-inline-block g-width-40 g-height-40">
                                <img class="img-fluid g-brd-around g-brd-2 g-brd-primary-opacity-0_1 rounded-circle"
                                    src="assets/img-temp/100x100/img3.jpg" alt="Image Description">
                            </div>
                        </div>
                        <a class="btn btn-block g-color-primary g-color-white--hover g-bg-primary-opacity-0_1 g-bg-primary--hover g-rounded-20 g-py-10"
                            href="{{ route('education.home') }}">{{ __('education.read_more') }}</a>
                    </article>
                </div>
                <!-- End News -->

                <!-- News -->
                <div class="js-slide u-shadow-v38 g-bg-size-cover g-bg-pos-center rounded g-mx-15 g-my-30"
                    style="background-image: url(assets/img-temp/400x500/img2.jpg);">
                    <article class="align-self-end text-center g-pos-rel g-z-index-1 g-pa-40 mx-auto">
                        <h3 class="g-color-white">{{ __('education.home_news_5_title') }}</h3>
                        <div class="mt-4">
                            <span class="d-block g-color-white g-font-size-16 mb-2">Liza Nelson</span>
                            <div class="d-inline-block g-width-40 g-height-40">
                                <img class="img-fluid g-brd-around g-brd-2 g-brd-primary-opacity-0_1 rounded-circle"
                                    src="assets/img-temp/100x100/img4.jpg" alt="Image Description">
                            </div>
                        </div>
                        <a class="u-link-v2" href="{{ route('education.home') }}"></a>
                    </article>
                </div>
                <!-- End News -->
            </div>
            <!-- End News Carousel -->
        </div>
    </div>
    <!-- End News -->

    <!-- Call to Action -->
    @include('education.content.call-to-action')
    <!-- End Call to Action -->
@endsection
@section('script')
    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/helpers/hs.height-calc.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.popup.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

            // initialization of header's height equal offset
            $.HSCore.helpers.HSHeightCalc.init();

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
