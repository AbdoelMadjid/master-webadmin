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
            <!--begin::Page Header & Guide Action-->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-profile-user text-primary fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'User Direct Access Rights' : 'Hak Akses Spesifik Pengguna (User Direct Permissions)' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage custom direct permission assignments per individual user account.' : 'Kelola penugasan perizinan khusus langsung kepada individu pengguna.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_akses_user_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

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
                                            @php
                                                $allPerms = $user->getAllPermissions();
                                                $directPerms = $user->permissions;
                                                $directPermNames = $directPerms->pluck('name')->toArray();
                                                $hasDirect = $directPerms->isNotEmpty();
                                            @endphp
                                            @if($allPerms->isNotEmpty())
                                                @php
                                                    $permCount = $allPerms->count();
                                                    $groupedPerms = $allPerms->groupBy(function($perm) {
                                                        $parts = explode(' ', $perm->name, 2);
                                                        return count($parts) > 1 ? $parts[1] : $perm->name;
                                                    });
                                                    $moduleCount = $groupedPerms->count();
                                                    $previewModules = $groupedPerms->take(2);

                                                    $permData = $groupedPerms->map(function($permsInModule, $moduleName) use ($directPermNames) {
                                                        return [
                                                            'module' => $moduleName,
                                                            'count' => $permsInModule->count(),
                                                            'actions' => $permsInModule->map(function($p) use ($directPermNames) {
                                                                return [
                                                                    'name' => $p->name,
                                                                    'action' => explode(' ', $p->name)[0],
                                                                    'is_direct' => in_array($p->name, $directPermNames)
                                                                ];
                                                            })->values()->all()
                                                        ];
                                                    })->values()->all();
                                                @endphp
                                                <div class="d-flex flex-column gap-1">
                                                    <div class="d-flex align-items-center gap-1 flex-wrap">
                                                        @if($hasDirect)
                                                            <span class="badge badge-light-warning fw-bold fs-8 cursor-pointer btn-show-user-permissions-drawer"
                                                                  data-id="{{ $user->id }}"
                                                                  data-name="{{ $user->name }}"
                                                                  data-email="{{ $user->email }}"
                                                                  data-avatar="{{ $user->avatar_url }}"
                                                                  data-perms="{{ json_encode($permData) }}"
                                                                  data-bs-toggle="tooltip"
                                                                  data-bs-placement="top"
                                                                  title="Klik untuk membuka rincian {{ $permCount }} hak akses di panel samping (Side Drawer)">
                                                                <i class="ki-duotone ki-key fs-7 text-warning me-1"><span class="path1"></span><span class="path2"></span></i>
                                                                {{ $directPerms->count() }} Akses Langsung ({{ $permCount }} Total Izin)
                                                            </span>
                                                        @else
                                                            <span class="badge badge-light-success fw-bold fs-8 cursor-pointer btn-show-user-permissions-drawer"
                                                                  data-id="{{ $user->id }}"
                                                                  data-name="{{ $user->name }}"
                                                                  data-email="{{ $user->email }}"
                                                                  data-avatar="{{ $user->avatar_url }}"
                                                                  data-perms="{{ json_encode($permData) }}"
                                                                  data-bs-toggle="tooltip"
                                                                  data-bs-placement="top"
                                                                  title="Klik untuk membuka rincian {{ $permCount }} hak akses di panel samping (Side Drawer)">
                                                                <i class="ki-duotone ki-shield-tick fs-7 text-success me-1"><span class="path1"></span><span class="path2"></span></i>
                                                                {{ $permCount }} Izin (Mengikuti Role)
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="d-flex flex-wrap gap-1 align-items-center">
                                                        @foreach($previewModules as $modName => $modPerms)
                                                            <span class="badge badge-light-primary fs-8 text-truncate max-w-150px cursor-pointer btn-show-user-permissions-drawer"
                                                                  data-id="{{ $user->id }}"
                                                                  data-name="{{ $user->name }}"
                                                                  data-email="{{ $user->email }}"
                                                                  data-avatar="{{ $user->avatar_url }}"
                                                                  data-perms="{{ json_encode($permData) }}"
                                                                  data-bs-toggle="tooltip"
                                                                  data-bs-placement="top"
                                                                  title="{{ $modName }}: {{ $modPerms->pluck('name')->implode(', ') }}">
                                                                {{ $modName }} ({{ $modPerms->count() }})
                                                            </span>
                                                        @endforeach
                                                        @if($moduleCount > 2)
                                                            <span class="badge badge-light-info fs-8 fw-bold cursor-pointer btn-show-user-permissions-drawer"
                                                                  data-id="{{ $user->id }}"
                                                                  data-name="{{ $user->name }}"
                                                                  data-email="{{ $user->email }}"
                                                                  data-avatar="{{ $user->avatar_url }}"
                                                                  data-perms="{{ json_encode($permData) }}"
                                                                  data-bs-toggle="tooltip"
                                                                  data-bs-placement="top"
                                                                  title="Klik untuk melihat {{ $moduleCount }} modul di panel samping (Side Drawer)">
                                                                <i class="ki-duotone ki-layout-4 fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                                                                +{{ $moduleCount - 2 }} Modul Lainnya
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @else
                                                <span class="badge badge-light-secondary text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Pengguna tidak memiliki hak akses atau role">
                                                    <i class="ki-duotone ki-cross-circle fs-6 text-gray-500 me-1"><span class="path1"></span><span class="path2"></span></i>
                                                    Tanpa Hak Akses
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
    @include('pages.manajemenpengguna.partials.akses-user-help-modal')

    <!--begin::User Direct Permissions Side Drawer-->
    <div class="offcanvas offcanvas-end w-100 w-md-450px w-lg-500px shadow-lg border-0" tabindex="-1" id="kt_offcanvas_user_permissions">
        <div class="offcanvas-header bg-light py-4 px-6 border-bottom">
            <div class="d-flex align-items-center gap-3">
                <div class="symbol symbol-40px symbol-circle overflow-hidden">
                    <img id="drawer_user_avatar" src="" alt="Avatar" style="width: 40px; height: 40px; object-fit: cover;" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                </div>
                <div class="d-flex flex-column">
                    <h4 class="fw-bold text-gray-900 m-0" id="drawer_user_name">Nama User</h4>
                    <span class="fs-7 text-muted" id="drawer_user_email">email@domain.com</span>
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-icon btn-active-light-primary" data-bs-dismiss="offcanvas">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </button>
        </div>

        <div class="offcanvas-body p-6">
            <!--begin::Drawer Summary Card-->
            <div class="d-flex align-items-center justify-content-between mb-5 p-4 rounded bg-light-warning border border-warning">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-35px symbol-circle bg-warning p-2">
                        <i class="ki-duotone ki-key fs-2 text-white"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <div>
                        <div class="fw-bold text-gray-900 fs-6">Hak Akses Langsung</div>
                        <div class="text-muted fs-7" id="drawer_perm_summary">Memuat...</div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-warning fw-bold btn-manage-from-drawer" id="btn_manage_from_drawer" data-id="">
                    <i class="ki-duotone ki-pencil fs-5 me-1"><span class="path1"></span><span class="path2"></span></i> Edit
                </button>
            </div>
            <!--end::Drawer Summary Card-->

            <!--begin::Search Module Filter inside Drawer-->
            <div class="position-relative mb-5">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4 top-50 translate-middle-y text-gray-500"><span class="path1"></span><span class="path2"></span></i>
                <input type="text" id="drawer_perm_search" class="form-control form-control-solid ps-12" placeholder="Cari modul atau tipe izin..." />
            </div>
            <!--end::Search Module Filter-->

            <!--begin::Module Permissions List Container-->
            <div id="drawer_perm_content" class="d-flex flex-column gap-3">
                <!-- Dynamic Module Cards -->
            </div>
            <!--end::Module Permissions List Container-->
        </div>
    </div>
    <!--end::User Direct Permissions Side Drawer-->
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        var rolePermissionsMap = @json($rolePermissionsMap ?? []);
        var currentUserDirectPerms = [];

        $(document).ready(function() {
            var aksesUserTable = $('#kt_akses_user_table').DataTable({
                pageLength: 10,
                order: [],
                language: {
                    search: "",
                    searchPlaceholder: "Cari Pengguna..."
                },
                drawCallback: function() {
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('#kt_akses_user_table [data-bs-toggle="tooltip"]'));
                    tooltipTriggerList.map(function (el) {
                        return bootstrap.Tooltip.getInstance(el) || new bootstrap.Tooltip(el);
                    });
                }
            });

            $('#kt_akses_user_search').on('keyup', function() {
                aksesUserTable.search(this.value).draw();
            });

            // Handle Side Drawer for User Permissions
            $(document).on('click', '.btn-show-user-permissions-drawer', function(e) {
                e.preventDefault();
                var userId = $(this).data('id');
                var userName = $(this).data('name');
                var userEmail = $(this).data('email');
                var userAvatar = $(this).data('avatar');
                var permsData = $(this).data('perms');

                $('#drawer_user_name').text(userName);
                $('#drawer_user_email').text(userEmail);
                $('#drawer_user_avatar').attr('src', userAvatar);
                $('#btn_manage_from_drawer').data('id', userId);

                var totalPerms = 0;
                var directPermCount = 0;
                var totalModules = permsData ? permsData.length : 0;
                var html = '';

                if (permsData && permsData.length > 0) {
                    permsData.forEach(function(group) {
                        totalPerms += group.count;
                        var actionsHtml = '';
                        group.actions.forEach(function(act) {
                            var badgeColor = 'badge-light-primary text-primary';
                            var badgeTitle = act.name + ' (Diwarisi dari Role)';

                            if (act.is_direct) {
                                badgeColor = 'badge-light-warning text-warning fw-bold';
                                badgeTitle = act.name + ' (Akses Langsung Khusus)';
                                directPermCount++;
                            } else {
                                if (act.action === 'create') badgeColor = 'badge-light-success text-success';
                                else if (act.action === 'read') badgeColor = 'badge-light-primary text-primary';
                                else if (act.action === 'update') badgeColor = 'badge-light-info text-info';
                                else if (act.action === 'delete') badgeColor = 'badge-light-danger text-danger';
                            }

                            actionsHtml += '<span class="badge ' + badgeColor + ' fs-8 px-2.5 py-1 me-1 mb-1" title="' + badgeTitle + '">' + act.action + (act.is_direct ? ' *' : '') + '</span>';
                        });

                        html += '<div class="card schema-card border border-gray-300 p-4 rounded module-perm-card" data-search="' + group.module.toLowerCase() + '">';
                        html += '  <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom border-gray-200">';
                        html += '    <span class="fw-bold text-gray-900 fs-7 d-flex align-items-center">';
                        html += '      <i class="ki-duotone ki-folder text-primary me-2 fs-6"><span class="path1"></span><span class="path2"></span></i>';
                        html += '      ' + group.module;
                        html += '    </span>';
                        html += '    <span class="badge badge-light-primary fw-bold fs-9">' + group.count + ' Izin</span>';
                        html += '  </div>';
                        html += '  <div class="d-flex flex-wrap gap-1">' + actionsHtml + '</div>';
                        html += '</div>';
                    });

                    if (directPermCount > 0) {
                        $('#drawer_perm_summary').text(directPermCount + ' Akses Langsung & ' + totalPerms + ' Total Izin di ' + totalModules + ' Modul');
                    } else {
                        $('#drawer_perm_summary').text(totalPerms + ' Total Izin (Seluruhnya Diwarisi dari Role)');
                    }
                } else {
                    html = '<div class="text-center py-8 text-muted"><i class="ki-duotone ki-information-2 fs-2x mb-2 text-muted"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><div>Tidak ada hak akses.</div></div>';
                    $('#drawer_perm_summary').text('Tanpa Hak Akses');
                }

                $('#drawer_perm_content').html(html);
                $('#drawer_perm_search').val('');

                var offcanvasEl = document.getElementById('kt_offcanvas_user_permissions');
                var bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);
                bsOffcanvas.show();
            });

            // Filter inside Side Drawer
            $(document).on('keyup input', '#drawer_perm_search', function() {
                var val = $(this).val().toLowerCase();
                $('#drawer_perm_content .module-perm-card').each(function() {
                    var cardSearchText = ($(this).data('search') || '') + ' ' + $(this).text().toLowerCase();
                    if (cardSearchText.indexOf(val) !== -1) {
                        $(this).removeClass('d-none');
                    } else {
                        $(this).addClass('d-none');
                    }
                });
            });

            // Manage button inside Side Drawer opens edit modal
            $(document).on('click', '.btn-manage-from-drawer', function() {
                var userId = $(this).data('id');
                var offcanvasEl = document.getElementById('kt_offcanvas_user_permissions');
                var bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
                if (bsOffcanvas) {
                    bsOffcanvas.hide();
                }
                $('.btn-manage-user-access[data-id="' + userId + '"]').first().trigger('click');
            });

            // Function to update modal permissions checkboxes (Role vs Direct)
            function updateModalPermissionsState() {
                var checkedRoles = [];
                $('.akses-user-role-checkbox:checked').each(function() {
                    checkedRoles.push($(this).val());
                });

                var rolePerms = new Set();
                checkedRoles.forEach(function(roleName) {
                    if (rolePermissionsMap[roleName]) {
                        rolePermissionsMap[roleName].forEach(function(p) {
                            rolePerms.add(p);
                        });
                    }
                });

                var directPerms = currentUserDirectPerms || [];

                $('.akses-user-perm-checkbox').each(function() {
                    var permVal = $(this).val();
                    var $parent = $(this).parent();

                    if (rolePerms.has(permVal)) {
                        $(this).prop('checked', true);
                        $(this).prop('disabled', true);
                        $parent.attr('title', 'Diwarisi dari Role yang ditugaskan');
                    } else if (directPerms.includes(permVal)) {
                        $(this).prop('checked', true);
                        $(this).prop('disabled', false);
                        $parent.attr('title', 'Akses Langsung Khusus');
                    } else {
                        $(this).prop('checked', false);
                        $(this).prop('disabled', false);
                        $parent.removeAttr('title');
                    }
                });
            }

            $(document).on('change', '.akses-user-role-checkbox', function() {
                updateModalPermissionsState();
            });

            // Modal Live Search Filter for Direct Permissions Matrix
            $(document).on('keyup', '#akses_user_modal_perm_search', function() {
                var query = $(this).val().toLowerCase();
                $('.akses-user-modal-matrix-row').each(function() {
                    var moduleName = $(this).data('module') || '';
                    var menuName = $(this).data('menu-name') || '';
                    if (moduleName.indexOf(query) !== -1 || menuName.indexOf(query) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            $(document).on('click', '.btn-manage-user-access', function() {
                var userId = $(this).data('id');
                $.get("{{ url('manajemenpengguna/akses-user') }}/" + userId, function(res) {
                    if(res.success) {
                        $('#akses_user_id').val(res.data.id);
                        $('#akses_user_name_display').text(res.data.name);
                        $('#akses_user_email_display').text(res.data.email);
                        $('#akses_user_modal_perm_search').val('');
                        $('.akses-user-modal-matrix-row').show();

                        currentUserDirectPerms = res.direct_permissions || [];
                        if (res.role_permissions_map) {
                            rolePermissionsMap = res.role_permissions_map;
                        }

                        $('.akses-user-role-checkbox').prop('checked', false);
                        if(res.assigned_roles && res.assigned_roles.length > 0) {
                            $('.akses-user-role-checkbox').each(function() {
                                if(res.assigned_roles.includes($(this).val())) {
                                    $(this).prop('checked', true);
                                }
                            });
                        }

                        updateModalPermissionsState();
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
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
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
