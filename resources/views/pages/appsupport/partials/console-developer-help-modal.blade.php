<div class="modal fade" id="kt_modal_console_developer_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <div class="text-center mb-9">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-question fs-3x text-danger">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Developer Console' : 'Petunjuk Operasional: Console Developer' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en'
                            ? 'Web-based interactive GUI for CLI git:manager commands, system diagnostics, and code generators'
                            : 'Antarmuka kontrol berbasis web untuk perintah CLI git:manager, diagnostik sistem, dan generator kode' }}
                    </div>
                </div>

                <div class="d-flex flex-column gap-6">
                    {{-- Section 1: Overview --}}
                    <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                        <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                    class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? '1. System Overview & Purpose' : '1. Gambaran Umum & Tujuan Modul' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <p class="text-gray-700 fs-6 mb-0">
                                The <strong>Developer Console</strong> converts terminal CLI features from <code>php
                                    artisan git:manager</code> into a intuitive, web-based dashboard. It enables
                                administrators and developers to execute Git repository operations, clear application
                                cache, generate AGENTS.md compliant CRUD components, and manage template files without
                                leaving the web browser interface.
                            </p>
                        @else
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Console Developer</strong> memindahkan seluruh fungsi terminal CLI <code>php
                                    artisan git:manager</code> ke dalam dashboard antarmuka web yang intuitif. Fitur ini
                                memungkinkan admin/pengembang untuk menjalankan operasi Git repositori, membersihkan
                                cache aplikasi, membuat komponen CRUD sesuai standar <code>AGENTS.md</code>, serta
                                mengelola file template secara langsung dari browser.
                            </p>
                        @endif
                    </div>

                    {{-- Section 2: Architecture --}}
                    <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                        <h4 class="text-dark fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? '2. Module Architecture & Sub-Tabs' : '2. Arsitektur & Sub-Tab Fitur' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>Git Operations:</strong> Git status summary, branch switcher,
                                    commit & push modal, release tag creator, local reset, and live log history.</li>
                                <li class="mb-2"><strong>Setup & Maintenance:</strong> 1-Click post-clone project
                                    initialization, cache clearing (<code>optimize:clear</code>), route/config
                                    optimization, and storage linking.</li>
                                <li class="mb-2"><strong>CRUD & Component Generator:</strong> Generates Models,
                                    Controllers, Form Requests, Blade Views, and Bilingual Operational Help Modals
                                    matching project guidelines.</li>
                                <li><strong>File Utilities:</strong> Mass batch file prefix insertion/removal and
                                    recursive <code>.html</code> to <code>.blade.php</code> file conversion.</li>
                            </ul>
                        @else
                            <ul class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2"><strong>Git Operations:</strong> Ringkasan status Git, pemindah
                                    branch, modal commit & push, pembuat tag release, reset perubahan lokal, dan riwayat
                                    log komit.</li>
                                <li class="mb-2"><strong>Setup & Maintenance:</strong> Inisialisasi project 1-Click
                                    post-clone, pembersihan cache aplikasi (<code>optimize:clear</code>), optimasi
                                    route/config, dan penyambungan storage link.</li>
                                <li class="mb-2"><strong>CRUD & Component Generator:</strong> Membuat Model,
                                    Controller, Form Request, Blade View, dan Modal Petunjuk Dwibahasa sesuai aturan
                                    <code>AGENTS.md</code>.
                                </li>
                                <li><strong>Utilitas File:</strong> Tambah/hapus prefix nama file secara massal dan
                                    konversi berkas <code>.html</code> ke <code>.blade.php</code> secara rekursif.</li>
                            </ul>
                        @endif
                    </div>

                    {{-- Section 3: Workflow --}}
                    <div class="card schema-card bg-light-info border border-info p-6 rounded">
                        <h4 class="text-info fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? '3. Step-by-Step Operational Workflow' : '3. Alur Langkah Penggunaan' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Select the desired operational category tab from the top navigation
                                    bar.</li>
                                <li class="mb-2">Click any action button (e.g. <em>Git Status</em>, <em>Clear
                                        Cache</em>, or <em>1-Click Post-Clone Init</em>).</li>
                                <li class="mb-2">For actions requiring parameters (such as Commit & Push or Component
                                    Generator), complete the popup form fields and click submit.</li>
                                <li>Review execution logs and status results directly inside the embedded
                                    <strong>Console Terminal Viewer</strong> modal.
                                </li>
                            </ol>
                        @else
                            <ol class="text-gray-700 fs-6 mb-0 ps-5">
                                <li class="mb-2">Pilih tab kategori operasi yang diinginkan pada navigasi tab bagian
                                    atas.</li>
                                <li class="mb-2">Klik tombol aksi (contoh: <em>Git Status</em>, <em>Clear Cache</em>,
                                    atau <em>1-Click Post-Clone Init</em>).</li>
                                <li class="mb-2">Untuk perintah yang membutuhkan parameter (seperti Commit & Push atau
                                    Generator Komponen), isi bidang form popup lalu tekan submit.</li>
                                <li>Tinjau log hasil eksekusi secara langsung melalui modal <strong>Console Terminal
                                        Viewer</strong>.</li>
                            </ol>
                        @endif
                    </div>

                    {{-- Section 4: Safeguards --}}
                    <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                        <h4 class="text-warning fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            {{ app()->getLocale() == 'en' ? '4. Safeguards & Administrative Rules' : '4. Safeguard & Aturan Keamanan' }}
                        </h4>
                        @if (app()->getLocale() == 'en')
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Safety Notice:</strong> Destructive operations such as <code>Reset Local
                                    Changes</code> and <code>Sync with Origin</code> will display a confirmation dialog
                                prompt before execution. Ensure all important work is committed before performing
                                destructive resets.
                            </p>
                        @else
                            <p class="text-gray-700 fs-6 mb-0">
                                <strong>Catatan Keamanan:</strong> Perintah destruktif seperti <code>Reset Perubahan
                                    Lokal</code> dan <code>Sync dari Origin</code> akan menampilkan konfirmasi
                                SweetAlert2 sebelum dieksekusi. Pastikan pekerjaan penting telah di-commit sebelum
                                melakukan reset.
                            </p>
                        @endif
                    </div>
                </div>

                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
