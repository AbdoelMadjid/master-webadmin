<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('getPageTitle')) {
    /**
     * Mendapatkan title berdasarkan route aktif dari file konfigurasi menu.
     *
     * @return string
     */
    function getPageTitle(): string
    {
        $normalizeRouteKey = static function (?string $value): string {
            $normalized = trim((string) $value);
            $normalized = str_replace(['\\', '/'], '.', $normalized);
            $normalized = preg_replace('/\.+/', '.', $normalized) ?? $normalized;

            return trim($normalized, '.');
        };

        $resolveItemTitle = static function (array $item): ?string {
            if (!empty($item['title_key'])) {
                $titleKey = 'menu.' . $item['title_key'];
                $translated = __($titleKey);
                if ($translated !== $titleKey) {
                    return $translated;
                }
            }

            $title = $item['title'] ?? null;
            if ($title) {
                $key = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $title));
                return __($key) !== $key ? __($key) : $title;
            }

            return null;
        };

        $normalizeTitle = static function (?string $raw): ?string {
            $value = trim((string) $raw);
            if ($value === '') {
                return null;
            }

            $value = urldecode($value);
            $value = str_replace(['-', '_'], ' ', $value);
            $value = preg_replace('/([a-zA-Z])([0-9])/', '$1 $2', $value);
            $value = trim((string) $value);

            if ($value === '') {
                return null;
            }

            $key = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $value));
            return __($key) !== $key ? __($key) : ucwords($value);
        };

        // Daftar file config dan kunci menu masing-masing
        $configs = [
            'sidebar._sidebar_dashboard' => ['menus_dashboard', 'menus_dashboard_collapsed'],
            'sidebar._sidebar_demo' => ['menu_demos'],
            'sidebar._sidebar_pages' => ['pages_menus'],
            'sidebar._sidebar_apps' => ['apps_menus'],
            'sidebar._sidebar_layouts' => ['layout_menus'],
            'sidebar._sidebar_datamaster' => ['datamaster_menus'],
            'sidebar._sidebar_helps' => ['help_menus'],
            'docs._getting' => ['menus_getting'],
            'docs._base' => ['menus_base'],
            'docs._forms' => ['menus_forms'],
            'docs._editor' => ['menus_editor'],
            'docs._charts' => ['menus_charts'],
            'docs._general' => ['menus_general'],
            'docs._icons' => ['menus_icons'],
        ];

        $currentRoute = Route::current()?->getName();
        $currentRouteKey = $normalizeRouteKey($currentRoute);

        foreach ($configs as $config => $menuKeys) {
            $configData = config($config, []);

            // Cek setiap kunci menu untuk config ini
            foreach ($menuKeys as $key) {
                $menus = isset($configData[$key]) && is_array($configData[$key]) ? $configData[$key] : [];

                if (!empty($menus)) {
                    foreach ($menus as $item) {
                        // Periksa route di level utama
                        if ($normalizeRouteKey($item['route'] ?? '') === $currentRouteKey) {
                            return $resolveItemTitle($item) ?? config('app.name', 'Metronic v.8.3.2 - Laravel 12');
                        }

                        // Periksa children jika ada.
                        $title = searchMenuTitle($item['children'] ?? [], $currentRouteKey);
                        if ($title) {
                            return $title;
                        }
                    }
                }
            }
        }

        // Cek judul dari menu tambahan (config/menu_seeder), termasuk children bertingkat.
        foreach (config('menu_seeder.categories', []) as $categoryConfig) {
            foreach ($categoryConfig['menus'] ?? [] as $item) {
                if ($normalizeRouteKey($item['route'] ?? '') === $currentRouteKey) {
                    return $resolveItemTitle($item) ?? config('app.name', 'Metronic v.8.3.2 - Laravel 12');
                }

                $title = searchMenuTitle($item['children'] ?? [], $currentRouteKey);
                if ($title) {
                    return $title;
                }

                $title = searchMenuTitle($item['children_collapsed'] ?? [], $currentRouteKey);
                if ($title) {
                    return $title;
                }
            }
        }

        // Fallback 1: derive dari route name, contoh "appsupport/menu" -> "Menu"
        $routeLeaf = null;
        if (!empty($currentRoute)) {
            $routeParts = preg_split('/[.\\/]+/', $currentRoute);
            $routeLeaf = end($routeParts) ?: null;
            if (in_array($routeLeaf, ['datatable', 'store', 'update', 'destroy', 'show'], true) && count($routeParts) > 1) {
                $routeLeaf = $routeParts[count($routeParts) - 2] ?? $routeLeaf;
            }
        }

        $titleFromRoute = $normalizeTitle($routeLeaf);
        if ($titleFromRoute) {
            return $titleFromRoute;
        }

        // Fallback 2: derive dari segmen URL terakhir
        $segments = request()->segments();
        $lastSegment = !empty($segments) ? end($segments) : null;
        $titleFromSegment = $normalizeTitle($lastSegment);
        if ($titleFromSegment) {
            return $titleFromSegment;
        }

        return config('app.name', 'Metronic v.8.3.2 - Laravel 12');
    }
}

if (!function_exists('searchMenuTitle')) {
    /**
     * Mencari title secara rekursif di dalam array menu berdasarkan route.
     *
     * @param array $items
     * @param string $currentRouteKey
     * @return string|null
     */
    function searchMenuTitle(array $items, string $currentRouteKey): ?string
    {
        $normalizeRouteKey = static function (?string $value): string {
            $normalized = trim((string) $value);
            $normalized = str_replace(['\\', '/'], '.', $normalized);
            $normalized = preg_replace('/\.+/', '.', $normalized) ?? $normalized;

            return trim($normalized, '.');
        };

        foreach ($items as $item) {
            if ($normalizeRouteKey($item['route'] ?? '') === $currentRouteKey) {
                if (!empty($item['title_key'])) {
                    $titleKey = 'menu.' . $item['title_key'];
                    $translated = __($titleKey);
                    if ($translated !== $titleKey) {
                        return $translated;
                    }
                }

                $title = $item['title'] ?? null;
                if (!empty($title)) {
                    $key = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $title));
                    return __($key) !== $key ? __($key) : $title;
                }

                return null;
            }

            $children = array_merge($item['children'] ?? [], $item['children_collapsed'] ?? []);
            if (!empty($children)) {
                $found = searchMenuTitle($children, $currentRouteKey);
                if ($found) {
                    return $found;
                }
            }
        }

        return null;
    }
}
