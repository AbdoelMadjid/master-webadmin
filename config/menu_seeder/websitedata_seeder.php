<?php

$parentMenuFiles = [
    __DIR__.'/websitedata/websitedata-pageconfig_seeder.php',
    __DIR__.'/websitedata/websitedata-pagecontent_seeder.php',
];

$menus = [];
foreach ($parentMenuFiles as $parentMenuFile) {
    if (! is_file($parentMenuFile)) {
        continue;
    }

    $menu = require $parentMenuFile;
    if (is_array($menu) && ! empty($menu)) {
        $menus[] = $menu;
    }
}

return [
    'WEBSITE DATA' => [
        'title_en' => 'WEBSITE DATA',
        'title_key' => 'wd_websitedata',
        'default_permissions' => ['read'],
        'default_roles' => ['admin'],
        'menus' => $menus,
    ],
];
