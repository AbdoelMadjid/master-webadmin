<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <form method="GET" action="{{ route('pageconfig.menuwebsite.main-navigation') }}" class="d-flex align-items-center position-relative my-1">
                <input type="hidden" name="tab" value="menu-list">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span><span class="path2"></span>
                </i>
                <input type="text" name="q" value="{{ $searchQuery }}" class="form-control form-control-solid w-250px ps-12" placeholder="{{ app()->getLocale() == 'en' ? 'Search navigation...' : 'Cari navigasi...' }}" />
            </form>
        </div>

        <div class="card-toolbar d-flex gap-3">
            <form method="GET" action="{{ route('pageconfig.menuwebsite.main-navigation') }}" class="d-flex align-items-center gap-2">
                <input type="hidden" name="tab" value="menu-list">
                <select name="parent_id" class="form-select form-select-solid w-200px" onchange="this.form.submit()">
                    <option value="">{{ app()->getLocale() == 'en' ? 'All Hierarchy Levels' : 'Semua Tingkat Hirarki' }}</option>
                    <option value="root" {{ $selectedParentId === 'root' ? 'selected' : '' }}>{{ app()->getLocale() == 'en' ? 'Top Parent Menu Only' : 'Hanya Menu Induk Utama' }}</option>
                    @foreach($parentNavigations as $pNav)
                        <option value="{{ $pNav->id }}" {{ (string)$selectedParentId === (string)$pNav->id ? 'selected' : '' }}>
                            ↪ {{ $pNav->title }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-4">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-50px text-center">#</th>
                        <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Navigation Title' : 'Judul Navigasi' }}</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'URL / Route Name' : 'URL / Route Target' }}</th>
                        <th class="min-w-125px">{{ app()->getLocale() == 'en' ? 'Type & Parent' : 'Tipe & Induk' }}</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Mega Column' : 'Kolom Mega' }}</th>
                        <th class="min-w-80px text-center">{{ app()->getLocale() == 'en' ? 'Order' : 'Urutan' }}</th>
                        <th class="min-w-90px text-center">{{ app()->getLocale() == 'en' ? 'Status' : 'Status' }}</th>
                        <th class="min-w-125px text-end">{{ app()->getLocale() == 'en' ? 'Actions' : 'Aksi' }}</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-700">
                    @forelse($navigations as $index => $nav)
                        <tr class="{{ $nav->parent_id ? 'bg-light-body' : '' }}">
                            <td class="text-center text-gray-500">{{ $index + 1 }}</td>
                            <td>
                                <div class="d-flex align-items-center {{ $nav->parent_id ? 'ms-8' : '' }}">
                                    @if($nav->parent_id)
                                        <span class="text-primary fw-bolder fs-1 me-2">↳</span>
                                    @endif
                                    @if($nav->icon)
                                        <div class="symbol symbol-35px me-3">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="{{ $nav->icon }} fs-3 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </span>
                                        </div>
                                    @endif
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-800 text-hover-primary fs-6 fw-bold">
                                            {{ $nav->title }}
                                        </span>
                                        @if($nav->title_en)
                                            <span class="text-muted fs-7">EN: {{ $nav->title_en }}</span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <code class="text-primary bg-light-primary px-2 py-1 rounded fs-7">{{ $nav->url }}</code>
                                @if($nav->is_external)
                                    <span class="badge badge-light-warning ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'External Link' : 'Tautan Eksternal' }}">
                                        <i class="ki-duotone ki-exit-right-corner text-warning fs-8"></i> External
                                    </span>
                                @endif
                            </td>
                            <td>
                                @if($nav->type === 'mega_menu')
                                    <span class="badge badge-light-info fw-bold me-1">Mega Menu</span>
                                @elseif($nav->type === 'dropdown')
                                    <span class="badge badge-light-primary fw-bold me-1">Dropdown</span>
                                @else
                                    <span class="badge badge-light-secondary text-gray-700 fw-bold me-1">Link</span>
                                @endif

                                @if($nav->parent)
                                    <div class="text-muted fs-8 mt-1">Induk: <span class="fw-bold text-gray-700">{{ $nav->parent->title }}</span></div>
                                @else
                                    <div class="text-success fs-8 mt-1 fw-bold">Induk Utama (Root)</div>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($nav->parent_id)
                                    <span class="badge badge-light-dark px-3 py-2 fw-semibold">Kolom {{ $nav->mega_menu_column }}</span>
                                @else
                                    <span class="text-muted fs-8">-</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-primary fs-7 fw-bold px-3 py-2">{{ $nav->order }}</span>
                            </td>
                            <td class="text-center">
                                <div class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                    <input class="form-check-input h-20px w-30px js-toggle-status" type="checkbox" data-id="{{ $nav->id }}" {{ $nav->is_active ? 'checked' : '' }} />
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-1">
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit Item' : 'Edit Navigasi' }}">
                                        <button type="button" class="btn btn-icon btn-light-primary btn-sm btn-edit-navigation" data-bs-toggle="modal" data-bs-target="#kt_modal_main_navigation" data-nav="{{ json_encode($nav) }}">
                                            <i class="ki-duotone ki-pencil fs-4"><span class="path1"></span><span class="path2"></span></i>
                                        </button>
                                    </span>
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Delete Item' : 'Hapus Navigasi' }}">
                                        <button type="button" class="btn btn-icon btn-light-danger btn-sm js-delete-nav" data-id="{{ $nav->id }}" data-name="{{ $nav->title }}">
                                            <i class="ki-duotone ki-trash fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-10 text-muted">
                                <i class="ki-duotone ki-folder-search fs-3x mb-3"><span class="path1"></span><span class="path2"></span></i>
                                <div class="fs-6 fw-semibold">{{ app()->getLocale() == 'en' ? 'No web navigation items found.' : 'Tidak ada data navigasi website ditemukan.' }}</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
