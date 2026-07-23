@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            App Support
        @endslot
        @slot('li_2')
            App Features Visibility
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Header Notice Card-->
            <div class="card card-flush mb-8 bg-light-primary border border-primary">
                <div class="card-body d-flex align-items-center py-6">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-primary text-white">
                            <i class="ki-duotone ki-eye fs-2x text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </div>
                    <div class="d-flex flex-column">
                        <h3 class="fw-bold text-gray-900 mb-1">Pengaturan Visibilitas Fitur & UI</h3>
                        <span class="text-gray-700 fs-6">Sembunyikan atau tampilkan elemen navigasi seperti grup menu sidebar (PAGES, APPS, LAYOUTS, HELP), ikon topbar navigasi, jam digital, hingga tombol drawer melayang di samping kanan layar.</span>
                    </div>
                </div>
            </div>
            <!--end::Header Notice Card-->

            <!--begin::Grouped Features Lists-->
            <div class="row g-6 g-xl-9">
                @foreach ($groupedFiturs as $category => $fiturs)
                    @php
                        $catIcon = match ($category) {
                            'Sidebar Group'     => 'ki-category text-primary',
                            'Topbar Menu Group' => 'ki-element-11 text-warning',
                            'Topbar Navbar'     => 'ki-element-4 text-success',
                            'Floating Drawer'   => 'ki-slider-vertical-2 text-info',
                            default             => 'ki-setting-2 text-secondary',
                        };

                        $catBadge = match ($category) {
                            'Sidebar Group'     => 'badge-light-primary',
                            'Topbar Menu Group' => 'badge-light-warning',
                            'Topbar Navbar'     => 'badge-light-success',
                            'Floating Drawer'   => 'badge-light-info',
                            default             => 'badge-light-dark',
                        };
                    @endphp

                    <div class="col-12 col-lg-6">
                        <div class="card card-flush h-lg-100">
                            <!--begin::Card Header-->
                            <div class="card-header pt-6 pb-4 align-items-center">
                                <div class="card-title d-flex align-items-center gap-3">
                                    <i class="ki-duotone {{ $catIcon }} fs-2x">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                    <h3 class="fw-bold fs-4 text-gray-900 m-0">{{ $category }}</h3>
                                    <span class="badge {{ $catBadge }} fw-bold fs-8">{{ $fiturs->count() }} Fitur</span>
                                </div>
                                <div class="card-toolbar d-flex align-items-center gap-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-light-success"
                                        onclick="bulkToggleCategory('{{ addslashes($category) }}', 1)"
                                        data-bs-toggle="tooltip" title="Aktifkan semua fitur dalam {{ $category }}">
                                        <i class="ki-duotone ki-check fs-3"><span class="path1"></span><span class="path2"></span></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-sm btn-light-danger"
                                        onclick="bulkToggleCategory('{{ addslashes($category) }}', 0)"
                                        data-bs-toggle="tooltip" title="Non-aktifkan semua fitur dalam {{ $category }}">
                                        <i class="ki-duotone ki-cross fs-3"><span class="path1"></span><span class="path2"></span></i>
                                    </button>
                                </div>
                            </div>
                            <!--end::Card Header-->

                            <!--begin::Card Body-->
                            <div class="card-body pt-0">
                                <!--begin::Table responsive-->
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-4">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-125px">Nama Fitur</th>
                                                <th class="min-w-150px">Deskripsi</th>
                                                <th class="min-w-90px text-center">Status Visibilitas</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($fiturs as $fitur)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex flex-column">
                                                            <span class="text-gray-900 fw-bold fs-6 mb-1">{{ $fitur->feature_name }}</span>
                                                            <code class="text-muted fs-8 w-fit">{{ $fitur->feature_key }}</code>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-700 fs-7">{{ \Illuminate\Support\Str::ucfirst(trim(str_ireplace(['menyembunyikan atau menampilkan', 'menyembunyikan/menampilkan'], '', $fitur->description))) }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                                            <input class="form-check-input h-22px w-45px cursor-pointer" type="checkbox"
                                                                id="fitur_switch_{{ $fitur->id }}"
                                                                {{ $fitur->active ? 'checked' : '' }}
                                                                onchange="toggleFiturStatus({{ $fitur->id }}, this)"
                                                                data-bs-toggle="tooltip" title="Klik untuk menampilkan / menyembunyikan fitur" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table responsive-->
                            </div>
                            <!--end::Card Body-->
                        </div>
                    </div>
                @endforeach
            </div>
            <!--end::Grouped Features Lists-->

        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/custom/crud-helper.js') }}"></script>
    <script>
        function toggleFiturStatus(fiturId, checkboxElem) {
            var toggleUrl = "{{ route('appsupport.app-fiturs.toggle-status', ':id') }}".replace(':id', fiturId);
            var isChecked = checkboxElem.checked;

            $.ajax({
                url: toggleUrl,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Update sidebar HTML secara real-time
                        if (response.sidebar_html && $('#kt_app_sidebar_menu_wrapper').length) {
                            $('#kt_app_sidebar_menu_wrapper').replaceWith(response.sidebar_html);
                            if (typeof KTMenu !== 'undefined') {
                                KTMenu.createInstances();
                            }
                        }

                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.success(response.message, function() {
                                // Reload page agar perubahan pada topbar / drawer ikut aktif
                                location.reload();
                            });
                        }
                    } else {
                        checkboxElem.checked = !isChecked;
                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.error(response.message);
                        }
                    }
                },
                error: function(xhr) {
                    checkboxElem.checked = !isChecked;
                    var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal mengubah visibilitas fitur.';
                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.error(msg);
                    }
                }
            });
        }

        function bulkToggleCategory(categoryName, activeStatus) {
            var actionText = activeStatus ? 'mengaktifkan (menampilkan)' : 'menonaktifkan (menyembunyikan)';
            var confirmMsg = 'Apakah Anda yakin ingin ' + actionText + ' semua fitur dalam kelompok "' + categoryName + '"?';

            Swal.fire({
                title: 'Konfirmasi Aksi Massal',
                text: confirmMsg,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Lanjutkan',
                cancelButtonText: 'Batal',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-light'
                }
            }).then(function(result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('appsupport.app-fiturs.bulk-toggle') }}",
                        type: 'POST',
                        data: {
                            category: categoryName,
                            active: activeStatus
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                if (response.sidebar_html && $('#kt_app_sidebar_menu_wrapper').length) {
                                    $('#kt_app_sidebar_menu_wrapper').replaceWith(response.sidebar_html);
                                    if (typeof KTMenu !== 'undefined') {
                                        KTMenu.createInstances();
                                    }
                                }

                                if (typeof SwalHelper !== 'undefined') {
                                    SwalHelper.success(response.message, function() {
                                        location.reload();
                                    });
                                }
                            } else {
                                if (typeof SwalHelper !== 'undefined') {
                                    SwalHelper.error(response.message);
                                }
                            }
                        },
                        error: function(xhr) {
                            var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal memperbarui status massal.';
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.error(msg);
                            }
                        }
                    });
                }
            });
        }
    </script>
@endsection
