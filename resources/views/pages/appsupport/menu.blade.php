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
        $allMenus = $allMenus ?? \App\Models\AppSupport\Menu::getOrderedTree();
        $mainMenus = $mainMenus ?? $allMenus->whereNull('main_menu_id')->values();
        $categories = $allMenus->pluck('category')->filter()->unique()->values();
        $totalMenus = $allMenus->count();
        $activeMenus = $allMenus->where('active', 1)->count();
        $mainMenusCount = $mainMenus->count();
        $subMenusCount = $allMenus->whereNotNull('main_menu_id')->count();
    @endphp

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Page Header & Guide Action-->
            <div
                class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-abstract-14 text-primary fs-2x"><span class="path1"></span><span
                                class="path2"></span></i>
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
                <!--Right-aligned Action Buttons Container (ms-auto ensures right alignment even when wrapped on mobile)-->
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <!--1. Single Menu Add Button-->
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Add New Single Menu' : 'Tambah Menu Tunggal' }}">
                        <button type="button"
                            class="btn btn-primary shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4"
                            onclick="openAddMenuModal()">
                            <i class="ki-duotone ki-plus fs-2 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span
                                class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Add Menu' : 'Tambah Menu' }}</span>
                        </button>
                    </span>

                    <!--2. Batch Menu Add Button-->
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Create Main Menu with multiple Sub-Menus & Sub-Sub-Menus at once' : 'Tambah Struktur Menu Induk & Sub Menu Sekaligus (Batch)' }}">
                        <button type="button"
                            class="btn btn-success shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4"
                            onclick="openAddMenuBatchModal()">
                            <i class="ki-duotone ki-element-plus fs-2 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span></i>
                            <span
                                class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Batch Menu' : 'Tambah Partai Menu' }}</span>
                        </button>
                    </span>

                    <!--3. Keenicon Style Switcher Dropdown-->
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Switch Menu Icon Style (Duotone / Solid / Outline)' : 'Ganti Gaya Ikon Menu (Duotone / Solid / Outline)' }}">
                        <div class="m-0 d-inline-block">
                            <button type="button"
                                class="btn btn-dark shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4"
                                data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-colors-square fs-2 p-0 m-0"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                <span
                                    class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Icon Style' : 'Gaya Ikon' }}</span>
                            </button>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-225px py-3 shadow-lg border border-gray-200"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 d-flex align-items-center gap-2 cursor-pointer"
                                        onclick="switchMenuIconStyle('duotone')">
                                        <i class="ki-duotone ki-element-11 fs-3 text-primary"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i>
                                        <div class="d-flex flex-column">
                                            <span
                                                class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Duotone Style' : 'Gaya Duotone' }}</span>
                                            <span class="text-muted fs-8">ki-duotone</span>
                                        </div>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 d-flex align-items-center gap-2 cursor-pointer"
                                        onclick="switchMenuIconStyle('solid')">
                                        <i class="ki-solid ki-element-11 fs-3 text-warning"></i>
                                        <div class="d-flex flex-column">
                                            <span
                                                class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Solid Style' : 'Gaya Solid' }}</span>
                                            <span class="text-muted fs-8">ki-solid</span>
                                        </div>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a class="menu-link px-3 d-flex align-items-center gap-2 cursor-pointer"
                                        onclick="switchMenuIconStyle('outline')">
                                        <i class="ki-outline ki-element-11 fs-3 text-info"></i>
                                        <div class="d-flex flex-column">
                                            <span
                                                class="fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Outline Style' : 'Gaya Outline' }}</span>
                                            <span class="text-muted fs-8">ki-outline</span>
                                        </div>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                    </span>

                    <!--4. Operational Guide Button-->
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button"
                            class="btn btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_menu_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
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
                            <input type="text" id="kt_menu_search"
                                class="form-control form-control-solid w-250px ps-12"
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
                    <div
                        class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-4 mb-5">
                        <i class="ki-duotone ki-information-5 fs-2hx text-primary me-4 mb-5 mb-sm-0"><span
                                class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <h5 class="mb-1 text-primary">Fitur Drag & Drop Urutan Menu</h5>
                            <span class="fs-7 text-gray-700">Tahan ikon <strong><i
                                        class="ki-duotone ki-abstract-14 fs-6 text-primary"><span
                                            class="path1"></span><span class="path2"></span></i></strong> lalu seret
                                baris tabel ke atas atau ke bawah untuk mengubah urutan menu. Perubahan akan otomatis
                                disimpan dan di-update di sidebar secara <strong>real-time</strong>.</span>
                        </div>
                    </div>

                    <!--begin::Table responsive-->
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4 w-100" id="kt_table_menus">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-80px"># Urutan</th>
                                    <th class="min-w-200px">Nama Menu & Hierarki</th>
                                    <th class="min-w-200px">Kategori & Route</th>
                                    <th class="min-w-175px">Permissions</th>
                                    <th class="min-w-100px text-center">Status</th>
                                    <th class="min-w-100px text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse ($allMenus as $menu)
                                    @php
                                        $menuDepth = $menu->depth ?? 0;
                                    @endphp
                                    <tr draggable="true" data-id="{{ $menu->id }}"
                                        data-parent-id="{{ $menu->main_menu_id ?? 0 }}"
                                        data-category="{{ $menu->category ?? '' }}" data-level="{{ $menuDepth }}"
                                        class="drag-row {{ $menuDepth == 1 ? 'bg-light-secondary' : ($menuDepth == 2 ? 'bg-light-warning' : '') }}"
                                        style="{{ $menuDepth > 0 ? 'background-color: ' . ($menuDepth == 2 ? 'rgba(255,199,0,0.04)' : 'rgba(0,0,0,0.018)') . ' !important;' : '' }}">
                                        <td>
                                            <div class="d-flex align-items-center"
                                                style="padding-left: {{ $menuDepth * 20 }}px;">
                                                <i class="ki-duotone ki-abstract-14 fs-3 text-gray-400 me-2 drag-handle"
                                                    style="cursor: move;" title="Tahan dan geser untuk mengubah urutan">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span
                                                    class="badge badge-light-secondary fs-7 fw-bold order-number">{{ $menu->orders }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"
                                                style="padding-left: {{ $menuDepth * 24 }}px;">
                                                {{-- Level indicators --}}
                                                @if ($menuDepth == 1)
                                                    <span class="text-gray-300 me-2 fs-7"
                                                        style="white-space:nowrap;">└─</span>
                                                @elseif ($menuDepth == 2)
                                                    <span class="text-gray-300 me-2 fs-7"
                                                        style="white-space:nowrap;">└──</span>
                                                @endif

                                                @php
                                                    $hasIcon =
                                                        !empty($menu->icon) &&
                                                        trim($menu->icon) !== '' &&
                                                        trim($menu->icon) !== 'none' &&
                                                        trim($menu->icon) !== '-';
                                                    $pathsCount = (int) ($menu->paths ?? 0);
                                                @endphp

                                                @if ($hasIcon)
                                                    <span class="symbol symbol-35px me-3 flex-shrink-0">
                                                        <span
                                                            class="symbol-label {{ $menuDepth == 0 ? 'bg-light-primary' : ($menuDepth == 1 ? 'bg-light-info' : 'bg-light-warning') }}">
                                                            <i
                                                                class="{{ $menu->icon }} {{ $menuDepth == 0 ? 'text-primary' : ($menuDepth == 1 ? 'text-info' : 'text-warning') }} fs-3">
                                                                @for ($i = 1; $i <= $pathsCount; $i++)
                                                                    <span class="path{{ $i }}"></span>
                                                                @endfor
                                                            </i>
                                                        </span>
                                                    </span>
                                                @endif
                                                <div class="d-flex flex-column">
                                                    <span
                                                        class="{{ $menuDepth == 0 ? 'text-gray-900 fw-bolder' : ($menuDepth == 1 ? 'text-gray-800 fw-bold' : 'text-gray-700 fw-semibold') }} text-hover-primary mb-1 fs-{{ $menuDepth == 0 ? '6' : ($menuDepth == 1 ? '6' : '7') }}">
                                                        {{ $menu->name }}
                                                    </span>
                                                    <div class="d-flex flex-column gap-1">
                                                        @if (isset($menu->meta['title_key']) && !empty($menu->meta['title_key']))
                                                            <span class="text-muted fs-8">Key:
                                                                {{ $menu->meta['title_key'] }}</span>
                                                        @endif
                                                        <div>
                                                            @if ($menuDepth == 0)
                                                                <span class="badge badge-light-dark fs-8 fw-semibold py-1 px-2">
                                                                    Menu Utama
                                                                </span>
                                                            @elseif ($menuDepth == 1)
                                                                <span class="badge badge-light-primary fs-8 fw-semibold py-1 px-2">
                                                                    Sub: {{ $menu->parentMenu?->name ?? '-' }}
                                                                </span>
                                                            @elseif ($menuDepth == 2)
                                                                <span class="badge badge-light-warning fs-8 fw-semibold py-1 px-2">
                                                                    Sub-Sub: {{ $menu->parentMenu?->name ?? '-' }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column gap-1 align-items-start">
                                                @if ($menu->category)
                                                    <span class="badge badge-light-info fw-bold fs-8 mt-1">{{ $menu->category }}</span>
                                                @else
                                                    <span class="text-muted fs-8">-</span>
                                                @endif
                                                <code
                                                    class="text-dark bg-light px-2 py-1 rounded fs-7 text-break" style="word-break: break-all;">{{ $menu->url }}</code>

                                            </div>
                                        </td>
                                        <td>
                                            @php
                                                $menuPerms = [];
                                                foreach ($menu->permissions as $p) {
                                                    $act = explode(' ', $p->name)[0] ?? $p->name;
                                                    $menuPerms[$act] = $p;
                                                }
                                                $createPerm = $menuPerms['create'] ?? null;
                                                $readPerm = $menuPerms['read'] ?? null;
                                                $updatePerm = $menuPerms['update'] ?? null;
                                                $deletePerm = $menuPerms['delete'] ?? null;
                                                $otherPerms = array_diff_key(
                                                    $menuPerms,
                                                    array_flip(['create', 'read', 'update', 'delete']),
                                                );
                                            @endphp
                                            <div class="d-flex align-items-start gap-2">
                                                <!--Col 1: Create & Read-->
                                                <div class="d-flex flex-column justify-content-start gap-1"
                                                    style="min-width: 62px;">
                                                    @if ($createPerm)
                                                        <span
                                                            class="badge badge-light-success fs-8 py-1 px-2 d-inline-flex align-items-center justify-content-between">
                                                            create
                                                            <i class="ki-duotone ki-cross fs-9 cursor-pointer text-hover-danger ms-1"
                                                                onclick="removePermission({{ $menu->id }}, {{ $createPerm->id }}, 'create', '{{ addslashes($menu->name) }}')"
                                                                title="Hapus permission create">
                                                                <span class="path1"></span><span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    @endif

                                                    @if ($readPerm)
                                                        <span
                                                            class="badge badge-light-primary fs-8 py-1 px-2 d-inline-flex align-items-center justify-content-between">
                                                            read
                                                            <i class="ki-duotone ki-cross fs-9 cursor-pointer text-hover-danger ms-1"
                                                                onclick="removePermission({{ $menu->id }}, {{ $readPerm->id }}, 'read', '{{ addslashes($menu->name) }}')"
                                                                title="Hapus permission read">
                                                                <span class="path1"></span><span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    @endif
                                                </div>

                                                <!--Col 2: Update & Delete-->
                                                <div class="d-flex flex-column justify-content-start gap-1"
                                                    style="min-width: 64px;">
                                                    @if ($updatePerm)
                                                        <span
                                                            class="badge badge-light-warning fs-8 py-1 px-2 d-inline-flex align-items-center justify-content-between">
                                                            update
                                                            <i class="ki-duotone ki-cross fs-9 cursor-pointer text-hover-danger ms-1"
                                                                onclick="removePermission({{ $menu->id }}, {{ $updatePerm->id }}, 'update', '{{ addslashes($menu->name) }}')"
                                                                title="Hapus permission update">
                                                                <span class="path1"></span><span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    @endif

                                                    @if ($deletePerm)
                                                        <span
                                                            class="badge badge-light-danger fs-8 py-1 px-2 d-inline-flex align-items-center justify-content-between">
                                                            delete
                                                            <i class="ki-duotone ki-cross fs-9 cursor-pointer text-hover-danger ms-1"
                                                                onclick="removePermission({{ $menu->id }}, {{ $deletePerm->id }}, 'delete', '{{ addslashes($menu->name) }}')"
                                                                title="Hapus permission delete">
                                                                <span class="path1"></span><span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    @endif

                                                    @foreach ($otherPerms as $act => $oPerm)
                                                        <span
                                                            class="badge badge-light-info fs-8 py-1 px-2 d-inline-flex align-items-center justify-content-between">
                                                            {{ $act }}
                                                            <i class="ki-duotone ki-cross fs-9 cursor-pointer text-hover-danger ms-1"
                                                                onclick="removePermission({{ $menu->id }}, {{ $oPerm->id }}, '{{ $act }}', '{{ addslashes($menu->name) }}')"
                                                                title="Hapus permission {{ $act }}">
                                                                <span class="path1"></span><span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    @endforeach
                                                </div>

                                                <!--Col 3: Add Permission Button-->
                                                <div class="d-flex align-items-start ms-1">
                                                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Tambah Permission untuk {{ $menu->name }}">
                                                        <button type="button"
                                                            class="btn btn-icon btn-xs btn-light-primary"
                                                            onclick="openAddPermissionModal({{ $menu->id }}, '{{ addslashes($menu->name) }}')">
                                                            <i class="ki-duotone ki-plus fs-7"><span class="path1"></span><span class="path2"></span></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div
                                                class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input h-20px w-30px cursor-pointer"
                                                    type="checkbox" id="status_switch_{{ $menu->id }}"
                                                    {{ $menu->active ? 'checked' : '' }}
                                                    onchange="toggleMenuStatus({{ $menu->id }}, '{{ addslashes($menu->name) }}', this)"
                                                    data-bs-toggle="tooltip"
                                                    title="Klik untuk mengaktifkan / menonaktifkan menu" />
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Menu">
                                                <button type="button"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    onclick="openEditMenuModal({{ $menu->id }})">
                                                    <i class="ki-duotone ki-pencil fs-4">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </button>
                                            </span>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Menu">
                                                <button type="button"
                                                    class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                                    onclick="deleteMenu({{ $menu->id }}, '{{ addslashes($menu->name) }}')">
                                                    <i class="ki-duotone ki-trash fs-4">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-8">
                                            Belum ada data menu di tabel <code>menus</code>. Jalankan <code>php artisan
                                                db:seed --class=MenuSeeder</code>.
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
            @include('pages.appsupport.partials.menu-form')
            @include('pages.appsupport.partials.menu-batch-form')
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
                        url: "{{ route('appsupport.menu.switch-icon-style') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            style: style
                        },
                        success: function(response) {
                            if (response.success) {
                                if (response.sidebar_html) {
                                    $('#kt_app_sidebar_menu_wrapper').html(response.sidebar_html);
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

        $(document).ready(function() {
            if (typeof KTMenu !== 'undefined') {
                KTMenu.createInstances();
            }
            var sortRouteUrl = "{{ route('appsupport.menu.sort') }}";

            var table = $('#kt_table_menus').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan _MENU_",
                    "zeroRecords": "Tidak ada menu yang sesuai",
                    "info": "_START_-_END_ / _TOTAL_",
                    "infoEmpty": "0-0 / 0",
                    "infoFiltered": "(_MAX_)"
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
                table.column(2).search(val ? val : '', false, false).draw();
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
                            var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr
                                .responseJSON.message : 'Terjadi kesalahan sistem.';
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
                    var parentKey = ($(this).data('category') || '') + '_' + ($(this).data('parent-id') ||
                        0);
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
            SwalHelper.confirmDelete('Permission ' + actionName + ' pada menu ' + menuName, function() {
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON
                            .message : 'Gagal menghapus permission.';
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
                    var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message :
                        'Gagal mengubah status menu.';
                    if (typeof SwalHelper !== 'undefined') {
                        SwalHelper.error(msg);
                    }
                }
            });
        }

        // Buka Modal Tambah Menu Baru
        function openAddMenuModal() {
            $('#kt_form_menu')[0].reset();
            $('#menu_id').val('');
            $('#menu_form_method').val('POST');
            $('#kt_form_menu').attr('action', "{{ route('appsupport.menu.store') }}");
            $('#modal_menu_title').text("{{ app()->getLocale() == 'en' ? 'Add New Menu' : 'Tambah Menu Baru' }}");
            $('#menu_active').prop('checked', true);
            $('#menu_main_menu_id option').prop('disabled', false);
            $('#menu_title_key').val('');
            $('#menu_title_en').val('');
            $('#menu_url, #menu_title_key').data('manual', false);

            // Reset permission checkboxes
            $('#perm_read').prop('checked', true);
            $('#perm_create, #perm_update, #perm_delete').prop('checked', false);

            // Reset role checkboxes
            $('.menu-role-checkbox').prop('checked', false);
            $('#role_admin').prop('checked', true);

            $('#kt_modal_menu').modal('show');
        }

        // Buka Modal Edit Menu
        function openEditMenuModal(menuId) {
            var showUrl = "{{ route('appsupport.menu.show', ':id') }}".replace(':id', menuId);
            var updateUrl = "{{ route('appsupport.menu.update', ':id') }}".replace(':id', menuId);

            $.ajax({
                url: showUrl,
                type: 'GET',
                success: function(response) {
                    if (response.success && response.data) {
                        var menu = response.data;
                        $('#menu_id').val(menu.id);
                        $('#menu_form_method').val('PUT');
                        $('#kt_form_menu').attr('action', updateUrl);
                        $('#modal_menu_title').text(
                            "{{ app()->getLocale() == 'en' ? 'Edit Menu' : 'Edit Menu' }} - " + menu.name);

                        $('#menu_name').val(menu.name);
                        $('#menu_title_en').val((menu.meta && menu.meta.title_en) ? menu.meta.title_en : '');
                        $('#menu_url').val(menu.url);
                        $('#menu_category').val(menu.category || '');
                        $('#menu_title_key').val((menu.meta && menu.meta.title_key) ? menu.meta.title_key : '');

                        // Enable all parent options then disable current menu option to prevent self-referencing cycle
                        $('#menu_main_menu_id option').prop('disabled', false);
                        $('#menu_main_menu_id option[value="' + menu.id + '"]').prop('disabled', true);
                        $('#menu_main_menu_id').val(menu.main_menu_id || '');

                        $('#menu_icon').val(menu.icon || '');
                        $('#menu_paths').val(menu.paths || 0);
                        $('#menu_orders').val(menu.orders || 0);
                        $('#menu_active').prop('checked', menu.active == 1);

                        // Populate permissions & roles
                        $('#perm_read, #perm_create, #perm_update, #perm_delete').prop('checked', false);
                        $('.menu-role-checkbox').prop('checked', false);

                        if (menu.permissions && menu.permissions.length > 0) {
                            menu.permissions.forEach(function(perm) {
                                var parts = perm.name.split(' ');
                                var action = parts[0];
                                if (['read', 'create', 'update', 'delete'].indexOf(action) !== -1) {
                                    $('#perm_' + action).prop('checked', true);
                                }
                                if (perm.roles && perm.roles.length > 0) {
                                    perm.roles.forEach(function(role) {
                                        $('.menu-role-checkbox[value="' + role.name + '"]')
                                            .prop('checked', true);
                                    });
                                }
                            });
                        }

                        $('#kt_modal_menu').modal('show');
                    } else {
                        SwalHelper.error('Gagal mengambil data menu.');
                    }
                },
                error: function(xhr) {
                    SwalHelper.error('Gagal mengambil data menu.');
                }
            });
        }

        // Submit Form Add / Edit Menu
        $('#kt_form_menu').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var submitBtn = $('#btn_submit_menu');

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
                    $('#kt_modal_menu').modal('hide');
                    if (response.success) {
                        if (response.sidebar_html && $('#kt_app_sidebar_menu_wrapper').length) {
                            $('#kt_app_sidebar_menu_wrapper').replaceWith(response.sidebar_html);
                            reinitSidebar();
                        }
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON
                            .message : 'Terjadi kesalahan sistem.';
                        SwalHelper.error(msg);
                    }
                }
            });
        });

        // Hapus Menu dari Database
        function deleteMenu(menuId, menuName) {
            SwalHelper.confirmDelete('Menu ' + menuName, function() {
                var deleteUrl = "{{ route('appsupport.menu.destroy', ':id') }}".replace(':id', menuId);

                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.sidebar_html && $('#kt_app_sidebar_menu_wrapper').length) {
                                $('#kt_app_sidebar_menu_wrapper').replaceWith(response.sidebar_html);
                                reinitSidebar();
                            }
                            SwalHelper.success(response.message, function() {
                                location.reload();
                            });
                        } else {
                            SwalHelper.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON
                            .message : 'Gagal menghapus menu.';
                        SwalHelper.error(msg);
                    }
                });
            });
        }

        var subMenuCounter = 0;

        // Buka Modal Tambah Partai Menu
        function openAddMenuBatchModal() {
            $('#kt_form_menu_batch')[0].reset();
            $('#batch_sub_menu_container').empty();
            $('#batch_main_url, #batch_main_key').data('manual', false);
            $('#batch_mode_new').prop('checked', true).trigger('change');
            subMenuCounter = 0;

            // Pre-add 2 default sub-menu cards for convenience
            addSubMenuCard();
            addSubMenuCard();

            $('#kt_modal_menu_batch').modal('show');
        }

        // Helpers untuk slugging & auto-fill real-time
        // Slug tanpa tanda strip / dash untuk parent/category container: "Data Keahlian" -> "datakeahlian"
        function slugifyParentSegment(text) {
            if (!text) return '';
            return text.toString().toLowerCase().trim()
                .replace(/[^a-z0-9]/g, '');
        }

        // Slug dengan tanda strip / dash untuk leaf target page: "Tahun Ajaran" -> "tahun-ajaran"
        function slugifyLeafSegment(text) {
            if (!text) return '';
            return text.toString().toLowerCase().trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/[\s_]+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-+|-+$/g, '');
        }

        function slugifyTitleKey(text, isParent) {
            if (!text) return '';
            var slug = isParent ? slugifyParentSegment(text) : slugifyLeafSegment(text);
            return slug ? ('wd_' + slug) : '';
        }

        // Auto-recalculate Sub-Menu URLs & Keys when Main Menu URL changes or children are added/removed
        function syncBatchSubMenuUrls() {
            var mainUrl = $('#batch_main_url').val() || '';
            var baseMainUrl = (mainUrl && mainUrl !== '#') ? mainUrl.replace(/\/+$/, '') : '';

            $('#batch_sub_menu_container .sub-menu-card').each(function() {
                var subIdx = $(this).attr('id').replace('sub_menu_card_', '');
                var subNameInput = $('#sub_name_' + subIdx);
                var subUrlInput = $('#sub_url_' + subIdx);
                var subKeyInput = $('#sub_key_' + subIdx);
                var subName = subNameInput.val() || '';

                var hasChildren = $('#sub_sub_container_' + subIdx).children('.sub-sub-menu-row').length > 0;

                if (subName) {
                    var subSlug = hasChildren ? slugifyParentSegment(subName) : slugifyLeafSegment(subName);
                    if (!subUrlInput.data('manual')) {
                        var newSubUrl = baseMainUrl ? (baseMainUrl + '/' + subSlug) : subSlug;
                        subUrlInput.val(newSubUrl);
                    }
                    if (!subKeyInput.data('manual')) {
                        subKeyInput.val(slugifyTitleKey(subName, hasChildren));
                    }
                }

                syncBatchSubSubMenuUrls(subIdx);
            });
        }

        // Auto-recalculate Sub-Sub-Menu URLs when Sub-Menu URL changes
        function syncBatchSubSubMenuUrls(subIdx) {
            var parentSubUrl = $('#sub_url_' + subIdx).val() || '';
            var baseSubUrl = (parentSubUrl && parentSubUrl !== '#') ? parentSubUrl.replace(/\/+$/, '') : '';

            $('#sub_sub_container_' + subIdx + ' .sub-sub-menu-row').each(function() {
                var subSubNameInput = $(this).find('.sub-sub-name-input');
                var subSubUrlInput = $(this).find('.sub-sub-url-input');
                var subSubKeyInput = $(this).find('.sub-sub-key-input');
                var subSubName = subSubNameInput.val() || '';

                if (subSubName) {
                    var subSubSlug = slugifyLeafSegment(subSubName);
                    if (!subSubUrlInput.data('manual')) {
                        var newSubSubUrl = baseSubUrl ? (baseSubUrl + '/' + subSubSlug) : subSubSlug;
                        subSubUrlInput.val(newSubSubUrl);
                    }
                    if (!subSubKeyInput.data('manual')) {
                        subSubKeyInput.val(slugifyTitleKey(subSubName, false));
                    }
                }
            });
        }

        // Debounced Auto-Translator (ID -> EN)
        var autoTranslateTimer = null;

        function triggerAutoTranslate(text, $targetEnInput) {
            if (!text || $targetEnInput.data('manual')) return;

            clearTimeout(autoTranslateTimer);
            autoTranslateTimer = setTimeout(function() {
                $.ajax({
                    url: "{{ route('appsupport.menu.auto-translate') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        text: text
                    },
                    success: function(res) {
                        if (res.success && res.translated && !$targetEnInput.data('manual')) {
                            $targetEnInput.val(res.translated);
                        }
                    }
                });
            }, 400);
        }

        $(document).on('input', '#menu_title_en, #batch_main_title_en, input[name*="[title_en]"]', function() {
            $(this).data('manual', $(this).val().trim() !== '');
        });

        // Toggle Mode Batch Creator (Buat Baru vs Pilih Menu Utama yang Ada)
        $(document).on('change', 'input[name="batch_mode"]', function() {
            var mode = $(this).val();
            if (mode === 'existing') {
                $('#batch_new_main_wrapper').addClass('d-none');
                $('#batch_existing_main_wrapper').removeClass('d-none');
                $('#batch_main_name, #batch_main_url').prop('required', false);
                $('#batch_existing_main_menu_id').prop('required', true);

                $('#batch_existing_main_menu_id').trigger('change');
            } else {
                $('#batch_existing_main_wrapper').addClass('d-none');
                $('#batch_new_main_wrapper').removeClass('d-none');
                $('#batch_main_name, #batch_main_url').prop('required', true);
                $('#batch_existing_main_menu_id').prop('required', false);

                $('#batch_main_name').trigger('input');
            }
        });

        $(document).on('change', '#batch_existing_main_menu_id', function() {
            var $opt = $(this).find('option:selected');
            var url = $opt.data('url') || '#';

            $('#batch_main_url').val(url).data('manual', true);
            syncBatchSubMenuUrls();
        });

        // Listener Real-Time Auto-Slug Batch Creator
        $(document).on('input', '#batch_main_name', function() {
            var name = $(this).val();
            var mainUrl = slugifyParentSegment(name);
            var mainKey = mainUrl ? ('wd_' + mainUrl) : '';

            var urlInput = $('#batch_main_url');
            var keyInput = $('#batch_main_key');

            if (!urlInput.data('manual')) {
                urlInput.val(mainUrl || '#');
            }
            if (!keyInput.data('manual')) {
                keyInput.val(mainKey);
            }

            triggerAutoTranslate(name, $('#batch_main_title_en'));
            syncBatchSubMenuUrls();
        });

        $(document).on('input', '#batch_main_url', function() {
            $(this).data('manual', $(this).val().trim() !== '');
            syncBatchSubMenuUrls();
        });

        $(document).on('input', '#batch_main_key', function() {
            $(this).data('manual', $(this).val().trim() !== '');
        });

        $(document).on('input', '.sub-name-input', function() {
            var subIdx = $(this).data('sub-idx');
            var subName = $(this).val();
            var mainUrl = $('#batch_main_url').val() || '';
            var baseMainUrl = (mainUrl && mainUrl !== '#') ? mainUrl.replace(/\/+$/, '') : '';

            var subUrlInput = $('#sub_url_' + subIdx);
            var subKeyInput = $('#sub_key_' + subIdx);
            var subEnInput = $(this).closest('.sub-menu-card').find('input[name$="[title_en]"]');

            var hasChildren = $('#sub_sub_container_' + subIdx).children('.sub-sub-menu-row').length > 0;

            if (!subUrlInput.data('manual')) {
                var subSlug = hasChildren ? slugifyParentSegment(subName) : slugifyLeafSegment(subName);
                var subUrl = baseMainUrl ? (baseMainUrl + '/' + subSlug) : subSlug;
                subUrlInput.val(subUrl);
            }

            if (!subKeyInput.data('manual')) {
                subKeyInput.val(slugifyTitleKey(subName, hasChildren));
            }

            triggerAutoTranslate(subName, subEnInput);
            syncBatchSubSubMenuUrls(subIdx);
        });

        $(document).on('input', '.sub-url-input', function() {
            var subIdx = $(this).data('sub-idx');
            $(this).data('manual', $(this).val().trim() !== '');
            syncBatchSubSubMenuUrls(subIdx);
        });

        $(document).on('input', '.sub-key-input', function() {
            $(this).data('manual', $(this).val().trim() !== '');
        });

        $(document).on('input', '.sub-sub-name-input', function() {
            var subIdx = $(this).data('sub-idx');
            var subSubIdx = $(this).data('sub-sub-idx');
            var subSubName = $(this).val();
            var parentSubUrl = $('#sub_url_' + subIdx).val() || '';
            var baseSubUrl = (parentSubUrl && parentSubUrl !== '#') ? parentSubUrl.replace(/\/+$/, '') : '';

            var subSubUrlInput = $('#sub_sub_url_' + subIdx + '_' + subSubIdx);
            var subSubKeyInput = $('#sub_sub_key_' + subIdx + '_' + subSubIdx);
            var subSubEnInput = $(this).closest('.sub-sub-menu-row').find('input[name$="[title_en]"]');

            if (!subSubUrlInput.data('manual')) {
                var subSubSlug = slugifyLeafSegment(subSubName);
                var subSubUrl = baseSubUrl ? (baseSubUrl + '/' + subSubSlug) : subSubSlug;
                subSubUrlInput.val(subSubUrl);
            }

            if (!subSubKeyInput.data('manual')) {
                subSubKeyInput.val(slugifyTitleKey(subSubName, false));
            }

            triggerAutoTranslate(subSubName, subSubEnInput);
        });

        $(document).on('input', '.sub-sub-url-input', function() {
            $(this).data('manual', $(this).val().trim() !== '');
        });

        $(document).on('input', '.sub-sub-key-input', function() {
            $(this).data('manual', $(this).val().trim() !== '');
        });

        // Auto-slug Single Menu Form Modal
        $(document).on('input', '#menu_name', function() {
            var name = $(this).val();
            var parentId = $('#menu_main_menu_id').val();
            var parentUrl = '';

            if (parentId) {
                var parentOption = $('#menu_main_menu_id option:selected');
                parentUrl = parentOption.data('url') || '';
            }

            var baseParentUrl = (parentUrl && parentUrl !== '#') ? parentUrl.replace(/\/+$/, '') : '';
            var urlInput = $('#menu_url');
            var keyInput = $('#menu_title_key');

            if (!urlInput.data('manual')) {
                var slug = parentId ? slugifyLeafSegment(name) : slugifyParentSegment(name);
                var url = baseParentUrl ? (baseParentUrl + '/' + slug) : (slug || '#');
                urlInput.val(url);
            }

            if (!keyInput.data('manual')) {
                keyInput.val(slugifyTitleKey(name, !parentId));
            }

            triggerAutoTranslate(name, $('#menu_title_en'));
        });

        $(document).on('change', '#menu_main_menu_id', function() {
            if ($('#menu_name').val()) {
                $('#menu_name').trigger('input');
            }
        });

        // Tambah Card Sub-Menu (Level 1)
        function addSubMenuCard() {
            var subIdx = subMenuCounter++;
            var html = `
            <div class="card schema-card bg-light-secondary border border-gray-300 p-5 rounded sub-menu-card" id="sub_menu_card_${subIdx}">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge badge-primary fw-bold">Sub-Menu #${subIdx + 1}</span>
                        <span class="text-muted fs-8">(Level 1 Child)</span>
                    </div>
                    <button type="button" class="btn btn-icon btn-xs btn-light-danger" onclick="removeSubMenuCard(${subIdx})" title="Hapus Sub-Menu">
                        <i class="ki-duotone ki-trash fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                    </button>
                </div>

                <div class="row g-3 mb-2">
                    <div class="col-md-6 fv-row">
                        <label class="fs-8 fw-semibold mb-1 required">Nama Sub-Menu (ID)</label>
                        <input type="text" class="form-control form-control-solid form-control-sm sub-name-input" data-sub-idx="${subIdx}" id="sub_name_${subIdx}" placeholder="Contoh: Tahun Ajaran, Data Keahlian" name="sub_menus[${subIdx}][name]" required />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="fs-8 fw-semibold mb-1">Nama Sub-Menu (EN)</label>
                        <input type="text" class="form-control form-control-solid form-control-sm" placeholder="Contoh: School Year, Skills Data" name="sub_menus[${subIdx}][title_en]" />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-5 fv-row">
                        <label class="fs-8 fw-semibold mb-1 required">Route / URL</label>
                        <input type="text" class="form-control form-control-solid form-control-sm sub-url-input" id="sub_url_${subIdx}" data-sub-idx="${subIdx}" placeholder="Contoh: manajemensekolah/tahun-ajaran" name="sub_menus[${subIdx}][url]" value="#" required />
                    </div>
                    <div class="col-md-4 fv-row">
                        <label class="fs-8 fw-semibold mb-1">Key (title_key)</label>
                        <input type="text" class="form-control form-control-solid form-control-sm sub-key-input" id="sub_key_${subIdx}" data-sub-idx="${subIdx}" placeholder="Contoh: wd_tahun-ajaran" name="sub_menus[${subIdx}][title_key]" />
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="fs-8 fw-semibold mb-1">Class Ikon</label>
                        <input type="text" class="form-control form-control-solid form-control-sm" placeholder="Class Ikon (opsional)" name="sub_menus[${subIdx}][icon]" value="" />
                    </div>
                </div>

                <!-- Sub-Sub-Menu Container -->
                <div class="ms-4 border-start border-primary border-2 ps-3 pt-2">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="fs-8 fw-bold text-gray-700">Sub-Sub-Menu (Level 2 Children)</span>
                        <button type="button" class="btn btn-xs btn-light-warning fw-bold" onclick="addSubSubMenuCard(${subIdx})">
                            <i class="ki-duotone ki-plus fs-8"></i> {{ app()->getLocale() == 'en' ? 'Add Sub-Sub Menu' : 'Tambah Sub-Sub Menu' }}
                        </button>
                    </div>
                    <div id="sub_sub_container_${subIdx}" class="d-flex flex-column gap-2">
                        <!-- Sub-sub menu items injected here -->
                    </div>
                </div>
            </div>
        `;
            $('#batch_sub_menu_container').append(html);

            // Auto trigger calculation if Main Menu URL is available
            var mainUrl = $('#batch_main_url').val() || '';
            if (mainUrl && mainUrl !== '#') {
                $('#sub_url_' + subIdx).val(mainUrl.replace(/\/+$/, ''));
            }
        }

        // Hapus Card Sub-Menu
        function removeSubMenuCard(subIdx) {
            $('#sub_menu_card_' + subIdx).remove();
        }

        // Tambah Sub-Sub Menu Item (Level 2)
        function addSubSubMenuCard(subIdx) {
            var container = $('#sub_sub_container_' + subIdx);
            var subSubIdx = container.children('.sub-sub-menu-row').length;
            var html = `
            <div class="d-flex align-items-center gap-2 bg-white p-3 rounded border border-warning shadow-2xs sub-sub-menu-row">
                <span class="badge badge-light-warning fs-9 fw-bold flex-shrink-0">Level 2</span>
                <input type="text" class="form-control form-control-solid form-control-sm w-180px sub-sub-name-input" data-sub-idx="${subIdx}" data-sub-sub-idx="${subSubIdx}" id="sub_sub_name_${subIdx}_${subSubIdx}" placeholder="Nama Menu (ID)" name="sub_menus[${subIdx}][sub_sub_menus][${subSubIdx}][name]" required />
                <input type="text" class="form-control form-control-solid form-control-sm w-160px" placeholder="Nama Menu (EN)" name="sub_menus[${subIdx}][sub_sub_menus][${subSubIdx}][title_en]" />
                <input type="text" class="form-control form-control-solid form-control-sm flex-grow-1 min-w-260px sub-sub-url-input" data-sub-idx="${subIdx}" data-sub-sub-idx="${subSubIdx}" id="sub_sub_url_${subIdx}_${subSubIdx}" placeholder="Route / URL" name="sub_menus[${subIdx}][sub_sub_menus][${subSubIdx}][url]" required />
                <input type="text" class="form-control form-control-solid form-control-sm w-170px sub-sub-key-input" data-sub-idx="${subIdx}" data-sub-sub-idx="${subSubIdx}" id="sub_sub_key_${subIdx}_${subSubIdx}" placeholder="Key (title_key)" name="sub_menus[${subIdx}][sub_sub_menus][${subSubIdx}][title_key]" />
                <input type="text" class="form-control form-control-solid form-control-sm w-110px" placeholder="Class Ikon" name="sub_menus[${subIdx}][sub_sub_menus][${subSubIdx}][icon]" />
                <button type="button" class="btn btn-icon btn-xs btn-light-danger flex-shrink-0" onclick="$(this).closest('.sub-sub-menu-row').remove(); syncBatchSubMenuUrls();" title="Hapus Sub-Sub Menu">
                    <i class="ki-duotone ki-cross fs-7"><span class="path1"></span><span class="path2"></span></i>
                </button>
            </div>
        `;
            container.append(html);
            syncBatchSubMenuUrls();
        }

        // Submit Form Partai Menu (Batch)
        $('#kt_form_menu_batch').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var submitBtn = $('#btn_submit_menu_batch');

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
                    $('#kt_modal_menu_batch').modal('hide');
                    if (response.success) {
                        if (response.sidebar_html && $('#kt_app_sidebar_menu_wrapper').length) {
                            $('#kt_app_sidebar_menu_wrapper').replaceWith(response.sidebar_html);
                            reinitSidebar();
                        }
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
                        var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON
                            .message : 'Terjadi kesalahan sistem.';
                        SwalHelper.error(msg);
                    }
                }
            });
        });
    </script>
@endsection
