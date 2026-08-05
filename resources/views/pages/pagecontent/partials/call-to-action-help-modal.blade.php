<!-- Modal Petunjuk Operasional Call to Action -->
<div class="modal fade" id="kt_modal_cta_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-mouse-square fs-3x text-danger"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Pre-Footer Call to Action' : 'Petunjuk Operasional: Call to Action Pre-Footer' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Single Global Call to Action Form Configuration Guide' : 'Panduan Pengelolaan Formulir Tunggal Ajakan Bertindak di Atas Footer Website' }}
                    </div>
                </div>

                <!-- 4-Card Box Sectioning -->
                <div class="d-flex flex-column gap-6">
                    @if (app()->getLocale() == 'en')
                        <!-- Section 1: Overview -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                System Overview & Purpose
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                The <strong>Call to Action (CTA) Manager</strong> provides a single streamlined
                                configuration form to manage the global pre-footer section displayed across all public
                                website pages. Because the CTA is a single section, settings are managed directly on the
                                page without complex list tables or add/delete buttons.
                            </p>
                        </div>

                        <!-- Section 2: Architecture -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Key CTA Form Configuration Fields
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>CTA Title & Strategy Description:</strong> Main headline and
                                    lead text prompting visitor registration/contact.</li>
                                <li class="mb-2"><strong>Primary Button:</strong> Primary call to action button (e.g.
                                    "Apply Now" and target URL).</li>
                                <li class="mb-2"><strong>Secondary Button:</strong> Secondary action button (e.g.
                                    "Contact Us" and target URL).</li>
                                <li><strong>Visibility Switch:</strong> Top-right toggle to instantly enable or disable
                                    the CTA section on frontend pages.</li>
                            </ul>
                        </div>

                        <!-- Section 3: Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Edit headline titles, strategy text, and button labels directly in
                                    the page form fields.</li>
                                <li class="mb-2">Toggle the <strong>Visibility Switch</strong> at top-right to control
                                    frontend rendering.</li>
                                <li class="mb-2">Click <code>Save CTA Changes</code> at the bottom right to apply
                                    configuration updates instantly.</li>
                                <li>Visit public website pages to verify updated CTA titles and button link targets.
                                </li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                System Rules & Layout Preservation
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">When CTA is deactivated, the section is hidden and an automatic
                                    spacing margin is preserved above the footer menu.</li>
                                <li>Relative route paths (e.g. <code>website/apply-for-all-intake</code>) or absolute
                                    URLs are supported for button targets.</li>
                            </ul>
                        </div>
                    @else
                        <!-- Section 1: Overview (ID) -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                Gambaran Umum & Tujuan Sistem
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Kelola Ajakan Bertindak (CTA) Pre-Footer</strong> menyediakan formulir
                                konfigurasi tunggal yang terpusat untuk mengatur seksi ajakan pendaftaran/kontak di atas
                                footer pada semua halaman website publik. Pengaturan dikelola secara langsung pada
                                halaman tanpa perlu tabel daftar atau tombol tambah/hapus.
                            </p>
                        </div>

                        <!-- Section 2: Architecture (ID) -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Field Konfigurasi Utama Formulir CTA
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>Judul & Teks Deskripsi Strategi:</strong> Kalimat ajakan
                                    utama untuk pengunjung website.</li>
                                <li class="mb-2"><strong>Tombol Utama (Primary):</strong> Tombol aksi primer (misal:
                                    "Daftar Sekarang" & URL target).</li>
                                <li class="mb-2"><strong>Tombol Sekunder (Secondary):</strong> Tombol aksi sekunder
                                    (misal: "Hubungi Kami" & URL target).</li>
                                <li><strong>Sakelar Visibilitas:</strong> Tombol switch di pojok kanan atas untuk
                                    mengaktifkan/menonaktifkan seksi CTA di website.</li>
                            </ul>
                        </div>

                        <!-- Section 3: Workflow (ID) -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Langkah Operasional Perangkat
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Edit judul, teks deskripsi, dan label/URL tombol secara langsung pada
                                    field formulir di halaman.</li>
                                <li class="mb-2">Atur <strong>Sakelar Visibilitas</strong> di pojok kanan atas untuk
                                    menampilkan atau menyembunyikan CTA.</li>
                                <li class="mb-2">Klik <code>Simpan Perubahan CTA</code> di kanan bawah untuk menyimpan
                                    konfigurasi secara cepat.</li>
                                <li>Periksa halaman website publik untuk memverifikasi perubahan teks dan link tombol
                                    CTA.</li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards (ID) -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                Aturan Sistem & Tata Letak
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Saat CTA dinonaktifkan, seksi CTA disembunyikan dan jarak margin
                                    visual sebelum footer tetap terjaga rapi.</li>
                                <li>Path route relatif (misal: <code>website/apply-for-all-intake</code>) atau URL
                                    lengkap didukung untuk target tombol.</li>
                            </ul>
                        </div>
                    @endif
                </div>

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
