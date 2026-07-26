<!--begin::Modal - Petunjuk Operasional Matriks Hak Akses Role-->
<div class="modal fade" id="kt_modal_akses_role_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-shield-tick fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Role Access Matrix' : 'Petunjuk Operasional: Matriks Hak Akses Role' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Complete operational guide for managing Spatie role permission matrix' : 'Panduan operasional lengkap pengolahan matriks izin fitur per role pengguna' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Permission Matrix
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>Role Access Rights Matrix</strong> page allows administrators to visually configure feature access for each user role. Every checkbox in the matrix corresponds to a specific Spatie permission attached to the selected role.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Role Permission Matrix Hierarchy
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Role Selection:</strong> Select a role (e.g., <code>Master</code>, <code>Admin</code>, <code>User</code>) to load its active permissions.</li>
                                <li class="mb-2"><strong>CRUD Action Checkboxes:</strong> Manage <code>Create</code>, <code>Read</code>, <code>Update</code>, and <code>Delete</code> rights per module.</li>
                                <li><strong>Module Row Shortcut:</strong> Toggle entire row permissions on or off with a single click.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Select Target Role:</strong> Click a role item from the left sidebar list to load its current active permissions.</li>
                                <li class="mb-2"><strong>Toggle Permissions:</strong> Check or uncheck individual CRUD permissions per module row.</li>
                                <li class="mb-2"><strong>Row Shortcut:</strong> Use the row toggle switch to select or deselect all CRUD permissions for a module in 1 click.</li>
                                <li><strong>Save Matrix Changes:</strong> Click <span class="badge badge-primary">Save Changes</span> to persist permission updates.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Master Role Protection:</strong> Core permissions for the <code>Master</code> superadmin role are protected against accidental lockout.</li>
                                <li class="mb-2"><strong>Live Refresh:</strong> Permission matrix updates take effect immediately for active user sessions upon page refresh.</li>
                                <li><strong>Search Filter:</strong> Use the matrix search box to quickly locate specific module names.</li>
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
                                Gambaran Umum & Matriks Perizinan
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                Halaman <strong>Matriks Hak Akses Role</strong> memungkinkan administrator mengatur izin akses fitur untuk setiap role pengguna secara visual. Setiap centang pada matriks terhubung langsung dengan permission Spatie pada role terpilih.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Hirarki & Komponen Matriks Role
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pemilihan Role:</strong> Memilih role (contoh: <code>Master</code>, <code>Admin</code>, <code>User</code>) untuk memuat matriks perizinan aktif.</li>
                                <li class="mb-2"><strong>Centang Aksi CRUD:</strong> Mengatur hak akses <code>Create</code>, <code>Read</code>, <code>Update</code>, dan <code>Delete</code> per modul.</li>
                                <li><strong>Pintas Baris Modul:</strong> Mengaktifkan atau mematikan seluruh izin baris modul dalam 1 klik.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengaturan Hak Akses
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pilih Role Target:</strong> Klik item role di daftar sidebar kiri untuk memuat matriks perizinan aktif.</li>
                                <li class="mb-2"><strong>Centang Izin Individual:</strong> Centang atau hapus centang izin CRUD pada tiap baris modul.</li>
                                <li class="mb-2"><strong>Pintas Baris Modul:</strong> Gunakan switch toggle di sebelah kiri baris modul untuk memilih seluruh izin modul sekaligus.</li>
                                <li><strong>Simpan Perubahan Matriks:</strong> Klik tombol <span class="badge badge-primary">Simpan Perubahan</span> untuk menyimpan pembaruan.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Proteksi Role Master:</strong> Izin utama untuk role <code>Master</code> dilindungi agar tidak dapat dimatikan secara tidak sengaja.</li>
                                <li class="mb-2"><strong>Pembaruan Real-Time:</strong> Perubahan matriks perizinan langsung berlaku bagi sesi pengguna aktif setelah halaman diperbarui.</li>
                                <li><strong>Pencarian Cepat:</strong> Gunakan kotak pencarian matriks untuk menemukan nama modul secara cepat.</li>
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
<!--end::Modal - Petunjuk Operasional Matriks Hak Akses Role-->
