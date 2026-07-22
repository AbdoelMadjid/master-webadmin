<?php

$parentMenuFiles = [
    __DIR__ . '/identitaspengguna_seeder.php',
    __DIR__ . '/masterdata/masterdata-manajemenpengguna_seeder.php',
    __DIR__ . '/masterdata/masterdata-appsupport_seeder.php',
    // __DIR__ . '/masterdata/masterdata-manajemensekolah_seeder.php',
    // __DIR__ . '/masterdata/masterdata-kurikulum_seeder.php',
    // __DIR__ . '/masterdata/masterdata-aplikasi-web_seeder.php',
];

$menus = [];
foreach ($parentMenuFiles as $parentMenuFile) {
    if (!is_file($parentMenuFile)) {
        continue;
    }

    $menu = require $parentMenuFile;
    if (is_array($menu) && !empty($menu)) {
        $menus[] = $menu;
    }
}

return [
    'MASTER DATA' => [
        'title_en' => 'MASTER DATA',
        'title_key' => 'md_masterdata',
        'default_permissions' => ['read'],
        'default_roles' => ['admin'],
        'menus' => $menus,
    ],
];
