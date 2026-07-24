@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. DATABASE BACKUP & RESTORE WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-info ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Database Backup & Restoration Management</h3>
            <span class="text-muted fs-7">Operational guide for SQL dump exports, database restoration, and backup file management.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Architecture & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>BackupDbController</code> on route <code>appsupport/backup-db</code>.
                </div>
                <div class="schema-step">
                    <strong>Create SQL Backup:</strong> Dumps database structure & records via <code>POST appsupport/backup-db</code>.
                </div>
                <div class="schema-step">
                    <strong>Download Backup File:</strong> Downloads `.sql` files via <code>GET appsupport/backup-db/download/{filename}</code>.
                </div>
                <div class="schema-step">
                    <strong>Database Restoration:</strong> Restores database via <code>POST appsupport/backup-db/restore/{filename}</code>.
                </div>
                <div class="schema-step">
                    <strong>Delete Backup File:</strong> Removes files via <code>DELETE appsupport/backup-db/{filename}</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-cloud-add fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Backup DB Feature Operations</h4>
            <ul class="schema-list">
                <li><strong>1-Click Backup Generation:</strong> Admins can create full database backups at any time before performing major system updates.</li>
                <li><strong>Backup History Table:</strong> Displays file name details, file size (MB/KB), and creation timestamp of backup files.</li>
                <li><strong>Safe Restoration Procedure:</strong> Restores data from selected SQL files during data loss or system emergencies (Disaster Recovery).</li>
                <li><strong>Routine Storage Maintenance:</strong> Removes outdated backup files regularly to conserve server disk space.</li>
            </ul>
        </div>
    </div>
</div>
@else
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
@endif
