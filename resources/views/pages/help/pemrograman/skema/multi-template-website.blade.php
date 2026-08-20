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
                        <i class="ki-duotone ki-layers text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        Website Template Architecture Engine
                    </span>
                    <h2 class="fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Multi-Template Website Architecture Schema' : 'Skema Arsitektur Multi-Template Website' }}
                    </h2>
                    <p class="schema-lead">
                        {{ app()->getLocale() == 'en'
                            ? 'Comprehensive system design, dynamic template resolver, universal data binding contract, and isolated asset management for public website layouts.'
                            : 'Panduan lengkap arsitektur sistem, mesin pemutus template dinamis, kontrak data universal, dan tata kelola terisolasi asset statis website.' }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-check-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ app()->getLocale() == 'en' ? 'Configuration Driven' : 'Berbasis Konfigurasi' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-element-11 fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ app()->getLocale() == 'en' ? 'Dynamic Resolver' : 'Resolusi Dinamis' }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ app()->getLocale() == 'en' ? 'Data Binding Contract' : 'Kontrak Binding Data' }}</span>
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
                                1. System Architecture & Database Storage
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                The Multi-Template Website engine allows administrators to dynamically change the frontend website layout without altering backend data models or admin features.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">Database Storage</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            The active template slug is stored in <code>web_profiles.template_slug</code> (default: <code>unify-education</code>).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-info rounded border border-info border-dashed h-100">
                                        <h5 class="fw-bold text-info mb-2">Registry Manifest</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Available templates are registered in <code>config/website_templates.php</code> with manifest metadata (version, author, supported features).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-success rounded border border-success border-dashed h-100">
                                        <h5 class="fw-bold text-success mb-2">Dynamic Resolver</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            <code>WebsiteTemplateService::resolveView($page)</code> determines view paths with fallback mechanisms.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: View Resolution & Fallback Cascade -->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                2. View Resolution Cascade
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                When a public route requests a page view (e.g. <code>home-page</code> or <code>alumni</code>), <code>WebsiteTemplateService</code> evaluates the following order:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-2"><strong>Active Template Path:</strong> <code>resources/views/website/templates/{active_slug}/{page}.blade.php</code></li>
                                <li class="mb-2"><strong>Default Standard Fallback:</strong> <code>resources/views/theme/default/{page}.blade.php</code></li>
                                <li class="mb-2"><strong>Legacy Path Fallback:</strong> <code>resources/views/website/{page}.blade.php</code></li>
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
                                All website templates strictly consume standardized data provided by <code>WebsiteTemplateService::getWebsiteViewData()</code>:
                            </p>
                            <ul class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-1"><code>$webProfile</code>: Website name, logo, address, email, social links.</li>
                                <li class="mb-1"><code>$topNavs</code> & <code>$mainNavs</code>: Tree-structured navigation menus.</li>
                                <li class="mb-1"><code>$footerNavs</code>: Grouped footer link columns.</li>
                                <li class="mb-1"><code>$slideBanners</code> & <code>$callToActions</code>: Active home banners & CTAs.</li>
                                <li><code>$webFeatures</code>: Feature toggle states.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Section 4: Asset Management & Isolation -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                4. Static Asset Isolation & <code>template_asset()</code> Helper
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Each template isolates its CSS, JS, and image assets under <code>public/assets/templates/{template_slug}/</code>. Use the global helper function in Blade views:
                            </p>
                            <div class="bg-dark text-white p-4 rounded fs-7 mb-3 font-monospace">
                                &lt;link rel="stylesheet" href="&lcub;&lcub; template_asset('css/custom.css') &rcub;&rcub;"&gt;<br>
                                &lt;script src="&lcub;&lcub; template_asset('js/main.js') &rcub;&rcub;"&gt;&lt;/script&gt;
                            </div>
                            <p class="fs-7 text-gray-700 mb-0">
                                <strong>Asset Lookup Order:</strong> <code>public/assets/templates/{active_slug}/{$path}</code> &rarr; <code>public/assets/templates/unify-education/{$path}</code> &rarr; <code>public/assets/{$path}</code>.
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
                                1. Arsitektur Sistem & Penyimpanan Database
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Mesin Multi-Template Website memungkinkan administrator mengubah tampilan publik website secara dinamis tanpa mengubah model data backend atau fitur admin.
                            </p>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">Penyimpanan Database</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Slug template aktif tersimpan pada kolom <code>web_profiles.template_slug</code> (bawaan: <code>unify-education</code>).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-info rounded border border-info border-dashed h-100">
                                        <h5 class="fw-bold text-info mb-2">Registri Konfigurasi</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Daftar template terdaftar pada <code>config/website_templates.php</code> beserta metadata (versi, pengembang, fitur).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light-success rounded border border-success border-dashed h-100">
                                        <h5 class="fw-bold text-success mb-2">Pemutus Dinamis</h5>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            Method <code>WebsiteTemplateService::resolveView($page)</code> menentukan jalur view beserta mekanisme cadangan (<em>fallback</em>).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: View Resolution & Fallback Cascade -->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                2. Urutan Resolusi View (<em>Fallback Cascade</em>)
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Saat rute publik meminta tampilan halaman (misal <code>home-page</code> atau <code>alumni</code>), <code>WebsiteTemplateService</code> memeriksa dengan urutan:
                            </p>
                            <ol class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-2"><strong>Jalur Template Aktif:</strong> <code>resources/views/website/templates/{active_slug}/{page}.blade.php</code></li>
                                <li class="mb-2"><strong>Cadangan Standar Bawaan:</strong> <code>resources/views/theme/default/{page}.blade.php</code></li>
                                <li class="mb-2"><strong>Cadangan Jalur Lama:</strong> <code>resources/views/website/{page}.blade.php</code></li>
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
                                Seluruh template website secara ketat menggunakan data terstandar dari <code>WebsiteTemplateService::getWebsiteViewData()</code>:
                            </p>
                            <ul class="fs-7 text-gray-800 ps-4 mb-0">
                                <li class="mb-1"><code>$webProfile</code>: Nama website, logo, alamat, email, sosial media.</li>
                                <li class="mb-1"><code>$topNavs</code> & <code>$mainNavs</code>: Struktur hirarki menu navigasi.</li>
                                <li class="mb-1"><code>$footerNavs</code>: Pengelompokan kolom link footer.</li>
                                <li class="mb-1"><code>$slideBanners</code> & <code>$callToActions</code>: Banner slide & tombol CTA aktif.</li>
                                <li><code>$webFeatures</code>: Status pengaktifan fitur website.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Section 4: Asset Management & Isolation -->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                4. Isolasi Asset Statis & Helper <code>template_asset()</code>
                            </h4>
                            <p class="fs-7 text-gray-600 mb-3">
                                Setiap template mengisolasi berkas CSS, JS, dan gambar di dalam folder <code>public/assets/templates/{template_slug}/</code>. Gunakan helper global di view Blade:
                            </p>
                            <div class="bg-dark text-white p-4 rounded fs-7 mb-3 font-monospace">
                                &lt;link rel="stylesheet" href="&lcub;&lcub; template_asset('css/custom.css') &rcub;&rcub;"&gt;<br>
                                &lt;script src="&lcub;&lcub; template_asset('js/main.js') &rcub;&rcub;"&gt;&lt;/script&gt;
                            </div>
                            <p class="fs-7 text-gray-700 mb-0">
                                <strong>Urutan Pencarian Asset:</strong> <code>public/assets/templates/{active_slug}/{$path}</code> &rarr; <code>public/assets/templates/default/{$path}</code> &rarr; <code>public/assets/{$path}</code>.
                            </p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
