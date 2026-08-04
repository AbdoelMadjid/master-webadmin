@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {{ app()->getLocale() == 'en' ? 'App Support' : 'Dukungan Aplikasi' }}
        @endslot
        @slot('li_2')
            {{ app()->getLocale() == 'en' ? 'Developer Console' : 'Console Developer' }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            {{-- Page Header & Action Bar --}}
            <div
                class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
                <div class="d-flex align-items-center gap-3">
                    <div class="symbol symbol-45px symbol-circle bg-light-primary p-2">
                        <i class="ki-duotone ki-code text-primary fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div>
                        <h2 class="text-gray-900 fw-bold fs-3 m-0">
                            {{ app()->getLocale() == 'en' ? 'Developer Console & Git Manager' : 'Console Developer & Git Manager' }}
                        </h2>
                        <span class="text-muted fs-7">
                            {{ app()->getLocale() == 'en'
                                ? 'Web-based interactive GUI for CLI git:manager commands, system diagnostics, and code generators'
                                : 'Antarmuka kontrol berbasis web untuk perintah CLI git:manager, diagnostik sistem, dan generator kode' }}
                        </span>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                        title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button"
                            class="btn btn-icon btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_console_developer_help">
                            <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>

            {{-- Navigation Tabs Header --}}
            <div class="card card-flush shadow-sm mb-6">
                <div class="card-body pt-4 pb-0">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        {{-- Tab 1: Git Operations --}}
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'git-manager' ? 'active' : '' }}"
                                href="{{ route('appsupport.console-developer', ['tab' => 'git-manager']) }}">
                                <i class="ki-duotone ki-route fs-2 me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Git Operations' : 'Git Operations' }}
                            </a>
                        </li>

                        {{-- Tab 2: Setup & Maintenance --}}
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'setup-maintenance' ? 'active' : '' }}"
                                href="{{ route('appsupport.console-developer', ['tab' => 'setup-maintenance']) }}">
                                <i class="ki-duotone ki-wrench fs-2 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'Setup & Maintenance' : 'Setup & Maintenance' }}
                            </a>
                        </li>

                        {{-- Tab 3: CRUD Generator --}}
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'crud-generator' ? 'active' : '' }}"
                                href="{{ route('appsupport.console-developer', ['tab' => 'crud-generator']) }}">
                                <i class="ki-duotone ki-element-plus fs-2 me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span></i>
                                {{ app()->getLocale() == 'en' ? 'CRUD & Component Generator' : 'CRUD & Code Generator' }}
                            </a>
                        </li>

                        {{-- Tab 4: File Utilities --}}
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 {{ $activeTab === 'file-utilities' ? 'active' : '' }}"
                                href="{{ route('appsupport.console-developer', ['tab' => 'file-utilities']) }}">
                                <i class="ki-duotone ki-folder fs-2 me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                {{ app()->getLocale() == 'en' ? 'File Utilities' : 'Utilitas File' }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Include Sub-Tab View --}}
            @include('pages.appsupport.tabs.console-developer._' . str_replace('-', '_', $activeTab))

        </div>
    </div>

    {{-- Modals --}}
    @include('pages.appsupport.partials.console-developer-help-modal')
    @include('pages.appsupport.partials.console-developer-output-modal')
    @include('pages.appsupport.partials.console-developer-commit-modal')
@endsection

