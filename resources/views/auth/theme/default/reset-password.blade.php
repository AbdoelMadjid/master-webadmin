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

            #toggleResetPasswordBtn, #togglePasswordBtn {
                z-index: 10;
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - New password -->
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
                        <form class="form w-100" novalidate="novalidate" id="kt_new_password_form" action="{{ route('password.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    {{ __('auth.reset_password_title') }}
                                </h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-6">
                                    {{ __('auth.reset_password_subtitle') }}
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->

                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="email" id="resetEmailInput" placeholder="{{ __('auth.email') }}" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror" />
                                <div id="resetEmailFieldError" class="invalid-feedback @error('email') d-block @enderror">
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
                                        <input id="resetPasswordInput" class="form-control bg-transparent @error('password') is-invalid @enderror" type="password" placeholder="{{ __('auth.new_password') }}"
                                            name="password" required autocomplete="new-password" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" id="toggleResetPasswordBtn" style="cursor: pointer;">
                                            <i class="ki-duotone ki-eye-slash fs-2" id="toggleResetIconSlash">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                            </i>
                                            <i class="ki-duotone ki-eye fs-2 d-none" id="toggleResetIconEye">
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
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
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
                                <input type="password" placeholder="{{ __('auth.confirm_new_password') }}" name="password_confirmation" required
                                    autocomplete="new-password" class="form-control bg-transparent @error('password_confirmation') is-invalid @enderror" />
                                @error('password_confirmation')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                <!--end::Repeat Password-->
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Action-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_new_password_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">{{ __('auth.submit_reset_password') }}</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">{{ __('auth.please_wait') }}
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Action-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">
                                <a href="{{ route('login') }}" class="link-primary fw-semibold">{{ __('auth.back_to_login') }}</a>
                            </div>
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
        <!--end::Authentication - New password-->
    </div>
    <!--end::Root-->
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('kt_new_password_form');
            const emailInput = document.getElementById('resetEmailInput');
            const emailFeedback = document.getElementById('resetEmailFieldError');
            const passwordInput = document.getElementById('resetPasswordInput');
            const togglePasswordBtn = document.getElementById('toggleResetPasswordBtn');
            const toggleIconSlash = document.getElementById('toggleResetIconSlash');
            const toggleIconEye = document.getElementById('toggleResetIconEye');

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
            }

            if (form && emailInput) {
                form.addEventListener('submit', function (e) {
                    const errorMsg = validateEmailFormat(emailInput.value);
                    if (errorMsg) {
                        e.preventDefault();
                        emailInput.classList.add('is-invalid');
                        if (emailFeedback) {
                            emailFeedback.textContent = errorMsg;
                            emailFeedback.classList.add('d-block');
                            emailFeedback.classList.remove('d-none');
                        }
                        emailInput.focus();
                        return false;
                    }
                });
            }
        });
    </script>
@endsection

