<!--begin::Modal - Petunjuk Operasional Data Referensi-->
<div class="modal fade" id="kt_modal_referensi_help" tabindex="-1" aria-hidden="true">
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
                <div class="mb-10 text-center">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-element-11 fs-3x text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Data Reference Management' : 'Petunjuk Operasional: Pengelolaan Data Referensi' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Standardized lookup categories and choice options management' : 'Panduan lengkap pengelolaan data acuan standar pilihan formulir sistem' }}
                    </div>
                </div>

                @if (app()->getLocale() == 'en')
                    <!--English Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                System Overview & Purpose
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>Data Reference Management Module</strong> is a centralized lookup engine.
                                Instead of hardcoding choices like <em>Gender (Jenis Kelamin)</em>, <em>Religion
                                    (Agama)</em>, or <em>Marital Status (Status Perkawinan)</em> inside database columns
                                or forms, administrators can dynamically define reference categories and their choice
                                options here.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Data Hierarchy & Structure
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Reference Categories (Kategori Referensi):</strong> The
                                    top-level grouping with unique codes (e.g., <code>JENKEL</code>, <code>AGAMA</code>,
                                    <code>PENDIDIKAN</code>).</li>
                                <li class="mb-2"><strong>Reference Items (Item Referensi):</strong> The selectable
                                    choices inside a category, configured with uppercase code, display label, and
                                    display order (e.g., <code>L</code> - Laki-Laki, <code>P</code> - Perempuan).</li>
                                <li><strong>Interactive Form Preview (Tab Preview):</strong> Live interactive
                                    demonstration tab displaying how form dropdowns dynamically pull values from
                                    reference tables.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                Step-by-Step Operational Workflow
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Create/Edit Category:</strong> Navigate to the <em>Category
                                        Tab</em> and click <span class="badge badge-primary">+ Add Category</span>.
                                    Enter a unique uppercase code (e.g., <code>STATUS_MUTASI</code>) and name.</li>
                                <li class="mb-2"><strong>Add Choice Options:</strong> Switch to the <em>Items
                                        Tab</em>, select the target category from the dropdown filter, and click <span
                                        class="badge badge-success">+ Add Item</span>. Specify code, label name, and
                                    display order.</li>
                                <li class="mb-2"><strong>Toggle Status:</strong> Use the real-time switch controls to
                                    activate or deactivate options. Inactive items are excluded from selection
                                    dropdowns.</li>
                                <li><strong>Verify Live Behavior:</strong> Visit the <em>Live Demo Preview Tab</em> to
                                    test how dropdown elements respond to category updates.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                System Safeguards & Rules
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Protected Core Categories:</strong> Core categories tagged
                                    with <span class="badge badge-light-danger fw-bold fs-8">System</span> (e.g.,
                                    <code>JENKEL</code>, <code>AGAMA</code>) cannot be deleted to protect core
                                    application database integrity.</li>
                                <li class="mb-2"><strong>Unique Codes:</strong> Category codes and item codes within
                                    the same category must be unique.</li>
                                <li><strong>Display Order:</strong> Items with lower display order numbers appear first
                                    in selector lists.</li>
                            </ul>
                        </div>
                    </div>
                @else
                    <!--Indonesian Version-->
                    <div class="d-flex flex-column gap-6">
                        <!--Section 1: Overview-->
                        <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                            <h4 class="fw-bold text-primary mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span
                                        class="path1"></span><span class="path2"></span></i>
                                Gambaran Umum & Fungsi Modul
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Pengelolaan Data Referensi</strong> merupakan mesin acuan data terpusat.
                                Dibandingkan melakukan <em>hardcode</em> pilihan seperti <em>Jenis Kelamin</em>,
                                <em>Agama</em>, <em>Status Perkawinan</em>, atau <em>Tingkat Pendidikan</em> di dalam
                                kodingan/database, Administrator dapat mengelola seluruh kategori acuan dan opsi
                                pilihannya secara dinamis melalui halaman ini.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Struktur & Hirarki Data
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Kategori Referensi (Top-Level Grouping):</strong> Kelompok
                                    acuan utama yang diidentifikasi dengan kode kapital unik (contoh:
                                    <code>JENKEL</code>, <code>AGAMA</code>, <code>PENDIDIKAN</code>).</li>
                                <li class="mb-2"><strong>Item Referensi (Choice Options):</strong> Pilihan opsi yang
                                    dapat dipilih user di bawah kategori tertentu, memiliki kode, label nama, dan urutan
                                    tampil (contoh: <code>L</code> - Laki-Laki, <code>P</code> - Perempuan).</li>
                                <li><strong>Demo Kontrol Form (Tab Preview):</strong> Tab demonstrasi interaktif yang
                                    menampilkan bagaimana kontrol pilihan (<em>select dropdown</em>) mengambil data
                                    acuan langsung secara <em>real-time</em> dari database.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                Alur Operasional Pengelolaan Data
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Membuat Kategori Baru:</strong> Buka <em>Tab Kategori</em>
                                    dan klik tombol <span class="badge badge-primary">+ Tambah Kategori</span>. Masukkan
                                    kode kapital unik (contoh: <code>STATUS_MUTASI</code>) dan nama kategori.</li>
                                <li class="mb-2"><strong>Menambah Opsi Pilihan:</strong> Pindah ke <em>Tab Item
                                        Referensi</em>, pilih kategori tujuan dari filter dropdown, lalu klik <span
                                        class="badge badge-success">+ Tambah Item</span>. Tentukan kode item, nama
                                    label, dan nomor urutan tampil.</li>
                                <li class="mb-2"><strong>Mengatur Status Aktif:</strong> Gunakan sakelar switch untuk
                                    mengaktifkan atau menonaktifkan opsi. Opsi non-aktif tidak akan dimuat dalam
                                    dropdown formulir sistem.</li>
                                <li><strong>Pengujian Interaktif:</strong> Buka <em>Tab Live Preview</em> untuk mencoba
                                    pengujian kontrol formulir secara langsung.</li>
                            </ol>
                        </div>

                        <!--Section 4: System Rules-->
                        <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                            <h4 class="fw-bold text-warning mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i>
                                Aturan & Proteksi Sistem
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Proteksi Referensi Sistem:</strong> Kategori dengan label
                                    <span class="badge badge-light-danger fw-bold fs-8">System</span> (seperti
                                    <code>JENKEL</code>, <code>AGAMA</code>) dilindungi dan tidak dapat dihapus demi
                                    integritas data utama aplikasi.</li>
                                <li class="mb-2"><strong>Keunikan Kode:</strong> Kode kategori dan kode item dalam
                                    kategori yang sama harus unik.</li>
                                <li><strong>Urutan Tampil:</strong> Nomor urutan terendah (misal: 1, 2, 3) akan
                                    ditampilkan paling atas pada daftar pilihan dropdown.</li>
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - Petunjuk Operasional Data Referensi-->
