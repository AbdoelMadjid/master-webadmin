@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ARCHITECTURE & DATA STRUCTURE -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-database fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & Database Model</h4>
            <pre class="schema-code"><code>// Migration: app_profils
$table->id();
$table->string('app_name');        // App Name
$table->string('app_short_name');  // Short Name
$table->string('company_name');    // Company / Organization Name
$table->string('logo')->nullable();       // Horizontal Logo Path
$table->string('logo_small')->nullable(); // Square Logo Path
$table->string('favicon')->nullable();    // Browser Favicon Path
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
                The model uses a Single Active State pattern (`active = 1`). Whenever a new profile is saved/updated, other profiles are automatically reset to inactive (`active = 0`).
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
                    <code>AppProfilController@index</code> -> Displays active application profile edit form and returns JSON response if accessed via AJAX.
                </div>
                <div class="schema-step">
                    <strong>Form Request Class:</strong> <code>App\Http\Requests\AppSupport\AppProfilRequest</code><br>
                    Validates branding files: <code>logo</code>, <code>logo_small</code>, <code>favicon</code> as image types with a 2MB maximum size limit.
                </div>
                <div class="schema-step">
                    <strong>File Replacement:</strong> When a new logo is uploaded in <code>update()</code>, old physical files in <code>storage/app/public/app-profil/</code> are automatically deleted.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. GLOBAL ACCESSOR & HELPER BRANDING -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-info">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Logo Accessors & Global Layout Branding Integration</h4>
            <p class="fs-7 text-gray-700">
                The <code>AppProfil</code> model provides encapsulated URL accessors to simplify usage across sidebar, header, and browser favicon layouts:
            </p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">1. <code>$appProfil->logo_url</code></h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Returns full URL of the main horizontal logo for expanded header/sidebar (with default logo fallback).
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">2. <code>$appProfil->logo_small_url</code></h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Returns URL of mini/square logo when sidebar is in collapsed mode.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">3. <code>$appProfil->favicon_url</code></h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Returns URL of shortcut icon mounted in HTML header <code>&lt;link rel="shortcut icon"&gt;</code> tag.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@else
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
@endif
