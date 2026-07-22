<?php

return [

    'layout_menus' => [
        [
            'icon'     => 'ki-duotone ki-element-7 fs-2',
            'paths'    => 2,
            'title'    => 'Layout Options',
            'children' => [
                ['route' => 'layouts.options.light-sidebar', 'title' => 'Light Sidebar'],
                ['route' => 'layouts.options.dark-sidebar', 'title' => 'Dark Sidebar'],
                ['route' => 'layouts.options.light-header', 'title' => 'Light Header'],
                ['route' => 'layouts.options.dark-header', 'title' => 'Dark Header'],
            ],
        ],
        [
            'icon'     => 'ki-duotone ki-abstract-14 fs-2',
            'paths'    => 4,
            'title'    => 'Toolbars',
            'children' => [
                ['route' => 'layouts.toolbars.classic', 'title' => 'Classic'],
                ['route' => 'layouts.toolbars.saas', 'title' => 'SaaS'],
                ['route' => 'layouts.toolbars.accounting', 'title' => 'Accounting'],
                ['route' => 'layouts.toolbars.extended', 'title' => 'Extended'],
                ['route' => 'layouts.toolbars.reports', 'title' => 'Reports'],
            ],
        ],
        [
            'icon'     => 'ki-duotone ki-abstract-44 fs-2',
            'paths'    => 4,
            'title'    => 'Asides',
            'children' => [
                ['route' => 'layouts.asides.aside-1', 'title' => 'Filters'],
                ['route' => 'layouts.asides.aside-2', 'title' => 'Segments'],
                ['route' => 'layouts.asides.aside-3', 'title' => 'Shipment History'],
                ['route' => 'layouts.asides.aside-4', 'title' => 'Courier Activity'],
                ['route' => 'layouts.asides.aside-5', 'title' => 'Calendar'],
            ],
        ],
    ],
];
