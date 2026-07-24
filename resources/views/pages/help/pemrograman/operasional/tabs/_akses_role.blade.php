@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ROLE-PERMISSIONS MATRIX WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Role Access Rights Matrix (Role-Permissions Matrix)</h3>
            <span class="text-muted fs-7">Operational guide for centralized management of feature permissions matrix per user role.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Code Architecture & Route</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>AksesRoleController</code> on route <code>manajemenpengguna/akses-role</code>.
                </div>
                <div class="schema-step">
                    <strong>Index Method (`GET`):</strong> Fetches role list and builds permission matrix grouped by app module.
                </div>
                <div class="schema-step">
                    <strong>Update Method (`POST`):</strong> Syncs selected permissions to active role via <code>$role->syncPermissions($permissions)</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Role Matrix Feature Operations</h4>
            <ul class="schema-list">
                <li><strong>Role Side Nav Tab:</strong> Select a role from the left panel to load its permission matrix on the right panel.</li>
                <li><strong>Live Module Search:</strong> Use the search input to filter app module rows in real-time.</li>
                <li><strong>Bulk Select & Deselect:</strong> Shortcut buttons <em>Select All</em> and <em>Clear All</em> to check/uncheck all permissions for active role.</li>
                <li><strong>Module Row Checkbox:</strong> Checkbox on the far right column to toggle all permissions within a single module row.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR MANAJEMEN HAK AKSES ROLE (ROLE-PERMISSIONS MATRIX) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Matriks Hak Akses Role (Role-Permissions Matrix)</h3>
            <span class="text-muted fs-7">Panduan operasional pengelolaan matriks izin fitur untuk setiap role pengguna secara terpusat.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur Pemrograman & Route</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>AksesRoleController</code> pada rute <code>manajemenpengguna/akses-role</code>.
                </div>
                <div class="schema-step">
                    <strong>Method Index (`GET`):</strong> Mengambil daftar role dan menyusun matriks perizinan berdasar modul aplikasi.
                </div>
                <div class="schema-step">
                    <strong>Method Update (`POST`):</strong> Menyinkronkan permission yang dipilih ke role aktif via <code>$role->syncPermissions($permissions)</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Operasional Fitur Matriks Role</h4>
            <ul class="schema-list">
                <li><strong>Side Nav Tab Role:</strong> Memilih role dari panel sebelah kiri untuk memuat matriks perizinannya pada panel sebelah kanan.</li>
                <li><strong>Live Search Modul:</strong> Menggunakan input pencarian untuk menyaring baris modul aplikasi secara real-time.</li>
                <li><strong>Bulk Select & Deselect:</strong> Tombol pintas <em>Pilih Semua</em> dan <em>Kosongkan</em> untuk mencentang/membatalkan seluruh perizinan role aktif secara cepat.</li>
                <li><strong>Centang Baris Modul (Row Toggle):</strong> Checkbox di kolom paling kanan untuk memilih semua izin dalam 1 baris modul.</li>
            </ul>
        </div>
    </div>
</div>
@endif
