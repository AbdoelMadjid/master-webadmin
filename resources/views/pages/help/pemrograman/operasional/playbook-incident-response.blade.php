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
            {{ __('help.operasional') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <div class="schema-hero">
                    <span class="schema-pill">Incident Playbook</span>
                    <h2 class="fw-bold">{{ __('help.playbook_incident_response') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.playbook-incident-response.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_1') !!}</h4>
                            <pre class="schema-code"><code>IC (Incident Commander):
- Memimpin keputusan, prioritas, dan status akhir severity.

Ops Lead (Backend/Infra):
- Eksekusi mitigasi teknis (rollback, feature flag, isolate traffic).

Comms Lead:
- Menyampaikan update ke stakeholder internal/eksternal.

Scribe:
- Mencatat timeline, keputusan, dan evidence insiden.

Support/QA:
- Validasi dampak user, verifikasi fix, dan update kanal support.</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.playbook-incident-response.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_2') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_3') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_4') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_4') !!}</h4>
                            <pre class="schema-code"><code>0-5 menit
IC:
- Deklarasi Sev-1, lock prioritas, tunjuk IC/Ops/Comms/Scribe.
Ops Lead:
- Identifikasi blast radius dan komponen inti yang gagal.
Comms:
- Broadcast internal: "Sev-1 active, war-room link, next update 10 menit."
Scribe:
- Mulai timeline, catat timestamp deteksi dan owner.

5-10 menit
IC:
- Pilih strategi mitigasi tercepat (rollback vs disable feature).
Ops Lead:
- Eksekusi mitigasi cepat dengan risiko terkontrol.
Support/QA:
- Konfirmasi dampak nyata user (login/checkout/pembayaran).
Comms:
- Update stakeholder: dampak + aksi mitigasi berjalan.

10-15 menit
IC:
- Re-evaluasi severity setelah mitigasi awal.
Ops Lead:
- Verifikasi metrik utama membaik (5xx, latency, throughput).
Comms:
- Kirim update resmi #1 (status, impact, ETA update berikutnya).
Scribe:
- Catat keputusan dan outcome mitigasi pertama.</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_5') !!}</h4>
                            <pre class="schema-code"><code>0-5 menit
IC:
- Deklarasi Sev-2 dan tetapkan owner teknis.
Ops Lead:
- Isolasi fitur/endpoint bermasalah.
Comms:
- Info internal tim terkait, update cadence 15-30 menit.

5-10 menit
Ops Lead:
- Coba mitigasi ringan (restart worker, clear queue backlog, feature flag partial off).
Support/QA:
- Validasi apakah fitur utama masih bisa dipakai via workaround.
Scribe:
- Dokumentasi evidence + tindakan.

10-15 menit
IC:
- Putuskan lanjut mitigasi bertahap atau eskalasi jadi Sev-1.
Comms:
- Update stakeholder ringkas (impact, workaround, next ETA).</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_6') !!}</h4>
                            <pre class="schema-code"><code>Sev-3 (Medium)
0-15 menit:
- Triage terstruktur, assign owner, buat ticket prioritas.
- Verifikasi ada workaround aman.
- Komunikasi internal secukupnya (tidak selalu war-room penuh).

Sev-4 (Low)
0-15 menit:
- Catat bug + bukti reproduksi.
- Tentukan prioritas sprint/backlog.
- Tidak perlu eskalasi luas kecuali ada indikasi memburuk.</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_7') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_6') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_8') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_10') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.playbook-incident-response.item_12') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.playbook-incident-response.heading_9') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.playbook-incident-response.step_7') !!}</div>
                            </div>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.operasional.playbook-incident-response.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.operasional.playbook-incident-response.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.operasional.playbook-incident-response.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection