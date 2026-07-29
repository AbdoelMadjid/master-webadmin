<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Main Navigation Tree View' : 'Struktur & Hirarki Visual Menu Website' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Visual tree of parent headers and nested mega-menu columns' : 'Peta hirarki visual menu induk dan anak menu di setiap kolom mega menu' }}</span>
        </h3>
    </div>

    <div class="card-body pt-2">
        <div class="d-flex flex-column gap-5">
            @forelse($treeNavigations as $parent)
                <div class="border border-gray-300 rounded p-5 bg-light-soft">
                    <div class="d-flex align-items-center justify-content-between mb-3 bg-white p-4 rounded border border-gray-200 shadow-xs">
                        <div class="d-flex align-items-center gap-3">
                            <span class="symbol symbol-40px symbol-circle bg-light-primary p-2">
                                <i class="{{ $parent->icon ?? 'ki-duotone ki-element-11' }} text-primary fs-2">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                </i>
                            </span>
                            <div>
                                <h4 class="text-gray-900 fw-bold fs-5 m-0 d-flex align-items-center gap-2">
                                    {{ $parent->title }}
                                    @if($parent->title_en)
                                        <span class="text-muted fs-7">({{ $parent->title_en }})</span>
                                    @endif
                                    @if($parent->type === 'mega_menu')
                                        <span class="badge badge-light-info fs-8 fw-bold">Mega Menu Container</span>
                                    @endif
                                </h4>
                                <span class="text-primary fs-7 fw-semibold">Route/URL: {{ $parent->url }}</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <span class="badge badge-light-primary fw-bold fs-7">{{ app()->getLocale() == 'en' ? 'Order:' : 'Urutan:' }} {{ $parent->order }}</span>
                            <span class="badge badge-{{ $parent->is_active ? 'success' : 'danger' }} fs-7">
                                {{ $parent->is_active ? (app()->getLocale() == 'en' ? 'Active' : 'Aktif') : (app()->getLocale() == 'en' ? 'Inactive' : 'Nonaktif') }}
                            </span>
                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit Parent' : 'Edit Induk' }}">
                                <button type="button" class="btn btn-icon btn-light-primary btn-sm btn-edit-navigation" data-bs-toggle="modal" data-bs-target="#kt_modal_main_navigation" data-nav="{{ json_encode($parent) }}">
                                    <i class="ki-duotone ki-pencil fs-4"><span class="path1"></span><span class="path2"></span></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    @if($parent->children->count() > 0)
                        <div class="ps-6">
                            <div class="text-muted fw-bold fs-7 mb-3 text-uppercase">
                                <i class="ki-duotone ki-down fs-6 text-muted me-1"></i> {{ app()->getLocale() == 'en' ? 'Sub Navigation Items' : 'Anak Sub-Menu Navigasi' }} ({{ $parent->children->count() }})
                            </div>
                            <div class="row g-3">
                                @for($col = 1; $col <= 4; $col++)
                                    @php
                                        $colChildren = $parent->children->where('mega_menu_column', $col);
                                    @endphp
                                    @if($colChildren->count() > 0)
                                        <div class="col-md-3">
                                            <div class="bg-white p-3 rounded border border-gray-200 h-100">
                                                <div class="fw-bold fs-7 text-primary border-bottom pb-2 mb-2 d-flex align-items-center justify-content-between">
                                                    <span>Kolom {{ $col }}</span>
                                                    <span class="badge badge-light-primary fs-9">{{ $colChildren->count() }} item</span>
                                                </div>
                                                <div class="d-flex flex-column gap-2">
                                                    @foreach($colChildren as $child)
                                                        <div class="p-2 rounded bg-light-primary d-flex align-items-center justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <span class="text-gray-800 fw-bold fs-7">{{ $child->title }}</span>
                                                                <span class="text-muted fs-9">{{ $child->url }}</span>
                                                            </div>
                                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit' : 'Edit' }}">
                                                                <button type="button" class="btn btn-icon btn-active-light-primary btn-sm w-25px h-25px btn-edit-navigation" data-bs-toggle="modal" data-bs-target="#kt_modal_main_navigation" data-nav="{{ json_encode($child) }}">
                                                                    <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @else
                        <div class="ps-6 text-muted fs-7 italic">
                            {{ app()->getLocale() == 'en' ? 'No child menu items attached.' : 'Belum ada anak sub-menu yang terhubung.' }}
                        </div>
                    @endif
                </div>
            @empty
                <div class="text-center py-10 text-muted">
                    <i class="ki-duotone ki-folder-search fs-3x mb-3"><span class="path1"></span><span class="path2"></span></i>
                    <div class="fs-6 fw-semibold">{{ app()->getLocale() == 'en' ? 'No menu tree items found.' : 'Tidak ada hirarki menu ditemukan.' }}</div>
                </div>
            @endforelse
        </div>
    </div>
</div>
