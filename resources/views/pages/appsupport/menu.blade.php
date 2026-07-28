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
            Menu Management
        @endslot
    @endcomponent
@endsection

@section('content')
    @php
        $allMenus = $allMenus ?? \App\Models\Menu::getOrderedTree();

        $categories = $allMenus->pluck('category')->filter()->unique()->values();
        $totalMenus = $allMenus->count();
        $activeMenus = $allMenus->where('active', 1)->count();
        $mainMenusCount = $allMenus->whereNull('main_menu_id')->count();
        $subMenusCount = $allMenus->whereNotNull('main_menu_id')->count();
    @endphp

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            
            <!--begin::Page Header & Guide Action-->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-abstract-14 text-primary fs-2x"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Dynamic Menu Management' : 'Pengelolaan Menu Dinamis (Sidebar Menu Management)' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage centralized sidebar menu structure, hierarchy, ordering, and permission mapping.' : 'Kelola struktur menu sidebar terpusat, hierarki, urutan tampilan, dan pemetaan perizinan.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_menu_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Stats Cards-->
            <div class="row g-5 g-xl-10 mb-8">
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100 bg-primary bg-opacity-10 border-0">
                        <div class="card-body d-flex justify-content-between align-items-center flex-row p-6">
                            <div class="d-flex flex-column">
                                <span class="fs-2hx fw-bold text-primary mb-1">{{ $totalMenus }}</span>
                                <span class="fs-6 fw-bold text-gray-700">Total Menu</span>
                            </div>
                            <div class="symbol symbol-50px symbol-circle bg-primary bg-opacity-20 p-2">
                                <i class="ki-duotone ki-element-11 fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100 bg-success bg-opacity-10 border-0">
                        <div class="card-body d-flex justify-content-between align-items-center flex-row p-6">
                            <div class="d-flex flex-column">
                                <span class="fs-2hx fw-bold text-success mb-1">{{ $activeMenus }}</span>
                                <span class="fs-6 fw-bold text-gray-700">Menu Aktif</span>
                            </div>
                            <div class="symbol symbol-50px symbol-circle bg-success bg-opacity-20 p-2">
                                <i class="ki-duotone ki-check-circle fs-2x text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100 bg-info bg-opacity-10 border-0">
                        <div class="card-body d-flex justify-content-between align-items-center flex-row p-6">
                            <div class="d-flex flex-column">
                                <span class="fs-2hx fw-bold text-info mb-1">{{ $mainMenusCount }}</span>
                                <span class="fs-6 fw-bold text-gray-700">Menu Utama</span>
                            </div>
                            <div class="symbol symbol-50px symbol-circle bg-info bg-opacity-20 p-2">
                                <i class="ki-duotone ki-folder fs-2x text-info">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3">
                    <div class="card card-flush h-lg-100 bg-warning bg-opacity-10 border-0">
                        <div class="card-body d-flex justify-content-between align-items-center flex-row p-6">
                            <div class="d-flex flex-column">
                                <span class="fs-2hx fw-bold text-warning mb-1">{{ $subMenusCount }}</span>
                                <span class="fs-6 fw-bold text-gray-700">Sub Menu</span>
                            </div>
                            <div class="symbol symbol-50px symbol-circle bg-warning bg-opacity-20 p-2">
                                <i class="ki-duotone ki-down-square fs-2x text-warning">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Stats Cards-->

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
                            <input type="text" id="kt_menu_search" class="form-control form-control-solid w-250px ps-12"
                                placeholder="Cari nama menu / route..." />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--begin::Filter Category-->
                        <div class="w-100 w-sm-200px">
                            <select id="kt_category_filter" class="form-select form-select-solid" data-control="select2"
                                data-placeholder="Pilih Kategori">
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat }}">{{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Filter Category-->

                        <button type="button" class="btn btn-light-primary" onclick="location.reload();">
                            <i class="ki-duotone ki-arrows-loop fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i> Refresh Data
                        </button>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-4 mb-5">
                        <i class="ki-duotone ki-information-5 fs-2hx text-primary me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <h5 class="mb-1 text-primary">Fitur Drag & Drop Urutan Menu</h5>
                            <span class="fs-7 text-gray-700">Tahan ikon <strong><i class="ki-duotone ki-abstract-14 fs-6 text-primary"><span class="path1"></span><span class="path2"></span></i></strong> lalu seret baris tabel ke atas atau ke bawah untuk mengubah urutan menu. Perubahan akan otomatis disimpan dan di-update di sidebar secara <strong>real-time</strong>.</span>
                        </div>
                    </div>

                    <!--begin::Table responsive-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4 w-100" id="kt_table_menus">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-80px"># Urutan</th>
                                    <th class="min-w-200px">Nama Menu & Hierarki</th>
                                    <th class="min-w-200px">Route / URL</th>
                                    <th class="min-w-125px">Kategori</th>
                                    <th class="min-w-175px">Permissions</th>
                                    <th class="min-w-100px text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse ($allMenus as $menu)
                                    @php
                                        $menuDepth = $menu->depth ?? 0;
                                    @endphp
                                    <tr draggable="true"
                                        data-id="{{ $menu->id }}"
                                        data-parent-id="{{ $menu->main_menu_id ?? 0 }}"
                                        data-category="{{ $menu->category ?? '' }}"
                                        data-level="{{ $menuDepth }}"
                                        class="drag-row {{ $menuDepth == 1 ? 'bg-light-secondary' : ($menuDepth == 2 ? 'bg-light-warning' : '') }}"
                                        style="{{ $menuDepth > 0 ? 'background-color: ' . ($menuDepth == 2 ? 'rgba(255,199,0,0.04)' : 'rgba(0,0,0,0.018)') . ' !important;' : '' }}">
                                        <td>
                                            <div class="d-flex align-items-center" style="padding-left: {{ $menuDepth * 20 }}px;">
                                                <i class="ki-duotone ki-abstract-14 fs-3 text-gray-400 me-2 drag-handle" style="cursor: move;" title="Tahan dan geser untuk mengubah urutan">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span class="badge badge-light-secondary fs-7 fw-bold order-number">{{ $menu->orders }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center" style="padding-left: {{ $menuDepth * 24 }}px;">
                                                {{-- Level indicators --}}
                                                @if ($menuDepth == 1)
                                                    <span class="text-gray-300 me-2 fs-7" style="white-space:nowrap;">└─</span>
                                                @elseif ($menuDepth == 2)
                                                    <span class="text-gray-300 me-2 fs-7" style="white-space:nowrap;">└──</span>
                                                @endif

                                                @if ($menu->icon)
                                                    <span class="symbol symbol-35px me-3 flex-shrink-0">
                                                        <span class="symbol-label {{ $menuDepth == 0 ? 'bg-light-primary' : ($menuDepth == 1 ? 'bg-light-info' : 'bg-light-warning') }}">
                                                            <i class="{{ $menu->icon }} {{ $menuDepth == 0 ? 'text-primary' : ($menuDepth == 1 ? 'text-info' : 'text-warning') }} fs-3">
                                                                @for ($i = 1; $i <= ($menu->paths ?? 0); $i++)
                                                                    <span class="path{{ $i }}"></span>
                                                                @endfor
                                                            </i>
                                                        </span>
                                                    </span>
                                                @endif
                                                <div class="d-flex flex-column">
                                                    <span class="{{ $menuDepth == 0 ? 'text-gray-900 fw-bolder' : ($menuDepth == 1 ? 'text-gray-800 fw-bold' : 'text-gray-700 fw-semibold') }} text-hover-primary mb-1 fs-{{ $menuDepth == 0 ? '6' : ($menuDepth == 1 ? '6' : '7') }}">
                                                        {{ $menu->name }}
                                                    </span>
                                                    <div class="d-flex align-items-center gap-2">
                                                        @if ($menuDepth == 0)
                                                            <span class="badge badge-light-dark fs-8 py-1 px-2">
                                                                <i class="ki-duotone ki-home fs-9 me-1"><span class="path1"></span><span class="path2"></span></i>
                                                                Menu Utama
                                                            </span>
                                                        @elseif ($menuDepth == 1)
                                                            <span class="badge badge-light-primary fs-8 py-1 px-2">
                                                                <i class="ki-duotone ki-arrow-down fs-9 me-1"><span class="path1"></span></i>
                                                                Sub: {{ $menu->parentMenu?->name ?? '-' }}
                                                            </span>
                                                        @elseif ($menuDepth == 2)
                                                            <span class="badge badge-light-warning fs-8 py-1 px-2">
                                                                <i class="ki-duotone ki-arrow-down fs-9 me-1"><span class="path1"></span></i>
                                                                Sub-Sub: {{ $menu->parentMenu?->name ?? '-' }}
                                                            </span>
                                                        @endif

                                                        @if (isset($menu->meta['title_key']))
                                                            <span class="text-muted fs-8">Key: {{ $menu->meta['title_key'] }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <code class="text-dark bg-light px-2 py-1 rounded fs-7">{{ $menu->url }}</code>
                                        </td>
                                        <td>
                                            @if ($menu->category)
                                                <span class="badge badge-light-info fw-bold">{{ $menu->category }}</span>
                                            @else
                                                <span class="text-muted fs-7">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex flex-wrap align-items-center gap-1">
                                                @forelse ($menu->permissions as $perm)
                                                    @php
                                                        $action = explode(' ', $perm->name)[0] ?? $perm->name;
                                                        $badgeColor = match ($action) {
                                                            'read' => 'badge-light-primary',
                                                            'create' => 'badge-light-success',
                                                            'update' => 'badge-light-warning',
                                                            'delete' => 'badge-light-danger',
                                                            'sort' => 'badge-light-info',
                                                            default => 'badge-light-dark',
                                                        };
                                                    @endphp
                                                    <span class="badge {{ $badgeColor }} fs-8 py-1 px-2 d-inline-flex align-items-center gap-1">
                                                        {{ $action }}
                                                        <i class="ki-duotone ki-cross fs-9 cursor-pointer text-hover-danger ms-1"
                                                            onclick="removePermission({{ $menu->id }}, {{ $perm->id }}, '{{ $action }}', '{{ addslashes($menu->name) }}')"
                                                            title="Hapus permission {{ $action }}">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                @empty
                                                    <span class="text-muted fs-8 me-1">-</span>
                                                @endforelse

                                                <button type="button" class="btn btn-icon btn-xs btn-light-primary ms-1"
                                                    onclick="openAddPermissionModal({{ $menu->id }}, '{{ addslashes($menu->name) }}')"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Permission untuk {{ $menu->name }}">
                                                    <i class="ki-duotone ki-plus fs-7"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input h-20px w-30px cursor-pointer" type="checkbox"
                                                    id="status_switch_{{ $menu->id }}"
                                                    {{ $menu->active ? 'checked' : '' }}
                                                    onchange="toggleMenuStatus({{ $menu->id }}, '{{ addslashes($menu->name) }}', this)"
                                                    data-bs-toggle="tooltip" title="Klik untuk mengaktifkan / menonaktifkan menu" />
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-8">
                                            Belum ada data menu di tabel <code>menus</code>. Jalankan <code>php artisan db:seed --class=MenuSeeder</code>.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table Container-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card Table-->

            <!--begin::Form Partial Modal-->
            @include('pages.appsupport.partials.menu-permission-form')
            @include('pages.appsupport.partials.menu-help-modal')
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
        $(document).ready(function() {
            var sortRouteUrl = "{{ route('appsupport.menu.sort') }}";

            var table = $('#kt_table_menus').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan _MENU_",
                    "zeroRecords": "Tidak ada menu yang sesuai",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ menu",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 menu",
                    "infoFiltered": "(disaring dari _MAX_ total menu)"
                },
                "dom": "tr" +
                       "<'row mt-4'<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'li><'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>",
                "pageLength": 100,
                "ordering": false,
                "autoWidth": false
            });

            $('#kt_menu_search').on('keyup', function() {
                table.search(this.value).draw();
            });

            $('#kt_category_filter').on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                table.column(3).search(val ? '^' + val + '$' : '', true, false).draw();
            });

            // Quick action button click handler
            $(document).on('click', '.btn-quick-action', function() {
                $('#permission_action_input').val($(this).data('action'));
            });

            // Submit Form Tambah Permission
            $('#kt_modal_add_permission_form').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var submitBtn = $('#kt_modal_add_permission_submit');

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
                        $('#kt_modal_add_permission').modal('hide');
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

            // Implementasi Drag & Drop HTML5
            var tbody = document.querySelector('#kt_table_menus tbody');
            var dragRow = null;
            var dragRowGroup = []; // dragRow + semua baris anak / cucu

            /**
             * Kumpulkan sebuah baris beserta seluruh descendant-nya secara rekursif
             * berdasarkan data-id / data-parent-id antar baris di tbody.
             */
            function collectRowGroup(row) {
                var group = [row];
                var rowId = row.getAttribute('data-id');
                Array.from(tbody.querySelectorAll('tr.drag-row')).forEach(function(tr) {
                    if (tr.getAttribute('data-parent-id') === rowId) {
                        // Rekursif: ambil cucu juga
                        var subGroup = collectRowGroup(tr);
                        group = group.concat(subGroup);
                    }
                });
                return group;
            }

            if (tbody) {
                tbody.addEventListener('dragstart', function(e) {
                    var tr = e.target.closest('tr');
                    if (tr && tr.classList.contains('drag-row')) {
                        dragRow = tr;
                        dragRowGroup = collectRowGroup(tr);
                        // Highlight seluruh grup
                        dragRowGroup.forEach(function(r) {
                            r.classList.add('opacity-50');
                        });
                        dragRow.classList.add('bg-light-primary');
                        e.dataTransfer.effectAllowed = 'move';
                        e.dataTransfer.setData('text/html', tr.innerHTML);
                    }
                });

                tbody.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    e.dataTransfer.dropEffect = 'move';
                    var target = e.target.closest('tr');
                    // Target tidak boleh merupakan bagian dari grup yang sedang di-drag
                    if (target && !dragRowGroup.includes(target) && target.classList.contains('drag-row')) {
                        var dragParent = dragRow.getAttribute('data-parent-id');
                        var targetParent = target.getAttribute('data-parent-id');
                        var dragCat = dragRow.getAttribute('data-category');
                        var targetCat = target.getAttribute('data-category');

                        // Hanya izinkan pergeseran di dalam grup parent menu & kategori yang sama
                        if (dragParent === targetParent && dragCat === targetCat) {
                            var rect = target.getBoundingClientRect();
                            var insertAfter = (e.clientY - rect.top) / (rect.bottom - rect.top) > 0.5;
                            // Anchor: jika setelah target → target.nextSibling, jika sebelum → target
                            var anchor = insertAfter ? target.nextSibling : target;
                            // Pindahkan seluruh grup (parent + anak) sekaligus sebagai blok
                            dragRowGroup.forEach(function(r) {
                                tbody.insertBefore(r, anchor);
                            });
                        }
                    }
                });

                tbody.addEventListener('dragend', function(e) {
                    if (dragRow) {
                        dragRowGroup.forEach(function(r) {
                            r.classList.remove('opacity-50');
                        });
                        dragRow.classList.remove('bg-light-primary');
                        dragRow = null;
                        dragRowGroup = [];
                        updateMenuOrders();
                    }
                });
            }

            function updateMenuOrders() {
                var orderData = [];
                var parentCounters = {};

                $('#kt_table_menus tbody tr.drag-row').each(function() {
                    var parentKey = ($(this).data('category') || '') + '_' + ($(this).data('parent-id') || 0);
                    if (!parentCounters[parentKey]) {
                        parentCounters[parentKey] = 1;
                    } else {
                        parentCounters[parentKey]++;
                    }

                    var newOrder = parentCounters[parentKey];
                    var menuId = $(this).data('id');
                    $(this).find('.order-number').text(newOrder);
                    orderData.push({
                        id: menuId,
                        orders: newOrder
                    });
                });

                if (orderData.length === 0) return;

                // Send AJAX Request
                $.ajax({
                    url: sortRouteUrl,
                    method: 'POST',
                    data: {
                        orders: orderData
                    },
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
                                SwalHelper.success(response.message, function() {});
                            }
                        }
                    },
                    error: function(xhr) {
                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.validationError(xhr);
                        }
                    }
                });
            }
        });

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

        // Open Modal Tambah Permission
        function openAddPermissionModal(menuId, menuName) {
            var actionUrl = "{{ route('appsupport.menu.permissions.add', ':id') }}".replace(':id', menuId);
            $('#kt_modal_add_permission_form').attr('action', actionUrl);
            $('#modal_permission_menu_title').html('Tambah permission untuk menu <strong>' + menuName + '</strong>.');
            $('#permission_action_input').val('');
            $('#kt_modal_add_permission').modal('show');
        }

        // Hapus Permission dari Menu
        function removePermission(menuId, permissionId, actionName, menuName) {
            SwalHelper.confirmDelete('permission "' + actionName + '" pada menu ' + menuName, function() {
                var removeUrl = "{{ route('appsupport.menu.permissions.remove', [':menuId', ':permId']) }}"
                    .replace(':menuId', menuId)
                    .replace(':permId', permissionId);

                $.ajax({
                    url: removeUrl,
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal menghapus permission.';
                        SwalHelper.error(msg);
                    }
                });
            });
        }

        // Toggle Status Aktif / Non-aktif Menu
        function toggleMenuStatus(menuId, menuName, checkboxElem) {
            var toggleUrl = "{{ route('appsupport.menu.toggle-status', ':id') }}".replace(':id', menuId);
            var isChecked = checkboxElem.checked;

            $.ajax({
                url: toggleUrl,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Update sidebar HTML secara real-time jika menu disembunyikan / ditampilkan
                        if (response.sidebar_html && $('#kt_app_sidebar_menu_wrapper').length) {
                            $('#kt_app_sidebar_menu_wrapper').replaceWith(response.sidebar_html);
                            reinitSidebar();
                        }

                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.success(response.message, function() {});
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
                    var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Gagal mengubah status menu.';
                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.error(msg);
                    }
                }
            });
        }
    </script>
@endsection
