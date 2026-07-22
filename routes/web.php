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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/_menu-route-utils.php';
// Route template sidebar/menu dari config + views/pages.
require __DIR__ . '/menu-temp.php';
// Route tambahan sidebar/menu dari menu_seeder (database).
require __DIR__ . '/menu.php';
require __DIR__ . '/website.php';
