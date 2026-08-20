@extends('layouts.index', ['CreativeLayout' => true])
@section('content')
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/auth/bg4.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg4-dark.jpg');
            }

            /* Prevent Bootstrap validation icon from covering password eye toggle button */
            .form-control.is-invalid {
                background-image: none !important;
                padding-right: 3rem !important;
            }

            #toggleRegisterPasswordBtn, #togglePasswordBtn {
                z-index: 10;
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            @include('auth.partials._branding')
            <!--end::Aside-->
            <!--begin::Body-->
            <div
                class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                <!--begin::Card-->
                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                            <input type="hidden" name="latitude" id="register_latitude">
                            <input type="hidden" name="longitude" id="register_longitude">
                            <input type="hidden" name="device_time" id="register_device_time">

                            @if (session('status'))
                                <div class="alert alert-success d-flex align-items-center p-4 mb-8" role="alert">
                                    <i class="ki-duotone ki-check-circle fs-2x text-success me-3">
                                        <span class="path1"></span><span class="path2"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <span>{{ session('status') }}</span>
                                    </div>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success d-flex align-items-center p-4 mb-8" role="alert">
                                    <i class="ki-duotone ki-check-circle fs-2x text-success me-3">
                                        <span class="path1"></span><span class="path2"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <span>{{ session('success') }}</span>
                                    </div>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger d-flex align-items-center p-4 mb-8" role="alert">
                                    <i class="ki-duotone ki-cross-circle fs-2x text-danger me-3">
                                        <span class="path1"></span><span class="path2"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <span>{{ session('error') }}</span>
                                    </div>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger d-flex align-items-start p-4 mb-8" role="alert">
                                    <i class="ki-duotone ki-cross-circle fs-2x text-danger me-3 mt-1">
                                        <span class="path1"></span><span class="path2"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <strong class="mb-1">{{ __('auth.register_failed') }}</strong>
                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3">{{ __('auth.register_title') }}</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6">
                                    {{ __('auth.register_subtitle') }}
                                </div>
                                <!--end::Subtitle=-->
                            </div>
                            <!--begin::Heading-->

                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Name-->
                                <input type="text" placeholder="{{ __('auth.name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    class="form-control bg-transparent @error('name') is-invalid @enderror" />
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                <!--end::Name-->
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="email" id="registerEmailInput" placeholder="{{ __('auth.email') }}" name="email" value="{{ old('email') }}" required autocomplete="username"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror" />
                                <div id="registerEmailFieldError" class="invalid-feedback @error('email') d-block @enderror">
                                    @error('email') {{ $message }} @enderror
                                </div>
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-8" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input id="registerPasswordInput" class="form-control bg-transparent @error('password') is-invalid @enderror" type="password" placeholder="{{ __('auth.password_label') }}"
                                            name="password" required autocomplete="new-password" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" id="toggleRegisterPasswordBtn" style="cursor: pointer;">
                                            <i class="ki-duotone ki-eye-slash fs-2" id="toggleRegIconSlash">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                            </i>
                                            <i class="ki-duotone ki-eye fs-2 d-none" id="toggleRegIconEye">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Input wrapper-->
                                    <!--begin::Meter-->
                                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Meter-->
                                </div>
                                <!--end::Wrapper-->
                                <div id="registerPasswordFieldError" class="invalid-feedback @error('password') d-block @enderror">
                                    @error('password') {{ $message }} @enderror
                                </div>
                                <!--begin::Hint-->
                                <div class="text-muted">
                                    Use 8 or more characters with a mix of letters, numbers & symbols.
                                </div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Repeat Password-->
                                <div class="position-relative mb-1">
                                    <input id="registerPasswordConfirmationInput" placeholder="{{ __('auth.confirm_password') }}" name="password_confirmation" type="password" required
                                        autocomplete="new-password" class="form-control bg-transparent @error('password_confirmation') is-invalid @enderror" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" id="toggleRegisterConfirmPasswordBtn" style="cursor: pointer;">
                                        <i class="ki-duotone ki-eye-slash fs-2" id="toggleRegConfirmIconSlash">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                        </i>
                                        <i class="ki-duotone ki-eye fs-2 d-none" id="toggleRegConfirmIconEye">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <div id="registerPasswordConfirmationFieldError" class="invalid-feedback @error('password_confirmation') d-block @enderror">
                                    @error('password_confirmation') {{ $message }} @enderror
                                </div>
                                <!--end::Repeat Password-->
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Accept-->
                            <div class="fv-row mb-8">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" required />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
                                        <a href="javascript:void(0)" class="ms-1 link-primary">Terms</a></span>
                                </label>
                            </div>
                            <!--end::Accept-->

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">{{ __('auth.submit_register') }}</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">{{ __('auth.please_wait') }}
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->

                            <!--begin::Sign in link-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">
                                {{ __('auth.already_registered') }}
                                <a href="{{ route('login') }}" class="link-primary fw-semibold">{{ __('auth.title') }}</a>
                            </div>
                            <!--end::Sign in link-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Footer-->
                    @include('auth.partials._language-footer', ['menuId' => 'kt_auth_lang_menu'])
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('kt_sign_up_form');
            const emailInput = document.getElementById('registerEmailInput');
            const emailFeedback = document.getElementById('registerEmailFieldError');
            const passwordInput = document.getElementById('registerPasswordInput');
            const passwordFeedback = document.getElementById('registerPasswordFieldError');
            const confirmPasswordInput = document.getElementById('registerPasswordConfirmationInput');
            const confirmPasswordFeedback = document.getElementById('registerPasswordConfirmationFieldError');

            const togglePasswordBtn = document.getElementById('toggleRegisterPasswordBtn');
            const toggleIconSlash = document.getElementById('toggleRegIconSlash');
            const toggleIconEye = document.getElementById('toggleRegIconEye');

            const toggleConfirmPasswordBtn = document.getElementById('toggleRegisterConfirmPasswordBtn');
            const toggleConfirmIconSlash = document.getElementById('toggleRegConfirmIconSlash');
            const toggleConfirmIconEye = document.getElementById('toggleRegConfirmIconEye');

            // Password Show/Hide Toggle
            if (togglePasswordBtn && passwordInput) {
                togglePasswordBtn.addEventListener('click', function () {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    if (isPassword) {
                        if (toggleIconSlash) toggleIconSlash.classList.add('d-none');
                        if (toggleIconEye) toggleIconEye.classList.remove('d-none');
                    } else {
                        if (toggleIconSlash) toggleIconSlash.classList.remove('d-none');
                        if (toggleIconEye) toggleIconEye.classList.add('d-none');
                    }
                });
            }

            // Confirm Password Show/Hide Toggle
            if (toggleConfirmPasswordBtn && confirmPasswordInput) {
                toggleConfirmPasswordBtn.addEventListener('click', function () {
                    const isPassword = confirmPasswordInput.getAttribute('type') === 'password';
                    confirmPasswordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    if (isPassword) {
                        if (toggleConfirmIconSlash) toggleConfirmIconSlash.classList.add('d-none');
                        if (toggleConfirmIconEye) toggleConfirmIconEye.classList.remove('d-none');
                    } else {
                        if (toggleConfirmIconSlash) toggleConfirmIconSlash.classList.remove('d-none');
                        if (toggleConfirmIconEye) toggleConfirmIconEye.classList.add('d-none');
                    }
                });
            }

            // Real-time Password Validation
            function handlePasswordValidation() {
                if (!passwordInput) return;
                if (passwordInput.value === '') {
                    passwordInput.classList.add('is-invalid');
                    if (passwordFeedback) {
                        passwordFeedback.textContent = @json(__('auth.js.password_required'));
                        passwordFeedback.classList.add('d-block');
                        passwordFeedback.classList.remove('d-none');
                    }
                } else {
                    passwordInput.classList.remove('is-invalid');
                    if (passwordFeedback) {
                        passwordFeedback.textContent = '';
                        passwordFeedback.classList.remove('d-block');
                        passwordFeedback.classList.add('d-none');
                    }
                }
                if (confirmPasswordInput && confirmPasswordInput.value !== '') {
                    handleConfirmPasswordValidation();
                }
            }

            if (passwordInput) {
                passwordInput.addEventListener('input', handlePasswordValidation);
                passwordInput.addEventListener('focus', handlePasswordValidation);
                passwordInput.addEventListener('blur', handlePasswordValidation);
            }

            // Real-time Confirm Password Validation
            function handleConfirmPasswordValidation() {
                if (!confirmPasswordInput) return;
                const confirmVal = confirmPasswordInput.value;
                const passwordVal = passwordInput ? passwordInput.value : '';

                if (confirmVal === '') {
                    confirmPasswordInput.classList.add('is-invalid');
                    if (confirmPasswordFeedback) {
                        confirmPasswordFeedback.textContent = @json(__('auth.js.password_confirmation_required'));
                        confirmPasswordFeedback.classList.add('d-block');
                        confirmPasswordFeedback.classList.remove('d-none');
                    }
                } else if (confirmVal !== passwordVal) {
                    confirmPasswordInput.classList.add('is-invalid');
                    if (confirmPasswordFeedback) {
                        confirmPasswordFeedback.textContent = @json(__('auth.js.password_confirmation_mismatch'));
                        confirmPasswordFeedback.classList.add('d-block');
                        confirmPasswordFeedback.classList.remove('d-none');
                    }
                } else {
                    confirmPasswordInput.classList.remove('is-invalid');
                    if (confirmPasswordFeedback) {
                        confirmPasswordFeedback.textContent = '';
                        confirmPasswordFeedback.classList.remove('d-block');
                        confirmPasswordFeedback.classList.add('d-none');
                    }
                }
            }

            if (confirmPasswordInput) {
                confirmPasswordInput.addEventListener('input', handleConfirmPasswordValidation);
                confirmPasswordInput.addEventListener('focus', handleConfirmPasswordValidation);
                confirmPasswordInput.addEventListener('blur', handleConfirmPasswordValidation);
            }

            // Real-time Email Format Validation (@ and .)
            function validateEmailFormat(email) {
                const val = email ? email.trim() : '';
                if (val === '') {
                    return @json(__('auth.js.email_required'));
                }
                if (!val.includes('@')) {
                    return @json(__('auth.js.email_missing_at'));
                }
                if (!val.includes('.')) {
                    return @json(__('auth.js.email_missing_dot'));
                }
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(val)) {
                    return @json(__('auth.js.email_invalid_format'));
                }
                return null;
            }

            if (emailInput) {
                emailInput.addEventListener('input', function () {
                    const errorMsg = validateEmailFormat(this.value);
                    if (errorMsg) {
                        this.classList.add('is-invalid');
                        if (emailFeedback) {
                            emailFeedback.textContent = errorMsg;
                            emailFeedback.classList.add('d-block');
                            emailFeedback.classList.remove('d-none');
                        }
                    } else {
                        this.classList.remove('is-invalid');
                        if (emailFeedback) {
                            emailFeedback.textContent = '';
                            emailFeedback.classList.remove('d-block');
                            emailFeedback.classList.add('d-none');
                        }
                    }
                });

                emailInput.addEventListener('blur', function () {
                    if (this.value.trim() !== '') {
                        const errorMsg = validateEmailFormat(this.value);
                        if (errorMsg) {
                            this.classList.add('is-invalid');
                            if (emailFeedback) {
                                emailFeedback.textContent = errorMsg;
                                emailFeedback.classList.add('d-block');
                                emailFeedback.classList.remove('d-none');
                            }
                        }
                    }
                });
            }

            if (form) {
                form.addEventListener('submit', function (e) {
                    let hasError = false;
                    let firstInvalid = null;

                    if (emailInput) {
                        const errorMsg = validateEmailFormat(emailInput.value);
                        if (errorMsg) {
                            hasError = true;
                            emailInput.classList.add('is-invalid');
                            if (emailFeedback) {
                                emailFeedback.textContent = errorMsg;
                                emailFeedback.classList.add('d-block');
                                emailFeedback.classList.remove('d-none');
                            }
                            if (!firstInvalid) firstInvalid = emailInput;
                        }
                    }

                    if (passwordInput && passwordInput.value === '') {
                        hasError = true;
                        passwordInput.classList.add('is-invalid');
                        if (passwordFeedback) {
                            passwordFeedback.textContent = @json(__('auth.js.password_required'));
                            passwordFeedback.classList.add('d-block');
                            passwordFeedback.classList.remove('d-none');
                        }
                        if (!firstInvalid) firstInvalid = passwordInput;
                    }

                    if (confirmPasswordInput) {
                        const confirmVal = confirmPasswordInput.value;
                        const passwordVal = passwordInput ? passwordInput.value : '';
                        if (confirmVal === '') {
                            hasError = true;
                            confirmPasswordInput.classList.add('is-invalid');
                            if (confirmPasswordFeedback) {
                                confirmPasswordFeedback.textContent = @json(__('auth.js.password_confirmation_required'));
                                confirmPasswordFeedback.classList.add('d-block');
                                confirmPasswordFeedback.classList.remove('d-none');
                            }
                            if (!firstInvalid) firstInvalid = confirmPasswordInput;
                        } else if (confirmVal !== passwordVal) {
                            hasError = true;
                            confirmPasswordInput.classList.add('is-invalid');
                            if (confirmPasswordFeedback) {
                                confirmPasswordFeedback.textContent = @json(__('auth.js.password_confirmation_mismatch'));
                                confirmPasswordFeedback.classList.add('d-block');
                                confirmPasswordFeedback.classList.remove('d-none');
                            }
                            if (!firstInvalid) firstInvalid = confirmPasswordInput;
                        }
                    }

                    if (hasError) {
                        e.preventDefault();
                        if (firstInvalid) firstInvalid.focus();
                        return false;
                    }

                    const now = new Date();
                    const localISO = new Date(now.getTime() - (now.getTimezoneOffset() * 60000)).toISOString().slice(0, 19).replace('T', ' ');
                    const deviceTimeInput = document.getElementById('register_device_time');
                    if (deviceTimeInput) {
                        deviceTimeInput.value = localISO;
                    }
                });

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        function (position) {
                            const latInput = document.getElementById('register_latitude');
                            const lngInput = document.getElementById('register_longitude');
                            if (latInput) latInput.value = position.coords.latitude;
                            if (lngInput) lngInput.value = position.coords.longitude;
                        },
                        function (error) {
                            console.warn('Geolocation warning:', error.message);
                        },
                        { timeout: 5000 }
                    );
                }
            }
        });
    </script>
@endsection

