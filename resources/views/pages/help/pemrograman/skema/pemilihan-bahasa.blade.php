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
            {{ __('help.skema_pemilihan_bahasa') }}
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
                        <i class="ki-duotone ki-geolocation text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Localization Flow
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.pemilihan-bahasa.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.pemilihan-bahasa.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-user-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.pemilihan-bahasa.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.pemilihan-bahasa.chip_2') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. RUNTIME SWITCH LOCALE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_6') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. RELATED FILE COMPONENTS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_5') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. LOCALE FALLBACK STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_8') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.pemilihan-bahasa.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.pemilihan-bahasa.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. MENU KEY NORMALIZATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// Menu title config string:
'Skema Pemrograman'

// Automatic translation key lookup:
menu.skema_pemrograman</code></pre>
                            <ul class="schema-list mt-4 fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. SECURITY & WHITELIST LOCALE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-lock fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>if (in_array($locale, ['en', 'id'])) {
    session(['locale' => $locale]);
}</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.pemilihan-bahasa.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. ADDING A NEW LOCALE (EXAMPLE: JA) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_6') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_15') !!}</li>
                            </ol>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. EDGE CASES & DEBUG CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_18') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.pemilihan-bahasa.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_9') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. VALIDATION CHECKLIST FOR NEW LOCALE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_20') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_22') !!}</li>
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
                    <!-- 1. RUNTIME SWITCH LOCALE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_6') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. RELATED FILE COMPONENTS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_5') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. LOCALE FALLBACK STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_8') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.pemilihan-bahasa.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.pemilihan-bahasa.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. MENU KEY NORMALIZATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// String judul di config menu:
'Skema Pemrograman'

// Key translasi otomatis yang dicari:
menu.skema_pemrograman</code></pre>
                            <ul class="schema-list mt-4 fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. SECURITY & WHITELIST LOCALE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-lock fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>if (in_array($locale, ['en', 'id'])) {
    session(['locale' => $locale]);
}</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.pemilihan-bahasa.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. ADDING A NEW LOCALE (EXAMPLE: JA) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_6') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_15') !!}</li>
                            </ol>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. EDGE CASES & DEBUG CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_18') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.pemilihan-bahasa.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_9') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. VALIDATION CHECKLIST FOR NEW LOCALE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.pemilihan-bahasa.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_20') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_22') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection