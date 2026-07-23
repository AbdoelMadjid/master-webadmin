@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Manajemen Pengguna
        @endslot
        @slot('li_2')
            User
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
                            <input type="text" id="kt_users_search" class="form-control form-control-solid w-250px ps-13" placeholder="Cari User..." />
                        </div>
                    </div>
                    <div class="card-toolbar gap-2 flex-wrap">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Pemberian Role 'User' Massal (Untuk Akun Tanpa Role)">
                            <button type="button" class="btn btn-icon btn-light-warning" id="btn_assign_default_role">
                                <i class="ki-duotone ki-shield-tick fs-2"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Upload Massal Excel">
                            <button type="button" class="btn btn-icon btn-light-success" data-bs-toggle="modal" data-bs-target="#kt_modal_import_user" id="btn_import_user">
                                <i class="ki-duotone ki-file-up fs-2"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah User Baru">
                            <button type="button" class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_user" id="btn_add_user">
                                <i class="ki-duotone ki-plus fs-2"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_users_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">Pengguna / User</th>
                                    <th class="min-w-100px">Role</th>
                                    <th class="min-w-90px">Status</th>
                                    <th class="min-w-80px">Saldo Poin</th>
                                    <th class="min-w-100px">Aktivitas Terakhir</th>
                                    <th class="min-w-110px">Tanggal Bergabung</th>
                                    <th class="text-end min-w-100px pe-4">Aksi</th>
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
                                                <a href="javascript:void(0)" class="text-gray-800 text-hover-primary mb-1 fw-bold btn-impersonate-user" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik untuk masuk ke akun ini (Switch User)">{{ $user->name }}</a>
                                                <span class="fs-7 text-muted">{{ $user->email }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            @forelse($user->roles as $role)
                                                <span class="badge badge-light-primary me-1 mb-1">{{ ucfirst($role->name) }}</span>
                                            @empty
                                                <span class="text-muted fs-7">Tanpa Role</span>
                                            @endforelse
                                        </td>
                                        <td>
                                            @if(($user->status ?? 'approved') === 'approved')
                                                <span class="badge badge-light-success fw-bold">Disetujui</span>
                                            @elseif(($user->status ?? 'approved') === 'pending')
                                                <span class="badge badge-light-warning fw-bold">Menunggu Persetujuan</span>
                                            @else
                                                <span class="badge badge-light-danger fw-bold">Ditolak</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge badge-light-warning fw-bold">{{ $user->points ?? 0 }} Poin</span>
                                        </td>
                                        <td>
                                            @if($user->last_activity_at)
                                                <span class="badge badge-light-success">{{ $user->last_activity_at->diffForHumans() }}</span>
                                            @else
                                                <span class="text-muted fs-7">Belum ada aktivitas</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->created_at ? $user->created_at->format('d M Y H:i') : '-' }}</td>
                                        <td class="text-end">
                                            @if($user->id !== auth()->id())
                                                @if(($user->status ?? 'approved') !== 'approved')
                                                    <button type="button" class="btn btn-icon btn-active-light-success w-30px h-30px me-1 btn-approve-user" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Setujui Akun Pengguna">
                                                        <i class="ki-duotone ki-check fs-3"><span class="path1"></span><span class="path2"></span></i>
                                                    </button>
                                                @endif
                                                @if(($user->status ?? 'approved') !== 'rejected')
                                                    <button type="button" class="btn btn-icon btn-active-light-warning w-30px h-30px me-1 btn-reject-user" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Tolak Akun Pengguna">
                                                        <i class="ki-duotone ki-cross fs-3"><span class="path1"></span><span class="path2"></span></i>
                                                    </button>
                                                @endif
                                            @endif
                                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px me-1 btn-edit-user" data-id="{{ $user->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit User">
                                                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>
                                            </button>
                                            @if($user->id !== auth()->id())
                                                <button type="button" class="btn btn-icon btn-active-light-info w-30px h-30px me-1 btn-impersonate-user" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Switch User (Masuk sebagai {{ $user->name }})">
                                                    <i class="ki-duotone ki-switch fs-3"><span class="path1"></span><span class="path2"></span></i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-active-light-danger w-30px h-30px btn-delete-user" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus User">
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
        </div>
    </div>

    @include('pages.manajemenpengguna.partials.user-form')
    @include('pages.manajemenpengguna.partials.user-import-modal')
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $(document).ready(function() {
            var usersTable = $('#kt_users_table').DataTable({
                pageLength: 10,
                order: [[0, 'asc']],
                language: {
                    search: "",
                    searchPlaceholder: "Cari User..."
                }
            });

            $('#kt_users_search').on('keyup', function() {
                usersTable.search(this.value).draw();
            });

            $('#btn_assign_default_role').on('click', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Beri Role User Massal?',
                    text: "Apakah Anda yakin ingin memberikan role 'User' secara massal ke semua akun pengguna yang belum memiliki role?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Berikan Role Massal',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'btn btn-warning',
                        cancelButton: 'btn btn-light'
                    }
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('manajemenpengguna.users.assign-default-role') }}",
                            type: "POST",
                            data: { _token: "{{ csrf_token() }}" },
                            success: function(res) {
                                if (res.success) {
                                    SwalHelper.success(res.message);
                                    setTimeout(function() { location.reload(); }, 1200);
                                }
                            },
                            error: function(xhr) {
                                SwalHelper.error(xhr.responseJSON?.message || 'Gagal memberikan role massal.');
                            }
                        });
                    }
                });
            });

            $('#btn_add_user').on('click', function() {
                $('#user_modal_title').text('Tambah Pengguna Baru');
                $('#kt_modal_user_form')[0].reset();
                $('#user_id').val('');
                $('#label_user_password').addClass('required');
                $('#user_password').prop('required', true);
                $('#user_password_help').hide();
                $('.user-role-checkbox').prop('checked', false);
            });

            $(document).on('click', '.btn-edit-user', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-edit-user');
                var userId = btn.data('id') || $(this).data('id');

                $.ajax({
                    url: "{{ url('manajemenpengguna/users') }}/" + userId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(res) {
                        if(res.success) {
                            $('#user_modal_title').text('Edit Data Pengguna');
                            $('#user_id').val(res.data.id);
                            $('#user_name').val(res.data.name);
                            $('#user_email').val(res.data.email);
                            $('#user_password').val('');
                            $('#label_user_password').removeClass('required');
                            $('#user_password').prop('required', false);
                            $('#user_password_help').show();

                            $('.user-role-checkbox').prop('checked', false);
                            if(res.assigned_roles) {
                                res.assigned_roles.forEach(function(roleName) {
                                    $(".user-role-checkbox[value='" + roleName + "']").prop('checked', true);
                                });
                            }

                            if(res.data.avatar_url) {
                                $('#user_avatar_preview').css('background-image', 'url("' + res.data.avatar_url + '")');
                            }

                            $('#kt_modal_user').modal('show');
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.error(xhr.responseJSON?.message || 'Gagal mengambil data pengguna.');
                    }
                });
            });

            $('#kt_modal_user_form').on('submit', function(e) {
                e.preventDefault();
                var userId = $('#user_id').val();
                var url = userId ? "{{ url('manajemenpengguna/users') }}/" + userId : "{{ route('manajemenpengguna.users.store') }}";

                var formData = new FormData(this);
                if(userId) {
                    formData.append('_method', 'PUT');
                }

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        if(res.success) {
                            $('#kt_modal_user').modal('hide');
                            SwalHelper.success(res.message);
                            setTimeout(function() { location.reload(); }, 1200);
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.validationError(xhr);
                    }
                });
            });

            $(document).on('click', '.btn-approve-user', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-approve-user');
                var userId = btn.data('id') || $(this).data('id');
                var userName = btn.data('name') || $(this).data('name');

                Swal.fire({
                    title: 'Setujui Pengguna?',
                    text: "Apakah Anda yakin ingin menyetujui akun '" + userName + "'?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Setujui Akun',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-light'
                    }
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('manajemenpengguna/users') }}/" + userId + "/approve",
                            type: "POST",
                            data: { _token: "{{ csrf_token() }}" },
                            success: function(res) {
                                if (res.success) {
                                    SwalHelper.success(res.message);
                                    setTimeout(function() { location.reload(); }, 1200);
                                }
                            },
                            error: function(xhr) {
                                SwalHelper.error(xhr.responseJSON?.message || 'Gagal menyetujui akun.');
                            }
                        });
                    }
                });
            });

            $(document).on('click', '.btn-reject-user', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-reject-user');
                var userId = btn.data('id') || $(this).data('id');
                var userName = btn.data('name') || $(this).data('name');

                Swal.fire({
                    title: 'Tolak Pengguna?',
                    text: "Apakah Anda yakin ingin menolak akun '" + userName + "'?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Tolak Akun',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-light'
                    }
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('manajemenpengguna/users') }}/" + userId + "/reject",
                            type: "POST",
                            data: { _token: "{{ csrf_token() }}" },
                            success: function(res) {
                                if (res.success) {
                                    SwalHelper.success(res.message);
                                    setTimeout(function() { location.reload(); }, 1200);
                                }
                            },
                            error: function(xhr) {
                                SwalHelper.error(xhr.responseJSON?.message || 'Gagal menolak akun.');
                            }
                        });
                    }
                });
            });

            $(document).on('click', '.btn-delete-user', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-delete-user');
                var userId = btn.data('id') || $(this).data('id');
                var userName = btn.data('name') || $(this).data('name');

                SwalHelper.confirmDelete(userName, function() {
                    $.ajax({
                        url: "{{ url('manajemenpengguna/users') }}/" + userId,
                        type: "DELETE",
                        data: { _token: "{{ csrf_token() }}" },
                        success: function(res) {
                            if(res.success) {
                                SwalHelper.success(res.message);
                                setTimeout(function() { location.reload(); }, 1200);
                            }
                        },
                        error: function(xhr) {
                            SwalHelper.error(xhr.responseJSON?.message || 'Gagal menghapus pengguna.');
                        }
                    });
                });
            });

            $(document).on('click', '.btn-impersonate-user', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-impersonate-user');
                var userId = btn.data('id') || $(this).data('id');
                var userName = btn.data('name') || $(this).data('name');

                if (!userId) return;

                Swal.fire({
                    title: 'Switch User?',
                    text: "Apakah Anda yakin ingin masuk ke akun '" + userName + "' tanpa login?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Masuk ke Akun',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-light'
                    }
                }).then(function(result) {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('manajemenpengguna/users') }}/" + userId + "/impersonate",
                            type: "POST",
                            data: { _token: "{{ csrf_token() }}" },
                            success: function(res) {
                                if (res.success) {
                                    SwalHelper.success(res.message, function() {
                                        window.location.href = res.redirect || "{{ route('homepage') }}";
                                    });
                                }
                            },
                            error: function(xhr) {
                                SwalHelper.error(xhr.responseJSON?.message || 'Gagal melakukan switch user.');
                            }
                        });
                    }
                });
            });

            $('#kt_modal_import_user_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('manajemenpengguna.users.import') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        if(res.success) {
                            $('#kt_modal_import_user').modal('hide');
                            SwalHelper.success(res.message);
                            setTimeout(function() { location.reload(); }, 1500);
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
