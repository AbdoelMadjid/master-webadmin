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
                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add New Release Version' : 'Tambah Versi Rilis Baru' }}">
                        <button type="button" class="btn btn-primary shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4" onclick="openAddChangelogModal()">
                            <i class="ki-duotone ki-plus fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span></i>
                            <span class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Add Version' : 'Tambah Versi' }}</span>
                        </button>
                    </span>

                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0" data-bs-toggle="modal" data-bs-target="#kt_modal_changelog_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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

    <!--begin::Help & Form Modals-->
    @include('pages.appsupport.partials.changelog-help-modal')
    @include('pages.appsupport.partials.changelog-form-modal')
    <!--end::Help & Form Modals-->
@endsection

@section('scripts')
    <script>
        // AJAX CSRF Token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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

        // Helper HTML Escape
        function escapeHtml(str) {
            if (!str) return '';
            return String(str)
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }

        // Add Highlight Repeater Row
        function addHighlightRow(label = '', desc = '') {
            var html = `
                <div class="d-flex align-items-center gap-2 highlight-row">
                    <input type="text" class="form-control form-control-solid highlight-label" placeholder="Label Fitur (contoh: Console Dev)" value="${escapeHtml(label)}" style="width: 38%;" />
                    <input type="text" class="form-control form-control-solid highlight-desc" placeholder="Deskripsi Ringkas Poin Fitur..." value="${escapeHtml(desc)}" style="width: 54%;" />
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Baris">
                        <button type="button" class="btn btn-icon btn-sm btn-light-danger shadow-xs h-35px w-35px p-0 ms-auto" onclick="$(this).closest('.highlight-row').remove()">
                            <i class="ki-duotone ki-trash fs-5 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                        </button>
                    </span>
                </div>
            `;
            $('#highlights_repeater_container').append(html);
        }

        // Add Commit Repeater Row
        function addCommitRow(hash = '', date = '', msg = '') {
            var defaultDate = date || new Date().toISOString().slice(0, 16).replace('T', ' ');
            var html = `
                <div class="d-flex align-items-center gap-2 commit-row">
                    <input type="text" class="form-control form-control-solid commit-hash" placeholder="Hash (contoh: 1e7518f)" value="${escapeHtml(hash)}" style="width: 25%;" />
                    <input type="text" class="form-control form-control-solid commit-date" placeholder="Waktu (contoh: 2026-08-04 00:43)" value="${escapeHtml(defaultDate)}" style="width: 30%;" />
                    <input type="text" class="form-control form-control-solid commit-msg" placeholder="Pesan Commit..." value="${escapeHtml(msg)}" style="width: 37%;" />
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Baris">
                        <button type="button" class="btn btn-icon btn-sm btn-light-danger shadow-xs h-35px w-35px p-0 ms-auto" onclick="$(this).closest('.commit-row').remove()">
                            <i class="ki-duotone ki-trash fs-5 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                        </button>
                    </span>
                </div>
            `;
            $('#commits_repeater_container').append(html);
        }

        // Open Add Modal
        function openAddChangelogModal() {
            $('#changelog_id').val('');
            $('#changelog_modal_title').text("{{ app()->getLocale() == 'en' ? 'Add New Release Version' : 'Tambah Versi Rilis Baru' }}");
            $('#kt_modal_changelog_form_element')[0].reset();
            $('#changelog_date').val(new Date().toISOString().split('T')[0]);
            $('#changelog_author').val('Developer Team');
            $('#highlights_repeater_container').empty();
            $('#commits_repeater_container').empty();
            addHighlightRow();
            addCommitRow();
            $('#kt_modal_changelog_form').modal('show');
        }

        // Open Edit Modal
        function openEditChangelogModal(data) {
            $('#changelog_id').val(data.id || '');
            $('#changelog_modal_title').text("{{ app()->getLocale() == 'en' ? 'Edit Release Version' : 'Edit Versi Rilis' }} (" + data.version + ")");
            $('#changelog_version').val(data.version || '');
            $('#changelog_date').val(data.date || '');
            $('#changelog_title_id').val(data.title_id || data.title || '');
            $('#changelog_title').val(data.title || '');
            $('#changelog_type').val(data.type || 'minor');
            $('#changelog_badge').val(data.badge || 'badge-light-primary');
            $('#changelog_author').val(data.author || 'Developer Team');
            $('#changelog_description_id').val(data.description_id || data.description || '');
            $('#changelog_description').val(data.description || '');

            // Populate Highlights Repeater
            $('#highlights_repeater_container').empty();
            if (Array.isArray(data.highlights) && data.highlights.length > 0) {
                data.highlights.forEach(function(hl) {
                    addHighlightRow(hl.label || '', hl.desc || '');
                });
            } else {
                addHighlightRow();
            }

            // Populate Commits Repeater
            $('#commits_repeater_container').empty();
            if (Array.isArray(data.commits) && data.commits.length > 0) {
                data.commits.forEach(function(cm) {
                    addCommitRow(cm.hash || '', cm.date || '', cm.msg || '');
                });
            } else {
                addCommitRow();
            }

            $('#kt_modal_changelog_form').modal('show');
        }

        // Submit Save / Update Form
        function saveChangelog(e) {
            e.preventDefault();
            var id = $('#changelog_id').val();
            var url = id ? "{{ url('appsupport/changelog') }}/" + id : "{{ route('appsupport.changelog.store') }}";
            var type = id ? "PUT" : "POST";

            var highlights = [];
            $('.highlight-row').each(function() {
                var label = $(this).find('.highlight-label').val();
                var desc = $(this).find('.highlight-desc').val();
                if (label || desc) {
                    highlights.push({ type: 'feat', label: label, desc: desc });
                }
            });

            var commits = [];
            $('.commit-row').each(function() {
                var hash = $(this).find('.commit-hash').val();
                var date = $(this).find('.commit-date').val();
                var msg = $(this).find('.commit-msg').val();
                if (hash || msg) {
                    commits.push({ hash: hash || 'HEAD', date: date || new Date().toISOString().slice(0, 16).replace('T', ' '), msg: msg });
                }
            });

            var payload = {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id,
                version: $('#changelog_version').val(),
                date: $('#changelog_date').val(),
                title_id: $('#changelog_title_id').val(),
                title: $('#changelog_title').val(),
                type: $('#changelog_type').val(),
                badge: $('#changelog_badge').val(),
                author: $('#changelog_author').val(),
                description_id: $('#changelog_description_id').val(),
                description: $('#changelog_description').val(),
                highlights: highlights,
                commits: commits
            };

            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Saving Changelog...' : 'Menyimpan Catatan Versi...' }}",
                allowOutsideClick: false,
                didOpen: () => { Swal.showLoading(); }
            });

            $.ajax({
                url: url,
                type: type,
                data: payload,
                success: function (res) {
                    Swal.close();
                    $('#kt_modal_changelog_form').modal('hide');
                    if (res.success) {
                        SwalHelper.success(res.message);
                        setTimeout(function() { window.location.reload(); }, 1200);
                    }
                },
                error: function (xhr) {
                    Swal.close();
                    SwalHelper.validationError(xhr);
                }
            });
        }

        // Delete Version Record
        function deleteChangelog(id, version) {
            SwalHelper.confirmDelete("Versi " + version, function () {
                $.ajax({
                    url: "{{ url('appsupport/changelog') }}/" + id,
                    type: "DELETE",
                    success: function (res) {
                        if (res.success) {
                            SwalHelper.success(res.message);
                            setTimeout(function() { window.location.reload(); }, 1200);
                        }
                    },
                    error: function (xhr) {
                        SwalHelper.error("Gagal menghapus catatan versi");
                    }
                });
            });
        }
    </script>
@endsection
