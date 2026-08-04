<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">
                <i class="ki-duotone ki-time fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Version Release Timeline' : 'Linimasa Rilis Catatan Perubahan' }}
            </span>
            <span class="text-muted mt-1 fw-semibold fs-7">
                {{ app()->getLocale() == 'en' ? 'Detailed timeline of version releases from initial deployment v1.0.0 to current v1.1.3' : 'Rincian linimasa perilisan versi dari rilis awal v1.0.0 hingga versi terbaru v1.1.3' }}
            </span>
        </h3>
    </div>

    <div class="card-body pt-2">
        <div class="timeline">
            @forelse($versions as $index => $ver)
                <!--begin::Timeline item-->
                <div class="timeline-item">
                    <!--begin::Timeline line-->
                    <div class="timeline-line"></div>
                    <!--end::Timeline line-->

                    <!--begin::Timeline icon-->
                    <div class="timeline-icon symbol symbol-circle symbol-40px {{ $index === 0 ? 'bg-light-success' : 'bg-light-primary' }} me-4">
                        <i class="ki-duotone ki-element-plus fs-2 {{ $index === 0 ? 'text-success' : 'text-primary' }}">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
                        </i>
                    </div>
                    <!--end::Timeline icon-->

                    <!--begin::Timeline content-->
                    <div class="timeline-content mb-10 mt-n1 flex-grow-1">
                        <div class="card bg-light-secondary border border-gray-300 p-5 rounded shadow-xs">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge {{ $ver['badge'] }} fs-5 fw-bold px-3 py-2">
                                        {{ $ver['version'] }}
                                    </span>
                                    <h4 class="text-gray-900 fw-bold m-0 fs-5">
                                        {{ app()->getLocale() == 'en' ? $ver['title'] : $ver['title_id'] }}
                                    </h4>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-light-primary fs-7 fw-bold">
                                        <i class="ki-duotone ki-time fs-7 me-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                        {{ $ver['date'] }}
                                    </span>
                                    <span class="badge badge-light-dark fs-7 fw-semibold">
                                        <i class="ki-duotone ki-user fs-8 me-1"><span class="path1"></span><span class="path2"></span></i>
                                        {{ $ver['author'] }}
                                    </span>
                                    <span class="badge badge-light-info fs-7 fw-bold uppercase">
                                        {{ strtoupper($ver['type']) }}
                                    </span>
                                    @if(!empty($ver['id']))
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Versi Rilis">
                                            <button type="button" class="btn btn-icon btn-sm btn-light-warning shadow-xs h-25px w-25px" data-changelog="{{ json_encode($ver) }}" onclick="openEditChangelogFromBtn(this)">
                                                <i class="ki-duotone ki-pencil fs-6 p-0 m-0"><span class="path1"></span><span class="path2"></span></i>
                                            </button>
                                        </span>
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Versi Rilis">
                                            <button type="button" class="btn btn-icon btn-sm btn-light-danger shadow-xs h-25px w-25px" onclick="deleteChangelog({{ $ver['id'] }}, '{{ $ver['version'] }}')">
                                                <i class="ki-duotone ki-trash fs-6 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            </button>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <p class="text-gray-700 fs-6 mb-4">
                                {{ app()->getLocale() == 'en' ? $ver['description'] : $ver['description_id'] }}
                            </p>

                            <!--begin::Highlights-->
                            <div class="mb-4">
                                <h5 class="fs-7 text-uppercase fw-bold text-gray-500 mb-2">
                                    <i class="ki-duotone ki-check-square fs-6 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ app()->getLocale() == 'en' ? 'Key Feature Highlights' : 'Poin Perubahan Utama' }}
                                </h5>
                                <div class="d-flex flex-column gap-2">
                                    @foreach($ver['highlights'] as $hl)
                                        <div class="d-flex align-items-start gap-2">
                                            @if($hl['type'] === 'feat')
                                                <span class="badge badge-light-success fs-8 fw-bold min-w-75px text-center">FEAT</span>
                                            @elseif($hl['type'] === 'fix')
                                                <span class="badge badge-light-danger fs-8 fw-bold min-w-75px text-center">FIX</span>
                                            @elseif($hl['type'] === 'ui')
                                                <span class="badge badge-light-info fs-8 fw-bold min-w-75px text-center">UI</span>
                                            @elseif($hl['type'] === 'docs')
                                                <span class="badge badge-light-warning fs-8 fw-bold min-w-75px text-center">DOCS</span>
                                            @else
                                                <span class="badge badge-light-primary fs-8 fw-bold min-w-75px text-center">REFACTOR</span>
                                            @endif
                                            <span class="text-gray-800 fs-7">
                                                <strong>{{ $hl['label'] }}:</strong> {{ $hl['desc'] }}
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--end::Highlights-->

                            <!--begin::Commits Collapse-->
                            <div class="accordion accordion-icon-toggle" id="kt_accordion_commits_{{ $index }}">
                                <div class="accordion-item border-0">
                                    <div class="accordion-header py-1 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_{{ $index }}">
                                        <span class="accordion-icon"><i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i></span>
                                        <h6 class="fs-7 fw-bold text-primary mb-0 cursor-pointer">
                                            {{ app()->getLocale() == 'en' ? 'View ' . count($ver['commits']) . ' Git Commits in this Release' : 'Lihat ' . count($ver['commits']) . ' Commit Git pada Rilis Ini' }}
                                        </h6>
                                    </div>
                                    <div id="kt_accordion_body_{{ $index }}" class="fs-6 collapse mt-3" data-bs-parent="#kt_accordion_commits_{{ $index }}">
                                        <div class="table-responsive">
                                            <table class="table table-sm align-middle table-row-dashed fs-7 gy-2 mb-0">
                                                <thead>
                                                    <tr class="text-muted fw-bold text-uppercase gs-0">
                                                        <th class="w-100px">Hash</th>
                                                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Commit Message' : 'Pesan Commit' }}</th>
                                                        <th class="w-100px text-end">{{ app()->getLocale() == 'en' ? 'Date' : 'Tanggal' }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($ver['commits'] as $c)
                                                        <tr>
                                                            <td><code class="text-primary bg-light-primary px-2 py-1 rounded">{{ $c['hash'] }}</code></td>
                                                            <td class="text-gray-800">{{ $c['msg'] }}</td>
                                                            <td class="text-end text-muted">{{ $c['date'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Commits Collapse-->

                        </div>
                    </div>
                    <!--end::Timeline content-->
                </div>
                <!--end::Timeline item-->
            @empty
                <div class="text-center py-10 text-muted">
                    <i class="ki-duotone ki-information-5 fs-3x mb-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <div>{{ app()->getLocale() == 'en' ? 'No version history found.' : 'Tidak ada riwayat versi ditemukan.' }}</div>
                </div>
            @endforelse
        </div>
    </div>
</div>
