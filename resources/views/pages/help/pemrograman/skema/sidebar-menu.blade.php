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
                    <span class="schema-pill">Sidebar Architecture</span>
                    <h2 class="fw-bold">{{ __('help.skema_sidebar_menu') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.sidebar-menu.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.sidebar-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_2') !!}</h4>
                            <pre class="schema-code"><code>[
  'title' => 'Skema Pemrograman',
  'icon' => '...',
  'paths' => 2,
  'children' => [
    ['title' => 'Skema Route', 'route' => 'help.pemrograman.skema.route'],
    ...
  ]
]</code></pre>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_3') !!}</h4>
                            <div class="schema-flow mb-4">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_1') !!}</div>
                            </div>
                            <pre class="schema-code"><code>[
  'route' => 'apps.chat',
  'title' => 'Chat',
  'dropdown' => true,
  'children' => [
    ['route' => 'apps.chat.private', 'title' => 'Private Chat'],
    ['route' => 'apps.chat.group', 'title' => 'Group Chat'],
  ]
]</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_4') !!}</h4>
                            <pre class="schema-code"><code>[
  'route' => 'apps.inbox.listing',
  'title' => 'Messages',
  'badge' => ['label' => 'Soon', 'class' => 'badge badge-info']
]</code></pre>
                            <pre class="schema-code mt-4"><code>[
  'route' => 'dashboards.landing',
  'title' => 'Landing',
  'target' => '_blank'
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.sidebar-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_5') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_4') !!}</div>
                            </div>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.sidebar-menu.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.sidebar-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.sidebar-menu.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.sidebar-menu.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.sidebar-menu.heading_8') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.sidebar-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.sidebar-menu.item_5') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection