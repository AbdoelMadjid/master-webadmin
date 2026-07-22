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
            {{ __('help.skema') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <div class="schema-hero">
                    <span class="schema-pill">Error Flow</span>
                    <h2 class="fw-bold">{{ __('help.skema_error_handling_and_fallback') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.error-handling-dan-fallback.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_1') !!}</h4>
                            <ul class="schema-list">
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

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_2') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_26') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_3') !!}</h4>
                            <pre class="schema-code"><code>Layer Request:
- 404 Not Found          -> route/file tidak ditemukan
- 405 Method Not Allowed -> method HTTP tidak sesuai
- 419 Page Expired       -> CSRF/session timeout
- 429 Too Many Requests  -> throttling/rate limit

Layer Auth/Permission:
- 401 Unauthorized       -> belum autentikasi
- 403 Forbidden          -> tidak punya hak akses

Layer Validation & Domain:
- 422 Validation Error   -> input tidak valid
- 409 Conflict           -> konflik state data

Layer System:
- 500 Internal Error     -> bug/error tak terduga
- 503 Service Unavailable -> maintenance/dependency down</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_4') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_6') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_5') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_6') !!}</h4>
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
    "request_id": "req_01HX...."
  }
}</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_7') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_12') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_8') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_28') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_9') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_9') !!}</h4>
                            <pre class="schema-code"><code>resources/views/pages/errors/
├─ 403.blade.php
├─ 404.blade.php
├─ 419.blade.php
├─ 429.blade.php
├─ 500.blade.php
└─ 503.blade.php

Isi minimum:
- Kode dan judul error
- Penjelasan singkat yang aman
- Tombol aksi: kembali / dashboard / login
- (opsional) request id</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_10') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_16') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_11') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.error-handling-dan-fallback.item_20') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_12') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_29') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_12') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_13') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_13') !!}</h4>
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

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_14') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.error-handling-dan-fallback.step_31') !!}</div>
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

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_15') !!}</h4>
                            <pre class="schema-code"><code>Sev-1 (Critical)
- Dampak: sistem inti down / transaksi gagal masif / risiko finansial tinggi
- SLA respon awal: <= 15 menit
- Target mitigasi: <= 1 jam
- Wajib: war room + incident commander + postmortem

Sev-2 (High)
- Dampak: fitur utama terganggu signifikan, ada workaround terbatas
- SLA respon awal: <= 30 menit
- Target mitigasi: <= 4 jam
- Wajib: koordinasi lintas tim + postmortem

Sev-3 (Medium)
- Dampak: sebagian fitur non-kritis terganggu, workaround tersedia
- SLA respon awal: <= 4 jam
- Target mitigasi: <= 2 hari kerja
- Wajib: RCA ringkas + action item

Sev-4 (Low)
- Dampak: minor bug/cosmetic/noise logging
- SLA respon awal: <= 1 hari kerja
- Target mitigasi: sesuai sprint backlog
- Wajib: triage dan prioritisasi</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.note_2') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.error-handling-dan-fallback.heading_16') !!}</h4>
                            <pre class="schema-code"><code># Postmortem Incident

1) Ringkasan
- Incident ID:
- Severity:
- Waktu mulai / selesai:
- Durasi:
- Status:

2) Dampak
- Layanan/fitur terdampak:
- Persentase user terdampak:
- Dampak bisnis (transaksi, SLA, reputasi):

3) Timeline
- HH:MM Deteksi awal
- HH:MM Triage
- HH:MM Mitigasi sementara
- HH:MM Perbaikan permanen
- HH:MM Monitoring pasca-fix

4) Root Cause Analysis
- Technical root cause:
- Contributing factors:
- Kenapa lolos dari test/review:

5) Tindakan
- Immediate fix:
- Permanent fix:
- Preventive actions:

6) Action Items
- [Owner] [Task] [Due date] [Status]

7) Lampiran
- Link log/APM/dashboard
- PR/commit terkait
- Screenshot/error payload sample (aman)</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.error-handling-dan-fallback.warn_2') !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection