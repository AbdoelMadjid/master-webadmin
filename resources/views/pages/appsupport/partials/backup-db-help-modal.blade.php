<!--begin::Modal - Petunjuk Operasional Backup & Restore Database-->
<div class="modal fade" id="kt_modal_backup_db_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-disk fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Database Backup & Restore' : 'Petunjuk Operasional: Backup & Restore Database' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Database SQL dumps, downloading archives, and database restoration guide' : 'Panduan operasional pembuatan dump database, unduh arsip SQL, dan restore database' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Disaster Recovery
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>Database Backup & Restore Module</strong> manages database disaster recovery and data retention. Administrators can generate timestamped SQL dump archives, download compressed backup files, restore database snapshots, or purge old backup files.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Backup Storage & Operations
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>SQL Dump Generation:</strong> Generates timestamped SQL files (e.g., <code>backup_2026-07-26_1530.sql</code>) saved inside storage.</li>
                                <li class="mb-2"><strong>Database Restore:</strong> Re-executes the selected SQL dump archive to roll back database state to a previous point in time.</li>
                                <li><strong>Archive Download & Storage:</strong> Download compressed backups locally or transfer to offsite cloud storage.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Create New Backup:</strong> Click <span class="badge badge-primary">+ Create New Backup</span> to execute a fresh database dump.</li>
                                <li class="mb-2"><strong>Download Archive:</strong> Click <span class="badge badge-light-primary text-primary">Download</span> on any row to download the <code>.sql</code> file locally.</li>
                                <li class="mb-2"><strong>Restore Database State:</strong> Click <span class="badge badge-light-warning text-warning">Restore</span> to roll back active tables to a selected backup point.</li>
                                <li><strong>Purge Obsolete Archives:</strong> Click <span class="badge badge-light-danger text-danger">Delete</span> to remove outdated files and free server disk space.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pre-Restore Backup Rule:</strong> Restoring a backup overwrites active database tables. Always create a new backup before performing a restore.</li>
                                <li class="mb-2"><strong>Offsite Storage Backup:</strong> Regularly download backup archives to secure offsite cloud storage.</li>
                                <li><strong>Server CLI Utility:</strong> Automated backups utilize MySQL CLI tools (<code>mysqldump</code>) configured on the host server.</li>
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
                                Gambaran Umum & Pemulihan Bencana
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Backup & Restore Database</strong> mengelola pemulihan bencana (disaster recovery) dan retensi data basis data sistem. Administrator dapat membuat arsip dump SQL berstempel waktu, mengunduh file backup terkompresi, melakukan pemulihan (restore) basis data, atau menghapus arsip lama.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Penyimpanan & Operasional Backup
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pembuatan Dump SQL:</strong> Menghasilkan berkas SQL berstempel waktu (contoh: <code>backup_2026-07-26_1530.sql</code>) di dalam direktori penyimpanan server.</li>
                                <li class="mb-2"><strong>Pemulihan (Restore) Database:</strong> Menjalankan ulang arsip dump SQL terpilih untuk mengembalikan keadaan basis data ke titik waktu tertentu.</li>
                                <li><strong>Unduh & Arsip Penyimpanan:</strong> Mengunduh berkas backup ke komputer lokal atau menyimpannya ke cloud luar.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Langkah Demi Langkah
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Buat Backup Database Baru:</strong> Klik tombol <span class="badge badge-primary">+ Buat Backup Baru</span> untuk membuat arsip dump SQL terbaru.</li>
                                <li class="mb-2"><strong>Unduh Berkas Backup:</strong> Klik tombol <span class="badge badge-light-primary text-primary">Unduh</span> pada baris tabel untuk menyimpan berkas <code>.sql</code> secara lokal.</li>
                                <li class="mb-2"><strong>Pemulihan (Restore) Database:</strong> Klik tombol <span class="badge badge-light-warning text-warning">Restore</span> untuk mengembalikan data ke titik backup terpilih.</li>
                                <li><strong>Hapus Berkas Lama:</strong> Klik tombol <span class="badge badge-light-danger text-danger">Hapus</span> untuk menghapus arsip usang dan menghemat ruang penyimpanan server.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Proteksi Sebelum Restore:</strong> Proses restore akan menimpa data basis data aktif. Selalu buat backup baru sebelum menjalankan proses restore.</li>
                                <li class="mb-2"><strong>Rekomendasi Penyimpanan Luar (Offsite):</strong> Rutin unduh arsip backup ke penyimpanan cloud luar yang aman.</li>
                                <li><strong>Ketergantungan CLI MySQL:</strong> Pembuatan dump otomatis membutuhkan utilitas CLI MySQL (<code>mysqldump</code>) pada lingkungan server.</li>
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
<!--end::Modal - Petunjuk Operasional Backup & Restore Database-->
