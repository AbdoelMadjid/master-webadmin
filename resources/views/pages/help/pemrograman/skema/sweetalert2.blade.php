@extends('layouts.index')

@section('styles')
    @include('pages.help.pemrograman._schema-ui')
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Help
        @endslot
        @slot('li_2')
            {{ __('help.skema_pemrograman') }}
        @endslot
        @slot('li_3')
            SweetAlert2 (SwalHelper)
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">{{ __('help.skema') }} > SweetAlert2</span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.sweetalert2.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.sweetalert2.hero_lead') }}
                    </p>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. STANDARDIZATION ARCHITECTURE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4><i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Global JS Helper Philosophy (<code>SwalHelper</code>)</h4>
                            <p class="fs-7 text-gray-700">
                                To maintain consistent UX and clean codebase architecture across all Metronic views, inline verbose <code>Swal.fire({...})</code> configurations are prohibited in Blade views. Always use the global helper <code>SwalHelper</code>:
                            </p>
                            <div class="row g-4 mt-1">
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed">
                                        <h5 class="fw-bold fs-6 text-success">1. Success Toast / Modal</h5>
                                        <code>SwalHelper.success(msg)</code>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h5 class="fw-bold fs-6 text-danger">2. General Error Alert</h5>
                                        <code>SwalHelper.error(msg)</code>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed">
                                        <h5 class="fw-bold fs-6 text-warning">3. 422 XHR Validation</h5>
                                        <code>SwalHelper.validationError(xhr)</code>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed">
                                        <h5 class="fw-bold fs-6 text-info">4. Delete Prompt</h5>
                                        <code>SwalHelper.confirmDelete(name, cb)</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. SUCCESS & GENERAL ERROR METHODS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Success & Error Dialogs</h4>
                            <pre class="schema-code"><code>// Success Alert Notification:
SwalHelper.success('Data record saved successfully.');

// General Error Notification:
SwalHelper.error('An unexpected server error occurred.');</code></pre>
                            <div class="schema-flow mt-3">
                                <div class="schema-step">
                                    <strong><code>SwalHelper.success(message)</code>:</strong> Displays a sleek success modal with a custom confirm button, auto-closing toast option, and Metronic styling.
                                </div>
                                <div class="schema-step">
                                    <strong><code>SwalHelper.error(message)</code>:</strong> Displays an error alert with red styling, suitable for catching server 500 exceptions or failed actions.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. 422 XHR VALIDATION ERROR METHOD -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-information fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Automatic 422 XHR Validation Handler</h4>
                            <pre class="schema-code"><code>// Handling AJAX Form Request Validation Error:
$.ajax({
    url: '/appsupport/app-profil',
    type: 'POST',
    data: formData,
    error: function(xhr) {
        if (xhr.status === 422) {
            SwalHelper.validationError(xhr);
        } else {
            SwalHelper.error(xhr.responseJSON?.message || 'Action failed.');
        }
    }
});</code></pre>
                            <div class="schema-note mt-3">
                                <code>SwalHelper.validationError(xhr)</code> parses the Laravel <code>errors</code> object inside <code>xhr.responseJSON</code>, automatically rendering formatted bullet points inside the SweetAlert2 body.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. DELETE CONFIRMATION DIALOG -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4><i class="ki-duotone ki-trash fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Standardized Delete Confirmation Prompt</h4>
                            <p class="fs-7 text-gray-700">
                                When performing record deletion via DataTables or button triggers, invoke <code>SwalHelper.confirmDelete</code> to present a standardized modal prompt:
                            </p>
                            <pre class="schema-code"><code>// Example in DataTables Action Column:
