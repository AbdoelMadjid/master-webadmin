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
            {{ __('help.skema_error_handling_and_fallback') }}
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
                        Error Flow Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.error-handling-dan-fallback.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.error-handling-dan-fallback.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-shield-tick fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.error-handling-dan-fallback.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-lock fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.skema.error-handling-dan-fallback.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-eye fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.skema.error-handling-dan-fallback.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. CORE PURPOSE OF ERROR HANDLING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_4') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CURRENT PROJECT FALLBACK MECHANISM -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_26') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. COMPREHENSIVE ERROR MAP BY LAYER -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>Layer 1: Request & Route Level
- 404 Not Found          -> Route or Blade file does not exist
- 405 Method Not Allowed -> Incorrect HTTP verb (GET vs POST)
- 419 Page Expired       -> CSRF token mismatch or session timeout
- 429 Too Many Requests  -> Throttling / rate limiter exceeded

Layer 2: Auth & Authorization Level
- 401 Unauthorized       -> Unauthenticated session / missing token
- 403 Forbidden          -> Authenticated user lacking explicit permission

Layer 3: Validation & Domain Logic Level
- 422 Validation Error   -> Form or payload input validation failed
- 409 Conflict           -> Data state concurrency or duplicate code collision

Layer 4: System & Infrastructure Level
- 500 Internal Error     -> Unexpected application exception / code bug
- 503 Service Unavailable -> Maintenance mode active / dependent service offline</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. EXCEPTION MAPPING & RESPONSE STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-switch fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_4') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_6') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. WEB VS API RESPONSE STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-3 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. STANDARD API ERROR JSON CONTRACT -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_6') }}
                            </h4>
                            <pre class="schema-code"><code>{
  "success": false,
  "error": {
    "code": "VALIDATION_ERROR",
    "message": "Input validation failed",
    "details": {
      "email": ["The email format is invalid"]
    }
  },
  "meta": {
    "request_id": "req_01HX89Z2K..."
  }
}</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. MINIMUM LOGGING & CONTEXT -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file-sheet fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. USER MESSAGE REDACTION & COPYWRITING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_9') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. CUSTOM ERROR PAGE TEMPLATES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-design fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_9') }}
                            </h4>
                            <pre class="schema-code"><code>resources/views/pages/errors/
├─ 403.blade.php (Forbidden / Insufficient Permissions)
├─ 404.blade.php (Not Found / Invalid Route)
├─ 419.blade.php (Page Expired / CSRF Timeout)
├─ 429.blade.php (Too Many Requests / Rate Limited)
├─ 500.blade.php (Internal Server Error)
└─ 503.blade.php (Service Maintenance Mode)

Minimum Required Elements:
- Error status code & clear heading
- Safe, non-technical explanatory message
- Clear Call-To-Action (CTA): Return Home / Dashboard / Re-login
- (Optional) Unique request_id trace identifier for support</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. SECURITY GUARDRAILS & DATA MASKING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-lock fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_15') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. RETRY & IDEMPOTENCY POLICY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_11') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_19') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. INCIDENT RESPONSE SOP -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-phone fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_12') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_29') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_12') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_13') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 13. PRE-RELEASE REVIEW CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-square fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_13') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_30') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_18') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 14. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_14') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_21') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_22') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_23') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_24') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_25') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 15. OPERATIONAL SEVERITY MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-chart-line-star fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_15') }}
                            </h4>
                            <pre class="schema-code"><code>Sev-1 (Critical)
- Impact: Core system completely down / massive transaction failures / high financial risk
- Response SLA: <= 15 minutes
- Mitigation Target: <= 1 hour
- Mandatory: War room + Incident Commander + Postmortem document

Sev-2 (High)
- Impact: Major feature significantly degraded, limited workaround available
- Response SLA: <= 30 minutes
- Mitigation Target: <= 4 hours
- Mandatory: Cross-team coordination + Postmortem document

Sev-3 (Medium)
- Impact: Non-critical secondary feature affected, workaround available
- Response SLA: <= 4 hours
- Mitigation Target: <= 2 business days
- Mandatory: Concise Root-Cause Analysis (RCA) + action item

Sev-4 (Low)
- Impact: Minor cosmetic bug / noise logging
- Response SLA: <= 1 business day
- Mitigation Target: Scheduled in normal sprint backlog
- Mandatory: Backlog triage and prioritization</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 16. STANDARD POSTMORTEM FORMAT TEMPLATE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-document fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_16') }}
                            </h4>
                            <pre class="schema-code"><code># Incident Postmortem Report

1) Executive Summary
- Incident ID:
- Severity Level:
- Start / End Timestamp:
- Total Duration:
- Resolution Status:

2) Business & User Impact
- Affected Services / Features:
- Percentage of Affected Users:
- Financial / SLA / Reputation Impact:

3) Incident Timeline
- HH:MM Initial Detection
- HH:MM Triage Initiated
- HH:MM Temporary Workaround / Mitigation
- HH:MM Permanent Fix Deployed
- HH:MM Post-Fix Observability Monitoring

4) Root Cause Analysis (RCA)
- Technical Root Cause:
- Contributing Factors:
- Why test/code review failed to detect issue:

5) Corrective Actions
- Immediate Fix:
- Permanent Fix:
- Preventive Actions:

6) Action Items & Ownership
- [Owner] [Task Description] [Due Date] [Status]

7) Appendices
- Log / APM / Dashboard Links
- Related PR / Commit Hashes
- Sanitized Error Payloads / Screenshots</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.warn_2') !!}</div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. CORE PURPOSE OF ERROR HANDLING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_4') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CURRENT PROJECT FALLBACK MECHANISM -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_26') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. COMPREHENSIVE ERROR MAP BY LAYER -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>Layer 1: Request &amp; Route Level
- 404 Not Found          -> route/file blade tidak ditemukan
- 405 Method Not Allowed -> method HTTP tidak sesuai (GET vs POST)
- 419 Page Expired       -> CSRF token mismatch / session timeout
- 429 Too Many Requests  -> throttling / rate limiter terlampaui

Layer 2: Auth &amp; Authorization Level
- 401 Unauthorized       -> sesi belum terautentikasi / missing token
- 403 Forbidden          -> user terautentikasi tidak punya hak akses

Layer 3: Validation &amp; Domain Logic Level
- 422 Validation Error   -> input form / payload tidak valid
- 409 Conflict           -> konflik state data / duplikasi kode

Layer 4: System &amp; Infrastructure Level
- 500 Internal Error     -> exception aplikasi tak terduga / bug kode
- 503 Service Unavailable -> mode maintenance aktif / dependency down</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. EXCEPTION MAPPING & RESPONSE STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-switch fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_4') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_6') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. WEB VS API RESPONSE STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-element-3 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. STANDARD API ERROR JSON CONTRACT -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_6') }}
                            </h4>
                            <pre class="schema-code"><code>{
  "success": false,
  "error": {
    "code": "VALIDATION_ERROR",
    "message": "Input tidak valid",
    "details": {
      "email": ["Format email tidak valid"]
    }
  },
  "meta": {
    "request_id": "req_01HX89Z2K..."
  }
}</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. MINIMUM LOGGING & CONTEXT -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file-sheet fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. USER MESSAGE REDACTION & COPYWRITING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_8') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_9') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. CUSTOM ERROR PAGE TEMPLATES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-design fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_9') }}
                            </h4>
                            <pre class="schema-code"><code>resources/views/pages/errors/
├─ 403.blade.php (Forbidden / Hak Akses Ditolak)
├─ 404.blade.php (Not Found / Halaman Tidak Ditemukan)
├─ 419.blade.php (Page Expired / Sesi Kadaluarsa)
├─ 429.blade.php (Too Many Requests / Terlalu Banyak Request)
├─ 500.blade.php (Internal Server Error)
└─ 503.blade.php (Service Maintenance / Perbaikan Sistem)

Elemen Minimum Wajib:
- Kode status & judul error yang aman
- Penjelasan singkat yang tidak membocorkan detail teknis
- Tombol aksi jelas (CTA): Kembali / Dashboard / Login Ulang
- (Opsional) request_id unik untuk penelusuran tim support</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. SECURITY GUARDRAILS & DATA MASKING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-lock fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_15') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. RETRY & IDEMPOTENCY POLICY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrows-loop fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_11') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_19') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. INCIDENT RESPONSE SOP -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-phone fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_12') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_29') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_12') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_13') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 13. PRE-RELEASE REVIEW CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-square fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_13') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_30') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_18') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 14. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_14') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_21') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_22') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_23') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_24') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_25') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.error-handling-dan-fallback.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 15. OPERATIONAL SEVERITY MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-chart-line-star fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_15') }}
                            </h4>
                            <pre class="schema-code"><code>Sev-1 (Kritis)
- Dampak: Sistem inti down total / kegagalan transaksi masif / risiko finansial tinggi
- SLA Respon Awal: <= 15 menit
- Target Mitigasi: <= 1 jam
- Wajib: War room + Incident Commander + Dokumentasi Postmortem

Sev-2 (Tinggi)
- Dampak: Fitur utama terganggu signifikan, workaround terbatas tersedia
- SLA Respon Awal: <= 30 menit
- Target Mitigasi: <= 4 jam
- Wajib: Koordinasi lintas tim + Dokumentasi Postmortem

Sev-3 (Sedang)
- Dampak: Sebagian fitur sekunder terganggu, workaround tersedia penuh
- SLA Respon Awal: <= 4 jam
- Target Mitigasi: <= 2 hari kerja
- Wajib: Root-Cause Analysis (RCA) ringkas + action item

Sev-4 (Rendah)
- Dampak: Minor bug kosmetik / noise logging
- SLA Respon Awal: <= 1 hari kerja
- Target Mitigasi: Sesuai prioritas sprint backlog
- Wajib: Triage dan prioritisasi backlog</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.note_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 16. STANDARD POSTMORTEM FORMAT TEMPLATE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-document fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.error-handling-dan-fallback.heading_16') }}
                            </h4>
                            <pre class="schema-code"><code># Laporan Postmortem Insiden

1) Ringkasan Eksekutif
- Incident ID:
- Tingkat Severity:
- Waktu Mulai / Selesai:
- Total Durasi:
- Status Resolusi:

2) Dampak Bisnis &amp; Pengguna
- Layanan / Fitur Terdampak:
- Persentase Pengguna Terdampak:
- Dampak Finansial / SLA / Reputasi:

3) Kronologi Insiden (Timeline)
- HH:MM Deteksi awal insiden
- HH:MM Proses triage dimulai
- HH:MM Mitigasi sementara diterapkan
- HH:MM Perbaikan permanen dideploy
- HH:MM Monitoring pasca-perbaikan

4) Root Cause Analysis (RCA)
- Penyebab Teknis Utama:
- Faktor Pendukung:
- Mengapa pengujian / code review tidak mendeteksi insiden:

5) Langkah Perbaikan
- Perbaikan Langsung (Immediate Fix):
- Perbaikan Permanen (Permanent Fix):
- Langkah Pencegahan (Preventive Actions):

6) Action Items &amp; Tanggung Jawab
- [Penanggung Jawab] [Deskripsi Tugas] [Tenggat Waktu] [Status]

7) Lampiran
- Tautan Log / APM / Dashboard Observability
- Commit Hash / PR Terkait
- Sample Payload Error yang Telah Disanitasi</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.warn_2') !!}</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection