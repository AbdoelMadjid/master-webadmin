<?php

/**
 * TEMPLATE CATEGORY MENU SEEDER
 *
 * Cara pakai:
 * 1) Copy file ini, rename jadi misalnya: akademik_seeder.php
 * 2) Ganti key kategori dan isi menu sesuai domain
 * 3) Jalankan: php artisan db:seed --class=MenuSeeder
 *
 * Aturan penting field route:
 * - Nilai 'route' HARUS sama persis dengan kolom "Name" di `php artisan route:list`.
 * - Jika Name route berbentuk titik (contoh: pages.widgets.engage), pakai titik.
 * - Jika Name route berbentuk slash (contoh: app-support/data-login), pakai slash.
 * - Jangan mengonversi manual slash <-> titik.
 * - Untuk URL eksternal/non-route Laravel, gunakan 'href' (bukan 'route').
 */
return [
    'NAMA KATEGORI' => [
        // Label kategori EN (opsional). Jika kosong, fallback ke nama kategori.
        'title_en' => 'CATEGORY NAME',

        // Default permission & role untuk item yang tidak override.
        'default_permissions' => ['read'],
        'default_roles' => ['admin'],

        // Jika true: menu pada kategori ini yang tidak ada di blueprint akan dipruning saat seeder.
        'prune_missing' => true,

        'menus' => [
            [
                'title' => 'Menu Parent',
                'title_en' => 'Parent Menu',
                'title_key' => 'custom_nama_kategori_menu_parent',
                'route' => 'modulparent',
                'icon' => 'ki-duotone ki-element-11 fs-2',
                'paths' => 2,
                'permissions' => ['read'],
                'roles' => ['admin'],

                // Meta opsional:
                // 'dropdown' => true, // render sebagai flyout dropdown
                // 'target' => '_blank', // target link
                // 'badge' => ['label' => 'Beta', 'class' => 'badge badge-warning'],

                'children' => [
                    [
                        'title' => 'Menu Child Route',
                        'title_en' => 'Child Route Menu',
                        'title_key' => 'custom_nama_kategori_menu_child_route',
                        // Selalu ikuti Name di route:list (format bisa titik atau slash).
                        'route' => 'modulparent/child-route',
                        'permissions' => ['read', 'update'],
                        'roles' => ['admin'],
                    ],
                    [
                        'title' => 'Menu Child Parent (Level 2)',
                        'title_en' => 'Child Parent Menu (Level 2)',
                        'title_key' => 'custom_nama_kategori_menu_child_parent_l2',
                        'route' => 'modulparent/child-parent-l2',
                        'permissions' => ['read'],
                        'roles' => ['admin'],
                        'children' => [
                            [
                                'title' => 'Menu Subchild Route (Level 3)',
                                'title_en' => 'Subchild Route Menu (Level 3)',
                                'title_key' => 'custom_nama_kategori_menu_subchild_route_l3',
                                // Contoh style slash. Jika Name route titik, tulis dengan titik.
                                'route' => 'modulparent/child-parent-l2/subchild-route-l3',
                                'permissions' => ['read', 'update'],
                                'roles' => ['admin'],
                                'children' => [
                                    [
                                        'title' => 'Menu Great-Grandchild Route (Level 4)',
                                        'title_en' => 'Great-Grandchild Route Menu (Level 4)',
                                        'title_key' => 'custom_nama_kategori_menu_great_grandchild_route_l4',
                                        'route' => 'modulparent/child-parent-l2/subchild-route-l3/great-grandchild-route-l4',
                                        'permissions' => ['read', 'update'],
                                        'roles' => ['admin'],
                                    ],
                                    [
                                        'title' => 'Menu Great-Grandchild Link (Level 4)',
                                        'title_en' => 'Great-Grandchild Link Menu (Level 4)',
                                        'title_key' => 'custom_nama_kategori_menu_great_grandchild_link_l4',
                                        'href' => 'https://example.com/level-4-docs',
                                        'target' => '_blank',
                                        'permissions' => ['read'],
                                        'roles' => ['admin'],
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Menu Subchild Link (Level 3)',
                                'title_en' => 'Subchild Link Menu (Level 3)',
                                'title_key' => 'custom_nama_kategori_menu_subchild_link_l3',
                                'href' => 'https://example.com/subchild-docs',
                                'target' => '_blank',
                                'permissions' => ['read'],
                                'roles' => ['admin'],
                            ],
                        ],
                    ],
                    [
                        'title' => 'Menu Child Link',
                        'title_en' => 'Child Link Menu',
                        'title_key' => 'custom_nama_kategori_menu_child_link',
                        // Gunakan href untuk URL eksternal/non-route Laravel.
                        'href' => 'https://example.com/docs',
                        'target' => '_blank',
                        'permissions' => ['read'],
                        'roles' => ['admin'],
                    ],
                ],

                // Jika ingin child disembunyikan dulu (show more / show less), pakai children_collapsed.
                // 'children_collapsed' => [
                //     [
                //         'title' => 'Menu Collapsed',
                //         'route' => 'modulparent/collapsed',
                //     ],
                // ],
            ],

            // Contoh leaf menu langsung tanpa children.
            [
                'title' => 'Menu Leaf',
                'title_en' => 'Leaf Menu',
                'title_key' => 'custom_nama_kategori_menu_leaf',
                'route' => 'modulleaf',
                'icon' => 'ki-duotone ki-file fs-2',
                'paths' => 2,
                'badge' => ['label' => 'New', 'class' => 'badge badge-success'],
                'permissions' => ['read'],
                'roles' => ['admin'],
            ],
        ],
    ],
];
