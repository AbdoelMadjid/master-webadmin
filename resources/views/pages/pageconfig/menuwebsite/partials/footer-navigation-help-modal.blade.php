<div class="modal fade" id="kt_modal_footer_navigation_help" tabindex="-1" aria-hidden="true">
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
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Web Footer Navigation' : 'Petunjuk Operasional: Navigasi Footer Website' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'System guidelines & operational instructions for managing 4-column website footer links' : 'Panduan sistem & tata cara operasional pengelolaan menu navigasi 4 kolom footer website' }}
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
                                The <strong>Web Footer Navigation Engine</strong> enables dynamic administration of the 4-column footer link section rendered at the bottom of the public website. Administrators can manage links starting from <code>Future Students</code> down to <code>Campus Safety</code>, with optional linking to items in Main Navigation.
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
                                    <strong>Footer Navigation List:</strong> Tabular overview of all active and inactive footer links with column filters (Columns 1-4), main navigation relation badges, order indices, and quick status switches.
                                </li>
                                <li>
                                    <strong>4-Column Footer Preview:</strong> Grid simulation displaying the exact 4-column structure rendered on the public website footer.
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
                                    <strong>Adding Footer Item:</strong> Click <span class="badge badge-primary">Add Navigation</span>, select target footer column (1-4), optionally pick a Main Navigation item to auto-populate title & URL, set custom labels, and specify order.
                                </li>
                                <li class="mb-2">
                                    <strong>Editing Footer Item:</strong> Click the edit icon (<i class="ki-duotone ki-pencil text-primary fs-7"></i>) to modify column placement, target URL, or display titles.
                                </li>
                                <li class="mb-2">
                                    <strong>Status Toggle:</strong> Flip the switch in the status column to instantly activate or hide links on the public footer.
                                </li>
                                <li>
                                    <strong>Deleting Footer Item:</strong> Click the delete icon (<i class="ki-duotone ki-trash text-danger fs-7"></i>) and confirm the deletion prompt.
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
                                    <strong>Table Naming Rule:</strong> Footer navigation records strictly reside in the <code>web_footer_navigations</code> database table.
                                </li>
                                <li class="mb-2">
                                    <strong>Foreign Key Integrity:</strong> Relational link <code>main_navigation_id</code> is set to null if the parent main navigation record is deleted.
                                </li>
                                <li>
                                    <strong>Column Boundaries:</strong> Links MUST be assigned to valid columns between 1 and 4 for clean responsive rendering.
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
                                <strong>Engine Navigasi Footer Website</strong> menyediakan kontrol dinamis atas 4 kolom link navigasi di bagian bawah (footer) website publik. Modul ini memungkinkan administrator mengelola link mulai dari <code>Future Students</code> hingga <code>Campus Safety</code>, serta dapat dihubungkan ke item Navigasi Utama.
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
                                    <strong>Daftar Navigasi Footer:</strong> Tampilan tabel data lengkap dengan penyaring per kolom (Kolom 1-4), indikator relasi ke navigasi utama, urutan tampil, dan toggle status aktif cepat.
                                </li>
                                <li>
                                    <strong>Preview Tampilan 4 Kolom Footer:</strong> Simulasi visual kisi 4 kolom yang menampilkan struktur persis yang terender di footer website publik.
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
                                    <strong>Menambah Item Footer:</strong> Klik tombol <span class="badge badge-primary">Tambah Navigasi</span>, pilih kolom target (1-4), opsional pilih relasi ke item Navigasi Utama (otomatis mengisi judul & URL), atau sesuaikan judul custom.
                                </li>
                                <li class="mb-2">
                                    <strong>Mengedit Item Footer:</strong> Klik ikon edit (<i class="ki-duotone ki-pencil text-primary fs-7"></i>) pada baris data untuk memperbarui nomor kolom, URL, atau judul.
                                </li>
                                <li class="mb-2">
                                    <strong>Mengubah Status Aktif:</strong> Geser sakelar di kolom status untuk mengaktifkan atau menyembunyikan tautan di footer.
                                </li>
                                <li>
                                    <strong>Menghapus Item Footer:</strong> Klik ikon hapus (<i class="ki-duotone ki-trash text-danger fs-7"></i>) dan konfirmasi dialog hapus.
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
                                    <strong>Penamaan Tabel:</strong> Seluruh data navigasi footer tersimpan dalam tabel database <code>web_footer_navigations</code>.
                                </li>
                                <li class="mb-2">
                                    <strong>Integritas Relasi:</strong> Kunci asing <code>main_navigation_id</code> diatur ke null jika data induk navigasi utama dihapus.
                                </li>
                                <li>
                                    <strong>Batasan Kolom:</strong> Tautan HARUS dialokasikan pada kolom valid antara 1 hingga 4 untuk kerapihan tampilan responsif.
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
