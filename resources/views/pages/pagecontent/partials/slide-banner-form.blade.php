<!-- Modal Add / Edit Slide Banner -->
<div class="modal fade" id="kt_modal_slide_banner" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_slide_banner_form" class="form" action="#">
                    @csrf
                    <input type="hidden" id="banner_id" name="id">

                    <div class="mb-8 text-center">
                        <h1 class="mb-3 text-gray-900 fw-bold" id="bannerModalTitle">
                            {{ app()->getLocale() == 'en' ? 'Add Homepage Slide Banner' : 'Tambah Slide Banner Beranda' }}
                        </h1>
                        <div class="text-muted fw-semibold fs-6">
                            {{ app()->getLocale() == 'en' ? 'Configure carousel slider content rendered at top of homepage.' : 'Atur isi slider carousel yang dirender di bagian atas beranda.' }}
                        </div>
                    </div>

                    <!-- Title Prefix ID & EN -->
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Title Prefix (ID)' : 'Awalan Judul (ID)' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="title_prefix" id="banner_title_prefix" placeholder="e.g. Selamat Datang di" />
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Title Prefix (EN)' : 'Awalan Judul (EN)' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="title_prefix_en" id="banner_title_prefix_en" placeholder="e.g. Welcome to" />
                        </div>
                    </div>

                    <!-- Title Highlight ID & EN -->
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>{{ app()->getLocale() == 'en' ? 'Highlighted Title (ID)' : 'Judul Sorot/Highlight (ID)' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="title_highlight" id="banner_title_highlight" placeholder="e.g. Universitas Negeri" required />
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Highlighted Title (EN)' : 'Judul Sorot/Highlight (EN)' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="title_highlight_en" id="banner_title_highlight_en" placeholder="e.g. State University" />
                        </div>
                    </div>

                    <!-- Description ID & EN -->
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Description (ID)' : 'Deskripsi (ID)' }}</span>
                            </label>
                            <textarea class="form-control form-control-solid" name="description" id="banner_description" rows="3" placeholder="Deskripsi singkat slide banner"></textarea>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Description (EN)' : 'Deskripsi (EN)' }}</span>
                            </label>
                            <textarea class="form-control form-control-solid" name="description_en" id="banner_description_en" rows="3" placeholder="Short description of slide banner"></textarea>
                        </div>
                    </div>

                    <!-- Background Image URL -->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>{{ app()->getLocale() == 'en' ? 'Background Image URL / Path' : 'URL Gambar Background Banner' }}</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" name="image_url" id="banner_image_url" placeholder="assets/img-temp/1920x1080/img5.jpg" />
                        <span class="fs-8 text-muted mt-1">{{ app()->getLocale() == 'en' ? 'Leave empty to use theme default background image.' : 'Biarkan kosong untuk menggunakan gambar background default tema.' }}</span>

                        <!-- Live Image Preview -->
                        <div class="mt-3 text-center" id="banner_image_preview_wrapper" style="display: none;">
                            <div class="border rounded p-2 bg-light d-inline-block">
                                <img id="banner_image_preview" src="" alt="Banner Preview" style="max-height: 160px; max-width: 100%; object-fit: cover;" class="rounded shadow-xs" />
                            </div>
                        </div>
                    </div>

                    <!-- Button Text & URL -->
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Button Text (ID)' : 'Teks Tombol (ID)' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="button_text" id="banner_button_text" placeholder="e.g. Selengkapnya" />
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Button URL' : 'URL Link Tombol' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="button_url" id="banner_button_url" placeholder="#" />
                        </div>
                    </div>

                    <!-- Order & Active status -->
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Slide Order' : 'Urutan Slide' }}</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" name="order" id="banner_order" placeholder="1" min="0" />
                        </div>
                        <div class="col-md-6 d-flex align-items-center pt-6">
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="is_active" id="banner_is_active" value="1" checked="checked" />
                                <span class="form-check-label fs-6 fw-semibold ms-3">{{ app()->getLocale() == 'en' ? 'Active Visible' : 'Aktif Tampil' }}</span>
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">
                            {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                        </button>
                        <button type="submit" id="kt_modal_slide_banner_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Slide Banner' : 'Simpan Slide Banner' }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
