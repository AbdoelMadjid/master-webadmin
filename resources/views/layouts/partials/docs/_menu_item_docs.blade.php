@once
    @php
        function isActiveMenu($menu): bool
        {
            if (isset($menu['children']) && is_array($menu['children'])) {
                foreach ($menu['children'] as $child) {
                    if (isActiveMenu($child)) {
                        return true;
                    }
                }
            }
            return isset($menu['route']) && request()->routeIs($menu['route']);
        }
    @endphp
@endonce

@if (isset($menu['children']) && is_array($menu['children']))
    <div data-kt-menu-trigger="click" class="menu-item {{ isActiveMenu($menu) ? 'here show' : '' }} menu-accordion">
        <span class="menu-link py-2">
            <span class="menu-title">{{ $menu['title'] }}
                @if (!empty($menu['badge']))
                    <span class="badge {{ $menu['badge']['class'] ?? '' }} fw-semibold fs-8 px-2 py-1 ms-1"
                        @if (!empty($menu['badge']['tooltip'])) data-bs-toggle="tooltip" title="{{ $menu['badge']['tooltip'] }}" @endif>
                        {{ $menu['badge']['text'] ?? '' }}
                    </span>
                @endif
            </span>
            <span class="menu-arrow"></span>
        </span>

        <div class="menu-sub menu-sub-accordion">
            @foreach ($menu['children'] as $child)
                @include('layouts.partials.docs._menu_item_docs', ['menu' => $child, 'isChild' => true])
            @endforeach
        </div>
    </div>
@else
    <div class="menu-item">
        <a href="{{ $menu['href'] ?? route($menu['route']) }}"
            class="menu-link {{ isset($menu['route']) && request()->routeIs($menu['route']) ? 'active' : '' }} py-2"
            @if (!empty($menu['target'])) target="{{ $menu['target'] }}" @endif>

            {{-- bullet hanya muncul jika ini submenu --}}
            @if (!empty($isChild))
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
            @endif

            <span class="menu-title">
                {{ $menu['title'] }}
                @if (!empty($menu['badge']))
                    <span class="badge {{ $menu['badge']['class'] ?? '' }} fw-semibold fs-8 px-2 py-1 ms-1"
                        @if (!empty($menu['badge']['tooltip'])) data-bs-toggle="tooltip" title="{{ $menu['badge']['tooltip'] }}" @endif>
                        {{ $menu['badge']['text'] ?? '' }}
                    </span>
                @endif
            </span>
        </a>
    </div>
@endif
