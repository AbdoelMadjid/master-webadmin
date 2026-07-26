<!--begin::Modal - Akses Role Operational Guide-->
<div class="modal fade" id="kt_modal_akses_role_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: Role Access Rights Matrix
                            @else
                                Petunjuk Operasional: Matriks Hak Akses Role
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Complete operational guide for managing the role permission matrix.
                            @else
                                Panduan operasional lengkap pengolahan matriks izin fitur per role pengguna.
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
                                <i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Matrix Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                The <strong>Role Access Rights Matrix</strong> page allows administrators to visually configure feature access for each user role. Every checkbox in the matrix corresponds to a specific Spatie permission attached to the selected role.
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
                                        <strong>Select Target Role:</strong> Click a role item from the left sidebar list (e.g. <code>Master</code>, <code>Admin</code>, <code>User</code>) to load its current active permissions.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Toggle Individual Permissions:</strong> Check or uncheck individual CRUD permissions (<code>Create</code>, <code>Read</code>, <code>Update</code>, <code>Delete</code>) per module row.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Module Row Shortcut:</strong> Use the row toggle switch on the left of each module row to select or deselect all CRUD permissions for that module in 1 click.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Save Matrix Changes:</strong> Click the <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-check-square text-white me-1"></i> Save Changes</span> button at the top or bottom of the matrix table to persist updates.
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
                                <li><strong>Master Protection:</strong> Core permissions for the <code>Master</code> superadmin role are protected against accidental lockout.</li>
                                <li><strong>Live Refresh:</strong> Permission matrix updates take effect immediately for active user sessions upon page refresh.</li>
                                <li><strong>Search Filter:</strong> Use the matrix search box to quickly locate specific module names.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Matriks Role
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Halaman <strong>Matriks Hak Akses Role</strong> memungkinkan administrator mengatur izin akses fitur untuk setiap role pengguna secara visual. Setiap centang pada matriks terhubung langsung dengan permission Spatie pada role terpilih.
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
                                        <strong>Pilih Role Target:</strong> Klik item role di daftar sidebar kiri (contoh: <code>Master</code>, <code>Admin</code>, <code>User</code>) untuk memuat matriks perizinan aktif.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Centang Izin Individual:</strong> Centang atau hapus centang izin CRUD (<code>Create</code>, <code>Read</code>, <code>Update</code>, <code>Delete</code>) pada tiap baris modul.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Pintas Baris Modul:</strong> Gunakan switch toggle di sebelah kiri baris modul untuk memilih atau membatalkan seluruh izin CRUD modul tersebut dalam 1 klik.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Simpan Perubahan Matriks:</strong> Klik tombol <span class="badge badge-primary px-2 py-1"><i class="ki-duotone ki-check-square text-white me-1"></i> Simpan Perubahan</span> di bagian atas atau bawah tabel matriks.
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
                                <li><strong>Proteksi Master:</strong> Izin utama untuk role <code>Master</code> dilindungi agar tidak dapat dimatikan secara tidak sengaja.</li>
                                <li><strong>Pembaruan Real-Time:</strong> Perubahan matriks perizinan langsung berlaku bagi sesi pengguna aktif setelah halaman diperbarui.</li>
                                <li><strong>Pencarian Cepat:</strong> Gunakan kotak pencarian matriks untuk menemukan nama modul secara cepat.</li>
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
<!--end::Modal - Akses Role Operational Guide-->
