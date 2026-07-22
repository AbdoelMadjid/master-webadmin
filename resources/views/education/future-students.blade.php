@extends('education.partials.web-master')
@section('title', __('education.meta_title_future_students'))
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
    <link rel="stylesheet" href="assets/vendor/hs-bg-video/hs-bg-video.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
@endsection
@section('content')
    <!-- Promo Block -->
    <section class="clearfix">
        <div class="js-bg-video" data-hs-bgv-type="youtube" data-hs-bgv-id="FxiskmF16gU" data-hs-bgv-loop="1">
            <div class="g-bg-cover g-bg-black-opacity-0_6--after g-pos-rel g-z-index-1">
                <div class="container text-center g-pos-rel g-z-index-1 g-pt-100 g-pb-80">
                    <!-- Promo Block Info -->
                    <div class="g-mb-40">
                        <h1 class="g-color-white g-font-size-60--lg">{{ __('education.future_hero_title') }}</h1>
                        <p class="g-color-white-opacity-0_8 g-font-size-22">{{ __('education.future_hero_desc') }}</p>
                    </div>
                    <!-- End Promo Block Info -->

                    <!-- Form Group -->
                    <form class="g-max-width-645 mx-auto">
                        <input class="form-control h-100 g-brd-none g-font-size-16 g-rounded-30 g-px-30 g-py-14 g-mb-20"
                            type="text" placeholder="{{ __('education.future_search_programs_by_major') }}">

                        <div class="row g-mx-minus-10">
                            <div class="col-sm-6 g-px-10 g-mb-20">
                                <button
                                    class="btn btn-block g-color-white g-color-main--hover g-bg-main g-bg-white--hover g-rounded-30 g-py-13"
                                    type="submit">
                                    {{ __('education.future_search_undergraduate_programs') }}
                                </button>
                            </div>
                            <div class="col-sm-6 g-px-10 g-mb-20">
                                <button
                                    class="btn btn-block g-color-white g-color-main--hover g-bg-primary g-bg-white--hover g-rounded-30 g-py-13"
                                    type="submit">
                                    {{ __('education.future_search_graduate_programs') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form Group -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Promo Block -->

    <!-- Studies -->
    <div class="container g-pt-100 g-pb-50">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-mb-60">
            <h2 class="h1 mb-3">{{ __('education.future_edge_title') }}</h2>
            <p>{{ __('education.future_edge_desc') }}</p>
        </div>
        <!-- End Heading -->

        <div class="row">
            <!-- Studies -->
            <article class="col-md-4 g-mb-30">
                <div class="g-mb-30">
                    <img class="img-fluid" src="assets/img-temp/600x350/img24.jpg" alt="Image Description">
                </div>

                <div class="g-mb-35">
                    <h3 class="mb-3">{{ __('education.future_undergraduate_title') }}</h3>
                    <p class="g-font-size-15">{{ __('education.future_undergraduate_prefix') }} <a class="g-font-weight-500"
                            href="{{ route('education.programs') }}">{{ __('education.future_undergraduate_link_1') }}</a>
                        {{ __('education.future_undergraduate_mid') }} <a class="g-font-weight-500"
                            href="{{ route('education.programs') }}">{{ __('education.future_undergraduate_link_2') }}</a>
                        {{ __('education.future_undergraduate_suffix') }}</p>
                </div>
                <a class="btn u-shadow-v39 g-color-white g-color-white--hover g-bg-main g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-8"
                    href="{{ route('education.apply-all-intake') }}">{{ __('education.future_start_application') }}</a>
            </article>
            <!-- End Studies -->

            <!-- Studies -->
            <article class="col-md-4 g-mb-30">
                <div class="g-mb-30">
                    <img class="img-fluid" src="assets/img-temp/600x350/img25.jpg" alt="Image Description">
                </div>

                <div class="g-mb-35">
                    <h3 class="mb-3">{{ __('education.future_graduate_title') }}</h3>
                    <p class="g-font-size-15">{{ __('education.future_graduate_prefix') }} <a class="g-font-weight-500"
                            href="{{ route('education.programs') }}">{{ __('education.future_graduate_link') }}</a>,
                        {{ __('education.future_graduate_suffix') }}</p>
                </div>
                <a class="btn u-shadow-v39 g-color-white g-color-white--hover g-bg-main g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-8"
                    href="{{ route('education.apply-all-intake') }}">{{ __('education.future_start_application') }}</a>
            </article>
            <!-- End Studies -->

            <!-- Studies -->
            <article class="col-md-4 g-mb-30">
                <div class="g-mb-30">
                    <img class="img-fluid" src="assets/img-temp/600x350/img26.jpg" alt="Image Description">
                </div>

                <div class="g-mb-35">
                    <h3 class="mb-3">{{ __('education.future_continuing_title') }}</h3>
                    <p class="g-font-size-15">{{ __('education.future_continuing_prefix') }} <a class="g-font-weight-500"
                            href="#">{{ __('education.future_continuing_link') }}</a>
                        {{ __('education.future_continuing_suffix') }}
                    </p>
                </div>
                <a class="btn u-shadow-v39 g-color-white g-color-white--hover g-bg-main g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-8"
                    href="{{ route('education.apply-all-intake') }}">{{ __('education.future_start_application') }}</a>
            </article>
            <!-- End Studies -->
        </div>
    </div>
    <!-- End Studies -->

    <!-- Hero Content -->
    <div class="container-fluid g-pos-rel g-pa-30">
        <div class="row justify-content-end align-items-center">
            <div class="col-sm-6 g-mb-30 g-mb-0--sm">
                <!-- Carousel - Info -->
                <div id="carouselCus1" class="js-carousel g-bg-secondary g-pos-rel" data-infinite="true"
                    data-nav-for="#carouselCus2" data-in-effect="slideInUp" data-out-effect="slideInDown"
                    data-pagi-classes="u-carousel-indicators-v35--main g-absolute-centered--x g-bottom-20">
                    <div class="js-slide d-flex g-min-height-70vh g-flex-centered g-pa-70">
                        <div class="text-center">
                            <div class="mb-5">
                                <h2 class="h1 mb-3">{{ __('education.future_slide_1_title') }}</h2>
                                <p>{{ __('education.future_slide_1_desc') }}</p>
                            </div>
                            <a class="btn g-brd-2 g-brd-main-opacity-0_1 g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-8"
                                href="#">{{ __('education.learn_more') }}</a>
                        </div>
                    </div>

                    <div class="js-slide d-flex g-min-height-70vh g-flex-centered g-pa-70">
                        <div class="text-center">
                            <div class="mb-5">
                                <h2 class="h1 mb-3">{{ __('education.future_slide_2_title') }}</h2>
                                <p>{{ __('education.future_slide_2_desc') }}</p>
                            </div>
                            <a class="btn g-brd-2 g-brd-main-opacity-0_1 g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-8"
                                href="#">{{ __('education.learn_more') }}</a>
                        </div>
                    </div>

                    <div class="js-slide d-flex g-min-height-70vh g-flex-centered g-pa-70">
                        <div class="text-center">
                            <div class="mb-5">
                                <h2 class="h1 mb-3">{{ __('education.future_slide_3_title') }}</h2>
                                <p>{{ __('education.future_slide_3_desc') }}</p>
                            </div>
                            <a class="btn g-brd-2 g-brd-main-opacity-0_1 g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-8"
                                href="#">{{ __('education.learn_more') }}</a>
                        </div>
                    </div>
                </div>
                <!-- End Carousel - Info -->
            </div>

            <div class="col-sm-6">
                <!-- Carousel - Image -->
                <div id="carouselCus2" class="js-carousel g-pos-rel" data-infinite="true" data-nav-for="#carouselCus1"
                    data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-40 g-height-40 g-color-white g-color-primary--hover g-font-size-40"
                    data-arrow-left-classes="fa fa-angle-left g-left-40"
                    data-arrow-right-classes="fa fa-angle-right g-right-40">
                    <div class="js-slide g-min-height-70vh g-bg-size-cover g-bg-pos-top-center"
                        data-bg-img-src="assets/img-temp/900x700/img3.jpg"></div>
                    <div class="js-slide g-min-height-70vh g-bg-size-cover g-bg-pos-top-center"
                        data-bg-img-src="assets/img-temp/900x700/img4.jpg"></div>
                    <div class="js-slide g-min-height-70vh g-bg-size-cover g-bg-pos-top-center"
                        data-bg-img-src="assets/img-temp/900x700/img5.jpg"></div>
                </div>
                <!-- End Carousel - Image -->
            </div>
        </div>
    </div>
    <!-- End Hero Content -->

    <!-- Video Blocks -->
    <div class="container text-center g-py-70">
        <h3 class="h3 g-mb-40">{{ __('education.future_boost_career_title') }}</h3>

        <!-- Video Blocks -->
        <div class="row g-mb-30">
            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Fancybox Video -->
                <div
                    class="u-shadow-v36 g-brd-around g-brd-4 g-brd-white g-brd-primary--hover rounded g-pos-rel g-transition-0_2">
                    <img class="img-fluid" src="assets/img-temp/600x350/img10.jpg" alt="Image Description">
                    <a class="js-fancybox g-absolute-centered" href="javascript:;"
                        data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                        <span
                            class="u-icon-v3 u-icon-size--lg g-color-white g-color-primary--hover g-bg-transparent g-font-size-30 g-rounded-50x g-cursor-pointer">
                            <i class="g-pos-rel g-left-2 fa fa-play"></i>
                        </span>
                    </a>
                </div>
                <!-- End Fancybox Video -->
            </div>
            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Fancybox Video -->
                <div
                    class="u-shadow-v36 g-brd-around g-brd-4 g-brd-white g-brd-primary--hover rounded g-pos-rel g-transition-0_2">
                    <img class="img-fluid" src="assets/img-temp/600x350/img11.jpg" alt="Image Description">
                    <a class="js-fancybox g-absolute-centered" href="javascript:;"
                        data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                        <span
                            class="u-icon-v3 u-icon-size--lg g-color-white g-color-primary--hover g-bg-transparent g-font-size-30 g-rounded-50x g-cursor-pointer">
                            <i class="g-pos-rel g-left-2 fa fa-play"></i>
                        </span>
                    </a>
                </div>
                <!-- End Fancybox Video -->
            </div>
            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Fancybox Video -->
                <div
                    class="u-shadow-v36 g-brd-around g-brd-4 g-brd-white g-brd-primary--hover rounded g-pos-rel g-transition-0_2">
                    <img class="img-fluid" src="assets/img-temp/600x350/img9.jpg" alt="Image Description">
                    <a class="js-fancybox g-absolute-centered" href="javascript:;"
                        data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                        <span
                            class="u-icon-v3 u-icon-size--lg g-color-white g-color-primary--hover g-bg-transparent g-font-size-30 g-rounded-50x g-cursor-pointer">
                            <i class="g-pos-rel g-left-2 fa fa-play"></i>
                        </span>
                    </a>
                </div>
                <!-- End Fancybox Video -->
            </div>
            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Fancybox Video -->
                <div
                    class="u-shadow-v36 g-brd-around g-brd-4 g-brd-white g-brd-primary--hover rounded g-pos-rel g-transition-0_2">
                    <img class="img-fluid" src="assets/img-temp/600x350/img8.jpg" alt="Image Description">
                    <a class="js-fancybox g-absolute-centered" href="javascript:;"
                        data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                        <span
                            class="u-icon-v3 u-icon-size--lg g-color-white g-color-primary--hover g-bg-transparent g-font-size-30 g-rounded-50x g-cursor-pointer">
                            <i class="g-pos-rel g-left-2 fa fa-play"></i>
                        </span>
                    </a>
                </div>
                <!-- End Fancybox Video -->
            </div>
        </div>
        <!-- End Video Blocks -->

        <!-- Info -->
        <div class="row">
            <div class="col-md-4 g-py-15 g-mb-30">
                <div class="g-px-30--lg">
                    <h3 class="h5">{{ __('education.campus_info_block_1_title') }}</h3>
                    <p class="g-color-text-light-v1 mb-0">{{ __('education.campus_info_block_1_desc') }}</p>
                </div>
            </div>
            <div class="col-md-4 g-brd-x g-brd-secondary-light-v2 g-py-15 g-mb-30">
                <div class="g-px-30--lg">
                    <h3 class="h5">{{ __('education.campus_info_block_2_title') }}</h3>
                    <p class="g-color-text-light-v1 mb-0">{{ __('education.campus_info_block_2_desc') }}</p>
                </div>
            </div>
            <div class="col-md-4 g-py-15 g-mb-30">
                <div class="g-px-30--lg">
                    <h3 class="h5">{{ __('education.campus_info_block_3_title') }}</h3>
                    <p class="g-color-text-light-v1 mb-0">{{ __('education.campus_info_block_3_desc') }}</p>
                </div>
            </div>
        </div>
        <!-- End Info -->
    </div>
    <!-- End Video Blocks -->

    <!-- Call to Action -->
    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <div class="container g-pt-60 g-pb-30">
            <div class="row justify-content-lg-center align-items-md-center">
                <div class="col-md-9 col-lg-7 g-mb-30">
                    <!-- Media -->
                    <div class="media align-items-center g-pr-15--lg">
                        <div class="d-flex mr-5">
                            <span
                                class="u-icon-v3 u-icon-size--lg g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                <i class="material-icons">toys</i>
                            </span>
                        </div>

                        <div class="media-body">
                            <h3 class="h2">{{ __('education.future_virtual_tour_title') }}</h3>
                            <p>{{ __('education.future_virtual_tour_desc') }}</p>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>

                <div class="col-5 col-md-3 col-lg-2 mx-auto g-mx-0--lg g-mb-30">
                    <button
                        class="btn btn-block u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-25 g-py-13"
                        type="button">{{ __('education.future_start_now') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action -->

    <!-- Testimonials -->
    <div class="container g-pos-rel g-pt-100">
        <div class="row justify-content-end align-items-center">
            <div class="col-sm-6 order-sm-2 g-mb-30">
                <!-- Testimonials - Carousel -->
                <div id="carouselCus3" class="js-carousel" data-infinite="true" data-autoplay="true" data-speed="10000"
                    data-nav-for="#carouselCus4" data-in-effect="slideInRight" data-out-effect="slideInRight">
                    <div class="js-slide g-pl-50--lg">
                        <!-- Testimonials - Content -->
                        <div class="media mb-3">
                            <div class="d-flex mr-3">
                                <span
                                    class="g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                            </div>
                            <div class="media-body">
                                <blockquote class="g-brd-left-none g-font-style-italic g-font-size-20 g-pl-0">
                                    {{ __('education.future_testimonial_1_quote') }}
                                    <span
                                        class="align-self-end g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                                </blockquote>
                            </div>
                        </div>

                        <div class="g-pl-30">
                            <h3 class="h4 mb-0">Karolina Wellyan</h3>
                            <span class="d-block g-font-size-18 g-pl-20">&#8212; {{ __('education.future_bachelor_student') }}</span>
                        </div>
                        <!-- End Testimonials - Content -->
                    </div>

                    <div class="js-slide g-pl-50--lg">
                        <!-- Testimonials - Content -->
                        <div class="media mb-3">
                            <div class="d-flex mr-3">
                                <span
                                    class="g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                            </div>
                            <div class="media-body">
                                <blockquote class="g-brd-left-none g-font-style-italic g-font-size-20 g-pl-0">
                                    {{ __('education.future_testimonial_2_quote') }}
                                    <span
                                        class="align-self-end g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                                </blockquote>
                            </div>
                        </div>

                        <div class="g-pl-30">
                            <h3 class="h4 mb-0">Alex Watson</h3>
                            <span class="d-block g-font-size-18 g-pl-20">&#8212; {{ __('education.future_grad_2015') }}</span>
                        </div>
                        <!-- End Testimonials - Content -->
                    </div>

                    <div class="js-slide g-pl-50--lg">
                        <!-- Testimonials - Content -->
                        <div class="media mb-3">
                            <div class="d-flex mr-3">
                                <span
                                    class="g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                            </div>
                            <div class="media-body">
                                <blockquote class="g-brd-left-none g-font-style-italic g-font-size-20 g-pl-0">
                                    {{ __('education.future_testimonial_3_quote') }}
                                    <span
                                        class="align-self-end g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                                </blockquote>
                            </div>
                        </div>

                        <div class="g-pl-30">
                            <h3 class="h4 mb-0">Maria Olsson</h3>
                            <span class="d-block g-font-size-18 g-pl-20">&#8212; {{ __('education.future_grad_2017') }}</span>
                        </div>
                        <!-- End Testimonials - Content -->
                    </div>
                </div>
                <!-- End Testimonials - Carousel -->
            </div>

            <div class="col-sm-6 order-sm-1 g-pos-stc g-mb-30">
                <!-- Carousel - Image -->
                <div id="carouselCus4" class="js-carousel g-pos-stc" data-infinite="true" data-nav-for="#carouselCus3"
                    data-arrows-classes="u-icon-v3 u-icon-size--sm g-absolute-centered--y g-color-primary g-color-white--hover g-bg-primary-opacity-0_1 g-bg-primary--hover rounded-circle g-pa-11"
                    data-arrow-left-classes="fa fa-angle-left g-left-0"
                    data-arrow-right-classes="fa fa-angle-right g-right-0">
                    <div class="js-slide g-min-height-50vh g-bg-size-cover g-bg-pos-top-center"
                        data-bg-img-src="assets/img-temp/600x350/img12.jpg"></div>
                    <div class="js-slide g-min-height-50vh g-bg-size-cover g-bg-pos-top-center"
                        data-bg-img-src="assets/img-temp/600x350/img14.jpg"></div>
                    <div class="js-slide g-min-height-50vh g-bg-size-cover g-bg-pos-top-center"
                        data-bg-img-src="assets/img-temp/600x350/img15.jpg"></div>
                </div>
                <!-- End Carousel - Image -->
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Call to Action -->
    @include('education.content.call-to-action')
    <!-- End Call to Action -->
@endsection
@section('script')
    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/hs-bg-video/hs-bg-video.js"></script>
    <script src="assets/vendor/hs-bg-video/vendor/player.min.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/helpers/hs.bg-video.js"></script>
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

            // initialization of video on background
            $.HSCore.helpers.HSBgVideo.init('.js-bg-video');

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
