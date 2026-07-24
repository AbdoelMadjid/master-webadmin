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
            {{ __('help.skema_struktur_config_menu') }}
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
                        Menu Config Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.struktur-config-menu.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.struktur-config-menu.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-folder fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.struktur-config-menu.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.struktur-config-menu.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-global fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.struktur-config-menu.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. MENU DATA ORCHESTRATION FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CORE FILE MAP -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. PHP MENU DATA STRUCTURE CONTRACT -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>[
  'title'    => 'Route Schema',                 // Mandatory: converted to translation key menu.*
  'route'    => 'help.pemrograman.skema.route', // Optional: internal Laravel route name
  'href'     => 'https://example.com',          // Optional: external web link
  'icon'     => 'ki-duotone ki-route fs-2',     // Optional: Keenicons icon class
  'paths'    => 4,                              // Optional: number of duotone icon spans
  'children' => [...],                          // Optional: nested child menu array
  'dropdown' => true,                           // Optional: render child items as flyout dropdown
  'badge'    => ['label' => 'New', 'class' => 'badge-light-primary'], // Optional: status badge
  'target'   => '_blank'                        // Optional: HTML link target
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.struktur-config-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. RECURSIVE BLADE RENDERER FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-7 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_4') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_6') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. MENU TITLE TRANSLATION KEY NORMALIZATION ENGINE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>// Helper Formula:
$titleKey = 'menu.' . strtolower(
  str_replace([' ', '&amp;', '/'], ['_', 'and', '_'], $menu['title'])
);

// Evaluated logic:
// If key exists in lang/*/menu.php -> render translated text
// If key is missing -> fallback to original title string</code></pre>
                            <ul class="schema-list mt-4 fs-7">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. ACTIVE STATE RULES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-toggle-on fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_13') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. CHECKLIST & STEPS TO ADD NEW MENU ITEMS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_10') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. REAL IMPLEMENTATION BEFORE/AFTER EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_9') }}
                            </h4>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-danger">BEFORE Adding New Menu Item</h6>
                                    <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Overview',
      'route' => 'help.pemrograman.skema.overview',
    ],
  ],
]</code></pre>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-success">AFTER Adding New Menu Items</h6>
                                    <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Overview',
      'route' => 'help.pemrograman.skema.overview',
    ],
    [
      'title' => 'Skema Struktur Config Menu',
      'route' => 'help.pemrograman.skema.struktur-config-menu',
    ],
    [
      'title' => 'Skema Cache & Deployment',
      'route' => 'help.pemrograman.skema.cache-dan-deployment',
    ],
  ],
]</code></pre>
                                </div>
                            </div>
                            <div class="schema-flow mt-4">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. MENU CONFIGURATION TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_8') }}
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
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_14') !!}</td>
                                            <td>Translation key mismatch between title normalization and `lang/*/menu.php`.</td>
                                            <td>Ensure key `menu.<normalized_title>` exists in both `lang/en/menu.php` and `lang/id/menu.php`.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_15') !!}</td>
                                            <td>Mismatch in route name string or `routeIs` wildcard pattern not matching active child route.</td>
                                            <td>Verify route name using `php artisan route:list` and ensure wildcard `routeIs` pattern matches child.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_16') !!}</td>
                                            <td>Invalid icon class string or incorrect `paths` count parameter.</td>
                                            <td>Use valid Keenicons class (e.g. `ki-duotone ki-element-11`) and set `paths` equal to span count.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_17') !!}</td>
                                            <td>Application config cache or view cache active in environment.</td>
                                            <td>Execute `php artisan config:clear` and `php artisan view:clear` in terminal.</td>
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
                    <!-- 1. MENU DATA ORCHESTRATION FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CORE FILE MAP -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. PHP MENU DATA STRUCTURE CONTRACT -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>[
  'title'    => 'Skema Route',                  // Wajib: dikonversi ke key translasi menu.*
  'route'    => 'help.pemrograman.skema.route', // Opsional: nama route internal Laravel
  'href'     => 'https://example.com',          // Opsional: tautan web eksternal
  'icon'     => 'ki-duotone ki-route fs-2',     // Opsional: class ikon Keenicons
  'paths'    => 4,                              // Opsional: jumlah span duotone icon
  'children' => [...],                          // Opsional: array menu turunan
  'dropdown' => true,                           // Opsional: render child sebagai flyout dropdown
  'badge'    => ['label' => 'Baru', 'class' => 'badge-light-primary'], // Opsional: badge status
  'target'   => '_blank'                        // Opsional: target link HTML
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.struktur-config-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. RECURSIVE BLADE RENDERER FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-7 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_4') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_6') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. MENU TITLE TRANSLATION KEY NORMALIZATION ENGINE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>// Formula Helper:
$titleKey = 'menu.' . strtolower(
  str_replace([' ', '&amp;', '/'], ['_', 'and', '_'], $menu['title'])
);

// Logika Evaluasi:
// Jika key ada di lang/*/menu.php -> tampilkan teks terjemahan
// Jika key tidak ditemukan -> fallback ke teks judul asli</code></pre>
                            <ul class="schema-list mt-4 fs-7">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. ACTIVE STATE RULES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-toggle-on fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_13') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. CHECKLIST & STEPS TO ADD NEW MENU ITEMS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_10') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. REAL IMPLEMENTATION BEFORE/AFTER EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_9') }}
                            </h4>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-danger">SEBELUM Menambah Item Menu Baru</h6>
                                    <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Overview',
      'route' => 'help.pemrograman.skema.overview',
    ],
  ],
]</code></pre>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-success">SESUDAH Menambah Item Menu Baru</h6>
                                    <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Overview',
      'route' => 'help.pemrograman.skema.overview',
    ],
    [
      'title' => 'Skema Struktur Config Menu',
      'route' => 'help.pemrograman.skema.struktur-config-menu',
    ],
    [
      'title' => 'Skema Cache & Deployment',
      'route' => 'help.pemrograman.skema.cache-dan-deployment',
    ],
  ],
]</code></pre>
                                </div>
                            </div>
                            <div class="schema-flow mt-4">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. MENU CONFIGURATION TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.struktur-config-menu.heading_8') }}
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
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_14') !!}</td>
                                            <td>Ketidakcocokan key translasi antara hasil normalisasi judul dengan `lang/*/menu.php`.</td>
                                            <td>Pastikan key `menu.<judul_ter-normalisasi>` tersedia di `lang/en/menu.php` dan `lang/id/menu.php`.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_15') !!}</td>
                                            <td>Ketidakcocokan nama route atau pola wildcard `routeIs` tidak menutup sub-route aktif.</td>
                                            <td>Verifikasi nama route dengan `php artisan route:list` dan pastikan pola `routeIs` mencakup child route.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_16') !!}</td>
                                            <td>Class ikon tidak valid atau atribut `paths` tidak sesuai dengan jumlah span icon.</td>
                                            <td>Gunakan class Keenicons valid (misal `ki-duotone ki-element-11`) dan sesuaikan atribut `paths`.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.struktur-config-menu.item_17') !!}</td>
                                            <td>Cache konfigurasi aplikasi atau cache view sedang aktif di environment.</td>
                                            <td>Jalankan `php artisan config:clear` dan `php artisan view:clear` di terminal.</td>
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