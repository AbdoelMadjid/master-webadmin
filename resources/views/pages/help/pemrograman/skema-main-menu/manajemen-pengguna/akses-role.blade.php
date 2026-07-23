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
                    <span class="schema-pill">Skema Main Menu > Manajemen Pengguna > Akses Role</span>
                    <h2 class="fw-bold">Skema Akses Role (Role-Permissions Matrix & Real-Time Sync)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur manajemen matriks hak akses per role, pengelompokan aksi CRUD per modul, filter pencarian instan, dan pembaharuan counter badge secara real-time.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ARSITEKTUR MATRIKS PERMISSION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & CRUD Matrix Grouping</h4>
                            <pre class="schema-code"><code>// AksesRoleController@index
$matrixPermissions = [];
foreach ($permissions as $perm) {
    $parts = explode(' ', $perm->name, 2);
    $action = count($parts) === 2 ? strtolower($parts[0]) : 'other';
    $module = count($parts) === 2 ? $parts[1] : $perm->name;

    if (in_array($action, ['create', 'read', 'update', 'delete'])) {
        $matrixPermissions[$module][$action] = $perm->name;
    } else {
        $matrixPermissions[$module]['custom'][] = [
            'action' => $action, 'name' => $perm->name
        ];
    }
}</code></pre>
                            <div class="schema-note mt-3">
                                Seluruh permission aplikasi dikelompokkan secara otomatis ke dalam array <code>$matrixPermissions</code> berdasarkan nama modulnya.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLER UPDATE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-sync fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Controller Update (<code>AksesRoleController</code>)</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong><code>POST /manajemenpengguna/akses-role</code></strong><br>
                                    <code>AksesRoleController@update</code> -> Menerima <code>role_id</code> dan array <code>permissions[]</code> terpilih.
                                </div>
                                <div class="schema-step">
                                    <strong>Sinkronisasi Spatie:</strong> Mengeksekusi <code>$role->syncPermissions($permissions)</code> untuk mengganti seluruh permission lama dengan set baru.
                                </div>
                                <div class="schema-step">
                                    <strong>JSON Response & Badge Counter:</strong> Mengembalikan status sukses beserta data role terbaru, memicu <code>SwalHelper.success()</code> dan memperbarui badge sidebar secara instan.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. INTERACTIVE MATRIX UI -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-success">
                            <h4><i class="ki-duotone ki-check-square fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Kontrol Akses Massal & Live Search</h4>
                            <p class="fs-7 text-gray-700">
                                Halaman dilengkapi kontrol praktis untuk menangani jumlah modul yang sangat banyak:
                            </p>
                            <ul class="schema-list">
                                <li><strong>Pencarian Modul On-the-fly:</strong> Input <code>#role_matrix_search</code> menyaring baris modul secara langsung saat mengetik.</li>
                                <li><strong>Toggle Per Baris (Row Toggle):</strong> Checkbox di ujung kanan setiap baris untuk mencentang/mengosongkan seluruh permission modul tersebut dalam 1 klik.</li>
                                <li><strong>Pilih Semua / Kosongkan:</strong> Tombol bulk di toolbar untuk menandai seluruh matriks role aktif secara masal.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
