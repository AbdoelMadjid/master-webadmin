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
                            ? 'Step-by-step instructions for managing frontpage themes, branding logos, header/footer menus, feature partial inclusions, and developer theme creation standards.'
                            : 'Petunjuk operasional langkah demi langkah pengelolaan tema beranda, logo branding, menu header/footer, inklusi partial feature, dan standar pengembang untuk menambah tema baru.' }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-element-11 fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ app()->getLocale() == 'en' ? 'Admin Theme Management' : 'Manajemen Tema Admin' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-setting-2 fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ app()->getLocale() == 'en' ? 'Branding & Menu Builder' : 'Branding & Builder Menu' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ app()->getLocale() == 'en' ? 'Developer Standards' : 'Standar Pengembang' }}</span>
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
                                1. Administrator Workflow: Theme Activation, Branding & Menu Configurations
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Follow these sequential steps to manage themes, upload custom logos, and build dynamic navigation menus:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-3">
                                    <strong>Access Theme Management Module:</strong> Open <code>App Support &rarr; Theme Front Page</code> (<span class="badge badge-light-primary">/appsupport/theme-frontpage</span>).
                                </li>
                                <li class="mb-3">
                                    <strong>Configure Theme Branding & Menus:</strong> Open the <span class="badge badge-light-info">Theme Configurations</span> tab or click <span class="badge badge-light-info">Theme Config</span> on any theme card. Upload Default Header Logo, Sticky Header Logo, and Footer Logo. Use the builder tables to add, edit, reorder, or delete Header & Footer menu links.
                                </li>
                                <li class="mb-3">
                                    <strong>Map Header Menu to Feature Files:</strong> For each Header Menu row, select a feature view partial from <code>features/</code> (e.g. <code>_how-it-works</code>, <code>_testimonials</code>). <code>home-page.blade.php</code> automatically includes feature sections in the exact order of your header menu!
                                </li>
                                <li class="mb-3">
                                    <strong>Activate Theme:</strong> Click <span class="badge badge-primary">Set Active</span> on your target theme card. The system updates the active theme entry in table <code>theme_frontpages</code> instantly.
                                </li>
                                <li>
                                    <strong>Live Preview & Verification:</strong> Open the <span class="badge badge-light-info">Live Preview</span> tab to inspect desktop, tablet, and mobile renders, or open the public homepage in a new tab.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Section 2: Developer Guide for Adding New Templates -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Developer Guide: Standard Steps for Creating a New Frontpage Theme
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                To add a new public website theme (e.g. <code>modern-corporate</code>), follow these 4 standardized steps:
                            </p>

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary h-100">
                                        <h5 class="fw-bold text-primary mb-2">Step 1: Create Theme View Subfolder</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Create theme view directory under <code>resources/views/theme/{slug}/</code> and feature partials subfolder <code>resources/views/theme/{slug}/features/</code>.
                                        </p>
                                        <code class="fs-8">resources/views/theme/modern-corporate/features/</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-info rounded border border-info h-100">
                                        <h5 class="fw-bold text-info mb-2">Step 2: Implement home-page.blade.php</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Create main landing view file and loop over <code>$themeConfig?->header_menu_list</code> using <code>WebsiteTemplateService::resolveFeatureView(...)</code> for dynamic feature section inclusion.
                                        </p>
                                        <code class="fs-8">home-page.blade.php</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-warning rounded border border-warning h-100">
                                        <h5 class="fw-bold text-warning mb-2">Step 3: Standardize Assets & Anchor IDs</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Place theme assets under <code>public/theme/{slug}/</code>, thumbnail at <code>public/theme/{slug}/images/thumbnail/{slug}.png</code>, and add <code>id="..."</code> + <code>data-kt-scroll-offset</code> on top section containers for smooth scrolling.
                                        </p>
                                        <code class="fs-8">&lt;div id="testimonial" data-kt-scroll-offset="..."&gt;</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-success rounded border border-success h-100">
                                        <h5 class="fw-bold text-success mb-2">Step 4: Register Entry via Seeder or GUI</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Add record to <code>ThemeFrontpageSeeder</code> and default config in <code>ThemeConfigSeeder</code> or add via Web GUI.
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
                                <li class="mb-2"><strong>Dynamic Data Binding:</strong> Themes MUST bind to <code>WebsiteTemplateService::getWebsiteViewData()</code> (active theme, theme_configs, and app_profils data).</li>
                                <li class="mb-2"><strong>Footer vs Header Separation:</strong> Footer bottom navigation links must be configured independently from header menu links.</li>
                                <li class="mb-2"><strong>Active Theme Safeguard:</strong> Active themes (<code>is_active = true</code>) cannot be deleted. Activate another theme first before deleting.</li>
                                <li><strong>Bilingual UI Support:</strong> All theme UI text labels and operational guides must support <code>app()->getLocale()</code>.</li>
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
                                1. Alur Kerja Administrator: Manajemen Tema, Branding Logo & Menu Navigasi
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Ikuti langkah-langkah berikut untuk mengelola tema, mengunggah logo branding kustom, dan menyusun menu navigasi dinamis:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-3">
                                    <strong>Akses Modul Tema Halaman Depan:</strong> Buka menu <code>App Support &rarr; Tema Halaman Depan</code> (<span class="badge badge-light-primary">/appsupport/theme-frontpage</span>).
                                </li>
                                <li class="mb-3">
                                    <strong>Konfigurasi Branding & Menu Tema:</strong> Buka tab <span class="badge badge-light-info">Konfigurasi Tema</span> atau klik tombol <span class="badge badge-light-info">Konfigurasi Tema</span> pada kartu tema. Unggah Logo Header Default, Logo Header Sticky, dan Logo Footer. Gunakan tabel builder untuk menambah, mengedit, mengubah urutan, atau menghapus link menu Header & Footer.
                                </li>
                                <li class="mb-3">
                                    <strong>Hubungkan Menu Header dengan File Feature:</strong> Pada setiap baris Menu Header, pilih file partial feature dari folder <code>features/</code> (misal <code>_how-it-works</code>, <code>_testimonials</code>). Berkas <code>home-page.blade.php</code> akan secara otomatis menampilkan seksi feature sesuai urutan menu header Anda!
                                </li>
                                <li class="mb-3">
                                    <strong>Aktifkan Tema:</strong> Klik <span class="badge badge-primary">Aktifkan Tema</span> pada kartu tema pilihan. Sistem memperbarui status aktif pada tabel <code>theme_frontpages</code> secara seketika.
                                </li>
                                <li>
                                    <strong>Pratinjau Live & Verifikasi:</strong> Buka tab <span class="badge badge-light-info">Pratinjau Live</span> untuk melihat pratinjau tampilan desktop, tablet, dan mobile, atau buka beranda utama pada tab baru.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Section 2: Developer Guide for Adding New Templates -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Panduan Pengembang: Standar Langkah demi Langkah Menambah Tema Baru
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Untuk menambahkan tema publik beranda baru (misal <code>modern-corporate</code>), ikuti 4 langkah terstandar berikut:
                            </p>

                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary h-100">
                                        <h5 class="fw-bold text-primary mb-2">Langkah 1: Buat Folder View & Features</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Buat folder view tema di bawah <code>resources/views/theme/{slug}/</code> dan subfolder seksi feature <code>resources/views/theme/{slug}/features/</code>.
                                        </p>
                                        <code class="fs-8">resources/views/theme/modern-corporate/features/</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-info rounded border border-info h-100">
                                        <h5 class="fw-bold text-info mb-2">Langkah 2: Implementasi home-page.blade.php</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Buat berkas tampilan beranda utama dan lakukan looping terhadap <code>$themeConfig?->header_menu_list</code> menggunakan <code>WebsiteTemplateService::resolveFeatureView(...)</code> untuk inklusi seksi feature secara dinamis.
                                        </p>
                                        <code class="fs-8">home-page.blade.php</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-warning rounded border border-warning h-100">
                                        <h5 class="fw-bold text-warning mb-2">Langkah 3: Standarisasi Asset & Anchor ID</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Tempatkan asset tema di <code>public/theme/{slug}/</code>, thumbnail pada <code>public/theme/{slug}/images/thumbnail/{slug}.png</code>, serta pasang <code>id="..."</code> + <code>data-kt-scroll-offset</code> pada container atas seksi.
                                        </p>
                                        <code class="fs-8">&lt;div id="testimonial" data-kt-scroll-offset="..."&gt;</code>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 bg-light-success rounded border border-success h-100">
                                        <h5 class="fw-bold text-success mb-2">Langkah 4: Daftarkan via Seeder atau GUI</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            Tambahkan entri pada <code>ThemeFrontpageSeeder</code> dan konfigurasi default pada <code>ThemeConfigSeeder</code> atau via Web GUI.
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
                                <li class="mb-2"><strong>Binding Data Dinamis:</strong> Tema WAJIB terhubung ke <code>WebsiteTemplateService::getWebsiteViewData()</code> (data tema aktif, theme_configs, dan profil aplikasi).</li>
                                <li class="mb-2"><strong>Pemisahan Menu Footer & Header:</strong> Tautan navigasi footer bawah dapat dikonfigurasi secara independen terpisah dari menu header.</li>
                                <li class="mb-2"><strong>Proteksi Hapus Tema Aktif:</strong> Tema yang sedang aktif (<code>is_active = true</code>) tidak dapat dihapus sebelum mengaktifkan tema lain.</li>
                                <li><strong>Dukungan Bilingual:</strong> Seluruh teks UI tema dan petunjuk operasional wajib mendukung <code>app()->getLocale()</code>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
