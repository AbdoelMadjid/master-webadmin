<?php

return [
    'default_version' => env('THEME_DEFAULT_VERSION', 'v1'),

    // daftar versi yang dikenali resolver (tanpa switch runtime via menu)
    'versions' => ['v1'],

    // mapping versi -> base folder assets
    'asset_bases' => [
        'v1' => 'assets',
    ],

    // auto => ikut versi aktif resolver (default_version)
    'asset_pack' => env('THEME_ASSET_PACK', 'auto'),

    // auto => ikut versi aktif resolver (default_version)
    'menu_style' => env('THEME_MENU_STYLE', 'auto'),
];
