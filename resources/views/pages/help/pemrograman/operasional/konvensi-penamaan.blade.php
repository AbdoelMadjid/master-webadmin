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
            {{ __('help.konvensi_penamaan') }}
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
                        <i class="ki-duotone ki-text-align-left text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Naming Convention
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.konvensi-penamaan.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.konvensi-penamaan.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.konvensi-penamaan.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-element-3 fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.konvensi-penamaan.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-database fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.konvensi-penamaan.chip_3') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-javascript fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.konvensi-penamaan.chip_4') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. BLADE VIEWS, PARTIALS & SUB-TABS (kebab-case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_3') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>resources/views/pages/
└─ appsupport/
   ├─ app-profil.blade.php
   ├─ partials/
   │  └─ app-profil-form.blade.php
   └─ tabs/
      └─ _keamanan.blade.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLERS, MODELS & REQUESTS (PascalCase Mirror) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_6') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>App/
├─ Http/Controllers/AppSupport/AppProfilController.php
├─ Models/AppSupport/AppProfil.php
└─ Http/Requests/AppSupport/AppProfilRequest.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ROUTE NAMES & URL PATHS (kebab-case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_7') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Route Name (dot-separated kebab-case):
appsupport.app-profil

// URL Path (slash-separated kebab-case):
/appsupport/app-profil</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. DATABASE SCHEMAS & MIGRATIONS (snake_case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-database fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_10') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>Schema::create('app_profiles', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained();
    $table->string('app_name');
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. i18n TRANSLATION KEYS (snake_case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_12') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// lang/en/menu.php (Menu translation)
'app_profil' => 'App Profile',

// lang/en/help.php (Page translation)
'pages.operasional.konvensi-penamaan.hero_title' => 'Naming Conventions',</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CONTROLLER METHODS & JS HELPERS (camelCase) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-javascript fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_13') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_14') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Controller Action Methods (camelCase):
public function index() { ... }
public function getDatatable(Request $request) { ... }

// JS Helper Methods (camelCase):
SwalHelper.success('Data saved successfully');
SwalHelper.validationError(xhr);</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. SUMMARY MATRIX TABLE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-table fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_7') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle fs-7 mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="min-w-150px">Entity Component</th>
                                            <th class="min-w-150px">Naming Convention</th>
                                            <th class="min-w-200px">Example Path / Identifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Blade View File</td>
                                            <td><code>kebab-case.blade.php</code></td>
                                            <td><code>pages/appsupport/app-profil.blade.php</code></td>
                                        </tr>
                                        <tr>
                                            <td>Controller Class</td>
                                            <td><code>PascalCaseController</code></td>
                                            <td><code>AppSupport\AppProfilController</code></td>
                                        </tr>
                                        <tr>
                                            <td>Model Class</td>
                                            <td><code>PascalCase</code> (Singular)</td>
                                            <td><code>AppSupport\AppProfil</code></td>
                                        </tr>
                                        <tr>
                                            <td>Form Request Class</td>
                                            <td><code>PascalCaseRequest</code></td>
                                            <td><code>AppSupport\AppProfilRequest</code></td>
                                        </tr>
                                        <tr>
                                            <td>Route Name</td>
                                            <td><code>dot.kebab-case</code></td>
                                            <td><code>appsupport.app-profil</code></td>
                                        </tr>
                                        <tr>
                                            <td>Database Table</td>
                                            <td><code>snake_case</code> (Plural)</td>
                                            <td><code>app_profiles</code></td>
                                        </tr>
                                        <tr>
                                            <td>Menu Translation Key</td>
                                            <td><code>menu.snake_case</code></td>
                                            <td><code>menu.app_profil</code></td>
                                        </tr>
                                        <tr>
                                            <td>JS Helper Method</td>
                                            <td><code>camelCase()</code></td>
                                            <td><code>SwalHelper.validationError(xhr)</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. NAMING VERIFICATION & OPERATIONAL CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_8') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_4') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.konvensi-penamaan.note_1') !!}</div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. BLADE VIEWS, PARTIALS & SUB-TABS (kebab-case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_3') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>resources/views/pages/
└─ appsupport/
   ├─ app-profil.blade.php
   ├─ partials/
   │  └─ app-profil-form.blade.php
   └─ tabs/
      └─ _keamanan.blade.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLERS, MODELS & REQUESTS (PascalCase Mirror) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_6') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>App/
├─ Http/Controllers/AppSupport/AppProfilController.php
├─ Models/AppSupport/AppProfil.php
└─ Http/Requests/AppSupport/AppProfilRequest.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ROUTE NAMES & URL PATHS (kebab-case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_7') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Route Name (dot-separated kebab-case):
appsupport.app-profil

// URL Path (slash-separated kebab-case):
/appsupport/app-profil</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. DATABASE SCHEMAS & MIGRATIONS (snake_case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-database fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_10') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>Schema::create('app_profiles', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained();
    $table->string('app_name');
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. i18n TRANSLATION KEYS (snake_case) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_12') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// lang/id/menu.php (Translasi Menu)
'app_profil' => 'Profil Aplikasi',

// lang/id/help.php (Translasi Halaman)
'pages.operasional.konvensi-penamaan.hero_title' => 'Konvensi Penamaan',</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CONTROLLER METHODS & JS HELPERS (camelCase) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-javascript fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_13') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_14') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Method Aksi Controller (camelCase):
public function index() { ... }
public function getDatatable(Request $request) { ... }

// Method Helper JS (camelCase):
SwalHelper.success('Data berhasil disimpan');
SwalHelper.validationError(xhr);</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. SUMMARY MATRIX TABLE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-table fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_7') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle fs-7 mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="min-w-150px">Komponen Entitas</th>
                                            <th class="min-w-150px">Konvensi Penamaan</th>
                                            <th class="min-w-200px">Contoh Berkas / Identifier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Berkas View Blade</td>
                                            <td><code>kebab-case.blade.php</code></td>
                                            <td><code>pages/appsupport/app-profil.blade.php</code></td>
                                        </tr>
                                        <tr>
                                            <td>Kelas Controller</td>
                                            <td><code>PascalCaseController</code></td>
                                            <td><code>AppSupport\AppProfilController</code></td>
                                        </tr>
                                        <tr>
                                            <td>Kelas Model</td>
                                            <td><code>PascalCase</code> (Singular)</td>
                                            <td><code>AppSupport\AppProfil</code></td>
                                        </tr>
                                        <tr>
                                            <td>Kelas Form Request</td>
                                            <td><code>PascalCaseRequest</code></td>
                                            <td><code>AppSupport\AppProfilRequest</code></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Route</td>
                                            <td><code>dot.kebab-case</code></td>
                                            <td><code>appsupport.app-profil</code></td>
                                        </tr>
                                        <tr>
                                            <td>Tabel Database</td>
                                            <td><code>snake_case</code> (Plural)</td>
                                            <td><code>app_profiles</code></td>
                                        </tr>
                                        <tr>
                                            <td>Key Translasi Menu</td>
                                            <td><code>menu.snake_case</code></td>
                                            <td><code>menu.app_profil</code></td>
                                        </tr>
                                        <tr>
                                            <td>Method Helper JS</td>
                                            <td><code>camelCase()</code></td>
                                            <td><code>SwalHelper.validationError(xhr)</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. NAMING VERIFICATION & OPERATIONAL CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.konvensi-penamaan.heading_8') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_4') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.konvensi-penamaan.note_1') !!}</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection