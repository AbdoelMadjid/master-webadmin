<!--begin::Modal - Petunjuk Operasional Audit Trail Data Login-->
<div class="modal fade" id="kt_modal_data_login_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-entrance-left fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: User Login Audit Trail' : 'Petunjuk Operasional: Audit Trail Data Login' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'User login session auditing, IP security compliance, and geolocation mapping' : 'Panduan operasional audit sesi login user, keamanan IP, dan pemetaan geolokasi GPS' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Security Audit
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>User Login Audit Trail Module</strong> records every user login session in real-time. It captures user account identity, timestamps, IP address, device browser user agent, login reward points, and GPS geolocation coordinates for security compliance.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Recorded Session Data Metrics
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>User Account & Role:</strong> Identifies which account authenticated and its assigned role permissions.</li>
                                <li class="mb-2"><strong>IP Address & Device Agent:</strong> Captures client network IP address and browser user-agent string.</li>
                                <li><strong>Geolocation Coordinates:</strong> Captures latitude/longitude coordinates to render interactive Google Maps locations.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Audit Login Activities:</strong> Review login logs, timestamps, user account roles, and login statistics.</li>
                                <li class="mb-2"><strong>View Geolocation Map:</strong> Click <span class="badge badge-light-info text-info">Maps</span> on any row to view captured GPS coordinates on Google Maps.</li>
                                <li class="mb-2"><strong>Delete Single Log:</strong> Click <span class="badge badge-light-danger text-danger">Delete</span> to remove a specific audit trail record.</li>
                                <li><strong>Purge All Logs:</strong> Click <span class="badge badge-danger">Clear All Logs</span> to purge historical audit records from database.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Security IP Monitoring:</strong> Monitor suspicious IP addresses or user agents to detect unauthorized login attempts.</li>
                                <li class="mb-2"><strong>Irreversible Purge:</strong> Clearing all logs permanently deletes audit records and cannot be undone.</li>
                                <li><strong>Historical User Retention:</strong> Deleted user accounts retain historical audit records marked as <code>Deleted User</code> for compliance tracing.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--Indonesian Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                Gambaran Umum & Audit Keamanan
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Audit Trail Data Login</strong> mencatat setiap sesi login pengguna secara real-time. Informasi yang direkam mencakup identitas user, stempel waktu, alamat IP, user agent perangkat/browser, perolehan poin login, serta koordinat geolokasi GPS untuk memenuhi audit keamanan sistem.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Metrik Data Sesi Login
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Akun & Role User:</strong> Mengidentifikasi akun yang melakukan autentikasi dan role hak aksesnya.</li>
                                <li class="mb-2"><strong>Alamat IP & Device Agent:</strong> Mencatat alamat IP jaringan client dan string user-agent browser.</li>
                                <li><strong>Koordinat Geolokasi:</strong> Merekam koordinat garis lintang/bujur untuk ditampilkan pada peta Google Maps.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengelolaan Audit
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Audit Riwayat Login:</strong> Periksa aktivitas login terbaru, stempel waktu, role akun user, dan statistik login.</li>
                                <li class="mb-2"><strong>Buka Peta Geolokasi:</strong> Klik tombol <span class="badge badge-light-info text-info">Maps</span> pada baris catatan untuk membuka lokasi koordinat GPS di Google Maps.</li>
                                <li class="mb-2"><strong>Hapus Log Tunggal:</strong> Klik tombol <span class="badge badge-light-danger text-danger">Hapus</span> untuk menghapus satu baris riwayat audit.</li>
                                <li><strong>Kosongkan Semua Log:</strong> Klik tombol <span class="badge badge-danger">Hapus Semua Log</span> untuk menghapus seluruh riwayat audit dari basis data.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Audit Keamanan IP:</strong> Pantau alamat IP atau browser mencurigakan untuk mendeteksi upaya login tanpa wewenang.</li>
                                <li class="mb-2"><strong>Pembersihan Permanen:</strong> Mengosongkan seluruh log akan menghapus catatan audit secara permanen.</li>
                                <li><strong>Retensi Data User Terhapus:</strong> Akun user yang telah dihapus tetap menyimpan riwayat audit dengan penanda <code>Pengguna Terhapus</code>.</li>
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
<!--end::Modal - Petunjuk Operasional Audit Trail Data Login-->
