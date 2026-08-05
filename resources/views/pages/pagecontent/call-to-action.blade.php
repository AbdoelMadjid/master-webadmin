@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {{ app()->getLocale() == 'en' ? 'Page Content' : 'Konten Halaman' }}
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Call to Action (CTA)' : 'Ajakan Bertindak (CTA)' }}
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
                        <i class="ki-duotone ki-mouse-square text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Pre-Footer Call to Action (CTA) Configuration' : 'Konfigurasi Ajakan Bertindak (CTA) Pre-Footer' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Configure single global Call to Action section displayed before footer across website pages.' : 'Atur konfigurasi tunggal seksi ajakan bertindak (CTA) yang tampil di atas footer pada semua halaman website.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_cta_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::CTA Form Card-->
            <div class="card border border-gray-200">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <h3 class="fw-bold text-gray-900 m-0">
                            <i class="ki-duotone ki-setting-2 fs-2 text-primary me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'CTA Content Settings' : 'Pengaturan Konten CTA' }}
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!-- Active Status Switch -->
                        <div
                            class="d-flex align-items-center gap-3 bg-light-primary p-3 rounded border border-primary-subtle">
                            <label class="fs-7 fw-bold text-gray-800 m-0 cursor-pointer" for="cta_is_active">
                                {{ app()->getLocale() == 'en' ? 'CTA Section Visible on Website' : 'Tampilkan Seksi CTA di Website' }}
                            </label>
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input h-20px w-35px cursor-pointer" type="checkbox"
                                    id="cta_is_active" {{ $cta->is_active ? 'checked' : '' }} onchange="toggleCtaStatus()">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body p-6">
                    <form id="kt_cta_settings_form" class="form" action="#" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $cta->id }}">

                        <!-- Title ID & EN -->
                        <div class="row g-9 mb-8">
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2 required">
                                    <span>{{ app()->getLocale() == 'en' ? 'CTA Title (Indonesian)' : 'Judul CTA (Bahasa Indonesia)' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="title" id="title"
                                    value="{{ old('title', $cta->title) }}"
                                    placeholder="e.g. Bergabunglah dengan Universitas Kami" required />
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'CTA Title (English)' : 'Judul CTA (Bahasa Inggris)' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="title_en" id="title_en"
                                    value="{{ old('title_en', $cta->title_en) }}" placeholder="e.g. Join Our University" />
                            </div>
                        </div>

                        <!-- Description ID & EN -->
                        <div class="row g-9 mb-8">
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Description Strategy Text (Indonesian)' : 'Teks Strategi Deskripsi (Bahasa Indonesia)' }}</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="description" id="description" rows="3"
                                    placeholder="Deskripsi singkat ajakan pendaftaran/kontak">{{ old('description', $cta->description) }}</textarea>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Description Strategy Text (English)' : 'Teks Strategi Deskripsi (Bahasa Inggris)' }}</span>
                                </label>
                                <textarea class="form-control form-control-solid" name="description_en" id="description_en" rows="3"
                                    placeholder="Short description of CTA strategy text">{{ old('description_en', $cta->description_en) }}</textarea>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-8"></div>

                        <!-- Primary Button Settings -->
                        <h4 class="fw-bold text-gray-800 mb-6">
                            {{ app()->getLocale() == 'en' ? 'Primary Button Configuration' : 'Konfigurasi Tombol Utama (Primary)' }}
                        </h4>

                        <div class="row g-9 mb-6">
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Primary Button Text (ID)' : 'Teks Tombol Utama (ID)' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="primary_button_text"
                                    id="primary_button_text"
                                    value="{{ old('primary_button_text', $cta->primary_button_text) }}"
                                    placeholder="e.g. Daftar Sekarang" />
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Primary Button Text (EN)' : 'Teks Tombol Utama (EN)' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="primary_button_text_en"
                                    id="primary_button_text_en"
                                    value="{{ old('primary_button_text_en', $cta->primary_button_text_en) }}"
                                    placeholder="e.g. Apply Now" />
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Target URL' : 'URL Target Link' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="primary_button_url"
                                    id="primary_button_url"
                                    value="{{ old('primary_button_url', $cta->primary_button_url) }}"
                                    placeholder="e.g. website/apply-for-all-intake" />
                            </div>
                        </div>

                        <div class="separator separator-dashed my-8"></div>

                        <!-- Secondary Button Settings -->
                        <h4 class="fw-bold text-gray-800 mb-6">
                            {{ app()->getLocale() == 'en' ? 'Secondary Button Configuration' : 'Konfigurasi Tombol Sekunder (Secondary)' }}
                        </h4>

                        <div class="row g-9 mb-8">
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Secondary Button Text (ID)' : 'Teks Tombol Sekunder (ID)' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                    name="secondary_button_text" id="secondary_button_text"
                                    value="{{ old('secondary_button_text', $cta->secondary_button_text) }}"
                                    placeholder="e.g. Hubungi Kami" />
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Secondary Button Text (EN)' : 'Teks Tombol Sekunder (EN)' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                    name="secondary_button_text_en" id="secondary_button_text_en"
                                    value="{{ old('secondary_button_text_en', $cta->secondary_button_text_en) }}"
                                    placeholder="e.g. Contact Us" />
                            </div>
                            <div class="col-md-4 fv-row">
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>{{ app()->getLocale() == 'en' ? 'Target URL' : 'URL Target Link' }}</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="secondary_button_url"
                                    id="secondary_button_url"
                                    value="{{ old('secondary_button_url', $cta->secondary_button_url) }}"
                                    placeholder="e.g. website/contacts" />
                            </div>
                        </div>

                        <!-- Form Submit Actions -->
                        <div class="d-flex align-items-center justify-content-end gap-3 mt-10">
                            <button type="submit" id="kt_cta_submit_btn" class="btn btn-primary min-w-150px">
                                <i class="ki-duotone ki-check fs-2 me-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Save CTA Changes' : 'Simpan Perubahan CTA' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::CTA Form Card-->

        </div>
    </div>

    <!-- Operational Guide Modal -->
    @include('pages.pagecontent.partials.call-to-action-help-modal')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#kt_cta_settings_form').on('submit', function(e) {
                e.preventDefault();
                const submitBtn = $('#kt_cta_submit_btn');
                submitBtn.prop('disabled', true);

                let postData = {
                    _token: '{{ csrf_token() }}',
                    _method: 'PUT',
                    title: $('#title').val(),
                    title_en: $('#title_en').val(),
                    description: $('#description').val(),
                    description_en: $('#description_en').val(),
                    primary_button_text: $('#primary_button_text').val(),
                    primary_button_text_en: $('#primary_button_text_en').val(),
                    primary_button_url: $('#primary_button_url').val(),
                    secondary_button_text: $('#secondary_button_text').val(),
                    secondary_button_text_en: $('#secondary_button_text_en').val(),
                    secondary_button_url: $('#secondary_button_url').val(),
                    is_active: $('#cta_is_active').is(':checked') ? 1 : 0
                };

                $.ajax({
                    url: `{{ route('pagecontent.call-to-action.update', $cta->id) }}`,
                    type: 'POST',
                    data: postData,
                    success: function(response) {
                        submitBtn.prop('disabled', false);
                        if (response.success) {
                            SwalHelper.success(response.message);
                        }
                    },
                    error: function(xhr) {
                        submitBtn.prop('disabled', false);
                        SwalHelper.validationError(xhr);
                    }
                });
            });
        });

        function toggleCtaStatus() {
            $.ajax({
                url: `{{ route('pagecontent.call-to-action.toggle-status', $cta->id) }}`,
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
    </script>
@endsection
