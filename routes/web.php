<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppSupport\NotificationController;
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
use App\Http\Controllers\AppSupport\ReferensiController;
use App\Http\Controllers\AppSupport\ChangelogController;
use App\Http\Controllers\AppSupport\ConsoleDeveloperController;
use App\Http\Controllers\ManajemenPengguna\AksesRoleController;
use App\Http\Controllers\ManajemenPengguna\AksesUserController;
use App\Http\Controllers\ManajemenPengguna\PasswordResetRequestController;
use App\Http\Controllers\ManajemenPengguna\PermissionController;
use App\Http\Controllers\ManajemenPengguna\RoleController;
use App\Http\Controllers\ManajemenPengguna\UserController as UserMgmtController;
use App\Http\Controllers\User\ProfilPenggunaController;

Route::middleware('auth')->group(function () {
    Route::get('/notifications/fetch', [NotificationController::class, 'fetch'])->name('notifications.fetch');

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
        Route::post('reset-password/{id}/reset', [PasswordResetRequestController::class, 'processReset'])->middleware('throttle:5,1')->name('reset-password.reset');
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
    Route::post('appsupport/menu/auto-translate', [MenuController::class, 'autoTranslate'])->name('appsupport.menu.auto-translate');
    Route::post('appsupport/menu/{id}/toggle-status', [MenuController::class, 'toggleStatus'])->name('appsupport.menu.toggle-status');
    Route::post('appsupport/menu/{id}/permissions', [MenuController::class, 'addPermission'])->name('appsupport.menu.permissions.add');
    Route::delete('appsupport/menu/{id}/permissions/{permissionId}', [MenuController::class, 'removePermission'])->name('appsupport.menu.permissions.remove');
    Route::post('appsupport/menu/batch', [MenuController::class, 'storeBatch'])->name('appsupport.menu.store-batch');
    Route::resource('appsupport/menu', MenuController::class)->names([
        'index'   => 'appsupport.menu',
        'store'   => 'appsupport.menu.store',
        'show'    => 'appsupport.menu.show',
        'update'  => 'appsupport.menu.update',
        'destroy' => 'appsupport.menu.destroy',
    ]);

    Route::resource('appsupport/app-profil', AppProfilController::class)->names([
        'index' => 'appsupport.app-profil',
    ]);

    Route::get('appsupport/backup-db', [BackupDbController::class, 'index'])->name('appsupport.backup-db');
    Route::post('appsupport/backup-db', [BackupDbController::class, 'store'])->middleware('throttle:3,1')->name('appsupport.backup-db.store');
    Route::get('appsupport/backup-db/download/{filename}', [BackupDbController::class, 'download'])->name('appsupport.backup-db.download');
    Route::post('appsupport/backup-db/restore/{filename}', [BackupDbController::class, 'restore'])->middleware('throttle:3,1')->name('appsupport.backup-db.restore');
    Route::delete('appsupport/backup-db/{filename}', [BackupDbController::class, 'destroy'])->middleware('throttle:10,1')->name('appsupport.backup-db.destroy');

    Route::get('appsupport/data-login', [DataLoginController::class, 'index'])->name('appsupport.data-login');
    Route::delete('appsupport/data-login/clear-all', [DataLoginController::class, 'clearAll'])->middleware('throttle:3,1')->name('appsupport.data-login.clear-all');
    Route::delete('appsupport/data-login/{id}', [DataLoginController::class, 'destroy'])->name('appsupport.data-login.destroy');
    Route::delete('appsupport/activity-log/clear-all', [DataLoginController::class, 'clearAllActivities'])->middleware('throttle:3,1')->name('appsupport.activity-log.clear-all');
    Route::delete('appsupport/activity-log/{id}', [DataLoginController::class, 'destroyActivity'])->name('appsupport.activity-log.destroy');

    // Referensi Routes
    Route::get('appsupport/referensi', [ReferensiController::class, 'index'])->name('appsupport.referensi');
    Route::post('appsupport/referensi/kategori', [ReferensiController::class, 'storeKategori'])->name('appsupport.referensi.kategori.store');
    Route::put('appsupport/referensi/kategori/{id}', [ReferensiController::class, 'updateKategori'])->name('appsupport.referensi.kategori.update');
    Route::delete('appsupport/referensi/kategori/{id}', [ReferensiController::class, 'destroyKategori'])->name('appsupport.referensi.kategori.destroy');
    Route::post('appsupport/referensi/kategori/{id}/toggle-status', [ReferensiController::class, 'toggleKategoriStatus'])->name('appsupport.referensi.kategori.toggle-status');

    Route::post('appsupport/referensi/item', [ReferensiController::class, 'storeItem'])->name('appsupport.referensi.item.store');
    Route::put('appsupport/referensi/item/{id}', [ReferensiController::class, 'updateItem'])->name('appsupport.referensi.item.update');
    Route::delete('appsupport/referensi/item/{id}', [ReferensiController::class, 'destroyItem'])->name('appsupport.referensi.item.destroy');
    Route::post('appsupport/referensi/item/{id}/toggle-status', [ReferensiController::class, 'toggleItemStatus'])->name('appsupport.referensi.item.toggle-status');

    // Changelog Routes
    Route::get('appsupport/changelog', [ChangelogController::class, 'index'])->name('appsupport.changelog');
    Route::post('appsupport/changelog', [ChangelogController::class, 'store'])->name('appsupport.changelog.store');
    Route::put('appsupport/changelog/{id}', [ChangelogController::class, 'update'])->name('appsupport.changelog.update');
    Route::delete('appsupport/changelog/{id}', [ChangelogController::class, 'destroy'])->name('appsupport.changelog.destroy');

    // Console Developer Routes
    Route::get('appsupport/console-developer', [ConsoleDeveloperController::class, 'index'])->name('appsupport.console-developer');
    Route::post('appsupport/console-developer/git-action', [ConsoleDeveloperController::class, 'gitAction'])->name('appsupport.console-developer.git-action');
    Route::post('appsupport/console-developer/maintenance', [ConsoleDeveloperController::class, 'maintenance'])->name('appsupport.console-developer.maintenance');
    Route::post('appsupport/console-developer/generator', [ConsoleDeveloperController::class, 'generator'])->name('appsupport.console-developer.generator');
    Route::post('appsupport/console-developer/file-utility', [ConsoleDeveloperController::class, 'fileUtility'])->name('appsupport.console-developer.file-utility');
    // Lock Screen Route
    Route::post('/lock-screen/unlock', [\App\Http\Controllers\Auth\LockScreenController::class, 'unlock'])->middleware('throttle:5,1')->name('lock-screen.unlock');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/_menu-route-utils.php';
// Route template sidebar/menu dari config + views/pages.
require __DIR__ . '/menu-temp.php';
// Route tambahan sidebar/menu dari menu_seeder (database).
require __DIR__ . '/menu.php';
require __DIR__ . '/website.php';
