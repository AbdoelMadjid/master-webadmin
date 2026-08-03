@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Manajemen Pengguna
        @endslot
        @slot('li_2')
            Akses Role
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Header Card-->
            <div class="card mb-5">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="ki-duotone ki-shield-tick fs-2hx text-primary"><span class="path1"></span><span class="path2"></span></i>
                            <div>
                                <h3 class="fw-bold mb-0">Manajemen Hak Akses Role (Role-Permissions Matrix)</h3>
                                <span class="text-muted fs-7">Kelola matrik izin fitur untuk setiap role pengguna secara praktis dan terpusat.</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge badge-light-primary fs-7 fw-bold me-2" id="total_perms_info">Total {{ count($permissions) }} Permissions</span>
                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                                <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_akses_role_help">
                                    <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Header Card-->

            <div class="row g-6">
                <!--begin::Role Selector List-->
                <div class="col-md-4 col-xl-3">
                    <div class="card card-flush">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="fw-bold fs-5 mb-0">Pilih Role</h3>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="nav flex-column nav-pills me-3" id="role-tab" role="tablist" aria-orientation="vertical">
                                @foreach($roles as $index => $role)
                                    @php
                                        $isActiveRole = isset($selectedRoleId) ? ($role->id == $selectedRoleId) : ($index === 0);
                                    @endphp
                                    <button class="nav-link text-start mb-2 p-3 {{ $isActiveRole ? 'active' : '' }} btn-select-role" id="tab_role_{{ $role->id }}" data-bs-toggle="pill" data-bs-target="#content_role_{{ $role->id }}" type="button" role="tab" data-role-id="{{ $role->id }}" data-role-name="{{ $role->name }}">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="fw-bold fs-6">{{ ucfirst($role->name) }}</span>
                                            <span class="badge badge-light-primary rounded-pill ms-2 role-perm-badge" id="role_badge_{{ $role->id }}">{{ $role->permissions->count() }} Izin</span>
                                        </div>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Role Selector List-->

                <!--begin::Permission Matrix Area-->
                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header border-0 pt-5">
                            <div class="card-title d-flex flex-column">
                                @php
                                    $activeRoleObj = isset($selectedRoleId) ? $roles->firstWhere('id', $selectedRoleId) : $roles->first();
                                @endphp
                                <h3 class="fw-bold text-gray-900 mb-1" id="selected_role_title">Hak Akses Role: {{ ucfirst($activeRoleObj?->name ?? 'Role') }}</h3>
                                <span class="text-muted fs-7">Matriks Izin Akses CRUD per Modul Aplikasi</span>
                            </div>
                            <div class="card-toolbar gap-2 flex-wrap">
                                <div class="d-flex align-items-center position-relative me-2">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3"><span class="path1"></span><span class="path2"></span></i>
                                    <input type="text" id="role_matrix_search" class="form-control form-control-solid form-control-sm w-175px ps-9" placeholder="Cari Modul..." />
                                </div>
                                <button type="button" class="btn btn-sm btn-light-primary" id="btn_select_all_perms">
                                    <i class="ki-duotone ki-check-square fs-5 me-1"><span class="path1"></span><span class="path2"></span></i> Pilih Semua
                                </button>
                                <button type="button" class="btn btn-sm btn-light-danger" id="btn_deselect_all_perms">
                                    <i class="ki-duotone ki-cross-square fs-5 me-1"><span class="path1"></span><span class="path2"></span></i> Kosongkan
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-3">
                            <form id="form_akses_role" action="#">
                                @csrf
                                <input type="hidden" name="role_id" id="active_role_id" value="{{ $activeRoleObj?->id }}">

                                <div class="tab-content" id="role-tabContent">
                                    @foreach($roles as $index => $role)
                                        @php
                                            $assignedPerms = $role->permissions->pluck('name')->toArray();
                                            $isActiveRole = isset($selectedRoleId) ? ($role->id == $selectedRoleId) : ($index === 0);
                                        @endphp
                                        <div class="tab-pane fade {{ $isActiveRole ? 'show active' : '' }}" id="content_role_{{ $role->id }}" role="tabpanel">
                                            <div class="table-responsive border rounded max-h-500px scroll-y">
                                                <table class="table table-row-bordered table-row-gray-300 align-middle gs-4 gy-3 mb-0 role-matrix-table">
                                                    <thead class="table-light text-gray-700 fw-bold fs-7 text-uppercase sticky-top">
                                                        <tr>
                                                            <th class="min-w-250px">Modul / Fitur</th>
                                                            <th class="text-center min-w-70px">Create</th>
                                                            <th class="text-center min-w-70px">Read</th>
                                                            <th class="text-center min-w-70px">Update</th>
                                                            <th class="text-center min-w-70px">Delete</th>
                                                            <th class="text-center min-w-90px">Lainnya</th>
                                                            <th class="text-center min-w-70px">Semua</th>
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
                                                            <tr class="matrix-row {{ $menuDepth == 1 ? 'bg-light-secondary' : ($menuDepth >= 2 ? 'bg-light-warning' : '') }}"
                                                                data-module="{{ strtolower($module) }}"
                                                                data-menu-name="{{ strtolower($menuName) }}"
                                                                data-parent-module="{{ strtolower($actions['parent_module'] ?? '') }}"
                                                                style="{{ $menuDepth > 0 ? 'background-color: ' . ($menuDepth >= 2 ? 'rgba(255,199,0,0.04)' : 'rgba(0,0,0,0.018)') . ' !important;' : '' }}">
                                                                <td class="align-middle">
                                                                    <div class="d-flex align-items-center" style="padding-left: {{ $menuDepth * 24 }}px;">
                                                                        {{-- Level indicators --}}
                                                                        @if ($menuDepth == 1)
                                                                            <span class="text-gray-300 me-2 fs-7" style="white-space:nowrap;">└─</span>
                                                                        @elseif ($menuDepth >= 2)
                                                                            <span class="text-gray-300 me-2 fs-7" style="white-space:nowrap;">└──</span>
                                                                        @endif

                                                                        @if ($icon)
                                                                            <span class="symbol symbol-35px me-3 flex-shrink-0">
                                                                                <span class="symbol-label {{ $menuDepth == 0 ? 'bg-light-primary' : ($menuDepth == 1 ? 'bg-light-info' : 'bg-light-warning') }}">
                                                                                    <i class="{{ $icon }} {{ $menuDepth == 0 ? 'text-primary' : ($menuDepth == 1 ? 'text-info' : 'text-warning') }} fs-3">
                                                                                        @for ($i = 1; $i <= $paths; $i++)
                                                                                            <span class="path{{ $i }}"></span>
                                                                                        @endfor
                                                                                    </i>
                                                                                </span>
                                                                            </span>
                                                                        @else
                                                                            <span class="symbol symbol-35px me-3 flex-shrink-0">
                                                                                <span class="symbol-label {{ $menuDepth == 0 ? 'bg-light-primary' : ($menuDepth == 1 ? 'bg-light-info' : 'bg-light-warning') }}">
                                                                                    <i class="ki-duotone ki-element-11 {{ $menuDepth == 0 ? 'text-primary' : ($menuDepth == 1 ? 'text-info' : 'text-warning') }} fs-3">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                        <span class="path3"></span>
                                                                                        <span class="path4"></span>
                                                                                    </i>
                                                                                </span>
                                                                            </span>
                                                                        @endif

                                                                        <div class="d-flex flex-column">
                                                                            <div class="d-flex align-items-center gap-2 mb-1 flex-wrap">
                                                                                <span class="{{ $menuDepth == 0 ? 'text-gray-900 fw-bolder' : ($menuDepth == 1 ? 'text-gray-800 fw-bold' : 'text-gray-700 fw-semibold') }} fs-{{ $menuDepth == 0 ? '6' : ($menuDepth == 1 ? '6' : '7') }}">
                                                                                    {{ $menuName }}
                                                                                </span>
                                                                                <code class="text-dark bg-light px-2 py-0-5 rounded fs-8">{{ $module }}</code>
                                                                            </div>
                                                                            <div class="d-flex align-items-center gap-2">
                                                                                @if ($menuDepth == 0)
                                                                                    <span class="badge badge-light-dark fs-8 py-1 px-2">
                                                                                        <i class="ki-duotone ki-home fs-9 me-1"><span class="path1"></span><span class="path2"></span></i>
                                                                                        Menu Utama
                                                                                    </span>
                                                                                @elseif ($menuDepth == 1)
                                                                                    <span class="badge badge-light-primary fs-8 py-1 px-2">
                                                                                        <i class="ki-duotone ki-arrow-down fs-9 me-1"><span class="path1"></span></i>
                                                                                        Sub: {{ $parentName ?? '-' }}
                                                                                    </span>
                                                                                @elseif ($menuDepth >= 2)
                                                                                    <span class="badge badge-light-warning fs-8 py-1 px-2">
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
                                                                            <input class="form-check-input matrix-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['create'] }}" {{ in_array($actions['create'], $assignedPerms) ? 'checked' : '' }} />
                                                                        </label>
                                                                    @else
                                                                        <span class="text-gray-400 fs-8">-</span>
                                                                    @endif
                                                                </td>

                                                                {{-- Read --}}
                                                                <td class="text-center">
                                                                    @if(!empty($actions['read']))
                                                                        <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                                            <input class="form-check-input matrix-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['read'] }}" {{ in_array($actions['read'], $assignedPerms) ? 'checked' : '' }} />
                                                                        </label>
                                                                    @else
                                                                        <span class="text-gray-400 fs-8">-</span>
                                                                    @endif
                                                                </td>

                                                                {{-- Update --}}
                                                                <td class="text-center">
                                                                    @if(!empty($actions['update']))
                                                                        <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                                            <input class="form-check-input matrix-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['update'] }}" {{ in_array($actions['update'], $assignedPerms) ? 'checked' : '' }} />
                                                                        </label>
                                                                    @else
                                                                        <span class="text-gray-400 fs-8">-</span>
                                                                    @endif
                                                                </td>

                                                                {{-- Delete --}}
                                                                <td class="text-center">
                                                                    @if(!empty($actions['delete']))
                                                                        <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                                            <input class="form-check-input matrix-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $actions['delete'] }}" {{ in_array($actions['delete'], $assignedPerms) ? 'checked' : '' }} />
                                                                        </label>
                                                                    @else
                                                                        <span class="text-gray-400 fs-8">-</span>
                                                                    @endif
                                                                </td>

                                                                {{-- Custom Actions --}}
                                                                <td class="text-center">
                                                                    @forelse($actions['custom'] as $custom)
                                                                        <label class="form-check form-check-custom form-check-solid justify-content-center mb-1" title="{{ $custom['name'] }}">
                                                                            <input class="form-check-input matrix-perm-checkbox" type="checkbox" name="permissions[]" value="{{ $custom['name'] }}" {{ in_array($custom['name'], $assignedPerms) ? 'checked' : '' }} />
                                                                            <span class="form-check-label fs-8 text-capitalize ms-1">{{ $custom['action'] }}</span>
                                                                        </label>
                                                                    @empty
                                                                        <span class="text-gray-400 fs-8">-</span>
                                                                    @endforelse
                                                                </td>

                                                                {{-- Row Select All --}}
                                                                <td class="text-center">
                                                                    <label class="form-check form-check-custom form-check-solid justify-content-center">
                                                                        <input class="form-check-input row-toggle-checkbox" type="checkbox" title="Pilih semua izin di baris modul ini" />
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="d-flex justify-content-end align-items-center mt-6 gap-3">
                                    <button type="submit" class="btn btn-primary" id="btn_save_akses_role">
                                        <i class="ki-duotone ki-check fs-2"><span class="path1"></span><span class="path2"></span></i> Simpan Hak Akses Role
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Permission Matrix Area-->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function syncAksesRoleParentMenuState($row) {
                var parentModule = $row.attr('data-parent-module');
                if (!parentModule) return;

                var $table = $row.closest('table');
                var $parentRow = $table.find('tr[data-module="' + parentModule + '"]');
                if ($parentRow.length === 0) return;

                var $childRows = $table.find('tr[data-parent-module="' + parentModule + '"]');
                var hasAnyChildChecked = false;

                $childRows.each(function() {
                    if ($(this).find('.matrix-perm-checkbox:checked').length > 0) {
                        hasAnyChildChecked = true;
                        return false;
                    }
                });

                var $parentPerms = $parentRow.find('.matrix-perm-checkbox');
                var $readPerm = $parentPerms.filter(function() {
                    var val = ($(this).val() || '').toLowerCase();
                    return val.startsWith('read ');
                });

                if (hasAnyChildChecked) {
                    if ($readPerm.length > 0 && !$readPerm.is(':checked')) {
                        $readPerm.prop('checked', true);
                        updateAksesRoleRowToggleState($parentRow);
                        syncAksesRoleParentMenuState($parentRow);
                    }
                } else {
                    if ($readPerm.length > 0 && $readPerm.is(':checked')) {
                        $readPerm.prop('checked', false);
                        updateAksesRoleRowToggleState($parentRow);
                        syncAksesRoleParentMenuState($parentRow);
                    }
                }
            }

            function updateAksesRoleRowToggleState($row) {
                var $rowPerms = $row.find('.matrix-perm-checkbox');
                if ($rowPerms.length > 0) {
                    var allChecked = $rowPerms.length === $rowPerms.filter(':checked').length;
                    $row.find('.row-toggle-checkbox').prop('checked', allChecked);
                } else {
                    $row.find('.row-toggle-checkbox').prop('checked', false);
                }
            }

            function updateAllAksesRoleRowToggles($container) {
                var $target = ($container && $container.length) ? $container : $('.tab-pane');
                $target.find('.matrix-row').each(function() {
                    updateAksesRoleRowToggleState($(this));
                });
            }

            // Sync all row toggles across all role tabs on initial page load
            updateAllAksesRoleRowToggles();

            // Select Role Tab Handler
            $('.btn-select-role').on('click', function() {
                var roleId = $(this).data('role-id');
                var roleName = $(this).data('role-name');
                $('#active_role_id').val(roleId);
                $('#selected_role_title').text('Hak Akses Role: ' + roleName.charAt(0).toUpperCase() + roleName.slice(1));
                $('#role_matrix_search').val('');
                $('.matrix-row').show();

                var $targetTab = $('#content_role_' + roleId);
                updateAllAksesRoleRowToggles($targetTab);
            });

            // Bootstrap Tab switch event listener for absolute reliability
            $(document).on('shown.bs.tab', '.btn-select-role', function(e) {
                var targetId = $(e.target).data('bs-target') || $(e.target).attr('href');
                if (targetId) {
                    updateAllAksesRoleRowToggles($(targetId));
                }
            });

            // Live Search Filter for Modules
            $('#role_matrix_search').on('keyup', function() {
                var query = $(this).val().toLowerCase();
                var $activeTab = $('.tab-pane.show.active');

                $activeTab.find('.matrix-row').each(function() {
                    var moduleName = $(this).data('module') || '';
                    var menuName = $(this).data('menu-name') || '';
                    if (moduleName.indexOf(query) !== -1 || menuName.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            // Sync row toggle checkbox when individual permission checkbox is clicked
            $(document).on('change', '.matrix-perm-checkbox', function() {
                var $row = $(this).closest('tr');
                syncAksesRoleParentMenuState($row);
                updateAksesRoleRowToggleState($row);
            });

            // Row-level Select All Toggle
            $(document).on('change', '.row-toggle-checkbox', function() {
                var isChecked = $(this).is(':checked');
                var $row = $(this).closest('tr');
                $row.find('.matrix-perm-checkbox').prop('checked', isChecked);
                syncAksesRoleParentMenuState($row);
                updateAksesRoleRowToggleState($row);
            });

            // Bulk Select All for Active Role
            $('#btn_select_all_perms').on('click', function() {
                var $activeTab = $('.tab-pane.show.active');
                $activeTab.find('.matrix-perm-checkbox').prop('checked', true);
                updateAllAksesRoleRowToggles($activeTab);
            });

            // Bulk Deselect All for Active Role
            $('#btn_deselect_all_perms').on('click', function() {
                var $activeTab = $('.tab-pane.show.active');
                $activeTab.find('.matrix-perm-checkbox').prop('checked', false);
                updateAllAksesRoleRowToggles($activeTab);
            });

            // Form Submit Handler
            $('#form_akses_role').on('submit', function(e) {
                e.preventDefault();

                var $activeTab = $('.tab-pane.show.active');
                var activeRoleId = $('#active_role_id').val();
                var selectedPerms = [];

                $activeTab.find('.matrix-perm-checkbox:checked').each(function() {
                    selectedPerms.push($(this).val());
                });

                $.ajax({
                    url: "{{ route('manajemenpengguna.akses-role.update') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        role_id: activeRoleId,
                        permissions: selectedPerms
                    },
                    success: function(res) {
                        if(res.success) {
                            SwalHelper.success(res.message);
                            // Update badge count in sidebar
                            $('#role_badge_' + activeRoleId).text(selectedPerms.length + ' Izin');
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.validationError(xhr);
                    }
                });
            });
        });
    </script>
    @include('pages.manajemenpengguna.partials.akses-role-help-modal')
@endsection
