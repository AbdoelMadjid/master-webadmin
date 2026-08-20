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

                    <!--begin::Input group - Nama Menu ID & EN-->
                    <div class="row g-6 mb-6">
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>{{ app()->getLocale() == 'en' ? 'Menu Name (ID)' : 'Nama Menu (ID)' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid"
                                placeholder="Contoh: Manajemen User, Data Referensi" name="name" id="menu_name"
                                required />
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Menu Name (EN)' : 'Nama Menu (EN)' }}</span>
                                <span class="ms-1" data-bs-toggle="tooltip"
                                    title="{{ app()->getLocale() == 'en' ? 'English menu title translation' : 'Translasi judul menu bahasa Inggris' }}">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-solid"
                                placeholder="Contoh: User Management, Reference Data" name="title_en"
                                id="menu_title_en" />
                        </div>
                    </div>

                    <!--begin::Input group - Route / URL-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                            <span>{{ app()->getLocale() == 'en' ? 'Route / URL' : 'Route / URL' }}</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                title="{{ app()->getLocale() == 'en' ? 'Relative URL path or full route name (e.g. appsupport/menu, profil-pengguna)' : 'Path URL relatif atau nama route (contoh: appsupport/menu, profil-pengguna)' }}">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Contoh: appsupport/menu, dashboard, # (jika hanya parent)" name="url"
                            id="menu_url" required />
                    </div>

                    <!--begin::Input group - Key Translasi (meta.title_key)-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>{{ app()->getLocale() == 'en' ? 'Translation Key (title_key)' : 'Key Translasi (title_key)' }}</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                title="{{ app()->getLocale() == 'en' ? 'Unique key for multi-language dictionary (e.g. md_tahun_ajaran). Auto-generated if left empty.' : 'Key unik untuk translasi multi-bahasa (contoh: md_tahun_ajaran). Otomatis dibuat jika dikosongkan.' }}">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Contoh: md_tahun_ajaran (opsional, otomatis jika kosong)" name="title_key"
                            id="menu_title_key" />
                    </div>

                    <div class="row g-6 mb-6">
                        <!--begin::Col - Kategori-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Category' : 'Kategori' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" list="menu_category_list"
                                placeholder="Contoh: Main Menu, System" name="category" id="menu_category" />
                            <datalist id="menu_category_list">
                                @if (isset($categories))
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat }}">
                                    @endforeach
                                @endif
                            </datalist>
                            <span
                                class="text-muted fs-8 mt-1">{{ app()->getLocale() == 'en' ? 'Type or select category group.' : 'Ketik atau pilih grup kategori.' }}</span>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col - Menu Induk (Parent)-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Parent Menu' : 'Menu Induk (Parent)' }}</span>
                            </label>
                            <select class="form-select form-select-solid" name="main_menu_id" id="menu_main_menu_id">
                                <option value="">--
                                    {{ app()->getLocale() == 'en' ? 'Top Level Menu (No Parent)' : 'Menu Utama (Tanpa Induk)' }}
                                    --</option>
                                @if (isset($allMenus))
                                    @foreach ($allMenus as $m0)
                                        <option value="{{ $m0->id }}" class="fw-bold">{{ $m0->name }}
                                        </option>
                                        @foreach ($m0->subMenus as $m1)
                                            <option value="{{ $m1->id }}">└─ {{ $m1->name }}</option>
                                            @foreach ($m1->subMenus as $m2)
                                                <option value="{{ $m2->id }}">└── {{ $m2->name }}</option>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row g-6 mb-6">
                        <!--begin::Col - Class Icon-->
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Icon Class' : 'Class Ikon (Keenicons)' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid"
                                placeholder="Contoh: ki-duotone ki-element-11" name="icon" id="menu_icon" />
                            <div class="d-flex align-items-center gap-1 mt-2 flex-wrap" id="form_icon_style_buttons">
                                <button type="button" class="btn btn-xs btn-light-primary py-1 px-2 icon-style-btn" data-prefix="ki-duotone" onclick="setFormIconStyle('ki-duotone')">
                                    <i class="ki-duotone ki-check fs-8 d-none me-1 check-active"><span class="path1"></span><span class="path2"></span></i>ki-duotone
                                </button>
                                <button type="button" class="btn btn-xs btn-light-warning py-1 px-2 icon-style-btn" data-prefix="ki-solid" onclick="setFormIconStyle('ki-solid')">
                                    <i class="ki-duotone ki-check fs-8 d-none me-1 check-active"><span class="path1"></span><span class="path2"></span></i>ki-solid
                                </button>
                                <button type="button" class="btn btn-xs btn-light-info py-1 px-2 icon-style-btn" data-prefix="ki-outline" onclick="setFormIconStyle('ki-outline')">
                                    <i class="ki-duotone ki-check fs-8 d-none me-1 check-active"><span class="path1"></span><span class="path2"></span></i>ki-outline
                                </button>
                                <a href="{{ route('docs.icons.keenicons') }}" target="_blank" class="ms-auto text-primary fs-8 fw-semibold" title="Cek Aturan Keenicons">
                                    <i class="ki-duotone ki-information-2 fs-7 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Docs Icons
                                </a>
                            </div>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col - Path Count & Order-->
                        <div class="col-md-6 fv-row">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>{{ app()->getLocale() == 'en' ? 'Paths Count' : 'Jumlah Path' }}</span>
                                    </label>
                                    <input type="number" min="0" max="10"
                                        class="form-control form-control-solid" placeholder="0" name="paths"
                                        id="menu_paths" value="0" />
                                </div>
                                <div class="col-6">
                                    <label class="fs-6 fw-semibold mb-2">
                                        <span>{{ app()->getLocale() == 'en' ? 'Order' : 'Urutan' }}</span>
                                    </label>
                                    <input type="number" min="0" class="form-control form-control-solid"
                                        placeholder="0" name="orders" id="menu_orders" value="0" />
                                </div>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <!--begin::Input group - Permissions & Roles Auto Setup-->
                    <div class="row g-6 mb-6">
                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2 d-block">
                                <span>{{ app()->getLocale() == 'en' ? 'Permissions Setup' : 'Otomatisasi Perizinan (Permissions)' }}</span>
                            </label>
                            <div class="d-flex flex-wrap gap-3">
                                <label class="form-check form-check-custom form-check-solid form-check-sm">
                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                        value="read" id="perm_read" checked />
                                    <span
                                        class="form-check-label badge badge-light-primary fs-7 fw-bold py-1 px-3 ms-2">read</span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid form-check-sm">
                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                        value="create" id="perm_create" />
                                    <span
                                        class="form-check-label badge badge-light-success fs-7 fw-bold py-1 px-3 ms-2">create</span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid form-check-sm">
                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                        value="update" id="perm_update" />
                                    <span
                                        class="form-check-label badge badge-light-warning fs-7 fw-bold py-1 px-3 ms-2">update</span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid form-check-sm">
                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                        value="delete" id="perm_delete" />
                                    <span
                                        class="form-check-label badge badge-light-danger fs-7 fw-bold py-1 px-3 ms-2">delete</span>
                                </label>
                            </div>
                            <span
                                class="text-muted fs-8 mt-1 d-block">{{ app()->getLocale() == 'en' ? 'Spatie permissions created & assigned to menu' : 'Spatie permission dibuat & dihubungkan ke menu' }}</span>
                        </div>

                        <div class="col-md-6 fv-row">
                            <label class="fs-6 fw-semibold mb-2 d-block">
                                <span>{{ app()->getLocale() == 'en' ? 'Assign to Roles' : 'Terapkan Hak Akses (Roles)' }}</span>
                            </label>
                            <div class="d-flex flex-wrap gap-3">
                                @if (isset($allRoles) && count($allRoles) > 0)
                                    @foreach ($allRoles as $role)
                                        <label class="form-check form-check-custom form-check-solid form-check-sm">
                                            <input class="form-check-input menu-role-checkbox" type="checkbox"
                                                name="roles[]" value="{{ $role->name }}"
                                                id="role_{{ $role->id }}"
                                                {{ $role->name == 'admin' ? 'checked' : '' }} />
                                            <span
                                                class="form-check-label text-gray-800 fw-semibold">{{ $role->name }}</span>
                                        </label>
                                    @endforeach
                                @else
                                    <label class="form-check form-check-custom form-check-solid form-check-sm">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                            value="admin" id="role_admin" checked />
                                        <span class="form-check-label text-gray-800 fw-semibold">admin</span>
                                    </label>
                                @endif
                            </div>
                            <span
                                class="text-muted fs-8 mt-1 d-block">{{ app()->getLocale() == 'en' ? 'Grant permission to selected Spatie roles' : 'Berikan hak akses ke role Spatie terpilih' }}</span>
                        </div>
                    </div>

                    <!--begin::Input group - Status Keaktifan-->
                    <div class="d-flex flex-stack mb-8">
                        <div class="me-5">
                            <label
                                class="fs-6 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Active Status' : 'Status Keaktifan' }}</label>
                            <div class="fs-7 text-muted">
                                {{ app()->getLocale() == 'en' ? 'Active menu items will be displayed in the sidebar' : 'Menu aktif akan ditampilkan pada sidebar navigasi' }}
                            </div>
                        </div>
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="active" id="menu_active"
                                value="1" checked />
                            <span
                                class="form-check-label fw-semibold text-gray-800">{{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}</span>
                        </label>
                    </div>

                    <!--begin::Actions-->
                    <div class="text-center pt-3">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                        </button>
                        <button type="submit" class="btn btn-primary" id="btn_submit_menu">
                            <span
                                class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Menu' : 'Simpan Menu' }}</span>
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

<script>
    function highlightActiveFormIconStyle() {
        var val = $.trim($('#menu_icon').val());
        $('.icon-style-btn').each(function() {
            var prefix = $(this).data('prefix');
            var checkIcon = $(this).find('.check-active');

            if (prefix === 'ki-duotone' && val.indexOf('ki-duotone') !== -1) {
                $(this).removeClass('btn-light-primary').addClass('btn-primary active shadow-xs');
                checkIcon.removeClass('d-none');
            } else if (prefix === 'ki-duotone') {
                $(this).removeClass('btn-primary active shadow-xs').addClass('btn-light-primary');
                checkIcon.addClass('d-none');
            }

            if (prefix === 'ki-solid' && val.indexOf('ki-solid') !== -1) {
                $(this).removeClass('btn-light-warning').addClass('btn-warning active shadow-xs');
                checkIcon.removeClass('d-none');
            } else if (prefix === 'ki-solid') {
                $(this).removeClass('btn-warning active shadow-xs').addClass('btn-light-warning');
                checkIcon.addClass('d-none');
            }

            if (prefix === 'ki-outline' && val.indexOf('ki-outline') !== -1) {
                $(this).removeClass('btn-light-info').addClass('btn-info active shadow-xs');
                checkIcon.removeClass('d-none');
            } else if (prefix === 'ki-outline') {
                $(this).removeClass('btn-info active shadow-xs').addClass('btn-light-info');
                checkIcon.addClass('d-none');
            }
        });
    }

    function setFormIconStyle(prefix) {
        var iconInput = $('#menu_icon');
        var val = $.trim(iconInput.val());
        if (val === '') {
            iconInput.val(prefix + ' ki-element-11');
        } else {
            if (/^ki-(duotone|solid|outline)\s+/.test(val)) {
                iconInput.val(val.replace(/^ki-(duotone|solid|outline)\s+/, prefix + ' '));
            } else if (/^ki-(duotone|solid|outline)$/.test(val)) {
                iconInput.val(prefix);
            } else {
                iconInput.val(prefix + ' ' + val);
            }
        }
        if (prefix === 'ki-solid' || prefix === 'ki-outline') {
            $('#menu_paths').val(0);
        } else if (prefix === 'ki-duotone') {
            var iconName = $.trim(iconInput.val()).replace(/^ki-(duotone|solid|outline)\s+/, '');
            var knownPaths = {
                'element-11': 4, 'element-plus': 5, 'abstract-28': 2, 'abstract-14': 2, 'colors-square': 4,
                'question': 3, 'information-5': 3, 'pencil': 2, 'trash': 5, 'plus': 2, 'folder': 2, 'down-square': 2,
                'check-circle': 2, 'magnifier': 2, 'arrows-loop': 2, 'cross': 2, 'lock-3': 2, 'profile-circle': 2, 'setting': 2
            };
            if (knownPaths[iconName]) {
                $('#menu_paths').val(knownPaths[iconName]);
            } else if ((parseInt($('#menu_paths').val()) || 0) <= 0) {
                $('#menu_paths').val(2);
            }
        }
        highlightActiveFormIconStyle();
    }

    $(document).ready(function() {
        $('#menu_icon').on('input change keyup', highlightActiveFormIconStyle);
    });
</script>
