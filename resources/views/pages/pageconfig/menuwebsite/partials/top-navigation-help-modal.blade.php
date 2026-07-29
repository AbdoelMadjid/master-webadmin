<div class="modal fade" id="kt_modal_top_navigation_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <!-- Modal Header -->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!-- Branding Header -->
                <div class="text-center mb-8">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-question fs-3x text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Web Top Navigation' : 'Petunjuk Operasional: Navigasi Atas Website' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'System guidelines & operational instructions for managing top header toolbar links' : 'Panduan sistem & tata cara operasional pengelolaan menu navigasi atas (topbar header) website' }}
                    </div>
                </div>

                @if(app()->getLocale() == 'en')
                    <!-- English Operational Content -->
                    <div class="d-flex flex-column gap-6">
                        <!-- Section 1: Overview & Purpose -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                1. System Overview & Purpose
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                The <strong>Web Top Navigation Engine</strong> allows administrators to dynamically configure topbar links on the public website header. This controls links starting from <code>Campus Life</code> through <code>Contacts</code> (excluding language selector and intake button).
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
                                    <strong>Navigation Data List:</strong> Tabular overview of all active and inactive top navigation links with status toggles, sort ordering, and quick edit/delete actions.
                                </li>
                                <li>
                                    <strong>Toolbar Live Preview:</strong> Visual simulation tab showing how active links appear on the dark topbar header.
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
                                    <strong>Adding Navigation:</strong> Click <span class="badge badge-primary">Add Navigation</span>, enter titles (Indonesian & English), set target route or external URL, choose target window, and specify sort order.
                                </li>
                                <li class="mb-2">
                                    <strong>Editing Navigation:</strong> Click the edit icon (<i class="ki-duotone ki-pencil text-primary fs-7"></i>) to modify link properties and update data via AJAX.
                                </li>
                                <li class="mb-2">
                                    <strong>Toggling Status:</strong> Flip the switch in the status column to immediately show or hide links on the public header.
                                </li>
                                <li>
                                    <strong>Deleting Navigation:</strong> Click the delete icon (<i class="ki-duotone ki-trash text-danger fs-7"></i>) and confirm the deletion prompt.
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
                                    <strong>Table Naming Rule:</strong> Top navigation records strictly reside in the <code>web_top_navigations</code> database table.
                                </li>
                                <li class="mb-2">
                                    <strong>Scope Limit:</strong> Excludes language selector and intake button per system rules.
                                </li>
                                <li>
                                    <strong>External Links:</strong> Check <code>is_external</code> and set target to <code>_blank</code> for external domain URLs.
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
                                <strong>Engine Navigasi Atas Website</strong> menyediakan kontrol dinamis atas baris menu topbar paling atas di header website publik. Modul ini digunakan untuk mengelola tautan navigasi mulai dari <code>Kehidupan Kampus</code> hingga <code>Kontak Kami</code> (tidak termasuk pemilih bahasa dan tombol pendaftaran online).
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
                                    <strong>Daftar Navigasi Atas:</strong> Tampilan tabel data lengkap dengan switch status aktif cepat, nomor urutan tampil, serta aksi edit/hapus.
                                </li>
                                <li>
                                    <strong>Preview Tampilan Topbar:</strong> Simulasi visual bentuk baris navigasi atas yang aktif di header website publik.
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3: Step-by-Step Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                3. Operasional Langkah Demi Langkah
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Menambah Navigasi:</strong> Klik tombol <span class="badge badge-primary">Tambah Navigasi</span>, isi judul bahasa Indonesia & Inggris, tentukan target URL/Route, pilih jenis jendela target, dan atur urutan.
                                </li>
                                <li class="mb-2">
                                    <strong>Mengedit Navigasi:</strong> Klik ikon edit (<i class="ki-duotone ki-pencil text-primary fs-7"></i>) pada baris data untuk memperbarui properti link melalui form AJAX.
                                </li>
                                <li class="mb-2">
                                    <strong>Mengubah Status Aktif:</strong> Geser sakelar di kolom status untuk mengaktifkan atau menyembunyikan tautan di header website.
                                </li>
                                <li>
                                    <strong>Menghapus Navigasi:</strong> Klik ikon hapus (<i class="ki-duotone ki-trash text-danger fs-7"></i>) dan konfirmasi dialog hapus.
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
                                    <strong>Penamaan Tabel:</strong> Seluruh data navigasi atas tersimpan dalam tabel database <code>web_top_navigations</code>.
                                </li>
                                <li class="mb-2">
                                    <strong>Batasan Cakupan:</strong> Modul ini tidak mempengaruhi komponen switch bahasa dan tombol pendaftaran online.
                                </li>
                                <li>
                                    <strong>Link Eksternal:</strong> Centang opsi <code>is_external</code> dan atur target ke <code>_blank</code> untuk tautan menuju domain di luar website utama.
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Dismiss Button -->
                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
