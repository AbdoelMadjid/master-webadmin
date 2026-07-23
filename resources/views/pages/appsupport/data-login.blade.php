@extends('layouts.index')

@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            App Support
        @endslot
        @slot('li_2')
            Data Login
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col - Total Login-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-entrance-left fs-2x text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1" id="stat_total_logins">{{ number_format($totalLogins) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-6 mt-1">Total Sesi Login</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col - Today Login-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-calendar-tick fs-2x text-info">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1" id="stat_today_logins">{{ number_format($todayLogins) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-6 mt-1">Login Hari Ini</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col - Active Users 24h-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-user-tick fs-2x text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1" id="stat_active_users">{{ number_format($activeUsers24h) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-6 mt-1">User Aktif (15 Mins)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col - Total Points-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-warning">
                                        <i class="ki-duotone ki-award fs-2x text-warning">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1" id="stat_total_points">{{ number_format($totalPoints) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-6 mt-1">Total Poin Login User</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Summary Stat Cards-->

            <!--begin::Card Table-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Riwayat Data Login</span>
                            <span class="text-muted fw-semibold fs-7">Catatan keaktifan sesi login user</span>
                        </h3>
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-3">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="kt_data_login_search" class="form-control form-control-solid w-200px w-md-250px ps-12"
                                placeholder="Cari nama, email, IP..." />
                        </div>
                        <!--end::Search-->

                        <!--begin::Filter Role-->
                        <div class="d-flex align-items-center my-1">
                            <select id="kt_data_login_role_filter" class="form-select form-select-solid w-150px" data-control="select2" data-hide-search="true" data-placeholder="Semua Role">
                                <option value="">Semua Role</option>
                                <option value="master">Master</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <!--end::Filter Role-->

                        <!--begin::Filter Tanggal-->
                        <div class="d-flex align-items-center my-1">
                            <input type="date" id="kt_data_login_date_filter" class="form-control form-control-solid w-175px"
                                value="{{ date('Y-m-d') }}"
                                data-bs-toggle="tooltip" title="Filter Tanggal Login" />
                        </div>
                        <!--end::Filter Tanggal-->

                        <!--begin::Reset Filter Button-->
                        <button type="button" id="kt_data_login_reset_filter" class="btn btn-sm btn-light-secondary my-1 d-none" onclick="resetDataLoginFilters()">
                            <i class="ki-duotone ki-cross fs-3"><span class="path1"></span><span class="path2"></span></i> Reset
                        </button>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table responsive-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4 w-100" id="kt_table_data_login">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">No</th>
                                    <th class="min-w-200px">User / Pengguna</th>
                                    <th class="min-w-100px">Role</th>
                                    <th class="min-w-150px">Waktu Login</th>
                                    <th class="min-w-100px text-center">Jumlah Login</th>
                                    <th class="min-w-125px">IP Address</th>
                                    <th class="min-w-175px">Koordinat / Lokasi</th>
                                    <th class="min-w-125px">Jumlah Poin</th>
                                    <th class="min-w-200px">Device / Browser</th>
                                    <th class="text-end min-w-80px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse ($logins as $index => $item)
                                    @php
                                        $firstRole = $item->user?->roles->first()?->name ?? '';
                                        $roleName = '-';
                                        $roleBadgeClass = 'badge-light-secondary';
                                        if ($firstRole !== '') {
                                            $roleName = function_exists('roleDisplayName') ? roleDisplayName($firstRole) : ucfirst($firstRole);
                                            if ($firstRole === 'master') {
                                                $roleBadgeClass = 'badge-light-danger';
                                            } elseif ($firstRole === 'admin') {
                                                $roleBadgeClass = 'badge-light-primary';
                                            } elseif ($firstRole === 'user') {
                                                $roleBadgeClass = 'badge-light-info';
                                            } else {
                                                $roleBadgeClass = 'badge-light-success';
                                            }
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-35px me-3">
                                                    <img src="{{ $item->user ? $item->user->avatar_url : asset('assets/media/svg/avatars/default-avatar.svg') }}" alt="{{ $item->user ? $item->user->name : 'User' }}" style="width: 35px; height: 35px; object-fit: cover;" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="text-gray-800 text-hover-primary fw-bold">
                                                        {{ $item->user ? $item->user->name : 'Pengguna Terhapus' }}
                                                    </span>
                                                    <span class="text-muted fs-7">
                                                        {{ $item->user ? $item->user->email : '-' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-role="{{ strtolower($firstRole) }}">
                                            <span class="badge {{ $roleBadgeClass }} fw-bold fs-7">
                                                {{ $roleName }}
                                            </span>
                                        </td>
                                        <td data-date="{{ $item->login_at ? $item->login_at->format('Y-m-d') : '' }}">
                                            <div class="d-flex flex-column">
                                                <span class="text-gray-800 fw-bold">
                                                    {{ $item->login_at ? $item->login_at->format('d M Y, H:i:s') : '-' }}
                                                </span>
                                                <span class="text-muted fs-7">
                                                    {{ $item->login_at ? $item->login_at->diffForHumans() : '' }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-light-info fw-bold fs-7" data-bs-toggle="tooltip" title="Total frekuensi login (berpoin + tanpa poin) pada hari tersebut">
                                                <i class="ki-duotone ki-entrance-left fs-5 me-1 text-info"><span class="path1"></span><span class="path2"></span></i>
                                                {{ $item->login_count ?? 1 }}x Login
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary fw-bold font-monospace fs-7">
                                                {{ $item->ip_address ?? '127.0.0.1' }}
                                            </span>
                                        </td>
                                        <td>
                                            @if ($item->latitude && $item->longitude)
                                                <a href="https://maps.google.com/?q={{ $item->latitude }},{{ $item->longitude }}"
                                                    target="_blank" class="btn btn-sm btn-light-info py-1 px-2 fs-7"
                                                    data-bs-toggle="tooltip" title="Buka di Google Maps">
                                                    <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    {{ number_format($item->latitude, 4) }}, {{ number_format($item->longitude, 4) }}
                                                </a>
                                            @else
                                                <span class="text-muted fs-7 italic">Koordinat tidak tersedia</span>
                                            @endif
                                        </td>
                                        <td data-point="{{ $item->user?->points ?? 0 }}">
                                            <span class="badge badge-light-success fw-bold fs-7" data-bs-toggle="tooltip" title="Total poin reward keaktifan user saat ini">
                                                <i class="ki-duotone ki-award fs-5 me-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i> {{ number_format($item->user?->points ?? 0) }} Poin
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-gray-700 fs-7 text-truncate d-inline-block mw-200px" title="{{ $item->user_agent }}">
                                                {{ $item->user_agent ? Str::limit($item->user_agent, 45) : '-' }}
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <button type="button"
                                                class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                                onclick="deleteDataLogin({{ $item->id }})"
                                                data-bs-toggle="tooltip" title="Hapus Catatan Login">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center text-muted py-10">
                                            Belum ada riwayat login user tercatat.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table responsive-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card Table-->

        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/crud-helper.js') }}"></script>
    <!--end::Vendors Javascript-->

    <script>
        var dataLoginTable;
        var defaultTodayDate = "{{ date('Y-m-d') }}";

        $(document).ready(function() {
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    if (!settings.nTable || settings.nTable.id !== 'kt_table_data_login') {
                        return true;
                    }

                    var rowNode = settings.aoData[dataIndex] ? settings.aoData[dataIndex].nTr : null;
                    if (!rowNode) return true;

                    // Role filter
                    var roleFilter = $('#kt_data_login_role_filter').val();
                    if (roleFilter !== '' && roleFilter !== null && roleFilter !== undefined) {
                        var roleCell = $(rowNode).find('td').eq(2);
                        var roleValue = roleCell.attr('data-role') || roleCell.text().trim().toLowerCase();
                        if (roleValue && roleValue.toLowerCase() !== String(roleFilter).toLowerCase()) {
                            return false;
                        }
                    }

                    // Date filter
                    var dateFilter = $('#kt_data_login_date_filter').val();
                    if (dateFilter) {
                        var dateCell = $(rowNode).find('td').eq(3);
                        var cellDate = dateCell.attr('data-date');
                        if (cellDate && cellDate !== dateFilter) {
                            return false;
                        }
                    }

                    return true;
                }
            );

            if ($('#kt_table_data_login tbody tr td').length > 1) {
                dataLoginTable = $('#kt_table_data_login').DataTable({
                    info: true,
                    order: [],
                    pageLength: 10,
                    lengthChange: true,
                    columnDefs: [
                        { orderable: false, targets: 9 }
                    ]
                });

                $('#kt_data_login_search').on('keyup input', function() {
                    toggleResetButton();
                    dataLoginTable.search(this.value).draw();
                });

                $('#kt_data_login_date_filter, #kt_data_login_role_filter').on('change', function() {
                    toggleResetButton();
                    dataLoginTable.draw();
                });

                toggleResetButton();
            }
        });

        function resetDataLoginFilters() {
            $('#kt_data_login_search').val('');
            $('#kt_data_login_date_filter').val(defaultTodayDate);
            $('#kt_data_login_role_filter').val('').trigger('change');
            toggleResetButton();
            if (dataLoginTable) {
                dataLoginTable.search('').draw();
            }
        }

        function toggleResetButton() {
            var searchVal = $('#kt_data_login_search').val() ? $('#kt_data_login_search').val().trim() : '';
            var dateVal = $('#kt_data_login_date_filter').val() ? $('#kt_data_login_date_filter').val().trim() : '';
            var roleVal = $('#kt_data_login_role_filter').val() ? $('#kt_data_login_role_filter').val().trim() : '';

            // Reset button appears if any filter is modified from default state (default: search="", role="", date=today)
            if (searchVal !== '' || roleVal !== '' || dateVal !== defaultTodayDate) {
                $('#kt_data_login_reset_filter').removeClass('d-none');
            } else {
                $('#kt_data_login_reset_filter').addClass('d-none');
            }
        }

        // Function Hapus 1 Record Login
        function deleteDataLogin(id) {
            SwalHelper.confirmDelete('catatan login ini', function() {
                var deleteUrl = "{{ route('appsupport.data-login.destroy', ':id') }}".replace(':id', id);
                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            SwalHelper.success(response.message, function() {
                                location.reload();
                            });
                        } else {
                            SwalHelper.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal menghapus catatan login.';
                        SwalHelper.error(msg);
                    }
                });
            });
        }
    </script>
@endsection
