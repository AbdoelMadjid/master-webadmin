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
            Backup DB
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col - Total Backup-->
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-file-down fs-2x text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1" id="stat_total_backups">{{ $totalBackups }}</span>
                                    <span class="text-gray-500 fw-semibold fs-6 mt-1">Total File Backup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col - Total Ukuran-->
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-folder fs-2x text-info">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1" id="stat_total_size">{{ $totalSize }}</span>
                                    <span class="text-gray-500 fw-semibold fs-6 mt-1">Total Ukuran Penyimpanan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col - Database Active-->
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-flush h-md-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-shield-tick fs-2x text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2 fw-bold text-gray-800 me-2 lh-1">{{ $dbName }}</span>
                                    <span class="text-gray-500 fw-semibold fs-6 mt-1">Database Aktif (MySQL)</span>
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
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="kt_backup_search" class="form-control form-control-solid w-250px ps-12"
                                placeholder="Cari nama file backup..." />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <button type="button" class="btn btn-primary" onclick="openCreateBackupModal()">
                            <i class="ki-duotone ki-plus fs-2"></i> Buat Backup Baru
                        </button>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table responsive-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4 w-100" id="kt_table_backup_db">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">No</th>
                                    <th class="min-w-200px">Nama File Backup</th>
                                    <th class="min-w-125px">Ukuran File</th>
                                    <th class="min-w-150px">Waktu Pembuatan</th>
                                    <th class="text-end min-w-150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse ($backups as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-file-down fs-2x text-primary me-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="d-flex flex-column">
                                                    <span class="text-gray-800 text-hover-primary fw-bold">{{ $item['filename'] }}</span>
                                                    <span class="text-muted fs-7">SQL Dump</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-info fw-bold fs-7">{{ $item['size'] }}</span>
                                        </td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('appsupport.backup-db.download', $item['filename']) }}"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="tooltip" title="Unduh File SQL">
                                                <i class="ki-duotone ki-down fs-2"></i>
                                            </a>
                                            <button type="button"
                                                class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm me-1"
                                                onclick="restoreBackup('{{ $item['filename'] }}')"
                                                data-bs-toggle="tooltip" title="Restore Database">
                                                <i class="ki-duotone ki-arrows-loop fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                                onclick="deleteBackup('{{ $item['filename'] }}')"
                                                data-bs-toggle="tooltip" title="Hapus File Backup">
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
                                        <td colspan="5" class="text-center text-muted py-10">
                                            Belum ada file backup database. Klik tombol <strong>Buat Backup Baru</strong> untuk memulai.
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

            <!--begin::Form Partial Modal-->
            @include('pages.appsupport.partials.backup-db-form')
            <!--end::Form Partial Modal-->

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
        var backupTable;

        $(document).ready(function() {
            // Inisialisasi Datatables jika ada data
            if ($('#kt_table_backup_db tbody tr td').length > 1) {
                backupTable = $('#kt_table_backup_db').DataTable({
                    info: true,
                    order: [],
                    pageLength: 10,
                    lengthChange: true,
                    columnDefs: [
                        { orderable: false, targets: 4 }
                    ]
                });

                // Custom search input handler
                $('#kt_backup_search').on('keyup', function() {
                    backupTable.search(this.value).draw();
                });
            }

            // Toggle Tampilan Kontainer Pilih Tabel berdasarkan pilihan Radio
            $('input[name="table_scope"]').on('change', function() {
                if (this.value === 'custom') {
                    $('#container_table_selection').removeClass('d-none');
                } else {
                    $('#container_table_selection').addClass('d-none');
                }
            });

            window.tableRelations = @json($tableRelations);

            // Auto-select related tables saat checkbox diklik
            $(document).on('change', '.table-checkbox', function() {
                if (this.checked && $('#auto_select_relations').is(':checked')) {
                    var tableName = $(this).data('table-name');
                    if (window.tableRelations && window.tableRelations[tableName]) {
                        window.tableRelations[tableName].forEach(function(relTable) {
                            $('.table-checkbox[data-table-name="' + relTable + '"]').prop('checked', true);
                        });
                    }
                }
            });

            // Tombol Pilih Semua Tabel
            $('#btn_select_all_tables').on('click', function() {
                $('.table-checkbox').prop('checked', true);
            });

            // Tombol Hapus Semua Pilihan Tabel
            $('#btn_deselect_all_tables').on('click', function() {
                $('.table-checkbox').prop('checked', false);
            });

            // Handler Form Submit Backup DB
            $('#kt_modal_backup_db_form').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var submitBtn = $('#kt_modal_backup_db_submit');

                submitBtn.attr('data-kt-indicator', 'on').prop('disabled', true);

                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);
                        $('#kt_modal_backup_db').modal('hide');
                        if (response.success) {
                            SwalHelper.success(response.message, function() {
                                location.reload();
                            });
                        } else {
                            SwalHelper.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);
                        if (xhr.status === 422) {
                            SwalHelper.validationError(xhr);
                        } else {
                            var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Terjadi kesalahan sistem.';
                            SwalHelper.error(msg);
                        }
                    }
                });
            });
        });

        // Buka modal buat backup
        function openCreateBackupModal() {
            $('#kt_modal_backup_db_form')[0].reset();
            $('#scope_all').prop('checked', true);
            $('#container_table_selection').addClass('d-none');
            $('.table-checkbox').prop('checked', false);
            $('#kt_modal_backup_db').modal('show');
        }

        // Hapus file backup
        function deleteBackup(filename) {
            SwalHelper.confirmDelete(filename, function() {
                var deleteUrl = "{{ route('appsupport.backup-db.destroy', ':filename') }}".replace(':filename', encodeURIComponent(filename));
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal menghapus file backup.';
                        SwalHelper.error(msg);
                    }
                });
            });
        }

        // Restore file backup
        function restoreBackup(filename) {
            Swal.fire({
                title: 'Konfirmasi Restore Database',
                html: 'Apakah Anda yakin ingin memulihkan database dari file <strong>' + filename + '</strong>?<br><span class="text-danger fs-7 mt-2 d-block">Peringatan: Data database saat ini akan ditimpa dengan isi file backup ini.</span>',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ffc700',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Restore Now!',
                cancelButtonText: 'Batal'
            }).then(function(result) {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Memulihkan Database...',
                        text: 'Mohon tunggu, proses restore sedang berjalan.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    var restoreUrl = "{{ route('appsupport.backup-db.restore', ':filename') }}".replace(':filename', encodeURIComponent(filename));
                    $.ajax({
                        url: restoreUrl,
                        type: 'POST',
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
                            var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal memulihkan database.';
                            SwalHelper.error(msg);
                        }
                    });
                }
            });
        }
    </script>
@endsection
