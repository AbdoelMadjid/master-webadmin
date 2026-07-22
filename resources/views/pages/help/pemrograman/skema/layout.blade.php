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
                    <span class="schema-pill">Layout Blueprint</span>
                    <h2 class="fw-bold">{{ __('help.skema_layout') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.layout.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.layout.heading_1') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.layout.heading_2') !!}</h4>
                            <pre class="schema-code"><code>resources/views/
├─ layouts/
│  ├─ index.blade.php
│  └─ partials/
│     ├─ header/
│     ├─ sidebar/
│     ├─ _toolbar.blade.php
│     └─ _footer.blade.php
├─ pages/
│  └─ ...
└─ partials/
   └─ menus/</code></pre>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.layout.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.layout.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.layout.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.layout.heading_3') !!}</h4>
                            <pre class="schema-code"><code>@@extends('layouts.index')

@@section('toolbar')
  @@component('layouts.partials._toolbar')
    @@slot('li_1') Help @@endslot
    @@slot('li_2') Skema Pemrograman @@endslot
    @@slot('li_3') Skema @@endslot
  @@endcomponent
@@endsection

@@section('content')
  ...
@@endsection</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.layout.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.layout.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.layout.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_4') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.layout.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.layout.heading_5') !!}</h4>
                            <ol class="schema-list">
                                <li>{!! __('help.pages.skema.layout.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_9') !!}</li>
                            </ol>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.layout.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.layout.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.layout.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.layout.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.layout.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.layout.item_13') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.layout.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.layout.step_7') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection