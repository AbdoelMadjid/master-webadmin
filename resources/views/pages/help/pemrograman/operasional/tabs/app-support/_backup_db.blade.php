<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR CADANGAN & PEMULIHAN DATABASE (BACKUP DB) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-info ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Pengelolaan Cadangan & Pemulihan Database (Database Backup & Restore)</h3>
            <span class="text-muted fs-7">Panduan operasional ekspor dump SQL, restorasi basis data, dan pengelolaan file cadangan.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>BackupDbController</code> pada rute <code>appsupport/backup-db</code>.
                </div>
                <div class="schema-step">
                    <strong>Buat Backup SQL:</strong> Menjerap struktur & data basis data via <code>POST appsupport/backup-db</code>.
                </div>
                <div class="schema-step">
                    <strong>Download Berkas Backup:</strong> Mengunduh berkas `.sql` via <code>GET appsupport/backup-db/download/{filename}</code>.
                </div>
                <div class="schema-step">
                    <strong>Restorasi Basis Data:</strong> Memulihkan database via <code>POST appsupport/backup-db/restore/{filename}</code>.
                </div>
                <div class="schema-step">
                    <strong>Hapus Berkas Cadangan:</strong> Menghapus berkas via <code>DELETE appsupport/backup-db/{filename}</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-cloud-add fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Operasional Fitur Backup DB</h4>
            <ul class="schema-list">
                <li><strong>Pembuatan Backup 1-Klik:</strong> Admin dapat membuat file cadangan database lengkap sewaktu-waktu sebelum melakukan update sistem besar.</li>
                <li><strong>Tabel Riwayat Backup:</strong> Menampilkan rincian nama berkas, ukuran file (MB/KB), serta tanggal & waktu pembuatan berkas cadangan.</li>
                <li><strong>Prosedur Restorasi Aman:</strong> Melakukan pemulihan data dari file SQL pilihan saat terjadi kesalahan atau bencana kehilangan data (Disaster Recovery).</li>
                <li><strong>Pembersihan Rutin:</strong> Menghapus berkas cadangan kadaluarsa secara teratur untuk menghemat kapasitas ruang penyimpanan server.</li>
            </ul>
        </div>
    </div>
</div>
