<!--begin::Modal - Petunjuk Operasional Profil Aplikasi-->
<div class="modal fade" id="kt_modal_app_profil_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-setting-2 fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: App Profile & Branding' : 'Petunjuk Operasional: Pengaturan Profil Aplikasi' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'System identity, logo uploads, favicon, and global footer text management' : 'Panduan kelola identitas sistem, unggah logo, favicon, dan teks footer global' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Purpose
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>App Profile & Branding Module</strong> manages global application identity settings. Configurations stored here are cached globally and dynamically injected into page headers, browser tab titles, sidebar logos, login pages, and footer copyright statements.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Branding Assets & Properties
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>App Title & Short Name:</strong> Defines the application brand title rendered across the topbar and browser tab header.</li>
                                <li class="mb-2"><strong>Main & Mobile Logos:</strong> Light & dark theme logos (PNG/SVG, recommended 200x50px) displayed on the sidebar.</li>
                                <li><strong>Favicon Icon:</strong> Square <code>.ico</code> or <code>.png</code> icon (32x32px) displayed on browser tabs.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Update Identity Text:</strong> Enter the application name, developer name, and release year in the form input fields.</li>
                                <li class="mb-2"><strong>Select Branding Logos:</strong> Use the live image preview inputs to choose new logo image files.</li>
                                <li class="mb-2"><strong>Save Changes:</strong> Click <span class="badge badge-primary">Save Changes</span> to submit the form via AJAX.</li>
                                <li><strong>Verify Layout:</strong> Refresh or navigate to any page to view the updated branding.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Supported File Formats:</strong> Use PNG, SVG, JPG, or WEBP under 2MB for clear rendering.</li>
                                <li class="mb-2"><strong>Automatic Cache Invalidation:</strong> Saving updates purges the app profile cache instantly across all sessions.</li>
                                <li><strong>Fallback Vectors:</strong> If logo fields remain empty, default system branding vectors are used automatically.</li>
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
                                Gambaran Umum & Fungsi Modul
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Profil & Identitas Aplikasi</strong> mengelola konfigurasi identitas dan branding sistem terpusat. Pengaturan yang disimpan di sini di-cache secara global dan diinjeksikan secara dinamis ke header halaman, judul tab browser, logo sidebar, halaman login, serta teks hak cipta footer.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Aset & Komponen Branding
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Nama & Singkatan Aplikasi:</strong> Menentukan nama merek aplikasi yang tampil di topbar dan judul tab browser.</li>
                                <li class="mb-2"><strong>Logo Utama & Ringkas:</strong> Gambar logo mode terang & gelap (PNG/SVG, rekomendasi 200x50px) untuk navigasi sidebar.</li>
                                <li><strong>Favicon:</strong> Ikon persegi <code>.ico</code> atau <code>.png</code> (32x32px) yang muncul pada tab browser.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Alur Operasional Pengaturan Profil
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Perbarui Teks Identitas:</strong> Masukkan nama aplikasi, nama pengembang, dan tahun rilis pada kolom yang tersedia.</li>
                                <li class="mb-2"><strong>Pilih Berkas Logo:</strong> Gunakan input pratinjau gambar untuk memilih berkas logo baru.</li>
                                <li class="mb-2"><strong>Simpan Perubahan:</strong> Klik tombol <span class="badge badge-primary">Simpan Perubahan</span> untuk mengirimkan form via AJAX.</li>
                                <li><strong>Verifikasi Tampilan:</strong> Muat ulang halaman untuk melihat pembaruan identitas aplikasi.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Format & Ukuran Berkas:</strong> Gunakan format gambar PNG, SVG, JPG, atau WEBP di bawah 2MB agar tampilan tajam.</li>
                                <li class="mb-2"><strong>Pembersihan Cache Otomatis:</strong> Menyimpan perubahan akan langsung membersihkan cache profil aplikasi secara instan.</li>
                                <li><strong>Vektor Cadangan (Fallback):</strong> Jika logo dikosongkan, sistem akan menggunakan logo vektor bawaan secara otomatis.</li>
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
<!--end::Modal - Petunjuk Operasional Profil Aplikasi-->
