<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('menuNormalizeRouteKey')) {
    function menuNormalizeRouteKey(string $value): string
    {
        $normalized = trim($value);
        $normalized = str_replace(['\\', '/'], '.', $normalized);
        $normalized = preg_replace('/\.+/', '.', $normalized) ?? $normalized;

        return trim($normalized, '.');
    }
}

if (!function_exists('menuNormalizeUrlPath')) {
    function menuNormalizeUrlPath(string $value): string
    {
        $normalized = trim($value);
        $normalized = str_replace(['\\', '.'], '/', $normalized);
        $normalized = preg_replace('#/+#', '/', $normalized) ?? $normalized;

        return trim($normalized, '/');
    }
}

if (!function_exists('menuRouteUriFromKey')) {
    function menuRouteUriFromKey(string $routeKey): string
    {
        return str_replace('.', '/', menuNormalizeRouteKey($routeKey));
    }
}

if (!function_exists('menuRegisterUniqueRoute')) {
    function menuRegisterUniqueRoute(array $methods, string $uri, string $name, ?string $permission, callable $handler): bool
    {
        static $initialized = false;
        static $existingNamed = [];
        static $existingMethodUri = [];

        $normalizeUri = static fn(string $rawUri): string => preg_replace('/\{[^}]+\}/', '{}', $rawUri) ?? $rawUri;

        if (!$initialized) {
            $existingNamed = array_fill_keys(array_keys(Route::getRoutes()->getRoutesByName()), true);
            foreach (Route::getRoutes()->getRoutes() as $existingRoute) {
                foreach ($existingRoute->methods() as $method) {
                    $existingMethodUri["{$method} " . $normalizeUri($existingRoute->uri())] = true;
                }
            }
            $initialized = true;
        }

        if (isset($existingNamed[$name])) {
            return false;
        }

        $uri = ltrim($uri, '/');
        foreach ($methods as $method) {
            $key = strtoupper($method) . " " . $normalizeUri($uri);
            if (isset($existingMethodUri[$key])) {
                return false;
            }
        }

        $route = Route::match($methods, $uri, $handler)->name($name);
        if (!empty($permission)) {
            $route->middleware("can:{$permission}");
        }

        $existingNamed[$name] = true;
        foreach ($methods as $method) {
            $existingMethodUri[strtoupper($method) . " " . $normalizeUri($uri)] = true;
        }

        return true;
    }
}
