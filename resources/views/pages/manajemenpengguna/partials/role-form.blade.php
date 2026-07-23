<div class="modal fade" id="kt_modal_role" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_role_header">
                <h2 class="fw-bold" id="role_modal_title">Tambah Role Baru</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form id="kt_modal_role_form" class="form" action="#">
                @csrf
                <input type="hidden" name="id" id="role_id" value="">
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Nama Role</label>
                        <input type="text" name="name" id="role_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Masukkan nama role (misal: admin, developer)" required />
                    </div>

                    <div class="fv-row">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <div>
                                <label class="fs-6 fw-bold text-gray-800 mb-0">Hak Akses / Permissions (CRUD Matrix)</label>
                                <span class="text-muted fs-7 d-block">Pilih izin fitur yang berlaku untuk role ini</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <div class="d-flex align-items-center position-relative">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"><span class="path1"></span><span class="path2"></span></i>
                                    <input type="text" id="role_modal_perm_search" class="form-control form-control-solid form-control-sm w-150px ps-9" placeholder="Cari Modul..." />
                                </div>
                                <button type="button" class="btn btn-sm btn-light-primary" id="btn_modal_role_select_all">
                                    Pilih Semua
                                </button>
                                <button type="button" class="btn btn-sm btn-light-danger" id="btn_modal_role_deselect_all">
                                    Kosongkan
                                </button>
                            </div>
                        </div>

                        <!--begin::Matrix Container (Vertical Scroll Only, No Horizontal Scroll)-->
                        <div class="border rounded max-h-350px scroll-y overflow-x-hidden">
                            <table class="table table-row-bordered table-row-gray-300 align-middle gs-3 gy-3 mb-0 w-100" id="role_modal_matrix_table" style="table-layout: fixed;">
                                <thead class="table-light text-gray-700 fw-bold fs-7 text-uppercase sticky-top">
                                    <tr>
                                        <th style="width: 45%;">Modul / Fitur</th>
                                        <th class="text-center" style="width: 8%;">Create</th>
                                        <th class="text-center" style="width: 8%;">Read</th>
                                        <th class="text-center" style="width: 8%;">Update</th>
                                        <th class="text-center" style="width: 8%;">Delete</th>
                                        <th class="text-center" style="width: 15%;">Lainnya</th>
                                        <th class="text-center" style="width: 8%;">Semua</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold fs-7">
                                    @foreach($matrixPermissions as $module => $actions)
                                        <tr class="role-modal-matrix-row" data-module="{{ strtolower($module) }}">
                                            <td class="fw-bold text-gray-800 text-break pe-2">
                                                <code class="text-break" style="word-break: break-word;">{{ $module }}</code>
                                            </td>
                                            
                                            {{-- Create --}}
                                            <td class="text-center">
                                                @if(!empty($actions['create']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input role-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['create'] }}" id="perm_{{ md5($actions['create']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Read --}}
                                            <td class="text-center">
                                                @if(!empty($actions['read']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input role-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['read'] }}" id="perm_{{ md5($actions['read']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Update --}}
                                            <td class="text-center">
                                                @if(!empty($actions['update']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input role-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['update'] }}" id="perm_{{ md5($actions['update']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Delete --}}
                                            <td class="text-center">
                                                @if(!empty($actions['delete']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input role-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['delete'] }}" id="perm_{{ md5($actions['delete']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Custom Actions --}}
                                            <td class="text-center">
                                                @forelse($actions['custom'] as $custom)
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center mb-1" title="{{ $custom['name'] }}">
                                                        <input class="form-check-input role-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $custom['name'] }}" id="perm_{{ md5($custom['name']) }}" />
                                                        <span class="form-check-label fs-8 text-capitalize ms-1">{{ $custom['action'] }}</span>
                                                    </label>
                                                @empty
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endforelse
                                            </td>

                                            {{-- Row Select All --}}
                                            <td class="text-center">
                                                <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                    <input class="form-check-input role-modal-row-toggle" type="checkbox" title="Pilih semua izin di baris modul ini" />
                                                </label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end::Matrix Container-->
                    </div>
                </div>

                <div class="modal-footer flex-center">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="kt_modal_role_submit">
                        <span class="indicator-label">Simpan Role</span>
                        <span class="indicator-progress">Memproses...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
