<div class="modal fade" id="kt_modal_main_navigation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <form id="kt_modal_main_navigation_form" class="form" action="{{ route('pageconfig.menuwebsite.main-navigation.store') }}" method="POST">
                @csrf
                <input type="hidden" name="_method" id="method_field" value="POST">

                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <div class="mb-8 text-center">
                        <h1 class="mb-3 text-gray-900 fw-bold" id="nav_modal_title">
                            {{ app()->getLocale() == 'en' ? 'Add New Navigation Item' : 'Tambah Navigasi Baru' }}
                        </h1>
                        <div class="text-muted fw-semibold fs-6">
                            {{ app()->getLocale() == 'en' ? 'Configure website main menu titles, target URLs, and mega menu columns.' : 'Atur judul menu website, URL/Route tujuan, dan kolom mega menu.' }}
                        </div>
                    </div>

                    <!-- Row 1: Title ID & Title EN -->
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Title (Indonesian)' : 'Judul Navigasi (ID)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Contoh: Program Studi / Alumni" name="title" id="nav_title" required />
                        </div>
                        <div class="col-md-6">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Title (English)' : 'Judul Navigasi (EN)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Example: Programs / Alumni" name="title_en" id="nav_title_en" />
                        </div>
                    </div>

                    <!-- Row 2: URL/Route & Menu Type -->
                    <div class="row g-5 mb-5">
                        <div class="col-md-7">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'URL / Route Name' : 'URL Target / Nama Route' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="website.alumni atau /alumni atau #" name="url" id="nav_url" required />
                            <div class="form-text fs-8 text-muted">Bisa berupa nama route (contoh: <code>website.programs</code>) atau URL (<code>https://...</code>).</div>
                        </div>
                        <div class="col-md-5">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Menu Type' : 'Tipe Menu' }}</label>
                            <select name="type" id="nav_type" class="form-select form-select-solid" required>
                                <option value="link">Link Standar</option>
                                <option value="mega_menu">Container Mega Menu</option>
                                <option value="dropdown">Dropdown Biasa</option>
                                <option value="header">Header Sub-Section</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 3: Parent & Mega Column -->
                    <div class="row g-5 mb-5">
                        <div class="col-md-7">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Parent Navigation' : 'Induk Menu (Parent)' }}</label>
                            <select name="parent_id" id="nav_parent_id" class="form-select form-select-solid">
                                <option value="">-- {{ app()->getLocale() == 'en' ? 'Induk Utama (Root)' : 'Induk Utama (Root Level)' }} --</option>
                                @foreach($parentNavigations as $pNav)
                                    <option value="{{ $pNav->id }}">{{ $pNav->title }} ({{ $pNav->type }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Mega Menu Column' : 'Kolom Mega Menu' }}</label>
                            <select name="mega_menu_column" id="nav_mega_menu_column" class="form-select form-select-solid" required>
                                <option value="1">Kolom 1</option>
                                <option value="2">Kolom 2</option>
                                <option value="3">Kolom 3</option>
                                <option value="4">Kolom 4</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 4: Sort Order & Target -->
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Sort Order' : 'Urutan Tampil (Order)' }}</label>
                            <input type="number" class="form-control form-control-solid" name="order" id="nav_order" value="1" min="0" required />
                        </div>
                        <div class="col-md-6">
                            <label class="required fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Link Target' : 'Target Pembukaan Link' }}</label>
                            <select name="target" id="nav_target" class="form-select form-select-solid" required>
                                <option value="_self">Tab Sama (_self)</option>
                                <option value="_blank">Tab Baru (_blank)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 5: Icon Class & Badge -->
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Icon Class (Keenicons)' : 'Kelas Ikon (Keenicons/FontAwesome)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="ki-duotone ki-element-11" name="icon" id="nav_icon" />
                        </div>
                        <div class="col-md-6">
                            <label class="fs-6 fw-semibold mb-2">{{ app()->getLocale() == 'en' ? 'Badge Text (Optional)' : 'Label Badge (Opsional)' }}</label>
                            <input type="text" class="form-control form-control-solid" placeholder="HOT / NEW" name="badge" id="nav_badge" />
                        </div>
                    </div>

                    <!-- Row 6: Checkboxes Status & External -->
                    <div class="d-flex align-items-center gap-5 mt-6 p-4 rounded bg-light-primary border border-primary">
                        <div class="form-check form-switch form-check-custom form-check-solid me-5">
                            <input class="form-check-input h-20px w-30px" type="checkbox" name="is_active" id="nav_is_active" value="1" checked />
                            <label class="form-check-label fw-bold text-gray-800" for="nav_is_active">
                                {{ app()->getLocale() == 'en' ? 'Active Status' : 'Status Aktif' }}
                            </label>
                        </div>
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input h-20px w-30px" type="checkbox" name="is_external" id="nav_is_external" value="1" />
                            <label class="form-check-label fw-bold text-gray-800" for="nav_is_external">
                                {{ app()->getLocale() == 'en' ? 'External URL' : 'Tautan Eksternal' }}
                            </label>
                        </div>
                    </div>

                    <div class="text-center pt-8">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}</button>
                        <button type="submit" class="btn btn-primary" id="kt_modal_main_navigation_submit">
                            <span class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Navigation' : 'Simpan Navigasi' }}</span>
                            <span class="indicator-progress">
                                {{ app()->getLocale() == 'en' ? 'Please wait...' : 'Harap tunggu...' }}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
