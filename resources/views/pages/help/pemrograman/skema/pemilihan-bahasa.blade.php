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
                    <span class="schema-pill">Localization Flow</span>
                    <h2 class="fw-bold">{{ __('help.skema_pemilihan_bahasa') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.pemilihan-bahasa.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_1') !!}</h4>
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

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_2') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_5') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_8') !!}</li>
                            </ul>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.pemilihan-bahasa.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.pemilihan-bahasa.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_4') !!}</h4>
                            <pre class="schema-code"><code>// title config menu
'Skema Pemrograman'

// key yang dicari
menu.skema_pemrograman</code></pre>
                            <ul class="schema-list mt-4">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_5') !!}</h4>
                            <pre class="schema-code"><code>if (in_array($locale, ['en', 'id'])) {
    session(['locale' => $locale]);
}</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.pemilihan-bahasa.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_6') !!}</h4>
                            <ol class="schema-list">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_15') !!}</li>
                            </ol>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_7') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_18') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.pemilihan-bahasa.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_8') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.pemilihan-bahasa.step_9') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.pemilihan-bahasa.heading_9') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_20') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.pemilihan-bahasa.item_22') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection