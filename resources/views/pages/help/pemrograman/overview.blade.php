@extends('layouts.index')


@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Help
        @endslot
        @slot('li_2')
            {{ __('help.skema_pemrograman') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card mb-5 mb-xl-8">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <h2 class="fw-bold">{{ __('help.skema_pemrograman') }}</h2>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <p class="text-gray-700 fs-6 mb-8">
                        {{ __('help.skema_pemrograman_tooltip') }}
                    </p>
                    <div class="row g-5">
                        <div class="col-12 col-xxl-6">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="badge badge-light-primary">{{ __('help.kategori') }}</span>
                                <h3 class="mb-0 fs-3">{{ __('help.skema') }}</h3>
                            </div>
                            <p class="text-gray-700 fs-7 mb-5">{!! __('help.pages.overview.paragraph_1') !!}</p>

                            <div class="row g-5">
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.route') }}" class="card card-flush h-100 bg-light-primary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-route fs-2hx text-primary flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_route') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_3') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.layout') }}" class="card card-flush h-100 bg-light-danger">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-abstract-46 fs-2hx text-danger flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_layout') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_4') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.komponen-blade-partial') }}" class="card card-flush h-100 bg-light-primary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-element-11 fs-2hx text-primary flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_komponen_blade_and_partial') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_5') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.theme-assets') }}" class="card card-flush h-100 bg-light-secondary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-code fs-2hx text-primary flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_theme_assets') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_6') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.auth-dan-middleware') }}" class="card card-flush h-100 bg-light-dark">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-shield-tick fs-2hx text-dark flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_auth_dan_middleware') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_7') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.struktur-config-menu') }}" class="card card-flush h-100 bg-light-success">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-setting-2 fs-2hx text-success flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_struktur_config_menu') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_8') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.sidebar-menu') }}" class="card card-flush h-100 bg-light-success">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-menu fs-2hx text-success flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_sidebar_menu') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_9') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.header-menu') }}" class="card card-flush h-100 bg-light-warning">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-abstract-14 fs-2hx text-warning flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_header_menu') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_10') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.data-layer') }}" class="card card-flush h-100 bg-light-danger">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-book-open fs-2hx text-danger flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_data_layer') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_11') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.error-handling-dan-fallback') }}" class="card card-flush h-100 bg-light-warning">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-information-5 fs-2hx text-warning flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_error_handling_and_fallback') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_12') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.cache-dan-deployment') }}" class="card card-flush h-100 bg-light-secondary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-cloud-add fs-2hx text-info flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_cache_and_deployment') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_13') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.pemilihan-bahasa') }}" class="card card-flush h-100 bg-light-info">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-flag fs-2hx text-info flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_pemilihan_bahasa') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_14') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema.i18n-lanjutan') }}" class="card card-flush h-100 bg-light-dark">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-abstract-39 fs-2hx text-dark flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.skema_i18n_lanjutan') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_15') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xxl-6">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="badge badge-light-success">{{ __('help.kategori') }}</span>
                                <h3 class="mb-0 fs-3">Skema Main Menu</h3>
                            </div>
                            <p class="text-gray-700 fs-7 mb-5">Dokumentasi arsitektur dan skema khusus menu-menu utama aplikasi yang terpisah secara terfokus.</p>

                            <div class="border-start border-4 border-info ps-3 mb-3">
                                <h4 class="fw-bold mb-0 text-gray-800">App Support</h4>
                                <span class="text-muted fs-7">Fitur-fitur pendukung sistem (Menu Dinamis, Profil Aplikasi, Feature Toggle, Backup Database, & Data Login)</span>
                            </div>

                            <div class="row g-5">
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.app-support.menu') }}" class="card card-flush h-100 bg-light-secondary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-menu fs-2hx text-dark flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Menu</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur manajemen menu dinamis, pengurutan hirarki (drag & drop orders), dan sinkronisasi permission otomatis.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.app-support.app-profil') }}" class="card card-flush h-100 bg-light-info">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-element-11 fs-2hx text-info flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">App Profil</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur identitas aplikasi, manajemen logo (Logo Utama, Logo Kotak, Favicon), dan Form Request Validation.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.app-support.app-fitur') }}" class="card card-flush h-100 bg-light-primary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-toggle-on fs-2hx text-primary flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">App Fitur</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur Feature Toggle (Feature Flags), sakelar status fitur, dan helper global <code>isFeatureActive()</code>.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.app-support.backup-db') }}" class="card card-flush h-100 bg-light-success">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-cloud-add fs-2hx text-success flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Backup DB</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Mekanisme ekspor dump SQL, lokasi direktori terproteksi, serta prosedur restore dan hapus cadangan database.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.app-support.data-login') }}" class="card card-flush h-100 bg-light-warning">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-shield-tick fs-2hx text-warning flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Data Login</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur pencatatan riwayat login, frekuensi login harian (`login_count`), reward poin, dan widget user aktif 15 menit.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="border-start border-4 border-primary ps-3 my-4">
                                <h4 class="fw-bold mb-0 text-gray-800">Manajemen Pengguna</h4>
                                <span class="text-muted fs-7">Fitur pengelolaan pengguna sistem (Role, Permission, Akses Role, Akses User, User, & Reset Password)</span>
                            </div>

                            <div class="row g-5">
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.manajemen-pengguna.role') }}" class="card card-flush h-100 bg-light-primary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-user-square fs-2hx text-primary flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Role</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur pengelolaan Role pengguna, integrasi Spatie Permission, dan modal matriks CRUD tanpa scroll horizontal.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.manajemen-pengguna.permission') }}" class="card card-flush h-100 bg-light-success">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-key fs-2hx text-success flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Permission</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur ekstraksi aksi CRUD, visualisasi badge warna-warni, dropdown filter role (opsi All), dan tombol reset filter.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.manajemen-pengguna.akses-role') }}" class="card card-flush h-100 bg-light-info">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-shield-tick fs-2hx text-info flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Akses Role</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur matriks hak akses per role, filter pencarian modul on-the-fly, kontrol toggle per baris, dan sync real-time.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.manajemen-pengguna.akses-user') }}" class="card card-flush h-100 bg-light-warning">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-user-tick fs-2hx text-warning flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Akses User</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur hak akses per user, pewarisan izin Spatie (Direct vs Role permissions), dan indikator badge Mengikuti Role.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.manajemen-pengguna.user') }}" class="card card-flush h-100 bg-light-dark">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-profile-user fs-2hx text-dark flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">User</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur pengelolaan akun pengguna (CRUD), penanganan upload avatar profil, hashing password, dan penugasan role.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.skema-main-menu.manajemen-pengguna.reset-password') }}" class="card card-flush h-100 bg-light-danger">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-key fs-2hx text-danger flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Reset Password</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Arsitektur permintaan reset password (/forgot-password), pemicuan Notifikasi Peringatan Header & Red Badge Counter, serta reset password default <code>Password!12345</code>.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xxl-6">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="badge badge-light-warning">{{ __('help.kategori') }}</span>
                                <h3 class="mb-0 fs-3">{{ __('help.operasional') }}</h3>
                            </div>
                            <p class="text-gray-700 fs-7 mb-5">{!! __('help.pages.overview.paragraph_2') !!}</p>

                            <div class="row g-5">
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.operasional.panduan-tambah-halaman') }}" class="card card-flush h-100 bg-light-primary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-file-added fs-2hx text-primary flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.panduan_tambah_halaman') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_16') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.operasional.panduan-tambah-menu') }}" class="card card-flush h-100 bg-light-success">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-menu fs-2hx text-success flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.panduan_tambah_menu') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_17') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.operasional.manajemen-pengguna') }}" class="card card-flush h-100 bg-light-primary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-user-square fs-2hx text-primary flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">Manajemen Pengguna</h3>
                                                <p class="text-gray-700 fs-7 mb-0">Panduan alur pemrograman & operasional Avatar, Sistem Reward Poin Harian, dan Idle Logout 15 Menit.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.operasional.konvensi-penamaan') }}" class="card card-flush h-100 bg-light-info">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-text fs-2hx text-info flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.konvensi_penamaan') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_19') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.operasional.workflow-developer-harian') }}" class="card card-flush h-100 bg-light-secondary">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-calendar-8 fs-2hx text-dark flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.workflow_developer_harian') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_20') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.operasional.checklist-qa-smoke-test') }}" class="card card-flush h-100 bg-light-warning">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-shield-search fs-2hx text-warning flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.checklist_qa_smoke_test') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_21') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('help.pemrograman.operasional.playbook-incident-response') }}" class="card card-flush h-100 bg-light-warning">
                                        <div class="card-body d-flex align-items-start gap-3 py-4">
                                            <i class="ki-duotone ki-shield-tick fs-2hx text-warning flex-shrink-0 mt-1"><span class="path1"></span><span class="path2"></span></i>
                                            <div>
                                                <h3 class="mb-1 fs-4">{{ __('help.playbook_incident_response') }}</h3>
                                                <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_22') !!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
