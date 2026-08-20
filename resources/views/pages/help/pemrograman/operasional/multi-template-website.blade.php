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
                            ? 'Step-by-step instructions for managing frontpage themes in admin UI and developer workflow for adding new website themes.'
                            : 'Petunjuk operasional langkah demi langkah pengelolaan tema beranda di admin dan alur kerja pengembang untuk menambah tema website baru.' }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-element-11 fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ app()->getLocale() == 'en' ? 'Admin Theme Management' : 'Manajemen Tema Admin' }}</span>
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
                                1. Administrator Workflow: Managing & Activating Frontpage Themes
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Follow these sequential steps to manage and switch the active frontend landing page theme:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-3">
                                    <strong>Navigate to Theme Management:</strong> Open <code>App Support &rarr; Theme Front Page</code> (<span class="badge badge-light-primary">/appsupport/theme-frontpage</span>).
                                </li>
                                <li class="mb-3">
                                    <strong>Browse Registered Themes:</strong> Switch between the <span class="badge badge-light-primary">Theme List</span> tab and <span class="badge badge-light-info">Live Preview</span> tab to inspect theme cards, version info, author details, and live responsive renderings.
                                </li>
                                <li class="mb-3">
                                    <strong>Activate Theme:</strong> Click <span class="badge badge-primary">Set as Active Theme</span> on your target theme card. The system updates the database state in <code>theme_frontpages</code> automatically.
                                </li>
                                <li>
                                    <strong>Verify Public Landing Page:</strong> Visit the public homepage or refresh your browser to view the active theme.
                                </li>
                                </ol>
                        </div>
                    </div>

                    <!-- Section 2: Developer Guide for Adding New Templates -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Developer Guide: Step-by-Step for Adding a New Frontpage Theme
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                To add a new public website theme (e.g. <code>modern-corporate</code>), execute the following 4 steps:
                            </p>
                            
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary h-100">
                                        <h5 class="fw-bold text-primary mb-2">Step 1: Create Theme Directory</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Create theme view folder under <code>resources/views/theme/{new_slug}/</code>.
                                        </p>
                                        <code class="fs-8">resources/views/theme/modern-corporate/</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-info rounded border border-info h-100">
                                        <h5 class="fw-bold text-info mb-2">Step 2: Implement Home Layout</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Create the main landing view file:
                                        </p>
                                        <code class="fs-8">home-page.blade.php</code>
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
                                        <h5 class="fw-bold text-success mb-2">Step 4: Register via Seeder or GUI</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Add record to <code>ThemeFrontpageSeeder</code> or add via Web GUI at <code>/appsupport/theme-frontpage</code>.
                                        </p>
                                        <code class="fs-8">ThemeFrontpage::updateOrCreate(['slug' => 'modern-corporate'], [...])</code>
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
                                <li class="mb-2"><strong>No Hardcoded Content:</strong> Themes MUST bind to site profile, navigation trees, slide banners, and CTA data provided by <code>WebsiteTemplateService::getWebsiteViewData()</code>.</li>
                                <li class="mb-2"><strong>Active Theme Protection:</strong> Active themes (<code>is_active = true</code>) cannot be deleted. You must activate another theme first before deleting.</li>
                                <li class="mb-2"><strong>Automatic Fallback Integrity:</strong> Unimplemented views automatically fall back to standard <code>theme.default</code> layout.</li>
                                <li><strong>Bilingual Support:</strong> All theme UI text labels must support <code>app()->getLocale()</code>.</li>
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
                                1. Alur Kerja Administrator: Mengelola & Mengaktifkan Tema Beranda
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Ikuti langkah-langkah berikut untuk mengelola dan mengganti tema tampilan publik beranda:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-3">
                                    <strong>Buka Tema Halaman Depan:</strong> Akses menu <code>App Support &rarr; Tema Halaman Depan</code> (<span class="badge badge-light-primary">/appsupport/theme-frontpage</span>).
                                </li>
                                <li class="mb-3">
                                    <strong>Tinjau Tema Terdaftar:</strong> Berpindah antara tab <span class="badge badge-light-primary">Daftar Tema</span> dan tab <span class="badge badge-light-info">Pratinjau Live</span> untuk memeriksa kartu tema, versi, pengembang, dan pratinjau responsif.
                                </li>
                                <li class="mb-3">
                                    <strong>Aktifkan Tema:</strong> Klik <span class="badge badge-primary">Aktifkan Tema Ini</span> pada kartu tema pilihan. Sistem secara otomatis memperbarui status aktif di tabel <code>theme_frontpages</code>.
                                </li>
                                <li>
                                    <strong>Periksa Website Publik:</strong> Akses halaman depan beranda untuk melihat tampilan tema aktif baru.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Section 2: Developer Guide for Adding New Templates -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Panduan Pengembang: Langkah demi Langkah Menambah Tema Baru
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Untuk menambahkan tema publik beranda baru (misal <code>modern-corporate</code>), ikuti 4 langkah berikut:
                            </p>
                            
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary h-100">
                                        <h5 class="fw-bold text-primary mb-2">Langkah 1: Buat Folder Tema</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Buat folder tema di bawah <code>resources/views/theme/{new_slug}/</code>.
                                        </p>
                                        <code class="fs-8">resources/views/theme/modern-corporate/</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-info rounded border border-info h-100">
                                        <h5 class="fw-bold text-info mb-2">Langkah 2: Implementasi Layout Utama</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Buat berkas tampilan beranda utama:
                                        </p>
                                        <code class="fs-8">home-page.blade.php</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-warning rounded border border-warning h-100">
                                        <h5 class="fw-bold text-warning mb-2">Langkah 3: Isolasi Asset Statis</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Tempatkan CSS/JS/gambar khusus tema pada:
                                        </p>
                                        <code class="fs-8">public/assets/templates/{new_slug}/</code> &amp; gunakan <code>template_asset($path)</code>.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-success rounded border border-success h-100">
                                        <h5 class="fw-bold text-success mb-2">Langkah 4: Daftarkan via Seeder atau GUI</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Tambahkan entri pada <code>ThemeFrontpageSeeder</code> atau buat via Web GUI di <code>/appsupport/theme-frontpage</code>.
                                        </p>
                                        <code class="fs-8">ThemeFrontpage::updateOrCreate(['slug' => 'modern-corporate'], [...])</code>
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
                                <li class="mb-2"><strong>Dilarang Konten Hardcoded:</strong> Tema WAJIB terhubung ke profil website, hirarki menu, slide banner, dan tombol CTA dari <code>WebsiteTemplateService::getWebsiteViewData()</code>.</li>
                                <li class="mb-2"><strong>Proteksi Tema Aktif:</strong> Tema yang sedang aktif (<code>is_active = true</code>) tidak dapat dihapus sebelum mengaktifkan tema lain.</li>
                                <li class="mb-2"><strong>Integritas Cadangan (<em>Fallback</em>):</strong> View yang belum diimplementasikan otomatis mengambil dari tema standar <code>theme.default</code>.</li>
                                <li><strong>Dukungan Bilingual:</strong> Seluruh teks UI tema wajib mendukung <code>app()->getLocale()</code>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
