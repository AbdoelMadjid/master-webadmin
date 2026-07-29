<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

$websiteViews = collect(File::files(resource_path('views/website')))
    ->map(fn ($file) => Str::before($file->getFilename(), '.blade.php'))
    ->sort()
    ->values();

Route::prefix('website')->name('website.')->group(function () use ($websiteViews) {
    Route::get('lang/{locale}', function (Request $request, string $locale) {
        if (in_array($locale, ['en', 'id'], true)) {
            $request->session()->put('locale', $locale);
        }

        return redirect()->back();
    })->name('lang.switch');

    if ($websiteViews->contains('home-page')) {
        Route::view('/', 'website.home-page')->name('home');
    }

    foreach ($websiteViews as $view) {
        if ($view === 'home-page') {
            continue;
        }

        $routeName = $view === 'apply-for-all-intake' ? 'apply-all-intake' : $view;
        Route::view($view, "website.{$view}")->name($routeName);
    }
});

// Admin Web Navigation Management Routes
use App\Http\Controllers\PageConfig\MenuWebsite\MainNavigationController;
use App\Http\Controllers\PageConfig\MenuWebsite\TopNavigationController;
use App\Http\Controllers\PageConfig\MenuWebsite\FooterNavigationController;
use App\Http\Controllers\PageConfig\WebsiteProfileController;
use App\Http\Controllers\PageConfig\WebsiteFeatureController;

Route::middleware(['auth'])->group(function () {
    Route::prefix('pageconfig')->name('pageconfig.')->group(function () {
        // Website Profile
        Route::get('website-profile', [WebsiteProfileController::class, 'index'])->name('website-profile');
        Route::post('website-profile', [WebsiteProfileController::class, 'update'])->name('website-profile.update');
        Route::post('website-profile/toggle-social-status/{key}', [WebsiteProfileController::class, 'toggleSocialStatus'])->name('website-profile.toggle-social-status');

        // Website Features
        Route::get('website-features', [WebsiteFeatureController::class, 'index'])->name('website-features');
        Route::post('website-features/bulk-toggle', [WebsiteFeatureController::class, 'bulkToggle'])->name('website-features.bulk-toggle');
        Route::post('website-features/{id}/toggle-status', [WebsiteFeatureController::class, 'toggleStatus'])->name('website-features.toggle-status');

        Route::prefix('menuwebsite')->name('menuwebsite.')->group(function () {
            // Main Navigation
            Route::get('main-navigation', [MainNavigationController::class, 'index'])->name('main-navigation');
            Route::post('main-navigation', [MainNavigationController::class, 'store'])->name('main-navigation.store');
            Route::put('main-navigation/{id}', [MainNavigationController::class, 'update'])->name('main-navigation.update');
            Route::delete('main-navigation/{id}', [MainNavigationController::class, 'destroy'])->name('main-navigation.destroy');
            Route::post('main-navigation/{id}/toggle-status', [MainNavigationController::class, 'toggleStatus'])->name('main-navigation.toggle-status');
            Route::post('main-navigation/reorder', [MainNavigationController::class, 'reorder'])->name('main-navigation.reorder');

            // Top Navigation
            Route::get('top-navigation', [TopNavigationController::class, 'index'])->name('top-navigation');
            Route::post('top-navigation', [TopNavigationController::class, 'store'])->name('top-navigation.store');
            Route::put('top-navigation/{id}', [TopNavigationController::class, 'update'])->name('top-navigation.update');
            Route::delete('top-navigation/{id}', [TopNavigationController::class, 'destroy'])->name('top-navigation.destroy');
            Route::post('top-navigation/{id}/toggle-status', [TopNavigationController::class, 'toggleStatus'])->name('top-navigation.toggle-status');
            Route::post('top-navigation/reorder', [TopNavigationController::class, 'reorder'])->name('top-navigation.reorder');

            // Footer Navigation
            Route::get('footer-navigation', [FooterNavigationController::class, 'index'])->name('footer-navigation');
            Route::post('footer-navigation', [FooterNavigationController::class, 'store'])->name('footer-navigation.store');
            Route::put('footer-navigation/{id}', [FooterNavigationController::class, 'update'])->name('footer-navigation.update');
            Route::delete('footer-navigation/{id}', [FooterNavigationController::class, 'destroy'])->name('footer-navigation.destroy');
            Route::post('footer-navigation/{id}/toggle-status', [FooterNavigationController::class, 'toggleStatus'])->name('footer-navigation.toggle-status');
            Route::post('footer-navigation/reorder', [FooterNavigationController::class, 'reorder'])->name('footer-navigation.reorder');
        });
    });
});


