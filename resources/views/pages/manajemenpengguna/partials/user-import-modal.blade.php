<div class="modal fade" id="kt_modal_import_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">Upload Massal User dari Excel</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form id="kt_modal_import_user_form" class="form" action="#" enctype="multipart/form-data">
                @csrf
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Instructions Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-7 p-6">
                        <i class="ki-duotone ki-information-5 fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-semibold">
                                <h4 class="text-gray-900 fw-bold mb-1">Panduan Upload Massal</h4>
                                <div class="fs-7 text-gray-700">
                                    Unduh berkas <strong>Master Format Excel</strong> terlebih dahulu, isi data pengguna sesuai kolom yang disediakan, lalu unggah kembali berkas tersebut.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Instructions Notice-->

                    <div class="d-flex align-items-center justify-content-between mb-5 p-3 rounded bg-light-info border border-info border-dashed">
                        <div>
                            <span class="fw-bold fs-6 text-gray-800 d-block">Berkas Template Master</span>
                            <span class="fs-7 text-muted">Format standar impor (.xlsx)</span>
                        </div>
                        <a href="{{ route('manajemenpengguna.users.template') }}" class="btn btn-sm btn-info" id="btn_download_template_modal">
                            <i class="ki-duotone ki-file-down fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Download Template
                        </a>
                    </div>

                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Pilih Berkas Excel / CSV</label>
                        <input type="file" name="excel_file" id="excel_file" class="form-control form-control-solid" accept=".xlsx, .xls, .csv" required />
                        <div class="form-text">Format yang didukung: <code>.xlsx</code>, <code>.xls</code>, <code>.csv</code> (Maksimal 5MB).</div>
                    </div>
                </div>

                <div class="modal-footer flex-center">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" id="btn_submit_import_user">
                        <i class="ki-duotone ki-file-up fs-2 me-1"><span class="path1"></span><span class="path2"></span></i> Proses Upload Massal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
