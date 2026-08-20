<!--begin::Modal - Petunjuk Operasional Pengelolaan Menu Dinamis-->
<div class="modal fade" id="kt_modal_menu_help" tabindex="-1" aria-hidden="true">
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
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: Dynamic Menu Management' : 'Petunjuk Operasional: Pengelolaan Menu Dinamis' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Dynamic sidebar navigation structure, drag-and-drop sorting, and role permission mapping' : 'Panduan pengolahan struktur menu sidebar dinamis, drag-and-drop urutan, dan pemetaan perizinan role' }}
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
                                System Overview & Menu Architecture
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                The <strong>Dynamic Menu Management Module</strong> controls the application sidebar
                                menu tree. All menu items are rendered directly from database configurations, enabling
                                real-time drag-and-drop reordering, parent-child sub-menu nesting, status switches, and
                                granular role permission guards.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Menu Tree Hierarchy & Attributes
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Category Grouping:</strong> Organizes menus into functional
                                    groups (e.g., <code>Main</code>, <code>System</code>, <code>Help</code>).</li>
                                <li class="mb-2"><strong>Parent-Child Nesting:</strong> Level-1 main menus can contain
                                    nested sub-menus (child items).</li>
                                <li><strong>Permission Mapping:</strong> Map Spatie permissions to restrict menu
                                    visibility by user roles.</li>
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
                                <li class="mb-2"><strong>Add Single Menu:</strong> Click the <span
                                        class="badge badge-light-primary text-primary">+ Add Menu</span> button, fill in
                                    the menu details (Name, Route/URL, Category, Parent, Icon), and save to update
                                    database and sidebar.</li>
                                <li class="mb-2"><strong>Batch Menu Creator (Tambah Partai):</strong> Click <span
                                        class="badge badge-light-success text-success">+ Batch Menu</span> to build an
                                    entire menu structure (Main Menu -> Sub-Menus -> Sub-Sub-Menus) dynamically in a
                                    single transaction.</li>
                                <li class="mb-2"><strong>Real-time Auto-slugging & Auto-translation:</strong> As you
                                    type the Indonesian menu name, the system automatically generates hierarchical
                                    Route/URLs (e.g. <code>manajemensekolah/datakeahlian/bidang-keahlian</code>),
                                    translation keys (e.g. <code>wd_bidang-keahlian</code>), and translates the English
                                    name (e.g. <code>School Management</code>) in real-time.</li>
                                <li class="mb-2"><strong>Edit & Delete Menu:</strong> Use the action buttons (<i
                                        class="ki-duotone ki-pencil fs-6 text-primary"><span class="path1"></span><span
                                            class="path2"></span></i> or <i
                                        class="ki-duotone ki-trash fs-6 text-danger"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i>) on each row to
                                    modify attributes or remove menu items. Deleting a Main Menu (Level 0) or Sub-Menu
                                    (Level 1) automatically deletes all nested child menus underneath.</li>
                                <li class="mb-2"><strong>Drag-and-Drop Reordering:</strong> Click and drag the
                                    drag-handle icon on any menu row to reorder display position in real-time.</li>
                                <li class="mb-2"><strong>Toggle Status:</strong> Use the active switch to immediately
                                    enable or hide a menu item without deleting its record.</li>
                                <li class="mb-2"><strong>Manage Permissions:</strong> Click <span
                                        class="badge badge-light-primary text-primary">+ Permission</span> to map Spatie
                                    role permissions to menu items.</li>
                                <li class="mb-2"><strong>Keenicon Style Configuration:</strong> Select icon style prefixes (<code>ki-duotone</code>, <code>ki-solid</code>, <code>ki-outline</code>) and accurate path counts when creating or editing a menu item in the modal form. To switch all navigation icons globally across the entire system, use the central <span class="badge badge-light-dark text-white">Icon Style</span> switcher on the App Features page (<code>appsupport/app-fiturs</code>).</li>
                                <li><strong>Filter Hierarchy:</strong> Filter the menu table by category or parent menu
                                    to review menu trees.</li>
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
                                <li class="mb-2"><strong>Automatic Bilingual Translation:</strong> The system
                                    automatically translates Indonesian menu names to English using built-in
                                    dictionaries and background translation services, while preserving any custom manual
                                    edits.</li>
                                <li class="mb-2"><strong>Hierarchical Route Auto-Slugging:</strong> Nested sub-menus
                                    automatically inherit and append their parent route paths (Level 0 &rarr; Level 1
                                    &rarr; Level 2).</li>
                                <li class="mb-2"><strong>Recursive Cascade Deletion:</strong> Deleting a parent menu
                                    (Level 0 or Level 1) automatically deletes all nested child sub-menus (Level 1 &
                                    Level 2) recursively from the database.</li>
                                <li class="mb-2"><strong>Bilingual Key Cleanup:</strong> Deleting menu items
                                    automatically removes their corresponding translation entries
                                    (<code>title_key</code>) from both <code>lang/id/menu.php</code> and
                                    <code>lang/en/menu.php</code>.</li>
                                <li class="mb-2"><strong>Parent-Child Safeguard:</strong> Deactivating a parent menu
                                    automatically hides all nested child sub-menus.</li>
                                <li class="mb-2"><strong>Automatic Cache Invalidation:</strong> Saving menu order or
                                    status changes purges the global sidebar menu cache instantly.</li>
                                <li><strong>Core Seeder Preservation:</strong> Original menu seeder files remain
                                    untouched while dynamic overrides take effect smoothly.</li>
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
                                Gambaran Umum & Arsitektur Menu
                            </h4>
                            <p class="fs-6 text-gray-700 m-0">
                                <strong>Modul Pengelolaan Menu Dinamis</strong> mengontrol struktur menu navigasi
                                sidebar aplikasi. Seluruh item menu diambil langsung dari konfigurasi basis data,
                                memungkinkan pengurutan drag-and-drop real-time, hierarki induk-anak (sub-menu), sakelar
                                aktif/nonaktif, dan pembatasan perizinan role.
                            </p>
                        </div>

                        <!--Section 2: Architecture-->
                        <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                            <h4 class="fw-bold text-gray-900 mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-element-11 fs-2 text-dark me-2"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span></i>
                                Hirarki & Atribut Pohon Menu
                            </h4>
                            <ul class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Pengelompokan Kategori:</strong> Mengelompokkan menu ke dalam
                                    kategori fungsional (contoh: <code>Main</code>, <code>System</code>,
                                    <code>Help</code>).</li>
                                <li class="mb-2"><strong>Hierarki Induk-Anak:</strong> Menu utama Tingkat-1 dapat
                                    memiliki beberapa sub-menu anak di dalamnya.</li>
                                <li><strong>Pemetaan Perizinan:</strong> Menghubungkan permission Spatie untuk membatasi
                                    hak akses menu berdasarkan role pengguna.</li>
                            </ul>
                        </div>

                        <!--Section 3: Workflow-->
                        <div class="card schema-card bg-light-info border border-info p-6 rounded">
                            <h4 class="fw-bold text-info mb-3 d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></i>
                                Alur Operasional Pengelolaan Menu
                            </h4>
                            <ol class="fs-6 text-gray-700 m-0 ps-5">
                                <li class="mb-2"><strong>Tambah Menu Tunggal:</strong> Klik tombol <span
                                        class="badge badge-light-primary text-primary">+ Tambah Menu</span>, lengkapi
                                    atribut menu (Nama, Route/URL, Kategori, Induk, Ikon), dan simpan untuk memperbarui
                                    basis data dan sidebar.</li>
                                <li class="mb-2"><strong>Tambah Partai Menu (Batch Creator):</strong> Klik <span
                                        class="badge badge-light-success text-success">+ Tambah Partai Menu</span>
                                    untuk menyusun seluruh pohon menu (Menu Utama -> Sub-Menu -> Sub-Sub-Menu) secara
                                    dinamis dalam satu kali simpan.</li>
                                <li class="mb-2"><strong>Otomatisasi Route & Penerjemah Real-Time:</strong> Saat
                                    mengetik Nama Menu (ID), sistem secara otomatis membuat Route/URL bertingkat
                                    (contoh: <code>manajemensekolah/datakeahlian/bidang-keahlian</code>), kunci
                                    translasi (contoh: <code>wd_bidang-keahlian</code>), dan menerjemahkan nama Bahasa
                                    Inggris (contoh: <code>School Management</code>).</li>
                                <li class="mb-2"><strong>Edit & Hapus Menu:</strong> Gunakan tombol aksi (<i
                                        class="ki-duotone ki-pencil fs-6 text-primary"><span
                                            class="path1"></span><span class="path2"></span></i> atau <i
                                         class="ki-duotone ki-trash fs-6 text-danger"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i>) pada setiap baris
                                    tabel untuk mengubah atribut atau menghapus menu. Jika menu utama (Level 0) atau
                                    sub-menu (Level 1) dihapus, maka seluruh anak menu di dalamnya akan otomatis
                                    terhapus.</li>
                                <li class="mb-2"><strong>Pengurutan Drag-and-Drop:</strong> Klik dan geser ikon
                                    drag-handle pada baris menu untuk mengubah urutan posisi secara real-time.</li>
                                <li class="mb-2"><strong>Sakelar Status:</strong> Gunakan switch toggle untuk
                                    mengaktifkan atau menyembunyikan item menu dari sidebar.</li>
                                <li class="mb-2"><strong>Kelola Perizinan:</strong> Klik tombol <span
                                        class="badge badge-light-primary text-primary">+ Permission</span> untuk
                                    memetakan syarat hak akses role.</li>
                                <li class="mb-2"><strong>Konfigurasi Gaya Ikon Keenicons:</strong> Atur gaya ikon menu individual (<code>ki-duotone</code>, <code>ki-solid</code>, <code>ki-outline</code>) dan layer path saat menambah/mengubah menu di form modal. Untuk mengganti gaya seluruh ikon navigasi secara global di seluruh sistem, gunakan fitur terpusat <span class="badge badge-light-dark text-white">Gaya Ikon</span> pada halaman Fitur Aplikasi (<code>appsupport/app-fiturs</code>).</li>
                                <li><strong>Penyaringan Hierarki:</strong> Saring tabel menu berdasarkan kategori atau
                                    menu induk untuk meninjau struktur menu.</li>
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
                                <li class="mb-2"><strong>Penerjemah Otomatis Bahasa Inggris:</strong> Sistem otomatis
                                    menerjemahkan nama menu Bahasa Indonesia ke Bahasa Inggris menggunakan kamus
                                    internal dan layanan online, dengan tetap mempertahankan kustomisasi manual
                                    pengguna.</li>
                                <li class="mb-2"><strong>Otomatisasi Route Bertingkat:</strong> Sub-menu turunan
                                    otomatis mengambil dan menggabungkan prefix path induknya (Level 0 &rarr; Level 1
                                    &rarr; Level 2).</li>
                                <li class="mb-2"><strong>Penghapusan Kaskade Rekursif:</strong> Menghapus menu induk
                                    (Level 0 atau Level 1) secara otomatis menghapus seluruh turunan sub-menu di
                                    dalamnya (Level 1 & Level 2) secara rekursif dari database.</li>
                                <li class="mb-2"><strong>Pembersihan Kunci Translasi:</strong> Penghapusan menu
                                    secara otomatis membersihkan entri translasi bilingual (<code>title_key</code>) dari
                                    <code>lang/id/menu.php</code> dan <code>lang/en/menu.php</code>.</li>
                                <li class="mb-2"><strong>Proteksi Induk-Anak:</strong> Menonaktifkan menu utama
                                    (induk) secara otomatis menyembunyikan seluruh sub-menu anak di dalamnya.</li>
                                <li class="mb-2"><strong>Pembersihan Cache Otomatis:</strong> Setiap perubahan urutan
                                    atau status sakelar akan langsung membersihkan cache menu sidebar global.</li>
                                <li><strong>Preservasi Seeder Utama:</strong> Konfigurasi seeder awal tetap terjaga
                                    bersih sementara penyesuaian dinamis berlaku di atasnya.</li>
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
<!--end::Modal - Petunjuk Operasional Pengelolaan Menu Dinamis-->
