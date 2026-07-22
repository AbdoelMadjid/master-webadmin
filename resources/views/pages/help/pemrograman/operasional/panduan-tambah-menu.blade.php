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
                    <span class="schema-pill">Menu Operation Guide</span>
                    <h2 class="fw-bold">{{ __('help.panduan_tambah_menu') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.panduan-tambah-menu.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-menu.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_3') !!}</li>
                            </ul>
                        </div>
                        <div class="schema-card mt-6">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-menu.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_13') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_14') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-menu.note_2') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-menu.heading_2') !!}</h4>
                            <pre class="schema-code"><code>// leaf
[
  'title' => 'Panduan Tambah Menu',
  'route' => 'help.pemrograman.operasional.panduan-tambah-menu',
]

// parent
[
  'title' => 'Skema Pemrograman',
  'children' => [ ... ]
]</code></pre>
                        </div>
                        <div class="schema-card mt-6">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-menu.heading_3') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-menu.step_2') !!}</div>
                            </div>
                        </div>

                        <div class="schema-card mt-6">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-menu.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.operasional.panduan-tambah-menu.heading_5') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-menu.item_10') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-menu.note_1') !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
