@extends('education.partials.web-master')
@section('title', __('education.meta_title_programs'))
@section('css')
    <!-- CSS Implementing Plugins -->
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
    <!-- Programs Filters -->
    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <div class="container g-pt-100 g-pb-70">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-60">
                <span class="d-block g-font-weight-500 text-uppercase mb-4">{{ __('education.programs_full_list') }}</span>
                <h2 class="h1 mb-0">{{ __('education.programs_browse_all') }}</h2>
            </div>
            <!-- Heading -->

            <!-- Programs Filter -->
            <div class="row justify-content-center align-items-center g-mb-30">
                <div class="col-sm-6 col-md-3">
                    <!-- Checkbox -->
                    <ul
                        class="list-inline w-100 u-shadow-v32 g-bg-white text-center g-rounded-30 g-px-10 g-py-13 mr-4 mb-0">
                        <li class="list-inline-item g-mx-10">
                            <label class="form-check-inline u-check g-pl-30 ml-0 g-mr-15 mb-0">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroup1_1" type="radio"
                                    checked="">
                                <div class="u-check-icon-font g-absolute-centered--y g-left-0">
                                    <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                </div>
                                A-Z
                            </label>
                        </li>
                        <li class="list-inline-item g-mx-10">
                            <label class="form-check-inline u-check g-pl-30 ml-0 mb-0">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroup1_1" type="radio">
                                <div class="u-check-icon-font g-absolute-centered--y g-left-0">
                                    <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                </div>
                                Z-A
                            </label>
                        </li>
                    </ul>
                    <!-- End Checkbox -->
                </div>

                <div class="col-sm-6 col-md-2">
                    <!-- Campus -->
                    <select
                        class="js-custom-select w-100 u-select-v1 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"
                        data-placeholder="{{ __('education.programs_campus') }}" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                        <option></option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="OR">{{ __('education.programs_auto_orlando') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="TO">{{ __('education.programs_auto_toronto') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="VA">{{ __('education.programs_auto_vancouver') }}</option>
                    </select>
                    <!-- End Campus -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3 g-mb-30">
                    <!-- Intake -->
                    <select
                        class="js-custom-select w-100 u-select-v1 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"
                        data-placeholder="{{ __('education.programs_intake') }}" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                        <option></option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="SP">{{ __('education.programs_spring_2018') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="FA">{{ __('education.programs_fall_2018') }}</option>
                    </select>
                    <!-- End Intake -->
                </div>

                <div class="col-sm-6 col-md-3 g-mb-30">
                    <!-- Attendance Type -->
                    <select
                        class="js-custom-select w-100 u-select-v1 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"
                        data-placeholder="{{ __('education.programs_attendance_type') }}" data-open-icon="fa fa-angle-down"
                        data-close-icon="fa fa-angle-up">
                        <option></option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="FT">{{ __('education.programs_full_time') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="PT">{{ __('education.programs_part_time') }}</option>
                    </select>
                    <!-- End Attendance Type -->
                </div>

                <div class="col-sm-6 col-md-3 g-mb-30">
                    <!-- Level of Study -->
                    <select
                        class="js-custom-select w-100 u-select-v1 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"
                        data-placeholder="{{ __('education.programs_level_of_study') }}" data-open-icon="fa fa-angle-down"
                        data-close-icon="fa fa-angle-up">
                        <option></option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="UG">{{ __('education.programs_undergraduate') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="GR">{{ __('education.programs_graduate') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="PHD">{{ __('education.programs_auto_phd') }}</option>
                    </select>
                    <!-- End Level of Study -->
                </div>

                <div class="col-sm-6 col-md-3 g-mb-30">
                    <!-- Area of Study -->
                    <select
                        class="js-custom-select w-100 u-select-v1 u-shadow-v32 g-brd-none g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12"
                        data-placeholder="{{ __('education.programs_area_of_study') }}" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                        <option></option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="PHD-P">{{ __('education.programs_auto_doctor_of_philosophy_phd') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MAHSR">{{ __('education.programs_auto_master_of_applied_health_services_research') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MA">{{ __('education.programs_auto_master_of_arts') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MASRS">{{ __('education.programs_auto_master_of_arts_in_sport_and_recreation_studies') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MA/PHD">{{ __('education.programs_auto_master_of_arts_doctor_of_philosophy') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MBA">{{ __('education.programs_auto_master_of_business_administration_fredericton') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MBASJ">{{ __('education.programs_auto_master_of_business_administration_saint_john') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MCS">{{ __('education.programs_auto_master_of_computer_science') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MCSC">{{ __('education.programs_auto_master_of_computer_science_by_coursework') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MED">{{ __('education.programs_auto_master_of_education') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="ME">{{ __('education.programs_auto_master_of_engineering') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MEM">{{ __('education.programs_auto_master_of_environmental_management') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MFE">{{ __('education.programs_auto_master_of_forest_engineering') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MF">{{ __('education.programs_auto_master_of_forestry') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MIDST">{{ __('education.programs_auto_master_of_interdisciplinary_studies') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MN">{{ __('education.programs_auto_master_of_nursing') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MQIM">{{ __('education.programs_auto_master_of_quantitative_investment_management') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MSC">{{ __('education.programs_auto_master_of_science') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MSE">{{ __('education.programs_auto_master_of_science_in_engineering') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MSESS">{{ __('education.programs_auto_master_of_science_in_exercise_and_sport_science') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MSFE">{{ __('education.programs_auto_master_of_science_in_forest_engineering') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="MSF">{{ __('education.programs_auto_master_of_science_in_forestry') }}</option>
                        <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="D-MCG">{{ __('education.programs_auto_postgraduate_diploma_in_mapping_charting_and_geodesy') }}</option>
                    </select>
                    <!-- End Area of Study -->
                </div>
            </div>
            <!-- End Programs Filter -->
        </div>
    </div>
    <!-- End Programs Filters -->

    <!-- Programs -->
    <div class="container g-pt-70">
        <div class="row">
            <div class="col-lg-9 g-mb-70">
                <div class="mb-5">
                    <h2>{{ __('education.programs_list_and_descriptions') }}</h2>
                    <p>{{ __('education.programs_list_and_descriptions_desc') }}</p>
                </div>

                <div class="g-px-15 mb-5">
                    <!-- Heading -->
                    <div class="row g-bg-main g-color-white g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center">
                                <h2 class="h5 mb-0"><a class="u-link-v5 g-color-white-opacity-0_8 g-color-white--hover"
                                        href="#">
                                        <i class="g-font-size-20 material-icons">swap_vert</i>
                                        {{ __('education.programs_program') }}
                                    </a></h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h3 class="h5 mb-0"><a class="u-link-v5 g-color-white-opacity-0_8 g-color-white--hover"
                                        href="#">
                                        <i class="g-font-size-20 material-icons">swap_vert</i>
                                        {{ __('education.programs_department') }}
                                    </a></h3>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="d-flex align-items-center">
                                <h3 class="h5 mb-0"><a class="u-link-v5 g-color-white-opacity-0_8 g-color-white--hover"
                                        href="#">
                                        <i class="g-font-size-20 material-icons">swap_vert</i>
                                        {{ __('education.programs_type') }}
                                    </a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Heading -->

                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_anthropology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_anthropology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_anthropology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_anthropology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_biochemistry_and_microbiology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_biochemistry_and_microbiology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_biochemistry_and_microbiology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_biochemistry_and_microbiology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_biology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_biology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_biology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_biology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_business_administration') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_business') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_business_administration_and_laws') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_business') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_global_business') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_business') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_business_administration') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_business') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_chemistry') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_chemistry') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_chemistry') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_chemistry') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_child_and_youth_care') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_child_and_youth_care') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_child_and_youth_care') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_child_and_youth_care') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_computer_science') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_computer_science') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_cultural_social_and_political_thought_program') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_history') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_cultural_social_and_political_thought_program') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_sociology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_cultural_social_and_political_thought_program') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_sociology') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_curriculum_and_instruction_ma_med') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_curriculum_and_instruction') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_curriculum_and_instruction') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_earth_and_ocean_sciences') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_earth_and_ocean_sciences') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_earth_and_ocean_sciences') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_earth_and_ocean_sciences') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_economics') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_economics') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_economics') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_economics') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_electrical_and_computer_engineering') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_electrical_and_computer_engineering') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_electrical_and_computer_engineering') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_electrical_and_computer_engineering') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_english') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_english') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_english') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_english') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_business') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_entrepreneurship') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_business') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_certificate') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_entrepreneurship') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_environmental_studies') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_diploma') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_environmental_studies') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_school_of_environmental_studies') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_environmental_studies') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_exercise_science_physical_and_health_education') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_exercise_science_physical_and_health_education') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_exercise_science_physical_and_health_education') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_kinesiology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_exercise_science_physical_and_health_education') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_kinesiology') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_french') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_french') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_geography') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_geography') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_geography') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_geography') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_hispanic_and_italian_studies') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_phd') }}</span>
                        </div>
                    </div>
                    <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                        <div class="col-sm-4">
                            <span>{{ __('education.programs_auto_hispanic_and_italian_studies') }}</span>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">{{ __('education.programs_auto_department_of_history') }}</a>
                        </div>
                        <div class="col-sm-2">
                            <span>{{ __('education.programs_auto_ms') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page Navigation">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-secondary-light-v2 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded g-pa-5"
                                href="#">1</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-text-light-v1 g-color-primary--hover g-font-size-12 rounded g-pa-5"
                                href="#">2</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-text-light-v1 g-color-primary--hover g-font-size-12 rounded g-pa-5"
                                href="#">3</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-primary--hover g-font-size-12 rounded g-pa-5 g-ml-15"
                                href="#" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="sr-only">{{ __('education.next') }}</span>
                            </a>
                        </li>
                        <li class="list-inline-item float-right">
                            <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">{{ __('education.programs_page_1_of_3') }}</span>
                        </li>
                    </ul>
                </nav>
                <!-- End Pagination -->
            </div>

            <div class="col-lg-3 g-mb-70">
                <h3 class="h4">{{ __('education.related_links') }}</h3>

                <div id="stickyblock-start">
                    <div class="js-sticky-block g-sticky-block--lg pt-4" data-responsive="true"
                        data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                        <!-- Sidebar Links -->
                        <ul class="list-unstyled g-mb-50">
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

                        <!-- Twitter Feed -->
                        <h3 class="h4 mb-4">{{ __('education.twitter_feeds') }}</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="g-brd-bottom g-brd-secondary-light-v2 g-pb-20">
                                <h4 class="h6">{{ __('education.alumni_twitter_rt') }} <a class="g-font-weight-600" href="#">@UofA_Arts:</a>
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Programs -->
@endsection
@section('script')
    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/chosen/chosen.jquery.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.select.js"></script>
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

            // initialization of sticky blocks
            setTimeout(function() {
                $.HSCore.components.HSStickyBlock.init('.js-sticky-block');
            }, 300);

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
