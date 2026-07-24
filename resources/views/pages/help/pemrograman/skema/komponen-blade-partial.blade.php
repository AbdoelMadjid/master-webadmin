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
            {{ __('help.skema_komponen_blade_and_partial') }}
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
                        <i class="ki-duotone ki-category text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        Blade Component &amp; Partial Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.komponen-blade-partial.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.komponen-blade-partial.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-check-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.komponen-blade-partial.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-element-plus fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.komponen-blade-partial.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.komponen-blade-partial.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. 4 MAIN BLADE DIRECTIVES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_1') }}
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                The four foundational directives used to compose layouts, partial views, and reusable components across the application:
                            </p>

                            <div class="row g-3">
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-primary me-2 fw-bold fs-8">1</span>
                                            <h6 class="mb-0 text-primary fw-bold"><code>@@extends</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_1') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-info me-2 fw-bold fs-8">2</span>
                                            <h6 class="mb-0 text-info fw-bold"><code>@@include</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_2') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-warning me-2 fw-bold fs-8">3</span>
                                            <h6 class="mb-0 text-warning fw-bold"><code>@@component</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_3') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-success me-2 fw-bold fs-8">4</span>
                                            <h6 class="mb-0 text-success fw-bold"><code>&lt;x-...&gt;</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_4') !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. DECISION MATRIX: PARTIAL VS COMPONENT -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-compass fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_13') !!}
                                </div>
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_1') !!}
                                </div>
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_2') !!}
                                </div>
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_3') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. RECOMMENDED FOLDER ARCHITECTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>resources/views/
├─ layouts/
│  └─ partials/              # Global layout fragments (_toolbar, header, sidebar)
├─ partials/                 # Shared UI partials (menus, modals, widgets)
├─ components/               # Reusable Blade Components (<x-ui.*>, <x-forms.*>)
│  ├─ ui/                    # Generic UI components (stat-card, info-card, badge)
│  └─ forms/                 # Form input components (select, date-picker, input)
└─ pages/
   └─ <feature>/
      └─ partials/           # Feature-scoped partials (crud-form, tab-view)</code></pre>
                            <div class="schema-note mt-3">
                                {!! __('help.pages.skema.komponen-blade-partial.note_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. SIMPLE PARTIAL IMPLEMENTATION EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-document fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// Parent View: resources/views/pages/appsupport/app-profil.blade.php
@@include('pages.appsupport.partials.app-profil-form', [
    'isEdit' => true,
    'profil' => $appProfilData
])

// Target Partial: resources/views/pages/appsupport/partials/app-profil-form.blade.php
&lt;form action="@{{ route('appsupport.app-profil.update') }}" method="POST"&gt;
    @@csrf
    &lt;input type="text" name="app_name" value="@{{ $profil->app_name }}" class="form-control" /&gt;
&lt;/form&gt;</code></pre>
                            <ul class="schema-list mt-3 fs-7">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. REUSABLE BLADE COMPONENT EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>// Component: resources/views/components/ui/info-card.blade.php
@@props(['title', 'icon' => 'ki-abstract-26', 'color' => 'primary'])

&lt;div class="card card-flush border-start border-4 border-@{{ $color }} h-100"&gt;
    &lt;div class="card-body"&gt;
        &lt;i class="ki-duotone @{{ $icon }} fs-2hx text-@{{ $color }} me-2"&gt;&lt;/i&gt;
        &lt;h4 class="fw-bold mt-2"&gt;@{{ $title }}&lt;/h4&gt;
        @{{ $slot }}
    &lt;/div&gt;
&lt;/div&gt;

// Caller View Usage:
&lt;x-ui.info-card title="System Telemetry" icon="ki-chart-line" color="info"&gt;
    &lt;p class="text-gray-600 fs-7"&gt;Real-time application health metrics.&lt;/p&gt;
&lt;/x-ui.info-card&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. FILE & PROP NAMING CONVENTIONS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-text-align-left fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. ANTI-PATTERNS TO AVOID -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center text-dark">
                                <i class="ki-duotone ki-cross-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_14') !!}</li>
                            </ul>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.komponen-blade-partial.warn_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. CHECKLIST WHEN CREATING NEW UI -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. STRICT ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_9') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_12') !!}</div>
                            </div>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. COMPONENT BOILERPLATE STAT CARD -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-chart-simple fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_10') }}
                            </h4>
                            <pre class="schema-code"><code>// resources/views/components/ui/stat-card.blade.php
@@props([
  'title',
  'value',
  'icon' => 'ki-chart-simple',
  'color' => 'primary',
  'subtitle' => null,
  'badge' => null,
])

@@php
  $allowedColors = ['primary', 'success', 'warning', 'danger', 'info', 'dark'];
  $color = in_array($color, $allowedColors, true) ? $color : 'primary';
@@endphp

