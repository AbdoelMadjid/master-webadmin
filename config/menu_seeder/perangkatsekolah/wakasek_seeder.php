<?php

return [
    'title' => 'Wakil Kepala Sekolah',
    'title_en' => 'Vice Principal',
    'title_key' => 'ps_wakasek',
    'route' => 'wakasek',
    'icon' => 'ki-duotone ki-abstract-28 fs-2',
    'paths' => 2,
    'permissions' => ['read'],
    'roles' => ['wakasek'],
    'children' => [
        [
            'title' => 'Agenda',
            'title_en' => 'Agenda',
            'title_key' => 'ps_wakasek_agenda',
            'route' => 'wakasek/agenda-kegiatan-wakasek',
            'permissions' => ['create', 'read', 'update', 'delete', 'sort'],
            'roles' => ['wakasek'],
        ],
        [
            'title' => 'Anggaran',
            'title_en' => 'Budget',
            'title_key' => 'ps_wakasek_anggaran',
            'route' => 'wakasek/anggaran-wakasek',
            'permissions' => ['create', 'read', 'update'],
            'roles' => ['wakasek'],
        ],
        [
            'title' => 'Laporan',
            'title_en' => 'Report',
            'title_key' => 'ps_wakasek_laporan',
            'route' => 'wakasek/laporan-wakasek',
            'permissions' => ['create', 'read', 'update'],
            'roles' => ['wakasek'],
        ],
    ],
];
