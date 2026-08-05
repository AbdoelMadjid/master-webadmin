@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {{ app()->getLocale() == 'en' ? 'Page Config' : 'Konfigurasi Halaman' }}
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Website Features' : 'Fitur Website' }}
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
                        <i class="ki-duotone ki-toggle-on text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Website Feature Visibility Toggle' : 'Manajemen Sakelar Fitur Website' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Enable or disable public website features including Intake Button, Language Switcher, Login Button, Search Bar & Footer Social Icons.' : 'Aktifkan atau nonaktifkan fitur publik website seperti Tombol Intake, Pemilih Bahasa, Tombol Login, Form Pencarian, dan Sosial Media Footer.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_website_features_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-6">
                <!--Col 1: Total Features-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-primary">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-element-plus fs-2x text-primary"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span><span
                                                class="path5"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span
                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($totalFeatures) }}</span>
                                    <span
                                        class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Total Managed Features' : 'Total Fitur Dikelola' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 2: Active Features-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-success">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-check-circle fs-2x text-success"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span
                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($activeFeatures) }}</span>
                                    <span
                                        class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Active Visible Features' : 'Fitur Aktif Tampil' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 3: Hidden Features-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-warning">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-warning">
                                        <i class="ki-duotone ki-cross-circle fs-2x text-warning"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span
                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($inactiveFeatures) }}</span>
                                    <span
                                        class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Hidden Features' : 'Fitur Disembunyikan' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Summary Stat Cards-->

            <!--begin::Sub-Tab Navigation-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-5 fw-bold mb-6"
                id="kt_website_features_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'feature-list' ? 'active' : '' }}"
                        href="{{ route('pageconfig.website-features', ['tab' => 'feature-list']) }}">
                        <i class="ki-duotone ki-toggle-on fs-2 me-2"><span class="path1"></span><span
                                class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Feature Toggle List' : 'Daftar Sakelar Fitur' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'preview' ? 'active' : '' }}"
                        href="{{ route('pageconfig.website-features', ['tab' => 'preview']) }}">
                        <i class="ki-duotone ki-eye fs-2 me-2"><span class="path1"></span><span class="path2"></span><span
                                class="path3"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Live Interface Preview' : 'Preview Live Tampilan Fitur' }}
                    </a>
                </li>
            </ul>
            <!--end::Sub-Tab Navigation-->

            <!--begin::Tab Content Loader-->
            @include('pages.pageconfig.tabs.website_features._' . str_replace('-', '_', $activeTab))
            <!--end::Tab Content Loader-->

        </div>
        <!--end::Content container-->
    </div>

    <!--begin::Help Modal Inclusion-->
    @include('pages.pageconfig.partials.website-features-help-modal')
    <!--end::Help Modal Inclusion-->
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Quick Toggle Active Status via AJAX
            document.querySelectorAll('.js-toggle-feature-status').forEach(function(chk) {
                chk.addEventListener('change', function() {
                    var id = this.getAttribute('data-id');
                    var url = "{{ route('pageconfig.website-features', '') }}/" + id +
                        "/toggle-status";

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
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

            // Bulk Toggle Features Status (Enable All / Disable All)
            document.querySelectorAll('.js-bulk-toggle-features').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var status = parseInt(this.getAttribute('data-status'));
                    var actionText = status === 1 ?
                        "{{ app()->getLocale() == 'en' ? 'enable all features' : 'mengaktifkan semua fitur' }}" :
                        "{{ app()->getLocale() == 'en' ? 'disable all features' : 'menonaktifkan semua fitur' }}";

                    Swal.fire({
                        title: "{{ app()->getLocale() == 'en' ? 'Are you sure?' : 'Apakah Anda yakin?' }}",
                        text: "{{ app()->getLocale() == 'en' ? 'Do you want to ' : 'Apakah Anda ingin ' }}" +
                            actionText + "?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: "{{ app()->getLocale() == 'en' ? 'Yes, proceed!' : 'Ya, lanjutkan!' }}",
                        cancelButtonText: "{{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: "btn btn-active-light"
                        }
                    }).then(function(result) {
                        if (result.isConfirmed) {
                            fetch("{{ route('pageconfig.website-features.bulk-toggle') }}", {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'X-CSRF-TOKEN': document.querySelector(
                                            'meta[name="csrf-token"]').getAttribute(
                                            'content')
                                    },
                                    body: JSON.stringify({
                                        is_active: status
                                    })
                                })
                                .then(r => r.json())
                                .then(data => {
                                    if (data.success) {
                                        SwalHelper.success(data.message);
                                        document.querySelectorAll(
                                            '.js-toggle-feature-status').forEach(
                                            function(chk) {
                                                chk.checked = status === 1;
                                            });
                                    } else {
                                        SwalHelper.error(data.message ||
                                            'Bulk toggle failed');
                                    }
                                })
                                .catch(err => SwalHelper.error(err.message));
                        }
                    });
                });
            });
        });
    </script>
@endsection
