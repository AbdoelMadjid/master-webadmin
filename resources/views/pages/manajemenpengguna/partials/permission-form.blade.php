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
                        <label class="fs-6 fw-semibold mb-2">Tugaskan ke Role (Opsional)</label>
                        <div class="d-flex flex-column gap-2">
                            @foreach($roles as $role)
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input perm-role-checkbox" type="checkbox" name="roles[]" value="{{ $role->name }}" id="perm_role_{{ $role->id }}" />
                                    <span class="form-check-label text-gray-800 fw-semibold">{{ ucfirst($role->name) }}</span>
                                </label>
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
