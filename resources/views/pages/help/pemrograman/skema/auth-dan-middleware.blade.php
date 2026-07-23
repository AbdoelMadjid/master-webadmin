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
  \App\Http\Middleware\UpdateUserLastActivity::class,
]);

// UpdateUserLastActivity:
// Update last_activity_at user untuk tracking aktif real-time (15 Mins)</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.auth-dan-middleware.warn_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4><i class="ki-duotone ki-user-square fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Skema Pemrograman Manajemen Pengguna (User Management & Security)</h4>
                                <a href="{{ route('help.pemrograman.operasional.manajemen-pengguna') }}" class="btn btn-sm btn-light-primary">
                                    Lihat Panduan Operasional Lengkap <i class="ki-duotone ki-arrow-right fs-4 ms-1"><span class="path1"></span><span class="path2"></span></i>
                                </a>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">1. Middleware Activity Tracking</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>UpdateUserLastActivity</code> memperbarui timestamp <code>last_activity_at</code> user saat beraktivitas untuk menghitung data widget <em>User Aktif (15 Mins)</em>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">2. Keamanan Idle Timeout 15 Mins</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>_idle-timer.blade.php</code> memantau inaktivitas 15 menit, lalu mengeksekusi <code>POST /logout</code> (dengan <code>reason=idle</code>) dan mengarahkan ke <code>/login</code> dengan notifikasi alert-warning.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">3. Event Listener Reward Poin</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>LogUserLogin</code> mendengarkan <code>Login</code> event untuk memberikan +1 poin reward harian (`whereDate`) dan meng-increment <code>login_count</code> pada login berulang.
                                        </p>
                                    </div>
                                </div>
                            </div>
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