&lt;div class="card card-flush h-100"&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="d-flex align-items-center mb-3"&gt;
      &lt;i class="ki-duotone @{{ $icon }} fs-2hx text-@{{ $color }} me-3"&gt;&lt;/i&gt;
      &lt;div&gt;
        &lt;h3 class="mb-0"&gt;@{{ $title }}&lt;/h3&gt;
        @@if($subtitle)&lt;div class="text-gray-600 fs-7"&gt;@{{ $subtitle }}&lt;/div&gt;@@endif
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="fs-2 fw-bold"&gt;@{{ $value }}&lt;/div&gt;
    @@if($badge)&lt;span class="badge badge-light-@{{ $color }} mt-2"&gt;@{{ $badge }}&lt;/span&gt;@@endif
    @{{ $slot }}
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. COMPONENT USAGE IN VIEW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-click fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_11') }}
                            </h4>
                            <pre class="schema-code"><code>&lt;x-ui.stat-card
  title="Active Users"
  value="2,480"
  icon="ki-profile-user"
  color="success"
  subtitle="Last 30 Days"
  badge="+14.2%"
&gt;
  &lt;a href="@{{ route('manajemenpengguna.users') }}" 
     class="btn btn-sm btn-light-success mt-4"&gt;
    View Details
  &lt;/a&gt;
