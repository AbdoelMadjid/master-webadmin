<!--begin::Modal - Menu Management Operational Guide-->
<div class="modal fade" id="kt_modal_menu_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: Dynamic Menu Management
                            @else
                                Petunjuk Operasional: Pengelolaan Menu Dinamis
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Operational guide for managing sidebar menu structure, drag-and-drop sorting, and permissions.
                            @else
                                Panduan operasional pengolahan struktur menu sidebar, drag-and-drop urutan, dan perizinan.
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
                                <i class="ki-duotone ki-abstract-14 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Centralized Menu Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module controls the dynamic sidebar navigation menu rendered across the application. Menu items are fetched directly from database tables, allowing real-time menu ordering, parent-child sub-menu nesting, status toggling, and role permission restrictions.
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
                                        <strong>Drag-and-Drop Menu Sorting:</strong> Click and hold the drag icon handle <i class="ki-duotone ki-abstract-14 me-1"><span class="path1"></span><span class="path2"></span></i> on any row to reorder menu positions. Order numbers automatically sync to the server in real-time.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Toggle Active/Inactive Status:</strong> Use the switch toggle on the right column to immediately enable or disable a menu item without deleting its data.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Map Menu Permissions:</strong> Click the <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-plus me-1"><span class="path1"></span><span class="path2"></span></i></span> button in the Permissions column to attach specific Spatie permissions required to view the menu item.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Filter Menu Hierarchy:</strong> Filter the table by category (e.g., <code>Main</code>, <code>System</code>, <code>Help</code>) or parent menu level to audit menu items.
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
                                <li><strong>Parent-Child Invariant:</strong> Disabling a main parent menu automatically hides all of its nested child sub-menus.</li>
                                <li><strong>Automatic Menu Cache Flush:</strong> Any menu ordering, status toggle, or permission change instantly flushes the global sidebar menu cache.</li>
                                <li><strong>Seeder Architecture Safeguard:</strong> Core seeder configurations remain untouched while dynamic overrides take effect smoothly.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-abstract-14 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Menu Dinamis
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mengontrol navigasi menu sidebar dinamis yang ditampilkan di seluruh aplikasi. Seluruh item menu diambil langsung dari tabel basis data, memungkinkan pengurutan urutan real-time, hierarki induk-anak (sub-menu), sakelar aktif/non-aktif, dan pembatasan perizinan role.
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
                                        <strong>Pengurutan Menu Drag-and-Drop:</strong> Klik dan tahan ikon drag handle <i class="ki-duotone ki-abstract-14 me-1"><span class="path1"></span><span class="path2"></span></i> pada baris menu untuk mengubah urutan posisi tampilan. Urutan akan tersinkronisasi otomatis ke server.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Sakelar Aktif / Non-Aktif:</strong> Gunakan switch toggle pada kolom kanan untuk secara instan mengaktifkan atau menyembunyikan item menu dari sidebar.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Pemetaan Permission Menu:</strong> Klik tombol <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-plus me-1"><span class="path1"></span><span class="path2"></span></i></span> pada kolom Permissions untuk menambahkan syarat hak akses agar menu hanya tampil bagi role yang berhak.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Penyaringan Kategori:</strong> Gunakan opsi filter berdasarkan kategori (contoh: <code>Main</code>, <code>System</code>, <code>Help</code>) untuk mempermudah peninjauan menu.
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
                                <li><strong>Invarian Induk-Anak:</strong> Menonaktifkan menu utama (induk) akan secara otomatis menyembunyikan seluruh sub-menu anak di dalamnya.</li>
                                <li><strong>Pembersihan Cache Otomatis:</strong> Setiap perubahan urutan, sakelar status, atau pemetaan perizinan akan secara instan membersihkan cache menu sidebar global.</li>
                                <li><strong>Proteksi Arsitektur Seeder:</strong> Konfigurasi seeder awal tetap terjaga bersih dan penyesuaian dinamis berlaku secara aman di atasnya.</li>
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
<!--end::Modal - Menu Management Operational Guide-->
