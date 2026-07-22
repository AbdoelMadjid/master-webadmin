<?php

return [
    'header_dashboard_other' => [
        ['route' => 'dashboards.logistics', 'title' => 'Logistics'],
        ['route' => 'dashboards.website-analytics', 'title' => 'Website Analytics'],
        ['route' => 'dashboards.finance-performance', 'title' => 'Finance Performance'],
        ['route' => 'dashboards.store-analytics', 'title' => 'Store Analytics'],
        ['route' => 'dashboards.social', 'title' => 'Social'],
        ['route' => 'dashboards.delivery', 'title' => 'Delivery'],
        ['route' => 'dashboards.crypto', 'title' => 'Crypto'],
        ['route' => 'dashboards.school', 'title' => 'School'],
        ['route' => 'dashboards.podcast', 'title' => 'Podcast'],
        //['route' => 'dashboards.landing', 'title' => 'Landing'],
    ],

    'header_dashboard_card' => [
        [
            'route'       => 'homepage',
            'icon'        => 'ki-duotone ki-element-11 text-primary fs-1',
            'paths'       => 4,
            'title'       => 'Default',
            'description' => 'Reports & statistics',
        ],
        [
            'route'       => 'dashboards.ecommerce',
            'icon'        => 'ki-duotone ki-basket text-danger fs-1',
            'paths'       => 4,
            'title'       => 'eCommerce',
            'description' => 'Sales reports',
        ],
        [
            'route'       => 'dashboards.projects',
            'icon'        => 'ki-duotone ki-abstract-44 text-info fs-1',
            'paths'       => 2,
            'title'       => 'Projects',
            'description' => 'Tasks, graphs & charts',
        ],
        [
            'route'       => 'dashboards.online-courses',
            'icon'        => 'ki-duotone ki-color-swatch text-success fs-1',
            'paths'       => 21,
            'title'       => 'Online Courses',
            'description' => 'Student progress',
        ],
        [
            'route'       => 'dashboards.marketing',
            'icon'        => 'ki-duotone ki-chart-simple text-gray-900 fs-1',
            'paths'       => 4,
            'title'       => 'Marketing',
            'description' => 'Campaings & conversions',
        ],
        [
            'route'       => 'dashboards.bidding',
            'icon'        => 'ki-duotone ki-switch text-warning fs-1',
            'paths'       => 2,
            'title'       => 'Bidding',
            'description' => 'Campaings & conversions',
        ],
        [
            'route'       => 'dashboards.pos',
            'icon'        => 'ki-duotone ki-abstract-42 text-danger fs-1',
            'paths'       => 2,
            'title'       => 'POS System',
            'description' => 'Campaings & conversions',
        ],
        [
            'route'       => 'dashboards.call-center',
            'icon'        => 'ki-duotone ki-call text-primary fs-1',
            'paths'       => 8,
            'title'       => 'Call Center',
            'description' => 'Campaings & conversions',
        ],
    ],

];
