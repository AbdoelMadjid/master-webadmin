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
                    <span class="schema-pill">Naming Convention</span>
                    <h2 class="fw-bold">{{ __('help.konvensi_penamaan') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.konvensi-penamaan.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.konvensi-penamaan.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.konvensi-penamaan.heading_2') !!}</h4>
                            <pre class="schema-code"><code>resources/views/pages/help/pemrograman/operasional/konvensi-penamaan.blade.php
-> route name: help.pemrograman.operasional.konvensi-penamaan
-> URL: /help/pemrograman/operasional/konvensi-penamaan</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.konvensi-penamaan.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.konvensi-penamaan.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.konvensi-penamaan.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.konvensi-penamaan.heading_5') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.konvensi-penamaan.step_3') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection