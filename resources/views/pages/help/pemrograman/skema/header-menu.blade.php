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
            {{ __('help.skema_header_menu') }}
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
                        Header Mega Menu Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.header-menu.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.header-menu.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-category fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ __('help.pages.skema.header-menu.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-tab fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.header-menu.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-layer fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.skema.header-menu.chip_3') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-row fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.header-menu.chip_4') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-setting-2 fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.header-menu.chip_5') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. CORE ORCHESTRATION & FILE MAP -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_24') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_25') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_26') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_1') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. THE 5 SUBMENU UI PATTERNS SUMMARY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_2') }}
                            </h4>
                            <div class="schema-meta mb-3">
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_5') !!}</span>
                            </div>
                            <div class="schema-note">{!! __('help.pages.skema.header-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. DASHBOARDS: MEGA MENU CARD PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. PAGES: MEGA MENU TABBED PANE PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-tab fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_11') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. APPS: RECURSIVE DROPDOWN PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-layer fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_15') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. LAYOUTS: MEGA MENU GRID COLUMN PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-row fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_16') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. HELP: COMPACT HYBRID ICON LIST PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-setting-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_20') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_23') !!}</li>
                            </ul>
                            <pre class="schema-code mt-3"><code>// Example Header Help Config (_header_help.php):
[
  'title'   => 'Programmer Scheme',
  'route'   => 'help.pemrograman.skema.overview',
  'icon'    => 'ki-duotone ki-code fs-2',
  'paths'   => 2,
  'target'  => '_self'
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. PATTERN SELECTION MATRIX: MEGA MENU VS DROPDOWN -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-chart-column fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_2') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.header-menu.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_9') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_5') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. HEADER MENU TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_27') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_28') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_29') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_30') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. CORE ORCHESTRATION & FILE MAP -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_24') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_25') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_26') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_1') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. THE 5 SUBMENU UI PATTERNS SUMMARY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_2') }}
                            </h4>
                            <div class="schema-meta mb-3">
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_5') !!}</span>
                            </div>
                            <div class="schema-note">{!! __('help.pages.skema.header-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. DASHBOARDS: MEGA MENU CARD PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. PAGES: MEGA MENU TABBED PANE PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-tab fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_11') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. APPS: RECURSIVE DROPDOWN PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-layer fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_15') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. LAYOUTS: MEGA MENU GRID COLUMN PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-row fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_16') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. HELP: COMPACT HYBRID ICON LIST PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-setting-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_20') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_23') !!}</li>
                            </ul>
                            <pre class="schema-code mt-3"><code>// Contoh Config Header Help (_header_help.php):
[
  'title'   => 'Skema Pemrograman',
  'route'   => 'help.pemrograman.skema.overview',
  'icon'    => 'ki-duotone ki-code fs-2',
  'paths'   => 2,
  'target'  => '_self'
]</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. PATTERN SELECTION MATRIX: MEGA MENU VS DROPDOWN -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-chart-column fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_2') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.header-menu.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_9') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_5') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. HEADER MENU TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.header-menu.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.header-menu.item_27') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_28') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_29') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_30') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection