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
            {{ app()->getLocale() == 'en' ? 'Release & Git Tagging' : 'Rilis Versi & Git Tagging' }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Top Action Bar / Operational Guide Trigger-->
            <div class="d-flex align-items-center justify-content-between mb-6">
                <div>
                    <h3 class="fw-bold text-gray-900 m-0">
                        <i class="ki-duotone ki-tag fs-1 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        {{ app()->getLocale() == 'en' ? 'Version Release & Git Tagging Operations' : 'Panduan Operasional Rilis Versi & Git Tagging' }}
                    </h3>
                    <span class="text-muted fs-7">
                        {{ app()->getLocale() == 'en' ? 'Step-by-step workflow for semantic versioning, git tagging, and GitHub Release publishing.' : 'Langkah-langkah terstruktur rilis versi, penandaan Git Tag, dan publikasi Rilis GitHub.' }}
                    </span>
                </div>
                <div>
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                        <button type="button" class="btn btn-icon btn-danger shadow-xs" data-bs-toggle="modal" data-bs-target="#kt_modal_rilis_versi_dan_git_tagging_help">
                            <i class="ki-duotone ki-question fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </button>
                    </span>
                </div>
            </div>
            <!--end::Top Action Bar-->

            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">
                        <i class="ki-duotone ki-code text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Release Engineering
                    </span>
                    <h2 class="fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Release & Git Tagging Operations Guide' : 'Panduan Operasional Rilis Versi & Git Tagging' }}
                    </h2>
                    <p class="schema-lead">
                        {{ app()->getLocale() == 'en'
                            ? 'Comprehensive step-by-step instructions for developers to manage releases, execute Git tag commands, force update existing tags, and publish GitHub releases independently.'
                            : 'Panduan operasional mandiri bagi developer untuk mengelola versi rilis, mengeksekusi perintah Git tag, memperbarui tag yang ada, dan mempublikasikan Rilis GitHub secara mandiri.' }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-tag fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> SemVer Standard</span>
                        <span class="schema-chip"><i class="ki-duotone ki-terminal fs-8 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Git Tag CLI</span>
                        <span class="schema-chip"><i class="ki-duotone ki-cloud-change fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> GitHub Releases</span>
                        <span class="schema-chip"><i class="ki-duotone ki-file-sheet fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> README Changelog</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                    <!--begin::English Content-->
                    <div class="schema-grid">
                        <!--====================================================-->
                        <!-- 1. SEMANTIC VERSIONING RULES -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    1. Semantic Versioning (SemVer) Naming Standard
                                </h4>
                                <p class="fs-7 text-gray-700 mb-3">
                                    All version releases follow the standard format: <code>vMAJOR.MINOR.PATCH</code> (e.g. <code>v1.0.0</code>, <code>v1.0.1</code>, <code>v1.1.0</code>).
                                </p>
                                <div class="schema-flow">
                                    <div class="schema-step">
                                        <strong>MAJOR Version (v1.0.0 &rarr; v2.0.0):</strong> Incremented when introducing major breaking architectural changes or total refactoring.
                                    </div>
                                    <div class="schema-step">
                                        <strong>MINOR Version (v1.0.0 &rarr; v1.1.0):</strong> Incremented when adding new features or major module additions without breaking backward compatibility.
                                    </div>
                                    <div class="schema-step">
                                        <strong>PATCH Version (v1.0.0 &rarr; v1.0.1):</strong> Incremented for bug fixes, UI adjustments, security patches, or documentation updates.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--====================================================-->
                        <!-- 2. NEW RELEASE EXECUTION WORKFLOW -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    2. Step-by-Step New Release CLI Commands
                                </h4>
                                <p class="fs-7 text-gray-700 mb-2">
                                    Follow these 4 sequential terminal commands to release a new version:
                                </p>
                                <div class="bg-dark p-4 rounded text-white font-monospace fs-8 mb-3 overflow-x-auto">
                                    <div class="text-gray-400 mb-1"># Step 1: Update README.md Changelog & Commit</div>
                                    git add .<br>
                                    git commit -m "docs: update changelog for version v1.0.2"<br>
                                    git push origin main<br><br>
                                    <div class="text-gray-400 mb-1"># Step 2: Create Annotated Git Tag</div>
                                    git tag -a v1.0.2 -m "Release v1.0.2 - Feature Name & Description"<br><br>
                                    <div class="text-gray-400 mb-1"># Step 3: Push Tag to Remote GitHub</div>
                                    git push origin v1.0.2
                                </div>
                                <div class="schema-note">
                                    <strong>Tip:</strong> Always use annotated tags (<code>-a</code>) with descriptive release messages for traceability.
                                </div>
                            </div>
                        </div>

                        <!--====================================================-->
                        <!-- 3. FORCE UPDATING EXISTING TAGS -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    3. Force Updating Existing Git Tags (Source ZIP Update)
                                </h4>
                                <p class="fs-7 text-gray-700 mb-2">
                                    If a tag (e.g. <code>v1.0.1</code>) was pushed earlier and you want the GitHub <code>Source code (zip)</code> archive to include recent fixes without bumping to a new patch version:
                                </p>
                                <div class="bg-dark p-4 rounded text-white font-monospace fs-8 mb-3 overflow-x-auto">
                                    <div class="text-gray-400 mb-1"># Step 1: Force move tag to latest commit</div>
                                    git tag -f -a v1.0.1 -m "Release v1.0.1 - Updated Source Archive"<br><br>
                                    <div class="text-gray-400 mb-1"># Step 2: Force push updated tag to GitHub</div>
                                    git push -f origin v1.0.1
                                </div>
                                <div class="schema-note">
                                    <strong>Note:</strong> GitHub automatically updates the downloadable ZIP archive as soon as the tag reference is force-pushed.
                                </div>
                            </div>
                        </div>

                        <!--====================================================-->
                        <!-- 4. GITHUB RELEASE WEB PUBLISHING -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    4. Publishing Release on GitHub Web Interface
                                </h4>
                                <ol class="fs-7 text-gray-700 mb-3 ps-5">
                                    <li class="mb-2">Open repository tags: <code>https://github.com/AbdoelMadjid/master-webadmin/tags</code>.</li>
                                    <li class="mb-2">Click <code>...</code> or <strong>Create release from tag</strong> next to tag <code>v1.0.2</code>.</li>
                                    <li class="mb-2">Enter Release Title (e.g. <code>v1.0.2 - Security & UI Enhancements</code>).</li>
                                    <li class="mb-2">Copy the release notes from <code>README.md</code> Changelog into the description field.</li>
                                    <li class="mb-0">Click the green <strong>Publish release</strong> button.</li>
                                </ol>
                                <div class="schema-note">
                                    <strong>Rollback/Delete Tag:</strong> Local <code>git tag -d v1.0.2</code> | Remote <code>git push origin --delete v1.0.2</code>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::English Content-->
                @else
                    <!--begin::Indonesian Content-->
                    <div class="schema-grid">
                        <!--====================================================-->
                        <!-- 1. SEMANTIC VERSIONING RULES -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    1. Standar Penamaan Semantic Versioning (SemVer)
                                </h4>
                                <p class="fs-7 text-gray-700 mb-3">
                                    Seluruh rilis versi mengikuti format standar: <code>vMAJOR.MINOR.PATCH</code> (contoh: <code>v1.0.0</code>, <code>v1.0.1</code>, <code>v1.1.0</code>).
                                </p>
                                <div class="schema-flow">
                                    <div class="schema-step">
                                        <strong>Versi MAJOR (v1.0.0 &rarr; v2.0.0):</strong> Dinaikkan saat ada perubahan arsitektur besar (*breaking changes*) atau perombakan sistem total yang tidak kompatibel ke belakang.
                                    </div>
                                    <div class="schema-step">
                                        <strong>Versi MINOR (v1.0.0 &rarr; v1.1.0):</strong> Dinaikkan saat menambahkan fitur baru atau modul utama tanpa merusak kompatibilitas yang ada.
                                    </div>
                                    <div class="schema-step">
                                        <strong>Versi PATCH (v1.0.0 &rarr; v1.0.1):</strong> Dinaikkan untuk perbaikan bug (*bugfix*), perapihan UI, patch keamanan, atau pembaruan dokumentasi.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--====================================================-->
                        <!-- 2. NEW RELEASE EXECUTION WORKFLOW -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    2. Perintah CLI Eksekusi Rilis Versi Baru (Step-by-Step)
                                </h4>
                                <p class="fs-7 text-gray-700 mb-2">
                                    Jalankan 4 urutan perintah terminal berikut untuk merilis versi baru:
                                </p>
                                <div class="bg-dark p-4 rounded text-white font-monospace fs-8 mb-3 overflow-x-auto">
                                    <div class="text-gray-400 mb-1"># Langkah 1: Update README.md Changelog & Commit</div>
                                    git add .<br>
                                    git commit -m "docs: update changelog for version v1.0.2"<br>
                                    git push origin main<br><br>
                                    <div class="text-gray-400 mb-1"># Langkah 2: Buat Tag Git Annotated</div>
                                    git tag -a v1.0.2 -m "Release v1.0.2 - Nama Fitur & Deskripsi"<br><br>
                                    <div class="text-gray-400 mb-1"># Langkah 3: Push Tag ke Remote GitHub</div>
                                    git push origin v1.0.2
                                </div>
                                <div class="schema-note">
                                    <strong>Tips:</strong> Selalu gunakan tag annotated (<code>-a</code>) dengan pesan rilis deskriptif agar riwayat perubahan terekam jelas.
                                </div>
                            </div>
                        </div>

                        <!--====================================================-->
                        <!-- 3. FORCE UPDATING EXISTING TAGS -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    3. Cara Memperbarui Tag yang Sudah Ada (Source ZIP Update)
                                </h4>
                                <p class="fs-7 text-gray-700 mb-2">
                                    Jika tag (contoh: <code>v1.0.1</code>) sudah terlanjur di-push dan Anda ingin file <code>Source code (zip)</code> di GitHub mencakup commit paling mutakhir tanpa menaikkan versi patch:
                                </p>
                                <div class="bg-dark p-4 rounded text-white font-monospace fs-8 mb-3 overflow-x-auto">
                                    <div class="text-gray-400 mb-1"># Langkah 1: Pindahkan tag secara paksa ke commit terbaru</div>
                                    git tag -f -a v1.0.1 -m "Release v1.0.1 - Updated Source Archive"<br><br>
                                    <div class="text-gray-400 mb-1"># Langkah 2: Force push tag yang diperbarui ke GitHub</div>
                                    git push -f origin v1.0.1
                                </div>
                                <div class="schema-note">
                                    <strong>Catatan:</strong> GitHub secara otomatis memperbarui arsip ZIP yang siap diunduh begitu tag di-force push.
                                </div>
                            </div>
                        </div>

                        <!--====================================================-->
                        <!-- 4. GITHUB RELEASE WEB PUBLISHING -->
                        <!--====================================================-->
                        <div class="schema-col-6">
                            <div class="schema-card h-100">
                                <h4 class="fw-bold text-gray-900 mb-3">
                                    4. Publikasi Rilis di Antarmuka Web GitHub
                                </h4>
                                <ol class="fs-7 text-gray-700 mb-3 ps-5">
                                    <li class="mb-2">Buka daftar tag repositori: <code>https://github.com/AbdoelMadjid/master-webadmin/tags</code>.</li>
                                    <li class="mb-2">Klik <code>...</code> atau <strong>Create release from tag</strong> di samping tag <code>v1.0.2</code>.</li>
                                    <li class="mb-2">Isi Judul Rilis (contoh: <code>v1.0.2 - Security & UI Enhancements</code>).</li>
                                    <li class="mb-2">Salin catatan rilis dari seksi Changelog <code>README.md</code> ke dalam kolom deskripsi.</li>
                                    <li class="mb-0">Klik tombol hijau <strong>Publish release</strong>.</li>
                                </ol>
                                <div class="schema-note">
                                    <strong>Rollback/Hapus Tag:</strong> Lokal <code>git tag -d v1.0.2</code> | Remote <code>git push origin --delete v1.0.2</code>.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Indonesian Content-->
                @endif
            </div>
        </div>
    </div>

    @include('pages.help.pemrograman.operasional.partials.rilis-versi-dan-git-tagging-help-modal')
@endsection
