@extends('education.partials.web-master')
@section('title', __('education.meta_title_apply_intake'))
@section('css')
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/chosen/chosen.css">
@endsection
@section('content')
    <!-- Promo Content -->
    <div class="g-bg-secondary">
        <!-- Breadcrumbs -->
        <div class="container g-py-50">
            <span class="d-block g-font-size-18">{{ __('education.apply_intake_courses') }}</span>
            <h1 class="g-font-size-40--md">{{ __('education.apply_intake_course_title') }}</h1>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Content -->
        <div class="container g-pb-50">
            <div class="row">
                <div class="col-lg-7 g-mb-50">
                    <!-- Youtube Iframe -->
                    <div
                        class="embed-responsive embed-responsive-16by9 u-shadow-v36 g-brd-around g-brd-10 g-brd-white g-rounded-5 g-mb-30">
                        <iframe src="https://www.youtube.com/embed/FxiskmF16gU?rel=0&amp;showinfo=0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <!-- End Youtube Iframe -->

                    <h2 class="h3">{{ __('education.apply_intake_innovative_it_course') }}</h2>
                    <p class="mb-0 pl-4">&#8212; {{ __('education.apply_intake_gain_two_qualifications') }}</p>
                </div>

                <div class="col-lg-5 g-mb-50">
                    <h2 class="g-hidden-md-down g-font-size-18 g-font-primary g-font-weight-400 mb-4">{{ __('education.apply_intake_be_part_of_innovation') }}</h2>

                    <!-- Disclaimer -->
                    <div class="u-shadow-v32 g-bg-white rounded g-pa-30 g-mb-30">
                        <p class="mb-0">{{ __('education.apply_intake_disclaimer') }}</p>
                    </div>
                    <!-- End Disclaimer -->

                    <!-- Info Banner -->
                    <div class="u-shadow-v36 g-bg-main-light-v2 g-bg-primary--hover rounded g-pos-rel g-pa-30 g-mb-30">
                        <h3 class="h2 g-color-white">{{ __('education.apply_intake_info_banner_title') }}</h3>
                        <p class="g-color-white-opacity-0_9">{{ __('education.apply_intake_info_banner_desc') }}</p>
                        <i class="g-color-white material-icons">arrow_forward</i>
                        <a class="u-link-v2" href="#"></a>
                    </div>
                    <!-- End Info Banner -->

                    <!-- Links -->
                    <div class="d-flex">
                        <a class="btn btn-block d-flex u-shadow-v32 g-color-white g-bg-main g-bg-primary--hover g-font-size-16 text-left g-rounded-30 g-px-30 g-py-10 mr-2 g-mt-0"
                            href="#">
                            {{ __('education.apply_now') }}
                            <i class="g-font-size-16 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                        </a>

                        <a class="btn btn-block d-flex u-shadow-v32 g-brd-2 g-brd-main g-brd-primary--hover g-color-main g-color-white--hover g-bg-transparent g-bg-primary--hover g-font-size-16 text-left g-rounded-30 g-px-30 g-py-10 ml-2 g-mt-0"
                            href="{{ route('education.contacts') }}">
                            {{ __('education.apply_intake_ask_a_question') }}
                            <i class="g-font-size-16 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                        </a>
                    </div>
                    <!-- End Links -->
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Promo Content -->

    <!-- Course Sections -->
    <div id="sub-navigation" class="g-pos-rel">
        <div class="js-sticky-block container u-secondary-navigation u-shadow-v19 g-bg-white g-line-height-1_3 g-py-20 g-pos-abs g-top-0 g-left-0 g-right-0"
            data-start-point="#sub-navigation" data-end-point="999999" data-type="responsive">
            <ul id="js-scroll-nav" class="nav flex-column flex-sm-row justify-content-sm-center text-center text-uppercase">
                <li class="nav-item g-brd-right--sm g-brd-gray-light-v4 g-color-primary--active">
                    <a href="#carouseDetails" class="nav-link g-font-weight-500 g-font-size-default g-px-20">{{ __('education.apply_intake_course_details') }}</a>
                </li>
                <li class="nav-item g-brd-right--sm g-brd-gray-light-v4 g-color-primary--active">
                    <a href="#careerPaths" class="nav-link g-font-weight-500 g-font-size-default g-px-20">{{ __('education.apply_intake_career_paths') }}</a>
                </li>
                <li class="nav-item g-brd-right--sm g-brd-gray-light-v4 g-color-primary--active">
                    <a href="#yourFee" class="nav-link g-font-weight-500 g-font-size-default g-px-20">{{ __('education.apply_intake_your_fee') }}</a>
                </li>
                <li class="nav-item g-brd-right--sm g-brd-gray-light-v4 g-color-primary--active">
                    <a href="#similarCourses" class="nav-link g-font-weight-500 g-font-size-default g-px-20">{{ __('education.apply_intake_similar_courses') }}</a>
                </li>
                <li class="nav-item g-color-primary--active">
                    <a href="#entryFeesAndApply" class="nav-link g-font-weight-500 g-font-size-default g-px-20">{{ __('education.apply_intake_entry_fees_how_to_apply') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Course Sections -->

    <!-- Course Details -->
    <div class="g-bg-secondary-gradient-v2">
        <div class="container g-pt-150 g-pb-170">
            <div class="g-max-width-960 mx-auto">
                <!-- Course Details -->
                <div id="carouseDetails" class="row g-pb-80">
                    <div class="col-lg-1 g-mb-20 g-mb-0--lg">
                        <span class="u-icon-v1 u-icon-size--xl g-color-main g-bg-secondary g-font-size-30 rounded-circle">
                            <i class="icon-education-092 u-line-icon-pro"></i>
                        </span>
                    </div>

                    <div class="col-lg-11">
                        <div class="g-pl-15--lg">
                            <h3>{{ __('education.apply_intake_course_details') }}</h3>
                            <p>{{ __('education.apply_intake_faculty_university_school') }}</p>

                            <div class="row">
                                <ul class="col-md-4 g-color-text-light-v1 g-font-size-15 g-pl-30 mb-0">
                                    <li class="py-1">{{ __('education.apply_intake_credit_points_required') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_usyd_code') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_study_mode') }}</li>
                                </ul>

                                <ul class="col-md-4 g-color-text-light-v1 g-font-size-15 g-pl-30 mb-0">
                                    <li class="py-1">{{ __('education.apply_intake_location') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_course_abbreviation') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_uac_code') }}</li>
                                </ul>

                                <ul class="col-md-4 g-color-text-light-v1 g-font-size-15 g-pl-30 mb-0">
                                    <li class="py-1">{{ __('education.apply_intake_study_type') }}</li>
                                    <li class="py-1"><a class="g-color-primary" href="#">{{ __('education.apply_intake_graduate_attributes') }}</a></li>
                                </ul>
                            </div>

                            <ul class="g-color-text-light-v1 g-font-size-15 g-pl-15 mb-0">
                                <li class="py-1">{{ __('education.apply_intake_duration_full_time') }}</li>
                                <li class="py-1">{{ __('education.apply_intake_duration_part_time') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Course Details -->

                <hr class="g-brd-secondary-light-v2 my-0">

                <!-- Career Paths -->
                <div id="careerPaths" class="row g-py-80">
                    <div class="col-lg-1 g-mb-20 g-mb-0--lg">
                        <span class="u-icon-v1 u-icon-size--xl g-color-main g-bg-secondary g-font-size-30 rounded-circle">
                            <i class="icon-education-194 u-line-icon-pro"></i>
                        </span>
                    </div>

                    <div class="col-lg-11">
                        <div class="g-pl-15--lg">
                            <h3>{{ __('education.apply_intake_career_paths') }}</h3>
                            <p>{{ __('education.apply_intake_career_paths_desc_1') }}</p>
                            <p>{{ __('education.apply_intake_career_paths_desc_2') }}</p>

                            <div class="row">
                                <ul class="col-md-4 g-color-text-light-v1 g-font-size-15 g-pl-30 mb-0">
                                    <li class="py-1">{{ __('education.apply_intake_career_1') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_2') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_3') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_4') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_5') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_6') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_7') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_8') }}</li>
                                </ul>

                                <ul class="col-md-4 g-color-text-light-v1 g-font-size-15 g-pl-30 mb-0">
                                    <li class="py-1">{{ __('education.apply_intake_career_9') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_10') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_11') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_12') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_13') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_14') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_15') }}</li>
                                </ul>

                                <ul class="col-md-4 g-color-text-light-v1 g-font-size-15 g-pl-30 mb-0">
                                    <li class="py-1">{{ __('education.apply_intake_career_16') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_17') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_18') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_19') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_20') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_21') }}</li>
                                    <li class="py-1">{{ __('education.apply_intake_career_22') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Career Paths -->

                <hr class="g-brd-secondary-light-v2 my-0">

                <!-- Your Fee -->
                <div id="yourFee" class="row g-py-80">
                    <div class="col-lg-1 g-mb-20 g-mb-0--lg">
                        <span class="u-icon-v1 u-icon-size--xl g-color-main g-bg-secondary g-font-size-30 rounded-circle">
                            <i class="icon-finance-210 u-line-icon-pro"></i>
                        </span>
                    </div>

                    <div class="col-lg-11">
                        <div class="g-pl-15--lg">
                            <h3>{{ __('education.apply_intake_your_fee') }}</h3>
                            <p><span class="g-font-weight-500">{{ __('education.apply_intake_sca_label') }}
                                    {{ __('education.apply_intake_sca_year_1') }}</span> {{ __('education.apply_intake_indicative_only') }}</p>
                            <p>{{ __('education.apply_intake_fee_desc_1') }}</p>
                            <p>{{ __('education.apply_intake_fee_desc_2') }}</p>
                            <p class="g-font-weight-500">{{ __('education.apply_intake_fee_desc_3') }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Your Fee -->

                <hr class="g-brd-secondary-light-v2 my-0">

                <!-- Similar Courses -->
                <div id="similarCourses" class="row g-py-80">
                    <div class="col-lg-1 g-mb-20 g-mb-0--lg">
                        <span class="u-icon-v1 u-icon-size--xl g-color-main g-bg-secondary g-font-size-30 rounded-circle">
                            <i class="icon-education-056 u-line-icon-pro"></i>
                        </span>
                    </div>

                    <div class="col-lg-11">
                        <div class="g-pl-15--lg">
                            <div class="mb-4">
                                <h3>{{ __('education.apply_intake_similar_courses') }}</h3>
                                <p>{{ __('education.apply_intake_similar_courses_desc') }}</p>
                            </div>

                            <div class="card-group d-block d-md-flex g-mx-minus-15">
                                <div class="card g-brd-none g-mx-15 g-mb-30">
                                    <a class="card-body d-block u-link-v5 u-shadow-v32 g-color-main g-color-primary--hover g-bg-white g-pa-30"
                                        href="#">{{ __('education.apply_intake_similar_course_1') }}</a>
                                </div>

                                <div class="card g-brd-none g-mx-15 g-mb-30">
                                    <a class="card-body d-block u-link-v5 u-shadow-v32 g-color-main g-color-primary--hover g-bg-white g-pa-30"
                                        href="#">{{ __('education.apply_intake_similar_course_2') }}</a>
                                </div>

                                <div class="card g-brd-none g-mx-15 g-mb-30">
                                    <a class="card-body d-block u-link-v5 u-shadow-v32 g-color-main g-color-primary--hover g-bg-white g-pa-30"
                                        href="#">{{ __('education.apply_intake_similar_course_3') }}</a>
                                </div>
                            </div>

                            <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-16 text-left g-rounded-30 g-px-30 g-py-10"
                                href="#">
                                {{ __('education.apply_now') }}
                                <i class="g-font-size-15 g-pos-rel g-top-3 ml-auto material-icons">arrow_forward</i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Similar Courses -->

                <hr class="g-brd-secondary-light-v2 my-0">
            </div>

            <!-- Icon Blocks -->
            <div id="entryFeesAndApply" class="row g-pt-80">
                <div class="col-lg-6 g-mb-30">
                    <!-- Media -->
                    <div class="media u-block-hover u-shadow-v34 g-bg-white rounded g-overflow-hidden g-px-40 g-py-50">
                        <div class="d-flex g-mr-30">
                            <span
                                class="u-icon-v1 u-icon-size--xl g-color-main g-color-primary--hover g-bg-secondary rounded-circle">
                                <i class="g-font-size-45 material-icons">info</i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h4 g-color-main g-color-primary--hover g-font-primary">{{ __('education.apply_intake_how_to_apply') }} <i
                                    class="g-font-size-16 mr-2 material-icons">arrow_forward</i></h3>
                            <p class="mb-0">{{ __('education.apply_intake_refer_to_the') }} <a href="#">{{ __('education.apply_intake_uac_website') }}</a> {{ __('education.apply_intake_scholarship_deadlines_apply') }} <a href="#">{{ __('education.apply_intake_scholarships_webpage') }}</a> {{ __('education.apply_intake_for_details') }}</p>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>

                <div class="col-lg-6 g-mb-30">
                    <!-- Media -->
                    <div class="media u-block-hover u-shadow-v34 g-bg-white rounded g-overflow-hidden g-px-40 g-py-50">
                        <div class="d-flex g-mr-30">
                            <span
                                class="u-icon-v1 u-icon-size--xl g-color-main g-color-primary--hover g-bg-secondary rounded-circle">
                                <i class="g-font-size-45 material-icons">file_download</i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h4 g-color-main g-color-primary--hover g-font-primary">{{ __('education.apply_intake_download_guide') }} <i
                                    class="g-font-size-16 mr-2 material-icons">arrow_forward</i></h3>
                            <p class="mb-0">{{ __('education.apply_intake_guide_2018') }}</p>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>
            </div>
            <!-- End Icon Blocks -->
        </div>
    </div>
    <!-- End Course Details -->

    <!-- Entry Fees & How to Apply -->
    <div class="container g-mt-minus-120">
        <div class="row align-items-lg-center no-gutters">
            <div class="col-lg-7 g-mb-50 g-mb-20--lg">
                <!-- Entry Fees & How to Apply -->
                <div class="u-shadow-v36">
                    <div class="g-bg-main">
                        <header class="g-brd-bottom g-brd-white-opacity-0_1 text-center g-pa-30">
                            <h3 class="h4 g-color-white g-font-primary g-font-weight-400 mb-0">{{ __('education.apply_intake_entry_fees_and_how_to_apply') }}</h3>
                        </header>

                        <div class="g-pa-40">
                            <p class="g-color-white-opacity-0_6 text-center g-mb-40">{{ __('education.apply_intake_depends_on_qualification_citizenship') }}</p>

                            <!-- Select Inputs -->
                            <div class="row">
                                <div class="col-6 g-mb-30">
                                    <!-- Start In -->
                                    <label class="g-color-white-opacity-0_5 g-font-size-15 mb-3">{{ __('education.apply_intake_i_would_like_to_start_study_in') }}</label>
                                    <select
                                        class="js-custom-select w-100 u-select-v2 g-brd-white-opacity-0_1 g-color-white-opacity-0_7 g-color-primary--hover g-bg-transparent text-left rounded g-pl-20 g-pr-40 g-py-10"
                                        data-placeholder="{{ __('education.apply_intake_2018') }}" data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="">{{ __('education.apply_intake_2018_spring') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="2018">{{ __('education.apply_intake_2018_fall') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="2020">{{ __('education.apply_intake_2020_spring') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="2020">{{ __('education.apply_intake_2020_fall') }}</option>
                                    </select>
                                    <!-- End Start In -->
                                </div>

                                <div class="col-6 g-mb-30">
                                    <!-- I am -->
                                    <label class="g-color-white-opacity-0_5 g-font-size-15 mb-3">{{ __('education.apply_intake_i_am') }}</label>
                                    <select
                                        class="js-custom-select w-100 u-select-v2 g-brd-white-opacity-0_1 g-color-white-opacity-0_7 g-color-primary--hover g-bg-transparent text-left rounded g-pl-20 g-pr-40 g-py-10"
                                        data-placeholder="{{ __('education.apply_intake_a_canadian_citizen') }}" data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="">{{ __('education.apply_intake_a_canadian_citizen_including_dual_citizens') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="international">{{ __('education.apply_intake_an_international_student') }}</option>
                                    </select>
                                    <!-- End I am -->
                                </div>
                            </div>

                            <h3 class="g-color-white-opacity-0_5 g-font-primary g-font-weight-400 g-font-size-15 mb-3">{{ __('education.apply_intake_my_qualification_is_from') }}</h3>

                            <div class="row g-mb-10">
                                <div class="col-6 g-mb-30">
                                    <!-- Qualification -->
                                    <select
                                        class="js-custom-select w-100 u-select-v2 g-brd-white-opacity-0_1 g-color-white-opacity-0_7 g-color-primary--hover g-bg-transparent text-left rounded g-pl-20 g-pr-40 g-py-10"
                                        data-placeholder="{{ __('education.apply_intake_canada') }}" data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="">{{ __('education.apply_intake_canada') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="australia">{{ __('education.apply_intake_australia') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="usa">{{ __('education.apply_intake_usa') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="china">{{ __('education.apply_intake_china') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="europe">{{ __('education.apply_intake_europe') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="japan">{{ __('education.apply_intake_japan') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="others">{{ __('education.apply_intake_other_part_of_the_world') }}</option>
                                    </select>
                                    <!-- End Qualification -->
                                </div>

                                <div class="col-6 g-mb-30">
                                    <!-- I am -->
                                    <select
                                        class="js-custom-select w-100 u-select-v2 g-brd-white-opacity-0_1 g-color-white-opacity-0_7 g-color-primary--hover g-bg-transparent text-left rounded g-pl-20 g-pr-40 g-py-10"
                                        data-placeholder="{{ __('education.apply_intake_domestic_atar') }}" data-open-icon="fa fa-angle-down"
                                        data-close-icon="fa fa-angle-up">
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="">{{ __('education.apply_intake_domestic_atar') }}</option>
                                        <option
                                            class="g-brd-secondary-light-v2 g-color-text-light-v1 g-color-white--active g-bg-primary--active"
                                            value="domestic_ib_diploma_score">{{ __('education.apply_intake_domestic_ib_diploma_score') }}</option>
                                    </select>
                                    <!-- End I am -->
                                </div>
                            </div>
                            <!-- End Select Inputs -->

                            <p class="g-color-white-opacity-0_6 text-center mb-0">{{ __('education.apply_intake_details_guide_only') }}</p>
                        </div>
                    </div>

                    <footer>
                        <a class="btn btn-block g-color-blue g-color-white--hover g-bg-main-light-v1 g-font-size-16 text-center rounded-0 g-pa-20"
                            href="#">
                            {{ __('education.apply_intake_contact_us_more_info') }}
                            <i class="g-font-size-15 g-pos-rel g-top-4 ml-2 material-icons">arrow_forward</i>
                        </a>
                    </footer>
                </div>
                <!-- End Entry Fees & How to Apply -->
            </div>

            <div class="col-lg-5 g-mb-50 g-mb-20--lg">
                <!-- Facts & Figures -->
                <div class="u-shadow-v36">
                    <header class="g-brd-bottom g-brd-secondary-light-v2 g-bg-white text-center g-pa-30">
                        <h3 class="h4 g-font-primary g-font-weight-400 mb-0">{{ __('education.apply_intake_facts_and_figures') }}</h3>
                    </header>

                    <div class="g-bg-white g-px-50 g-py-30">
                        <div class="text-center g-mb-30">
                            <span class="g-color-primary g-font-size-50 g-line-height-0-7">75.4<span
                                    class="g-color-main g-font-weight-700 g-font-size-30">%</span></span>
                            <p class="g-color-text-light-v1">{{ __('education.apply_intake_acceptance_rate_per_semester') }}</p>
                        </div>

                        <!-- Facts & Figures List -->
                        <ul class="list-unstyled g-font-size-16 mb-0">
                            <li class="media g-py-10">
                                <div class="d-flex mr-3">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                        <i class="g-font-size-default material-icons">trending_up</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    {{ __('education.apply_intake_fact_1') }}
                                </div>
                            </li>

                            <li class="media g-py-10">
                                <div class="d-flex mr-3">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                        <i class="g-font-size-default material-icons">arrow_downward</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    {{ __('education.apply_intake_fact_2') }}
                                </div>
                            </li>

                            <li class="media g-py-10">
                                <div class="d-flex mr-3">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                        <i class="g-font-size-default material-icons">laptop_chromebook</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    {{ __('education.apply_intake_fact_3') }}
                                </div>
                            </li>
                        </ul>
                        <!-- End Facts & Figures List -->
                    </div>

                    <footer>
                        <a class="btn btn-block g-color-main g-color-primary--hover g-bg-secondary g-font-size-16 text-center rounded-0 g-pa-20"
                            href="#">
                            {{ __('education.apply_intake_start_your_application') }}
                            <i class="g-font-size-15 g-pos-rel g-top-4 ml-2 material-icons">arrow_forward</i>
                        </a>
                    </footer>
                </div>
                <!-- End Facts & Figures -->
            </div>
        </div>
    </div>
    <!-- End Entry Fees & How to Apply -->

    <!-- Call to Action -->
    @include('education.content.call-to-action')
    <!-- End Call to Action -->
@endsection
@section('script')
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/chosen/chosen.jquery.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.select.js"></script>
    <script src="assets/js/components/hs.scroll-nav.js"></script>
    <script src="assets/js/components/hs.sticky-block.js"></script>
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

            // initialization of custom select
            $.HSCore.components.HSSelect.init('.js-custom-select');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

        $(window).on('load', function() {
            // initialization of HSScrollNav
            $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
                duration: 700,
                over: $('.u-secondary-navigation')
            });

            // initialization of sticky blocks
            $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
        });
    </script>
@endsection
