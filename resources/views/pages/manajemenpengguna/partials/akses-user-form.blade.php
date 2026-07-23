<div class="modal fade" id="kt_modal_akses_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold" id="akses_user_modal_title">Kelola Hak Akses Pengguna</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form id="kt_modal_akses_user_form" class="form" action="#">
                @csrf
                <input type="hidden" name="user_id" id="akses_user_id" value="">
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <div class="d-flex align-items-center gap-3 mb-6 p-4 rounded bg-light-primary">
                        <i class="ki-duotone ki-user fs-2hx text-primary"><span class="path1"></span><span class="path2"></span></i>
                        <div>
                            <h4 class="fw-bold mb-0 text-gray-900" id="akses_user_name_display">-</h4>
                            <span class="fs-7 text-muted" id="akses_user_email_display">-</span>
                        </div>
                    </div>

                    <div class="fv-row mb-7">
                        <label class="fs-6 fw-bold mb-2 text-gray-800">1. Penugasan Role (Roles Assignment)</label>
                        <div class="d-flex flex-wrap gap-4 p-3 rounded border border-dashed">
                            @foreach($roles as $role)
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input akses-user-role-checkbox" type="checkbox" name="roles[]" value="{{ $role->name }}" id="akses_user_role_{{ $role->id }}" />
                                    <span class="form-check-label text-gray-800 fw-semibold">{{ ucfirst($role->name) }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="fv-row">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <label class="fs-6 fw-bold text-gray-800 mb-0">2. Hak Akses Langsung (Direct Permissions Matrix)</label>
                            <span class="text-muted fs-7">Diurutkan per Modul & Matriks CRUD</span>
                        </div>
                        <div class="border rounded max-h-350px scroll-y overflow-x-hidden">
                            <table class="table table-row-bordered table-row-gray-300 align-middle gs-3 gy-3 mb-0 w-100" style="table-layout: fixed;">
                                <thead class="table-light text-gray-700 fw-bold fs-7 text-uppercase sticky-top">
                                    <tr>
                                        <th style="width: 40%;">Modul / Fitur</th>
                                        <th class="text-center" style="width: 12%;">Create</th>
                                        <th class="text-center" style="width: 12%;">Read</th>
                                        <th class="text-center" style="width: 12%;">Update</th>
                                        <th class="text-center" style="width: 12%;">Delete</th>
                                        <th class="text-center" style="width: 12%;">Lainnya</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold fs-7">
                                    @foreach($matrixPermissions as $module => $actions)
                                        <tr>
                                            <td class="fw-bold text-gray-800 pe-2">
                                                <code class="text-break" style="word-break: break-word;">{{ $module }}</code>
                                            </td>
                                            
                                            {{-- Create --}}
                                            <td class="text-center">
                                                @if(!empty($actions['create']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input akses-user-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['create'] }}" id="akses_user_perm_{{ md5($actions['create']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Read --}}
                                            <td class="text-center">
                                                @if(!empty($actions['read']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input akses-user-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['read'] }}" id="akses_user_perm_{{ md5($actions['read']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Update --}}
                                            <td class="text-center">
                                                @if(!empty($actions['update']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input akses-user-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['update'] }}" id="akses_user_perm_{{ md5($actions['update']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Delete --}}
                                            <td class="text-center">
                                                @if(!empty($actions['delete']))
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                        <input class="form-check-input akses-user-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['delete'] }}" id="akses_user_perm_{{ md5($actions['delete']) }}" />
                                                    </label>
                                                @else
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endif
                                            </td>

                                            {{-- Custom Actions --}}
                                            <td class="text-center">
                                                @forelse($actions['custom'] as $custom)
                                                    <label class="form-check form-check-custom form-check-solid justify-content-center mb-1" title="{{ $custom['name'] }}">
                                                        <input class="form-check-input akses-user-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $custom['name'] }}" id="akses_user_perm_{{ md5($custom['name']) }}" />
                                                        <span class="form-check-label fs-8 text-capitalize ms-1">{{ $custom['action'] }}</span>
                                                    </label>
                                                @empty
                                                    <span class="text-gray-400 fs-8">-</span>
                                                @endforelse
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="kt_modal_akses_user_submit">
                        <span class="indicator-label">Simpan Akses</span>
                        <span class="indicator-progress">Memproses...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
