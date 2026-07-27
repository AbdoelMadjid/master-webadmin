@auth
    @php
        $authUser = auth()->user();
        $userAvatar = getUserAvatarUrl($authUser);
        $userName = $authUser->name ?? 'User';
        $userEmail = $authUser->email ?? '';
    @endphp

    <!--begin::Lock Screen Overlay-->
    <div id="kt_lock_screen_overlay" class="position-fixed top-0 start-0 w-100 h-100 d-none justify-content-center align-items-center"
        style="z-index: 99999; background: rgba(15, 23, 42, 0.88); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); transition: all 0.3s ease-in-out;">
        
        <div class="card shadow-lg border-0 rounded-4 mw-450px w-100 mx-4 p-8 bg-body">
            <div class="card-body p-0 text-center">
                <!--begin::Branding Icon / Avatar-->
                <div class="position-relative d-inline-block mb-6">
                    <div class="symbol symbol-100px symbol-circle border border-4 border-warning shadow-sm">
                        <img src="{{ $userAvatar }}" alt="{{ $userName }}" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                    </div>
                    <span class="position-absolute bottom-0 end-0 p-2 bg-warning rounded-circle border border-2 border-body me-1 mb-1" title="Locked">
                        <i class="ki-duotone ki-lock text-white fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </span>
                </div>
                <!--end::Branding Icon / Avatar-->

                <!--begin::Title & User Info-->
                <h2 class="fw-bolder text-gray-900 mb-1">{{ $userName }}</h2>
                <div class="text-muted fw-semibold fs-6 mb-6">{{ $userEmail }}</div>
                <!--end::Title & User Info-->

                <!--begin::Alert Container-->
                <div id="lock_screen_alert" class="alert alert-danger d-none align-items-center p-3 mb-6 rounded text-start">
                    <i class="ki-duotone ki-shield-cross fs-2x text-danger me-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <div class="d-flex flex-column">
                        <span id="lock_screen_alert_text" class="fw-semibold fs-7"></span>
                    </div>
                </div>
                <!--end::Alert Container-->

                <!--begin::Unlock Form-->
                <form id="kt_lock_screen_form" onsubmit="window.unlockScreen(event)">
                    @csrf
                    <div class="mb-6 position-relative text-start">
                        <label class="form-label fw-bold text-gray-700 fs-7 mb-2">
                            {{ app()->getLocale() == 'en' ? 'Enter Password to Unlock' : 'Masukkan Password untuk Buka Kunci' }}
                        </label>
                        <div class="position-relative">
                            <input type="password" id="lock_screen_password" name="password"
                                class="form-control form-control-lg form-control-solid pe-12"
                                placeholder="{{ app()->getLocale() == 'en' ? 'Your password...' : 'Password Anda...' }}"
                                required autocomplete="current-password" />
                            
                            <button type="button" class="btn btn-icon btn-sm btn-active-color-primary position-absolute top-50 end-0 translate-middle-y me-2"
                                onclick="toggleLockPasswordVisibility()">
                                <i id="lock_password_eye_icon" class="ki-duotone ki-eye fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" id="lock_screen_submit_btn" class="btn btn-warning w-100 fw-bold fs-6 py-3 min-h-45px shadow-xs">
                        <span class="indicator-label">
                            <i class="ki-duotone ki-key fs-3 me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Unlock Screen' : 'Buka Kunci Layar' }}
                        </span>
                        <span class="indicator-progress">
                            {{ app()->getLocale() == 'en' ? 'Verifying...' : 'Memverifikasi...' }}
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </form>
                <!--end::Unlock Form-->

                <!--begin::Sign Out Link-->
                <div class="mt-6 pt-4 border-top">
                    <form method="POST" action="{{ route('logout') }}" id="lock_screen_logout_form">
                        @csrf
                        <a href="javascript:void(0)" onclick="document.getElementById('lock_screen_logout_form').submit()"
                            class="text-gray-600 text-hover-danger fw-semibold fs-7 d-inline-flex align-items-center gap-1">
                            <i class="ki-duotone ki-exit-right fs-4 text-gray-500"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Sign out as different user' : 'Bukan Anda? Keluar / Switch Account' }}
                        </a>
                    </form>
                </div>
                <!--end::Sign Out Link-->
            </div>
        </div>
    </div>
    <!--end::Lock Screen Overlay-->

    <script>
        (function() {
            window.isScreenLocked = false;

            // Fungsi Membuka Modal Lock Screen
            window.triggerLockScreen = function() {
                var overlay = document.getElementById('kt_lock_screen_overlay');
                var passwordInput = document.getElementById('lock_screen_password');
                var alertBox = document.getElementById('lock_screen_alert');
                var submitBtn = document.getElementById('lock_screen_submit_btn');

                if (overlay) {
                    overlay.classList.remove('d-none');
                    overlay.classList.add('d-flex');
                    window.isScreenLocked = true;

                    if (submitBtn) {
                        submitBtn.removeAttribute('data-kt-indicator');
                        submitBtn.disabled = false;
                    }
                    if (alertBox) alertBox.classList.add('d-none');
                    if (passwordInput) {
                        passwordInput.value = '';
                        setTimeout(function() { passwordInput.focus(); }, 150);
                    }
                }
            };

            // Toggle Password Eye Visibility
            window.toggleLockPasswordVisibility = function() {
                var input = document.getElementById('lock_screen_password');
                var icon = document.getElementById('lock_password_eye_icon');
                if (!input || !icon) return;

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.className = 'ki-duotone ki-eye-slash fs-2';
                } else {
                    input.type = 'password';
                    icon.className = 'ki-duotone ki-eye fs-2';
                }
            };

            // Process Unlock Form Submission via AJAX
            window.unlockScreen = function(e) {
                if (e) e.preventDefault();

                var submitBtn = document.getElementById('lock_screen_submit_btn');
                var passwordInput = document.getElementById('lock_screen_password');
                var alertBox = document.getElementById('lock_screen_alert');
                var alertText = document.getElementById('lock_screen_alert_text');

                if (!passwordInput || !passwordInput.value.trim()) return;

                // Turn on Metronic button indicator
                if (submitBtn) {
                    submitBtn.setAttribute('data-kt-indicator', 'on');
                    submitBtn.disabled = true;
                }

                if (alertBox) alertBox.classList.add('d-none');

                fetch("{{ route('lock-screen.unlock') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify({
                        password: passwordInput.value
                    })
                })
                .then(function(response) {
                    return response.json().then(function(data) {
                        return { status: response.status, body: data };
                    });
                })
                .then(function(result) {
                    if (submitBtn) {
                        submitBtn.removeAttribute('data-kt-indicator');
                        submitBtn.disabled = false;
                    }

                    if (result.status === 200 && result.body.success) {
                        var overlay = document.getElementById('kt_lock_screen_overlay');
                        if (overlay) {
                            overlay.classList.remove('d-flex');
                            overlay.classList.add('d-none');
                        }
                        window.isScreenLocked = false;
                        passwordInput.value = '';

                        if (typeof window.resetIdleTimer === 'function') {
                            window.resetIdleTimer();
                        }

                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.success(result.body.message);
                        }
                    } else {
                        var errorMsg = result.body.message || (result.body.errors && result.body.errors.password ? result.body.errors.password[0] : 'Unlock failed');
                        if (alertBox && alertText) {
                            alertText.textContent = errorMsg;
                            alertBox.classList.remove('d-none');
                            alertBox.classList.add('d-flex');
                        }
                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.error(errorMsg);
                        }
                    }
                })
                .catch(function(err) {
                    if (submitBtn) {
                        submitBtn.removeAttribute('data-kt-indicator');
                        submitBtn.disabled = false;
                    }
                    var errStr = "{{ app()->getLocale() == 'en' ? 'Connection error. Please try again.' : 'Terjadi kesalahan koneksi. Silakan coba lagi.' }}";
                    if (alertBox && alertText) {
                        alertText.textContent = errStr;
                        alertBox.classList.remove('d-none');
                        alertBox.classList.add('d-flex');
                    }
                });
            };

            // Mencegah penutupan modal dengan Esc ketika screen locked
            document.addEventListener('keydown', function(e) {
                if (window.isScreenLocked && e.key === 'Escape') {
                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        })();
    </script>
@endauth
