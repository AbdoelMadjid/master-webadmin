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

            <!--begin::Page Header & Guide Action-->
            <div
                class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-eye text-primary fs-2x"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Dynamic Feature Switch System (Feature Toggle)' : 'Pengaturan Visibilitas Fitur & UI (Feature Toggle)' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Operational guide for real-time control of active/inactive module switches and UI components.' : 'Sembunyikan atau tampilkan elemen navigasi seperti grup menu sidebar (PAGES, APPS, LAYOUTS, HELP), ikon topbar navigasi, jam digital, hingga tombol drawer melayang.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <!--1. Keenicon Style Switcher Dropdown-->
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Switch Menu Icon Style (Duotone / Solid / Outline)' : 'Ganti Gaya Ikon Menu (Duotone / Solid / Outline)' }}">
                        <div class="m-0 d-inline-block">
                            <button type="button"
                                class="btn btn-dark shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4"
                                data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                @if (($activeIconStyle ?? 'duotone') == 'solid')
                                    <i class="ki-solid ki-element-11 fs-2 p-0 m-0 text-warning"></i>
                                @elseif (($activeIconStyle ?? 'duotone') == 'outline')
                                    <i class="ki-outline ki-element-11 fs-2 p-0 m-0 text-info"></i>
                                @else
                                    <i class="ki-duotone ki-colors-square fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                @endif
                                <span class="d-none d-sm-inline ms-2">
                                    {{ app()->getLocale() == 'en' ? 'Icon Style: ' : 'Gaya Ikon: ' }}
                                    <span class="badge badge-sm {{ ($activeIconStyle ?? 'duotone') == 'solid' ? 'badge-light-warning' : (($activeIconStyle ?? 'duotone') == 'outline' ? 'badge-light-info' : 'badge-light-primary') }} ms-1 fw-bold">
                                        {{ ucfirst($activeIconStyle ?? 'duotone') }}
                                    </span>
                                </span>
                            </button>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px py-3 shadow-lg border border-gray-200"
                                data-kt-menu="true">
                                <!--begin::Menu item Duotone-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 d-flex align-items-center justify-content-between cursor-pointer {{ ($activeIconStyle ?? 'duotone') == 'duotone' ? 'active bg-light-primary' : '' }}"
                                        onclick="switchMenuIconStyle('duotone')">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-duotone ki-element-11 fs-3 text-primary"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i>
                                            <div class="d-flex flex-column">
                                                <span
                                                    class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Duotone Style' : 'Gaya Duotone' }}</span>
                                                <span class="text-muted fs-8">ki-duotone</span>
                                            </div>
                                        </div>
                                        @if (($activeIconStyle ?? 'duotone') == 'duotone')
                                            <span class="badge badge-light-primary fs-8 fw-bold py-1 px-2 ms-2">
                                                <i class="ki-duotone ki-check fs-7 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                                {{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}
                                            </span>
                                        @endif
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item Solid-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 d-flex align-items-center justify-content-between cursor-pointer {{ ($activeIconStyle ?? 'duotone') == 'solid' ? 'active bg-light-warning' : '' }}"
                                        onclick="switchMenuIconStyle('solid')">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-solid ki-element-11 fs-3 text-warning"></i>
                                            <div class="d-flex flex-column">
                                                <span
                                                    class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Solid Style' : 'Gaya Solid' }}</span>
                                                <span class="text-muted fs-8">ki-solid</span>
                                            </div>
                                        </div>
                                        @if (($activeIconStyle ?? 'duotone') == 'solid')
                                            <span class="badge badge-light-warning fs-8 fw-bold py-1 px-2 ms-2">
                                                <i class="ki-duotone ki-check fs-7 text-warning me-1"><span class="path1"></span><span class="path2"></span></i>
                                                {{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}
                                            </span>
                                        @endif
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item Outline-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 d-flex align-items-center justify-content-between cursor-pointer {{ ($activeIconStyle ?? 'duotone') == 'outline' ? 'active bg-light-info' : '' }}"
                                        onclick="switchMenuIconStyle('outline')">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="ki-outline ki-element-11 fs-3 text-info"></i>
                                            <div class="d-flex flex-column">
                                                <span
                                                    class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Outline Style' : 'Gaya Outline' }}</span>
                                                <span class="text-muted fs-8">ki-outline</span>
                                            </div>
                                        </div>
                                        @if (($activeIconStyle ?? 'duotone') == 'outline')
                                            <span class="badge badge-light-info fs-8 fw-bold py-1 px-2 ms-2">
                                                <i class="ki-duotone ki-check fs-7 text-info me-1"><span class="path1"></span><span class="path2"></span></i>
                                                {{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}
                                            </span>
                                        @endif
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                    </span>

                    <!--2. Operational Guide Button-->
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button"
                            class="btn btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_app_fitur_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Grouped Features Lists-->
            <div class="row g-6 g-xl-9">
                @foreach ($groupedFiturs as $category => $fiturs)
                    @php
                        $catIcon = match ($category) {
                            'Sidebar Group' => 'ki-category text-primary',
                            'Topbar Menu Group' => 'ki-element-11 text-warning',
                            'Topbar Navbar' => 'ki-element-4 text-success',
                            'Floating Drawer' => 'ki-slider-vertical-2 text-info',
                            default => 'ki-setting-2 text-secondary',
                        };

                        $catBadge = match ($category) {
                            'Sidebar Group' => 'badge-light-primary',
                            'Topbar Menu Group' => 'badge-light-warning',
                            'Topbar Navbar' => 'badge-light-success',
                            'Floating Drawer' => 'badge-light-info',
                            default => 'badge-light-dark',
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
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Aktifkan semua fitur dalam {{ $category }}">
                                        <i class="ki-duotone ki-check fs-3"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </button>
                                    <button type="button" class="btn btn-icon btn-sm btn-light-danger"
                                        onclick="bulkToggleCategory('{{ addslashes($category) }}', 0)"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Non-aktifkan semua fitur dalam {{ $category }}">
                                        <i class="ki-duotone ki-cross fs-3"><span class="path1"></span><span
                                                class="path2"></span></i>
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
                                                            <span
                                                                class="text-gray-900 fw-bold fs-6 mb-1">{{ $fitur->feature_name }}</span>
                                                            <code
                                                                class="text-muted fs-8 w-fit">{{ $fitur->feature_key }}</code>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="text-gray-700 fs-7">{{ \Illuminate\Support\Str::ucfirst(trim(str_ireplace(['menyembunyikan atau menampilkan', 'menyembunyikan/menampilkan'], '', $fitur->description))) }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div
                                                            class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                                            <input class="form-check-input h-22px w-45px cursor-pointer"
                                                                type="checkbox" id="fitur_switch_{{ $fitur->id }}"
                                                                {{ $fitur->active ? 'checked' : '' }}
                                                                onchange="toggleFiturStatus({{ $fitur->id }}, this)"
                                                                data-bs-toggle="tooltip"
                                                                title="Klik untuk menampilkan / menyembunyikan fitur" />
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
    @include('pages.appsupport.partials.app-fitur-help-modal')
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
                            reinitSidebar();
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
                    var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message :
                        'Gagal mengubah visibilitas fitur.';
                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.error(msg);
                    }
                }
            });
        }

        /**
         * Reinisialisasi komponen Metronic sidebar setelah HTML diganti:
         * - KTMenu   : accordion & active-state menu
         * - KTScroll : custom scroll wrapper (#kt_app_sidebar_menu_scroll)
         * - KTScrolltop : scroll-to-top button (opsional)
         */
        function reinitSidebar() {
            if (typeof KTMenu !== 'undefined') {
                KTMenu.createInstances();
            }
            if (typeof KTScroll !== 'undefined') {
                KTScroll.createInstances();
            }
            if (typeof KTScrolltop !== 'undefined') {
                KTScrolltop.createInstances();
            }
        }

        function bulkToggleCategory(categoryName, activeStatus) {
            var actionText = activeStatus ? 'mengaktifkan (menampilkan)' : 'menonaktifkan (menyembunyikan)';
            var confirmMsg = 'Apakah Anda yakin ingin ' + actionText + ' semua fitur dalam kelompok "' + categoryName +
            '"?';

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
                                    $('#kt_app_sidebar_menu_wrapper').replaceWith(response
                                    .sidebar_html);
                                    reinitSidebar();
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
                            var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON
                                .message : 'Gagal memperbarui status massal.';
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.error(msg);
                            }
                        }
                    });
                }
            });
        }

        window.switchMenuIconStyle = function(style) {
            var labels = {
                'duotone': 'Duotone (ki-duotone)',
                'solid': 'Solid (ki-solid)',
                'outline': 'Outline (ki-outline)'
            };
            var label = labels[style] || style;

            Swal.fire({
                title: '{{ app()->getLocale() == "en" ? "Change All Menu Icons?" : "Ganti Gaya Semua Ikon Menu?" }}',
                text: '{{ app()->getLocale() == "en" ? "All menu icons in the system database will be updated to style: " : "Seluruh ikon menu pada sistem database akan diperbarui menjadi gaya: " }}' + label,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ app()->getLocale() == "en" ? "Yes, Change All" : "Ya, Ganti Semua" }}',
                cancelButtonText: '{{ app()->getLocale() == "en" ? "Cancel" : "Batal" }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: '{{ app()->getLocale() == "en" ? "Updating Icons..." : "Memperbarui Ikon..." }}',
                        text: '{{ app()->getLocale() == "en" ? "Please wait..." : "Mohon tunggu sejenak..." }}',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    $.ajax({
                        url: "{{ route('appsupport.app-fiturs.switch-icon-style') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            style: style
                        },
                        success: function(response) {
                            if (response.success) {
                                if (response.sidebar_html && $('#kt_app_sidebar_menu_wrapper').length) {
                                    $('#kt_app_sidebar_menu_wrapper').replaceWith(response.sidebar_html);
                                    reinitSidebar();
                                }
                                SwalHelper.success(response.message).then(() => {
                                    location.reload();
                                });
                            } else {
                                SwalHelper.error(response.message || '{{ app()->getLocale() == "en" ? "Failed to update icon styles." : "Gagal memperbarui gaya ikon." }}');
                            }
                        },
                        error: function(xhr) {
                            SwalHelper.validationError(xhr);
                        }
                    });
                }
            });
        };
    </script>
@endsection
