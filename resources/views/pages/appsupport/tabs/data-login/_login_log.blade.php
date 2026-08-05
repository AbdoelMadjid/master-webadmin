<!--begin::Summary Stat Cards - Login Session Logs-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col - Total Login-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-entrance-left fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($totalLogins) }}</span>
                        <span
                            class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Total Login Records' : 'Total Sesi Login' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->

    <!--begin::Col - Login Hari Ini-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-success">
                            <i class="ki-duotone ki-calendar fs-2x text-success">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($todayLogins) }}</span>
                        <span
                            class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Logins Today' : 'Sesi Login Hari Ini' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->

    <!--begin::Col - User Aktif 24 Jam-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-info">
                            <i class="ki-duotone ki-profile-user fs-2x text-info">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span
                            class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($activeUsers24h) }}</span>
                        <span
                            class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Active Users (15m)' : 'User Aktif (15m)' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->

    <!--begin::Col - Total Poin Keaktifan-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-warning">
                            <i class="ki-duotone ki-award fs-2x text-warning">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($totalPoints) }}</span>
                        <span
                            class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Total User Points' : 'Total Poin Keaktifan' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->
</div>
<!--end::Summary Stat Cards-->

<!--begin::Card Table Login Logs-->
<div class="card card-flush shadow-xs border border-gray-200">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" id="kt_data_login_search" class="form-control form-control-solid w-250px ps-12"
                    placeholder="{{ app()->getLocale() == 'en' ? 'Search user login...' : 'Cari user / IP / agent...' }}" />
            </div>
        </div>
        <div class="card-toolbar flex-row-fluid justify-content-end gap-3">
            <div class="w-150px">
                <select id="kt_data_login_role_filter" class="form-select form-select-solid" data-control="select2"
                    data-hide-search="true"
                    data-placeholder="{{ app()->getLocale() == 'en' ? 'All Roles' : 'Semua Role' }}">
                    <option value="">{{ app()->getLocale() == 'en' ? 'All Roles' : 'Semua Role' }}</option>
                    @foreach (\Spatie\Permission\Models\Role::all() as $role)
                        <option value="{{ strtolower($role->name) }}">{{ ucfirst($role->name) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-175px">
                <input type="date" id="kt_data_login_date_filter" class="form-control form-control-solid"
                    value="{{ date('Y-m-d') }}" />
            </div>
            <button type="button" id="kt_data_login_reset_filter" class="btn btn-sm btn-light-secondary my-1 d-none"
                onclick="resetDataLoginFilters()">
                <i class="ki-duotone ki-arrows-circle fs-4 me-1"><span class="path1"></span><span
                        class="path2"></span></i>
                Reset Filter
            </button>
            <button type="button" class="btn btn-sm btn-light-danger" onclick="clearAllDataLogins()"
                data-bs-toggle="tooltip" data-bs-placement="top"
                title="{{ app()->getLocale() == 'en' ? 'Purge all login session logs' : 'Kosongkan seluruh riwayat login' }}">
                <i class="ki-duotone ki-trash fs-4 me-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                </i> {{ app()->getLocale() == 'en' ? 'Clear All Logs' : 'Hapus Semua Log' }}
            </button>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_data_login">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">#</th>
                        <th class="min-w-175px">{{ app()->getLocale() == 'en' ? 'User' : 'Pengguna' }}</th>
                        <th class="min-w-125px">Role</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Login Timestamp' : 'Waktu Login' }}
                        </th>
                        <th class="min-w-125px text-center">
                            {{ app()->getLocale() == 'en' ? 'Frequency' : 'Frekuensi' }}</th>
                        <th class="min-w-125px text-center">
                            {{ app()->getLocale() == 'en' ? 'Points' : 'Poin Keaktifan' }}</th>
                        <th class="min-w-175px">IP & Device Agent</th>
                        <th class="text-end min-w-100px pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @forelse($logins as $index => $item)
                        @php
                            $roleName =
                                $item->user && $item->user->roles->count() > 0
                                    ? $item->user->roles->first()->name
                                    : 'User';
                            $firstRole = strtolower($roleName);
                            $roleBadgeClass = match ($firstRole) {
                                'admin' => 'badge-light-danger text-danger',
                                'administrator' => 'badge-light-danger text-danger',
                                'developer' => 'badge-light-primary text-primary',
                                'manager' => 'badge-light-warning text-warning',
                                default => 'badge-light-info text-info',
                            };
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-35px me-3">
                                        @if ($item->user && $item->user->avatar_url)
                                            <img src="{{ $item->user->avatar_url }}"
                                                alt="{{ $item->user->name }}" />
                                        @else
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">
                                                {{ strtoupper(substr($item->user ? $item->user->name : 'U', 0, 1)) }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-800 fw-bold">
                                            {{ $item->user ? $item->user->name : 'Pengguna Terhapus' }}
                                        </span>
                                        <span class="text-muted fs-7">
                                            {{ $item->user ? $item->user->email : '-' }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td data-role="{{ strtolower($firstRole) }}">
                                <span class="badge {{ $roleBadgeClass }} fw-bold fs-7">
                                    {{ ucfirst($roleName) }}
                                </span>
                            </td>
                            <td data-date="{{ $item->login_at ? $item->login_at->format('Y-m-d') : '' }}">
                                <div class="d-flex flex-column">
                                    <span class="text-gray-800 fw-bold">
                                        {{ $item->login_at ? $item->login_at->format('d M Y, H:i:s') : '-' }}
                                    </span>
                                    <span class="text-muted fs-7">
                                        {{ $item->login_at ? $item->login_at->diffForHumans() : '' }}
                                    </span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-light-info fw-bold fs-7" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Total frekuensi login harian">
                                    <i class="ki-duotone ki-entrance-left fs-5 me-1 text-info"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    {{ $item->login_count ?? 1 }}x Login
                                </span>
                            </td>
                            <td class="text-center" data-point="{{ $item->user?->points ?? 0 }}">
                                <span class="badge badge-light-success fw-bold fs-7" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Total poin reward keaktifan user saat ini">
                                    <i class="ki-duotone ki-award fs-5 me-1 text-success">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i> {{ number_format($item->user?->points ?? 0) }} Poin
                                </span>
                            </td>
                            <td>
                                <div class="d-flex flex-column gap-1">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge badge-light-primary fw-bold font-monospace fs-7">
                                            <i class="ki-duotone ki-network fs-7 me-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            {{ $item->ip_address ?? '127.0.0.1' }}
                                        </span>
                                        @if ($item->latitude && $item->longitude)
                                            <a href="https://maps.google.com/?q={{ $item->latitude }},{{ $item->longitude }}"
                                                target="_blank"
                                                class="btn btn-icon btn-xs btn-light-info w-25px h-25px"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Buka Maps ({{ number_format($item->latitude, 4) }}, {{ number_format($item->longitude, 4) }})">
                                                <i class="ki-duotone ki-geolocation fs-6"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="text-muted fs-8 text-truncate d-inline-block mw-200px"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="{{ $item->user_agent }}">
                                        <i class="ki-duotone ki-laptop fs-7 me-1 text-gray-500"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        {{ $item->user_agent ? Str::limit($item->user_agent, 35) : '-' }}
                                    </div>
                                </div>
                            </td>
                            <td class="text-end pe-4">
                                <button type="button"
                                    class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                    onclick="deleteDataLogin({{ $item->id }})" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Hapus Catatan Login">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-10">
                                Belum ada riwayat login user tercatat.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!--end::Card body-->
</div>
<!--end::Card Table-->
