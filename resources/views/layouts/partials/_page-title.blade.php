<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    @php
        $formatTitle = static function (string $raw): string {
            $value = urldecode($raw);
            $value = str_replace(['-', '_'], ' ', $value);
            $value = preg_replace('/([a-zA-Z])([0-9])/', '$1 $2', $value);
            $value = trim((string) $value);

            if ($value === '') {
                return '';
            }

            $slug = strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $value));

            $aliasMap = [
                'manajemenpengguna' => 'user_management',
                'appsupport' => 'md_app_support',
            ];

            $candidateKeys = [$slug, $aliasMap[$slug] ?? null];

            foreach ($candidateKeys as $candidateKey) {
                if (empty($candidateKey)) {
                    continue;
                }

                $translated = __('menu.' . $candidateKey);
                if ($translated !== 'menu.' . $candidateKey) {
                    return $translated;
                }
            }

            return ucwords($value);
        };

        $resolveMenuTitle = static function (array $item) use ($formatTitle): string {
            $rawTitle = (string) ($item['title'] ?? '');
            $titleKey = isset($item['title_key']) ? 'menu.' . $item['title_key'] : null;
            if ($titleKey) {
                $translated = __($titleKey);
                if ($translated !== $titleKey) {
                    return $translated;
                }
            }

            return $rawTitle !== '' ? $formatTitle($rawTitle) : '';
        };

        $normalizeRouteKey = static function (?string $value): string {
            $normalized = trim((string) $value);
            $normalized = str_replace(['\\', '/'], '.', $normalized);
            $normalized = preg_replace('/\.+/', '.', $normalized) ?? $normalized;
            return trim($normalized, '.');
        };

        $titleByRouteKey = [];
        $collectTitles = null;
        $collectTitles = static function (array $items) use (&$collectTitles, &$titleByRouteKey, $resolveMenuTitle, $normalizeRouteKey): void {
            foreach ($items as $item) {
                if (!is_array($item)) {
                    continue;
                }

                $routeKey = $normalizeRouteKey($item['route'] ?? '');
                $title = $resolveMenuTitle($item);
                if ($routeKey !== '' && $title !== '') {
                    $titleByRouteKey[$routeKey] = $title;
                }

                $children = array_merge($item['children'] ?? [], $item['children_collapsed'] ?? []);
                if (!empty($children)) {
                    $collectTitles($children);
                }
            }
        };

        $templateConfigGroups = [
            ['config' => 'sidebar._sidebar_dashboard', 'keys' => ['menus_dashboard', 'menus_dashboard_collapsed']],
            ['config' => 'sidebar._sidebar_demo', 'keys' => ['menu_demos']],
            ['config' => 'sidebar._sidebar_pages', 'keys' => ['pages_menus']],
            ['config' => 'sidebar._sidebar_apps', 'keys' => ['apps_menus']],
            ['config' => 'sidebar._sidebar_layouts', 'keys' => ['layout_menus']],
            ['config' => 'sidebar._sidebar_helps', 'keys' => ['help_menus']],
        ];

        foreach ($templateConfigGroups as $group) {
            $data = config($group['config'], []);
            foreach ($group['keys'] as $key) {
                $collectTitles($data[$key] ?? []);
            }
        }

        foreach (config('menu_seeder.categories', []) as $categoryConfig) {
            $collectTitles($categoryConfig['menus'] ?? []);
        }

        $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
        $actionRouteParts = ['datatable', 'show', 'store', 'update', 'destroy', 'edit', 'create'];
        $breadcrumbItems = [];
        $routeParts = [];

        if (!empty($routeName)) {
            $routeParts = array_values(array_filter(preg_split('/[.\\/]+/', $routeName)));
            if (!empty($routeParts)) {
                $lastPart = end($routeParts);
                if (in_array($lastPart, $actionRouteParts, true)) {
                    array_pop($routeParts);
                }
            }
        }

        // Fallback bila route name tidak tersedia.
        if (empty($routeParts)) {
            $segments = request()->segments();
            $routeParts = array_values(array_filter($segments));
            if (!empty($routeParts)) {
                $lastPart = end($routeParts);
                if (in_array($lastPart, $actionRouteParts, true)) {
                    array_pop($routeParts);
                }
            }
            $routeParts = array_map($normalizeRouteKey, $routeParts);
        }

        if (count($routeParts) > 1) {
            $parentParts = array_slice($routeParts, 0, -1);
            for ($i = 0; $i < count($parentParts); $i++) {
                $currentKey = implode('.', array_slice($parentParts, 0, $i + 1));
                $currentLeaf = $parentParts[$i] ?? '';
                $breadcrumbItems[] = $titleByRouteKey[$currentKey] ?? $formatTitle($currentLeaf);
            }
        }
    @endphp
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
        @php
            $title = trim($__env->yieldContent('title'));
            if (!$title) {
                $title = getPageTitle();
            } else {
                $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $title));
                $title = __($titleKey) !== $titleKey ? __($titleKey) : $title;
            }
        @endphp
        {{ $title }}
    </h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="dashboard" class="text-muted text-hover-primary">
                {{ __('menu.home') }} </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        @foreach ($breadcrumbItems as $breadcrumbTitle)
            @if (!empty($breadcrumbTitle))
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ $breadcrumbTitle }}</li>
            @endif
        @endforeach
        <!--end::Item-->
        {{-- <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            Dashboards </li>
        <!--end::Item--> --}}
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title-->
