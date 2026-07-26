@extends('layouts.index')

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            App Support
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Data References' : 'Data Referensi' }}
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
                        <i class="ki-duotone ki-element-11 text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Master Data Reference Engine' : 'Engine Master Data Referensi Acuan Sistem' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage standardized lookup choices (Gender, Religion, Marital Status, Education, etc.) across the app.' : 'Kelola kelompok pilihan data acuan acuan standar (Jenis Kelamin, Agama, Status Perkawinan, Pendidikan, dll).' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_referensi_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-6">
                <!--Col 1: Total Kategori-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-primary">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-category fs-2x text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($totalKategori) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Total Categories' : 'Total Kategori' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 2: Kategori Aktif-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-success">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-check-circle fs-2x text-success"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($activeKategori) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Active Categories' : 'Kategori Aktif' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 3: Total Item Option-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-info">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-element-plus fs-2x text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($totalItem) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Total Item Choices' : 'Total Opsi Item' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 4: Item Option Aktif-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-warning">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-warning">
                                        <i class="ki-duotone ki-star fs-2x text-warning"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($activeItem) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Active Item Choices' : 'Opsi Item Aktif' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Summary Stat Cards-->

            <!--begin::Sub-Tab Navigation-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-5 fw-bold mb-6" id="kt_referensi_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'kategori' ? 'active' : '' }}" href="{{ route('appsupport.referensi', ['tab' => 'kategori']) }}">
                        <i class="ki-duotone ki-category fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Categories (Kategori)' : 'Kategori Referensi' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'item' ? 'active' : '' }}" href="{{ route('appsupport.referensi', array_merge(['tab' => 'item'], $selectedKategoriId ? ['kategori_id' => $selectedKategoriId] : [])) }}">
                        <i class="ki-duotone ki-element-plus fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Item Choices (Item Referensi)' : 'Item / Opsi Referensi' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'preview' ? 'active' : '' }}" href="{{ route('appsupport.referensi', ['tab' => 'preview']) }}">
                        <i class="ki-duotone ki-eye fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Live Form Demo (Preview)' : 'Live Demo Selector' }}
                    </a>
                </li>
            </ul>
            <!--end::Sub-Tab Navigation-->

            <!--begin::Tab Content Loader-->
            @include('pages.appsupport.tabs.referensi._' . str_replace('-', '_', $activeTab))
            <!--end::Tab Content Loader-->

        </div>
        <!--end::Content container-->
    </div>

    <!--begin::Modals Inclusion-->
    @include('pages.appsupport.partials.referensi-kategori-modal')
    @include('pages.appsupport.partials.referensi-item-modal')
    @include('pages.appsupport.partials.referensi-help-modal')
    <!--end::Modals Inclusion-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/crud-helper.js') }}"></script>
    <script>
        // Form & Modal Helper Functions for Kategori
        function resetKategoriForm() {
            $('#kt_form_referensi_kategori')[0].reset();
            $('#kategori_id').val('');
            $('#kategori_form_method').val('POST');
            $('#kt_form_referensi_kategori').attr('action', "{{ route('appsupport.referensi.kategori.store') }}");
            $('#modal_kategori_title').text("{{ app()->getLocale() == 'en' ? 'Add Reference Category' : 'Tambah Kategori Referensi' }}");
            $('#kategori_is_active').prop('checked', true);
        }

        function editKategori(data) {
            resetKategoriForm();
            $('#kategori_id').val(data.id);
            $('#kategori_kode').val(data.kode);
            $('#kategori_nama').val(data.nama);
            $('#kategori_deskripsi').val(data.deskripsi);
            $('#kategori_is_active').prop('checked', data.is_active);

            $('#kategori_form_method').val('PUT');
            $('#kt_form_referensi_kategori').attr('action', "/appsupport/referensi/kategori/" + data.id);
            $('#modal_kategori_title').text("{{ app()->getLocale() == 'en' ? 'Edit Reference Category' : 'Edit Kategori Referensi' }}");

            var modal = new bootstrap.Modal(document.getElementById('kt_modal_referensi_kategori'));
            modal.show();
        }

        // Form & Modal Helper Functions for Item
        function resetItemForm() {
            $('#kt_form_referensi_item')[0].reset();
            $('#item_id').val('');
            $('#item_form_method').val('POST');
            $('#kt_form_referensi_item').attr('action', "{{ route('appsupport.referensi.item.store') }}");
            $('#modal_item_title').text("{{ app()->getLocale() == 'en' ? 'Add Reference Item' : 'Tambah Opsi / Item Referensi' }}");
            $('#item_is_active').prop('checked', true);
            $('#item_urutan').val('1');

            @if ($selectedKategoriId)
                $('#item_kategori_id').val('{{ $selectedKategoriId }}');
            @endif
        }

        function editItem(data) {
            resetItemForm();
            $('#item_id').val(data.id);
            $('#item_kategori_id').val(data.kategori_id);
            $('#item_kode').val(data.kode);
            $('#item_nama').val(data.nama);
            $('#item_urutan').val(data.urutan);
            $('#item_keterangan').val(data.keterangan);
            $('#item_is_active').prop('checked', data.is_active);

            $('#item_form_method').val('PUT');
            $('#kt_form_referensi_item').attr('action', "/appsupport/referensi/item/" + data.id);
            $('#modal_item_title').text("{{ app()->getLocale() == 'en' ? 'Edit Reference Item' : 'Edit Opsi / Item Referensi' }}");

            var modal = new bootstrap.Modal(document.getElementById('kt_modal_referensi_item'));
            modal.show();
        }

        function filterItemByKategori(kategoriId) {
            var url = new URL(window.location.href);
            url.searchParams.set('tab', 'item');
            if (kategoriId) {
                url.searchParams.set('kategori_id', kategoriId);
            } else {
                url.searchParams.delete('kategori_id');
            }
            window.location.href = url.toString();
        }

        // Status Switch Handler Kategori
        function toggleKategoriStatus(id, elem) {
            $.ajax({
                url: "/appsupport/referensi/kategori/" + id + "/toggle-status",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success && typeof SwalHelper !== 'undefined') {
                        SwalHelper.success(response.message);
                    }
                },
                error: function(xhr) {
                    $(elem).prop('checked', !$(elem).is(':checked'));
                    var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal memperbarui status.';
                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.error(msg);
                    }
                }
            });
        }

        // Status Switch Handler Item
        function toggleItemStatus(id, elem) {
            $.ajax({
                url: "/appsupport/referensi/item/" + id + "/toggle-status",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success && typeof SwalHelper !== 'undefined') {
                        SwalHelper.success(response.message);
                    }
                },
                error: function(xhr) {
                    $(elem).prop('checked', !$(elem).is(':checked'));
                    var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal memperbarui status.';
                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.error(msg);
                    }
                }
            });
        }

        // Delete Handler Kategori
        function deleteKategori(id, name) {
            if (typeof SwalHelper !== 'undefined') {
                SwalHelper.confirmDelete(name, function() {
                    $.ajax({
                        url: "/appsupport/referensi/kategori/" + id,
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
                            var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal menghapus kategori.';
                            SwalHelper.error(msg);
                        }
                    });
                });
            }
        }

        // Delete Handler Item
        function deleteItem(id, name) {
            if (typeof SwalHelper !== 'undefined') {
                SwalHelper.confirmDelete(name, function() {
                    $.ajax({
                        url: "/appsupport/referensi/item/" + id,
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
                            var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal menghapus item.';
                            SwalHelper.error(msg);
                        }
                    });
                });
            }
        }

        $(document).ready(function() {
            // DataTables Initialization for Kategori Table
            if ($('#kt_table_referensi_kategori').length > 0) {
                var kategoriTable = $('#kt_table_referensi_kategori').DataTable({
                    pageLength: 10,
                    order: [],
                    language: {
                        search: "",
                        searchPlaceholder: "{{ app()->getLocale() == 'en' ? 'Search category...' : 'Cari kategori...' }}"
                    }
                });

                $('#kt_referensi_kategori_search').on('keyup', function() {
                    kategoriTable.search(this.value).draw();
                });
            }

            // DataTables Initialization for Item Table
            if ($('#kt_table_referensi_item').length > 0) {
                var itemTable = $('#kt_table_referensi_item').DataTable({
                    pageLength: 10,
                    order: [],
                    language: {
                        search: "",
                        searchPlaceholder: "{{ app()->getLocale() == 'en' ? 'Search item...' : 'Cari item...' }}"
                    }
                });

                $('#kt_referensi_item_search').on('keyup', function() {
                    itemTable.search(this.value).draw();
                });
            }

            // Form Submit Kategori AJAX
            $('#kt_form_referensi_kategori').on('submit', function(e) {
                e.preventDefault();
                var form = this;
                var submitBtn = $('#btn_submit_kategori');
                submitBtn.attr('data-kt-indicator', 'on').prop('disabled', true);

                $.ajax({
                    url: $(form).attr('action'),
                    type: $('#kategori_form_method').val(),
                    data: $(form).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);
                        if (response.success) {
                            $('#kt_modal_referensi_kategori').modal('hide');
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.success(response.message, function() {
                                    location.reload();
                                });
                            }
                        }
                    },
                    error: function(xhr) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);
                        if (typeof SwalHelper !== 'undefined') {
                            if (xhr.status === 422) {
                                SwalHelper.validationError(xhr);
                            } else {
                                var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Terjadi kesalahan saat menyimpan data.';
                                SwalHelper.error(msg);
                            }
                        }
                    }
                });
            });

            // Form Submit Item AJAX
            $('#kt_form_referensi_item').on('submit', function(e) {
                e.preventDefault();
                var form = this;
                var submitBtn = $('#btn_submit_item');
                submitBtn.attr('data-kt-indicator', 'on').prop('disabled', true);

                $.ajax({
                    url: $(form).attr('action'),
                    type: $('#item_form_method').val(),
                    data: $(form).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);
                        if (response.success) {
                            $('#kt_modal_referensi_item').modal('hide');
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.success(response.message, function() {
                                    location.reload();
                                });
                            }
                        }
                    },
                    error: function(xhr) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);
                        if (typeof SwalHelper !== 'undefined') {
                            if (xhr.status === 422) {
                                SwalHelper.validationError(xhr);
                            } else {
                                var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Terjadi kesalahan saat menyimpan data.';
                                SwalHelper.error(msg);
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
