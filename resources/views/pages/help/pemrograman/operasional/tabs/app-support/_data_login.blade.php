@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. AUDIT LOG & LOGIN HISTORY WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-success ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Session Audit Log & User Login History (Data Login Audit)</h3>
            <span class="text-muted fs-7">Operational guide for monitoring login session footprints, activity stats, and audit log clearing.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Architecture & Event Listener</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>DataLoginController</code> on route <code>appsupport/data-login</code>.
                </div>
                <div class="schema-step">
                    <strong>Automatic Log Recording:</strong> Laravel login event triggers <code>LogUserLogin</code> listener to record IP address, User Agent, and timestamp.
                </div>
                <div class="schema-step">
                    <strong>Delete Single Log Entry:</strong> Removes 1 log record via <code>DELETE appsupport/data-login/{id}</code>.
                </div>
                <div class="schema-step">
                    <strong>Clear All Logs:</strong> Clears entire log history via <code>DELETE appsupport/data-login/clear-all</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-chart-line fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Data Login Feature Operations</h4>
            <ul class="schema-list">
                <li><strong>Session Security Monitoring:</strong> Track IP addresses and browser devices used by users accessing the system.</li>
                <li><strong>Avatar & Brief Profile:</strong> Renders profile avatar photos and user name/email details on each log row.</li>
                <li><strong>Activity Statistical Widgets:</strong> Summary cards presenting today's total logins, system login history, and active users.</li>
                <li><strong>Maintenance Log Cleanup:</strong> *Clear All Logs* button to purge audit logs periodically for database efficiency.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR AUDIT LOG & RIWAYAT LOGIN (DATA LOGIN) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-success ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Audit Log Sesi & Riwayat Login Pengguna (Data Login Audit)</h3>
            <span class="text-muted fs-7">Panduan operasional pemantauan jejak sesi login, statistik keaktifan, dan pembersihan log audit.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur & Event Listener</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>DataLoginController</code> pada rute <code>appsupport/data-login</code>.
                </div>
                <div class="schema-step">
                    <strong>Perekaman Log Otomatis:</strong> Event login Laravel memicu listener <code>LogUserLogin</code> untuk mencatat IP address, User Agent, dan timestamp.
                </div>
                <div class="schema-step">
                    <strong>Hapus 1 Baris Log:</strong> Menghapus 1 entri log via <code>DELETE appsupport/data-login/{id}</code>.
                </div>
                <div class="schema-step">
                    <strong>Hapus Semua Log (Clear All):</strong> Menghapus seluruh riwayat log via <code>DELETE appsupport/data-login/clear-all</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-chart-line fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operasional Fitur Data Login</h4>
            <ul class="schema-list">
                <li><strong>Monitoring Keamanan Sesi:</strong> Memantau alamat IP dan perangkat yang digunakan oleh pengguna saat mengakses sistem.</li>
                <li><strong>Avatar & Profil Ringkas:</strong> Menampilkan foto avatar profil dan detail nama/email pengguna pada setiap baris log.</li>
                <li><strong>Widget Statistik Keaktifan:</strong> Menyajikan card ringkasan total login hari ini, total riwayat login sistem, dan user aktif.</li>
                <li><strong>Pembersihan Log Pemeliharaan:</strong> Tombol *Hapus Semua Log* untuk membersihkan log audit secara berkala demi efisiensi database.</li>
            </ul>
        </div>
    </div>
</div>
@endif
