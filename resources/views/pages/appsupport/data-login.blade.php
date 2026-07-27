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
            Data Login & Activity Audit Log
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Page Header & Guide Action-->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-shield-search text-primary fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'System Audit Trail & Activity Log' : 'Audit Trail System & Activity Log Mutasi Data' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Audit real-time user login session logs, IP geolocation compliance, and model data mutation logs.' : 'Audit aktivitas login user real-time, lokasi IP, serta pelacakan mutasi data basis data.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_data_login_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Tab Navigation-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-5 fw-bold mb-6 gap-2">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab == 'login-log' ? 'active' : '' }}"
                       href="{{ route('appsupport.data-login', ['tab' => 'login-log']) }}">
                        <i class="ki-duotone ki-entrance-left fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'User Login Sessions' : 'Riwayat Sesi Login User' }}
                        <span class="badge badge-light-primary ms-2">{{ number_format($totalLogins) }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab == 'activity-log' ? 'active' : '' }}"
                       href="{{ route('appsupport.data-login', ['tab' => 'activity-log']) }}">
                        <i class="ki-duotone ki-shield-search fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Data Mutation Activity Log' : 'Audit Mutasi Data (Activity Log)' }}
                        <span class="badge badge-light-info ms-2">{{ number_format($totalMutations) }}</span>
                    </a>
                </li>
            </ul>
            <!--end::Tab Navigation-->

            <!--begin::Tab Content Container-->
            <div class="tab-content" id="kt_data_login_tab_content">
                @include('pages.appsupport.tabs.data-login._' . str_replace('-', '_', $activeTab))
            </div>
            <!--end::Tab Content Container-->

        </div>
        <!--end::Content container-->
    </div>

    @include('pages.appsupport.partials.data-login-help-modal')
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/crud-helper.js') }}"></script>
    <!--end::Vendors Javascript-->

    <script>
        var dataLoginTable;
        var activityLogTable;
        var defaultTodayDate = "{{ date('Y-m-d') }}";
        var activeTab = "{{ $activeTab }}";

        $(document).ready(function() {
            if (activeTab === 'login-log') {
                initLoginLogDatatable();
            } else if (activeTab === 'activity-log') {
                initActivityLogDatatable();
            }
        });

        // Initialize Login Session Datatable
        function initLoginLogDatatable() {
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
                        { orderable: false, targets: 7 }
                    ]
                });

                $('#kt_data_login_search').on('keyup input', function() {
                    toggleLoginResetButton();
                    dataLoginTable.search(this.value).draw();
                });

                $('#kt_data_login_date_filter, #kt_data_login_role_filter').on('change', function() {
                    toggleLoginResetButton();
                    dataLoginTable.draw();
                });

                toggleLoginResetButton();
            }
        }

        // Initialize Data Mutation Activity Log Datatable
        function initActivityLogDatatable() {
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    if (!settings.nTable || settings.nTable.id !== 'kt_table_activity_log') {
                        return true;
                    }

                    var rowNode = settings.aoData[dataIndex] ? settings.aoData[dataIndex].nTr : null;
                    if (!rowNode) return true;

                    var eventFilter = $('#kt_activity_event_filter').val();
                    if (eventFilter !== '' && eventFilter !== null && eventFilter !== undefined) {
                        var eventCell = $(rowNode).find('td').eq(3);
                        var eventValue = eventCell.attr('data-event') || eventCell.text().trim().toLowerCase();
                        if (eventValue && eventValue.toLowerCase() !== String(eventFilter).toLowerCase()) {
                            return false;
                        }
                    }

                    var causerFilter = $('#kt_activity_causer_filter').val();
                    if (causerFilter !== '' && causerFilter !== null && causerFilter !== undefined) {
                        var causerCell = $(rowNode).find('td').eq(2);
                        var causerValue = causerCell.attr('data-causer');
                        if (causerValue && causerValue.toLowerCase() !== String(causerFilter).toLowerCase()) {
                            return false;
                        }
                    }

                    return true;
                }
            );

            if ($('#kt_table_activity_log tbody tr td').length > 1) {
                activityLogTable = $('#kt_table_activity_log').DataTable({
                    info: true,
                    order: [],
                    pageLength: 10,
                    lengthChange: true,
                    columnDefs: [
                        { orderable: false, targets: 6 }
                    ]
                });

                $('#kt_activity_log_search').on('keyup input', function() {
                    toggleActivityResetButton();
                    activityLogTable.search(this.value).draw();
                });

                $('#kt_activity_event_filter, #kt_activity_causer_filter').on('change', function() {
                    toggleActivityResetButton();
                    activityLogTable.draw();
                });

                toggleActivityResetButton();
            }
        }

        function resetDataLoginFilters() {
            $('#kt_data_login_search').val('');
            $('#kt_data_login_date_filter').val(defaultTodayDate);
            $('#kt_data_login_role_filter').val('').trigger('change');
            toggleLoginResetButton();
            if (dataLoginTable) {
                dataLoginTable.search('').draw();
            }
        }

        function toggleLoginResetButton() {
            var searchVal = $('#kt_data_login_search').val() ? $('#kt_data_login_search').val().trim() : '';
            var dateVal = $('#kt_data_login_date_filter').val() ? $('#kt_data_login_date_filter').val().trim() : '';
            var roleVal = $('#kt_data_login_role_filter').val() ? $('#kt_data_login_role_filter').val().trim() : '';

            if (searchVal !== '' || roleVal !== '' || dateVal !== defaultTodayDate) {
                $('#kt_data_login_reset_filter').removeClass('d-none');
            } else {
                $('#kt_data_login_reset_filter').addClass('d-none');
            }
        }

        function resetActivityLogFilters() {
            $('#kt_activity_log_search').val('');
            $('#kt_activity_event_filter').val('').trigger('change');
            $('#kt_activity_causer_filter').val('').trigger('change');
            toggleActivityResetButton();
            if (activityLogTable) {
                activityLogTable.search('').draw();
            }
        }

        function toggleActivityResetButton() {
            var searchVal = $('#kt_activity_log_search').val() ? $('#kt_activity_log_search').val().trim() : '';
            var eventVal = $('#kt_activity_event_filter').val() ? $('#kt_activity_event_filter').val().trim() : '';
            var causerVal = $('#kt_activity_causer_filter').val() ? $('#kt_activity_causer_filter').val().trim() : '';

            if (searchVal !== '' || eventVal !== '' || causerVal !== '') {
                $('#kt_activity_log_reset_filter').removeClass('d-none');
            } else {
                $('#kt_activity_log_reset_filter').addClass('d-none');
            }
        }

        // Hapus 1 Record Login
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

        // Kosongkan Semua Record Login
        function clearAllDataLogins() {
            SwalHelper.confirmDelete('seluruh riwayat login user', function() {
                $.ajax({
                    url: "{{ route('appsupport.data-login.clear-all') }}",
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal mengosongkan riwayat login.';
                        SwalHelper.error(msg);
                    }
                });
            });
        }

        // Inspector Diff Modal for Activity Properties
        function showActivityDiff(id, description, subjectType, subjectId, causer, timestamp, event) {
            $('#diff_causer').text(causer);
            $('#diff_timestamp').text(timestamp);
            $('#diff_subject').html(subjectType + ' <span class="badge badge-light-secondary text-dark">#' + (subjectId || '-') + '</span>');
            $('#diff_event_badge').text(event);

            var rawJson = $('#activity_payload_' + id).val() || '{}';
            try {
                var parsed = JSON.parse(rawJson);
                $('#diff_json_content').text(JSON.stringify(parsed, null, 4));
            } catch (e) {
                $('#diff_json_content').text(rawJson);
            }

            $('#kt_modal_activity_diff').modal('show');
        }

        // Hapus 1 Record Activity Log
        function deleteActivityLog(id) {
            SwalHelper.confirmDelete('catatan audit activity log ini', function() {
                var deleteUrl = "{{ route('appsupport.activity-log.destroy', ':id') }}".replace(':id', id);
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal menghapus activity log.';
                        SwalHelper.error(msg);
                    }
                });
            });
        }

        // Kosongkan Semua Activity Logs
        function clearAllActivityLogs() {
            SwalHelper.confirmDelete('seluruh riwayat mutasi data (Activity Log)', function() {
                $.ajax({
                    url: "{{ route('appsupport.activity-log.clear-all') }}",
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal mengosongkan activity log.';
                        SwalHelper.error(msg);
                    }
                });
            });
        }
    </script>
@endsection
