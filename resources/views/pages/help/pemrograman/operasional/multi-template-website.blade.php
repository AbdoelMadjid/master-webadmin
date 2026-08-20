@extends('layouts.index')

@section('styles')
    @include('pages.help.pemrograman._schema-ui')
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Help
        @endslot
        @slot('li_2')
            {{ __('help.operasional') }}
        @endslot
        @slot('li_3')
            {{ __('help.operasional_multi_template_website') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">
                        <i class="ki-duotone ki-wrench text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Operational & Development Guide
                    </span>
                    <h2 class="fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Multi-Template Website Operational & Developer Guide' : 'Panduan Operasional & Pengembang Multi-Template Website' }}
                    </h2>
                    <p class="schema-lead">
                        {{ app()->getLocale() == 'en'
                            ? 'Step-by-step instructions for selecting templates in admin UI and developer workflow for adding new website templates.'
                            : 'Petunjuk operasional langkah demi langkah pemilihan template di admin dan alur kerja pengembang untuk menambah template website baru.' }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-element-11 fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ app()->getLocale() == 'en' ? 'Admin Template Selection' : 'Pemilihan Template Admin' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ app()->getLocale() == 'en' ? 'Developer Workflow' : 'Alur Kerja Pengembang' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-cross fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ app()->getLocale() == 'en' ? 'Safeguard Rules' : 'Aturan Proteksi' }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!-- Section 1: Administrator Workflow -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                1. Administrator Workflow: Selecting Active Template
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Follow these sequential steps to switch the active frontend template for your public website:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-3">
                                    <strong>Navigate to Theme Management:</strong> Open <code>App Support &rarr; Theme Front Page</code> (<span class="badge badge-light-primary">/appsupport/theme-frontpage</span>).
                                </li>
                                <li class="mb-3">
                                    <strong>Browse Registered Themes:</strong> Inspect available frontend themes showing preview thumbnails, version badges, author info, and supported layout features.
                                </li>
                                <li class="mb-3">
                                    <strong>Activate Theme:</strong> Click <span class="badge badge-success">Set as Active Theme</span>. The system instantly updates active theme configuration and clears application cache.
                                </li>
                                <li>
                                    <strong>Verify Live Website:</strong> Access home landing page or refresh your browser to view the new layout.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Section 2: Developer Guide for Adding New Templates -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Developer Guide: Step-by-Step for Adding a New Website Template
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                To add a new public website template (e.g. <code>modern-corporate</code>), execute the following 5 steps:
                            </p>
                            
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary h-100">
                                        <h5 class="fw-bold text-primary mb-2">Step 1: Create View Directory</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Create template folder under <code>resources/views/theme/{new_slug}/</code>.
                                        </p>
                                        <code class="fs-8">resources/views/theme/modern-corporate/</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-info rounded border border-info h-100">
                                        <h5 class="fw-bold text-info mb-2">Step 2: Create Standard Views Contract</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Implement master layout and standard pages:
                                        </p>
                                        <code class="fs-8">home-page.blade.php</code>, etc.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-warning rounded border border-warning h-100">
                                        <h5 class="fw-bold text-warning mb-2">Step 3: Isolate Assets</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Place custom template CSS/JS/images in:
                                        </p>
                                        <code class="fs-8">public/assets/templates/{new_slug}/</code> &amp; use <code>template_asset($path)</code>.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-success rounded border border-success h-100">
                                        <h5 class="fw-bold text-success mb-2">Step 4: Register Manifest</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Add entry to <code>config/website_templates.php</code> under <code>templates</code> array.
                                        </p>
                                        <code class="fs-8">'modern-corporate' => [ 'name' => '...', ... ]</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Strict Compliance Rules -->
                    <div class="schema-col-12">
                        <div class="schema-card bg-light-warning border border-warning">
                            <h4 class="d-flex align-items-center text-warning">
                                <i class="ki-duotone ki-shield-cross fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                3. Strict Compliance & Safeguard Rules
                            </h4>
                            <ul class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-2"><strong>No Hardcoded Content:</strong> Templates MUST bind to site profile, navigation trees, slide banners, and CTA data.</li>
                                <li class="mb-2"><strong>Asset Fallback Integrity:</strong> Unimplemented views automatically fall back to default standard <code>default</code> layout.</li>
                                <li><strong>Bilingual Support:</strong> All template text labels must support <code>app()->getLocale()</code>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="schema-grid">
                    <!-- Section 1: Administrator Workflow -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                1. Alur Kerja Administrator: Memilih Template Aktif
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Ikuti langkah-langkah berikut untuk mengganti template tampilan publik website:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-3">
                                    <strong>Buka Tema Halaman Depan:</strong> Akses menu <code>App Support &rarr; Tema Halaman Depan</code> (<span class="badge badge-light-primary">/appsupport/theme-frontpage</span>).
                                </li>
                                <li class="mb-3">
                                    <strong>Tinjau Tema Terdaftar:</strong> Periksa daftar tema yang tersedia beserta preview thumbnail, badge versi, pengembang, dan fitur terintegrasi.
                                </li>
                                <li class="mb-3">
                                    <strong>Aktifkan Tema:</strong> Klik <span class="badge badge-success">Pilih Tema Ini</span>. Sistem secara instan memperbarui konfigurasi tema aktif dan membersihkan cache aplikasi.
                                </li>
                                <li>
                                    <strong>Periksa Website Publik:</strong> Akses halaman depan beranda untuk melihat tampilan baru.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Section 2: Developer Guide for Adding New Templates -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Panduan Pengembang: Langkah demi Langkah Menambah Template Baru
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Untuk menambahkan template publik website baru (misal <code>modern-corporate</code>), ikuti 5 langkah berikut:
                            </p>
                            
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary h-100">
                                        <h5 class="fw-bold text-primary mb-2">Langkah 1: Buat Folder View</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Buat folder template di bawah <code>resources/views/theme/{new_slug}/</code>.
                                        </p>
                                        <code class="fs-8">resources/views/theme/modern-corporate/</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-info rounded border border-info h-100">
                                        <h5 class="fw-bold text-info mb-2">Langkah 2: Buat Berkas Kontrak View Standar</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Implementasikan layout master dan halaman standar:
                                        </p>
                                        <code class="fs-8">home-page.blade.php</code>, dll.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-warning rounded border border-warning h-100">
                                        <h5 class="fw-bold text-warning mb-2">Langkah 3: Isolasi Asset Statis</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Tempatkan CSS/JS/gambar khusus template pada:
                                        </p>
                                        <code class="fs-8">public/assets/templates/{new_slug}/</code> &amp; gunakan <code>template_asset($path)</code>.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-success rounded border border-success h-100">
                                        <h5 class="fw-bold text-success mb-2">Langkah 4: Daftarkan Manifest</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Tambahkan entri pada <code>config/website_templates.php</code> di bawah array <code>templates</code>.
                                        </p>
                                        <code class="fs-8">'modern-corporate' => [ 'name' => '...', ... ]</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Strict Compliance Rules -->
                    <div class="schema-col-12">
                        <div class="schema-card bg-light-warning border border-warning">
                            <h4 class="d-flex align-items-center text-warning">
                                <i class="ki-duotone ki-shield-cross fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                3. Aturan Proteksi & Kepatuhan Standar
                            </h4>
                            <ul class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-2"><strong>Dilarang Konten Hardcoded:</strong> Template WAJIB terhubung ke profil website, hirarki menu, slide banner, dan tombol CTA.</li>
                                <li class="mb-2"><strong>Integritas Cadangan (<em>Fallback</em>):</strong> View yang belum diimplementasikan otomatis mengambil dari template standar <code>default</code>.</li>
                                <li><strong>Dukungan Bilingual:</strong> Seluruh teks UI template wajib mendukung <code>app()->getLocale()</code>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
