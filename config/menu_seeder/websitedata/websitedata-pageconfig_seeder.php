<?php

return [
    'title' => 'Konfigurasi Halaman',
    'title_en' => 'Page Config',
    'title_key' => 'wd_page_config',
    'route' => 'page-config',
    'icon' => 'ki-duotone ki-setting fs-2',
    'paths' => 2,
    'permissions' => ['read'],
    'roles' => ['admin'],
    'children' => [
        [
            'title' => 'Menu',
            'title_en' => 'Menu',
            'title_key' => 'wd_menu',
            'route' => 'pageconfig/menu',
            'permissions' => ['create', 'read', 'update', 'delete', 'sort'],
            'roles' => ['admin'],
        ],
        [
            'title' => 'Profil Website',
            'title_en' => 'Website Profile',
            'title_key' => 'wd_website_profile',
            'route' => 'pageconfig/website-profile',
            'permissions' => ['create', 'read', 'update'],
            'roles' => ['admin'],
        ],
    ],
];
