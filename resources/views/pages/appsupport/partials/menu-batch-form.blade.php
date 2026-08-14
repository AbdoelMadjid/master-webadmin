<!--begin::Modal - Tambah Partai Menu (Batch Creator)-->
<div class="modal fade" id="kt_modal_menu_batch" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px w-100">
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
                <form id="kt_form_menu_batch" class="form" action="{{ route('appsupport.menu.store-batch') }}"
                    method="POST">
                    @csrf

                    <div class="mb-10 text-center">
                        <h1 class="mb-3">
                            {{ app()->getLocale() == 'en' ? 'Batch Menu Creator (Tambah Partai Menu)' : 'Tambah Partai Menu (Batch Menu Creator)' }}
                        </h1>
                        <div class="text-muted fw-semibold fs-6">
                            {{ app()->getLocale() == 'en' ? 'Create a complete menu tree (Main Menu->Sub-Menus->Sub-Sub-Menus) dynamically in a single batch.' : 'Buat struktur menu lengkap (Menu Utama->Sub-Menu->Sub-Sub-Menu) secara dinamis dalam satu transaksi.' }}
                        </div>
                    </div>

                    <!--begin::Main Menu Section Card-->
                    <div class="card schema-card bg-light-primary border border-primary p-6 rounded mb-6">
                        <div
                            class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom border-primary border-opacity-10">
                            <!--Left side: Icon & Heading-->
                            <div class="d-flex align-items-center gap-2">
                                <i class="ki-duotone ki-element-11 fs-2 text-primary me-1"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                <h4 class="fw-bold text-gray-900 m-0 fs-5">1.
                                    {{ app()->getLocale() == 'en' ? 'Main Menu Target (Level 0)' : 'Target Menu Utama (Induk Utama)' }}
                                </h4>
                            </div>

                            <!--Right side: Compact Radio Buttons pushed to far right-->
                            <div class="btn-group btn-group-sm ms-auto" role="group">
                                <input type="radio" class="btn-check" name="batch_mode" value="new"
                                    id="batch_mode_new" checked autocomplete="off" />
                                <label
                                    class="btn btn-sm btn-outline btn-outline-primary btn-active-primary fw-semibold px-3 py-1 fs-7"
                                    for="batch_mode_new">
                                    <i class="ki-duotone ki-plus-circle fs-6 me-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    {{ app()->getLocale() == 'en' ? 'Create New' : 'Buat Menu Baru' }}
                                </label>

                                <input type="radio" class="btn-check" name="batch_mode" value="existing"
                                    id="batch_mode_existing" autocomplete="off" />
                                <label
                                    class="btn btn-sm btn-outline btn-outline-primary btn-active-primary fw-semibold px-3 py-1 fs-7"
                                    for="batch_mode_existing">
                                    <i class="ki-duotone ki-element-plus fs-6 me-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                    {{ app()->getLocale() == 'en' ? 'Select Main Menu' : 'Pilih Menu Utama' }}
                                </label>
                            </div>
                        </div>

                        <!--Option A: Existing Main Menu Dropdown-->
                        <div id="batch_existing_main_wrapper"
                            class="p-4 bg-white rounded border border-primary border-opacity-20 shadow-2xs mb-4 d-none">
                            <label class="fs-7 fw-bold text-gray-800 mb-2 required d-flex align-items-center gap-2">
                                <i class="ki-duotone ki-element-plus fs-5 text-primary"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Select Target Existing Main Menu' : 'Pilih Target Menu Utama yang Sudah Ada' }}
                            </label>
                            <select class="form-select form-select-solid form-select-sm" name="existing_main_menu_id"
                                id="batch_existing_main_menu_id">
                                <option value="">--
                                    {{ app()->getLocale() == 'en' ? 'Select Main Menu' : 'Pilih Menu Utama' }} --
                                </option>
                                @if (isset($mainMenus) && count($mainMenus) > 0)
                                    @foreach ($mainMenus as $mm)
                                        <option value="{{ $mm->id }}" data-url="{{ $mm->url }}"
                                            data-key="{{ $mm->meta['title_key'] ?? '' }}"
                                            data-category="{{ $mm->category }}">
                                            {{ $mm->name }} &nbsp;&mdash;&nbsp; (URL: {{ $mm->url }})
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <!--Option B: New Main Menu Inputs-->
                        <div id="batch_new_main_wrapper">
                            <div class="row g-4 mb-4">
                                <div class="col-md-3 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1 required">{{ app()->getLocale() == 'en' ? 'Main Menu Name (ID)' : 'Nama Menu Utama (ID)' }}</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                        id="batch_main_name" placeholder="Contoh: Manajemen Sekolah"
                                        name="main_menu[name]" required />
                                </div>

                                <div class="col-md-3 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Main Menu Name (EN)' : 'Nama Menu Utama (EN)' }}</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                        id="batch_main_title_en" placeholder="Contoh: School Management"
                                        name="main_menu[title_en]" />
                                </div>

                                <div class="col-md-3 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1 required">{{ app()->getLocale() == 'en' ? 'Route / URL' : 'Route / URL' }}</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                        id="batch_main_url" placeholder="Contoh: manajemensekolah atau #"
                                        name="main_menu[url]" value="#" required />
                                </div>

                                <div class="col-md-3 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Key Translasi (title_key)' : 'Key Translasi (title_key)' }}</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                        id="batch_main_key" placeholder="Contoh: wd_manajemensekolah"
                                        name="main_menu[title_key]" />
                                </div>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-3 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Category Group' : 'Kategori Group' }}</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                        list="menu_batch_category_list" placeholder="Contoh: Website, Main Menu"
                                        name="category" id="batch_category_input" />
                                    <datalist id="menu_batch_category_list">
                                        @if (isset($categories))
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat }}">
                                            @endforeach
                                        @endif
                                    </datalist>
                                </div>

                                <div class="col-md-4 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Icon Class (Keenicon)' : 'Class Ikon (Keenicon)' }}</label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                        placeholder="Contoh: ki-duotone ki-global" name="main_menu[icon]" id="batch_main_menu_icon"
                                        value="ki-duotone ki-element-11" />
                                    <div class="d-flex align-items-center gap-1 mt-1 flex-wrap">
                                        <button type="button" class="btn btn-xs btn-light-primary py-0 px-2 fs-9" onclick="setBatchIconStyle('ki-duotone')">ki-duotone</button>
                                        <button type="button" class="btn btn-xs btn-light-warning py-0 px-2 fs-9" onclick="setBatchIconStyle('ki-solid')">ki-solid</button>
                                        <button type="button" class="btn btn-xs btn-light-info py-0 px-2 fs-9" onclick="setBatchIconStyle('ki-outline')">ki-outline</button>
                                    </div>
                                </div>

                                <div class="col-md-3 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Paths Count' : 'Jumlah Path' }}</label>
                                    <input type="number" min="0" max="10"
                                        class="form-control form-control-solid form-control-sm" placeholder="0"
                                        name="main_menu[paths]" value="4" />
                                </div>

                                <div class="col-md-2 fv-row">
                                    <label
                                        class="fs-7 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Order' : 'Urutan' }}</label>
                                    <input type="number" min="0"
                                        class="form-control form-control-solid form-control-sm" placeholder="0"
                                        name="main_menu[orders]" value="0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Main Menu Section Card-->

                    <!--begin::Sub-Menus Section Header-->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                            <h4 class="fw-bold text-gray-900 m-0">2.
                                {{ app()->getLocale() == 'en' ? 'Sub-Menus & Sub-Sub-Menus Structure' : 'Struktur Sub-Menu & Sub-Sub-Menu' }}
                            </h4>
                        </div>
                        <button type="button" class="btn btn-sm btn-light-primary fw-bold"
                            onclick="addSubMenuCard()">
                            <i class="ki-duotone ki-plus fs-3"></i>
                            {{ app()->getLocale() == 'en' ? 'Add Sub-Menu' : 'Tambah Sub Menu' }}
                        </button>
                    </div>
                    <!--end::Sub-Menus Section Header-->

                    <!--begin::Sub-Menu Cards Container-->
                    <div id="batch_sub_menu_container" class="d-flex flex-column gap-4 mb-6">
                        <!-- Sub-menu cards will be injected dynamically via JS -->
                    </div>
                    <!--end::Sub-Menu Cards Container-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                        </button>
                        <button type="submit" class="btn btn-primary min-w-175px" id="btn_submit_menu_batch">
                            <span class="indicator-label">
                                <i class="ki-duotone ki-check fs-2 me-1"></i>
                                {{ app()->getLocale() == 'en' ? 'Save Batch Menu' : 'Simpan Partai Menu' }}
                            </span>
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
<!--end::Modal - Tambah Partai Menu-->

<script>
    function setBatchIconStyle(prefix) {
        var iconInput = $('#batch_main_menu_icon');
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
        var pathsInput = $('input[name="main_menu[paths]"]');
        if (prefix === 'ki-solid' || prefix === 'ki-outline') {
            pathsInput.val(0);
        } else if (prefix === 'ki-duotone' && (parseInt(pathsInput.val()) || 0) <= 0) {
            pathsInput.val(4);
        }
    }
</script>
