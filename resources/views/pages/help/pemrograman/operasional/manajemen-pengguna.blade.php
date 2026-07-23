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
                <!--begin::Hero-->
                <div class="schema-hero">
                    <span class="schema-pill">Operasional & Technical Guide</span>
                    <h2 class="fw-bold">Manajemen Pengguna (Users Management)</h2>
                    <p class="schema-lead">
                        Panduan alur pemrograman, arsitektur data, dan operasional fitur Manajemen Pengguna yang mencakup pengelolaan Avatar, Sistem Reward Poin Harian, Keamanan Idle Auto-Logout, Impor Massal Excel, Mode Switch User (Impersonasi), serta Penyesuaian Zona Waktu Lokal (WIB).
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ALUR FITUR AVATAR PENGGUNA -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="border-start border-4 border-primary ps-4 my-2">
                            <h3 class="fw-bold text-gray-900 mb-1">1. Penambahan & Pengelolaan Avatar Pengguna</h3>
                            <span class="text-muted fs-7">Alur pengunggahan gambar profil, enkapsulasi URL, dan fallback avatar otomatis.</span>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Alur Pemrograman Avatar</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong>Route & Controller:</strong> Form diubah via <code>POST /profil-pengguna/avatar</code> yang ditangani oleh <code>ProfilPenggunaController@updateAvatar</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Validasi File:</strong> File gambar diverifikasi dengan aturan <code>image|mimes:jpeg,png,jpg,gif,svg|max:2048</code> (maksimal 2MB).
                                </div>
                                <div class="schema-step">
                                    <strong>Penyimpanan:</strong> File fisik disimpan pada direktori <code>public/uploads/avatars/</code> dengan penamaan nama file unik berdasarkan timestamp dan ID user.
                                </div>
                                <div class="schema-step">
                                    <strong>Model Accessor:</strong> URL avatar diambil melalui accessor <code>$user->avatar_url</code> yang didukung oleh helper <code>getUserAvatarUrl($user)</code>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-screen fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operasional & Tampilan UI Avatar</h4>
                            <ul class="schema-list">
                                <li><strong>Halaman Profil:</strong> Pengguna dapat mengunggah atau mengganti foto avatar secara mandiri pada rute <code>/profil-pengguna</code>.</li>
                                <li><strong>TopBar & Dropdown Avatar:</strong> Foto profil dirender secara otomatis pada header kanan atas dan menu akun user.</li>
                                <li><strong>Tabel Data Login:</strong> Avatar user ditampilkan dalam bentuk simbol lingkaran (symbol circle) pada kolom <em>User / Pengguna</em> di rute <code>/appsupport/data-login</code>.</li>
                                <li><strong>Fallback SVG Initial:</strong> Jika pengguna belum mengunggah foto avatar, sistem secara otomatis menggenerate avatar initial huruf depan nama user (misal: "A" untuk Admin).</li>
                            </ul>
                            <div class="schema-note mt-4">
                                Avatar terintegrasi secara terpusat melalui accessor <code>$user->avatar_url</code> sehingga perubahan foto profil langsung terefleksi secara real-time di seluruh komponen layout.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. ALUR FITUR REWARD POIN USER -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-6">
                        <div class="border-start border-4 border-success ps-4 my-2">
                            <h3 class="fw-bold text-gray-900 mb-1">2. Penambahan & Akumulasi Poin Keaktifan User</h3>
                            <span class="text-muted fs-7">Arsitektur reward 1 poin harian, event listener login, dan rekonsiliasi histori.</span>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-database fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Alur Pemrograman Poin & Logika Harian</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong>Event & Listener:</strong> Setiap kali proses login berhasil, Laravel memicu event <code>Illuminate\Auth\Events\Login</code> yang ditangkap oleh listener <code>App\Listeners\LogUserLogin</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Pemeriksaan Hari (Calendar Date):</strong> Listener mengeksekusi pencarian <code>DataLogin::where('user_id', $user->id)->whereDate('login_at', $today)</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Login Pertama (Dapat Poin):</strong> Jika belum ada catatan di hari tersebut, sistem mengeksekusi <code>$user->increment('points')</code> (+1 Poin) dan membuat catatan <code>DataLogin</code> baru dengan <code>point_awarded = true</code> & <code>login_count = 1</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Login Berulang di Hari yang Sama:</strong> Jika user login kembali pada hari yang sama (akibat idle logout/manual), <code>login_at</code> pertama tetap dipertahankan dan <code>login_count</code> di-increment (+1) tanpa menggandakan saldo poin.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-chart-line fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Efektivitas Arsitektur 2 Field Poin</h4>
                            <p class="fs-7 text-gray-700">
                                Sistem menggabungkan <strong>Cached Aggregate Pattern</strong> untuk mengoptimalkan kinerja query dan integritas data:
                            </p>
                            <ul class="schema-list">
                                <li><strong><code>users.points</code> (Saldo Real-time):</strong> Menyimpan total akumulasi saldo poin user. Memungkinkan pembacaan cepat <code>O(1)</code> tanpa melakukan kalkulasi agregat <code>SUM()</code> yang berat saat memuat halaman profil/dashboard.</li>
                                <li><strong><code>data_logins.point_awarded</code> (Audit Log):</strong> Menjadi bukti fisik transaksi per-hari untuk kebutuhan pencatatan histori dan rekonsiliasi data.</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">Poin Harian: +1 Poin / Hari Kalender</span>
                                <span class="schema-chip">Frekuensi: Terkalkulasi di Jumlah Login</span>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12 mt-4">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Tampilan Operasional Poin pada Aplikasi</h4>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed">
                                        <h5 class="fw-bold text-primary">A. Halaman Profil Pengguna (/profil-pengguna)</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            Menampilkan widget stat card <strong>Pencapaian Poin</strong> yang terhubung dengan <code>$authUser->points</code> (dilengkapi ikon award/trophy emas).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-success border border-success border-dashed">
                                        <h5 class="fw-bold text-success">B. Tabel Data Login (/appsupport/data-login)</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            Menampilkan kolom <strong>Jumlah Login</strong> (kalkulasi login berpoin + tanpa poin per hari) dan kolom <strong>Jumlah Poin</strong> (total akumulasi poin yang diraih user).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ALUR MASA IDLE LOGOUT OTOMATIS -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-6">
                        <div class="border-start border-4 border-danger ps-4 my-2">
                            <h3 class="fw-bold text-gray-900 mb-1">3. Masa Idle Logout Otomatis & Keamanan Sesi</h3>
                            <span class="text-muted fs-7">Sistem pemantau inaktivitas 15 menit, penanganan pengalihan rute, dan indikator user aktif real-time.</span>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-timer fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> Alur Pemrograman Idle Timeout (15 Menit)</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong>Client-Side Listener:</strong> Partial <code>resources/views/partials/_idle-timer.blade.php</code> dipasang secara global pada layout. Listener memantau interaksi user (<code>mousemove</code>, <code>keydown</code>, <code>scroll</code>, <code>click</code>).
                                </div>
                                <div class="schema-step">
                                    <strong>Batas Waktu (15 Mins):</strong> Pemantau menyetel timer inaktivitas selama <strong>15 menit (900.000 ms)</strong>. Setiap ada aktivitas user, timer di-reset kembali dari awal.
                                </div>
                                <div class="schema-step">
                                    <strong>Eksekusi Auto-Logout:</strong> Jika timer 15 menit habis tanpa aktivitas, skrip otomatis mengirimkan request <code>POST /logout</code> dengan parameter hidden <code>reason=idle</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Redirection & Alert:</strong> <code>AuthenticatedSessionController@destroy</code> menangkap parameter <code>reason=idle</code>, menghapus sesi, lalu melakukan <code>redirect()->route('login')->with('status', '...')</code>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-security-user fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Tampilan & Operasional Keamanan Sesi</h4>
                            <ul class="schema-list">
                                <li><strong>Banner Peringatan Halaman Login:</strong> Saat dialihkan akibat idle timeout, halaman <code>/login</code> menampilkan banner peringatan <code>alert-warning</code> berwarna kuning yang menginfokan sesi telah habis akibat inaktivitas 15 menit.</li>
                                <li><strong>Sign Out Menu Avatar:</strong> Mengklik tombol <em>Sign Out</em> pada dropdown avatar user di kanan pojok atas secara konsisten akan langsung mengarahkan pengguna kembali ke halaman login.</li>
                                <li><strong>Tracking User Aktif Real-Time:</strong> Middleware <code>UpdateUserLastActivity</code> memperbarui timestamp <code>last_activity_at</code> user saat beraktivitas untuk menghitung data widget <strong>User Aktif (15 Mins)</strong> secara akurat.</li>
                            </ul>
                            <div class="schema-warn mt-4">
                                Fitur idle auto-logout 15 menit melindungi akun dari akses pihak yang tidak berwenang ketika komputer/gadget ditinggalkan oleh pengguna.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. ALUR FITUR IMPOR MASSAL EXCEL -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-6">
                        <div class="border-start border-4 border-info ps-4 my-2">
                            <h3 class="fw-bold text-gray-900 mb-1">4. Impor Massal Pengguna via Excel & Master Format (.xlsx)</h3>
                            <span class="text-muted fs-7">Sistem ekstraksi berkas spreadsheet PhpSpreadsheet, penjanaan template master, validasi duplikat, dan penugasan role otomatis.</span>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-file-down fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Master Template Excel (.xlsx)</h4>
                            <ul class="schema-list">
                                <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/template</code> (<code>UserController@downloadTemplate</code>).</li>
                                <li><strong>Styling & Header:</strong> Menggunakan <code>PhpOffice\PhpSpreadsheet</code> dengan desain header tebal <code>#1E1E2D</code>.</li>
                                <li><strong>Struktur Kolom:</strong> <code>No</code>, <code>Nama Lengkap *</code>, <code>Email *</code>, <code>Password *</code>, <code>Role (opsional)</code>.</li>
                                <li><strong>Panduan Sampel:</strong> Dilengkapi 3 baris sampel otomatis & auto-fit lebar kolom.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-file-up fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Import Engine & Validasi Massal</h4>
                            <ul class="schema-list">
                                <li><strong>Endpoint:</strong> <code>POST /manajemenpengguna/users/import</code> (<code>UserController@import</code>).</li>
                                <li><strong>Format & Ukuran:</strong> Mendukung berkas <code>.xlsx</code>, <code>.xls</code>, <code>.csv</code> (maksimal 5MB).</li>
                                <li><strong>Pengecekan Duplikat:</strong> Memeriksa alamat email di database <code>users</code>. Jika sudah terdaftar, baris tersebut dilewati secara aman.</li>
                                <li><strong>Auto Role Sync:</strong> Membaca kolom role dan menugaskan role ke user baru secara otomatis.</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. ALUR MODE SWITCH USER (IMPERSONASI AKUN) -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-6">
                        <div class="border-start border-4 border-warning ps-4 my-2">
                            <h3 class="fw-bold text-gray-900 mb-1">5. Mode Switch User (Impersonasi Akun Tanpa Password)</h3>
                            <span class="text-muted fs-7">Fitur pengalihan akun tanpa login kata sandi, penyimpanan ID admin di sesi, dan pemulihan akun asli via dropdown avatar.</span>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Alur Beralih Akun (Impersonate)</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong>Interaksi:</strong> Klik langsung nama user atau icon Switch (<i class="ki-duotone ki-switch"></i>) pada tabel <code>users.blade.php</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Endpoint & Sesi:</strong> <code>POST /manajemenpengguna/users/{id}/impersonate</code> menyimpan ID admin ke <code>session(['impersonator_id' => Auth::id()])</code> dan mengeksekusi <code>Auth::login($targetUser)</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Proteksi Listener:</strong> <code>LogUserLogin</code> mendeteksi <code>impersonator_id</code> di sesi sehingga <strong>TIDAK menambah reward poin login (+1 Poin) dan TIDAK menambah riwayat login (login_count)</strong>.
                                </div>
                                <div class="schema-step">
                                    <strong>Pembersihan Intended URL:</strong> Membuang <code>url.intended</code> dari sesi agar peramban langsung berpindah ke Dashboard (<code>/homepage</code>).
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-exit-right fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> Pemulihan Akun Asli (Leave Impersonate)</h4>
                            <ul class="schema-list">
                                <li><strong>Dropdown Avatar User:</strong> Menu khusus berwarna merah <code>Kembali ke Akun Asli ([Nama Admin])</code> pada <code>_user-account-menu.blade.php</code> di kanan pojok atas.</li>
                                <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/leave-impersonate</code> (<code>UserController@leaveImpersonate</code>).</li>
                                <li><strong>Proses:</strong> Mengembalikan autentikasi ke ID admin asli, memulihkan sesi, dan membawa kembali ke halaman daftar user dengan notifikasi sukses.</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. ALUR ZONA WAKTU LOKAL (WIB / ASIA/JAKARTA) -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-6">
                        <div class="border-start border-4 border-primary ps-4 my-2">
                            <h3 class="fw-bold text-gray-900 mb-1">6. Penyesuaian Zona Waktu Lokal (WIB / Asia/Jakarta, UTC+7)</h3>
                            <span class="text-muted fs-7">Konfigurasi zona waktu aplikasi agar seluruh perekaman timestamp database mengikuti waktu perangkat lokal.</span>
                        </div>
                    </div>

                    <div class="schema-col-12 mt-1">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-time fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Konfigurasi App Timezone</h4>
                            <p class="fs-7 text-gray-700">
                                Konfigurasi pada <code>config/app.php</code> diubah dari <code>UTC</code> menjadi <code>'timezone' => env('APP_TIMEZONE', 'Asia/Jakarta')</code> dan ditambahkan variabel <code>APP_TIMEZONE=Asia/Jakarta</code> pada file <code>.env</code>.
                                Hal ini menjamin seluruh kolom timestamp database (<code>created_at</code>, <code>updated_at</code>, <code>login_at</code>, <code>last_activity_at</code>) tersimpan dan disajikan mengikuti zona waktu lokal (WIB, UTC+7).
                            </p>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. ALUR PERMINTAAN RESET PASSWORD ADMIN -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-6">
                        <div class="border-start border-4 border-danger ps-4 my-2">
                            <h3 class="fw-bold text-gray-900 mb-1">7. Permintaan Reset Password (Lupa Password via Admin)</h3>
                            <span class="text-muted fs-7">Sistem permintaan reset password dari website publik, pemicu notifikasi lonceng counter badge, dan eksekusi reset kata sandi default oleh Admin.</span>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-key fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> Alur Permintaan Publik & Sesi Notifikasi</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong>Form Publik:</strong> Pengguna menginput email terdaftar pada <code>/forgot-password</code>.
                                </div>
                                <div class="schema-step">
                                    <strong>Perekaman Database:</strong> <code>PasswordResetLinkController@store</code> membuat data <code>PasswordResetRequest</code> baru (<code>status = pending</code>, <code>is_read = false</code>).
                                </div>
                                <div class="schema-step">
                                    <strong>Peringatan Lonceng Header:</strong> Lonceng notifikasi header (<code>notifications.blade.php</code>) secara otomatis menampilkan <strong>badge angka merah (misal: 1)</strong> dan efek pulse blink.
                                </div>
                                <div class="schema-step">
                                    <strong>Peringatan Drawer:</strong> Item permintaan dirender pada tab <strong>Peringatan</strong> di <code>_notifications-menu.blade.php</code>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Penanganan Admin & Reset Password Default</h4>
                            <ul class="schema-list">
                                <li><strong>Halaman Kelola:</strong> Akses menu <code>Manajemen Pengguna > Reset Password</code> (rute <code>manajemenpengguna/reset-password</code>).</li>
                                <li><strong>Auto Clear Notifikasi:</strong> Mengklik item notifikasi mengeksekusi <code>markAsRead()</code> sehingga <strong>badge counter angka dan item notifikasi langsung hilang</strong>.</li>
                                <li><strong>Default Password:</strong> Modal reset secara otomatis terisi (<em>pre-filled</em>) kata sandi default <code>Password!12345</code> (dapat disesuaikan jika perlu).</li>
                                <li><strong>Opsi Tolak:</strong> Admin memiliki wewenang menolak permintaan reset password jika terindikasi spam/salah akun.</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- RINGKASAN REKAPITULASI PEMROGRAMAN -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Ringkasan Berkas & Komponen Terkait</h4>
                            <div class="table-responsive mt-3">
                                <table class="table table-row-dashed align-middle gy-3 fs-7">
                                    <thead>
                                        <tr class="fw-bold text-gray-700 bg-light">
                                            <th>Komponen Fitur</th>
                                            <th>File Berkas Utama</th>
                                            <th>Fungsi / Peran Pemrograman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Pengelolaan Avatar</strong></td>
                                            <td><code>ProfilPenggunaController.php</code><br><code>User.php</code> (getAvatarUrlAttribute)</td>
                                            <td>Menangani upload file avatar, validasi image, penyimpanan ke <code>public/uploads/avatars</code>, serta fungsi fallback SVG.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sistem Reward Poin</strong></td>
                                            <td><code>LogUserLogin.php</code><br><code>DataLogin.php</code></td>
                                            <td>Mendengar event login, memvalidasi perolehan 1 poin per-hari kalender, meng-increment <code>login_count</code> per hari, dan memperbarui saldo <code>user.points</code>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Idle Logout 15 Mins</strong></td>
                                            <td><code>_idle-timer.blade.php</code><br><code>UpdateUserLastActivity.php</code><br><code>AuthenticatedSessionController.php</code></td>
                                            <td>Skrip timer inaktivitas 15 menit, middleware update timestamp `last_activity_at`, dan pengalihan logout otomatis berpesan peringatan.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Upload Massal Excel</strong></td>
                                            <td><code>UserController.php</code> (import & downloadTemplate)<br><code>user-import-modal.blade.php</code></td>
                                            <td>Penjanaan master template (.xlsx) via PhpSpreadsheet, impor massal baris pengguna, validasi email duplikat, dan auto role sync.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Switch User (Impersonasi)</strong></td>
                                            <td><code>UserController.php</code> (impersonate & leaveImpersonate)<br><code>_user-account-menu.blade.php</code><br><code>LogUserLogin.php</code></td>
                                            <td>Masuk ke akun lain tanpa password via ID di sesi (<code>impersonator_id</code>), bypass listener reward poin/login count, dan pemulihan akun asli via dropdown avatar.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Reset Password Admin</strong></td>
                                            <td><code>PasswordResetLinkController.php</code><br><code>PasswordResetRequestController.php</code><br><code>PasswordResetRequest.php</code><br><code>reset-password.blade.php</code></td>
                                            <td>Alur permintaan reset password dari website publik ke admin, notifikasi badge counter & tab Peringatan, serta reset ke password default <code>Password!12345</code>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Zona Waktu Lokal (WIB)</strong></td>
                                            <td><code>config/app.php</code><br><code>.env</code> (APP_TIMEZONE=Asia/Jakarta)</td>
                                            <td>Perekaman timestamp database (created_at, updated_at, login_at, last_activity_at) 100% tersimpan dan disajikan mengikuti zona waktu lokal (Asia/Jakarta, UTC+7).</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
