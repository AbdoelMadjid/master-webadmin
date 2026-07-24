@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Manajemen Pengguna
        @endslot
        @slot('li_2')
            Permission
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Stats Summary Cards-->
            <div class="row g-5 g-xl-8 mb-6">
                <div class="col-md-4">
                    <div class="card card-flush h-md-100 bg-body border border-dashed border-primary">
                        <div class="card-body d-flex align-items-center justify-content-between p-6">
                            <div>
                                <span class="fs-2hx fw-bold text-primary">{{ $totalPermissions }}</span>
                                <span class="text-gray-600 fw-semibold d-block fs-6 mt-1">Total Permission Terdaftar</span>
                            </div>
                            <div class="symbol symbol-50px">
                                <span class="symbol-label bg-light-primary text-primary">
                                    <i class="ki-duotone ki-key fs-2x text-primary"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-flush h-md-100 bg-body border border-dashed border-info">
                        <div class="card-body d-flex align-items-center justify-content-between p-6">
                            <div>
                                <span class="fs-2hx fw-bold text-info">{{ $totalModules }}</span>
                                <span class="text-gray-600 fw-semibold d-block fs-6 mt-1">Total Modul / Fitur Aplikasi</span>
                            </div>
                            <div class="symbol symbol-50px">
                                <span class="symbol-label bg-light-info text-info">
                                    <i class="ki-duotone ki-element-11 fs-2x text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-flush h-md-100 bg-body border border-dashed {{ $unassignedCount > 0 ? 'border-warning' : 'border-success' }}">
                        <div class="card-body d-flex align-items-center justify-content-between p-6">
                            <div>
                                <span class="fs-2hx fw-bold {{ $unassignedCount > 0 ? 'text-warning' : 'text-success' }}">{{ $unassignedCount }}</span>
                                <span class="text-gray-600 fw-semibold d-block fs-6 mt-1">Modul Belum Ditugaskan</span>
                            </div>
                            <div class="symbol symbol-50px">
                                <span class="symbol-label {{ $unassignedCount > 0 ? 'bg-light-warning text-warning' : 'bg-light-success text-success' }}">
                                    <i class="ki-duotone ki-shield-tick fs-2x {{ $unassignedCount > 0 ? 'text-warning' : 'text-success' }}"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Stats Summary Cards-->

            <!--begin::Main Card-->
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title gap-3 flex-wrap">
                        <!--begin::Search Filter-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>
                            <input type="text" id="kt_permissions_search" class="form-control form-control-solid w-250px ps-13" placeholder="Cari Modul / Fitur..." />
                        </div>
                        <!--end::Search Filter-->

                        <!--begin::Role Filter Dropdown & Reset-->
                        <div class="d-flex align-items-center gap-2 my-1">
                            <div class="w-180px">
                                <select id="filter_role" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Filter Role">
                                    <option value="all" selected>All / Semua Role</option>
                                    <option value="unassigned">Belum Ditugaskan</option>
                                    @foreach($roles as $role)
                                        <option value="{{ strtolower($role->name) }}">{{ ucfirst($role->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="button" class="btn btn-light-danger btn-sm d-none" id="btn_reset_filter" title="Reset Filter ke Default">
                                <i class="ki-duotone ki-arrows-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Reset Filter
                            </button>
                        </div>
                        <!--end::Role Filter Dropdown & Reset-->
                    </div>
                    <div class="card-toolbar gap-2">
                        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_permission" id="btn_add_batch_permission">
                            <i class="ki-duotone ki-flash fs-2"><span class="path1"></span><span class="path2"></span></i> + Modul CRUD (Praktis)
                        </button>
                        <button type="button" class="btn btn-light-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_permission" id="btn_add_single_permission">
                            <i class="ki-duotone ki-plus fs-2"></i> Single Permission
                        </button>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_permissions_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-180px">Modul / Fitur Aplikasi</th>
                                    <th class="min-w-220px">Tipe Aksi Terdaftar (CRUD)</th>
                                    <th class="min-w-200px">Ditugaskan Ke Role</th>
                                    <th class="min-w-100px">Jumlah Izin</th>
                                    <th class="text-end min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach($modules as $module)
                                    @php
                                        $assignedRoleNames = collect($module->roles)->map(fn($r) => strtolower($r))->join(' ');
                                    @endphp
                                    <tr data-roles="{{ $assignedRoleNames }}">
                                        <td>
                                            <code class="text-gray-900 fw-bold fs-6">{{ $module->module_name }}</code>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1.5 flex-wrap">
                                                @foreach($module->actions as $act)
                                                    @php
                                                        $badgeClass = match($act->action_type) {
                                                            'create' => 'badge-light-success',
                                                            'read'   => 'badge-light-info',
                                                            'update' => 'badge-light-warning',
                                                            'delete' => 'badge-light-danger',
                                                            default  => 'badge-light-primary'
                                                        };
                                                    @endphp
                                                    <span class="badge {{ $badgeClass }} fw-bold text-uppercase fs-8 py-1.5 px-2.5" title="{{ $act->name }}">
                                                        {{ strtoupper($act->action_type) }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td>
                                            @forelse($module->roles as $roleName)
                                                <span class="badge badge-light-primary me-1 mb-1">{{ ucfirst($roleName) }}</span>
                                            @empty
                                                <span class="badge badge-light-secondary text-gray-500 fs-8">Belum ditugaskan</span>
                                            @endforelse
                                        </td>
                                        <td>
                                            <span class="badge badge-light-secondary text-gray-800 fw-bold fs-7">{{ $module->total_perms }} Akses</span>
                                        </td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px me-1 btn-edit-module" data-module="{{ $module->module_name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Akses Modul '{{ $module->module_name }}'">
                                                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-active-light-danger w-30px h-30px btn-delete-module" data-module="{{ $module->module_name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Modul '{{ $module->module_name }}'">
                                                <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end::Main Card-->
        </div>
    </div>

    @include('pages.manajemenpengguna.partials.permission-form')
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $(document).ready(function() {
            var permissionsTable = $('#kt_permissions_table').DataTable({
                pageLength: 10,
                order: [],
                language: {
                    search: "",
                    searchPlaceholder: "Cari Modul / Fitur..."
                }
            });

            function checkFilterResetVisibility() {
                var searchVal = $('#kt_permissions_search').val().trim();
                var roleVal = $('#filter_role').val();

                if (searchVal !== '' || (roleVal !== 'all' && roleVal !== '')) {
                    $('#btn_reset_filter').removeClass('d-none');
                } else {
                    $('#btn_reset_filter').addClass('d-none');
                }
            }

            // Fast Search Filter
            $('#kt_permissions_search').on('keyup', function() {
                permissionsTable.search(this.value).draw();
                checkFilterResetVisibility();
            });

            // Custom Role Filter Dropdown
            $('#filter_role').on('change', function() {
                var selectedRole = $(this).val().toLowerCase();
                if(selectedRole === 'unassigned') {
                    permissionsTable.column(2).search('Belum ditugaskan').draw();
                } else if(selectedRole === 'all' || !selectedRole) {
                    permissionsTable.column(2).search('').draw();
                } else {
                    permissionsTable.column(2).search(selectedRole).draw();
                }
                checkFilterResetVisibility();
            });

            // Reset Filter Button Handler
            $('#btn_reset_filter').on('click', function() {
                $('#kt_permissions_search').val('');
                $('#filter_role').val('all').trigger('change.select2');
                permissionsTable.search('').column(2).search('').draw();
                $(this).addClass('d-none');
            });

            // Quick Select / Deselect All Roles Handlers
            $('#btn_select_all_batch_roles').on('click', function() {
                $('.perm-batch-role-checkbox').prop('checked', true);
            });
            $('#btn_deselect_all_batch_roles').on('click', function() {
                $('.perm-batch-role-checkbox').prop('checked', false);
            });
            $('#btn_select_all_single_roles').on('click', function() {
                $('.perm-role-checkbox').prop('checked', true);
            });
            $('#btn_deselect_all_single_roles').on('click', function() {
                $('.perm-role-checkbox').prop('checked', false);
            });

            // Handler Tambah Modul CRUD Batch
            $('#btn_add_batch_permission').on('click', function() {
                $('#permission_modal_title').text('Tambah Permission Modul (Batch CRUD)');
                $('#permissionTab').removeClass('d-none');
                $('#tab_batch_btn').tab('show');
                $('#kt_modal_permission_batch_form')[0].reset();
                $('#kt_modal_permission_batch_form').data('mode', 'store');
                $('.batch-action-checkbox').prop('checked', true);
                $('.perm-batch-role-checkbox').prop('checked', false);
            });

            // Handler Tambah Single Permission
            $('#btn_add_single_permission').on('click', function() {
                $('#permission_modal_title').text('Tambah Single Permission');
                $('#permissionTab').removeClass('d-none');
                $('#tab_single_btn').tab('show');
                $('#kt_modal_permission_form')[0].reset();
                $('#permission_id').val('');
                $('.perm-role-checkbox').prop('checked', false);
            });

            // Edit Module Batch Handler
            $(document).on('click', '.btn-edit-module', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-edit-module');
                var moduleName = btn.data('module') || $(this).data('module');
                if (!moduleName) return;

                var encodedModule = btoa(moduleName);

                $.ajax({
                    url: "{{ url('manajemenpengguna/permissions/module') }}/" + encodedModule,
                    type: 'GET',
                    dataType: 'json',
                    success: function(res) {
                        if(res.success) {
                            $('#permission_modal_title').text('Edit Hak Akses Modul (Batch): ' + res.module_name);
                            $('#permissionTab').removeClass('d-none');
                            $('#tab_batch_btn').tab('show');
                            
                            $('#batch_module_name').val(res.module_name);
                            
                            $('.batch-action-checkbox').prop('checked', false);
                            if(res.existing_actions) {
                                res.existing_actions.forEach(function(act) {
                                    $(".batch-action-checkbox[value='" + act + "']").prop('checked', true);
                                });
                            }
                            
                            $('.perm-batch-role-checkbox').prop('checked', false);
                            if(res.assigned_roles) {
                                res.assigned_roles.forEach(function(role) {
                                    $(".perm-batch-role-checkbox[value='" + role + "']").prop('checked', true);
                                });
                            }

                            $('#kt_modal_permission_batch_form').data('mode', 'update');
                            $('#kt_modal_permission').modal('show');
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.error(xhr.responseJSON?.message || 'Gagal mengambil data modul.');
                    }
                });
            });

            // Batch CRUD Form Submit Handler
            $('#kt_modal_permission_batch_form').on('submit', function(e) {
                e.preventDefault();
                var btn = $('#kt_modal_permission_batch_submit');
                btn.prop('disabled', true);

                var mode = $(this).data('mode');
                var targetUrl = (mode === 'update') 
                    ? "{{ route('manajemenpengguna.permissions.module-update') }}"
                    : "{{ route('manajemenpengguna.permissions.store-batch') }}";

                $.ajax({
                    url: targetUrl,
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(res) {
                        btn.prop('disabled', false);
                        if(res.success) {
                            $('#kt_modal_permission').modal('hide');
                            SwalHelper.success(res.message);
                        }
                    },
                    error: function(xhr) {
                        btn.prop('disabled', false);
                        SwalHelper.validationError(xhr);
                    }
                });
            });

            // Single Form Submit Handler
            $('#kt_modal_permission_form').on('submit', function(e) {
                e.preventDefault();
                var permId = $('#permission_id').val();
                var url = permId ? "{{ url('manajemenpengguna/permissions') }}/" + permId : "{{ route('manajemenpengguna.permissions.store') }}";
                var type = permId ? "PUT" : "POST";
                var btn = $('#kt_modal_permission_submit');
                btn.prop('disabled', true);

                $.ajax({
                    url: url,
                    type: type,
                    data: $(this).serialize(),
                    success: function(res) {
                        btn.prop('disabled', false);
                        if(res.success) {
                            $('#kt_modal_permission').modal('hide');
                            SwalHelper.success(res.message);
                        }
                    },
                    error: function(xhr) {
                        btn.prop('disabled', false);
                        SwalHelper.validationError(xhr);
                    }
                });
            });

            // Delete Module Handler
            $(document).on('click', '.btn-delete-module', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-delete-module');
                var moduleName = btn.data('module') || $(this).data('module');
                if (!moduleName) return;

                SwalHelper.confirmDelete("seluruh hak akses modul '" + moduleName + "'", function() {
                    var encodedModule = btoa(moduleName);
                    $.ajax({
                        url: "{{ url('manajemenpengguna/permissions/module') }}/" + encodedModule,
                        type: "DELETE",
                        data: { _token: "{{ csrf_token() }}" },
                        success: function(res) {
                            if(res.success) {
                                SwalHelper.success(res.message);
                            }
                        },
                        error: function(xhr) {
                            SwalHelper.error(xhr.responseJSON?.message || 'Gagal menghapus modul.');
                        }
                    });
                });
            });
        });
    </script>
@endsection
