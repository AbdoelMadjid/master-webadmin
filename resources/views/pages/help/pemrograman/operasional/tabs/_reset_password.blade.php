@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. PASSWORD RESET REQUESTS WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Password Reset Requests Management</h3>
            <span class="text-muted fs-7">Operational guide for processing user password reset applications.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Code Architecture & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>PasswordResetRequestController</code> on route <code>manajemenpengguna/reset-password</code>.
                </div>
                <div class="schema-step">
                    <strong>Mark Read:</strong> Route <code>reset-password/{id}/mark-read</code> updates application status to read by admin.
                </div>
                <div class="schema-step">
                    <strong>Process Reset:</strong> Route <code>POST reset-password/{id}/reset</code> generates encrypted new password via <code>Hash::make()</code> and updates user password.
                </div>
                <div class="schema-step">
                    <strong>Rejection:</strong> Route <code>POST reset-password/{id}/reject</code> rejects password reset application with reason note.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-lock-2 fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Operations & Workflow Statuses</h4>
            <ul class="schema-list">
                <li><strong>Pending Status (New):</strong> New application received from user unable to log in.</li>
                <li><strong>Read Status:</strong> Admin has viewed application details.</li>
                <li><strong>Reset Success Status (Approved):</strong> Admin executes password reset, new password is generated, and temporary password is provided to user.</li>
                <li><strong>Rejected Status:</strong> Admin cancels reset request if user identity is unverified.</li>
            </ul>
        </div>
    </div>
</div>
@else
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
@endif
