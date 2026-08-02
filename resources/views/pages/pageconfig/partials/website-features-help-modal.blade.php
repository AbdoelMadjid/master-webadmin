<div class="modal fade" id="kt_modal_website_features_help" tabindex="-1" aria-hidden="true">
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
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Website Features' : 'Petunjuk Operasional: Fitur Website' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'System guidelines for toggling public website features (Intake, Language, Login, Search & Social Media) and bulk management controls' : 'Panduan sistem & pengoperasion sakelar visibilitas fitur publik website (Intake, Bahasa, Login, Pencarian & Sosial Media) serta tombol aksi masal' }}
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
                                The <strong>Website Features Toggle Engine</strong> provides instant control over the visibility of 5 public website components. Administrators can toggle individual features ON or OFF, or use bulk action buttons in the toolbar to enable or disable all features simultaneously.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                2. Architecture & 5 Managed Features
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <code>intake_button</code>: Apply for Fall Intake button located on topbar left.
                                </li>
                                <li class="mb-2">
                                    <code>language_switcher</code>: Language selector dropdown (Indonesian & English) on topbar right.
                                </li>
                                <li class="mb-2">
                                    <code>login_button</code>: Sign In / Portal Access button on topbar right.
                                </li>
                                <li class="mb-2">
                                    <code>search_bar</code>: Header search popover form located next to login button.
                                </li>
                                <li>
                                    <code>social_media</code>: Footer social media icon links (Twitter, Facebook, Instagram, YouTube, LinkedIn).
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
                                    <strong>Toggling Individual Feature Visibility:</strong> Flip the switch in the status column next to any feature to instantly enable or hide it via AJAX.
                                </li>
                                <li class="mb-2">
                                    <strong>Bulk Action Toolbar Controls (Enable/Disable All):</strong> Use the toolbar action buttons <span class="badge badge-success">Enable All Features</span> or <span class="badge badge-danger">Disable All Features</span> in the table header to update status for all 5 public components at once with a single confirmation modal.
                                </li>
                                <li class="mb-2">
                                    <strong>Simulating Status:</strong> Switch to the <span class="badge badge-primary">Live Interface Preview</span> tab to inspect the simulated rendering status of topbar and footer components.
                                </li>
                                <li>
                                    <strong>Verifying Public Website:</strong> Open the public website home page to observe instant real-time visibility changes.
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
                                    <strong>Table Naming Rule:</strong> Feature toggle records reside strictly in the <code>web_features</code> database table.
                                </li>
                                <li class="mb-2">
                                    <strong>Bulk Confirmation Safeguard:</strong> Mass status changes require explicit administrator confirmation via SweetAlert modal to prevent accidental disabling of all public elements.
                                </li>
                                <li class="mb-2">
                                    <strong>Cache Optimization:</strong> Feature states are cached for performance and automatically invalidated upon toggling.
                                </li>
                                <li>
                                    <strong>Fallback Protection:</strong> If database connection drops, features safely default to active visibility to avoid broken layouts.
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
                                <strong>Engine Sakelar Fitur Website</strong> menyediakan kontrol langsung atas status tampil/sembunyi 5 komponen publik website. Administrator dapat mengubah sakelar fitur secara individu atau menggunakan tombol aksi masal pada toolbar untuk mengaktifkan maupun menonaktifkan seluruh fitur sekaligus.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                2. Arsitektur & 5 Fitur Terkelola
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <code>intake_button</code>: Tombol pendaftaran intake di sebelah kiri topbar.
                                </li>
                                <li class="mb-2">
                                    <code>language_switcher</code>: Dropdown pemilih bahasa (Indonesia & English) di topbar.
                                </li>
                                <li class="mb-2">
                                    <code>login_button</code>: Tombol akses masuk ke portal/dashboard admin.
                                </li>
                                <li class="mb-2">
                                    <code>search_bar</code>: Form pencarian popover di sebelah kanan tombol login.
                                </li>
                                <li>
                                    <code>social_media</code>: Daftar ikon sosial media (Twitter, Facebook, Instagram, YouTube, LinkedIn) di footer.
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
                                    <strong>Mengubah Status Fitur Per-Komponen:</strong> Geser sakelar switch pada kolom visibilitas untuk mengaktifkan atau menyembunyikan fitur secara instan via AJAX.
                                </li>
                                <li class="mb-2">
                                    <strong>Tombol Kontrol Aksi Masal Toolbar (Aktifkan/Nonaktifkan Fitur):</strong> Klik tombol aksi cepat <span class="badge badge-success">Aktifkan</span> atau <span class="badge badge-danger">Nonaktifkan</span> pada header tabel untuk mengubah status visibilitas 5 komponen publik sekaligus setelah konfirmasi pop-up dialog.
                                </li>
                                <li class="mb-2">
                                    <strong>Memeriksa Simulasi:</strong> Buka tab <span class="badge badge-primary">Preview Live Tampilan Fitur</span> untuk melihat status visual komponen topbar dan footer.
                                </li>
                                <li>
                                    <strong>Verifikasi Website Publik:</strong> Buka halaman website utama untuk memastikan fitur tampil atau tersembunyi dengan rapi.
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
                                    <strong>Penamaan Tabel:</strong> Data sakelar fitur tersimpan pada tabel database <code>web_features</code>.
                                </li>
                                <li class="mb-2">
                                    <strong>Proteksi Konfirmasi Aksi Masal:</strong> Perubahan status masal membutuhkan konfirmasi eksplisit admin via modal SweetAlert untuk mencegah ketidaksengajaan penonaktifan seluruh fitur publik.
                                </li>
                                <li class="mb-2">
                                    <strong>Optimasi Cache:</strong> Status fitur disimpan pada cache untuk performa maksimal dan otomatis di-refresh saat sakelar diubah.
                                </li>
                                <li>
                                    <strong>Fallback Proteksi:</strong> Jika koneksi database terputus, sistem secara aman menggunakan status default aktif agar layout tetap utuh.
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
