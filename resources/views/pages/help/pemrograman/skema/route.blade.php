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
                    <span class="schema-pill">Route Blueprint</span>
                    <h2 class="fw-bold">{{ __('help.skema_route') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.route.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_1') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.route.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_5') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_2') !!}</h4>
                            <pre class="schema-code"><code>// contoh file
resources/views/pages/help/pemrograman/skema/route.blade.php

// hasil mapping
relative path: help/skema-pemrograman/route.blade.php
trim extension: help/skema-pemrograman/route
route name: help.pemrograman.skema.route
route url: /help/pemrograman/skema/route
view: pages.help.pemrograman.skema.route</code></pre>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.route.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.route.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.route.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_3') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.route.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_4') !!}</h4>
                            <ol class="schema-list">
                                <li>{!! __('help.pages.skema.route.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_6') !!}</li>
                            </ol>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.route.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_5') !!}</h4>
                            <pre class="schema-code"><code>resources/views/pages/help/pemrograman/skema/route.blade.php
=> URL: /help/pemrograman/skema/route
=> route name: help.pemrograman.skema.route</code></pre>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.route.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.route.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.route.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.route.step_8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.route.heading_8') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.route.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.route.item_14') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection