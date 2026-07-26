<!--begin::Modal - Backup DB Operational Guide-->
<div class="modal fade" id="kt_modal_backup_db_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: Database Backup & Restore
                            @else
                                Petunjuk Operasional: Backup & Restore Database
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Operational guide for database dumps, downloading SQL archives, and database restoration.
                            @else
                                Panduan operasional pembuatan dump database, unduh arsip SQL, dan restore database.
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
                                <i class="ki-duotone ki-disk fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Disaster Recovery Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module handles system database disaster recovery and data retention. Administrators can generate timestamped SQL dump files, download compressed backup archives, restore the database state, or purge old backup files.
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
                                        <strong>Create New Database Backup:</strong> Click the <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-plus text-white me-1"><span class="path1"></span><span class="path2"></span></i> Buat Backup Baru</span> button to generate a fresh SQL dump archive.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Download Backup Archive:</strong> Click the <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-file-down me-1"><span class="path1"></span><span class="path2"></span></i> Unduh</span> button on any backup row to store the <code>.sql</code> or <code>.gz</code> file locally.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Restore Database State:</strong> Click the <span class="badge badge-light-warning text-warning px-2 py-1"><i class="ki-duotone ki-arrows-circle me-1"><span class="path1"></span><span class="path2"></span></i> Restore</span> button to roll back database tables to a selected backup point.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Delete Obsolete Backups:</strong> Click the trash button <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-trash me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Hapus</span> to remove outdated backup files and free up server storage.
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
                                <li><strong>Pre-Restore Safeguard:</strong> Performing a database restore replaces active table data. Always create a fresh backup before executing a restore operation.</li>
                                <li><strong>Offsite Storage Recommendation:</strong> Regularly download backup archives to secure offsite cloud storage.</li>
                                <li><strong>mysqldump Binary Requirement:</strong> Automated backup creation relies on MySQL CLI tools configured on the server environment.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-disk fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Pemulihan Bencana (Disaster Recovery)
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mengelola pemulihan bencana (disaster recovery) dan retensi data basis data sistem. Administrator dapat membuat arsip dump SQL berstempel waktu, mengunduh file backup terkompresi, melakukan pemulihan (restore) basis data, atau menghapus arsip lama.
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
                                        <strong>Buat Backup Database Baru:</strong> Klik tombol <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-plus text-white me-1"><span class="path1"></span><span class="path2"></span></i> Buat Backup Baru</span> untuk membuat arsip dump SQL terbaru.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Unduh Berkas Backup:</strong> Klik tombol <span class="badge badge-light-primary text-primary px-2 py-1"><i class="ki-duotone ki-file-down me-1"><span class="path1"></span><span class="path2"></span></i> Unduh</span> pada baris tabel untuk menyimpan berkas <code>.sql</code> atau <code>.gz</code> secara lokal.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Pemulihan (Restore) Database:</strong> Klik tombol <span class="badge badge-light-warning text-warning px-2 py-1"><i class="ki-duotone ki-arrows-circle me-1"><span class="path1"></span><span class="path2"></span></i> Restore</span> untuk mengembalikan data ke titik backup terpilih.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Hapus Berkas Lama:</strong> Klik tombol tempat sampah <span class="badge badge-light-danger text-danger px-2 py-1"><i class="ki-duotone ki-trash me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Hapus</span> untuk menghapus arsip backup usang dan menghemat ruang penyimpanan server.
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
                                <li><strong>Proteksi Sebelum Restore:</strong> Proses restore akan menimpa data basis data aktif. Selalu buat backup baru sebelum menjalankan proses restore.</li>
                                <li><strong>Rekomendasi Penyimpanan Luar (Offsite):</strong> Rutin unduh arsip backup ke penyimpanan cloud luar yang aman.</li>
                                <li><strong>Ketergantungan CLI MySQL:</strong> Pembuatan dump otomatis membutuhkan utilitas CLI MySQL (`mysqldump`) pada lingkungan server.</li>
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
<!--end::Modal - Backup DB Operational Guide-->
