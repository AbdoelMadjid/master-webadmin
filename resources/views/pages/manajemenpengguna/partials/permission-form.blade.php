<div class="modal fade" id="kt_modal_permission" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-between">
                <div>
                    <h2 class="fw-bold mb-1" id="permission_modal_title">Kelola Permission</h2>
                    <span class="text-muted fs-7">Buat permission baru secara batch CRUD atau single manual</span>
                </div>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-5 mx-xl-10 my-3 pt-0">
                <!--begin::Nav Tabs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-6 fw-bold mb-5" id="permissionTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-active-primary pb-3 active" id="tab_batch_btn" data-bs-toggle="tab" href="#tab_batch_content" role="tab">
                            <i class="ki-duotone ki-flash fs-4 me-1 text-warning"><span class="path1"></span><span class="path2"></span></i> Modul CRUD Batch (Praktis)
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-active-primary pb-3" id="tab_single_btn" data-bs-toggle="tab" href="#tab_single_content" role="tab">
                            <i class="ki-duotone ki-key fs-4 me-1 text-primary"><span class="path1"></span><span class="path2"></span></i> Single Permission (Kustom)
                        </a>
                    </li>
                </ul>
                <!--end::Nav Tabs-->

                <div class="tab-content" id="permissionTabContent">
                    <!--begin::Tab 1: Batch CRUD-->
                    <div class="tab-pane fade show active" id="tab_batch_content" role="tabpanel">
                        <form id="kt_modal_permission_batch_form" class="form" action="#">
                            @csrf
                            <div class="fv-row mb-6">
                                <label class="required fw-semibold fs-6 mb-2">Nama Modul / Fitur Aplikasi</label>
                                <input type="text" name="module_name" id="batch_module_name" class="form-control form-control-solid mb-2" placeholder="Contoh: master-barang, transaksi, laporan" required />
                                <span class="fs-7 text-muted">Sistem akan membuatkan 4 permission CRUD otomatis (<code>create</code>, <code>read</code>, <code>update</code>, <code>delete</code>).</span>
                            </div>

                            <div class="fv-row mb-6">
                                <label class="fw-semibold fs-6 mb-2 text-gray-800">Pilih Aksi CRUD yang Dibuat</label>
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <label class="form-check form-check-custom form-check-solid me-3">
                                        <input class="form-check-input batch-action-checkbox h-20px w-20px" type="checkbox" name="actions[]" value="create" checked />
                                        <span class="form-check-label fw-bold text-success fs-7">Create</span>
                                    </label>
                                    <label class="form-check form-check-custom form-check-solid me-3">
                                        <input class="form-check-input batch-action-checkbox h-20px w-20px" type="checkbox" name="actions[]" value="read" checked />
                                        <span class="form-check-label fw-bold text-info fs-7">Read</span>
                                    </label>
                                    <label class="form-check form-check-custom form-check-solid me-3">
                                        <input class="form-check-input batch-action-checkbox h-20px w-20px" type="checkbox" name="actions[]" value="update" checked />
                                        <span class="form-check-label fw-bold text-warning fs-7">Update</span>
                                    </label>
                                    <label class="form-check form-check-custom form-check-solid me-3">
                                        <input class="form-check-input batch-action-checkbox h-20px w-20px" type="checkbox" name="actions[]" value="delete" checked />
                                        <span class="form-check-label fw-bold text-danger fs-7">Delete</span>
                                    </label>
                                </div>
                            </div>

                            <div class="fv-row mb-6">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <label class="fs-6 fw-bold text-gray-900 m-0">Tugaskan Sekaligus ke Role (Opsional)</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <button type="button" class="btn btn-sm btn-link text-primary p-0 fw-semibold fs-7" id="btn_select_all_batch_roles">Pilih Semua</button>
                                        <span class="text-gray-300">|</span>
                                        <button type="button" class="btn btn-sm btn-link text-muted p-0 fw-semibold fs-7" id="btn_deselect_all_batch_roles">Kosongkan</button>
                                    </div>
                                </div>
                                <div class="row g-3 pt-1">
                                    @foreach($roles as $role)
                                        @php
                                            $roleLower = strtolower($role->name);
                                            $cardColor = match($roleLower) {
                                                'master' => 'bg-light-danger border-danger border-opacity-50',
                                                'admin'  => 'bg-light-primary border-primary border-opacity-50',
                                                'user'   => 'bg-light-info border-info border-opacity-50',
                                                default  => 'bg-light-success border-success border-opacity-50',
                                            };
                                        @endphp
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <label class="d-flex align-items-center justify-content-between p-3 rounded-3 border {{ $cardColor }} h-100 cursor-pointer shadow-xs">
                                                <span class="fw-bold fs-7 text-gray-900 text-truncate me-2" title="{{ ucfirst($role->name) }}">{{ ucfirst($role->name) }}</span>
                                                <input class="form-check-input perm-batch-role-checkbox h-20px w-20px flex-shrink-0" type="checkbox" name="roles[]" value="{{ $role->name }}" />
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="d-flex justify-content-end pt-3">
                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" id="kt_modal_permission_batch_submit">
                                    <i class="ki-duotone ki-flash fs-3 me-1"><span class="path1"></span><span class="path2"></span></i> Simpan 4 Akses CRUD
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--end::Tab 1-->

                    <!--begin::Tab 2: Single Permission-->
                    <div class="tab-pane fade" id="tab_single_content" role="tabpanel">
                        <form id="kt_modal_permission_form" class="form" action="#">
                            @csrf
                            <input type="hidden" name="id" id="permission_id" value="">
                            <div class="fv-row mb-6">
                                <label class="required fw-semibold fs-6 mb-2">Nama Permission</label>
                                <input type="text" name="name" id="permission_name" class="form-control form-control-solid mb-2" placeholder="Contoh: export-excel, impersonate" required />
                                <span class="fs-7 text-muted">Format: <code>[aksi] [modul]</code> atau nama custom.</span>
                            </div>
                            <div class="fv-row mb-6">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <label class="fs-6 fw-bold text-gray-900 m-0">Tugaskan ke Role (Opsional)</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <button type="button" class="btn btn-sm btn-link text-primary p-0 fw-semibold fs-7" id="btn_select_all_single_roles">Pilih Semua</button>
                                        <span class="text-gray-300">|</span>
                                        <button type="button" class="btn btn-sm btn-link text-muted p-0 fw-semibold fs-7" id="btn_deselect_all_single_roles">Kosongkan</button>
                                    </div>
                                </div>
                                <div class="row g-3 pt-1">
                                    @foreach($roles as $role)
                                        @php
                                            $roleLower = strtolower($role->name);
                                            $cardColor = match($roleLower) {
                                                'master' => 'bg-light-danger border-danger border-opacity-50',
                                                'admin'  => 'bg-light-primary border-primary border-opacity-50',
                                                'user'   => 'bg-light-info border-info border-opacity-50',
                                                default  => 'bg-light-success border-success border-opacity-50',
                                            };
                                        @endphp
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <label class="d-flex align-items-center justify-content-between p-3 rounded-3 border {{ $cardColor }} h-100 cursor-pointer shadow-xs">
                                                <span class="fw-bold fs-7 text-gray-900 text-truncate me-2" title="{{ ucfirst($role->name) }}">{{ ucfirst($role->name) }}</span>
                                                <input class="form-check-input perm-role-checkbox h-20px w-20px flex-shrink-0" type="checkbox" name="roles[]" value="{{ $role->name }}" id="perm_role_{{ $role->id }}" />
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-end pt-3">
                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" id="kt_modal_permission_submit">
                                    <span class="indicator-label">Simpan Single Permission</span>
                                    <span class="indicator-progress">Memproses...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--end::Tab 2-->
                </div>
            </div>
        </div>
    </div>
</div>
