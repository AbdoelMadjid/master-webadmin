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
                    <span class="schema-pill">Daily Engineering Flow</span>
                    <h2 class="fw-bold">{{ __('help.workflow_developer_harian') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.workflow-developer-harian.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.workflow-developer-harian.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.workflow-developer-harian.heading_2') !!}</h4>
                            <pre class="schema-code"><code>composer dev
# menjalankan server + queue listener + logs + vite</code></pre>
                            <ul class="schema-list mt-4">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.workflow-developer-harian.heading_3') !!}</h4>
                            <pre class="schema-code"><code>php artisan optimize:clear
composer test
npm run build</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.workflow-developer-harian.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.workflow-developer-harian.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.workflow-developer-harian.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.workflow-developer-harian.heading_5') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.workflow-developer-harian.step_3') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection