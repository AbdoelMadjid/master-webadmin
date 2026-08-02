<!--begin::Summary Stat Cards - Data Mutation Activity Logs-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col - Total Mutasi-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-shield-search fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($totalMutations) }}</span>
                        <span class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Total Mutation Logs' : 'Total Audit Mutasi Data' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->

    <!--begin::Col - Mutasi Hari Ini-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-info">
                            <i class="ki-duotone ki-time fs-2x text-info">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($todayMutations) }}</span>
                        <span class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Mutations Today' : 'Mutasi Data Hari Ini' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->

    <!--begin::Col - Data Created-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-success">
                            <i class="ki-duotone ki-plus-circle fs-2x text-success">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($createdMutations) }}</span>
                        <span class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Records Created' : 'Data Ditambahkan' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->

    <!--begin::Col - Data Updated & Deleted-->
    <div class="col-md-3 col-sm-6">
        <div class="card card-flush h-md-100 shadow-xs border border-gray-200">
            <div class="card-body d-flex flex-column justify-content-between p-6">
                <div class="d-flex align-items-center">
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-warning">
                            <i class="ki-duotone ki-trash fs-2x text-warning">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                    </div>
                    <div>
                        <span class="fs-2hx fw-bold text-gray-900 lh-1 d-block">{{ number_format($updatedMutations + $deletedMutations) }}</span>
                        <span class="text-muted fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Updates & Deletes' : 'Perubahan & Penghapusan' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->
</div>
<!--end::Summary Stat Cards-->

