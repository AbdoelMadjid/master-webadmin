<!--begin::Modal - Add/Edit Kategori Referensi-->
<div class="modal fade" id="kt_modal_referensi_kategori" tabindex="-1" aria-hidden="true">
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
                <form id="kt_form_referensi_kategori" class="form"
                    action="{{ route('appsupport.referensi.kategori.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="kategori_form_method" value="POST" />
                    <input type="hidden" name="id" id="kategori_id" value="" />

                    <div class="mb-13 text-center">
                        <h1 class="mb-3" id="modal_kategori_title">
                            {{ app()->getLocale() == 'en' ? 'Add Reference Category' : 'Tambah Kategori Referensi' }}
                        </h1>
                        <div class="text-muted fw-semibold fs-5">
                            {{ app()->getLocale() == 'en' ? 'Manage standardized reference lookup category group' : 'Kelola kelompok data acuan standar sistem' }}
                        </div>
                    </div>

                    <!--begin::Input group - Kode-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                            <span>{{ app()->getLocale() == 'en' ? 'Category Code' : 'Kode Kategori' }}</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                title="{{ app()->getLocale() == 'en' ? 'Unique uppercase code without spaces (e.g., JENKEL, AGAMA, PENDIDIKAN)' : 'Kode unik huruf kapital tanpa spasi (contoh: JENKEL, AGAMA, PENDIDIKAN)' }}">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid text-uppercase"
                            placeholder="e.g. JENKEL, AGAMA" name="kode" id="kategori_kode" required />
                        <span
                            class="text-muted fs-8 mt-1">{{ app()->getLocale() == 'en' ? 'Use capital letters and underscores only.' : 'Gunakan huruf kapital dan garis bawah sahaja.' }}</span>
                    </div>

                    <!--begin::Input group - Nama-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                            <span>{{ app()->getLocale() == 'en' ? 'Category Name' : 'Nama Kategori' }}</span>
                        </label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="e.g. Jenis Kelamin, Agama" name="nama" id="kategori_nama" required />
                    </div>

                    <!--begin::Input group - Deskripsi-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="fs-6 fw-semibold mb-2">
                            <span>{{ app()->getLocale() == 'en' ? 'Description' : 'Deskripsi & Catatan' }}</span>
                        </label>
                        <textarea class="form-control form-control-solid" rows="3" name="deskripsi" id="kategori_deskripsi"
                            placeholder="{{ app()->getLocale() == 'en' ? 'Brief description of what this reference category is used for' : 'Penjelasan singkat kegunaan kategori acuan ini' }}"></textarea>
                    </div>

                    <!--begin::Input group - Status-->
                    <div class="d-flex flex-stack mb-8">
                        <div class="me-5">
                            <label
                                class="fs-6 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Active Status' : 'Status Keaktifan' }}</label>
                            <div class="fs-7 text-muted">
                                {{ app()->getLocale() == 'en' ? 'Active categories appear in selection forms' : 'Kategori aktif akan muncul pada formulir pilihan' }}
                            </div>
                        </div>
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="is_active" id="kategori_is_active"
                                value="1" checked />
                            <span
                                class="form-check-label fw-semibold text-gray-800">{{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}</span>
                        </label>
                    </div>

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            {{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}
                        </button>
                        <button type="submit" class="btn btn-primary" id="btn_submit_kategori">
                            <span
                                class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Category' : 'Simpan Kategori' }}</span>
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
<!--end::Modal - Add/Edit Kategori Referensi-->
