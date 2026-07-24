@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. MODEL & ACCESSOR -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> User Model & Avatar Accessor</h4>
            <pre class="schema-code"><code>// Model: App\Models\User
public function getAvatarUrlAttribute()
{
    return normalizeAvatarUrl($this->avatar);
}

// Helper: Smart::normalizeAvatarUrl()
// Smartly inspects storage/ and uploads/ directories,
// providing an SVG initial fallback if avatar is empty.</code></pre>
            <div class="schema-note mt-3">
                The <code>$user->avatar_url</code> accessor guarantees consistent and proportional avatar rendering across DataTables and application UI.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. CONTROLLER & FORM REQUEST -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Controller & Validation (<code>UserController</code>)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Form Validation:</strong> Processed separately via <code>App\Http\Requests\ManajemenPengguna\UserRequest</code>.
                </div>
                <div class="schema-step">
                    <strong><code>POST /manajemenpengguna/users</code></strong><br>
                    <code>UserController@store</code> -> Encrypts password via <code>Hash::make()</code>, uploads avatar, and assigns roles via <code>$user->assignRole()</code>.
                </div>
                <div class="schema-step">
                    <strong><code>PUT /manajemenpengguna/users/{id}</code></strong><br>
                    <code>UserController@update</code> -> Updates user profile; password is updated only if provided (optional).
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. BOX 1: USER AVATAR MANAGEMENT -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-primary">
            <h4><i class="ki-duotone ki-picture fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> 1. User Profile Avatar Management</h4>
            <p class="fs-7 text-gray-700">
                Image upload workflow, URL encapsulation, and automatic avatar fallback across the entire application interface:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed">
                        <h5 class="fw-bold text-primary">Avatar Code Flow</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li>Form uploaded via <code>POST /profil-pengguna/avatar</code> (handled by <code>ProfilPenggunaController@updateAvatar</code>) or during user creation/edit in <code>UserController</code>.</li>
                            <li>Files are validated with rule <code>image|mimes:jpeg,png,jpg,gif,svg|max:2048</code> (max 2MB).</li>
                            <li>Saved under <code>public/uploads/avatars/</code> with unique timestamp + user ID naming.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-info border border-info border-dashed">
                        <h5 class="fw-bold text-info">Visualization & Dimensions</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li>Standardized rendering dimension <code>40x40px</code> with <code>object-fit: cover</code>.</li>
                            <li>If no avatar is uploaded, helper <code>normalizeAvatarUrl()</code> generates an SVG initial of the user's name automatically.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. BOX 2: USER REWARD POINTS SYSTEM -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-award fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> 2. User Activity Reward Points System (1 Daily Point)</h4>
            <p class="fs-7 text-gray-700">
                Reward architecture for 1 point per calendar day, login event listener, and data reconciliation:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="schema-flow">
                        <div class="schema-step">
                            <strong>Event & Listener:</strong> Each successful login dispatches <code>Illuminate\Auth\Events\Login</code> event caught by listener <code>App\Listeners\LogUserLogin</code>.
                        </div>
                        <div class="schema-step">
                            <strong>Calendar Day Check:</strong> Listener executes search <code>DataLogin::where('user_id', $user->id)->whereDate('login_at', $today)</code>.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="schema-flow">
                        <div class="schema-step">
                            <strong>First Login (Point Awarded):</strong> If no login exists for that day, system executes <code>$user->increment('points')</code> (+1 Point) and logs a new <code>DataLogin</code>.
                        </div>
                        <div class="schema-step">
                            <strong>Repeated Logins:</strong> Subsequent logins on the same day only increment <code>login_count</code> without duplicating points.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 5. BOX 3: 15-MINUTE AUTOMATIC IDLE LOGOUT -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-danger">
            <h4><i class="ki-duotone ki-timer fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> 3. Automatic 15-Minute Idle Logout & Session Security</h4>
            <p class="fs-7 text-gray-700">
                15-minute inactivity monitor, route redirection handling, and real-time active user indicators:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Inactivity Listener Script</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Partial <code>_idle-timer.blade.php</code> is mounted globally on layout to track user events (mousemove, keydown, scroll). If 15 minutes pass without activity, it automatically submits <code>POST /logout</code> with parameter <code>reason=idle</code>.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Login Page Alert Banner</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            When redirected due to idle timeout, the <code>/login</code> page displays a yellow <code>alert-warning</code> banner informing the user that their session expired due to 15 minutes of inactivity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 6. BOX 4: BULK EXCEL IMPORT & MASTER TEMPLATE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-file-up fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> 4. Bulk User Excel Import & Master Template (.xlsx)</h4>
            <p class="fs-7 text-gray-700">
                Bulk spreadsheet user import architecture, PhpSpreadsheet extraction, and automatic role assignment:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-info border border-info border-dashed h-100">
                        <h5 class="fw-bold text-info mb-2">A. Excel Master Template Generation</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/template</code> (<code>UserController@downloadTemplate</code>).</li>
                            <li><strong>Library:</strong> Uses <code>PhpOffice\PhpSpreadsheet</code> with bold <code>#1E1E2D</code> header styling.</li>
                            <li><strong>Column Structure:</strong> <code>No</code>, <code>Full Name *</code>, <code>Email *</code>, <code>Password *</code>, <code>Role (optional)</code>.</li>
                            <li>Includes 3 sample rows and automatic column auto-fit.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-success border border-success border-dashed h-100">
                        <h5 class="fw-bold text-success mb-2">B. Import Engine & Processing Flow</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Endpoint:</strong> <code>POST /manajemenpengguna/users/import</code> (<code>UserController@import</code>).</li>
                            <li>Validates <code>.xlsx</code>, <code>.xls</code>, <code>.csv</code> files (max 5MB).</li>
                            <li>Checks email existence in <code>users</code> database table to skip duplicates safely.</li>
                            <li>Attaches user roles automatically if role column is filled (e.g. <i>admin, user</i>).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 7. BOX 5: USER SWITCH MODE (IMPERSONATION) -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-warning">
            <h4><i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> 5. User Switch Mode (Passwordless Account Impersonation)</h4>
            <p class="fs-7 text-gray-700">
                Passwordless account switching architecture, admin session ID preservation, and original account restoration:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-warning border border-warning border-dashed h-100">
                        <h5 class="fw-bold text-warning mb-2">A. Impersonate Account Workflow</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Trigger:</strong> Click user name or switch icon button in <code>users.blade.php</code>.</li>
                            <li><strong>Endpoint:</strong> <code>POST /manajemenpengguna/users/{id}/impersonate</code> (<code>UserController@impersonate</code>).</li>
                            <li><strong>Session:</strong> Saves original admin ID to <code>session(['impersonator_id' => auth()->id()])</code> then executes <code>Auth::login($targetUser)</code>.</li>
                            <li><strong>Listener Guard:</strong> <code>LogUserLogin</code> checks <code>impersonator_id</code> session to <strong>NOT award login points and NOT increment login count history</strong>.</li>
                            <li>Shows success message <code>SwalHelper.success()</code> and redirects to Dashboard.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-danger border border-danger border-dashed h-100">
                        <h5 class="fw-bold text-danger mb-2">B. Restore Original Account (Leave Impersonate)</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>User Avatar Dropdown:</strong> Special menu item <code>Back to Original Account</code> on <code>_user-account-menu.blade.php</code> at top right.</li>
                            <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/leave-impersonate</code> (<code>UserController@leaveImpersonate</code>) restores original admin session.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 8. BOX 6: WEB REGISTRATION & ADMIN APPROVAL -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-info">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> 6. Web Registration, Real-time Validation, Notifications & Admin Approval</h4>
            <p class="fs-7 text-gray-700">
                Public account registration architecture, real-time password validation, approval status, admin topbar alerts, and automatic <i>User</i> role assignment:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-info border border-info border-dashed h-100">
                        <h5 class="fw-bold text-info mb-2">A. Public Registration & Real-Time Validation</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Register Form:</strong> Located at route <code>/register</code> (handled by <code>RegisteredUserController</code>).</li>
                            <li><strong>Eye Toggle:</strong> Eye icon toggle button to show/hide password and password confirmation inputs.</li>
                            <li><strong>Real-Time Password Validation:</strong> Evaluates > 8 chars, uppercase (A-Z), lowercase (a-z), digits (0-9), and match criteria live while typing.</li>
                            <li><strong>Pending Status:</strong> New public registrant accounts automatically receive <code>status = 'pending'</code> and are <strong>NOT logged into session immediately</strong>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-success border border-success border-dashed h-100">
                        <h5 class="fw-bold text-success mb-2">B. Notifications, Admin Approval & Login Protection</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Topbar Bell Notification:</strong> New registration alerts appear in header bell dropdown (<i>Alerts</i> tab), directing Admin/Master to <code>/manajemenpengguna/users</code>.</li>
                            <li><strong>Approve & Reject Actions:</strong> Admin/Master can approve (<code>POST users/{id}/approve</code>) or reject (<code>POST users/{id}/reject</code>) accounts.</li>
                            <li><strong>Automatic Role Assignment:</strong> Upon approval, system automatically assigns default <code>user</code> role if user has no roles.</li>
                            <li><strong>Login Protection (Block Unapproved):</strong> Accounts with <code>pending</code> or <code>rejected</code> status trying to log in at <code>LoginRequest</code> are blocked with warning banners.</li>
                            <li><strong>Exceptions:</strong> Users added directly by Admin via Add User Modal or Bulk Excel Import automatically receive <code>approved</code> status (immediately active).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 9. BOX 7: USER DELETION SCHEMA & CASCADING CLEANUP -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-danger">
            <h4><i class="ki-duotone ki-trash fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> 7. User Deletion Schema & Automatic Cascading Cleanup (DB Transactions)</h4>
            <p class="fs-7 text-gray-700">
                Relational data and physical file cleanup architecture executed automatically when a user account is deleted:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-danger border border-danger border-dashed h-100">
                        <h5 class="fw-bold text-danger mb-2">A. Deleting Event Listener (<code>User::booted()</code>)</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Event Hook:</strong> Mounted on <code>static::deleting</code> listener in <code>App\Models\User</code> model.</li>
                            <li><strong>Avatar Cleanup:</strong> Removes physical avatar image files from <code>storage/app/public/avatars</code> and <code>public/uploads/avatars</code>.</li>
                            <li><strong>Login History Cleanup:</strong> Clears all records in <code>data_logins</code> table (<code>$user->dataLogins()->delete()</code>).</li>
                            <li><strong>Password Reset Cleanup:</strong> Deletes reset requests in <code>password_reset_requests</code> table.</li>
                            <li><strong>Permission & Role Detach:</strong> Detaches role and permission assignments via <code>$user->roles()->detach()</code> & <code>$user->permissions()->detach()</code>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed h-100">
                        <h5 class="fw-bold text-primary mb-2">B. Database Transaction Protection (<code>DB::transaction</code>)</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Atomic Transaction:</strong> Method <code>UserController@destroy</code> wraps <code>$user->delete()</code> execution inside <code>DB::transaction()</code>.</li>
                            <li><strong>Self-Deletion Prevention:</strong> Protection preventing logged-in admins from deleting their own active account (HTTP 422).</li>
                            <li><strong>Data Integrity Guarantee:</strong> If any file/relational table cleanup fails, the entire transaction rolls back cleanly without leaving <i>orphan data</i>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 10. RECAPITULATION TABLE USER MANAGEMENT -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> User Management Components & File Recapitulation</h4>
            <div class="table-responsive mt-3">
                <table class="table table-row-dashed align-middle gy-3 fs-7 mb-0">
                    <thead>
                        <tr class="fw-bold text-gray-700 bg-light">
                            <th>Feature / Component</th>
                            <th>Main File</th>
                            <th>Programming Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Users CRUD</strong></td>
                            <td><code>UserController.php</code><br><code>UserRequest.php</code><br><code>users.blade.php</code></td>
                            <td>User account management, password hashing, role assignment, and SwalHelper notifications.</td>
                        </tr>
                        <tr>
                            <td><strong>User Deletion (Cascading Delete)</strong></td>
                            <td><code>User.php</code> (booted deleting)<br><code>UserController.php</code> (destroy)<br><code>users.blade.php</code></td>
                            <td>Automatic physical avatar cleanup, login history data logins, password reset requests, Spatie role detachment, and DB::transaction() protection.</td>
                        </tr>
                        <tr>
                            <td><strong>Registration & Admin Approval</strong></td>
                            <td><code>RegisteredUserController.php</code><br><code>LoginRequest.php</code><br><code>UserController.php</code> (approve & reject)<br><code>register.blade.php</code></td>
                            <td>Public registration, eye toggle & real-time password validation, admin topbar alerts to route <code>manajemenpengguna/users</code>, admin approval + auto <code>user</code> role, and unapproved login protection.</td>
                        </tr>
                        <tr>
                            <td><strong>Avatar Management</strong></td>
                            <td><code>ProfilPenggunaController.php</code><br><code>User.php</code> (getAvatarUrlAttribute)</td>
                            <td>Avatar upload, image file validation, 40x40px dimensioning, and initial SVG fallbacks.</td>
                        </tr>
                        <tr>
                            <td><strong>Daily Reward Points</strong></td>
                            <td><code>LogUserLogin.php</code><br><code>DataLogin.php</code></td>
                            <td>Login event listener, +1 reward point per calendar day, and login history recording.</td>
                        </tr>
                        <tr>
                            <td><strong>Idle Auto-Logout</strong></td>
                            <td><code>_idle-timer.blade.php</code><br><code>UpdateUserLastActivity.php</code></td>
                            <td>15-minute inactivity timer, <code>last_activity_at</code> timestamp updating, and automatic logout.</td>
                        </tr>
                        <tr>
                            <td><strong>Bulk Excel Upload</strong></td>
                            <td><code>UserController.php</code> (import & downloadTemplate)<br><code>user-import-modal.blade.php</code></td>
                            <td>PhpSpreadsheet master template (.xlsx) generation, bulk user spreadsheet importing, duplicate email validation, and auto role assignment.</td>
                        </tr>
                        <tr>
                            <td><strong>User Switch (Impersonation)</strong></td>
                            <td><code>UserController.php</code> (impersonate & leaveImpersonate)<br><code>_user-account-menu.blade.php</code></td>
                            <td>Passwordless switching to another user account via session ID (<code>impersonator_id</code>), point/login listener protection, and original account restoration via avatar dropdown.</td>
                        </tr>
                        <tr>
                            <td><strong>Local Timezone (WIB)</strong></td>
                            <td><code>config/app.php</code><br><code>.env</code> (APP_TIMEZONE=Asia/Jakarta)</td>
                            <td>Database timestamp recording (created_at, updated_at, login_at, last_activity_at) 100% saved and presented following local timezone (Asia/Jakarta, UTC+7).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. MODEL & ACCESSOR -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-user fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> User Model & Avatar Accessor</h4>
            <pre class="schema-code"><code>// Model: App\Models\User
public function getAvatarUrlAttribute()
{
    return normalizeAvatarUrl($this->avatar);
}

// Helper: Smart::normalizeAvatarUrl()
// Memeriksa direktori storage/ dan uploads/ secara cerdas, 
// serta menyediakan fallback SVG initial jika avatar kosong.</code></pre>
            <div class="schema-note mt-3">
                Accessor <code>$user->avatar_url</code> menjamin rendering avatar foto profil yang konsisten dan proporsional di seluruh DataTables dan UI aplikasi.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. CONTROLLER & FORM REQUEST -->
    <!--====================================================-->
    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-route fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Controller & Validation (<code>UserController</code>)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Form Validation:</strong> Diolah secara terpisah melalui <code>App\Http\Requests\ManajemenPengguna\UserRequest</code>.
                </div>
                <div class="schema-step">
                    <strong><code>POST /manajemenpengguna/users</code></strong><br>
                    <code>UserController@store</code> -> Mengenkripsi password via <code>Hash::make()</code>, mengunggah avatar, dan menugaskan role via <code>$user->assignRole()</code>.
                </div>
                <div class="schema-step">
                    <strong><code>PUT /manajemenpengguna/users/{id}</code></strong><br>
                    <code>UserController@update</code> -> Memperbarui data pengguna; password hanya di-update jika diisi (opsional).
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. KOTAK BAWAH 1: PENGELOLAAN AVATAR PENGGUNA -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-primary">
            <h4><i class="ki-duotone ki-picture fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> 1. Pengelolaan Avatar Profil Pengguna</h4>
            <p class="fs-7 text-gray-700">
                Alur pengungahan gambar profil, enkapsulasi URL, dan fallback avatar otomatis di seluruh tampilan aplikasi:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed">
                        <h5 class="fw-bold text-primary">Alur Pemrograman Avatar</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li>Form diunggah via <code>POST /profil-pengguna/avatar</code> (ditangani <code>ProfilPenggunaController@updateAvatar</code>) atau saat registrasi/edit di <code>UserController</code>.</li>
                            <li>File diverifikasi dengan aturan <code>image|mimes:jpeg,png,jpg,gif,svg|max:2048</code> (maksimal 2MB).</li>
                            <li>Penyimpanan di <code>public/uploads/avatars/</code> dengan penamaan unik timestamp + ID user.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-info border border-info border-dashed">
                        <h5 class="fw-bold text-info">Visualisasi & Dimensions</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li>Dimensi rendering terstandarisasi <code>40x40px</code> dengan <code>object-fit: cover</code>.</li>
                            <li>Jika avatar belum diunggah, helper <code>normalizeAvatarUrl()</code> menghasilkan SVG initial huruf depan nama user secara otomatis.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. KOTAK BAWAH 2: REWARD POIN KEAKTIFAN USER -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-award fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> 2. Sistem Reward Poin Keaktifan User (1 Poin Harian)</h4>
            <p class="fs-7 text-gray-700">
                Arsitektur reward 1 poin per-hari kalender, event listener login, dan rekonsiliasi data:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="schema-flow">
                        <div class="schema-step">
                            <strong>Event & Listener:</strong> Setiap login berhasil memicu event <code>Illuminate\Auth\Events\Login</code> yang ditangkap oleh listener <code>App\Listeners\LogUserLogin</code>.
                        </div>
                        <div class="schema-step">
                            <strong>Pemeriksaan Hari Kalender:</strong> Listener mengeksekusi pencarian <code>DataLogin::where('user_id', $user->id)->whereDate('login_at', $today)</code>.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="schema-flow">
                        <div class="schema-step">
                            <strong>Login Pertama (Dapat Poin):</strong> Jika belum ada di hari tersebut, sistem mengeksekusi <code>$user->increment('points')</code> (+1 Poin) dan mencatat <code>DataLogin</code> baru.
                        </div>
                        <div class="schema-step">
                            <strong>Login Berulang:</strong> Login berikutnya pada hari yang sama hanya menambah <code>login_count</code> tanpa menggandakan saldo poin.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 5. KOTAK BAWAH 3: MASA IDLE LOGOUT OTOMATIS 15 MENIT -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-danger">
            <h4><i class="ki-duotone ki-timer fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> 3. Masa Idle Logout Otomatis (15 Menit) & Keamanan Sesi</h4>
            <p class="fs-7 text-gray-700">
                Pemantau inaktivitas 15 menit, penanganan pengalihan rute, dan indikator user aktif real-time:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Skrip Listener Inaktivitas</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Partial <code>_idle-timer.blade.php</code> dipasang secara global pada layout untuk memantau interaksi (mousemove, keydown, scroll). Jika 15 menit tanpa aktivitas, otomatis mengirim <code>POST /logout</code> dengan parameter <code>reason=idle</code>.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h5 class="fw-bold fs-6 text-gray-800">Banner Peringatan Halaman Login</h5>
                        <p class="fs-7 text-gray-600 mb-0">
                            Saat dialihkan akibat idle timeout, halaman <code>/login</code> menampilkan banner peringatan <code>alert-warning</code> berwarna kuning yang menginfokan bahwa sesi pengguna telah berakhir akibat inaktivitas 15 menit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 6. KOTAK BAWAH 4: UPLOAD MASSAL VIA EXCEL & MASTER TEMPLATE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-success">
            <h4><i class="ki-duotone ki-file-up fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> 4. Upload Massal User via Excel & Master Template (.xlsx)</h4>
            <p class="fs-7 text-gray-700">
                Arsitektur penjaminan impor massal data pengguna dari berkas spreadsheet, ekstraksi PhpSpreadsheet, dan penugasan role otomatis:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-info border border-info border-dashed h-100">
                        <h5 class="fw-bold text-info mb-2">A. Penjanaan Master Template Excel</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/template</code> (<code>UserController@downloadTemplate</code>).</li>
                            <li><strong>Library:</strong> Menggunakan <code>PhpOffice\PhpSpreadsheet</code> dengan styling header tebal <code>#1E1E2D</code>.</li>
                            <li><strong>Struktur Kolom:</strong> <code>No</code>, <code>Nama Lengkap *</code>, <code>Email *</code>, <code>Password *</code>, <code>Role (opsional)</code>.</li>
                            <li>Dilengkapi 3 baris sampel otomatis & auto-fit lebar kolom.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-success border border-success border-dashed h-100">
                        <h5 class="fw-bold text-success mb-2">B. Alur Pemrosesan & Import Engine</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Endpoint:</strong> <code>POST /manajemenpengguna/users/import</code> (<code>UserController@import</code>).</li>
                            <li>Memvalidasi file <code>.xlsx</code>, <code>.xls</code>, <code>.csv</code> (maks 5MB).</li>
                            <li>Mengecek ketersediaan email di database <code>users</code> untuk mengabaikan baris duplikat secara aman.</li>
                            <li>Memasang role pengguna secara otomatis jika kolom role terisi (misal: <i>admin, user</i>).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 7. KOTAK BAWAH 5: MODE SWITCH USER (IMPERSONASI AKUN) -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-warning">
            <h4><i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> 5. Mode Switch User (Impersonasi Akun Tanpa Password)</h4>
            <p class="fs-7 text-gray-700">
                Arsitektur pengalihan akun tanpa masukan kata sandi, penyimpanan id admin di sesi, dan pemulihan akun asli:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-warning border border-warning border-dashed h-100">
                        <h5 class="fw-bold text-warning mb-2">A. Alur Beralih Akun (Impersonate)</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Trigger:</strong> Klik nama user atau tombol icon switch di <code>users.blade.php</code>.</li>
                            <li><strong>Endpoint:</strong> <code>POST /manajemenpengguna/users/{id}/impersonate</code> (<code>UserController@impersonate</code>).</li>
                            <li><strong>Sesi:</strong> Mengamankan ID akun asli ke <code>session(['impersonator_id' => auth()->id()])</code> lalu mengeksekusi <code>Auth::login($targetUser)</code>.</li>
                            <li><strong>Proteksi Listener:</strong> <code>LogUserLogin</code> memeriksa sesi <code>impersonator_id</code> untuk <strong>TIDAK menambah reward poin login dan TIDAK menambah jumlah riwayat login</strong>.</li>
                            <li>Menampilkan notifikasi sukses <code>SwalHelper.success()</code> dan mengalihkan ke Dashboard.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-danger border border-danger border-dashed h-100">
                        <h5 class="fw-bold text-danger mb-2">B. Pemulihan Akun Asli (Leave Impersonate)</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Dropdown Avatar User:</strong> Item menu khusus <code>Kembali ke Akun Asli</code> pada <code>_user-account-menu.blade.php</code> di sudut kanan atas.</li>
                            <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/leave-impersonate</code> (<code>UserController@leaveImpersonate</code>) memulihkan sesi admin asli.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 8. KOTAK BAWAH 6: REGISTRASI WEB & PERSETUJUAN ADMIN -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-info">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> 6. Registrasi Web, Validasi Real-time, Notifikasi & Persetujuan Admin</h4>
            <p class="fs-7 text-gray-700">
                Arsitektur registrasi akun publik, validasi password real-time, status persetujuan akun, notifikasi topbar admin, dan penugasan otomatis role <i>User</i>:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-info border border-info border-dashed h-100">
                        <h5 class="fw-bold text-info mb-2">A. Registrasi Publik & Validasi Real-Time</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Form Register:</strong> Terletak pada rute <code>/register</code> (ditangani <code>RegisteredUserController</code>).</li>
                            <li><strong>Eye Toggle:</strong> Tombol ikon mata untuk menampilkan/menyembunyikan input kata sandi & konfirmasi kata sandi.</li>
                            <li><strong>Validasi Password Real-Time:</strong> Menguji kriteria &gt; 8 karakter, huruf besar (A-Z), huruf kecil (a-z), angka (0-9), serta kecocokan konfirmasi password secara langsung saat mengetik.</li>
                            <li><strong>Status Pending:</strong> Akun baru hasil registrasi publik otomatis berstatus <code>status = 'pending'</code> dan <strong>TIDAK langsung dikirim ke sesi login</strong>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-success border border-success border-dashed h-100">
                        <h5 class="fw-bold text-success mb-2">B. Notifikasi, Persetujuan Admin & Proteksi Login</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Notifikasi Bell Topbar:</strong> Notifikasi pendaftaran akun baru muncul di menu header (tab <i>Peringatan</i>) dan mengarahkan Admin/Master ke rute <code>/manajemenpengguna/users</code>.</li>
                            <li><strong>Action Setujui & Tolak:</strong> Admin/Master dapat menyetujui (<code>POST users/{id}/approve</code>) atau menolak (<code>POST users/{id}/reject</code>) akun pengguna.</li>
                            <li><strong>Penugasan Role Otomatis:</strong> Saat akun disetujui, sistem secara otomatis memberikan role <code>user</code> jika pengguna belum memiliki role.</li>
                            <li><strong>Proteksi Login (Block Unapproved):</strong> Akun berstatus <code>pending</code> atau <code>rejected</code> yang mencoba login di <code>LoginRequest</code> akan diblokir dengan pesan notifikasi yang sesuai.</li>
                            <li><strong>Pengecualian:</strong> Pengguna yang ditambahkan langsung oleh Admin via modal Form Tambah User atau Import Massal Excel otomatis berstatus <code>approved</code> (langsung aktif).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 9. KOTAK BAWAH 7: SKEMA PENGHAPUSAN USER & CASCADING DELETION -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card border-start border-4 border-danger">
            <h4><i class="ki-duotone ki-trash fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> 7. Skema Penghapusan Pengguna & Pembersihan Relasi Otomatis (Cascading Deletion & DB Transaction)</h4>
            <p class="fs-7 text-gray-700">
                Arsitektur pembersihan data relasi dan berkas secara otomatis ketika akun pengguna dihapus dari sistem:
            </p>
            <div class="row g-4 mt-1">
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-danger border border-danger border-dashed h-100">
                        <h5 class="fw-bold text-danger mb-2">A. Event Listener Deleting (<code>User::booted()</code>)</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Event Hook:</strong> Terpasang pada listener <code>static::deleting</code> di model <code>App\Models\User</code>.</li>
                            <li><strong>Pembersihan Berkas Avatar:</strong> Menghapus berkas fisik foto profil dari <code>storage/app/public/avatars</code> dan <code>public/uploads/avatars</code>.</li>
                            <li><strong>Pembersihan Riwayat Login:</strong> Mengosongkan seluruh data pada tabel <code>data_logins</code> (<code>$user->dataLogins()->delete()</code>).</li>
                            <li><strong>Pembersihan Reset Password:</strong> Menghapus permintaan reset password pada tabel <code>password_reset_requests</code>.</li>
                            <li><strong>Pelepasan Hak Akses:</strong> Melepas penugasan role dan izin khusus via <code>$user->roles()->detach()</code> & <code>$user->permissions()->detach()</code>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 rounded bg-light-primary border border-primary border-dashed h-100">
                        <h5 class="fw-bold text-primary mb-2">B. Proteksi Transaksi Database (<code>DB::transaction</code>)</h5>
                        <ul class="schema-list fs-7 mb-0">
                            <li><strong>Transaksional Atomis:</strong> Metode <code>UserController@destroy</code> membungkus eksekusi <code>$user->delete()</code> di dalam <code>DB::transaction()</code>.</li>
                            <li><strong>Pencegahan Akun Sendiri:</strong> Proteksi pencegahan penghapusan akun milik admin yang sedang aktif/login (HTTP 422).</li>
                            <li><strong>Garansi Integritas Data:</strong> Jika salah satu proses penghapusan berkas/tabel relasi mengalami kendala, seluruh transaksi di-rollback secara utuh tanpa meninggalkan <i>orphan data</i>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 10. KOTAK BAWAH 8: REKAPITULASI BERKAS UTAMA USER MANAGEMENT -->
    <!--====================================================-->
    <div class="schema-col-12 mt-4">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Rekapitulasi Berkas & Komponen User Management</h4>
            <div class="table-responsive mt-3">
                <table class="table table-row-dashed align-middle gy-3 fs-7 mb-0">
                    <thead>
                        <tr class="fw-bold text-gray-700 bg-light">
                            <th>Fitur / Komponen</th>
                            <th>File Utama</th>
                            <th>Fungsi Pemrograman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Users CRUD</strong></td>
                            <td><code>UserController.php</code><br><code>UserRequest.php</code><br><code>users.blade.php</code></td>
                            <td>Pengelolaan akun pengguna, password hashing, penugasan role, dan notifikasi SwalHelper.</td>
                        </tr>
                        <tr>
                            <td><strong>Penghapusan User (Cascading Delete)</strong></td>
                            <td><code>User.php</code> (booted deleting)<br><code>UserController.php</code> (destroy)<br><code>users.blade.php</code></td>
                            <td>Pembersihan otomatis berkas avatar fisik, riwayat data logins, permintaan reset password, penugasan role Spatie, dan proteksi DB::transaction().</td>
                        </tr>
                        <tr>
                            <td><strong>Registrasi & Persetujuan Admin</strong></td>
                            <td><code>RegisteredUserController.php</code><br><code>LoginRequest.php</code><br><code>UserController.php</code> (approve & reject)<br><code>register.blade.php</code></td>
                            <td>Registrasi publik, toggle eye & validasi password real-time, notifikasi topbar admin ke rute <code>manajemenpengguna/users</code>, persetujuan admin + auto role <code>user</code>, dan proteksi login akun unapproved.</td>
                        </tr>
                        <tr>
                            <td><strong>Pengelolaan Avatar</strong></td>
                            <td><code>ProfilPenggunaController.php</code><br><code>User.php</code> (getAvatarUrlAttribute)</td>
                            <td>Upload avatar, validasi file image, penataan dimensi 40x40px, dan fallback SVG initial.</td>
                        </tr>
                        <tr>
                            <td><strong>Reward Poin Harian</strong></td>
                            <td><code>LogUserLogin.php</code><br><code>DataLogin.php</code></td>
                            <td>Event listener login, reward +1 poin per hari kalender, dan pencatatan riwayat login.</td>
                        </tr>
                        <tr>
                            <td><strong>Idle Auto-Logout</strong></td>
                            <td><code>_idle-timer.blade.php</code><br><code>UpdateUserLastActivity.php</code></td>
                            <td>Timer 15 menit inaktivitas, update timestamp <code>last_activity_at</code>, dan logout otomatis.</td>
                        </tr>
                        <tr>
                            <td><strong>Upload Massal Excel</strong></td>
                            <td><code>UserController.php</code> (import & downloadTemplate)<br><code>user-import-modal.blade.php</code></td>
                            <td>Penjanaan berkas Excel master (.xlsx) via PhpSpreadsheet, impor massal baris pengguna, validasi email duplikat, dan penugasan role otomatis.</td>
                        </tr>
                        <tr>
                            <td><strong>Switch User (Impersonasi)</strong></td>
                            <td><code>UserController.php</code> (impersonate & leaveImpersonate)<br><code>_user-account-menu.blade.php</code></td>
                            <td>Masuk ke akun lain tanpa password via ID di sesi (<code>impersonator_id</code>), proteksi poin/login listener, dan pemulihan akun asli via dropdown avatar.</td>
                        </tr>
                        <tr>
                            <td><strong>Zona Waktu Lokal (WIB)</strong></td>
                            <td><code>config/app.php</code><br><code>.env</code> (APP_TIMEZONE=Asia/Jakarta)</td>
                            <td>Perekaman timestamp database (created_at, updated_at, login_at, last_activity_at) 100% tersimpan dan disajikan mengikuti zona waktu lokal (Asia/Jakarta, UTC+7).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif
