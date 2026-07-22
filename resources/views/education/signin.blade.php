@extends('education.partials.web-master')
@section('title', __('education.meta_title_signin'))
@section('css')
<link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
@endsection
@section('content')
<!-- Signin Form -->
        <div class="g-bg-img-hero g-bg-pos-top-center" style="background-image: url(assets/include/svg/svg-bg2.svg);">
            <div class="container g-pt-100 g-pb-100 g-pb-130--lg">
                <div class="g-pos-rel">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Heading -->
                            <div class="g-mb-40">
                                <h2 class="h1 mb-3">{{ __('education.signin_title') }}</h2>
                                <p>{{ __('education.signin_intro_prefix') }} <a href="#">{{ __('education.signin_policies_guidelines') }}</a>.</p>
                            </div>
                            <!-- End Heading -->
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-md-6 col-lg-5 order-md-2 g-pos-abs--md g-top-0 g-right-0">
                            <!-- Contact Form -->
                            <form>
                                <!-- Signin -->
                                <div id="signin">
                                    <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">{{ __('education.email') }}</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-education-166 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="email" placeholder="{{ __('education.placeholder_email') }}">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">{{ __('education.signin_password') }}</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-finance-135 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="password" placeholder="*********">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="g-color-text-light-v1 g-font-size-default"
                                                id="forgot-password-link" href="#">{{ __('education.signin_forgot_password') }}</a>
                                            <button type="submit"
                                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7">{{ __('education.signin_action') }}</button>
                                        </div>
                                    </div>

                                    <div class="text-center g-pt-30">
                                        <p class="g-color-text-light-v1 g-font-size-default mb-0">{{ __('education.signin_no_account') }} <a class="g-font-size-default" id="signup-link"
                                                href="#">{{ __('education.signin_create_account') }}</a></p>
                                    </div>
                                </div>
                                <!-- End Signin -->

                                <!-- Signup -->
                                <div id="signup" style="display: none;">
                                    <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">{{ __('education.full_name') }}</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-transparent g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-finance-067 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="text" placeholder="{{ __('education.placeholder_full_name') }}">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">{{ __('education.email') }}</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-education-166 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="email" placeholder="{{ __('education.placeholder_email') }}">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">{{ __('education.signin_password') }}</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-finance-135 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="password" placeholder="*********">
                                            </div>
                                        </div>

                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">{{ __('education.signin_confirm_password') }}</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-real-estate-056 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="password" placeholder="*********">
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit"
                                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7 ml-auto">{{ __('education.signin_signup_action') }}</button>
                                        </div>
                                    </div>

                                    <div class="text-center g-pt-30">
                                        <p class="g-color-text-light-v1 g-font-size-default mb-0">{{ __('education.signin_already_have_account') }} <a class="g-font-size-default" id="signin-link"
                                                href="#">{{ __('education.signin_action') }}</a></p>
                                    </div>
                                </div>
                                <!-- End Signup -->

                                <!-- Forgot Password -->
                                <div id="forgot-password" style="display: none;">
                                    <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                                        <div class="g-mb-20">
                                            <label class="g-color-text-light-v1 g-font-weight-500">{{ __('education.signin_enter_email') }}</label>
                                            <div class="input-group">
                                                <span
                                                    class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                                    <div
                                                        class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                        <i class="icon-education-166 u-line-icon-pro"></i>
                                                    </div>
                                                </span>
                                                <input
                                                    class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12"
                                                    type="email" placeholder="{{ __('education.placeholder_email') }}">
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit"
                                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7 ml-auto">Recover
                                                {{ __('education.signin_recover_password') }}</button>
                                        </div>
                                    </div>

                                    <div class="text-center g-pt-30">
                                        <p class="g-color-text-light-v1 g-font-size-default mb-0">{{ __('education.signin_remember_password') }} <a class="g-font-size-default" id="go-back-link"
                                                href="#">{{ __('education.signin_action') }}</a></p>
                                    </div>
                                </div>
                                <!-- End Forgot Password -->
                            </form>
                            <!-- End Contact Form -->

                            <hr class="g-hidden-md-up g-my-60">
                        </div>

                        <div class="col-md-6 order-md-1">
                            <div class="g-max-width-400">
                                <!-- Media -->
                                <div class="media align-items-center g-mb-30">
                                    <div class="d-flex mr-4">
                                        <span
                                            class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                            <i class="material-icons">adb</i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">{{ __('education.signin_tip_1_prefix') }} <a href="#">{{ __('education.signin_tip_1_link') }}</a> {{ __('education.signin_tip_1_suffix') }}</p>
                                    </div>
                                </div>
                                <!-- End Media -->

                                <!-- Media -->
                                <div class="media align-items-center g-mb-30">
                                    <div class="d-flex mr-4">
                                        <span
                                            class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                            <i class="material-icons">bug_report</i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0"><a href="#">{{ __('education.signin_tip_2_link') }}</a> {{ __('education.signin_tip_2_suffix') }}</p>
                                    </div>
                                </div>
                                <!-- End Media -->

                                <!-- Media -->
                                <div class="media align-items-center">
                                    <div class="d-flex mr-4">
                                        <span
                                            class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                            <i class="material-icons">verified_user</i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">{{ __('education.signin_tip_3_prefix') }} <a href="#">{{ __('education.signin_tip_3_link') }}</a>.</p>
                                    </div>
                                </div>
                                <!-- End Media -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Signin Form -->
@endsection
@section('script')
<script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
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

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // Signin Tab
            $('#signin-link, #go-back-link').on('click', function(e) {
                e.preventDefault();
                $('#signin, #go-back-link').show();
                $('#signup').hide();
                $('#forgot-password').hide();
            });

            $('#signup-link').on('click', function(e) {
                e.preventDefault();
                $('#signup').show();
                $('#signin, #go-back-link').hide();
                $('#forgot-password').hide();
            });

            $('#forgot-password-link').on('click', function(e) {
                e.preventDefault();
                $('#forgot-password').show();
                $('#signin').hide();
                $('#signup').hide();
            });
        });
    </script>
@endsection
