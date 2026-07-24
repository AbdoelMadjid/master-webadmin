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
            {{ __('help.playbook_incident_response') }}
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
                        <i class="ki-duotone ki-shield-cross text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        Incident Playbook
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.playbook-incident-response.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.playbook-incident-response.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-shield-search fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.operasional.playbook-incident-response.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-profile-user fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ __('help.pages.operasional.playbook-incident-response.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-flash-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.playbook-incident-response.chip_3') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-check-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.playbook-incident-response.chip_4') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. INCIDENT TEAM ROLES & RESPONSIBILITIES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-profile-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_3') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_4') !!}</li>
                            </ul>
                            <div class="schema-note mt-3">{!! __('help.pages.operasional.playbook-incident-response.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. INCIDENT SEVERITY LEVEL MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-search fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_6') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. 15-MINUTE RAPID RESPONSE TIMELINE FOR SEV-1 -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-timer fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>[0-5 mins] Declare Sev-1, lock priority, form war-room
[5-10 mins] Identify blast radius, execute fastest mitigation
[10-15 mins] Verify metric recovery & broadcast official update #1</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. 15-MINUTE RAPID RESPONSE TIMELINE FOR SEV-2 -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-flash-circle fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>[0-5 mins] Declare Sev-2, assign technical owner & isolate component
[5-10 mins] Light mitigation (restart worker, partial feature flag off)
[10-15 mins] Validate user workaround & inform internal stakeholders</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. SEV-3 & SEV-4 PROCEDURES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>Sev-3 (Medium): Structured triage, assign owner, sprint priority ticket
Sev-4 (Low): Document bug reproduction steps, add to backlog</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. STAKEHOLDER BROADCAST COMMUNICATION TEMPLATES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-notification-status fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_9') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>[STATUS: INVESTIGATING] Sev-1 Incident on Auth Service.
Impact: Users unable to login on web app.
Action: Ops team isolating queue worker.
Next Update: 15 minutes.</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. EMERGENCY CLI MITIGATION COMMANDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-terminal fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_7') }}
                            </h4>
                            <pre class="schema-code"><code>// Turn on Maintenance Mode:
php artisan down --secret="emergency-pass"

// Clear application cache:
php artisan optimize:clear

// Restart queue workers:
php artisan queue:restart</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. POST-MORTEM WORKFLOW & PREVENTION ACTIONS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_8') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_10') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_11') !!}</li>
                            </ul>
                            <div class="schema-flow mb-3">
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_4') !!}</div>
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
                    <!-- 1. INCIDENT TEAM ROLES & RESPONSIBILITIES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-profile-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_3') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_4') !!}</li>
                            </ul>
                            <div class="schema-note mt-3">{!! __('help.pages.operasional.playbook-incident-response.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. INCIDENT SEVERITY LEVEL MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-search fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_2') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_6') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. 15-MINUTE RAPID RESPONSE TIMELINE FOR SEV-1 -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-timer fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>[0-5 menit] Deklarasi Sev-1, kunci prioritas, buat war-room
[5-10 menit] Identifikasi blast radius, eksekusi mitigasi tercepat
[10-15 menit] Verifikasi pemulihan metrik & broadcast update resmi #1</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. 15-MINUTE RAPID RESPONSE TIMELINE FOR SEV-2 -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-flash-circle fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>[0-5 menit] Deklarasi Sev-2, tunjuk owner teknis & isolasi komponen
[5-10 menit] Mitigasi ringan (restart worker, feature flag off parsial)
[10-15 menit] Validasi workaround user & info stakeholder internal</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. SEV-3 & SEV-4 PROCEDURES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>Sev-3 (Medium): Triage terstruktur, assign owner, tiket prioritas sprint
Sev-4 (Low): Dokumentasi langkah reproduksi bug, masuk backlog</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. STAKEHOLDER BROADCAST COMMUNICATION TEMPLATES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-notification-status fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_9') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>[STATUS: INVESTIGATING] Insiden Sev-1 pada Layanan Otentikasi.
Dampak: Pengguna tidak bisa login pada aplikasi web.
Aksi: Tim Ops melakukan isolasi worker queue.
Next Update: 15 menit.</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. EMERGENCY CLI MITIGATION COMMANDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-terminal fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_7') }}
                            </h4>
                            <pre class="schema-code"><code>// Aktifkan Mode Maintenance:
php artisan down --secret="emergency-pass"

// Bersihkan cache aplikasi:
php artisan optimize:clear

// Restart queue worker:
php artisan queue:restart</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. POST-MORTEM WORKFLOW & PREVENTION ACTIONS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.playbook-incident-response.heading_8') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_10') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_11') !!}</li>
                            </ul>
                            <div class="schema-flow mb-3">
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_4') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection