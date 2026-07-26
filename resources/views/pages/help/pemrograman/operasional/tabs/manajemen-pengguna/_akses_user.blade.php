@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. USER DIRECT PERMISSIONS WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">User Specific Access Rights (User Direct Permissions)</h3>
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
            <h4><i class="ki-duotone ki-user-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> User Access Feature Operations</h4>
            <ul class="schema-list">
                <li><strong>User Search:</strong> Select a specific user account from the user search dropdown list.</li>
                <li><strong>Custom Permission Override:</strong> Grant specific module permissions directly to a user without modifying their primary role.</li>
                <li><strong>Role & Direct Permission Inheritance:</strong> The user receives a combined set of access rights inherited from their assigned role plus their custom direct permissions.</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. DIRECT PERMISSIONS COLUMN & SIDE DRAWER -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">Direct Permissions Table Column & Side Drawer Panel</h3>
            <span class="text-muted fs-7">Detailed operational breakdown for the Hak Akses Langsung table column indicators and right side drawer viewer.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Direct Permissions Table Column Indicators</h4>
            <ul class="schema-list">
                <li><strong>Role Inheritance Badge (<span class="badge badge-light-secondary text-gray-600">Mengikuti Role (N Izin)</span>):</strong> Displayed when a user has no custom direct permissions assigned. Indicates that all feature permissions are completely inherited from their primary assigned Role.</li>
                <li><strong>Direct Access Summary Badge (<span class="badge badge-light-warning">🔑 N Akses Langsung (M Modul)</span>):</strong> High-visibility warning badge highlighting the total count of custom permissions and modules assigned directly to the user.</li>
                <li><strong>Module Preview Chips:</strong> Displays the first 2 assigned modules as quick inline badges (e.g. <code>profil-pengguna (2)</code>) for immediate visual identification.</li>
                <li><strong>Side Drawer Trigger Badge (<span class="badge badge-light-info">+N Modul Lainnya</span>):</strong> Interactive badge that opens the right side drawer panel when clicked, eliminating table row height expansion and visual clutter.</li>
            </ul>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Right Side Drawer Operations & Module Search</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Side Offcanvas Trigger:</strong> Clicking any direct permission badge (<code>🔑 N Akses Langsung</code> or <code>+N Modul Lainnya</code>) smoothly slides open the right offcanvas panel (<code>#kt_offcanvas_user_permissions</code>).
                </div>
                <div class="schema-step">
                    <strong>User Profile Header:</strong> Displays the target user's avatar, full name, email address, and a summary badge of total direct permissions inside the drawer header.
                </div>
                <div class="schema-step">
                    <strong>Real-Time Search Filter:</strong> Type inside the drawer search bar (<code>#drawer_perm_search</code>) to filter module names or action types (<code>create</code>, <code>read</code>, <code>update</code>, <code>delete</code>) instantly.
                </div>
                <div class="schema-step">
                    <strong>Color-Coded Action Badges:</strong> Permissions are grouped by module with folder icons <code>📁</code> and color-coded action badges (<span class="badge badge-light-success text-success">create</span>, <span class="badge badge-light-primary text-primary">read</span>, <span class="badge badge-light-warning text-warning">update</span>, <span class="badge badge-light-danger text-danger">delete</span>).
                </div>
                <div class="schema-step">
                    <strong>Direct Edit Action:</strong> Click the <strong>Edit</strong> button inside the drawer header to trigger the Access Management modal for updating permissions without manual navigation.
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR MANAJEMEN HAK AKSES USER (USER DIRECT PERMISSIONS) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">Hak Akses Spesifik Pengguna (User Direct Permissions)</h3>
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
            <h4><i class="ki-duotone ki-user-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> Operasional Fitur Akses User</h4>
            <ul class="schema-list">
                <li><strong>Pencarian Pengguna:</strong> Memilih akun pengguna spesifik dari daftar pencarian user.</li>
                <li><strong>Override Hak Akses Khusus:</strong> Memberikan izin modul tertentu secara langsung kepada user tanpa harus mengubah role utamanya.</li>
                <li><strong>Kombinasi Role & Direct Permission:</strong> Pengguna mendapatkan gabungan hak akses dari role yang diembannya ditambah direct permission khusus yang diberikan padanya.</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. KOLOM HAK AKSES LANGSUNG & SIDE DRAWER -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">Kolom Tabel Hak Akses Langsung & Panel Side Drawer</h3>
            <span class="text-muted fs-7">Rincian operasional indikator badge pada kolom tabel Hak Akses Langsung dan penampil panel samping kanan (Side Drawer).</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-element-11 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Indikator Kolom Hak Akses Langsung pada Tabel</h4>
            <ul class="schema-list">
                <li><strong>Badge Warisan Role (<span class="badge badge-light-secondary text-gray-600">Mengikuti Role (N Izin)</span>):</strong> Ditampilkan saat pengguna tidak memiliki direct permission khusus, menandakan seluruh hak akses fitur sepenuhnya diwarisi dari Role yang ditugaskan.</li>
                <li><strong>Badge Ringkasan Akses Langsung (<span class="badge badge-light-warning">🔑 N Akses Langsung (M Modul)</span>):</strong> Badge peringatan berwarna kuning yang menonjolkan total jumlah izin khusus dan modul yang ditugaskan secara langsung ke akun pengguna.</li>
                <li><strong>Pratinjau Modul:</strong> Menampilkan 2 modul pertama sebagai badge pratinjau cepat di dalam tabel (misal <code>profil-pengguna (2)</code>) untuk identifikasi visual instan.</li>
                <li><strong>Badge Pemicu Drawer (<span class="badge badge-light-info">+N Modul Lainnya</span>):</strong> Badge interaktif untuk membuka panel samping kanan (*Side Drawer*) saat diklik, menjaga tinggi baris tabel tetap konsisten dan rapi.</li>
            </ul>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> Operasional Side Drawer & Filter Pencarian Modul</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Pemicu Offcanvas Kanan:</strong> Mengklik badge hak akses langsung di tabel (<code>🔑 N Akses Langsung</code> atau <code>+N Modul Lainnya</code>) akan membuka panel samping dari sisi kanan browser (<code>#kt_offcanvas_user_permissions</code>).
                </div>
                <div class="schema-step">
                    <strong>Header Profil Pengguna:</strong> Menampilkan foto avatar, nama lengkap, email, serta ringkasan total hak akses langsung di bagian atas drawer.
                </div>
                <div class="schema-step">
                    <strong>Pencarian Modul Real-Time:</strong> Ketik pada kolom pencarian drawer (<code>#drawer_perm_search</code>) untuk memfilter nama modul atau tipe izin (<code>create</code>, <code>read</code>, <code>update</code>, <code>delete</code>) secara instan.
                </div>
                <div class="schema-step">
                    <strong>Badge Aksi Berwarna per Modul:</strong> Izin dikelompokkan per modul dengan ikon folder <code>📁</code> dan badge warna khusus aksi (<span class="badge badge-light-success text-success">create</span>, <span class="badge badge-light-primary text-primary">read</span>, <span class="badge badge-light-warning text-warning">update</span>, <span class="badge badge-light-danger text-danger">delete</span>).
                </div>
                <div class="schema-step">
                    <strong>Aksi Edit Langsung:</strong> Klik tombol <strong>Edit</strong> di header drawer untuk memicu modal pengeditan perizinan pengguna (*Akses User Form Modal*) tanpa harus menutup drawer secara manual.
                </div>
            </div>
        </div>
    </div>
</div>
@endif
