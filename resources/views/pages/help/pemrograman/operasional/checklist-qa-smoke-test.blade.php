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
            {{ __('help.checklist_qa_smoke_test') }}
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
                        <i class="ki-duotone ki-verify text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        QA Minimal Gate
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.checklist-qa-smoke-test.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.checklist-qa-smoke-test.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-route fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.checklist-qa-smoke-test.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-table fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.checklist-qa-smoke-test.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-notification-status fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.checklist-qa-smoke-test.chip_3') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-global fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.checklist-qa-smoke-test.chip_4') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. NAVIGATION & ACTIVE STATE MENU TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. TABLE RESPONSIVENESS & LAYOUT TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-table fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. OPERATIONAL CRUD & SWALHELPER TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-notification-status fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. TOP TOOLTIPS & MODAL TRIGGER WRAPPER TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-information-2 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_10') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_11') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. MULTI-LANGUAGE PARITY TESTING (EN & ID) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_12') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_13') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CLI COMMANDS VERIFICATION & CACHE CLEARING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-terminal fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_14') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>php artisan optimize:clear
php artisan route:list --name=help.pemrograman.operasional
composer test
npm run build</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. QA GATEKEEPER & RELEASE APPROVAL STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_7') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_4') !!}</div>
                            </div>
                            <div class="schema-warn mt-4">{!! __('help.pages.operasional.checklist-qa-smoke-test.note_1') !!}</div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. NAVIGATION & ACTIVE STATE MENU TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. TABLE RESPONSIVENESS & LAYOUT TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-table fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. OPERATIONAL CRUD & SWALHELPER TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-notification-status fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. TOP TOOLTIPS & MODAL TRIGGER WRAPPER TESTING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-information-2 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_10') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_11') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. MULTI-LANGUAGE PARITY TESTING (EN & ID) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-global fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_12') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_13') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CLI COMMANDS VERIFICATION & CACHE CLEARING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-terminal fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_14') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>php artisan optimize:clear
php artisan route:list --name=help.pemrograman.operasional
composer test
npm run build</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. QA GATEKEEPER & RELEASE APPROVAL STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.checklist-qa-smoke-test.heading_7') }}
                            </h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.checklist-qa-smoke-test.step_4') !!}</div>
                            </div>
                            <div class="schema-warn mt-4">{!! __('help.pages.operasional.checklist-qa-smoke-test.note_1') !!}</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection