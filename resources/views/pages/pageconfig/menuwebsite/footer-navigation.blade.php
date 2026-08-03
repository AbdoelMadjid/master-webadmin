@extends('layouts.index')

@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {{ app()->getLocale() == 'en' ? 'Website Config' : 'Konfigurasi Website' }}
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Footer Navigation' : 'Navigasi Footer' }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Page Header & Guide Action-->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-element-plus text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Website Footer Navigation Management' : 'Manajemen Navigasi Footer Website' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Configure the 4-column footer links starting from Future Students down to Campus Safety.' : 'Kelola isi dari menu navigasi bagian bawah (footer) mulai dari Future Students hingga Campus Safety yang terbagi menjadi 4 kolom.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add New Footer Item' : 'Tambah Navigasi Footer' }}">
                        <button type="button" class="btn btn-primary shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4 btn-add-navigation" data-bs-toggle="modal" data-bs-target="#kt_modal_footer_navigation">
                            <i class="ki-duotone ki-plus fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span></i>
                            <span class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Add Navigation' : 'Tambah Navigasi' }}</span>
                        </button>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0" data-bs-toggle="modal" data-bs-target="#kt_modal_footer_navigation_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-6">
                <!--Col 1: Total Footer Navigations-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-primary">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-element-11 fs-2x text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($totalNavs) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Total Footer Links' : 'Total Navigasi Footer' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 2: Active Items-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-success">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-check-circle fs-2x text-success"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($activeNavs) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Active Footer Items' : 'Item Footer Aktif' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 3: Linked to Main Navigation-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-info">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-element-plus fs-2x text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($linkedNavs) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Linked to Main Nav' : 'Terhubung ke Navigasi Utama' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Summary Stat Cards-->

            <!--begin::Sub-Tab Navigation-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-5 fw-bold mb-6" id="kt_footer_navigation_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'nav-list' ? 'active' : '' }}" href="{{ route('pageconfig.menuwebsite.footer-navigation', ['tab' => 'nav-list']) }}">
                        <i class="ki-duotone ki-abstract-14 fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Footer Navigation List' : 'Daftar Navigasi Footer' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'column-preview' ? 'active' : '' }}" href="{{ route('pageconfig.menuwebsite.footer-navigation', ['tab' => 'column-preview']) }}">
                        <i class="ki-duotone ki-element-plus fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                        {{ app()->getLocale() == 'en' ? '4-Column Footer Preview' : 'Preview Tampilan 4 Kolom Footer' }}
                    </a>
                </li>
            </ul>
            <!--end::Sub-Tab Navigation-->

            <!--begin::Tab Content Loader-->
            @include('pages.pageconfig.menuwebsite.tabs.footer_navigation._' . str_replace('-', '_', $activeTab))
            <!--end::Tab Content Loader-->

        </div>
        <!--end::Content container-->
    </div>

    <!--begin::Modals Inclusion-->
    @include('pages.pageconfig.menuwebsite.partials.footer-navigation-form')
    @include('pages.pageconfig.menuwebsite.partials.footer-navigation-help-modal')
    <!--end::Modals Inclusion-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Helper for edit button click
            document.querySelectorAll('.btn-edit-navigation').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var data = JSON.parse(this.getAttribute('data-nav'));
                    var form = document.getElementById('kt_modal_footer_navigation_form');
                    form.action = "{{ route('pageconfig.menuwebsite.footer-navigation') }}/" + data.id;
                    document.getElementById('method_field').value = 'PUT';
                    document.getElementById('nav_modal_title').innerText = "{{ app()->getLocale() == 'en' ? 'Edit Footer Navigation Item' : 'Edit Item Navigasi Footer' }}";

                    document.getElementById('nav_title').value = data.title || '';
                    document.getElementById('nav_title_en').value = data.title_en || '';
                    document.getElementById('nav_url').value = data.url || '';
                    document.getElementById('nav_column').value = data.column || 1;
                    document.getElementById('nav_main_navigation_id').value = data.main_navigation_id || '';
                    document.getElementById('nav_target').value = data.target || '_self';
                    document.getElementById('nav_order').value = data.order || 0;
                    document.getElementById('nav_is_active').checked = data.is_active ? true : false;
                    document.getElementById('nav_is_external').checked = data.is_external ? true : false;
                });
            });

            // Helper for reset form on add
            document.querySelectorAll('.btn-add-navigation').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var form = document.getElementById('kt_modal_footer_navigation_form');
                    form.reset();
                    form.action = "{{ route('pageconfig.menuwebsite.footer-navigation.store') }}";
                    document.getElementById('method_field').value = 'POST';
                    document.getElementById('nav_modal_title').innerText = "{{ app()->getLocale() == 'en' ? 'Add New Footer Navigation' : 'Tambah Navigasi Footer Baru' }}";
                });
            });

            // Auto-populate URL and Title when Main Navigation dropdown changes
            var mainNavSelect = document.getElementById('nav_main_navigation_id');
            if (mainNavSelect) {
                mainNavSelect.addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    var url = selectedOption.getAttribute('data-url');
                    var title = selectedOption.getAttribute('data-title');
                    var titleEn = selectedOption.getAttribute('data-title-en');

                    if (url) {
                        document.getElementById('nav_url').value = url;
                    }
                    if (title && !document.getElementById('nav_title').value) {
                        document.getElementById('nav_title').value = title;
                    }
                    if (titleEn && !document.getElementById('nav_title_en').value) {
                        document.getElementById('nav_title_en').value = titleEn;
                    }
                });
            }

            // Handle AJAX form submission
            var modalForm = document.getElementById('kt_modal_footer_navigation_form');
            if (modalForm) {
                modalForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    var submitBtn = this.querySelector('button[type="submit"]');
                    submitBtn.setAttribute('data-kt-indicator', 'on');
                    submitBtn.disabled = true;

                    fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json().then(data => ({ status: response.status, body: data })))
                    .then(res => {
                        submitBtn.removeAttribute('data-kt-indicator');
                        submitBtn.disabled = false;

                        if (res.status === 200 || res.body.success) {
                            var modalEl = document.getElementById('kt_modal_footer_navigation');
                            var modal = bootstrap.Modal.getInstance(modalEl);
                            if (modal) modal.hide();

                            SwalHelper.success(res.body.message || 'Operation successful', function() {
                                window.location.reload();
                            });
                        } else {
                            if (res.status === 422) {
                                SwalHelper.validationError({ status: res.status, responseJSON: res.body });
                            } else {
                                SwalHelper.error(res.body.message || 'An error occurred.');
                            }
                        }
                    })
                    .catch(err => {
                        submitBtn.removeAttribute('data-kt-indicator');
                        submitBtn.disabled = false;
                        SwalHelper.error(err.message || 'Server error.');
                    });
                });
            }

            // Quick Toggle Active Status
            document.querySelectorAll('.js-toggle-status').forEach(function (chk) {
                chk.addEventListener('change', function () {
                    var id = this.getAttribute('data-id');
                    var url = "{{ route('pageconfig.menuwebsite.footer-navigation') }}/" + id + "/toggle-status";

                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(r => r.json())
                    .then(data => {
                        if (data.success) {
                            SwalHelper.success(data.message);
                        } else {
                            SwalHelper.error(data.message || 'Failed to toggle status');
                        }
                    })
                    .catch(err => SwalHelper.error(err.message));
                });
            });

            // Quick Delete Item
            document.querySelectorAll('.js-delete-nav').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var id = this.getAttribute('data-id');
                    var name = this.getAttribute('data-name');
                    var url = "{{ route('pageconfig.menuwebsite.footer-navigation') }}/" + id;

                    SwalHelper.confirmDelete(name, function () {
                        fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                        .then(r => r.json())
                        .then(data => {
                            if (data.success) {
                                SwalHelper.success(data.message, function() {
                                    window.location.reload();
                                });
                            } else {
                                SwalHelper.error(data.message || 'Failed to delete');
                            }
                        })
                        .catch(err => SwalHelper.error(err.message));
                    });
                });
            });
        });
    </script>
@endsection
