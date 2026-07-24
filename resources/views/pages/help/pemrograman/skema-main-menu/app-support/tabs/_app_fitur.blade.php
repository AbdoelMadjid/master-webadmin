@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ARCHITECTURE & DATA STRUCTURE -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-database fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & Database Model</h4>
            <pre class="schema-code"><code>// Migration: app_fiturs
$table->id();
$table->string('name');         // Feature Name (e.g., "E-Commerce Module")
$table->string('code')->unique(); // Slug Code (e.g., "modul_ecommerce")
$table->text('description')->nullable();
$table->boolean('is_active')->default(true);
$table->timestamps();

// Model: App\Models\AppSupport\AppFitur
use HasFactory;
protected $fillable = ['name', 'code', 'description', 'is_active'];
protected $casts = ['is_active' => 'boolean'];

public function scopeActive($query) {
    return $query->where('is_active', true);
}</code></pre>
            <div class="schema-note mt-3">
                The <code>code</code> field is unique and acts as the primary reference key when invoking helper functions across the codebase.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. CONTROLLER & ENDPOINT FLOW -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Routes & Controller Management</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong><code>GET /appsupport/app-fiturs</code></strong><br>
                    <code>AppFiturController@index</code> -> Displays list of all features along with switch status (active/inactive).
                </div>
                <div class="schema-step">
                    <strong><code>POST /appsupport/app-fiturs/{id}/toggle-status</code></strong><br>
                    <code>AppFiturController@toggleStatus</code> -> Toggles single switch <code>is_active</code> status via DataTables AJAX.
                </div>
                <div class="schema-step">
                    <strong><code>POST /appsupport/app-fiturs/bulk-toggle</code></strong><br>
                    <code>AppFiturController@bulkToggle</code> -> Performs mass status update (bulk toggle) for multiple features simultaneously.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. GLOBAL HELPER & CODEBASE USAGE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-warning">
            <h4><i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Global Helper Usage <code>isFeatureActive()</code></h4>
            <p class="fs-7 text-gray-700">
                To check feature active status in Controllers, Blade Views, or Middleware before rendering UI / executing logic:
            </p>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">A. Example in Blade View</h5>
                        <pre class="schema-code mt-2"><code>@if(function_exists('isFeatureActive') && isFeatureActive('modul_backup'))
    &lt;a href="{{ route('appsupport.backup-db') }}" class="btn btn-primary"&gt;
        DB Backup Feature Active
    &lt;/a&gt;
@endif</code></pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">B. Example in Controller / Middleware</h5>
                        <pre class="schema-code mt-2"><code>if (!isFeatureActive('modul_ecommerce')) {
    abort(403, 'This feature is currently disabled by Administrator.');
}

// Continue logic if feature is active...</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. SUMMARY & BEST PRACTICES -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Advantages & Best Practices of Feature Toggles</h4>
            <ul class="schema-list">
                <li><strong>Zero Downtime Toggle:</strong> Enabling or disabling modules can be performed instantly by Admins without triggering code re-deployments.</li>
                <li><strong>Graceful Degradation:</strong> If a module is undergoing maintenance, it can be temporarily deactivated via the App Features panel (`/appsupport/app-fiturs`).</li>
                <li><strong>Centralized Security:</strong> All feature toggle permissions are guarded under <code>auth</code> middleware and admin privileges.</li>
            </ul>
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
            <pre class="schema-code"><code>// Migration: app_fiturs
$table->id();
$table->string('name');         // Nama Fitur (mis: "Modul E-Commerce")
$table->string('code')->unique(); // Kode Slug (mis: "modul_ecommerce")
$table->text('description')->nullable();
$table->boolean('is_active')->default(true);
$table->timestamps();

// Model: App\Models\AppSupport\AppFitur
use HasFactory;
protected $fillable = ['name', 'code', 'description', 'is_active'];
protected $casts = ['is_active' => 'boolean'];

public function scopeActive($query) {
    return $query->where('is_active', true);
}</code></pre>
            <div class="schema-note mt-3">
                Field <code>code</code> bersifat unik dan menjadi kunci referensi utama dalam pemanggilan fungsi helper di seluruh aplikasi.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. CONTROLLER & ALUR ENDPOINT -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Rute & Controller Management</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong><code>GET /appsupport/app-fiturs</code></strong><br>
                    <code>AppFiturController@index</code> -> Menampilkan daftar seluruh fitur beserta status sakelar (aktif/nonaktif).
                </div>
                <div class="schema-step">
                    <strong><code>POST /appsupport/app-fiturs/{id}/toggle-status</code></strong><br>
                    <code>AppFiturController@toggleStatus</code> -> Mengubah status <code>is_active</code> sakelar single via AJAX DataTables.
                </div>
                <div class="schema-step">
                    <strong><code>POST /appsupport/app-fiturs/bulk-toggle</code></strong><br>
                    <code>AppFiturController@bulkToggle</code> -> Melakukan pengubahan status masal (bulk toggle) untuk beberapa fitur sekaligus.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. HELPER GLOBAL & PENGGUNAAN PADA CODEBASE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-warning">
            <h4><i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Penggunaan Helper Global <code>isFeatureActive()</code></h4>
            <p class="fs-7 text-gray-700">
                Untuk mengecek status keaktifan fitur pada Controller, Blade View, atau Middleware sebelum merender UI / mengeksekusi logika:
            </p>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">A. Contoh di Blade View</h5>
                        <pre class="schema-code mt-2"><code>@if(function_exists('isFeatureActive') && isFeatureActive('modul_backup'))
    &lt;a href="{{ route('appsupport.backup-db') }}" class="btn btn-primary"&gt;
        Fitur Backup DB Aktif
    &lt;/a&gt;
@endif</code></pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">B. Contoh di Controller / Middleware</h5>
                        <pre class="schema-code mt-2"><code>if (!isFeatureActive('modul_ecommerce')) {
    abort(403, 'Fitur ini sedang dinonaktifkan oleh Administrator.');
}

// Lanjutkan logika jika fitur aktif...</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. SUMMARY & BEST PRACTICES -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Keuntungan & Best Practices Sistem Feature Toggle</h4>
            <ul class="schema-list">
                <li><strong>Zero Downtime Toggle:</strong> Pengaktifan atau penonaktifan modul dapat dilakukan secara instan oleh Admin tanpa perlu meluncurkan deployment ulang (re-deploy).</li>
                <li><strong>Graceful Degradation:</strong> Jika suatu modul mengalami pemeliharaan, fitur tersebut dapat dideaktifkan sementara melalui panel App Fitur (`/appsupport/app-fiturs`).</li>
                <li><strong>Keamanan Terpusat:</strong> Seluruh perizinan sakelar fitur berada di bawah proteksi middleware <code>auth</code> dan hak akses admin.</li>
            </ul>
        </div>
    </div>
</div>
@endif
