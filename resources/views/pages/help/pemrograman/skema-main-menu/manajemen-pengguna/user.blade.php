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
            Skema Main Menu > Manajemen Pengguna
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero">
                    <span class="schema-pill">Skema Main Menu > Manajemen Pengguna > User</span>
                    <h2 class="fw-bold">Skema User Management (User CRUD, Avatar, Reward Poin & Security)</h2>
                    <p class="schema-lead">
                        Penjelasan komprehensif arsitektur akun pengguna (Users CRUD), penanganan upload Avatar Profil, Sistem Reward Poin Harian, serta Keamanan Masa Idle Logout Otomatis 15 Menit.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. MODEL & ACCESSOR -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> User Model & Avatar Accessor</h4>
                            <pre class="schema-code"><code>// Model: App\Models\User
public function getAvatarUrlAttribute()
{
    return normalizeAvatarUrl($this->avatar);
}

// Helper: Smart::normalizeAvatarUrl()
// Memeriksa direktori storage/ dan uploads/ secara cerdas, 
// serta menyediakan fallback SVG initial jika avatar kosong.</code></pre>
                            <div class="schema-note mt-3">
                                Accessor <code>$user->avatar_url</code> menjamin rendering avatar foto profil yang konsisten dan proporsional di seluruh DataTables dan UI aplikasi.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLER & FORM REQUEST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Controller & Validation (<code>UserController</code>)</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong>Form Validation:</strong> Diolah secara terpisah melalui <code>App\Http\Requests\ManajemenPengguna\UserRequest</code>.
                                </div>
                                <div class="schema-step">
                                    <strong><code>POST /manajemenpengguna/users</code></strong><br>
                                    <code>UserController@store</code> -> Mengenkripsi password via <code>Hash::make()</code>, mengunggah avatar, dan menugaskan role via <code>$user->assignRole()</code>.
                                </div>
                                <div class="schema-step">
                                    <strong><code>PUT /manajemenpengguna/users/{id}</code></strong><br>
                                    <code>UserController@update</code> -> Memperbarui data pengguna; password hanya di-update jika diisi (opsional).
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. KOTAK BAWAH 1: PENGELOLAAN AVATAR PENGGUNA -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4><i class="ki-duotone ki-picture fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> 1. Pengelolaan Avatar Profil Pengguna</h4>
                            <p class="fs-7 text-gray-700">
                                Alur pengungahan gambar profil, enkapsulasi URL, dan fallback avatar otomatis di seluruh tampilan aplikasi:
                            </p>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed">
                                        <h5 class="fw-bold text-primary">Alur Pemrograman Avatar</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Form diunggah via <code>POST /profil-pengguna/avatar</code> (ditangani <code>ProfilPenggunaController@updateAvatar</code>) atau saat registrasi/edit di <code>UserController</code>.</li>
                                            <li>File diverifikasi dengan aturan <code>image|mimes:jpeg,png,jpg,gif,svg|max:2048</code> (maksimal 2MB).</li>
                                            <li>Penyimpanan di <code>public/uploads/avatars/</code> dengan penamaan unik timestamp + ID user.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-info border border-info border-dashed">
                                        <h5 class="fw-bold text-info">Visualisasi & Dimensions</h5>
                                        <ul class="schema-list fs-7 mb-0">
                                            <li>Dimensi rendering terstandarisasi <code>40x40px</code> dengan <code>object-fit: cover</code>.</li>
                                            <li>Jika avatar belum diunggah, helper <code>normalizeAvatarUrl()</code> menghasilkan SVG initial huruf depan nama user secara otomatis.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. KOTAK BAWAH 2: REWARD POIN KEAKTIFAN USER -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-success">
                            <h4><i class="ki-duotone ki-award fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> 2. Sistem Reward Poin Keaktifan User (1 Poin Harian)</h4>
                            <p class="fs-7 text-gray-700">
                                Arsitektur reward 1 poin per-hari kalender, event listener login, dan rekonsiliasi data:
                            </p>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="schema-flow">
                                        <div class="schema-step">
                                            <strong>Event & Listener:</strong> Setiap login berhasil memicu event <code>Illuminate\Auth\Events\Login</code> yang ditangkap oleh listener <code>App\Listeners\LogUserLogin</code>.
                                        </div>
                                        <div class="schema-step">
                                            <strong>Pemeriksaan Hari Kalender:</strong> Listener mengeksekusi pencarian <code>DataLogin::where('user_id', $user->id)->whereDate('login_at', $today)</code>.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="schema-flow">
                                        <div class="schema-step">
                                            <strong>Login Pertama (Dapat Poin):</strong> Jika belum ada di hari tersebut, sistem mengeksekusi <code>$user->increment('points')</code> (+1 Poin) dan mencatat <code>DataLogin</code> baru.
                                        </div>
                                        <div class="schema-step">
                                            <strong>Login Berulang:</strong> Login berikutnya pada hari yang sama hanya menambah <code>login_count</code> tanpa menggandakan saldo poin.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. KOTAK BAWAH 3: MASA IDLE LOGOUT OTOMATIS 15 MENIT -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4><i class="ki-duotone ki-timer fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> 3. Masa Idle Logout Otomatis (15 Menit) & Keamanan Sesi</h4>
                            <p class="fs-7 text-gray-700">
                                Pemantau inaktivitas 15 menit, penanganan pengalihan rute, dan indikator user aktif real-time:
                            </p>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">Skrip Listener Inaktivitas</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            Partial <code>_idle-timer.blade.php</code> dipasang secara global pada layout untuk memantau interaksi (mousemove, keydown, scroll). Jika 15 menit tanpa aktivitas, otomatis mengirim <code>POST /logout</code> dengan parameter <code>reason=idle</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">Banner Peringatan Halaman Login</h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            Saat dialihkan akibat idle timeout, halaman <code>/login</code> menampilkan banner peringatan <code>alert-warning</code> berwarna kuning yang menginfokan bahwa sesi pengguna telah berakhir akibat inaktivitas 15 menit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. KOTAK BAWAH 4: REKAPITULASI BERKAS UTAMA USER MANAGEMENT -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Rekapitulasi Berkas & Komponen User Management</h4>
                            <div class="table-responsive mt-3">
                                <table class="table table-row-dashed align-middle gy-3 fs-7 mb-0">
                                    <thead>
                                        <tr class="fw-bold text-gray-700 bg-light">
                                            <th>Fitur / Komponen</th>
                                            <th>File Utama</th>
                                            <th>Fungsi Pemrograman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Users CRUD</strong></td>
                                            <td><code>UserController.php</code><br><code>UserRequest.php</code><br><code>users.blade.php</code></td>
                                            <td>Pengelolaan akun pengguna, password hashing, penugasan role, dan notifikasi SwalHelper.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Pengelolaan Avatar</strong></td>
                                            <td><code>ProfilPenggunaController.php</code><br><code>User.php</code> (getAvatarUrlAttribute)</td>
                                            <td>Upload avatar, validasi file image, penataan dimensi 40x40px, dan fallback SVG initial.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Reward Poin Harian</strong></td>
                                            <td><code>LogUserLogin.php</code><br><code>DataLogin.php</code></td>
                                            <td>Event listener login, reward +1 poin per hari kalender, dan pencatatan riwayat login.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Idle Auto-Logout</strong></td>
                                            <td><code>_idle-timer.blade.php</code><br><code>UpdateUserLastActivity.php</code></td>
                                            <td>Timer 15 menit inaktivitas, update timestamp <code>last_activity_at</code>, dan logout otomatis.</td>
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
