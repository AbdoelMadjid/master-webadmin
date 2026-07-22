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
                    <span class="schema-pill">Asset Blueprint</span>
                    <h2 class="fw-bold">{{ __('help.skema_theme_assets') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.skema_theme_assets_desc') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_1') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_2') !!}</h4>
                            <pre class="schema-code"><code>&lt;!-- head --&gt;
@@yield('styles')
&lt;link href="assets/plugins/global/plugins.bundle.css" ... /&gt;
&lt;link href="assets/css/style.bundle.css" ... /&gt;

&lt;!-- before closing body --&gt;
&lt;script src="assets/plugins/global/plugins.bundle.js"&gt;&lt;/script&gt;
&lt;script src="assets/js/scripts.bundle.js"&gt;&lt;/script&gt;
@@yield('scripts')</code></pre>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_2') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_3') !!}</h4>
                            <p class="text-gray-700 fs-7 mb-4">
                                Untuk CSS/JS/image, gunakan
                                <code>asset('assets/path/file.ext')</code>
                                supaya source asset tetap kompatibel dengan mekanisme switch versi Metronic.
                            </p>
                            <pre class="schema-code"><code>&lt;link href="@{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}"
      rel="stylesheet" type="text/css" /&gt;

&lt;script src="@{{ asset('assets/js/custom/apps/subscriptions/add/advanced.js') }}"&gt;&lt;/script&gt;

&lt;img src="@assets/media/svg/card-logos/visa.svg"
     alt="" class="h-25px" /&gt;</code></pre>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.theme-assets.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_3') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.theme-assets.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_4') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.theme-assets.item_4') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_7') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.theme-assets.note_2') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_5') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.theme-assets.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_10') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.theme-assets.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_6') !!}</h4>
                            <ol class="schema-list">
                                <li>{!! __('help.pages.skema.theme-assets.item_11') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_14') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_15') !!}</li>
                            </ol>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.theme-assets.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.theme-assets.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.theme-assets.heading_8') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.theme-assets.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_18') !!}</li>
                                <li>{!! __('help.pages.skema.theme-assets.item_19') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




