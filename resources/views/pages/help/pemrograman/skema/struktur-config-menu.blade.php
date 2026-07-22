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
                    <span class="schema-pill">Menu Config</span>
                    <h2 class="fw-bold">{{ __('help.skema_struktur_config_menu') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.struktur-config-menu.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_1') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_2') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_3') !!}</h4>
                            <pre class="schema-code"><code>[
  'title' => 'Skema Route',        // wajib (sumber translasi key menu.*)
  'route' => 'help.pemrograman.skema.route', // opsional jika pakai href
  'href' => 'https://...',         // opsional external link
  'icon' => 'ki-duotone ki-route fs-2',      // umumnya level-1
  'paths' => 4,                    // jumlah span path icon duotone
  'children' => [...],             // opsional nested menu
  'dropdown' => true,              // opsional mode flyout
  'badge' => ['label' => 'Soon', 'class' => 'badge badge-info'],
  'target' => '_blank'             // opsional
]</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.struktur-config-menu.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_4') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_6') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_5') !!}</h4>
                            <pre class="schema-code"><code>$titleKey = 'menu.' . strtolower(
  str_replace([' ', '&amp;', '/'], ['_', 'and', '_'], $menu['title'])
);

// jika key ada -> pakai translasi
// jika key tidak ada -> fallback ke title asli</code></pre>
                            <ul class="schema-list mt-4">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_9') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_13') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_10') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_8') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.struktur-config-menu.item_17') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.struktur-config-menu.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.struktur-config-menu.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.struktur-config-menu.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.struktur-config-menu.heading_9') !!}</h4>
                            <pre class="schema-code"><code>// BEFORE
[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Overview',
      'route' => 'help.pemrograman.skema.overview',
    ],
  ],
]</code></pre>

                            <pre class="schema-code mt-4"><code>// AFTER
[
  'title' => 'Skema Pemrograman',
  'icon'  => 'ki-duotone ki-book-open fs-2',
  'paths' => 2,
  'children' => [
    [
      'title' => 'Overview',
      'route' => 'help.pemrograman.skema.overview',
    ],
    [
      'title' => 'Skema Struktur Config Menu',
      'route' => 'help.pemrograman.skema.struktur-config-menu',
    ],
    [
      'title' => 'Skema Cache & Deployment',
      'route' => 'help.pemrograman.skema.cache-dan-deployment',
    ],
  ],
]</code></pre>

                            <div class="schema-flow mt-4">
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.struktur-config-menu.step_12') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection