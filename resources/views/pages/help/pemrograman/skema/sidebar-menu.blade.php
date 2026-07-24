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
            {{ __('help.skema_sidebar_menu') }}
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
                        <i class="ki-duotone ki-abstract-14 text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Sidebar Navigation Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.sidebar-menu.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.sidebar-menu.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-folder fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.sidebar-menu.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-link fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.sidebar-menu.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-down fs-8 me-1"></i> {{ __('help.pages.skema.sidebar-menu.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. CORE SOURCE FILE MAP -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.sidebar-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. BASIC SIDEBAR MENU DATA STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Skema Route',
      'route' => 'help.pemrograman.skema.route',
    ],
    [
      'title' => 'Skema Layout',
      'route' => 'help.pemrograman.skema.layout',
    ]
  ]
]</code></pre>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. MENU RENDER MODES: ACCORDION VS DROPDOWN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_3') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_1') !!}</div>
                            </div>
                            <pre class="schema-code"><code>[
  'title'    => 'Chat Application',
  'route'    => 'apps.chat',
  'dropdown' => true, // Renders as floating popup menu
  'children' => [
    ['title' => 'Private Chat', 'route' => 'apps.chat.private'],
    ['title' => 'Group Chat',   'route' => 'apps.chat.group'],
  ]
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. BADGES AND NAVIGATION TARGETS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-badge fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span> me-2</i>
                                {{ __('help.pages.skema.sidebar-menu.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// Status Badge Example:
[
  'title' => 'Messages',
  'route' => 'apps.inbox',
  'badge' => ['label' => 'Soon', 'class' => 'badge badge-info']
]

// External / New Tab Link Example:
[
  'title'  => 'Landing Page',
  'route'  => 'dashboards.landing',
  'target' => '_blank'
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.sidebar-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. UNIQUE DASHBOARD FEATURE: SHOW MORE / SHOW LESS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-down fs-2 text-primary me-2"></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_5') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_4') !!}</div>
                            </div>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. RECURSIVE ACTIVE STATE EVALUATION LOGIC -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-toggle-on fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.sidebar-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.sidebar-menu.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. SIDEBAR TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_8') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle table-row-dashed fs-7 gy-3 gs-4">
                                    <thead>
                                        <tr class="fw-bold bg-light text-primary">
                                            <th class="min-w-200px">Symptom / Error</th>
                                            <th class="min-w-200px">Root Cause</th>
                                            <th class="min-w-250px">Recommended Resolution</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_11') !!}</td>
                                            <td>Incorrect config file inclusion in <code>_menu.blade.php</code> or PHP array syntax error.</td>
                                            <td>Verify config array structure and check <code>_menu.blade.php</code> includes correct file.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_4') !!}</td>
                                            <td>Child route name mismatch or `routeIs` wildcard pattern not matching active route.</td>
                                            <td>Ensure child route uses consistent naming prefix matching parent `routeIs` check.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_5') !!}</td>
                                            <td>Invalid Keenicons class name or `paths` count parameter not matching duotone spans.</td>
                                            <td>Inspect icon class on Metronic icon reference and set `paths` equal to span count.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_12') !!}</td>
                                            <td>Missing translation key `menu.*` in `lang/en/menu.php` or `lang/id/menu.php`.</td>
                                            <td>Add matching key generated from normalized title to both language files.</td>
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
                    <!-- 1. CORE SOURCE FILE MAP -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.sidebar-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. BASIC SIDEBAR MENU DATA STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Skema Route',
      'route' => 'help.pemrograman.skema.route',
    ],
    [
      'title' => 'Skema Layout',
      'route' => 'help.pemrograman.skema.layout',
    ]
  ]
]</code></pre>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. MENU RENDER MODES: ACCORDION VS DROPDOWN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_3') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_1') !!}</div>
                            </div>
                            <pre class="schema-code"><code>[
  'title'    => 'Aplikasi Obrolan',
  'route'    => 'apps.chat',
  'dropdown' => true, // Dirender sebagai popup menu melayang
  'children' => [
    ['title' => 'Obrolan Pribadi', 'route' => 'apps.chat.private'],
    ['title' => 'Obrolan Grup',    'route' => 'apps.chat.group'],
  ]
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. BADGES AND NAVIGATION TARGETS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-badge fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span> me-2</i>
                                {{ __('help.pages.skema.sidebar-menu.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// Contoh Badge Status:
[
  'title' => 'Pesan Masuk',
  'route' => 'apps.inbox',
  'badge' => ['label' => 'Baru', 'class' => 'badge badge-info']
]

// Contoh Tautan Eksternal / Tab Baru:
[
  'title'  => 'Halaman Landing',
  'route'  => 'dashboards.landing',
  'target' => '_blank'
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.sidebar-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. UNIQUE DASHBOARD FEATURE: SHOW MORE / SHOW LESS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-down fs-2 text-primary me-2"></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_5') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_4') !!}</div>
                            </div>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. RECURSIVE ACTIVE STATE EVALUATION LOGIC -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-toggle-on fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.sidebar-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.sidebar-menu.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. SIDEBAR TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.sidebar-menu.heading_8') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle table-row-dashed fs-7 gy-3 gs-4">
                                    <thead>
                                        <tr class="fw-bold bg-light text-primary">
                                            <th class="min-w-200px">Gejala / Error</th>
                                            <th class="min-w-200px">Penyebab Utama</th>
                                            <th class="min-w-250px">Solusi Rekomendasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_11') !!}</td>
                                            <td>Pemanggilan file config di <code>_menu.blade.php</code> salah atau terjadi kesalahan sintaksis array PHP.</td>
                                            <td>Periksa struktur array config dan pastikan file dimuat di <code>_menu.blade.php</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_4') !!}</td>
                                            <td>Ketidakcocokan nama child route atau pola wildcard `routeIs` tidak mencakup route aktif.</td>
                                            <td>Pastikan nama child route menggunakan prefix konsisten sesuai pengecekan parent `routeIs`.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_5') !!}</td>
                                            <td>Class ikon Keenicons tidak valid atau parameter `paths` tidak sesuai dengan span ikon duotone.</td>
                                            <td>Periksa class ikon pada dokumentasi Metronic dan sesuaikan parameter `paths` dengan jumlah span.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.sidebar-menu.item_12') !!}</td>
                                            <td>Key translasi `menu.*` belum terdaftar di `lang/en/menu.php` atau `lang/id/menu.php`.</td>
                                            <td>Tambahkan key hasil normalisasi judul ke dalam kedua berkas bahasa tersebut.</td>
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