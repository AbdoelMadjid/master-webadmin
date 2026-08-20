@extends('layouts.index')

@section('title', app()->getLocale() == 'en' ? 'Frontpage Theme Management' : 'Manajemen Tema Halaman Depan')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            App Support
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Frontpage Theme Management' : 'Manajemen Tema Halaman Depan' }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!-- Standardized Page Header Banner Card -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="{{ formatIconClass('ki-duotone ki-element-11') }} text-primary fs-2x">
                            @for ($i = 1; $i <= keenicon_paths('ki-element-11', 4); $i++)
                                <span class="path{{ $i }}"></span>
                            @endfor
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Frontpage Theme Management' : 'Manajemen Tema Halaman Depan' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage, activate, and preview public website landing page themes.' : 'Kelola, aktifkan, dan pratinjau tema tampilan utama beranda website publik.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0" data-bs-toggle="modal" data-bs-target="#kt_modal_theme_frontpage_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>

            <!-- Sub-Tab Navigation Header -->
            <div class="card card-flush shadow-xs border border-gray-200 mb-6">
                <div class="card-header border-0 pt-3 pb-0">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'theme-list' ? 'active' : '' }}" href="{{ route('appsupport.theme-frontpage', ['tab' => 'theme-list']) }}">
                                <i class="ki-duotone ki-element-11 fs-4 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Theme List' : 'Daftar Tema' }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'preview' ? 'active' : '' }}" href="{{ route('appsupport.theme-frontpage', ['tab' => 'preview']) }}">
                                <i class="ki-duotone ki-screen fs-4 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Live Preview' : 'Pratinjau Live' }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Dynamic Sub-Tab Partial Include -->
            @include('pages.appsupport.tabs.theme-frontpage._' . str_replace('-', '_', $activeTab))

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->

<!-- Bilingual Operational Guide Modal -->
@include('pages.appsupport.partials.theme-frontpage-help-modal')
@endsection

@section('scripts')
<script>
    function activateTheme(id, name) {
        SwalHelper.confirmDelete(
            "{{ app()->getLocale() == 'en' ? 'activate theme' : 'mengaktifkan tema' }} '" + name + "'",
            function() {
                $.ajax({
                    url: "{{ url('appsupport/theme-frontpage/activate') }}/" + id,
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if(response.success) {
                            SwalHelper.success(response.message);
                            setTimeout(function() {
                                window.location.reload();
                            }, 1200);
                        } else {
                            SwalHelper.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        SwalHelper.validationError(xhr);
                    }
                });
            }
        );
    }

    function openAddThemeModal() {
        $('#theme_form')[0].reset();
        $('#theme_id').val('');
        $('#_method_field').val('POST');
        $('#theme_modal_title').text("{{ app()->getLocale() == 'en' ? 'Add Frontpage Theme' : 'Tambah Tema Beranda' }}");
        $('#kt_modal_theme_form').modal('show');
    }

    function openEditThemeModal(theme) {
        $('#theme_form')[0].reset();
        $('#theme_id').val(theme.id);
        $('#_method_field').val('PUT');
        $('#theme_name').val(theme.name);
        $('#theme_name_en').val(theme.name_en);
        $('#theme_slug').val(theme.slug);
        $('#theme_view_path').val(theme.view_path);
        $('#theme_author').val(theme.author);
        $('#theme_version').val(theme.version);
        $('#theme_description').val(theme.description);
        $('#theme_description_en').val(theme.description_en);

        $('#theme_modal_title').text("{{ app()->getLocale() == 'en' ? 'Edit Frontpage Theme' : 'Edit Tema Beranda' }}");
        $('#kt_modal_theme_form').modal('show');
    }

    function saveThemeForm(e) {
        e.preventDefault();
        var id = $('#theme_id').val();
        var isEdit = id ? true : false;
        var url = isEdit ? "{{ url('appsupport/theme-frontpage') }}/" + id : "{{ route('appsupport.theme-frontpage.store') }}";

        var formData = new FormData($('#theme_form')[0]);

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response.success) {
                    $('#kt_modal_theme_form').modal('hide');
                    SwalHelper.success(response.message);
                    setTimeout(function() {
                        window.location.reload();
                    }, 1200);
                } else {
                    SwalHelper.error(response.message);
                }
            },
            error: function(xhr) {
                SwalHelper.validationError(xhr);
            }
        });
    }

    function deleteTheme(id, name) {
        SwalHelper.confirmDelete(name, function() {
            $.ajax({
                url: "{{ url('appsupport/theme-frontpage') }}/" + id,
                type: "DELETE",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if(response.success) {
                        SwalHelper.success(response.message);
                        setTimeout(function() {
                            window.location.reload();
                        }, 1200);
                    } else {
                        SwalHelper.error(response.message);
                    }
                },
                error: function(xhr) {
                    SwalHelper.validationError(xhr);
                }
            });
        });
    }

    function setPreviewDevice(device) {
        var wrapper = $('#preview_frame_wrapper');
        $('#preview_device_group button').removeClass('active');
        if (device === 'desktop') {
            wrapper.css('max-width', '100%');
            $('#preview_device_group button:nth-child(1)').addClass('active');
        } else if (device === 'tablet') {
            wrapper.css('max-width', '768px');
            $('#preview_device_group button:nth-child(2)').addClass('active');
        } else if (device === 'mobile') {
            wrapper.css('max-width', '375px');
            $('#preview_device_group button:nth-child(3)').addClass('active');
        }
    }
</script>
@endsection