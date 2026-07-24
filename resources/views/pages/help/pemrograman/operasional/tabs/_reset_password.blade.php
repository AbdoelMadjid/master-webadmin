<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR PERMINTAAN RESET PASSWORD (PASSWORD RESET REQUESTS) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Pengelolaan Permintaan Reset Password (Password Reset Requests)</h3>
            <span class="text-muted fs-7">Panduan operasional pemrosesan pengajuan reset kata sandi pengguna yang lupa password.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur Pemrograman & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>PasswordResetRequestController</code> pada rute <code>manajemenpengguna/reset-password</code>.
                </div>
                <div class="schema-step">
                    <strong>Tanda Dibaca (Mark Read):</strong> Rute <code>reset-password/{id}/mark-read</code> memperbarui status pengajuan menjadi telah dibaca oleh admin.
                </div>
                <div class="schema-step">
                    <strong>Proses Reset (Process Reset):</strong> Rute <code>POST reset-password/{id}/reset</code> men-generate password baru yang terenkripsi <code>Hash::make()</code> dan memperbarui kata sandi user.
                </div>
                <div class="schema-step">
                    <strong>Penolakan (Reject):</strong> Rute <code>POST reset-password/{id}/reject</code> menolak pengajuan reset password dengan alasan penolakan.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-lock-2 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Operasional & Workflow Status</h4>
            <ul class="schema-list">
                <li><strong>Status Pending (Baru):</strong> Pengajuan baru masuk dari pengguna yang tidak bisa login.</li>
                <li><strong>Status Read (Dibaca):</strong> Admin telah melihat detail pengajuan.</li>
                <li><strong>Status Reset Success (Disetujui):</strong> Admin mengeksekusi reset password, password baru digenerate, dan pengguna diberikan password sementara untuk login.</li>
                <li><strong>Status Rejected (Ditolak):</strong> Admin membatalkan pengajuan reset jika identitas tidak valid.</li>
            </ul>
        </div>
    </div>
</div>
