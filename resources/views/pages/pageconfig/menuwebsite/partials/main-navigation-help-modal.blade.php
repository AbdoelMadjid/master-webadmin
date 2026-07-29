<div class="modal fade" id="kt_modal_main_navigation_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!-- Branding Header -->
                <div class="text-center mb-8">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-element-11 fs-3x text-danger">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Main Navigation Operational Guide' : 'Petunjuk Operasional Navigasi Utama Website' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Complete documentation for managing website navbar menus, mega-menu dropdowns, and link targets.' : 'Panduan lengkap pengelolaan menu navigasi utama website, dropdown mega-menu, dan susunan hirarki.' }}
                    </div>
                </div>

                @if(app()->getLocale() == 'en')
                    <!-- English Operational Content -->
                    <div class="d-flex flex-column gap-6">
                        <!-- Section 1: System Overview & Purpose -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                1. System Overview & Purpose
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                The <strong>Web Main Navigation Engine</strong> provides dynamic control over the primary header menu bar of the public website. It allows system administrators to customize top-level menu headers (such as <code>Pages</code>, <code>Programs</code>, <code>Future Students</code>, <code>Current Students</code>, <code>Faculty & Staff</code>, <code>Events</code>, and <code>Alumni</code>) as well as the multi-column mega-menu items under <code>Pages</code>.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                2. Architecture & Sub-Tab Modules
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Navigation Data List:</strong> tabular view of all active and inactive navigation links, complete with type badges (<code>Mega Menu</code>, <code>Dropdown</code>, <code>Link</code>), column tags, and quick-toggle switches.
                                </li>
                                <li class="mb-2">
                                    <strong>Hierarchy Tree View:</strong> visual tree layout illustrating parent-child node relationships and position indices.
                                </li>
                                <li>
                                    <strong>Mega Menu Layout Preview:</strong> grid view simulating the 4-column distribution rendered on the public website header for the <code>Pages</code> menu dropdown.
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3: Step-by-Step Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                3. Step-by-Step Operational Workflow
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Adding a New Item:</strong> Click the <span class="badge badge-primary">Add Navigation</span> button in the header action bar, specify both Indonesian and English titles, set target URL/Route, select menu type, parent node, and mega menu column.
                                </li>
                                <li class="mb-2">
                                    <strong>Editing Navigation:</strong> Click the edit icon (<i class="ki-duotone ki-pencil text-primary fs-7"></i>) on any row, modify values in the modal, and submit changes.
                                </li>
                                <li class="mb-2">
                                    <strong>Status Toggle:</strong> Flip the switch in the status column to instantly activate or deactivate a menu link without deleting its record.
                                </li>
                                <li>
                                    <strong>Deleting Navigation:</strong> Click the delete button (<i class="ki-duotone ki-trash text-danger fs-7"></i>) and confirm in the alert dialog.
                                </li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards & System Rules -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                4. Safeguards & System Rules
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Parent Cascading:</strong> Deleting a parent menu item will automatically cascade and delete its associated sub-menu children.
                                </li>
                                <li class="mb-2">
                                    <strong>Table Naming Convention:</strong> Database records strictly reside in the <code>web_main_navigations</code> table per system naming rules.
                                </li>
                                <li>
                                    <strong>External Links:</strong> Mark <code>is_external</code> for links pointing to external domains and set target to <code>_blank</code> to open in a new browser tab.
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!-- Indonesian Operational Content -->
                    <div class="d-flex flex-column gap-6">
                        <!-- Section 1: Overview & Purpose -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                1. Ringkasan & Tujuan Sistem
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Engine Navigasi Utama Website</strong> menyediakan kontrol dinamis atas baris menu header utama di website publik. Modul ini memungkinkan administrator sistem mengelola menu utama tingkat atas (seperti <code>Pages</code>, <code>Programs</code>, <code>Future Students</code>, <code>Current Students</code>, <code>Faculty & Staff</code>, <code>Events</code>, dan <code>Alumni</code>) serta item mega-menu multi-kolom di bawah menu <code>Pages</code>.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                2. Arsitektur & Modul Sub-Tab
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Daftar Data Navigasi:</strong> Tampilan tabel data lengkap dengan indikator tipe (<code>Mega Menu</code>, <code>Dropdown</code>, <code>Link</code>), nomor kolom mega menu, tombol toggle status aktif cepat, dan aksi edit/hapus.
                                </li>
                                <li class="mb-2">
                                    <strong>Struktur & Hirarki Menu:</strong> Tampilan pohon hirarki visual yang memperlihatkan hubungan menu induk dengan anak menu serta urutan tampilnya.
                                </li>
                                <li>
                                    <strong>Tata Letak Mega Menu:</strong> Preview simulasi grid 4 kolom tata letak mega menu <code>Pages</code> sesuai susunan yang tampil di header website utama.
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3: Step-by-Step Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                3. Alur Kerja Operasional Langkah Demi Langkah
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Menambah Navigasi Baru:</strong> Klik tombol <span class="badge badge-primary">Tambah Navigasi</span> pada action bar atas, isi judul bahasa Indonesia dan Inggris, tentukan URL/Route tujuan, pilih tipe menu, induk menu, dan posisi kolom mega menu.
                                </li>
                                <li class="mb-2">
                                    <strong>Mengubah Navigasi:</strong> Klik tombol edit (<i class="ki-duotone ki-pencil text-primary fs-7"></i>) pada baris data, perbarui informasi pada modal, lalu simpan perubahan.
                                </li>
                                <li class="mb-2">
                                    <strong>Toggle Status:</strong> Geser tombol switch pada kolom status untuk mengaktifkan atau menonaktifkan menu secara langsung tanpa menghapus data.
                                </li>
                                <li>
                                    <strong>Menghapus Navigasi:</strong> Klik tombol hapus (<i class="ki-duotone ki-trash text-danger fs-7"></i>) dan konfirmasi pada dialog konfirmasi SweetAlert.
                                </li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards & System Rules -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                4. Aturan Sistem & Proteksi Data
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Cascade Induk-Anak:</strong> Menghapus menu induk secara otomatis akan menghapus seluruh sub-menu anak di bawahnya secara sistem.
                                </li>
                                <li class="mb-2">
                                    <strong>Aturan Tabel Database:</strong> Seluruh data disimpan dalam tabel ber-prefix <code>web_main_navigations</code> sesuai standar arsitektur database websitedata.
                                </li>
                                <li>
                                    <strong>Link Eksternal:</strong> Aktifkan centang <code>Tautan Eksternal</code> untuk link domain luar dan set target ke <code>_blank</code> agar terbuka di tab baru.
                                </li>
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
        </div>
    </div>
</div>
