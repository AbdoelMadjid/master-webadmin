<!-- Modal: Petunjuk Operasional Tema Halaman Depan -->
<div class="modal fade" id="kt_modal_theme_frontpage_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!-- Branding Header -->
                <div class="text-center mb-8">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-element-11 fs-3x text-danger">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Frontpage Theme Operational Guide' : 'Petunjuk Operasional Tema Halaman Depan' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Comprehensive manual for managing, previewing, and activating website frontpage landing themes.' : 'Panduan komprehensif manajemen, pratinjau, dan aktivasi tema tampilan beranda website.' }}
                    </div>
                </div>

                <div class="d-flex flex-column gap-6">
                    <!-- Section 1: Overview -->
                    <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                        <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? '1. Module Overview & System Purpose' : '1. Gambaran Umum & Tujuan Modul' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <p class="fs-6 text-gray-700 mb-0">
                                The <strong>Frontpage Theme Management</strong> module allows system administrators to centrally control, switch, and preview themes used for the public landing page. Switching themes updates the active landing layout instantly across all public routes without needing code modifications.
                            </p>
                        @else
                            <p class="fs-6 text-gray-700 mb-0">
                                Modul <strong>Manajemen Tema Halaman Depan</strong> memungkinkan administrator sistem untuk mengelola, mengaktifkan, dan mempratinjau tema tampilan beranda publik secara terpusat. Pergantian tema secara otomatis memperbarui tampilan utama website publik tanpa memerlukan perubahan kode.
                            </p>
                        @endif
                    </div>

                    <!-- Section 2: Architecture -->
                    <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                        <h4 class="text-gray-900 fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            {{ app()->getLocale() == 'en' ? '2. System Architecture & Resolution Engine' : '2. Arsitektur Sistem & Engine Resolusi' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <ul class="fs-6 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Dynamic Resolver:</strong> <code>WebsiteTemplateService</code> queries the database table <code>theme_frontpages</code> for the currently active theme (<code>is_active = true</code>).</li>
                                <li class="mb-2"><strong>View Hierarchy:</strong> Views are dynamically loaded from <code>resources/views/theme/{slug}/home-page.blade.php</code>, with seamless fallback to <code>theme.default</code>.</li>
                                <li><strong>Isolation:</strong> Each theme operates independently within its dedicated subfolder while retaining integration with core components.</li>
                            </ul>
                        @else
                            <ul class="fs-6 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Engine Resolusi Dinamis:</strong> <code>WebsiteTemplateService</code> membaca tabel basis data <code>theme_frontpages</code> untuk menentukan tema aktif (<code>is_active = true</code>).</li>
                                <li class="mb-2"><strong>Hirarki Tampilan:</strong> Berkas tampilan dimuat secara dinamis dari <code>resources/views/theme/{slug}/home-page.blade.php</code> dengan fallback otomatis ke <code>theme.default</code>.</li>
                                <li><strong>Isolasi Tema:</strong> Setiap tema tersimpan rapi pada subfolder masing-masing tanpa mengganggu integritas komponen utama.</li>
                            </ul>
                        @endif
                    </div>

                    <!-- Section 3: Workflow -->
                    <div class="card schema-card bg-light-info border border-info p-6 rounded">
                        <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? '3. Step-by-Step Operational Workflow' : '3. Langkah-Langkah Operasional' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <ol class="fs-6 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>View Theme List:</strong> Open the <span class="badge badge-light-primary">Theme List</span> tab to review all registered frontpage themes.</li>
                                <li class="mb-2"><strong>Activate Theme:</strong> Click <span class="badge badge-primary">Set as Active Theme</span> on your desired theme card. The system will automatically mark it active and deactivate other themes.</li>
                                <li><strong>Live Preview:</strong> Switch to the <span class="badge badge-light-info">Live Preview</span> tab to inspect the rendered frontpage landing layout in real time.</li>
                            </ol>
                        @else
                            <ol class="fs-6 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Lihat Daftar Tema:</strong> Buka tab <span class="badge badge-light-primary">Daftar Tema</span> untuk melihat seluruh pilihan tema beranda yang terdaftar.</li>
                                <li class="mb-2"><strong>Aktifkan Tema:</strong> Klik tombol <span class="badge badge-primary">Aktifkan Tema Ini</span> pada kartu tema pilihan. Sistem akan secara otomatis mengaktifkan tema tersebut dan menonaktifkan tema lainnya.</li>
                                <li><strong>Pratinjau Live:</strong> Buka tab <span class="badge badge-light-info">Pratinjau Live</span> untuk mempratinjau tampilan beranda publik secara real-time.</li>
                            </ol>
                        @endif
                    </div>

                    <!-- Section 4: Safeguards -->
                    <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                        <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            {{ app()->getLocale() == 'en' ? '4. System Safeguards & Rules' : '4. Aturan System & Safeguards' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <ul class="fs-6 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Single Active Theme:</strong> Only one theme can be marked as active (<code>is_active = true</code>) at any given time.</li>
                                <li class="mb-2"><strong>Active Theme Deletion Safeguard:</strong> An active theme cannot be deleted. You must activate a different theme prior to deleting a registered theme entry.</li>
                                <li><strong>Fallback Protection:</strong> If an active theme is missing specific views, the system automatically falls back to <code>Metronic 8 Landing (default)</code>.</li>
                            </ul>
                        @else
                            <ul class="fs-6 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Single Active Theme:</strong> Hanya satu tema yang dapat berstatus aktif (<code>is_active = true</code>) dalam satu waktu.</li>
                                <li class="mb-2"><strong>Proteksi Hapus Tema Aktif:</strong> Tema yang sedang aktif tidak dapat dihapus. Anda harus mengaktifkan tema lain terlebih dahulu sebelum menghapus tema.</li>
                                <li><strong>Proteksi Fallback:</strong> Jika berkas tampilan pada tema aktif tidak ditemukan, sistem secara otomatis menggunakan fallback ke tema <code>Metronic 8 Landing (default)</code>.</li>
                            </ul>
                        @endif
                    </div>
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
