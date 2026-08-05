@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {{ app()->getLocale() == 'en' ? 'Page Content' : 'Konten Halaman' }}
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Homepage Slide Banner' : 'Slide Banner Beranda' }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Page Header & Guide Action-->
            <div
                class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-picture text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Homepage Slide Banner Manager' : 'Kelola Slide Banner Beranda' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage main hero carousel sliders displayed at the top of the homepage.' : 'Kelola banner slider utama yang tampil di bagian paling atas beranda website.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Add Slide Banner' : 'Tambah Slide Banner' }}">
                        <button type="button"
                            class="btn btn-primary shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4"
                            onclick="openAddBannerModal()">
                            <i class="ki-duotone ki-plus fs-2 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span
                                class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Add Banner' : 'Tambah Banner' }}</span>
                        </button>
                    </span>

                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button"
                            class="btn btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_slide_banner_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Table Card-->
            <div class="card border border-gray-200">
                <div class="card-body p-6">
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4 min-w-50px rounded-start">#</th>
                                    <th class="min-w-200px">
                                        {{ app()->getLocale() == 'en' ? 'Title Prefix & Highlight' : 'Judul Prefix & Highlight' }}
                                    </th>
                                    <th class="min-w-200px">{{ app()->getLocale() == 'en' ? 'Description' : 'Deskripsi' }}
                                    </th>
                                    <th class="min-w-125px text-center">
                                        {{ app()->getLocale() == 'en' ? 'Background Image' : 'Gambar Background' }}</th>
                                    <th class="min-w-100px text-center">
                                        {{ app()->getLocale() == 'en' ? 'Order' : 'Urutan' }}</th>
                                    <th class="min-w-100px text-center">
                                        {{ app()->getLocale() == 'en' ? 'Status' : 'Status' }}</th>
                                    <th class="pe-4 min-w-125px text-end rounded-end">
                                        {{ app()->getLocale() == 'en' ? 'Actions' : 'Aksi' }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($banners as $index => $banner)
                                    <tr>
                                        <td class="ps-4 fw-bold text-gray-700">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center flex-wrap gap-1 fs-6">
                                                    @if ($banner->title_prefix || $banner->title_prefix_en)
                                                        <span class="text-gray-700 fw-medium">
                                                            {{ app()->getLocale() == 'en' && !empty($banner->title_prefix_en) ? $banner->title_prefix_en : $banner->title_prefix }}
                                                        </span>
                                                    @endif
                                                    <span class="text-primary fw-bold">
                                                        {{ app()->getLocale() == 'en' && !empty($banner->title_highlight_en) ? $banner->title_highlight_en : $banner->title_highlight }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-700 fs-7">
                                                {{ Str::limit(app()->getLocale() == 'en' && !empty($banner->description_en) ? $banner->description_en : $banner->description, 80) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            @if ($banner->image_url)
                                                <a href="javascript:void(0)"
                                                    onclick="openImageLightbox({{ $index }})"
                                                    class="d-inline-block border rounded overflow-hidden shadow-xs"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ app()->getLocale() == 'en' ? 'Click to View Image Gallery' : 'Klik untuk Membuka Galeri Gambar' }}">
                                                    <img src="{{ asset($banner->image_url) }}" alt="Banner"
                                                        style="width: 75px; height: 48px; object-fit: cover; display: block; pointer-events: none;" />
                                                </a>
                                            @else
                                                <span
                                                    class="text-muted fs-7 italic">{{ app()->getLocale() == 'en' ? 'Default Hero BG' : 'BG Default' }}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-secondary fw-bold fs-7">{{ $banner->order }}</span>
                                        </td>
                                        <td class="text-center">
                                            <div
                                                class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input h-20px w-35px cursor-pointer" type="checkbox"
                                                    {{ $banner->is_active ? 'checked' : '' }}
                                                    onchange="toggleBannerStatus({{ $banner->id }})">
                                            </div>
                                        </td>
                                        <td class="pe-4 text-end">
                                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="{{ app()->getLocale() == 'en' ? 'Edit Slide Banner' : 'Edit Slide Banner' }}">
                                                <button type="button"
                                                    class="btn btn-icon btn-light-primary btn-sm me-1 shadow-xs"
                                                    onclick="editBannerModal({{ json_encode($banner) }})">
                                                    <i class="ki-duotone ki-pencil fs-4"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </button>
                                            </span>

                                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="{{ app()->getLocale() == 'en' ? 'Delete Slide Banner' : 'Hapus Slide Banner' }}">
                                                <button type="button"
                                                    class="btn btn-icon btn-light-danger btn-sm shadow-xs"
                                                    onclick="deleteBannerItem({{ $banner->id }}, '{{ addslashes($banner->title_highlight) }}')">
                                                    <i class="ki-duotone ki-trash fs-4"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span></i>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-10">
                                            <div class="d-flex flex-column align-items-center">
                                                <i class="ki-duotone ki-picture fs-3x text-muted mb-3"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <span class="text-muted fs-6 fw-semibold mb-3">
                                                    {{ app()->getLocale() == 'en' ? 'No slide banners found.' : 'Belum ada slide banner beranda.' }}
                                                </span>
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    onclick="openAddBannerModal()">
                                                    <i class="ki-duotone ki-plus fs-3 me-1"></i>
                                                    {{ app()->getLocale() == 'en' ? 'Add First Slide Banner' : 'Tambah Slide Banner Pertama' }}
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end::Table Card-->

        </div>
    </div>

    <!-- Image Lightbox Gallery Modal -->
    <div class="modal fade" id="kt_modal_image_lightbox" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0 shadow-none">
                <div class="modal-header border-0 pb-2 justify-content-end">
                    <button type="button"
                        class="btn btn-sm btn-icon btn-active-color-white bg-black bg-opacity-50 text-white rounded-circle"
                        data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1 text-white"><span class="path1"></span><span
                                class="path2"></span></i>
                    </button>
                </div>
                <div class="modal-body p-0 text-center">
                    <div id="bannerLightboxCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            @foreach ($banners as $i => $banner)
                                @if ($banner->image_url)
                                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}"
                                        id="lightbox_slide_{{ $i }}">
                                        <div class="d-flex flex-column align-items-center">
                                            <img src="{{ asset($banner->image_url) }}"
                                                class="d-block img-fluid rounded shadow-lg"
                                                style="max-height: 75vh; object-fit: contain;"
                                                alt="Banner Slide {{ $i + 1 }}">
                                            <div
                                                class="mt-3 bg-black bg-opacity-75 text-white px-4 py-2 rounded-pill fs-6 fw-semibold">
                                                {{ $banner->title_prefix ? $banner->title_prefix . ' ' : '' }}{{ $banner->title_highlight }}
                                                ({{ $i + 1 }}/{{ $banners->count() }})
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#bannerLightboxCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-black bg-opacity-50 rounded-circle p-3"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#bannerLightboxCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-black bg-opacity-50 rounded-circle p-3"
                                aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form Partial -->
    @include('pages.pagecontent.partials.slide-banner-form')

    <!-- Operational Guide Modal -->
    @include('pages.pagecontent.partials.slide-banner-help-modal')
@endsection

@section('scripts')
    <script>
        function openImageLightbox(index) {
            const carouselEl = document.getElementById('bannerLightboxCarousel');
            if (carouselEl) {
                $('#bannerLightboxCarousel .carousel-item').removeClass('active');
                $(`#lightbox_slide_${index}`).addClass('active');

                try {
                    const carousel = bootstrap.Carousel.getOrCreateInstance(carouselEl);
                    carousel.to(index);
                } catch (e) {}
            }
            $('#kt_modal_image_lightbox').modal('show');
        }

        function updateImagePreview(url) {
            if (url && url.trim() !== '') {
                let fullUrl = url.startsWith('http') ? url : `{{ asset('') }}${url.replace(/^\/+/, '')}`;
                $('#banner_image_preview').attr('src', fullUrl);
                $('#banner_image_preview_wrapper').show();
            } else {
                $('#banner_image_preview_wrapper').hide();
            }
        }

        function openAddBannerModal() {
            $('#banner_id').val('');
            $('#kt_modal_slide_banner_form')[0].reset();
            $('#banner_image_file').val('');
            $('#banner_is_active').prop('checked', true);
            updateImagePreview('');
            $('#bannerModalTitle').text('{{ app()->getLocale() == 'en' ? 'Add Slide Banner' : 'Tambah Slide Banner' }}');
            $('#kt_modal_slide_banner').modal('show');
        }

        function editBannerModal(data) {
            $('#banner_id').val(data.id);
            $('#banner_image_file').val('');
            $('#banner_title_prefix').val(data.title_prefix);
            $('#banner_title_prefix_en').val(data.title_prefix_en);
            $('#banner_title_highlight').val(data.title_highlight);
            $('#banner_title_highlight_en').val(data.title_highlight_en);
            $('#banner_description').val(data.description);
            $('#banner_description_en').val(data.description_en);
            $('#banner_image_url').val(data.image_url);
            $('#banner_button_text').val(data.button_text);
            $('#banner_button_text_en').val(data.button_text_en);
            $('#banner_button_url').val(data.button_url);
            $('#banner_order').val(data.order);
            $('#banner_is_active').prop('checked', !!data.is_active);

            updateImagePreview(data.image_url);

            $('#bannerModalTitle').text('{{ app()->getLocale() == 'en' ? 'Edit Slide Banner' : 'Edit Slide Banner' }}');
            $('#kt_modal_slide_banner').modal('show');
        }

        $(document).ready(function() {
            $('#banner_image_file').on('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#banner_image_preview').attr('src', e.target.result);
                        $('#banner_image_preview_wrapper').show();
                    };
                    reader.readAsDataURL(file);
                }
            });

            $('#banner_image_url').on('input change', function() {
                if (!$('#banner_image_file').val()) {
                    updateImagePreview($(this).val());
                }
            });

            $('#kt_modal_slide_banner_form').on('submit', function(e) {
                e.preventDefault();
                const id = $('#banner_id').val();
                const url = id ? `{{ url('pagecontent/slide-banner') }}/${id}` :
                    `{{ route('pagecontent.slide-banner.store') }}`;

                let formData = new FormData(this);
                if (id) {
                    formData.append('_method', 'PUT');
                }
                formData.set('is_active', $('#banner_is_active').is(':checked') ? '1' : '0');

                const submitBtn = $('#kt_modal_slide_banner_submit');
                submitBtn.prop('disabled', true);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        submitBtn.prop('disabled', false);
                        if (response.success) {
                            $('#kt_modal_slide_banner').modal('hide');
                            SwalHelper.success(response.message).then(() => {
                                window.location.reload();
                            });
                        }
                    },
                    error: function(xhr) {
                        submitBtn.prop('disabled', false);
                        SwalHelper.validationError(xhr);
                    }
                });
            });
        });

        function toggleBannerStatus(id) {
            $.ajax({
                url: `{{ url('pagecontent/slide-banner') }}/${id}/toggle-status`,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        SwalHelper.success(response.message);
                    }
                },
                error: function(xhr) {
                    SwalHelper.error(xhr.responseJSON?.message || 'Error updating status');
                }
            });
        }

        function deleteBannerItem(id, name) {
            SwalHelper.confirmDelete(name, function() {
                $.ajax({
                    url: `{{ url('pagecontent/slide-banner') }}/${id}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            SwalHelper.success(response.message).then(() => {
                                window.location.reload();
                            });
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.error(xhr.responseJSON?.message || 'Error deleting item');
                    }
                });
            });
        }
    </script>
@endsection
