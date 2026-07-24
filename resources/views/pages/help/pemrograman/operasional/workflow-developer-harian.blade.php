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
            {{ __('help.workflow_developer_harian') }}
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
                        <i class="ki-duotone ki-laptop text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Daily Engineering Flow
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.workflow-developer-harian.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.workflow-developer-harian.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-code fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.workflow-developer-harian.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-element-3 fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.workflow-developer-harian.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-global fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.workflow-developer-harian.chip_3') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.workflow-developer-harian.chip_4') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ENVIRONMENT SETUP & INITIAL LOADING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-setting-2 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_3') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>git pull origin main
npm run dev
php artisan migrate</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. FEATURE DEVELOPMENT & MIRROR STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_6') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// View: resources/views/pages/appsupport/feature.blade.php
// Controller: App\Http\Controllers\AppSupport\FeatureController
// Model: App\Models\AppSupport\Feature
// Request: App\Http\Requests\AppSupport\FeatureRequest</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. NAVIGATION REGISTRATION & i18n TRANSLATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// config/sidebar/_sidebar_apps.php
['title' => 'New Feature', 'route' => 'appsupport.feature']

// lang/en/menu.php & lang/id/menu.php
'new_feature' => 'New Feature'</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. CACHE CLEARING CLI COMMANDS & DEBUGGING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_10') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>php artisan optimize:clear
php artisan route:list --name=appsupport.feature
php -l lang/id/help.php; php -l lang/en/help.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. UI STANDARDIZATION & JS HELPERS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-notification-status fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_12') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// JS Notification:
SwalHelper.success('Data saved successfully');

// Tooltip Wrapper:
&lt;span data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"&gt;
    &lt;button class="btn btn-icon btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_edit"&gt;...&lt;/button&gt;
&lt;/span&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. GIT BRANCHING, COMMIT & PR GOVERNANCE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-git fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_13') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_14') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>git checkout -b feature/app-profil
git add .
git commit -m "feat(appsupport): add app profile onboarding page"
git push origin feature/app-profil</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. PRE-COMMIT & PRE-RELEASE VERIFICATION CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_7') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_4') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.workflow-developer-harian.note_1') !!}</div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ENVIRONMENT SETUP & INITIAL LOADING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-setting-2 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_3') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>git pull origin main
npm run dev
php artisan migrate</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. FEATURE DEVELOPMENT & MIRROR STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_6') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// View: resources/views/pages/appsupport/feature.blade.php
// Controller: App\Http\Controllers\AppSupport\FeatureController
// Model: App\Models\AppSupport\Feature
// Request: App\Http\Requests\AppSupport\FeatureRequest</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. NAVIGATION REGISTRATION & i18n TRANSLATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// config/sidebar/_sidebar_apps.php
['title' => 'Fitur Baru', 'route' => 'appsupport.feature']

// lang/en/menu.php & lang/id/menu.php
'fitur_baru' => 'Fitur Baru'</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. CACHE CLEARING CLI COMMANDS & DEBUGGING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_10') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>php artisan optimize:clear
php artisan route:list --name=appsupport.feature
php -l lang/id/help.php; php -l lang/en/help.php</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. UI STANDARDIZATION & JS HELPERS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-notification-status fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_12') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Notifikasi JS:
SwalHelper.success('Data berhasil disimpan');

// Pembungkus Tooltip:
&lt;span data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"&gt;
    &lt;button class="btn btn-icon btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_edit"&gt;...&lt;/button&gt;
&lt;/span&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. GIT BRANCHING, COMMIT & PR GOVERNANCE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-git fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_13') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_14') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>git checkout -b feature/app-profil
git add .
git commit -m "feat(appsupport): tambah halaman profil aplikasi"
git push origin feature/app-profil</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. PRE-COMMIT & PRE-RELEASE VERIFICATION CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.workflow-developer-harian.heading_7') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_4') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.workflow-developer-harian.note_1') !!}</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection