@if(app()->getLocale() == 'en')
<div class="schema-grid">
    <!--====================================================-->
    <!-- 1. USER AVATAR FEATURE WORKFLOW -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. User Avatar Management & Uploads</h3>
            <span class="text-muted fs-7">Profile picture upload workflow, URL encapsulation, and automatic initial fallbacks.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Avatar Code Flow</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Form updated via <code>POST /profil-pengguna/avatar</code> handled by <code>ProfilPenggunaController@updateAvatar</code>.
                </div>
                <div class="schema-step">
                    <strong>File Validation:</strong> Image files verified with rule <code>image|mimes:jpeg,png,jpg,gif,svg|max:2048</code> (max 2MB).
                </div>
                <div class="schema-step">
                    <strong>Storage:</strong> Physical files stored in <code>public/uploads/avatars/</code> with unique timestamp + user ID naming.
                </div>
                <div class="schema-step">
                    <strong>Model Accessor:</strong> Avatar URL fetched via accessor <code>$user->avatar_url</code> powered by helper <code>getUserAvatarUrl($user)</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-screen fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operations & UI Avatar Display</h4>
            <ul class="schema-list">
                <li><strong>Profile Page:</strong> Users can upload or change avatar pictures independently at <code>/profil-pengguna</code>.</li>
                <li><strong>TopBar & Avatar Dropdown:</strong> Profile picture rendered automatically on top right header and user account menu.</li>
                <li><strong>Login Data Table:</strong> User avatars rendered as circle symbols on the <em>User / Pengguna</em> column at <code>/appsupport/data-login</code>.</li>
                <li><strong>SVG Initial Fallback:</strong> If no avatar is uploaded, system generates an initial letter SVG avatar (e.g. "A" for Admin).</li>
            </ul>
            <div class="schema-note mt-4">
                Avatars are centralized via accessor <code>$user->avatar_url</code> ensuring real-time profile updates across all layout components.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. USER REWARD POINTS FEATURE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-success ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">2. User Activity Reward Points System</h3>
            <span class="text-muted fs-7">1 daily point reward architecture, login event listener, and history tracking.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-database fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Point Logic & Daily Workflow</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Event & Listener:</strong> Upon successful login, Laravel fires <code>Illuminate\Auth\Events\Login</code> caught by listener <code>App\Listeners\LogUserLogin</code>.
                </div>
                <div class="schema-step">
                    <strong>Calendar Date Check:</strong> Listener executes query <code>DataLogin::where('user_id', $user->id)->whereDate('login_at', $today)</code>.
                </div>
                <div class="schema-step">
                    <strong>New Point Condition:</strong> If no login record exists for that day, system logs new record and executes <code>$user->increment('points', 1)</code>.
                </div>
                <div class="schema-step">
                    <strong>Repeated Logins on Same Day:</strong> If user logs in again on the same day, system only increments <code>login_count</code> on that day's record <em>without adding extra points</em>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-chart-line fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Point Visualization & Dashboard Leaderboards</h4>
            <ul class="schema-list">
                <li><strong>User Point Stat Card:</strong> Total user point balance displayed on summary card in Dashboard and User Profile Header.</li>
                <li><strong>Activity Leaderboard Widget:</strong> Displays ranking of active users based on accumulated daily login points.</li>
                <li><strong>Impersonation Protection:</strong> Listener intelligently detects session <code>impersonator_id</code> to prevent fake point generation during admin account switching.</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. 15-MINUTE AUTOMATIC IDLE LOGOUT SECURITY -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-danger ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">3. Automatic 15-Minute Idle Logout Security</h3>
            <span class="text-muted fs-7">Client-side inactivity monitor, last activity tracking middleware, and automatic session termination.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-timer fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> Idle Timeout Code Flow (15 Mins)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Client-Side Listener:</strong> Partial <code>resources/views/partials/_idle-timer.blade.php</code> mounted globally on layout. Monitors user events (<code>mousemove</code>, <code>keydown</code>, <code>scroll</code>, <code>click</code>).
                </div>
                <div class="schema-step">
                    <strong>Timeout Limit (15 Mins):</strong> Sets inactivity timer to <strong>15 minutes (900,000 ms)</strong>. Any user activity resets timer back to zero.
                </div>
                <div class="schema-step">
                    <strong>Auto-Logout Execution:</strong> If 15 minutes expire without activity, script automatically submits <code>POST /logout</code> with hidden parameter <code>reason=idle</code>.
                </div>
                <div class="schema-step">
                    <strong>Redirection & Alert:</strong> <code>AuthenticatedSessionController@destroy</code> catches parameter <code>reason=idle</code>, clears session, and redirects to <code>login</code> with status warning.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-security-user fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Display & Session Security Operations</h4>
            <ul class="schema-list">
                <li><strong>Login Page Alert Banner:</strong> When redirected due to idle timeout, <code>/login</code> page displays a yellow alert informing session expired due to 15 mins inactivity.</li>
                <li><strong>Sign Out Menu Avatar:</strong> Clicking <em>Sign Out</em> on user dropdown avatar immediately redirects to login page.</li>
                <li><strong>Real-Time Active User Tracking:</strong> Middleware <code>UpdateUserLastActivity</code> updates timestamp <code>last_activity_at</code> to calculate <strong>Active Users (15 Mins)</strong> widget accurately.</li>
            </ul>
            <div class="schema-warn mt-4">
                15-minute idle auto-logout protects account integrity when computers/gadgets are left unattended by users.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. BULK EXCEL IMPORT FEATURE -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-info ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">4. Bulk User Excel Import & Master Format (.xlsx)</h3>
            <span class="text-muted fs-7">PhpSpreadsheet extraction engine, master template generator, duplicate validation, and auto role assignment.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-down fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Master Excel Template (.xlsx)</h4>
            <ul class="schema-list">
                <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/template</code> (<code>UserController@downloadTemplate</code>).</li>
                <li><strong>Styling & Header:</strong> Uses <code>PhpOffice\PhpSpreadsheet</code> with bold <code>#1E1E2D</code> header styling.</li>
                <li><strong>Column Structure:</strong> <code>No</code>, <code>Full Name *</code>, <code>Email *</code>, <code>Password *</code>, <code>Role (optional)</code>.</li>
                <li><strong>Sample Guide:</strong> Includes 3 sample rows and automatic column auto-fit.</li>
            </ul>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-up fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Import Engine & Bulk Validation</h4>
            <ul class="schema-list">
                <li><strong>Endpoint:</strong> <code>POST /manajemenpengguna/users/import</code> (<code>UserController@import</code>).</li>
                <li><strong>Format & Size:</strong> Supports <code>.xlsx</code>, <code>.xls</code>, <code>.csv</code> (max 5MB).</li>
                <li><strong>Duplicate Check:</strong> Checks email addresses in <code>users</code> table. If registered, row is safely skipped.</li>
                <li><strong>Auto Role Sync:</strong> Reads role column and attaches role to new user automatically.</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 5. USER SWITCH MODE (IMPERSONATION) -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-warning ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">5. User Switch Mode (Passwordless Account Impersonation)</h3>
            <span class="text-muted fs-7">Passwordless account switching feature, admin session ID preservation, and original account restoration via avatar dropdown.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Impersonate Account Workflow</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Interaction:</strong> Click user name or Switch icon (<i class="ki-duotone ki-switch"></i>) in <code>users.blade.php</code> table.
                </div>
                <div class="schema-step">
                    <strong>Endpoint & Session:</strong> <code>POST /manajemenpengguna/users/{id}/impersonate</code> saves admin ID to <code>session(['impersonator_id' => Auth::id()])</code> and executes <code>Auth::login($targetUser)</code>.
                </div>
                <div class="schema-step">
                    <strong>Indicator Banner:</strong> Application header displays special yellow banner indicating active impersonation mode.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-exit-right fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> Leave Impersonate Workflow</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Interaction:</strong> Click <em>Back to Main Account</em> button on topbar banner or user avatar menu.
                </div>
                <div class="schema-step">
                    <strong>Restoration Endpoint:</strong> <code>GET /manajemenpengguna/users/leave-impersonate</code> reads original ID from <code>session('impersonator_id')</code>.
                </div>
                <div class="schema-step">
                    <strong>Admin Relogin:</strong> <code>Auth::loginUsingId($originalId)</code> restores admin permissions and clears impersonation session variable.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 6. PUBLIC REGISTRATION & ADMIN APPROVAL -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">6. Public Registration & Admin Approval System</h3>
            <span class="text-muted fs-7">Public account registration verification, pending status, admin topbar alerts, and auto 'user' role assignment.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-user-plus fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Public Registration (Register Form)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Register Form:</strong> Account registration from public page <code>/register</code> with real-time password validation and eye toggle.
                </div>
                <div class="schema-step">
                    <strong>Pending Account Status:</strong> Users registering via public web receive <code>status = 'pending'</code> and are <strong>NOT logged in automatically</strong>, but redirected to <code>/login</code> with notice.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Admin Approval, Auto Role & Login Protection</h4>
            <ul class="schema-list">
                <li><strong>Admin Header Alerts:</strong> New registration alerts appear in topbar dropdown (<i>Alerts</i> tab), directing Admin/Master to <code>/manajemenpengguna/users</code>.</li>
                <li><strong>Approve & Reject Actions:</strong> Admin/Master can click <strong>Approve</strong> (<code>POST users/{id}/approve</code>) or <strong>Reject</strong> (<code>POST users/{id}/reject</code>) on user table.</li>
                <li><strong>Auto 'User' Role Assignment:</strong> Upon approval, system automatically assigns <code>user</code> role if user has no assigned role.</li>
                <li><strong>Unapproved Account Protection:</strong> Accounts with <code>pending</code> or <code>rejected</code> status trying to log in are rejected at <code>LoginRequest</code> with warning message.</li>
                <li><strong>Exceptions:</strong> Accounts created directly by Admin via Add User Modal or Bulk Excel Import automatically receive <code>approved</code> status (immediately active).</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 7. RECAPITULATION OF COMPONENTS & FILES -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Components & Main Files Recapitulation</h4>
            <div class="table-responsive mt-3">
                <table class="table table-row-dashed align-middle gy-3 fs-7">
                    <thead>
                        <tr class="fw-bold text-gray-700 bg-light">
                            <th>Feature Component</th>
                            <th>Main File</th>
                            <th>Programming Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Account Registration & Admin Approval</strong></td>
                            <td><code>RegisteredUserController.php</code><br><code>LoginRequest.php</code><br><code>UserController.php</code> (approve & reject)<br><code>register.blade.php</code></td>
                            <td>Public registration, eye toggle & real-time password validation, admin topbar alerts to route <code>manajemenpengguna/users</code>, admin approval + auto <code>user</code> role, and unapproved login protection.</td>
                        </tr>
                        <tr>
                            <td><strong>Avatar Management</strong></td>
                            <td><code>ProfilPenggunaController.php</code><br><code>User.php</code> (getAvatarUrlAttribute)</td>
                            <td>Handles avatar uploads, image validation, storage in <code>public/uploads/avatars</code>, and initial SVG fallbacks.</td>
                        </tr>
                        <tr>
                            <td><strong>Reward Points System</strong></td>
                            <td><code>LogUserLogin.php</code><br><code>DataLogin.php</code></td>
                            <td>Listens to login event, validates 1 point per calendar day reward, increments <code>login_count</code> per day, and updates <code>user.points</code> balance.</td>
                        </tr>
                        <tr>
                            <td><strong>15-Min Idle Logout</strong></td>
                            <td><code>_idle-timer.blade.php</code><br><code>UpdateUserLastActivity.php</code><br><code>AuthenticatedSessionController.php</code></td>
                            <td>15-minute inactivity timer script, <code>last_activity_at</code> timestamp update middleware, and automatic logout redirection.</td>
                        </tr>
                        <tr>
                            <td><strong>Bulk Excel Import</strong></td>
                            <td><code>UserController.php</code> (import & downloadTemplate)<br><code>user-import-modal.blade.php</code></td>
                            <td>Master template generation (.xlsx) via PhpSpreadsheet, bulk spreadsheet user import, duplicate email validation, and auto role sync.</td>
                        </tr>
                        <tr>
                            <td><strong>Switch User (Impersonation)</strong></td>
                            <td><code>UserController.php</code> (impersonate & leaveImpersonate)<br><code>_user-account-menu.blade.php</code><br><code>LogUserLogin.php</code></td>
                            <td>Passwordless login to another account via session ID (<code>impersonator_id</code>), reward point listener bypass, and account restoration via avatar dropdown.</td>
                        </tr>
                        <tr>
                            <td><strong>Admin Password Reset</strong></td>
                            <td><code>PasswordResetLinkController.php</code><br><code>PasswordResetRequestController.php</code><br><code>PasswordResetRequest.php</code><br><code>reset-password.blade.php</code></td>
                            <td>Password reset request workflow from public web to admin, notification badge counters & Alerts tab, and reset to default password <code>Password!12345</code>.</td>
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
    <!-- 1. ALUR FITUR AVATAR PENGGUNA -->
    <!--====================================================-->
    <div class="schema-col-12">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">1. Penambahan & Pengelolaan Avatar Pengguna</h3>
            <span class="text-muted fs-7">Alur pengunggahan gambar profil, enkapsulasi URL, dan fallback avatar otomatis.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-code fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Alur Pemrograman Avatar</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Route & Controller:</strong> Form diubah via <code>POST /profil-pengguna/avatar</code> yang ditangani oleh <code>ProfilPenggunaController@updateAvatar</code>.
                </div>
                <div class="schema-step">
                    <strong>Validasi File:</strong> File gambar diverifikasi dengan aturan <code>image|mimes:jpeg,png,jpg,gif,svg|max:2048</code> (maksimal 2MB).
                </div>
                <div class="schema-step">
                    <strong>Penyimpanan:</strong> File fisik disimpan pada direktori <code>public/uploads/avatars/</code> dengan penamaan nama file unik berdasarkan timestamp dan ID user.
                </div>
                <div class="schema-step">
                    <strong>Model Accessor:</strong> URL avatar diambil melalui accessor <code>$user->avatar_url</code> yang didukung oleh helper <code>getUserAvatarUrl($user)</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-screen fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Operasional & Tampilan UI Avatar</h4>
            <ul class="schema-list">
                <li><strong>Halaman Profil:</strong> Pengguna dapat mengunggah atau mengganti foto avatar secara mandiri pada rute <code>/profil-pengguna</code>.</li>
                <li><strong>TopBar & Dropdown Avatar:</strong> Foto profil dirender secara otomatis pada header kanan atas dan menu akun user.</li>
                <li><strong>Tabel Data Login:</strong> Avatar user ditampilkan dalam bentuk simbol lingkaran (symbol circle) pada kolom <em>User / Pengguna</em> di rute <code>/appsupport/data-login</code>.</li>
                <li><strong>Fallback SVG Initial:</strong> Jika pengguna belum mengunggah foto avatar, sistem secara otomatis menggenerate avatar initial huruf depan nama user (misal: "A" untuk Admin).</li>
            </ul>
            <div class="schema-note mt-4">
                Avatar terintegrasi secara terpusat melalui accessor <code>$user->avatar_url</code> sehingga perubahan foto profil langsung terefleksi secara real-time di seluruh komponen layout.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 2. ALUR FITUR REWARD POIN USER -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-success ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">2. Penambahan & Akumulasi Poin Keaktifan User</h3>
            <span class="text-muted fs-7">Arsitektur reward 1 poin harian, event listener login, dan rekonsiliasi histori.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-database fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Alur Pemrograman Poin & Logika Harian</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Event & Listener:</strong> Setiap kali proses login berhasil, Laravel memicu event <code>Illuminate\Auth\Events\Login</code> yang ditangkap oleh listener <code>App\Listeners\LogUserLogin</code>.
                </div>
                <div class="schema-step">
                    <strong>Pemeriksaan Hari (Calendar Date):</strong> Listener mengeksekusi pencarian <code>DataLogin::where('user_id', $user->id)->whereDate('login_at', $today)</code>.
                </div>
                <div class="schema-step">
                    <strong>Kondisi Poin Baru:</strong> Jika belum ada rekaman login pada hari yang sama, sistem menambahkan log baru dan meng-increment <code>$user->increment('points', 1)</code>.
                </div>
                <div class="schema-step">
                    <strong>Login Berulang di Hari Sama:</strong> Jika pengguna login kembali pada hari yang sama, sistem hanya meng-increment <code>login_count</code> pada baris log hari tersebut <em>tanpa menambahkan poin lagi</em>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-chart-line fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Visualisasi Poin & Klasemen Dashboard</h4>
            <ul class="schema-list">
                <li><strong>Stat Card User Poin:</strong> Total saldo poin pengguna ditampilkan pada card summary di Dashboard dan Header Profil User.</li>
                <li><strong>Widget Klasemen Keaktifan:</strong> Menampilkan peringkat pengguna aktif berdasar akumulasi poin login harian terbanyak.</li>
                <li><strong>Proteksi Beralih Akun (Impersonasi):</strong> Listener secara cerdas mendeteksi sesi <code>impersonator_id</code> untuk mencegah penambahan poin palsu saat admin beralih akun.</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 3. KEAMANAN IDLE AUTO-LOGOUT 15 MENIT -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-danger ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">3. Keamanan Idle Auto-Logout (15 Menit Inaktivitas)</h3>
            <span class="text-muted fs-7">Sistem pemantau inaktivitas client-side, middleware pelacak aktivitas terakhir, dan pengakhiran sesi otomatis.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-timer fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> Alur Pemrograman Idle Timeout (15 Menit)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Client-Side Listener:</strong> Partial <code>resources/views/partials/_idle-timer.blade.php</code> dipasang secara global pada layout. Listener memantau interaksi user (<code>mousemove</code>, <code>keydown</code>, <code>scroll</code>, <code>click</code>).
                </div>
                <div class="schema-step">
                    <strong>Batas Waktu (15 Mins):</strong> Pemantau menyetel timer inaktivitas selama <strong>15 menit (900.000 ms)</strong>. Setiap ada aktivitas user, timer di-reset kembali dari awal.
                </div>
                <div class="schema-step">
                    <strong>Eksekusi Auto-Logout:</strong> Jika timer 15 menit habis tanpa aktivitas, skrip otomatis mengirimkan request <code>POST /logout</code> dengan parameter hidden <code>reason=idle</code>.
                </div>
                <div class="schema-step">
                    <strong>Redirection & Alert:</strong> <code>AuthenticatedSessionController@destroy</code> menangkap parameter <code>reason=idle</code>, menghapus sesi, lalu melakukan <code>redirect()->route('login')->with('status', '...')</code>.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-security-user fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Tampilan & Operasional Keamanan Sesi</h4>
            <ul class="schema-list">
                <li><strong>Banner Peringatan Halaman Login:</strong> Saat dialihkan akibat idle timeout, halaman <code>/login</code> menampilkan banner peringatan <code>alert-warning</code> berwarna kuning yang menginfokan sesi telah habis akibat inaktivitas 15 menit.</li>
                <li><strong>Sign Out Menu Avatar:</strong> Mengklik tombol <em>Sign Out</em> pada dropdown avatar user di kanan pojok atas secara konsisten akan langsung mengarahkan pengguna kembali ke halaman login.</li>
                <li><strong>Tracking User Aktif Real-Time:</strong> Middleware <code>UpdateUserLastActivity</code> memperbarui timestamp <code>last_activity_at</code> user saat beraktivitas untuk menghitung data widget <strong>User Aktif (15 Mins)</strong> secara akurat.</li>
            </ul>
            <div class="schema-warn mt-4">
                Fitur idle auto-logout 15 menit melindungi akun dari akses pihak yang tidak berwenang ketika komputer/gadget ditinggalkan oleh pengguna.
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 4. ALUR FITUR IMPOR MASSAL EXCEL -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-info ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">4. Impor Massal Pengguna via Excel & Master Format (.xlsx)</h3>
            <span class="text-muted fs-7">Sistem ekstraksi berkas spreadsheet PhpSpreadsheet, penjanaan template master, validasi duplikat, dan penugasan role otomatis.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-down fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i> Master Template Excel (.xlsx)</h4>
            <ul class="schema-list">
                <li><strong>Endpoint:</strong> <code>GET /manajemenpengguna/users/template</code> (<code>UserController@downloadTemplate</code>).</li>
                <li><strong>Styling & Header:</strong> Menggunakan <code>PhpOffice\PhpSpreadsheet</code> dengan desain header tebal <code>#1E1E2D</code>.</li>
                <li><strong>Struktur Kolom:</strong> <code>No</code>, <code>Nama Lengkap *</code>, <code>Email *</code>, <code>Password *</code>, <code>Role (opsional)</code>.</li>
                <li><strong>Panduan Sampel:</strong> Dilengkapi 3 baris sampel otomatis & auto-fit lebar kolom.</li>
            </ul>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-up fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Import Engine & Validasi Massal</h4>
            <ul class="schema-list">
                <li><strong>Endpoint:</strong> <code>POST /manajemenpengguna/users/import</code> (<code>UserController@import</code>).</li>
                <li><strong>Format & Ukuran:</strong> Mendukung berkas <code>.xlsx</code>, <code>.xls</code>, <code>.csv</code> (maksimal 5MB).</li>
                <li><strong>Pengecekan Duplikat:</strong> Memeriksa alamat email di database <code>users</code>. Jika sudah terdaftar, baris tersebut dilewati secara aman.</li>
                <li><strong>Auto Role Sync:</strong> Membaca kolom role dan menugaskan role ke user baru secara otomatis.</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 5. ALUR MODE SWITCH USER (IMPERSONASI AKUN) -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-warning ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">5. Mode Switch User (Impersonasi Akun Tanpa Password)</h3>
            <span class="text-muted fs-7">Fitur pengalihan akun tanpa login kata sandi, penyimpanan ID admin di sesi, dan pemulihan akun asli via dropdown avatar.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-switch fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i> Alur Beralih Akun (Impersonate)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Interaksi:</strong> Klik langsung nama user atau icon Switch (<i class="ki-duotone ki-switch"></i>) pada tabel <code>users.blade.php</code>.
                </div>
                <div class="schema-step">
                    <strong>Endpoint & Sesi:</strong> <code>POST /manajemenpengguna/users/{id}/impersonate</code> menyimpan ID admin ke <code>session(['impersonator_id' => Auth::id()])</code> dan mengeksekusi <code>Auth::login($targetUser)</code>.
                </div>
                <div class="schema-step">
                    <strong>Banner Indikator:</strong> Header aplikasi menampilkan banner khusus berwarna kuning bahwa Anda sedang dalam mode impersonasi.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-exit-right fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i> Alur Kembali ke Akun Asli (Leave Impersonate)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Interaksi:</strong> Klik tombol <em>Kembali ke Akun Utama</em> pada banner topbar atau menu profil avatar.
                </div>
                <div class="schema-step">
                    <strong>Endpoint Pemulihan:</strong> <code>GET /manajemenpengguna/users/leave-impersonate</code> membaca ID asli dari <code>session('impersonator_id')</code>.
                </div>
                <div class="schema-step">
                    <strong>Login Kembali Admin:</strong> <code>Auth::loginUsingId($originalId)</code> mengembalikan hak akses admin dan menghapus variabel sesi impersonasi.
                </div>
            </div>
        </div>
    </div>

    <!--====================================================-->
    <!-- 6. ALUR PENDAFTARAN PUBLIK & PERSETUJUAN ADMIN -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="border-start border-4 border-primary ps-4 my-2">
            <h3 class="fw-bold text-gray-900 mb-1">6. Pendaftaran Akun Publik & Persetujuan Admin (Approval System)</h3>
            <span class="text-muted fs-7">Sistem verifikasi pendaftaran akun publik, status pending, notifikasi admin, dan auto penugasan role 'user'.</span>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-user-plus fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Pendaftaran Publik (Form Register)</h4>
            <div class="schema-flow">
                <div class="schema-step">
                    <strong>Form Register:</strong> Pendaftaran akun dari halaman publik <code>/register</code> dengan validasi password real-time dan toggle mata.
                </div>
                <div class="schema-step">
                    <strong>Status Akun Pending:</strong> Pengguna yang mendaftar via web publik diberi <code>status = 'pending'</code> dan <strong>TIDAK langsung di-login-kan secara otomatis</strong>, melainkan dialihkan ke <code>/login</code> berpesan peringatan.
                </div>
            </div>
        </div>
    </div>

    <div class="schema-col-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i> Persetujuan Admin, Auto Role & Proteksi Login</h4>
            <ul class="schema-list">
                <li><strong>Notifikasi Header Admin:</strong> Notifikasi pendaftaran akun baru muncul pada dropdown notifikasi topbar (tab <em>Peringatan</em>) dan mengarahkan Admin/Master ke rute <code>/manajemenpengguna/users</code>.</li>
                <li><strong>Persetujuan & Penolakan:</strong> Admin/Master dapat menekan tombol <strong>Setujui</strong> (<code>POST users/{id}/approve</code>) atau <strong>Tolak</strong> (<code>POST users/{id}/reject</code>) pada tabel pengguna.</li>
                <li><strong>Penugasan Role 'User' Otomatis:</strong> Saat akun disetujui, sistem secara otomatis memberikan role <code>user</code> jika pengguna belum memiliki role.</li>
                <li><strong>Proteksi Akun Unapproved:</strong> Akun berstatus <code>pending</code> atau <code>rejected</code> yang mencoba login akan ditolak pada <code>LoginRequest</code> dengan pesan notifikasi yang sesuai.</li>
                <li><strong>Pengecualian:</strong> Akun yang dibuat langsung oleh Admin via Form Tambah User atau Import Massal Excel otomatis berstatus <code>approved</code> (langsung aktif).</li>
            </ul>
        </div>
    </div>

    <!--====================================================-->
    <!-- 7. REKAPITULASI BERKAS & KOMPONEN TERKAIT -->
    <!--====================================================-->
    <div class="schema-col-12 mt-6">
        <div class="schema-card">
            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Ringkasan Berkas & Komponen Terkait</h4>
            <div class="table-responsive mt-3">
                <table class="table table-row-dashed align-middle gy-3 fs-7">
                    <thead>
                        <tr class="fw-bold text-gray-700 bg-light">
                            <th>Komponen Fitur</th>
                            <th>File Berkas Utama</th>
                            <th>Fungsi / Peran Pemrograman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Registrasi Akun & Persetujuan Admin</strong></td>
                            <td><code>RegisteredUserController.php</code><br><code>LoginRequest.php</code><br><code>UserController.php</code> (approve & reject)<br><code>register.blade.php</code></td>
                            <td>Registrasi publik, toggle eye & validasi password real-time, notifikasi topbar admin ke rute <code>manajemenpengguna/users</code>, persetujuan admin + auto role <code>user</code>, dan proteksi login akun unapproved.</td>
                        </tr>
                        <tr>
                            <td><strong>Pengelolaan Avatar</strong></td>
                            <td><code>ProfilPenggunaController.php</code><br><code>User.php</code> (getAvatarUrlAttribute)</td>
                            <td>Menangani upload file avatar, validasi image, penyimpanan ke <code>public/uploads/avatars</code>, serta fungsi fallback SVG.</td>
                        </tr>
                        <tr>
                            <td><strong>Sistem Reward Poin</strong></td>
                            <td><code>LogUserLogin.php</code><br><code>DataLogin.php</code></td>
                            <td>Mendengar event login, memvalidasi perolehan 1 poin per-hari kalender, meng-increment <code>login_count</code> per hari, dan memperbarui saldo <code>user.points</code>.</td>
                        </tr>
                        <tr>
                            <td><strong>Idle Logout 15 Mins</strong></td>
                            <td><code>_idle-timer.blade.php</code><br><code>UpdateUserLastActivity.php</code><br><code>AuthenticatedSessionController.php</code></td>
                            <td>Skrip timer inaktivitas 15 menit, middleware update timestamp `last_activity_at`, dan pengalihan logout otomatis berpesan peringatan.</td>
                        </tr>
                        <tr>
                            <td><strong>Upload Massal Excel</strong></td>
                            <td><code>UserController.php</code> (import & downloadTemplate)<br><code>user-import-modal.blade.php</code></td>
                            <td>Penjanaan master template (.xlsx) via PhpSpreadsheet, impor massal baris pengguna, validasi email duplikat, dan auto role sync.</td>
                        </tr>
                        <tr>
                            <td><strong>Switch User (Impersonasi)</strong></td>
                            <td><code>UserController.php</code> (impersonate & leaveImpersonate)<br><code>_user-account-menu.blade.php</code><br><code>LogUserLogin.php</code></td>
                            <td>Masuk ke akun lain tanpa password via ID di sesi (<code>impersonator_id</code>), bypass listener reward poin/login count, dan pemulihan akun asli via dropdown avatar.</td>
                        </tr>
                        <tr>
                            <td><strong>Reset Password Admin</strong></td>
                            <td><code>PasswordResetLinkController.php</code><br><code>PasswordResetRequestController.php</code><br><code>PasswordResetRequest.php</code><br><code>reset-password.blade.php</code></td>
                            <td>Alur permintaan reset password dari website publik ke admin, notifikasi badge counter & tab Peringatan, serta reset ke password default <code>Password!12345</code>.</td>
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
