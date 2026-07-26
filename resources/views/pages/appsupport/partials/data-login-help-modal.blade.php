<!--begin::Modal - Data Login Operational Guide-->
<div class="modal fade" id="kt_modal_data_login_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: User Login Audit Trail
                            @else
                                Petunjuk Operasional: Audit Trail Riwayat Login User
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Operational guide for auditing user login sessions, IP security, and geolocation.
                            @else
                                Panduan operasional audit sesi login user, keamanan IP, dan geolokasi.
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
                                <i class="ki-duotone ki-entrance-left fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Login Audit Trail Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module logs every user login session in real-time. It records user identity, timestamp, IP address, device browser user agent, user points, and optional GPS geolocation coordinates to ensure system security compliance.
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
                                        <strong>Inspect Login Trail:</strong> Review recent login activities, timestamps, user account roles, and active user badges in the main table.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>View Geolocation Map:</strong> Click the <span class="badge badge-light-info text-info px-2 py-1"><i class="ki-duotone ki-geolocation me-1"></i> Maps</span> icon on any log row to open Google Maps at the captured GPS coordinate location.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Delete Single Login Log:</strong> Click the trash icon <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-trash me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Hapus</span> to remove a specific audit record.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Clear All Logs:</strong> Click the <span class="badge badge-danger px-2 py-1"><i class="ki-duotone ki-trash text-white me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Clear All</span> button to purge all audit log records from the database.
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
                                <li><strong>Security IP Audit:</strong> Monitor abnormal IP addresses or browser user agents to detect unauthorized login attempts.</li>
                                <li><strong>Irreversible Log Purge:</strong> Clearing all logs permanently deletes audit records and cannot be undone.</li>
                                <li><strong>User Data Retention:</strong> Deleted user accounts retain historical audit records marked as <code>Pengguna Terhapus</code> for compliance tracing.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-entrance-left fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Audit Trail Login
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mencatat setiap sesi login pengguna secara real-time. Informasi yang direkam mencakup identitas user, stempel waktu, alamat IP, user agent perangkat/browser, perolehan poin, serta koordinat geolokasi GPS untuk memenuhi kepatuhan audit keamanan sistem.
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
                                        <strong>Audit Riwayat Login:</strong> Periksa aktivitas login terbaru, stempel waktu, role akun user, dan badge poin pada tabel utama.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Buka Peta Geolokasi:</strong> Klik ikon <span class="badge badge-light-info text-info px-2 py-1"><i class="ki-duotone ki-geolocation me-1"><span class="path1"></span><span class="path2"></span></i> Maps</span> pada baris catatan untuk membuka lokasi koordinat GPS di Google Maps.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Hapus Log Tunggal:</strong> Klik ikon tempat sampah <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-trash me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Hapus</span> untuk menghapus satu baris riwayat audit.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Kosongkan Semua Log:</strong> Klik tombol <span class="badge badge-danger px-2 py-1"><i class="ki-duotone ki-trash text-white me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Hapus Semua Log</span> untuk menghapus seluruh riwayat audit dari basis data.
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
                                <li><strong>Audit Keamanan IP:</strong> Pantau alamat IP atau browser mencurigakan untuk mendeteksi upaya login tanpa wewenang.</li>
                                <li><strong>PemberSIhan Log Permanen:</strong> Mengosongkan seluruh log akan menghapus catatan audit secara permanen dan tidak dapat dikembalikan.</li>
                                <li><strong>Retensi Data User Terhapus:</strong> Akun user yang telah dihapus tetap menyimpan riwayat audit dengan tanda <code>Pengguna Terhapus</code> demi kepatuhan penelusuran.</li>
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
<!--end::Modal - Data Login Operational Guide-->
