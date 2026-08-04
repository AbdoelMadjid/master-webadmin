<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Schema;

class Changelog extends Model
{
    protected $table = 'changelogs';

    protected $fillable = [
        'version',
        'title',
        'title_id',
        'date',
        'type',
        'badge',
        'author',
        'description',
        'description_id',
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
    ];

    /**
     * Relationship to ChangelogHighlight model.
     */
    public function highlights(): HasMany
    {
        return $this->hasMany(ChangelogHighlight::class, 'changelog_id');
    }

    /**
     * Relationship to ChangelogCommit model.
     */
    public function commits(): HasMany
    {
        return $this->hasMany(ChangelogCommit::class, 'changelog_id');
    }

    /**
     * Get release version dataset. Reads dynamically from database if populated, otherwise falls back to static dataset.
     *
     * @return array
     */
    public static function getVersions(): array
    {
        try {
            if (Schema::hasTable('changelogs')) {
                $dbLogs = static::query()->with(['highlights', 'commits'])->orderBy('date', 'desc')->orderBy('id', 'desc')->get();
                if ($dbLogs->isNotEmpty()) {
                    return $dbLogs->map(function ($item) {
                        return [
                            'id'             => $item->id,
                            'version'        => $item->version,
                            'title'          => $item->title,
                            'title_id'       => $item->title_id ?: $item->title,
                            'date'           => $item->date ? $item->date->format('Y-m-d') : date('Y-m-d'),
                            'type'           => $item->type ?: 'minor',
                            'badge'          => $item->badge ?: 'badge-light-primary',
                            'author'         => $item->author ?: 'Developer Team',
                            'description'    => $item->description,
                            'description_id' => $item->description_id ?: $item->description,
                            'highlights'     => $item->highlights ? $item->highlights->map(fn($h) => [
                                'type'  => $h->type,
                                'label' => $h->label,
                                'desc'  => $h->desc
                            ])->toArray() : [],
                            'commits'        => $item->commits ? $item->commits->map(fn($c) => [
                                'hash' => $c->hash,
                                'date' => $c->date,
                                'msg'  => $c->msg
                            ])->toArray() : [],
                        ];
                    })->toArray();
                }
            }
        } catch (\Throwable $e) {
            // Database not accessible yet, fallback to static array
        }

        return static::getStaticVersions();
    }

