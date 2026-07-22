@php
    $buttonClass = $buttonClass ?? 'btn btn-sm btn-icon btn-color-primary btn-active-light-primary';
    $menuTrigger = $menuTrigger ?? 'click';
    $menuPlacement = $menuPlacement ?? 'bottom-end';
@endphp

<button type="button" class="{{ $buttonClass }}" data-kt-menu-trigger="{{ $menuTrigger }}"
    data-kt-menu-placement="{{ $menuPlacement }}">
    <i class="ki-duotone ki-category fs-6">
        <span class="path1"></span>
        <span class="path2"></span>
        <span class="path3"></span>
        <span class="path4"></span>
    </i>
</button>
