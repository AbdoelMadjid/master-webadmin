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
            {{ __('help.skema_pemrograman') }}
        @endslot
        @slot('li_3')
            {{ __('help.skema_multi_template_website') }}
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
                        <i class="ki-duotone ki-element-11 text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        Website Frontpage Theme Architecture Engine
                    </span>
                    <h2 class="fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Multi-Template Website Architecture Schema' : 'Skema Arsitektur Multi-Template Website' }}
                    </h2>
                    <p class="schema-lead">
                        {{ app()->getLocale() == 'en'
                            ? 'Comprehensive system design, dynamic theme_configs database resolver, feature partial mapping contract, and isolated asset management for public website layouts.'
                            : 'Panduan lengkap arsitektur sistem, mesin resolusi theme_configs berbasis database, pemetaan partial feature, dan tata kelola terisolasi asset statis website.' }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-check-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ app()->getLocale() == 'en' ? 'Database Driven (theme_configs)' : 'Berbasis Database (theme_configs)' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-element-11 fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ app()->getLocale() == 'en' ? 'Dynamic Feature Inclusion' : 'Inklusi Feature Dinamis' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ app()->getLocale() == 'en' ? 'App Profil Integration' : 'Integrasi App Profil' }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!-- Section 1: Core System Architecture & Database Schema -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                1. System Architecture & Database Storage (theme_frontpages & theme_configs)
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                The Multi-Template Website engine allows administrators to dynamically change public landing layouts, logos, header/footer navigation menus, and feature section order without modifying source code.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">1. Theme Registration Schema</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Themes are registered in <code>theme_frontpages</code> (<code>slug</code>, <code>name</code>, <code>thumbnail</code>, <code>view_path</code>, <code>is_active</code>) and managed via <code>ThemeFrontpage</code> model.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-info rounded border border-info border-dashed h-100">
                                        <h5 class="fw-bold text-info mb-2">2. Theme Configurations Schema</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Logos (Default, Sticky, Footer) and JSON menus (<code>header_menu</code> & <code>footer_menu</code> with <code>feature_file</code> mapping) reside in table <code>theme_configs</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-success rounded border border-success border-dashed h-100">
                                        <h5 class="fw-bold text-success mb-2">3. App Profile Metadata Integration</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Favicon, page <code>&lt;title&gt;</code>, meta description, and footer copyright (year & author) are dynamically bound from table <code>app_profils</code>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Dynamic Feature Section Resolution -->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Dynamic Feature Section Inclusion Engine
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Instead of static hardcoded includes, <code>home-page.blade.php</code> dynamically iterates through active Header Menu items:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-2"><strong>Feature File Resolution:</strong> Reads <code>feature_file</code> (e.g. <code>_how-it-works</code>) or auto-resolves from target anchor (e.g. <code>#team</code> &rarr; <code>_team</code>).</li>
                                <li class="mb-2"><strong>View Cascade:</strong> <code>WebsiteTemplateService::resolveFeatureView(...)</code> checks <code>theme.{active_slug}.features._{file}</code> &rarr; fallback to <code>theme.default.features._{file}</code>.</li>
                                <li class="mb-2"><strong>Sequential Inclusion:</strong> Sections are automatically <code>@@include</code>d in the exact order configured in the Header Menu Builder.</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Section 3: Universal Data Binding Contract -->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                3. Universal Data Provider Contract
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Frontpage theme layouts consume standardized data provided by <code>WebsiteTemplateService::getWebsiteViewData()</code>:
                            </p>
                            <ul class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-1"><code>$activeTheme</code>: Active frontpage theme model with eager-loaded <code>config</code> relation.</li>
                                <li class="mb-1"><code>$themeConfig</code>: Theme logos and header/footer navigation menu arrays.</li>
                                <li class="mb-1"><code>$webProfile</code>: App profile record (app name, description, year, author, favicon URL).</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Section 4: Asset Management & Isolation -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                4. Static Asset Isolation & Smooth Scroll Anchors
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Theme assets reside under <code>public/theme/{template_slug}/</code> with standardized thumbnail screenshots placed at <code>public/theme/{template_slug}/images/thumbnail/{template_slug}.png</code>. Use the global helper in views:
                            </p>
                            <div class="bg-dark text-white p-4 rounded fs-7 mb-3 font-monospace">
                                &lt;link rel="stylesheet" href="&lcub;&lcub; template_asset('css/custom.css') &rcub;&rcub;"&gt;<br>
                                &lt;script src="&lcub;&lcub; template_asset('js/main.js') &rcub;&rcub;"&gt;&lt;/script&gt;
                            </div>
                            <p class="fs-7 text-gray-700 mb-0">
                                <strong>Smooth Scroll Anchors:</strong> Feature partials place <code>id="..."</code> and <code>data-kt-scroll-offset="{default: 100, lg: 150}"</code> on the section top container. Anchor links in both Header & Footer menus with <code>data-kt-scroll-toggle="true"</code> smoothly scroll to the top edge of each section box.
                            </p>
                        </div>
                    </div>
                </div>
                @else
                <div class="schema-grid">
                    <!-- Section 1: Core System Architecture & Database Schema -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                1. Arsitektur Sistem & Penyimpanan Database (theme_frontpages & theme_configs)
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Mesin Multi-Template Website memungkinkan administrator mengubah layout publik beranda, logo, menu navigasi header/footer, dan urutan seksi feature secara dinamis tanpa mengubah kode program.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">1. Skema Registrasi Tema</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Tema terdaftar pada <code>theme_frontpages</code> (<code>slug</code>, <code>name</code>, <code>thumbnail</code>, <code>view_path</code>, <code>is_active</code>) dan dikelola via model <code>ThemeFrontpage</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-info rounded border border-info border-dashed h-100">
                                        <h5 class="fw-bold text-info mb-2">2. Skema Konfigurasi Tema</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Logo (Default, Sticky, Footer) dan menu JSON (<code>header_menu</code> & <code>footer_menu</code> berpemetaan <code>feature_file</code>) tersimpan di tabel <code>theme_configs</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-success rounded border border-success border-dashed h-100">
                                        <h5 class="fw-bold text-success mb-2">3. Integrasi Profil Aplikasi</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Favicon, <code>&lt;title&gt;</code> halaman, deskripsi meta, dan copyright footer (tahun & pembuat) terhubung dinamis dari tabel <code>app_profils</code>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Dynamic Feature Section Resolution -->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                2. Engine Inklusi Seksi Feature Dinamis
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Alih-alih include statis yang di-hardcode, berkas <code>home-page.blade.php</code> secara dinamis melakukan iterasi item Menu Header aktif:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-2"><strong>Resolusi File Feature:</strong> Membaca nilai <code>feature_file</code> (misal <code>_how-it-works</code>) atau otomatis dari target anchor (misal <code>#team</code> &rarr; <code>_team</code>).</li>
                                <li class="mb-2"><strong>Urutan Resolusi View:</strong> <code>WebsiteTemplateService::resolveFeatureView(...)</code> memeriksa <code>theme.{active_slug}.features._{file}</code> &rarr; fallback ke <code>theme.default.features._{file}</code>.</li>
                                <li class="mb-2"><strong>Inklusi Berurutan:</strong> Seksi partial di-<code>@@include</code> otomatis sesuai urutan yang disusun pada Builder Menu Header.</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Section 3: Universal Data Binding Contract -->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                3. Kontrak Data Universal
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Seluruh layout tema beranda publik menggunakan data terstandar dari <code>WebsiteTemplateService::getWebsiteViewData()</code>:
                            </p>
                            <ul class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-1"><code>$activeTheme</code>: Model tema beranda aktif dengan relasi <code>config</code> yang di-eager-load.</li>
                                <li class="mb-1"><code>$themeConfig</code>: Konfigurasi logo tema dan array menu navigasi header/footer.</li>
                                <li class="mb-1"><code>$webProfile</code>: Data profil aplikasi (nama aplikasi, deskripsi, tahun, pembuat, URL favicon).</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Section 4: Asset Management & Isolation -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                4. Isolasi Asset Statis & Anchor Smooth Scroll
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Asset tema berada di bawah <code>public/theme/{template_slug}/</code> dengan tangkapan layar thumbnail terstandar pada <code>public/theme/{template_slug}/images/thumbnail/{template_slug}.png</code>. Gunakan helper global di view Blade:
                            </p>
                            <div class="bg-dark text-white p-4 rounded fs-7 mb-3 font-monospace">
                                &lt;link rel="stylesheet" href="&lcub;&lcub; template_asset('css/custom.css') &rcub;&rcub;"&gt;<br>
                                &lt;script src="&lcub;&lcub; template_asset('js/main.js') &rcub;&rcub;"&gt;&lt;/script&gt;
                            </div>
                            <p class="fs-7 text-gray-700 mb-0">
                                <strong>Anchor Smooth Scroll:</strong> Partial feature memasang <code>id="..."</code> dan <code>data-kt-scroll-offset="{default: 100, lg: 150}"</code> pada container paling atas seksi. Tautan anchor pada menu Header maupun Footer ber-<code>data-kt-scroll-toggle="true"</code> akan meluncur ke batas atas tiap kotak seksi.
                            </p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
