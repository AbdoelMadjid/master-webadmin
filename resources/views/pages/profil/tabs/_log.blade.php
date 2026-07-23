@php
    $myLoginLogs = \App\Models\AppSupport\DataLogin::where('user_id', auth()->id())
        ->orderBy('login_at', 'desc')
        ->paginate(15);

    $totalLogins = \App\Models\AppSupport\DataLogin::where('user_id', auth()->id())->sum('login_count');
    $totalPoints = \App\Models\AppSupport\DataLogin::where('user_id', auth()->id())->where('point_awarded', true)->count();
@endphp

<!--begin::Summary Row-->
<div class="row g-5 mb-5 mb-xl-8">
    <div class="col-md-6">
        <div class="card bg-light-primary border border-primary border-dashed p-4 rounded">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-45px me-4">
                    <span class="symbol-label bg-primary text-white">
                        <i class="ki-duotone ki-key fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <div>
                    <div class="fs-4 fw-bold text-gray-900">{{ number_format($totalLogins) }}x Login</div>
                    <div class="fs-7 text-muted">Total Seluruh Frekuensi Login Sesi Akun Anda</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-light-success border border-success border-dashed p-4 rounded">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-45px me-4">
                    <span class="symbol-label bg-success text-white">
                        <i class="ki-duotone ki-award fs-1 text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </span>
                </div>
                <div>
                    <div class="fs-4 fw-bold text-gray-900">{{ number_format($totalPoints) }} Poin</div>
                    <div class="fs-7 text-muted">Total Poin Keaktifan Harian (1 Poin / Hari)</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Summary Row-->

<!--begin::Login Sessions Card-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Riwayat Login Harian Saya</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Catatan rekapan aktivitas login harian dan jumlah frekuensi login per tanggal</span>
        </h3>
        <div class="card-toolbar">
            <span class="badge badge-light-primary fs-7 fw-bold">Total {{ $myLoginLogs->total() }} Hari Login</span>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body py-3">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed table-row-gray-300 gy-4 gs-4">
                <!--begin::Thead-->
                <thead>
                    <tr class="fw-bold text-gray-700 bg-light text-uppercase fs-8">
                        <th class="w-50px text-center">No</th>
                        <th class="min-w-200px">Tanggal & Waktu Login Pertama</th>
                        <th class="min-w-175px text-center">Frekuensi Login Harian</th>
                        <th class="min-w-150px">Alamat IP Terakhir</th>
                        <th class="min-w-250px">User Agent / Perangkat</th>
                    </tr>
                </thead>
                <!--end::Thead-->

                <!--begin::Tbody-->
                <tbody class="fw-semibold text-gray-600 fs-7">
                    @forelse($myLoginLogs as $index => $log)
                        <tr>
                            <td class="text-center text-muted fw-bold">
                                {{ $myLoginLogs->firstItem() + $index }}
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="text-gray-800 fw-bold">{{ $log->login_at ? $log->login_at->format('d M Y, H:i:s') : '-' }}</span>
                                    <span class="text-muted fs-8">{{ $log->login_at ? $log->login_at->diffForHumans() : '' }}</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-primary fw-bold px-3 py-2 fs-7">
                                    <i class="ki-duotone ki-arrows-loop fs-6 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ $log->login_count }}x Login Hari Ini
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-light-dark fw-bold px-3 py-2">
                                    <i class="ki-duotone ki-geolocation fs-6 text-gray-600 me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ $log->ip_address ?? '127.0.0.1' }}
                                </span>
                            </td>
                            <td>
                                <span class="text-gray-700 text-truncate d-inline-block mw-300px" title="{{ $log->user_agent }}">
                                    {{ Str::limit($log->user_agent, 55) ?? 'Unknown Device' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-10 text-muted">
                                <i class="ki-duotone ki-information fs-3x text-gray-400 mb-3 d-block"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Belum ada riwayat sesi login yang terekam untuk akun Anda.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->

        @if($myLoginLogs->hasPages())
            <div class="d-flex justify-content-end pt-4">
                {{ $myLoginLogs->appends(['tab' => 'log'])->links() }}
            </div>
        @endif
    </div>
    <!--end::Card body-->
</div>
<!--end::Login Sessions Card-->
