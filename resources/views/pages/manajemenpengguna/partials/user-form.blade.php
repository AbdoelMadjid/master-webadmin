<div class="modal fade" id="kt_modal_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold" id="user_modal_title">Tambah Pengguna Baru</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form id="kt_modal_user_form" class="form" action="#" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="user_id" value="">
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="fv-row mb-7 text-center">
                        <label class="d-block fw-semibold fs-6 mb-5">Foto Profil / Avatar</label>
                        <div class="image-input image-input-outline" data-kt-image-input="true">
                            <div class="image-input-wrapper w-125px h-125px" id="user_avatar_preview" style="background-image: url('{{ asset('assets/media/svg/avatars/default-avatar.svg') }}')"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah avatar">
                                <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                            </label>
                        </div>
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" id="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nama lengkap user" required />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Alamat Email</label>
                        <input type="email" name="email" id="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="nama@domain.com" required />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="fw-semibold fs-6 mb-2" id="label_user_password">Kata Sandi</label>
                        <input type="password" name="password" id="user_password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Minimal 8 karakter" />
                        <span class="fs-7 text-muted" id="user_password_help">Biarkan kosong jika tidak ingin mengubah kata sandi.</span>
                    </div>
                    <div class="fv-row">
                        <label class="fs-6 fw-semibold mb-2">Pilih Role Pengguna</label>
                        <div class="d-flex flex-wrap gap-3">
                            @foreach($roles as $role)
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input user-role-checkbox" type="checkbox" name="roles[]" value="{{ $role->name }}" id="user_role_{{ $role->id }}" />
                                    <span class="form-check-label text-gray-800 fw-semibold">{{ ucfirst($role->name) }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="kt_modal_user_submit">
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
