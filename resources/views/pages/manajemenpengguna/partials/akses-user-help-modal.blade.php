<!--begin::Modal - Akses User Operational Guide-->
<div class="modal fade" id="kt_modal_akses_user_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: User Direct Access Rights
                            @else
                                Petunjuk Operasional: Hak Akses Spesifik Pengguna
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Guide for assigning individual direct permissions to specific user accounts.
                            @else
                                Panduan operasional penugasan perizinan khusus langsung kepada individu pengguna.
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
                                <i class="ki-duotone ki-profile-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Overview & Direct Permissions Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                In Spatie Laravel Permission, permissions are typically inherited from assigned <strong>Roles</strong>. However, this module allows administrators to grant or revoke specific <strong>Direct Permissions</strong> to an individual user without modifying their primary base role.
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
                                        <strong>Locate Target User:</strong> Use the search box or table list to find the target user account.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Open Access Modal:</strong> Click the <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-pencil me-1"></i> Kelola Hak Akses</span> button on the target user row.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Assign Direct Permissions:</strong> Check the direct permissions to grant specifically to this user or uncheck permissions to remove direct access.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Save Updates:</strong> Click <strong>Simpan Perubahan</strong> to persist user direct access settings into the database.
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
                                <li><strong>Precedence & Role Inherited Permissions:</strong> Permissions inherited from assigned Roles are automatically active and do not need to be assigned again as direct permissions.</li>
                                <li><strong>Inherited vs Direct Badges:</strong> Users with no direct permissions display <span class="badge badge-light-secondary text-gray-600">Diwarisi dari Role</span> badge indicating clean role inheritance.</li>
                                <li><strong>Audit Tracing:</strong> Use direct user permissions sparingly for exceptions (e.g. temporary project leads) to maintain clean system audit trails.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-profile-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Overview & Arsitektur Hak Akses Langsung
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Dalam Spatie Laravel Permission, izin fitur secara alami diwarisi dari <strong>Role</strong> yang ditugaskan. Namun, modul ini memungkinkan administrator menambahkan atau mencabut <strong>Hak Akses Langsung (Direct Permissions)</strong> secara khusus kepada individu pengguna tanpa harus merubah role dasar pengguna tersebut.
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
                                        <strong>Cari Pengguna Target:</strong> Gunakan kotak pencarian atau daftar tabel untuk menemukan akun pengguna yang ingin dikelola.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Buka Modal Hak Akses:</strong> Klik tombol <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-pencil me-1"></i> Kelola Hak Akses</span> pada baris pengguna target.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Penugasan Izin Langsung:</strong> Centang hak akses khusus yang ingin diberikan secara langsung, atau hapus centang izin untuk mencabut akses langsung.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Simpan Perubahan:</strong> Klik <strong>Simpan Perubahan</strong> untuk mengupdate hak akses langsung pengguna ke basis data.
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
                                <li><strong>Hirarki Warisan Role:</strong> Hak akses yang sudah diwarisi dari Role aktif secara otomatis dan tidak perlu dicentang ulang sebagai hak akses langsung.</li>
                                <li><strong>Pembeda Badge Warisan:</strong> Pengguna tanpa izin khusus akan menampilkan badge <span class="badge badge-light-secondary text-gray-600">Diwarisi dari Role</span> sebagai penanda warisan role yang bersih.</li>
                                <li><strong>Efisiensi Audit:</strong> Gunakan hak akses langsung hanya untuk pengecualian khusus (contoh: pj proyek sementara) agar struktur audit tetap teratur.</li>
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
<!--end::Modal - Akses User Operational Guide-->
