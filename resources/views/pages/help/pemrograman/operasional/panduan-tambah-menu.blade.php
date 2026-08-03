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
                                <i class="ki-duotone ki-message-text-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
                    <!-- 10. DYNAMIC ONLINE MENU MANAGEMENT VIA ROUTE /appsupport/menu -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-primary">
                            <h4 class="d-flex align-items-center mb-3 text-primary">
                                <i class="ki-duotone ki-element-plus fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Dynamic Online Menu Management via Route <code>appsupport/menu</code>
                            </h4>
                            <p class="fs-7 text-gray-700 mb-4">
                                In addition to static menu seeders, the system provides a centralized dynamic menu management module accessible at <code>/appsupport/menu</code>. This feature allows administrators to manage sidebar menus directly from the Web UI in real-time.
                            </p>
                            <div class="schema-grid">
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary border-opacity-25 mb-3">
                                        <h5 class="fw-bold text-primary mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-plus-circle fs-4 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                            Single Menu & Batch Creator
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Single Menu Creator:</strong> Add individual menu items with customized Name, Route/URL, Category, Parent, and Keenicon class.</li>
                                            <li><strong>Batch Creator (Tambah Partai):</strong> Build an entire 3-level menu tree (Main Menu &rarr; Sub-Menus &rarr; Sub-Sub-Menus) in a single transaction.</li>
                                            <li><strong>Existing Main Menu Mode:</strong> Attach new batch sub-menus directly into existing Main Menus without duplicating main menu rows.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-success rounded border border-success border-opacity-25 mb-3">
                                        <h5 class="fw-bold text-success mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-route fs-4 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            Real-time Auto-slugging & Auto-translation
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Container Routes (No Dash):</strong> Main menus and parent sub-menus with children automatically generate concatenated slugs without dashes (e.g., <code>manajemensekolah</code>, <code>datakeahlian</code>).</li>
                                            <li><strong>Leaf Target Routes (With Dash):</strong> Final page routes without children automatically use dashed slugs (e.g., <code>tahun-ajaran</code>, <code>bidang-keahlian</code>).</li>
                                            <li><strong>Bilingual Auto-translation:</strong> Indonesian menu names automatically trigger debounced English translations into <code>lang/en/menu.php</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-warning rounded border border-warning border-opacity-25">
                                        <h5 class="fw-bold text-warning mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-shield-tick fs-4 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                            Automated Permissions & Roles
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Container Permissions:</strong> Parent container menus automatically receive <code>['read']</code> permission.</li>
                                            <li><strong>Leaf Route Permissions:</strong> Active target page routes automatically receive full CRUD permissions (<code>['create', 'read', 'update', 'delete']</code>).</li>
                                            <li><strong>Role Assignment:</strong> All newly created batch menus automatically attach to the <code>admin</code> role.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-danger rounded border border-danger border-opacity-25">
                                        <h5 class="fw-bold text-danger mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-trash fs-4 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            Recursive Cascade Delete & Key Cleanup
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Cascade Deletion:</strong> Deleting a parent menu (Level 0 or Level 1) automatically deletes all nested child menus underneath.</li>
                                            <li><strong>FK 1451 Safeguard:</strong> Unsets <code>main_menu_id = null</code> before deletion to bypass MySQL foreign key constraint failures.</li>
                                            <li><strong>Translation Key Cleanup:</strong> Purges unused translation keys (<code>title_key</code>) from both <code>lang/id/menu.php</code> and <code>lang/en/menu.php</code> automatically.</li>
                                        </ul>
                                    </div>
                                </div>
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
                                <i class="ki-duotone ki-message-text-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
                                <i class="ki-duotone ki-shield-tick fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-menu.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                    <!--====================================================-->
                    <!-- 10. OPERASIONAL MANAJEMEN MENU DINAMIS VIA ROUTE /appsupport/menu -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-primary">
                            <h4 class="d-flex align-items-center mb-3 text-primary">
                                <i class="ki-duotone ki-element-plus fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Operasional Manajemen Menu Dinamis Online via Route <code>appsupport/menu</code>
                            </h4>
                            <p class="fs-7 text-gray-700 mb-4">
                                Selain penambahan menu secara statis melalui seeder, sistem menyediakan modul pengelolaan menu terpusat berbasis antarmuka online yang dapat diakses pada route <code>/appsupport/menu</code>. Fitur ini memungkinkan pengelola sistem menambahkan, mengubah, mengurutkan, dan menghapus menu secara real-time dari Web UI.
                            </p>
                            <div class="schema-grid">
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-primary rounded border border-primary border-opacity-25 mb-3">
                                        <h5 class="fw-bold text-primary mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-plus-circle fs-4 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                            Tambah Menu Tunggal & Partai (Batch Creator)
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Tambah Menu Tunggal:</strong> Menambahkan 1 item menu dengan kustomisasi Nama, Route/URL, Kategori, Induk Menu, dan Ikon Keenicons.</li>
                                            <li><strong>Tambah Partai Menu (Batch Creator):</strong> Menyusun seluruh pohon menu 3-tingkat (Menu Utama &rarr; Sub-Menu &rarr; Sub-Sub-Menu) sekaligus dalam 1 kali simpan.</li>
                                            <li><strong>Mode Menu Utama yang Ada:</strong> Menautkan sekelompok sub-menu baru ke Menu Utama yang sudah tersimpan di database tanpa membuat menu utama ganda.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-success rounded border border-success border-opacity-25 mb-3">
                                        <h5 class="fw-bold text-success mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-route fs-4 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            Otomatisasi Route/URL & Penerjemah Real-Time
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Route Kontainer Induk (Tanpa Strip):</strong> Menu utama & sub-menu induk yang memuat anak otomatis menghasilkan slug tersambung tanpa tanda strip (contoh: <code>manajemensekolah</code>, <code>datakeahlian</code>).</li>
                                            <li><strong>Route Target Halaman (Dengan Strip):</strong> Route akhir pemanggilan halaman tanpa anak otomatis menggunakan tanda strip (contoh: <code>tahun-ajaran</code>, <code>bidang-keahlian</code>).</li>
                                            <li><strong>Penerjemah Bahasa Inggris Otomatis:</strong> Pengetikan nama menu Bahasa Indonesia secara otomatis menerjemahkan nama Bahasa Inggris dan meng-update file <code>lang/en/menu.php</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-warning rounded border border-warning border-opacity-25">
                                        <h5 class="fw-bold text-warning mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-shield-tick fs-4 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                            Otomatisasi Perizinan (Permissions) & Role
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Perizinan Menu Kontainer:</strong> Menu induk kontainer secara otomatis hanya diberikan hak akses <code>['read']</code>.</li>
                                            <li><strong>Perizinan Target Halaman:</strong> Route halaman aktif secara otomatis diberikan hak akses CRUD penuh (<code>['create', 'read', 'update', 'delete']</code>).</li>
                                            <li><strong>Penetapan Role:</strong> Seluruh menu baru yang dibuat secara partai otomatis ditautkan ke role <code>admin</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="schema-col-6">
                                    <div class="p-4 bg-light-danger rounded border border-danger border-opacity-25">
                                        <h5 class="fw-bold text-danger mb-2 d-flex align-items-center">
                                            <i class="ki-duotone ki-trash fs-4 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            Penghapusan Kaskade & Pembersihan Key
                                        </h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Kaskade Penghapusan:</strong> Menghapus menu induk (Level 0 atau Level 1) secara otomatis menghapus seluruh anak menu di dalamnya secara rekursif.</li>
                                            <li><strong>Proteksi FK Constraint 1451:</strong> Mengosongkan <code>main_menu_id = null</code> sebelum delete untuk mencegah error MySQL foreign key constraint.</li>
                                            <li><strong>Pembersihan Key Translasi:</strong> Menghapus key translasi (<code>title_key</code>) yang tidak terpakai dari file <code>lang/id/menu.php</code> dan <code>lang/en/menu.php</code> secara otomatis.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