&lt;/x-ui.stat-card&gt;</code></pre>
                            <div class="schema-note mt-3">
                                {!! __('help.pages.skema.komponen-blade-partial.note_2') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_12') }}
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
                                            <td>Undefined variable <code>$var</code> in partial</td>
                                            <td>Variable not passed in <code>@@include</code> array or missing from caller view</td>
                                            <td>Pass variable explicitly in second parameter array: <code>@@include('file', ['var' => $val])</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Component tag <code>&lt;x-...&gt;</code> rendered as raw HTML text</td>
                                            <td>File path inside <code>resources/views/components/</code> does not match tag name</td>
                                            <td>Ensure file is located at <code>components/ui/stat-card.blade.php</code> for <code>&lt;x-ui.stat-card&gt;</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Prop value defaults to null unexpectedly</td>
                                            <td>Missing default value definition in <code>@@props([...])</code></td>
                                            <td>Define fallback default values in `@props(['icon' => 'ki-abstract-26'])`.</td>
                                        </tr>
                                        <tr>
                                            <td>Named slot content not rendering</td>
                                            <td>Slot name typo between caller <code>&lt;x-slot:name&gt;</code> and component <code>$name</code></td>
                                            <td>Match slot names precisely: <code>&lt;x-slot:header&gt;</code> mapping to <code>@{{ $header }}</code>.</td>
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
                    <!-- 1. 4 MAIN BLADE DIRECTIVES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_1') }}
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Empat directive dasar yang digunakan untuk menyusun kerangka layout, potongan partial view, dan komponen reusable di seluruh aplikasi:
                            </p>

                            <div class="row g-3">
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-primary me-2 fw-bold fs-8">1</span>
                                            <h6 class="mb-0 text-primary fw-bold"><code>@@extends</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_1') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-info me-2 fw-bold fs-8">2</span>
                                            <h6 class="mb-0 text-info fw-bold"><code>@@include</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_2') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-warning me-2 fw-bold fs-8">3</span>
                                            <h6 class="mb-0 text-warning fw-bold"><code>@@component</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_3') !!}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-success me-2 fw-bold fs-8">4</span>
                                            <h6 class="mb-0 text-success fw-bold"><code>&lt;x-...&gt;</code></h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">{!! __('help.pages.skema.komponen-blade-partial.item_4') !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. DECISION MATRIX: PARTIAL VS COMPONENT -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-compass fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_13') !!}
                                </div>
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_1') !!}
                                </div>
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_2') !!}
                                </div>
                                <div class="schema-step">
                                    {!! __('help.pages.skema.komponen-blade-partial.step_3') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. RECOMMENDED FOLDER ARCHITECTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>resources/views/
├─ layouts/
│  └─ partials/              # Fragmen layout global (_toolbar, header, sidebar)
├─ partials/                 # Partial UI shared (menus, modals, widgets)
├─ components/               # Reusable Blade Components (<x-ui.*>, <x-forms.*>)
│  ├─ ui/                    # Komponen UI generik (stat-card, info-card, badge)
│  └─ forms/                 # Komponen input form (select, date-picker, input)
└─ pages/
   └─ <fitur>/
      └─ partials/           # Partial terikat fitur (crud-form, tab-view)</code></pre>
                            <div class="schema-note mt-3">
                                {!! __('help.pages.skema.komponen-blade-partial.note_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. SIMPLE PARTIAL IMPLEMENTATION EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-document fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// Parent View: resources/views/pages/appsupport/app-profil.blade.php
@@include('pages.appsupport.partials.app-profil-form', [
    'isEdit' => true,
    'profil' => $appProfilData
])

// Target Partial: resources/views/pages/appsupport/partials/app-profil-form.blade.php
&lt;form action="@{{ route('appsupport.app-profil.update') }}" method="POST"&gt;
    @@csrf
    &lt;input type="text" name="app_name" value="@{{ $profil->app_name }}" class="form-control" /&gt;
&lt;/form&gt;</code></pre>
                            <ul class="schema-list mt-3 fs-7">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. REUSABLE BLADE COMPONENT EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>// Komponen: resources/views/components/ui/info-card.blade.php
@@props(['title', 'icon' => 'ki-abstract-26', 'color' => 'primary'])

&lt;div class="card card-flush border-start border-4 border-@{{ $color }} h-100"&gt;
    &lt;div class="card-body"&gt;
        &lt;i class="ki-duotone @{{ $icon }} fs-2hx text-@{{ $color }} me-2"&gt;&lt;/i&gt;
        &lt;h4 class="fw-bold mt-2"&gt;@{{ $title }}&lt;/h4&gt;
        @{{ $slot }}
    &lt;/div&gt;
&lt;/div&gt;

// Pemanggilan di View:
&lt;x-ui.info-card title="Telemetri Sistem" icon="ki-chart-line" color="info"&gt;
    &lt;p class="text-gray-600 fs-7"&gt;Metrik kesehatan aplikasi real-time.&lt;/p&gt;
&lt;/x-ui.info-card&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. FILE & PROP NAMING CONVENTIONS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-text-align-left fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. ANTI-PATTERNS TO AVOID -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center text-dark">
                                <i class="ki-duotone ki-cross-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_14') !!}</li>
                            </ul>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.komponen-blade-partial.warn_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. CHECKLIST WHEN CREATING NEW UI -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. STRICT ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_9') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_12') !!}</div>
                            </div>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. COMPONENT BOILERPLATE STAT CARD -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-chart-simple fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_10') }}
                            </h4>
                            <pre class="schema-code"><code>// resources/views/components/ui/stat-card.blade.php
@@props([
  'title',
  'value',
  'icon' => 'ki-chart-simple',
  'color' => 'primary',
  'subtitle' => null,
  'badge' => null,
])

@@php
  $allowedColors = ['primary', 'success', 'warning', 'danger', 'info', 'dark'];
  $color = in_array($color, $allowedColors, true) ? $color : 'primary';
@@endphp

&lt;div class="card card-flush h-100"&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="d-flex align-items-center mb-3"&gt;
      &lt;i class="ki-duotone @{{ $icon }} fs-2hx text-@{{ $color }} me-3"&gt;&lt;/i&gt;
      &lt;div&gt;
        &lt;h3 class="mb-0"&gt;@{{ $title }}&lt;/h3&gt;
        @@if($subtitle)&lt;div class="text-gray-600 fs-7"&gt;@{{ $subtitle }}&lt;/div&gt;@@endif
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="fs-2 fw-bold"&gt;@{{ $value }}&lt;/div&gt;
    @@if($badge)&lt;span class="badge badge-light-@{{ $color }} mt-2"&gt;@{{ $badge }}&lt;/span&gt;@@endif
    @{{ $slot }}
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. COMPONENT USAGE IN VIEW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-click fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_11') }}
                            </h4>
                            <pre class="schema-code"><code>&lt;x-ui.stat-card
  title="Pengguna Aktif"
  value="2,480"
  icon="ki-profile-user"
  color="success"
  subtitle="30 Hari Terakhir"
  badge="+14.2%"
&gt;
  &lt;a href="@{{ route('manajemenpengguna.users') }}" 
     class="btn btn-sm btn-light-success mt-4"&gt;
    Lihat Detail
  &lt;/a&gt;
&lt;/x-ui.stat-card&gt;</code></pre>
                            <div class="schema-note mt-3">
                                {!! __('help.pages.skema.komponen-blade-partial.note_2') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.komponen-blade-partial.heading_12') }}
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
                                            <td>Undefined variable <code>$var</code> di dalam partial</td>
                                            <td>Variabel tidak dikirim di array <code>@@include</code> atau tidak ada pada caller view</td>
                                            <td>Kirim variabel secara eksplisit pada argumen kedua: <code>@@include('file', ['var' => $val])</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Tag komponen <code>&lt;x-...&gt;</code> tampil sebagai teks HTML mentah</td>
                                            <td>Lokasi file di <code>resources/views/components/</code> tidak cocok dengan nama tag</td>
                                            <td>Pastikan berkas berada di <code>components/ui/stat-card.blade.php</code> untuk <code>&lt;x-ui.stat-card&gt;</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai prop menjadi null secara tidak terduga</td>
                                            <td>Lupa memberikan nilai default pada deklarasi <code>@@props([...])</code></td>
                                            <td>Deklarasikan default fallback pada `@props(['icon' => 'ki-abstract-26'])`.</td>
                                        </tr>
                                        <tr>
                                            <td>Konten named slot tidak merender</td>
                                            <td>Typo nama slot antara pemanggil <code>&lt;x-slot:nama&gt;</code> dengan komponen <code>$nama</code></td>
                                            <td>Pastikan nama slot presisi: <code>&lt;x-slot:header&gt;</code> terpetakan ke <code>@{{ $header }}</code>.</td>
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