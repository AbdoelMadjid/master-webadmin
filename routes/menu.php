<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::middleware(['auth'])->group(function () {
    // Register read-only dynamic routes for additional menus from config/menu_seeder (via database).
    try {
        if (Schema::hasTable('menus')) {
            $customCategories = array_keys(config('menu_seeder.categories', []));
            if (empty($customCategories)) {
                return;
            }

            $menuUrls = Menu::query()
                ->active()
                ->select('url')
                ->whereIn('category', $customCategories)
                ->where('url', '!=', '')
                ->distinct()
                ->pluck('url');

            foreach ($menuUrls as $menuUrlRaw) {
                $menuUrl = menuNormalizeUrlPath((string) $menuUrlRaw);
                if ($menuUrl === '') {
                    continue;
                }

                $routeName = menuNormalizeRouteKey($menuUrl);
                $routeUri = $menuUrl;
                $viewName = 'pages.' . $routeName;

                menuRegisterUniqueRoute(
                    ['GET', 'HEAD'],
                    $routeUri,
                    $routeName,
                    "read {$menuUrl}",
                    function () use ($viewName, $menuUrl) {
                        if (view()->exists($viewName)) {
                            return view($viewName);
                        }

                        return response()->view('pages.dynamic-placeholder', [
                            'menuUrl' => $menuUrl,
                            'action' => 'index',
                        ]);
                    }
                );
            }
        }
    } catch (\Throwable) {
        // Ignore failures during early bootstrap when table is not ready.
    }
});
