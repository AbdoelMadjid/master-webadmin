<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Top Header Toolbar Preview' : 'Preview Live Tampilan Navigasi Atas Website' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Simulated topbar layout as rendered on the public website header' : 'Simulasi baris navigasi atas (topbar dark header) publik pada website utama' }}</span>
        </h3>
        <div class="card-toolbar">
            <span class="badge badge-light-dark fs-7 fw-bold">Dark Topbar Standard</span>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="bg-dark p-6 rounded shadow-xs">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-4 border-bottom border-gray-700 pb-4 mb-4">
                <span class="text-white-50 fs-7 fw-bold text-uppercase me-3">
                    <i class="ki-duotone ki-element-plus text-primary fs-5 me-1"></i> Top Header Links Bar
                </span>
                <span class="text-white-50 fs-8">Active items only</span>
            </div>

            <div class="d-flex align-items-center justify-content-end flex-wrap gap-3">
                @forelse($navigations->where('is_active', true) as $nav)
                    <a href="#" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-secondary text-white text-hover-primary text-uppercase px-4 py-2 fs-7 fw-semibold">
                        @if($nav->icon)
                            <i class="{{ $nav->icon }} me-1"></i>
                        @endif
                        {{ app()->getLocale() == 'en' && !empty($nav->title_en) ? $nav->title_en : $nav->title }}
                    </a>
                @empty
                    <div class="text-white-50 fs-7 italic py-4">
                        {{ app()->getLocale() == 'en' ? 'No active top navigation links.' : 'Tidak ada link navigasi atas yang aktif.' }}
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
