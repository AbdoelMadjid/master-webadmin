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
                    <span class="schema-pill">Auth Blueprint</span>
                    <h2 class="fw-bold">{{ __('help.skema_auth_dan_middleware') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.auth-dan-middleware.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.auth-dan-middleware.heading_1') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.auth-dan-middleware.heading_2') !!}</h4>
                            <pre class="schema-code"><code>guest middleware:
- GET  /login
- POST /login
- GET  /register
- POST /register
- forgot/reset password routes

auth middleware:
- GET  /verify-email
- POST /email/verification-notification
- PUT  /password
- POST /logout</code></pre>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_1') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.auth-dan-middleware.heading_3') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_1') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.auth-dan-middleware.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.auth-dan-middleware.heading_4') !!}</h4>
                            <pre class="schema-code"><code>// bootstrap/app.php
$middleware->web(append: [
  \App\Http\Middleware\SetLocale::class,
]);

// SetLocale
if (Session::has('locale')) {
  App::setLocale(Session::get('locale'));
}</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.auth-dan-middleware.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.auth-dan-middleware.heading_5') !!}</h4>
                            <ol class="schema-list">
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_4') !!}</li>
                            </ol>
                            <div class="schema-meta">
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.auth-dan-middleware.heading_6') !!}</h4>
                            <pre class="schema-code"><code>Public:
- landing, login, register, forgot password

Authenticated:
- dashboard, pages/*, profile/*

Authenticated + Verified:
- fitur yang butuh email terverifikasi

Signed/Throttle:
- verification link, resend verification</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.auth-dan-middleware.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_7') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection