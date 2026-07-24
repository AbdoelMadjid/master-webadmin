@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. MATRIX GROUPING ARCHITECTURE -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & CRUD Matrix Grouping</h4>
            <pre class="schema-code"><code>// AksesRoleController@index
$permissions = Permission::all();
$modules = $permissions->groupBy(function ($perm) {
    $parts = explode(' ', $perm->name, 2);
    return count($parts) === 2 ? $parts[1] : 'other';
});</code></pre>
            <div class="schema-note mt-3">
                Grouping splits permission names based on module word suffix (e.g. `create appsupport/menu` is grouped under module `appsupport/menu`).
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. CONTROLLER UPDATE & SYNC -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-sync fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Controller Update (<code>AksesRoleController</code>)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong><code>POST /manajemenpengguna/akses-role</code></strong><br>
                    <code>AksesRoleController@update</code> -> Accepts <code>role_id</code> and array of <code>permissions[]</code>.
                </div>
                <div class="schema-step">
                    <strong>Sync Execution:</strong> Uses Spatie <code>$role->syncPermissions($request->permissions)</code> to update all permissions for a role simultaneously.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. SMART SEARCH & BULK TOGGLE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-check-square fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Bulk Access Controls & Live Search</h4>
            <p class="fs-7 text-gray-700">
                Interactive features on <code>akses-role.blade.php</code> equipped with <strong>Select All</strong>, <strong>Clear All</strong>, module row checkboxes, and live module search:
            </p>
            <pre class="schema-code"><code>// JS Live Search Module
$('#search_module').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#permissions_table tbody tr').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});</code></pre>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ARSITEKTUR MATRIX GROUPING -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Structure & CRUD Matrix Grouping</h4>
            <pre class="schema-code"><code>// AksesRoleController@index
$permissions = Permission::all();
$modules = $permissions->groupBy(function ($perm) {
    $parts = explode(' ', $perm->name, 2);
    return count($parts) === 2 ? $parts[1] : 'other';
});</code></pre>
            <div class="schema-note mt-3">
                Grouping memisahkan nama permission berdasarkan suffix kata modul (misal: `create appsupport/menu` dikelompokkan ke modul `appsupport/menu`).
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. CONTROLLER UPDATE & SYNC -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-sync fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Controller Update (<code>AksesRoleController</code>)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong><code>POST /manajemenpengguna/akses-role</code></strong><br>
                    <code>AksesRoleController@update</code> -> Menerima <code>role_id</code> dan array <code>permissions[]</code>.
                </div>
                <div class="schema-step">
                    <strong>Sync Execution:</strong> Menggunakan Spatie <code>$role->syncPermissions($request->permissions)</code> untuk memperbarui seluruh perizinan role sekaligus.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. SMART SEARCH & BULK TOGGLE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-check-square fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Kontrol Akses Massal & Live Search</h4>
            <p class="fs-7 text-gray-700">
                Fitur interaktif di <code>akses-role.blade.php</code> dilengkapi tombol <strong>Pilih Semua</strong>, <strong>Kosongkan</strong>, centang baris modul, dan pencarian live modul:
            </p>
            <pre class="schema-code"><code>// JS Live Search Modul
$('#search_module').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#permissions_table tbody tr').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});</code></pre>
        </div>
    </div>
</div>
@endif
