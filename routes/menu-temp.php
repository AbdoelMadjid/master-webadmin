<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

$pagesPath = resource_path('views/pages');
$files = File::allFiles($pagesPath);
$isPartialViewPath = function (string $relativePath): bool {
    $normalized = str_replace('\\', '/', $relativePath);
    return str_contains($normalized, '/partials/');
};

Route::middleware(['auth'])->group(function () use ($files, $isPartialViewPath) {
    foreach ($files as $file) {
        $relativePath = $file->getRelativePathname();

        if ($isPartialViewPath($relativePath)) {
            continue;
        }

        $relativePath = str_replace('.blade.php', '', $relativePath);
        if (str_starts_with(basename($relativePath), '_')) {
            continue;
        }

        $routeName = str_replace(['/', '\\'], '.', $relativePath);
        $routeUrl = menuRouteUriFromKey($routeName);

        menuRegisterUniqueRoute(
            ['GET', 'HEAD'],
            $routeUrl,
            $routeName,
            null,
            function () use ($routeName) {
                return view('pages.' . $routeName);
            }
        );
    }
});

// Fallback di luar auth middleware supaya tetap 404 untuk guest.
Route::fallback(function () {
    return response()->view('pages.pages.authentication.general.error-404', [], 404);
})->name('fallback.404');
