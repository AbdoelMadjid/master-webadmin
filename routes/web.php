<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/homepage', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('homepage');

Route::get('/dashboard', function () {
    return redirect()->route('homepage');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\AppSupport\AppFiturController;
use App\Http\Controllers\AppSupport\AppProfilController;
use App\Http\Controllers\AppSupport\BackupDbController;
use App\Http\Controllers\AppSupport\DataLoginController;
use App\Http\Controllers\AppSupport\MenuController;
use App\Http\Controllers\User\ProfilPenggunaController;

Route::middleware('auth')->group(function () {
    Route::post('/profil-pengguna/avatar', [ProfilPenggunaController::class, 'updateAvatar'])->name('profil-pengguna.avatar.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
