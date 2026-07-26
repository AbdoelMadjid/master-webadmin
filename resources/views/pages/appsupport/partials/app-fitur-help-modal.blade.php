<!--begin::Modal - App Fitur Operational Guide-->
<div class="modal fade" id="kt_modal_app_fitur_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: Dynamic Feature Flag System
                            @else
                                Petunjuk Operasional: Sistem Switch Fitur Dinamis
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Guide for feature flags, module switches, and dark-launching components.
                            @else
                                Panduan operasional feature flag, sakelar modul, dan rilis fitur tersembunyi.
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
                                <i class="ki-duotone ki-toggle-on fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Feature Toggle Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module implements a real-time <strong>Feature Flag / Feature Toggle</strong> architecture. Administrators can dynamically activate or deactivate specific UI sections, sidebar groups, topbar navigation icons, and floating drawers without modifying code or re-deploying the application.
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
                                        <strong>Toggle Single Feature:</strong> Use the switch toggle on any feature row to immediately enable or disable UI components (e.g. <code>drawer_help</code>, <code>digital_clock</code>).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Bulk Category Toggle:</strong> Click the category header switch to enable or disable all feature flags within a group (e.g., <code>Sidebar Group</code>, <code>Floating Drawer</code>) simultaneously.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Blade Helper Usage:</strong> In Blade views, evaluate feature flags using the global helper: <code>@if(isFeatureActive('drawer_help')) ... @endif</code>.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Dark Launching:</strong> Safely deploy newly developed modules in a disabled state, then enable them instantly when ready.
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
                                <li><strong>Instant Emergency Kill Switch:</strong> Features encountering issues in production can be turned off in seconds without app downtime.</li>
                                <li><strong>Live DOM Invalidation:</strong> Toggling sidebar or topbar feature switches instantly updates active UI components via AJAX.</li>
                                <li><strong>Unique Feature Key Invariant:</strong> Always use unique lowercase feature keys (e.g., <code>group_pages</code>) when registering new flags.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-toggle-on fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Feature Toggle
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mengimplementasikan arsitektur <strong>Feature Flag / Feature Toggle</strong> secara real-time. Administrator dapat secara dinamis mengaktifkan atau mematikan komponen UI, grup sidebar, ikon navigasi topbar, dan drawer melayang tanpa perlu mengubah kode atau me-redeploy aplikasi.
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
                                        <strong>Sakelar Fitur Tunggal:</strong> Gunakan switch toggle pada baris fitur untuk langsung menampilkan atau menyembunyikan komponen (contoh: <code>drawer_help</code>, <code>digital_clock</code>).
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Sakelar Kategori Massal:</strong> Klik switch di header kategori untuk mengaktifkan atau mematikan seluruh sakelar fitur dalam grup (contoh: <code>Sidebar Group</code>, <code>Floating Drawer</code>) sekaligus.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Penggunaan Helper Blade:</strong> Pada tampilan Blade, evaluasi status sakelar fitur menggunakan helper global: <code>@if(isFeatureActive('drawer_help')) ... @endif</code>.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Dark Launching:</strong> Rilis fitur baru dalam keadaan nonaktif terlebih dahulu di produksi, lalu aktifkan dalam hitungan detik saat fitur siap.
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
                                <li><strong>Emergency Kill Switch:</strong> Fitur yang mengalami kendala dapat dimatikan dalam hitungan detik tanpa menghentikan server.</li>
                                <li><strong>Update UI Real-Time:</strong> Mengubah sakelar sidebar atau topbar akan langsung meng-update struktur navigasi via AJAX secara aman.</li>
                                <li><strong>Invarian Kunci Unik:</strong> Selalu gunakan kunci fitur unik berformat lowercase (contoh: <code>group_pages</code>) saat mendaftarkan sakelar baru.</li>
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
<!--end::Modal - App Fitur Operational Guide-->
