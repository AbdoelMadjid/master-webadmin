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
            {{ app()->getLocale() == 'en' ? 'Top Navigation' : 'Navigasi Atas' }}
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
                            {{ app()->getLocale() == 'en' ? 'Website Top Navigation Management' : 'Manajemen Navigasi Atas Website' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Manage top header bar links starting from Campus Life down to Contacts.' : 'Kelola isi dari menu navigasi bagian atas (topbar header) mulai dari Kehidupan Kampus hingga Kontak.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add New Top Navigation' : 'Tambah Navigasi Atas' }}">
                        <button type="button" class="btn btn-primary shadow-xs btn-add-navigation" data-bs-toggle="modal" data-bs-target="#kt_modal_top_navigation">
                            <i class="ki-duotone ki-plus fs-2"></i>
                            {{ app()->getLocale() == 'en' ? 'Add Navigation' : 'Tambah Navigasi' }}
                        </button>
                    </span>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_top_navigation_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-6">
                <!--Col 1: Total Top Navigations-->
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
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Total Top Links' : 'Total Navigasi Atas' }}</span>
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
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Active Items' : 'Item Navigasi Aktif' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 3: External Links-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-warning">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-warning">
                                        <i class="ki-duotone ki-exit-right-corner fs-2x text-warning"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($externalNavs) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'External Links' : 'Link Eksternal' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Summary Stat Cards-->

            <!--begin::Sub-Tab Navigation-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-5 fw-bold mb-6" id="kt_top_navigation_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'nav-list' ? 'active' : '' }}" href="{{ route('pageconfig.menuwebsite.top-navigation', ['tab' => 'nav-list']) }}">
                        <i class="ki-duotone ki-abstract-14 fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Top Navigation List' : 'Daftar Navigasi Atas' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'preview' ? 'active' : '' }}" href="{{ route('pageconfig.menuwebsite.top-navigation', ['tab' => 'preview']) }}">
                        <i class="ki-duotone ki-eye fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Toolbar Live Preview' : 'Preview Tampilan Topbar' }}
                    </a>
                </li>
            </ul>
            <!--end::Sub-Tab Navigation-->

            <!--begin::Tab Content Loader-->
            @include('pages.pageconfig.menuwebsite.tabs.top_navigation._' . str_replace('-', '_', $activeTab))
            <!--end::Tab Content Loader-->

        </div>
        <!--end::Content container-->
    </div>

    <!--begin::Modals Inclusion-->
    @include('pages.pageconfig.menuwebsite.partials.top-navigation-form')
    @include('pages.pageconfig.menuwebsite.partials.top-navigation-help-modal')
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
                    var form = document.getElementById('kt_modal_top_navigation_form');
                    form.action = "{{ route('pageconfig.menuwebsite.top-navigation') }}/" + data.id;
                    document.getElementById('method_field').value = 'PUT';
                    document.getElementById('nav_modal_title').innerText = "{{ app()->getLocale() == 'en' ? 'Edit Top Navigation Item' : 'Edit Item Navigasi Atas' }}";

                    document.getElementById('nav_title').value = data.title || '';
                    document.getElementById('nav_title_en').value = data.title_en || '';
                    document.getElementById('nav_url').value = data.url || '';
                    document.getElementById('nav_parent_id').value = data.parent_id || '';
                    document.getElementById('nav_target').value = data.target || '_self';
                    document.getElementById('nav_icon').value = data.icon || '';
                    document.getElementById('nav_order').value = data.order || 0;
                    document.getElementById('nav_is_active').checked = data.is_active ? true : false;
                    document.getElementById('nav_is_external').checked = data.is_external ? true : false;
                });
            });

            // Helper for reset form on add
            document.querySelectorAll('.btn-add-navigation').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var form = document.getElementById('kt_modal_top_navigation_form');
                    form.reset();
                    form.action = "{{ route('pageconfig.menuwebsite.top-navigation.store') }}";
                    document.getElementById('method_field').value = 'POST';
                    document.getElementById('nav_modal_title').innerText = "{{ app()->getLocale() == 'en' ? 'Add New Top Navigation' : 'Tambah Navigasi Atas Baru' }}";
                });
            });

            // Handle AJAX form submission
            var modalForm = document.getElementById('kt_modal_top_navigation_form');
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
                            var modalEl = document.getElementById('kt_modal_top_navigation');
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
                    var url = "{{ route('pageconfig.menuwebsite.top-navigation') }}/" + id + "/toggle-status";

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
                    var url = "{{ route('pageconfig.menuwebsite.top-navigation') }}/" + id;

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
                                SwalHelper.success(data.message).then(() => {
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
