<div class="modal fade" id="kt_modal_permission" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold" id="permission_modal_title">Tambah Permission Baru</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form id="kt_modal_permission_form" class="form" action="#">
                @csrf
                <input type="hidden" name="id" id="permission_id" value="">
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Nama Permission</label>
                        <input type="text" name="name" id="permission_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Contoh: create appsupport/menu, read users" required />
                        <span class="fs-7 text-muted">Format direkomendasikan: <code>[aksi] [modul/rute]</code></span>
                    </div>
                    <div class="fv-row">
                        <label class="fs-6 fw-semibold mb-2 text-gray-800 d-flex align-items-center justify-content-between">
                            <span>Tugaskan ke Role (Opsional)</span>
                            <span class="text-muted fs-7">Centang role untuk permission ini</span>
                        </label>
                        <div class="row g-3 pt-1">
                            @foreach($roles as $role)
                                @php
                                    $roleLower = strtolower($role->name);
                                    $cardColor = match($roleLower) {
                                        'master' => 'bg-light-danger border-danger border-opacity-25',
                                        'admin'  => 'bg-light-primary border-primary border-opacity-25',
                                        'user'   => 'bg-light-info border-info border-opacity-25',
                                        default  => 'bg-light-success border-success border-opacity-25',
                                    };
                                @endphp
                                <div class="col-6 col-sm-4 col-md-3">
                                    <label class="d-flex align-items-center justify-content-between p-3 rounded-3 border border-2 border-dashed {{ $cardColor }} h-100 cursor-pointer shadow-xs">
                                        <span class="fw-bold fs-7 text-gray-900 text-truncate me-2" title="{{ ucfirst($role->name) }}">{{ ucfirst($role->name) }}</span>
                                        <input class="form-check-input perm-role-checkbox h-20px w-20px flex-shrink-0" type="checkbox" name="roles[]" value="{{ $role->name }}" id="perm_role_{{ $role->id }}" />
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="kt_modal_permission_submit">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Memproses...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
