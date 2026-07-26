<!--begin::Modal - Permissions Operational Guide-->
<div class="modal fade" id="kt_modal_permissions_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: Permission Management
                            @else
                                Petunjuk Operasional: Manajemen Permission
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Complete guide for module permission architecture and batch CRUD generation.
                            @else
                                Panduan lengkap arsitektur perizinan modul dan generator 4 CRUD 1-klik.
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
                                <i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Permission Architecture (1 Module 1 Row)
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module adopts the <strong>1 Module 1 Row</strong> table architecture. Instead of cluttering the system with hundreds of loose rows, permissions are grouped per application module (e.g. <code>users</code>, <code>roles</code>, <code>backup-db</code>) using standard action naming: <code>create</code>, <code>read</code>, <code>update</code>, and <code>delete</code>.
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
                                        <strong>1-Click CRUD Module Generator:</strong> Click the <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-flash text-white me-1"></i> + Modul CRUD (Praktis)</span> button, enter the new module key (e.g., <code>reports</code>), and the system will automatically create 4 permissions at once: <code>create reports</code>, <code>read reports</code>, <code>update reports</code>, and <code>delete reports</code>.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Add Single Custom Permission:</strong> Click the <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-plus me-1"></i> Single Permission</span> button to add non-standard custom actions (e.g., <code>export users</code>, <code>approve reset-password</code>).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Edit Module Permissions:</strong> Click the <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-pencil me-1"></i> Edit</span> button on any module row to rename or batch-update its permission actions.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Filtering & Quick Search:</strong> Use the <strong>Filter Role</strong> dropdown to display permissions assigned to a specific role or find unassigned modules instantly.
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
                                <li><strong>Code Naming Convention:</strong> Permission names should follow <code>action module</code> pattern in lower_snake_case for seamless Blade evaluation: <code>@can('read users') ... @endcan</code>.</li>
                                <li><strong>Automatic Cache Invalidation:</strong> Any permission creation, update, or deletion automatically purges the Spatie permission cache in real-time.</li>
                                <li><strong>Role Connection Protection:</strong> Deleting a permission automatically unlinks it from all associated roles without crashing active user sessions.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Permission (1 Modul 1 Baris)
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mengusung arsitektur tabel <strong>1 Modul 1 Baris</strong>. Dibandingkan menampilkan ratusan baris acak, seluruh perizinan dikelompokkan secara teratur per modul aplikasi (contoh: <code>users</code>, <code>roles</code>, <code>backup-db</code>) menggunakan standar nama aksi: <code>create</code>, <code>read</code>, <code>update</code>, dan <code>delete</code>.
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
                                        <strong>Generator Modul CRUD 1-Klik:</strong> Klik tombol <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-flash text-white me-1"></i> + Modul CRUD (Praktis)</span>, masukkan nama modul baru (contoh: <code>reports</code>), dan sistem akan otomatis membuat 4 permission sekaligus: <code>create reports</code>, <code>read reports</code>, <code>update reports</code>, dan <code>delete reports</code>.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Tambah Single Permission (Aksi Khusus):</strong> Klik tombol <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-plus me-1"></i> Single Permission</span> untuk menambahkan aksi kustom non-standar (contoh: <code>export users</code>, <code>approve reset-password</code>).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Mengubah / Edit Modul:</strong> Klik tombol <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-pencil me-1"></i> Edit</span> pada baris modul untuk memperbarui nama modul atau batch update perizinan di dalamnya.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Filter & Pencarian Cepat:</strong> Gunakan dropdown <strong>Filter Role</strong> untuk menampilkan perizinan yang terhubung ke role tertentu atau menemukan modul yang belum ditugaskan.
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
                                <li><strong>Konvensi Penamaan di Kode:</strong> Gunakan format <code>aksi nama_modul</code> agar pemanggilan di Blade konsisten: <code>@can('read users') ... @endcan</code>.</li>
                                <li><strong>Pembersihan Cache Otomatis:</strong> Setiap penambahan, pembaruan, atau penghapusan permission akan otomatis membersihkan cache perizinan Spatie secara real-time.</li>
                                <li><strong>Proteksi Keterhubungan Role:</strong> Menghapus permission akan secara aman memutuskan hubungan dengan role terkait tanpa mengganggu sesi login pengguna.</li>
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
<!--end::Modal - Permissions Operational Guide-->
