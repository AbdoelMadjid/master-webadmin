<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5 gap-3">
        <h3 class="card-title align-items-start flex-column">
            <span
                class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Public Website Feature Toggles' : 'Daftar Sakelar Visibilitas Fitur Website Publik' }}</span>
            <span
                class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Manage visibility switches for topbar buttons, search bar, language switcher, and footer social links' : 'Kelola sakelar status tampil/sembunyi tombol intake, pengubah bahasa, tombol login, form pencarian, dan sosial media footer' }}</span>
        </h3>
        <div class="card-toolbar d-flex align-items-center gap-2">
            <button type="button" class="btn btn-sm btn-light-success shadow-2xs js-bulk-toggle-features" data-status="1">
                <i class="ki-duotone ki-check-circle fs-3 me-1"><span class="path1"></span><span
                        class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Enable All Features' : 'Aktifkan' }}
            </button>
            <button type="button" class="btn btn-sm btn-light-danger shadow-2xs js-bulk-toggle-features"
                data-status="0">
                <i class="ki-duotone ki-cross-circle fs-3 me-1"><span class="path1"></span><span
                        class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Disable All Features' : 'Nonaktifkan' }}
            </button>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-4">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-50px text-center">#</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Location' : 'Lokasi' }}
                        </th>
                        <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Feature Name' : 'Nama Fitur Website' }}
                        </th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'System Key' : 'Kode Kunci Sistem' }}
                        </th>
                        <th class="min-w-250px">{{ app()->getLocale() == 'en' ? 'Description' : 'Deskripsi & Fungsi' }}
                        </th>
                        <th class="min-w-100px text-center">
                            {{ app()->getLocale() == 'en' ? 'Visibility Status' : 'Status Visibilitas' }}</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-700">
                    @forelse($features as $index => $feat)
                        <tr>
                            <td class="text-center text-gray-500">{{ $index + 1 }}</td>
                            <td class="text-center">
                                @if ($feat->location === 'topbar')
                                    <span class="badge badge-light-primary fs-7 fw-bold px-3 py-2">Header Topbar</span>
                                @elseif($feat->location === 'footer')
                                    <span class="badge badge-light-info fs-7 fw-bold px-3 py-2">Footer Bottom</span>
                                @else
                                    <span
                                        class="badge badge-light-secondary text-gray-700 fs-7 fw-bold px-3 py-2">{{ ucfirst($feat->location) }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-3">
                                        <span class="symbol-label bg-light-primary">
                                            <i class="ki-duotone ki-element-plus fs-3 text-primary"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span></i>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-900 fs-6 fw-bold">
                                            {{ app()->getLocale() == 'en' && !empty($feat->name_en) ? $feat->name_en : $feat->name }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <code
                                    class="text-primary bg-light-primary px-2 py-1 rounded fs-7 fw-bold">{{ $feat->feature_key }}</code>
                            </td>
                            <td>
                                <span class="text-gray-600 fs-7">
                                    {{ app()->getLocale() == 'en' && !empty($feat->description_en) ? $feat->description_en : $feat->description }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                    <input class="form-check-input h-25px w-45px js-toggle-feature-status"
                                        type="checkbox" data-id="{{ $feat->id }}"
                                        {{ $feat->is_active ? 'checked' : '' }} />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-10 text-muted">
                                <i class="ki-duotone ki-folder-search fs-3x mb-3"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <div class="fs-6 fw-semibold">
                                    {{ app()->getLocale() == 'en' ? 'No website features found.' : 'Tidak ada fitur website ditemukan.' }}
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
