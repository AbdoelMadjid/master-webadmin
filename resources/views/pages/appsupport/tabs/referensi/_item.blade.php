<!--begin::Tab Item Referensi-->
<div class="card card-flush">
    <!--begin::Card Header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title d-flex flex-wrap align-items-center gap-3">
            <!--begin::Filter Category-->
            <div class="w-250px">
                <select class="form-select form-select-solid" id="filter_kategori_select" onchange="filterItemByKategori(this.value)">
                    <option value="">{{ app()->getLocale() == 'en' ? '-- All Categories --' : '-- Semua Kategori --' }}</option>
                    @foreach ($kategoris as $kat)
                        <option value="{{ $kat->id }}" {{ (string)$selectedKategoriId === (string)$kat->id ? 'selected' : '' }}>
                            {{ $kat->nama }} ({{ $kat->kode }})
                        </option>
                    @endforeach
                </select>
            </div>
            <!--end::Filter Category-->

            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <form action="{{ route('appsupport.referensi') }}" method="GET" class="d-flex align-items-center">
                    <input type="hidden" name="tab" value="item" />
                    @if ($selectedKategoriId)
                        <input type="hidden" name="kategori_id" value="{{ $selectedKategoriId }}" />
                    @endif
                    <input type="text" name="q" value="{{ $activeTab === 'item' ? $searchQuery : '' }}"
                        class="form-control form-control-solid w-250px ps-12"
                        placeholder="{{ app()->getLocale() == 'en' ? 'Search item code or name...' : 'Cari kode atau nama item...' }}" />
                    @if ($searchQuery && $activeTab === 'item')
                        <a href="{{ route('appsupport.referensi', array_merge(['tab' => 'item'], $selectedKategoriId ? ['kategori_id' => $selectedKategoriId] : [])) }}" class="btn btn-icon btn-sm btn-light ms-2"
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
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add New Reference Choice Option' : 'Tambah Opsi Pilihan Item Referensi Baru' }}">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_referensi_item" onclick="resetItemForm()">
                    <i class="ki-duotone ki-plus fs-2"><span class="path1"></span><span class="path2"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Add Item' : 'Tambah Item' }}
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
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_referensi_item">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-50px text-center">#</th>
                        <th class="min-w-175px">{{ app()->getLocale() == 'en' ? 'Category' : 'Kategori' }}</th>
                        <th class="min-w-125px">{{ app()->getLocale() == 'en' ? 'Option Code' : 'Kode Opsi' }}</th>
                        <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Option Label' : 'Nama Label Opsi' }}</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Display Order' : 'Urutan' }}</th>
                        <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Remarks' : 'Keterangan' }}</th>
                        <th class="min-w-100px text-center">{{ app()->getLocale() == 'en' ? 'Status' : 'Status' }}</th>
                        <th class="min-w-125px text-end">{{ app()->getLocale() == 'en' ? 'Actions' : 'Aksi' }}</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @forelse ($items as $index => $itm)
                        <tr>
                            <td class="text-center text-gray-500 fs-7">{{ $index + 1 }}</td>
                            <td>
                                <span class="badge badge-light-primary fw-bold fs-7">
                                    {{ $itm->kategori ? $itm->kategori->nama : '-' }}
                                    <code class="text-muted ms-1">({{ $itm->kategori ? $itm->kategori->kode : '-' }})</code>
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-light-dark fw-bold fs-7 font-monospace px-3 py-2">
                                    {{ $itm->kode }}
                                </span>
                            </td>
                            <td>
                                <span class="text-gray-900 fw-bold fs-6">{{ $itm->nama }}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-circle badge-light-info fw-bold fs-7">
                                    {{ $itm->urutan }}
                                </span>
                            </td>
                            <td>
                                <span class="text-gray-600 fs-7">{{ $itm->keterangan ?: '-' }}</span>
                            </td>
                            <td class="text-center">
                                <div class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                    <input class="form-check-input h-20px w-40px cursor-pointer" type="checkbox"
                                        id="item_switch_{{ $itm->id }}"
                                        {{ $itm->is_active ? 'checked' : '' }}
                                        onchange="toggleItemStatus({{ $itm->id }}, this)"
                                        data-bs-toggle="tooltip" title="{{ app()->getLocale() == 'en' ? 'Toggle item status' : 'Ubah status aktif item' }}" />
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Edit Item' : 'Edit Item' }}">
                                        <button type="button" class="btn btn-icon btn-sm btn-light-warning" onclick="editItem({{ json_encode($itm) }})">
                                            <i class="ki-duotone ki-pencil fs-4"><span class="path1"></span><span class="path2"></span></i>
                                        </button>
                                    </span>
                                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Delete Item' : 'Hapus Item' }}">
                                        <button type="button" class="btn btn-icon btn-sm btn-light-danger" onclick="deleteItem({{ $itm->id }}, '{{ addslashes($itm->nama) }}')">
                                            <i class="ki-duotone ki-trash fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-10 text-muted">
                                <i class="ki-duotone ki-file-deleted fs-3x mb-3 text-muted"><span class="path1"></span><span class="path2"></span></i>
                                <div>{{ app()->getLocale() == 'en' ? 'No reference items found for selected filter.' : 'Tidak ada item referensi yang ditemukan.' }}</div>
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
<!--end::Tab Item Referensi-->
