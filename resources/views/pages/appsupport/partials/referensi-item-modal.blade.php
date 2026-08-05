<!--begin::Modal - Add/Edit Item Referensi-->
<div class="modal fade" id="kt_modal_referensi_item" tabindex="-1" aria-hidden="true">
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
                <form id="kt_form_referensi_item" class="form" action="{{ route('appsupport.referensi.item.store') }}"
                    method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="item_form_method" value="POST" />
                    <input type="hidden" name="id" id="item_id" value="" />

                    <div class="mb-13 text-center">
                        <h1 class="mb-3" id="modal_item_title">
                            {{ app()->getLocale() == 'en' ? 'Add Reference Item' : 'Tambah Opsi / Item Referensi' }}
                        </h1>
                        <div class="text-muted fw-semibold fs-5">
                            {{ app()->getLocale() == 'en' ? 'Add choice option under a specific reference category' : 'Tambah pilihan data acuan di bawah kategori spesifik' }}
                        </div>
                    </div>

                    <!--begin::Input group - Parent Kategori-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                            <span>{{ app()->getLocale() == 'en' ? 'Reference Category' : 'Kategori Referensi' }}</span>
                        </label>
                        <select class="form-select form-select-solid" name="kategori_id" id="item_kategori_id" required>
                            <option value="">
                                {{ app()->getLocale() == 'en' ? '-- Select Category --' : '-- Pilih Kategori --' }}
                            </option>
                            @foreach ($kategoris as $kat)
                                <option value="{{ $kat->id }}">{{ $kat->nama }} ({{ $kat->kode }})</option>
                            @endforeach
                        </select>
                    </div>

                    <!--begin::Input group - Kode & Urutan-->
                    <div class="row mb-8">
                        <div class="col-md-7 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                <span>{{ app()->getLocale() == 'en' ? 'Option Code' : 'Kode Opsi / Item' }}</span>
                            </label>
                            <input type="text" class="form-control form-control-solid text-uppercase"
                                placeholder="e.g. L, P, ISLAM" name="kode" id="item_kode" required />
                        </div>
                        <div class="col-md-5 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>{{ app()->getLocale() == 'en' ? 'Display Order' : 'Urutan Tampil' }}</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" min="0" placeholder="1"
                                name="urutan" id="item_urutan" value="1" />
                        </div>
                    </div>

                    <!--begin::Input group - Nama Opsi-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                            <span>{{ app()->getLocale() == 'en' ? 'Option Label / Name' : 'Nama Opsi / Label Tampil' }}</span>
                        </label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="e.g. Laki-Laki, Kristen Protestan" name="nama" id="item_nama" required />
                    </div>

                    <!--begin::Input group - Keterangan-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="fs-6 fw-semibold mb-2">
                            <span>{{ app()->getLocale() == 'en' ? 'Remarks' : 'Keterangan Tambahan' }}</span>
                        </label>
                        <textarea class="form-control form-control-solid" rows="2" name="keterangan" id="item_keterangan"
                            placeholder="{{ app()->getLocale() == 'en' ? 'Optional extra details or internal code mapping' : 'Catatan opsional atau info tambahan' }}"></textarea>
                    </div>

                    <!--begin::Input group - Status-->
                    <div class="d-flex flex-stack mb-8">
                        <div class="me-5">
                            <label
                                class="fs-6 fw-semibold mb-1">{{ app()->getLocale() == 'en' ? 'Active Status' : 'Status Keaktifan' }}</label>
                            <div class="fs-7 text-muted">
                                {{ app()->getLocale() == 'en' ? 'Active items will be loaded in dropdown forms' : 'Item aktif akan dapat dipilih dalam form dropdown' }}
                            </div>
                        </div>
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="is_active" id="item_is_active"
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
                        <button type="submit" class="btn btn-primary" id="btn_submit_item">
                            <span
                                class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save Item' : 'Simpan Item' }}</span>
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
<!--end::Modal - Add/Edit Item Referensi-->
