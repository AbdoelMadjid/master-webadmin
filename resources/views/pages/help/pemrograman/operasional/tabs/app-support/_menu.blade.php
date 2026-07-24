@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. DYNAMIC MENU MANAGEMENT WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Dynamic Menu Management (Sidebar Menu Management)</h3>
            <span class="text-muted fs-7">Operational guide and architecture for centralized sidebar menu structure management.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Architecture & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>MenuController</code> on route <code>appsupport/menu</code>.
                </div>
                <div class="schema-step">
                    <strong>Seeder Architecture:</strong> Base menu configuration is stored under <code>config/menu_seeder/</code>.
                </div>
                <div class="schema-step">
                    <strong>Drag & Drop Sorting:</strong> Interactive menu reordering via AJAX endpoint <code>POST appsupport/menu/sort</code>.
                </div>
                <div class="schema-step">
                    <strong>Status Toggle:</strong> Instantly enable/disable menu items via <code>POST appsupport/menu/{id}/toggle-status</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Core Menu Feature Operations</h4>
            <ul class="schema-list">
                <li><strong>Add & Edit Menu Item:</strong> Set menu title, Laravel route, Metronic icon class (ki-duotone), and parent menu.</li>
                <li><strong>Permission Assignment:</strong> Link Spatie permissions to specific menu items. Menus are automatically hidden for users without assigned permissions.</li>
                <li><strong>Active / Inactive Status:</strong> Temporarily disable menus under maintenance without deleting records from the database.</li>
                <li><strong>Live Sidebar Refresh:</strong> Structural or title changes instantly update the app sidebar without manual page reloads.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR PENGELOLAAN MENU DINAMIS (MENU MANAGEMENT) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Pengelolaan Menu Dinamis (Sidebar Menu Management)</h3>
            <span class="text-muted fs-7">Panduan operasional dan arsitektur pengolahan struktur menu sidebar secara terpusat.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>MenuController</code> pada rute <code>appsupport/menu</code>.
                </div>
                <div class="schema-step">
                    <strong>Seeder Architecture:</strong> Konfigurasi dasar menu disimpan pada <code>config/menu_seeder/</code>.
                </div>
                <div class="schema-step">
                    <strong>Drag & Drop Sorting:</strong> Pengurutan menu secara interaktif via AJAX endpoint <code>POST appsupport/menu/sort</code>.
                </div>
                <div class="schema-step">
                    <strong>Toggle Status:</strong> Mengaktifkan/menonaktifkan menu secara instan via <code>POST appsupport/menu/{id}/toggle-status</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Operasional Fitur Utama Menu</h4>
            <ul class="schema-list">
                <li><strong>Tambah & Edit Item Menu:</strong> Pengisian judul menu, rute Laravel, nama ikon Metronic (ki-duotone), dan parent menu.</li>
                <li><strong>Penugasan Hak Akses (Permission):</strong> Menautkan permission Spatie pada menu tertentu. Menu otomatis tersembunyi bagi pengguna yang tidak memiliki hak akses.</li>
                <li><strong>Status Aktif / Inaktif:</strong> Mematikan sementara menu yang sedang dalam pemeliharaan tanpa menghapus data menu dari sistem.</li>
                <li><strong>Live Refresh Sidebar:</strong> Perubahan susunan atau nama menu langsung diperbarui pada sidebar aplikasi tanpa perlu me-reload halaman secara manual.</li>
            </ul>
        </div>
    </div>
</div>
@endif
