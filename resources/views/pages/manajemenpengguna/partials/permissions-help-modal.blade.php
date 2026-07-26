<!--begin::Modal - Petunjuk Operasional Manajemen Permission-->
<div class="modal fade" id="kt_modal_permissions_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-key fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Permission Management' : 'Petunjuk Operasional: Manajemen Permission' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Module permission architecture (1 Module 1 Row) and 1-Click CRUD batch generator guide' : 'Panduan lengkap arsitektur perizinan modul (1 Modul 1 Baris) dan generator 4 CRUD 1-klik' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Permission Architecture
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>Permission Management Module</strong> adopts a <strong>1 Module 1 Row</strong> table architecture. Permissions are neatly grouped per application module (e.g., <code>users</code>, <code>roles</code>, <code>backup-db</code>) with standard CRUD action permissions: <code>create</code>, <code>read</code>, <code>update</code>, and <code>delete</code>.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Permission Naming Conventions
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Standard Action Naming:</strong> Uses <code>action module</code> pattern (e.g., <code>read users</code>, <code>update roles</code>).</li>
                                <li class="mb-2"><strong>1-Click CRUD Generator:</strong> Creates 4 standard permissions (Create, Read, Update, Delete) automatically for a new module.</li>
                                <li><strong>Single Custom Permission:</strong> Add unique non-standard action permissions (e.g., <code>export users</code>).</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Generate CRUD Module:</strong> Click <span class="badge badge-primary">+ CRUD Module</span>, enter the module name (e.g., <code>reports</code>), and the system generates 4 permissions at once.</li>
                                <li class="mb-2"><strong>Add Single Permission:</strong> Click <span class="badge badge-light-primary text-primary">Single Permission</span> for custom action permissions.</li>
                                <li class="mb-2"><strong>Edit Module Permissions:</strong> Click <span class="badge badge-light-primary text-primary">Edit</span> to rename or update permission actions in batch.</li>
                                <li><strong>Filter Role Assignments:</strong> Filter by role to view mapped permissions.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Blade Gate Evaluation:</strong> Evaluate permissions in Blade views using <code>@can('read users') ... @endcan</code>.</li>
                                <li class="mb-2"><strong>Automatic Cache Invalidation:</strong> Updating permissions automatically purges the Spatie permission cache.</li>
                                <li><strong>Role Unlinking Safeguard:</strong> Deleting a permission unlinks it safely without breaking active user sessions.</li>
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
                                Gambaran Umum & Arsitektur Permission
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Manajemen Permission</strong> mengusung arsitektur tabel <strong>1 Modul 1 Baris</strong>. Perizinan dikelompokkan secara teratur per modul aplikasi (contoh: <code>users</code>, <code>roles</code>, <code>backup-db</code>) menggunakan standar nama aksi: <code>create</code>, <code>read</code>, <code>update</code>, dan <code>delete</code>.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Konvensi Penamaan Permission
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Format Penamaan Aksi:</strong> Menggunakan pola <code>aksi nama_modul</code> (contoh: <code>read users</code>, <code>update roles</code>).</li>
                                <li class="mb-2"><strong>Generator Modul 1-Klik:</strong> Membuat 4 perizinan standar (Create, Read, Update, Delete) secara otomatis untuk modul baru.</li>
                                <li><strong>Single Permission Kustom:</strong> Menambahkan izin aksi khusus non-standar (contoh: <code>export users</code>).</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengelolaan Permission
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Generator Modul CRUD:</strong> Klik tombol <span class="badge badge-primary">+ Modul CRUD (Praktis)</span>, masukkan nama modul (contoh: <code>reports</code>), dan sistem akan membuat 4 perizinan sekaligus.</li>
                                <li class="mb-2"><strong>Tambah Single Permission:</strong> Klik <span class="badge badge-light-primary text-primary">Single Permission</span> untuk membuat aksi kustom.</li>
                                <li class="mb-2"><strong>Edit Modul:</strong> Klik <span class="badge badge-light-primary text-primary">Edit</span> untuk memperbarui nama modul atau perizinan di dalamnya secara batch.</li>
                                <li><strong>Penyaringan Role:</strong> Gunakan filter role untuk melihat keterhubungan perizinan.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Evaluasi Blade Gate:</strong> Gunakan format <code>@can('read users') ... @endcan</code> pada tampilan Blade.</li>
                                <li class="mb-2"><strong>Pembersihan Cache Otomatis:</strong> Setiap pembaruan permission secara otomatis membersihkan cache perizinan Spatie.</li>
                                <li><strong>Proteksi Keterhubungan Role:</strong> Menghapus permission akan memutuskan hubungan dengan role terkait secara aman.</li>
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
<!--end::Modal - Petunjuk Operasional Manajemen Permission-->
