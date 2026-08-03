@php
    $changelogVersions = \App\Models\AppSupport\Changelog::getVersions();
    $latestRelease = $changelogVersions[0] ?? [
        'version' => 'v1.3.2',
        'date' => '2026-08-03',
        'title' => 'Unified Master Git & Developer CLI Tooling',
        'title_id' => 'Perintah Master Git & Developer CLI Terpadu',
    ];
    $appVersion = $latestRelease['version'] ?? 'v1.0.0';
    $appReleaseDate = !empty($latestRelease['date']) ? \Carbon\Carbon::parse($latestRelease['date'])->format('d M Y') : '';
@endphp

<!--begin::Modal - About Application-->
<div class="modal fade" id="kt_modal_about_app" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <!--begin::Branding Header-->
                <div class="text-center mb-9">
                    <div class="symbol symbol-60px symbol-circle bg-light-primary mb-4 p-3 d-inline-flex align-items-center justify-content-center">
                        <i class="ki-duotone ki-information-5 fs-3x text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'About Master WebAdmin' : 'Tentang Master WebAdmin' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Enterprise Administration & Management System' : 'Sistem Administrasi & Manajemen Berbasis Web Enterprise' }}
                    </div>
                </div>
                <!--end::Branding Header-->

                @if (app()->getLocale() == 'en')
                    <!-- English Content -->
                    <div class="d-flex flex-column gap-5">
                        <!-- Card 1: System Info -->
                        <div class="card schema-card bg-light-primary border border-primary p-5 rounded">
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                <h4 class="text-gray-900 fw-bold mb-0">System Overview</h4>
                            </div>
                            <p class="text-gray-700 fs-6 mb-3">
                                <strong>Master WebAdmin</strong> is an enterprise application management framework designed to streamline administrative workflows, user permission management, and enterprise data operations.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge badge-light-primary fs-7 fw-bold">Version {{ $appVersion }}</span>
                                @if($appReleaseDate)
                                    <span class="badge badge-light-dark fs-7 fw-bold">{{ $appReleaseDate }}</span>
                                @endif
                                <span class="badge badge-light-info fs-7 fw-bold">Laravel {{ app()->version() }}</span>
                                <span class="badge badge-light-success fs-7 fw-bold">PHP {{ PHP_VERSION }}</span>
                                <span class="badge badge-light-warning fs-7 fw-bold">Metronic 8</span>
                            </div>
                        </div>

                        <!-- Card 2: Key Modules & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-5 rounded">
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <h4 class="text-gray-900 fw-bold mb-0">Core Features</h4>
                            </div>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>Role & Permission Management:</strong> Granular role-based access control (RBAC).</li>
                                <li class="mb-2"><strong>Dynamic Menu Architecture:</strong> Configurable navigation layout via seeders.</li>
                                <li class="mb-2"><strong>Help & Documentation Hub:</strong> Built-in bilingual guides and operational modal manuals.</li>
                                <li><strong>DataTables Integration:</strong> Native fluid responsive tables with export and server-side capabilities.</li>
                            </ul>
                        </div>

                        <!-- Card 3: Security & Maintenance -->
                        <div class="card schema-card bg-light-info border border-info p-5 rounded">
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                <h4 class="text-gray-900 fw-bold mb-0">Security & Maintenance</h4>
                            </div>
                            <p class="text-gray-700 fs-6 mb-0">
                                Maintained by the internal IT Development Team. Built with standard Laravel security safeguards, CSRF protection, and session encryption.
                            </p>
                        </div>
                    </div>
                @else
                    <!-- Indonesian Content -->
                    <div class="d-flex flex-column gap-5">
                        <!-- Card 1: System Info -->
                        <div class="card schema-card bg-light-primary border border-primary p-5 rounded">
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                <h4 class="text-gray-900 fw-bold mb-0">Gambaran Umum Sistem</h4>
                            </div>
                            <p class="text-gray-700 fs-6 mb-3">
                                <strong>Master WebAdmin</strong> adalah kerangka kerja manajemen aplikasi web yang dirancang untuk menyederhanakan alur kerja administratif, manajemen hak akses, dan operasional data enterprise.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge badge-light-primary fs-7 fw-bold">Versi {{ $appVersion }}</span>
                                @if($appReleaseDate)
                                    <span class="badge badge-light-dark fs-7 fw-bold">{{ $appReleaseDate }}</span>
                                @endif
                                <span class="badge badge-light-info fs-7 fw-bold">Laravel {{ app()->version() }}</span>
                                <span class="badge badge-light-success fs-7 fw-bold">PHP {{ PHP_VERSION }}</span>
                                <span class="badge badge-light-warning fs-7 fw-bold">Metronic 8</span>
                            </div>
                        </div>

                        <!-- Card 2: Key Modules & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-5 rounded">
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <h4 class="text-gray-900 fw-bold mb-0">Fitur Utama</h4>
                            </div>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>Manajemen Peran & Hak Akses:</strong> Kontrol akses berbasis peran (RBAC) yang terstruktur.</li>
                                <li class="mb-2"><strong>Seeder Menu Dinamis:</strong> Navigasi sidebar otomatis terkonfigurasi via file seeder.</li>
                                <li class="mb-2"><strong>Pusat Bantuan & Dokumentasi:</strong> Panduan operasional dwibahasa bawaan sistem.</li>
                                <li><strong>Integrasi DataTables:</strong> Tabel responsif dengan dukungan ekspor CSV/PDF dan pemrosesan data.</li>
                            </ul>
                        </div>

                        <!-- Card 3: Security & Maintenance -->
                        <div class="card schema-card bg-light-info border border-info p-5 rounded">
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                <h4 class="text-gray-900 fw-bold mb-0">Keamanan & Pemeliharaan</h4>
                            </div>
                            <p class="text-gray-700 fs-6 mb-0">
                                Dikembangkan dan dipelihara oleh Tim Pengembang IT Internal. Dilengkapi dengan proteksi keamanan standar Laravel, proteksi CSRF, dan enkripsi sesi.
                            </p>
                        </div>
                    </div>
                @endif

                <!--begin::Dismiss button-->
                <div class="text-center mt-9">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Close' : 'Tutup' }}
                    </button>
                </div>
                <!--end::Dismiss button-->

            </div>
            <!--end::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - About Application-->
