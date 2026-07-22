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
                    <span class="schema-pill">Header Navigation</span>
                    <h2 class="fw-bold">{{ __('help.skema_header_menu') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.header-menu.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.header-menu.item_24') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_25') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_2') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_2') !!}</h4>
                            <div class="schema-meta mb-3">
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.header-menu.chip_5') !!}</span>
                            </div>
                            <div class="schema-note">{!! __('help.pages.skema.header-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.header-menu.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.header-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_26') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_5') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.header-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_15') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.header-menu.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_19') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_7') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.header-menu.item_20') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_23') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'route' => 'help.pemrograman.skema.overview',
  'tooltip' => '...'
]</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_8') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_2') !!}</div>
                            </div>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.header-menu.note_2') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_9') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.header-menu.step_5') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.header-menu.heading_10') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.header-menu.item_27') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_28') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_29') !!}</li>
                                <li>{!! __('help.pages.skema.header-menu.item_30') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection