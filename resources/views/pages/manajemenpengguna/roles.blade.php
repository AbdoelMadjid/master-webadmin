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
            <!--begin::Page Header & Guide Action-->
            <div
                class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-shield-tick text-primary fs-2x"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Role & Permission Management' : 'Manajemen Role & Hak Akses' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage user roles, permission assignments, and access levels.' : 'Kelola role pengguna, penugasan perizinan, dan tingkat hak akses sistem.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Add Role' : 'Tambah Role' }}">
                        <button type="button"
                            class="btn btn-primary shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_role" id="btn_add_role_top">
                            <i class="ki-duotone ki-plus fs-2 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span
                                class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Add Role' : 'Tambah Role' }}</span>
                        </button>
                    </span>

                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button"
                            class="btn btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_roles_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Role Cards Grid-->
            <div class="row g-6 g-xl-9 mb-8">
                @foreach ($roles as $roleItem)
                    @php
                        $roleNameLower = strtolower($roleItem->name);
                        $cardBgClass = match ($roleNameLower) {
                            'master' => 'bg-light-danger border border-danger border-opacity-20 shadow-sm',
                            'admin' => 'bg-light-primary border border-primary border-opacity-20 shadow-sm',
                            'user' => 'bg-light-info border border-info border-opacity-20 shadow-sm',
                            default => 'bg-light-success border border-success border-opacity-20 shadow-sm',
                        };
                        $badgeColor = match ($roleNameLower) {
                            'master' => 'badge-light-danger text-danger',
                            'admin' => 'badge-light-primary text-primary',
                            'user' => 'badge-light-info text-info',
                            default => 'badge-light-success text-success',
                        };
                        $iconClass = match ($roleNameLower) {
                            'master' => 'ki-security-user text-danger',
                            'admin' => 'ki-shield-tick text-primary',
                            'user' => 'ki-profile-user text-info',
                            default => 'ki-key text-success',
                        };
                        $bulletBg = match ($roleNameLower) {
                            'master' => 'bg-danger',
                            'admin' => 'bg-primary',
                            'user' => 'bg-info',
                            default => 'bg-success',
                        };
                    @endphp
                    <div class="col-md-6 col-xl-4">
                        <div class="card card-flush h-md-100 {{ $cardBgClass }}">
                            <!--begin::Card Header-->
                            <div class="card-header pt-5 pb-1">
                                <div class="card-title d-flex align-items-center gap-3">
                                    <i class="ki-duotone {{ $iconClass }} fs-2hx">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                    </i>
                                    <div>
                                        <h2 class="fw-bold fs-3 m-0 text-gray-900">{{ ucfirst($roleItem->name) }}</h2>
                                        <span
                                            class="badge {{ $badgeColor }} fw-bold fs-8 mt-1">{{ number_format($roleItem->users_count) }}
                                            Pengguna</span>
                                    </div>
                                </div>
                                <!--begin::Users Stack-->
                                <div class="card-toolbar">
                                    <div class="symbol-group symbol-hover flex-nowrap">
                                        @foreach (($roleItem->users ?? collect())->take(4) as $u)
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="{{ $u->name }}">
                                                <img src="{{ $u->avatar_url }}" alt="{{ $u->name }}"
                                                    style="object-fit: cover; object-position: top;"
                                                    onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                                            </div>
                                        @endforeach
                                        @if (($roleItem->users_count ?? 0) > 4)
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-white text-gray-800 fw-bold fs-8">+{{ $roleItem->users_count - 4 }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <!--end::Users Stack-->
                            </div>
                            <!--end::Card Header-->

                            <!--begin::Card Body-->
                            <div class="card-body pt-2 pb-4">
                                <div class="text-gray-700 fw-semibold fs-7 mb-3">
                                    Hak akses terhubung: <strong class="text-gray-900">{{ $roleItem->permissions_count }}
                                        Permissions</strong>
                                </div>

                                <!--begin::Permissions List-->
                                <div class="d-flex flex-column text-gray-700 fs-7 gap-2" style="min-height: 110px;">
                                    @forelse($roleItem->permissions->take(4) as $perm)
                                        <div class="d-flex align-items-center">
                                            <span class="bullet {{ $bulletBg }} me-3"></span>
                                            <span class="text-gray-800 fw-bold fs-7">{{ $perm->name }}</span>
                                        </div>
                                    @empty
                                        <span class="text-muted italic fs-7 py-2">Belum ada permission terhubung</span>
                                    @endforelse

                                    @if ($roleItem->permissions_count > 4)
                                        <div class="d-flex align-items-center pt-1 text-muted fs-8">
                                            <span class="bullet bg-gray-400 me-3"></span>
                                            <em>dan {{ $roleItem->permissions_count - 4 }} hak akses lainnya...</em>
                                        </div>
                                    @endif
                                </div>
                                <!--end::Permissions List-->
                            </div>
                            <!--end::Card Body-->

                            <!--begin::Card Footer-->
                            <div class="card-footer d-flex align-items-center justify-content-between pt-0 pb-5">
                                <div>
                                    <button type="button"
                                        class="btn btn-sm btn-white btn-active-primary shadow-xs fw-bold me-2 btn-edit-role"
                                        data-id="{{ $roleItem->id }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Edit Hak Akses Role">
                                        <i class="ki-duotone ki-pencil fs-5 me-1"><span class="path1"></span><span
                                                class="path2"></span></i> Edit
                                    </button>
                                    @if (!in_array($roleNameLower, ['admin', 'master']))
                                        <button type="button"
                                            class="btn btn-sm btn-light-danger btn-active-danger shadow-xs fw-bold me-2 btn-delete-role"
                                            data-id="{{ $roleItem->id }}" data-name="{{ $roleItem->name }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Role">
                                            <i class="ki-duotone ki-trash fs-5 me-1"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> Hapus
                                        </button>
                                    @endif
                                </div>
                                <a href="{{ route('manajemenpengguna.akses-role') }}?role={{ strtolower($roleItem->name) }}"
                                    class="btn btn-sm btn-white btn-active-light-primary shadow-xs fw-bold"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Kelola Matrix Hak Akses {{ ucfirst($roleItem->name) }}">
                                    <i class="ki-duotone ki-key fs-5 me-1"><span class="path1"></span><span
                                            class="path2"></span></i> Matrix
                                </a>
                            </div>
                            <!--end::Card Footer-->
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
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <input type="text" id="kt_roles_search"
                                class="form-control form-control-solid w-250px ps-13" placeholder="Cari Role..." />
                        </div>
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
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>
                                            <span
                                                class="badge badge-light-primary fs-7 fw-bold">{{ ucfirst($role->name) }}</span>
                                        </td>
                                        <td>{{ $role->users_count }} Pengguna</td>
                                        <td>
                                            @php
                                                $rolePerms = $role->permissions;
                                                $permCount = $role->permissions_count ?? $rolePerms->count();
                                            @endphp
                                            @if ($rolePerms->isNotEmpty())
                                                @php
                                                    $groupedPerms = $rolePerms->groupBy(function ($perm) {
                                                        $parts = explode(' ', $perm->name, 2);
                                                        return count($parts) > 1 ? $parts[1] : $perm->name;
                                                    });
                                                    $moduleCount = $groupedPerms->count();
                                                    $previewModules = $groupedPerms->take(2);

                                                    $permData = $groupedPerms
                                                        ->map(function ($permsInModule, $moduleName) {
                                                            return [
                                                                'module' => $moduleName,
                                                                'count' => $permsInModule->count(),
                                                                'actions' => $permsInModule
                                                                    ->map(function ($p) {
                                                                        return [
                                                                            'name' => $p->name,
                                                                            'action' => explode(' ', $p->name)[0],
                                                                        ];
                                                                    })
                                                                    ->values()
                                                                    ->all(),
                                                            ];
                                                        })
                                                        ->values()
                                                        ->all();
                                                @endphp
                                                <div class="d-flex flex-column gap-1">
                                                    <div class="d-flex align-items-center gap-1 flex-wrap">
                                                        <span
                                                            class="badge badge-light-primary fw-bold fs-8 cursor-pointer btn-show-role-permissions-drawer"
                                                            data-id="{{ $role->id }}"
                                                            data-name="{{ ucfirst($role->name) }}"
                                                            data-perms="{{ json_encode($permData) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Klik untuk membuka rincian {{ $permCount }} hak akses di panel samping (Side Drawer)">
                                                            <i class="ki-duotone ki-key fs-7 text-primary me-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                            {{ $permCount }} Hak Akses ({{ $moduleCount }} Modul)
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-wrap gap-1 align-items-center">
                                                        @foreach ($previewModules as $modName => $modPerms)
                                                            <span
                                                                class="badge badge-light-info fs-8 text-truncate max-w-150px cursor-pointer btn-show-role-permissions-drawer"
                                                                data-id="{{ $role->id }}"
                                                                data-name="{{ ucfirst($role->name) }}"
                                                                data-perms="{{ json_encode($permData) }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="{{ $modName }}: {{ $modPerms->pluck('name')->implode(', ') }}">
                                                                {{ $modName }} ({{ $modPerms->count() }})
                                                            </span>
                                                        @endforeach
                                                        @if ($moduleCount > 2)
                                                            <span
                                                                class="badge badge-light-secondary fs-8 fw-bold cursor-pointer btn-show-role-permissions-drawer"
                                                                data-id="{{ $role->id }}"
                                                                data-name="{{ ucfirst($role->name) }}"
                                                                data-perms="{{ json_encode($permData) }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Klik untuk melihat {{ $moduleCount }} modul di panel samping (Side Drawer)">
                                                                +{{ $moduleCount - 2 }} Modul Lainnya
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @else
                                                <span class="badge badge-light-secondary text-gray-600"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Role belum memiliki hak akses">
                                                    <i class="ki-duotone ki-information-5 fs-6 text-gray-500 me-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                    Tanpa Hak Akses
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-icon btn-active-light-primary w-30px h-30px me-2 btn-edit-role"
                                                data-id="{{ $role->id }}" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit Role">
                                                <i class="ki-duotone ki-pencil fs-3"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </button>
                                            @if ($role->name !== 'admin')
                                                <button type="button"
                                                    class="btn btn-icon btn-active-light-danger w-30px h-30px btn-delete-role"
                                                    data-id="{{ $role->id }}" data-name="{{ $role->name }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Role">
                                                    <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span></i>
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
    @include('pages.manajemenpengguna.partials.roles-help-modal')

    <!--begin::Role Permissions Side Drawer-->
    <div class="offcanvas offcanvas-end w-100 w-md-450px w-lg-500px shadow-lg border-0" tabindex="-1"
        id="kt_offcanvas_role_permissions">
        <div class="offcanvas-header bg-light py-4 px-6 border-bottom">
            <div class="d-flex align-items-center gap-3">
                <div class="symbol symbol-40px symbol-circle bg-light-primary p-2">
                    <i class="ki-duotone ki-shield-tick fs-2x text-primary"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="fw-bold text-gray-900 m-0" id="drawer_role_name">Nama Role</h4>
                    <span class="fs-7 text-muted">Detail Hak Akses Role</span>
                </div>
            </div>
            <button type="button" class="btn btn-sm btn-icon btn-active-light-primary" data-bs-dismiss="offcanvas">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </button>
        </div>

        <div class="offcanvas-body p-6">
            <!--begin::Drawer Summary Card-->
            <div
                class="d-flex align-items-center justify-content-between mb-5 p-4 rounded bg-light-primary border border-primary border-opacity-25">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-35px symbol-circle bg-primary p-2">
                        <i class="ki-duotone ki-key fs-2 text-white"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <div>
                        <div class="fw-bold text-gray-900 fs-6">Hak Akses Role</div>
                        <div class="text-muted fs-7" id="drawer_role_perm_summary">Memuat...</div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-primary fw-bold btn-edit-from-drawer"
                    id="btn_edit_from_drawer" data-id="">
                    <i class="ki-duotone ki-pencil fs-5 me-1"><span class="path1"></span><span
                            class="path2"></span></i> Edit
                </button>
            </div>
            <!--end::Drawer Summary Card-->

            <!--begin::Search Module Filter inside Drawer-->
            <div class="position-relative mb-5">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4 top-50 translate-middle-y text-gray-500"><span
                        class="path1"></span><span class="path2"></span></i>
                <input type="text" id="drawer_role_perm_search" class="form-control form-control-solid ps-12"
                    placeholder="Cari modul atau tipe izin..." />
            </div>
            <!--end::Search Module Filter-->

            <!--begin::Module Permissions List Container-->
            <div id="drawer_role_perm_content" class="d-flex flex-column gap-3">
                <!-- Dynamic Module Cards -->
            </div>
            <!--end::Module Permissions List Container-->
        </div>
    </div>
    <!--end::Role Permissions Side Drawer-->
@endsection

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
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
                },
                drawCallback: function() {
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll(
                        '#kt_roles_table [data-bs-toggle="tooltip"]'));
                    tooltipTriggerList.map(function(el) {
                        return bootstrap.Tooltip.getInstance(el) || new bootstrap.Tooltip(el);
                    });
                }
            });

            $('#kt_roles_search').on('keyup', function() {
                rolesTable.search(this.value).draw();
            });

            // Handle Side Drawer for Role Permissions
            $(document).on('click', '.btn-show-role-permissions-drawer', function(e) {
                e.preventDefault();
                var roleId = $(this).data('id');
                var roleName = $(this).data('name');
                var permsData = $(this).data('perms');

                $('#drawer_role_name').text('Role: ' + roleName);
                $('#btn_edit_from_drawer').data('id', roleId);

                var totalPerms = 0;
                var totalModules = permsData ? permsData.length : 0;
                var html = '';

                if (permsData && permsData.length > 0) {
                    permsData.forEach(function(group) {
                        totalPerms += group.count;
                        var actionsHtml = '';
                        group.actions.forEach(function(act) {
                            var badgeColor = 'badge-light-primary text-primary';
                            if (act.action === 'create') badgeColor =
                                'badge-light-success text-success';
                            else if (act.action === 'read') badgeColor =
                                'badge-light-primary text-primary';
                            else if (act.action === 'update') badgeColor =
                                'badge-light-warning text-warning';
                            else if (act.action === 'delete') badgeColor =
                                'badge-light-danger text-danger';

                            actionsHtml += '<span class="badge ' + badgeColor +
                                ' fs-8 fw-bold px-2.5 py-1 me-1 mb-1" title="' + act.name +
                                '">' + act.action + '</span>';
                        });

                        html +=
                            '<div class="card schema-card border border-gray-300 p-4 rounded role-module-perm-card" data-search="' +
                            group.module.toLowerCase() + '">';
                        html +=
                            '  <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom border-gray-200">';
                        html +=
                            '    <span class="fw-bold text-gray-900 fs-7 d-flex align-items-center">';
                        html +=
                            '      <i class="ki-duotone ki-folder text-primary me-2 fs-6"><span class="path1"></span><span class="path2"></span></i>';
                        html += '      ' + group.module;
                        html += '    </span>';
                        html += '    <span class="badge badge-light-primary fw-bold fs-9">' + group
                            .count + ' Izin</span>';
                        html += '  </div>';
                        html += '  <div class="d-flex flex-wrap gap-1">' + actionsHtml + '</div>';
                        html += '</div>';
                    });

                    $('#drawer_role_perm_summary').text(totalPerms + ' Hak Akses di ' + totalModules +
                        ' Modul');
                } else {
                    html =
                        '<div class="text-center py-8 text-muted"><i class="ki-duotone ki-information-2 fs-2x mb-2 text-muted"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><div>Belum ada hak akses terhubung.</div></div>';
                    $('#drawer_role_perm_summary').text('Belum Ada Hak Akses');
                }

                $('#drawer_role_perm_content').html(html);
                $('#drawer_role_perm_search').val('');

                var offcanvasEl = document.getElementById('kt_offcanvas_role_permissions');
                var bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);
                bsOffcanvas.show();
            });

            // Filter inside Side Drawer
            $(document).on('keyup input', '#drawer_role_perm_search', function() {
                var val = $(this).val().toLowerCase();
                $('#drawer_role_perm_content .role-module-perm-card').each(function() {
                    var cardSearchText = ($(this).data('search') || '') + ' ' + $(this).text()
                        .toLowerCase();
                    if (cardSearchText.indexOf(val) !== -1) {
                        $(this).removeClass('d-none');
                    } else {
                        $(this).addClass('d-none');
                    }
                });
            });

            // Edit button inside Side Drawer opens edit modal
            $(document).on('click', '.btn-edit-from-drawer', function() {
                var roleId = $(this).data('id');
                var offcanvasEl = document.getElementById('kt_offcanvas_role_permissions');
                var bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
                if (bsOffcanvas) {
                    bsOffcanvas.hide();
                }
                $('.btn-edit-role[data-id="' + roleId + '"]').first().trigger('click');
            });

            $('#btn_add_role, #btn_add_role_top').on('click', function() {
                $('#role_modal_title').text('Tambah Role Baru');
                $('#kt_modal_role_form')[0].reset();
                $('#role_id').val('');
                $('#role_modal_perm_search').val('');
                $('.role-modal-matrix-row').show();
                $('.role-perm-checkbox').prop('checked', false);
                $('.role-modal-row-toggle').prop('checked', false);
            });

            function syncRoleParentMenuState($row) {
                var parentModule = $row.attr('data-parent-module');
                if (!parentModule) return;

                var $table = $row.closest('table');
                var $parentRow = $table.find('tr[data-module="' + parentModule + '"]');
                if ($parentRow.length === 0) return;

                var $childRows = $table.find('tr[data-parent-module="' + parentModule + '"]');
                var hasAnyChildChecked = false;

                $childRows.each(function() {
                    if ($(this).find('.role-perm-checkbox:checked').length > 0) {
                        hasAnyChildChecked = true;
                        return false;
                    }
                });

                var $parentPerms = $parentRow.find('.role-perm-checkbox');
                var $readPerm = $parentPerms.filter(function() {
                    var val = ($(this).val() || '').toLowerCase();
                    return val.startsWith('read ');
                });

                if (hasAnyChildChecked) {
                    if ($readPerm.length > 0 && !$readPerm.is(':checked')) {
                        $readPerm.prop('checked', true);
                        updateRoleRowToggleState($parentRow);
                        syncRoleParentMenuState($parentRow);
                    }
                } else {
                    if ($readPerm.length > 0 && $readPerm.is(':checked')) {
                        $readPerm.prop('checked', false);
                        updateRoleRowToggleState($parentRow);
                        syncRoleParentMenuState($parentRow);
                    }
                }
            }

            function updateRoleRowToggleState($row) {
                var $rowPerms = $row.find('.role-perm-checkbox');
                if ($rowPerms.length > 0) {
                    var allChecked = $rowPerms.length === $rowPerms.filter(':checked').length;
                    $row.find('.role-modal-row-toggle').prop('checked', allChecked);
                } else {
                    $row.find('.role-modal-row-toggle').prop('checked', false);
                }
            }

            function updateAllRoleRowToggles() {
                $('.role-modal-matrix-row').each(function() {
                    updateRoleRowToggleState($(this));
                });
            }

            // Sync row toggle checkbox when individual permission checkbox is clicked
            $(document).on('change', '.role-perm-checkbox', function() {
                var $row = $(this).closest('tr');
                syncRoleParentMenuState($row);
                updateRoleRowToggleState($row);
            });

            // Modal Live Search Filter for Modules
            $('#role_modal_perm_search').on('keyup', function() {
                var query = $(this).val().toLowerCase();
                $('.role-modal-matrix-row').each(function() {
                    var moduleName = $(this).data('module') || '';
                    var menuName = $(this).data('menu-name') || '';
                    if (moduleName.indexOf(query) !== -1 || menuName.indexOf(query) !== -1) {
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
                syncRoleParentMenuState($row);
                updateRoleRowToggleState($row);
            });

            // Modal Bulk Select All
            $('#btn_modal_role_select_all').on('click', function() {
                $('.role-perm-checkbox').prop('checked', true);
                updateAllRoleRowToggles();
            });

            // Modal Bulk Deselect All
            $('#btn_modal_role_deselect_all').on('click', function() {
                $('.role-perm-checkbox').prop('checked', false);
                updateAllRoleRowToggles();
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
                        if (res.success) {
                            $('#role_modal_title').text('Edit Role: ' + res.data.name
                                .toUpperCase());
                            $('#role_id').val(res.data.id);
                            $('#role_name').val(res.data.name);
                            $('#role_modal_perm_search').val('');
                            $('.role-modal-matrix-row').show();

                            $('.role-perm-checkbox').prop('checked', false);
                            $('.role-modal-row-toggle').prop('checked', false);

                            if (res.data.permissions && res.data.permissions.length > 0) {
                                var permNames = res.data.permissions.map(function(p) {
                                    return p.name;
                                });
                                $('.role-perm-checkbox').each(function() {
                                    if (permNames.includes($(this).val())) {
                                        $(this).prop('checked', true);
                                    }
                                });
                            }
                            updateAllRoleRowToggles();
                            $('#kt_modal_role').modal('show');
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.error(xhr.responseJSON?.message ||
                            'Gagal mengambil data role.');
                    }
                });
            });

            $('#kt_modal_role_form').on('submit', function(e) {
                e.preventDefault();
                var roleId = $('#role_id').val();
                var url = roleId ? "{{ url('manajemenpengguna/roles') }}/" + roleId :
                    "{{ route('manajemenpengguna.roles.store') }}";
                var type = roleId ? "PUT" : "POST";

                $.ajax({
                    url: url,
                    type: type,
                    data: $(this).serialize(),
                    success: function(res) {
                        if (res.success) {
                            $('#kt_modal_role').modal('hide');
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

            $(document).on('click', '.btn-delete-role', function(e) {
                e.preventDefault();
                var btn = $(this).closest('.btn-delete-role');
                var roleId = btn.data('id') || $(this).data('id');
                var roleName = btn.data('name') || $(this).data('name');

                SwalHelper.confirmDelete(roleName, function() {
                    $.ajax({
                        url: "{{ url('manajemenpengguna/roles') }}/" + roleId,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.success) {
                                SwalHelper.success(res.message);
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
                            }
                        },
                        error: function(xhr) {
                            SwalHelper.error(xhr.responseJSON?.message ||
                                'Gagal menghapus role.');
                        }
                    });
                });
            });
        });
    </script>
@endsection
