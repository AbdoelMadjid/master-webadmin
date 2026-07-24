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
            Skema Notifikasi System (Topbar Icon & Popup)
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">{{ __('help.skema') }} > {{ __('help.notifikasi_system') }}</span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.notification.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.notification.hero_lead') }}
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                @if(app()->getLocale() == 'en')
                    <!--====================================================-->
                    <!-- 1. HEADER BELL TRIGGER & RED BADGE COUNTER -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-notification-status fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Header Trigger & Red Badge Counter</h4>
                            <pre class="schema-code"><code>// Blade: layouts/partials/header/_app/notifications.blade.php
$unreadResetRequestsCount = PasswordResetRequest::where('status', 'pending')
    ->where('is_read', false)
    ->count();

$pendingUsersCount = User::where('status', 'pending')->count();
$totalNotificationCount = $unreadResetRequestsCount + $pendingUsersCount;

// Badge Rendering
&lt;span class="bullet bullet-dot bg-danger position-absolute animation-blink"&gt;&lt;/span&gt;
&lt;span class="badge badge-circle badge-danger"&gt;@{{ $totalNotificationCount }}&lt;/span&gt;</code></pre>
                            <div class="schema-note mt-3">
                                Notification counts are combined automatically from two main tables without impacting database performance via safe `try-catch` checks.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. POPUP MENU DROPDOWN & 3 TAB STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Dropdown Popup & Tab Layout</h4>
                            <pre class="schema-code"><code>// Partial: partials/menus/_notifications-menu.blade.php
// Tab 1: Alerts (Active items & red badges)
$unreadPasswordResets = PasswordResetRequest::with('user')
    ->where('status', 'pending')
    ->where('is_read', false)
    ->get();

$pendingUsers = User::where('status', 'pending')->get();

// Tab 2: Updates (Broadcast Announcements)
// Tab 3: Logs (Audit trail of last 10 login sessions)
$userLoginLogs = DataLogin::where('user_id', auth()->id())
    ->orderBy('login_at', 'desc')->limit(10)->get();</code></pre>
                            <div class="schema-note mt-3">
                                The menu is rendered responsively using `Metronic Menu` components (`data-kt-menu="true"`).
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. MARK AS READ & DISPATCH FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-check-circle fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Mark As Read Flow & Automatic Redirection</h4>
                            <p class="fs-7 text-gray-700">
                                When Admin clicks a notification item on the <strong>Alerts</strong> tab, the system executes status updates and page redirects:
                            </p>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-info border border-info border-dashed h-100">
                                        <h5 class="fw-bold text-info mb-2">A. New Account Registration Item</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Target Route:</strong> <code>GET /manajemenpengguna/users</code> (<code>manajemenpengguna.users</code>).</li>
                                            <li><strong>Admin Action:</strong> Review public applicant data and click <strong>Approve</strong> or <strong>Reject</strong> buttons.</li>
                                            <li><strong>Role Assignment:</strong> When approved, default <code>user</code> role is assigned automatically.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">B. Password Reset Request Item</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Endpoint Interceptor:</strong> <code>GET /manajemenpengguna/reset-password/{id}/mark-read</code>.</li>
                                            <li><strong>Controller Hook:</strong> <code>PasswordResetRequestController@markAsRead</code> updates <code>is_read = true</code>.</li>
                                            <li><strong>Redirection:</strong> Redirected directly to <code>manajemenpengguna.reset-password</code> with default password modal preset to <code>Password!12345</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. REKAPITULASI BERKAS NOTIFIKASI SYSTEM -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Topbar Notifications File Recapitulation</h4>
                            <div class="table-responsive mt-3">
                                <table class="table table-row-dashed align-middle gy-3 fs-7 mb-0">
                                    <thead>
                                        <tr class="fw-bold text-gray-700 bg-light">
                                            <th>Component / File</th>
                                            <th>File Path</th>
                                            <th>Programming Function</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Header Bell Icon Wrapper</strong></td>
                                            <td><code>resources/views/layouts/partials/header/_app/notifications.blade.php</code></td>
                                            <td>Computes total pending notification count, renders bell icon (`ki-notification-status`), and activates `animation-blink`.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dropdown Menu Popup</strong></td>
                                            <td><code>resources/views/partials/menus/_notifications-menu.blade.php</code></td>
                                            <td>Renders 3-tab dropdown menu (Alerts, Updates, Logs), real-time Eloquent queries, and `diffForHumans()` timestamps.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Mark Read Controller</strong></td>
                                            <td><code>App\Http\Controllers\ManajemenPengguna\PasswordResetRequestController.php</code></td>
                                            <td>Method `markAsRead($id)` to update `is_read = true` and redirect Admin to action pages.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Public Trigger Controllers</strong></td>
                                            <td><code>RegisteredUserController.php</code><br><code>PasswordResetLinkController.php</code></td>
                                            <td>Dispatches notification triggers when users register publicly or submit password reset requests.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @else
                    <!--====================================================-->
                    <!-- 1. HEADER BELL TRIGGER & RED BADGE COUNTER -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-notification-status fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Header Trigger & Red Badge Counter</h4>
                            <pre class="schema-code"><code>// Blade: layouts/partials/header/_app/notifications.blade.php
