@php
    $authUser = auth()->user();
    $isDeactivatePending = ($authUser?->status === 'deactivate_pending');
@endphp

<!--begin::Deactivate Account / Danger Zone-->
<div class="card h-100 mb-5 mb-xl-10 border border-danger border-dashed">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0 text-danger">
                <i class="ki-duotone ki-trash-square fs-2 text-danger me-2">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                </i> Nonaktifkan Akun / Deaktivasi
            </h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div id="kt_account_deactivate" class="collapse show">
        <div class="card-body border-top p-9">
            @if($isDeactivatePending)
                <!--begin::Notice: Deactivation Request Pending-->
                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                    <i class="ki-duotone ki-time fs-2tx text-warning me-4"><span class="path1"></span><span class="path2"></span></i>
                    <div class="d-flex flex-stack flex-grow-1">
                        <div class="fw-semibold">
                            <h4 class="text-gray-900 fw-bold">Pengajuan Nonaktifkan Akun Sedang Diproses</h4>
                            <div class="fs-6 text-gray-700">
                                Anda telah mengajukan penonaktifan akun ke Admin. Pengajuan Anda saat ini sedang menunggu persetujuan dan tindakan verifikasi oleh Administrator.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Notice-->

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-warning fw-semibold" id="btn_cancel_deactivate_request" action-url="{{ route('profil-pengguna.keamanan.cancel-deactivate') }}">
                        <span class="indicator-label"><i class="ki-duotone ki-cross-circle fs-2 me-1"><span class="path1"></span><span class="path2"></span></i> Batalkan Pengajuan Nonaktifkan Akun</span>
                        <span class="indicator-progress">Memproses... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            @else
                <!--begin::Notice: Deactivation Available-->
                <div class="notice d-flex bg-light-danger rounded border-danger border border-dashed mb-9 p-6">
                    <i class="ki-duotone ki-information-5 fs-2tx text-danger me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <div class="d-flex flex-stack flex-grow-1">
                        <div class="fw-semibold">
                            <h4 class="text-gray-900 fw-bold">Anda Ingin Menonaktifkan Akun Ini?</h4>
                            <div class="fs-6 text-gray-700">
                                Pengajuan penonaktifan akun akan dikirimkan ke Admin untuk diproses. Setelah disetujui oleh Admin, akun Anda akan dinonaktifkan dan Anda tidak dapat login kembali.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Notice-->

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-danger fw-semibold" data-bs-toggle="modal" data-bs-target="#modal_confirm_deactivate_account">
                        <i class="ki-duotone ki-cross-circle fs-2 me-1"><span class="path1"></span><span class="path2"></span></i> Ajukan Nonaktifkan Akun
                    </button>
                </div>
            @endif
        </div>
    </div>
    <!--end::Content-->
</div>
<!--end::Deactivate Account-->

@if(!$isDeactivatePending)
<!--begin::Modal Konfirmasi Deaktivasi Akun-->
<div class="modal fade" id="modal_confirm_deactivate_account" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold text-gray-900 mb-0">Konfirmasi Pengajuan Nonaktifkan Akun</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="top" title="Tutup Modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form id="form_profil_keamanan_deactivate" action="{{ route('profil-pengguna.keamanan.deactivate') }}" method="POST">
                @csrf
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="text-center mb-9">
                        <div class="symbol symbol-75px symbol-circle mb-5 bg-light-danger">
                            <span class="symbol-label">
                                <i class="ki-duotone ki-shield-cross fs-3x text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </div>
                        <h3 class="fs-2 text-gray-900 fw-bold mb-2">Ajukan Penonaktifan Akun ke Admin?</h3>
                        <div class="text-gray-500 fw-semibold fs-6">
                            Demi keamanan, silakan masukkan password akun Anda untuk mengonfirmasi pengajuan ini ke Admin.
                        </div>
                    </div>

                    <div class="mb-6 fv-row">
                        <label class="form-label required fw-semibold fs-6">Password Konfirmasi</label>
                        <div class="input-group input-group-solid input-group-lg">
                            <input type="password" name="password" id="input_deactivate_password" class="form-control form-control-lg form-control-solid" placeholder="Masukkan password akun Anda" required />
                            <span class="input-group-text cursor-pointer btn-toggle-deactivate-password" data-bs-toggle="tooltip" data-bs-placement="top" title="Tampilkan / Sembunyikan Password">
                                <i class="ki-duotone ki-eye fs-2 toggle-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer flex-center">
                    <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger" id="btn_confirm_deactivate">
                        <span class="indicator-label"><i class="ki-duotone ki-paper-plane fs-2 me-1"><span class="path1"></span><span class="path2"></span></i> Kirim Pengajuan Ke Admin</span>
                        <span class="indicator-progress">Memproses... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal Konfirmasi Deaktivasi Akun-->
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Toggle Password Visibility in Modal
        const toggleBtn = document.querySelector('.btn-toggle-deactivate-password');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function () {
                const input = document.getElementById('input_deactivate_password');
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
        }

        // Handle Form Submit Deactivation Request
        const formDeactivate = document.getElementById('form_profil_keamanan_deactivate');
        if (formDeactivate) {
            formDeactivate.addEventListener('submit', function (e) {
                e.preventDefault();

                const submitBtn = document.getElementById('btn_confirm_deactivate');
                if (submitBtn) {
                    submitBtn.setAttribute('data-kt-indicator', 'on');
                    submitBtn.disabled = true;
                }

                const formData = new FormData(formDeactivate);

                fetch(formDeactivate.action, {
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
                        const modalEl = document.getElementById('modal_confirm_deactivate_account');
                        if (modalEl && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                            const modalInstance = bootstrap.Modal.getInstance(modalEl);
                            if (modalInstance) modalInstance.hide();
                        }

                        if (typeof SwalHelper !== 'undefined' && SwalHelper.success) {
                            SwalHelper.success(data.message || 'Pengajuan nonaktifkan akun berhasil dikirim ke Admin.');
                        } else if (typeof Swal !== 'undefined') {
                            Swal.fire({ text: data.message, icon: 'success', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                        }

                        setTimeout(function () {
                            window.location.reload();
                        }, 1200);
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
                            SwalHelper.error(data.message || 'Gagal mengirim pengajuan.');
                        } else if (typeof Swal !== 'undefined') {
                            Swal.fire({ text: data.message || 'Gagal mengirim pengajuan.', icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
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
        }

        // Handle Cancel Deactivation Request
        const btnCancel = document.getElementById('btn_cancel_deactivate_request');
        if (btnCancel) {
            btnCancel.addEventListener('click', function () {
                const actionUrl = this.getAttribute('action-url');
                if (!actionUrl) return;

                btnCancel.setAttribute('data-kt-indicator', 'on');
                btnCancel.disabled = true;

                fetch(actionUrl, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(async (response) => {
                    const data = await response.json();
                    btnCancel.removeAttribute('data-kt-indicator');
                    btnCancel.disabled = false;

                    if (response.ok && data.success) {
                        if (typeof SwalHelper !== 'undefined' && SwalHelper.success) {
                            SwalHelper.success(data.message || 'Pengajuan nonaktifkan akun telah dibatalkan.');
                        } else if (typeof Swal !== 'undefined') {
                            Swal.fire({ text: data.message, icon: 'success', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                        }

                        setTimeout(function () {
                            window.location.reload();
                        }, 1200);
                    } else {
                        if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                            SwalHelper.error(data.message || 'Gagal membatalkan pengajuan.');
                        } else if (typeof Swal !== 'undefined') {
                            Swal.fire({ text: data.message || 'Gagal membatalkan pengajuan.', icon: 'error', buttonsStyling: false, confirmButtonText: 'OK', customClass: { confirmButton: 'btn btn-primary' } });
                        }
                    }
                })
                .catch((err) => {
                    btnCancel.removeAttribute('data-kt-indicator');
                    btnCancel.disabled = false;
                    if (typeof SwalHelper !== 'undefined' && SwalHelper.error) {
                        SwalHelper.error('Terjadi kesalahan jaringan atau server.');
                    }
                });
            });
        }
    });
</script>
