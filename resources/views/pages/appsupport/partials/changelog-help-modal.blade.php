<div class="modal fade" id="kt_modal_changelog_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <!--begin::Modal Header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <!--end::Modal Header-->

            <!--begin::Modal Body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Branding Header-->
                <div class="text-center mb-13">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-time fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Changelog & Release History' : 'Petunjuk Operasional: Catatan Perubahan & Versi' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Complete documentation for tracking version history, git commits, and application releases' : 'Dokumentasi lengkap pemantauan riwayat versi, commit git, dan evolusi rilis aplikasi' }}
                    </div>
                </div>
                <!--end::Branding Header-->

                <div class="d-flex flex-column gap-6">
                    @if (app()->getLocale() == 'en')
                        <!-- Section 1: System Overview & Purpose -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                1. System Overview & Purpose
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                The <strong>Application Changelog Module</strong> provides complete transparency into
                                the development lifecycle of the Master WebAdmin Suite. It automatically tracks version
                                increments, feature rollouts, bug fixes, UI enhancements, and live git commits from
                                version <code>v1.0.0</code> to current release <code>v1.1.3</code>.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                2. Architecture & Sub-Modules
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Version Release Timeline:</strong> Chronological visual timeline detailing
                                    version numbers, release dates, author badges, and category change highlights.
                                </li>
                                <li class="mb-2">
                                    <strong>Git Commit Log:</strong> Real-time DataTable displaying raw git push
                                    messages, commit hashes, authors, and commit categorization tags.
                                </li>
                                <li>
                                    <strong>Version Breakdown & Highlights:</strong> Card-based breakdown summarizing
                                    each version's major features, bug fixes, and commit counts.
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3: Step-by-Step Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                3. Step-by-Step Operational Workflow
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Reviewing Latest Version:</strong> Check the top summary statistics card for
                                    current version badge, total releases, total commits, and last push date.
                                </li>
                                <li class="mb-2">
                                    <strong>Expanding Commit Lists:</strong> Click the commit accordion link inside any
                                    timeline item to view individual git commit hashes and messages for that specific
                                    release.
                                </li>
                                <li class="mb-2">
                                    <strong>Filtering Commit Log:</strong> Switch to the <span
                                        class="badge badge-info">Git Commit Log</span> tab and use the search bar to
                                    filter commits by hash, author, or keywords.
                                </li>
                                <li>
                                    <strong>Comparing Release Packages:</strong> Navigate to <span
                                        class="badge badge-primary">Version Breakdown</span> tab to compare feature
                                    scopes across versions.
                                </li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards & System Rules -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                4. System Safeguards & Best Practices
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Automated Parsing & Fallbacks:</strong> Git commits are parsed dynamically
                                    via system Process execution with graceful fallback arrays for restricted server
                                    environments.
                                </li>
                                <li class="mb-2">
                                    <strong>Semantic Versioning Alignment:</strong> All versions follow Semantic
                                    Versioning rules (<code>MAJOR.MINOR.PATCH</code>) corresponding to Git release tags.
                                </li>
                                <li>
                                    <strong>Read-Only Audit Trail:</strong> The changelog module is an immutable audit
                                    log ensuring full accountability for code changes.
                                </li>
                            </ul>
                        </div>
                    @else
                        <!-- Section 1: System Overview & Purpose -->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                1. Gambaran Umum & Tujuan Sistem
                            </h4>
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Modul Catatan Perubahan (Changelog)</strong> menyajikan transparansi penuh
                                terhadap siklus pengembangan Master WebAdmin Suite. Modul ini merekam secara otomatis
                                peningkatan versi, rilis fitur baru, perbaikan bug, penyempurnaan UI, dan riwayat commit
                                git dari versi awal <code>v1.0.0</code> hingga versi terbaru <code>v1.1.3</code>.
                            </p>
                        </div>

                        <!-- Section 2: Architecture & Features -->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                                2. Arsitektur & Sub-Modul Fitur
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Linimasa Rilis Versi:</strong> Linimasa visual kronologis yang merinci nomor
                                    versi, tanggal rilis, nama pengembang, dan poin perubahan utama.
                                </li>
                                <li class="mb-2">
                                    <strong>Riwayat Commit Git:</strong> Tabel DataTables real-time yang menampilkan
                                    pesan commit, kode hash git, pengembang, dan tag kategori commit.
                                </li>
                                <li>
                                    <strong>Ringkasan Breakdown Versi:</strong> Tampilan kartu ringkasan yang
                                    mengelompokkan fitur utama, perbaikan bug, dan total commit pada setiap rilis versi.
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3: Step-by-Step Workflow -->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                3. Operasional Langkah Demi Langkah
                            </h4>
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Memeriksa Versi Terbaru:</strong> Lihat kartu statistik utama di bagian atas
                                    untuk mengetahui nomor versi aktif, total rilis versi, total commit, dan tanggal
                                    push terakhir.
                                </li>
                                <li class="mb-2">
                                    <strong>Membuka Rincian Commit Rilis:</strong> Klik tautan akordeon commit pada
                                    kartu linimasa rilis untuk melihat rincian kode hash dan pesan commit git pada versi
                                    tersebut.
                                </li>
                                <li class="mb-2">
                                    <strong>Mencari Log Commit:</strong> Pindah ke tab <span
                                        class="badge badge-info">Riwayat Commit Git</span> dan gunakan form pencarian
                                    untuk memfilter commit berdasarkan kata kunci atau pengembang.
                                </li>
                                <li>
                                    <strong>Membandingkan Paket Rilis:</strong> Buka tab <span
                                        class="badge badge-primary">Ringkasan Breakdown Versi</span> untuk membandingkan
                                    cakupan fitur antar versi.
                                </li>
                            </ol>
                        </div>

                        <!-- Section 4: Safeguards & System Rules -->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                4. Aturan Sistem & Proteksi Kebijakan
                            </h4>
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">
                                    <strong>Parsing Otomatis & Fallback:</strong> Commit git diparse secara dinamis
                                    melalui eksekusi Process sistem dengan fallback data terstruktur jika akses shell
                                    dibatasi hosting.
                                </li>
                                <li class="mb-2">
                                    <strong>Kesesuaian Versi Semantik:</strong> Seluruh penetapan versi mengikuti aturan
                                    <em>Semantic Versioning</em> (<code>MAJOR.MINOR.PATCH</code>) sesuai tag rilis Git.
                                </li>
                                <li>
                                    <strong>Audit Log Read-Only:</strong> Modul catatan perubahan bersifat
                                    <em>read-only</em> untuk menjamin integritas riwayat jejak audit pengembangan kode.
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>

                <!--begin::Dismiss Action-->
                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
                <!--end::Dismiss Action-->
            </div>
            <!--end::Modal Body-->
        </div>
    </div>
</div>
