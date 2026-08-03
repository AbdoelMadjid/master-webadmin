<!--begin::Modal - Add/Edit Menu Dinamis-->
<div class="modal fade" id="kt_modal_menu" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <form id="kt_form_menu" class="form" action="{{ route('appsupport.menu.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="menu_form_method" value="POST" />
                    <input type="hidden" name="id" id="menu_id" value="" />

                    <div class="mb-10 text-center">
                        <h1 class="mb-3" id="modal_menu_title">
                            {{ app()->getLocale() == 'en' ? 'Add New Menu' : 'Tambah Menu Baru' }}
                        </h1>
                        <div class="text-muted fw-semibold fs-6">
                            {{ app()->getLocale() == 'en' ? 'Manage sidebar menu structure, route link, hierarchy, and icon styling' : 'Kelola struktur menu sidebar, link route, hierarki induk, dan konfigurasi ikon' }}
                        </div>
                    </div>

                    <!--begin::Input group - Nama Menu-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                            <span>{{ app()->getLocale() == 'en' ? 'Menu Name' : 'Nama Menu' }}</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Contoh: Manajemen User, Data Referensi" name="name" id="menu_name" required />
                    </div>

                    <!--begin::Input group - Route / URL-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                            <span>{{ app()->getLocale() == 'en' ? 'Route / URL' : 'Route / URL' }}</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="{{ app()->getLocale() == 'en' ? 'Relative URL path or full route name (e.g. appsupport/menu, profil-pengguna)' : 'Path URL relatif atau nama route (contoh: appsupport/menu, profil-pengguna)' }}">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Contoh: appsupport/menu, dashboard, # (jika hanya parent)" name="url" id="menu_url" required />
                    </div>

                    <div class="row g-6 mb-6">
                        <!--begin::Col - Kategori-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Category' : 'Kategori' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" list="menu_category_list" placeholder="Contoh: Main Menu, System" name="category" id="menu_category" />
                            <datalist id="menu_category_list">
                                @if(isset($categories))
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat }}">
                                    @endforeach
                                @endif
                            </datalist>
                            <span class="text-muted fs-8 mt-1">{{ app()->getLocale() == 'en' ? 'Type or select category group.' : 'Ketik atau pilih grup kategori.' }}</span>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col - Parent Menu-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Parent Menu' : 'Menu Induk (Parent)' }}</span>
                            </label>
                            <select class="form-select form-select-solid" name="main_menu_id" id="menu_main_menu_id">
                                <option value="">{{ app()->getLocale() == 'en' ? '-- Top Level (No Parent) --' : '-- Menu Utama (Tanpa Parent) --' }}</option>
                                @if(isset($allMenus))
                                    @foreach ($allMenus as $parent)
                                        @php
                                            $depth = $parent->depth ?? 0;
                                            $prefix = '';
                                            if ($depth == 1) {
                                                $prefix = '└─ ';
                                            } elseif ($depth >= 2) {
                                                $prefix = '└── ';
                                            }
                                        @endphp
                                        <option value="{{ $parent->id }}" data-depth="{{ $depth }}">
                                            {{ $prefix }}{{ $parent->name }} ({{ $parent->category ?? 'Tanpa Kategori' }})
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row g-6 mb-6">
                        <!--begin::Col - Icon Class-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Keenicon Class' : 'Class Ikon Keenicon' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Contoh: ki-duotone ki-element-11" name="icon" id="menu_icon" />
                            <span class="text-muted fs-8 mt-1">{{ app()->getLocale() == 'en' ? 'e.g. ki-duotone ki-setting-2' : 'Contoh: ki-duotone ki-setting-2' }}</span>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col - Path Count & Order-->
                        <div class="col-md-6 fv-row">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>{{ app()->getLocale() == 'en' ? 'Paths Count' : 'Jumlah Path' }}</span>
                                    </label>
                                    <input type="number" min="0" max="10" class="form-control form-control-solid" placeholder="0" name="paths" id="menu_paths" value="0" />
                                </div>
                                <div class="col-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>{{ app()->getLocale() == 'en' ? 'Order' : 'Urutan' }}</span>
                                    </label>
                                    <input type="number" min="0" class="form-control form-control-solid" placeholder="0" name="orders" id="menu_orders" value="0" />
                                </div>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <!--begin::Input group - Status Keaktifan-->
                    <div class="d-flex flex-stack mb-8">
                        <div class="me-5">
                            <label class="fs-6 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Active Status' : 'Status Keaktifan' }}</label>
                            <div class="fs-7 text-muted">{{ app()->getLocale() == 'en' ? 'Active menu items will be displayed in the sidebar' : 'Menu aktif akan ditampilkan pada sidebar navigasi' }}</div>
                        </div>
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="active" id="menu_active" value="1" checked />
                            <span class="form-check-label fw-semibold text-gray-800">{{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}</span>
                        </label>
                    </div>

                    <!--begin::Actions-->
                    <div class="text-center pt-3">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                        </button>
                        <button type="submit" class="btn btn-primary" id="btn_submit_menu">
                            <span class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Menu' : 'Simpan Menu' }}</span>
                            <span class="indicator-progress">
                                {{ app()->getLocale() == 'en' ? 'Please wait...' : 'Memproses...' }}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
            <!--end::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - Add/Edit Menu Dinamis-->
