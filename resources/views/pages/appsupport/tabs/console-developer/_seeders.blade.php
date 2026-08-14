{{-- Sub-Tab: Seeder Files Inspector --}}
@php
    $dbSeedersCount = collect($seeders ?? [])->where('is_runnable', true)->count();
    $configSeedersCount = collect($seeders ?? [])->where('is_runnable', false)->count();
    $totalSeedersCount = count($seeders ?? []);
@endphp

<div class="row g-5 mb-6">
    {{-- Total Seeder Files Card --}}
    <div class="col-md-4">
        <div class="card card-flush bg-light-primary border border-primary h-100 p-6">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-45px symbol-circle bg-primary me-4">
                    <i class="ki-duotone ki-database fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <div>
                    <div class="fs-2fw-bold text-gray-900">{{ $totalSeedersCount }}</div>
                    <div class="text-muted fw-semibold fs-7">
                        {{ app()->getLocale() == 'en' ? 'Total Seeder Files' : 'Total Berkas Seeder' }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Database Seeders Card --}}
    <div class="col-md-4">
        <div class="card card-flush bg-light-success border border-success h-100 p-6">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-45px symbol-circle bg-success me-4">
                    <i class="ki-duotone ki-code fs-1 text-white"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <div>
                    <div class="fs-2 fw-bold text-gray-900">{{ $dbSeedersCount }}</div>
                    <div class="text-muted fw-semibold fs-7">
                        {{ app()->getLocale() == 'en' ? 'Runnable Seeder Classes' : 'Class Seeder Database' }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Config Seeders Card --}}
    <div class="col-md-4">
        <div class="card card-flush bg-light-info border border-info h-100 p-6">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-45px symbol-circle bg-info me-4">
                    <i class="ki-duotone ki-element-11 fs-1 text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                </div>
                <div>
                    <div class="fs-2 fw-bold text-gray-900">{{ $configSeedersCount }}</div>
                    <div class="text-muted fw-semibold fs-7">
                        {{ app()->getLocale() == 'en' ? 'Menu Seeder Configurations' : 'Konfigurasi Menu Seeder' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Action Toolbar & Seeder List Table --}}
<div class="card card-flush shadow-sm">
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <div class="card-title">
            <h3 class="card-title fw-bold text-gray-900 m-0">
                <i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Seeder Files Directory' : 'Daftar Berkas Seeder System' }}
            </h3>
        </div>
        <div class="card-toolbar">
            <span data-bs-toggle="tooltip" data-bs-placement="top"
                title="{{ app()->getLocale() == 'en' ? 'Run all seeders via php artisan db:seed' : 'Jalankan seluruh seeder via php artisan db:seed' }}">
                <button type="button" class="btn btn-sm btn-success shadow-xs d-inline-flex align-items-center" onclick="confirmRunAllSeeders()">
                    <i class="ki-duotone ki-play fs-3 me-1"><span class="path1"></span><span class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Run All Seeders (db:seed)' : 'Jalankan Semua Seeder' }}
                </button>
            </span>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-4 mb-0">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-50px text-center">#</th>
                        <th class="min-w-250px">{{ app()->getLocale() == 'en' ? 'File Name & Path' : 'Nama File & Path' }}</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Seeder Category' : 'Kategori Seeder' }}</th>
                        <th class="min-w-125px">{{ app()->getLocale() == 'en' ? 'Size' : 'Ukuran' }}</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Last Modified' : 'Terakhir Diubah' }}</th>
                        <th class="min-w-150px text-end">{{ app()->getLocale() == 'en' ? 'Actions' : 'Aksi' }}</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @forelse ($seeders ?? [] as $index => $item)
                        <tr>
                            <td class="text-center fw-bold text-gray-700">{{ $index + 1 }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-3">
                                        <span class="symbol-label {{ $item['is_runnable'] ? 'bg-light-primary text-primary' : 'bg-light-info text-info' }}">
                                            <i class="ki-duotone {{ $item['is_runnable'] ? 'ki-code' : 'ki-file' }} fs-3">
                                                <span class="path1"></span><span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-900 fw-bold hover-primary fs-6">{{ $item['filename'] }}</span>
                                        <span class="text-muted fs-8 font-monospace">{{ $item['path'] }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if ($item['is_runnable'])
                                    <span class="badge badge-light-primary fw-bold">
                                        <i class="ki-duotone ki-check-circle text-primary fs-8 me-1"><span class="path1"></span><span class="path2"></span></i>
                                        {{ $item['type'] }}
                                    </span>
                                @else
                                    <span class="badge badge-light-info fw-bold">
                                        <i class="ki-duotone ki-element-11 text-info fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                        {{ $item['type'] }}
                                    </span>
                                @endif
                            </td>
                            <td><span class="text-gray-800 fw-semibold">{{ $item['size'] }}</span></td>
                            <td><span class="text-gray-700 fs-7">{{ $item['modified_at'] }}</span></td>
                            <td class="text-end">
                                <div class="d-flex align-items-center justify-content-end gap-2">
                                    {{-- Action 1: View Code --}}
                                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="{{ app()->getLocale() == 'en' ? 'Inspect Code' : 'Lihat Kode Seeder' }}">
                                        <button type="button" class="btn btn-icon btn-light-primary btn-active-primary shadow-xs w-35px h-35px p-0"
                                            onclick="openSeederCodeViewer('{{ $item['path'] }}')">
                                            <i class="ki-duotone ki-eye fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        </button>
                                    </span>

                                    {{-- Action 2: Run Seeder (only if runnable class) --}}
                                    @if ($item['is_runnable'])
                                        <span data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="{{ app()->getLocale() == 'en' ? 'Run ' . $item['class_name'] : 'Jalankan Seeder ' . $item['class_name'] }}">
                                            <button type="button" class="btn btn-icon btn-light-success btn-active-success shadow-xs w-35px h-35px p-0"
                                                onclick="triggerRunSeeder('{{ $item['class_name'] }}')">
                                                <i class="ki-duotone ki-play fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span></i>
                                            </button>
                                        </span>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-10 text-muted fs-6">
                                <i class="ki-duotone ki-file-slash fs-3x text-muted mb-3 d-block"><span class="path1"></span><span class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'No seeder files found in directory.' : 'Tidak ada file seeder yang ditemukan.' }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
