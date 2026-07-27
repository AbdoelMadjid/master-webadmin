<?php

return [
    'title' => 'Konfigurasi Halaman',
    'title_en' => 'Page Config',
    'title_key' => 'wd_page_config',
    'route' => 'pageconfig',
    'icon' => 'ki-duotone ki-setting fs-2',
    'paths' => 2,
    'permissions' => ['read'],
    'roles' => ['admin'],
    'children' => [
        [
            'title' => 'Menu Website',
            'title_en' => 'Website Menu',
            'title_key' => 'wd_website_menu',
            'route' => 'pageconfig/menuwebsite',
            'permissions' => ['read'],
            'roles' => ['admin'],
            'children' => [
                [
                    'title' => 'Navigasi Utama',
                    'title_en' => 'Main Navigation',
                    'title_key' => 'wd_main_navigation',
                    'route' => 'pageconfig/menuwebsite/main-navigation',
                    'permissions' => ['create', 'read', 'update', 'delete'],
                    'roles' => ['admin'],
                ],
                [
                    'title' => 'Navigasi Atas',
                    'title_en' => 'Top Navigation',
                    'title_key' => 'wd_top_navigation',
                    'route' => 'pageconfig/menuwebsite/top-navigation',
                    'permissions' => ['create', 'read', 'update', 'delete'],
                    'roles' => ['admin'],
                ],
                [
                    'title' => 'Navigasi Footer',
                    'title_en' => 'Footer Navigation',
                    'title_key' => 'wd_footer_navigation',
                    'route' => 'pageconfig/menuwebsite/footer-navigation',
                    'permissions' => ['create', 'read', 'update', 'delete'],
                    'roles' => ['admin'],
                ],

            ],
        ],
        [
            'title' => 'Profil Website',
            'title_en' => 'Website Profile',
            'title_key' => 'wd_website_profile',
            'route' => 'pageconfig/website-profile',
            'permissions' => ['create', 'read', 'update'],
            'roles' => ['admin'],
        ],
        [
            'title' => 'Fitur Website',
            'title_en' => 'Website Features',
            'title_key' => 'wd_website_features',
            'route' => 'pageconfig/website-features',
            'permissions' => ['create', 'read', 'update', 'delete'],
            'roles' => ['admin'],
        ],
    ],
];
