@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {{ app()->getLocale() == 'en' ? 'Page Config' : 'Konfigurasi Halaman' }}
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Website Profile' : 'Profil Website' }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            @if (session('success'))
                <div
                    class="alert alert-dismissible bg-light-success border border-success d-flex flex-column flex-sm-row p-5 mb-6">
                    <i class="ki-duotone ki-check-circle fs-2hx text-success me-4 mb-5 mb-sm-0"><span
                            class="path1"></span><span class="path2"></span></i>
                    <div class="d-flex flex-column pe-0 pe-sm-10 justify-content-center">
                        <h5 class="mb-1 text-success">{{ app()->getLocale() == 'en' ? 'Success!' : 'Berhasil!' }}</h5>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-success"><span class="path1"></span><span
                                class="path2"></span></i>
                    </button>
                </div>
            @endif

            <!--begin::Page Header & Guide Action-->
            <div
                class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-element-11 text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Website Profile & Brand Settings' : 'Pengaturan Profil & Identitas Website' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Configure website logo (Main Navigation), name, established year, address & footer copyright information.' : 'Kelola logo website di samping Navigasi Utama, nama kampus/aplikasi, tahun berdiri, dan alamat di bagian footer.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_website_profile_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Guide Action-->

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-6">
                <!--Col 1: Website Name-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-primary">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-abstract-26 fs-2x text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span
                                        class="fs-4 fw-bold text-gray-900 text-truncate mw-200px">{{ $profile->name }}</span>
                                    <span
                                        class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Website Name' : 'Nama Website Utama' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 2: Established Year-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-success">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-calendar-8 fs-2x text-success"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span><span
                                                class="path5"></span><span class="path6"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span
                                        class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ $profile->established_year }}</span>
                                    <span
                                        class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Established Year' : 'Tahun Berdiri / Aplikasi' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 3: Address-->
                <div class="col-md-4 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-info">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-geolocation fs-2x text-info"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span
                                        class="fs-6 fw-bold text-gray-900 text-truncate mw-200px">{{ $profile->address }}</span>
                                    <span
                                        class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Footer Address' : 'Alamat Footer Website' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Summary Stat Cards-->

            <!--begin::Sub-Tab Navigation-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold mb-6 flex-nowrap overflow-auto pb-2"
                id="kt_website_profile_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary text-nowrap pb-4 {{ $activeTab === 'identity' ? 'active' : '' }}"
                        href="{{ route('pageconfig.website-profile', ['tab' => 'identity']) }}">
                        <i class="ki-duotone ki-element-11 fs-2 me-2"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Identity & Logo' : 'Identitas & Logo' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary text-nowrap pb-4 {{ $activeTab === 'contact-location' ? 'active' : '' }}"
                        href="{{ route('pageconfig.website-profile', ['tab' => 'contact-location']) }}">
                        <i class="ki-duotone ki-geolocation fs-2 me-2"><span class="path1"></span><span
                                class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Address & Contact' : 'Alamat & Kontak' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary text-nowrap pb-4 {{ $activeTab === 'social-media' ? 'active' : '' }}"
                        href="{{ route('pageconfig.website-profile', ['tab' => 'social-media']) }}">
                        <i class="ki-duotone ki-share fs-2 me-2"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Social Media' : 'Sosial Media' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary text-nowrap pb-4 {{ $activeTab === 'preview' ? 'active' : '' }}"
                        href="{{ route('pageconfig.website-profile', ['tab' => 'preview']) }}">
                        <i class="ki-duotone ki-eye fs-2 me-2"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Live Preview' : 'Preview Live' }}
                    </a>
                </li>
            </ul>
            <!--end::Sub-Tab Navigation-->

            <!--begin::Tab Content Loader-->
            @include('pages.pageconfig.tabs.website_profile._' . str_replace('-', '_', $activeTab))
            <!--end::Tab Content Loader-->

        </div>
        <!--end::Content container-->
    </div>

    <!--begin::Help Modal Inclusion-->
    @include('pages.pageconfig.partials.website-profile-help-modal')
    <!--end::Help Modal Inclusion-->
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Quick Toggle Social Media Visibility via AJAX
            document.querySelectorAll('.js-social-toggle').forEach(function(chk) {
                chk.addEventListener('change', function() {
                    var key = this.getAttribute('data-key');
                    var url =
                        "{{ route('pageconfig.website-profile', '') }}/toggle-social-status/" +
                        key;
                    var label = document.querySelector('.js-social-toggle-label-' + key);
                    var checkbox = this;

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
                                if (label) {
                                    if (data.is_active) {
                                        label.textContent =
                                            "{{ app()->getLocale() == 'en' ? 'Active' : 'Aktif' }}";
                                        label.className =
                                            "fw-bold fs-7 js-social-toggle-label-" + key +
                                            " text-success";
                                    } else {
                                        label.textContent =
                                            "{{ app()->getLocale() == 'en' ? 'Disabled' : 'Nonaktif' }}";
                                        label.className =
                                            "fw-bold fs-7 js-social-toggle-label-" + key +
                                            " text-gray-500";
                                    }
                                }
                            } else {
                                checkbox.checked = !checkbox.checked;
                                SwalHelper.error(data.message || 'Failed to toggle status');
                            }
                        })
                        .catch(err => {
                            checkbox.checked = !checkbox.checked;
                            SwalHelper.error(err.message);
                        });
                });
            });
        });
    </script>
@endsection
