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
            Skema Main Menu > App Support
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero">
                    <span class="schema-pill">Skema Main Menu > App Support > Data Login</span>
                    <h2 class="fw-bold">Skema Menu Data Login (Audit Activity & Login Frequency Tracking)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur pencatatan riwayat login pengguna, kalkulasi frekuensi login harian (`login_count`), akumulasi reward poin, serta indikator user aktif real-time (15 Menit).
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ARSITEKTUR & STRUKTUR DATA -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-database fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & Database Model</h4>
                            <pre class="schema-code"><code>// Migration: data_logins
$table->id();
$table->foreignId('user_id')->constrained()->onDelete('cascade');
$table->timestamp('login_at');
$table->string('ip_address', 45)->nullable();
$table->text('user_agent')->nullable();
$table->boolean('point_awarded')->default(false);
$table->integer('login_count')->default(1);
$table->timestamps();

// Model: App\Models\AppSupport\DataLogin
protected $fillable = [
    'user_id', 'login_at', 'ip_address',
    'user_agent', 'point_awarded', 'login_count'
];

public function user() {
    return $this->belongsTo(User::class);
}</code></pre>
                            <div class="schema-note mt-3">
                                <code>login_at</code> menyimpan timestamp pertama kali user login di hari tersebut, sedangkan <code>login_count</code> menghitung berapa kali user login pada tanggal kalender yang sama.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. LOGIKA EVENT LISTENER & STATISTIK -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-chart-line fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Logika Event Listener & Widget Statistik</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong>Event Listener:</strong> <code>App\Listeners\LogUserLogin</code><br>
                                    Memeriksa <code>whereDate('login_at', $today)</code>. Login pertama memberikan +1 Poin (`point_awarded = true`). Login berikutnya meng-increment <code>login_count</code> (+1) tanpa menggandakan poin.
                                </div>
                                <div class="schema-step">
                                    <strong>Widget User Aktif (15 Mins):</strong><br>
                                    Dihitung dari user yang memiliki <code>last_activity_at >= 15 menit lalu</code> (via middleware <code>UpdateUserLastActivity</code>).
                                </div>
                                <div class="schema-step">
                                    <strong>Filter Datatables Client-Side:</strong><br>
                                    Dua input filter (Pencarian Nama/Role & Filter Tanggal Default Hari Ini) dengan tombol Reset otomatis saat filter berubah.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. INFORMASI KOLOM TABEL DATA LOGIN -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-warning">
                            <h4><i class="ki-duotone ki-table fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Kolom Tabel Data Login pada Rute <code>/appsupport/data-login</code></h4>
                            <div class="table-responsive mt-3">
                                <table class="table table-row-dashed align-middle gy-3 fs-7">
                                    <thead>
                                        <tr class="fw-bold text-gray-700 bg-light">
                                            <th>Nama Kolom</th>
                                            <th>Sumber Data / Kalkulasi</th>
                                            <th>Keterangan Tampilan UI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>User / Pengguna</strong></td>
                                            <td><code>$item->user->name</code> & <code>avatar_url</code></td>
                                            <td>Menampilkan foto avatar user beserta role badge.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Waktu Login</strong></td>
                                            <td><code>$item->login_at</code></td>
                                            <td>Waktu login <em>pertama kali</em> di hari tersebut yang mendapatkan reward poin.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Jumlah Login</strong></td>
                                            <td><code>$item->login_count</code></td>
                                            <td>Total frekuensi login user pada tanggal tersebut (login berpoin + tanpa poin).</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Jumlah Poin</strong></td>
                                            <td><code>$item->user->points</code></td>
                                            <td>Total akumulasi saldo poin yang berhasil diraih user sejauh ini.</td>
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
