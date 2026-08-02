<div class="row g-5 g-xl-10">
    @forelse($versions as $ver)
        <div class="col-md-6 col-lg-4">
            <div class="card card-flush h-100 shadow-xs border border-gray-200">
                <div class="card-header pt-5 pb-3">
                    <div class="card-title d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge {{ $ver['badge'] }} fs-4 fw-bold px-3 py-2">
                                {{ $ver['version'] }}
                            </span>
                            <span class="badge badge-light-dark fs-8 fw-bold uppercase">
                                {{ strtoupper($ver['type']) }}
                            </span>
                        </div>
                        <span class="text-muted fs-7 fw-semibold">
                            <i class="ki-duotone ki-calendar fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                            {{ $ver['date'] }}
                        </span>
                    </div>
                </div>

                <div class="card-body pt-0 d-flex flex-column justify-content-between">
                    <div>
                        <h4 class="text-gray-900 fw-bold fs-5 mb-2">
                            {{ app()->getLocale() == 'en' ? $ver['title'] : $ver['title_id'] }}
                        </h4>
                        <p class="text-gray-600 fs-7 mb-4">
                            {{ app()->getLocale() == 'en' ? $ver['description'] : $ver['description_id'] }}
                        </p>

                        <div class="separator separator-dashed mb-4"></div>

                        <h5 class="fs-7 text-uppercase fw-bold text-gray-500 mb-3">
                            <i class="ki-duotone ki-element-11 fs-6 text-primary me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Key Features & Fixes' : 'Fitur Utama & Perbaikan' }}
                        </h5>
                        <ul class="list-unstyled p-0 m-0 fs-7 text-gray-700">
                            @foreach($ver['highlights'] as $hl)
                                <li class="d-flex align-items-center gap-2 mb-2">
                                    <i class="ki-duotone ki-check-circle fs-6 text-success"><span class="path1"></span><span class="path2"></span></i>
                                    <span><strong>{{ $hl['label'] }}:</strong> {{ $hl['desc'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="pt-4 border-top border-gray-200 mt-4 d-flex align-items-center justify-content-between">
                        <span class="text-muted fs-8 fw-semibold">
                            <i class="ki-duotone ki-git fs-7 me-1 text-gray-500"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            {{ count($ver['commits']) }} {{ app()->getLocale() == 'en' ? 'Commits' : 'Commit' }}
                        </span>
                        <span class="text-muted fs-8 fw-semibold">
                            <i class="ki-duotone ki-user fs-7 me-1 text-gray-500"><span class="path1"></span><span class="path2"></span></i>
                            {{ $ver['author'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="card card-flush shadow-xs border border-gray-200 p-10 text-center text-muted">
                <i class="ki-duotone ki-information-5 fs-3x mb-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                <div>{{ app()->getLocale() == 'en' ? 'No version breakdown available.' : 'Tidak ada data rincian versi.' }}</div>
            </div>
        </div>
    @endforelse
</div>
