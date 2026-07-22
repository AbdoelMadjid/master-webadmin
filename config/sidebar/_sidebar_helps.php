<?php

return [

    'help_menus' => [
        [
            'title' => 'Skema Pemrograman',
            'icon'  => 'ki-duotone ki-book-open fs-2',
            'paths' => 2,
            'children' => [
                [
                    'title' => 'Overview',
                    'route' => 'help.pemrograman.overview',
                    'badge' => ['label' => 'New', 'class' => 'badge badge-danger'],
                ],
                [
                    'title' => 'Skema',
                    'children' => [
                        [
                            'title' => 'Skema Route',
                            'route' => 'help.pemrograman.skema.route',
                        ],
                        [
                            'title' => 'Skema Layout',
                            'route' => 'help.pemrograman.skema.layout',
                        ],
                        [
                            'title' => 'Skema Komponen Blade & Partial',
                            'route' => 'help.pemrograman.skema.komponen-blade-partial',
                        ],
                        [
                            'title' => 'Skema Theme Assets',
                            'route' => 'help.pemrograman.skema.theme-assets',
                        ],
                        [
                            'title' => 'Skema Auth dan Middleware',
                            'route' => 'help.pemrograman.skema.auth-dan-middleware',
                        ],
                        [
                            'title' => 'Skema Struktur Config Menu',
                            'route' => 'help.pemrograman.skema.struktur-config-menu',
                        ],
                        [
                            'title' => 'Skema Sidebar Menu',
                            'route' => 'help.pemrograman.skema.sidebar-menu',
                        ],
                        [
                            'title' => 'Skema Header Menu',
                            'route' => 'help.pemrograman.skema.header-menu',
                        ],
                        [
                            'title' => 'Skema Data Layer',
                            'route' => 'help.pemrograman.skema.data-layer',
                        ],
                        [
                            'title' => 'Skema Error Handling & Fallback',
                            'route' => 'help.pemrograman.skema.error-handling-dan-fallback',
                        ],
                        [
                            'title' => 'Skema Cache & Deployment',
                            'route' => 'help.pemrograman.skema.cache-dan-deployment',
                        ],
                        [
                            'title' => 'Skema Pemilihan Bahasa',
                            'route' => 'help.pemrograman.skema.pemilihan-bahasa',
                        ],
                        [
                            'title' => 'Skema i18n Lanjutan',
                            'route' => 'help.pemrograman.skema.i18n-lanjutan',
                        ],
                    ],
                ],
                [
                    'title' => 'Operasional',
                    'children' => [
                        [
                            'title' => 'Panduan Tambah Halaman',
                            'route' => 'help.pemrograman.operasional.panduan-tambah-halaman',
                        ],
                        [
                            'title' => 'Panduan Tambah Menu',
                            'route' => 'help.pemrograman.operasional.panduan-tambah-menu',
                        ],
                        [
                            'title' => 'Konvensi Penamaan',
                            'route' => 'help.pemrograman.operasional.konvensi-penamaan',
                        ],
                        [
                            'title' => 'Workflow Developer Harian',
                            'route' => 'help.pemrograman.operasional.workflow-developer-harian',
                        ],
                        [
                            'title' => 'Checklist QA Smoke Test',
                            'route' => 'help.pemrograman.operasional.checklist-qa-smoke-test',
                        ],
                        [
                            'title' => 'Playbook Incident Response',
                            'route' => 'help.pemrograman.operasional.playbook-incident-response',
                        ],
                    ],
                ],
            ],
        ],
        [
            'title' => 'Components',
            'icon'  => 'ki-duotone ki-rocket fs-2',
            'paths' => 2,
            'route'  => 'docs.base.utilities',
            'target' => '_blank',
        ],
        [
            'title' => 'Documentation',
            'icon'  => 'ki-duotone ki-abstract-26 fs-2',
            'paths' => 2,
            'route'  => 'docs.index',
            'target' => '_blank',
        ],
        [
            'title' => 'Changelog',
            'icon'  => 'ki-duotone ki-code fs-2',
            'paths' => 4,
            'route' => 'docs.getting-started.changelog',
            'badge' => ['label' => 'v 8.3.2', 'class' => 'badge badge-danger'],
            'target' => '_blank',
            //'href'  => 'https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog',
        ],
    ],
];
