@php
    $pagesMegaMenu = $treeNavigations->firstWhere('type', 'mega_menu');
@endphp

<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Pages Mega Menu Column Preview' : 'Preview Live Grid Mega Menu "Pages"' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Simulated front-end 4-column mega menu distribution for website dropdown' : 'Simulasi tampilan 4 kolom mega menu sesuai posisi rendering di website utama' }}</span>
        </h3>
        <div class="card-toolbar">
            <span class="badge badge-light-primary fs-7 fw-bold">4-Column Grid Standard</span>
        </div>
    </div>

    <div class="card-body pt-0">
        @if($pagesMegaMenu && $pagesMegaMenu->children->count() > 0)
            <div class="bg-light p-6 rounded border border-gray-300">
                <div class="d-flex align-items-center justify-content-between mb-5 pb-3 border-bottom border-gray-300">
                    <div class="d-flex align-items-center gap-2">
                        <span class="fs-4 fw-bolder text-gray-900">{{ $pagesMegaMenu->title }}</span>
                        <span class="badge badge-light-info">Mega Menu</span>
                    </div>
                    <span class="text-muted fs-7">Route: <code>{{ $pagesMegaMenu->url }}</code></span>
                </div>

                <div class="row g-4">
                    @for($col = 1; $col <= 4; $col++)
                        @php
                            $itemsInCol = $pagesMegaMenu->children->where('mega_menu_column', $col)->sortBy('order');
                        @endphp
                        <div class="col-lg-3 col-md-6">
                            <div class="bg-white p-4 rounded border border-gray-300 shadow-xs h-100">
                                <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom border-primary">
                                    <span class="fw-bold fs-6 text-primary">
                                        <i class="ki-duotone ki-element-11 fs-5 me-1 text-primary"></i>
                                        Kolom {{ $col }}
                                    </span>
                                    <span class="badge badge-light-primary fs-8">{{ $itemsInCol->count() }} Items</span>
                                </div>

                                <div class="d-flex flex-column gap-2">
                                    @forelse($itemsInCol as $item)
                                        <div class="p-3 rounded border border-gray-200 bg-light-soft hover-elevation-1 d-flex align-items-center justify-content-between">
                                            <div class="d-flex flex-column">
                                                <span class="text-gray-800 fw-bold fs-7 d-flex align-items-center gap-1">
                                                    {{ $item->title }}
                                                    <i class="ki-duotone ki-arrow-right fs-9 text-primary"></i>
                                                </span>
                                                <span class="text-muted fs-8">EN: {{ $item->title_en ?? '-' }}</span>
                                                <code class="text-muted fs-9 mt-1">{{ $item->url }}</code>
                                            </div>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit Item' : 'Edit Item' }}">
                                                <button type="button" class="btn btn-icon btn-light-primary btn-sm w-30px h-30px btn-edit-navigation" data-bs-toggle="modal" data-bs-target="#kt_modal_main_navigation" data-nav="{{ json_encode($item) }}">
                                                    <i class="ki-duotone ki-pencil fs-5"><span class="path1"></span><span class="path2"></span></i>
                                                </button>
                                            </span>
                                        </div>
                                    @empty
                                        <div class="text-center py-6 text-muted fs-8 italic bg-light-soft rounded border border-dashed border-gray-300">
                                            {{ app()->getLocale() == 'en' ? 'No items assigned to Column ' . $col : 'Kosong di Kolom ' . $col }}
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        @else
            <div class="text-center py-10 text-muted">
                <i class="ki-duotone ki-element-plus fs-3x mb-3"><span class="path1"></span><span class="path2"></span></i>
                <div class="fs-6 fw-semibold">{{ app()->getLocale() == 'en' ? 'No Mega Menu container found or empty.' : 'Mega Menu "Pages" belum dikonfigurasi atau belum memiliki anak menu.' }}</div>
            </div>
        @endif
    </div>
</div>
