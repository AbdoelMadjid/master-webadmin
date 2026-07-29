<!-- Modal Petunjuk Operasional Slide Banner Beranda -->
<div class="modal fade" id="kt_modal_slide_banner_help" tabindex="-1" aria-hidden="true">
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
                        <i class="ki-duotone ki-picture fs-3x text-danger"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Homepage Slide Banner' : 'Petunjuk Operasional: Slide Banner Beranda' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Homepage Hero Carousel Slider Management Guide' : 'Panduan Pengelolaan Slider Carousel Utama di Bagian Atas Halaman Beranda' }}
                    </div>
                </div>

                <!-- 4-Card Box Sectioning -->
                <div class="d-flex flex-column gap-6">
                    @if(app()->getLocale() == 'en')
                        <!-- Section 1: Overview -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Overview & Purpose
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                The <strong>Homepage Slide Banner Manager</strong> allows administrators to easily customize the main hero carousel sliders displayed at the top of the website. If no custom banners are added or active, the system automatically falls back to default carousel slides so the website frontend never breaks.
                            </p>
                        </div>

                        <!-- Section 2: Architecture -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span></i>
                                Key Slide Attributes & Image Gallery Features
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>Title Prefix & Highlight:</strong> Allows split-color title formatting (e.g. "Welcome to" + "Our University").</li>
                                <li class="mb-2"><strong>Interactive Lightbox Gallery Modal:</strong> Clicking any image thumbnail in the table opens an interactive lightbox modal where you can slide left/right or use keyboard arrow keys to preview all full-size slide images.</li>
                                <li class="mb-2"><strong>Live Form Image Preview:</strong> Typing or modifying the image URL path in the form modal immediately renders a real-time live image preview.</li>
                                <li class="mb-2"><strong>Button Action & Slide Order:</strong> Optional call to action button link attached to the slide and custom sorting order.</li>
                                <li><strong>Bilingual Support:</strong> Full support for English and Indonesian titles and descriptions.</li>
                            </ul>
                        </div>

                        <!-- Section 3: Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Click <code>+ Add Banner</code> to open the slide creation modal form.</li>
                                <li class="mb-2">Enter slide titles, description, background image path, and button URL. Verify the live image preview.</li>
                                <li class="mb-2">Click any table image thumbnail to launch the <strong>Lightbox Gallery Modal</strong> and navigate slides using <code>&lt;</code> and <code>&gt;</code> arrows.</li>
                                <li class="mb-2">Set the <strong>Slide Order</strong> number to determine carousel slide sequence.</li>
                                <li class="mb-2">Save the form and refresh the public homepage to view live carousel slides.</li>
                                <li>Use the <strong>Status Switch</strong> to temporarily show/hide a banner slide.</li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                System Rules & Safeguards
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Deleting all custom slides safely restores default homepage theme slides.</li>
                                <li>High-resolution background images (e.g. 1920x1080) are recommended for optimal hero display across desktop screens.</li>
                            </ul>
                        </div>
                    @else
                        <!-- Section 1: Overview (ID) -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                Gambaran Umum & Tujuan Sistem
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Kelola Slide Banner Beranda</strong> memfasilitasi pengubahan gambar dan teks slider hero utama di bagian paling atas beranda website. Jika belum ada banner kustom yang dibuat atau aktif, sistem secara otomatis menampilkan slide bawaan tema secara aman.
                            </p>
                        </div>

                        <!-- Section 2: Architecture (ID) -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span></i>
                                Atribut Slide & Fitur Pratinjau Gambar
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>Awalan & Highlight Judul:</strong> Mendukung format dua warna judul (misal: "Selamat Datang di" + "Universitas Kami").</li>
                                <li class="mb-2"><strong>Galeri Pop-up Lightbox Modal:</strong> Mengklik thumbnail gambar di tabel akan membuka modal galeri interaktif untuk melihat gambar penuh dan menggeser slide ke kiri/kanan (`<` dan `>`) atau menggunakan tombol panah keyboard.</li>
                                <li class="mb-2"><strong>Pratinjau Gambar Real-Time:</strong> Mengisi atau merubah path/URL gambar pada formulir modal langsung menampilkan pratinjau (*live preview*) gambar secara instan.</li>
                                <li class="mb-2"><strong>Tombol Aksi & Urutan:</strong> Tombol opsional pengarah link dan penentuan urutan putar slide carousel.</li>
                                <li><strong>Dukungan Bilingual:</strong> Isian Bahasa Indonesia dan Bahasa Inggris untuk tampilan 100% bilingual.</li>
                            </ul>
                        </div>

                        <!-- Section 3: Workflow (ID) -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                Langkah Operasional Perangkat
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Klik <code>+ Tambah Banner</code> untuk membuka formulir modal pembuat slide baru.</li>
                                <li class="mb-2">Isi judul, deskripsi, path gambar background, dan link tombol. Periksa pratinjau gambar instan.</li>
                                <li class="mb-2">Klik thumbnail gambar pada tabel untuk membuka <strong>Galeri Modal Lightbox</strong> dan menggeser antar slide gambar menggunakan tombol <code>&lt;</code> dan <code>&gt;</code>.</li>
                                <li class="mb-2">Tentukan nomor <strong>Urutan Slide</strong> untuk urutan putar carousel.</li>
                                <li class="mb-2">Simpan data dan periksa halaman beranda website publik.</li>
                                <li>Gunakan <strong>Sakelar Status</strong> untuk menyembunyikan slide sementara tanpa menghapus data.</li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards (ID) -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                Aturan & Pengamanan Sistem
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Menghapus seluruh slide kustom secara otomatis mengembalikan slide carousel bawaan tema.</li>
                                <li>Disarankan mengunggah gambar latar beresolusi tinggi (misal: 1920x1080) untuk tampilan visual yang jernih di layar desktop.</li>
                            </ul>
                        </div>
                    @endif
                </div>

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
