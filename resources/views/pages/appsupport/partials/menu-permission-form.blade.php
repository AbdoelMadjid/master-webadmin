<!--begin::Modal - Tambah Permission Menu-->
<div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-500px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_add_permission_form" class="form" action="" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-8 text-center">
                        <h1 class="mb-3">Tambah Permission</h1>
                        <div class="text-muted fw-semibold fs-6" id="modal_permission_menu_title">
                            Pilih atau ketik aksi permission baru untuk menu.
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group - Quick Action Options-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="fs-6 fw-semibold mb-2">Pilihan Aksi Cepat:</label>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-sm btn-light-primary btn-quick-action" data-action="read">read</button>
                            <button type="button" class="btn btn-sm btn-light-success btn-quick-action" data-action="create">create</button>
                            <button type="button" class="btn btn-sm btn-light-warning btn-quick-action" data-action="update">update</button>
                            <button type="button" class="btn btn-sm btn-light-danger btn-quick-action" data-action="delete">delete</button>
                            <button type="button" class="btn btn-sm btn-light-info btn-quick-action" data-action="sort">sort</button>
                            <button type="button" class="btn btn-sm btn-light-dark btn-quick-action" data-action="export">export</button>
                            <button type="button" class="btn btn-sm btn-light-dark btn-quick-action" data-action="import">import</button>
                            <button type="button" class="btn btn-sm btn-light-dark btn-quick-action" data-action="print">print</button>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group - Aksi Custom-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Nama Aksi Permission</label>
                        <input type="text" class="form-control form-control-solid" placeholder="Contoh: read, create, update, export" name="action" id="permission_action_input" required />
                        <span class="text-muted fs-8 mt-1">Nama permission otomatis menggunakan format <code>[aksi] [url_menu]</code>.</span>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-5">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" id="kt_modal_add_permission_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan Permission</span>
                            <span class="indicator-progress">
                                Memproses... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Tambah Permission Menu-->
