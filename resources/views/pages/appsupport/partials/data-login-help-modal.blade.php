<!--begin::Modal - Petunjuk Operasional Audit Trail Data Login & Mutation Activity Log-->
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
                        <i class="ki-duotone ki-shield-search fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: System Audit Trail & Activity Log' : 'Petunjuk Operasional: Audit Trail & Activity Log System' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'User login session auditing, IP security compliance, data mutation tracking, and change inspect diff' : 'Panduan operasional audit sesi login user, kepatuhan keamanan IP, pelacakan mutasi data, dan inspeksi perubahan' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Audit Architecture
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>System Audit Trail & Activity Log Module</strong> provides comprehensive 360-degree security monitoring. It tracks both user login authentication sessions (IP, geolocation, device agent) and database model data mutations (Create, Update, Delete) with detailed side-by-side attribute change diffs.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Multi-Tab Modules & Data Metrics
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>User Login Sessions Tab:</strong> Records real-time user authentications, IP addresses, device user-agents, login counts, and Google Maps geolocation coordinates.</li>
                                <li class="mb-2"><strong>Data Mutation Activity Log Tab:</strong> Records model data changes (created, updated, deleted) executed by users across the application.</li>
                                <li><strong>Property Inspect Diff Modal:</strong> Provides intuitive side-by-side table comparison of <code>Old Values</code> vs <code>New Values</code>, active status badges, request IP, URL endpoint, and collapsible raw JSON payload.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Switch Audit Tabs:</strong> Navigate between <span class="badge badge-light-primary text-primary">Login Sessions</span> and <span class="badge badge-light-info text-info">Data Mutation Activity</span>.</li>
                                <li class="mb-2"><strong>Inspect Data Mutations:</strong> Click <span class="badge badge-light-primary text-primary"><i class="ki-duotone ki-eye text-primary me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Lihat Detail Perubahan Attributes</span> on any activity row to view visual side-by-side attribute comparison.</li>
                                <li class="mb-2"><strong>Filter Activity Logs:</strong> Filter logs by Action event (Created, Updated, Deleted) or search by Model name/Causer user.</li>
                                <li><strong>Purge Audit Trail:</strong> Click <span class="badge badge-danger">Clear All Logs</span> to purge historical audit records when required by maintenance policy.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Security Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Automatic Model Tracking:</strong> Key models (<code>User</code>, <code>AppProfil</code>, <code>AppFitur</code>, <code>Referensi</code>, <code>BackupDb</code>) automatically record mutation events via <code>LogsActivityTrait</code>.</li>
                                <li class="mb-2"><strong>Security IP & Metadata Capture:</strong> Client IP, browser User-Agent, and full request URL are attached to every mutation record.</li>
                                <li><strong>Irreversible Log Purge:</strong> Clearing audit logs permanently deletes audit records and cannot be undone.</li>
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
                                Gambaran Umum & Arsitektur Audit System
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Audit Trail System & Activity Log</strong> menyediakan pengawasan keamanan 360 derajat. Modul ini mencatat sesi autentikasi login user (IP, geolokasi, user agent) serta mutasi perubahan data basis data (Create, Update, Delete) lengkap dengan perbandingan selisih atribut berdampingan <em>(diff old vs new values)</em>.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Modul Multi-Tab & Metrik Data
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Tab Riwayat Sesi Login:</strong> Merekam login user real-time, alamat IP, user agent perangkat, frekuensi login, dan koordinat peta Google Maps.</li>
                                <li class="mb-2"><strong>Tab Audit Mutasi Data:</strong> Merekam perubahan data model (dibuat, diperbarui, dihapus) yang dilakukan oleh pengguna di seluruh sistem.</li>
                                <li><strong>Modal Penilik Perubahan (Diff):</strong> Menyediakan perbandingan berdampingan tabel nilai lama (<code>Old Values</code>) vs nilai baru (<code>New Values</code>), indikator badge status aktif, IP request, endpoint URL, serta akordeon data mentah JSON.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengelolaan Audit
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pindah Tab Audit:</strong> Navigasi antara tab <span class="badge badge-light-primary text-primary">Sesi Login</span> dan <span class="badge badge-light-info text-info">Mutasi Data</span>.</li>
                                <li class="mb-2"><strong>Inspeksi Perubahan Data:</strong> Klik tombol <span class="badge badge-light-primary text-primary"><i class="ki-duotone ki-eye text-primary me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Lihat Detail Perubahan Attributes</span> pada baris aktivitas untuk memeriksa detail perbandingan atribut basis data.</li>
                                <li class="mb-2"><strong>Filter Activity Log:</strong> Saring log berdasarkan aksi event (Created, Updated, Deleted) atau cari berdasarkan nama Model/User pelaksana.</li>
                                <li><strong>Pembersihan Audit Trail:</strong> Klik <span class="badge badge-danger">Hapus Semua Log</span> untuk mengosongkan riwayat audit saat pemeliharaan sistem.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Keamanan Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pelacakan Otomatis Model:</strong> Model utama (<code>User</code>, <code>AppProfil</code>, <code>AppFitur</code>, <code>Referensi</code>, <code>BackupDb</code>) secara otomatis merekam event mutasi via <code>LogsActivityTrait</code>.</li>
                                <li class="mb-2"><strong>Penangkapan IP & Metadata:</strong> Alamat IP client, browser User-Agent, dan URL request dilampirkan pada setiap catatan mutasi.</li>
                                <li><strong>Pembersihan Permanen:</strong> Mengosongkan log akan menghapus catatan audit secara permanen dari basis data.</li>
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
<!--end::Modal - Petunjuk Operasional Audit Trail Data Login & Mutation Activity Log-->
