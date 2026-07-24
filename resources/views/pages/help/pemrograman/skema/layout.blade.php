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
            {{ __('help.skema_layout') }}
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
                        <i class="ki-duotone ki-element-7 text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Layout Blueprint & Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.layout.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.layout.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-check-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.layout.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-category fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.layout.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.layout.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. RENDER LIFECYCLE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-right-circle fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_1') }}
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Sequential execution order showing how a page view call inherits the base layout, mounts global partials, injects section slots, and initializes Metronic JS components:
                            </p>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-primary me-2 fw-bold fs-7">1</span>
                                            <h6 class="mb-0 text-primary fw-bold">View Dispatcher</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Controller or Route Auto-Generator invokes <code>view('pages.sub.name')</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-info me-2 fw-bold fs-7">2</span>
                                            <h6 class="mb-0 text-info fw-bold">Layout Extension</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Blade inherits base layout via <code>@@extends('layouts.index')</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-success me-2 fw-bold fs-7">3</span>
                                            <h6 class="mb-0 text-success fw-bold">Global Partials Load</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Base template mounts Header, Sidebar, Footer, Drawers, &amp; Global Script Bundles.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-warning me-2 fw-bold fs-7">4</span>
                                            <h6 class="mb-0 text-warning fw-bold">Section Slot Injection</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Page sections (<code>styles</code>, <code>toolbar</code>, <code>content</code>, <code>scripts</code>) are injected into layout <code>@@yield</code> slots.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-dark rounded border border-dark border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-dark me-2 fw-bold fs-7">5</span>
                                            <h6 class="mb-0 text-dark fw-bold">Metronic Engine Hydration</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Metronic JS engine initializes sidebar toggles, drawers, tooltips, ApexCharts, &amp; DataTables widgets.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. KEY FOLDER & FILE STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_2') }}
                            </h4>
                            <p class="fs-7 text-gray-600">
                                Directory hierarchy of layout wrappers, partial components, and feature views:
                            </p>
                            <pre class="schema-code"><code>resources/views/
├─ layouts/
│  ├─ index.blade.php             # Main Base Layout Wrapper
│  └─ partials/
│     ├─ header/                  # Topbar, Logo, User Menu, Lang Switcher
│     ├─ sidebar/                 # Sidebar Menu Wrapper & Item Renderer
│     ├─ _toolbar.blade.php       # Breadcrumb & Context Header Component
│     └─ _footer.blade.php        # Application Footer & Copyright
├─ pages/                         # Application Feature Views (Extend index)
│  └─ <feature>/
│     └─ partials/                # CRUD Modal Forms & Tab Partials
└─ partials/                      # Shared Application UI Partial Snippets</code></pre>

                            <div class="schema-note mt-3">
                                <strong>Architectural Rule:</strong> Never modify core layout files in <code>layouts/index.blade.php</code> to add page-specific markup. Always use section slots or dedicated partials.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. STANDARDIZED BLADE PAGE TEMPLATE PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_3') }}
                            </h4>
                            <p class="fs-7 text-gray-600">
                                Mandatory boilerplate code for every feature Blade page in the application:
                            </p>
                            <pre class="schema-code"><code>@@extends('layouts.index')

@@section('styles')
    <!-- Optional: Page Vendor CSS / Schema UI -->
@@endsection

@@section('toolbar')
    @@component('layouts.partials._toolbar')
        @@slot('li_1') Module Name @@endslot
        @@slot('li_2') Feature Name @@endslot
        @@slot('li_3') Current Page @@endslot
    @@endcomponent
@@endsection

@@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!-- Main Feature Cards, Tables & Views -->
        </div>
    </div>
@@endsection

@@section('scripts')
    <!-- Optional: Page Vendor JS / Custom Widget Scripts -->
@@endsection</code></pre>

                            <div class="schema-note mt-3">
                                {!! __('help.pages.skema.layout.note_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. ROLES OF 4 CORE SECTIONS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.layout.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_4') !!}</li>
                            </ul>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.layout.warn_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. CHECKLIST WHEN CREATING NEW PAGES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_5') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.layout.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_9') !!}</li>
                            </ol>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. LAYOUT ANTI-PATTERNS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4 class="d-flex align-items-center text-dark mb-3">
                                <i class="ki-duotone ki-cross-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_6') }}
                            </h4>
                            <div class="row g-3 fs-7">
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 1. Business Logic in Blade Views</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_10') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 2. Copy-Pasting Raw Layout HTML</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_11') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 3. Custom Inline &lt;style&gt; Blocks</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_12') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 4. Global Vendor Script Pollution</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_13') !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-warning">
                            <h4 class="d-flex align-items-center text-dark">
                                <i class="ki-duotone ki-shield-tick fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_7') }}
                            </h4>
                            <div class="row g-3 mt-1 fs-7">
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_9') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_5') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_6') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_7') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_8') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle table-row-dashed fs-7 gy-3 gs-4">
                                    <thead>
                                        <tr class="fw-bold bg-light text-primary">
                                            <th class="min-w-200px">Symptom / Problem</th>
                                            <th class="min-w-200px">Root Cause</th>
                                            <th class="min-w-250px">Recommended Resolution</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Footer overlap / Misaligned content container</td>
                                            <td>Missing closing <code>&lt;/div&gt;</code> or extra unclosed tag in page view</td>
                                            <td>Ensure layout container tags balance perfectly; do not close parent containers in tab partials.</td>
                                        </tr>
                                        <tr>
                                            <td>JS widgets / DataTables not working</td>
                                            <td>Script placed outside <code>@@section('scripts')</code> or missing vendor script include</td>
                                            <td>Place page scripts inside <code>@@section('scripts')</code> to ensure execution after <code>scripts.bundle.js</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Breadcrumbs / Toolbar empty or broken</td>
                                            <td>Missing <code>@@component('layouts.partials._toolbar')</code> call in <code>@@section('toolbar')</code></td>
                                            <td>Include the standardized toolbar component with <code>li_1</code>, <code>li_2</code>, and <code>li_3</code> slots.</td>
                                        </tr>
                                        <tr>
                                            <td>UI styling unformatted or missing CSS</td>
                                            <td>Stylesheet links missing from <code>@@section('styles')</code></td>
                                            <td>Include required page stylesheets or schema UI partial in <code>@@section('styles')</code>.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. RENDER LIFECYCLE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-right-circle fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_1') }}
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Urutan eksekusi lengkap bagaimana pemanggilan view halaman meng-inherit base layout, memuat partial global, menyuntikkan section slot, dan mengaktivasi komponen Metronic JS:
                            </p>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-primary me-2 fw-bold fs-7">1</span>
                                            <h6 class="mb-0 text-primary fw-bold">Pemanggilan View</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Controller atau Route Auto-Generator mengeksekusi <code>view('pages.sub.name')</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-info me-2 fw-bold fs-7">2</span>
                                            <h6 class="mb-0 text-info fw-bold">Pewarisan Layout</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Blade meng-extend base layout utama via <code>@@extends('layouts.index')</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-success me-2 fw-bold fs-7">3</span>
                                            <h6 class="mb-0 text-success fw-bold">Pemuatan Partial Global</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Base template memuat Header, Sidebar, Footer, Drawers, &amp; Script Bundle global.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-warning me-2 fw-bold fs-7">4</span>
                                            <h6 class="mb-0 text-warning fw-bold">Injeksi Slot Section</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Section halaman (<code>styles</code>, <code>toolbar</code>, <code>content</code>, <code>scripts</code>) disuntikkan ke slot <code>@@yield</code> layout.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-dark rounded border border-dark border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-dark me-2 fw-bold fs-7">5</span>
                                            <h6 class="mb-0 text-dark fw-bold">Hidrasi Engine Metronic</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Engine Metronic JS menginisialisasi toggle sidebar, drawer, tooltip, ApexCharts, &amp; widget DataTables.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. KEY FOLDER & FILE STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_2') }}
                            </h4>
                            <p class="fs-7 text-gray-600">
                                Hierarki struktur folder layout wrapper, partial komponen, dan view fitur:
                            </p>
                            <pre class="schema-code"><code>resources/views/
