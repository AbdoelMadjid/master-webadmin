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
                    <span class="schema-pill">Skema Main Menu > Manajemen Pengguna > Reset Password</span>
                    <h2 class="fw-bold">Skema Reset Password Requests (Lupa Password & Admin Reset)</h2>
                    <p class="schema-lead">
                        Penjelasan arsitektur aliran permintaan reset password dari website publik (/forgot-password), pemicuan Notifikasi Header Peringatan & Red Badge Counter, serta penanganan Reset Password oleh Master/Admin dengan kata sandi default `Password!12345`.
                    </p>
                </div>
                <!--end::Hero-->

                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. MODEL & MIGRATION STRUCTURE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-database fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Model & Migration Structure</h4>
                            <pre class="schema-code"><code>// Model: App\Models\ManajemenPengguna\PasswordResetRequest
// Table: password_reset_requests

Schema::create('password_reset_requests', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    $table->string('email');
    $table->enum('status', ['pending', 'completed', 'rejected'])->default('pending');
    $table->boolean('is_read')->default(false);
    $table->text('admin_notes')->nullable();
    $table->foreignId('handled_by')->nullable()->constrained('users');
    $table->timestamp('handled_at')->nullable();
    $table->timestamps();
});</code></pre>
                            <div class="schema-note mt-3">
                                Field <code>is_read</code> mengontrol kemunculan <strong>Badge Counter Angka Merah</strong> pada ikon lonceng header dan item notifikasi di tab <strong>Peringatan</strong>.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. PUBLIC CONTROLLER (FORGOT PASSWORD) -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-send fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Public Request Controller</h4>
                            <pre class="schema-code"><code>// Controller: App\Http\Controllers\Auth\PasswordResetLinkController@store

$user = User::where('email', $request->email)->first();
if (!$user) {
    return back()->withErrors(['email' => 'Email tidak terdaftar dalam sistem.']);
}

PasswordResetRequest::create([
    'user_id' => $user->id,
    'email'   => $user->email,
    'status'  => 'pending',
    'is_read' => false,
]);

return back()->with('status', 'Permintaan reset password telah berhasil dikirimkan ke Master/Admin.');</code></pre>
                            <div class="schema-note mt-3">
                                Memverifikasi keberadaan email sebelum membuat rekaman permintaan pending di database.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ADMIN MANAGEMENT CONTROLLER & ROUTE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-setting-3 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Admin Controller & Route</h4>
                            <pre class="schema-code"><code>// Controller: App\Http\Controllers\ManajemenPengguna\PasswordResetRequestController
// Route: manajemenpengguna/reset-password

Route::prefix('manajemenpengguna')->name('manajemenpengguna.')->group(function () {
    Route::get('reset-password', [PasswordResetRequestController::class, 'index'])->name('reset-password');
    Route::get('reset-password/{id}/mark-read', [PasswordResetRequestController::class, 'markAsRead'])->name('reset-password.mark-read');
    Route::post('reset-password/{id}/reset', [PasswordResetRequestController::class, 'processReset'])->name('reset-password.reset');
    Route::post('reset-password/{id}/reject', [PasswordResetRequestController::class, 'reject'])->name('reset-password.reject');
});</code></pre>
                            <div class="schema-note mt-3">
                                Method <code>markAsRead($id)</code> mengubah <code>is_read = true</code> saat notifikasi diklik, lalu mengalihkan Admin ke halaman pengelolaan.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. DATATABLES JS & DEFAULT PASSWORD EXECUTION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-key fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Client-Side DataTables & Default Password</h4>
                            <pre class="schema-code"><code>// DataTables Client-Side Search (0ms Latency)
var resetTable = $('#kt_reset_password_table').DataTable({
    pageLength: 10,
    columnDefs: [{ className: 'text-end pe-4', targets: [5] }]
});

// Default Password Pre-fill:
$('#reset_password_input').val('Password!12345');
$('#reset_password_confirm_input').val('Password!12345');

// Update user password on Admin approval:
$user->forceFill(['password' => Hash::make($request->password)])->save();
$resetReq->update(['status' => 'completed', 'is_read' => true, 'handled_by' => Auth::id()]);</code></pre>
                            <div class="schema-note mt-3">
                                Modal reset kata sandi terisi otomatis (<em>pre-filled</em>) dengan kata sandi default <code>Password!12345</code> untuk kemudahan operasional Admin.
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. REKAPITULASI BERKAS FITUR RESET PASSWORD -->
                    <!--====================================================-->
                    <div class="schema-col-12 mt-4">
                        <div class="schema-card">
                            <h4><i class="ki-duotone ki-file-sheet fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i> Rekapitulasi Berkas & Komponen Reset Password</h4>
                            <div class="table-responsive mt-3">
                                <table class="table table-row-dashed align-middle gy-3 fs-7 mb-0">
                                    <thead>
                                        <tr class="fw-bold text-gray-700 bg-light">
                                            <th>Komponen / Berkas</th>
                                            <th>Path File / Kelas</th>
                                            <th>Peran & Fungsi Utama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Migration Table</strong></td>
                                            <td><code>database/migrations/2026_07_23_080000_create_password_reset_requests_table.php</code></td>
                                            <td>Membuat tabel <code>password_reset_requests</code> (user_id, email, status, is_read, admin_notes, handled_by, handled_at).</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Eloquent Model</strong></td>
                                            <td><code>App\Models\ManajemenPengguna\PasswordResetRequest.php</code></td>
                                            <td>Model relasi ke <code>User</code> (peminta) dan <code>handler</code> (admin penanggung jawab).</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Public Controller</strong></td>
                                            <td><code>App\Http\Controllers\Auth\PasswordResetLinkController.php</code></td>
                                            <td>Validasi email terdaftar & pembuatan rekaman <code>PasswordResetRequest</code> status pending.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Admin Controller</strong></td>
                                            <td><code>App\Http\Controllers\ManajemenPengguna\PasswordResetRequestController.php</code></td>
                                            <td>Penyajian data, eksekusi reset kata sandi, penolakan permintaan, dan penderasan `markAsRead`.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>View & Modal Form</strong></td>
                                            <td><code>resources/views/pages/manajemenpengguna/reset-password.blade.php</code></td>
                                            <td>Tampilan DataTables responsif, pencarian client-side JS, dan modal set kata sandi default <code>Password!12345</code>.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Header Notifications</strong></td>
                                            <td><code>resources/views/layouts/partials/header/_app/notifications.blade.php</code><br><code>resources/views/partials/menus/_notifications-menu.blade.php</code></td>
                                            <td>Render counter badge angka merah di atas lonceng header dan pendaftaran item pada tab <strong>Peringatan</strong>.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
