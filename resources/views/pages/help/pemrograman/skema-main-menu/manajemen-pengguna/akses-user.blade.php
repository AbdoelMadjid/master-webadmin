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
                    <span class="schema-pill">Skema Main Menu > Manajemen Pengguna > Akses User</span>
                    <h2 class="fw-bold">Skema Akses User (User Role & Direct Permissions Matrix)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur hak akses per pengguna, perbedaan antara Izin via Role vs Izin Langsung (Direct Permissions), serta indikator badge transparan `Mengikuti Role (X Izin)`.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. SPATIE PERMISSION INHERITANCE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Spatie Permission Inheritance Mechanics</h4>
                            <pre class="schema-code"><code>// Direct Permissions Only (tabel model_has_permissions):
$directPerms = $user->permissions->pluck('name');

// Role Permissions Only (tabel role_has_permissions):
$rolePerms = $user->getPermissionsViaRoles()->pluck('name');

// All Effective Permissions (Direct + Inherited via Role):
$allPerms = $user->getAllPermissions()->pluck('name');</code></pre>
                            <div class="schema-note mt-3">
                                Modal kelola hak akses memanfaatkan <code>$user->getAllPermissions()</code> untuk mencentang seluruh izin aktif secara presisi.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLER ENDPOINTS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Controller Endpoints (<code>AksesUserController</code>)</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong><code>GET /manajemenpengguna/akses-user/{id}</code></strong><br>
                                    <code>AksesUserController@show</code> -> Mengembalikan JSON data user, role terpasang, direct permissions, dan <code>all_permissions</code>.
                                </div>
                                <div class="schema-step">
                                    <strong><code>POST /manajemenpengguna/akses-user</code></strong><br>
                                    <code>AksesUserController@update</code> -> Memperbarui penugasan role via <code>$user->syncRoles()</code> dan izin langsung via <code>$user->syncPermissions()</code>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. TABLE INDICATORS & MODAL FIX -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-element-11 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Indikator Transparan & Modal Matriks Bebas Scroll Horizontal</h4>
                            <p class="fs-7 text-gray-700">
                                Tabel Akses User memberikan kepastian visual kepada administrator mengenai sumber izin pengguna:
                            </p>
                            <ul class="schema-list">
                                <li><strong>Izin Langsung Ada:</strong> Menampilkan badge biru berisi daftar nama izin khusus individual pengguna.</li>
                                <li><strong>Belum Ada Izin Khusus:</strong> Menampilkan badge <code>Mengikuti Role (X Izin)</code> berikon pelindung, yang menjelaskan bahwa pengguna secara otomatis mewarisi seluruh izin dari Role-nya.</li>
                                <li><strong>Modal Matriks CRUD:</strong> Modal <code>akses-user-form.blade.php</code> dikunci dengan persentase lebar 100% dan <code>overflow-x-hidden</code> tanpa scrollbar horizontal.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
