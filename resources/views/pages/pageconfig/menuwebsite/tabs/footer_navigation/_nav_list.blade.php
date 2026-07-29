<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title d-flex align-items-center gap-3">
            <form method="GET" action="{{ route('pageconfig.menuwebsite.footer-navigation') }}" class="d-flex align-items-center position-relative my-1">
                <input type="hidden" name="tab" value="nav-list">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span><span class="path2"></span>
                </i>
                <input type="text" name="q" value="{{ $searchQuery }}" class="form-control form-control-solid w-250px ps-12" placeholder="{{ app()->getLocale() == 'en' ? 'Search footer navigation...' : 'Cari navigasi footer...' }}" />
            </form>

            <form method="GET" action="{{ route('pageconfig.menuwebsite.footer-navigation') }}" class="d-flex align-items-center">
                <input type="hidden" name="tab" value="nav-list">
                @if($searchQuery)
                    <input type="hidden" name="q" value="{{ $searchQuery }}">
                @endif
                <select name="column" class="form-select form-select-solid w-180px" onchange="this.form.submit()">
                    <option value="">{{ app()->getLocale() == 'en' ? 'All 4 Columns' : 'Semua 4 Kolom' }}</option>
                    <option value="1" {{ $selectedColumn == '1' ? 'selected' : '' }}>Kolom 1 (Future Students...)</option>
                    <option value="2" {{ $selectedColumn == '2' ? 'selected' : '' }}>Kolom 2 (News & Media...)</option>
                    <option value="3" {{ $selectedColumn == '3' ? 'selected' : '' }}>Kolom 3 (Contacts...)</option>
                    <option value="4" {{ $selectedColumn == '4' ? 'selected' : '' }}>Kolom 4 (Campus Safety...)</option>
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
                        <th class="min-w-80px text-center">{{ app()->getLocale() == 'en' ? 'Column' : 'Kolom' }}</th>
                        <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Footer Title' : 'Judul Navigasi Footer' }}</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'URL / Route Target' : 'URL / Route Target' }}</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Main Nav Relation' : 'Relasi Navigasi Utama' }}</th>
                        <th class="min-w-80px text-center">{{ app()->getLocale() == 'en' ? 'Order' : 'Urutan' }}</th>
                        <th class="min-w-90px text-center">{{ app()->getLocale() == 'en' ? 'Status' : 'Status' }}</th>
                        <th class="min-w-125px text-end">{{ app()->getLocale() == 'en' ? 'Actions' : 'Aksi' }}</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-700">
                    @forelse($navigations as $index => $nav)
                        <tr>
                            <td class="text-center text-gray-500">{{ $index + 1 }}</td>
                            <td class="text-center">
                                <span class="badge badge-light-primary fs-7 fw-bold px-3 py-2">Kolom {{ $nav->column }}</span>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="text-gray-800 text-hover-primary fs-6 fw-bold">
                                        {{ $nav->title }}
                                    </span>
                                    @if($nav->title_en)
                                        <span class="text-muted fs-7">EN: {{ $nav->title_en }}</span>
                                    @endif
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
                                @if($nav->mainNavigation)
                                    <span class="badge badge-light-info fw-bold me-1 px-3 py-2">
                                        <i class="ki-duotone ki-element-plus text-info fs-7 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        {{ $nav->mainNavigation->title }}
                                    </span>
                                @else
                                    <span class="badge badge-light-secondary text-gray-600 fw-bold me-1 px-3 py-2">Custom Link</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-dark fs-7 fw-bold px-3 py-2">{{ $nav->order }}</span>
                            </td>
                            <td class="text-center">
                                <div class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                    <input class="form-check-input h-20px w-30px js-toggle-status" type="checkbox" data-id="{{ $nav->id }}" {{ $nav->is_active ? 'checked' : '' }} />
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-1">
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit Item' : 'Edit Navigasi' }}">
                                        <button type="button" class="btn btn-icon btn-light-primary btn-sm btn-edit-navigation" data-bs-toggle="modal" data-bs-target="#kt_modal_footer_navigation" data-nav="{{ json_encode($nav) }}">
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
                                <div class="fs-6 fw-semibold">{{ app()->getLocale() == 'en' ? 'No footer navigation items found.' : 'Tidak ada data navigasi footer ditemukan.' }}</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
