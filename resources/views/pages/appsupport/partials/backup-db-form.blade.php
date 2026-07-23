<!--begin::Modal - Backup Database-->
<div class="modal fade" id="kt_modal_backup_db" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <form id="kt_modal_backup_db_form" class="form" action="{{ route('appsupport.backup-db.store') }}" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-10 text-center">
                        <h1 class="mb-3">Buat Backup Database</h1>
                        <div class="text-muted fw-semibold fs-5">
                            Pilih opsi penamaan, tipe backup, dan tabel yang ingin di-backup.
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group - Nama Custom Backup-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>Nama Identifikasi Backup</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Opsional. Nama khusus untuk membantu mengidentifikasi file backup.">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Contoh: sebelum_update_modul" name="backup_name" id="backup_name" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group - Tipe Backup-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Tipe Backup</label>
                        <select class="form-select form-select-solid" name="dump_type" id="dump_type">
                            <option value="full" selected>Full Backup (Struktur Tabel & Data Isinya)</option>
                            <option value="structure_only">Struktur Tabel Saja (Kosong Tanpa Data)</option>
                        </select>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group - Cakupan Tabel-->
                    <div class="d-flex flex-column mb-6 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Cakupan Tabel</label>
                        <div class="d-flex flex-column flex-sm-row gap-4">
                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="table_scope" value="all" id="scope_all" checked />
                                <span class="form-check-label fw-semibold text-gray-800 fs-6">
                                    Semua Tabel <span class="text-muted fs-7">(Includes DROP & CREATE DATABASE)</span>
                                </span>
                            </label>
                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="table_scope" value="custom" id="scope_custom" />
                                <span class="form-check-label fw-semibold text-gray-800 fs-6">Pilih Tabel Tertentu</span>
                            </label>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Container Pilih Tabel (Hidden by Default)-->
                    <div id="container_table_selection" class="d-none mb-8">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="fs-6 fw-bold text-gray-700">Daftar Tabel Database:</span>
                            <div>
                                <button type="button" class="btn btn-sm btn-light-primary py-1 px-3 me-1" id="btn_select_all_tables">Pilih Semua</button>
                                <button type="button" class="btn btn-sm btn-light-danger py-1 px-3" id="btn_deselect_all_tables">Hapus Semua</button>
                            </div>
                        </div>

                        <!--Option Auto Select Related Tables-->
                        <div class="form-check form-check-custom form-check-solid mb-3">
                            <input class="form-check-input" type="checkbox" id="auto_select_relations" checked />
                            <label class="form-check-label text-gray-700 fs-7 fw-semibold" for="auto_select_relations">
                                Otomatis centang tabel yang berelasi <span class="badge badge-light-success fs-9 ms-1">Direkomendasikan</span>
                            </label>
                        </div>

                        <div class="border border-gray-300 rounded p-4 mh-220px overflow-y-auto bg-light">
                            <div class="row g-2" id="table_checkboxes_wrapper">
                                @foreach ($tables as $index => $table)
                                    @php
                                        $relCount = isset($tableRelations[$table]) ? count($tableRelations[$table]) : 0;
                                        $relTitle = $relCount > 0 ? 'Relasi: ' . implode(', ', $tableRelations[$table]) : '';
                                    @endphp
                                    <div class="col-md-6">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm align-items-center">
                                            <input class="form-check-input table-checkbox" type="checkbox" name="tables[]" value="{{ $table }}" id="tbl_chk_{{ $index }}" data-table-name="{{ $table }}" />
                                            <label class="form-check-label text-gray-800 fs-7 fw-semibold text-break ms-2" for="tbl_chk_{{ $index }}">
                                                {{ $table }}
                                                @if ($relCount > 0)
                                                    <span class="badge badge-light-primary fs-9 ms-1 py-1 px-2" data-bs-toggle="tooltip" title="{{ $relTitle }}">
                                                        <i class="ki-duotone ki-abstract-26 fs-9 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>{{ $relCount }} Relasi
                                                    </span>
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end::Container Pilih Tabel-->

                    <!--begin::Actions-->
                    <div class="text-center pt-5">
                        <button type="reset" id="kt_modal_backup_db_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" id="kt_modal_backup_db_submit" class="btn btn-primary">
                            <span class="indicator-label">Proses Backup</span>
                            <span class="indicator-progress">
                                Mohon tunggu... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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
<!--end::Modal - Backup Database-->
