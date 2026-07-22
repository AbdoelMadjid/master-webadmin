<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

$educationViews = collect(File::files(resource_path('views/education')))
    ->map(fn ($file) => Str::before($file->getFilename(), '.blade.php'))
    ->sort()
    ->values();

Route::prefix('education')->name('education.')->group(function () use ($educationViews) {
    Route::get('lang/{locale}', function (Request $request, string $locale) {
        if (in_array($locale, ['en', 'id'], true)) {
            $request->session()->put('locale', $locale);
        }

        return redirect()->back();
    })->name('lang.switch');

    if ($educationViews->contains('home-page')) {
        Route::view('/', 'education.home-page')->name('home');
    }

    foreach ($educationViews as $view) {
        if ($view === 'home-page') {
            continue;
        }

        $routeName = $view === 'apply-for-all-intake' ? 'apply-all-intake' : $view;
        Route::view($view, "education.{$view}")->name($routeName);
    }
});
