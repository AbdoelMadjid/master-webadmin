<?php

return [
    'title' => 'Konten Halaman',
    'title_en' => 'Page Content',
    'title_key' => 'wd_page_content',
    'route' => 'pagecontent',
    'icon' => 'ki-duotone ki-element-8 fs-2',
    'paths' => 2,
    'permissions' => ['read'],
    'roles' => ['admin'],
    'children' => [
        [
            'title' => 'Slide Banner Beranda',
            'title_en' => 'Homepage Slide Banner',
            'title_key' => 'wd_slide_banner',
            'route' => 'pagecontent/slide-banner',
            'permissions' => ['create', 'read', 'update', 'delete'],
            'roles' => ['admin'],
        ],
        [
            'title' => 'Ajakan Bertindak (CTA)',
            'title_en' => 'Call to Action (CTA)',
            'title_key' => 'wd_call_to_action',
            'route' => 'pagecontent/call-to-action',
            'permissions' => ['create', 'read', 'update', 'delete'],
            'roles' => ['admin'],
        ],
    ],
];
