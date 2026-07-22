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
                    <span class="schema-pill">QA Minimal Gate</span>
                    <h2 class="fw-bold">{{ __('help.checklist_qa_smoke_test') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.checklist-qa-smoke-test.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.checklist-qa-smoke-test.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_3') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.checklist-qa-smoke-test.heading_2') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.checklist-qa-smoke-test.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.checklist-qa-smoke-test.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_10') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.checklist-qa-smoke-test.item_12') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.checklist-qa-smoke-test.heading_5') !!}</h4>
                            <pre class="schema-code"><code>php artisan optimize:clear
php artisan route:list --name=help.pemrograman
composer test
npm run build</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.operasional.checklist-qa-smoke-test.warn_1') !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection