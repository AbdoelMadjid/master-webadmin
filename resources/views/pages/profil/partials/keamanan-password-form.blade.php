<div class="card h-100 mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0 text-gray-900">
                <i class="ki-duotone ki-key fs-2 text-primary me-2">
                    <span class="path1"></span><span class="path2"></span>
                </i> Perbarui Password / Kata Sandi
            </h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div id="kt_account_signin_method" class="collapse show">
        <div class="card-body border-top p-9">
            <form id="form_profil_keamanan_password" action="{{ route('profil-pengguna.keamanan.password.update') }}" method="POST" class="form">
                @csrf
                <!-- Password Saat Ini -->
                <div class="mb-6 fv-row">
                    <label class="form-label required fw-semibold fs-6">Password Saat Ini</label>
                    <div class="input-group input-group-solid input-group-lg">
                        <input type="password" name="current_password" id="input_current_password" class="form-control form-control-lg form-control-solid" placeholder="Masukkan password saat ini" required />
                        <span class="input-group-text cursor-pointer btn-toggle-password" data-target="input_current_password" data-bs-toggle="tooltip" data-bs-placement="top" title="Tampilkan / Sembunyikan Password">
                            <i class="ki-duotone ki-eye fs-2 toggle-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </span>
                    </div>
                </div>

                <!-- Password Baru -->
                <div class="mb-6 fv-row">
                    <label class="form-label required fw-semibold fs-6">Password Baru</label>
                    <div class="input-group input-group-solid input-group-lg mb-3">
                        <input type="password" name="password" id="input_new_password" class="form-control form-control-lg form-control-solid" placeholder="Minimal 9 karakter" required />
                        <span class="input-group-text cursor-pointer btn-toggle-password" data-target="input_new_password" data-bs-toggle="tooltip" data-bs-placement="top" title="Tampilkan / Sembunyikan Password">
                            <i class="ki-duotone ki-eye fs-2 toggle-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </span>
                    </div>

                    <!-- Real-time Password Requirements Card -->
                    <div id="passwordRequirementsCard" class="card bg-light p-4 mb-3 rounded fs-7 border border-dashed">
                        <div class="fw-bold mb-2 text-gray-700">Syarat Kata Sandi:</div>
                        <div class="d-flex align-items-center mb-2" id="req-length">
                            <i class="ki-duotone ki-cross-circle text-gray-400 me-2 fs-6 req-icon"><span class="path1"></span><span class="path2"></span></i>
                            <span class="req-text text-gray-600">Harus &gt; 8 karakter</span>
                        </div>
                        <div class="d-flex align-items-center mb-2" id="req-uppercase">
                            <i class="ki-duotone ki-cross-circle text-gray-400 me-2 fs-6 req-icon"><span class="path1"></span><span class="path2"></span></i>
                            <span class="req-text text-gray-600">Mengandung huruf besar (A-Z)</span>
                        </div>
                        <div class="d-flex align-items-center mb-2" id="req-lowercase">
                            <i class="ki-duotone ki-cross-circle text-gray-400 me-2 fs-6 req-icon"><span class="path1"></span><span class="path2"></span></i>
                            <span class="req-text text-gray-600">Mengandung huruf kecil (a-z)</span>
                        </div>
                        <div class="d-flex align-items-center" id="req-number">
                            <i class="ki-duotone ki-cross-circle text-gray-400 me-2 fs-6 req-icon"><span class="path1"></span><span class="path2"></span></i>
                            <span class="req-text text-gray-600">Mengandung angka (0-9)</span>
                        </div>
                    </div>
                </div>

                <!-- Konfirmasi Password Baru -->
                <div class="mb-6 fv-row">
                    <label class="form-label required fw-semibold fs-6">Konfirmasi Password Baru</label>
                    <div class="input-group input-group-solid input-group-lg mb-3">
                        <input type="password" name="password_confirmation" id="input_confirm_password" class="form-control form-control-lg form-control-solid" placeholder="Ulangi password baru" required />
                        <span class="input-group-text cursor-pointer btn-toggle-password" data-target="input_confirm_password" data-bs-toggle="tooltip" data-bs-placement="top" title="Tampilkan / Sembunyikan Password">
                            <i class="ki-duotone ki-eye fs-2 toggle-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </span>
                    </div>

                    <!-- Real-time Confirm Password Match Card -->
                    <div id="confirmPasswordMatchCard" class="card bg-light p-4 mb-3 rounded fs-7 border border-dashed">
                        <div class="d-flex align-items-center" id="req-match">
                            <i class="ki-duotone ki-cross-circle text-gray-400 me-2 fs-6 req-icon"><span class="path1"></span><span class="path2"></span></i>
                            <span class="req-text text-gray-600">Kata sandi dan konfirmasi kata sandi cocok</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end pt-4">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn_simpan_password">
                        <span class="indicator-label"><i class="ki-duotone ki-check fs-2 me-1"></i> Perbarui Password</span>
                        <span class="indicator-progress">Memproses... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--end::Content-->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formPassword = document.getElementById('form_profil_keamanan_password');
        if (!formPassword) return;

        const currentPasswordInput = document.getElementById('input_current_password');
        const newPasswordInput = document.getElementById('input_new_password');
        const confirmPasswordInput = document.getElementById('input_confirm_password');

        // Toggle Password Visibility (Eye Icon)
        document.querySelectorAll('.btn-toggle-password').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const icon = this.querySelector('.toggle-icon');

                if (!input || !icon) return;

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('ki-eye');
                    icon.classList.add('ki-eye-slash', 'text-primary');
                } else {
                    input.type = 'password';
                    icon.classList.remove('ki-eye-slash', 'text-primary');
                    icon.classList.add('ki-eye');
                }
            });
        });

        // Update Requirement UI
        function updateRequirement(elementId, isMet) {
            const el = document.getElementById(elementId);
            if (!el) return;

            const icon = el.querySelector('.req-icon');
            const text = el.querySelector('.req-text');

            if (isMet) {
                if (icon) {
                    icon.className = 'ki-duotone ki-check-circle text-success me-2 fs-6 req-icon';
                    icon.innerHTML = '<span class="path1"></span><span class="path2"></span>';
                }
                if (text) {
                    text.className = 'req-text text-success fw-bold';
                }
            } else {
                if (icon) {
                    icon.className = 'ki-duotone ki-cross-circle text-gray-400 me-2 fs-6 req-icon';
                    icon.innerHTML = '<span class="path1"></span><span class="path2"></span>';
                }
                if (text) {
                    text.className = 'req-text text-gray-600';
                }
            }
        }

        function validatePasswordRequirementsRealtime() {
            const val = newPasswordInput.value;

            const isLengthValid = val.length > 8; // Harus > 8 karakter (min 9)
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
            const pass = newPasswordInput.value;
            const confirmPass = confirmPasswordInput.value;
            const isMatched = confirmPass.length > 0 && pass === confirmPass;

            updateRequirement('req-match', isMatched);
            return isMatched;
        }

        // Realtime Event Listeners
        newPasswordInput.addEventListener('input', function () {
            validatePasswordRequirementsRealtime();
            validatePasswordMatchRealtime();
        });

        confirmPasswordInput.addEventListener('input', function () {
            validatePasswordMatchRealtime();
        });

        // Initial check
        validatePasswordRequirementsRealtime();
        validatePasswordMatchRealtime();

        // Reset Event Listener (Tombol Batal)
        formPassword.addEventListener('reset', function () {
            setTimeout(function () {
                [currentPasswordInput, newPasswordInput, confirmPasswordInput].forEach(function (input) {
                    if (input) input.type = 'password';
                });
                document.querySelectorAll('.btn-toggle-password .toggle-icon').forEach(function (icon) {
                    icon.classList.remove('ki-eye-slash', 'text-primary');
                    icon.classList.add('ki-eye');
                });

                validatePasswordRequirementsRealtime();
                validatePasswordMatchRealtime();
            }, 10);
        });

        // AJAX Form Submit
        formPassword.addEventListener('submit', function (e) {
            e.preventDefault();

            const isReqMet = validatePasswordRequirementsRealtime();
            const isMatchMet = validatePasswordMatchRealtime();

            if (!isReqMet) {
                if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                    SwalHelper.error('Password baru belum memenuhi seluruh syarat kriteria keamanan.');
                } else if (typeof Swal !== 'undefined') {
                    Swal.fire({ text: 'Password baru belum memenuhi seluruh syarat kriteria keamanan.', icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                }
                return;
            }

            if (!isMatchMet) {
                if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                    SwalHelper.error('Konfirmasi password baru tidak cocok.');
                } else if (typeof Swal !== 'undefined') {
                    Swal.fire({ text: 'Konfirmasi password baru tidak cocok.', icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                }
                return;
            }

            const submitBtn = document.getElementById('btn_simpan_password');
            if (submitBtn) {
                submitBtn.setAttribute('data-kt-indicator', 'on');
                submitBtn.disabled = true;
            }

            const formData = new FormData(formPassword);

            fetch(formPassword.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(async (response) => {
                const data = await response.json();
                if (submitBtn) {
                    submitBtn.removeAttribute('data-kt-indicator');
                    submitBtn.disabled = false;
                }

                if (response.ok && data.success) {
                    formPassword.reset();
                    validatePasswordRequirementsRealtime();
                    validatePasswordMatchRealtime();

                    if (typeof SwalHelper !== 'undefined' && SwalHelper.success) {
                        SwalHelper.success(data.message || 'Password akun Anda berhasil diperbarui!');
                    } else if (typeof Swal !== 'undefined') {
                        Swal.fire({ text: data.message, icon: 'success', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                    }
                } else if (response.status === 422) {
                    if (typeof SwalHelper !== 'undefined' && SwalHelper.validationError) {
                        SwalHelper.validationError({ responseJSON: data });
                    } else {
                        let errors = data.errors ? Object.values(data.errors).flat().join('<br>') : (data.message || 'Validasi gagal.');
                        if (typeof Swal !== 'undefined') {
                            Swal.fire({ html: errors, icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                        }
                    }
                } else {
                    if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                        SwalHelper.error(data.message || 'Gagal memperbarui password.');
                    } else if (typeof Swal !== 'undefined') {
                        Swal.fire({ text: data.message || 'Gagal memperbarui password.', icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                    }
                }
            })
            .catch((err) => {
                if (submitBtn) {
                    submitBtn.removeAttribute('data-kt-indicator');
                    submitBtn.disabled = false;
                }
                if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                    SwalHelper.error('Terjadi kesalahan jaringan atau server.');
                }
            });
        });
    });
</script>
