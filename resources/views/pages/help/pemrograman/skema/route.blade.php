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
            {{ __('help.skema_route') }}
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
                        <i class="ki-duotone ki-route text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Route Blueprint & Auto-Generator
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.route.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.route.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-check-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.route.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-search fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.route.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.route.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. REQUEST LIFECYCLE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-right-circle fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_1') }}
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Complete lifecycle showing how an HTTP URL request enters Laravel, gets evaluated against auto-generators, and renders the target Blade template or 404 fallback:
                            </p>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-primary me-2 fw-bold fs-7">1</span>
                                            <h6 class="mb-0 text-primary fw-bold">User URL Request</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Browser issues GET request, e.g. <code>/help/pemrograman/skema/route</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-info me-2 fw-bold fs-7">2</span>
                                            <h6 class="mb-0 text-info fw-bold">Web Routes Bootstrap</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            <code>routes/web.php</code> handles explicit custom routes, auth, profile, &amp; controllers.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-success me-2 fw-bold fs-7">3</span>
                                            <h6 class="mb-0 text-success fw-bold">Auto Generator Include</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            <code>routes/web.php</code> executes <code>require routes/menu-temp.php</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-warning me-2 fw-bold fs-7">4</span>
                                            <h6 class="mb-0 text-warning fw-bold">View Scanner</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Scans <code>resources/views/pages/*.blade.php</code> (filters partials &amp; <code>_*</code>).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-dark rounded border border-dark border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-dark me-2 fw-bold fs-7">5</span>
                                            <h6 class="mb-0 text-dark fw-bold">Auth Route Registration</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Binds URI and Route Name into <code>auth</code> middleware group automatically.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-danger me-2 fw-bold fs-7">6</span>
                                            <h6 class="mb-0 text-danger fw-bold">Fallback 404 Handler</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            If no match is found, <code>Route::fallback()</code> renders error-404 page.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. FILE CONVERSION MECHANICS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_2') }}
                            </h4>
                            <p class="fs-7 text-gray-600">
                                Demonstration of how a Blade view file path is automatically parsed into a URI, route name, and view renderer:
                            </p>
                            <pre class="schema-code"><code>// 1. Target Blade File Location:
resources/views/pages/help/pemrograman/skema/route.blade.php

// 2. Relative Path Extraction:
help/pemrograman/skema/route.blade.php

// 3. Extension & Subfolder Normalization:
Relative:  help/pemrograman/skema/route
Route Key: help.pemrograman.skema.route

// 4. Automatic Route Registration Output:
URI:        /help/pemrograman/skema/route
Route Name: help.pemrograman.skema.route
View Target: pages.help.pemrograman.skema.route</code></pre>

                            <div class="schema-note mt-3">
                                <strong>Ignored Files &amp; Subfolders:</strong> Files inside any <code>partials/</code> directory or files starting with an underscore (e.g. <code>_form.blade.php</code>) are automatically excluded from route generation.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. FILE RESPONSIBILITY MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.route.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.route.note_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. QUICK GUIDE: ADDING NEW VIEW PAGE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-plus-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_4') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.route.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_6') !!}</li>
                            </ol>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.route.warn_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. ROUTE EVALUATION PRIORITY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-sort fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.route.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_9') !!}</li>
                            </ul>
                            <div class="mt-3 p-3 bg-light-primary rounded border border-primary border-dashed">
                                <h6 class="fw-bold text-primary fs-7 mb-1">CLI Audit Command:</h6>
                                <code>php artisan route:list --name=help.pemrograman</code>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. STRICT ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4 class="d-flex align-items-center text-dark">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_7') }}
                            </h4>
                            <div class="row g-3 mt-1 fs-7">
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_7') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_8') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_9') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_10') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_8') }}
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
                                            <td>{!! __('help.pages.skema.route.item_11') !!}</td>
                                            <td>File is inside <code>partials/</code> or starts with <code>_</code></td>
                                            <td>Move file directly under <code>resources/views/pages/</code> without underscore.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.route.item_12') !!}</td>
                                            <td>User session expired or user is unauthenticated</td>
                                            <td>Log in first; auto routes require <code>auth</code> middleware.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.route.item_13') !!}</td>
                                            <td>Laravel route or view cache is active</td>
                                            <td>Run <code>php artisan route:clear &amp;&amp; php artisan view:clear</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.route.item_14') !!}</td>
                                            <td>Duplicate route name defined in <code>web.php</code></td>
                                            <td>Check output of <code>php artisan route:list</code> and adjust route name.</td>
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
                    <!-- 1. REQUEST LIFECYCLE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-right-circle fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_1') }}
                            </h4>
                            <p class="fs-7 text-gray-600 mb-4">
                                Alur lengkap eksekusi request URL browser mulai dari masukan request, evaluasi route generator, hingga penanganan view Blade atau fallback 404:
                            </p>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-primary rounded border border-primary border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-primary me-2 fw-bold fs-7">1</span>
                                            <h6 class="mb-0 text-primary fw-bold">Request URL User</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Browser mengirim HTTP GET request, misal: <code>/help/pemrograman/skema/route</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-info me-2 fw-bold fs-7">2</span>
                                            <h6 class="mb-0 text-info fw-bold">Entry Point Web Routes</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            <code>routes/web.php</code> memproses request &amp; mengecek route kustom / controller.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-success me-2 fw-bold fs-7">3</span>
                                            <h6 class="mb-0 text-success fw-bold">Pemanggilan Auto Generator</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            <code>routes/web.php</code> mengeksekusi <code>require routes/menu-temp.php</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-warning me-2 fw-bold fs-7">4</span>
                                            <h6 class="mb-0 text-warning fw-bold">Pemindaian File View</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Me-loop semua file <code>resources/views/pages/*.blade.php</code> (abaikan partials &amp; <code>_*</code>).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-dark rounded border border-dark border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-dark me-2 fw-bold fs-7">5</span>
                                            <h6 class="mb-0 text-dark fw-bold">Registrasi Route Auth</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Binding URI dan Route Name secara otomatis dalam grup middleware <code>auth</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge badge-circle badge-danger me-2 fw-bold fs-7">6</span>
                                            <h6 class="mb-0 text-danger fw-bold">Penanganan Fallback 404</h6>
                                        </div>
                                        <p class="fs-8 text-gray-700 mb-0">
                                            Jika URL tidak cocok, <code>Route::fallback()</code> merender error page 404.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. FILE CONVERSION MECHANICS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_2') }}
                            </h4>
                            <p class="fs-7 text-gray-600">
                                Simulasi transformasi dari path lokasi file Blade menjadi URI, nama route, dan penangan view:
                            </p>
                            <pre class="schema-code"><code>// 1. Lokasi Berkas Target Blade:
resources/views/pages/help/pemrograman/skema/route.blade.php

// 2. Ekstraksi Path Relatif:
help/pemrograman/skema/route.blade.php

// 3. Normalisasi Ekstensi & Subfolder:
Relative:  help/pemrograman/skema/route
Route Key: help.pemrograman.skema.route

// 4. Hasil Output Registrasi Route Otomatis:
URI:        /help/pemrograman/skema/route
Route Name: help.pemrograman.skema.route
View Target: pages.help.pemrograman.skema.route</code></pre>

                            <div class="schema-note mt-3">
                                <strong>File &amp; Subfolder Yang Diabaikan:</strong> File dalam folder <code>partials/</code> atau diawali garis bawah (contoh: <code>_form.blade.php</code>) secara otomatis tidak dijadikan route.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. FILE RESPONSIBILITY MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.route.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.route.note_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. QUICK GUIDE: ADDING NEW VIEW PAGE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-plus-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_4') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.route.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_6') !!}</li>
                            </ol>
                            <div class="schema-warn mt-3">
                                {!! __('help.pages.skema.route.warn_1') !!}
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. ROUTE EVALUATION PRIORITY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-sort fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.route.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_9') !!}</li>
                            </ul>
                            <div class="mt-3 p-3 bg-light-primary rounded border border-primary border-dashed">
                                <h6 class="fw-bold text-primary fs-7 mb-1">Command Audit CLI:</h6>
                                <code>php artisan route:list --name=help.pemrograman</code>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. STRICT ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4 class="d-flex align-items-center text-dark">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_7') }}
                            </h4>
                            <div class="row g-3 mt-1 fs-7">
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_7') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_8') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_9') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-step">
                                        {!! __('help.pages.skema.route.step_10') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.route.heading_8') }}
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
                                            <td>{!! __('help.pages.skema.route.item_11') !!}</td>
                                            <td>File berada di <code>partials/</code> atau diawali <code>_</code></td>
                                            <td>Pindahkan file langsung ke subfolder <code>resources/views/pages/</code> tanpa garis bawah.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.route.item_12') !!}</td>
                                            <td>Session habis atau user belum login</td>
                                            <td>Login terlebih dahulu; auto route mewajibkan middleware <code>auth</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.route.item_13') !!}</td>
                                            <td>Cache route atau view Laravel masih aktif</td>
                                            <td>Jalankan <code>php artisan route:clear &amp;&amp; php artisan view:clear</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.route.item_14') !!}</td>
                                            <td>Duplikasi route name pada <code>web.php</code></td>
                                            <td>Cek hasil <code>php artisan route:list</code> dan sesuaikan route name.</td>
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