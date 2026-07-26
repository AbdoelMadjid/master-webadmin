<!--begin::Modal - Petunjuk Operasional Hak Akses Spesifik Pengguna-->
<div class="modal fade" id="kt_modal_akses_user_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-profile-user fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: User Direct Access Rights' : 'Petunjuk Operasional: Hak Akses Spesifik Pengguna' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Operational guide for assigning direct individual permissions to specific user accounts' : 'Panduan operasional penugasan perizinan khusus langsung kepada individu pengguna' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Direct Permissions
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                In Spatie Laravel Permission, permissions are typically inherited from assigned <strong>Roles</strong>. However, this module allows administrators to grant or revoke specific <strong>Direct Permissions</strong> to an individual user without modifying their primary base role.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Direct Permission Principles
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Role Inherited Permissions:</strong> Permissions inherited from assigned roles are automatically active without duplicate direct assignment.</li>
                                <li class="mb-2"><strong>Direct Permission Override:</strong> Specific exceptions can be granted directly to individual accounts.</li>
                                <li><strong>Audit Badge Indicators:</strong> Users without direct permissions display a clean <code>Inherited from Role</code> badge.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Locate Target User:</strong> Search or filter the user account list to find the target user.</li>
                                <li class="mb-2"><strong>Open Access Modal:</strong> Click <span class="badge badge-light-primary text-primary">Manage Access</span> on the target user row.</li>
                                <li class="mb-2"><strong>Assign Direct Permissions:</strong> Check the direct permissions to grant specifically to this user.</li>
                                <li><strong>Save Updates:</strong> Click <span class="badge badge-primary">Save Changes</span> to persist user direct access settings.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Role Precedence:</strong> Inherited role permissions always remain active; direct permissions supplement role permissions.</li>
                                <li class="mb-2"><strong>Selective Use:</strong> Use direct user permissions for temporary project leads or special exceptions.</li>
                                <li><strong>Audit Transparency:</strong> Direct permission assignments are stored distinctly for security auditing.</li>
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
                                Gambaran Umum & Hak Akses Langsung
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                Dalam Spatie Laravel Permission, izin fitur secara alami diwarisi dari <strong>Role</strong> yang ditugaskan. Namun, modul ini memungkinkan administrator menambahkan atau mencabut <strong>Hak Akses Langsung (Direct Permissions)</strong> secara khusus kepada individu pengguna tanpa harus merubah role dasar pengguna tersebut.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Prinsip Hak Akses Langsung
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Warisan Permission Role:</strong> Izin yang diwarisi dari Role otomatis aktif tanpa perlu dicentang ulang secara langsung.</li>
                                <li class="mb-2"><strong>Pengecualian Khusus:</strong> Hak akses khusus dapat ditugaskan langsung ke akun individu.</li>
                                <li><strong>Indikator Badge Audit:</strong> Pengguna tanpa izin khusus menampilkan badge <code>Diwarisi dari Role</code>.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengelolaan Hak Akses User
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Cari Pengguna Target:</strong> Gunakan kotak pencarian atau daftar tabel untuk menemukan akun pengguna target.</li>
                                <li class="mb-2"><strong>Buka Modal Hak Akses:</strong> Klik tombol <span class="badge badge-light-primary text-primary">Kelola Hak Akses</span> pada baris pengguna target.</li>
                                <li class="mb-2"><strong>Penugasan Izin Langsung:</strong> Centang hak akses khusus yang ingin diberikan secara langsung kepada pengguna.</li>
                                <li><strong>Simpan Perubahan:</strong> Klik <span class="badge badge-primary">Simpan Perubahan</span> untuk menyimpan pembaruan ke basis data.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Preseden Role:</strong> Permission role tetap aktif secara otomatis; permission langsung bertindak sebagai suplemen tambahan.</li>
                                <li class="mb-2"><strong>Penggunaan Selektif:</strong> Gunakan hak akses langsung hanya untuk penugasan penanggung jawab proyek sementara.</li>
                                <li><strong>Transparansi Audit:</strong> Penugasan permission langsung disimpan secara terpisah demi kepatuhan audit keamanan.</li>
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
<!--end::Modal - Petunjuk Operasional Hak Akses Spesifik Pengguna-->
