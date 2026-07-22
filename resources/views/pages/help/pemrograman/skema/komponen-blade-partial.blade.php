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
                    <span class="schema-pill">Blade Architecture</span>
                    <h2 class="fw-bold">{{ __('help.skema_komponen_blade_and_partial') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.komponen-blade-partial.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_1') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_4') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_2') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_3') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_3') !!}</h4>
                            <pre class="schema-code"><code>resources/views/
├─ layouts/
│  ├─ index.blade.php
│  └─ partials/
│     ├─ _toolbar.blade.php
│     ├─ header/
│     └─ sidebar/
├─ partials/
│  ├─ menus/
│  ├─ modals/
│  └─ widgets/
├─ components/
│  ├─ ui/
│  └─ forms/
└─ pages/
   └─ ...</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.komponen-blade-partial.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_4') !!}</h4>
                            <pre class="schema-code"><code>// parent view
@@include('layouts.partials._toolbar', [
  'li_1' => 'Help',
  'li_2' => 'Skema Komponen Blade & Partial'
])</code></pre>
                            <ul class="schema-list mt-4">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_6') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_5') !!}</h4>
                            <pre class="schema-code"><code>// resources/views/components/ui/info-card.blade.php
@@props(['title', 'icon' => 'ki-abstract-26'])

&lt;div class="card card-flush"&gt;
  &lt;div class="card-body"&gt;
    &lt;i class="ki-duotone @{{ $icon }} fs-2hx"&gt;&lt;/i&gt;
    &lt;h3&gt;@{{ $title }}&lt;/h3&gt;
    @{{ $slot }}
  &lt;/div&gt;
&lt;/div&gt;

// usage
&lt;x-ui.info-card title="Skema Route" icon="ki-route"&gt;
  Alur dari URL ke Blade view.
&lt;/x-ui.info-card&gt;</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_7') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.komponen-blade-partial.item_14') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.komponen-blade-partial.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_8') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_4') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_9') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_15') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_10') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.komponen-blade-partial.step_12') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.komponen-blade-partial.chip_6') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_10') !!}</h4>
                            <pre class="schema-code"><code>// resources/views/components/ui/stat-card.blade.php
@@props([
  'title',
  'value',
  'icon' => 'ki-chart-simple',
  'color' => 'primary',
  'subtitle' => null,
  'badge' => null,
  'href' => null,
])

@@php
  $allowedColors = ['primary', 'success', 'warning', 'danger', 'info', 'dark', 'secondary'];
  $color = in_array($color, $allowedColors, true) ? $color : 'primary';
@@endphp

&lt;div class="card card-flush h-100"&gt;
  &lt;div class="card-body"&gt;
    &lt;div class="d-flex align-items-center mb-3"&gt;
      &lt;i class="ki-duotone @{{ $icon }} fs-2hx text-@{{ $color }} me-3"&gt;&lt;/i&gt;
      &lt;div&gt;
        &lt;h3 class="mb-0"&gt;@{{ $title }}&lt;/h3&gt;
        @@if($subtitle)&lt;div class="text-gray-600 fs-7"&gt;@{{ $subtitle }}&lt;/div&gt;@@endif
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="fs-2 fw-bold"&gt;@{{ $value }}&lt;/div&gt;
    @@if($badge)&lt;span class="badge badge-light-@{{ $color }} mt-2"&gt;@{{ $badge }}&lt;/span&gt;@@endif
    @{{ $slot }}
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.komponen-blade-partial.heading_11') !!}</h4>
                            <pre class="schema-code"><code>&lt;x-ui.stat-card
  title="Total Orders"
  value="1,248"
  icon="ki-delivery-3"
  color="success"
  subtitle="30 hari terakhir"
  badge="+12%"
&gt;
  &lt;a href="@{{ route('apps.ecommerce.sales.listing') }}" class="btn btn-sm btn-light-success mt-4"&gt;
    Lihat Detail
  &lt;/a&gt;
&lt;/x-ui.stat-card&gt;</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.komponen-blade-partial.note_2') !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection