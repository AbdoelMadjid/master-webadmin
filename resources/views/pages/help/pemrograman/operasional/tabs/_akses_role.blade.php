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
