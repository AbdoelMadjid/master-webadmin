<!--begin::Modal - Petunjuk Operasional Manajemen Data Pengguna-->
<div class="modal fade" id="kt_modal_users_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <div class="mb-10 text-center">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-user fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: User Directory Management' : 'Petunjuk Operasional: Manajemen Data Pengguna' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'User accounts directory, role assignments, bulk Excel import, and admin impersonation guide' : 'Panduan operasional akun pengguna, penugasan role, impor Excel massal, dan impersonasi login' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & User Directory
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>User Directory Management Module</strong> serves as the central account management repository. Every user account has an avatar profile, assigned primary <strong>Role</strong>, account status (Active, Inactive, Pending), and session footprint logs.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Account Features & Utilities
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Bulk Excel Import/Export:</strong> Upload Excel files to create user accounts in batch or export directory lists.</li>
                                <li class="mb-2"><strong>Role Assignment:</strong> Assign primary roles and manage direct permissions.</li>
                                <li><strong>Admin Impersonation:</strong> Safely log in as another user for troubleshooting without requiring their password.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Add Single User:</strong> Click <span class="badge badge-primary">+ Add User</span> to register a new user account.</li>
                                <li class="mb-2"><strong>Import Excel Data:</strong> Click <span class="badge badge-light-success text-success">Import</span> to upload account spreadsheets.</li>
                                <li class="mb-2"><strong>Assign Default Role:</strong> Click <span class="badge badge-light-warning text-warning">Bulk Default Role</span> to assign roles to accounts missing roles.</li>
                                <li><strong>Manage Actions:</strong> Use row action buttons to edit account details, switch status, or start impersonation.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Unique Email Invariant:</strong> Email addresses must be unique across all user accounts.</li>
                                <li class="mb-2"><strong>Protected Master Account:</strong> The main <code>Master</code> superadmin account cannot be deactivated or deleted.</li>
                                <li><strong>Impersonation Safety:</strong> Leaving impersonation mode automatically restores the original admin session.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--Indonesian Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                Gambaran Umum & Arsitektur Data Pengguna
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Manajemen Data Pengguna</strong> berfungsi sebagai direktori terpusat untuk seluruh akun pengguna sistem. Setiap akun dilengkapi profil avatar, penugasan <strong>Role Utama</strong>, status akses (Aktif, Non-Aktif, Menunggu), dan log sesi keaktifan.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Fitur & Utilitas Akun
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Impor/Ekspor Excel Massal:</strong> Mengunggah berkas Excel untuk mendaftarkan akun secara batch atau mengekspor daftar pengguna.</li>
                                <li class="mb-2"><strong>Penugasan Role:</strong> Mengatur role utama serta mengelola perizinan langsung.</li>
                                <li><strong>Impersonasi Login:</strong> Memungkinkan admin mengakses akun pengguna lain secara aman untuk kebutuhan bantuan teknis.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengelolaan Pengguna
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Tambah Single User:</strong> Klik <span class="badge badge-primary">+ Tambah Pengguna</span> untuk mendaftarkan akun pengguna baru.</li>
                                <li class="mb-2"><strong>Impor Data Excel:</strong> Klik <span class="badge badge-light-success text-success">Impor</span> untuk mengunggah spreadsheet akun.</li>
                                <li class="mb-2"><strong>Penugasan Role Default:</strong> Klik <span class="badge badge-light-warning text-warning">Role Default Massal</span> untuk akun yang belum memiliki role.</li>
                                <li><strong>Kelola Aksi Akun:</strong> Gunakan tombol aksi baris untuk edit akun, ubah status, atau impersonasi login.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Invarian Email Unik:</strong> Setiap alamat email pengguna harus bersifat unik di seluruh sistem.</li>
                                <li class="mb-2"><strong>Proteksi Akun Master:</strong> Akun superadmin utama <code>Master</code> dilindungi dan tidak dapat dinonaktifkan atau dihapus.</li>
                                <li><strong>Keamanan Impersonasi:</strong> Keluar dari mode impersonasi otomatis memulihkan sesi login admin utama secara aman.</li>
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - Petunjuk Operasional Manajemen Data Pengguna-->