$(document).on('click', '.btn-delete', function() {
    const itemId = $(this).data('id');
    const itemName = $(this).data('name');

    SwalHelper.confirmDelete(itemName, function() {
        $.ajax({
            url: `/manajemenpengguna/user/${itemId}`,
            type: 'DELETE',
            data: { _token: '{{ csrf_token() }}' },
            success: function(response) {
                SwalHelper.success(response.message);
                $('#kt_table_users').DataTable().ajax.reload();
            },
            error: function(xhr) {
                SwalHelper.error(xhr.responseJSON?.message || 'Delete operation failed.');
            }
        });
    });
});</code></pre>
                        </div>
                    </div>
                </div>
                @else
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ARSITEKTUR STANDARISASI -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4><i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Filosofi Helper Global JS (<code>SwalHelper</code>)</h4>
                            <p class="fs-7 text-gray-700">
                                Untuk menjaga konsistensi UX dan kebersihan arsitektur codebase di seluruh Blade view, penulisan konfigurasi <code>Swal.fire({...})</code> secara inline sangat dilarang. Selalu gunakan helper terpusat <code>SwalHelper</code>:
                            </p>
                            <div class="row g-4 mt-1">
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-success rounded border border-success border-dashed">
                                        <h5 class="fw-bold fs-6 text-success">1. Notifikasi Sukses</h5>
                                        <code>SwalHelper.success(msg)</code>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-danger rounded border border-danger border-dashed">
                                        <h5 class="fw-bold fs-6 text-danger">2. Alert Error Umum</h5>
                                        <code>SwalHelper.error(msg)</code>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-warning rounded border border-warning border-dashed">
                                        <h5 class="fw-bold fs-6 text-warning">3. Validasi 422 XHR</h5>
                                        <code>SwalHelper.validationError(xhr)</code>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 bg-light-info rounded border border-info border-dashed">
                                        <h5 class="fw-bold fs-6 text-info">4. Konfirmasi Hapus</h5>
                                        <code>SwalHelper.confirmDelete(name, cb)</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. METODE SAKSES & ERROR UMUM -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-check-circle fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Dialog Sukses & Error</h4>
                            <pre class="schema-code"><code>// Notifikasi Alert Sukses:
SwalHelper.success('Data berhasil disimpan ke sistem.');

// Notifikasi Alert Error Umum:
SwalHelper.error('Terjadi kesalahan yang tidak terduga pada server.');</code></pre>
                            <div class="schema-flow mt-3">
                                <div class="schema-step">
                                    <strong><code>SwalHelper.success(message)</code>:</strong> Menampilkan dialog sukses elegan dengan ikon centang, tombol konfirmasi Metronic, dan auto-close.
                                </div>
                                <div class="schema-step">
                                    <strong><code>SwalHelper.error(message)</code>:</strong> Menampilkan pesan kesalahan dengan tema merah, cocok untuk penanganan exception 500 server.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. METODE VALIDASI 422 XHR -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-information fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Handler Otomatis Validasi 422 XHR</h4>
                            <pre class="schema-code"><code>// Penanganan Error Validasi Form Request AJAX:
$.ajax({
    url: '/appsupport/app-profil',
    type: 'POST',
    data: formData,
    error: function(xhr) {
        if (xhr.status === 422) {
            SwalHelper.validationError(xhr);
        } else {
            SwalHelper.error(xhr.responseJSON?.message || 'Proses gagal.');
        }
    }
});</code></pre>
                            <div class="schema-note mt-3">
                                <code>SwalHelper.validationError(xhr)</code> secara otomatis mengekstrak object <code>errors</code> dari response JSON <code>FormRequest</code> Laravel dan merendernya dalam bentuk daftar poin di dialog SweetAlert2.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. DIALOG KONFIRMASI HAPUS -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-danger">
                            <h4><i class="ki-duotone ki-trash fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Standarisasi Dialog Konfirmasi Penghapusan</h4>
                            <p class="fs-7 text-gray-700">
                                Saat melakukan penghapusan record data melalui DataTables atau tombol aksi, panggil <code>SwalHelper.confirmDelete</code> untuk menampilkan konfirmasi yang seragam:
                            </p>
                            <pre class="schema-code"><code>// Contoh Penggunaan pada Kolom Aksi DataTables:
$(document).on('click', '.btn-delete', function() {
    const itemId = $(this).data('id');
    const itemName = $(this).data('name');

    SwalHelper.confirmDelete(itemName, function() {
        $.ajax({
            url: `/manajemenpengguna/user/${itemId}`,
            type: 'DELETE',
            data: { _token: '{{ csrf_token() }}' },
            success: function(response) {
                SwalHelper.success(response.message);
                $('#kt_table_users').DataTable().ajax.reload();
            },
            error: function(xhr) {
                SwalHelper.error(xhr.responseJSON?.message || 'Gagal menghapus data.');
            }
        });
    });
});</code></pre>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
