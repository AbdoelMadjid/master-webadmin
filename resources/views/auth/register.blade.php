@extends('education.partials.web-master')
@section('title', __('auth.register_title'))
@section('css')
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <style>
        @media (min-width: 768px) {
            .register-unify-rel {
                padding-bottom: 200px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="g-bg-img-hero g-bg-pos-top-center" style="background-image: url(assets/include/svg/svg-bg2.svg);">
        <div class="container g-pt-100 g-pb-100 g-pb-130--lg">
            <div class="g-pos-rel register-unify-rel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="g-mb-40">
                            <h2 class="h1 mb-3">{{ __('auth.register_title') }}</h2>
                            <p>{{ __('auth.register_subtitle') }}</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-5 order-md-2 g-pos-abs--md g-top-0 g-right-0">
                        <form id="unify_register_form" action="{{ route('register') }}" method="POST"
                            novalidate="novalidate">
                            @php
                                $nameHasError = $errors->has('name');
                                $emailHasError = $errors->has('email');
                                $passwordHasError = $errors->has('password');
                                $passwordConfirmationHasError = $errors->has('password_confirmation');
                            @endphp
                            @csrf
                            <input type="hidden" name="locale" value="{{ app()->getLocale() }}">

                            @if (session('status'))
                                <div class="alert alert-success g-mb-20" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger g-mb-20" role="alert">
                                    <strong>{{ __('auth.register_failed') }}</strong>
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                                <div class="g-mb-20">
                                    <label class="g-color-text-light-v1 g-font-weight-500">{{ __('auth.name') }}</label>
                                    <div class="input-group">
                                        <span
                                            class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-transparent g-rounded-right-0">
                                            <div
                                                class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                <i class="icon-finance-067 u-line-icon-pro"></i>
                                            </div>
                                        </span>
                                        <input
                                            class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12 @if ($nameHasError) is-invalid @endif"
                                            type="text" id="nameInput" name="name" autocomplete="name"
                                            value="{{ old('name') }}"
                                            placeholder="{{ __('education.placeholder_full_name') }}">
                                    </div>
                                    <div class="invalid-feedback @if ($nameHasError) d-block @endif">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>

                                <div class="g-mb-20">
                                    <label
                                        class="g-color-text-light-v1 g-font-weight-500">{{ __('education.email') }}</label>
                                    <div class="input-group">
                                        <span
                                            class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                            <div
                                                class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                <i class="icon-education-166 u-line-icon-pro"></i>
                                            </div>
                                        </span>
                                        <input
                                            class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-left-0 g-px-20 g-py-12 @if ($emailHasError) is-invalid @endif"
                                            type="email" id="emailInput" name="email" autocomplete="username"
                                            value="{{ old('email') }}"
                                            placeholder="{{ __('education.placeholder_email') }}">
                                    </div>
                                    <div id="emailFieldError"
                                        class="invalid-feedback @if ($emailHasError) d-block @endif">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>

                                <div class="g-mb-20">
                                    <label
                                        class="g-color-text-light-v1 g-font-weight-500">{{ __('education.signin_password') }}</label>
                                    <div class="input-group">
                                        <span
                                            class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                            <div
                                                class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                <i class="icon-finance-135 u-line-icon-pro"></i>
                                            </div>
                                        </span>
                                        <input
                                            class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-0 g-px-20 g-py-12 @if ($passwordHasError) is-invalid @endif"
                                            type="password" id="passwordInput" name="password" autocomplete="new-password"
                                            placeholder="*********">
                                        <span class="input-group-append g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-left-0 btn-toggle-password" style="cursor: pointer;" data-target="passwordInput" title="Tampilkan / Sembunyikan Password">
                                            <div class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                <i class="fa fa-eye toggle-icon text-muted"></i>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="passwordFieldError"
                                        class="invalid-feedback @if ($passwordHasError) d-block @endif">
                                        {{ $errors->first('password') }}
                                    </div>

                                    <!-- Real-time Password Requirements Card -->
                                    <div id="passwordRequirementsCard" class="g-mt-10 g-pa-12 g-bg-secondary rounded fs-7">
                                        <div class="g-font-weight-600 g-mb-5 text-muted">Syarat Kata Sandi:</div>
                                        <div class="d-flex align-items-center g-mb-3" id="req-length">
                                            <i class="fa fa-circle-o text-muted mr-2 req-icon"></i>
                                            <span class="req-text text-muted">Harus &gt; 8 karakter</span>
                                        </div>
                                        <div class="d-flex align-items-center g-mb-3" id="req-uppercase">
                                            <i class="fa fa-circle-o text-muted mr-2 req-icon"></i>
                                            <span class="req-text text-muted">Mengandung huruf besar (A-Z)</span>
                                        </div>
                                        <div class="d-flex align-items-center g-mb-3" id="req-lowercase">
                                            <i class="fa fa-circle-o text-muted mr-2 req-icon"></i>
                                            <span class="req-text text-muted">Mengandung huruf kecil (a-z)</span>
                                        </div>
                                        <div class="d-flex align-items-center" id="req-number">
                                            <i class="fa fa-circle-o text-muted mr-2 req-icon"></i>
                                            <span class="req-text text-muted">Mengandung angka (0-9)</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="g-mb-20">
                                    <label
                                        class="g-color-text-light-v1 g-font-weight-500">{{ __('education.signin_confirm_password') }}</label>
                                    <div class="input-group">
                                        <span
                                            class="input-group-prepend g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-right-0">
                                            <div
                                                class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                <i class="icon-real-estate-056 u-line-icon-pro"></i>
                                            </div>
                                        </span>
                                        <input
                                            class="form-control g-brd-secondary-light-v2 g-bg-secondary g-bg-secondary-dark-v1--focus g-rounded-0 g-px-20 g-py-12 @if ($passwordConfirmationHasError) is-invalid @endif"
                                            type="password" id="passwordConfirmationInput" name="password_confirmation"
                                            autocomplete="new-password" placeholder="*********">
                                        <span class="input-group-append g-width-50 g-brd-secondary-light-v2 g-bg-secondary g-rounded-left-0 btn-toggle-password" style="cursor: pointer;" data-target="passwordConfirmationInput" title="Tampilkan / Sembunyikan Password">
                                            <div class="input-group-text justify-content-center w-100 g-bg-secondary g-brd-secondary-light-v2">
                                                <i class="fa fa-eye toggle-icon text-muted"></i>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="passwordConfirmationFieldError"
                                        class="invalid-feedback @if ($passwordConfirmationHasError) d-block @endif">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>

                                    <!-- Real-time Confirm Password Match Card -->
                                    <div id="confirmPasswordMatchCard" class="g-mt-10 g-pa-12 g-bg-secondary rounded fs-7">
                                        <div class="d-flex align-items-center" id="req-match">
                                            <i class="fa fa-circle-o text-muted mr-2 req-icon"></i>
                                            <span class="req-text text-muted">Kata sandi dan konfirmasi kata sandi cocok</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <button type="submit"
                                        class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-25 g-py-7 ml-auto">{{ __('auth.submit_register') }}</button>
                                </div>
                            </div>

                            <div class="text-center g-pt-30">
                                <p class="g-color-text-light-v1 g-font-size-default mb-0">
                                    {{ __('auth.already_registered') }}
                                    <a class="g-font-size-default" href="{{ route('login') }}">{{ __('auth.title') }}</a>
                                </p>
                            </div>
                        </form>

                        <hr class="g-hidden-md-up g-my-60">
                    </div>

                    <div class="col-md-6 order-md-1">
                        <div class="g-max-width-400">
                            <div class="media align-items-center g-mb-30">
                                <div class="d-flex mr-4">
                                    <span
                                        class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                        <i class="material-icons">adb</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">{{ __('education.signin_tip_1_prefix') }} <a
                                            href="#">{{ __('education.signin_tip_1_link') }}</a>
                                        {{ __('education.signin_tip_1_suffix') }}</p>
                                </div>
                            </div>

                            <div class="media align-items-center g-mb-30">
                                <div class="d-flex mr-4">
                                    <span
                                        class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                        <i class="material-icons">bug_report</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0"><a href="#">{{ __('education.signin_tip_2_link') }}</a>
                                        {{ __('education.signin_tip_2_suffix') }}</p>
                                </div>
                            </div>

                            <div class="media align-items-center">
                                <div class="d-flex mr-4">
                                    <span
                                        class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                        <i class="material-icons">verified_user</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">{{ __('education.signin_tip_3_prefix') }} <a
                                            href="#">{{ __('education.signin_tip_3_link') }}</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        $(document).on('ready', function() {
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });
            $.HSCore.components.HSGoTo.init('.js-go-to');

            const nameInput = document.getElementById('nameInput');
            const emailInput = document.getElementById('emailInput');
            const passwordInput = document.getElementById('passwordInput');
            const passwordConfirmationInput = document.getElementById('passwordConfirmationInput');
            const form = document.getElementById('unify_register_form');
            const emailFieldError = document.getElementById('emailFieldError');
            const passwordFieldError = document.getElementById('passwordFieldError');
            const passwordConfirmationFieldError = document.getElementById('passwordConfirmationFieldError');

            function toTitleCaseName(value) {
                return value.toLowerCase().replace(/\s+/g, ' ').trimStart().replace(/\b\w/g, function(char) {
                    return char.toUpperCase();
                });
            }

            function setFieldError(input, feedback, message) {
                input.classList.add('is-invalid');
                feedback.textContent = message;
                feedback.classList.add('d-block');
            }

            function clearFieldError(input, feedback) {
                input.classList.remove('is-invalid');
                feedback.classList.remove('d-block');
            }

            function validateEmailInline() {
                const value = emailInput.value.trim();
                if (value.length === 0) {
                    setFieldError(emailInput, emailFieldError, @json(__('auth.js.email_required')));
                    return false;
                }

                const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                if (!isValid) {
                    setFieldError(emailInput, emailFieldError, @json(__('auth.js.invalid_email')));
                    return false;
                }

                clearFieldError(emailInput, emailFieldError);
                return true;
            }

            // Toggle Password Visibility (Eye Icon)
            $('.btn-toggle-password').on('click', function() {
                const targetId = $(this).data('target');
                const input = document.getElementById(targetId);
                const icon = $(this).find('.toggle-icon');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.removeClass('fa-eye text-muted').addClass('fa-eye-slash text-primary');
                } else {
                    input.type = 'password';
                    icon.removeClass('fa-eye-slash text-primary').addClass('fa-eye text-muted');
                }
            });

            function updateRequirement(elementId, isMet) {
                const el = $('#' + elementId);
                const icon = el.find('.req-icon');
                const text = el.find('.req-text');

                if (isMet) {
                    icon.removeClass('fa-circle-o fa-times-circle text-muted text-danger').addClass('fa-check-circle text-success');
                    text.removeClass('text-muted text-danger').addClass('text-success font-weight-bold');
                } else {
                    icon.removeClass('fa-check-circle text-success').addClass('fa-circle-o text-muted');
                    text.removeClass('text-success font-weight-bold').addClass('text-muted');
                }
            }

            function validatePasswordRequirementsRealtime() {
                const val = passwordInput.value;

                const isLengthValid = val.length > 8; // Harus > 8 karakter
                const isUppercaseValid = /[A-Z]/.test(val);
                const isLowercaseValid = /[a-z]/.test(val);
                const isNumberValid = /\d/.test(val);

                updateRequirement('req-length', isLengthValid);
                updateRequirement('req-uppercase', isUppercaseValid);
                updateRequirement('req-lowercase', isLowercaseValid);
                updateRequirement('req-number', isNumberValid);

                return isLengthValid && isUppercaseValid && isLowercaseValid && isNumberValid;
            }

            function validatePasswordMatchRealtime() {
                const pass = passwordInput.value;
                const confirmPass = passwordConfirmationInput.value;
                const isMatched = confirmPass.length > 0 && pass === confirmPass;

                updateRequirement('req-match', isMatched);
                return isMatched;
            }

            function validatePasswordInline() {
                if (passwordInput.value.length === 0) {
                    setFieldError(passwordInput, passwordFieldError, @json(__('auth.js.password_required')));
                    return false;
                }

                if (!validatePasswordRequirementsRealtime()) {
                    setFieldError(passwordInput, passwordFieldError, 'Password belum memenuhi seluruh kriteria.');
                    return false;
                }

                clearFieldError(passwordInput, passwordFieldError);
                return true;
            }

            function validatePasswordConfirmationInline() {
                if (passwordConfirmationInput.value.length === 0) {
                    setFieldError(passwordConfirmationInput, passwordConfirmationFieldError,
                        @json(__('auth.validation.password_confirmed')));
                    return false;
                }

                if (passwordConfirmationInput.value !== passwordInput.value) {
                    setFieldError(passwordConfirmationInput, passwordConfirmationFieldError,
                        @json(__('auth.validation.password_confirmed')));
                    return false;
                }

                clearFieldError(passwordConfirmationInput, passwordConfirmationFieldError);
                return true;
            }

            nameInput.addEventListener('input', function() {
                const cursorPos = nameInput.selectionStart;
                nameInput.value = toTitleCaseName(nameInput.value);
                if (cursorPos !== null) {
                    nameInput.setSelectionRange(cursorPos, cursorPos);
                }
            });
            emailInput.addEventListener('input', validateEmailInline);
            emailInput.addEventListener('blur', validateEmailInline);
            passwordInput.addEventListener('input', function() {
                validatePasswordInline();
                validatePasswordRequirementsRealtime();
                validatePasswordMatchRealtime();
            });
            passwordInput.addEventListener('blur', function() {
                validatePasswordInline();
                validatePasswordRequirementsRealtime();
            });
            passwordConfirmationInput.addEventListener('input', function() {
                validatePasswordConfirmationInline();
                validatePasswordMatchRealtime();
            });
            passwordConfirmationInput.addEventListener('blur', function() {
                validatePasswordConfirmationInline();
                validatePasswordMatchRealtime();
            });

            // Initial check if values are present
            validatePasswordRequirementsRealtime();
            validatePasswordMatchRealtime();

            form.addEventListener('submit', function(e) {
                const validEmail = validateEmailInline();
                const validPassword = validatePasswordInline();
                const validPasswordConfirmation = validatePasswordConfirmationInline();
                const reqsMet = validatePasswordRequirementsRealtime();
                const matchMet = validatePasswordMatchRealtime();

                if (!validEmail || !validPassword || !validPasswordConfirmation || !reqsMet || !matchMet) {
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection
