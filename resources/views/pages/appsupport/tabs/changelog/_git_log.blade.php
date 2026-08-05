<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">
                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                {{ app()->getLocale() == 'en' ? 'Live Git Commit Log' : 'Daftar Log Commit Repository Git' }}
            </span>
            <span class="text-muted mt-1 fw-semibold fs-7">
                {{ app()->getLocale() == 'en' ? 'Real-time recorded push history extracted directly from system repository' : 'Riwayat push commit yang direkam secara real-time dari repositori git sistem' }}
            </span>
        </h3>
        <div class="card-toolbar">
            <span class="badge badge-light-primary fs-7 fw-bold">
                {{ number_format(count($commits)) }}
                {{ app()->getLocale() == 'en' ? 'Commits Logged' : 'Commit Terekam' }}
            </span>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_changelog_git_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-80px text-center">Hash</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Version' : 'Versi' }}</th>
                        <th class="min-w-150px text-center">
                            {{ app()->getLocale() == 'en' ? 'Date & Time' : 'Tanggal & Waktu' }}</th>
                        <th class="min-w-120px text-center">{{ app()->getLocale() == 'en' ? 'Type' : 'Kategori' }}</th>
                        <th class="min-w-300px">{{ app()->getLocale() == 'en' ? 'Commit Message' : 'Pesan Commit' }}
                        </th>
                        <th class="min-w-150px text-center">{{ app()->getLocale() == 'en' ? 'Author' : 'Pengembang' }}
                        </th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-700">
                    @forelse($commits as $index => $commit)
                        <tr>
                            <td class="text-center">
                                <code
                                    class="text-primary bg-light-primary px-2 py-1 rounded fs-7 fw-bold">{{ $commit['hash'] }}</code>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-primary fs-8 fw-bold px-3 py-1">
                                    {{ $commit['version'] ?? 'v1.4.0' }}
                                </span>
                            </td>
                            <td class="text-center text-muted fs-7">
                                {{ $commit['date'] }}
                            </td>
                            <td class="text-center">
                                @if ($commit['type'] === 'feat')
                                    <span class="badge badge-light-success fs-8 fw-bold px-3 py-1">FEATURE</span>
                                @elseif($commit['type'] === 'fix')
                                    <span class="badge badge-light-danger fs-8 fw-bold px-3 py-1">BUG FIX</span>
                                @elseif($commit['type'] === 'docs')
                                    <span class="badge badge-light-warning fs-8 fw-bold px-3 py-1">DOCS</span>
                                @elseif($commit['type'] === 'style')
                                    <span class="badge badge-light-info fs-8 fw-bold px-3 py-1">STYLE / UI</span>
                                @elseif($commit['type'] === 'refactor')
                                    <span class="badge badge-light-primary fs-8 fw-bold px-3 py-1">REFACTOR</span>
                                @else
                                    <span
                                        class="badge badge-light-secondary text-gray-700 fs-8 fw-bold px-3 py-1">UPDATE</span>
                                @endif
                            </td>
                            <td class="text-gray-900 fw-bold fs-7">
                                {{ $commit['message'] }}
                            </td>
                            <td class="text-center text-muted fs-7">
                                <i class="ki-duotone ki-user fs-7 me-1 text-gray-500"><span class="path1"></span><span
                                        class="path2"></span></i>
                                {{ $commit['author'] }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-10 text-muted">
                                <i class="ki-duotone ki-folder-search fs-3x mb-3"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <div class="fs-6 fw-semibold">
                                    {{ app()->getLocale() == 'en' ? 'No commits found.' : 'Tidak ada log commit ditemukan.' }}
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
