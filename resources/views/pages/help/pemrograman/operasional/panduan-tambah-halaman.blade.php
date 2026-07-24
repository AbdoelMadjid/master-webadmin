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
            {{ __('help.operasional') }}
        @endslot
        @slot('li_3')
            {{ __('help.panduan_tambah_halaman') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">
                        <i class="ki-duotone ki-file-plus text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Developer Workflow
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.operasional.panduan-tambah-halaman.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.operasional.panduan-tambah-halaman.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-flash-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.panduan-tambah-halaman.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-element-3 fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.operasional.panduan-tambah-halaman.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-table fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ __('help.pages.operasional.panduan-tambah-halaman.chip_3') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-notification-status fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> {{ __('help.pages.operasional.panduan-tambah-halaman.chip_4') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. DAILY DEVELOPER WORKFLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. AUTOMATIC NAMING & ROUTING EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>// 1. New Blade file:
resources/views/pages/appsupport/feature.blade.php

// 2. Auto-generated route name:
help.pemrograman.appsupport.feature (or appsupport.feature)

// 3. Auto-generated URL:
/appsupport/feature</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-halaman.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. MULTI-TAB LAYOUT & CORE LAYOUT RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-element-3 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_3') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_4') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. RESPONSIVE TABLE CREATION RULES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-table fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_6') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. CONTROLLER, MODEL & FORM PARTIAL STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CRUD NOTIFICATION JS HELPER (SWALHELPER) -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-notification-status fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_11') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Success toast/alert:
SwalHelper.success('Data saved successfully');

// General error alert:
SwalHelper.error('Failed to save data');

// AJAX 422 XHR validation error:
SwalHelper.validationError(xhr);

// Delete confirmation prompt:
SwalHelper.confirmDelete('User Record', function() {
    // execute AJAX delete action
});</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. TOP TOOLTIPS & MODAL TRIGGER WRAPPER -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-information fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_12') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_13') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>&lt;!-- Wrapper element prevents attribute collision --&gt;
&lt;span data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Item"&gt;
    &lt;button type="button" class="btn btn-icon btn-light-primary"
            data-bs-toggle="modal" data-bs-target="#modal_edit"&gt;
        &lt;i class="ki-duotone ki-pencil fs-5"&gt;...&lt;/i&gt;
    &lt;/button&gt;
&lt;/span&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. INSPECTION COMMAND & RELEASE VERIFICATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-terminal fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_8') }}
                            </h4>
                            <pre class="schema-code"><code># Check route registration in CLI:
php artisan route:list --name=appsupport.feature

# Clear views and route cache:
php artisan view:clear
php artisan route:clear</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.operasional.panduan-tambah-halaman.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. TEAM STANDARD & STRICT RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_9') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_9') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. DAILY DEVELOPER WORKFLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_1') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. AUTOMATIC NAMING & ROUTING EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_2') }}
                            </h4>
                            <pre class="schema-code"><code>// 1. File Blade baru:
resources/views/pages/appsupport/feature.blade.php

// 2. Nama route otomatis:
help.pemrograman.appsupport.feature (atau appsupport.feature)

// 3. URL otomatis:
/appsupport/feature</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.operasional.panduan-tambah-halaman.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. MULTI-TAB LAYOUT & CORE LAYOUT RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-element-3 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_3') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_1') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_2') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_3') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_4') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. RESPONSIVE TABLE CREATION RULES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-table fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_4') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_5') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_6') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_7') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. CONTROLLER, MODEL & FORM PARTIAL STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_5') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_8') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_9') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_10') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. CRUD NOTIFICATION JS HELPER (SWALHELPER) -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-notification-status fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-4">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_11') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>// Notifikasi Sukses:
SwalHelper.success('Data berhasil disimpan');

// Notifikasi Error Umum:
SwalHelper.error('Gagal menyimpan data');

// Notifikasi Error Validasi AJAX 422 XHR:
SwalHelper.validationError(xhr);

// Dialog Konfirmasi Hapus:
SwalHelper.confirmDelete('Data Pengguna', function() {
    // eksekusi AJAX delete
});</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. TOP TOOLTIPS & MODAL TRIGGER WRAPPER -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-information fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_7') }}
                            </h4>
                            <ul class="schema-list fs-7 mb-3">
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_12') !!}</li>
                                <li>{!! __('help.pages.operasional.panduan-tambah-halaman.item_13') !!}</li>
                            </ul>
                            <pre class="schema-code"><code>&lt;!-- Tag pembungkus mencegah konflik atribut Bootstrap 5 --&gt;
&lt;span data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Item"&gt;
    &lt;button type="button" class="btn btn-icon btn-light-primary"
            data-bs-toggle="modal" data-bs-target="#modal_edit"&gt;
        &lt;i class="ki-duotone ki-pencil fs-5"&gt;...&lt;/i&gt;
    &lt;/button&gt;
&lt;/span&gt;</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. INSPECTION COMMAND & RELEASE VERIFICATION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-terminal fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_8') }}
                            </h4>
                            <pre class="schema-code"><code># Cek registrasi route di CLI:
php artisan route:list --name=appsupport.feature

# Bersihkan cache view &amp; route:
php artisan view:clear
php artisan route:clear</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.operasional.panduan-tambah-halaman.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. TEAM STANDARD & STRICT RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.operasional.panduan-tambah-halaman.heading_9') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_7') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.operasional.panduan-tambah-halaman.step_9') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection