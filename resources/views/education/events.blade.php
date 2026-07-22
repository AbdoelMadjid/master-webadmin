@extends('education.partials.web-master')
@section('title', __('education.meta_title_events'))
@section('css')
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/vendor/chosen/chosen.css">
@endsection
@section('content')
    <!-- Promo Block -->
    <div class="g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after"
        style="background-image: url(assets/img-temp/1920x1080/img4.jpg);">
        <div class="container g-pos-rel g-z-index-1 g-pt-80 g-pb-150">
            <div class="row justify-content-lg-between align-items-md-center">
                <div class="col-md-6 col-lg-5 g-mb-30">
                    <h1 class="g-color-white g-font-size-40--md mb-4">{{ __('education.events_hero_title') }}</h1>
                    <p class="g-color-white-opacity-0_9 g-font-size-20--md">{{ __('education.events_hero_subtitle') }}</p>
                </div>

                <div class="col-md-6 col-lg-4 g-mb-30">
                    <!-- Contact Form -->
                    <form class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                        <div class="g-mb-20">
                            <label class="g-font-weight-500 g-font-size-15 g-pl-20">{{ __('education.full_name') }}</label>
                            <input
                                class="form-control h-100 g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-30 g-px-20 g-py-12"
                                type="text" placeholder="{{ __('education.events_enter_full_name') }}">
                        </div>

                        <div class="g-mb-20">
                            <label class="g-font-weight-500 g-font-size-15 g-pl-20">{{ __('education.email') }}</label>
                            <input
                                class="form-control h-100 g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-30 g-px-20 g-py-12"
                                type="email" placeholder="{{ __('education.events_enter_email') }}">
                        </div>

                        <div class="g-mb-20">
                            <label class="g-font-weight-500 g-font-size-15 g-pl-20">{{ __('education.events_how_many_seats') }}</label>
                            <input
                                class="form-control h-100 g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-30 g-px-20 g-py-12"
                                type="text" placeholder="{{ __('education.events_seats_placeholder') }}">
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a class="u-link-v5 g-color-text-light-v1 g-color-primary--hover g-font-size-default"
                                href="#"><i class="align-middle mr-1 icon-real-estate-027 u-line-icon-pro"></i> {{ __('education.events_get_location') }}</a>
                            <button type="submit"
                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default g-rounded-30 g-px-25 g-py-7">{{ __('education.events_book') }}</button>
                        </div>
                    </form>
                    <!-- End Contact Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Promo Block -->

    <!-- Find a Course -->
    <div class="g-bg-img-hero g-bg-pos-top-center g-pos-rel g-z-index-1 g-mt-minus-150"
        style="background-image: url(assets/include/svg/svg-bg4.svg);">
        <div class="container g-pt-150 g-pb-30">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-60">
                <h2 class="h1 mb-0">{{ __('education.events_search_best_experiences') }}</h2>
                <span class="d-block g-font-size-18 mb-0">{{ __('education.events_discover_100') }}</span>
            </div>
            <!-- End Heading -->

            <form class="row">
                <div class="col-xl-8 g-mb-30">
                    <div class="g-mb-50">
                        <label class="g-font-weight-500 g-font-size-15 g-pl-30">{{ __('education.events_search_by') }}</label>
                        <input
                            class="form-control h-100 u-shadow-v19 g-brd-none g-bg-white g-font-size-16 g-rounded-30 g-px-30 g-py-13 g-mb-30"
                            type="text" placeholder="{{ __('education.events_search_example') }}">
                    </div>

                    <div class="row">
                        <div class="col-sm-6 g-mb-50">
                            <!-- Area of Interest -->
                            <label class="g-font-weight-500 g-font-size-15 g-pl-30">{{ __('education.events_area_of_interest') }}</label>
                            <select
                                class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-brd-none g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-30 g-py-12"
                                data-placeholder="{{ __('education.events_area_of_interest') }}" data-open-icon="fa fa-angle-down"
                                data-close-icon="fa fa-angle-up">
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="">{{ __('education.events_all') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="architecture_creative_arts">{{ __('education.events_option_architecture') }}
                                </option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="arts_social_sciences">{{ __('education.events_option_arts_social') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="business_law">{{ __('education.events_option_business_law') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="engineering_it">{{ __('education.events_option_engineering_it') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="indigenous">{{ __('education.events_option_indigenous') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="medicine_health">{{ __('education.events_option_medicine_health') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="natural_sciences">{{ __('education.events_option_natural_sciences') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="sport">{{ __('education.events_option_sport') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="university_general_interest">{{ __('education.events_option_university_general') }}</option>
                            </select>
                            <!-- End Area of Interest -->
                        </div>

                        <div class="col-sm-6 g-mb-50">
                            <!-- Type -->
                            <label class="g-font-weight-500 g-font-size-15 g-pl-30">{{ __('education.events_type') }}</label>
                            <select
                                class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-brd-none g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-30 g-py-12"
                                data-placeholder="{{ __('education.events_type') }}" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="">{{ __('education.events_all') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="awards_ceremonies">{{ __('education.events_option_awards_ceremonies') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="conferences_workshops">{{ __('education.events_option_conferences_workshops') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="exhibition_performing_arts">{{ __('education.events_option_exhibition_performing_arts') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="forums">{{ __('education.events_option_lectures_talks_forums') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="social_networking">{{ __('education.events_option_social_networking') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="special_events">{{ __('education.events_option_special_events') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="sport">{{ __('education.events_option_sport') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="tours">{{ __('education.events_option_tours') }}</option>
                            </select>
                            <!-- End Type -->
                        </div>

                        <div class="col-sm-6 g-mb-50">
                            <!-- For -->
                            <label class="g-font-weight-500 g-font-size-15 g-pl-30">{{ __('education.events_for') }}</label>
                            <select
                                class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-brd-none g-color-text-light-v1 g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-30 g-py-12"
                                data-placeholder="{{ __('education.events_for') }}" data-open-icon="fa fa-angle-down"
                                data-close-icon="fa fa-angle-up">
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="">{{ __('education.events_all') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="alumni_and_friends">{{ __('education.events_option_alumni_friends') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="current_students">{{ __('education.events_option_current_students') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="future_students">{{ __('education.events_option_future_students') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="public">{{ __('education.events_option_public') }}</option>
                                <option
                                    class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                    value="staff">{{ __('education.events_option_staff') }}</option>
                            </select>
                            <!-- End For -->
                        </div>

                        <div class="col-sm-6 g-mt-30 g-mb-30">
                            <div class="d-flex">
                                <button
                                    class="btn btn-block u-shadow-v32 g-brd-main g-brd-2 g-color-main g-color-white--hover g-bg-transparent g-bg-main--hover g-font-size-16 g-rounded-30 g-py-10 mr-2 g-mt-0"
                                    type="button">{{ __('education.events_reset') }}</button>
                                <button
                                    class="btn btn-block u-shadow-v32 g-brd-none g-color-white g-bg-main g-bg-primary--hover g-font-size-16 g-rounded-30 g-py-10 ml-2 g-mt-0"
                                    type="button">{{ __('education.search') }}</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 g-mb-30">
                    <!-- Datepicker -->
                    <label class="g-font-weight-500 g-font-size-15">{{ __('education.events_select_single_date') }}</label>
                    <div id="datepickerInline" class="u-datepicker-v1 u-shadow-v32 g-brd-none rounded"></div>
                    <!-- End Datepicker -->
                </div>
            </form>
        </div>
    </div>
    <!-- End Find a Course -->

    <!-- Key Events -->
    <div class="container g-pt-50 g-pb-70">
        <h2 class="g-mb-40">{{ __('education.events_key_events') }}</h2>

        <div class="row">
            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Event Block -->
                <article class="u-block-hover u-shadow-v38">
                    <div class="g-min-height-300 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                        style="background-image: url(assets/img-temp/400x500/img11.jpg);">
                        <div class="g-pos-abs g-bottom-0 g-left-0 g-right-0 g-z-index-1 g-pa-20">
                            <div class="d-flex justify-content-between">
                                <div class="mt-auto mb-2">
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_0900_am') }}</span>
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_1200_pm') }}</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="g-color-white g-font-weight-500 g-font-size-40 g-line-height-0_7">24</span>
                                    <span class="g-color-white g-line-height-0_7">{{ __('education.events_month_nov') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="g-pa-25">
                        <h3 class="g-color-primary--hover g-font-size-18 mb-0">{{ __('education.events_key_event_1') }}</h3>
                    </div>

                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Event Block -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Event Block -->
                <article class="u-block-hover u-shadow-v38">
                    <div class="g-min-height-300 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                        style="background-image: url(assets/img-temp/400x500/img12.jpg);">
                        <div class="g-pos-abs g-bottom-0 g-left-0 g-right-0 g-z-index-1 g-pa-20">
                            <div class="d-flex justify-content-between">
                                <div class="mt-auto mb-2">
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_1215_pm') }}</span>
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_1245_pm') }}</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="g-color-white g-font-weight-500 g-font-size-40 g-line-height-0_7">07</span>
                                    <span class="g-color-white g-line-height-0_7">{{ __('education.events_month_dec') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="g-pa-25">
                        <h3 class="g-color-primary--hover g-font-size-18 mb-0">{{ __('education.events_key_event_2') }}</h3>
                    </div>

                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Event Block -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Event Block -->
                <article class="u-block-hover u-shadow-v38">
                    <div class="g-min-height-300 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                        style="background-image: url(assets/img-temp/400x500/img13.jpg);">
                        <div class="g-pos-abs g-bottom-0 g-left-0 g-right-0 g-z-index-1 g-pa-20">
                            <div class="d-flex justify-content-between">
                                <div class="mt-auto mb-2">
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_0300_pm') }}</span>
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_0500_pm') }}</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="g-color-white g-font-weight-500 g-font-size-40 g-line-height-0_7">19</span>
                                    <span class="g-color-white g-line-height-0_7">{{ __('education.events_month_jan') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="g-pa-25">
                        <h3 class="g-color-primary--hover g-font-size-18 mb-0">{{ __('education.events_key_event_3') }}</h3>
                    </div>

                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Event Block -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Event Block -->
                <article class="u-block-hover u-shadow-v38">
                    <div class="g-min-height-300 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                        style="background-image: url(assets/img-temp/400x500/img14.jpg);">
                        <div class="g-pos-abs g-bottom-0 g-left-0 g-right-0 g-z-index-1 g-pa-20">
                            <div class="d-flex justify-content-between">
                                <div class="mt-auto mb-2">
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_1130_am') }}</span>
                                    <span class="d-block g-color-white g-line-height-1_4">{{ __('education.events_time_0100_pm') }}</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="g-color-white g-font-weight-500 g-font-size-40 g-line-height-0_7">20</span>
                                    <span class="g-color-white g-line-height-0_7">{{ __('education.events_month_jan') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="g-pa-25">
                        <h3 class="g-color-primary--hover g-font-size-18 mb-0">{{ __('education.events_key_event_4') }}</h3>
                    </div>

                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Event Block -->
            </div>
        </div>
    </div>
    <!-- End Key Events -->

    <!-- Promo Event -->
    <div class="container g-brd-y g-brd-secondary-light-v2 g-pt-50 g-pb-60">
        <div class="row justify-content-lg-center align-items-md-center">
            <div class="col-md-6 col-lg-5 g-mb-30 g-mb-0--md">
                <h2 class="mb-3"><a class="h2 u-link-v5 g-color-main g-color-primary--hover" href="#">{{ __('education.events_promo_title') }}</a></h2>
                <p>{{ __('education.events_promo_desc') }}</p>
            </div>

            <div class="col-md-6 col-lg-5 offset-lg-1">
                <img class="img-fluid u-shadow-v39 g-brd-around g-brd-10 g-brd-white rounded"
                    src="assets/img-temp/600x350/img17.jpg" alt="Image Description">
            </div>
        </div>
    </div>
    <!-- End Promo Event -->

    <!-- University Events -->
    <div class="container g-pt-100">
        <div class="row">
            <div class="col-lg-6 g-mb-30">
                <!-- Event Listing -->
                <article class="u-shadow-v39">
                    <div class="row">
                        <div class="col-4">
                            <div class="g-min-height-170 g-bg-img-hero"
                                style="background-image: url(assets/img-temp/200x200/img5.jpg);"></div>
                        </div>

                        <div class="col-8 g-min-height-170 g-flex-centered">
                            <div class="media align-items-center g-py-40">
                                <div class="d-flex col-8">
                                    <h3 class="g-line-height-1 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover g-font-size-18"
                                            href="#">{{ __('education.events_university_event_1') }}</a></h3>
                                </div>
                                <div class="media-body col-4">
                                    <span
                                        class="g-color-primary g-font-weight-500 g-font-size-40 g-line-height-0_7">13</span>
                                    <span class="g-line-height-0_7">{{ __('education.events_month_nov') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Event Listing -->
            </div>

            <div class="col-lg-6 g-mb-30">
                <!-- Event Listing -->
                <article class="u-shadow-v39">
                    <div class="row">
                        <div class="col-4">
                            <div class="g-min-height-170 g-bg-img-hero"
                                style="background-image: url(assets/img-temp/200x200/img6.jpg);"></div>
                        </div>

                        <div class="col-8 g-min-height-170 g-flex-centered">
                            <div class="media align-items-center g-py-40">
                                <div class="d-flex col-8">
                                    <h3 class="g-line-height-1 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover g-font-size-18"
                                            href="#">{{ __('education.events_university_event_2') }}</a>
                                    </h3>
                                </div>
                                <div class="media-body col-4">
                                    <span
                                        class="g-color-primary g-font-weight-500 g-font-size-40 g-line-height-0_7">05</span>
                                    <span class="g-line-height-0_7">{{ __('education.events_month_dec') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Event Listing -->
            </div>

            <div class="w-100"></div>

            <div class="col-lg-6 g-mb-30">
                <!-- Event Listing -->
                <article class="u-shadow-v39">
                    <div class="row">
                        <div class="col-4">
                            <div class="g-min-height-170 g-bg-img-hero"
                                style="background-image: url(assets/img-temp/200x200/img10.jpg);"></div>
                        </div>

                        <div class="col-8 g-min-height-170 g-flex-centered">
                            <div class="media align-items-center g-py-40">
                                <div class="d-flex col-8">
                                    <h3 class="g-line-height-1 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover g-font-size-18"
                                            href="#">{{ __('education.events_university_event_3') }}</a></h3>
                                </div>
                                <div class="media-body col-4">
                                    <span
                                        class="g-color-primary g-font-weight-500 g-font-size-40 g-line-height-0_7">09</span>
                                    <span class="g-line-height-0_7">{{ __('education.events_month_dec') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Event Listing -->
            </div>

            <div class="col-lg-6 g-mb-30">
                <!-- Event Listing -->
                <article class="u-shadow-v39">
                    <div class="row">
                        <div class="col-4">
                            <div class="g-min-height-170 g-bg-img-hero"
                                style="background-image: url(assets/img-temp/200x200/img9.jpg);"></div>
                        </div>

                        <div class="col-8 g-min-height-170 g-flex-centered">
                            <div class="media align-items-center g-py-40">
                                <div class="d-flex col-8">
                                    <h3 class="g-line-height-1 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover g-font-size-18"
                                            href="#">{{ __('education.events_university_event_4') }}</a></h3>
                                </div>
                                <div class="media-body col-4">
                                    <span
                                        class="g-color-primary g-font-weight-500 g-font-size-40 g-line-height-0_7">17</span>
                                    <span class="g-line-height-0_7">{{ __('education.events_month_jan') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Event Listing -->
            </div>

            <div class="w-100"></div>

            <div class="col-lg-6 g-mb-30">
                <!-- Event Listing -->
                <article class="u-shadow-v39">
                    <div class="row">
                        <div class="col-4">
                            <div class="g-min-height-170 g-bg-img-hero"
                                style="background-image: url(assets/img-temp/200x200/img7.jpg);"></div>
                        </div>

                        <div class="col-8 g-min-height-170 g-flex-centered">
                            <div class="media align-items-center g-py-40">
                                <div class="d-flex col-8">
                                    <h3 class="g-line-height-1 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover g-font-size-18"
                                            href="#">{{ __('education.events_university_event_5') }}</a></h3>
                                </div>
                                <div class="media-body col-4">
                                    <span
                                        class="g-color-primary g-font-weight-500 g-font-size-40 g-line-height-0_7">30</span>
                                    <span class="g-line-height-0_7">{{ __('education.events_month_jan') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Event Listing -->
            </div>

            <div class="col-lg-6 g-mb-30">
                <!-- Event Listing -->
                <article class="u-shadow-v39">
                    <div class="row">
                        <div class="col-4">
                            <div class="g-min-height-170 g-bg-img-hero"
                                style="background-image: url(assets/img-temp/200x200/img8.jpg);"></div>
                        </div>

                        <div class="col-8 g-min-height-170 g-flex-centered">
                            <div class="media align-items-center g-py-40">
                                <div class="d-flex col-8">
                                    <h3 class="g-line-height-1 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover g-font-size-18"
                                            href="#">{{ __('education.events_university_event_6') }}</a></h3>
                                </div>
                                <div class="media-body col-4">
                                    <span
                                        class="g-color-primary g-font-weight-500 g-font-size-40 g-line-height-0_7">24</span>
                                    <span class="g-line-height-0_7">{{ __('education.events_month_feb') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Event Listing -->
            </div>
        </div>
    </div>
    <!-- End University Events -->

    <!-- Call to Action -->
    @include('education.content.call-to-action')
    <!-- End Call to Action -->
@endsection
@section('script')
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="assets/vendor/chosen/chosen.jquery.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.datepicker.js"></script>
    <script src="assets/js/components/hs.select.js"></script>
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

            // initialization of forms
            $.HSCore.components.HSDatepicker.init('#datepickerInline');

            // initialization of custom select
            $.HSCore.components.HSSelect.init('.js-custom-select');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
