<?php

return [

    'menus_general' => [
        [
            'route'    => 'docs.general.datatables',
            'title'    => 'DataTables',
            'children' => [
                ['route' => 'docs.general.datatables.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.datatables.basic', 'title' => 'basic'],
                ['route' => 'docs.general.datatables.advanced', 'title' => 'Advanced'],
                ['route' => 'docs.general.datatables.button-export', 'title' => 'Button Export'],
                ['route' => 'docs.general.datatables.server-side', 'title' => 'Ajax Server Side'],
                ['route' => 'docs.general.datatables.subtable', 'title' => 'Subtable'],
                ['route' => 'docs.general.datatables.api', 'title' => 'API'],
            ],
        ],
        [
            'route'    => 'docs.general.menu',
            'title'    => 'Menu',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component'],
            'children' => [
                ['route' => 'docs.general.menu.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.menu.customization', 'title' => 'Customization'],
                ['route' => 'docs.general.menu.advanced', 'title' => 'Advanced'],
                ['route' => 'docs.general.menu.integration', 'title' => 'Integration'],
                ['route' => 'docs.general.menu.api', 'title' => 'Options & API'],
            ],
        ],
        [
            'route' => 'docs.general.blockui',
            'title' => 'BlockUI',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.general.cookie',
            'title' => 'Cookie',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.general.cookiealert', 'title' => 'Cookie Alert'],
        ['route' => 'docs.general.countup', 'title' => 'CountUp'],
        ['route' => 'docs.general.cropper', 'title' => 'Cropper'],
        [
            'route'    => 'docs.general.draggable',
            'title'    => 'Draggable',
            'children' => [
                ['route' => 'docs.general.draggable.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.draggable.draggable', 'title' => 'Draggable'],
                ['route' => 'docs.general.draggable.multiple-containers', 'title' => 'Multiple Containers'],
                ['route' => 'docs.general.draggable.swappable', 'title' => 'Swappable'],
                ['route' => 'docs.general.draggable.restricted', 'title' => 'Restricted'],
            ],
        ],
        [
            'route' => 'docs.general.drawer',
            'title' => 'Drawer',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route'    => 'docs.general.fullcalendar',
            'title'    => 'Fullcalendar',
            'children' => [
                ['route' => 'docs.general.fullcalendar.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.fullcalendar.basic', 'title' => 'Basic'],
                ['route' => 'docs.general.fullcalendar.drag-n-drop', 'title' => 'Drag-n-Drop'],
                ['route' => 'docs.general.fullcalendar.selectable', 'title' => 'Selectable Dates'],
                ['route' => 'docs.general.fullcalendar.background-events', 'title' => 'Background Events'],
                ['route' => 'docs.general.fullcalendar.locales', 'title' => 'Localization'],
                ['route' => 'docs.general.fullcalendar.timezone', 'title' => 'Timezone'],
            ],
        ],
        ['route' => 'docs.general.fslightbox', 'title' => 'Fullscreen Lightbox'],
        [
            'route'    => 'docs.general.jkanban',
            'title'    => 'jKanban Board',
            'children' => [
                ['route' => 'docs.general.jkanban.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.jkanban.basic', 'title' => 'Basic'],
                ['route' => 'docs.general.jkanban.color', 'title' => 'Colored'],
                ['route' => 'docs.general.jkanban.restricted', 'title' => 'Restricted'],
                ['route' => 'docs.general.jkanban.rich', 'title' => 'Rich Content'],
                ['route' => 'docs.general.jkanban.fixed-height', 'title' => 'Fixed Height'],
            ],
        ],
        [
            'route'    => 'docs.general.jstree',
            'title'    => 'jsTree',
            'children' => [
                ['route' => 'docs.general.jstree.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.jstree.basic', 'title' => 'Basic Tree'],
                ['route' => 'docs.general.jstree.contextual', 'title' => 'Contextual Menu'],
                ['route' => 'docs.general.jstree.customicons', 'title' => 'Custom Icons'],
                ['route' => 'docs.general.jstree.dragdrop', 'title' => 'Drag & Drop'],
                ['route' => 'docs.general.jstree.checkable', 'title' => 'Checkable Tree'],
                ['route' => 'docs.general.jstree.ajax', 'title' => 'Ajax Data'],
            ],
        ],
        [
            'route' => 'docs.general.scroll',
            'title' => 'Scroll',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.general.scrolltop',
            'title' => 'Scrolltop',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        [
            'route' => 'docs.general.search',
            'title' => 'Quick Search',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.general.smooth-scroll', 'title' => 'Smooth Scroll'],
        [
            'route' => 'docs.general.stepper',
            'title' => 'Stepper',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.general.sticky', 'title' => 'Sticky', 'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']],
        [
            'route' => 'docs.general.swapper',
            'title' => 'Swapper',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.general.sweetalert', 'title' => 'SweetAlert'],
        ['route' => 'docs.general.lozad', 'title' => 'Lozad'],
        [
            'route'    => 'docs.general.tiny-slider',
            'title'    => 'Tiny Slider',
            'children' => [
                ['route' => 'docs.general.tiny-slider.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.tiny-slider.basic', 'title' => 'Basic'],
                ['route' => 'docs.general.tiny-slider.advanced', 'title' => 'Advanced'],
                ['route' => 'docs.general.tiny-slider.thumbnails', 'title' => 'Thumbnails'],
            ],
        ],
        ['route' => 'docs.general.toastr', 'title' => 'Toastr'],
        [
            'route' => 'docs.general.toggle',
            'title' => 'Toggle',
            'badge' => ['text'  => 'Exclusive', 'class' => 'badge-exclusive badge-light-success', 'tooltip' => 'In-house component']
        ],
        ['route' => 'docs.general.typedjs', 'title' => 'Typed.js'],
        [
            'route'    => 'docs.general.vis-timeline',
            'title'    => 'Vis-Timeline',
            'children' => [
                ['route' => 'docs.general.vis-timeline.overview', 'title' => 'Overview'],
                ['route' => 'docs.general.vis-timeline.basic', 'title' => 'Basic'],
                ['route' => 'docs.general.vis-timeline.style', 'title' => 'Custom Styling'],
                ['route' => 'docs.general.vis-timeline.group', 'title' => 'Groups'],
                ['route' => 'docs.general.vis-timeline.interaction', 'title' => 'Interactions'],
                ['route' => 'docs.general.vis-timeline.templates', 'title' => 'Templates'],
            ],
        ],
    ],
];
