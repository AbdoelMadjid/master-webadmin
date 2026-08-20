@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            App Support
        @endslot
        @slot('li_2')
            App Profile
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Page Header & Guide Action-->
            <div
                class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-setting-2 text-primary fs-2x"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Application Profile & Branding Settings' : 'Pengaturan Profil & Identitas Aplikasi' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage application name, logo, favicon, and global footer copyright text.' : 'Kelola identitas, logo, favicon, dan hak cipta footer aplikasi Anda.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button"
                            class="btn btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_app_profil_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Card App Profil-->
            <div class="card card-flush">
                <!--begin::Card Body-->
                <div class="card-body pt-6">
                    @include('pages.appsupport.partials.app-profil-form')
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card App Profil-->

        </div>
        <!--end::Content container-->
    </div>
    @include('pages.appsupport.partials.app-profil-help-modal')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/custom/crud-helper.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Live Preview untuk Input Gambar (Logo & Favicon)
            $(document).on('change', '.image-input-file', function() {
                var input = this;
                var previewImgSelector = $(input).data('preview');
                var containerSelector = $(input).data('container');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(previewImgSelector).attr('src', e.target.result);
                        $(containerSelector).removeClass('d-none');
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            });

            // AJAX Form Submit Handler
            $('#kt_form_app_profil').on('submit', function(e) {
                e.preventDefault();

                var form = this;
                var formData = new FormData(form);
                var submitBtn = $('#btn_submit_profil');

                submitBtn.attr('data-kt-indicator', 'on').prop('disabled', true);

                $.ajax({
                    url: $(form).attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);

                        if (response.success) {
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.success(response.message, function() {
                                    location.reload();
                                });
                            }
                        } else {
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.error(response.message);
                            }
                        }
                    },
                    error: function(xhr) {
                        submitBtn.removeAttr('data-kt-indicator').prop('disabled', false);
                        if (typeof SwalHelper !== 'undefined') {
                            if (xhr.status === 422) {
                                SwalHelper.validationError(xhr);
                            } else {
                                var msg = xhr.responseJSON && xhr.responseJSON.message ? xhr
                                    .responseJSON.message :
                                    'Terjadi kesalahan saat menyimpan data.';
                                SwalHelper.error(msg);
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