├─ layouts/
│  ├─ index.blade.php             # Wrapper Base Layout Utama
│  └─ partials/
│     ├─ header/                  # Topbar, Logo, User Menu, Lang Switcher
│     ├─ sidebar/                 # Sidebar Menu Wrapper & Renderer Rekursif
│     ├─ _toolbar.blade.php       # Komponen Breadcrumb & Header Konteks
│     └─ _footer.blade.php        # Footer Aplikasi & Hak Cipta
├─ pages/                         # View Fitur Aplikasi (Extend index)
│  └─ <fitur>/
│     └─ partials/                # Form Modal CRUD & Partial Tab
└─ partials/                      # Shared Partial Snippets UI Aplikasi</code></pre>

                            <div class="schema-note mt-3">
                                <strong>Rule Arsitektur:</strong> Jangan pernah mengubah file layout inti di <code>layouts/index.blade.php</code> untuk menaruh markup khusus satu halaman. Gunakan slot section atau file partial.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. STANDARDIZED BLADE PAGE TEMPLATE PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_3') }}
                            </h4>
                            <p class="fs-7 text-gray-600">
                                Template pola kode wajib untuk setiap halaman Blade fitur dalam aplikasi:
                            </p>
                            <pre class="schema-code"><code>@@extends('layouts.index')

@@section('styles')
    <!-- Opsional: CSS Vendor Halaman / Schema UI -->
@@endsection

@@section('toolbar')
    @@component('layouts.partials._toolbar')
        @@slot('li_1') Nama Modul @@endslot
        @@slot('li_2') Nama Fitur @@endslot
        @@slot('li_3') Halaman Aktif @@endslot
    @@endcomponent
@@endsection

@@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!-- Konten Utama Kartu UI, Tabel & View -->
        </div>
    </div>
@@endsection

@@section('scripts')
    <!-- Opsional: JS Vendor Halaman / Custom Widget Scripts -->
@@endsection</code></pre>

                            <div class="schema-note mt-3">
                                {!! __('help.pages.skema.layout.note_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. ROLES OF 4 CORE SECTIONS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.layout.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_4') !!}</li>
                            </ul>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.layout.warn_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. CHECKLIST WHEN CREATING NEW PAGES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_5') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.layout.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_9') !!}</li>
                            </ol>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. LAYOUT ANTI-PATTERNS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4 class="d-flex align-items-center text-dark mb-3">
                                <i class="ki-duotone ki-cross-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_6') }}
                            </h4>
                            <div class="row g-3 fs-7">
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 1. Logika Bisnis di View</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_10') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 2. Duplikasi Markup Layout</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_11') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 3. Custom Inline &lt;style&gt;</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_12') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h6 class="fw-bold text-danger fs-7 mb-1">❌ 4. Pollution Asset Global</h6>
                                        <p class="text-gray-700 fs-8 mb-0">{!! __('help.pages.skema.layout.item_13') !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-warning">
                            <h4 class="d-flex align-items-center text-dark">
                                <i class="ki-duotone ki-shield-tick fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_7') }}
                            </h4>
                            <div class="row g-3 mt-1 fs-7">
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_9') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_5') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_6') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.layout.step_7') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.layout.heading_8') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle table-row-dashed fs-7 gy-3 gs-4">
                                    <thead>
                                        <tr class="fw-bold bg-light text-primary">
                                            <th class="min-w-200px">Gejala / Kendala</th>
                                            <th class="min-w-200px">Penyebab Utama</th>
                                            <th class="min-w-250px">Solusi Rekomendasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Footer berantakan / Kontainer bergeser</td>
                                            <td>Tag penutup <code>&lt;/div&gt;</code> kurang atau ada tag ekstra di view/tab partial</td>
                                            <td>Pastikan pasangan tag HTML seimbang; hindari menutup kontainer parent di dalam file partial tab.</td>
                                        </tr>
                                        <tr>
                                            <td>Widget JS / DataTables tidak berjalan</td>
                                            <td>Script diletakkan di luar <code>@@section('scripts')</code> atau file vendor belum dimuat</td>
                                            <td>Pindahkan script ke dalam <code>@@section('scripts')</code> agar dieksekusi setelah <code>scripts.bundle.js</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Breadcrumbs / Toolbar kosong atau hilang</td>
                                            <td>Lupa memanggil <code>@@component('layouts.partials._toolbar')</code> di <code>@@section('toolbar')</code></td>
                                            <td>Sertakan komponen toolbar standar beserta slot <code>li_1</code>, <code>li_2</code>, dan <code>li_3</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Tampilan polos / CSS khusus tidak muncul</td>
                                            <td>File stylesheet tidak dimuat di <code>@@section('styles')</code></td>
                                            <td>Sertakan link CSS atau partial schema UI pada section <code>styles</code>.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection