@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Help
        @endslot
        @slot('li_2')
            {{ __('help.skema_pemrograman') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card mb-5 mb-xl-8">
                <div class="card-body pt-6">
                    <!--====================================================-->
                    <!-- KUMPULAN WIDGET ANALISIS HARI/KESELURUHAN APLIKASI -->
                    <!--====================================================-->
                    <div class="mb-10">
                        @if (app()->getLocale() == 'en')
                            <!-- EN VERSION -->
                            <div class="card schema-card bg-light-primary border border-primary p-6 mb-8 rounded">
                                <h3 class="fw-bold text-gray-900 mb-2">Comprehensive Application Analysis & Evaluation</h3>
                                <p class="text-gray-700 fs-6 mb-0">
                                    Below is a Comprehensive Analysis & In-Depth Evaluation of the Laravel 12-based Master
                                    WebAdmin application.<br><br>
                                    This analysis covers 4 main pillars: Functionality, Security, Visualization (UI/UX), and
                                    Usability & Informativeness (Usability & DX).
                                </p>
                            </div>

                            <div class="row g-6 mb-8">
                                <!-- Left Column Stack (Widgets 1, 2, 3) -->
                                <div class="col-12 col-xl-6 d-flex flex-column gap-6">
                                    <!-- Widget 1: Architecture & Stack -->
                                    <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">1. ARCHITECTURE OVERVIEW & TECH STACK</h4>
                                        <ul class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Core Framework:</strong> Laravel 12.0 (PHP ^8.2)</li>
                                            <li><strong>Frontend & UI Theme:</strong> Metronic 8 (Bootstrap 5, Vanilla JS,
                                                Keenicons Duotone)</li>
                                            <li><strong>Role & Permission Management:</strong> Spatie Laravel-Permission 6.x
                                            </li>
                                            <li><strong>Data Processing & Export/Import:</strong> Yajra DataTables 12.0,
                                                PhpSpreadsheet, Mavinoo Batch</li>
                                            <li><strong>Auth & Session System:</strong> Laravel Breeze (Sanctum/Session
                                                Auth), Auto Session Idle Timeout</li>
                                            <li><strong>Main Architecture:</strong> <strong>Structure Mirroring</strong>
                                                (4-Layer alignment between Route, Controller, Form Request, Model, and Blade
                                                View) + <strong>Hybrid Routing</strong> (Static action routes & Dynamic
                                                pages routing based on view directory scanning).</li>
                                        </ul>
                                    </div>

                                    <!-- Widget 2: Functionality -->
                                    <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">2. FUNCTIONALITY ANALYSIS (Functionality &
                                            Features)</h4>
                                        <div class="text-gray-700 fs-7 lh-lg">
                                            <div class="fw-bold text-gray-900 mb-1">A. User & Access Control Management
                                                (RBAC)</div>
                                            <ol class="mb-3 ps-4">
                                                <li><strong>Complete User Management:</strong> User CRUD, registration
                                                    approval workflow, rejection log with history
                                                    (<code>RejectedRegistration</code>), and account
                                                    activation/deactivation.</li>
                                                <li><strong>Granular Authorization Matrix:</strong>
                                                    <ul class="ps-4">
                                                        <li><strong>Role Access:</strong> Permission settings based on Role.
                                                        </li>
                                                        <li><strong>User Access:</strong> Fine-grained direct permission
                                                            settings per user.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Safe-State Impersonation (<code>impersonate</code> &
                                                        <code>leave-impersonate</code>):</strong> Allows Administrators to
                                                    switch to another user's perspective safely without losing the original
                                                    account session.</li>
                                                <li><strong>Structured Password Reset Flow:</strong> User password reset
                                                    request requiring Administrator verification and action.</li>
                                                <li><strong>Bulk Action & Data Import/Export:</strong>
                                                    <ul class="ps-4">
                                                        <li>Bulk default role assignment (Bulk Assign Default Role).</li>
                                                        <li>Bulk user import via Excel/CSV (complete with row-by-row
                                                            validation, duplicate email detection, and problematic row
                                                            detection).</li>
                                                        <li>Automated Excel template file generator (PhpSpreadsheet) with
                                                            header styling and sample data.</li>
                                                    </ul>
                                                </li>
                                            </ol>

                                            <div class="fw-bold text-gray-900 mb-1">B. System & Administration Support (App
                                                Support)</div>
                                            <ol class="mb-3 ps-4">
                                                <li><strong>AppFitur (Dynamic Feature Toggle):</strong> Dynamically
                                                    enable/disable system features or modules from the dashboard without
                                                    redeploying code.</li>
                                                <li><strong>AppProfil (Application Identity):</strong> Centralized identity
                                                    settings (Logo, Favicon, App Title, Description, Footer, & Metadata).
                                                </li>
                                                <li><strong>BackupDb (Database Backup Engine):</strong> Database backup
                                                    creation (Full Dump / Custom Table Selection), .sql file download,
                                                    database restoration (Restore Engine), and inter-table relationship
                                                    visualizer.</li>
                                                <li><strong>DataLogin (Login Session Audit Log):</strong> Tracking login
                                                    session audit trails (IP Address, User-Agent, Login/Logout Time, Account
                                                    Status) with clear-all audit history capabilities.</li>
                                                <li><strong>Referensi (Master Lookup Table):</strong> Centralized dynamic
                                                    reference/category data management flexible for system dropdown options
                                                    and master data.</li>
                                                <li><strong>Menu Builder (Menu Management):</strong> Hierarchical menu
                                                    structure configuration (sidebar/header) complete with drag-and-drop
                                                    sorting, permission protection, and status toggles.</li>
                                            </ol>

                                            <div class="fw-bold text-gray-900 mb-1">C. User Profile Self-Service</div>
                                            <ul class="mb-0 ps-4">
                                                <li>Self-service profile management based on Multi-Tab Single Route
                                                    (<code>/profil-pengguna?tab=...</code>), including Avatar updates,
                                                    Account Settings, Password Changes, and Self-Deactivation Requests.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Widget 3: Security -->
                                    <div class="card schema-card bg-light-danger border border-danger p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">3. SECURITY ASSESSMENT</h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Authentication & Middleware Protection:</strong> All internal routes
                                                are protected by <code>auth</code> and <code>verified</code> middleware.
                                                Equipped with Session Idle Timer (<code>_idle-timer.blade.php</code>) to
                                                automatically detect user inactivity and prevent session hijacking.</li>
                                            <li><strong>Isolated & Clean Input Validation (Form Request):</strong> 100% form
                                                inputs are processed through dedicated FormRequest classes
                                                (<code>App\Http\Requests\...</code>). This prevents Mass Assignment
                                                vulnerabilities and guarantees data is sanitized before reaching
                                                Controllers/Models.</li>
                                            <li><strong>Path Traversal & Command Injection Prevention:</strong> In the
                                                <code>BackupDbController</code> module, filenames are handled using
                                                <code>basename($filename)</code> to prevent Directory Traversal attacks
                                                (<code>../</code>).</li>
                                            <li><strong>CSRF & XSS Protection:</strong> Usage of
                                                <code>@@csrf</code> directive across Blade forms and
                                                <code>X-CSRF-TOKEN</code> headers on AJAX/Fetch calls. Blade syntax
                                                <code>@{{  }}</code> automatically performs HTML escaping to
                                                prevent Cross-Site Scripting (XSS).</li>
                                            <li><strong>Immediate Session Invalidation on Deactivation:</strong> When a user
                                                account is deactivated by Admin, the system automatically deletes user
                                                session rows from the <code>sessions</code> table, instantly logging out
                                                active sessions on other devices.</li>
                                            <li><strong>Core Role Protection:</strong> Built-in roles like
                                                <code>master</code> and <code>admin</code> as well as currently active user
                                                accounts are protected against self-deletion.</li>
                                        </ol>
                                    </div>
                                </div>

                                <!-- Right Column Stack (Widgets 4, 5, 6) -->
                                <div class="col-12 col-xl-6 d-flex flex-column gap-6">
                                    <!-- Widget 4: Visualization -->
                                    <div class="card schema-card bg-light-info border border-info p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">4. VISUALIZATION & UI/UX DESIGN
                                            (Visualization & Aesthetics)</h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Metronic 8 & Dynamic Theme Integration:</strong> Modern interface
                                                supporting Dark/Light Mode Switcher, glassmorphism card accents, and
                                                consistent duotone Keenicons (<code>ki-duotone</code>).</li>
                                            <li><strong>Native Responsive Data Tables (Strict Metronic Rules):</strong> Uses
                                                native Bootstrap 5 <code>&lt;div class="table-responsive"&gt;</code>
                                                wrappers and Metronic minimum column width classes (e.g.,
                                                <code>min-w-150px</code>, <code>min-w-200px</code>) on
                                                <code>&lt;th&gt;</code> elements. <em>No Dirty CSS:</em> Zero custom
                                                <code>&lt;style&gt;</code> blocks that break layout fluidity or mobile
                                                rendering.</li>
                                            <li><strong>Tooltip Precision & Modal Safeguards:</strong> Uses <code>&lt;span
                                                    data-bs-toggle="tooltip"&gt;</code> wrappers on icon buttons
                                                (<code>btn-icon</code>) to prevent attribute collisions between Bootstrap
                                                Tooltips and Bootstrap Modals.</li>
                                            <li><strong>Interactive User Feedback (Global JS Helper):</strong> Employs
                                                centralized helper <code>SwalHelper</code>
                                                (<code>public/assets/js/custom/crud-helper.js</code>) for uniform
                                                SweetAlert2 notifications: Success Toast/Dialog with timer progress bar,
                                                Validation Error 422 Parser cleanly rendering XHR error messages, and Delete
                                                Confirmation Dialogs with bold confirmation colors
                                                (<code>btn-danger</code>).</li>
                                        </ol>
                                    </div>

                                    <!-- Widget 5: Usability & DX -->
                                    <div class="card schema-card bg-light-success border border-success p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">5. USABILITY & INFORMATIVENESS (Usability &
                                            DX)</h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>100% Bilingual Support (Multi-Language <code>en</code> &
                                                    <code>id</code>):</strong> Instant language switching via
                                                <code>/lang/{locale}</code> with local session persistence. Using
                                                <code>@@if(app()->getLocale() == 'en')</code>
                                                conditionals and key mapping <code>__('menu....')</code> guarantees 0 mixed
                                                language text on navigation and content.</li>
                                            <li><strong>Operational Guide Modals on Every Page (Petunjuk
                                                    Operasional):</strong> Every module page features a red <code>?</code>
                                                help button in the top header opening an Operational Guide Modal
                                                (<code>&lt;feature&gt;-help-modal.blade.php</code>). Uses uniform 4-Card
                                                Sectioning: Overview & System Purpose, Architecture & Features, Step-by-Step
                                                Workflow, Safeguards & System Rules.</li>
                                            <li><strong>Developer Programming Documentation:</strong> Built-in internal
                                                programming schema documentation inside the app
                                                (<code>/help/pemrograman/...</code>), easing onboarding for new developers.
                                            </li>
                                            <li><strong>Predictable Developer Experience (Structure Mirroring):</strong>
                                                Folder structures for Controllers, Form Requests, Models, and Blade Partials
                                                are 100% aligned with view paths. Adding new features is fast and
                                                predictable.</li>
                                        </ol>
                                    </div>

                                    <!-- Widget 6: Recommendations -->
                                    <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">6. STRATEGIC RECOMMENDATIONS (Optional
                                            Enhancements)</h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Automated Scheduled Backup:</strong> <span class="badge badge-light-success fw-bold me-1">Implemented</span> Added Laravel Scheduler in <code>routes/console.php</code> & Artisan Command <code>php artisan backup:db</code> to automate periodic database SQL dumps (daily at 01:00 AM).</li>
                                            <li><strong>Audit Trail Mutation Logging:</strong> <span class="badge badge-light-success fw-bold me-1">Implemented</span> Expanded DataLogin into multi-tab Audit Trail & Activity Logging using <code>spatie/laravel-activitylog</code> to track database model data changes (Create, Update, Delete) with diff inspection.</li>
                                            <li><strong>Sensitive Endpoint Rate Limiting:</strong> Add <code>throttle</code>
                                                middleware on sensitive endpoints (e.g. login attempts, reset password
                                                requests, database backups).</li>
                                        </ol>
                                    </div>

                                    <!-- Box 7: Conclusion & Strategic Recommendations -->
                                    <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">🏆 CONCLUSION & STRATEGIC RECOMMENDATIONS
                                        </h4>

                                        <div class="fw-bold text-gray-900 mb-2 fs-6">Assessment Summary</div>
                                        <div class="table-responsive mb-6">
                                            <table
                                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-3 mb-0">
                                                <thead>
                                                    <tr class="fw-bold text-gray-800 fs-7 border-bottom border-gray-300">
                                                        <th class="min-w-175px">Aspect</th>
                                                        <th class="min-w-150px">Rating</th>
                                                        <th class="min-w-250px">Key Findings</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-7 text-gray-700">
                                                    <tr>
                                                        <td><strong>Architecture & Clean Code</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>Strict Structure Mirroring adoption & highly consistent MVC
                                                            conventions.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Functionality</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>Comprehensive administrative suite (RBAC, Audit Log, DB Backup,
                                                            Import/Export, Feature Toggle).</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Security</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(4.9/5)</strong>
                                                        </td>
                                                        <td>Robust protection across CSRF, XSS, Path Traversal, Form
                                                            Requests, and Session Invalidation.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Visuals (UI/UX)</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>Flawless Metronic 8 integration, responsive layout, clean, and
                                                            consistent styling.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Usability & DX</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>100% Bilingual (en/id) & contextual Operational Guide Modals on
                                                            every module.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="fw-bold text-gray-900 mb-2 fs-6">💡 Strategic Recommendations (Optional
                                            Enhancements)</div>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Automated Scheduled Backup:</strong> <span class="badge badge-light-success fw-bold me-1">Implemented</span> Added Laravel Scheduler in <code>routes/console.php</code> & Artisan Command <code>php artisan backup:db</code> to automate periodic database SQL dumps (daily at 01:00 AM).</li>
                                            <li><strong>Audit Trail Mutation Logging:</strong> <span class="badge badge-light-success fw-bold me-1">Implemented</span> Expanded DataLogin into multi-tab Audit Trail & Activity Logging using <code>spatie/laravel-activitylog</code> to track database model data changes (Create, Update, Delete) with diff inspection.</li>
                                            <li><strong>Sensitive Endpoint Rate Limiting:</strong> Adding
                                                <code>throttle</code> middleware on password reset requests and database
                                                restoration endpoints to prevent brute force attacks.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- ID VERSION -->
                            <div class="card schema-card bg-light-primary border border-primary p-6 mb-8 rounded">
                                <h3 class="fw-bold text-gray-900 mb-2">Analisis Komprehensif & Evaluasi Mendalam Aplikasi
                                    Master WebAdmin</h3>
                                <p class="text-gray-700 fs-6 mb-0">
                                    Berikut adalah Analisis Komprehensif & Evaluasi Mendalam terhadap aplikasi Master
                                    WebAdmin berbasis Laravel 12.<br><br>
                                    Analisis ini mencakup 4 pilar utama: Fungsionalitas, Keamanan, Visualisasi (UI/UX),
                                    serta Kemudahan & Informatif (Usability & DX).
                                </p>
                            </div>

                            <div class="row g-6 mb-8">
                                <!-- Left Column Stack (Widgets 1, 2, 3) -->
                                <div class="col-12 col-xl-6 d-flex flex-column gap-6">
                                    <!-- Widget 1: Arsitektur & Tech Stack -->
                                    <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">1. GAMBARAN UMUM ARSITEKTUR & TECH STACK</h4>
                                        <ul class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Core Framework:</strong> Laravel 12.0 (PHP ^8.2)</li>
                                            <li><strong>Frontend & UI Theme:</strong> Metronic 8 (Bootstrap 5, Vanilla JS,
                                                Keenicons Duotone)</li>
                                            <li><strong>Role & Permission Management:</strong> Spatie Laravel-Permission 6.x
                                            </li>
                                            <li><strong>Data Processing & Export/Import:</strong> Yajra DataTables 12.0,
                                                PhpSpreadsheet, Mavinoo Batch</li>
                                            <li><strong>Auth & Session System:</strong> Laravel Breeze (Sanctum/Session
                                                Auth), Auto Session Idle Timeout</li>
                                            <li><strong>Arsitektur Utama:</strong> <strong>Structure Mirroring</strong>
                                                (Keselarasan 4-Layer antara Route, Controller, Form Request, Model, dan
                                                Blade View) + <strong>Hybrid Routing</strong> (Route aksi statis & Route
                                                dinamis pages berbasis scanning direktori view).</li>
                                        </ul>
                                    </div>

                                    <!-- Widget 2: Fungsionalitas -->
                                    <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">2. ANALISIS FUNGSIONALITAS (Functionality &
                                            Features)</h4>
                                        <div class="text-gray-700 fs-7 lh-lg">
                                            <div class="fw-bold text-gray-900 mb-1">A. Manajemen Pengguna & Otorisasi Hak
                                                Akses (RBAC)</div>
                                            <ol class="mb-3 ps-4">
                                                <li><strong>User Management Lengkap:</strong> CRUD pengguna, persetujuan
                                                    pendaftaran (approval workflow), penolakan pengajuan beserta log histori
                                                    penolakan (<code>RejectedRegistration</code>), serta aktivasi/deaktivasi
                                                    akun.</li>
                                                <li><strong>Matriks Otorisasi Granular:</strong>
                                                    <ul class="ps-4">
                                                        <li><strong>Akses Role:</strong> Pengaturan hak akses (Permission)
                                                            berbasis Peran (Role).</li>
                                                        <li><strong>Akses User:</strong> Pengaturan hak akses langsung per
                                                            pengguna secara presisi (fine-grained).</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Fitur Impersonasi Safe-State (<code>impersonate</code> &
                                                        <code>leave-impersonate</code>):</strong> Memungkinkan Administrator
                                                    untuk berpindah ke sudut pandang pengguna lain secara aman tanpa
                                                    kehilangan sesi akun asli.</li>
                                                <li><strong>Alur Reset Password Terstruktur:</strong> Pengajuan reset
                                                    password pengguna yang membutuhkan verifikasi dan tindakan dari
                                                    Administrator.</li>
                                                <li><strong>Bulk Action & Import/Export Data:</strong>
                                                    <ul class="ps-4">
                                                        <li>Penetapan Role bawaan secara massal (Bulk Assign Default Role).
                                                        </li>
                                                        <li>Fitur Import pengguna massal via Excel/CSV (lengkap dengan
                                                            validasi per baris, deteksi duplikasi email, dan deteksi baris
                                                            bermasalah).</li>
                                                        <li>Generator otomatis file Template Excel (PhpSpreadsheet) lengkap
                                                            dengan styling header dan data sampel.</li>
                                                    </ul>
                                                </li>
                                            </ol>

                                            <div class="fw-bold text-gray-900 mb-1">B. Dukungan System & Administrasi (App
                                                Support)</div>
                                            <ol class="mb-3 ps-4">
                                                <li><strong>AppFitur (Dynamic Feature Toggle):</strong> Kontrol
                                                    aktif/nonaktif fitur atau modul sistem secara dinamis dari dashboard
                                                    tanpa perlu deploy ulang kode.</li>
                                                <li><strong>AppProfil (Identitas Aplikasi):</strong> Pengaturan identitas
                                                    terpusat (Logo, Favicon, Judul Aplikasi, Deskripsi, Footer, & Metadata).
                                                </li>
                                                <li><strong>BackupDb (Engine Backup Database):</strong> Pembuatan backup
                                                    database (Full Dump / Custom Table Selection), Fitur unduh file .sql,
                                                    pemulihan database (Restore Engine), dan visualisasi relasi antar-tabel.
                                                </li>
                                                <li><strong>DataLogin (Audit Log Sesi Login):</strong> Pencatatan rekam
                                                    jejak sesi login (Alamat IP, User-Agent, Waktu Login/Logout, Status
                                                    Akun) dengan kemampuan pembersihan riwayat audit.</li>
                                                <li><strong>Referensi (Master Lookup Table):</strong> Sistem manajemen data
                                                    referensi/kategori terpusat yang fleksibel untuk opsi dropdown/master
                                                    data sistem.</li>
                                                <li><strong>Menu Builder (Manajemen Menu):</strong> Pengaturan struktur menu
                                                    hirarkis (sidebar/header) lengkap dengan penataan urutan (sorting),
                                                    proteksi permission, dan toggle status aktif.</li>
                                            </ol>

                                            <div class="fw-bold text-gray-900 mb-1">C. Self-Service Profil Pengguna</div>
                                            <ul class="mb-0 ps-4">
                                                <li>Pengelolaan profil mandiri berbasis Multi-Tab Single Route
                                                    (<code>/profil-pengguna?tab=...</code>), mencakup pembaruan Avatar,
                                                    Pengaturan Akun, Ganti Password, serta Pengajuan Deaktivasi Akun
                                                    Mandiri.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Widget 3: Keamanan -->
                                    <div class="card schema-card bg-light-danger border border-danger p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">3. ANALISIS KEAMANAN (Security Assessment)
                                        </h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Perlindungi Otentikasi & Middleware:</strong> Seluruh route internal
                                                dilindungi oleh middleware <code>auth</code> dan <code>verified</code>.
                                                Dilengkapi komponen Session Idle Timer (<code>_idle-timer.blade.php</code>)
                                                untuk otomatis mendeteksi inaktivitas pengguna dan mencegah pembajakan sesi
                                                (session hijacking).</li>
                                            <li><strong>Validasi Input Terpisah & Bebas Polusi (Form Request):</strong> 100%
                                                input form diproses melalui kelas khusus FormRequest
                                                (<code>App\Http\Requests\...</code>). Hal ini mencegah kerentanan Mass
                                                Assignment dan menjamin data ter-sanitize sebelum masuk ke Controller/Model.
                                            </li>
                                            <li><strong>Pencegahan Path Traversal & Command Injection:</strong> Pada modul
                                                <code>BackupDbController</code>, penanganan nama file menggunakan
                                                <code>basename($filename)</code> sehingga mencegah serangan Directory
                                                Traversal (<code>../</code>).</li>
                                            <li><strong>Perlindungi CSRF & XSS:</strong> Penggunaan directive
                                                <code>@@csrf</code> pada seluruh form Blade dan
                                                pengiriman header <code>X-CSRF-TOKEN</code> pada panggilan AJAX/Fetch.
                                                Sintaks Blade <code>@{{  }}</code> secara otomatis melakukan
                                                HTML escaping untuk mencegah Cross-Site Scripting (XSS).</li>
                                            <li><strong>Invalidasi Sesi Serta Merta saat Deaktivasi:</strong> Saat akun
                                                pengguna dinonaktifkan oleh Admin, sistem secara otomatis menghapus baris
                                                sesi pengguna di tabel <code>sessions</code>, sehingga akun yang sedang
                                                aktif di device lain langsung ter-logout seketika.</li>
                                            <li><strong>Perlindungi Proteksi Role Inti:</strong> Role bawaan seperti
                                                <code>master</code> dan <code>admin</code> serta akun pengguna aktif saat
                                                ini dicegah dari aksi penghapusan mandiri (self-deletion protection).</li>
                                        </ol>
                                    </div>
                                </div>

                                <!-- Right Column Stack (Widgets 4, 5, 6) -->
                                <div class="col-12 col-xl-6 d-flex flex-column gap-6">
                                    <!-- Widget 4: Visualisasi -->
                                    <div class="card schema-card bg-light-info border border-info p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">4. ANALISIS VISUALISASI & DESAIN UI/UX
                                            (Visualization & Aesthetics)</h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Integrasi Metronic 8 & Dynamic Theme:</strong> Tampilan modern
                                                dengan dukungan Dark/Light Mode Switcher, aksen glassmorphic, serta
                                                penggunaan duotone Keenicons (<code>ki-duotone</code>) yang konsisten.</li>
                                            <li><strong>Tabel Data Responsive Bawaan (Strict Metronic Rules):</strong>
                                                Menggunakan wrapper native Bootstrap 5 <code>&lt;div
                                                    class="table-responsive"&gt;</code> dan class lebar minimum Metronic
                                                (seperti <code>min-w-150px</code>, <code>min-w-200px</code>) pada elemen
                                                <code>&lt;th&gt;</code>. <em>Bebas CSS Kotor:</em> Tidak ditemukan blok
                                                <code>&lt;style&gt;</code> kustom yang merusak fluiditas layout atau
                                                tampilan mobile.</li>
                                            <li><strong>Presisi Tooltip & Proteksi Modal:</strong> Penggunaan wrapper
                                                <code>&lt;span data-bs-toggle="tooltip"&gt;</code> pada tombol ikon
                                                (<code>btn-icon</code>) untuk mencegah konflik atribut (attribute collision)
                                                antara Bootstrap Tooltip dan Bootstrap Modal.</li>
                                            <li><strong>Interaktivitas Umpan Balik (Global JS Helper):</strong> Menggunakan
                                                helper terpusat <code>SwalHelper</code>
                                                (<code>public/assets/js/custom/crud-helper.js</code>) untuk notifikasi
                                                SweetAlert2 yang seragam: Success Toast/Dialog dengan timer progress bar,
                                                Validation Error 422 Parser yang otomatis merender pesan kesalahan XHR
                                                secara rapi, Delete Confirmation Dialog dengan warna konfirmasi tegas
                                                (<code>btn-danger</code>).</li>
                                        </ol>
                                    </div>

                                    <!-- Widget 5: Kemudahan & DX -->
                                    <div class="card schema-card bg-light-success border border-success p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">5. KEMUDAHAN DAN INFORMATIF (Usability & DX)
                                        </h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Dukungan 100% Bilingual (Multi-Language <code>en</code> &
                                                    <code>id</code>):</strong> Pengalihan bahasa instan via
                                                <code>/lang/{locale}</code> dengan penyimpanan sesi lokal. Penerapan blok
                                                kondisi <code>@@if(app()->getLocale() == 'en')</code>
                                                dan pemetaan key translasi <code>__('menu....')</code> memastikan 0 teks
                                                bahasa campuran pada navigasi maupun konten halaman.</li>
                                            <li><strong>Modal Petunjuk Operasional di Setiap Halaman (Petunjuk
                                                    Operasional):</strong> Setiap halaman modul dilengkapi tombol bantuan
                                                merah <code>?</code> di header atas yang membuka Modal Petunjuk Operasional
                                                (<code>&lt;feature&gt;-help-modal.blade.php</code>). Menggunakan format
                                                4-Card Sectioning yang seragam: Overview & Tujuan Fitur (Ikhtisar Sistem),
                                                Arsitektur & Komponen Fitur, Langkah Operasional Step-by-Step, Aturan &
                                                Batasan Keamanan Sistem.</li>
                                            <li><strong>Dokumentasi Internal Pemrograman untuk Developer:</strong>
                                                Menyediakan modul dokumentasi skema pemrograman internal di dalam aplikasi
                                                (<code>/help/pemrograman/...</code>), mempermudah onboarding tim developer
                                                baru.</li>
                                            <li><strong>Developer Experience (DX) yang Diprediksi (Structure
                                                    Mirroring):</strong> Struktur folder Controller, Form Request, Model,
                                                dan Partial Blade diselaraskan 100% dengan path view. Menambah fitur baru
                                                sangat cepat dan terpredictable tanpa membingungkan developer.</li>
                                        </ol>
                                    </div>

                                    <!-- Widget 6: Rekomendasi -->
                                    <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">6. REKOMENDASI PENGEMBANGAN LANJUTAN
                                            (Optional Enhancements)</h4>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Automated Scheduled Backup:</strong> <span class="badge badge-light-success fw-bold me-1">Telah Diimplementasikan</span> Menambahkan Laravel Scheduler di <code>routes/console.php</code> & Artisan Command <code>php artisan backup:db</code> agar modul BackupDb berjalan otomatis secara harian (pkl 01:00 AM).</li>
                                            <li><strong>Audit Trail Mutation Logging:</strong> <span class="badge badge-light-success fw-bold me-1">Telah Diimplementasikan</span> Memperluas pencatatan DataLogin menjadi Audit Trail & Activity Log multi-tab menggunakan paket <code>spatie/laravel-activitylog</code> untuk merekam perubahan data model (Create, Update, Delete) beserta inspeksi diff.</li>
                                            <li><strong>Rate Limiting Endpoint Sensitif:</strong> <span class="badge badge-light-success fw-bold me-1">Telah Diimplementasikan</span> Menambahkan middleware <code>throttle</code> pada endpoint sensitif (misal: login attempts, reset password requests, database backups & restore).</li>
                                        </ol>
                                    </div>

                                    <!-- Box 7: Kesimpulan & Rekomendasi Pengembangan -->
                                    <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                                        <h4 class="fw-bold text-gray-900 mb-4">KESIMPULAN & REKOMENDASI PENGEMBANGAN</h4>

                                        <div class="fw-bold text-gray-900 mb-2 fs-6">Ringkasan Penilaian</div>
                                        <div class="table-responsive mb-6">
                                            <table
                                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-3 mb-0">
                                                <thead>
                                                    <tr class="fw-bold text-gray-800 fs-7 border-bottom border-gray-300">
                                                        <th class="min-w-175px">Aspek</th>
                                                        <th class="min-w-150px">Rating</th>
                                                        <th class="min-w-250px">Catatan Utama</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-7 text-gray-700">
                                                    <tr>
                                                        <td><strong>Arsitektur & Clean Code</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>Penerapan Structure Mirroring dan konvensi MVC sangat konsisten.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Fungsionalitas</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>Fitur administrasi sangat lengkap (RBAC, Audit Log, Backup DB,
                                                            Import/Export, Feature Toggle).</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Keamanan</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span>
                                                            <strong>(4.9/5)</strong></td>
                                                        <td>Penanganan CSRF, XSS, Path Traversal, Form Request, dan Session
                                                            Invalidation sangat aman.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Visual (UI/UX)</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>Metronic 8 terintegrasi sempurna, responsive, rapi, dan
                                                            konsisten.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Kemudahan & Informatif</strong></td>
                                                        <td><span class="text-warning">⭐⭐⭐⭐⭐</span> <strong>(5/5)</strong>
                                                        </td>
                                                        <td>100% Bilingual (en/id) & Modal Petunjuk Operasional kontekstual
                                                            di setiap modul.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="fw-bold text-gray-900 mb-2 fs-6">Rekomendasi Pengembangan Lanjutan
                                            (Optional Enhancements)</div>
                                        <ol class="text-gray-700 fs-7 lh-lg mb-0 ps-4">
                                            <li><strong>Automated Scheduled Backup:</strong> <span class="badge badge-light-success fw-bold me-1">Telah Diimplementasikan</span> Menambahkan Laravel Scheduler di <code>routes/console.php</code> & Artisan Command <code>php artisan backup:db</code> agar modul BackupDb berjalan otomatis secara harian (pkl 01:00 AM).</li>
                                            <li><strong>Audit Trail Mutation Logging:</strong> <span class="badge badge-light-success fw-bold me-1">Telah Diimplementasikan</span> Memperluas pencatatan DataLogin menjadi Audit Trail & Activity Log multi-tab menggunakan paket <code>spatie/laravel-activitylog</code> untuk merekam perubahan data model (Create, Update, Delete) beserta inspeksi diff.</li>
                                            <li><strong>Rate Limiting Endpoint Sensitif:</strong> <span class="badge badge-light-success fw-bold me-1">Telah Diimplementasikan</span> Menambahkan middleware <code>throttle</code> pada endpoint pengajuan reset password, login attempts, dan pemulihan database untuk mencegah serangan brute force.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!--====================================================-->
            <!-- KOTAK KEDUA: SKEMA PEMROGRAMAN & KATEGORI TOPIK -->
            <!--====================================================-->
            <div class="card mb-5 mb-xl-8">
                <div class="card-body pt-6">
                    <!--====================================================-->
                    <!-- KOTAK DOKUMENTASI SKEMA PEMROGRAMAN -->
                    <!--====================================================-->
                    <div class="card schema-card bg-light-primary border border-primary p-6 mb-8 rounded">
                        <h3 class="fw-bold text-gray-900 mb-2">{{ __('help.skema_pemrograman') }}</h3>
                        <p class="text-gray-700 fs-6 mb-0">
                            {{ __('help.skema_pemrograman_tooltip') }}
                        </p>
                    </div>

                    <!--====================================================-->
                    <!-- KATEGORI 1: SKEMA (GRID 3 KOLOM) -->
                    <!--====================================================-->
                    <div class="mb-6">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <span class="badge badge-light-primary">{{ __('help.kategori') }}</span>
                            <h3 class="mb-0 fs-3">{{ __('help.skema') }}</h3>
                        </div>
                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_1') !!}</p>
                    </div>

                    <div class="row g-5 mb-10">
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.route') }}"
                                class="card card-flush h-100 bg-light-primary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-route fs-2hx text-primary flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.route') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_3') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.layout') }}"
                                class="card card-flush h-100 bg-light-danger">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-abstract-46 fs-2hx text-danger flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.layout') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_4') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.komponen-blade-partial') }}"
                                class="card card-flush h-100 bg-light-primary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-element-11 fs-2hx text-primary flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.komponen_blade_and_partial') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_5') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.theme-assets') }}"
                                class="card card-flush h-100 bg-light-secondary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-code fs-2hx text-primary flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.theme_assets') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_6') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.auth-dan-middleware') }}"
                                class="card card-flush h-100 bg-light-dark">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-shield-tick fs-2hx text-dark flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.auth_dan_middleware') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_7') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.struktur-config-menu') }}"
                                class="card card-flush h-100 bg-light-success">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-setting-2 fs-2hx text-success flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.struktur_config_menu') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_8') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.sidebar-menu') }}"
                                class="card card-flush h-100 bg-light-success">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-menu fs-2hx text-success flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.sidebar_menu') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_9') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.header-menu') }}"
                                class="card card-flush h-100 bg-light-warning">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-abstract-14 fs-2hx text-warning flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.header_menu') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_10') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.data-layer') }}"
                                class="card card-flush h-100 bg-light-danger">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-book-open fs-2hx text-danger flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.data_layer') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_11') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.error-handling-dan-fallback') }}"
                                class="card card-flush h-100 bg-light-warning">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-information-5 fs-2hx text-warning flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.error_handling_and_fallback') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_12') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.cache-dan-deployment') }}"
                                class="card card-flush h-100 bg-light-secondary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-cloud-add fs-2hx text-info flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.cache_and_deployment') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_13') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.pemilihan-bahasa') }}"
                                class="card card-flush h-100 bg-light-info">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-flag fs-2hx text-info flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.pemilihan_bahasa') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_14') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.i18n-lanjutan') }}"
                                class="card card-flush h-100 bg-light-dark">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-abstract-39 fs-2hx text-dark flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('menu.i18n_lanjutan') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_15') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.app-support') }}"
                                class="card card-flush h-100 bg-light-success">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-element-11 fs-2hx text-success flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.app_support') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.app_support_skema_desc') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.manajemen-pengguna') }}"
                                class="card card-flush h-100 bg-light-primary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-key fs-2hx text-primary flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.manajemen_pengguna') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.manajemen_pengguna_skema_desc') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.notification') }}"
                                class="card card-flush h-100 bg-light-danger">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-notification-status fs-2hx text-danger flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.notifikasi_system') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.notifikasi_system_skema_desc') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.skema.sweetalert2') }}"
                                class="card card-flush h-100 bg-light-warning">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-information-5 fs-2hx text-warning flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">SweetAlert2 (SwalHelper)</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.sweetalert2_skema_desc') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- KATEGORI 2: OPERASIONAL (GRID 3 KOLOM) -->
                    <!--====================================================-->
                    <div class="separator separator-dashed my-8"></div>

                    <div class="mb-6">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <span class="badge badge-light-warning">{{ __('help.kategori') }}</span>
                            <h3 class="mb-0 fs-3">{{ __('help.operasional') }}</h3>
                        </div>
                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_2') !!}</p>
                    </div>

                    <div class="row g-5">
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.panduan-tambah-halaman') }}"
                                class="card card-flush h-100 bg-light-primary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-file-added fs-2hx text-primary flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.panduan_tambah_halaman') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_16') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.panduan-tambah-menu') }}"
                                class="card card-flush h-100 bg-light-success">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-menu fs-2hx text-success flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.panduan_tambah_menu') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_17') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.konvensi-penamaan') }}"
                                class="card card-flush h-100 bg-light-info">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-text fs-2hx text-info flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.konvensi_penamaan') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_19') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.workflow-developer-harian') }}"
                                class="card card-flush h-100 bg-light-secondary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-calendar-8 fs-2hx text-dark flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.workflow_developer_harian') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_20') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.checklist-qa-smoke-test') }}"
                                class="card card-flush h-100 bg-light-warning">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-shield-search fs-2hx text-warning flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.checklist_qa_smoke_test') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_21') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.playbook-incident-response') }}"
                                class="card card-flush h-100 bg-light-warning">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-shield-tick fs-2hx text-warning flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.playbook_incident_response') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.pages.overview.paragraph_22') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.manajemen-pengguna') }}"
                                class="card card-flush h-100 bg-light-primary">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-profile-user fs-2hx text-primary flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.manajemen_pengguna') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.manajemen_pengguna_operasional_desc') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.app-support') }}"
                                class="card card-flush h-100 bg-light-success">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-element-11 fs-2hx text-success flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.app_support') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.app_support_operasional_desc') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{ route('help.pemrograman.operasional.notification') }}"
                                class="card card-flush h-100 bg-light-danger">
                                <div class="card-body d-flex align-items-start gap-3 py-4">
                                    <i class="ki-duotone ki-notification-status fs-2hx text-danger flex-shrink-0 mt-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>
                                    <div>
                                        <h3 class="mb-1 fs-4">{{ __('help.notifikasi_system') }}</h3>
                                        <p class="text-gray-700 fs-7 mb-0">{!! __('help.notifikasi_system_operasional_desc') !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
