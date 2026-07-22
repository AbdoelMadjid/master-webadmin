@php
    $additionalSections = sidebarAdditionalMenuSections();
@endphp

@foreach ($additionalSections as $section)
    <div class="menu-item pt-5">
        <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">{{ $section['label'] }}</span>
        </div>
    </div>
    @foreach ($section['menus'] as $menu)
        @include('layouts.partials.sidebar._menu-item', ['menu' => $menu])
    @endforeach
@endforeach
