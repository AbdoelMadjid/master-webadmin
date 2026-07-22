<?php

return [
    'title' => 'Manajemen Pengguna',
    'title_en' => 'User Management',
    'title_key' => 'md_manajemen_pengguna',
    'route' => 'manajemenpengguna',
    'icon' => 'ki-duotone ki-lock-3 fs-2',
    'paths' => 3,
    'permissions' => ['read'],
    'roles' => ['admin'],
    'children' => [
        [
            'title' => 'Role',
            'title_en' => 'Role',
            'title_key' => 'md_role',
            'route' => 'manajemenpengguna/roles',
            'permissions' => ['create', 'read', 'update', 'delete'],
            'roles' => ['admin'],
        ],
        [
            'title' => 'Permission',
            'title_en' => 'Permission',
            'title_key' => 'md_permission',
            'route' => 'manajemenpengguna/permissions',
            'permissions' => ['create', 'read', 'update', 'delete'],
            'roles' => ['admin'],
        ],
        [
            'title' => 'Akses Role',
            'title_en' => 'Role Access',
            'title_key' => 'md_akses_role',
            'route' => 'manajemenpengguna/akses-role',
            'permissions' => ['read', 'update'],
            'roles' => ['admin'],
        ],
        [
            'title' => 'Akses User',
            'title_en' => 'User Access',
            'title_key' => 'md_akses_user',
            'route' => 'manajemenpengguna/akses-user',
            'permissions' => ['read', 'update'],
            'roles' => ['admin'],
        ],
        [
            'title' => 'User',
            'title_en' => 'Users',
            'title_key' => 'md_user',
            'route' => 'manajemenpengguna/users',
            'permissions' => ['create', 'read', 'update', 'delete'],
            'roles' => ['admin'],
        ],
    ],
];
