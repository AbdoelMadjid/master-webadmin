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
            {{ __('help.skema_i18n_lanjutan') }}
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
                        <i class="ki-duotone ki-global text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Localization Governance
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.i18n-lanjutan.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.i18n-lanjutan.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-key fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.i18n-lanjutan.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-folder fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.i18n-lanjutan.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.i18n-lanjutan.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. KEY TRANSLATION STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_3') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CURRENT I18N ARCHITECTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. FILE SCHEMA AND TRANSLATION DOMAINS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-folder fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>lang/
├─ en/
│  ├─ menu.php        : Sidebar & header menu labels
│  ├─ auth.php        : Authentication & login messages
│  ├─ validation.php  : Form validation messages
│  ├─ pages.php       : Help & page specific text
│  └─ common.php      : Shared UI labels & buttons
├─ id/
│  ├─ menu.php
│  ├─ auth.php
│  ├─ validation.php
│  ├─ pages.php
│  └─ common.php
└─ {new-locale}/
   ├─ menu.php
   ├─ auth.php
   └─ ...</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.i18n-lanjutan.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. KEY NAMING CONVENTION (STRICT) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. WORKFLOW ADD NEW LANGUAGE (END-TO-END) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_5') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_18') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. TRANSLATIONAL GOVERNANCE EXAMPLES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-search fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_6') }}
                            </h4>
                            <pre class="schema-code"><code>i18n Pull Request Checklist:
- List of new or updated keys
- Affected translation files/domains
- Side-by-side EN vs ID UI screenshots
- Verification of zero missing keys via audit script
- Review & sign-off from bilingual reviewer/domain owner

Key Modification Rules:
- Adding keys: Allowed anytime
- Updating values: Allowed with domain context
- Renaming/Deleting keys: Requires impact analysis across all views and configs</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.i18n-lanjutan.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. FALLBACK RESOLUTION STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_12') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. I18N QA CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. GENERAL RISKS & MITIGATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_17') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-verify fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_10') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_16') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_6') !!}</span>
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
                    <!-- 1. KEY TRANSLATION STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_3') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CURRENT I18N ARCHITECTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. FILE SCHEMA AND TRANSLATION DOMAINS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-folder fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>lang/
├─ en/
│  ├─ menu.php        : Label menu sidebar &amp; header
│  ├─ auth.php        : Pesan login &amp; otentikasi
│  ├─ validation.php  : Pesan validasi form
│  ├─ pages.php       : Teks spesifik halaman help
│  └─ common.php      : Label UI umum &amp; tombol
├─ id/
│  ├─ menu.php
│  ├─ auth.php
│  ├─ validation.php
│  ├─ pages.php
│  └─ common.php
└─ {locale-baru}/
   ├─ menu.php
   ├─ auth.php
   └─ ...</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.i18n-lanjutan.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. KEY NAMING CONVENTION (STRICT) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. WORKFLOW ADD NEW LANGUAGE (END-TO-END) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_5') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_18') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. TRANSLATIONAL GOVERNANCE EXAMPLES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-search fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_6') }}
                            </h4>
                            <pre class="schema-code"><code>Checklist Pull Request i18n:
- Daftar key baru atau key yang diubah
- Berkas/domain translasi yang terdampak
- Screenshot tampilan UI komparatif EN vs ID
- Verifikasi bebas missing key via script audit
- Reviewer &amp; persetujuan dari bilingual domain owner

Aturan Perubahan Key:
- Menambah key: Diizinkan kapan saja
- Mengubah value: Diizinkan sesuai konteks bisnis
- Rename / Menghapus key: Wajib analisis dampak lintas view &amp; config</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.i18n-lanjutan.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. FALLBACK RESOLUTION STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_12') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. I18N QA CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. GENERAL RISKS & MITIGATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_17') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-verify fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.i18n-lanjutan.heading_10') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_16') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.i18n-lanjutan.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection