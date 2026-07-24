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
            {{ __('help.skema_pemrograman') }}
        @endslot
        @slot('li_3')
            Skema Main Menu > Manajemen Pengguna
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero">
                    <span class="schema-pill">Skema Main Menu > Manajemen Pengguna > Permission</span>
                    <h2 class="fw-bold">Skema Permission Management (1 Modul 1 Baris & Batch CRUD Generator)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur manajemen permission dengan pengelompokan 1 modul per baris tabel, pembuat 4 hak akses CRUD 1-klik, single permission kustom, serta aksi batch edit/hapus modul.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. PERBEDAAAN MODUL CRUD BATCH VS SINGLE PERMISSION -->
                    <!--====================================================-->
                    <div class="schema-col-12 mb-4">
                        <div class="schema-card border-start border-4 border-warning">
                            <h4><i class="ki-duotone ki-flash fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Perbandingan Mode Pembuatan Permission</h4>
                            <div class="row g-4 mt-1">
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-warning border border-warning border-opacity-25 h-100">
                                        <h5 class="fw-bold text-gray-900 mb-2">⚡ 1. Modul CRUD (Praktis)</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            <strong>Tujuan:</strong> Membuat seluruh hak akses dasar untuk modul/fitur baru secara instant dalam 1 kali simpan.
                                        </p>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            <strong>Hasil Otomatis:</strong> Cukup mengetikkan nama modul (misal: <code>transaksi</code>), sistem otomatis membuat 4 permission: <code>create transaksi</code>, <code>read transaksi</code>, <code>update transaksi</code>, <code>delete transaksi</code>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded bg-light-primary border border-primary border-opacity-25 h-100">
                                        <h5 class="fw-bold text-gray-900 mb-2">🔑 2. Single Permission (Kustom)</h5>
                                        <p class="fs-7 text-gray-700 mb-2">
                                            <strong>Tujuan:</strong> Membuat 1 buah hak akses khusus yang bukan merupakan aksi CRUD biasa.
                                        </p>
                                        <p class="fs-7 text-gray-700 mb-0">
                                            <strong>Contoh Penggunaan:</strong> <code>export-excel transaksi</code>, <code>approve reset-password</code>, <code>impersonate users</code>, <code>print-pdf laporan</code>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. ARSITEKTUR TABEL 1 MODUL 1 BARIS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Grouping Table 1 Modul 1 Baris (<code>PermissionController</code>)</h4>
                            <pre class="schema-code"><code>// PermissionController@index
$modules = $allPermissions->groupBy(function ($perm) {
    $parts = explode(' ', $perm->name, 2);
    return count($parts) === 2 ? strtolower($parts[1]) : strtolower($perm->name);
})->map(function ($group, $moduleName) {
    return (object) [
        'module_name' => $moduleName,
        'actions'     => $group->map(...),
        'roles'       => $group->pluck('roles')->flatten()->pluck('name')->unique(),
        'total_perms' => $group->count(),
    ];
});</code></pre>
                            <div class="schema-note mt-3">
                                Seluruh permission dikelompokkan berdasarkan <code>module_name</code> sehingga tabel menampilkan 1 modul per baris dengan deretan badge aksi CRUD.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. UI BADGES & ACTION COLORS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-color-swatch fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Metronic Action Badge Color Scheme</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong><code>CREATE</code></strong> -> Badge <code>badge-light-success</code> (Warna Hijau)
                                </div>
                                <div class="schema-step">
                                    <strong><code>READ</code></strong> -> Badge <code>badge-light-info</code> (Warna Cyan)
                                </div>
                                <div class="schema-step">
                                    <strong><code>UPDATE</code></strong> -> Badge <code>badge-light-warning</code> (Warna Kuning)
                                </div>
                                <div class="schema-step">
                                    <strong><code>DELETE</code></strong> -> Badge <code>badge-light-danger</code> (Warna Merah)
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. SMART ROLE FILTER & BATCH ACTIONS -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4><i class="ki-duotone ki-setting-2 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Fitur Batch Edit & Hapus Modul</h4>
                            <p class="fs-7 text-gray-700">
                                Admin dapat melakukan update atau penghapusan seluruh hak akses 1 modul sekaligus secara instant:
                            </p>
                            <pre class="schema-code"><code>// Route API Batch Modul
Route::post('permissions/batch', [PermissionController::class, 'storeBatch'])->name('permissions.store-batch');
Route::get('permissions/module/{module}', [PermissionController::class, 'getModuleData'])->name('permissions.module-data');
Route::post('permissions/module-update', [PermissionController::class, 'updateModule'])->name('permissions.module-update');
Route::delete('permissions/module/{module}', [PermissionController::class, 'destroyModule'])->name('permissions.module-destroy');</code></pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
