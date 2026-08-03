<div class="row g-6 mb-6">
    {{-- Environment Diagnostic Cards --}}
    <div class="col-md-6 col-lg-4">
        <div class="card bg-light-primary border border-primary h-100 p-5 rounded shadow-xs">
            <h5 class="text-primary fw-bold mb-3 d-flex align-items-center">
                <i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                PHP & Laravel Runtime
            </h5>
            <div class="d-flex flex-column gap-2 text-gray-700 fs-7">
                <div><strong>PHP Version:</strong> <span class="badge badge-light-primary font-monospace">{{ $systemInfo['php_version'] }}</span></div>
                <div><strong>Laravel Version:</strong> <span class="badge badge-light-info font-monospace">{{ $systemInfo['laravel_version'] }}</span></div>
                <div><strong>Environment:</strong> <span class="badge badge-light-success font-monospace">{{ strtoupper($systemInfo['environment']) }}</span></div>
                <div><strong>Debug Mode:</strong> <span class="badge badge-light-{{ $systemInfo['debug_mode'] === 'ENABLED' ? 'warning' : 'secondary' }} font-monospace">{{ $systemInfo['debug_mode'] }}</span></div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card bg-light-info border border-info h-100 p-5 rounded shadow-xs">
            <h5 class="text-info fw-bold mb-3 d-flex align-items-center">
                <i class="ki-duotone ki-setting-2 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                Server Config Limits
            </h5>
            <div class="d-flex flex-column gap-2 text-gray-700 fs-7">
                <div><strong>Operating System:</strong> <span>{{ $systemInfo['os'] }}</span></div>
                <div><strong>Timezone:</strong> <span>{{ $systemInfo['timezone'] }}</span></div>
                <div><strong>Memory Limit:</strong> <span class="font-monospace text-dark fw-bold">{{ $systemInfo['memory_limit'] }}</span></div>
                <div><strong>Max Exec Time:</strong> <span class="font-monospace text-dark fw-bold">{{ $systemInfo['max_exec_time'] }}</span></div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card bg-light-success border border-success h-100 p-5 rounded shadow-xs">
            <h5 class="text-success fw-bold mb-3 d-flex align-items-center">
                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                Database & Storage Status
            </h5>
            <div class="d-flex flex-column gap-2 text-gray-700 fs-7">
                <div>
                    <strong>Database:</strong> 
                    <span class="badge badge-light-{{ $systemInfo['db_connected'] ? 'success' : 'danger' }} font-monospace">
                        {{ $systemInfo['db_connected'] ? 'CONNECTED (' . $systemInfo['db_driver'] . ')' : 'DISCONNECTED' }}
                    </span>
                </div>
                <div><strong>DB Name:</strong> <span class="font-monospace text-dark fw-bold">{{ $systemInfo['db_name'] }}</span></div>
                <div><strong>Engine Version:</strong> <span class="font-monospace text-gray-600 fs-8">{{ $systemInfo['db_version'] }}</span></div>
                <div>
                    <strong>Public Storage Link:</strong> 
                    <span class="badge badge-light-{{ $systemInfo['storage_linked'] ? 'success' : 'warning' }} font-monospace">
                        {{ $systemInfo['storage_linked'] ? 'LINKED' : 'NOT LINKED' }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Setup & Maintenance Action Buttons --}}
<div class="card shadow-xs">
    <div class="card-header border-0 pt-6">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-5 d-flex align-items-center">
                <i class="ki-duotone ki-wrench fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                {{ app()->getLocale() == 'en' ? 'Setup & Maintenance Controls' : 'Kontrol Setup & Pemeliharaan Sistem' }}
            </span>
            <span class="text-muted mt-1 fw-semibold fs-7">
                {{ app()->getLocale() == 'en' ? 'Run post-clone initializations and system optimization commands' : 'Jalankan inisialisasi post-clone dan perintah optimasi sistem' }}
            </span>
        </h3>
    </div>

    <div class="card-body pt-2">
        <div class="row g-4">
            {{-- 1-Click Post Clone Initialization --}}
            <div class="col-md-6">
                <div class="border border-dashed border-gray-300 rounded p-5 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-light-primary fw-bold me-2">1-CLICK INIT</span>
                            <h5 class="fw-bold text-gray-900 mb-0">Post-Clone Project Initialization</h5>
                        </div>
                        <p class="text-muted fs-7 mb-4">
                            {{ app()->getLocale() == 'en'
                                ? 'Runs composer install, npm install, npm run build, key generation, database migrations, and cache clearing in sequence.'
                                : 'Menjalankan composer install, npm install, npm run build, key generate, migrasi database, dan pembersihan cache secara berurutan.' }}
                        </p>
                    </div>
                    <button type="button" class="btn btn-primary shadow-xs w-100" onclick="triggerMaintenance('post_clone_init')">
                        <i class="ki-duotone ki-rocket fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                        Jalankan Inisialisasi Project (Post-Clone)
                    </button>
                </div>
            </div>

            {{-- Application Cache Clear --}}
            <div class="col-md-6">
                <div class="border border-dashed border-gray-300 rounded p-5 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-light-warning fw-bold me-2">CACHE</span>
                            <h5 class="fw-bold text-gray-900 mb-0">Pembersihan Cache (optimize:clear)</h5>
                        </div>
                        <p class="text-muted fs-7 mb-4">
                            {{ app()->getLocale() == 'en'
                                ? 'Clears all framework caches including route, config, compiled view templates, and event listeners.'
                                : 'Menghapus seluruh cache framework termasuk route, konfigurasi, kompilasi view template, dan event listener.' }}
                        </p>
                    </div>
                    <button type="button" class="btn btn-warning shadow-xs w-100" onclick="triggerMaintenance('clear_cache')">
                        <i class="ki-duotone ki-trash fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                        Hapus Semua Cache Aplikasi
                    </button>
                </div>
            </div>

            {{-- Database Migration --}}
            <div class="col-md-6">
                <div class="border border-dashed border-gray-300 rounded p-5 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-light-info fw-bold me-2">MIGRATE</span>
                            <h5 class="fw-bold text-gray-900 mb-0">Migrasi Database (migrate)</h5>
                        </div>
                        <p class="text-muted fs-7 mb-4">
                            {{ app()->getLocale() == 'en'
                                ? 'Runs any pending database migration scripts safely without clearing or seeding data.'
                                : 'Menjalankan skrip migrasi database aplikasi yang belum tereksekusi secara aman tanpa merusak data.' }}
                        </p>
                    </div>
                    <button type="button" class="btn btn-info shadow-xs w-100" onclick="triggerMaintenance('migrate')">
                        <i class="ki-duotone ki-database fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                        Jalankan Migrasi Database
                    </button>
                </div>
            </div>

            {{-- Storage Link --}}
            <div class="col-md-6">
                <div class="border border-dashed border-gray-300 rounded p-5 bg-light-light h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-light-dark fw-bold me-2">STORAGE</span>
                            <h5 class="fw-bold text-gray-900 mb-0">Storage Link (storage:link)</h5>
                        </div>
                        <p class="text-muted fs-7 mb-4">
                            {{ app()->getLocale() == 'en'
                                ? 'Creates a symbolic link from public/storage to storage/app/public for uploaded files.'
                                : 'Membuat symbolic link dari public/storage ke storage/app/public agar berkas publik yang diunggah dapat diakses.' }}
                        </p>
                    </div>
                    <button type="button" class="btn btn-dark shadow-xs w-100" onclick="triggerMaintenance('storage_link')">
                        <i class="ki-duotone ki-link fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                        Buat Storage Symbolic Link
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
