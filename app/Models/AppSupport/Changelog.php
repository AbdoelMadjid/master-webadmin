<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
    /**
     * Get predefined release version dataset compiled from Git repository push history.
     *
     * @return array
     */
    public static function getVersions(): array
    {
        return [
            [
                'version' => 'v1.3.0',
                'title' => 'Added buttons for adding single and batch menus in appsupport/menu.',
                'title_id' => 'Penambahan tombol tambah menu single dan partai di appsupport/menu.',
                'date' => '2026-08-03',
                'type' => 'minor',
                'badge' => 'badge-light-primary',
                'author' => 'Developer Team',
                'description' => 'Added single and batch menu addition buttons on appsupport/menu page with form validation and auto-fill URL functionality.',
                'description_id' => 'Penambahan tombol tambah menu single dan partai pada halaman appsupport/menu dengan validasi form dan fungsionalitas pengisian URL otomatis.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Changelog Module', 'desc' => 'Added route appsupport/changelog with Controller, Model, and Blade views'],
                    ['type' => 'feat', 'label' => 'Real-Time Git Log', 'desc' => 'Dynamic Git push commit history parser with date & time format (%Y-%m-%d %H:%M)'],
                    ['type' => 'ui', 'label' => 'Timeline Refinements', 'desc' => 'Enhanced release timeline using Metronic 8 native timeline line & Keenicons'],
                    ['type' => 'docs', 'label' => 'Help Modal', 'desc' => 'Dedicated 100% bilingual operational guide modal with 4-card sectioning'],
                ],
                'commits' => [
                    ['hash' => '6264072', 'date' => '2026-08-03 09:12', 'msg' => 'Menambahkan tombol tambah pada menu'],
                    ['hash' => 'b133204', 'date' => '2026-08-03 12:06', 'msg' => 'Penambahan Skema dan Operasional penambahan menu di route appsupport/menu'],

                ]
            ],
            [
                'version' => 'v1.2.0',
                'title' => 'Application Changelog & Release History Module',
                'title_id' => 'Modul Catatan Perubahan & Riwayat Rilis Versi',
                'date' => '2026-08-02',
                'type' => 'minor',
                'badge' => 'badge-light-primary',
                'author' => 'Developer Team',
                'description' => 'Implemented dedicated App Support Changelog module, real-time Git commit log parser with timestamps, version release timeline, multi-tab navigation, and bilingual operational guide.',
                'description_id' => 'Implementasi modul Catatan Perubahan pada Dukungan Aplikasi, pelacakan riwayat commit Git real-time berstempel waktu, linimasa rilis versi, tata letak multi-tab, dan petunjuk operasional bilingual.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Changelog Module', 'desc' => 'Added route appsupport/changelog with Controller, Model, and Blade views'],
                    ['type' => 'feat', 'label' => 'Real-Time Git Log', 'desc' => 'Dynamic Git push commit history parser with date & time format (%Y-%m-%d %H:%M)'],
                    ['type' => 'ui', 'label' => 'Timeline Refinements', 'desc' => 'Enhanced release timeline using Metronic 8 native timeline line & Keenicons'],
                    ['type' => 'docs', 'label' => 'Help Modal', 'desc' => 'Dedicated 100% bilingual operational guide modal with 4-card sectioning'],
                ],
                'commits' => [
                    ['hash' => 'ed9d06f', 'date' => '2026-08-02 20:37', 'msg' => 'Tambahan Menu Changelog'],
                    ['hash' => '756daf6', 'date' => '2026-08-02 20:56', 'msg' => 'Merapihkan tampilan halaman changelog'],
                    ['hash' => '8147d87', 'date' => '2026-08-02 21:14', 'msg' => 'Perbaikan changelog di models'],
                ]
            ],
            [
                'version' => 'v1.1.3',
                'title' => 'Website Features Action Buttons Refinement',
                'title_id' => 'Penyempurnaan Tombol Aksi Fitur Website',
                'date' => '2026-08-02',
                'type' => 'patch',
                'badge' => 'badge-light-primary',
                'author' => 'Developer Team',
                'description' => 'Simplified button text labels for bulk toggle actions on website features management page and synced documentation.',
                'description_id' => 'Penyederhanaan label teks tombol aksi sakelar masal pada halaman sakelar fitur website dan sinkronisasi dokumentasi.',
                'highlights' => [
                    ['type' => 'fix', 'label' => 'UI Action', 'desc' => 'Simplified bulk enable/disable toggle button labels to "Aktifkan" & "Nonaktifkan"'],
                    ['type' => 'docs', 'label' => 'Help Modal', 'desc' => 'Updated operational guide text badges to match new button naming'],
                ],
                'commits' => [
                    ['hash' => '0115cdd', 'date' => '2026-08-02', 'msg' => 'Perbaikan tombol di website features'],
                ]
            ],
            [
                'version' => 'v1.1.2',
                'title' => 'Multi-Template Engine & Public Pages CMS',
                'title_id' => 'Mesin Multi-Template & CMS Halaman Publik',
                'date' => '2026-07-29',
                'type' => 'minor',
                'badge' => 'badge-light-info',
                'author' => 'Developer Team',
                'description' => 'Added Multi-Template Website support, Page Content CMS management, dynamic public routing fixes, and seeder refinements.',
                'description_id' => 'Penambahan dukungan Multi-Template Website, manajemen CMS Content Halaman, perbaikan routing publik dinamis, dan penyempurnaan seeder.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Multi-Template', 'desc' => 'Integrated multi-template support for public website interface'],
                    ['type' => 'feat', 'label' => 'Page Content', 'desc' => 'Added Page Content management view and route configuration'],
                    ['type' => 'fix', 'label' => 'Public Routes', 'desc' => 'Enhanced public view rendering and dynamic template routing'],
                    ['type' => 'fix', 'label' => 'Seeder', 'desc' => 'Updated system menu seeder for public content navigation'],
                ],
                'commits' => [
                    ['hash' => '44a39e1', 'date' => '2026-07-29', 'msg' => 'Perbaikan/tambahan kekurangan Multi Template'],
                    ['hash' => '9ff612e', 'date' => '2026-07-29', 'msg' => 'Perbaikan/tambahan kekurangan Multi Template'],
                    ['hash' => 'd3ba3f3', 'date' => '2026-07-29', 'msg' => 'Tambahan Multi template Website'],
                    ['hash' => '67205ec', 'date' => '2026-07-29', 'msg' => 'Perbaikan seeder'],
                    ['hash' => 'b9112af', 'date' => '2026-07-29', 'msg' => 'Perbaikan dan tambahan fitur di route public'],
                    ['hash' => 'b2f0b98', 'date' => '2026-07-29', 'msg' => 'Tambah halaman Page Content'],
                ]
            ],
            [
                'version' => 'v1.1.1',
                'title' => 'Website Configuration & Branding Suite',
                'title_id' => 'Suite Konfigurasi & Branding Website',
                'date' => '2026-07-29',
                'type' => 'minor',
                'badge' => 'badge-light-success',
                'author' => 'Developer Team',
                'description' => 'Implemented Website Profile settings, Website Features toggle switches, dynamic HTML header title integration, and social media links.',
                'description_id' => 'Implementasi pengaturan Profil Website, sakelar visibilitas Fitur Website, integrasi judul header HTML dinamis, dan tautan sosial media.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Website Features', 'desc' => 'Added feature toggle switches for topbar buttons and footer social icons'],
                    ['type' => 'feat', 'label' => 'Website Profile', 'desc' => 'Added website profile settings and footer social media links management'],
                    ['type' => 'feat', 'label' => 'Dynamic Branding', 'desc' => 'Dynamic app name injection into HTML title headers'],
                    ['type' => 'docs', 'label' => 'Help Modals', 'desc' => 'Added operational guides for Website Profile and Features'],
                ],
                'commits' => [
                    ['hash' => 'cda188c', 'date' => '2026-07-29', 'msg' => 'Perbaikan Petunjuk Operasional Profil dan Fitur Website'],
                    ['hash' => '6fce379', 'date' => '2026-07-29', 'msg' => 'Tambah halaman fitur web site dan tambah sosial media di profil website'],
                    ['hash' => '590aa01', 'date' => '2026-07-29', 'msg' => 'Implementasi nama aplikasi di title header html'],
                    ['hash' => '29df1d1', 'date' => '2026-07-29', 'msg' => 'Tambah halaman profil website'],
                    ['hash' => 'e18378e', 'date' => '2026-07-29', 'msg' => 'Menambahkan Halaman Menu untuk Web'],
                ]
            ],
            [
                'version' => 'v1.1.0',
                'title' => 'Website Data Management & Git CLI Manager',
                'title_id' => 'Manajemen Data Website & Git CLI Manager',
                'date' => '2026-07-28',
                'type' => 'minor',
                'badge' => 'badge-light-warning',
                'author' => 'Developer Team',
                'description' => 'Added interactive Git Manager Artisan Command, Website Data menu seeder, module refactoring, and multi-level ordering.',
                'description_id' => 'Penambahan Perintah Artisan Git Manager interaktif, seeder menu data website, refactoring modul, dan pengurutan berurut sesuai tingkat menu.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Git CLI Manager', 'desc' => 'Created php artisan git:manager interactive command console tool'],
                    ['type' => 'feat', 'label' => 'Menu Ordering', 'desc' => 'Added multi-level hierarchy sorting for modules and navigation menus'],
                    ['type' => 'refactor', 'label' => 'Website Data', 'desc' => 'Refactored education module into Website Data menu seeder'],
                ],
                'commits' => [
                    ['hash' => '4addc99', 'date' => '2026-07-29', 'msg' => 'Perbaikan Tampilan Modul/Fitur Berurut Sesuai Tingkat Menu'],
                    ['hash' => 'c1f59d8', 'date' => '2026-07-28', 'msg' => 'Perbaikan GitManagerCommand'],
                    ['hash' => 'c512f0c', 'date' => '2026-07-28', 'msg' => 'Tambah Command Perintah Git'],
                    ['hash' => '975daf3', 'date' => '2026-07-28', 'msg' => 'Perbaikan menu'],
                    ['hash' => 'aed4fd2', 'date' => '2026-07-27', 'msg' => 'tambah menu website data'],
                    ['hash' => 'b0e23f2', 'date' => '2026-07-27', 'msg' => 'tambah menu website data'],
                    ['hash' => '178e6fe', 'date' => '2026-07-27', 'msg' => 'feat: add website data menu seeder and refactor education module to website (v1.0.2)'],
                ]
            ],
            [
                'version' => 'v1.0.2',
                'title' => 'Release Tagging Guide & README Documentation',
                'title_id' => 'Panduan Git Tagging & Dokumentasi README',
                'date' => '2026-07-27',
                'type' => 'patch',
                'badge' => 'badge-light-dark',
                'author' => 'Developer Team',
                'description' => 'Added Git Release & Tagging operational guide module, clean heading badges, and expanded README documentation.',
                'description_id' => 'Penambahan modul petunjuk operasional Git Release & Tagging, pembersihan badge heading, dan penyempurnaan dokumen README.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Release Guide', 'desc' => 'Added Git Tagging & Release operational guide module'],
                    ['type' => 'docs', 'label' => 'README Suite', 'desc' => 'Comprehensive README update with changelog history section'],
                ],
                'commits' => [
                    ['hash' => '9bbb976', 'date' => '2026-07-27', 'msg' => 'style(help): remove icon tags from card headings in release guide & clean README badges'],
                    ['hash' => 'bd4c6a2', 'date' => '2026-07-27', 'msg' => 'feat(help): add Release & Git Tagging operational guide module and navigation configs'],
                    ['hash' => '8406c28', 'date' => '2026-07-27', 'msg' => 'docs: remove hardcoded version string from README description paragraph'],
                    ['hash' => 'cc5d9bb', 'date' => '2026-07-27', 'msg' => 'docs: remove GitHub Release guide and Topics setup sections from README'],
                    ['hash' => 'ee3fc7a', 'date' => '2026-07-27', 'msg' => 'docs: move Changelog section right before Lisensi section in README'],
                    ['hash' => '8640c0e', 'date' => '2026-07-27', 'msg' => 'docs: add detailed Changelog section for v1.0.0 and v1.0.1 in README'],
                ]
            ],
            [
                'version' => 'v1.0.1',
                'title' => 'Lock Screen Overlay & MVC Architecture Diagram',
                'title_id' => 'Overlay Lock Screen & Diagram Arsitektur MVC',
                'date' => '2026-07-27',
                'type' => 'patch',
                'badge' => 'badge-light-danger',
                'author' => 'Developer Team',
                'description' => 'Implemented interactive Lock Screen modal overlay with AJAX password verification, Metronic indicator animations, and Mermaid MVC architecture diagrams.',
                'description_id' => 'Implementasi overlay modal Lock Screen interaktif dengan verifikasi password AJAX, animasi indikator Metronic, dan diagram arsitektur MVC Mermaid.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Lock Screen', 'desc' => 'Interactive lock screen overlay modal with AJAX password verification'],
                    ['type' => 'ui', 'label' => 'Loading State', 'desc' => 'Integrated Metronic native data-kt-indicator loading spinner'],
                    ['type' => 'docs', 'label' => 'Mermaid MVC', 'desc' => 'Added Mermaid MVC request flow diagram and ASCII folder hierarchy tree'],
                ],
                'commits' => [
                    ['hash' => '92e7780', 'date' => '2026-07-27', 'msg' => 'docs(help): update Skema & Operasional Pemrograman views with Lock Screen overlay architecture'],
                    ['hash' => 'e423233', 'date' => '2026-07-27', 'msg' => 'fix(ui): use native Metronic data-kt-indicator for smooth lock screen button loading animation'],
                    ['hash' => 'c0255d0', 'date' => '2026-07-27', 'msg' => 'feat(security): implement interactive Lock Screen overlay modal with AJAX password verification'],
                    ['hash' => '665ee77', 'date' => '2026-07-27', 'msg' => 'feat(security): add Lock Screen option to avatar dropdown & update README docs'],
                    ['hash' => '1d7b43b', 'date' => '2026-07-27', 'msg' => 'docs: format Hierarki Folder Views ASCII tree and detailed explanations in README'],
                    ['hash' => '26de9d8', 'date' => '2026-07-27', 'msg' => 'docs: add detailed step-by-step explanation for Mermaid MVC request flow diagram'],
                    ['hash' => 'b2f8529', 'date' => '2026-07-27', 'msg' => 'fix(docs): fix Mermaid syntax error by removing parentheses in edge labels'],
                    ['hash' => '5b9d822', 'date' => '2026-07-27', 'msg' => 'docs: add Mermaid MVC architecture request flow diagram to README'],
                    ['hash' => '45dd6aa', 'date' => '2026-07-27', 'msg' => 'docs: add MVC architecture & view folder structure section to main README'],
                ]
            ],
            [
                'version' => 'v1.0.0',
                'title' => 'Master WebAdmin Suite Core Release',
                'title_id' => 'Rilis Inti Master WebAdmin Suite',
                'date' => '2026-07-22',
                'type' => 'major',
                'badge' => 'badge-light-primary',
                'author' => 'Developer Team',
                'description' => 'Initial major production release of Master WebAdmin Suite built on Metronic 8 & Laravel 12, featuring Auth, User Management, Dynamic Roles, Database Backup, Activity Logs, Auto Idle Logout, Reference Data, and 100% Bilingual Support.',
                'description_id' => 'Rilis utama produksi pertama Master WebAdmin Suite berbasis Metronic 8 & Laravel 12, dilengkapi Autentikasi, Manajemen Pengguna, Role Dinamis, Backup DB, Log Aktivitas, Auto Logout Idle, Data Referensi, dan Dukungan Bilingual 100%.',
                'highlights' => [
                    ['type' => 'feat', 'label' => 'Core Engine', 'desc' => 'Metronic 8 HTML5/Bootstrap 5 administration framework integrated with Laravel 12'],
                    ['type' => 'feat', 'label' => 'User & Roles', 'desc' => 'Complete User Management, Role Permissions matrix, mass user import, and user switching'],
                    ['type' => 'feat', 'label' => 'App Support', 'desc' => 'Database Backup/Restore engine, Data Login, Activity Log history, and Reference Data management'],
                    ['type' => 'feat', 'label' => 'Security', 'desc' => 'Automatic idle detection timeout, auto logout, throttle protection, and avatar upload security'],
                    ['type' => 'feat', 'label' => 'Bilingual', 'desc' => '100% English & Indonesian translation key support across menus, layout partials, and views'],
                ],
                'commits' => [
                    ['hash' => '7682a13', 'date' => '2026-07-22', 'msg' => 'master-webadmin metronic laravel 12'],
                    ['hash' => '25326fc', 'date' => '2026-07-22', 'msg' => 'perbaikan readme.md'],
                    ['hash' => '5b85610', 'date' => '2026-07-22', 'msg' => 'perbaikan .env'],
                    ['hash' => 'b5ca297', 'date' => '2026-07-22', 'msg' => 'perbaikan seeder'],
                    ['hash' => '6a80f9e', 'date' => '2026-07-22', 'msg' => 'tambah halaman profil pengguna'],
                    ['hash' => '46332fb', 'date' => '2026-07-22', 'msg' => 'tambah halaman app profil'],
                    ['hash' => 'a7a4cf7', 'date' => '2026-07-23', 'msg' => 'tambah halaman backup db'],
                    ['hash' => '2874759', 'date' => '2026-07-23', 'msg' => 'tambahan iddle dan logout otomatis'],
                    ['hash' => '4a7169a', 'date' => '2026-07-23', 'msg' => 'tambahan data login'],
                    ['hash' => '3085d96', 'date' => '2026-07-23', 'msg' => 'melengkapi halaman managemenpengguna'],
                    ['hash' => '31986d6', 'date' => '2026-07-23', 'msg' => 'tambah upload massal user'],
                    ['hash' => 'f3ebf48', 'date' => '2026-07-23', 'msg' => 'membuat switch user'],
                    ['hash' => 'b2f7ddb', 'date' => '2026-07-23', 'msg' => 'tambahan register'],
                    ['hash' => '72727ad', 'date' => '2026-07-23', 'msg' => 'tambahan widget di dashboard'],
                    ['hash' => 'd37d814', 'date' => '2026-07-23', 'msg' => 'tombol icon pakai tooltips'],
                    ['hash' => '358b117', 'date' => '2026-07-24', 'msg' => 'tambahan user detail dan pengamanan'],
                    ['hash' => '3cd6aa7', 'date' => '2026-07-26', 'msg' => 'tambah halaman referensi'],
                    ['hash' => '4accfae', 'date' => '2026-07-27', 'msg' => 'tambahan log activity'],
                ]
            ],
        ];
    }

    /**
     * Get live git log entries parsed dynamically from system shell or git process.
     *
     * @return array
     */
    public static function getLiveGitLog(): array
    {
        $commits = [];
        try {
            if (function_exists('exec')) {
                $output = [];
                @exec('git log -n 100 --pretty=format:"%h|%ad|%an|%s" --date=format:"%Y-%m-%d %H:%M" 2>&1', $output);
                if (!empty($output) && is_array($output)) {
                    foreach ($output as $line) {
                        $parts = explode('|', $line, 4);
                        if (count($parts) === 4) {
                            $msg = $parts[3];
                            $type = 'other';
                            if (preg_match('/^(feat|add|tambah|menambah|tambahan)/i', $msg)) {
                                $type = 'feat';
                            } elseif (preg_match('/^(fix|perbaikan|memperbaiki|bug)/i', $msg)) {
                                $type = 'fix';
                            } elseif (preg_match('/^(docs|readme|petunjuk)/i', $msg)) {
                                $type = 'docs';
                            } elseif (preg_match('/^(style|ui|tampilan)/i', $msg)) {
                                $type = 'style';
                            } elseif (preg_match('/^(refactor|update|merubah)/i', $msg)) {
                                $type = 'refactor';
                            }

                            $commits[] = [
                                'hash' => $parts[0],
                                'date' => $parts[1],
                                'author' => $parts[2],
                                'message' => $msg,
                                'type' => $type,
                            ];
                        }
                    }
                }
            }
        } catch (\Throwable $e) {
            // Silently fall back if shell execution is disabled
        }

        if (empty($commits)) {
            // Fallback dataset from version model
            $versions = self::getVersions();
            foreach ($versions as $ver) {
                foreach ($ver['commits'] as $c) {
                    $msg = $c['msg'];
                    $type = 'other';
                    if (preg_match('/^(feat|add|tambah|menambah|tambahan)/i', $msg)) {
                        $type = 'feat';
                    } elseif (preg_match('/^(fix|perbaikan|memperbaiki|bug)/i', $msg)) {
                        $type = 'fix';
                    } elseif (preg_match('/^(docs|readme|petunjuk)/i', $msg)) {
                        $type = 'docs';
                    } elseif (preg_match('/^(style|ui|tampilan)/i', $msg)) {
                        $type = 'style';
                    } elseif (preg_match('/^(refactor|update|merubah)/i', $msg)) {
                        $type = 'refactor';
                    }

                    $commits[] = [
                        'hash' => $c['hash'],
                        'date' => $c['date'],
                        'author' => $ver['author'],
                        'message' => $msg,
                        'type' => $type,
                    ];
                }
            }
        }

        return $commits;
    }
}
