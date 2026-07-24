<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/landing', function () {
    return redirect('/');
})->name('dashboards.landing');

Route::get('/homepage', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('homepage');

Route::get('/dashboard', function () {
    return redirect()->route('homepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/online-users', [DashboardController::class, 'getOnlineUsers'])->middleware(['auth', 'verified'])->name('dashboard.online-users');

use App\Http\Controllers\AppSupport\AppFiturController;
use App\Http\Controllers\AppSupport\AppProfilController;
use App\Http\Controllers\AppSupport\BackupDbController;
use App\Http\Controllers\AppSupport\DataLoginController;
use App\Http\Controllers\AppSupport\MenuController;
use App\Http\Controllers\ManajemenPengguna\AksesRoleController;
use App\Http\Controllers\ManajemenPengguna\AksesUserController;
use App\Http\Controllers\ManajemenPengguna\PasswordResetRequestController;
use App\Http\Controllers\ManajemenPengguna\PermissionController;
use App\Http\Controllers\ManajemenPengguna\RoleController;
use App\Http\Controllers\ManajemenPengguna\UserController as UserMgmtController;
use App\Http\Controllers\User\ProfilPenggunaController;

Route::middleware('auth')->group(function () {
    Route::post('/profil-pengguna/avatar', [ProfilPenggunaController::class, 'updateAvatar'])->name('profil-pengguna.avatar.update');
    Route::post('/profil-pengguna/pengaturan', [ProfilPenggunaController::class, 'updatePengaturan'])->name('profil-pengguna.pengaturan.update');
    Route::post('/profil-pengguna/keamanan/password', [ProfilPenggunaController::class, 'updatePassword'])->name('profil-pengguna.keamanan.password.update');
    Route::post('/profil-pengguna/keamanan/deactivate', [ProfilPenggunaController::class, 'deactivateAccount'])->name('profil-pengguna.keamanan.deactivate');
    Route::post('/profil-pengguna/keamanan/cancel-deactivate', [ProfilPenggunaController::class, 'cancelDeactivateAccount'])->name('profil-pengguna.keamanan.cancel-deactivate');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Manajemen Pengguna Routes
    Route::prefix('manajemenpengguna')->name('manajemenpengguna.')->group(function () {
        Route::get('reset-password', [PasswordResetRequestController::class, 'index'])->name('reset-password');
        Route::get('reset-password/{id}/mark-read', [PasswordResetRequestController::class, 'markAsRead'])->name('reset-password.mark-read');
        Route::post('reset-password/{id}/reset', [PasswordResetRequestController::class, 'processReset'])->name('reset-password.reset');
        Route::post('reset-password/{id}/reject', [PasswordResetRequestController::class, 'reject'])->name('reset-password.reject');

        Route::get('users/template', [UserMgmtController::class, 'downloadTemplate'])->name('users.template');
        Route::post('users/import', [UserMgmtController::class, 'import'])->name('users.import');
        Route::post('users/assign-default-role', [UserMgmtController::class, 'assignDefaultRoleBulk'])->name('users.assign-default-role');
        Route::get('users/leave-impersonate', [UserMgmtController::class, 'leaveImpersonate'])->name('users.leave-impersonate');
        Route::post('users/{id}/impersonate', [UserMgmtController::class, 'impersonate'])->name('users.impersonate');
        Route::post('users/{id}/approve', [UserMgmtController::class, 'approve'])->name('users.approve');
        Route::post('users/{id}/reject', [UserMgmtController::class, 'reject'])->name('users.reject');
        Route::get('users/{id}/mark-read', [UserMgmtController::class, 'markAsRead'])->name('users.mark-read');
        Route::post('users/{id}/deactivate', [UserMgmtController::class, 'deactivate'])->name('users.deactivate');
        Route::post('users/{id}/activate', [UserMgmtController::class, 'activate'])->name('users.activate');

        Route::resource('roles', RoleController::class)->names([
            'index' => 'roles',
        ]);
        Route::post('permissions/batch', [PermissionController::class, 'storeBatch'])->name('permissions.store-batch');
        Route::get('permissions/module/{module}', [PermissionController::class, 'getModuleData'])->name('permissions.module-data');
        Route::post('permissions/module-update', [PermissionController::class, 'updateModule'])->name('permissions.module-update');
        Route::delete('permissions/module/{module}', [PermissionController::class, 'destroyModule'])->name('permissions.module-destroy');
        Route::resource('permissions', PermissionController::class)->names([
            'index' => 'permissions',
        ]);

        Route::get('akses-role', [AksesRoleController::class, 'index'])->name('akses-role');
        Route::post('akses-role', [AksesRoleController::class, 'update'])->name('akses-role.update');

        Route::get('akses-user', [AksesUserController::class, 'index'])->name('akses-user');
        Route::get('akses-user/{id}', [AksesUserController::class, 'show'])->name('akses-user.show');
        Route::post('akses-user', [AksesUserController::class, 'update'])->name('akses-user.update');

        Route::resource('users', UserMgmtController::class)->names([
            'index' => 'users',
        ]);
    });

    Route::get('appsupport/app-fiturs', [AppFiturController::class, 'index'])->name('appsupport.app-fiturs');
    Route::post('appsupport/app-fiturs/bulk-toggle', [AppFiturController::class, 'bulkToggle'])->name('appsupport.app-fiturs.bulk-toggle');
    Route::post('appsupport/app-fiturs/{id}/toggle-status', [AppFiturController::class, 'toggleStatus'])->name('appsupport.app-fiturs.toggle-status');

    Route::post('appsupport/menu/sort', [MenuController::class, 'sort'])->name('appsupport.menu.sort');
    Route::post('appsupport/menu/{id}/toggle-status', [MenuController::class, 'toggleStatus'])->name('appsupport.menu.toggle-status');
    Route::post('appsupport/menu/{id}/permissions', [MenuController::class, 'addPermission'])->name('appsupport.menu.permissions.add');
    Route::delete('appsupport/menu/{id}/permissions/{permissionId}', [MenuController::class, 'removePermission'])->name('appsupport.menu.permissions.remove');
    Route::resource('appsupport/menu', MenuController::class)->names([
        'index' => 'appsupport.menu',
    ]);

    Route::resource('appsupport/app-profil', AppProfilController::class)->names([
        'index' => 'appsupport.app-profil',
    ]);

    Route::get('appsupport/backup-db', [BackupDbController::class, 'index'])->name('appsupport.backup-db');
    Route::post('appsupport/backup-db', [BackupDbController::class, 'store'])->name('appsupport.backup-db.store');
    Route::get('appsupport/backup-db/download/{filename}', [BackupDbController::class, 'download'])->name('appsupport.backup-db.download');
    Route::post('appsupport/backup-db/restore/{filename}', [BackupDbController::class, 'restore'])->name('appsupport.backup-db.restore');
    Route::delete('appsupport/backup-db/{filename}', [BackupDbController::class, 'destroy'])->name('appsupport.backup-db.destroy');

    Route::get('appsupport/data-login', [DataLoginController::class, 'index'])->name('appsupport.data-login');
    Route::delete('appsupport/data-login/clear-all', [DataLoginController::class, 'clearAll'])->name('appsupport.data-login.clear-all');
    Route::delete('appsupport/data-login/{id}', [DataLoginController::class, 'destroy'])->name('appsupport.data-login.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/_menu-route-utils.php';
// Route template sidebar/menu dari config + views/pages.
require __DIR__ . '/menu-temp.php';
// Route tambahan sidebar/menu dari menu_seeder (database).
require __DIR__ . '/menu.php';
require __DIR__ . '/website.php';
