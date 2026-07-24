@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. 1 MODULE 1 ROW CONCEPT & BATCH CRUD GENERATOR -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-warning ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Permission Programming Architecture (1 Module 1 Row)</h3>
            <span class="text-muted fs-7">Operation for table module grouping, 1-click 4 CRUD generator, and batch editor.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card border-start border-4 border-warning">
            <h4><i class="ki-duotone ki-flash fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Mode ⚡ CRUD Module Batch (Practical)</h4>
            <p class="fs-7 text-gray-700 mb-2">
                <strong>Function:</strong> To quickly generate all basic access rights (`Create`, `Read`, `Update`, `Delete`) for a new feature in 1 single save.
            </p>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Input Module Name:</strong> Type module name (e.g. <code>transactions</code> or <code>master-items</code>).
                </div>
                <div class="schema-step">
                    <strong>Automatic Execution:</strong> System creates 4 permissions simultaneously (<code>create transactions</code>, <code>read transactions</code>, <code>update transactions</code>, <code>delete transactions</code>).
                </div>
                <div class="schema-step">
                    <strong>Role Assignment:</strong> Instantly attach to selected roles in the modal form.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card border-start border-4 border-primary">
            <h4><i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Mode 🔑 Single Permission (Custom)</h4>
            <p class="fs-7 text-gray-700 mb-2">
                <strong>Function:</strong> To create a single custom access right for specific non-standard CRUD operations.
            </p>
            <ul class="schema-list mb-0">
                <li><code>export-excel transactions</code> (Custom Excel download permission)</li>
                <li><code>approve reset-password</code> (Custom password reset approval permission)</li>
                <li><code>impersonate users</code> (Custom user impersonation permission)</li>
                <li><code>print-pdf report</code> (Custom PDF print permission)</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. BATCH EDIT & DELETE MODULE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-setting-2 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Batch Module Edit & Delete Operations</h4>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <h6 class="fw-bold text-gray-900 mb-1">⚙️ Batch Module Access Edit (1-Click)</h6>
                    <p class="fs-7 text-gray-600 mb-0">
                        Clicking the edit button on a module row in the table automatically reads all permissions & roles attached to that module. Admin can add/remove roles or CRUD actions simultaneously in 1 save.
                    </p>
                </div>
                <div class="col-md-6">
                    <h6 class="fw-bold text-gray-900 mb-1">🗑️ Batch Module Delete</h6>
                    <p class="fs-7 text-gray-600 mb-0">
                        Clicking the delete button on a module row prompts a confirmation modal and permanently deletes all registered permissions under that module.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. KONSEP 1 MODUL 1 BARIS & BATCH CRUD GENERATOR -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-warning ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Arsitektur Pemrograman Permission (1 Modul 1 Baris)</h3>
            <span class="text-muted fs-7">Operasional pengelompokan tabel per modul, generator 4 CRUD 1-klik, dan batch editor.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card border-start border-4 border-warning">
            <h4><i class="ki-duotone ki-flash fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Mode ⚡ Modul CRUD Batch (Praktis)</h4>
            <p class="fs-7 text-gray-700 mb-2">
                <strong>Fungsi:</strong> Untuk membuat seluruh hak akses dasar (`Create`, `Read`, `Update`, `Delete`) modul/fitur baru secara cepat & sekaligus dalam 1 kali simpan.
            </p>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Input Nama Modul:</strong> Ketikkan nama modul (contoh: <code>transaksi</code> atau <code>master-barang</code>).
                </div>
                <div class="schema-step">
                    <strong>Eksekusi Otomatis:</strong> Sistem membuat 4 permission sekaligus (<code>create transaksi</code>, <code>read transaksi</code>, <code>update transaksi</code>, <code>delete transaksi</code>).
                </div>
                <div class="schema-step">
                    <strong>Penugasan Role:</strong> Langsung memasangkan ke role pilihan pada modal form.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card border-start border-4 border-primary">
            <h4><i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Mode 🔑 Single Permission (Kustom)</h4>
            <p class="fs-7 text-gray-700 mb-2">
                <strong>Fungsi:</strong> Untuk membuat 1 hak akses tunggal untuk fitur spesifik yang bukan merupakan aksi CRUD biasa.
            </p>
            <ul class="schema-list mb-0">
                <li><code>export-excel transaksi</code> (Izin khusus download Excel)</li>
                <li><code>approve reset-password</code> (Izin khusus menyetujui reset password)</li>
                <li><code>impersonate users</code> (Izin khusus switch akun user)</li>
                <li><code>print-pdf laporan</code> (Izin cetak dokumen PDF)</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. BATCH EDIT & HAPUS MODUL -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-setting-2 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operasional Batch Edit & Hapus Modul</h4>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <h6 class="fw-bold text-gray-900 mb-1">⚙️ Edit Akses Modul Batch (1-Klik)</h6>
                    <p class="fs-7 text-gray-600 mb-0">
                        Mengeklik tombol edit pada baris modul di tabel akan otomatis membaca seluruh permission & role modul tersebut. Admin dapat menambah/mengurangi role atau aksi CRUD modul sekaligus dalam 1 kali simpan.
                    </p>
                </div>
                <div class="col-md-6">
                    <h6 class="fw-bold text-gray-900 mb-1">🗑️ Hapus Modul Batch</h6>
                    <p class="fs-7 text-gray-600 mb-0">
                        Mengeklik tombol hapus pada baris modul akan mengonfirmasi dan menghapus seluruh permission yang terdaftar di bawah modul tersebut secara permanen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
