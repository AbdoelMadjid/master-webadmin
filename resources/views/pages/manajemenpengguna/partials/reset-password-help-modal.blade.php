<!--begin::Modal - Reset Password Operational Guide-->
<div class="modal fade" id="kt_modal_reset_password_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded">
            <!--begin::Modal Header-->
            <div class="modal-header pb-0 border-0 justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                    <div class="symbol symbol-40px symbol-circle bg-light-info p-2 me-2">
                        <i class="ki-duotone ki-question text-info fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div>
                        <h3 class="modal-title fw-bold text-gray-900 fs-3 m-0">
                            @if(app()->getLocale() == 'en')
                                Operational Guide: Password Reset Requests
                            @else
                                Petunjuk Operasional: Pengelolaan Permintaan Reset Password
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Operational guide for processing user password reset requests and credentials.
                            @else
                                Panduan operasional pemrosesan pengajuan reset kata sandi dan kredensial pengguna.
                            @endif
                        </span>
                    </div>
                </div>

                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!--end::Modal Header-->

            <!--begin::Modal Body-->
            <div class="modal-body scroll-y px-10 pt-4 pb-8">
                @if(app()->getLocale() == 'en')
                    <!--=================== ENGLISH CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-lock-2 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Overview & Password Reset Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module handles user password reset requests submitted when users forget their credentials. Administrators can review request details, approve requests by generating new passwords, or reject unauthorized requests.
                            </p>
                        </div>
                    </div>

                    <!-- Section 2: Step-by-Step Operations -->
                    <div class="card bg-light border border-gray-300 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-gray-900 mb-3">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Step-by-Step Operational Workflow
                            </h4>
                            <div class="d-flex flex-column gap-3 fs-7 text-gray-700">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">1</span>
                                    <div>
                                        <strong>Review Pending Requests:</strong> Inspect incoming requests marked with <span class="badge badge-light-warning text-warning px-2 py-1">Pending</span> status in the request table.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Approve & Set New Password:</strong> Click the <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-key text-white me-1"></i> Process Reset</span> button, type a strong new password (minimum 8 characters), and submit to update user credentials.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Reject Invalid Request:</strong> Click the <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-cross me-1"></i> Reject</span> button if the request is invalid or unverified.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Filter Status & Notification Read:</strong> Use the status filter dropdown (<code>Pending</code>, <code>Completed</code>, <code>Rejected</code>) to audit reset logs and mark notifications as read.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Best Practices & Safeguards -->
                    <div class="card bg-light-warning border border-warning border-opacity-30">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-warning mb-2">
                                <i class="ki-duotone ki-information-5 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Key Rules & Important Notes
                            </h4>
                            <ul class="text-gray-700 fs-7 mb-0 ps-5">
                                <li><strong>Identity Verification:</strong> Always verify user identity via official channel before approving password resets.</li>
                                <li><strong>Secure Communication:</strong> Deliver new generated passwords through secure private communication channels.</li>
                                <li><strong>Audit Log History:</strong> Approved and rejected requests remain preserved in the audit table for security compliance.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-lock-2 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Overview & Arsitektur Reset Password
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mengelola pengajuan pemulihan kata sandi yang dikirim oleh pengguna saat lupa password. Administrator dapat meninjau detail pengajuan, menyetujui pengajuan dengan menyetel kata sandi baru, atau menolak pengajuan yang tidak valid.
                            </p>
                        </div>
                    </div>

                    <!-- Section 2: Step-by-Step Operations -->
                    <div class="card bg-light border border-gray-300 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-gray-900 mb-3">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Alur Operasional Langkah Demi Langkah
                            </h4>
                            <div class="d-flex flex-column gap-3 fs-7 text-gray-700">
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">1</span>
                                    <div>
                                        <strong>Tinjau Permintaan Pending:</strong> Periksa daftar pengajuan masuk dengan status <span class="badge badge-light-warning text-warning px-2 py-1">Pending</span> pada tabel pengajuan.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Setujui & Set Password Baru:</strong> Klik tombol <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-key text-white me-1"></i> Proses Reset</span>, isikan kata sandi baru yang kuat (minimal 8 karakter), lalu simpan untuk mengupdate kredensial pengguna.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Tolak Permintaan Tidak Valid:</strong> Klik tombol <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-cross me-1"></i> Tolak</span> jika pengajuan tidak valid atau tidak terverifikasi.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Filter Status & Tandai Dibaca:</strong> Gunakan dropdown filter status (<code>Pending</code>, <code>Selesai</code>, <code>Ditolak</code>) untuk meninjau riwayat dan menandai notifikasi dibaca.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Best Practices & Safeguards -->
                    <div class="card bg-light-warning border border-warning border-opacity-30">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-warning mb-2">
                                <i class="ki-duotone ki-information-5 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Aturan Utama & Catatan Penting
                            </h4>
                            <ul class="text-gray-700 fs-7 mb-0 ps-5">
                                <li><strong>Verifikasi Identitas:</strong> Selalu verifikasi identitas pemohon melalui saluran resmi sebelum menyetujui reset kata sandi.</li>
                                <li><strong>Komunikasi Aman:</strong> Kirimkan kata sandi baru yang telah dibuat melalui saluran komunikasi pribadi yang aman.</li>
                                <li><strong>Riwayat Audit:</strong> Pengajuan yang telah disetujui maupun ditolak tetap tersimpan di riwayat tabel untuk kepatuhan audit keamanan.</li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <!--end::Modal Body-->

            <!--begin::Modal Footer-->
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light-primary fw-bold" data-bs-dismiss="modal">
                    @if(app()->getLocale() == 'en')
                        Close Guide
                    @else
                        Tutup Petunjuk
                    @endif
                </button>
            </div>
            <!--end::Modal Footer-->
        </div>
    </div>
</div>
<!--end::Modal - Reset Password Operational Guide-->
