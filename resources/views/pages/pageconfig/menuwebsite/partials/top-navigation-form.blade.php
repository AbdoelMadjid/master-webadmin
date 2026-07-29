<div class="modal fade" id="kt_modal_top_navigation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_top_navigation_form" class="form" action="{{ route('pageconfig.menuwebsite.top-navigation.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="method_field" value="POST">

                    <div class="mb-9 text-center">
                        <h1 class="mb-3" id="nav_modal_title">{{ app()->getLocale() == 'en' ? 'Add New Top Navigation' : 'Tambah Navigasi Atas Baru' }}</h1>
                        <div class="text-muted fw-semibold fs-5">
                            {{ app()->getLocale() == 'en' ? 'Configure header topbar links (Campus Life down to Contacts)' : 'Konfigurasi tautan navigasi baris atas header website' }}
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Title (Indonesian)' : 'Judul (Bahasa Indonesia)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Contoh: Kehidupan Kampus" name="title" id="nav_title" required />
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Title (English)' : 'Judul (Bahasa Inggris)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Example: Campus Life" name="title_en" id="nav_title_en" />
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'URL / Route Name' : 'URL / Nama Route' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="website.campus-life atau /halaman" name="url" id="nav_url" required />
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Parent Item' : 'Induk Navigasi' }}</label>
                            <select class="form-select form-select-solid" name="parent_id" id="nav_parent_id">
                                <option value="">{{ app()->getLocale() == 'en' ? '-- Top Level Item --' : '-- Menu Tingkat Atas (Tanpa Induk) --' }}</option>
                                @foreach($parentNavigations as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->title }}</option>
                                @endforeach
                            </select>
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
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Icon Class (Keenicon / FA)' : 'Class Icon (Keenicon / FA)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="ki-duotone ki-home" name="icon" id="nav_icon" />
                        </div>
                    </div>

                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Sort Order' : 'Urutan Tampil' }}</label>
                            <input type="number" class="form-control form-control-solid" name="order" id="nav_order" value="0" min="0" required />
                        </div>
                        <div class="col-md-6 fv-row d-flex align-items-center pt-8">
                            <div class="form-check form-switch form-check-custom form-check-solid me-6">
                                <input class="form-check-input" type="checkbox" name="is_active" id="nav_is_active" value="1" checked />
                                <label class="form-check-label fw-semibold text-gray-700" for="nav_is_active">
                                    {{ app()->getLocale() == 'en' ? 'Active' : 'Status Aktif' }}
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
                        <button type="submit" class="btn btn-primary" id="kt_modal_top_navigation_submit">
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
