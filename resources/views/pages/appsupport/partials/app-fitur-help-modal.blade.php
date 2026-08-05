<!--begin::Modal - Petunjuk Operasional Fitur Aplikasi-->
<div class="modal fade" id="kt_modal_app_fitur_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-toggle-on fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Dynamic Feature Flag System' : 'Petunjuk Operasional: Pengaturan Visibilitas Fitur' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Real-time feature flag, module switches, and dark-launching control guide' : 'Panduan operasional kontrol sakelar modul dan sakelar visibilitas UI secara real-time' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                System Overview & Purpose
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>App Features Visibility Module</strong> implements a real-time
                                <strong>Feature Flag / Feature Toggle</strong> architecture. Administrators can
                                dynamically show or hide UI components, sidebar menu groups, topbar navigation icons,
                                and floating drawers without modifying code or re-deploying the application.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Feature Switch Categories
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Sidebar Group:</strong> Show or hide entire sidebar menu
                                    section titles (e.g., <code>PAGES</code>, <code>APPS</code>, <code>LAYOUTS</code>,
                                    <code>HELP</code>).</li>
                                <li class="mb-2"><strong>Topbar Navbar:</strong> Toggle topbar header icons like
                                    notifications, quick access, digital clock, or locale switcher.</li>
                                <li><strong>Floating Drawer:</strong> Dynamically enable or disable floating drawer
                                    buttons like drawer help or chat widget.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Single Switch Toggle:</strong> Use the switch control on any
                                    feature row to immediately enable or disable UI elements.</li>
                                <li class="mb-2"><strong>Bulk Category Toggle:</strong> Click the bulk switch button
                                    in any category card header to turn all features within that group on or off at
                                    once.</li>
                                <li class="mb-2"><strong>Blade Helper Evaluation:</strong> In Blade templates,
                                    evaluate feature status using the global helper: <code>
                                        @if (isFeatureActive('drawer_help'))
                                            ...
                                        @endif
                                    </code>.</li>
                                <li><strong>Dark Launching:</strong> Safely deploy new modules in a hidden state, then
                                    turn them on in seconds when ready.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Emergency Kill Switch:</strong> Features encountering
                                    production issues can be disabled instantly without server downtime.</li>
                                <li class="mb-2"><strong>Live DOM Invalidation:</strong> Toggling switches updates
                                    active UI elements via AJAX immediately.</li>
                                <li><strong>Unique Feature Keys:</strong> Always use unique lowercase feature keys
                                    (e.g., <code>group_pages</code>) when registering new flags.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--Indonesian Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                Gambaran Umum & Fungsi Modul
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Fitur Aplikasi (Feature Toggle)</strong> mengimplementasikan arsitektur
                                sakelar fitur dinamis secara real-time. Administrator dapat secara langsung
                                menyembunyikan atau menampilkan elemen navigasi, grup menu sidebar, ikon navigasi
                                topbar, hingga tombol drawer melayang tanpa perlu mengubah kode atau me-redeploy
                                aplikasi.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Kelompok Sakelar Fitur
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Sidebar Group:</strong> Menampilkan atau menyembunyikan judul
                                    bagian grup sidebar utama (contoh: <code>PAGES</code>, <code>APPS</code>,
                                    <code>LAYOUTS</code>, <code>HELP</code>).</li>
                                <li class="mb-2"><strong>Topbar Navbar:</strong> Mengontrol ikon header seperti
                                    notifikasi, akses cepat, jam digital, atau pengubah bahasa.</li>
                                <li><strong>Floating Drawer:</strong> Mengaktifkan atau mematikan tombol drawer melayang
                                    seperti drawer help atau widget chat.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                Alur Operasional Pengelolaan Fitur
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Sakelar Fitur Tunggal:</strong> Gunakan switch toggle pada
                                    baris fitur untuk langsung menampilkan atau menyembunyikan komponen (contoh:
                                    <code>drawer_help</code>, <code>digital_clock</code>).</li>
                                <li class="mb-2"><strong>Sakelar Kategori Massal:</strong> Klik switch di header kartu
                                    kategori untuk mengaktifkan atau mematikan seluruh sakelar fitur dalam kelompok
                                    sekaligus.</li>
                                <li class="mb-2"><strong>Penggunaan Helper Blade:</strong> Pada tampilan Blade,
                                    evaluasi status sakelar fitur menggunakan helper global: <code>
                                        @if (isFeatureActive('drawer_help'))
                                            ...
                                        @endif
                                    </code>.</li>
                                <li><strong>Dark Launching:</strong> Rilis fitur baru dalam keadaan nonaktif terlebih
                                    dahulu, lalu aktifkan dalam hitungan detik saat fitur siap.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Emergency Kill Switch:</strong> Fitur yang mengalami kendala
                                    dapat dimatikan dalam hitungan detik tanpa menghentikan server.</li>
                                <li class="mb-2"><strong>Update UI Real-Time:</strong> Mengubah sakelar sidebar atau
                                    topbar akan langsung meng-update struktur navigasi via AJAX secara aman.</li>
                                <li><strong>Invarian Kunci Unik:</strong> Selalu gunakan kunci fitur unik berformat
                                    lowercase (contoh: <code>group_pages</code>) saat mendaftarkan sakelar baru.</li>
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
<!--end::Modal - Petunjuk Operasional Fitur Aplikasi-->
