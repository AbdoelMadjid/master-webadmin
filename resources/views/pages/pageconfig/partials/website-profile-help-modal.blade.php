<div class="modal fade" id="kt_modal_website_profile_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <!-- Modal Header -->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!-- Branding Header -->
                <div class="text-center mb-8">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-question fs-3x text-danger"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Website Profile' : 'Petunjuk Operasional: Profil Website' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'System guidelines for managing website logo, app name, established year, footer address & social media links' : 'Panduan sistem & pengoperasian identitas logo website, nama aplikasi, tahun berdiri, alamat footer, dan tautan sosial media' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!-- English Operational Content -->
                    <div class="d-flex flex-column gap-6">
                        <!-- Section 1: Overview & Purpose -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                1. System Overview & Purpose
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                The <strong>Website Profile Module</strong> provides centralized administration for
                                global website branding assets. Changes made here instantly update the header logo next
                                to Main Navigation, the application/university name, established year, footer location
                                address, and official social media tags/links displayed in the public footer.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span></i>
                                2. Architecture & Sub-Tab Modules
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Website Identity & Logo:</strong> Manage main brand logo, mini mobile logo,
                                    website name (ID & EN), and established year.
                                </li>
                                <li class="mb-2">
                                    <strong>Footer Address & Copyright:</strong> Configure location address (ID & EN),
                                    copyright statement text, official contact phone & email.
                                </li>
                                <li class="mb-2">
                                    <strong>Social Media Links & Visibility Toggles:</strong> Configure official target
                                    URLs for Twitter/X, Facebook, Instagram, YouTube, LinkedIn, and toggle individual
                                    platform visibility switches ON or OFF for footer display.
                                </li>
                                <li class="mb-2">
                                    <strong>Website Template Selection:</strong> Select and switch the active layout
                                    template (default standard: <em>Unify Education</em>). Future templates
                                    automatically bind to site data.
                                </li>
                                <li>
                                    <strong>Live Brand Preview:</strong> Real-time visual simulation of the header
                                    navbar logo, footer address, and social media icon badges.
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3: Step-by-Step Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                3. Step-by-Step Operational Workflow
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Updating Logo & Name:</strong> Go to <span
                                        class="badge badge-primary">Website Identity & Logo</span> tab, upload PNG/SVG
                                    logo files, enter the website name, and specify the established year.
                                </li>
                                <li class="mb-2">
                                    <strong>Updating Address & Copyright:</strong> Open <span
                                        class="badge badge-info">Footer Address & Copyright</span> tab, update the
                                    address and copyright text in both Indonesian and English.
                                </li>
                                <li class="mb-2">
                                    <strong>Managing Social Media Tags & Links:</strong> Open <span
                                        class="badge badge-warning">Social Media Links</span> tab, input target URLs for
                                    official accounts (Twitter/X, Facebook, Instagram, YouTube, LinkedIn), toggle
                                    individual platform switches ON or OFF via AJAX, and click <span
                                        class="badge badge-primary">Save Social Media Settings</span>.
                                </li>
                                <li>
                                    <strong>Saving & Verifying:</strong> Click <span
                                        class="badge badge-success">Save</span> and check the <span
                                        class="badge badge-secondary">Live Brand Preview</span> tab or refresh the
                                    public website.
                                </li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards & System Rules -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                4. Safeguards & System Rules
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Table Naming Rule:</strong> Profile data is stored in the
                                    <code>web_profiles</code> database table.
                                </li>
                                <li class="mb-2">
                                    <strong>Social Media Data Integrity:</strong> Platform links and visibility states
                                    reside in the structured <code>social_links</code> JSON column with instant AJAX
                                    status toggles.
                                </li>
                                <li class="mb-2">
                                    <strong>Image Upload Safeguards:</strong> Supported image formats include PNG, JPG,
                                    SVG, WEBP up to 2MB.
                                </li>
                                <li>
                                    <strong>Fallback Integrity:</strong> If no custom logo is uploaded, system
                                    automatically falls back to default assets.
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!-- Indonesian Operational Content -->
                    <div class="d-flex flex-column gap-6">
                        <!-- Section 1: Overview & Purpose -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                1. Ringkasan & Tujuan Sistem
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Modul Profil Website</strong> menyediakan pengelolaan terpusat untuk identitas
                                branding website. Perubahan di sini secara otomatis memperbarui logo di samping Navigasi
                                Utama, nama kampus/aplikasi, tahun berdiri, alamat footer, dan tautan/tag sosial media
                                resmi di footer website.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-plus fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span></i>
                                2. Arsitektur & Modul Sub-Tab
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Identitas & Logo Website:</strong> Mengatur logo utama brand, logo mini
                                    mobile, nama website (ID & EN), serta tahun berdiri.
                                </li>
                                <li class="mb-2">
                                    <strong>Alamat, Kontak & Copyright Footer:</strong> Mengatur alamat lokasi (ID &
                                    EN), teks hak cipta, nomor telepon & email resmi.
                                </li>
                                <li class="mb-2">
                                    <strong>Tautan & Sakelar Sosial Media Website:</strong> Mengatur URL target akun
                                    resmi (Twitter/X, Facebook, Instagram, YouTube, LinkedIn) serta sakelar visibilitas
                                    (tampil/sembunyi) per platform sosial media di footer.
                                </li>
                                <li class="mb-2">
                                    <strong>Pilihan Template Website:</strong> Memilih dan mengatur template tampilan
                                    aktif (standar terpilih bawaan: <em>Unify Education</em>). Template baru di masa
                                    depan akan otomatis terhubung dengan data website.
                                </li>
                                <li>
                                    <strong>Preview Live Tampilan Logo & Footer:</strong> Simulasi visual tampilan logo
                                    di navbar atas, alamat footer, dan badge ikon sosial media.
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3: Step-by-Step Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                3. Operasional Langkah Demi Langkah
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Mengubah Logo & Nama:</strong> Buka tab <span
                                        class="badge badge-primary">Identitas & Logo Website</span>, upload file logo
                                    PNG/SVG, isikan nama website dan tahun berdiri.
                                </li>
                                <li class="mb-2">
                                    <strong>Mengubah Alamat & Copyright:</strong> Buka tab <span
                                        class="badge badge-info">Alamat, Kontak & Copyright Footer</span>, perbarui
                                    alamat dan teks copyright versi Indonesia dan Inggris.
                                </li>
                                <li class="mb-2">
                                    <strong>Mengatur Tautan & Tag Sosial Media:</strong> Buka tab <span
                                        class="badge badge-warning">Sosial Media Website</span>, masukkan URL akun
                                    resmi (Twitter/X, Facebook, Instagram, YouTube, LinkedIn), atur sakelar visibilitas
                                    (Aktif/Nonaktif) via AJAX, lalu klik <span class="badge badge-primary">Simpan
                                        Pengaturan Sosial Media</span>.
                                </li>
                                <li>
                                    <strong>Menyimpan & Memeriksa:</strong> Klik tombol <span
                                        class="badge badge-success">Simpan</span> dan periksa tab <span
                                        class="badge badge-secondary">Preview Live</span> atau refresh website publik.
                                </li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards & System Rules -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                4. Aturan Sistem & Proteksi Data
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Penamaan Tabel:</strong> Data profil website tersimpan pada tabel database
                                    <code>web_profiles</code>.
                                </li>
                                <li class="mb-2">
                                    <strong>Integritas Data Sosial Media:</strong> Tautan platform dan status
                                    visibilitas tersimpan terstruktur dalam kolom JSON <code>social_links</code> dengan
                                    pengubahan sakelar instan via AJAX.
                                </li>
                                <li class="mb-2">
                                    <strong>Proteksi Upload File:</strong> Format gambar yang didukung adalah PNG, JPG,
                                    SVG, WEBP hingga maksimal 2MB.
                                </li>
                                <li>
                                    <strong>Integritas Fallback:</strong> Jika belum ada logo custom yang di-upload,
                                    sistem otomatis menggunakan logo bawaan.
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Dismiss Button -->
                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
