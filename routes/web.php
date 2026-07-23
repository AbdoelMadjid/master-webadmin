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

use App\Http\Controllers\AppSupport\AppProfilController;
use App\Http\Controllers\AppSupport\BackupDbController;
use App\Http\Controllers\AppSupport\MenuController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
});

require __DIR__ . '/auth.php';
require __DIR__ . '/_menu-route-utils.php';
// Route template sidebar/menu dari config + views/pages.
require __DIR__ . '/menu-temp.php';
// Route tambahan sidebar/menu dari menu_seeder (database).
require __DIR__ . '/menu.php';
require __DIR__ . '/website.php';
