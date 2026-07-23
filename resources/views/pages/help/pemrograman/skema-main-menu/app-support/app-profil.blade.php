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
                    <span class="schema-pill">Skema Main Menu > App Support > App Profil</span>
                    <h2 class="fw-bold">Skema Menu App Profil (Single Application Identity & Branding)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur, skema database, penanganan unggah file branding (Logo Utama, Logo Small, Favicon Browser), Form Request Validation, dan penyediaan helper global identitas aplikasi.
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
                            <pre class="schema-code"><code>// Migration: app_profils
$table->id();
$table->string('app_name');        // Nama Aplikasi
$table->string('app_short_name');  // Singkatan Nama
$table->string('company_name');    // Nama Perusahaan/Instansi
$table->string('logo')->nullable();       // Path Logo Horizontal
$table->string('logo_small')->nullable(); // Path Logo Kotak
$table->string('favicon')->nullable();    // Path Favicon Browser
$table->boolean('active')->default(1);
$table->timestamps();

// Model: App\Models\AppSupport\AppProfil
protected $fillable = [
    'app_name', 'app_short_name', 'company_name',
    'logo', 'logo_small', 'favicon', 'active'
];

public function scopeActive($query) {
    return $query->where('active', 1);
}</code></pre>
                            <div class="schema-note mt-3">
                                Model menggunakan pattern Single Active State (`active = 1`). Setiap kali profil baru disimpan/diperbarui, profil lainnya secara otomatis di-reset menjadi inactive (`active = 0`).
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLER & FORM REQUEST VALIDATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Controller & Form Request Mirroring</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong><code>GET /appsupport/app-profil</code></strong><br>
                                    <code>AppProfilController@index</code> -> Menampilkan form pengeditan profil aplikasi aktif dan mengembalikan response JSON jika diakses via AJAX.
                                </div>
                                <div class="schema-step">
                                    <strong>Form Request Class:</strong> <code>App\Http\Requests\AppSupport\AppProfilRequest</code><br>
                                    Memvalidasi file branding: <code>logo</code>, <code>logo_small</code>, <code>favicon</code> bertipe gambar dengan batas ukuran maksimal 2MB.
                                </div>
                                <div class="schema-step">
                                    <strong>File Replacement:</strong> Saat logo baru diunggah pada <code>update()</code>, file lama pada storage fisik <code>storage/app/public/app-profil/</code> akan dihapus secara otomatis.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ACCESSOR & HELPER IDENTITAS GLOBAL -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-element-11 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Accessor Logo & Integrasi Branding Layout Global</h4>
                            <p class="fs-7 text-gray-700">
                                Model <code>AppProfil</code> menyediakan URL accessor terenkapsulasi untuk mempermudah pemanggilan di layout sidebar, header, dan browser favicon:
                            </p>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">1. <code>$appProfil->logo_url</code></h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            Mengembalikan URL lengkap logo utama horizontal untuk header/sidebar versi expanded (dengan fallback logo default).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">2. <code>$appProfil->logo_small_url</code></h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            Mengembalikan URL logo versi mini/kotak saat sidebar dalam kondisi terlipat (collapsed mode).
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded">
                                        <h5 class="fw-bold fs-6 text-gray-800">3. <code>$appProfil->favicon_url</code></h5>
                                        <p class="fs-7 text-gray-600 mb-0">
                                            Mengembalikan URL shortcut icon yang dipasang pada tag <code>&lt;link rel="shortcut icon"&gt;</code> HTML header.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
