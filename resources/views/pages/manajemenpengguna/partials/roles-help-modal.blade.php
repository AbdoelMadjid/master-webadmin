<!--begin::Modal - Roles Operational Guide-->
<div class="modal fade" id="kt_modal_roles_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: Role Management
                            @else
                                Petunjuk Operasional: Manajemen Role
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Complete guide for managing system user roles and permission matrix.
                            @else
                                Panduan lengkap pengelolaan role pengguna dan matriks hak akses sistem.
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
                                <i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Role Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module handles Role-Based Access Control (RBAC) using Spatie Laravel Permission. A <strong>Role</strong> is a collection of access permissions (Create, Read, Update, Delete, or Custom actions) assigned to user accounts to control feature availability across the application.
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
                                        <strong>Create New Role:</strong> Click the <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-plus text-white me-1"></i> Add Role</span> button, specify a unique role name (e.g., <code>Editor</code>, <code>Operator</code>), check the required permissions in the module matrix, and click <strong>Save</strong>.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Edit Role & Permissions:</strong> Click the <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-pencil me-1"></i> Edit</span> button on a role card or table row to modify its name or adjust specific CRUD permissions in the pop-up modal.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Access Rights Matrix:</strong> Click the <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-key me-1"></i> Matrix</span> button to navigate to the full interactive Role Access Rights Matrix page (<code>/manajemenpengguna/akses-role</code>).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Delete Custom Role:</strong> Click the <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-trash me-1"></i> Delete</span> button to remove a custom role. System core roles (<code>Master</code> & <code>Admin</code>) are protected against accidental deletion.
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
                                <li><strong>Protected Core Roles:</strong> The <code>Master</code> and <code>Admin</code> roles are essential system anchors and cannot be deleted.</li>
                                <li><strong>Assigned Users:</strong> Deleting a role will automatically revoke that role from assigned users, but the user accounts themselves will remain intact.</li>
                                <li><strong>Real-time Authorization:</strong> Permission updates take effect immediately for active user sessions upon page refresh.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Role
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mengelola sistem hak akses berbasis peran (RBAC) menggunakan Spatie Laravel Permission. <strong>Role (Peran)</strong> adalah kumpulan izin akses (Create, Read, Update, Delete, atau aksi khusus) yang diberikan kepada pengguna untuk mengontrol akses fitur di seluruh aplikasi.
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
                                        <strong>Menambah Role Baru:</strong> Klik tombol <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-plus text-white me-1"></i> Tambah Role</span>, isikan nama role unik (contoh: <code>Editor</code>, <code>Operator</code>), centang hak akses per modul pada matriks, lalu klik <strong>Simpan</strong>.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Mengubah Role & Hak Akses:</strong> Klik tombol <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-pencil me-1"></i> Edit</span> pada card role atau baris tabel untuk mengubah nama role atau memperbarui centang izin CRUD di form modal popup.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Matriks Hak Akses Terpusat:</strong> Klik tombol <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-key me-1"></i> Matrix</span> untuk berpindah ke halaman penuh Matriks Hak Akses Role (<code>/manajemenpengguna/akses-role</code>).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Menghapus Role Kustom:</strong> Klik tombol <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-trash me-1"></i> Hapus</span> untuk menghapus role kustom. Role inti sistem (<code>Master</code> & <code>Admin</code>) dilindungi dan tidak dapat dihapus.
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
                                <li><strong>Role Inti Dilindungi:</strong> Role <code>Master</code> dan <code>Admin</code> adalah fondasi utama akses sistem dan tidak dapat dihapus.</li>
                                <li><strong>Pengguna Terhubung:</strong> Menghapus role akan mencabut role tersebut dari pengguna terkait secara otomatis, namun akun pengguna tetap aman.</li>
                                <li><strong>Pembaruan Real-Time:</strong> Perubahan matriks hak akses langsung berlaku bagi sesi pengguna aktif setelah halaman diperbarui.</li>
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
<!--end::Modal - Roles Operational Guide-->
