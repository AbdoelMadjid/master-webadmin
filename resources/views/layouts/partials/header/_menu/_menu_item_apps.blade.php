@props(['menu', 'level' => 1])

@php
    // cek rekursif aktif
    $isActiveRecursive = null;
    $isActiveRecursive = function ($item) use (&$isActiveRecursive) {
        if (!empty($item['children'])) {
            foreach ($item['children'] as $child) {
                if ($isActiveRecursive($child)) {
                    return true;
                }
            }
            return false;
        }
        return isset($item['route']) && request()->routeIs($item['route'] . '*');
    };

    $hasChildren = !empty($menu['children']);
    $isActiveParent = $isActiveRecursive($menu);
    $isActiveSelf = isset($menu['route']) && request()->routeIs($menu['route'] . '*');

    // level 1 selalu dropdown, level 2+ bisa dipilih dengan 'dropdown' => true
    $isDropdown = $level === 1 || ($menu['dropdown'] ?? false);

    $titleKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['title']));
@endphp

@if ($hasChildren)
    <div
        @if ($isDropdown) data-kt-menu-trigger="{default:'click', lg: 'hover'}"
            data-kt-menu-placement="right-start"
            class="menu-item menu-lg-down-accordion {{ $isActiveParent ? 'here show' : '' }}"
        @else
            data-kt-menu-trigger="click"
            class="menu-item menu-accordion {{ $isActiveParent ? 'here show' : '' }} {{ $level > 1 ? 'menu-sub-indention' : '' }}" @endif>
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
            <span class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
            <span class="menu-arrow"></span>
        </span>

        <div
            class="menu-sub
            {{ $isDropdown
                ? 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px'
                : 'menu-sub-accordion menu-active-bg' }}">
            @foreach ($menu['children'] as $child)
                @include('layouts.partials.header._menu._menu_item_apps', [
                    'menu' => $child,
                    'level' => $level + 1,
                ])
            @endforeach
        </div>
    </div>
@else
    <div class="menu-item">
        <a class="menu-link {{ $isActiveSelf ? 'active' : '' }}"
            href="{{ isset($menu['href']) ? $menu['href'] : (isset($menu['route']) ? route($menu['route']) : '#') }}"
            @if (isset($menu['href'])) target="_blank" @endif>
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
            <span class="menu-title">{{ __($titleKey) != $titleKey ? __($titleKey) : $menu['title'] }}</span>
            @if (isset($menu['badge']))
                @php $badgeKey = 'menu.' . strtolower(str_replace([' ', '&', '/'], ['_', 'and', '_'], $menu['badge']['label'] ?? '')); @endphp
                <span class="menu-badge">
                    <span class="{{ $menu['badge']['class'] ?? 'badge badge-info' }}">
                        {{ __($badgeKey) != $badgeKey ? __($badgeKey) : $menu['badge']['label'] ?? '' }}
                    </span>
                </span>
            @endif
        </a>
    </div>
@endif
