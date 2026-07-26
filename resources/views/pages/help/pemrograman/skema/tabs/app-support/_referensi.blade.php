@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. DATABASE SCHEMA & MODEL RELATIONSHIP -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-data fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Database Schema & Entity Structure</h4>
            <pre class="schema-code"><code>// Migration 1: referensi_kategori
$table->id();
$table->string('kode', 50)->unique(); // e.g., JENKEL, AGAMA
$table->string('nama', 100);
$table->text('deskripsi')->nullable();
$table->boolean('is_active')->default(true);
$table->boolean('is_system')->default(false); // Protected core flag
$table->timestamps();

// Migration 2: referensi_item
$table->id();
$table->foreignId('kategori_id')->constrained('referensi_kategori')->onDelete('cascade');
$table->string('kode', 50); // e.g., L, P, ISLAM
$table->string('nama', 100);
$table->integer('urutan')->default(0);
$table->text('keterangan')->nullable();
$table->boolean('is_active')->default(true);
$table->timestamps();</code></pre>
            <div class="schema-note mt-3">
                The <code>referensi_item</code> table references <code>referensi_kategori</code> via <code>kategori_id</code> foreign key with cascading deletion.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. CONTROLLER & ENDPOINTS FLOW -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Routes & Controller Endpoints</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong><code>GET /appsupport/referensi</code></strong><br>
                    <code>ReferensiController@index</code> -> Multi-tab main view (`kategori`, `item`, `preview`).
                </div>
                <div class="schema-step">
                    <strong><code>POST|PUT|DELETE /appsupport/referensi/kategori</code></strong><br>
                    <code>ReferensiController@storeKategori / updateKategori / destroyKategori</code> -> Category CRUD management.
                </div>
                <div class="schema-step">
                    <strong><code>POST|PUT|DELETE /appsupport/referensi/item</code></strong><br>
                    <code>ReferensiController@storeItem / updateItem / destroyItem</code> -> Item options CRUD management.
                </div>
                <div class="schema-step">
                    <strong><code>GET /appsupport/referensi/items-by-kategori/{id}</code></strong><br>
                    <code>ReferensiController@getItemsByKategori</code> -> JSON API endpoint for cascading form selectors.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. ELOQUENT RELATIONSHIPS & CODE USAGE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Eloquent Relationships & Query Usage</h4>
            <p class="fs-7 text-gray-700">
                To retrieve active reference items for a specific category in Controllers or Blade views:
            </p>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-element-11 fs-3 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>A. Query in Controller</h5>
                        <pre class="schema-code mt-2"><code>use App\Models\AppSupport\ReferensiKategori;

// Query active options for Religion category
$agamaCategory = ReferensiKategori::with('activeItems')
    ->where('kode', 'AGAMA')
    ->first();

$agamaItems = $agamaCategory ? $agamaCategory->activeItems : [];</code></pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-picture fs-3 text-info me-2"><span class="path1"></span><span class="path2"></span></i>B. Populate Select Dropdown in Blade</h5>
                        <pre class="schema-code mt-2"><code>&lt;select class="form-select" name="agama"&gt;
    &lt;option value=""&gt;-- Select Religion --&lt;/option&gt;
    &commat;foreach($agamaItems as $item)
        &lt;option value="&#123;&#123; $item->kode &#125;&#125;"&gt;&#123;&#123; $item->nama &#125;&#125;&lt;/option&gt;
    &commat;endforeach
&lt;/select&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. SYSTEM SAFEGUARDS -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> System Safeguards & Best Practices</h4>
            <ul class="schema-list">
                <li><strong>Protected System Categories:</strong> Core categories with <code>is_system = true</code> (e.g., <code>JENKEL</code>, <code>AGAMA</code>) are protected against accidental deletion.</li>
                <li><strong>Unique Code Constraint:</strong> Category codes and item codes within the same category are strictly unique.</li>
                <li><strong>Display Ordering:</strong> Options are ordered by <code>urutan</code> ASC, then <code>nama</code> ASC for consistent UI presentation.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. STRUKTUR DATABASE & MODEL RELATIONSHIP -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-data fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Skema Database & Entitas Referensi</h4>
            <pre class="schema-code"><code>// Migration 1: referensi_kategori
