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
                    <span class="schema-pill">Skema Main Menu > Manajemen Pengguna > Role</span>
                    <h2 class="fw-bold">Skema Role Management (Role CRUD & Permissions Assignment)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur pengelolaan Role pengguna, integrasi Spatie Laravel Permission, validasi Form Request, serta tampilan modal interaktif berbasis Matriks CRUD.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ARSITEKTUR & MODEL SPATIE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-database fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & Spatie Role Model</h4>
                            <pre class="schema-code"><code>// Model: Spatie\Permission\Models\Role
$role = Role::create(['name' => 'editor', 'guard_name' => 'web']);

// Pivot Tables:
// 1. roles (id, name, guard_name)
// 2. role_has_permissions (permission_id, role_id)
// 3. model_has_roles (role_id, model_type, model_id)

// Controller Relationship:
$roles = Role::withCount(['users', 'permissions'])
             ->with('permissions')
             ->get();</code></pre>
                            <div class="schema-note mt-3">
                                Setiap Role terhubung secara otomatis dengan tabel `permissions` melalui pivot table `role_has_permissions`.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. CONTROLLER & FORM REQUEST -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Controller & Endpoints (<code>RoleController</code>)</h4>
                            <div class="schema-flow">
                                <div class="schema-step">
                                    <strong><code>GET /manajemenpengguna/roles</code></strong><br>
                                    <code>RoleController@index</code> -> Menampilkan daftar role, ringkasan kartu role, serta data matriks permission untuk modal.
                                </div>
                                <div class="schema-step">
                                    <strong><code>POST /manajemenpengguna/roles</code></strong><br>
                                    <code>RoleController@store</code> -> Memvalidasi via <code>RoleRequest</code>, membuat Role baru, dan mensinkronkan permission via <code>$role->syncPermissions()</code>.
                                </div>
                                <div class="schema-step">
                                    <strong><code>PUT /manajemenpengguna/roles/{id}</code></strong><br>
                                    <code>RoleController@update</code> -> Memperbarui nama role dan daftar permission terikat.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. MODAL MATRIX UI -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-info">
                            <h4><i class="ki-duotone ki-element-11 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Tampilan Modal Edit Role (CRUD Matrix & Zero Horizontal Scroll)</h4>
                            <p class="fs-7 text-gray-700">
                                Form modal <code>role-form.blade.php</code> dirancang tanpa scroll horizontal menggunakan penguncian persentase <code>table-layout: fixed</code> dan scroll vertikal presisi:
                            </p>
                            <pre class="schema-code"><code>// role-form.blade.php
&lt;div class="border rounded max-h-350px scroll-y overflow-x-hidden"&gt;
    &lt;table class="table align-middle gs-3 gy-3 mb-0 w-100" style="table-layout: fixed;"&gt;
        &lt;thead class="sticky-top"&gt;
            &lt;tr&gt;
                &lt;th style="width: 35%;"&gt;Modul / Fitur&lt;/th&gt;
                &lt;th style="width: 10%;"&gt;Create&lt;/th&gt;
                &lt;th style="width: 10%;"&gt;Read&lt;/th&gt;
                &lt;th style="width: 10%;"&gt;Update&lt;/th&gt;
                &lt;th style="width: 10%;"&gt;Delete&lt;/th&gt;
                &lt;th style="width: 15%;"&gt;Lainnya&lt;/th&gt;
                &lt;th style="width: 10%;"&gt;Semua&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
