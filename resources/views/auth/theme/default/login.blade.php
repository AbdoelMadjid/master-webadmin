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

            #togglePasswordBtn, #toggleRegisterPasswordBtn, #toggleResetPasswordBtn, #toggleRegPasswordBtn {
                z-index: 10;
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
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
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login') }}" method="POST">
                            @csrf
                            <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                            <input type="hidden" name="latitude" id="login_latitude">
                            <input type="hidden" name="longitude" id="login_longitude">
                            <input type="hidden" name="device_time" id="login_device_time">

                            @if (session('status'))
                                @php
                                    $isWarningStatus = \Illuminate\Support\Str::contains(session('status'), ['berakhir', 'keluar', 'terkeluar', '15 menit', 'expired', 'ended']);
                                @endphp
                                <div class="alert {{ $isWarningStatus ? 'alert-warning' : 'alert-success' }} d-flex align-items-center p-4 mb-8" role="alert">
                                    <i class="ki-duotone {{ $isWarningStatus ? 'ki-information-5 text-warning' : 'ki-check-circle text-success' }} fs-2x me-3">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <span>{{ session('status') }}</span>
                                    </div>
                                </div>
                            @elseif (request()->query('reason') === 'idle')
                                <div class="alert alert-warning d-flex align-items-center p-4 mb-8" role="alert">
                                    <i class="ki-duotone ki-information-5 fs-2x text-warning me-3">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <span>{{ __('auth.idle_session_expired') }}</span>
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

                            @if (session('warning'))
                                <div class="alert alert-warning d-flex align-items-center p-4 mb-8" role="alert">
                                    <i class="ki-duotone ki-information-5 fs-2x text-warning me-3">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <span>{{ session('warning') }}</span>
                                    </div>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger d-flex align-items-start p-4 mb-8" role="alert">
                                    <i class="ki-duotone ki-cross-circle fs-2x text-danger me-3 mt-1">
                                        <span class="path1"></span><span class="path2"></span>
                                    </i>
                                    <div class="d-flex flex-column">
                                        <strong class="mb-1">{{ __('auth.login_failed') }}</strong>
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
                                <h1 class="text-gray-900 fw-bolder mb-3">{{ __('auth.title') }}</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6">
                                    {{ __('auth.subtitle') }}
                                </div>
                                <!--end::Subtitle=-->
                            </div>
                            <!--begin::Heading-->

                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="email" id="emailInput" placeholder="{{ __('auth.email') }}" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror" />
                                <div id="emailFieldError" class="invalid-feedback @error('email') d-block @enderror">
                                    @error('email') {{ $message }} @enderror
                                </div>
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-3">
                                <!--begin::Password-->
                                <div class="position-relative mb-1">
                                    <input type="password" id="passwordInput" placeholder="{{ __('auth.password_label') }}" name="password" required autocomplete="current-password"
                                        class="form-control bg-transparent @error('password') is-invalid @enderror" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" id="togglePasswordBtn" style="cursor: pointer;">
                                        <i class="ki-duotone ki-eye-slash fs-2" id="togglePasswordIconSlash">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                        </i>
                                        <i class="ki-duotone ki-eye fs-2 d-none" id="togglePasswordIconEye">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <div id="passwordFieldError" class="invalid-feedback @error('password') d-block @enderror">
                                    @error('password') {{ $message }} @enderror
                                </div>
                                <!--end::Password-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <label class="form-check form-check-inline me-0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me" />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Remember Me</span>
                                </label>
                                <!--begin::Link-->
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="link-primary">{{ __('auth.forgot_password') }}</a>
                                @endif
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">{{ __('auth.submit') }}</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">{{ __('auth.please_wait') }}
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->
                            <!--begin::Sign up-->
                            @if (Route::has('register'))
                                <div class="text-gray-500 text-center fw-semibold fs-6">
                                    {{ __('auth.not_member_yet') }}
                                    <a href="{{ route('register') }}" class="link-primary">{{ __('auth.sign_up') }}</a>
                                </div>
                            @endif
                            <!--end::Sign up-->
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
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('kt_sign_in_form');
            const emailInput = document.getElementById('emailInput');
            const emailFeedback = document.getElementById('emailFieldError');
            const passwordInput = document.getElementById('passwordInput');
            const passwordFeedback = document.getElementById('passwordFieldError');
            const togglePasswordBtn = document.getElementById('togglePasswordBtn');
            const togglePasswordIconSlash = document.getElementById('togglePasswordIconSlash');
            const togglePasswordIconEye = document.getElementById('togglePasswordIconEye');

            // Toggle Show/Hide Password
            if (togglePasswordBtn && passwordInput) {
                togglePasswordBtn.addEventListener('click', function () {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    if (isPassword) {
                        if (togglePasswordIconSlash) togglePasswordIconSlash.classList.add('d-none');
                        if (togglePasswordIconEye) togglePasswordIconEye.classList.remove('d-none');
                    } else {
                        if (togglePasswordIconSlash) togglePasswordIconSlash.classList.remove('d-none');
                        if (togglePasswordIconEye) togglePasswordIconEye.classList.add('d-none');
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
            }

            if (passwordInput) {
                passwordInput.addEventListener('input', handlePasswordValidation);
                passwordInput.addEventListener('focus', handlePasswordValidation);
                passwordInput.addEventListener('blur', handlePasswordValidation);
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
                            emailInput.focus();
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
                        if (emailInput && !emailInput.classList.contains('is-invalid')) {
                            passwordInput.focus();
                        }
                    }

                    if (hasError) {
                        e.preventDefault();
                        return false;
                    }

                    const now = new Date();
                    const localISO = new Date(now.getTime() - (now.getTimezoneOffset() * 60000)).toISOString().slice(0, 19).replace('T', ' ');
                    const deviceTimeInput = document.getElementById('login_device_time');
                    if (deviceTimeInput) {
                        deviceTimeInput.value = localISO;
                    }
                });

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        function (position) {
                            const latInput = document.getElementById('login_latitude');
                            const lngInput = document.getElementById('login_longitude');
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

