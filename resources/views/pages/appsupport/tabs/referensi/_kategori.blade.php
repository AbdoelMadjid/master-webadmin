<!--begin::Tab Kategori Referensi-->
<div class="card card-flush">
    <!--begin::Card Header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <form action="{{ route('appsupport.referensi') }}" method="GET" class="d-flex align-items-center">
                    <input type="hidden" name="tab" value="kategori" />
                    <input type="text" name="q" value="{{ $activeTab === 'kategori' ? $searchQuery : '' }}"
                        class="form-control form-control-solid w-250px ps-12"
                        placeholder="{{ app()->getLocale() == 'en' ? 'Search category code or name...' : 'Cari kode atau nama kategori...' }}" />
                    @if ($searchQuery && $activeTab === 'kategori')
                        <a href="{{ route('appsupport.referensi', ['tab' => 'kategori']) }}" class="btn btn-icon btn-sm btn-light ms-2"
                            data-bs-toggle="tooltip" title="{{ app()->getLocale() == 'en' ? 'Reset Search' : 'Reset Pencarian' }}">
                            <i class="ki-duotone ki-cross fs-3"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                    @endif
                </form>
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar d-flex align-items-center gap-2">
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add New Reference Category' : 'Tambah Kategori Referensi Baru' }}">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_referensi_kategori" onclick="resetKategoriForm()">
                    <i class="ki-duotone ki-plus fs-2"><span class="path1"></span><span class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Add Category' : 'Tambah Kategori' }}
                </button>
            </span>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card Header-->

    <!--begin::Card Body-->
    <div class="card-body pt-0">
        <!--begin::Table responsive-->
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_referensi_kategori">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-50px text-center">#</th>
                        <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Category Code' : 'Kode Kategori' }}</th>
                        <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Category Name' : 'Nama Kategori' }}</th>
                        <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Description' : 'Deskripsi' }}</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Items Count' : 'Jumlah Item' }}</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Type' : 'Tipe' }}</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Status' : 'Status' }}</th>
                        <th class="min-w-125px text-end">{{ app()->getLocale() == 'en' ? 'Actions' : 'Aksi' }}</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @forelse ($kategoris as $index => $kat)
                        <tr>
                            <td class="text-center text-gray-500 fs-7">{{ $index + 1 }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-light-primary fw-bold fs-7 px-3 py-2 text-uppercase">
                                        <i class="ki-duotone ki-key text-primary me-1"><span class="path1"></span><span class="path2"></span></i>
                                        {{ $kat->kode }}
                                    </span>
                                </div>
                            </td>
                            <td>
                                <span class="text-gray-900 fw-bold fs-6">{{ $kat->nama }}</span>
                            </td>
                            <td>
                                <span class="text-gray-600 fs-7">{{ $kat->deskripsi ?: '-' }}</span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('appsupport.referensi', ['tab' => 'item', 'kategori_id' => $kat->id]) }}" class="badge badge-light-info fw-bold fs-7 hover-elevate-up" data-bs-toggle="tooltip" title="{{ app()->getLocale() == 'en' ? 'View items in this category' : 'Lihat item dalam kategori ini' }}">
                                    <i class="ki-duotone ki-element-plus text-info me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                    {{ $kat->items_count }} Items
                                </a>
                            </td>
                            <td class="text-center">
                                @if ($kat->is_system)
                                    <span class="badge badge-light-danger fw-bold fs-8" data-bs-toggle="tooltip" title="{{ app()->getLocale() == 'en' ? 'System core category (protected)' : 'Kategori acuan sistem (dilindungi)' }}">
                                        <i class="ki-duotone ki-shield-tick text-danger me-1"><span class="path1"></span><span class="path2"></span></i>
                                        System
                                    </span>
                                @else
                                    <span class="badge badge-light-secondary fw-bold fs-8">Custom</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                    <input class="form-check-input h-20px w-40px cursor-pointer" type="checkbox"
                                        id="kategori_switch_{{ $kat->id }}"
                                        {{ $kat->is_active ? 'checked' : '' }}
                                        onchange="toggleKategoriStatus({{ $kat->id }}, this)"
                                        data-bs-toggle="tooltip" title="{{ app()->getLocale() == 'en' ? 'Toggle category status' : 'Ubah status aktif kategori' }}" />
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit Category' : 'Edit Kategori' }}">
                                        <button type="button" class="btn btn-icon btn-sm btn-light-warning" onclick="editKategori({{ json_encode($kat) }})">
                                            <i class="ki-duotone ki-pencil fs-4"><span class="path1"></span><span class="path2"></span></i>
                                        </button>
                                    </span>

                                    @if (!$kat->is_system)
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Delete Category' : 'Hapus Kategori' }}">
                                            <button type="button" class="btn btn-icon btn-sm btn-light-danger" onclick="deleteKategori({{ $kat->id }}, '{{ addslashes($kat->nama) }}')">
                                                <i class="ki-duotone ki-trash fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            </button>
                                        </span>
                                    @else
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'System category cannot be deleted' : 'Kategori sistem tidak dapat dihapus' }}">
                                            <button type="button" class="btn btn-icon btn-sm btn-light-secondary disabled" disabled>
                                                <i class="ki-duotone ki-lock fs-4"><span class="path1"></span><span class="path2"></span></i>
                                            </button>
                                        </span>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-10 text-muted">
                                <i class="ki-duotone ki-file-deleted fs-3x mb-3 text-muted"><span class="path1"></span><span class="path2"></span></i>
                                <div>{{ app()->getLocale() == 'en' ? 'No reference categories found.' : 'Tidak ada data kategori referensi.' }}</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!--end::Table responsive-->
    </div>
    <!--end::Card Body-->
</div>
<!--end::Tab Kategori Referensi-->