$unreadResetRequestsCount = PasswordResetRequest::where('status', 'pending')
    ->where('is_read', false)
    ->count();

$pendingUsersCount = User::where('status', 'pending')->count();
$totalNotificationCount = $unreadResetRequestsCount + $pendingUsersCount;

// Badge Rendering
&lt;span class="bullet bullet-dot bg-danger position-absolute animation-blink"&gt;&lt;/span&gt;
&lt;span class="badge badge-circle badge-danger"&gt;@{{ $totalNotificationCount }}&lt;/span&gt;</code></pre>
                            <div class="schema-note mt-3">
                                Pencacahan digabung secara otomatis dari dua tabel utama tanpa membebankan query database via pengecekan aman `try-catch`.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. POPUP MENU DROPDOWN & 3 TAB STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Dropdown Popup & Tab Layout</h4>
                            <pre class="schema-code"><code>// Partial: partials/menus/_notifications-menu.blade.php
// Tab 1: Peringatan (Active items & red badges)
$unreadPasswordResets = PasswordResetRequest::with('user')
    ->where('status', 'pending')
    ->where('is_read', false)
    ->get();

$pendingUsers = User::where('status', 'pending')->get();

// Tab 2: Pengumuman (Broadcast Announcement)
// Tab 3: Logs (Audit trail 10 login terakhir user)
$userLoginLogs = DataLogin::where('user_id', auth()->id())
    ->orderBy('login_at', 'desc')->limit(10)->get();</code></pre>
                            <div class="schema-note mt-3">
                                Menu disajikan secara responsif menggunakan komponen `Metronic Menu` (`data-kt-menu="true"`).
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. MARK AS READ & DISPATCH FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-check-circle fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Alur Tandai Dibaca (Mark As Read) & Redireksi Otomatis</h4>
                            <p class="fs-7 text-gray-700">
                                Saat Admin mengklik item notifikasi pada tab <strong>Peringatan</strong>, sistem mengeksekusi alur pembaruan status dan pengalihan halaman:
                            </p>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-info border border-info border-dashed h-100">
                                        <h5 class="fw-bold text-info mb-2">A. Item Pendaftaran Akun Baru</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Rute Tujuan:</strong> <code>GET /manajemenpengguna/users</code> (<code>manajemenpengguna.users</code>).</li>
                                            <li><strong>Aksi Admin:</strong> Meninjau data pendaftar publik dan mengklik tombol <strong>Setujui</strong> atau <strong>Tolak</strong>.</li>
                                            <li><strong>Pemberian Role:</strong> Saat disetujui, role <code>user</code> langsung dipasang otomatis.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">B. Item Permintaan Reset Password</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li><strong>Endpoint Interceptor:</strong> <code>GET /manajemenpengguna/reset-password/{id}/mark-read</code>.</li>
                                            <li><strong>Controller Hook:</strong> <code>PasswordResetRequestController@markAsRead</code> memperbarui <code>is_read = true</code>.</li>
                                            <li><strong>Pengalihan:</strong> Dialihkan langsung ke rute <code>manajemenpengguna.reset-password</code> dengan modal preset password <code>Password!12345</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. REKAPITULASI BERKAS NOTIFIKASI SYSTEM -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Rekapitulasi Berkas Notifikasi Topbar</h4>
                            <div class="table-responsive mt-3">
                                <table class="table table-row-dashed align-middle gy-3 fs-7 mb-0">
                                    <thead>
                                        <tr class="fw-bold text-gray-700 bg-light">
                                            <th>Komponen / Berkas</th>
                                            <th>Path File</th>
                                            <th>Fungsi Pemrograman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Header Bell Icon Wrapper</strong></td>
                                            <td><code>resources/views/layouts/partials/header/_app/notifications.blade.php</code></td>
                                            <td>Penghitung total notifikasi pending, penyedia ikon lonceng (`ki-notification-status`), dan pengaktif animasi `animation-blink`.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dropdown Menu Popup</strong></td>
                                            <td><code>resources/views/partials/menus/_notifications-menu.blade.php</code></td>
                                            <td>Menu dropdown 3 tab (Peringatan, Pengumuman, Logs), query Eloquent real-time, dan format waktu `diffForHumans()`.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Mark Read Controller</strong></td>
                                            <td><code>App\Http\Controllers\ManajemenPengguna\PasswordResetRequestController.php</code></td>
                                            <td>Method `markAsRead($id)` untuk memperbarui `is_read = true` dan mengalihkan Admin ke halaman tindakan.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Public Trigger Controllers</strong></td>
                                            <td><code>RegisteredUserController.php</code><br><code>PasswordResetLinkController.php</code></td>
                                            <td>Pengirim pemicu notifikasi saat user mendaftar publik atau mengajukan reset password.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif

                </div>
            </div>
        </div>
    </div>
@endsection
