<!--begin::Modal - Users Operational Guide-->
<div class="modal fade" id="kt_modal_users_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded">
            <!--begin::Modal Header-->
            <div class="modal-header pb-0 border-0 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <div class="symbol symbol-40px symbol-circle bg-light-info p-2 me-2">
                        <i class="ki-duotone ki-question text-info fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div>
                        <h3 class="modal-title fw-bold text-gray-900 fs-3 m-0">
                            @if(app()->getLocale() == 'en')
                                Operational Guide: User Directory Management
                            @else
                                Petunjuk Operasional: Manajemen Data Pengguna
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Complete operational guide for user accounts, role assignments, and Excel import.
                            @else
                                Panduan operasional lengkap akun pengguna, penugasan role, dan impor Excel.
                            @endif
                        </span>
                    </div>
                </div>

                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!--end::Modal Header-->

            <!--begin::Modal Body-->
            <div class="modal-body scroll-y px-10 pt-4 pb-8">
                @if(app()->getLocale() == 'en')
                    <!--=================== ENGLISH CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & User Directory Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module serves as the central directory for all registered system users. Each user account is assigned an avatar, a primary <strong>Role</strong>, access status (Active, Inactive, Pending Approval), and session footprint logs.
                            </p>
                        </div>
                    </div>

                    <!-- Section 2: Step-by-Step Operations -->
                    <div class="card bg-light border border-gray-300 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-gray-900 mb-3">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Step-by-Step Operational Workflow
                            </h4>
                            <div class="d-flex flex-column gap-3 fs-7 text-gray-700">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">1</span>
                                    <div>
                                        <strong>Add Single User:</strong> Click the <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-plus text-white me-1"></i></span> icon button in the table toolbar to register a new user with full details (Name, Email, Password, Role).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Bulk Excel Import:</strong> Click the <span class="badge badge-light-success text-success px-2 py-1"><i class="ki-duotone ki-file-up me-1"></i></span> import button, download the official Excel template, fill in account rows, and upload.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Bulk Assign Default Role:</strong> Click the <span class="badge badge-light-warning text-warning px-2 py-1"><i class="ki-duotone ki-shield-tick me-1"></i></span> button to automatically assign the default <code>User</code> role to accounts missing role assignments.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Account Actions (Edit, Impersonate, Deactivate):</strong> Use row action buttons to edit account details, switch avatar, activate/deactivate accounts, or perform admin impersonation.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Best Practices & Safeguards -->
                    <div class="card bg-light-warning border border-warning border-opacity-30">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-warning mb-2">
                                <i class="ki-duotone ki-information-5 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Key Rules & Important Notes
                            </h4>
                            <ul class="text-gray-700 fs-7 mb-0 ps-5">
                                <li><strong>Unique Email Invariant:</strong> Email addresses must be unique across all user accounts in the database.</li>
                                <li><strong>Protected Master Account:</strong> The main <code>Master</code> superadmin account cannot be deactivated or deleted.</li>
                                <li><strong>Impersonation Safeguard:</strong> Leaving impersonation mode automatically restores the original admin session safely.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Data Pengguna
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini berfungsi sebagai direktori terpusat untuk seluruh akun pengguna sistem yang terdaftar. Setiap akun dilengkapi dengan avatar profil, penugasan <strong>Role Utama</strong>, status akses (Aktif, Non-Aktif, Menunggu Persetujuan), dan log sesi keaktifan.
                            </p>
                        </div>
                    </div>

                    <!-- Section 2: Step-by-Step Operations -->
                    <div class="card bg-light border border-gray-300 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-gray-900 mb-3">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Alur Operasional Langkah Demi Langkah
                            </h4>
                            <div class="d-flex flex-column gap-3 fs-7 text-gray-700">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">1</span>
                                    <div>
                                        <strong>Tambah Single User:</strong> Klik tombol ikon <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-plus text-white me-1"></i></span> pada toolbar tabel untuk mendaftarkan akun baru (Nama, Email, Kata Sandi, dan Role).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Impor Massal Excel:</strong> Klik tombol impor <span class="badge badge-light-success text-success px-2 py-1"><i class="ki-duotone ki-file-up me-1"></i></span>, unduh template Excel resmi, isi baris akun, dan unggah kembali.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Penugasan Role Massal:</strong> Klik tombol <span class="badge badge-light-warning text-warning px-2 py-1"><i class="ki-duotone ki-shield-tick me-1"></i></span> untuk secara otomatis memberikan role default <code>User</code> ke akun yang belum memiliki role.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Aksi Akun (Edit, Impersonate, Nonaktifkan):</strong> Gunakan tombol aksi di baris tabel untuk mengubah detail akun, ganti foto avatar, atur status aktif/non-aktif, atau lakukan impersonasi login.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Best Practices & Safeguards -->
                    <div class="card bg-light-warning border border-warning border-opacity-30">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-warning mb-2">
                                <i class="ki-duotone ki-information-5 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Aturan Utama & Catatan Penting
                            </h4>
                            <ul class="text-gray-700 fs-7 mb-0 ps-5">
                                <li><strong>Invarian Email Unik:</strong> Setiap alamat email pengguna harus bersifat unik di seluruh sistem.</li>
                                <li><strong>Proteksi Akun Master:</strong> Akun superadmin utama <code>Master</code> dilindungi dan tidak dapat dinonaktifkan atau dihapus.</li>
                                <li><strong>Keamanan Impersonasi:</strong> Mengakhiri mode impersonasi secara otomatis memulihkan sesi login admin utama secara aman.</li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <!--end::Modal Body-->

            <!--begin::Modal Footer-->
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light-primary fw-bold" data-bs-dismiss="modal">
                    @if(app()->getLocale() == 'en')
                        Close Guide
                    @else
                        Tutup Petunjuk
                    @endif
                </button>
            </div>
            <!--end::Modal Footer-->
        </div>
    </div>
</div>
<!--end::Modal - Users Operational Guide-->
