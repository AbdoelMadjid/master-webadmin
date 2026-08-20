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
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Password reset -->
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
                        <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" action="{{ route('password.email') }}" method="POST">
                            @csrf

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
                                    {{ __('auth.forgot_password_title') }}
                                </h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-6">
                                    {{ __('auth.forgot_password_description') }}
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input type="email" id="forgotEmailInput" placeholder="{{ __('auth.email') }}" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                                    class="form-control bg-transparent @error('email') is-invalid @enderror" />
                                <div id="forgotEmailFieldError" class="invalid-feedback @error('email') d-block @enderror">
                                    @error('email') {{ $message }} @enderror
                                </div>
                                <!--end::Email-->
                            </div>
                            <!--begin::Actions-->
                            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                                <button type="submit" id="kt_password_reset_submit" class="btn btn-primary me-4">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">{{ __('auth.send_reset_link') }}</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">{{ __('auth.please_wait') }}
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                                <a href="{{ route('login') }}" class="btn btn-light">{{ __('auth.back_to_login') }}</a>
                            </div>
                            <!--end::Actions-->
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
        <!--end::Authentication - Password reset-->
    </div>
    <!--end::Root-->
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('kt_password_reset_form');
            const emailInput = document.getElementById('forgotEmailInput');
            const emailFeedback = document.getElementById('forgotEmailFieldError');

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

