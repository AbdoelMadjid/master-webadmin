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
            {{ __('help.skema_theme_assets') }}
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
                        <i class="ki-duotone ki-file text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Theme Asset Pipeline &amp; Lifecycle
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.theme-assets.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.theme-assets.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-layers fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.skema.theme-assets.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.theme-assets.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-check fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.theme-assets.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. BASE LAYOUT LOAD SEQUENCE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. REAL IMPLEMENTATION IN LAYOUTS/INDEX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>&lt;!-- Inside &lt;head&gt; --&gt;
@@yield('styles')
&lt;link href="@{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" /&gt;
&lt;link href="@{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" /&gt;

&lt;!-- Inside &lt;body&gt; before closing tag --&gt;
&lt;script src="@{{ asset('assets/plugins/global/plugins.bundle.js') }}"&gt;&lt;/script&gt;
&lt;script src="@{{ asset('assets/js/scripts.bundle.js') }}"&gt;&lt;/script&gt;
@@yield('scripts')</code></pre>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. BLADE ASSET RESOLVER STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_3') }}
                            </h4>
                            <p class="text-gray-700 fs-7 mb-4">
                                Use <code>ThemeAsset::url('path')</code> or <code>asset('assets/path')</code> to keep asset sources compatible with dynamic Metronic version switching architecture.
                            </p>
                            <pre class="schema-code"><code>&lt;!-- Datatables Vendor CSS --&gt;
&lt;link href="@{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" 
      rel="stylesheet" type="text/css" /&gt;

&lt;!-- Page Specific Controller Script --&gt;
&lt;script src="@{{ asset('assets/js/custom/apps/subscriptions/add/advanced.js') }}"&gt;&lt;/script&gt;

&lt;!-- Image Asset --&gt;
&lt;img src="@{{ asset('assets/media/svg/card-logos/visa.svg') }}" alt="Visa" class="h-25px" /&gt;</code></pre>
                            <ul class="schema-list mt-3 fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_3') !!}</li>
                            </ul>
                            <div class="schema-note mt-3">{!! __('help.pages.skema.theme-assets.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. PAGE-SPECIFIC ASSET PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-equal fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_7') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.theme-assets.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. THEME MODES & BODY DATA ATTRIBUTES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-moon fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.theme-assets.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CHECKLIST WHEN ADDING NEW ASSETS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_6') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_15') !!}</li>
                            </ol>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. ASSET DEBUGGING & TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_8') }}
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
                                            <td>{!! __('help.pages.skema.theme-assets.item_16') !!}</td>
                                            <td>Incorrect CSS load order or missing <code>style.bundle.css</code> in <code>&lt;head&gt;</code>.</td>
                                            <td>Verify that <code>plugins.bundle.css</code> precedes <code>style.bundle.css</code> and page-specific CSS.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.theme-assets.item_17') !!}</td>
                                            <td>JS script executed before <code>plugins.bundle.js</code> or <code>scripts.bundle.js</code> was loaded.</td>
                                            <td>Ensure custom scripts are placed inside <code>@@section('scripts')</code> at the bottom of the view.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.theme-assets.item_18') !!}</td>
                                            <td>Active browser caching or stale compiled Blade view cache.</td>
                                            <td>Run hard refresh (Ctrl+F5) and execute <code>php artisan view:clear</code> in terminal.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.theme-assets.item_19') !!}</td>
                                            <td>Vendor plugin file (e.g., DataTables) missing or loaded before jQuery/plugins bundle.</td>
                                            <td>Check file path under <code>public/assets/plugins/custom/</code> and load after <code>scripts.bundle.js</code>.</td>
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
                    <!-- 1. BASE LAYOUT LOAD SEQUENCE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. REAL IMPLEMENTATION IN LAYOUTS/INDEX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>&lt;!-- Di dalam tag &lt;head&gt; --&gt;
@@yield('styles')
&lt;link href="@{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" /&gt;
&lt;link href="@{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" /&gt;

&lt;!-- Di dalam tag &lt;body&gt; sebelum tag penutup --&gt;
&lt;script src="@{{ asset('assets/plugins/global/plugins.bundle.js') }}"&gt;&lt;/script&gt;
&lt;script src="@{{ asset('assets/js/scripts.bundle.js') }}"&gt;&lt;/script&gt;
@@yield('scripts')</code></pre>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. BLADE ASSET RESOLVER STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_3') }}
                            </h4>
                            <p class="text-gray-700 fs-7 mb-4">
                                Gunakan <code>ThemeAsset::url('path')</code> atau <code>asset('assets/path')</code> agar sumber aset tetap kompatibel dengan arsitektur sakelar versi Metronic.
                            </p>
                            <pre class="schema-code"><code>&lt;!-- Vendor CSS Datatables --&gt;
&lt;link href="@{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" 
      rel="stylesheet" type="text/css" /&gt;

&lt;!-- Script Controller Khusus Halaman --&gt;
&lt;script src="@{{ asset('assets/js/custom/apps/subscriptions/add/advanced.js') }}"&gt;&lt;/script&gt;

&lt;!-- Image Asset --&gt;
&lt;img src="@{{ asset('assets/media/svg/card-logos/visa.svg') }}" alt="Visa" class="h-25px" /&gt;</code></pre>
                            <ul class="schema-list mt-3 fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_3') !!}</li>
                            </ul>
                            <div class="schema-note mt-3">{!! __('help.pages.skema.theme-assets.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. PAGE-SPECIFIC ASSET PATTERN -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-equal fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_7') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.theme-assets.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. THEME MODES & BODY DATA ATTRIBUTES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-moon fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.theme-assets.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CHECKLIST WHEN ADDING NEW ASSETS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_6') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.theme-assets.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_15') !!}</li>
                            </ol>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. ASSET DEBUGGING & TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.theme-assets.heading_8') }}
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
                                            <td>{!! __('help.pages.skema.theme-assets.item_16') !!}</td>
                                            <td>Urutan CSS tidak tepat atau <code>style.bundle.css</code> belum termuat di <code>&lt;head&gt;</code>.</td>
                                            <td>Pastikan <code>plugins.bundle.css</code> dimuat sebelum <code>style.bundle.css</code> dan CSS khusus halaman.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.theme-assets.item_17') !!}</td>
                                            <td>Script JS dieksekusi sebelum <code>plugins.bundle.js</code> atau <code>scripts.bundle.js</code> dimuat.</td>
                                            <td>Pastikan script kustom ditempatkan di dalam <code>@@section('scripts')</code> pada bagian bawah view.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.theme-assets.item_18') !!}</td>
                                            <td>Cache browser masih aktif atau cache view compiled Blade belum diperbarui.</td>
                                            <td>Lakukan hard refresh (Ctrl+F5) dan jalankan command <code>php artisan view:clear</code> pada terminal.</td>
                                        </tr>
                                        <tr>
                                            <td>{!! __('help.pages.skema.theme-assets.item_19') !!}</td>
                                            <td>File vendor plugin (misal DataTables) tidak ditemukan atau dimuat sebelum jQuery/plugins bundle.</td>
                                            <td>Periksa path file di <code>public/assets/plugins/custom/</code> dan muat setelah <code>scripts.bundle.js</code>.</td>
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
