<!--begin::Feature Editor Tab-->
<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header border-0 pt-6">
        <div class="card-title flex-column">
            <h3 class="fw-bold text-gray-900 m-0">
                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                {{ app()->getLocale() == 'en' ? 'Public Feature View Editor' : 'Editor Tampilan Seksi Feature Publik' }}
            </h3>
            <span class="text-muted fs-7 mt-1">
                {{ app()->getLocale() == 'en' ? 'Directly inspect and edit HTML/Blade code of theme feature partials with auto-backup and live caching.' : 'Inspeksi dan edit langsung kode HTML/Blade pada seksi feature tema dengan backup otomatis dan tembolok instan.' }}
            </span>
        </div>
        <div class="card-toolbar gap-2">
            <div class="d-flex align-items-center gap-2">
                <!-- Theme Selector -->
                <span class="fw-semibold text-gray-700 fs-7 d-none d-sm-inline">{{ app()->getLocale() == 'en' ? 'Theme:' : 'Tema:' }}</span>
                <select id="editor_theme_selector" class="form-select form-select-sm form-select-solid w-150px">
                    @foreach($themes as $t)
                        <option value="{{ $t->id }}" {{ $selectedTheme?->id == $t->id ? 'selected' : '' }}>
                            {{ $t->name }} {{ $t->is_active ? '(' . (app()->getLocale() == 'en' ? 'Active' : 'Aktif') . ')' : '' }}
                        </option>
                    @endforeach
                </select>

                <!-- Feature File Selector -->
                <span class="fw-semibold text-gray-700 fs-7 d-none d-sm-inline">{{ app()->getLocale() == 'en' ? 'File:' : 'File:' }}</span>
                <select id="editor_file_selector" class="form-select form-select-sm form-select-solid w-200px">
                    @forelse($availableFeatureFiles as $ff)
                        <option value="{{ $ff }}">
                            {{ $ff }}.blade.php
                        </option>
                    @empty
                        <option value="">-- {{ app()->getLocale() == 'en' ? 'No files found' : 'Tidak ada file' }} --</option>
                    @endforelse
                </select>
            </div>
        </div>
    </div>

    <div class="card-body pt-2">
        <!-- Editor Controls Bar -->
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 p-4 mb-4 bg-light-primary rounded border border-primary border-dashed">
            <div class="d-flex align-items-center gap-3">
                <span class="badge badge-light-primary fw-bold px-3 py-2 fs-7" id="active_file_badge">
                    <i class="ki-duotone ki-file fs-6 me-1"><span class="path1"></span><span class="path2"></span></i>
                    <span id="current_file_label">_how-it-works.blade.php</span>
                </span>
                <span class="text-muted fs-8 d-none d-md-inline" id="backup_status_label">
                    <i class="ki-duotone ki-information-2 fs-7 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    {{ app()->getLocale() == 'en' ? 'Auto-backup enabled on save' : 'Backup otomatis aktif saat menyimpan' }}
                </span>
            </div>

            <div class="d-flex align-items-center gap-2">
                <!-- Theme mode toggle -->
                <button type="button" class="btn btn-sm btn-icon btn-light-dark shadow-xs" id="btn_toggle_editor_theme" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Toggle Dark/Light Mode' : 'Ganti Mode Gelap/Terang' }}">
                    <i class="ki-duotone ki-night-day fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                </button>

                <!-- Restore Backup Button -->
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Restore from last backup' : 'Pulihkan dari backup terakhir' }}">
                    <button type="button" class="btn btn-sm btn-light-warning shadow-xs d-inline-flex align-items-center" id="btn_restore_backup" disabled>
                        <i class="ki-duotone ki-arrows-loop fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                        <span class="d-none d-sm-inline">{{ app()->getLocale() == 'en' ? 'Restore Backup' : 'Pulihkan Backup' }}</span>
                    </button>
                </span>

                <!-- Reset Button -->
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Reload original content' : 'Muat ulang isi asli' }}">
                    <button type="button" class="btn btn-sm btn-light shadow-xs d-inline-flex align-items-center" id="btn_reload_editor">
                        <i class="ki-duotone ki-arrow-counterclockwise fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                        <span class="d-none d-sm-inline">{{ app()->getLocale() == 'en' ? 'Reload' : 'Muat Ulang' }}</span>
                    </button>
                </span>

                <!-- Save Changes Button -->
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Save code changes' : 'Simpan perubahan kode' }}">
                    <button type="button" class="btn btn-sm btn-primary shadow-xs d-inline-flex align-items-center" id="btn_save_feature_code">
                        <i class="ki-duotone ki-check fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                        <span>{{ app()->getLocale() == 'en' ? 'Save Code' : 'Simpan Kode' }}</span>
                    </button>
                </span>
            </div>
        </div>

        <!-- Code Editor Container -->
        <div class="position-relative">
            <div id="feature_code_editor" style="height: 540px; width: 100%; font-size: 14px; font-family: 'Fira Code', 'Courier New', monospace;" class="border border-gray-300 rounded shadow-inner"></div>
            <!-- Loading Overlay (Initial d-none so Bootstrap flex doesn't override display:none) -->
            <div id="editor_loading_overlay" class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-75 d-none align-items-center justify-content-center rounded" style="z-index: 10;">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Feature Editor Tab-->

<!-- Ace Editor CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.7/ace.js"></script>

<script>
    (function () {
        function initFeatureCodeEditor() {
            var editorElement = document.getElementById('feature_code_editor');
            if (!editorElement) return;

            var aceEditor = null;
            var fallbackTextarea = null;

            if (typeof ace !== 'undefined') {
                aceEditor = ace.edit("feature_code_editor");
                aceEditor.setTheme("ace/theme/tomorrow_night");
                aceEditor.session.setMode("ace/mode/html");
                aceEditor.setShowPrintMargin(false);
                aceEditor.setOptions({
                    fontSize: "13px",
                    tabSize: 4,
                    useSoftTabs: true
                });
            } else {
                // Fallback to standard styled textarea if Ace fails to load
                editorElement.innerHTML = '<textarea id="feature_code_textarea" class="form-control font-monospace bg-dark text-white p-4 h-100" style="font-size: 13px; resize: none;"></textarea>';
                fallbackTextarea = document.getElementById('feature_code_textarea');
            }

            function getCodeValue() {
                if (aceEditor) return aceEditor.getValue();
                if (fallbackTextarea) return fallbackTextarea.value;
                return '';
            }

            function setCodeValue(val) {
                if (aceEditor) {
                    aceEditor.setValue(val || '', -1);
                }
                if (fallbackTextarea) {
                    fallbackTextarea.value = val || '';
                }
            }

            var currentThemeMode = 'dark';
            var btnToggleTheme = document.getElementById('btn_toggle_editor_theme');
            if (btnToggleTheme) {
                btnToggleTheme.addEventListener('click', function () {
                    if (aceEditor) {
                        if (currentThemeMode === 'dark') {
                            aceEditor.setTheme("ace/theme/chrome");
                            currentThemeMode = 'light';
                        } else {
                            aceEditor.setTheme("ace/theme/tomorrow_night");
                            currentThemeMode = 'dark';
                        }
                    } else if (fallbackTextarea) {
                        if (currentThemeMode === 'dark') {
                            fallbackTextarea.classList.remove('bg-dark', 'text-white');
                            fallbackTextarea.classList.add('bg-white', 'text-dark');
                            currentThemeMode = 'light';
                        } else {
                            fallbackTextarea.classList.remove('bg-white', 'text-dark');
                            fallbackTextarea.classList.add('bg-dark', 'text-white');
                            currentThemeMode = 'dark';
                        }
                    }
                });
            }

            var themeSelector = document.getElementById('editor_theme_selector');
            var fileSelector = document.getElementById('editor_file_selector');
            var btnSave = document.getElementById('btn_save_feature_code');
            var btnReload = document.getElementById('btn_reload_editor');
            var btnRestore = document.getElementById('btn_restore_backup');
            var loadingOverlay = document.getElementById('editor_loading_overlay');
            var currentFileLabel = document.getElementById('current_file_label');

            function showLoading(show) {
                if (loadingOverlay) {
                    if (show) {
                        loadingOverlay.classList.remove('d-none');
                        loadingOverlay.classList.add('d-flex');
                    } else {
                        loadingOverlay.classList.remove('d-flex');
                        loadingOverlay.classList.add('d-none');
                    }
                }
            }

            function loadFeatureContent() {
                var themeId = themeSelector ? themeSelector.value : '';
                var featureFile = fileSelector ? fileSelector.value : '';

                if (!featureFile) {
                    setCodeValue('');
                    if (currentFileLabel) currentFileLabel.textContent = '-';
                    return;
                }

                showLoading(true);
                var url = "{{ route('appsupport.theme-frontpage.feature.content') }}?theme_id=" + encodeURIComponent(themeId) + "&feature_file=" + encodeURIComponent(featureFile);

                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(function(res) { return res.json(); })
                .then(function(data) {
                    showLoading(false);
                    if (data.success) {
                        setCodeValue(data.content || '');
                        if (currentFileLabel) currentFileLabel.textContent = data.file_name || (featureFile + '.blade.php');
                        if (btnRestore) btnRestore.disabled = !data.has_backup;
                    } else {
                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.error(data.message || 'Failed to load feature file content.');
                        }
                    }
                })
                .catch(function(err) {
                    showLoading(false);
                    console.error(err);
                });
            }

            if (themeSelector) {
                themeSelector.addEventListener('change', function () {
                    window.location.href = "{{ route('appsupport.theme-frontpage') }}?tab=feature-editor&theme_id=" + encodeURIComponent(this.value);
                });
            }

            if (fileSelector) {
                fileSelector.addEventListener('change', loadFeatureContent);
            }

            if (btnReload) {
                btnReload.addEventListener('click', loadFeatureContent);
            }

            if (btnSave) {
                btnSave.addEventListener('click', function () {
                    var themeId = themeSelector ? themeSelector.value : '';
                    var featureFile = fileSelector ? fileSelector.value : '';
                    var content = getCodeValue();

                    if (!featureFile) {
                        if (typeof SwalHelper !== 'undefined') {
                            SwalHelper.error("{{ app()->getLocale() == 'en' ? 'Please select a feature file.' : 'Silakan pilih file feature terlebih dahulu.' }}");
                        }
                        return;
                    }

                    showLoading(true);
                    fetch("{{ route('appsupport.theme-frontpage.feature.update') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            theme_id: themeId,
                            feature_file: featureFile,
                            content: content
                        })
                    })
                    .then(function(res) {
                        return res.json().then(function(data) {
                            return { status: res.status, body: data };
                        });
                    })
                    .then(function(result) {
                        showLoading(false);
                        if (result.status === 200 && result.body.success) {
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.success(result.body.message);
                            }
                            if (btnRestore) btnRestore.disabled = false;
                        } else if (result.status === 422) {
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.validationError({ responseJSON: result.body });
                            }
                        } else {
                            if (typeof SwalHelper !== 'undefined') {
                                SwalHelper.error(result.body.message || 'Failed to save feature code.');
                            }
                        }
                    })
                    .catch(function(err) {
                        showLoading(false);
                        console.error(err);
                    });
                });
            }

            if (btnRestore) {
                btnRestore.addEventListener('click', function () {
                    var themeId = themeSelector ? themeSelector.value : '';
                    var featureFile = fileSelector ? fileSelector.value : '';

                    if (typeof Swal !== 'undefined') {
                        Swal.fire({
                            title: "{{ app()->getLocale() == 'en' ? 'Restore Backup?' : 'Pulihkan Backup?' }}",
                            text: "{{ app()->getLocale() == 'en' ? 'This will overwrite current code with the last saved backup snapshot.' : 'Ini akan menimpa kode saat ini dengan salinan backup terakhir.' }}",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: "{{ app()->getLocale() == 'en' ? 'Yes, Restore' : 'Ya, Pulihkan' }}",
                            cancelButtonText: "{{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}",
                            customClass: {
                                confirmButton: 'btn btn-warning',
                                cancelButton: 'btn btn-light'
                            }
                        }).then(function (res) {
                            if (res.isConfirmed) {
                                showLoading(true);
                                fetch("{{ route('appsupport.theme-frontpage.feature.restore') }}", {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        theme_id: themeId,
                                        feature_file: featureFile
                                    })
                                })
                                .then(function(res) { return res.json(); })
                                .then(function(data) {
                                    showLoading(false);
                                    if (data.success) {
                                        setCodeValue(data.content || '');
                                        if (typeof SwalHelper !== 'undefined') {
                                            SwalHelper.success(data.message);
                                        }
                                    } else {
                                        if (typeof SwalHelper !== 'undefined') {
                                            SwalHelper.error(data.message || 'Failed to restore backup.');
                                        }
                                    }
                                })
                                .catch(function(err) {
                                    showLoading(false);
                                    console.error(err);
                                });
                            }
                        });
                    }
                });
            }

            // Load initial content on load
            loadFeatureContent();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initFeatureCodeEditor);
        } else {
            initFeatureCodeEditor();
        }
    })();
</script>
