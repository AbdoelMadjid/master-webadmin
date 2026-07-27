<!--begin::Modal - Petunjuk Operasional Manajemen Role-->
<div class="modal fade" id="kt_modal_roles_help" tabindex="-1" aria-hidden="true">
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
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Role Management' : 'Petunjuk Operasional: Manajemen Role' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Role-Based Access Control (RBAC), user role configuration, and permission assignment' : 'Panduan lengkap pengelolaan role pengguna dan matriks hak akses sistem berbasis RBAC' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & RBAC Architecture
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>Role Management Module</strong> implements Role-Based Access Control (RBAC) powered by Spatie Laravel Permission. A <strong>Role</strong> is a collection of access permissions (Create, Read, Update, Delete, or Custom actions) assigned to user accounts to control feature availability across the application.
                            </p>
                        </div>

                        <!--Section 2: Architecture & Side Drawer-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Core System Roles vs Custom Roles & Side Drawer
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Core System Roles:</strong> Protected system anchors (<code>Master</code> & <code>Admin</code>) protected against deletion.</li>
                                <li class="mb-2"><strong>Custom Roles:</strong> Dynamic user-created roles (e.g., <code>Editor</code>, <code>Operator</code>, <code>Auditor</code>).</li>
                                <li class="mb-2"><strong>Permission Grouping:</strong> Modules and permissions mapped directly to each role.</li>
                                <li><strong>Interactive Side Drawer Inspector:</strong> Clicking any permission summary badge or module badge in the table opens a right-side offcanvas drawer displaying all permissions grouped by module with a live search filter and quick Edit action.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Create New Role:</strong> Click <span class="badge badge-primary">+ Add Role</span>, enter the role name, check permissions, and click <strong>Save</strong>.</li>
                                <li class="mb-2"><strong>Inspect via Side Drawer:</strong> Click the permission summary badge or module badges in the Datatable to open the Side Drawer and review all assigned permissions categorized by module.</li>
                                <li class="mb-2"><strong>Edit Role Permissions:</strong> Click <span class="badge badge-light-primary text-primary">Edit</span> (or click <strong>Edit</strong> inside the Side Drawer) to adjust role permissions in the matrix modal.</li>
                                <li class="mb-2"><strong>Open Access Matrix:</strong> Click <span class="badge badge-light-primary text-primary">Matrix</span> to open the full Role Access Matrix page.</li>
                                <li><strong>Delete Custom Role:</strong> Click <span class="badge badge-light-danger text-danger">Delete</span> to remove a custom role.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Protected Core Anchor:</strong> The <code>Master</code> role is protected from deletion and lockout.</li>
                                <li class="mb-2"><strong>Safe Deletion Unlinking:</strong> Deleting a role revokes permissions from users without deleting user accounts.</li>
                                <li><strong>Immediate Authorization Update:</strong> Permission changes take effect on active sessions upon page refresh.</li>
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
                                Gambaran Umum & Arsitektur RBAC
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Manajemen Role</strong> mengelola sistem hak akses berbasis peran (RBAC) menggunakan Spatie Laravel Permission. <strong>Role (Peran)</strong> adalah kumpulan izin akses (Create, Read, Update, Delete, atau aksi khusus) yang diberikan kepada pengguna untuk mengontrol akses fitur di seluruh aplikasi.
                            </p>
                        </div>

                        <!--Section 2: Architecture & Side Drawer-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Role Inti Sistem vs Role Kustom & Side Drawer
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Role Inti Sistem:</strong> Role fondasi utama (<code>Master</code> & <code>Admin</code>) yang dilindungi agar tidak dapat dihapus.</li>
                                <li class="mb-2"><strong>Role Kustom:</strong> Role dinamis yang dibuat pengguna (contoh: <code>Editor</code>, <code>Operator</code>, <code>Auditor</code>).</li>
                                <li class="mb-2"><strong>Pengelompokan Permission:</strong> Modul dan perizinan yang dipetakan langsung ke setiap role.</li>
                                <li><strong>Panel Samping (Side Drawer) Interaktif:</strong> Mengklik badge ringkasan perizinan atau badge modul pada tabel akan membuka panel samping kanan (*Offcanvas Side Drawer*) yang menampilkan seluruh hak akses terkelompok per modul lengkap dengan filter pencarian real-time dan tombol Edit cepat.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengelolaan Role
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Menambah Role Baru:</strong> Klik tombol <span class="badge badge-primary">+ Tambah Role</span>, isikan nama role, centang perizinan, lalu klik <strong>Simpan</strong>.</li>
                                <li class="mb-2"><strong>Meninjau Hak Akses via Side Drawer:</strong> Klik badge ringkasan perizinan atau badge modul pada tabel untuk membuka Side Drawer dan meninjau rincian perizinan per modul.</li>
                                <li class="mb-2"><strong>Mengubah Role & Perizinan:</strong> Klik <span class="badge badge-light-primary text-primary">Edit</span> (atau tombol <strong>Edit</strong> di dalam Side Drawer) untuk memperbarui perizinan role di form modal.</li>
                                <li class="mb-2"><strong>Matriks Hak Akses:</strong> Klik <span class="badge badge-light-primary text-primary">Matrix</span> untuk membuka halaman penuh Matriks Hak Akses Role.</li>
                                <li><strong>Menghapus Role Kustom:</strong> Klik <span class="badge badge-light-danger text-danger">Hapus</span> untuk menghapus role kustom.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Proteksi Role Inti:</strong> Role <code>Master</code> dilindungi penuh dari penghapusan dan penguncian akses.</li>
                                <li class="mb-2"><strong>Pencabutan Aman:</strong> Menghapus role mencabut perizinan dari pengguna tanpa menghapus akun pengguna.</li>
                                <li><strong>Pembaruan Otorisasi Real-Time:</strong> Perubahan perizinan langsung berlaku pada sesi aktif setelah muat ulang halaman.</li>
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
<!--end::Modal - Petunjuk Operasional Manajemen Role-->
