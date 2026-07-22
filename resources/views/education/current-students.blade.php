@extends('education.partials.web-master')
@section('title', __('education.meta_title_current_students'))
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
    <div class="g-bg-img-hero g-pos-rel" style="background-image: url(assets/img/bg/bg-img1.png);">
        <div class="container g-pt-100">
            <div class="row justify-content-lg-between">
                <div class="col-lg-4 g-pt-50--lg">
                    <div class="mb-5">
                        <h1 class="g-font-size-45 mb-4">{{ __('education.current_welcome_back') }}</h1>
                        <p>{{ __('education.current_hero_desc') }}</p>
                    </div>

                    <a class="js-go-to btn u-shadow-v33 g-hidden-md-down g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10"
                        href="#" data-target="#content">{{ __('education.current_explore_now') }}</a>
                </div>

                <div class="col-lg-8 align-self-end">
                    <div class="u-shadow-v40 g-brd-around g-brd-7 g-brd-secondary rounded">
                        <img class="img-fluid rounded" src="assets/img-temp/900x600/img1.jpg" alt="Image Description">
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Bottom Background Shape -->
        <svg class="g-pos-abs g-bottom-0" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1921 183.5"
            enable-background="new 0 0 1921 183.5" xml:space="preserve">
            <path fill="#FFFFFF" d="M0,183.5v-142c0,0,507,171,1171,58c0,0,497-93,750,84H0z" />
            <path opacity="0.2" fill="#FFFFFF" d="M0,183V0c0,0,507,220.4,1171,74.7c0,0,497-119.9,750,108.3H0z" />
        </svg>
        <!-- End SVG Bottom Background Shape -->
    </div>
    <!-- End Promo Block -->

    <!-- About Current Students -->
    <div id="content" class="container g-py-70">
        <div class="row">
            <div class="col-lg-9 order-lg-2">
                <div class="g-pl-15--lg">
                    <h2>{{ __('education.current_students') }}</h2>
                    <p>{{ __('education.current_intro_desc_1') }}</p>
                    <p>{{ __('education.current_intro_desc_2') }}</p>

                    <ul class="mb-4">
                        <li><a class="u-link-v5 g-color-main--hover" href="#">{{ __('education.current_question_1') }}</a></li>
                        <li><a class="u-link-v5 g-color-main--hover" href="#">{{ __('education.current_question_2') }}</a></li>
                    </ul>

                    <!-- Search -->
                    <form class="input-group u-shadow-v19 g-brd-primary--focus g-rounded-30">
                        <input class="form-control h-100 g-brd-secondary-light-v2 g-rounded-left-30 g-px-30 g-py-12"
                            type="text" placeholder="{{ __('education.current_search_placeholder') }}">
                        <button
                            class="btn input-group-addon d-flex align-items-center u-shadow-v33 g-brd-none g-color-white g-bg-primary g-bg-main--hover g-rounded-right-30 g-transition-0_2 g-px-30"
                            type="button">
                            {{ __('education.current_ask_unify') }}
                        </button>
                    </form>
                    <!-- End Search -->

                    <hr class="g-brd-secondary-light-v2 my-5">

                    <div class="row">
                        <div class="col-md-6 g-mb-30">
                            <h3 class="h4 mb-3">{{ __('education.current_show_all_system_logins') }}</h3>

                            <div class="g-overflow-hidden">
                                <a class="u-block-hover g-text-underline--none--hover" href="#">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/include/svg/svg-system-login1.svg" align="Image Description">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 g-mb-30">
                            <h3 class="h4 mb-3">{{ __('education.current_system_logins') }}</h3>

                            <!-- Links -->
                            <ul class="list-unstyled">
                                <li class="py-1">
                                    <a class="d-flex align-items-center u-link-v5 g-color-main--hover g-font-size-15"
                                        href="#">
                                        {{ __('education.current_login_email') }} <i class="g-font-size-13 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="d-flex align-items-center u-link-v5 g-color-main--hover g-font-size-15"
                                        href="#">
                                        {{ __('education.current_login_blackboard') }} <i class="g-font-size-13 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="d-flex align-items-center u-link-v5 g-color-main--hover g-font-size-15"
                                        href="#">
                                        {{ __('education.current_login_canvas') }} <i class="g-font-size-13 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="d-flex align-items-center u-link-v5 g-color-main--hover g-font-size-15"
                                        href="#">
                                        {{ __('education.current_login_myuni') }} <i class="g-font-size-13 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="d-flex align-items-center u-link-v5 g-color-main--hover g-font-size-15"
                                        href="#">
                                        {{ __('education.current_login_semester_2_exam_timetables') }} <i
                                            class="g-font-size-13 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a class="d-flex align-items-center u-link-v5 g-color-main--hover g-font-size-15"
                                        href="#">
                                        {{ __('education.current_login_graduation') }} <i class="g-font-size-13 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 order-lg-1">
                <!-- Sidebar Links -->
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_1') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_2') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_3') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_4') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_5') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_6') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_7') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_8') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_9') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_10') }}
                        </a>
                    </li>
                    <li class="mb-1">
                        <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                            href="#">
                            <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                            {{ __('education.programs_related_11') }}
                        </a>
                    </li>
                </ul>
                <!-- End Sidebar Links -->
            </div>
        </div>
    </div>
    <!-- End About Current Students -->

    <!-- More Links -->
    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <div class="container g-py-100">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-60">
                <h2 class="h1">{{ __('education.current_service_for_students') }}</h2>
            </div>
            <!-- End Heading -->

            <div class="card-group d-block d-md-flex g-mx-minus-4">
                <div class="card g-brd-none g-mx-4 g-mb-8">
                    <!-- Links -->
                    <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                        <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                            <i class="icon-finance-245 u-line-icon-pro"></i>
                        </span>
                        <h3 class="h4">{{ __('education.current_money') }}</h3>
                        <p class="g-color-text-light-v1">{{ __('education.current_money_desc') }}</p>
                        <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">{{ __('education.learn_more') }}<i
                                class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                    </div>
                    <!-- End Links -->
                </div>

                <div class="card g-brd-none g-mx-4 g-mb-8">
                    <!-- Links -->
                    <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                        <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                            <i class="icon-education-039 u-line-icon-pro"></i>
                        </span>
                        <h3 class="h4">{{ __('education.current_your_studies') }}</h3>
                        <p class="g-color-text-light-v1">{{ __('education.current_your_studies_desc') }}</p>
                        <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">{{ __('education.learn_more') }}<i
                                class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                    </div>
                    <!-- End Links -->
                </div>

                <div class="card g-brd-none g-mx-4 g-mb-8">
                    <!-- Links -->
                    <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                        <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                            <i class="icon-education-055 u-line-icon-pro"></i>
                        </span>
                        <h3 class="h4">{{ __('education.current_new_students') }}</h3>
                        <p class="g-color-text-light-v1">{{ __('education.current_new_students_desc') }}</p>
                        <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">{{ __('education.learn_more') }}<i
                                class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                    </div>
                    <!-- End Links -->
                </div>
            </div>

            <div class="card-group d-block d-md-flex g-mx-minus-4">
                <div class="card g-brd-none g-mx-4 g-mb-8">
                    <!-- Links -->
                    <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                        <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                            <i class="icon-communication-058 u-line-icon-pro"></i>
                        </span>
                        <h3 class="h4">{{ __('education.current_support') }}</h3>
                        <p class="g-color-text-light-v1">{{ __('education.current_support_desc') }}</p>
                        <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">{{ __('education.learn_more') }}<i
                                class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                    </div>
                    <!-- End Links -->
                </div>

                <div class="card g-brd-none g-mx-4 g-mb-8">
                    <!-- Links -->
                    <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                        <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                            <i class="icon-education-103 u-line-icon-pro-v3"></i>
                        </span>
                        <h3 class="h4">{{ __('education.current_student_it_online_learning') }}</h3>
                        <p class="g-color-text-light-v1">{{ __('education.current_student_it_online_learning_desc') }}</p>
                        <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">{{ __('education.learn_more') }}<i
                                class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                    </div>
                    <!-- End Links -->
                </div>

                <div class="card g-brd-none g-mx-4 g-mb-8">
                    <!-- Links -->
                    <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                        <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                            <i class="icon-communication-040 u-line-icon-pro"></i>
                        </span>
                        <h3 class="h4">{{ __('education.current_administration') }}</h3>
                        <p class="g-color-text-light-v1">{{ __('education.current_administration_desc') }}</p>
                        <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">{{ __('education.learn_more') }}<i
                                class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                    </div>
                    <!-- End Links -->
                </div>
            </div>
        </div>
    </div>
    <!-- End More Links -->

    <!-- Admission Heading -->
    <div class="container">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-mb-60">
            <h2 class="h1 mb-3">{{ __('education.current_notices') }}</h2>
            <p>{{ __('education.current_notices_desc') }}</p>
        </div>
        <!-- End Heading -->
    </div>
    <!-- End Admission Heading -->

    <!-- Notice -->
    <div class="g-bg-secondary">
        <div class="container-fluid g-px-8 g-pt-8">
            <!-- Notice Carousel -->
            <div class="js-carousel u-carousel-v5 g-mx-minus-4" data-slides-show="4" data-slides-scroll="1"
                data-arrows-classes="u-icon-v3 u-icon-size--sm g-absolute-centered--x g-bottom-minus-70 g-color-main g-color-white--hover g-bg-secondary g-bg-primary--hover rounded g-pa-11"
                data-arrow-left-classes="fa fa-angle-left g-ml-minus-25"
                data-arrow-right-classes="fa fa-angle-right g-ml-25"
                data-responsive='[{
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "slidesToShow": 2
                 }
               }, {
                 "breakpoint": 554,
                 "settings": {
                   "slidesToShow": 1
                 }
               }]'>

                <!-- Notice - Article -->
                <div class="js-slide g-mx-4 g-mb-8">
                    <div class="u-info-v11-1 g-bg-white text-center rounded g-px-40 g-py-50">
                        <div class="g-width-150 g-height-150 mx-auto mb-4">
                            <img class="img-fluid u-info-v11-1-img rounded-circle" src="assets/img-temp/150x150/img1.jpg"
                                alt="Image Description">
                        </div>
                        <div class="mb-5">
                            <h3 class="mb-3">{{ __('education.current_notice_1_title') }}</h3>
                            <p>{{ __('education.current_notice_1_desc') }}</p>
                        </div>
                        <a class="btn g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-10"
                            href="#">{{ __('education.current_read_now') }}</a>
                    </div>
                </div>
                <!-- End Notice - Article -->

                <!-- Notice - Article -->
                <div class="js-slide g-mx-4 g-mb-8">
                    <div class="u-info-v11-1 g-bg-white text-center rounded g-px-40 g-py-50">
                        <div class="g-width-150 g-height-150 mx-auto mb-4">
                            <img class="img-fluid u-info-v11-1-img rounded-circle" src="assets/img-temp/150x150/img5.jpg"
                                alt="Image Description">
                        </div>
                        <div class="mb-5">
                            <h3 class="mb-3">{{ __('education.current_notice_2_title') }}</h3>
                            <p>{{ __('education.current_notice_2_desc') }}</p>
                        </div>
                        <a class="btn g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-10"
                            href="#">{{ __('education.current_read_now') }}</a>
                    </div>
                </div>
                <!-- End Notice - Article -->

                <!-- Notice - Article -->
                <div class="js-slide g-mx-4 g-mb-8">
                    <div class="u-info-v11-1 g-bg-white text-center rounded g-px-40 g-py-50">
                        <div class="g-width-150 g-height-150 mx-auto mb-4">
                            <img class="img-fluid u-info-v11-1-img rounded-circle" src="assets/img-temp/150x150/img3.jpg"
                                alt="Image Description">
                        </div>
                        <div class="mb-5">
                            <h3 class="mb-3">{{ __('education.current_notice_3_title') }}</h3>
                            <p>{{ __('education.current_notice_3_desc') }}</p>
                        </div>
                        <a class="btn g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-10"
                            href="#">{{ __('education.current_read_now') }}</a>
                    </div>
                </div>
                <!-- End Notice - Article -->

                <!-- Notice - Article -->
                <div class="js-slide g-mx-4 g-mb-8">
                    <div class="u-info-v11-1 g-bg-white text-center rounded g-px-40 g-py-50">
                        <div class="g-width-150 g-height-150 mx-auto mb-4">
                            <img class="img-fluid u-info-v11-1-img rounded-circle" src="assets/img-temp/150x150/img4.jpg"
                                alt="Image Description">
                        </div>
                        <div class="mb-5">
                            <h3 class="mb-3">{{ __('education.current_notice_4_title') }}</h3>
                            <p>{{ __('education.current_notice_4_desc_1') }}</p>
                            <p>{{ __('education.current_notice_4_desc_2') }}</p>
                        </div>
                        <a class="btn g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-10"
                            href="#">{{ __('education.current_read_now') }}</a>
                    </div>
                </div>
                <!-- End Notice - Article -->

                <!-- Notice - Article -->
                <div class="js-slide g-mx-4 g-mb-8">
                    <div class="u-info-v11-1 g-bg-white text-center rounded g-px-40 g-py-50">
                        <div class="g-width-150 g-height-150 mx-auto mb-4">
                            <img class="img-fluid u-info-v11-1-img rounded-circle" src="assets/img-temp/150x150/img2.jpg"
                                alt="Image Description">
                        </div>
                        <div class="mb-5">
                            <h3 class="mb-3">{{ __('education.current_notice_5_title') }}</h3>
                            <p>{{ __('education.current_notice_5_desc') }}</p>
                        </div>
                        <a class="btn g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-10"
                            href="#">{{ __('education.current_read_now') }}</a>
                    </div>
                </div>
                <!-- End Notice - Article -->
            </div>
            <!-- End Notice Carousel -->
        </div>
    </div>
    <!-- End Notice -->

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

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
