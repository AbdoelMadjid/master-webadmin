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
            App Profile
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

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
                            <input type="text" id="kt_profil_search" class="form-control form-control-solid w-250px ps-12"
                                placeholder="Cari nama aplikasi / pembuat..." />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <button type="button" class="btn btn-primary" onclick="openCreateModal()">
                            <i class="ki-duotone ki-plus fs-2"></i> Tambah Profil Aplikasi
                        </button>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table responsive-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4 w-100" id="kt_table_app_profils">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-50px">#</th>
                                    <th class="min-w-200px">Aplikasi & Logo Utama</th>
                                    <th class="min-w-150px">Logo Ringkas & Favicon</th>
                                    <th class="min-w-150px">Tahun & Pembuat</th>
                                    <th class="min-w-175px">Deskripsi</th>
                                    <th class="min-w-100px text-center">Status</th>
                                    <th class="min-w-150px text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse ($appProfils as $index => $profil)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-3">
                                                    @if ($profil->logo_url)
                                                        <img src="{{ $profil->logo_url }}" alt="Logo Utama" class="object-fit-contain" />
                                                    @else
                                                        <span class="symbol-label bg-light-primary text-primary fw-bold fs-4">
                                                            {{ strtoupper(substr($profil->nama_aplikasi, 0, 2)) }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                        {{ $profil->nama_aplikasi }}
                                                    </span>
                                                    @if ($profil->singkatan_aplikasi)
                                                        <span class="badge badge-light-info fw-bold w-fit">{{ $profil->singkatan_aplikasi }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <!--Logo Small-->
                                                <div class="symbol symbol-35px symbol-circle bg-light p-1 border" title="Logo Ringkas Sidebar Minimize">
                                                    @if ($profil->logo_small_url)
                                                        <img src="{{ $profil->logo_small_url }}" alt="Logo Small" class="object-fit-contain" />
                                                    @else
                                                        <span class="symbol-label bg-light-secondary fs-8 text-muted">S</span>
                                                    @endif
                                                </div>
                                                <!--Favicon-->
                                                <div class="symbol symbol-30px bg-light p-1 border" title="Favicon Tab Browser">
                                                    @if ($profil->favicon_url)
                                                        <img src="{{ $profil->favicon_url }}" alt="Favicon" class="object-fit-contain" />
                                                    @else
                                                        <span class="symbol-label bg-light-secondary fs-8 text-muted">F</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="text-gray-800 fw-semibold fs-6">{{ $profil->pembuat }}</span>
                                                <span class="text-muted fs-7">Tahun: {{ $profil->tahun }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-600 fs-7">
                                                {{ Str::limit($profil->deskripsi ?: 'Tidak ada deskripsi', 50) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            @if ($profil->active)
                                                <span class="badge badge-light-success fw-bold">Aktif Utama</span>
                                            @else
                                                <span class="badge badge-light-secondary fw-bold">Non-aktif</span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end gap-2">
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                                    onclick="openShowModal({{ $profil->id }})" title="Lihat Detail">
                                                    <i class="ki-duotone ki-eye fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-warning btn-sm"
                                                    onclick="openEditModal({{ $profil->id }})" title="Edit Data">
                                                    <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </button>
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                                    onclick="deleteProfil({{ $profil->id }}, '{{ addslashes($profil->nama_aplikasi) }}')" title="Hapus Data">
                                                    <i class="ki-duotone ki-trash fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted py-8">
                                            Belum ada data profil aplikasi. Klik tombol <strong>Tambah Profil Aplikasi</strong> di atas.
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

    <!--begin::Single Reusable Modal (Create, Edit, Show)-->
    <div class="modal fade" id="kt_modal_app_profil" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-between">
                    <h2 class="fw-bold" id="modal_title">Profil Aplikasi</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    @include('pages.appsupport.partials.app-profil-form')
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Single Reusable Modal-->
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <script>
        var bsModalInstance = null;

        $(document).ready(function() {
            // Inisialisasi DataTables
            var table = $('#kt_table_app_profils').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan _MENU_",
                    "zeroRecords": "Tidak ada profil aplikasi yang sesuai",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ profil",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 profil",
                    "infoFiltered": "(disaring dari _MAX_ total profil)"
                },
                "dom": "tr" +
                       "<'row mt-4'<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'li><'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>",
                "pageLength": 10,
                "order": [[0, "asc"]],
                "autoWidth": false
            });

            $('#kt_profil_search').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Handle AJAX Submit Form (Create / Edit) Menggunakan SwalHelper
            $('#kt_form_app_profil').on('submit', function(e) {
                e.preventDefault();

                var form = this;
                var formData = new FormData(form);
                var profilId = $('#profil_id').val();
                var method = $('#form_method').val();

                var targetUrl = "{{ route('app-profil.store') }}";
                if (method === 'PUT' && profilId) {
                    targetUrl = "{{ url('appsupport/app-profil') }}/" + profilId;
                    formData.append('_method', 'PUT');
                }

                $('#btn_submit_profil').attr('data-kt-indicator', 'on').prop('disabled', true);

                $.ajax({
                    url: targetUrl,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#btn_submit_profil').removeAttr('data-kt-indicator').prop('disabled', false);

                        if (response.success) {
                            if (bsModalInstance) bsModalInstance.hide();
                            SwalHelper.success(response.message);
                        } else {
                            SwalHelper.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        $('#btn_submit_profil').removeAttr('data-kt-indicator').prop('disabled', false);
                        SwalHelper.validationError(xhr);
                    }
                });
            });
        });

        // Mode 1: Open Modal Create
        function openCreateModal() {
            var form = $('#kt_form_app_profil')[0];
            form.reset();

            $('#profil_id').val('');
            $('#form_method').val('POST');
            $('#modal_title').text('Tambah Profil Aplikasi');

            $('#kt_form_app_profil input, #kt_form_app_profil textarea').prop('disabled', false);
            $('#btn_submit_profil').show();

            // Hide all image previews
            $('#logo_preview_container, #logo_small_preview_container, #favicon_preview_container').addClass('d-none');
            $('#logo_preview_img, #logo_small_preview_img, #favicon_preview_img').attr('src', '');

            var modalEl = document.getElementById('kt_modal_app_profil');
            bsModalInstance = new bootstrap.Modal(modalEl);
            bsModalInstance.show();
        }

        // Mode 2: Open Modal Edit
        function openEditModal(id) {
            fetchDetailData(id, function(data, logoUrl, logoSmallUrl, faviconUrl) {
                $('#modal_title').text('Edit Profil Aplikasi');
                $('#profil_id').val(data.id);
                $('#form_method').val('PUT');

                $('#input_nama_aplikasi').val(data.nama_aplikasi).prop('disabled', false);
                $('#input_singkatan_aplikasi').val(data.singkatan_aplikasi).prop('disabled', false);
                $('#input_tahun').val(data.tahun).prop('disabled', false);
                $('#input_pembuat').val(data.pembuat).prop('disabled', false);
                $('#input_deskripsi').val(data.deskripsi).prop('disabled', false);
                $('#input_logo, #input_logo_small, #input_favicon').prop('disabled', false);
                $('#input_active').prop('checked', data.active == 1).prop('disabled', false);

                $('#btn_submit_profil').show();

                // Set image previews
                handlePreview('#logo_preview_img', '#logo_preview_container', logoUrl);
                handlePreview('#logo_small_preview_img', '#logo_small_preview_container', logoSmallUrl);
                handlePreview('#favicon_preview_img', '#favicon_preview_container', faviconUrl);

                var modalEl = document.getElementById('kt_modal_app_profil');
                bsModalInstance = new bootstrap.Modal(modalEl);
                bsModalInstance.show();
            });
        }

        // Mode 3: Open Modal Show (Read-Only)
        function openShowModal(id) {
            fetchDetailData(id, function(data, logoUrl, logoSmallUrl, faviconUrl) {
                $('#modal_title').text('Detail Profil Aplikasi');
                $('#profil_id').val(data.id);

                $('#input_nama_aplikasi').val(data.nama_aplikasi).prop('disabled', true);
                $('#input_singkatan_aplikasi').val(data.singkatan_aplikasi).prop('disabled', true);
                $('#input_tahun').val(data.tahun).prop('disabled', true);
                $('#input_pembuat').val(data.pembuat).prop('disabled', true);
                $('#input_deskripsi').val(data.deskripsi).prop('disabled', true);
                $('#input_logo, #input_logo_small, #input_favicon').prop('disabled', true);
                $('#input_active').prop('checked', data.active == 1).prop('disabled', true);

                $('#btn_submit_profil').hide();

                handlePreview('#logo_preview_img', '#logo_preview_container', logoUrl);
                handlePreview('#logo_small_preview_img', '#logo_small_preview_container', logoSmallUrl);
                handlePreview('#favicon_preview_img', '#favicon_preview_container', faviconUrl);

                var modalEl = document.getElementById('kt_modal_app_profil');
                bsModalInstance = new bootstrap.Modal(modalEl);
                bsModalInstance.show();
            });
        }

        // Helper Image Preview Toggle
        function handlePreview(imgSelector, containerSelector, url) {
            if (url) {
                $(imgSelector).attr('src', url);
                $(containerSelector).removeClass('d-none');
            } else {
                $(containerSelector).addClass('d-none');
            }
        }

        // Helper AJAX Fetch Detail Data
        function fetchDetailData(id, callback) {
            $.ajax({
                url: "{{ url('appsupport/app-profil') }}/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success && response.data) {
                        callback(response.data, response.logo_url, response.logo_small_url, response.favicon_url);
                    } else {
                        SwalHelper.error('Data profil aplikasi tidak ditemukan.');
                    }
                },
                error: function(xhr) {
                    SwalHelper.validationError(xhr);
                }
            });
        }

        // Hapus Data dengan SwalHelper.confirmDelete
        function deleteProfil(id, name) {
            SwalHelper.confirmDelete(name, function() {
                $.ajax({
                    url: "{{ url('appsupport/app-profil') }}/" + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            SwalHelper.success(response.message);
                        } else {
                            SwalHelper.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.validationError(xhr);
                    }
                });
            });
        }
    </script>
@endsection
