@php
$activeIconStyle = getActiveIconStyle();
@endphp

<div class="app-navbar-item ms-1 ms-md-4">
    <!--begin::Menu wrapper-->
    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
        <i class="{{ formatIconClass('ki-duotone ki-scan-barcode') }} fs-2">
            @for ($i = 1; $i <= keenicon_paths('ki-scan-barcode'); $i++) <span class="path{{ $i }}"></span>
                @endfor
        </i>
    </div>

    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px py-3 shadow-lg border border-gray-200"
        data-kt-menu="true">
        <!--begin::Header title-->
        <div class="px-4 py-2 border-bottom border-gray-200 mb-2">
            <span class="text-gray-500 fs-8 text-uppercase fw-bold">
                {{ app()->getLocale() == 'en' ? 'Select Icon Style' : 'Pilih Gaya Ikon' }}
            </span>
        </div>
        <!--end::Header title-->

        <!--begin::Menu item Duotone-->
        <div class="menu-item px-3">
            <a class="menu-link px-3 d-flex align-items-center justify-content-between cursor-pointer {{ $activeIconStyle == 'duotone' ? 'active bg-light-primary' : '' }}"
                onclick="switchMenuIconStyle('duotone')">
                <div class="d-flex align-items-center gap-2">
                    <i class="ki-duotone ki-element-11 fs-3 text-primary"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    <div class="d-flex flex-column">
                        <span class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Duotone Style' : 'Gaya Duotone'
                            }}</span>
                        <span class="text-muted fs-8">ki-duotone</span>
                    </div>
                </div>
                @if ($activeIconStyle == 'duotone')
                <span class="badge badge-light-primary fs-8 fw-bold py-1 px-2 ms-2">
                    <i class="ki-duotone ki-check fs-7 text-primary me-1"><span class="path1"></span><span
                            class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}
                </span>
                @endif
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item Solid-->
        <div class="menu-item px-3">
            <a class="menu-link px-3 d-flex align-items-center justify-content-between cursor-pointer {{ $activeIconStyle == 'solid' ? 'active bg-light-warning' : '' }}"
                onclick="switchMenuIconStyle('solid')">
                <div class="d-flex align-items-center gap-2">
                    <i class="ki-solid ki-element-11 fs-3 text-warning"></i>
                    <div class="d-flex flex-column">
                        <span class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Solid Style' : 'Gaya Solid'
                            }}</span>
                        <span class="text-muted fs-8">ki-solid</span>
                    </div>
                </div>
                @if ($activeIconStyle == 'solid')
                <span class="badge badge-light-warning fs-8 fw-bold py-1 px-2 ms-2">
                    <i class="ki-duotone ki-check fs-7 text-warning me-1"><span class="path1"></span><span
                            class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}
                </span>
                @endif
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item Outline-->
        <div class="menu-item px-3">
            <a class="menu-link px-3 d-flex align-items-center justify-content-between cursor-pointer {{ $activeIconStyle == 'outline' ? 'active bg-light-info' : '' }}"
                onclick="switchMenuIconStyle('outline')">
                <div class="d-flex align-items-center gap-2">
                    <i class="ki-outline ki-element-11 fs-3 text-info"></i>
                    <div class="d-flex flex-column">
                        <span class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Outline Style' : 'Gaya Outline'
                            }}</span>
                        <span class="text-muted fs-8">ki-outline</span>
                    </div>
                </div>
                @if ($activeIconStyle == 'outline')
                <span class="badge badge-light-info fs-8 fw-bold py-1 px-2 ms-2">
                    <i class="ki-duotone ki-check fs-7 text-info me-1"><span class="path1"></span><span
                            class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}
                </span>
                @endif
            </a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>

<script>
    if (typeof window.switchMenuIconStyle === 'undefined') {
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
            }).then(function(result) {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: '{{ app()->getLocale() == "en" ? "Updating Icons..." : "Memperbarui Ikon..." }}',
                        text: '{{ app()->getLocale() == "en" ? "Please wait..." : "Mohon tunggu sejenak..." }}',
                        allowOutsideClick: false,
                        didOpen: function() {
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
                                    if (typeof reinitSidebar === 'function') {
                                        reinitSidebar();
                                    }
                                }
                                if (typeof SwalHelper !== 'undefined') {
                                    SwalHelper.success(response.message, function() {
                                        location.reload();
                                    });
                                } else {
                                    location.reload();
                                }
                            } else {
                                if (typeof SwalHelper !== 'undefined') {
                                    SwalHelper.error(response.message || '{{ app()->getLocale() == "en" ? "Failed to update icon styles." : "Gagal memperbarui gaya ikon." }}');
                                } else {
                                    alert(response.message);
                                }
                            }
                        },
                        error: function(xhr) {
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.validationError(xhr);
                            } else {
                                alert('Failed to update icon style.');
                            }
                        }
                    });
                }
            });
        };
    }
</script>
