<?php

$parentMenuFiles = [
    __DIR__ . '/perangkatsekolah/wakasek_seeder.php',
    __DIR__ . '/perangkatsekolah/kaprodi_seeder.php',
    __DIR__ . '/perangkatsekolah/tatausaha_seeder.php',
    __DIR__ . '/perangkatsekolah/bpbk_seeder.php',
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
    'PERANGKAT SEKOLAH' => [
        'title_en' => 'SCHOOL EQUIPMENT',
        'title_key' => 'ps_perangkatsekolah',
        'default_permissions' => ['read'],
        'default_roles' => ['admin'],
        'menus' => $menus,
    ],
];
