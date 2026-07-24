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
            {{ __('help.skema_auth_dan_middleware') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">
                        <i class="ki-duotone ki-security-user text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Security &amp; Protection Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.auth-dan-middleware.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.auth-dan-middleware.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-lock fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.skema.auth-dan-middleware.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-shield-cross fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.skema.auth-dan-middleware.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-verify fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.auth-dan-middleware.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. LOGIN FLOW & PAGE ACCESS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. ROUTE MAP & MIDDLEWARE MAPPING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-map fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>// Guest Middleware (Unauthenticated Only)
- GET  /login
- POST /login  (throttle:login)
- GET  /register
- POST /register
- Forgot & Reset Password Routes

// Auth Middleware (Authenticated Only)
- GET  /dashboard  (auth, verified)
- GET  /profil-pengguna  (auth)
- POST /logout  (auth)
- All Menu Views in routes/menu.php  (auth)

// Signed & Throttled Routes
- GET  /verify-email/{id}/{hash}  (auth, signed, throttle:6,1)
- POST /email/verification-notification  (auth, throttle:6,1)</code></pre>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ROUTE PROTECTION ARCHITECTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-check fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_1') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.auth-dan-middleware.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. CUSTOM MIDDLEWARE: SETLOCALE & ACTIVITY TRACKING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-gear fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// bootstrap/app.php
$middleware->web(append: [
    \App\Http\Middleware\SetLocale::class,
    \App\Http\Middleware\UpdateUserLastActivity::class,
]);

// UpdateUserLastActivity Logic:
// Updates `last_activity_at` timestamp in users table 
// during active session (used for 15-Min Active User widget).</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.auth-dan-middleware.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. USER MANAGEMENT & SECURITY INTEGRATION CARD -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="mb-0"><i class="ki-duotone ki-user-square fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> User Management &amp; Security Integration</h4>
                                <a href="{{ route('help.pemrograman.operasional.manajemen-pengguna') }}" class="btn btn-sm btn-light-primary">
                                    View Full Operational Guide <i class="ki-duotone ki-arrow-right fs-4 ms-1"><span class="path1"></span><span class="path2"></span></i>
                                </a>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded border border-gray-300">
                                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-time fs-5 text-primary me-1"><span class="path1"></span><span class="path2"></span></i> 1. Activity Tracking</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>UpdateUserLastActivity</code> updates the <code>last_activity_at</code> user timestamp during requests to compute real-time <em>Active User (15 Mins)</em> widget metrics.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded border border-gray-300">
                                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-lock-2 fs-5 text-danger me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> 2. 15-Min Idle Timeout</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>_idle-timer.blade.php</code> monitors 15 minutes of user inactivity, automatically executing <code>POST /logout</code> (with <code>reason=idle</code>) and redirecting to <code>/login</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded border border-gray-300">
                                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-award fs-5 text-warning me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> 3. Daily Reward Listener</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>LogUserLogin</code> listens to the Laravel <code>Login</code> event to award +1 daily point (`whereDate`) and increment <code>login_count</code> on recurring logins.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. MINIMUM SECURITY CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_5') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_4') !!}</li>
                            </ol>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. AUTH DEBUGGING & TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_8') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle table-row-dashed fs-7 gy-3 gs-4">
                                    <thead>
                                        <tr class="fw-bold bg-light text-primary">
                                            <th class="min-w-200px">Symptom / Error</th>
                                            <th class="min-w-200px">Root Cause</th>
                                            <th class="min-w-250px">Recommended Resolution</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Infinite Redirect Loop (<code>/login</code> redirects back to <code>/login</code>)</td>
                                            <td>Session domain mismatch or <code>guest</code> middleware applied to a protected callback route.</td>
                                            <td>Check <code>SESSION_DOMAIN</code> in <code>.env</code> and ensure authenticated routes use <code>auth</code> middleware.</td>
                                        </tr>
                                        <tr>
                                            <td>Unauthenticated 403 / 401 error on Menu Route</td>
                                            <td>User session expired or user email not verified when accessing <code>verified</code> route.</td>
                                            <td>Verify user email status or re-login to regenerate an active session.</td>
                                        </tr>
                                        <tr>
                                            <td>Locale Language Resets on Page Refresh</td>
                                            <td><code>SetLocale</code> middleware omitted from <code>bootstrap/app.php</code> web group.</td>
                                            <td>Ensure <code>SetLocale::class</code> is appended to the <code>web</code> middleware stack.</td>
                                        </tr>
                                        <tr>
                                            <td><code>last_activity_at</code> timestamp not updating</td>
                                            <td><code>UpdateUserLastActivity</code> middleware missing or user not authenticated.</td>
                                            <td>Verify that user is authenticated and middleware is active in <code>bootstrap/app.php</code>.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. LOGIN FLOW & PAGE ACCESS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. ROUTE MAP & MIDDLEWARE MAPPING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-map fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>// Middleware Guest (Hanya Pengguna Belum Login)
- GET  /login
- POST /login  (throttle:login)
- GET  /register
- POST /register
- Route Lupa & Reset Password

// Middleware Auth (Khusus Pengguna Terautentikasi)
- GET  /dashboard  (auth, verified)
- GET  /profil-pengguna  (auth)
- POST /logout  (auth)
- Semua View Menu di routes/menu.php  (auth)

// Route Signed & Throttled
- GET  /verify-email/{id}/{hash}  (auth, signed, throttle:6,1)
- POST /email/verification-notification  (auth, throttle:6,1)</code></pre>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ROUTE PROTECTION ARCHITECTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-check fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_1') !!}</li>
                            </ul>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.auth-dan-middleware.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. CUSTOM MIDDLEWARE: SETLOCALE & ACTIVITY TRACKING -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-gear fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_4') }}
                            </h4>
                            <pre class="schema-code"><code>// bootstrap/app.php
$middleware->web(append: [
    \App\Http\Middleware\SetLocale::class,
    \App\Http\Middleware\UpdateUserLastActivity::class,
]);

// Logika UpdateUserLastActivity:
// Memperbarui timestamp `last_activity_at` pada tabel users 
// saat user aktif beraktivitas (digunakan untuk widget User Aktif 15 Menit).</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.auth-dan-middleware.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. USER MANAGEMENT & SECURITY INTEGRATION CARD -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="mb-0"><i class="ki-duotone ki-user-square fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Integrasi Keamanan &amp; Manajemen Pengguna</h4>
                                <a href="{{ route('help.pemrograman.operasional.manajemen-pengguna') }}" class="btn btn-sm btn-light-primary">
                                    Lihat Panduan Operasional Lengkap <i class="ki-duotone ki-arrow-right fs-4 ms-1"><span class="path1"></span><span class="path2"></span></i>
                                </a>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded border border-gray-300">
                                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-time fs-5 text-primary me-1"><span class="path1"></span><span class="path2"></span></i> 1. Activity Tracking</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>UpdateUserLastActivity</code> memperbarui timestamp <code>last_activity_at</code> user saat beraktivitas untuk menghitung data widget <em>User Aktif (15 Mins)</em>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded border border-gray-300">
                                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-lock-2 fs-5 text-danger me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> 2. Idle Timeout 15 Menit</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>_idle-timer.blade.php</code> memantau inaktivitas 15 menit, lalu mengeksekusi <code>POST /logout</code> (dengan <code>reason=idle</code>) dan mengarahkan ke <code>/login</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded border border-gray-300">
                                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-award fs-5 text-warning me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> 3. Listener Reward Login</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            <code>LogUserLogin</code> mendengarkan event <code>Login</code> untuk memberikan +1 poin reward harian (`whereDate`) dan meng-increment <code>login_count</code>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. MINIMUM SECURITY CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_5') }}
                            </h4>
                            <ol class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_8') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.auth-dan-middleware.item_4') !!}</li>
                            </ol>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_3') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.auth-dan-middleware.chip_5') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. STRICT TEAM ENGINEERING STANDARDS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.auth-dan-middleware.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. AUTH DEBUGGING & TROUBLESHOOTING MATRIX -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-wrench fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.auth-dan-middleware.heading_8') }}
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle table-row-dashed fs-7 gy-3 gs-4">
                                    <thead>
                                        <tr class="fw-bold bg-light text-primary">
                                            <th class="min-w-200px">Gejala / Error</th>
                                            <th class="min-w-200px">Penyebab Utama</th>
                                            <th class="min-w-250px">Solusi Rekomendasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Infinite Redirect Loop (<code>/login</code> mengalihkan kembali ke <code>/login</code>)</td>
                                            <td>Ketidakcocokan domain session atau middleware <code>guest</code> dipasang pada route callback terproteksi.</td>
                                            <td>Periksa <code>SESSION_DOMAIN</code> pada <code>.env</code> dan pastikan route internal memakai middleware <code>auth</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Error Unauthenticated 403 / 401 saat membuka Menu Route</td>
                                            <td>Session user kadaluarsa atau email user belum diverifikasi saat mengakses route <code>verified</code>.</td>
                                            <td>Verifikasi status email pengguna atau lakukan login ulang untuk memperbarui session aktif.</td>
                                        </tr>
                                        <tr>
                                            <td>Bahasa Locale Kembali ke Default saat Refresh Halaman</td>
                                            <td>Middleware <code>SetLocale</code> belum terdaftar pada grup <code>web</code> di <code>bootstrap/app.php</code>.</td>
                                            <td>Pastikan <code>SetLocale::class</code> ditambahkan ke stack middleware <code>web</code>.</td>
                                        </tr>
                                        <tr>
                                            <td>Timestamp <code>last_activity_at</code> Tidak Memperbarui</td>
                                            <td>Middleware <code>UpdateUserLastActivity</code> tidak aktif atau user tidak terautentikasi.</td>
                                            <td>Pastikan user terautentikasi dan middleware aktif pada <code>bootstrap/app.php</code>.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection