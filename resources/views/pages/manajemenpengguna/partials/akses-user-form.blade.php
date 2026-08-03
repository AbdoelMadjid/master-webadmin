<div class="modal fade" id="kt_modal_akses_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
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
                        <label class="fs-6 fw-bold mb-2 text-gray-800 d-flex align-items-center justify-content-between">
                            <span>1. Penugasan Role (Roles Assignment)</span>
                            <span class="text-muted fs-7">Centang role untuk pengguna ini</span>
                        </label>
                        <div class="row g-3">
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
                                        <input class="form-check-input akses-user-role-checkbox h-20px w-20px flex-shrink-0" type="checkbox" name="roles[]" value="{{ $role->name }}" id="akses_user_role_{{ $role->id }}" />
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="fv-row">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <div>
                                <label class="fs-6 fw-bold text-gray-800 mb-0">2. Hak Akses Langsung (Direct Permissions Matrix)</label>
                                <span class="text-muted fs-7 d-block">Diurutkan per Modul & Matriks CRUD (Hierarki Level 1-3)</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <div class="d-flex align-items-center position-relative">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"><span class="path1"></span><span class="path2"></span></i>
                                    <input type="text" id="akses_user_modal_perm_search" class="form-control form-control-solid form-control-sm w-150px ps-9" placeholder="Cari Modul..." />
                                </div>
                                <button type="button" class="btn btn-sm btn-light-primary" id="btn_modal_akses_user_select_all">
                                    Pilih Semua
                                </button>
                                <button type="button" class="btn btn-sm btn-light-danger" id="btn_modal_akses_user_deselect_all">
                                    Kosongkan
                                </button>
                            </div>
                        </div>
                        <div class="border rounded max-h-350px scroll-y overflow-x-hidden">
                            <table class="table table-row-bordered table-row-gray-300 align-middle gs-3 gy-3 mb-0 w-100" style="table-layout: fixed;">
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
                                        @php
                                            $menuDepth = $actions['depth'] ?? 0;
                                            $menuName = $actions['menu_name'] ?? $module;
                                            $parentName = $actions['parent_name'] ?? null;
                                            $icon = $actions['icon'] ?? null;
                                            $paths = $actions['paths'] ?? 0;
                                        @endphp
                                        <tr class="akses-user-modal-matrix-row {{ $menuDepth == 1 ? 'bg-light-secondary' : ($menuDepth >= 2 ? 'bg-light-warning' : '') }}"
                                            data-module="{{ strtolower($module) }}"
                                            data-menu-name="{{ strtolower($menuName) }}"
                                            data-parent-module="{{ strtolower($actions['parent_module'] ?? '') }}"
                                            style="{{ $menuDepth > 0 ? 'background-color: ' . ($menuDepth >= 2 ? 'rgba(255,199,0,0.04)' : 'rgba(0,0,0,0.018)') . ' !important;' : '' }}">
                                            <td class="align-middle pe-2">
                                                <div class="d-flex align-items-center" style="padding-left: {{ $menuDepth * 18 }}px;">
                                                    {{-- Level indicators --}}
                                                    @if ($menuDepth == 1)
                                                        <span class="text-gray-300 me-1 fs-7" style="white-space:nowrap;">└─</span>
                                                    @elseif ($menuDepth >= 2)
                                                        <span class="text-gray-300 me-1 fs-7" style="white-space:nowrap;">└──</span>
                                                    @endif

                                                    @if ($icon)
                                                        <span class="symbol symbol-30px me-2 flex-shrink-0">
                                                            <span class="symbol-label {{ $menuDepth == 0 ? 'bg-light-primary' : ($menuDepth == 1 ? 'bg-light-info' : 'bg-light-warning') }}">
                                                                <i class="{{ $icon }} {{ $menuDepth == 0 ? 'text-primary' : ($menuDepth == 1 ? 'text-info' : 'text-warning') }} fs-4">
                                                                    @for ($i = 1; $i <= $paths; $i++)
                                                                        <span class="path{{ $i }}"></span>
                                                                    @endfor
                                                                </i>
                                                            </span>
                                                        </span>
                                                    @else
                                                        <span class="symbol symbol-30px me-2 flex-shrink-0">
                                                            <span class="symbol-label {{ $menuDepth == 0 ? 'bg-light-primary' : ($menuDepth == 1 ? 'bg-light-info' : 'bg-light-warning') }}">
                                                                <i class="ki-duotone ki-element-11 {{ $menuDepth == 0 ? 'text-primary' : ($menuDepth == 1 ? 'text-info' : 'text-warning') }} fs-4">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                    @endif

                                                    <div class="d-flex flex-column" style="min-width: 0;">
                                                        <div class="d-flex align-items-center gap-1 mb-1 flex-wrap">
                                                            <span class="{{ $menuDepth == 0 ? 'text-gray-900 fw-bolder' : ($menuDepth == 1 ? 'text-gray-800 fw-bold' : 'text-gray-700 fw-semibold') }} fs-{{ $menuDepth == 0 ? '6' : ($menuDepth == 1 ? '6' : '7') }}">
                                                                {{ $menuName }}
                                                            </span>
                                                            <code class="text-dark bg-light px-1.5 py-0.5 rounded fs-8 text-break" style="word-break: break-all;">{{ $module }}</code>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-1">
                                                            @if ($menuDepth == 0)
                                                                <span class="badge badge-light-dark fs-8 py-0.5 px-1.5">
                                                                    <i class="ki-duotone ki-home fs-9 me-1"><span class="path1"></span><span class="path2"></span></i>
                                                                    Menu Utama
                                                                </span>
                                                            @elseif ($menuDepth == 1)
                                                                <span class="badge badge-light-primary fs-8 py-0.5 px-1.5">
                                                                    <i class="ki-duotone ki-arrow-down fs-9 me-1"><span class="path1"></span></i>
                                                                    Sub: {{ $parentName ?? '-' }}
                                                                </span>
                                                            @elseif ($menuDepth >= 2)
                                                                <span class="badge badge-light-warning fs-8 py-0.5 px-1.5">
                                                                    <i class="ki-duotone ki-arrow-down fs-9 me-1"><span class="path1"></span></i>
                                                                    Sub-Sub: {{ $parentName ?? '-' }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
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

                                            {{-- Row Select All --}}
                                            <td class="text-center">
                                                <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                    <input class="form-check-input akses-user-modal-row-toggle" type="checkbox" title="Pilih semua izin di baris modul ini" />
                                                </label>
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
