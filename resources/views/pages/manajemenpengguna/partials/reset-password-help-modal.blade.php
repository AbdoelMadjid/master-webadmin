<!--begin::Modal - Petunjuk Operasional Pengelolaan Permintaan Reset Password-->
<div class="modal fade" id="kt_modal_reset_password_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <div class="mb-10 text-center">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-lock-2 fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Password Reset Requests' : 'Petunjuk Operasional: Pengelolaan Permintaan Reset Password' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Operational guide for reviewing user password reset requests and updating credentials' : 'Panduan operasional pemrosesan pengajuan reset kata sandi dan kredensial pengguna' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                System Overview & Reset Workflow
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>Password Reset Requests Module</strong> manages user credentials recovery
                                requests. Administrators can review incoming request details, approve requests by
                                setting a secure new password, or reject unverified requests.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Request Lifecycle & States
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pending Status:</strong> Incoming requests waiting for
                                    administrator review and verification.</li>
                                <li class="mb-2"><strong>Completed Status:</strong> Approved requests where new
                                    password credentials have been successfully assigned.</li>
                                <li><strong>Rejected Status:</strong> Requests rejected due to invalid identity
                                    verification.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Review Pending Requests:</strong> Inspect requests marked
                                    with <span class="badge badge-light-warning text-warning">Pending</span> status in
                                    the request table.</li>
                                <li class="mb-2"><strong>Approve & Set Password:</strong> Click <span
                                        class="badge badge-primary">Process Reset</span>, enter a strong new password,
                                    and submit.</li>
                                <li class="mb-2"><strong>Reject Unverified Request:</strong> Click <span
                                        class="badge badge-light-danger text-danger">Reject</span> if the request is
                                    unverified.</li>
                                <li><strong>Audit History:</strong> Filter by status to review historical reset audit
                                    records.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Identity Verification Safeguard:</strong> Verify user
                                    identity via official channel before approving password resets.</li>
                                <li class="mb-2"><strong>Secure Credential Transmission:</strong> Deliver new
                                    credentials through secure private communication channels.</li>
                                <li><strong>Compliance Tracing:</strong> Processed reset requests remain preserved in
                                    audit logs for security compliance.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--Indonesian Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                Gambaran Umum & Alur Reset Password
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Pengelolaan Permintaan Reset Password</strong> mengelola pengajuan
                                pemulihan kata sandi pengguna. Administrator dapat meninjau detail pengajuan, menyetujui
                                pengajuan dengan menyetel kata sandi baru yang aman, atau menolak pengajuan yang tidak
                                terverifikasi.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Siklus & Status Pengajuan
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Status Pending:</strong> Pengajuan baru masuk yang menunggu
                                    peninjauan dan verifikasi administrator.</li>
                                <li class="mb-2"><strong>Status Selesai (Completed):</strong> Pengajuan yang disetujui
                                    setelah kata sandi baru disetel.</li>
                                <li><strong>Status Ditolak (Rejected):</strong> Pengajuan yang ditolak karena verifikasi
                                    identitas tidak valid.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                Alur Operasional Pemrosesan Reset Password
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Tinjau Permintaan Pending:</strong> Periksa daftar pengajuan
                                    masuk berstatus <span class="badge badge-light-warning text-warning">Pending</span>
                                    pada tabel pengajuan.</li>
                                <li class="mb-2"><strong>Setujui & Set Password Baru:</strong> Klik tombol <span
                                        class="badge badge-primary">Proses Reset</span>, isikan kata sandi baru yang
                                    kuat, lalu simpan.</li>
                                <li class="mb-2"><strong>Tolak Pengajuan Tidak Valid:</strong> Klik tombol <span
                                        class="badge badge-light-danger text-danger">Tolak</span> jika pengajuan tidak
                                    terverifikasi.</li>
                                <li><strong>Riwayat Audit:</strong> Filter status pengajuan untuk meninjau riwayat audit
                                    reset password.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Verifikasi Identitas:</strong> Selalu verifikasi identitas
                                    pemohon melalui saluran resmi sebelum menyetujui reset kata sandi.</li>
                                <li class="mb-2"><strong>Komunikasi Kredensial Aman:</strong> Kirimkan kata sandi
                                    baru melalui saluran komunikasi pribadi yang aman.</li>
                                <li><strong>Kepatuhan Audit:</strong> Seluruh pengajuan yang disetujui maupun ditolak
                                    tetap tersimpan di riwayat tabel.</li>
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - Petunjuk Operasional Pengelolaan Permintaan Reset Password-->
