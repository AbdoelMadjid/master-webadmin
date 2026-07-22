@props(['menu', 'level' => 1])

@php
    $isRouteActive = function ($route) {
        if (empty($route)) {
            return false;
        }

        return request()->routeIs($route) || request()->routeIs($route . '.*');
    };

    // Rekursif cek aktif
    $isActiveRecursive = null;
    $isActiveRecursive = function ($item) use (&$isActiveRecursive, $isRouteActive) {
        $allChildren = array_merge($item['children'] ?? [], $item['children_collapsed'] ?? []);
        if (!empty($allChildren)) {
            foreach ($allChildren as $child) {
                if ($isActiveRecursive($child)) {
                    return true;
                }
            }
            return false;
        }
        return isset($item['route']) && $isRouteActive($item['route']);
    };

    $hasChildren = !empty($menu['children']);
    $collapsedChildren = $menu['children_collapsed'] ?? [];
    $collapsedCount = count($collapsedChildren);
    $isActiveParent = $isActiveRecursive($menu);
    $isActiveSelf = isset($menu['route']) && $isRouteActive($menu['route']);
    $isActiveCollapsedChild = collect($collapsedChildren)->contains(fn($child) => $isActiveRecursive($child));
    $collapseIdBase =
        (isset($menu['route'])
            ? str_replace('.', '_', $menu['route'])
            : strtolower(str_replace(' ', '_', $menu['title'] ?? 'menu'))) .
        '_l' .
        $level .
        '_collapse';
    $resolveMenuTitle = function ($item) {
        $titleKey = isset($item['title_key'])
            ? 'menu.' . $item['title_key']
            : 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $item['title'] ?? ''));
        return __($titleKey) != $titleKey ? __($titleKey) : $item['title'] ?? '';
    };
@endphp

@if ($hasChildren && !($menu['dropdown'] ?? false))
    {{-- Item dengan submenu --}}
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $isActiveParent ? 'here show' : '' }}">
        <span class="menu-link">
            @if ($level == 1)
                <span class="menu-icon">
                    <i class="{{ $menu['icon'] ?? '' }}">
                        @for ($i = 1; $i <= ($menu['paths'] ?? 0); $i++)
                            <span class="path{{ $i }}"></span>
                        @endfor
                    </i>
                </span>
            @else
                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            @endif
            <span class="menu-title">{{ $resolveMenuTitle($menu) }}</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion menu-active-bg">
            @foreach ($menu['children'] as $child)
                @include('layouts.partials.sidebar._menu-item-temp', [
                    'menu' => $child,
                    'level' => $level + 1,
                ])
            @endforeach

            @if ($collapsedCount > 0)
                @php
                    $visibleText = $isActiveCollapsedChild
                        ? __('menu.show_less')
                        : __('menu.show') . " {$collapsedCount} " . __('menu.more');
                    $altText = $isActiveCollapsedChild
                        ? __('menu.show') . " {$collapsedCount} " . __('menu.more')
                        : __('menu.show_less');
                @endphp

                <div class="menu-inner flex-column collapse {{ $isActiveCollapsedChild ? 'show' : '' }}"
                    id="{{ $collapseIdBase }}">
                    @foreach ($collapsedChildren as $child)
                        @include('layouts.partials.sidebar._menu-item-temp', [
                            'menu' => $child,
                            'level' => $level + 1,
                        ])
                    @endforeach
                </div>

                <div class="menu-item">
                    <div class="menu-content">
                        <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible {{ $isActiveCollapsedChild ? '' : 'collapsed' }}"
                            data-bs-toggle="collapse" href="#{{ $collapseIdBase }}"
                            data-kt-toggle-text="{{ $altText }}"
                            aria-expanded="{{ $isActiveCollapsedChild ? 'true' : 'false' }}">
                            <span data-kt-toggle-text-target="true">{{ $visibleText }}</span>
                            <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@elseif ($hasChildren && ($menu['dropdown'] ?? false))
    {{-- Dropdown --}}
    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention {{ $isActiveParent ? 'here show' : '' }}">

        <span class="menu-link">
            @if ($level == 1)
                <span class="menu-icon">
                    <i class="{{ $menu['icon'] ?? '' }}">
                        @for ($i = 1; $i <= ($menu['paths'] ?? 0); $i++)
                            <span class="path{{ $i }}"></span>
                        @endfor
                    </i>
                </span>
            @else
                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            @endif
            <span class="menu-title">{{ $resolveMenuTitle($menu) }}</span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
            @foreach ($menu['children'] as $child)
                @php
                    $childTitleKey =
                        'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $child['title']));
                @endphp
                <div class="menu-item">
                    <a class="menu-link {{ $isRouteActive($child['route'] ?? null) ? 'active' : '' }}"
                        href="{{ route($child['route']) }}"
                        {{ isset($menu['target']) ? 'target=' . $menu['target'] : '' }}>
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                        <span
                            class="menu-title">{{ __($childTitleKey) != $childTitleKey ? __($childTitleKey) : $child['title'] }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@else
    {{-- Item tanpa anak --}}
    <div class="menu-item">
        <a class="menu-link {{ $isActiveSelf ? 'active' : '' }}"
            href="{{ isset($menu['href']) ? $menu['href'] : (isset($menu['route']) ? route($menu['route']) : '#') }}"
            {{ isset($menu['target']) ? 'target=' . $menu['target'] : '' }}>
            @if ($level == 1)
                <span class="menu-icon">
                    <i class="{{ $menu['icon'] ?? '' }}">
                        @for ($i = 1; $i <= ($menu['paths'] ?? 0); $i++)
                            <span class="path{{ $i }}"></span>
                        @endfor
                    </i>
                </span>
            @else
                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
            @endif
            <span class="menu-title">{{ $resolveMenuTitle($menu) }}</span>


            @if (isset($menu['badge']))
                <span class="menu-badge">
                    <span class="{{ $menu['badge']['class'] ?? 'badge badge-info' }}">
                        {{ $menu['badge']['label'] ?? '' }}
                    </span>
                </span>
            @endif
        </a>
    </div>
@endif