<!--begin::Card Table Activity Logs-->
<div class="card card-flush shadow-xs border border-gray-200">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" id="kt_activity_log_search"
                    class="form-control form-control-solid w-250px ps-12"
                    placeholder="{{ app()->getLocale() == 'en' ? 'Search activity log...' : 'Cari model / causer / IP...' }}" />
            </div>
        </div>
        <div class="card-toolbar flex-row-fluid justify-content-end gap-3">
            <div class="w-175px">
                <select id="kt_activity_causer_filter" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="{{ app()->getLocale() == 'en' ? 'All Causers' : 'Semua Pelaksana' }}">
                    <option value="">{{ app()->getLocale() == 'en' ? 'All Causers' : 'Semua Pelaksana' }}</option>
                    <option value="system">{{ app()->getLocale() == 'en' ? 'System / Console' : 'System / Console' }}</option>
                    @if(isset($allUsers))
                        @foreach ($allUsers as $u)
                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="w-150px">
                <select id="kt_activity_event_filter" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="{{ app()->getLocale() == 'en' ? 'All Events' : 'Semua Aksi' }}">
                    <option value="">{{ app()->getLocale() == 'en' ? 'All Events' : 'Semua Aksi' }}</option>
                    <option value="created">Created</option>
                    <option value="updated">Updated</option>
                    <option value="deleted">Deleted</option>
                </select>
            </div>
            <button type="button" id="kt_activity_log_reset_filter" class="btn btn-sm btn-light-secondary my-1 d-none" onclick="resetActivityLogFilters()">
                <i class="ki-duotone ki-arrows-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                Reset Filter
            </button>
            <button type="button" class="btn btn-sm btn-light-danger" onclick="clearAllActivityLogs()" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Purge all data mutation logs' : 'Kosongkan seluruh riwayat audit mutasi' }}">
                <i class="ki-duotone ki-trash fs-4 me-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                </i> {{ app()->getLocale() == 'en' ? 'Clear Mutation Logs' : 'Hapus Log Mutasi' }}
            </button>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_activity_log">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">#</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Timestamp' : 'Stempel Waktu' }}</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'User Causer' : 'Pengguna Pelaksana' }}</th>
                        <th class="min-w-125px text-center">{{ app()->getLocale() == 'en' ? 'Event Action' : 'Aksi Mutasi' }}</th>
                        <th class="min-w-175px">{{ app()->getLocale() == 'en' ? 'Target Model Subject' : 'Target Model / Tabel' }}</th>
                        <th class="min-w-175px">IP Address & Request URL</th>
                        <th class="text-end min-w-125px pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @forelse($activities as $index => $item)
                        @php
                            $event = strtolower($item->event ?? 'updated');
                            $eventBadgeClass = match($event) {
                                'created' => 'badge-light-success text-success',
                                'updated' => 'badge-light-warning text-warning',
                                'deleted' => 'badge-light-danger text-danger',
                                default   => 'badge-light-primary text-primary',
                            };
                            $eventIcon = match($event) {
                                'created' => 'ki-plus-circle',
                                'updated' => 'ki-pencil',
                                'deleted' => 'ki-trash',
                                default   => 'ki-abstract-26',
                            };
                            $payloadData = !empty($item->attribute_changes) ? $item->attribute_changes : $item->properties;
                            $propertiesJson = json_encode($payloadData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="text-gray-800 fw-bold">
                                        {{ $item->created_at ? $item->created_at->format('d M Y, H:i:s') : '-' }}
                                    </span>
                                    <span class="text-muted fs-7">
                                        {{ $item->created_at ? $item->created_at->diffForHumans() : '' }}
                                    </span>
                                </div>
                            </td>
                            <td data-causer="{{ $item->causer_id ? $item->causer_id : 'system' }}">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-30px me-3">
                                        @if ($item->causer && method_exists($item->causer, 'getAvatarUrlAttribute') && $item->causer->avatar_url)
                                            <img src="{{ $item->causer->avatar_url }}" alt="{{ $item->causer->name }}" />
                                        @else
                                            <span class="symbol-label bg-light-primary text-primary fw-bold fs-7">
                                                {{ strtoupper(substr($item->causer ? $item->causer->name : 'S', 0, 1)) }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-800 fw-bold fs-7">
                                            {{ $item->causer ? $item->causer->name : 'System / Console' }}
                                        </span>
                                        <span class="text-muted fs-8">
                                            {{ $item->causer ? $item->causer->email : 'System Command' }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center" data-event="{{ $event }}">
                                <span class="badge {{ $eventBadgeClass }} fw-bold fs-7 px-3 py-2">
                                    <i class="ki-duotone {{ $eventIcon }} fs-6 me-1 text-inherit"><span class="path1"></span><span class="path2"></span></i>
                                    {{ strtoupper($event) }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="text-gray-800 fw-bold font-monospace fs-7">
                                        {{ $item->subject_type ? class_basename($item->subject_type) : ($item->log_name ?? 'General') }}
                                        @if($item->subject_id)
                                            <span class="badge badge-light-secondary text-dark fs-8">#{{ $item->subject_id }}</span>
                                        @endif
                                    </span>
                                    <span class="text-muted fs-8 text-truncate mw-200px" title="{{ $item->description }}">
                                        {{ $item->description }}
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column gap-1">
                                    <span class="badge badge-light-primary fw-bold font-monospace fs-8 align-self-start">
                                        <i class="ki-duotone ki-network fs-8 me-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                        {{ $item->properties['ip_address'] ?? '127.0.0.1' }}
                                    </span>
                                    <div class="text-muted fs-8 text-truncate d-inline-block mw-175px" title="{{ $item->properties['url'] ?? '-' }}">
                                        {{ $item->properties['url'] ?? '-' }}
                                    </div>
                                </div>
                            </td>
                            <td class="text-end pe-4">
                                <div class="d-flex align-items-center justify-content-end gap-1">
                                    <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                        onclick="showActivityDiff({{ $item->id }}, '{{ addslashes($item->description) }}', '{{ addslashes($item->subject_type ? class_basename($item->subject_type) : 'Model') }}', '{{ $item->subject_id }}', '{{ addslashes($item->causer ? $item->causer->name : 'System') }}', '{{ $item->created_at ? $item->created_at->format('d M Y H:i:s') : '' }}', '{{ addslashes(strtoupper($event)) }}')"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail Perubahan Attributes">
                                        <i class="ki-duotone ki-eye fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    </button>
                                    <!-- Hidden JSON payload per row -->
                                    <textarea id="activity_payload_{{ $item->id }}" class="d-none">{!! htmlspecialchars($propertiesJson, ENT_QUOTES, 'UTF-8') !!}</textarea>

                                    <button type="button" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                        onclick="deleteActivityLog({{ $item->id }})"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Catatan Mutasi">
                                        <i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-10">
                                Belum ada catatan mutasi data (Activity Log) yang terekam.
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

<!--begin::Modal Inspector Activity Log Properties Diff-->
<div class="modal fade" id="kt_modal_activity_diff" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded shadow-sm">
            <div class="modal-header pb-0 border-0 justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-3">
                        <i class="ki-duotone ki-shield-search text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </div>
                    <div>
                        <h3 class="modal-title fw-bold text-gray-900 fs-3" id="diff_modal_title">
                            {{ app()->getLocale() == 'en' ? 'Activity Mutation Inspector' : 'Inspektur Perubahan Mutasi Data' }}
                        </h3>
                        <span class="text-muted fs-7" id="diff_modal_subtitle">
                            {{ app()->getLocale() == 'en' ? 'Side-by-side attribute difference and metadata details' : 'Rincian perbandingan perubahan atribut data dan metadata eksekusi' }}
                        </span>
                    </div>
                </div>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body scroll-y px-8 pt-4 pb-8">
                <!-- Executed Metadata Card -->
                <div class="card schema-card bg-light-primary border border-primary p-4 rounded mb-6">
                    <div class="row g-3 fs-7">
                        <div class="col-sm-6 col-md-3">
                            <span class="text-muted d-block fs-8 uppercase fw-semibold">
                                <i class="ki-duotone ki-user fs-8 me-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'EXECUTED BY' : 'DIEKSEKUSI OLEH' }}
                            </span>
                            <span class="fw-bold text-gray-800" id="diff_causer">-</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <span class="text-muted d-block fs-8 uppercase fw-semibold">
                                <i class="ki-duotone ki-time fs-8 me-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'TIMESTAMP' : 'WAKTU EKSEKUSI' }}
                            </span>
                            <span class="fw-bold text-gray-800" id="diff_timestamp">-</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <span class="text-muted d-block fs-8 uppercase fw-semibold">
                                <i class="ki-duotone ki-element-11 fs-8 me-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'TARGET MODEL' : 'SUBJEK MODEL' }}
                            </span>
                            <span class="fw-bold text-gray-800" id="diff_subject">-</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <span class="text-muted d-block fs-8 uppercase fw-semibold">
                                <i class="ki-duotone ki-notification-status fs-8 me-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'EVENT ACTION' : 'EVENT AKSI' }}
                            </span>
                            <span id="diff_event_badge" class="badge badge-light-primary fw-bold">-</span>
                        </div>
                    </div>
                </div>

                <!-- Attributes Mutation Diff Table -->
                <div class="mb-6">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="fw-bold text-gray-900 fs-6 m-0">
                            <i class="ki-duotone ki-code fs-4 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Attributes Mutation Comparison' : 'Perbandingan Perubahan Atribut Data' }}
                        </h4>
                        <span class="badge badge-light-info text-info fw-bold fs-8" id="diff_changes_count">
                            0 Changes
                        </span>
                    </div>

                    <div class="table-responsive rounded border border-gray-300">
                        <table class="table table-row-bordered align-middle gs-4 gy-3 mb-0" id="diff_table">
                            <thead class="bg-light fs-8 text-gray-700 fw-bold text-uppercase">
                                <tr>
                                    <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Attribute / Field' : 'Atribut / Kolom' }}</th>
                                    <th class="min-w-200px text-danger bg-light-danger bg-opacity-25">{{ app()->getLocale() == 'en' ? 'Old Value (Sebelum)' : 'Nilai Sebelum (Old)' }}</th>
                                    <th class="min-w-200px text-success bg-light-success bg-opacity-25">{{ app()->getLocale() == 'en' ? 'New Value (Sesudah)' : 'Nilai Sesudah (New)' }}</th>
                                </tr>
                            </thead>
                            <tbody class="fs-7 font-monospace" id="diff_table_body">
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-5">No attribute changes detected.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Request Environment Metadata Card -->
                <div class="card schema-card bg-light-secondary border border-gray-300 p-4 rounded mb-6">
                    <div class="row g-3 fs-8 text-gray-700">
                        <div class="col-md-4">
                            <strong class="d-block text-gray-800 mb-1">
                                <i class="ki-duotone ki-network fs-7 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'IP Address' : 'Alamat IP Client' }}:
                            </strong>
                            <span id="diff_ip_address" class="font-monospace badge badge-light-primary fs-8">127.0.0.1</span>
                        </div>
                        <div class="col-md-8">
                            <strong class="d-block text-gray-800 mb-1">
                                <i class="ki-duotone ki-compass fs-7 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Request URL' : 'URL Permintaan (Endpoint)' }}:
                            </strong>
                            <span id="diff_url_endpoint" class="font-monospace text-truncate d-block text-gray-700">-</span>
                        </div>
                        <div class="col-12">
                            <strong class="d-block text-gray-800 mb-1">
                                <i class="ki-duotone ki-laptop fs-7 text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                User-Agent Browser:
                            </strong>
                            <span id="diff_user_agent" class="font-monospace text-muted fs-8 text-wrap text-break">-</span>
                        </div>
                    </div>
                </div>

                <!-- Accordion for Raw JSON Payload -->
                <div class="accordion" id="kt_activity_json_accordion">
                    <div class="accordion-item border rounded">
                        <h2 class="accordion-header" id="kt_activity_json_header">
                            <button class="accordion-button fs-7 fw-bold text-gray-700 collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#kt_activity_json_collapse" aria-expanded="false" aria-controls="kt_activity_json_collapse">
                                <i class="ki-duotone ki-file-sheet fs-5 text-gray-500 me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'View Raw JSON Payload' : 'Lihat Data Mentah JSON Payload' }}
                            </button>
                        </h2>
                        <div id="kt_activity_json_collapse" class="accordion-collapse collapse" aria-labelledby="kt_activity_json_header" data-bs-parent="#kt_activity_json_accordion">
                            <div class="accordion-body p-4 bg-dark rounded-bottom">
                                <pre class="text-success fs-7 font-monospace style-scroll overflow-auto mw-100 mb-0" style="max-height: 250px;" id="diff_json_content">{}</pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-6">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Close' : 'Tutup' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Modal Inspector Activity Log Properties Diff-->
