@extends('education.partials.web-master')
@section('title', __('education.meta_title_alumni'))
@section('css')
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="assets/vendor/hs-bg-video/hs-bg-video.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
@endsection
@section('content')
    <!-- Promo Block -->
    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <div class="container g-py-100 g-py-150--lg">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 g-mb-70 g-mb-150--sm g-mb-50--lg">
                    <div class="g-pr-15--lg">
                        <!-- Promo Block Info -->
                        <div class="mb-5">
                            <h1 class="g-font-size-45 mb-3">{{ __('education.alumni_represent_graduates') }}</h1>
                            <p>{{ __('education.alumni_represent_graduates_desc') }}</p>
                        </div>
                        <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-25 g-py-13 mr-2"
                            href="#">{{ __('education.alumni_make_a_nomination') }}</a>
                        <a class="js-go-to btn u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-rounded-30 g-px-25 g-py-13 ml-2"
                            href="#" data-target="#content">{{ __('education.alumni_explore_more') }}</a>
                        <!-- End Promo Block Info -->
                    </div>
                </div>

                <div class="col-lg-6 g-mb-50">
                    <div class="g-max-width-550 g-pos-rel g-pl-15--lg mx-auto">
                        <!-- Promo Block Images -->
                        <div class="u-shadow-v36 g-max-width-300--sm g-pos-rel g-z-index-2 g-mb-20 g-mb-0--sm">
                            <img class="img-fluid g-brd-around g-brd-4 g-brd-white rounded"
                                src="assets/img-temp/600x350/img1.jpg" alt="Image Description">
                        </div>

                        <div
                            class="u-shadow-v36 g-max-width-300--sm g-pos-abs--sm g-top-minus-70 g-left-130 g-z-index-1 g-mb-20 g-mb-0--sm">
                            <img class="img-fluid g-brd-around g-brd-4 g-brd-white rounded"
                                src="assets/img-temp/600x350/img2.jpg" alt="Image Description">
                        </div>

                        <div class="u-shadow-v36 g-max-width-300--sm g-pos-abs--sm g-top-65 g-right-0">
                            <img class="img-fluid g-brd-around g-brd-4 g-brd-white rounded"
                                src="assets/img-temp/600x350/img3.jpg" alt="Image Description">
                        </div>
                        <!-- End Promo Block Images -->

                        <!-- SVG Square #1 -->
                        <svg class="g-hidden-xs-down g-width-25 g-height-45 g-pos-abs g-bottom-minus-40 g-left-0 g-z-index-2"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 45.9 52.9" enable-background="new 0 0 45.9 52.9"
                            xml:space="preserve">
                            <polygon fill="#7cd1d8" stroke="#FFFFFF" stroke-width="0.4" stroke-miterlimit="10"
                                points="45.8,39.5 23.1,52.8 0.2,39.7
                    0.1,13.4 22.9,0.1 45.7,13.2 " />
                            <polyline fill="#7cd1d8" stroke="#FFFFFF" stroke-width="0.4" stroke-miterlimit="10"
                                points="0.1,13.5 23.1,26.4 23.1,52.8 " />
                            <line fill="#7cd1d8" stroke="#FFFFFF" stroke-width="0.4" stroke-miterlimit="10" x1="45.5"
                                y1="13.2" x2="23" y2="26.5" />
                        </svg>
                        <!-- End SVG Square #1 -->

                        <!-- SVG Square #3 -->
                        <svg class="g-hidden-xs-down g-width-60 g-height-80 g-pos-abs g-top-minus-40 g-right-0 g-z-index-2"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 52.8 47.5" enable-background="new 0 0 52.8 47.5"
                            xml:space="preserve">
                            <polygon fill="#FFFFFF" stroke="#7cd1d8" stroke-width="0.25" stroke-miterlimit="10"
                                points="14.8,47.3 0.1,25.5 11.8,1.9 38,0.1
                    52.7,22 41,45.6 " />
                            <polyline fill="#FFFFFF" stroke="#7cd1d8" stroke-width="0.25" stroke-miterlimit="10"
                                points="37.9,0.1 26.5,23.8 0.2,25.5 " />
                            <line fill="#FFFFFF" stroke="#7cd1d8" stroke-width="0.25" stroke-miterlimit="10" x1="41"
                                y1="45.4" x2="26.4" y2="23.7" />
                        </svg>
                        <!-- End SVG Square #3 -->

                        <!-- SVG Square #4 -->
                        <svg class="g-hidden-xs-down g-width-50 g-height-20 g-pos-abs g-top-minus-120 g-right-100"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 73.5 20" enable-background="new 0 0 73.5 20"
                            xml:space="preserve">
                            <g>
                                <path fill="none" stroke="#9a69cb" stroke-width="3" stroke-miterlimit="10" d="M0,1c9.2,0,9.2,18,18.4,18c9.2,0,9.2-18,18.4-18
                                      c9.2,0,9.2,18,18.4,18S64.3,1,73.5,1" />
                            </g>
                        </svg>
                        <!-- End SVG Square #4 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Promo Block -->

    <!-- Benefits & Awards -->
    <div id="content" class="g-pos-rel g-pb-100 g-pb-0--md">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-7 align-self-md-center g-py-100--md g-mb-50 g-mb-0--md">
                    <div class="g-pl-15--md">
                        <div class="mb-5">
                            <div class="mb-4">
                                <span class="u-icon-v3 u-icon-size--lg g-color-main g-bg-secondary rounded-circle mb-4">
                                    <i class="material-icons">verified_user</i>
                                </span>
                                <h2 class="mb-3">{{ __('education.alumni_benefits_awards_title') }}</h2>
                                <p>{{ __('education.alumni_benefits_awards_desc_1') }}</p>
                            </div>
                            <p>{{ __('education.alumni_benefits_awards_desc_2') }}</p>
                        </div>
                        <a class="btn u-shadow-v39 g-brd-main g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-11"
                            href="#">{{ __('education.read_more') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 h-100 g-min-height-300 g-bg-size-cover g-bg-pos-center g-pos-abs--md g-top-0 g-left-0"
                data-bg-img-src="assets/img-temp/900x700/img1.jpg"></div>
        </div>
    </div>
    <!-- End Benefits & Awards -->

    <!-- Video Block -->
    <section class="clearfix">
        <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall g-bg-cover g-bg-black-opacity-0_2--after"
            data-options="{direction: 'fromtop', animation_duration: 25, direction: 'reverse'}">
            <!-- Parallax Background Video -->
            <div class="dzsparallaxer--target" style="width: 100%; height: 200%;" data-forcewidth_ratio="1.77">
                <div class="js-bg-video g-pos-abs w-100 h-100" data-hs-bgv-type="youtube" data-hs-bgv-id="FxiskmF16gU"
                    data-hs-bgv-loop="1"></div>
            </div>
            <!-- End Parallax Background Video -->

            <!-- Fancybox Video -->
            <div class="text-center g-pos-rel g-z-index-1 g-px-50 g-py-170">
                <a class="js-fancybox d-block" href="javascript:;"
                    data-src="//www.youtube.com/watch?v=FxiskmF16gU?autoplay=1" data-speed="350"
                    data-caption="{{ __('education.alumni_play_caption') }}">
                    <span
                        class="u-icon-v3 u-icon-size--lg g-color-main g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-20 g-rounded-50x g-cursor-pointer">
                        <i class="g-pos-rel g-left-2 hs-icon hs-icon-play"></i>
                    </span>
                </a>
            </div>
            <!-- End Fancybox Video -->
        </div>
    </section>
    <!-- End Video Block -->

    <!-- Alumni Articles -->
    <div class="g-pos-rel">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-md-4 col-lg-3 g-pt-100">
                    <h3 class="mb-4">{{ __('education.related_links') }}</h3>

                    <!-- Links List -->
                    <ul class="list-unstyled mb-5">
                        <li class="py-1">
                            <a class="d-block active u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8"
                                href="#">
                                <i class="align-middle mr-3 icon-hotel-restaurant-088 u-line-icon-pro"></i>
                                {{ __('education.alumni') }}
                            </a>
                        </li>
                        <li class="py-1">
                            <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8"
                                href="#">
                                <i class="align-middle mr-3 icon-finance-258 u-line-icon-pro"></i>
                                {{ __('education.alumni_benefits_awards_menu') }}
                            </a>
                        </li>
                        <li class="py-1">
                            <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8"
                                href="#">
                                <i class="align-middle mr-3 icon-finance-075 u-line-icon-pro"></i>
                                {{ __('education.alumni_volunteer') }}
                            </a>
                        </li>
                        <li class="py-1">
                            <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8"
                                href="#">
                                <i class="align-middle mr-3 icon-education-143 u-line-icon-pro"></i>
                                {{ __('education.alumni_connect') }}
                            </a>
                        </li>
                        <li class="py-1">
                            <a class="d-block u-link-v5 u-shadow-v35--active g-color-text-light-v1 g-color-main--hover g-color-primary--active g-bg-white--hover g-bg-white--active g-font-size-15 g-rounded-20 g-px-20 g-py-8"
                                href="#">
                                <i class="align-middle mr-3 icon-finance-138 u-line-icon-pro"></i>
                                {{ __('education.alumni_give_now') }}
                            </a>
                        </li>
                    </ul>
                    <!-- End Links List -->

                    <!-- Twitter Feed -->
                    <h3 class="mb-4">{{ __('education.twitter_feeds') }}</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="g-brd-bottom g-brd-secondary-light-v2 g-pb-20">
                            <h4 class="h6">{{ __('education.alumni_twitter_rt') }} <a class="g-font-weight-500" href="#">@UofA_Arts:</a>
                                {{ __('education.alumni_twitter_dont_miss') }}</h4>
                            <p class="g-color-text-light-v1 g-font-size-13 mb-0">{{ __('education.alumni_twitter_post_1_prefix') }}<a class="g-font-weight-500"
                                    href="#">#TRC</a>{{ __('education.alumni_twitter_post_1_suffix') }} <a class="g-font-weight-500"
                                    href="#">twitter.com/i/web/status/9…</a></p>
                        </li>
                        <li class="g-pt-20">
                            <h4 class="h6">{{ __('education.alumni_twitter_rt') }} <a class="g-font-weight-500" href="#">@UofA_Arts:</a>
                                {{ __('education.alumni_twitter_dont_miss') }}</h4>
                            <p class="g-color-text-light-v1 g-font-size-13 mb-0">{{ __('education.alumni_twitter_post_2_prefix') }}<a class="g-font-weight-500"
                                    href="#">#TRC</a>{{ __('education.alumni_twitter_post_2_suffix') }}</p>
                        </li>
                    </ul>
                    <!-- End Twitter Feed -->
                </div>

                <div class="col-md-8 g-pt-50 g-pt-100--md g-pb-70">
                    <div class="row">
                        <!-- Alumni Article -->
                        <div class="col-sm-6 g-mb-30">
                            <article>
                                <img class="img-fluid mb-4" src="assets/img-temp/600x350/img4.jpg"
                                    alt="Image Description">
                                <h2 class="h5"><a href="#">{{ __('education.alumni_article_1_title') }}</a></h2>
                                <p class="g-font-size-16">{{ __('education.alumni_article_1_desc') }}</p>
                            </article>
                        </div>
                        <!-- End Alumni Article -->

                        <!-- Alumni Article -->
                        <div class="col-sm-6 g-mb-30">
                            <article>
                                <img class="img-fluid mb-4" src="assets/img-temp/600x350/img5.jpg"
                                    alt="Image Description">
                                <h2 class="h5"><a href="#">{{ __('education.alumni_article_2_title') }}</a></h2>
                                <p class="g-font-size-16">{{ __('education.alumni_article_2_desc') }}</p>
                            </article>
                        </div>
                        <!-- End Alumni Article -->

                        <!-- Alumni Article -->
                        <div class="col-sm-6 g-mb-30">
                            <article>
                                <img class="img-fluid mb-4" src="assets/img-temp/600x350/img6.jpg"
                                    alt="Image Description">
                                <h2 class="h5"><a href="#">{{ __('education.alumni_article_3_title') }}</a></h2>
                                <p class="g-font-size-16">{{ __('education.alumni_article_3_desc') }}</p>
                            </article>
                        </div>
                        <!-- End Alumni Article -->

                        <!-- Alumni Article -->
                        <div class="col-sm-6 g-mb-30">
                            <article>
                                <img class="img-fluid mb-4" src="assets/img-temp/600x350/img21.jpg"
                                    alt="Image Description">
                                <h2 class="h5"><a href="#">{{ __('education.alumni_article_4_title') }}</a></h2>
                                <p class="g-font-size-16">{{ __('education.alumni_article_4_desc') }}</p>
                            </article>
                        </div>
                        <!-- End Alumni Article -->
                    </div>
                </div>
            </div>

            <div
                class="col-12 col-md-5 col-lg-4 h-100 g-bg-secondary-gradient-v1 g-pos-abs g-top-0 g-left-0 g-z-index-minus-1">
            </div>
        </div>
    </div>
    <!-- End Alumni Articles -->

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
                            <h3 class="h2">{{ __('education.alumni_cta_title') }}</h3>
                            <p>{{ __('education.alumni_cta_desc') }}</p>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>

                <div class="col-5 col-md-3 col-lg-2 mx-auto g-mx-0--lg g-mb-30">
                    <a class="btn btn-block u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-25 g-py-13"
                        href="{{ route('education.contacts') }}">{{ __('education.contact_us') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action -->

    <!-- Secrets to Success -->
    <div class="g-pos-rel g-pb-100 g-pb-0--md">
        <div class="container">
            <div class="row">
                <div class="col-md-5 align-self-md-center g-py-100--md g-mb-50 g-mb-0--md">
                    <div class="g-pl-15--md">
                        <div class="mb-5">
                            <div class="mb-4">
                                <span class="u-icon-v3 u-icon-size--lg g-color-main g-bg-secondary rounded-circle mb-4">
                                    <i class="material-icons">done_all</i>
                                </span>
                                <h2 class="mb-3">{{ __('education.alumni_secrets_title') }}</h2>
                                <p>{{ __('education.alumni_secrets_desc_1') }}</p>
                            </div>
                            <p>{{ __('education.alumni_secrets_desc_2') }}</p>
                        </div>
                        <a class="btn u-shadow-v39 g-brd-main g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-11"
                            href="#">{{ __('education.read_more') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 h-100 g-min-height-300 g-bg-size-cover g-bg-pos-center g-pos-abs--md g-top-0 g-right-0"
                data-bg-img-src="assets/img-temp/900x700/img2.jpg"></div>
        </div>
    </div>
    <!-- End Secrets to Success -->

    <!-- Call to Action -->
    @include('education.content.call-to-action')
    <!-- End Call to Action -->
@endsection
@section('script')
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
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
