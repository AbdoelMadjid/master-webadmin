<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? '4-Column Footer Live Preview' : 'Preview Live Tampilan 4 Kolom Footer Website' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Simulated 4-column footer link grid as rendered on the public website footer' : 'Simulasi kisi 4 kolom link navigasi footer publik pada website utama' }}</span>
        </h3>
        <div class="card-toolbar">
            <span class="badge badge-light-primary fs-7 fw-bold">4-Column Grid Standard</span>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="bg-secondary p-6 p-lg-10 rounded shadow-xs">
            <div class="row g-6">
                @for($col = 1; $col <= 4; $col++)
                    @php
                        $columnItems = $navigations->where('column', $col)->where('is_active', true);
                    @endphp
                    <div class="col-md-3 col-sm-6">
                        <div class="bg-white p-5 rounded border border-gray-300 h-100 shadow-2xs">
                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-4">
                                <span class="fw-bolder text-gray-900 fs-6">
                                    <i class="ki-duotone ki-element-plus text-primary fs-5 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                    Kolom {{ $col }}
                                </span>
                                <span class="badge badge-light-info fs-8">{{ $columnItems->count() }} Item</span>
                            </div>

                            <ul class="list-unstyled mb-0">
                                @forelse($columnItems as $item)
                                    <li class="py-2 border-bottom border-gray-100">
                                        <a href="#" class="d-flex align-items-center justify-content-between text-gray-700 text-hover-primary text-decoration-none fs-7 fw-semibold">
                                            <span>{{ app()->getLocale() == 'en' && !empty($item->title_en) ? $item->title_en : $item->title }}</span>
                                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-7"></i>
                                        </a>
                                    </li>
                                @empty
                                    <li class="py-4 text-center text-muted fs-7 italic">
                                        {{ app()->getLocale() == 'en' ? 'No active links in this column.' : 'Belum ada link aktif di kolom ini.' }}
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
