@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. SPATIE PERMISSION INHERITANCE MECHANICS -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Spatie Permission Inheritance Mechanics</h4>
            <pre class="schema-code"><code>// Direct Permission Sync:
$user->syncPermissions($request->permissions);

// Role Assignment Sync:
$user->syncRoles($request->roles);

// Checking Permissions:
$user->hasPermissionTo('create users'); 
// Returns true if permission is owned directly (direct) 
// OR inherited from any of the user's Roles.</code></pre>
            <div class="schema-note mt-3">
                This feature allows assignation of custom access rights (direct permissions) directly to an individual user without modifying their primary Role permissions.
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
                    <strong><code>GET /manajemenpengguna/akses-user</code></strong><br>
                    <code>AksesUserController@index</code> -> Displays list of users and access rights status.
                </div>
                <div class="schema-step">
                    <strong><code>GET /manajemenpengguna/akses-user/{id}</code></strong><br>
                    <code>AksesUserController@show</code> -> Fetches direct permissions and roles of a specific user via AJAX.
                </div>
                <div class="schema-step">
                    <strong><code>POST /manajemenpengguna/akses-user</code></strong><br>
                    <code>AksesUserController@update</code> -> Updates direct permissions and user roles separately.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. UI TRANSPARENT INDICATOR -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-info">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Transparent Indicators & Zero Horizontal Scroll Matrix Modal</h4>
            <p class="fs-7 text-gray-700">
                Permission checkboxes on the <code>akses-user</code> modal feature visual indicators distinguishing Role Inherited vs Direct permissions:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Role Inherited Permission</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Checkbox is checked and <code>disabled</code> state with badge <i>Inherited from Role</i>.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Direct Permission</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Active checkbox that can be checked/unchecked independently for that specific user.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. SPATIE PERMISSION INHERITANCE MECHANICS -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Spatie Permission Inheritance Mechanics</h4>
            <pre class="schema-code"><code>// Direct Permission Sync:
$user->syncPermissions($request->permissions);

// Role Assignment Sync:
$user->syncRoles($request->roles);

// Checking Permissions:
$user->hasPermissionTo('create users'); 
// Mengembalikan true jika izin dimiliki langsung (direct) 
// ATAU diwarisi dari salah satu Role user.</code></pre>
            <div class="schema-note mt-3">
                Fitur ini memungkinkan penugasan perizinan khusus (direct permissions) secara langsung kepada individu user tanpa perlu mengubah perizinan Role utamanya.
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
                    <strong><code>GET /manajemenpengguna/akses-user</code></strong><br>
                    <code>AksesUserController@index</code> -> Menampilkan daftar pengguna dan status hak akses.
                </div>
                <div class="schema-step">
                    <strong><code>GET /manajemenpengguna/akses-user/{id}</code></strong><br>
                    <code>AksesUserController@show</code> -> Mengambil data direct permissions dan roles pengguna spesifik via AJAX.
                </div>
                <div class="schema-step">
                    <strong><code>POST /manajemenpengguna/akses-user</code></strong><br>
                    <code>AksesUserController@update</code> -> Memperbarui direct permissions dan roles pengguna secara terpisah.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. UI TRANSPARENT INDICATOR -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-info">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Indikator Transparan & Modal Matriks Bebas Scroll Horizontal</h4>
            <p class="fs-7 text-gray-700">
                Checkbox perizinan pada modal <code>akses-user</code> dilengkapi penanda visual yang membedakan izin warisan Role vs Izin Langsung (Direct):
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Izin Warisan Role (Role Inherited)</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Checkbox tercentang dan ber-state <code>disabled</code> dengan badge <i>Diwarisi dari Role</i>.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Izin Langsung (Direct Permission)</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Checkbox aktif yang dapat dicentang/dihapus secara mandiri khusus untuk user tersebut.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
