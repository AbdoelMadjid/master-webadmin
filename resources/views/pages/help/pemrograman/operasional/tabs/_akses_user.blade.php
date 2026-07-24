@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. USER DIRECT PERMISSIONS WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. User Specific Access Rights (User Direct Permissions)</h3>
            <span class="text-muted fs-7">Operational guide for assigning custom permissions directly to individual users.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Code Architecture & Route</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>AksesUserController</code> on route <code>manajemenpengguna/akses-user</code>.
                </div>
                <div class="schema-step">
                    <strong>Direct Permissions Sync:</strong> Syncs custom permissions directly to individual users via Spatie <code>$user->syncPermissions($request->permissions)</code>.
                </div>
                <div class="schema-step">
                    <strong>Role Assignment Sync:</strong> Updates assigned user roles via <code>$user->syncRoles($request->roles)</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-user-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> User Access Feature Operations</h4>
            <ul class="schema-list">
                <li><strong>User Search:</strong> Select a specific user account from the user search dropdown list.</li>
                <li><strong>Custom Permission Override:</strong> Grant specific module permissions directly to a user without modifying their primary role.</li>
                <li><strong>Role & Direct Permission Inheritance:</strong> The user receives a combined set of access rights inherited from their assigned role plus their custom direct permissions.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR MANAJEMEN HAK AKSES USER (USER DIRECT PERMISSIONS) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Hak Akses Spesifik Pengguna (User Direct Permissions)</h3>
            <span class="text-muted fs-7">Panduan operasional penugasan perizinan khusus langsung kepada individu pengguna.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur Pemrograman & Route</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>AksesUserController</code> pada rute <code>manajemenpengguna/akses-user</code>.
                </div>
                <div class="schema-step">
                    <strong>Direct Permissions Sync:</strong> Menyinkronkan perizinan langsung ke individu user melalui Spatie <code>$user->syncPermissions($request->permissions)</code>.
                </div>
                <div class="schema-step">
                    <strong>Role Assignment Sync:</strong> Memperbarui role pengguna melalui <code>$user->syncRoles($request->roles)</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-user-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operasional Fitur Akses User</h4>
            <ul class="schema-list">
                <li><strong>Pencarian Pengguna:</strong> Memilih akun pengguna spesifik dari daftar pencarian user.</li>
                <li><strong>Override Hak Akses Khusus:</strong> Memberikan izin modul tertentu secara langsung kepada user tanpa harus mengubah role utamanya.</li>
                <li><strong>Kombinasi Role & Direct Permission:</strong> Pengguna mendapatkan gabungan hak akses dari role yang diembannya ditambah direct permission khusus yang diberikan padanya.</li>
            </ul>
        </div>
    </div>
</div>
@endif
