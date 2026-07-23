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
                    <h2 class="fw-bold">Skema Permission Management (Action Badges & Smart Filters)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur manajemen permission, ekstraksi otomatis tipe aksi (`create`, `read`, `update`, `delete`), penyaringan instan berdasar role, dan tombol reset filter.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. ARSITEKTUR & EKSTRAKSI AKSI -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Data Mapping (<code>PermissionController</code>)</h4>
                            <pre class="schema-code"><code>// PermissionController@index
$permissions = Permission::with('roles')->get()->map(function ($perm) {
    $parts = explode(' ', $perm->name, 2);
    if (count($parts) === 2) {
        $perm->action_type = strtolower($parts[0]);
        $perm->module_name = $parts[1];
    } else {
        $perm->action_type = 'other';
        $perm->module_name = $perm->name;
    }
    return $perm;
});</code></pre>
                            <div class="schema-note mt-3">
                                Ekstraksi string memisahkan kata pertama sebagai <code>action_type</code> (misal: <i>create</i>) dan kata sisa sebagai <code>module_name</code> (misal: <i>appsupport/menu</i>).
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. UI BADGES & ACTION COLORS -->
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
                    <!-- 3. SMART ROLE FILTER & RESET -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card border-start border-4 border-primary">
                            <h4><i class="ki-duotone ki-filter fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Fitur Penyaringan Role & Reset Filter</h4>
                            <p class="fs-7 text-gray-700">
                                Toolbar penyaringan dilengkapi dropdown Select2 dengan opsi <code>All / Semua Role</code> dan <code>Belum Ditugaskan</code>, serta tombol reset yang muncul secara dinamis:
                            </p>
                            <pre class="schema-code"><code>// JS Handler di permissions.blade.php
$('#filter_role').on('change', function() {
    var selectedRole = $(this).val().toLowerCase();
    if(selectedRole === 'unassigned') {
        permissionsTable.column(3).search('Belum ditugaskan').draw();
    } else if(selectedRole === 'all' || !selectedRole) {
        permissionsTable.column(3).search('').draw();
    } else {
        permissionsTable.column(3).search(selectedRole).draw();
    }
    checkFilterResetVisibility();
});</code></pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
