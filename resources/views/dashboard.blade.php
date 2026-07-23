@extends('layouts.index')
@section('title', 'Dashboard')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('action')
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_target">Add Target</a>
                <!--end::Primary button-->
            </div>
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::User & Points Stat Cards Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col Total Users-->
                <div class="col-12 col-md-4">
                    <div class="card card-flush h-100 bgi-no-repeat bgi-size-contain bgi-position-x-end"
                        style="background-color: #1e1e2d; background-image: url('{{ asset('assets/media/patterns/vector-1.png') }}');">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="ki-duotone ki-profile-user fs-2hx text-primary me-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ number_format($totalUsers ?? 0) }}</span>
                                </div>
                                <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total Pengguna Terdaftar</span>
                            </div>
                        </div>
                        <div class="card-body d-flex align-items-end pt-0">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <span class="badge badge-light-success fs-8 fw-bold px-3 py-2">
                                    <i class="ki-duotone ki-check-circle fs-7 text-success me-1"><span class="path1"></span><span class="path2"></span></i>
                                    {{ $onlineUsersCount ?? 0 }} Online (15m)
                                </span>
                                <!--begin::Users Stack-->
                                <div class="symbol-group symbol-hover">
                                    @foreach(($latestUsers ?? []) as $u)
                                        <div class="symbol symbol-30px symbol-circle" data-bs-toggle="tooltip" title="{{ $u->name }}">
                                            <img src="{{ $u->avatar_url }}" alt="{{ $u->name }}" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                                        </div>
                                    @endforeach
                                </div>
                                <!--end::Users Stack-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col Total Users-->

                <!--begin::Col Total Points-->
                <div class="col-12 col-md-4">
                    @php
                        $pts = $totalPoints ?? 0;
                        if ($pts < 1000) {
                            $target = 1000;
                            $tierName = 'Target 1K Poin';
                            $trophy = '🥉';
                            $badgeClass = 'badge-light-primary text-primary';
                            $barClass = 'bg-primary';
                            $bgLightClass = 'bg-light-primary';
                            $percent = min(100, round(($pts / 1000) * 100));
                        } elseif ($pts < 5000) {
                            $target = 5000;
                            $tierName = 'Piala 1K Poin Achieved';
                            $trophy = '🥉';
                            $badgeClass = 'badge-light-info text-info';
                            $barClass = 'bg-info';
                            $bgLightClass = 'bg-light-info';
                            $percent = min(100, round(($pts / 5000) * 100));
                        } elseif ($pts < 10000) {
                            $target = 10000;
                            $tierName = 'Piala 5K Poin Achieved';
                            $trophy = '🥈';
                            $badgeClass = 'badge-light-warning text-warning';
                            $barClass = 'bg-warning';
                            $bgLightClass = 'bg-light-warning';
                            $percent = min(100, round(($pts / 10000) * 100));
                        } elseif ($pts < 25000) {
                            $target = 25000;
                            $tierName = 'Piala 10K Poin Achieved';
                            $trophy = '🥇';
                            $badgeClass = 'badge-light-success text-success';
                            $barClass = 'bg-success';
                            $bgLightClass = 'bg-light-success';
                            $percent = min(100, round(($pts / 25000) * 100));
                        } else {
                            $target = 25000;
                            $tierName = 'Piala 25K+ Max Legend';
                            $trophy = '🏆';
                            $badgeClass = 'badge-light-danger text-danger';
                            $barClass = 'bg-danger';
                            $bgLightClass = 'bg-light-danger';
                            $percent = 100;
                        }
                    @endphp
                    <div class="card card-flush h-100 border border-gray-200">
                        <div class="card-header pt-5 pb-1">
                            <div class="card-title d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="fs-1 me-2">{{ $trophy }}</span>
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ number_format($pts) }}</span>
                                    <span class="badge {{ $badgeClass }} fw-bold fs-8 px-2 py-1 ms-1">
                                        {{ $tierName }}
                                    </span>
                                </div>
                                <span class="text-gray-800 fw-bold fs-6">Total Poin Keaktifan Terkumpul</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-end pt-2 pb-5">
                            <div class="d-flex justify-content-between align-items-center fs-7 fw-bold mb-1">
                                <span class="text-gray-600">Target Milestone: <strong>{{ number_format($target) }} Poin</strong></span>
                                <span class="text-gray-900 fw-bolder">{{ $percent }}%</span>
                            </div>
                            <div class="h-8px w-100 {{ $bgLightClass }} rounded overflow-hidden">
                                <div class="{{ $barClass }} rounded h-8px" role="progressbar" style="width: {{ $percent }}%" aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between text-muted fs-8 mt-2 fw-semibold">
                                <span title="Milestone 1.000 Poin" class="{{ $pts >= 1000 ? 'text-primary fw-bold' : '' }}">🥉 1K</span>
                                <span title="Milestone 5.000 Poin" class="{{ $pts >= 5000 ? 'text-info fw-bold' : '' }}">🥈 5K</span>
                                <span title="Milestone 10.000 Poin" class="{{ $pts >= 10000 ? 'text-warning fw-bold' : '' }}">🥇 10K</span>
                                <span title="Milestone 25.000 Poin" class="{{ $pts >= 25000 ? 'text-danger fw-bold' : '' }}">🏆 25K</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col Total Points-->

                <!--begin::Col My Points-->
                <div class="col-12 col-md-4">
                    <div class="card card-flush h-100 border border-gray-200 bg-light-primary">
                        <div class="card-header pt-5 pb-2">
                            <div class="card-title d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="ki-duotone ki-star fs-2hx text-primary me-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="fs-2hx fw-bold text-primary me-2 lh-1 ls-n2">{{ number_format(auth()->user()?->points ?? 0) }}</span>
                                    <span class="badge badge-primary fw-bold fs-8 px-2 py-1">Poin Anda</span>
                                </div>
                                <span class="text-gray-800 fw-bold fs-6">Perolehan Poin Keaktifan Saya</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between pt-0 pb-5">
                            <span class="fs-7 text-gray-600 mb-3">
                                <i class="ki-duotone ki-information-2 fs-6 text-primary me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                Dapatkan <strong>+1 poin</strong> setiap kali login pertama kali per hari.
                            </span>
                            <div class="pt-2">
                                <a href="{{ url('profil-pengguna') }}" class="btn btn-sm btn-primary w-100 fw-bold">
                                    <i class="ki-duotone ki-profile-user fs-5 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    Lihat Profil Saya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col My Points-->
            </div>
            <!--end::User & Points Stat Cards Row-->

            <!--begin::Leaderboard Points Table Widget-->
            <div class="card card-flush mb-5 mb-xl-10">
                <div class="card-header pt-6 pb-4 align-items-center">
                    <div class="card-title d-flex align-items-center gap-3">
                        <i class="ki-duotone ki-trophy fs-2x text-warning">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <div>
                            <h3 class="fw-bold fs-4 text-gray-900 m-0">Klasemen Poin Keaktifan Pengguna</h3>
                            <span class="text-muted fs-7">Top 5 Pengguna dengan perolehan poin login harian tertinggi</span>
                        </div>
                    </div>
                    @hasanyrole('admin|master')
                        <div class="card-toolbar">
                            <a href="{{ url('manajemenpengguna/users') }}" class="btn btn-sm btn-light-primary fw-bold">
                                <i class="ki-duotone ki-profile-user fs-5 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                Kelola Pengguna
                            </a>
                        </div>
                    @endhasanyrole
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-4">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-80px text-center">Peringkat</th>
                                    <th class="min-w-200px">Pengguna</th>
                                    <th class="min-w-125px text-center">Total Login</th>
                                    <th class="min-w-150px text-center">Perolehan Poin</th>
                                    @hasanyrole('admin|master')
                                        <th class="text-end min-w-100px pe-4">Aksi</th>
                                    @endhasanyrole
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @forelse(($topUsers ?? []) as $rank => $user)
                                    <tr>
                                        <td class="text-center">
                                            @if($rank == 0)
                                                <span class="badge badge-lg badge-light-warning fw-bolder px-3 py-2 fs-6">
                                                    🥇 #1
                                                </span>
                                            @elseif($rank == 1)
                                                <span class="badge badge-lg badge-light-secondary fw-bolder px-3 py-2 fs-6 text-gray-700">
                                                    🥈 #2
                                                </span>
                                            @elseif($rank == 2)
                                                <span class="badge badge-lg badge-light-danger fw-bolder px-3 py-2 fs-6">
                                                    🥉 #3
                                                </span>
                                            @else
                                                <span class="badge badge-light fw-bold px-3 py-2">
                                                    #{{ $rank + 1 }}
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-40px overflow-hidden me-3">
                                                    <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" style="width: 40px; height: 40px; object-fit: cover;" onerror="this.onerror=null;this.src='{{ asset('assets/media/svg/avatars/default-avatar.svg') }}';" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="{{ url('profil-pengguna') }}" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">
                                                        {{ $user->name }}
                                                        @if($user->id === auth()->id())
                                                            <span class="badge badge-light-primary fs-8 ms-1">Saya</span>
                                                        @endif
                                                    </a>
                                                    <span class="fs-7 text-muted">{{ $user->email }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-light-info fw-bold px-3 py-2">
                                                <i class="ki-duotone ki-entrance-left fs-6 text-info me-1"><span class="path1"></span><span class="path2"></span></i>
                                                {{ number_format($user->data_logins_count ?? 0) }}x Login
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-light-warning fw-bold fs-6 px-3 py-2">
                                                <i class="ki-duotone ki-star fs-5 text-warning me-1"><span class="path1"></span><span class="path2"></span></i>
                                                {{ number_format($user->points ?? 0) }} Poin
                                            </span>
                                        </td>
                                        @hasanyrole('admin|master')
                                            <td class="text-end pe-4">
                                                <a href="{{ url('manajemenpengguna/users') }}" class="btn btn-sm btn-icon btn-light-primary" data-bs-toggle="tooltip" title="Lihat Detail User">
                                                    <i class="ki-duotone ki-eye fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                </a>
                                            </td>
                                        @endhasanyrole
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ auth()->user()?->hasAnyRole(['admin', 'master']) ? 5 : 4 }}" class="text-center py-6 text-muted">
                                            Belum ada data poin pengguna.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end::Leaderboard Points Table Widget-->

        </div>
    </div>

    <!--begin::Original Demo Content-->
    @include('layouts.partials._content')
    <!--end::Original Demo Content-->
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