$table->id();
$table->string('kode', 50)->unique(); // contoh: JENKEL, AGAMA
$table->string('nama', 100);
$table->text('deskripsi')->nullable();
$table->boolean('is_active')->default(true);
$table->boolean('is_system')->default(false); // Flag proteksi sistem
$table->timestamps();

// Migration 2: referensi_item
$table->id();
$table->foreignId('kategori_id')->constrained('referensi_kategori')->onDelete('cascade');
$table->string('kode', 50); // contoh: L, P, ISLAM
$table->string('nama', 100);
$table->integer('urutan')->default(0);
$table->text('keterangan')->nullable();
$table->boolean('is_active')->default(true);
$table->timestamps();</code></pre>
            <div class="schema-note mt-3">
                Tabel <code>referensi_item</code> terhubung ke <code>referensi_kategori</code> via foreign key <code>kategori_id</code> dengan proteksi hapus bertingkat (cascade).
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. ALUR ROUTE & CONTROLLER ENDPOINTS -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Alur Route & Endpoint Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong><code>GET /appsupport/referensi</code></strong><br>
                    <code>ReferensiController@index</code> -> Halaman utama multi-tab (`kategori`, `item`, `preview`).
                </div>
                <div class="schema-step">
                    <strong><code>POST|PUT|DELETE /appsupport/referensi/kategori</code></strong><br>
                    <code>ReferensiController@storeKategori / updateKategori / destroyKategori</code> -> Kelola CRUD kategori referensi.
                </div>
                <div class="schema-step">
                    <strong><code>POST|PUT|DELETE /appsupport/referensi/item</code></strong><br>
                    <code>ReferensiController@storeItem / updateItem / destroyItem</code> -> Kelola CRUD item opsi referensi.
                </div>
                <div class="schema-step">
                    <strong><code>GET /appsupport/referensi/items-by-kategori/{id}</code></strong><br>
                    <code>ReferensiController@getItemsByKategori</code> -> API JSON endpoint untuk selector bertingkat.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. RELASI ELOQUENT & CARA PENGGUNAAN -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Relasi Eloquent & Contoh Pemanggilan</h4>
            <p class="fs-7 text-gray-700">
                Cara mengambil item opsi referensi aktif berdasarkan kode kategori di Controller atau Blade View:
            </p>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-element-11 fs-3 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>A. Query pada Controller</h5>
                        <pre class="schema-code mt-2"><code>use App\Models\AppSupport\ReferensiKategori;

// Ambil opsi aktif kategori Agama
$agamaCategory = ReferensiKategori::with('activeItems')
    ->where('kode', 'AGAMA')
    ->first();

$agamaItems = $agamaCategory ? $agamaCategory->activeItems : [];</code></pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800"><i class="ki-duotone ki-picture fs-3 text-info me-2"><span class="path1"></span><span class="path2"></span></i>B. Tampilkan pada Dropdown Select Blade</h5>
                        <pre class="schema-code mt-2"><code>&lt;select class="form-select" name="agama"&gt;
    &lt;option value=""&gt;-- Pilih Agama --&lt;/option&gt;
    &commat;foreach($agamaItems as $item)
        &lt;option value="&#123;&#123; $item->kode &#125;&#125;"&gt;&#123;&#123; $item->nama &#125;&#125;&lt;/option&gt;
    &commat;endforeach
&lt;/select&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. ATURAN PROTEKSI SISTEM -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Proteksi Sistem & Best Practices</h4>
            <ul class="schema-list">
                <li><strong>Proteksi Kategori Sistem:</strong> Kategori utama dengan <code>is_system = true</code> (seperti <code>JENKEL</code>, <code>AGAMA</code>) dilindungi dari penghapusan tidak sengaja.</li>
                <li><strong>Keunikan Kode:</strong> Kode kategori dan kode item dalam kategori yang sama bersifat unik.</li>
                <li><strong>Urutan Tampil:</strong> Pilihan opsi diurutkan berdasarkan <code>urutan</code> ASC, lalu <code>nama</code> ASC secara otomatis.</li>
            </ul>
        </div>
    </div>
</div>
@endif
