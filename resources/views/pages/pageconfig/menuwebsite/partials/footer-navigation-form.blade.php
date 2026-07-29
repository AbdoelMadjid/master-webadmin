<div class="modal fade" id="kt_modal_footer_navigation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_footer_navigation_form" class="form" action="{{ route('pageconfig.menuwebsite.footer-navigation.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="method_field" value="POST">

                    <div class="mb-9 text-center">
                        <h1 class="mb-3" id="nav_modal_title">{{ app()->getLocale() == 'en' ? 'Add New Footer Navigation' : 'Tambah Navigasi Footer Baru' }}</h1>
                        <div class="text-muted fw-semibold fs-5">
                            {{ app()->getLocale() == 'en' ? 'Configure 4-column footer links (Future Students down to Campus Safety)' : 'Konfigurasi tautan navigasi 4 kolom di bagian footer bawah website' }}
                        </div>
                    </div>

                    <div class="fv-row mb-8">
                        <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Link to Main Navigation Item (Optional)' : 'Relasikan ke Item Navigasi Utama (Opsional)' }}</label>
                        <select class="form-select form-select-solid" name="main_navigation_id" id="nav_main_navigation_id">
                            <option value="">{{ app()->getLocale() == 'en' ? '-- Custom Link (No Relation) --' : '-- Link Custom (Tanpa Relasi) --' }}</option>
                            @foreach($mainNavigations as $mainNav)
                                <option value="{{ $mainNav->id }}" data-url="{{ $mainNav->url }}" data-title="{{ $mainNav->title }}" data-title-en="{{ $mainNav->title_en }}">
                                    {{ $mainNav->title }} ({{ $mainNav->url }})
                                </option>
                                @foreach($mainNav->children as $child)
                                    <option value="{{ $child->id }}" data-url="{{ $child->url }}" data-title="{{ $child->title }}" data-title-en="{{ $child->title_en }}">
                                        &nbsp;&nbsp;&nbsp;&nbsp;↳ {{ $child->title }} ({{ $child->url }})
                                    </option>
                                @endforeach
                            @endforeach
                        </select>
                        <div class="text-muted fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Selecting a main navigation item auto-populates title and URL.' : 'Memilih item navigasi utama akan otomatis mengisi judul dan URL target.' }}</div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Footer Column (1 - 4)' : 'Kolom Footer (1 - 4)' }}</label>
                            <select class="form-select form-select-solid" name="column" id="nav_column" required>
                                <option value="1">Kolom 1 (Future Students, Alumni, dll)</option>
                                <option value="2">Kolom 2 (News, Research, Academics, dll)</option>
                                <option value="3">Kolom 3 (Contacts, Careers, Privacy, dll)</option>
                                <option value="4">Kolom 4 (Campus Maps, Safety, dll)</option>
                            </select>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'URL / Route Name' : 'URL / Nama Route' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="website.future-students atau /halaman" name="url" id="nav_url" required />
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Title (Indonesian)' : 'Judul (Bahasa Indonesia)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Contoh: Calon Mahasiswa" name="title" id="nav_title" required />
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Title (English)' : 'Judul (Bahasa Inggris)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Example: Future Students" name="title_en" id="nav_title_en" />
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Target Link' : 'Target Link' }}</label>
                            <select class="form-select form-select-solid" name="target" id="nav_target">
                                <option value="_self">_self (Halaman Saat Ini)</option>
                                <option value="_blank">_blank (Tab Baru)</option>
                            </select>
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Sort Order' : 'Urutan Tampil' }}</label>
                            <input type="number" class="form-control form-control-solid" name="order" id="nav_order" value="0" min="0" required />
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row d-flex align-items-center">
                            <div class="form-check form-switch form-check-custom form-check-solid me-6">
                                <input class="form-check-input" type="checkbox" name="is_active" id="nav_is_active" value="1" checked />
                                <label class="form-check-label fw-semibold text-gray-700" for="nav_is_active">
                                    {{ app()->getLocale() == 'en' ? 'Active Status' : 'Status Aktif' }}
                                </label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" name="is_external" id="nav_is_external" value="1" />
                                <label class="form-check-label fw-semibold text-gray-700" for="nav_is_external">
                                    {{ app()->getLocale() == 'en' ? 'External Link' : 'Tautan Eksternal' }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-10">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                        </button>
                        <button type="submit" class="btn btn-primary" id="kt_modal_footer_navigation_submit">
                            <span class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Navigation' : 'Simpan Navigasi' }}</span>
                            <span class="indicator-progress">{{ app()->getLocale() == 'en' ? 'Please wait...' : 'Harap tunggu...' }}
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
