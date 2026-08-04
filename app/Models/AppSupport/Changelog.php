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

    public static function sortVersionsBySemver(array $versions): array
    {
        usort($versions, function ($a, $b) {
            $aVersion = self::normalizeVersionTag($a['version'] ?? '');
            $bVersion = self::normalizeVersionTag($b['version'] ?? '');

            if ($aVersion === $bVersion) {
                return 0;
            }

            $aParts = self::explodeVersionParts($aVersion);
            $bParts = self::explodeVersionParts($bVersion);

            foreach (range(0, 2) as $index) {
                $aPart = $aParts[$index] ?? 0;
                $bPart = $bParts[$index] ?? 0;

                if ($aPart !== $bPart) {
                    return $aPart < $bPart ? 1 : -1;
                }
            }

            return 0;
        });

        return $versions;
    }

    private static function normalizeVersionTag(?string $version): string
    {
        $value = trim((string) $version);

        return ltrim(strtolower($value), 'v');
    }

    private static function formatVersionTag(?string $version): ?string
    {
        if ($version === null || $version === '') {
            return null;
        }

        $value = trim((string) $version);

        return str_starts_with($value, 'v') ? $value : 'v' . $value;
    }

    private static function explodeVersionParts(string $version): array
    {
        preg_match('/(\d+)\.(\d+)\.(\d+)/', $version, $matches);

        return isset($matches[1], $matches[2], $matches[3])
            ? [(int) $matches[1], (int) $matches[2], (int) $matches[3]]
            : [0, 0, 0];
    }

    private static function inferCommitType(string $message): string
    {
        $msg = trim($message);

        if (preg_match('/^(feat|add|tambah|menambah|tambahan)/i', $msg)) {
            return 'feat';
        }

        if (preg_match('/^(fix|perbaikan|memperbaiki|bug)/i', $msg)) {
            return 'fix';
        }

        if (preg_match('/^(docs|readme|petunjuk)/i', $msg)) {
            return 'docs';
        }

        if (preg_match('/^(style|ui|tampilan)/i', $msg)) {
            return 'style';
        }

        if (preg_match('/^(refactor|update|merubah)/i', $msg)) {
            return 'refactor';
        }

        return 'other';
    }

    public static function normalizeHash(?string $hash): string
    {
        $value = trim((string) $hash);

        if ($value === '') {
            return 'HEAD';
        }

        return substr($value, 0, 7);
    }

    private static function formatCommitFromGitLine(string $line, ?string $version = null): ?array
    {
        $parts = explode('|', $line, 4);
        if (count($parts) !== 4) {
            return null;
        }

        $hash = trim($parts[0]);
        $msg = trim($parts[3]);

        if ($hash === '') {
            return null;
        }

        return [
            'hash' => self::normalizeHash($hash),
            'version' => $version,
            'date' => trim($parts[1]),
            'author' => trim($parts[2]),
            'message' => $msg,
            'msg' => $msg,
            'type' => self::inferCommitType($msg),
        ];
    }

    private static function fetchVersionScopedGitCommits(?string $fromTag, ?string $toTag): array
    {
        $commits = [];
        $range = null;

        $normalizedFromTag = self::formatVersionTag($fromTag);
        $normalizedToTag = self::formatVersionTag($toTag);

        if ($normalizedFromTag && $normalizedToTag && $normalizedFromTag !== $normalizedToTag) {
            $range = $normalizedFromTag . '..' . $normalizedToTag;
        } elseif ($normalizedToTag) {
            $range = $normalizedToTag;
        }

        if (!$range) {
            return $commits;
        }

        try {
            if (function_exists('proc_open')) {
                $descriptors = [
                    0 => ['pipe', 'r'],
                    1 => ['pipe', 'w'],
                    2 => ['pipe', 'w'],
                ];

                $process = proc_open([
                    'git',
                    'log',
                    '--pretty=format:%H|%ad|%an|%s',
                    '--date=format:%Y-%m-%d %H:%M',
                    $range,
                ], $descriptors, $pipes, base_path());

                if (is_resource($process)) {
                    fclose($pipes[0]);
                    $stdout = stream_get_contents($pipes[1]);
                    fclose($pipes[1]);
                    $stderr = stream_get_contents($pipes[2]);
                    fclose($pipes[2]);
                    $exitCode = proc_close($process);

                    if ($exitCode === 0 && $stdout !== '') {
                        foreach (preg_split('/\r\n|\n|\r/', trim($stdout)) as $line) {
                            if ($line === '') {
                                continue;
                            }

                            $parsed = self::formatCommitFromGitLine($line, $normalizedToTag);
                            if ($parsed) {
                                $commits[] = $parsed;
                            }
                        }
                    }
                }
            }
        } catch (\Throwable $e) {
            // Fall back to version dataset below if git is unavailable.
        }

        return $commits;
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
                        'hash' => '42c0328',
                        'date' => '2026-08-04 12:37',
                        'msg' => 'Update tag-backup',
                    ],
                    [
                        'hash' => '50e0f8e',
                        'date' => '2026-08-04 12:32',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => 'ff4ffc0',
                        'date' => '2026-08-04 12:31',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => '2c94023',
                        'date' => '2026-08-04 12:28',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => '4f109cc',
                        'date' => '2026-08-04 12:27',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => '9120675',
                        'date' => '2026-08-04 12:23',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => '65574a7',
                        'date' => '2026-08-04 12:21',
                        'msg' => 'temp-test',
                    ],
                    [
                        'hash' => '765ec4a',
                        'date' => '2026-08-04 12:17',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => 'd9c6e6c',
                        'date' => '2026-08-04 12:14',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => '4b4e156',
                        'date' => '2026-08-04 12:10',
                        'msg' => 'test commit',
                    ],
                    [
                        'hash' => '2da217d',
                        'date' => '2026-08-04 11:55',
                        'msg' => 'Perbaikan Changelog Versi Release',
                    ],
                    [
                        'hash' => '8ac6319',
                        'date' => '2026-08-04 11:22',
                        'msg' => 'Tambah tag-backup.txt',
                    ],
                    [
                        'hash' => '323a1f0',
                        'date' => '2026-08-04 09:28',
                        'msg' => 'Update Changelog v1.4.1',
                    ],
                    [
                        'hash' => 'd7ff6ae',
                        'date' => '2026-08-04 09:12',
                        'msg' => 'Perbaikan Urutan Changelog Version Release Time',
                    ],
                    [
                        'hash' => '6061217',
                        'date' => '2026-08-04 08:53',
                        'msg' => 'Tambahan Keterangan di setiap tombol Console Developer',
                    ],
                    [
                        'hash' => 'dc5f3df',
                        'date' => '2026-08-04 08:39',
                        'msg' => 'Update Changelog v1.4.1',
                    ],
                    [
                        'hash' => '77ca9cf',
                        'date' => '2026-08-04 08:18',
                        'msg' => 'Perbaikan form modal changelog versi pengembangan',
                    ],
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
                        'hash' => '4a3e727',
                        'date' => '2026-08-03 23:15',
                        'msg' => 'Update Permission di Manajemen Pengguna',
                    ],
                    [
                        'hash' => '4531ec0',
                        'date' => '2026-08-03 22:05',
                        'msg' => 'Update Changelog v1.3.3',
                    ],
                    [
                        'hash' => 'e30c66b',
                        'date' => '2026-08-03 21:30',
                        'msg' => 'refactor(manajemen-pengguna): tingkatkan matriks permission & auto-sync parent-child pada role, akses-role, dan akses-user',
                    ],
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
                    [
                        'hash' => '8360d8d',
                        'date' => '2026-08-03 15:29',
                        'msg' => 'update changelog',
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
                        'hash' => '0da5ede',
                        'date' => '2026-08-03 14:46',
                        'msg' => 'Perbaikan Ukuran Logo Sidebar',
                    ],
                    [
                        'hash' => '58d2dd7',
                        'date' => '2026-08-03 14:42',
                        'msg' => 'Perbaikan Profil Aplikasi',
                    ],
                    [
                        'hash' => '08cffdb',
                        'date' => '2026-08-03 14:10',
                        'msg' => 'Update help skema pemograman operasional tambah menu via route',
                    ],
                    [
                        'hash' => 'fe73129',
                        'date' => '2026-08-03 12:28',
                        'msg' => 'Update Changelog',
                    ],
                    [
                        'hash' => 'b133204',
                        'date' => '2026-08-03 12:06',
                        'msg' => 'Penambahan Skema dan Operasional penambahan menu di route appsupport/menu',
                    ],
                    [
                        'hash' => '6264072',
                        'date' => '2026-08-03 09:12',
                        'msg' => 'Menambahkan tombol tambah pada menu',
                    ],
                    [
                        'hash' => '2023a0d',
                        'date' => '2026-08-02 21:57',
                        'msg' => 'Perbaikan activity log',
                    ],
                    [
                        'hash' => '82f5fb6',
                        'date' => '2026-08-02 21:29',
                        'msg' => 'Update',
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
                        'hash' => '8147d87',
                        'date' => '2026-08-02 21:14',
                        'msg' => 'Perbaikan changelog di models',
                    ],
                    [
                        'hash' => '756daf6',
                        'date' => '2026-08-02 20:56',
                        'msg' => 'Merpihkan tampilan halaman changelog',
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
                        'hash' => 'ed9d06f',
                        'date' => '2026-08-02 20:37',
                        'msg' => 'Tambahan Menu Changelog',
                    ],
                    [
                        'hash' => '0115cdd',
                        'date' => '2026-08-02 20:19',
                        'msg' => 'Perbaikan tombol di website features',
                    ],
                    [
                        'hash' => '44a39e1',
                        'date' => '2026-07-29 22:55',
                        'msg' => 'Perbaikan/tambahan kekurangan Multi Template',
                    ],
                    [
                        'hash' => '9ff612e',
                        'date' => '2026-07-29 22:54',
                        'msg' => 'Perbaikan/tambahan  kekurangan Multi Template',
                    ],
                    [
                        'hash' => 'd3ba3f3',
                        'date' => '2026-07-29 22:39',
                        'msg' => 'Tambahan Multi template Website',
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
                        'hash' => '67205ec',
                        'date' => '2026-07-29 21:58',
                        'msg' => 'Perbaikan seeder',
                    ],
                    [
                        'hash' => 'b9112af',
                        'date' => '2026-07-29 21:54',
                        'msg' => 'Perbaikan dan tambahan fitur di route public',
                    ],
                    [
                        'hash' => 'b2f0b98',
                        'date' => '2026-07-29 21:25',
                        'msg' => 'Tambah halaman Page Content',
                    ],
                    [
                        'hash' => 'cda188c',
                        'date' => '2026-07-29 19:52',
                        'msg' => 'Perbaikan Petunjuk Operasional Profil dan Fitur Website',
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
                        'hash' => '6fce379',
                        'date' => '2026-07-29 15:30',
                        'msg' => 'Tambah halaman fitur web site dan tambah sosial media di profil websiter',
                    ],
                    [
                        'hash' => '590aa01',
                        'date' => '2026-07-29 14:48',
                        'msg' => 'Implementasi nama aplikasi di title header html',
                    ],
                    [
                        'hash' => '29df1d1',
                        'date' => '2026-07-29 14:36',
                        'msg' => 'Tambah halaman profil website',
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
                        'hash' => 'e18378e',
                        'date' => '2026-07-29 14:01',
                        'msg' => 'Menambahkan Halaman Menu untuk Web',
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
                        'hash' => '4addc99',
                        'date' => '2026-07-29 12:52',
                        'msg' => 'Perbaikan Tampilan Modul/Fitur Berurut Sesuai Tingkat Menu',
                    ],
                    [
                        'hash' => 'c1f59d8',
                        'date' => '2026-07-28 20:06',
                        'msg' => 'Perbikan GitManagerCommand',
                    ],
                    [
                        'hash' => 'c512f0c',
                        'date' => '2026-07-28 13:53',
                        'msg' => 'Tambah Command Perintah Git',
                    ],
                    [
                        'hash' => '975daf3',
                        'date' => '2026-07-28 13:11',
                        'msg' => 'perbaikan menu',
                    ],
                    [
                        'hash' => 'aed4fd2',
                        'date' => '2026-07-27 23:05',
                        'msg' => 'tambah menu website data',
                    ],
                    [
                        'hash' => 'b0e23f2',
                        'date' => '2026-07-27 22:56',
                        'msg' => 'tambah menu website data',
                    ],
                    [
                        'hash' => '178e6fe',
                        'date' => '2026-07-27 21:07',
                        'msg' => 'feat: add website data menu seeder and refactor education module to website (v1.0.2)',
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
                        'hash' => '9bbb976',
                        'date' => '2026-07-27 12:59',
                        'msg' => 'style(help): remove icon tags from card headings in release guide & clean README badges',
                    ],
                    [
                        'hash' => 'bd4c6a2',
                        'date' => '2026-07-27 12:55',
                        'msg' => 'feat(help): add Release & Git Tagging operational guide module and navigation configs',
                    ],
                    [
                        'hash' => '8406c28',
                        'date' => '2026-07-27 12:47',
                        'msg' => 'docs: remove hardcoded version string from README description paragraph',
                    ],
                    [
                        'hash' => 'cc5d9bb',
                        'date' => '2026-07-27 12:40',
                        'msg' => 'docs: remove GitHub Release guide and Topics setup sections from README',
                    ],
                    [
                        'hash' => 'ee3fc7a',
                        'date' => '2026-07-27 12:38',
                        'msg' => 'docs: move Changelog section right before Lisensi section in README',
                    ],
                    [
                        'hash' => '8640c0e',
                        'date' => '2026-07-27 12:34',
                        'msg' => 'docs: add detailed Changelog section for v1.0.0 and v1.0.1 in README',
                    ],
                    [
                        'hash' => '9eb1937',
                        'date' => '2026-07-27 12:31',
                        'msg' => 'docs: update Version badge URL to point to GitHub tags page',
                    ],
                    [
                        'hash' => '74b2ca3',
                        'date' => '2026-07-27 12:29',
                        'msg' => 'docs: add Version v1.0.1 badge to main README header',
                    ],
                    [
                        'hash' => '92e7780',
                        'date' => '2026-07-27 12:28',
                        'msg' => 'docs(help): update Skema & Operasional Pemrograman views with Lock Screen overlay architecture',
                    ],
                    [
                        'hash' => 'e423233',
                        'date' => '2026-07-27 12:26',
                        'msg' => 'fix(ui): use native Metronic data-kt-indicator for smooth lock screen button loading animation',
                    ],
                    [
                        'hash' => 'c0255d0',
                        'date' => '2026-07-27 12:23',
                        'msg' => 'feat(security): implement interactive Lock Screen overlay modal with AJAX password verification',
                    ],
                    [
                        'hash' => '665ee77',
                        'date' => '2026-07-27 12:19',
                        'msg' => 'feat(security): add Lock Screen option to avatar dropdown & update README docs',
                    ],
                    [
                        'hash' => '1d7b43b',
                        'date' => '2026-07-27 12:02',
                        'msg' => 'docs: format Hierarki Folder Views ASCII tree and detailed explanations in README',
                    ],
                    [
                        'hash' => '26de9d8',
                        'date' => '2026-07-27 12:00',
                        'msg' => 'docs: add detailed step-by-step explanation for Mermaid MVC request flow diagram',
                    ],
                    [
                        'hash' => 'b2f8529',
                        'date' => '2026-07-27 11:59',
                        'msg' => 'fix(docs): fix Mermaid syntax error by removing parentheses in edge labels',
                    ],
                    [
                        'hash' => '5b9d822',
                        'date' => '2026-07-27 11:57',
                        'msg' => 'docs: add Mermaid MVC architecture request flow diagram to README',
                    ],
                    [
                        'hash' => '45dd6aa',
                        'date' => '2026-07-27 11:54',
                        'msg' => 'docs: add MVC architecture & view folder structure section to main README',
                    ],
                    [
                        'hash' => '21017d7',
                        'date' => '2026-07-27 11:39',
                        'msg' => 'docs: add internal schema docs link to main README & review docs/skema-pemrograman/README.md',
                    ],
                    [
                        'hash' => '787e922',
                        'date' => '2026-07-27 11:36',
                        'msg' => 'docs: add Back to Table of Contents buttons at the end of each section in README',
                    ],
                    [
                        'hash' => '3d18a05',
                        'date' => '2026-07-27 11:35',
                        'msg' => 'fix(docs): add explicit HTML anchors to README table of contents links',
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
                        'hash' => '0fdec63',
                        'date' => '2026-07-27 11:31',
                        'msg' => 'docs: update README with development checklist roadmap & release guide',
                    ],
                    [
                        'hash' => '30a6b46',
                        'date' => '2026-07-27 11:26',
                        'msg' => 'update overview help',
                    ],
                    [
                        'hash' => '8a06754',
                        'date' => '2026-07-27 11:21',
                        'msg' => 'tambahan throttle',
                    ],
                    [
                        'hash' => '4accfae',
                        'date' => '2026-07-27 11:12',
                        'msg' => 'tambahan log activity',
                    ],
                    [
                        'hash' => 'f6f1207',
                        'date' => '2026-07-27 09:32',
                        'msg' => 'tambahan overviews help',
                    ],
                    [
                        'hash' => '315e2ee',
                        'date' => '2026-07-27 07:32',
                        'msg' => 'perbaikan akses-user dan role',
                    ],
                    [
                        'hash' => '61c08d5',
                        'date' => '2026-07-26 23:18',
                        'msg' => 'perbaikan users',
                    ],
                    [
                        'hash' => '258be61',
                        'date' => '2026-07-26 22:09',
                        'msg' => 'perbaikan akses user dan help',
                    ],
                    [
                        'hash' => '9c6fd38',
                        'date' => '2026-07-26 21:30',
                        'msg' => 'perbaikan dashboard',
                    ],
                    [
                        'hash' => '6d40a31',
                        'date' => '2026-07-26 21:16',
                        'msg' => 'perbaikan notifikasi keluar otomatis',
                    ],
                    [
                        'hash' => '425b2ef',
                        'date' => '2026-07-26 21:13',
                        'msg' => 'perbaikan register',
                    ],
                    [
                        'hash' => '475789e',
                        'date' => '2026-07-26 20:45',
                        'msg' => 'perbaikan dashboard',
                    ],
                    [
                        'hash' => 'b1f1229',
                        'date' => '2026-07-26 20:30',
                        'msg' => 'perbaikan profil pengguna',
                    ],
                    [
                        'hash' => '721650c',
                        'date' => '2026-07-26 15:56',
                        'msg' => 'update',
                    ],
                    [
                        'hash' => '3127322',
                        'date' => '2026-07-26 15:54',
                        'msg' => 'perbaikan referensi',
                    ],
                    [
                        'hash' => '2de54b7',
                        'date' => '2026-07-26 15:43',
                        'msg' => 'memperbaiki atmpilam help-modal',
                    ],
                    [
                        'hash' => '82f0839',
                        'date' => '2026-07-26 15:38',
                        'msg' => 'tambah halaman referensi',
                    ],
                    [
                        'hash' => '3cd6aa7',
                        'date' => '2026-07-26 15:34',
                        'msg' => 'tambah halaman referensi',
                    ],
                    [
                        'hash' => '4bb6e1a',
                        'date' => '2026-07-26 15:17',
                        'msg' => 'ganti bilingual di menu seeder',
                    ],
                    [
                        'hash' => '7a579e1',
                        'date' => '2026-07-26 15:10',
                        'msg' => 'petunjuk di halaman app support',
                    ],
                    [
                        'hash' => '4e6290d',
                        'date' => '2026-07-26 14:57',
                        'msg' => 'tambahan petunjuk',
                    ],
                    [
                        'hash' => '121afb6',
                        'date' => '2026-07-26 14:33',
                        'msg' => 'perbaikan bilingual menu',
                    ],
                    [
                        'hash' => '247e1ed',
                        'date' => '2026-07-26 14:27',
                        'msg' => 'perbaikan halaman operasional',
                    ],
                    [
                        'hash' => '611d2e2',
                        'date' => '2026-07-26 14:20',
                        'msg' => 'perbaikan nama menu help',
                    ],
                    [
                        'hash' => 'e6d625e',
                        'date' => '2026-07-25 18:28',
                        'msg' => 'update',
                    ],
                    [
                        'hash' => 'b494eba',
                        'date' => '2026-07-25 18:24',
                        'msg' => 'update',
                    ],
                    [
                        'hash' => 'a127591',
                        'date' => '2026-07-25 18:17',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '3f9affe',
                        'date' => '2026-07-25 18:11',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => 'cbbde53',
                        'date' => '2026-07-25 18:09',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '63c0a5e',
                        'date' => '2026-07-25 18:06',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '1631e63',
                        'date' => '2026-07-25 17:56',
                        'msg' => 'hapus avatar',
                    ],
                    [
                        'hash' => '515c43a',
                        'date' => '2026-07-25 17:53',
                        'msg' => 'perbaikan simpan avatar',
                    ],
                    [
                        'hash' => 'c2f12c7',
                        'date' => '2026-07-25 17:38',
                        'msg' => 'perbaikan tata letak file',
                    ],
                    [
                        'hash' => 'ecca40f',
                        'date' => '2026-07-25 17:29',
                        'msg' => 'perbaikan tata letak file blade',
                    ],
                    [
                        'hash' => '975b85f',
                        'date' => '2026-07-25 17:05',
                        'msg' => 'perbaikan tampilan help',
                    ],
                    [
                        'hash' => 'b9cf876',
                        'date' => '2026-07-24 23:22',
                        'msg' => 'perbaikan dan update help',
                    ],
                    [
                        'hash' => '702ca14',
                        'date' => '2026-07-24 23:13',
                        'msg' => 'perbaikan dan update help',
                    ],
                    [
                        'hash' => '7a63fec',
                        'date' => '2026-07-24 22:46',
                        'msg' => 'perbaikan dan update help',
                    ],
                    [
                        'hash' => 'b043a51',
                        'date' => '2026-07-24 16:52',
                        'msg' => 'perbaikan pengajuan akun baru',
                    ],
                    [
                        'hash' => 'db2e544',
                        'date' => '2026-07-24 16:48',
                        'msg' => 'perbaikan notifikasi reset password',
                    ],
                    [
                        'hash' => '3d41a30',
                        'date' => '2026-07-24 16:42',
                        'msg' => 'perbaikan notifikasi',
                    ],
                    [
                        'hash' => '358b117',
                        'date' => '2026-07-24 16:34',
                        'msg' => 'tambahan user detail dan pengamanan',
                    ],
                    [
                        'hash' => 'bbaf0b0',
                        'date' => '2026-07-24 10:39',
                        'msg' => 'update readme.md',
                    ],
                    [
                        'hash' => '5d4debf',
                        'date' => '2026-07-24 10:36',
                        'msg' => 'update readme.md',
                    ],
                    [
                        'hash' => '2ca96b0',
                        'date' => '2026-07-24 10:32',
                        'msg' => 'update readme.md',
                    ],
                    [
                        'hash' => 'a1b65ed',
                        'date' => '2026-07-24 10:28',
                        'msg' => 'perbaikan help bilingual',
                    ],
                    [
                        'hash' => 'f245f2a',
                        'date' => '2026-07-24 10:17',
                        'msg' => 'perbaikan help bilingual',
                    ],
                    [
                        'hash' => '23087c6',
                        'date' => '2026-07-24 09:53',
                        'msg' => 'perbaikan help',
                    ],
                    [
                        'hash' => '49ed946',
                        'date' => '2026-07-24 09:46',
                        'msg' => 'perbaikan help',
                    ],
                    [
                        'hash' => 'ec68870',
                        'date' => '2026-07-24 09:42',
                        'msg' => 'perbaikan help',
                    ],
                    [
                        'hash' => '18b8067',
                        'date' => '2026-07-24 09:10',
                        'msg' => 'perbaikan permission',
                    ],
                    [
                        'hash' => 'ad7938e',
                        'date' => '2026-07-24 08:49',
                        'msg' => 'perbaikan notifikasi',
                    ],
                    [
                        'hash' => 'cc9db39',
                        'date' => '2026-07-24 08:35',
                        'msg' => 'perbaikan dashboard',
                    ],
                    [
                        'hash' => '41c8027',
                        'date' => '2026-07-24 00:11',
                        'msg' => 'perbaikan tampilan',
                    ],
                    [
                        'hash' => '6fffa40',
                        'date' => '2026-07-23 23:50',
                        'msg' => 'perbaikan tampilan',
                    ],
                    [
                        'hash' => 'a4130d1',
                        'date' => '2026-07-23 23:04',
                        'msg' => 'perbaikan manajemen pengguna',
                    ],
                    [
                        'hash' => 'd37d814',
                        'date' => '2026-07-23 22:56',
                        'msg' => 'tombol icon pakai tooltips',
                    ],
                    [
                        'hash' => '1b84590',
                        'date' => '2026-07-23 22:49',
                        'msg' => 'perbaikan manajemen pengguna users',
                    ],
                    [
                        'hash' => 'f68c797',
                        'date' => '2026-07-23 22:37',
                        'msg' => 'perbaikan manajemen pengguna users',
                    ],
                    [
                        'hash' => '7e0a1bc',
                        'date' => '2026-07-23 21:51',
                        'msg' => 'perbaikan manajemen  pengguna',
                    ],
                    [
                        'hash' => '72727ad',
                        'date' => '2026-07-23 21:39',
                        'msg' => 'tambahan widget di dashboard',
                    ],
                    [
                        'hash' => 'e575794',
                        'date' => '2026-07-23 21:18',
                        'msg' => 'memindahkan bilingual',
                    ],
                    [
                        'hash' => '6b44b19',
                        'date' => '2026-07-23 21:07',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '8131ee3',
                        'date' => '2026-07-23 21:03',
                        'msg' => 'perbaikan seeder',
                    ],
                    [
                        'hash' => '7f54328',
                        'date' => '2026-07-23 20:58',
                        'msg' => 'perbaikan timer',
                    ],
                    [
                        'hash' => '000f778',
                        'date' => '2026-07-23 20:55',
                        'msg' => 'perbaikan seeder',
                    ],
                    [
                        'hash' => 'f2a7c71',
                        'date' => '2026-07-23 20:42',
                        'msg' => 'perbaikan app fitur dan reset password',
                    ],
                    [
                        'hash' => 'b67bbb2',
                        'date' => '2026-07-23 20:12',
                        'msg' => 'merapihkan operview',
                    ],
                    [
                        'hash' => '0c2d56b',
                        'date' => '2026-07-23 16:26',
                        'msg' => 'perbaikan avatar, nama pengguna dan route menu',
                    ],
                    [
                        'hash' => '608d0e4',
                        'date' => '2026-07-23 16:00',
                        'msg' => 'tambahan help register',
                    ],
                    [
                        'hash' => 'b2f7ddb',
                        'date' => '2026-07-23 15:54',
                        'msg' => 'tambahan register',
                    ],
                    [
                        'hash' => 'e3e1d4c',
                        'date' => '2026-07-23 15:36',
                        'msg' => 'perbaikan drop down avatar di user bagian kanan atas',
                    ],
                    [
                        'hash' => '180c18f',
                        'date' => '2026-07-23 15:27',
                        'msg' => 'perbaikan skema',
                    ],
                    [
                        'hash' => 'fa09331',
                        'date' => '2026-07-23 15:01',
                        'msg' => 'tambahan reset password',
                    ],
                    [
                        'hash' => '16f8e90',
                        'date' => '2026-07-23 14:33',
                        'msg' => 'perbaikan di notifikasi log',
                    ],
                    [
                        'hash' => '9f11763',
                        'date' => '2026-07-23 13:52',
                        'msg' => 'perbaikan di manajemenpengguna/roles',
                    ],
                    [
                        'hash' => 'f3ebf48',
                        'date' => '2026-07-23 13:45',
                        'msg' => 'membuat switch user',
                    ],
                    [
                        'hash' => '322655f',
                        'date' => '2026-07-23 13:17',
                        'msg' => 'update perekaman waktu sesuai device',
                    ],
                    [
                        'hash' => '31986d6',
                        'date' => '2026-07-23 13:15',
                        'msg' => 'tambah upload massal user',
                    ],
                    [
                        'hash' => '03c2e0a',
                        'date' => '2026-07-23 13:04',
                        'msg' => 'tambah skema manajemen pengguna',
                    ],
                    [
                        'hash' => '3085d96',
                        'date' => '2026-07-23 12:56',
                        'msg' => 'melengkapi halaman managemenpengguna',
                    ],
                    [
                        'hash' => '49528b5',
                        'date' => '2026-07-23 12:06',
                        'msg' => 'tambahan skema pemograman',
                    ],
                    [
                        'hash' => '4a7169a',
                        'date' => '2026-07-23 11:37',
                        'msg' => 'tambahan data login',
                    ],
                    [
                        'hash' => '2874759',
                        'date' => '2026-07-23 11:13',
                        'msg' => 'tambahan iddle dan logout otomatis',
                    ],
                    [
                        'hash' => 'f9054eb',
                        'date' => '2026-07-23 11:01',
                        'msg' => 'tambahan point login user',
                    ],
                    [
                        'hash' => 'e46a5e6',
                        'date' => '2026-07-23 10:24',
                        'msg' => 'tambahan poin login user',
                    ],
                    [
                        'hash' => 'f1534b2',
                        'date' => '2026-07-23 09:45',
                        'msg' => 'update tampilan fitur',
                    ],
                    [
                        'hash' => 'b2e77dc',
                        'date' => '2026-07-23 09:37',
                        'msg' => 'update halaman users/pengguna',
                    ],
                    [
                        'hash' => 'a47aef6',
                        'date' => '2026-07-23 09:08',
                        'msg' => 'melengkapi halaman fitur aplikasi',
                    ],
                    [
                        'hash' => '360af1b',
                        'date' => '2026-07-23 08:27',
                        'msg' => 'merubah halaman  appsupport/app-profil',
                    ],
                    [
                        'hash' => '2b9f9ec',
                        'date' => '2026-07-23 08:23',
                        'msg' => 'melengkapi fungsi-fungsi di menu',
                    ],
                    [
                        'hash' => 'a7a4cf7',
                        'date' => '2026-07-23 08:03',
                        'msg' => 'tambah halaman backup db',
                    ],
                    [
                        'hash' => '1d7755e',
                        'date' => '2026-07-23 07:47',
                        'msg' => 'menambah seeder app profil',
                    ],
                    [
                        'hash' => '46332fb',
                        'date' => '2026-07-22 23:22',
                        'msg' => 'tambah halaman app profil',
                    ],
                    [
                        'hash' => '30d7aed',
                        'date' => '2026-07-22 21:56',
                        'msg' => 'tambah content halaman menu',
                    ],
                    [
                        'hash' => '0946493',
                        'date' => '2026-07-22 21:28',
                        'msg' => 'setting halaman profil-pengguna',
                    ],
                    [
                        'hash' => '0a1c51c',
                        'date' => '2026-07-22 20:43',
                        'msg' => 'perbaikan overlad tanda error dengan eyes',
                    ],
                    [
                        'hash' => '6a80f9e',
                        'date' => '2026-07-22 20:29',
                        'msg' => 'tambah halaman profil pengguna',
                    ],
                    [
                        'hash' => 'b5ca297',
                        'date' => '2026-07-22 17:34',
                        'msg' => 'perbaikan seeder',
                    ],
                    [
                        'hash' => '5b85610',
                        'date' => '2026-07-22 17:22',
                        'msg' => 'perbaikan .env',
                    ],
                    [
                        'hash' => '25326fc',
                        'date' => '2026-07-22 17:20',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '7682a13',
                        'date' => '2026-07-22 17:13',
                        'msg' => 'master-webadmin metronic laravel 12',
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
        $allVersions = self::sortVersionsBySemver(self::getVersions());
        $latestVersionTag = !empty($allVersions) ? ($allVersions[0]['version'] ?? 'v1.4.0') : 'v1.4.0';

        $normalizedVersion = $version ? self::normalizeVersionTag($version) : null;

        if ($normalizedVersion) {
            foreach ($allVersions as $index => $versionEntry) {
                if (self::normalizeVersionTag($versionEntry['version'] ?? '') === $normalizedVersion) {
                    $previousTag = $index + 1 < count($allVersions)
                        ? self::normalizeVersionTag($allVersions[$index + 1]['version'] ?? '')
                        : null;

                    $commits = self::fetchVersionScopedGitCommits($previousTag, $versionEntry['version'] ?? null);
                    if (!empty($commits)) {
                        return $commits;
                    }

                    break;
                }
            }
        }

        $commits = [];
        $orderedVersions = $allVersions;

        foreach ($orderedVersions as $index => $versionEntry) {
            $currentVersionTag = $versionEntry['version'] ?? null;
            $previousTag = $index + 1 < count($orderedVersions)
                ? ($orderedVersions[$index + 1]['version'] ?? null)
                : null;

            $versionScopedCommits = self::fetchVersionScopedGitCommits($previousTag, $currentVersionTag);
            if (!empty($versionScopedCommits)) {
                $commits = array_merge($commits, $versionScopedCommits);
                continue;
            }

            if (!empty($versionEntry['commits'])) {
                foreach ($versionEntry['commits'] as $c) {
                    $msg = $c['msg'] ?? $c['message'] ?? '';
                    $commits[] = [
                        'hash' => $c['hash'] ?? 'HEAD',
                        'version' => $currentVersionTag ?? $latestVersionTag,
                        'date' => $c['date'] ?? date('Y-m-d H:i'),
                        'author' => $versionEntry['author'] ?? 'Developer Team',
                        'message' => $msg,
                        'msg' => $msg,
                        'type' => self::inferCommitType($msg),
                    ];
                }
            }
        }

        if (empty($commits)) {
            foreach ($allVersions as $ver) {
                foreach ($ver['commits'] ?? [] as $c) {
                    $msg = $c['msg'] ?? $c['message'] ?? '';
                    $commits[] = [
                        'hash' => $c['hash'] ?? 'HEAD',
                        'version' => $ver['version'] ?? $latestVersionTag,
                        'date' => $c['date'] ?? date('Y-m-d H:i'),
                        'author' => $ver['author'] ?? 'Developer Team',
                        'message' => $msg,
                        'msg' => $msg,
                        'type' => self::inferCommitType($msg),
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
