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

