@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Manajemen Pengguna
        @endslot
        @slot('li_2')
            Akses User
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>
                            <input type="text" id="kt_akses_user_search" class="form-control form-control-solid w-250px ps-13" placeholder="Cari Pengguna..." />
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_akses_user_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-200px">Pengguna / User</th>
                                    <th class="min-w-150px">Role Saat Ini</th>
                                    <th class="min-w-200px">Hak Akses Langsung</th>
                                    <th class="text-end min-w-150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach($users as $user)
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40px overflow-hidden me-3">
                                                <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" style="width: 40px; height: 40px; object-fit: cover;" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary mb-1 fw-bold btn-manage-user-access" data-id="{{ $user->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik untuk kelola akses {{ $user->name }}">{{ $user->name }}</a>
                                                <span class="fs-7 text-muted">{{ $user->email }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            @if($user->roles->isNotEmpty())
                                                <div class="d-flex flex-column gap-1">
                                                    @foreach($user->roles->chunk(3) as $roleChunk)
                                                        <div class="d-flex flex-wrap align-items-center gap-1">
                                                            @foreach($roleChunk as $role)
                                                                @php
                                                                    $roleLower = strtolower($role->name);
                                                                    $roleBadge = match($roleLower) {
                                                                        'master' => 'badge-light-danger text-danger',
                                                                        'admin'  => 'badge-light-primary text-primary',
                                                                        'user'   => 'badge-light-info text-info',
                                                                        default  => 'badge-light-success text-success',
                                                                    };
                                                                @endphp
                                                                <span class="badge {{ $roleBadge }} fw-bold fs-8">{{ ucfirst($role->name) }}</span>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <span class="text-muted fs-7">Tanpa Role</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->permissions->isNotEmpty())
                                                @foreach($user->permissions as $perm)
                                                    <span class="badge badge-light-info me-1 mb-1">{{ $perm->name }}</span>
                                                @endforeach
                                            @else
                                                <span class="badge badge-light-secondary text-gray-600" data-bs-toggle="tooltip" title="Seluruh hak akses pengguna diwarisi dari Role yang ditugaskan">
                                                    <i class="ki-duotone ki-shield-tick fs-6 text-gray-500 me-1"><span class="path1"></span><span class="path2"></span></i>
                                                    Mengikuti Role ({{ $user->getAllPermissions()->count() }} Izin)
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-light-primary btn-manage-user-access" data-id="{{ $user->id }}">
                                                <i class="ki-duotone ki-key fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Kelola Akses
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.manajemenpengguna.partials.akses-user-form')
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $(document).ready(function() {
            var aksesUserTable = $('#kt_akses_user_table').DataTable({
                pageLength: 10,
                order: [],
                language: {
                    search: "",
                    searchPlaceholder: "Cari Pengguna..."
                }
            });

            $('#kt_akses_user_search').on('keyup', function() {
                aksesUserTable.search(this.value).draw();
            });

            $(document).on('click', '.btn-manage-user-access', function() {
                var userId = $(this).data('id');
                $.get("{{ url('manajemenpengguna/akses-user') }}/" + userId, function(res) {
                    if(res.success) {
                        $('#akses_user_id').val(res.data.id);
                        $('#akses_user_name_display').text(res.data.name);
                        $('#akses_user_email_display').text(res.data.email);

                        $('.akses-user-role-checkbox').prop('checked', false);
                        if(res.assigned_roles && res.assigned_roles.length > 0) {
                            $('.akses-user-role-checkbox').each(function() {
                                if(res.assigned_roles.includes($(this).val())) {
                                    $(this).prop('checked', true);
                                }
                            });
                        }

                        $('.akses-user-perm-checkbox').prop('checked', false);
                        var activePerms = res.all_permissions || res.direct_permissions || [];
                        if(activePerms && activePerms.length > 0) {
                            $('.akses-user-perm-checkbox').each(function() {
                                if(activePerms.includes($(this).val())) {
                                    $(this).prop('checked', true);
                                }
                            });
                        }

                        $('#kt_modal_akses_user').modal('show');
                    }
                });
            });

            $('#kt_modal_akses_user_form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('manajemenpengguna.akses-user.update') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(res) {
                        if(res.success) {
                            $('#kt_modal_akses_user').modal('hide');
                            SwalHelper.success(res.message);
                            setTimeout(function() { location.reload(); }, 1200);
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.validationError(xhr);
                    }
                });
            });
        });
    </script>
@endsection
