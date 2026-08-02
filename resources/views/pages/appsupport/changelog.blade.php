@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {{ app()->getLocale() == 'en' ? 'App Support' : 'Dukungan Aplikasi' }}
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Changelog & Versioning' : 'Catatan Perubahan & Versi' }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!--begin::Page Header & Operational Guide Trigger-->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-time text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Application Changelog & Release History' : 'Catatan Perubahan & Riwayat Rilis Versi' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en' ? 'Track all version updates, feature additions, bug fixes, git commits, and code evolution from initial release to present.' : 'Pantau seluruh pembaruan versi, penambahan fitur, perbaikan bug, commit git, dan evolusi kode dari rilis awal hingga saat ini.' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_changelog_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Page Header & Operational Guide Trigger-->

            <!--begin::Summary Stat Cards-->
            <div class="row g-5 g-xl-10 mb-6">
                <!--Col 1: Current Latest Version-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-primary shadow-xs">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-element-plus fs-2x text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ $latestVersion }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Current Version' : 'Versi Terbaru' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 2: Total Versions-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-success shadow-xs">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-element-11 fs-2x text-success"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($totalVersions) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Total Releases' : 'Total Versi Rilis' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 3: Total Git Commits-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-info shadow-xs">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-route fs-2x text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">{{ number_format($totalCommits) }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Recorded Commits' : 'Total Commit Git' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Col 4: Latest Release Date-->
                <div class="col-md-3 col-sm-6">
                    <div class="card card-flush h-md-100 border-start border-4 border-warning shadow-xs">
                        <div class="card-body d-flex flex-column justify-content-between p-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px me-4">
                                    <span class="symbol-label bg-light-warning">
                                        <i class="ki-duotone ki-time fs-2x text-warning"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-4 fw-bold text-gray-800 me-2 lh-1">{{ $latestDate }}</span>
                                    <span class="text-gray-500 fw-semibold fs-7 mt-1">{{ app()->getLocale() == 'en' ? 'Last Push Date' : 'Tanggal Push Terakhir' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Summary Stat Cards-->

            <!--begin::Sub-Tab Navigation-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-5 fw-bold mb-6" id="kt_changelog_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'timeline' ? 'active' : '' }}" href="{{ route('appsupport.changelog', ['tab' => 'timeline']) }}">
                        <i class="ki-duotone ki-time fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Version Release Timeline' : 'Linimasa Rilis Versi' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'git-log' ? 'active' : '' }}" href="{{ route('appsupport.changelog', ['tab' => 'git-log']) }}">
                        <i class="ki-duotone ki-route fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Git Commit Log' : 'Riwayat Commit Git' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'version-summary' ? 'active' : '' }}" href="{{ route('appsupport.changelog', ['tab' => 'version-summary']) }}">
                        <i class="ki-duotone ki-element-11 fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Version Breakdown & Highlights' : 'Ringkasan Breakdown Versi' }}
                    </a>
                </li>
            </ul>
            <!--end::Sub-Tab Navigation-->

            <!--begin::Tab Content Loader-->
            @include('pages.appsupport.tabs.changelog._' . str_replace('-', '_', $activeTab))
            <!--end::Tab Content Loader-->

        </div>
        <!--end::Content container-->
    </div>

    <!--begin::Help Modal Inclusion-->
    @include('pages.appsupport.partials.changelog-help-modal')
    <!--end::Help Modal Inclusion-->
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize DataTable if present on git log tab
            var tableEl = document.getElementById('kt_changelog_git_table');
            if (tableEl && typeof $(tableEl).DataTable === 'function') {
                $(tableEl).DataTable({
                    order: [[ 1, 'desc' ]],
                    pageLength: 15,
                    language: {
                        search: "{{ app()->getLocale() == 'en' ? 'Filter Commits:' : 'Cari Commit:' }}",
                        lengthMenu: "{{ app()->getLocale() == 'en' ? 'Display _MENU_ entries' : 'Tampilkan _MENU_ data' }}",
                        info: "{{ app()->getLocale() == 'en' ? 'Showing _START_ to _END_ of _TOTAL_ commits' : 'Menampilkan _START_ sampai _END_ dari _TOTAL_ commit' }}",
                        paginate: {
                            first: "{{ app()->getLocale() == 'en' ? 'First' : 'Pertama' }}",
                            last: "{{ app()->getLocale() == 'en' ? 'Last' : 'Terakhir' }}",
                            next: "{{ app()->getLocale() == 'en' ? 'Next' : 'Berikutnya' }}",
                            previous: "{{ app()->getLocale() == 'en' ? 'Previous' : 'Sebelumnya' }}"
                        }
                    }
                });
            }
        });
    </script>
@endsection
