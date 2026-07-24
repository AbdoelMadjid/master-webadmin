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
            Operasional Notifikasi System (Topbar Bell & Popup)
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">{{ __('help.operasional') }} > {{ __('help.notifikasi_system') }}</span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.notification.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.notification.hero_lead') }}
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                @if(app()->getLocale() == 'en')
                    <!--====================================================-->
                    <!-- 1. NEW USER REGISTRATION ALERT WORKFLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12 mb-4">
                        <div class="schema-card border-start border-4 border-warning">
                            <h4><i class="ki-duotone ki-profile-user fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> 1. New Account Registration Alert Operations</h4>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-warning border border-warning border-dashed h-100">
                                        <h5 class="fw-bold text-warning mb-2">A. Notification Indicators & Triggers</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Every public registration via <code>/register</code> with <code>pending</code> status automatically triggers a counter badge in the header bell.</li>
                                            <li>Pulsing red dot (<code>animation-blink</code>) indicates a new user registration requiring Admin review and approval.</li>
                                            <li>In the topbar bell popup under the <strong>Alerts</strong> tab, a <i>New Account Registration</i> item appears with name, email, and elapsed time (e.g. <i>5 mins ago</i>).</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-success border border-success border-dashed h-100">
                                        <h5 class="fw-bold text-success mb-2">B. Admin Handling Actions</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Click the notification item in the Alerts tab to navigate directly to <code>/manajemenpengguna/users</code>.</li>
                                            <li>Click the <strong>Approve</strong> button to activate the user account and automatically assign the default <code>user</code> role.</li>
                                            <li>Click the <strong>Reject</strong> button to reject/block invalid registrants. The bell counter badge automatically decrements.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. PASSWORD RESET REQUEST WORKFLOW -->
                    <!--====================================================-->
                    <div class="schema-col-12 mb-4">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4><i class="ki-duotone ki-key fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> 2. Password Reset Request Operations (Mark As Read)</h4>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-danger border border-danger border-dashed h-100">
                                        <h5 class="fw-bold text-danger mb-2">A. Reset Notification Triggers</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Users who forgot their password submit their email address at <code>/forgot-password</code>.</li>
                                            <li>The request is logged in the database with <code>status = 'pending'</code> and <code>is_read = false</code>.</li>
                                            <li>A pulsing red badge appears on the Admin topbar bell icon in real-time.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">B. Reset Execution & Badge Clearance</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Admin clicks the <i>Password Reset Request</i> notification item in the header bell dropdown.</li>
                                            <li>The system automatically triggers <code>markAsRead()</code>, updating <code>is_read = true</code> and decrementing the badge counter.</li>
                                            <li>Admin is redirected to <code>manajemenpengguna/reset-password</code> to execute password resets with a default password <code>Password!12345</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. LOGIN AUDIT TRAIL LOGS -->
                    <!--====================================================-->
                    <div class="schema-col-12 mb-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-shield-tick fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> 3. Login Audit Trail Monitoring (Logs Tab)</h4>
                            <p class="fs-7 text-gray-700">
                                The <strong>Logs</strong> tab in the header bell dropdown displays the last 10 login sessions for the currently active user, including timestamps, IP addresses, and device user-agents to audit suspicious login activities.
                            </p>
                        </div>
                    </div>
                @else
                    <!--====================================================-->
                    <!-- 1. ALUR PEMBERITAHUAN PENDAFTARAN USER BARU -->
                    <!--====================================================-->
                    <div class="schema-col-12 mb-4">
                        <div class="schema-card border-start border-4 border-warning">
                            <h4><i class="ki-duotone ki-profile-user fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> 1. Operasional Peringatan Pendaftaran Akun Baru</h4>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-warning border border-warning border-dashed h-100">
                                        <h5 class="fw-bold text-warning mb-2">A. Indikator & Pemicu Notifikasi</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Setiap pendaftaran publik via <code>/register</code> yang berstatus <code>pending</code> akan otomatis memicu kemunculan angka counter di lonceng header.</li>
                                            <li>Dot merah berkedip (<code>animation-blink</code>) menandakan ada akun baru yang memerlukan tindakan persetujuan.</li>
                                            <li>Pada popup lonceng tab <strong>Peringatan</strong>, muncul item <i>Pendaftaran Akun Baru</i> dilengkapi nama, email, dan estimasi waktu terlewat (misal: <i>5 menit lalu</i>).</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-success border border-success border-dashed h-100">
                                        <h5 class="fw-bold text-success mb-2">B. Tindakan Penanganan Admin</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Klik item notifikasi pada tab Peringatan untuk menuju halaman <code>/manajemenpengguna/users</code>.</li>
                                            <li>Pilih tombol <strong>Setujui</strong> untuk mengaktifkan akun pendaftar dan menugaskan role <code>user</code> secara otomatis.</li>
                                            <li>Pilih tombol <strong>Tolak</strong> untuk memblokir akun yang tidak valid. Angka counter pada lonceng otomatis berkurang.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. ALUR PERMINTAAN RESET PASSWORD -->
                    <!--====================================================-->
                    <div class="schema-col-12 mb-4">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4><i class="ki-duotone ki-key fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> 2. Operasional Permintaan Reset Password (Mark As Read)</h4>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-danger border border-danger border-dashed h-100">
                                        <h5 class="fw-bold text-danger mb-2">A. Pemicuan Notifikasi Reset Password</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>User yang lupa kata sandi mengisikan email di halaman <code>/forgot-password</code>.</li>
                                            <li>Permintaan tercatat di database dengan <code>status = 'pending'</code> dan <code>is_read = false</code>.</li>
                                            <li>Badge merah berkedip muncul di lonceng topbar Admin/Master secara real-time.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed h-100">
                                        <h5 class="fw-bold text-primary mb-2">B. Eksekusi Reset & Pembersihan Badge</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Admin mengklik notifikasi <i>Permintaan Reset Password</i> pada lonceng header.</li>
                                            <li>Sistem secara otomatis mengeksekusi <code>markAsRead()</code> sehingga status <code>is_read</code> berubah menjadi <code>true</code> dan badge counter berkurang.</li>
                                            <li>Admin diantarkan ke rute <code>manajemenpengguna/reset-password</code> untuk memproses reset kata sandi dengan kata sandi default <code>Password!12345</code>.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. TAB AUDIT TRAIL LOGS LOGIN -->
                    <!--====================================================-->
                    <div class="schema-col-12 mb-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-shield-tick fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> 3. Pemantauan Audit Trail Login (Tab Logs)</h4>
                            <p class="fs-7 text-gray-700">
                                Tab <strong>Logs</strong> pada lonceng topbar menyajikan 10 riwayat sesi login terakhir pengguna yang sedang aktif, mencakup waktu masuk, IP Address, serta jenis perangkat untuk mendeteksi aktivitas login yang mencurigakan.
                            </p>
                        </div>
                    </div>
                @endif

                </div>
            </div>
        </div>
    </div>
@endsection
