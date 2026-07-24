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
            {{ __('help.skema_cache_and_deployment') }}
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
                        <i class="ki-duotone ki-rocket text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Release Operations
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.cache-dan-deployment.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.cache-dan-deployment.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-flash-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.cache-dan-deployment.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.cache-dan-deployment.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-arrows-loop fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.cache-dan-deployment.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. OBJECTIVES OF OPTIMIZATION & RELEASE OPS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-target fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_4') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. RELEVANT CACHE TYPES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>1) Config cache
- Command: php artisan config:cache
- Effect: combines all config files into 1 compiled cache file
- Requirement: mandatory after .env or config/ changes

2) Route cache
- Command: php artisan route:cache
- Effect: speeds up route registration (drastic speedup)
- Requirement: no Closures allowed in routes

3) View cache
- Command: php artisan view:cache
- Effect: precompiles all Blade views for fast first-hit

4) Event cache (optional)
- Command: php artisan event:cache
- Effect: caches auto-discovered event listeners</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. CACHE COMMAND STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_3') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_24') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. PRODUCTION DEPLOYMENT RUNBOOK -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code># 1) Release Preparation
git pull origin main
composer install --no-dev --optimize-autoloader
npm ci
npm run build

# 2) Database Schema Migration (if schema changes exist)
php artisan migrate --force

# 3) Production Cache Regeneration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4) Restart Runtime Workers & Services
php artisan queue:restart

# 5) Verification & Smoke Test
php artisan route:list --name=help.pemrograman</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.cache-dan-deployment.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. WHEN TO CLEAR CACHE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code mt-4"><code>php artisan optimize:clear
# then regenerate required caches</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. WHEN NOT TO CLEAR ALL CACHE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-cross-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_12') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.cache-dan-deployment.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. PRE-RELEASE CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-time fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_25') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. POST-RELEASE CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-eye fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_26') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. ROLLBACK PLAN -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-undo fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_9') }}
                            </h4>
                            <pre class="schema-code"><code>Trigger Rollback If:
- Error rate spikes significantly during initial observation window (10-30 mins)
- Critical business flow fails without immediate hotfix
- Data integrity risk is detected

Rollback Steps:
1) Revert code commit to last stable release tag/hash
2) Clear / regenerate cache matching reverted code version
3) Restart queue workers / background supervisor processes
4) Execute smoke test on critical endpoints
5) Communicate rollback completion status to Incident Commander</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. TROUBLESHOOTING STALE CACHE & RUNTIME ISSUES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_16') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_11') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_18') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_7') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_8') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_9') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_10') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. STANDARD PRODUCTION COMMAND SEQUENCE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-terminal fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_12') }}
                            </h4>
                            <pre class="schema-code"><code># A. Pre-check
git rev-parse --short HEAD
php artisan about

# B. Build & Dependencies
composer install --no-dev --optimize-autoloader
npm ci
npm run build

# C. Database Schema Migration (if required)
php artisan migrate --force

# D. Cache Regeneration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# E. Runtime Service Refresh
php artisan queue:restart

# F. Verification
php artisan route:list --name=help.pemrograman</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.cache-dan-deployment.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 13. MIGRATION APPROVAL GATE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-security-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_13') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_20') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.cache-dan-deployment.warn_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 14. DEPLOYMENT TIME-WINDOW RULES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-calendar fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_14') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_23') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_24') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 15. RELEASE GATE EVALUATION (PASS/FAIL) -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-filter-search fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_15') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_28') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_21') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_22') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_23') !!}</div>
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
                    <!-- 1. OBJECTIVES OF OPTIMIZATION & RELEASE OPS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-target fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_4') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. RELEVANT CACHE TYPES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>1) Config cache
- Command: php artisan config:cache
- Efek: gabungkan seluruh berkas konfigurasi jadi 1 file cache
- Wajib regen saat .env atau config/ berubah

2) Route cache
- Command: php artisan route:cache
- Efek: mempercepat registrasi route secara drastis
- Syarat: tidak boleh ada route Closures

3) View cache
- Command: php artisan view:cache
- Efek: precompile seluruh Blade views untuk performa responsif

4) Event cache (opsional)
- Command: php artisan event:cache
- Efek: cache discovery listener event</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. CACHE COMMAND STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_3') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_24') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. PRODUCTION DEPLOYMENT RUNBOOK -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code># 1) Persiapan release
git pull origin main
composer install --no-dev --optimize-autoloader
npm ci
npm run build

# 2) Migration skema database (jika ada perubahan)
php artisan migrate --force

# 3) Regenerate cache produksi
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4) Restart worker &amp; service runtime
php artisan queue:restart

# 5) Verifikasi &amp; Smoke Test
php artisan route:list --name=help.pemrograman</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.cache-dan-deployment.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. WHEN TO CLEAR CACHE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code mt-4"><code>php artisan optimize:clear
# lalu regenerate cache yang dibutuhkan</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. WHEN NOT TO CLEAR ALL CACHE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-cross-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_12') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.cache-dan-deployment.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. PRE-RELEASE CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-time fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_25') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. POST-RELEASE CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-eye fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_26') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. ROLLBACK PLAN -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-undo fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_9') }}
                            </h4>
                            <pre class="schema-code"><code>Trigger Rollback Jika:
- Error rate naik signifikan dalam window observasi (10-30 menit)
- Fitur bisnis kritikal gagal dan tidak ada mitigasi cepat
- Terdeteksi risiko integritas data

Langkah Rollback:
1) Rollback kode ke tag / commit release terakhir yang stabil
2) Clear / regenerate cache sesuai versi kode rollback
3) Restart worker / proses supervisor background
4) Jalankan smoke test minimal pada endpoint kritikal
5) Komunikasikan status rollback ke Incident Commander</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. TROUBLESHOOTING STALE CACHE & RUNTIME ISSUES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_16') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_11') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_18') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_7') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_8') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_9') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.cache-dan-deployment.chip_10') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. STANDARD PRODUCTION COMMAND SEQUENCE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-terminal fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_12') }}
                            </h4>
                            <pre class="schema-code"><code># A. Pre-check
git rev-parse --short HEAD
php artisan about

# B. Build &amp; Dependency
composer install --no-dev --optimize-autoloader
npm ci
npm run build

# C. Schema change (jika ada)
php artisan migrate --force

# D. Cache regenerate
php artisan config:cache
php artisan route:cache
php artisan view:cache

# E. Runtime refresh
php artisan queue:restart

# F. Verification
php artisan route:list --name=help.pemrograman</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.cache-dan-deployment.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 13. MIGRATION APPROVAL GATE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-security-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_13') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_20') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.cache-dan-deployment.warn_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 14. DEPLOYMENT TIME-WINDOW RULES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-calendar fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_14') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_23') !!}</li>
                                <li>{!! __('help.pages.skema.cache-dan-deployment.item_24') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 15. RELEASE GATE EVALUATION (PASS/FAIL) -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-filter-search fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.cache-dan-deployment.heading_15') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_28') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_21') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_22') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.cache-dan-deployment.step_23') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection