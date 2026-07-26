<!--begin::Modal - App Profil Operational Guide-->
<div class="modal fade" id="kt_modal_app_profil_help" tabindex="-1" aria-hidden="true">
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
                                Operational Guide: App Profile & Branding Settings
                            @else
                                Petunjuk Operasional: Pengaturan Profil Aplikasi
                            @endif
                        </h3>
                        <span class="text-muted fs-7">
                            @if(app()->getLocale() == 'en')
                                Guide for managing system identity, logos, favicons, and global footer text.
                            @else
                                Panduan operasional identitas sistem, logo, favicon, dan teks footer global.
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
                                <i class="ki-duotone ki-setting-2 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Global App Settings Architecture
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                This module handles system branding configurations. Settings stored here are cached globally and injected into the main layout header, tab titles, sidebar branding, login page identity, and footer copyright text.
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
                                        <strong>App Name & Title:</strong> Specify the main application title and browser tab brand text in the <code>App Name</code> field.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Upload Brand Logos:</strong> Upload light & dark theme logos (PNG/SVG, recommended size 200x50px) for sidebar header branding.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Upload Favicon:</strong> Upload a square <code>.ico</code> or <code>.png</code> favicon (32x32px) to render in browser tab headers.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Footer & Copyright Text:</strong> Customize global footer copyright text, version details, and developer credits.
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
                                <li><strong>Format & File Size:</strong> Use transparent PNG/SVG images under 2MB for logos to ensure crisp rendering.</li>
                                <li><strong>Real-time Layout Update:</strong> Saving changes purges the global app profile cache instantly across all user sessions.</li>
                                <li><strong>Fallback Safety:</strong> If logo fields are left empty, default system branding vectors are rendered smoothly.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--=================== INDONESIAN CONTENT ===================-->
                    <!-- Section 1: Overview -->
                    <div class="card bg-light-primary border border-primary border-opacity-20 mb-5">
                        <div class="card-body py-4">
                            <h4 class="fw-bold text-primary mb-2">
                                <i class="ki-duotone ki-setting-2 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Overview & Arsitektur Profil Aplikasi
                            </h4>
                            <p class="text-gray-700 fs-7 mb-0">
                                Modul ini mengelola konfigurasi identitas dan branding sistem. Pengaturan yang disimpan di sini dicache secara global dan diinjeksikan ke header tata letak utama, judul tab browser, branding sidebar, halaman login, serta teks hak cipta footer.
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
                                        <strong>Nama & Judul Aplikasi:</strong> Isikan nama aplikasi utama dan teks merek pada kolom <code>Nama Aplikasi</code>.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">2</span>
                                    <div>
                                        <strong>Unggah Logo Aplikasi:</strong> Unggah gambar logo untuk mode terang & gelap (PNG/SVG, rekomendasi 200x50px) untuk branding header sidebar.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">3</span>
                                    <div>
                                        <strong>Unggah Favicon:</strong> Unggah ikon <code>.ico</code> atau <code>.png</code> persegi (32x32px) untuk ditampilkan pada tab browser.
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <span class="badge badge-light-primary fw-bold me-2">4</span>
                                    <div>
                                        <strong>Teks Footer & Hak Cipta:</strong> Sesuaikan teks hak cipta footer global, rincian versi, dan kredit pengembang.
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
                                <li><strong>Format & Ukuran Berkas:</strong> Gunakan gambar PNG/SVG transparan di bawah 2MB untuk logo agar tampilan tajam.</li>
                                <li><strong>Pembaruan Real-Time:</strong> Menyimpan perubahan akan langsung membersihkan cache profil aplikasi secara instan.</li>
                                <li><strong>Fallback Aman:</strong> Jika logo dikosongkan, sistem akan otomatis menggunakan vektor branding bawaan secara mulus.</li>
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
<!--end::Modal - App Profil Operational Guide-->
