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
                    <span class="schema-pill">Localization</span>
                    <h2 class="fw-bold">{{ __('help.skema_i18n_lanjutan') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.i18n-lanjutan.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_1') !!}</h4>
                            <ul class="schema-list">
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

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_2') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_3') !!}</h4>
                            <pre class="schema-code"><code>lang/
├─ en/
│  ├─ menu.php
│  ├─ auth.php
│  └─ ...
├─ id/
│  ├─ menu.php
│  ├─ auth.php
│  └─ ...
└─ {locale-baru}/
   ├─ menu.php
   ├─ auth.php
   └─ ...

Rekomendasi domain:
- menu.*      : label navigasi
- auth.*      : login/register/reset
- validation.*: pesan validasi
- pages.*     : teks spesifik halaman
- common.*    : teks umum reusable</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.i18n-lanjutan.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_8') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_5') !!}</h4>
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

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_6') !!}</h4>
                            <pre class="schema-code"><code>Pull Request i18n wajib mencakup:
- daftar key baru/diubah
- domain file yang terdampak
- screenshot EN vs ID
- verifikasi tidak ada missing key
- reviewer bilingual/domain owner

Aturan perubahan:
- Menambah key: boleh
- Ubah value: boleh (dengan konteks)
- Rename/hapus key: butuh impact check lintas view/config</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.i18n-lanjutan.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_7') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_12') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_8') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.i18n-lanjutan.step_12') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_9') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.i18n-lanjutan.item_17') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.i18n-lanjutan.heading_10') !!}</h4>
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
            </div>
        </div>
    </div>
@endsection