@section('scripts')
    <script>
        // AJAX CSRF Token setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var pendingReloadOnOutputClose = false;
        var pendingRedirectUrl = null;

        // Function to open execution output terminal modal
        function showConsoleOutput(title, command, text, autoReload = false, redirectUrl = null) {
            pendingReloadOnOutputClose = autoReload;
            pendingRedirectUrl = redirectUrl;
            $('#kt_console_output_title').text(title);
            $('#kt_console_output_command').text(command || title);
            $('#kt_console_output_text').text(text || 'No output recorded.');
            $('#kt_modal_console_output').modal('show');
        }

        // Auto reload or redirect when Output Modal is hidden
        $(document).ready(function() {
            $('#kt_modal_console_output').on('hidden.bs.modal', function() {
                if (pendingRedirectUrl) {
                    window.location.href = pendingRedirectUrl;
                } else if (pendingReloadOnOutputClose) {
                    window.location.reload();
                }
            });
        });

        // Generic Git Action Trigger
        function triggerGitAction(action, params = {}) {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Executing Git Command...' : 'Mengeksekusi Perintah Git...' }}",
                text: "{{ app()->getLocale() == 'en' ? 'Please wait' : 'Mohon tunggu sejenak' }}",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: "{{ route('appsupport.console-developer.git-action') }}",
                type: "POST",
                data: Object.assign({
                    request_type: 'git',
                    action: action
                }, params),
                success: function(res) {
                    Swal.close();
                    const reloadActions = ['pull', 'commit_push', 'reset_local', 'sync_origin', 'switch_branch',
                        'auto_release'
                    ];
                    const shouldReload = reloadActions.includes(action);
                    const title = res.message || "Aksi Git Selesai";
                    const command = res.command || '';
                    const output = res.output || res.message || 'Tidak ada output yang dikembalikan.';

                    if (res.success) {
                        showConsoleOutput(title, command, output, shouldReload);
                    } else {
                        showConsoleOutput(title, command, output, false);
                        SwalHelper.error(res.message || "Gagal mengeksekusi aksi Git");
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    const response = xhr.responseJSON || {};
                    const title = response.message || 'Gagal mengeksekusi aksi Git';
                    const output = response.output || response.message || 'Tidak ada output yang dikembalikan.';

                    showConsoleOutput(title, '', output, false);
                    SwalHelper.validationError(xhr);
                }
            });
        }

        // Submit Commit & Push form
        function submitGitCommit(e) {
            e.preventDefault();
            var msg = $('#console_commit_message').val();
            if (!msg) return;

            $('#kt_modal_console_commit').modal('hide');
            triggerGitAction('commit_push', {
                commit_message: msg
            });
            $('#console_commit_message').val('');
        }

        // Prompt Create Release Tag
        function promptCreateTag() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Create New Release Tag' : 'Buat Release Tag Baru' }}",
                input: 'text',
                inputLabel: "{{ app()->getLocale() == 'en' ? 'Tag Version (e.g. v1.3.5)' : 'Versi Tag (contoh: v1.3.5)' }}",
                inputPlaceholder: 'v1.3.5',
                showCancelButton: true,
                confirmButtonText: 'Create Tag',
                inputValidator: (value) => {
                    if (!value) {
                        return "{{ app()->getLocale() == 'en' ? 'Tag version is required!' : 'Versi tag wajib diisi!' }}";
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerGitAction('create_tag', {
                        tag_name: result.value
                    });
                }
            });
        }

        // Prompt Force Update Release Tag
        function promptForceTag() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Force Update Existing Tag' : 'Update Paksa Tag Release' }}",
                input: 'text',
                inputLabel: "{{ app()->getLocale() == 'en' ? 'Tag Version to Update (e.g. v1.3.5)' : 'Versi Tag yang Akan Diupdate (contoh: v1.3.5)' }}",
                inputPlaceholder: 'v1.3.5',
                showCancelButton: true,
                confirmButtonText: 'Force Update Tag',
                confirmButtonColor: '#ffc700',
                inputValidator: (value) => {
                    if (!value) {
                        return "{{ app()->getLocale() == 'en' ? 'Tag version is required!' : 'Versi tag wajib diisi!' }}";
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerGitAction('force_tag', {
                        tag_name: result.value
                    });
                }
            });
        }

        // Prompt Delete Release Tag
        function promptDeleteTag() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Delete Release Tag' : 'Hapus Tag Release' }}",
                input: 'text',
                inputLabel: "{{ app()->getLocale() == 'en' ? 'Tag Version to Delete (e.g. v1.3.5)' : 'Versi Tag yang Akan Dihapus (contoh: v1.3.5)' }}",
                inputPlaceholder: 'v1.3.5',
                showCancelButton: true,
                confirmButtonText: 'Delete Tag',
                confirmButtonColor: '#f1416c',
                inputValidator: (value) => {
                    if (!value) {
                        return "{{ app()->getLocale() == 'en' ? 'Tag version is required!' : 'Versi tag wajib diisi!' }}";
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerGitAction('delete_tag', {
                        tag_name: result.value
                    });
                }
            });
        }

        // Prompt Switch Branch
        function promptSwitchBranch() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Switch Git Branch' : 'Ganti Branch Git' }}",
                input: 'text',
                inputLabel: "{{ app()->getLocale() == 'en' ? 'Target Branch Name (e.g. main, dev)' : 'Nama Branch Tujuan (contoh: main, dev)' }}",
                inputPlaceholder: 'main',
                showCancelButton: true,
                confirmButtonText: 'Switch Branch',
                inputValidator: (value) => {
                    if (!value) {
                        return "{{ app()->getLocale() == 'en' ? 'Branch name is required!' : 'Nama branch wajib diisi!' }}";
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerGitAction('switch_branch', {
                        branch_name: result.value
                    });
                }
            });
        }

        // Prompt 1-Click Auto Release
        function promptAutoRelease() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? '1-Click Auto Release' : '1-Click Auto Release' }}",
                html: `
                <div class="text-start mb-3 fs-7 text-gray-600">Proses ini akan otomatis mengeksekusi git add, commit, push, dan tagging rilis secara bersamaan.</div>
                <input id="swal_auto_commit" class="swal2-input m-0 mb-3 w-100" placeholder="Pesan Commit (opsional)">
                <input id="swal_auto_tag" class="swal2-input m-0 w-100" placeholder="Versi Release (contoh: v1.3.5)">
            `,
                focusConfirm: false,
                showCancelButton: true,
                confirmButtonText: 'Jalankan Auto Release',
                confirmButtonColor: '#50cd89',
                preConfirm: () => {
                    const tag = document.getElementById('swal_auto_tag').value;
                    if (!tag) {
                        Swal.showValidationMessage(
                            "{{ app()->getLocale() == 'en' ? 'Tag version is required!' : 'Versi tag wajib diisi!' }}"
                            );
                        return false;
                    }
                    return {
                        commit_message: document.getElementById('swal_auto_commit').value ||
                            'Auto release update',
                        tag_name: tag
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerGitAction('auto_release', result.value);
                }
            });
        }

        // Confirm Reset Local Changes
        function confirmResetLocal() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Reset All Local Changes?' : 'Reset Semua Perubahan Lokal?' }}",
                text: "{{ app()->getLocale() == 'en' ? 'This action will discard all unstaged files and uncommitted edits! (git reset --hard & git clean -fd)' : 'Tindakan ini akan menghapus seluruh file uncommitted dan editan lokal! (git reset --hard & git clean -fd)' }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f1416c',
                confirmButtonText: "{{ app()->getLocale() == 'en' ? 'Yes, Reset Local' : 'Ya, Reset Lokal' }}",
                cancelButtonText: "{{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}"
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerGitAction('reset_local');
                }
            });
        }

        // Confirm Sync with Origin
        function confirmSyncOrigin() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Sync Repository with Origin?' : 'Sinkronkan Repositori dengan GitHub?' }}",
                text: "{{ app()->getLocale() == 'en' ? 'Local branch will be force-reset to match origin repository!' : 'Branch lokal akan di-reset paksa agar persis dengan origin di GitHub!' }}",
                icon: 'danger',
                showCancelButton: true,
                confirmButtonColor: '#f1416c',
                confirmButtonText: "{{ app()->getLocale() == 'en' ? 'Yes, Force Sync' : 'Ya, Force Sync' }}",
                cancelButtonText: "{{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}"
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerGitAction('sync_origin');
                }
            });
        }

        // Confirm Reset Database & Fresh Seed
        function confirmMigrateFreshSeed() {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Reset Database & Seed Data?' : 'Reset Database & Fresh Seed?' }}",
                text: "{{ app()->getLocale() == 'en' ? 'WARNING: All database tables will be dropped and re-seeded from scratch! (php artisan migrate:fresh --seed)' : 'PERINGATAN: Seluruh tabel database akan dihapus dan diisi ulang dari awal! (php artisan migrate:fresh --seed)' }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f1416c',
                confirmButtonText: "{{ app()->getLocale() == 'en' ? 'Yes, Reset Database' : 'Ya, Reset Database' }}",
                cancelButtonText: "{{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}"
            }).then((result) => {
                if (result.isConfirmed) {
                    triggerMaintenance('migrate_fresh_seed');
                }
            });
        }

        // Trigger Maintenance Action
        function triggerMaintenance(action) {
            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Running Maintenance Task...' : 'Menjalankan Tugas Pemeliharaan...' }}",
                text: "{{ app()->getLocale() == 'en' ? 'Please wait' : 'Mohon tunggu sejenak' }}",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: "{{ route('appsupport.console-developer.maintenance') }}",
                type: "POST",
                data: {
                    request_type: 'maintenance',
                    action: action
                },
                success: function(res) {
                    Swal.close();
                    if (res.success) {
                        if (action === 'migrate_fresh_seed') {
                            showConsoleOutput('Reset Database Success', action, res.output +
                                "\n\n[SISTEM INFO] Database & Seeder telah di-reset dari awal. Saat Anda menutup jendela ini, Anda akan otomatis dialihkan ke halaman Login.",
                                false, "{{ url('/login') }}");
                        } else {
                            const reloadMaintenance = ['seed_menu', 'clear_cache', 'migrate', 'storage_link'];
                            const shouldReload = reloadMaintenance.includes(action);
                            showConsoleOutput('Maintenance Result', action, res.output, shouldReload);
                        }
                    } else {
                        SwalHelper.error(res.message);
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    SwalHelper.validationError(xhr);
                }
            });
        }

        // Submit Component Generator Form
        function submitGenerator(e) {
            e.preventDefault();
            var data = {
                request_type: 'generator',
                subfolder: $('#gen_subfolder').val(),
                feature: $('#gen_feature').val(),
                generator_type: $('#gen_type').val()
            };

            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Generating Code Components...' : 'Membuat Komponen Kode...' }}",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: "{{ route('appsupport.console-developer.generator') }}",
                type: "POST",
                data: data,
                success: function(res) {
                    Swal.close();
                    if (res.success) {
                        var logStr = (res.results || []).join("\n");
                        showConsoleOutput(res.message, 'Code Generator', logStr);
                    } else {
                        SwalHelper.error(res.message);
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    SwalHelper.validationError(xhr);
                }
            });
        }

        // Submit File Utility
        function submitFileUtility(e, type) {
            e.preventDefault();
            var form = $(e.target);
            var data = form.serialize() + '&request_type=file_utility&utility_type=' + type;

            Swal.fire({
                title: "{{ app()->getLocale() == 'en' ? 'Processing File Utility...' : 'Memproses Utilitas File...' }}",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: "{{ route('appsupport.console-developer.file-utility') }}",
                type: "POST",
                data: data,
                success: function(res) {
                    Swal.close();
                    if (res.success) {
                        showConsoleOutput(res.message, type, res.output);
                    } else {
                        SwalHelper.error(res.message);
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    SwalHelper.validationError(xhr);
                }
            });
        }

        // Submit File Utility Prefix Form
        function submitFileUtilityPrefix(e) {
            e.preventDefault();
            var type = $('#prefix_utility_type').val();
            submitFileUtility(e, type);
        }
    </script>
@endsection
