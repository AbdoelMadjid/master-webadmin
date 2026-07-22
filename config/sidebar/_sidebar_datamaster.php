<?php

return [

    'datamaster_menus' => [
        [
            'icon'     => 'ki-duotone ki-profile-user fs-2',
            'paths'    => 4,
            'title'    => 'Profile User',
            'children' => [
                ['route' => 'user.ganti-password', 'title' => 'Ganti Password'],
                ['route' => 'user.profil-pengguna', 'title' => 'Profil Pengguna'],
            ],
        ],
        [
            'icon'     => 'ki-duotone ki-people fs-2',
            'paths'    => 5,
            'title'    => 'Users Management',
            'children' => [
                ['route' => 'auth.akses-role', 'title' => 'Akses Role'],
                ['route' => 'auth.akses-user', 'title' => 'Akses User'],
                ['route' => 'auth.permission', 'title' => 'Permission'],
                ['route' => 'auth.role', 'title' => 'Role'],
                ['route' => 'auth.user', 'title' => 'User'],
            ],
        ],
        [
            'icon'     => 'ki-duotone ki-element-plus fs-2',
            'paths'    => 5,
            'title'    => 'Support Application',
            'children' => [
                ['route' => 'support.menu', 'title' => 'Menu'],
                ['route' => 'support.profil-aplikasi', 'title' => 'Profil Aplikasi'],
                ['route' => 'support.fitur-aplikasi', 'title' => 'Fitur Aplikasi'],
            ],
        ],
    ],
];
