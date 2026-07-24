<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ARSITEKTUR & DIREKTORI PENYIMPANAN -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Direktori & Penamaan File Backup</h4>
            <pre class="schema-code"><code>// Location Directory:
storage/app/backups/
atau
storage/app/private/backups/

// Format Penamaan File Dump SQL:
backup-database-YYYY-MM-DD-HHIISS.sql

Contoh:
backup-database-2026-07-23-113000.sql</code></pre>
            <div class="schema-note mt-3">
                Direktori penyimpanan terlindungi di luar <code>public_html</code> sehingga file dump database tidak dapat diakses secara langsung dari browser tanpa autentikasi.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. ENDPOINT & CONTROLLER MANAGEMENT -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Rute & Controller <code>BackupDbController</code></h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong><code>GET /appsupport/backup-db</code></strong><br>
                    <code>BackupDbController@index</code> -> Menampilkan tabel daftar berkas cadangan database yang tersedia.
                </div>
                <div class="schema-step">
                    <strong><code>POST /appsupport/backup-db</code></strong><br>
                    <code>BackupDbController@store</code> -> Memicu proses ekspor dump SQL baru dari koneksi DB aktif.
                </div>
                <div class="schema-step">
                    <strong><code>GET /appsupport/backup-db/download/{filename}</code></strong><br>
                    <code>BackupDbController@download</code> -> Mengunduh file cadangan SQL secara aman.
                </div>
                <div class="schema-step">
                    <strong><code>POST /appsupport/backup-db/restore/{filename}</code></strong><br>
                    <code>BackupDbController@restore</code> -> Memulihkan struktur & isi data dari file cadangan SQL pilihan.
                </div>
                <div class="schema-step">
                    <strong><code>DELETE /appsupport/backup-db/{filename}</code></strong><br>
                    <code>BackupDbController@destroy</code> -> Menghapus file cadangan SQL dari direktori penyimpanan server.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. MEKANISME DUMP SQL & RESTORE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-info">
            <h4><i class="ki-duotone ki-cloud-add fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Mekanisme Ekspor Dump & Impor Restore SQL</h4>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">A. Proses Backup (Ekspor)</h5>
                        <ol class="schema-list fs-7 mb-0">
                            <li>Sistem membaca kredensial koneksi DB aktif dari konfigurasi <code>config('database.connections.mysql')</code>.</li>
                            <li>Mengidentifikasi keberadaan perintah eksternal <code>mysqldump</code> atau menggunakan SQL dump generator internal.</li>
                            <li>Mengekstrak skema struktur tabel beserta seluruh record data, lalu menyimpannya dalam berkas bertipe <code>.sql</code>.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">B. Proses Restore (Pemulihan)</h5>
                        <ol class="schema-list fs-7 mb-0">
                            <li>Admin mengonfirmasi pemulihan melalui modal interaktif <code>SwalHelper</code>.</li>
                            <li>Sistem membaca berkas <code>.sql</code> pilihan dan mengeksekusi baris SQL query untuk memperbarui state database.</li>
                            <li>Mengeksekusi pembongkaran cache aplikasi <code>optimize:clear</code> untuk memastikan sinkronisasi state.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. SAFETY & INTEGRITY BEST PRACTICES -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Prosedur Keamanan & Integritas Data</h4>
            <ul class="schema-list">
                <li><strong>Pre-Migration Backup:</strong> Disarankan untuk memicu Backup DB sebelum melakukan perubahan skema database besar atau pembaruan sistem.</li>
                <li><strong>Restriksi Akses:</strong> Hanya user berotoritas Admin yang dapat melihat, mengunduh, memulihkan, atau menghapus berkas cadangan database.</li>
                <li><strong>Notifikasi SweetAlert2:</strong> Seluruh eksekusi (Backup, Restore, Delete) dilengkapi dengan konfirmasi dialog dan feedback SweetAlert2.</li>
            </ul>
        </div>
    </div>
</div>
