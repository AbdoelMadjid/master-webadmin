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
            {{ __('help.panduan_tambah_menu') }}
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
                        <i class="ki-duotone ki-element-plus text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Menu Operation Guide
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.panduan-tambah-menu.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.panduan-tambah-menu.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.panduan-tambah-menu.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-folder fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.panduan-tambah-menu.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-route fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.panduan-tambah-menu.chip_3') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-star fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.panduan-tambah-menu.chip_4') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. 3 CORE STEPS TO ADD A NEW MENU ITEM -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONFIG MODULARIZATION & MENU SEEDERS BY CATEGORY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_15') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_16') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_17') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>config/
├─ sidebar/_sidebar_dashboard.php
├─ sidebar/_sidebar_apps.php
├─ sidebar/_sidebar_helps.php
└─ menu_seeder/
   ├─ appsupport_seeder.php
   └─ manajemen_pengguna_seeder.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. DECISION GUIDE: WHEN TO USE route VS href -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_18') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_19') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_20') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// RECOMMENDED: Internal named route
[
  'title' => 'User Management',
  'route' => 'manajemen-pengguna.user.index', // auto active state via request()->routeIs('manajemen-pengguna.user.*')
]

// EXTERNAL / ANCHOR: Direct href with target="_blank"
[
  'title'  => 'External Documentation',
  'href'   => 'https://laravel.com/docs',
  'target' => '_blank', // Security & UX mandatory
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. MENU CONFIGURATION OPTIONAL ATTRIBUTES & FEATURES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-star fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_21') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_22') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_23') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_24') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_25') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_26') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Example menu item with optional attributes:
[
  'title'    => 'New Feature',
  'route'    => 'appsupport.feature',
  'badge'    => ['text' => 'New', 'class' => 'badge-light-success'],
  'icon'     => ['element' => 'ki-duotone ki-rocket', 'paths' => 2],
  'bullet'   => true,
  'dropdown' => true, // Flyout submenu mode for parents
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. PHP MENU ARRAY DATA STRUCTURE CONTRACT -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>// A. Leaf item link:
[
  'title' => 'Panduan Tambah Menu',
  'route' => 'help.pemrograman.operasional.panduan-tambah-menu',
]

// B. Parent node with children:
[
  'title' => 'Skema Pemrograman',
  'children' => [ ... ]
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. TITLE TRANSLATION KEY NORMALIZATION ENGINE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_6') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_2') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. ACTIVE STATE RULES & EVALUATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. MENU DEBUG & TROUBLESHOOTING GUIDE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-wrench fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_8') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. TEAM STANDARD & STRICT RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_13') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_14') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-menu.note_2') !!}</div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. 3 CORE STEPS TO ADD A NEW MENU ITEM -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONFIG MODULARIZATION & MENU SEEDERS BY CATEGORY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_15') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_16') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_17') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>config/
├─ sidebar/_sidebar_dashboard.php
├─ sidebar/_sidebar_apps.php
├─ sidebar/_sidebar_helps.php
└─ menu_seeder/
   ├─ appsupport_seeder.php
   └─ manajemen_pengguna_seeder.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. DECISION GUIDE: WHEN TO USE route VS href -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_18') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_19') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_20') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// REKOMENDASI: Named route internal Laravel
[
  'title' => 'Manajemen Pengguna',
  'route' => 'manajemen-pengguna.user.index', // auto active state via request()->routeIs('manajemen-pengguna.user.*')
]

// EKSTERNAL / ANCHOR: Href langsung dengan target="_blank"
[
  'title'  => 'Dokumentasi Eksternal',
  'href'   => 'https://laravel.com/docs',
  'target' => '_blank', // Wajib demi keamanan & UX
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. MENU CONFIGURATION OPTIONAL ATTRIBUTES & FEATURES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-star fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_21') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_22') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_23') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_24') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_25') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_26') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Contoh item menu dengan atribut opsional:
[
  'title'    => 'Fitur Baru',
  'route'    => 'appsupport.feature',
  'badge'    => ['text' => 'New', 'class' => 'badge-light-success'],
  'icon'     => ['element' => 'ki-duotone ki-rocket', 'paths' => 2],
  'bullet'   => true,
  'dropdown' => true, // Mode submenu flyout melayang untuk parent
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. PHP MENU ARRAY DATA STRUCTURE CONTRACT -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>// A. Leaf item link:
[
  'title' => 'Panduan Tambah Menu',
  'route' => 'help.pemrograman.operasional.panduan-tambah-menu',
]

// B. Parent node dengan children:
[
  'title' => 'Skema Pemrograman',
  'children' => [ ... ]
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. TITLE TRANSLATION KEY NORMALIZATION ENGINE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_6') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_2') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. ACTIVE STATE RULES & EVALUATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. MENU DEBUG & TROUBLESHOOTING GUIDE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-wrench fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_8') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. TEAM STANDARD & STRICT RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_13') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_14') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-menu.note_2') !!}</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
