@extends('education.partials.web-master')
@section('title', __('education.meta_title_campus_life'))
@section('css')
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
@endsection
@section('content')
    <!-- Promo Block -->
    <div class="g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-cover g-bg-bluegray-opacity-0_2--after"
        style="background-image: url(assets/img-temp/1920x1080/img1.jpg);" data-calc-target="#js-header">
        <div class="container g-pos-rel g-z-index-1 g-py-100">
            <div class="u-shadow-v36 g-max-width-550 g-bg-main-light-v1 g-pa-50">
                <div class="g-mb-40">
                    <h1 class="g-color-white g-font-size-40--md mb-3">{{ __('education.campus_hero_title') }}</h1>
                    <p class="g-color-white-opacity-0_8 g-font-size-18--md">{{ __('education.campus_hero_desc') }}</p>
                </div>
                <a class="btn u-shadow-v32 g-brd-2 g-brd-white-opacity-0_6 g-color-white-opacity-0_8 g-color-primary--hover g-bg-white--hover g-rounded-30 g-px-35 g-py-10"
                    href="#">{{ __('education.campus_hero_button') }}</a>
            </div>
        </div>
    </div>
    <!-- End Promo Block -->

    <!-- Section Links -->
    <div class="g-brd-bottom g-brd-secondary-light-v2">
        <div class="container">
            <div class="g-max-width-700 text-center mx-auto">
                <!-- Section Links (Large Devices) -->
                <ul class="row list-inline g-hidden-xs-down mb-0">
                    <li class="col-3 list-inline-item mr-0">
                        <a class="js-go-to active u-link-v5 g-color-main g-color-primary--hover g-color-primary--active g-font-size-default text-uppercase g-py-40"
                            href="#" data-target="#overview">{{ __('education.campus_section_overview') }}</a>
                    </li>
                    <li class="col-3 list-inline-item text-center mr-0">
                        <a class="js-go-to u-link-v5 g-color-main g-color-primary--hover g-color-primary--active g-font-size-default text-uppercase g-py-40"
                            href="#" data-target="#recognition">{{ __('education.campus_section_recognition') }}</a>
                    </li>
                    <li class="col-3 list-inline-item text-center mr-0">
                        <a class="js-go-to u-link-v5 g-color-main g-color-primary--hover g-color-primary--active g-font-size-default text-uppercase g-py-40"
                            href="#" data-target="#student-life">{{ __('education.campus_section_student_life') }}</a>
                    </li>
                    <li class="col-3 list-inline-item text-center mr-0">
                        <a class="js-go-to u-link-v5 g-color-main g-color-primary--hover g-color-primary--active g-font-size-default text-uppercase g-py-40"
                            href="#" data-target="#campus-info">{{ __('education.campus_section_campus_info') }}</a>
                    </li>
                </ul>
                <!-- End Section Links (Large Devices) -->

                <!-- End Section Links (Small Devices) -->
                <div class="btn-group g-hidden-sm-up g-py-40" role="group">
                    <button id="btnGroupDrop1" type="button"
                        class="btn g-brd-secondary-light-v2 g-bg-white dropdown-toggle g-px-25 g-py-8"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('education.campus_go_to_section') }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="js-go-to dropdown-item g-color-main g-color-primary--hover g-bg-transparent g-font-size-13 text-uppercase g-py-8"
                            href="#" data-target="#overview">{{ __('education.campus_section_overview') }}</a>
                        <a class="js-go-to dropdown-item g-color-main g-color-primary--hover g-bg-transparent g-font-size-13 text-uppercase g-py-8"
                            href="#" data-target="#recognition">{{ __('education.campus_section_recognition') }}</a>
                        <a class="js-go-to dropdown-item g-color-main g-color-primary--hover g-bg-transparent g-font-size-13 text-uppercase g-py-8"
                            href="#" data-target="#student-life">{{ __('education.campus_section_student_life') }}</a>
                        <a class="js-go-to dropdown-item g-color-main g-color-primary--hover g-bg-transparent g-font-size-13 text-uppercase g-py-8"
                            href="#" data-target="#campus-info">{{ __('education.campus_section_campus_info') }}</a>
                    </div>
                </div>
                <!-- End Section Links (Small Devices) -->
            </div>
        </div>
    </div>
    <!-- End Section Links -->

    <!-- Overview -->
    <div id="overview" class="container g-pt-100 g-pb-70">
        <div class="g-max-width-700 text-center mx-auto">
            <!-- Heading -->
            <div class="g-mb-70">
                <h2 class="h1 mb-3">{{ __('education.campus_overview_title') }}</h2>
                <p>{{ __('education.campus_overview_desc') }}</p>
            </div>
            <!-- End Heading -->

            <!-- Youtube Iframe -->
            <div
                class="embed-responsive embed-responsive-16by9 u-shadow-v36 g-brd-around g-brd-10 g-brd-white g-rounded-5 g-mb-80">
                <iframe src="https://www.youtube.com/embed/FxiskmF16gU?rel=0&amp;showinfo=0" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <!-- End Youtube Iframe -->
        </div>

        <!-- Facts & Figures -->
        <div class="row">
            <div class="col-md-4 g-mb-30">
                <span class="d-block g-font-weight-300 g-font-size-60 mb-3">1978</span>
                <p>{{ __('education.campus_fact_1_desc') }}</p>
            </div>
            <div class="col-md-4 g-mb-30">
                <span class="d-block g-font-weight-300 g-font-size-60 mb-3">10,000+</span>
                <p>{{ __('education.campus_fact_2_desc') }}</p>
            </div>
            <div class="col-md-4 g-mb-30">
                <span class="d-block g-font-weight-300 g-font-size-60 mb-3">{{ __('education.campus_millions') }}</span>
                <p>{{ __('education.campus_fact_3_desc') }}</p>
            </div>
        </div>
        <!-- End Facts & Figures -->
    </div>
    <!-- End Overview -->

    <!-- Image -->
    <div class="clearfix">
        <img class="img-fluid" src="assets/img-temp/1920x1080/img2.jpg" alt="Image Description">
    </div>
    <!-- End Image -->

    <!-- Recognition -->
    <div id="recognition" class="container g-pt-100 g-pb-70">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-mb-60">
            <h2 class="h1 mb-3">{{ __('education.campus_section_recognition') }}</h2>
            <p>{{ __('education.campus_recognition_desc') }}</p>
        </div>
        <!-- End Heading -->

        <div class="row g-mb-60">
            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article
                    class="u-block-hover g-min-height-250 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                    style="background-image: url(assets/img-temp/600x400/img1.jpg);">
                    <div class="u-block-hover__additional--partially-slide-up g-pos-abs g-bottom-0 g-left-0 g-z-index-1">
                        <div class="u-block-hover__visible g-pa-20">
                            <h3 class="h4 g-color-white mb-0">{{ __('education.campus_recognition_article_1') }}</h3>
                        </div>
                        <div class="g-pa-5"></div>
                    </div>
                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Research Articles -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article>
                    <div class="g-pos-rel">
                        <img class="img-fluid mb-3" src="assets/img-temp/600x350/img23.jpg" alt="Image Description">
                        <a class="js-fancybox g-absolute-centered" href="https://www.youtube.com/watch?v=FxiskmF16gU"
                            title="{{ __('education.campus_video') }}">
                            <span
                                class="u-icon-v3 u-block-hover--scale g-color-main g-color-white--hover g-bg-white-opacity-0_5 g-bg-white-opacity-0_3--hover g-font-size-22 rounded-circle">
                                <i class="g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                    </div>
                    <span
                        class="d-block g-color-secondary-light-v1 g-font-weight-500 g-font-size-12 text-uppercase mb-2">{{ __('education.campus_video') }}</span>
                    <h4 class="h5"><a class="js-fancybox h5 u-link-v5"
                            href="https://www.youtube.com/watch?v=FxiskmF16gU">{{ __('education.campus_recognition_article_2') }}</a></h4>
                </article>
                <!-- End Research Articles -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article>
                    <div class="g-pos-rel">
                        <img class="img-fluid mb-3" src="assets/img-temp/600x350/img11.jpg" alt="Image Description">
                        <a class="js-fancybox g-absolute-centered" href="https://www.youtube.com/watch?v=FxiskmF16gU"
                            title="{{ __('education.campus_video') }}">
                            <span
                                class="u-icon-v3 u-block-hover--scale g-color-main g-color-white--hover g-bg-white-opacity-0_5 g-bg-white-opacity-0_3--hover g-font-size-22 rounded-circle">
                                <i class="g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                    </div>
                    <span
                        class="d-block g-color-secondary-light-v1 g-font-weight-500 g-font-size-12 text-uppercase mb-2">{{ __('education.campus_video') }}</span>
                    <h4 class="h5"><a class="js-fancybox h5 u-link-v5"
                            href="https://www.youtube.com/watch?v=FxiskmF16gU">{{ __('education.campus_recognition_article_3') }}</a></h4>
                </article>
                <!-- End Research Articles -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article
                    class="u-block-hover g-min-height-250 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                    style="background-image: url(assets/img-temp/600x400/img3.jpg);">
                    <div class="u-block-hover__additional--partially-slide-up g-pos-abs g-bottom-0 g-left-0 g-z-index-1">
                        <div class="u-block-hover__visible g-pa-20">
                            <h3 class="h4 g-color-white mb-0">{{ __('education.campus_recognition_article_4') }}</h3>
                        </div>
                        <div class="g-pa-5"></div>
                    </div>
                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Research Articles -->
            </div>
        </div>

        <hr class="g-brd-secondary-light-v2 mt-0 g-mb-60">

        <!-- Info -->
        <div class="row text-center">
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
    <!-- End Recognition -->

    <!-- Image -->
    <div class="clearfix">
        <img class="img-fluid" src="assets/img-temp/1920x1080/img3.jpg" alt="Image Description">
    </div>
    <!-- End Image -->

    <!-- Student Life -->
    <div id="student-life" class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg3.svg);">
        <div class="container g-pt-100 g-pb-70">
            <div class="row justify-content-lg-center g-pb-80">
                <div class="col-lg-1 g-mb-20 g-mb-0--lg">
                    <span class="u-icon-v1 u-icon-size--xl g-color-main g-bg-secondary rounded-circle">
                        <i class="g-font-size-45 material-icons">supervisor_account</i>
                    </span>
                </div>

                <div class="col-lg-9">
                    <div class="g-pl-15--lg">
                        <h3>{{ __('education.campus_section_student_life') }}</h3>
                        <p>{{ __('education.campus_student_life_desc') }} <a
                                class="u-link-v5 g-color-primary g-color-main--hover g-font-weight-500"
                                href="#">{{ __('education.learn_more') }} <i
                                    class="g-font-size-13 g-pos-rel g-top-2 material-icons">arrow_forward</i></a>
                        </p>

                        <div class="row">
                            <!-- Student Life List -->
                            <ul class="col-md-4 list-unstyled mb-0">
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_1') }}</a>
                                </li>
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_2') }}</a>
                                </li>
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_3') }}</a>
                                </li>
                            </ul>
                            <!-- End Student Life List -->

                            <!-- Student Life List -->
                            <ul class="col-md-4 list-unstyled mb-0">
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_4') }}</a>
                                </li>
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_5') }}</a>
                                </li>
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_6') }}</a>
                                </li>
                            </ul>
                            <!-- End Student Life List -->

                            <!-- Student Life List -->
                            <ul class="col-md-4 list-unstyled mb-0">
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_7') }}</a>
                                </li>
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_8') }}</a>
                                </li>
                                <li class="py-1"><a class="u-link-v5 g-color-text g-color-primary--hover"
                                        href="#">
                                        <i class="g-color-primary g-font-size-13 mr-2 material-icons">arrow_forward</i>
                                        {{ __('education.campus_student_resource_9') }}</a>
                                </li>
                            </ul>
                            <!-- End Student Life List -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Icon Blocks -->
            <div class="row">
                <div class="col-lg-6 g-mb-30">
                    <!-- Media -->
                    <div class="media u-block-hover u-shadow-v34 g-bg-white rounded g-overflow-hidden g-px-40 g-py-50">
                        <div class="d-flex g-mr-30">
                            <span
                                class="u-icon-v1 u-icon-size--xl g-color-main g-color-primary--hover g-bg-secondary rounded-circle">
                                <i class="g-font-size-45 material-icons">business</i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h4 g-color-main g-color-primary--hover g-font-primary">{{ __('education.campus_media_1_title') }} <i class="g-font-size-16 mr-2 material-icons">arrow_forward</i></h3>
                            <p class="mb-0">{{ __('education.campus_media_1_desc') }}</p>
                        </div>
                        <a class="u-link-v2 g-z-index-2" href="#"></a>
                    </div>
                    <!-- End Media -->
                </div>

                <div class="col-lg-6 g-mb-30">
                    <!-- Media -->
                    <div class="media u-block-hover u-shadow-v34 g-bg-white rounded g-overflow-hidden g-px-40 g-py-50">
                        <div class="d-flex g-mr-30">
                            <span
                                class="u-icon-v1 u-icon-size--xl g-color-main g-color-primary--hover g-bg-secondary rounded-circle">
                                <i class="g-font-size-45 material-icons">beach_access</i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h4 g-color-main g-color-primary--hover g-font-primary">{{ __('education.campus_media_2_title') }} <i
                                    class="g-font-size-16 mr-2 material-icons">arrow_forward</i></h3>
                            <p class="mb-0">{{ __('education.campus_media_2_desc') }}</p>
                        </div>
                        <a class="u-link-v2 g-z-index-2" href="#"></a>
                    </div>
                    <!-- End Media -->
                </div>
            </div>
            <!-- End Icon Blocks -->
        </div>
    </div>
    <!-- End Student Life -->

    <!-- Campus Info -->
    <div id="campus-info" class="container g-pt-100">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-2 g-mb-50">
                <!-- Icon Block -->
                <a class="d-block u-block-hover u-shadow-v39 g-brd-around g-brd-teal g-bg-teal--hover text-center rounded g-text-underline--none--hover g-transition-0_2 g-px-30 g-py-80"
                    href="#">
                    <span class="u-icon-v1 u-icon-size--lg g-color-teal g-color-white--hover g-transition-0_2">
                        <i class="icon-real-estate-027 u-line-icon-pro"></i>
                    </span>
                    <span class="h5 d-block g-color-teal g-color-white--hover g-transition-0_2">{!! __('education.campus_card_1') !!}</span>
                </a>
                <!-- End Icon Block -->
            </div>

            <div class="col-sm-4 col-lg-2 g-mb-50">
                <!-- Icon Block -->
                <a class="d-block u-block-hover u-shadow-v39 g-brd-around g-brd-blue g-bg-blue--hover text-center rounded g-text-underline--none--hover g-transition-0_2 g-px-30 g-py-80"
                    href="#">
                    <span class="u-icon-v1 u-icon-size--lg g-color-blue g-color-white--hover g-transition-0_2">
                        <i class="icon-real-estate-066 u-line-icon-pro"></i>
                    </span>
                    <span class="h5 d-block g-color-blue g-color-white--hover g-transition-0_2">{{ __('education.campus_card_2') }}</span>
                </a>
                <!-- End Icon Block -->
            </div>

            <div class="col-sm-4 col-lg-2 g-mb-50">
                <!-- Icon Block -->
                <a class="d-block u-block-hover u-shadow-v39 g-brd-around g-brd-purple g-bg-purple--hover text-center rounded g-text-underline--none--hover g-transition-0_2 g-px-30 g-py-80"
                    href="#">
                    <span class="u-icon-v1 u-icon-size--lg g-color-purple g-color-white--hover g-transition-0_2">
                        <i class="icon-real-estate-015 u-line-icon-pro"></i>
                    </span>
                    <span class="h5 d-block g-color-purple g-color-white--hover g-transition-0_2">{{ __('education.campus_card_3') }}</span>
                </a>
                <!-- End Icon Block -->
            </div>

            <div class="col-lg-6 g-mb-50">
                <div class="g-pl-50--lg">
                    <div class="mb-5">
                        <h2 class="mb-3">{{ __('education.campus_section_campus_info') }}</h2>
                        <p>{{ __('education.campus_info_desc') }}</p>
                    </div>
                    <a class="btn u-shadow-v39 g-brd-main g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-11"
                        href="#">{{ __('education.view_all') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Campus Info -->

    <!-- Call to Action -->
    @include('education.content.call-to-action')
    <!-- End Call to Action -->
@endsection
@section('script')
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/helpers/hs.height-calc.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
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

            // initialization of header's height equal offset
            $.HSCore.helpers.HSHeightCalc.init();

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
