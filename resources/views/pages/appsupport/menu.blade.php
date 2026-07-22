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
        $allMenus = \App\Models\Menu::with(['subMenus', 'permissions', 'parentMenu'])
            ->orderBy('category')
            ->orderBy('orders')
            ->get();

        $categories = $allMenus->pluck('category')->filter()->unique()->values();
        $totalMenus = $allMenus->count();
        $activeMenus = $allMenus->where('active', 1)->count();
        $mainMenusCount = $allMenus->whereNull('main_menu_id')->count();
        $subMenusCount = $allMenus->whereNotNull('main_menu_id')->count();
    @endphp

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            
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
                    <!--begin::Table responsive-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4 w-100" id="kt_table_menus">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-50px">#</th>
                                    <th class="min-w-200px">Nama Menu & Hierarki</th>
                                    <th class="min-w-200px">Route / URL</th>
                                    <th class="min-w-125px">Kategori</th>
                                    <th class="min-w-175px">Permissions</th>
                                    <th class="min-w-100px text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse ($allMenus as $menu)
                                    <tr>
                                        <td>
                                            <span class="badge badge-light-secondary fs-7 fw-bold">{{ $menu->orders }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if ($menu->icon)
                                                    <span class="symbol symbol-35px me-3 flex-shrink-0">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="{{ $menu->icon }} text-primary fs-3">
                                                                @for ($i = 1; $i <= ($menu->paths ?? 0); $i++)
                                                                    <span class="path{{ $i }}"></span>
                                                                @endfor
                                                            </i>
                                                        </span>
                                                    </span>
                                                @endif
                                                <div class="d-flex flex-column">
                                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">
                                                        {{ $menu->name }}
                                                    </span>
                                                    <div class="d-flex align-items-center gap-2">
                                                        @if ($menu->parentMenu)
                                                            <span class="badge badge-light-primary fs-8 py-1 px-2">
                                                                Sub dari: {{ $menu->parentMenu->name }}
                                                            </span>
                                                        @else
                                                            <span class="badge badge-light-dark fs-8 py-1 px-2">Menu Utama</span>
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
                                            <div class="d-flex flex-wrap gap-1">
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
                                                    <span class="badge {{ $badgeColor }} fs-8 py-1 px-2">{{ $action }}</span>
                                                @empty
                                                    <span class="text-muted fs-8">-</span>
                                                @endforelse
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if ($menu->active)
                                                <span class="badge badge-light-success fw-bold">Aktif</span>
                                            @else
                                                <span class="badge badge-light-danger fw-bold">Non-aktif</span>
                                            @endif
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

        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <script>
        $(document).ready(function() {
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
                "pageLength": 25,
                "order": [[0, "asc"]],
                "autoWidth": false
            });

            $('#kt_menu_search').on('keyup', function() {
                table.search(this.value).draw();
            });

            $('#kt_category_filter').on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                table.column(3).search(val ? '^' + val + '$' : '', true, false).draw();
            });
        });
    </script>
@endsection
