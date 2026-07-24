@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ROLE MANAGEMENT WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Role Management</h3>
            <span class="text-muted fs-7">Operational guide and architecture for managing role data and basic permission assignments.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Architecture & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Handled by <code>RoleController</code> on route <code>manajemenpengguna/roles</code>.
                </div>
                <div class="schema-step">
                    <strong>Request Validation:</strong> Uses Form Request <code>App\Http\Requests\ManajemenPengguna\RoleRequest</code>.
                </div>
                <div class="schema-step">
                    <strong>Form Partial:</strong> CRUD modal form is extracted into <code>pages.manajemenpengguna.partials.role-form</code>.
                </div>
                <div class="schema-step">
                    <strong>Spatie Model:</strong> Uses Spatie model <code>Spatie\Permission\Models\Role</code> with <code>guard_name = 'web'</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Role Modal Form Operations</h4>
            <ul class="schema-list">
                <li><strong>Permission Matrix Selection:</strong> Inside the role modal, a permission matrix table is available per app module (`Create`, `Read`, `Update`, `Delete`, `Other`).</li>
                <li><strong>Instant Module Search:</strong> Search input inside the modal to filter module rows being configured.</li>
                <li><strong>Bulk Toggle & Row Select:</strong> <em>Select All</em>, <em>Clear All</em>, and row checkboxes to toggle all module actions at once.</li>
                <li><strong>Core System Roles Protection:</strong> <code>master</code> and <code>admin</code> roles are protected from deletion to safeguard system integrity.</li>
            </ul>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. ALUR PENGELOLAAN ROLE (ROLE MANAGEMENT) -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Pengelolaan Role / Jabatan (Role Management)</h3>
            <span class="text-muted fs-7">Panduan operasional dan arsitektur pengolahan data role dan penugasan perizinan dasar.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Arsitektur & Controller</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Ditangani oleh <code>RoleController</code> pada rute <code>manajemenpengguna/roles</code>.
                </div>
                <div class="schema-step">
                    <strong>Validasi Request:</strong> Menggunakan Form Request <code>App\Http\Requests\ManajemenPengguna\RoleRequest</code>.
                </div>
                <div class="schema-step">
                    <strong>Form Partial:</strong> Form modal CRUD diekstrak secara terpisah pada <code>pages.manajemenpengguna.partials.role-form</code>.
                </div>
                <div class="schema-step">
                    <strong>Spatie Model:</strong> Menggunakan model <code>Spatie\Permission\Models\Role</code> dengan <code>guard_name = 'web'</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operasional Form Modal Role</h4>
            <ul class="schema-list">
                <li><strong>Matriks Pemilihan Permission:</strong> Dalam modal role, tersedia tabel matriks perizinan per modul aplikasi (`Create`, `Read`, `Update`, `Delete`, `Lainnya`).</li>
                <li><strong>Pencarian Modul Instan:</strong> Input pencarian di dalam modal untuk menyaring baris modul yang ingin diatur permission-nya.</li>
                <li><strong>Bulk Toggle & Row Select:</strong> Tombol <em>Pilih Semua</em>, <em>Kosongkan</em>, dan checkbox di ujung kanan baris untuk mencentang seluruh aksi modul.</li>
                <li><strong>Proteksi Core System Roles:</strong> Role <code>master</code> dan <code>admin</code> diproteksi dari aksi penghapusan untuk menjamin stabilitas sistem.</li>
            </ul>
        </div>
    </div>
</div>
@endif