    /**
     * Fallback static release version dataset compiled from repository history.
     *
     * @return array
     */
    public static function getStaticVersions(): array
    {
        return [
            [
                'version' => 'v1.4.1',
                'title' => 'Relational Changelog Database Architecture, Version-Scoped Git Log & Auto-Export Seeder',
                'title_id' => 'Arsitektur Database Relasional Changelog, Git Log per Versi & Auto-Export Seeder',
                'date' => '2026-08-04',
                'type' => 'patch',
                'badge' => 'badge-light-success',
                'author' => 'Developer Team',
                'description' => 'Migrated changelog highlights and commits to dedicated relational database tables with cascade foreign keys, implemented real-time version-scoped Git commit log synchronization, added Version column to Git log view, and built automated database-to-seeder export commands to preserve changelog data consistency across environments.',
                'description_id' => 'Migrasi highlight dan commit changelog ke tabel relasional database dengan foreign key cascade, implementasi sinkronisasi log commit Git real-time terfilter per rilis versi, penambahan kolom Versi pada tampilan Git log, serta pembuatan perintah otomatis ekspor database ke seeder untuk menjaga konsistensi data antar komputer.',
                'highlights' => [
                    [
                        'type' => 'feat',
                        'label' => 'Relational DB Migration',
                        'desc' => 'Migrated JSON columns to changelog_highlights and changelog_commits tables with cascade deletion.',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Version-Scoped Git Sync',
                        'desc' => 'Added real-time Git log sync per version release tag with automatic commit boundary delimitation.',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Auto-Export to Seeder Code',
                        'desc' => 'Built php artisan changelog:export & auto-triggers to export DB records to static seeder code for PC/Laptop sync.',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Version Badge Column',
                        'desc' => 'Added styled Version badge column to Live Git Commit Log table on /appsupport/changelog?tab=git-log.',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Console Developer Integration',
                        'desc' => 'Added Export Changelog control button to /appsupport/console-developer?tab=setup-maintenance.',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '19c63e8',
                        'date' => '2026-08-04 07:57',
                        'msg' => 'feat(changelog): migrasi relasional DB, live git log per versi, & auto-export seeder v1.4.1',
                    ],
                ],
            ],
            [
                'version' => 'v1.4.0',
                'title' => 'Console Developer Web GUI & Full CLI Git Manager Integration',
                'title_id' => 'Console Developer Web GUI & Integrasi Lengkap CLI Git Manager',
                'date' => '2026-08-04',
                'type' => 'minor',
                'badge' => 'badge-light-primary',
                'author' => 'Developer Team',
                'description' => 'Added a dedicated Web GUI module under /appsupport/console-developer featuring interactive buttons for all 14 CLI git:manager commands, system & database diagnostic cards, 1-Click AGENTS.md CRUD generator, batch file utilities, and automatic real-time page reloads.',
                'description_id' => 'Penambahan modul Web GUI khusus pada /appsupport/console-developer dengan tombol interaktif untuk seluruh 14 perintah CLI git:manager, kartu diagnostik sistem & database, generator CRUD 1-Click standar AGENTS.md, utilitas berkas massal, serta pembaruan otomatis halaman secara realtime.',
                'highlights' => [
                    [
                        'type' => 'feat',
                        'label' => 'Developer Console Module',
                        'desc' => 'Integrated complete Web GUI for git:manager CLI into /appsupport/console-developer',
                    ],
                    [
                        'type' => 'feat',
                        'label' => '14 CLI Git Commands GUI',
                        'desc' => 'Rendered 100% of CLI Git commands into a symmetrical 4x4 equal-width button grid',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Real-Time Auto Reload & Logout',
                        'desc' => 'Automated page reloads after MenuSeeder/Git actions and auto-redirect to login on database reset',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'System & Database Diagnostics',
                        'desc' => 'Added real-time DB connection, engine version, and storage link diagnostic cards',
                    ],
                    [
                        'type' => 'fix',
                        'label' => 'Windows Sequential Shell Execution',
                        'desc' => 'Replaced chained shell operators with robust sequential PHP shell execution to prevent syntax failures',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '488af1b',
                        'date' => '2026-08-04 00:57',
                        'msg' => 'feat(appsupport): tingkatkan UI modal changelog dengan input dinamis repeater & tombol Tambah Commit',
                    ],
                    [
                        'hash' => 'f65099c',
                        'date' => '2026-08-04 00:46',
                        'msg' => 'feat(appsupport): tambahkan bidang input pengeditan commit log & highlights pada modal form changelog',
                    ],
                    [
                        'hash' => '1e7518f',
                        'date' => '2026-08-04 00:43',
                        'msg' => 'feat(appsupport): tambahkan tombol & modal form CRUD versi rilis pada modul Changelog',
                    ],
                    [
                        'hash' => 'd417ce0',
                        'date' => '2026-08-04 00:38',
                        'msg' => 'feat(appsupport): migrasi dataset Changelog ke database tabel changelogs & seeder dinamis',
                    ],
                    [
                        'hash' => '42528ed',
                        'date' => '2026-08-04 00:33',
                        'msg' => 'docs(changelog): perbarui catatan rincian commit & perbaikan lengkap rilis versi v1.4.0',
                    ],
                    [
                        'hash' => '2b3f2dc',
                        'date' => '2026-08-04 00:30',
                        'msg' => 'feat(appsupport): otomatis reload halaman realtime & alihkan ke login saat migrate:fresh --seed selesai',
                    ],
                    [
                        'hash' => 'b765361',
                        'date' => '2026-08-04 00:26',
                        'msg' => 'feat(appsupport): kembalikan kartu Storage Link (storage:link) dalam tata letak 5 kartu maintenance',
                    ],
                    [
                        'hash' => 'b2b2ceb',
                        'date' => '2026-08-04 00:24',
                        'msg' => 'feat(appsupport): ganti post-clone init dengan sinkronisasi MenuSeeder & migrate:fresh --seed',
                    ],
                    [
                        'hash' => '6762977',
                        'date' => '2026-08-04 00:17',
                        'msg' => 'refactor(appsupport): ganti tombol optimize yang mengunci route cache dengan migrasi database aman',
                    ],
                    [
                        'hash' => '60901a1',
                        'date' => '2026-08-04 00:12',
                        'msg' => 'docs(changelog): update commit hashes untuk versi v1.4.0',
                    ],
                    [
                        'hash' => 'e75a3cd',
                        'date' => '2026-08-04 00:08',
                        'msg' => 'fix(appsupport): cegah overwrite output git action & pastikan post_clone_init berjalan bertahap di Windows',
                    ],
                    [
                        'hash' => 'fe24cdb',
                        'date' => '2026-08-04 00:04',
                        'msg' => 'fix(appsupport): perbaiki eksekusi perintah git bertahap pada Windows PHP shell_exec',
                    ],
                    [
                        'hash' => '5a5ba42',
                        'date' => '2026-08-04 00:03',
                        'msg' => 'feat(appsupport): tambahkan modul menu Console Developer & Git Manager Web GUI v1.4.0',
                    ],
                    [
                        'hash' => 'ffe1ef2',
                        'date' => '2026-08-03 23:21',
                        'msg' => 'update changelog 1.3.3',
                    ],
                    [
                        'hash' => '4a3e727',
                        'date' => '2026-08-03 23:15',
                        'msg' => 'Update Permission di Manajemen Pengguna',
                    ],
                    [
                        'hash' => '4531ec0',
                        'date' => '2026-08-03 22:05',
                        'msg' => 'Update Changelog v1.3.3',
                    ],
                ],
            ],
            [
                'version' => 'v1.3.3',
                'title' => 'Permission Matrix Enhancements & Automated Parent Menu Synchronization',
                'title_id' => 'Peningkatan Matriks Hak Akses & Inisialisasi Otomatis Parent Menu',
                'date' => '2026-08-03',
                'type' => 'minor',
                'badge' => 'badge-light-primary',
                'author' => 'Developer Team',
                'description' => 'Added bulk select/deselect and row-level toggle on CRUD permission matrices across Role, Akses Role, and Akses User modules, unlocked direct permission customization for all user roles, and implemented automatic two-way parent-child menu permission synchronization.',
                'description_id' => 'Penambahan tombol Pilih Semua/Kosongkan serta toggle per baris pada matriks izin CRUD di modul Role, Akses Role, dan Akses User, pembukaan kuncian edit hak akses pengguna, serta implementasi sinkronisasi dua arah otomatis antara izin anak menu dan parent menu.',
                'highlights' => [
                    [
                        'type' => 'feat',
                        'label' => 'Matrix Toggle & Bulk Actions',
                        'desc' => 'Added Bulk Select All / Deselect All and row-level toggle (Semua) to permission matrices',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Auto-Sync Parent Menu',
                        'desc' => 'Implemented automatic 2-way sync checking/unchecking parent READ permission based on child states',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Hierarchical Module View & 50-Row Page Length',
                        'desc' => 'Ordered permission modules by menu tree hierarchy with indented sub-levels (└─), 2 flush-left lines, and 50 rows per page',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Granular CRUD Module Management',
                        'desc' => 'Refined module permission editing to auto-prune unchecked CRUD actions and removed raw table row delete buttons',
                    ],
                    [
                        'type' => 'fix',
                        'label' => 'User Direct Access Editing',
                        'desc' => 'Unlocked permission checkboxes in Kelola Akses User modal to allow full customization by Master/Admin',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Role Tab Matrix Calculation',
                        'desc' => 'Fixed row toggle calculation across all role tabs on page load and tab switch in Akses Role',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => 'c4b8e91',
                        'date' => '2026-08-03 23:15',
                        'msg' => 'refactor(manajemen-pengguna): tata letak hirarki modul permission, kelola CRUD teratur, & default 50 baris',
                    ],
                    [
                        'hash' => 'e30c66b',
                        'date' => '2026-08-03 21:30',
                        'msg' => 'refactor(manajemen-pengguna): tingkatkan matriks permission & auto-sync parent-child pada role, akses-role, dan akses-user',
                    ],
                ],
            ],
            [
                'version' => 'v1.3.2',
                'title' => 'Unified Git CLI Tooling & About Application Modal Integration',
                'title_id' => 'Perintah Git CLI Terpadu & Integrasi Modal About Aplikasi',
                'date' => '2026-08-03',
                'type' => 'patch',
                'badge' => 'badge-light-success',
                'author' => 'Developer Team',
                'description' => 'Unified Git Manager, post-clone setup, app cache clear, file utilities, and AGENTS.md compliant CRUD generator into git:manager CLI tool, along with responsive bilingual About Application modal on sidebar footer for all user roles.',
                'description_id' => 'Penggabungan Git Manager, inisialisasi post-clone, pembersihan cache aplikasi, utilitas file, dan generator fitur CRUD ke dalam perintah CLI git:manager, serta integrasi modal About Aplikasi dwibahasa di footer sidebar yang responsif untuk seluruh peran pengguna.',
                'highlights' => [
                    [
                        'type' => 'feat',
                        'label' => 'Git & Dev Manager',
                        'desc' => 'Integrated post-clone setup, cache clear, file utilities, and CRUD feature generator into single php artisan git:manager command',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'About App Modal',
                        'desc' => 'Integrated 100% bilingual About Application modal with dynamic versioning from Changelog model',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Sidebar Footer',
                        'desc' => 'Responsive sidebar footer button with icon-first ordering, hover expansion, and role access for all users',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '2171c2f',
                        'date' => '2026-08-03 20:15',
                        'msg' => 'Update Changelog v1.3.2',
                    ],
                    [
                        'hash' => '7f9a319',
                        'date' => '2026-08-03 20:11',
                        'msg' => 'Update tombol di bagian bawah sidebar dengan About',
                    ],
                    [
                        'hash' => 'c59aa1c',
                        'date' => '2026-08-03 16:02',
                        'msg' => 'Update Chengelog v1.3.2',
                    ],
                    [
                        'hash' => '0957a96',
                        'date' => '2026-08-03 15:57',
                        'msg' => 'Update Changelog v1.3.2',
                    ],
                    [
                        'hash' => '8836350',
                        'date' => '2026-08-03 15:54',
                        'msg' => 'Update Console Command Git Manager',
                    ],
                    [
                        'hash' => 'a9062e5',
                        'date' => '2026-08-03 15:48',
                        'msg' => 'Update perintah Git Manager',
                    ],
                ],
            ],
            [
                'version' => 'v1.3.1',
                'title' => 'Responsive Header Action Buttons & App Profile Branding Fixes',
                'title_id' => 'Responsif Tombol Aksi Header & Perbaikan Branding Profil Aplikasi',
                'date' => '2026-08-03',
                'type' => 'patch',
                'badge' => 'badge-light-success',
                'author' => 'Developer Team',
                'description' => 'Standardized page header action buttons with mobile icon-only view, top tooltips, matching 35px height, far-right alignment, fixed app profile logo and favicon image asset URLs using dynamic asset() accessor, and enhanced sidebar header logo scaling.',
                'description_id' => 'Standarisasi tombol aksi header halaman dengan tampilan ikon mobile, tooltip teratas, tinggi sejajar 35px, perataan kanan ms-auto, perbaikan URL asset logo & favicon profil aplikasi dengan accessor asset() dinamis, serta optimasi ukuran logo sidebar.',
                'highlights' => [
                    [
                        'type' => 'ui',
                        'label' => 'Responsive Action Buttons',
                        'desc' => 'Standardized action buttons across modules with mobile text hiding, top tooltips, and uniform 35px height',
                    ],
                    [
                        'type' => 'fix',
                        'label' => 'App Profile Branding',
                        'desc' => 'Fixed logo, small icon, and favicon image URL resolution across storage & layouts using asset() helper',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Sidebar Logo Sizing',
                        'desc' => 'Enhanced sidebar header logo height scaling (h-35px / h-30px) with proportional auto-width',
                    ],
                    [
                        'type' => 'docs',
                        'label' => 'Operational Rules',
                        'desc' => 'Updated AGENTS.md rule specification for responsive page header action buttons',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => 'fe73129',
                        'date' => '2026-08-03 12:28',
                        'msg' => 'Update Changelog',
                    ],
                    [
                        'hash' => '08cffdb',
                        'date' => '2026-08-03 14:10',
                        'msg' => 'Update help skema pemograman operasional tambah menu via route',
                    ],
                    [
                        'hash' => '58d2dd7',
                        'date' => '2026-08-03 14:42',
                        'msg' => 'Perbaikan Profil Aplikasi',
                    ],
                    [
                        'hash' => '0da5ede',
                        'date' => '2026-08-03 14:46',
                        'msg' => 'Perbaikan Ukuran Logo Sidebar',
                    ],
                    [
                        'hash' => 'a423e8d',
                        'date' => '2026-08-03 15:25',
                        'msg' => 'Perbaikan tombol di setiap halaman agar dinamis di layar mobile',
                    ],
                ],
            ],
            [
                'version' => 'v1.3.0',
                'title' => 'Single & Batch Menu Creator & Route Schema Documentation',
                'title_id' => 'Fitur Tambah Menu Single & Batch serta Dokumentasi Skema Route',
                'date' => '2026-08-03',
                'type' => 'minor',
                'badge' => 'badge-light-primary',
                'author' => 'Developer Team',
                'description' => 'Added single and batch menu creation buttons on appsupport/menu page with form validation, auto-fill URL functionality, and bilingual operational guide.',
                'description_id' => 'Penambahan tombol tambah menu tunggal dan masal pada halaman appsupport/menu dengan validasi form, fungsionalitas pengisian URL otomatis, dan petunjuk operasional bilingual.',
                'highlights' => [
                    [
                        'type' => 'feat',
                        'label' => 'Menu Creator',
                        'desc' => 'Added single & batch menu creation buttons with auto-fill URL on appsupport/menu',
                    ],
                    [
                        'type' => 'docs',
                        'label' => 'Help & Schema Guides',
                        'desc' => 'Added 100% bilingual operational guide and schema documentation for menu management',
                    ],
                    [
                        'type' => 'fix',
                        'label' => 'Activity Log',
                        'desc' => 'Refined activity log model event tracking and audit logs',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '2023a0d',
                        'date' => '2026-08-02 21:57',
                        'msg' => 'Perbaikan activity log',
                    ],
                    [
                        'hash' => '6264072',
                        'date' => '2026-08-03 09:12',
                        'msg' => 'Menambahkan tombol tambah pada menu',
                    ],
                    [
                        'hash' => 'b133204',
                        'date' => '2026-08-03 12:06',
                        'msg' => 'Penambahan Skema dan Operasional penambahan menu di route appsupport/menu',
                    ],
                ],
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
                    [
                        'type' => 'feat',
                        'label' => 'Changelog Module',
                        'desc' => 'Added route appsupport/changelog with Controller, Model, and Blade views',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Real-Time Git Log',
                        'desc' => 'Dynamic Git push commit history parser with date & time format (%Y-%m-%d %H:%M)',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Timeline Refinements',
                        'desc' => 'Enhanced release timeline using Metronic 8 native timeline line & Keenicons',
                    ],
                    [
                        'type' => 'docs',
                        'label' => 'Help Modal',
                        'desc' => 'Dedicated 100% bilingual operational guide modal with 4-card sectioning',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => 'ed9d06f',
                        'date' => '2026-08-02 20:37',
                        'msg' => 'Tambahan Menu Changelog',
                    ],
                    [
                        'hash' => '756daf6',
                        'date' => '2026-08-02 20:56',
                        'msg' => 'Merapihkan tampilan halaman changelog',
                    ],
                    [
                        'hash' => '8147d87',
                        'date' => '2026-08-02 21:14',
                        'msg' => 'Perbaikan changelog di models',
                    ],
                ],
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
                    [
                        'type' => 'fix',
                        'label' => 'UI Action',
                        'desc' => 'Simplified bulk enable/disable toggle button labels to "Aktifkan" & "Nonaktifkan"',
                    ],
                    [
                        'type' => 'docs',
                        'label' => 'Help Modal',
                        'desc' => 'Updated operational guide text badges to match new button naming',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '0115cdd',
                        'date' => '2026-08-02',
                        'msg' => 'Perbaikan tombol di website features',
                    ],
                ],
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
                    [
                        'type' => 'feat',
                        'label' => 'Multi-Template',
                        'desc' => 'Integrated multi-template support for public website interface',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Page Content',
                        'desc' => 'Added Page Content management view and route configuration',
                    ],
                    [
                        'type' => 'fix',
                        'label' => 'Public Routes',
                        'desc' => 'Enhanced public view rendering and dynamic template routing',
                    ],
                    [
                        'type' => 'fix',
                        'label' => 'Seeder',
                        'desc' => 'Updated system menu seeder for public content navigation',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '44a39e1',
                        'date' => '2026-07-29',
                        'msg' => 'Perbaikan/tambahan kekurangan Multi Template',
                    ],
                    [
                        'hash' => '9ff612e',
                        'date' => '2026-07-29',
                        'msg' => 'Perbaikan/tambahan kekurangan Multi Template',
                    ],
                    [
                        'hash' => 'd3ba3f3',
                        'date' => '2026-07-29',
                        'msg' => 'Tambahan Multi template Website',
                    ],
                    [
                        'hash' => '67205ec',
                        'date' => '2026-07-29',
                        'msg' => 'Perbaikan seeder',
                    ],
                    [
                        'hash' => 'b9112af',
                        'date' => '2026-07-29',
                        'msg' => 'Perbaikan dan tambahan fitur di route public',
                    ],
                    [
                        'hash' => 'b2f0b98',
                        'date' => '2026-07-29',
                        'msg' => 'Tambah halaman Page Content',
                    ],
                ],
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
                    [
                        'type' => 'feat',
                        'label' => 'Website Features',
                        'desc' => 'Added feature toggle switches for topbar buttons and footer social icons',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Website Profile',
                        'desc' => 'Added website profile settings and footer social media links management',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Dynamic Branding',
                        'desc' => 'Dynamic app name injection into HTML title headers',
                    ],
                    [
                        'type' => 'docs',
                        'label' => 'Help Modals',
                        'desc' => 'Added operational guides for Website Profile and Features',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => 'cda188c',
                        'date' => '2026-07-29',
                        'msg' => 'Perbaikan Petunjuk Operasional Profil dan Fitur Website',
                    ],
                    [
                        'hash' => '6fce379',
                        'date' => '2026-07-29',
                        'msg' => 'Tambah halaman fitur web site dan tambah sosial media di profil website',
                    ],
                    [
                        'hash' => '590aa01',
                        'date' => '2026-07-29',
                        'msg' => 'Implementasi nama aplikasi di title header html',
                    ],
                    [
                        'hash' => '29df1d1',
                        'date' => '2026-07-29',
                        'msg' => 'Tambah halaman profil website',
                    ],
                    [
                        'hash' => 'e18378e',
                        'date' => '2026-07-29',
                        'msg' => 'Menambahkan Halaman Menu untuk Web',
                    ],
                ],
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
                    [
                        'type' => 'feat',
                        'label' => 'Git CLI Manager',
                        'desc' => 'Created php artisan git:manager interactive command console tool',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Menu Ordering',
                        'desc' => 'Added multi-level hierarchy sorting for modules and navigation menus',
                    ],
                    [
                        'type' => 'refactor',
                        'label' => 'Website Data',
                        'desc' => 'Refactored education module into Website Data menu seeder',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '4addc99',
                        'date' => '2026-07-29',
                        'msg' => 'Perbaikan Tampilan Modul/Fitur Berurut Sesuai Tingkat Menu',
                    ],
                    [
                        'hash' => 'c1f59d8',
                        'date' => '2026-07-28',
                        'msg' => 'Perbaikan GitManagerCommand',
                    ],
                    [
                        'hash' => 'c512f0c',
                        'date' => '2026-07-28',
                        'msg' => 'Tambah Command Perintah Git',
                    ],
                    [
                        'hash' => '975daf3',
                        'date' => '2026-07-28',
                        'msg' => 'Perbaikan menu',
                    ],
                    [
                        'hash' => 'aed4fd2',
                        'date' => '2026-07-27',
                        'msg' => 'tambah menu website data',
                    ],
                    [
                        'hash' => 'b0e23f2',
                        'date' => '2026-07-27',
                        'msg' => 'tambah menu website data',
                    ],
                    [
                        'hash' => '178e6fe',
                        'date' => '2026-07-27',
                        'msg' => 'feat: add website data menu seeder and refactor education module to website (v1.0.2)',
                    ],
                ],
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
                    [
                        'type' => 'feat',
                        'label' => 'Release Guide',
                        'desc' => 'Added Git Tagging & Release operational guide module',
                    ],
                    [
                        'type' => 'docs',
                        'label' => 'README Suite',
                        'desc' => 'Comprehensive README update with changelog history section',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '9bbb976',
                        'date' => '2026-07-27',
                        'msg' => 'style(help): remove icon tags from card headings in release guide & clean README badges',
                    ],
                    [
                        'hash' => 'bd4c6a2',
                        'date' => '2026-07-27',
                        'msg' => 'feat(help): add Release & Git Tagging operational guide module and navigation configs',
                    ],
                    [
                        'hash' => '8406c28',
                        'date' => '2026-07-27',
                        'msg' => 'docs: remove hardcoded version string from README description paragraph',
                    ],
                    [
                        'hash' => 'cc5d9bb',
                        'date' => '2026-07-27',
                        'msg' => 'docs: remove GitHub Release guide and Topics setup sections from README',
                    ],
                    [
                        'hash' => 'ee3fc7a',
                        'date' => '2026-07-27',
                        'msg' => 'docs: move Changelog section right before Lisensi section in README',
                    ],
                    [
                        'hash' => '8640c0e',
                        'date' => '2026-07-27',
                        'msg' => 'docs: add detailed Changelog section for v1.0.0 and v1.0.1 in README',
                    ],
                ],
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
                    [
                        'type' => 'feat',
                        'label' => 'Lock Screen',
                        'desc' => 'Interactive lock screen overlay modal with AJAX password verification',
                    ],
                    [
                        'type' => 'ui',
                        'label' => 'Loading State',
                        'desc' => 'Integrated Metronic native data-kt-indicator loading spinner',
                    ],
                    [
                        'type' => 'docs',
                        'label' => 'Mermaid MVC',
                        'desc' => 'Added Mermaid MVC request flow diagram and ASCII folder hierarchy tree',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '92e7780',
                        'date' => '2026-07-27',
                        'msg' => 'docs(help): update Skema & Operasional Pemrograman views with Lock Screen overlay architecture',
                    ],
                    [
                        'hash' => 'e423233',
                        'date' => '2026-07-27',
                        'msg' => 'fix(ui): use native Metronic data-kt-indicator for smooth lock screen button loading animation',
                    ],
                    [
                        'hash' => 'c0255d0',
                        'date' => '2026-07-27',
                        'msg' => 'feat(security): implement interactive Lock Screen overlay modal with AJAX password verification',
                    ],
                    [
                        'hash' => '665ee77',
                        'date' => '2026-07-27',
                        'msg' => 'feat(security): add Lock Screen option to avatar dropdown & update README docs',
                    ],
                    [
                        'hash' => '1d7b43b',
                        'date' => '2026-07-27',
                        'msg' => 'docs: format Hierarki Folder Views ASCII tree and detailed explanations in README',
                    ],
                    [
                        'hash' => '26de9d8',
                        'date' => '2026-07-27',
                        'msg' => 'docs: add detailed step-by-step explanation for Mermaid MVC request flow diagram',
                    ],
                    [
                        'hash' => 'b2f8529',
                        'date' => '2026-07-27',
                        'msg' => 'fix(docs): fix Mermaid syntax error by removing parentheses in edge labels',
                    ],
                    [
                        'hash' => '5b9d822',
                        'date' => '2026-07-27',
                        'msg' => 'docs: add Mermaid MVC architecture request flow diagram to README',
                    ],
                    [
                        'hash' => '45dd6aa',
                        'date' => '2026-07-27',
                        'msg' => 'docs: add MVC architecture & view folder structure section to main README',
                    ],
                ],
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
                    [
                        'type' => 'feat',
                        'label' => 'Core Engine',
                        'desc' => 'Metronic 8 HTML5/Bootstrap 5 administration framework integrated with Laravel 12',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'User & Roles',
                        'desc' => 'Complete User Management, Role Permissions matrix, mass user import, and user switching',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'App Support',
                        'desc' => 'Database Backup/Restore engine, Data Login, Activity Log history, and Reference Data management',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Security',
                        'desc' => 'Automatic idle detection timeout, auto logout, throttle protection, and avatar upload security',
                    ],
                    [
                        'type' => 'feat',
                        'label' => 'Bilingual',
                        'desc' => '100% English & Indonesian translation key support across menus, layout partials, and views',
                    ],
                ],
                'commits' => [
                    [
                        'hash' => '7682a13',
                        'date' => '2026-07-22',
                        'msg' => 'master-webadmin metronic laravel 12',
                    ],
                    [
                        'hash' => '25326fc',
                        'date' => '2026-07-22',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '5b85610',
                        'date' => '2026-07-22',
                        'msg' => 'perbaikan .env',
                    ],
                    [
                        'hash' => 'b5ca297',
                        'date' => '2026-07-22',
                        'msg' => 'perbaikan seeder',
                    ],
                    [
                        'hash' => '6a80f9e',
                        'date' => '2026-07-22',
                        'msg' => 'tambah halaman profil pengguna',
                    ],
                    [
                        'hash' => '46332fb',
                        'date' => '2026-07-22',
                        'msg' => 'tambah halaman app profil',
                    ],
                    [
                        'hash' => 'a7a4cf7',
                        'date' => '2026-07-23',
                        'msg' => 'tambah halaman backup db',
                    ],
                    [
                        'hash' => '2874759',
                        'date' => '2026-07-23',
                        'msg' => 'tambahan iddle dan logout otomatis',
                    ],
                    [
                        'hash' => '4a7169a',
                        'date' => '2026-07-23',
                        'msg' => 'tambahan data login',
                    ],
                    [
                        'hash' => '3085d96',
                        'date' => '2026-07-23',
                        'msg' => 'melengkapi halaman managemenpengguna',
                    ],
                    [
                        'hash' => '31986d6',
                        'date' => '2026-07-23',
                        'msg' => 'tambah upload massal user',
                    ],
                    [
                        'hash' => 'f3ebf48',
                        'date' => '2026-07-23',
                        'msg' => 'membuat switch user',
                    ],
                    [
                        'hash' => 'b2f7ddb',
                        'date' => '2026-07-23',
                        'msg' => 'tambahan register',
                    ],
                    [
                        'hash' => '72727ad',
                        'date' => '2026-07-23',
                        'msg' => 'tambahan widget di dashboard',
                    ],
                    [
                        'hash' => 'd37d814',
                        'date' => '2026-07-23',
                        'msg' => 'tombol icon pakai tooltips',
                    ],
                    [
                        'hash' => '358b117',
                        'date' => '2026-07-24',
                        'msg' => 'tambahan user detail dan pengamanan',
                    ],
                    [
                        'hash' => '3cd6aa7',
                        'date' => '2026-07-26',
                        'msg' => 'tambah halaman referensi',
                    ],
                    [
                        'hash' => '4accfae',
                        'date' => '2026-07-27',
                        'msg' => 'tambahan log activity',
                    ],
                ],
            ],
        ];
    }

    /**
     * Get live git log entries parsed dynamically from system shell or git process scoped to target version milestone.
     *
     * @param string|null $version
     * @return array
     */
    public static function getLiveGitLog(?string $version = null): array
    {
        $allVersions = self::getVersions();
        $latestVersionTag = !empty($allVersions) ? $allVersions[0]['version'] : 'v1.4.0';

        // 1. Map commit hash => version tag from all recorded versions
        $hashMap = [];
        $prevHashes = [];
        $prevVersionTag = !empty($allVersions) && count($allVersions) > 1 ? ($allVersions[1]['version'] ?? null) : null;

        foreach ($allVersions as $idx => $vItem) {
            $verTag = $vItem['version'];
            if (!empty($vItem['commits'])) {
                foreach ($vItem['commits'] as $cItem) {
                    if (!empty($cItem['hash'])) {
                        $h = strtolower(trim($cItem['hash']));
                        $hashMap[$h] = $verTag;
                        if ($idx > 0) {
                            $prevHashes[$h] = true;
                        }
                    }
                }
            }
        }

        // 2. If a past historical version is requested (not latest version), return its specific recorded commits
        if ($version && $latestVersionTag && $version !== $latestVersionTag) {
            foreach (array_slice($allVersions, 1) as $sv) {
                if ($sv['version'] === $version && !empty($sv['commits'])) {
                    return array_map(function ($c) use ($version) {
                        return [
                            'hash'    => $c['hash'],
                            'version' => $version,
                            'date'    => $c['date'],
                            'author'  => 'Developer Team',
                            'message' => $c['msg'],
                            'msg'     => $c['msg'],
                            'type'    => 'other',
                        ];
                    }, $sv['commits']);
                }
            }
        }

        // 3. Parse live git log from repository
        $commits = [];
        $currentVersion = $latestVersionTag;

        try {
            if (function_exists('exec')) {
                $output = [];
                @exec('git log -n 100 --pretty=format:"%h|%ad|%an|%s" --date=format:"%Y-%m-%d %H:%M" 2>&1', $output);
                if (!empty($output) && is_array($output)) {
                    foreach ($output as $line) {
                        $parts = explode('|', $line, 4);
                        if (count($parts) === 4) {
                            $hash = strtolower(trim($parts[0]));
                            $msg = trim($parts[3]);

                            // If fetching for a specific target version (e.g. v1.4.0), stop at previous version boundary
                            if ($version) {
                                if (isset($prevHashes[$hash])) {
                                    break;
                                }
                                if ($prevVersionTag && (
                                    preg_match('/changelog.*' . preg_quote(ltrim($prevVersionTag, 'v'), '/') . '/i', $msg) ||
                                    preg_match('/update.*' . preg_quote(ltrim($prevVersionTag, 'v'), '/') . '/i', $msg)
                                )) {
                                    break;
                                }
                            }

                            // Match version tag from hash map or commit message
                            $commitVer = $hashMap[$hash] ?? null;

                            if (!$commitVer && preg_match('/v?1\.[0-9]+\.[0-9]+/i', $msg, $vMatch)) {
                                $extractedVer = str_starts_with(strtolower($vMatch[0]), 'v') ? strtolower($vMatch[0]) : 'v' . $vMatch[0];
                                $commitVer = $extractedVer;
                                $currentVersion = $extractedVer;
                            }

                            if (!$commitVer) {
                                $commitVer = $currentVersion;
                            }

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
                                'hash'    => $parts[0],
                                'version' => $commitVer,
                                'date'    => $parts[1],
                                'author'  => $parts[2],
                                'message' => $msg,
                                'msg'     => $msg,
                                'type'    => $type,
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
                        'hash'    => $c['hash'],
                        'version' => $ver['version'] ?? 'v1.4.0',
                        'date'    => $c['date'],
                        'author'  => $ver['author'] ?? 'Developer Team',
                        'message' => $msg,
                        'msg'     => $msg,
                        'type'    => $type,
                    ];
                }
            }
        }

        return $commits;
    }

    /**
     * Export current database changelog records into static dataset array in this file.
     *
     * @return bool
     */
    public static function exportToStaticDataset(): bool
    {
        try {
            $dbLogs = self::with(['highlights', 'commits'])->orderBy('date', 'desc')->orderBy('id', 'desc')->get();
            if ($dbLogs->isEmpty()) {
                return false;
            }

            $exportArray = [];
            foreach ($dbLogs as $item) {
                $exportArray[] = [
                    'version'        => $item->version,
                    'title'          => $item->title,
                    'title_id'       => $item->title_id ?: $item->title,
                    'date'           => $item->date ? (is_string($item->date) ? substr($item->date, 0, 10) : $item->date->format('Y-m-d')) : date('Y-m-d'),
                    'type'           => $item->type ?: 'minor',
                    'badge'          => $item->badge ?: 'badge-light-primary',
                    'author'         => $item->author ?: 'Developer Team',
                    'description'    => $item->description,
                    'description_id' => $item->description_id ?: $item->description,
                    'highlights'     => $item->highlights ? $item->highlights->map(fn($h) => [
                        'type'  => $h->type,
                        'label' => $h->label,
                        'desc'  => $h->desc,
                    ])->toArray() : [],
                    'commits'        => $item->commits ? $item->commits->map(fn($c) => [
                        'hash' => $c->hash,
                        'date' => $c->date,
                        'msg'  => $c->msg,
                    ])->toArray() : [],
                ];
            }

            $phpCode = "    public static function getStaticVersions(): array\n    {\n        return " . self::formatArrayToPhp($exportArray, 2) . ";\n    }";

            $filePath = app_path('Models/AppSupport/Changelog.php');
            $fileContent = file_get_contents($filePath);

            $pattern = '/public\s+static\s+function\s+getStaticVersions\(\)\s*:\s*array\s*\{.*?\n    \}/s';
            if (preg_match($pattern, $fileContent)) {
                $newContent = preg_replace($pattern, trim($phpCode), $fileContent);
                file_put_contents($filePath, $newContent);
                return true;
            }
        } catch (\Throwable $e) {
            // Silently fail if file isn't writable
        }

        return false;
    }

    /**
     * Format nested PHP array into clean indented PHP array syntax.
     */
    protected static function formatArrayToPhp(array $arr, int $indent = 2): string
    {
        $sp = str_repeat('    ', $indent);
        $innerSp = str_repeat('    ', $indent + 1);

        if (empty($arr)) {
            return '[]';
        }

        $isIndexed = array_keys($arr) === range(0, count($arr) - 1);
        $items = [];

        foreach ($arr as $k => $v) {
            $prefix = $isIndexed ? '' : var_export($k, true) . ' => ';
            if (is_array($v)) {
                $items[] = $innerSp . $prefix . self::formatArrayToPhp($v, $indent + 1);
            } else {
                $items[] = $innerSp . $prefix . var_export($v, true);
            }
        }

        return "[\n" . implode(",\n", $items) . ",\n" . $sp . "]";
    }
}
