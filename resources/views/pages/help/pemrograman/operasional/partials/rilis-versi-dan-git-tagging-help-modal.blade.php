<!--begin::Modal - Petunjuk Operasional Rilis Versi & Git Tagging-->
<div class="modal fade" id="kt_modal_rilis_versi_dan_git_tagging_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin::Heading Brand-->
                <div class="mb-10 text-center">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-tag fs-3x text-danger">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Version Release & Git Tagging Guide' : 'Petunjuk Operasional Rilis Versi & Git Tagging' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' 
                            ? 'Complete guide to version management, Semantic Versioning, Git tagging, and GitHub Release publishing.' 
                            : 'Panduan lengkap tata cara rilis versi aplikasi, Semantic Versioning, pembuatan Git Tag, dan publikasi Rilis GitHub.' }}
                    </div>
                </div>
                <!--end::Heading Brand-->

                @if(app()->getLocale() == 'en')
                    <!--begin::English Content-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: System Overview & Purpose-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="d-flex align-items-center text-primary fw-bold mb-3">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                1. System Overview & Versioning Purpose
                            </h4>
                            <p class="fs-7 text-gray-700 mb-0">
                                This module documents the standard release pipeline for the <strong>Master WebAdmin</strong> enterprise application. It provides explicit step-by-step instructions for developers to create new version releases (e.g. <code>v1.0.1</code>, <code>v1.0.2</code>), update existing Git tags, and generate clean GitHub Release assets (including automatic source code ZIP downloads) while maintaining synchronized CHANGELOG notes in <code>README.md</code>.
                            </p>
                        </div>

                        <!--Section 2: Architecture & Semantic Versioning Rules-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="d-flex align-items-center text-dark fw-bold mb-3">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                2. Semantic Versioning (SemVer) Standard Rules
                            </h4>
                            <ul class="fs-7 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>MAJOR Version (v1.0.0 &rarr; v2.0.0):</strong> Incremented for major breaking architectural changes, major framework upgrades, or incompatible API revisions.</li>
                                <li class="mb-2"><strong>MINOR Version (v1.0.0 &rarr; v1.1.0):</strong> Incremented when introducing new backward-compatible features or major new module suites.</li>
                                <li class="mb-0"><strong>PATCH Version (v1.0.0 &rarr; v1.0.1):</strong> Incremented for backward-compatible bug fixes, UI polish, security patches, or documentation updates.</li>
                            </ul>
                        </div>

                        <!--Section 3: Step-by-Step Release Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="d-flex align-items-center text-info fw-bold mb-3">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                3. Step-by-Step Execution Workflow
                            </h4>
                            <ol class="fs-7 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Update Changelog:</strong> Add new release details to <code>README.md</code> under section <code>Catatan Rilis & Riwayat Versi (Changelog)</code>.</li>
                                <li class="mb-2"><strong>Commit Changes:</strong> Execute <code>git add .</code> and <code>git commit -m "docs: update changelog for version vX.Y.Z"</code>.</li>
                                <li class="mb-2"><strong>Create Annotated Git Tag:</strong> Run <code>git tag -a vX.Y.Z -m "Release vX.Y.Z - Description"</code>.</li>
                                <li class="mb-2"><strong>Push Tag to GitHub:</strong> Push main branch and tag via <code>git push origin main</code> and <code>git push origin vX.Y.Z</code>.</li>
                                <li class="mb-0"><strong>Publish Release on GitHub:</strong> Navigate to <code>https://github.com/AbdoelMadjid/master-webadmin/tags</code> and click <em>Create release from tag</em>.</li>
                            </ol>
                        </div>

                        <!--Section 4: Safeguards & Force Update Protocol-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="d-flex align-items-center text-warning fw-bold mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                4. Safeguards & Existing Tag Update Protocol
                            </h4>
                            <p class="fs-7 text-gray-700 mb-2">
                                If you need to update an existing tag (e.g. <code>v1.0.1</code>) after committing new changes so that the GitHub source code ZIP archive reflects the latest commit:
                            </p>
                            <div class="bg-dark p-3 rounded text-white font-monospace fs-8">
                                git tag -f -a v1.0.1 -m "Release v1.0.1 - Updated Source Archive"<br>
                                git push -f origin v1.0.1
                            </div>
                        </div>
                    </div>
                    <!--end::English Content-->
                @else
                    <!--begin::Indonesian Content-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: System Overview & Purpose-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="d-flex align-items-center text-primary fw-bold mb-3">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                1. Gambaran Umum & Tujuan Rilis Versi
                            </h4>
                            <p class="fs-7 text-gray-700 mb-0">
                                Modul ini mendokumentasikan standar alur kerja rilis versi untuk aplikasi enterprise <strong>Master WebAdmin</strong>. Memberikan panduan rinci bagi developer untuk membuat rilis versi baru (contoh: <code>v1.0.1</code>, <code>v1.0.2</code>), memperbarui penanda Git Tag yang sudah ada, serta mempublikasikan rilis GitHub (termasuk generasi otomatis arsip source code ZIP) yang terintegrasi dengan catatan CHANGELOG pada berkas <code>README.md</code>.
                            </p>
                        </div>

                        <!--Section 2: Architecture & Semantic Versioning Rules-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="d-flex align-items-center text-dark fw-bold mb-3">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                2. Aturan Standar Semantic Versioning (SemVer)
                            </h4>
                            <ul class="fs-7 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Versi MAJOR (v1.0.0 &rarr; v2.0.0):</strong> Dinaikkan jika terjadi perubahan arsitektur besar (*breaking changes*), upgrade major framework, atau perombakan sistem yang tidak kompatibel ke belakang.</li>
                                <li class="mb-2"><strong>Versi MINOR (v1.0.0 &rarr; v1.1.0):</strong> Dinaikkan saat menambahkan fitur baru yang tetap kompatibel (*backward compatible*).</li>
                                <li class="mb-0"><strong>Versi PATCH (v1.0.0 &rarr; v1.0.1):</strong> Dinaikkan untuk perbaikan bug (*bugfix*), penyesuaian UI, patch keamanan, atau perapihan dokumentasi.</li>
                            </ul>
                        </div>

                        <!--Section 3: Step-by-Step Release Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="d-flex align-items-center text-info fw-bold mb-3">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                3. Alur Langkah-Langkah Pelaksanaan Rilis
                            </h4>
                            <ol class="fs-7 text-gray-700 mb-0 ps-5">
                                <li class="mb-2"><strong>Perbarui Changelog:</strong> Tambahkan detail rilis baru pada berkas <code>README.md</code> seksi <code>Catatan Rilis & Riwayat Versi (Changelog)</code>.</li>
                                <li class="mb-2"><strong>Commit Perubahan:</strong> Jalankan perintah <code>git add .</code> dan <code>git commit -m "docs: update changelog for version vX.Y.Z"</code>.</li>
                                <li class="mb-2"><strong>Buat Tag Git Annotated:</strong> Eksekusi perintah <code>git tag -a vX.Y.Z -m "Release vX.Y.Z - Deskripsi"</code>.</li>
                                <li class="mb-2"><strong>Push Tag ke GitHub:</strong> Push branch utama dan tag via <code>git push origin main</code> dan <code>git push origin vX.Y.Z</code>.</li>
                                <li class="mb-0"><strong>Publikasikan Rilis di GitHub:</strong> Buka <code>https://github.com/AbdoelMadjid/master-webadmin/tags</code> dan klik <em>Create release from tag</em>.</li>
                            </ol>
                        </div>

                        <!--Section 4: Safeguards & Force Update Protocol-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="d-flex align-items-center text-warning fw-bold mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                4. Aturan Keamanan & Protokol Force Update Tag
                            </h4>
                            <p class="fs-7 text-gray-700 mb-2">
                                Jika Anda perlu memperbarui tag yang sudah ada (contoh: <code>v1.0.1</code>) agar file arsip ZIP source code di GitHub mencakup commit paling mutakhir:
                            </p>
                            <div class="bg-dark p-3 rounded text-white font-monospace fs-8">
                                git tag -f -a v1.0.1 -m "Release v1.0.1 - Updated Source Archive"<br>
                                git push -f origin v1.0.1
                            </div>
                        </div>
                    </div>
                    <!--end::Indonesian Content-->
                @endif

                <!--begin::Dismiss Button-->
                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
                <!--end::Dismiss Button-->
            </div>
            <!--end::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - Petunjuk Operasional Rilis Versi & Git Tagging-->
