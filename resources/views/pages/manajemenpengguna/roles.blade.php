@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Manajemen Pengguna
        @endslot
        @slot('li_2')
            Role
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Role Cards Grid-->
            <div class="row g-6 g-xl-9 mb-8">
                @foreach($roles as $roleItem)
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-flush h-md-100">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ ucfirst($roleItem->name) }}</h2>
                                </div>
                            </div>
                            <div class="card-body pt-1">
                                <div class="fw-bold text-gray-600 mb-5">Total pengguna dengan role ini: {{ $roleItem->users_count }}</div>
                                <div class="d-flex flex-column text-gray-600">
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>{{ $roleItem->permissions_count }} Permissions Terhubung
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer flex-wrap pt-0">
                                <button type="button" class="btn btn-light btn-active-primary btn-sm my-1 me-2 btn-edit-role" data-id="{{ $roleItem->id }}">Edit Role</button>
                                @if($roleItem->name !== 'admin')
                                    <button type="button" class="btn btn-light-danger btn-active-danger btn-sm my-1 btn-delete-role" data-id="{{ $roleItem->id }}" data-name="{{ $roleItem->name }}">Hapus</button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--end::Role Cards Grid-->

            <!--begin::Card Datatable-->
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>
                            <input type="text" id="kt_roles_search" class="form-control form-control-solid w-250px ps-13" placeholder="Cari Role..." />
                        </div>
                    </div>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_role" id="btn_add_role">
                            <i class="ki-duotone ki-plus fs-2"></i> Tambah Role
                        </button>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_roles_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">Nama Role</th>
                                    <th class="min-w-150px">Jumlah User</th>
                                    <th class="min-w-200px">Hak Akses (Permissions)</th>
                                    <th class="text-end min-w-100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach($roles as $role)
                                    <tr>
                                        <td>
                                            <span class="badge badge-light-primary fs-7 fw-bold">{{ ucfirst($role->name) }}</span>
                                        </td>
                                        <td>{{ $role->users_count }} Pengguna</td>
                                        <td>
                                            <span class="badge badge-light-info">{{ $role->permissions_count }} Permissions</span>
                                        </td>
                                        <td class="text-end">
                                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px me-2 btn-edit-role" data-id="{{ $role->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Role">
                                                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>
                                            </button>
                                            @if($role->name !== 'admin')
                                                <button type="button" class="btn btn-icon btn-active-light-danger w-30px h-30px btn-delete-role" data-id="{{ $role->id }}" data-name="{{ $role->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Role">
                                                    <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end::Card Datatable-->
        </div>
    </div>

    @include('pages.manajemenpengguna.partials.role-form')
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $(document).ready(function() {
            var rolesTable = $('#kt_roles_table').DataTable({
                pageLength: 10,
                order: [],
                language: {
                    search: "",
                    searchPlaceholder: "Cari Role..."
                }
            });

            $('#kt_roles_search').on('keyup', function() {
                rolesTable.search(this.value).draw();
            });

            $('#btn_add_role').on('click', function() {
                $('#role_modal_title').text('Tambah Role Baru');
                $('#kt_modal_role_form')[0].reset();
                $('#role_id').val('');
                $('#role_modal_perm_search').val('');
                $('.role-modal-matrix-row').show();
                $('.role-perm-checkbox').prop('checked', false);
                $('.role-modal-row-toggle').prop('checked', false);
            });

            // Modal Live Search Filter for Modules
            $('#role_modal_perm_search').on('keyup', function() {
                var query = $(this).val().toLowerCase();
                $('.role-modal-matrix-row').each(function() {
                    var moduleName = $(this).data('module');
                    if (moduleName.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            // Modal Row-level Select All Toggle
            $(document).on('change', '.role-modal-row-toggle', function() {
                var isChecked = $(this).is(':checked');
                var $row = $(this).closest('tr');
                $row.find('.role-perm-checkbox').prop('checked', isChecked);
            });

            // Modal Bulk Select All
            $('#btn_modal_role_select_all').on('click', function() {
                $('.role-perm-checkbox').prop('checked', true);
                $('.role-modal-row-toggle').prop('checked', true);
            });

            // Modal Bulk Deselect All
            $('#btn_modal_role_deselect_all').on('click', function() {
                $('.role-perm-checkbox').prop('checked', false);
                $('.role-modal-row-toggle').prop('checked', false);
            });

            $(document).on('click', '.btn-edit-role', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-edit-role');
                var roleId = btn.data('id') || $(this).data('id');

                $.ajax({
                    url: "{{ url('manajemenpengguna/roles') }}/" + roleId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(res) {
                        if(res.success) {
                            $('#role_modal_title').text('Edit Role: ' + res.data.name.toUpperCase());
                            $('#role_id').val(res.data.id);
                            $('#role_name').val(res.data.name);
                            $('#role_modal_perm_search').val('');
                            $('.role-modal-matrix-row').show();

                            $('.role-perm-checkbox').prop('checked', false);
                            $('.role-modal-row-toggle').prop('checked', false);

                            if(res.data.permissions && res.data.permissions.length > 0) {
                                var permNames = res.data.permissions.map(function(p) { return p.name; });
                                $('.role-perm-checkbox').each(function() {
                                    if(permNames.includes($(this).val())) {
                                        $(this).prop('checked', true);
                                    }
                                });
                            }
                            $('#kt_modal_role').modal('show');
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.error(xhr.responseJSON?.message || 'Gagal mengambil data role.');
                    }
                });
            });

            $('#kt_modal_role_form').on('submit', function(e) {
                e.preventDefault();
                var roleId = $('#role_id').val();
                var url = roleId ? "{{ url('manajemenpengguna/roles') }}/" + roleId : "{{ route('manajemenpengguna.roles.store') }}";
                var type = roleId ? "PUT" : "POST";

                $.ajax({
                    url: url,
                    type: type,
                    data: $(this).serialize(),
                    success: function(res) {
                        if(res.success) {
                            $('#kt_modal_role').modal('hide');
                            SwalHelper.success(res.message);
                            setTimeout(function() { location.reload(); }, 1200);
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.validationError(xhr);
                    }
                });
            });

            $(document).on('click', '.btn-delete-role', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-delete-role');
                var roleId = btn.data('id') || $(this).data('id');
                var roleName = btn.data('name') || $(this).data('name');

                SwalHelper.confirmDelete(roleName, function() {
                    $.ajax({
                        url: "{{ url('manajemenpengguna/roles') }}/" + roleId,
                        type: "DELETE",
                        data: { _token: "{{ csrf_token() }}" },
                        success: function(res) {
                            if(res.success) {
                                SwalHelper.success(res.message);
                                setTimeout(function() { location.reload(); }, 1200);
                            }
                        },
                        error: function(xhr) {
                            SwalHelper.error(xhr.responseJSON?.message || 'Gagal menghapus role.');
                        }
                    });
                });
            });
        });
    </script>
@endsection
