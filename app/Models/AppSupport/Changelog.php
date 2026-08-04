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
            'hash' => $hash,
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
                        'hash' => '19c63e864cacdf9ea67647ae07b950fcb7d9b1fa',
                        'date' => '2026-08-04 07:57',
                        'msg' => 'feat(changelog): migrasi relasional DB, live git log per versi, & auto-export seeder v1.4.1',
                    ],
                    [
                        'hash' => '77ca9cf03bcc447dbe1c21cb16daba7b1453a82c',
                        'date' => '2026-08-04 08:18',
                        'msg' => 'Perbaikan form modal changelog versi pengembangan',
                    ],
                    [
                        'hash' => 'dc5f3df649a62d8273b2f7048b3081047c22be3a',
                        'date' => '2026-08-04 08:39',
                        'msg' => 'Update Changelog v1.4.1',
                    ],
                    [
                        'hash' => '60612178db253d045b55affb8a638dbbc70c20f7',
                        'date' => '2026-08-04 08:53',
                        'msg' => 'Tambahan Keterangan di setiap tombol Console Developer',
                    ],
                    [
                        'hash' => 'd7ff6ae455be07fb6facd8e27855f476dcef6513',
                        'date' => '2026-08-04 09:12',
                        'msg' => 'Perbaikan Urutan Changelog Version Release Time',
                    ],
                    [
                        'hash' => '323a1f0acf9c15aa337b9e2931099dbfe7e3c7b8',
                        'date' => '2026-08-04 09:28',
                        'msg' => 'Update Changelog v1.4.1',
                    ],
                    [
                        'hash' => '8ac6319bd20c95b4fffd3df5339705da85738939',
                        'date' => '2026-08-04 11:22',
                        'msg' => 'Tambah tag-backup.txt',
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
                        'hash' => 'ffe1ef2b74ceabc89c76fb2e812d2d2351996930',
                        'date' => '2026-08-03 23:21',
                        'msg' => 'update changelog 1.3.3',
                    ],
                    [
                        'hash' => '5a5ba429d20a97e8763aa70541b1e5e066c6b4aa',
                        'date' => '2026-08-04 00:03',
                        'msg' => 'feat(appsupport): tambahkan modul menu Console Developer & Git Manager Web GUI v1.4.0',
                    ],
                    [
                        'hash' => 'fe24cdbf1bb2a1bee08c6d5e644db7d0e9d284b3',
                        'date' => '2026-08-04 00:04',
                        'msg' => 'fix(appsupport): perbaiki eksekusi perintah git bertahap pada Windows PHP shell_exec',
                    ],
                    [
                        'hash' => 'e75a3cd7857dd799ccd8f2d0f14d64e85c4d27e1',
                        'date' => '2026-08-04 00:08',
                        'msg' => 'fix(appsupport): cegah overwrite output git action & pastikan post_clone_init berjalan bertahap di Windows',
                    ],
                    [
                        'hash' => '60901a127ce1085bc34f92d3efccf01c5d6871e5',
                        'date' => '2026-08-04 00:12',
                        'msg' => 'docs(changelog): update commit hashes untuk versi v1.4.0',
                    ],
                    [
                        'hash' => '676297734518e74902c828dfd015868adbf6d6c5',
                        'date' => '2026-08-04 00:17',
                        'msg' => 'refactor(appsupport): ganti tombol optimize yang mengunci route cache dengan migrasi database aman',
                    ],
                    [
                        'hash' => 'b2b2ceb0b35922dfdaf3898e2a577dc3c911bcbe',
                        'date' => '2026-08-04 00:24',
                        'msg' => 'feat(appsupport): ganti post-clone init dengan sinkronisasi MenuSeeder & migrate:fresh --seed',
                    ],
                    [
                        'hash' => 'b7653611c85530d0f827d6802c263d276eace827',
                        'date' => '2026-08-04 00:26',
                        'msg' => 'feat(appsupport): kembalikan kartu Storage Link (storage:link) dalam tata letak 5 kartu maintenance',
                    ],
                    [
                        'hash' => '2b3f2dc301bc1b2308a988c638d79f358e9b62bc',
                        'date' => '2026-08-04 00:30',
                        'msg' => 'feat(appsupport): otomatis reload halaman realtime & alihkan ke login saat migrate:fresh --seed selesai',
                    ],
                    [
                        'hash' => '42528edcbbdf05693f91d23838328213d59735df',
                        'date' => '2026-08-04 00:33',
                        'msg' => 'docs(changelog): perbarui catatan rincian commit & perbaikan lengkap rilis versi v1.4.0',
                    ],
                    [
                        'hash' => 'd417ce0be29c0dcbdfa24541d50e4caae956b2e0',
                        'date' => '2026-08-04 00:38',
                        'msg' => 'feat(appsupport): migrasi dataset Changelog ke database tabel changelogs & seeder dinamis',
                    ],
                    [
                        'hash' => '1e7518f587e6058284b64c5d8bd61f856e9833c5',
                        'date' => '2026-08-04 00:43',
                        'msg' => 'feat(appsupport): tambahkan tombol & modal form CRUD versi rilis pada modul Changelog',
                    ],
                    [
                        'hash' => 'f65099ceaea6409abf97d92f36b656defd1a158e',
                        'date' => '2026-08-04 00:46',
                        'msg' => 'feat(appsupport): tambahkan bidang input pengeditan commit log & highlights pada modal form changelog',
                    ],
                    [
                        'hash' => '488af1b2cbc58a1238b335007b904c03211a66a7',
                        'date' => '2026-08-04 00:57',
                        'msg' => 'feat(appsupport): tingkatkan UI modal changelog dengan input dinamis repeater & tombol Tambah Commit',
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
                        'hash' => '7f9a3193440d4aa43afcec11e427e0aef33597f1',
                        'date' => '2026-08-03 20:11',
                        'msg' => 'Update tombol di bagian bawah sidebar dengan About',
                    ],
                    [
                        'hash' => '2171c2f1cf21b7f16a7f603daee1c05e694f4ff4',
                        'date' => '2026-08-03 20:15',
                        'msg' => 'Update Changelog v1.3.2',
                    ],
                    [
                        'hash' => 'e30c66b74dc6cb2f1cf180252c40424bcac5e8cf',
                        'date' => '2026-08-03 21:30',
                        'msg' => 'refactor(manajemen-pengguna): tingkatkan matriks permission & auto-sync parent-child pada role, akses-role, dan akses-user',
                    ],
                    [
                        'hash' => '4531ec08220685699acd8a7c4788a4143f9437df',
                        'date' => '2026-08-03 22:05',
                        'msg' => 'Update Changelog v1.3.3',
                    ],
                    [
                        'hash' => '4a3e727876765fdd803604350092a2731d0b5f1b',
                        'date' => '2026-08-03 23:15',
                        'msg' => 'Update Permission di Manajemen Pengguna',
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
                        'hash' => '8360d8d2aca5487b40a68d77ee8c67b49fea1504',
                        'date' => '2026-08-03 15:29',
                        'msg' => 'update changelog',
                    ],
                    [
                        'hash' => 'a9062e52c4cd322fdb67342197e76f60ab3ff0d9',
                        'date' => '2026-08-03 15:48',
                        'msg' => 'Update perintah Git Manager',
                    ],
                    [
                        'hash' => '883635037e8bd4c0b9b0a519529bfa2546177cc0',
                        'date' => '2026-08-03 15:54',
                        'msg' => 'Update Console Command Git Manager',
                    ],
                    [
                        'hash' => '0957a96e818ee2d074000f30ffca9217e666f67a',
                        'date' => '2026-08-03 15:57',
                        'msg' => 'Update Changelog v1.3.2',
                    ],
                    [
                        'hash' => 'c59aa1c71689b7cd1bc3e1f3a44a472969708035',
                        'date' => '2026-08-03 16:02',
                        'msg' => 'Update Chengelog v1.3.2',
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
                        'hash' => '82f5fb6cb8afb18dec382c488542d8b523e44319',
                        'date' => '2026-08-02 21:29',
                        'msg' => 'Update',
                    ],
                    [
                        'hash' => '2023a0df439f74ec8e221a01e0eb2f38e7b0620a',
                        'date' => '2026-08-02 21:57',
                        'msg' => 'Perbaikan activity log',
                    ],
                    [
                        'hash' => '62640722069c402f1afcd5f969b94e50b58585d4',
                        'date' => '2026-08-03 09:12',
                        'msg' => 'Menambahkan tombol tambah pada menu',
                    ],
                    [
                        'hash' => 'b133204c94200a96431f086666c04434e0f1487b',
                        'date' => '2026-08-03 12:06',
                        'msg' => 'Penambahan Skema dan Operasional penambahan menu di route appsupport/menu',
                    ],
                    [
                        'hash' => 'fe731294e07c474e1095595d7fea4e362a9b5a29',
                        'date' => '2026-08-03 12:28',
                        'msg' => 'Update Changelog',
                    ],
                    [
                        'hash' => '08cffdb8355c8071b5ebfc2beec7300d9d0e4747',
                        'date' => '2026-08-03 14:10',
                        'msg' => 'Update help skema pemograman operasional tambah menu via route',
                    ],
                    [
                        'hash' => '58d2dd79352271b1f175943709f44bacbd794313',
                        'date' => '2026-08-03 14:42',
                        'msg' => 'Perbaikan Profil Aplikasi',
                    ],
                    [
                        'hash' => '0da5edef903b84b0d13b24753b640629827e5771',
                        'date' => '2026-08-03 14:46',
                        'msg' => 'Perbaikan Ukuran Logo Sidebar',
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
                        'hash' => '756daf602831fbe116e5aade470df71d93cfa787',
                        'date' => '2026-08-02 20:56',
                        'msg' => 'Merpihkan tampilan halaman changelog',
                    ],
                    [
                        'hash' => '8147d876518dcadae85238ffb890b3d198608ca6',
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
                        'hash' => 'd3ba3f3bed1010504e1af134442b00d6c2935e74',
                        'date' => '2026-07-29 22:39',
                        'msg' => 'Tambahan Multi template Website',
                    ],
                    [
                        'hash' => '9ff612e54a2cf26cef795fddbdd03cf16080b88d',
                        'date' => '2026-07-29 22:54',
                        'msg' => 'Perbaikan/tambahan  kekurangan Multi Template',
                    ],
                    [
                        'hash' => '44a39e1a438c8fe9e192e28fa6faca0b6143839a',
                        'date' => '2026-07-29 22:55',
                        'msg' => 'Perbaikan/tambahan kekurangan Multi Template',
                    ],
                    [
                        'hash' => '0115cddfd0f5f6f18ba5cc449dd4485420599d91',
                        'date' => '2026-08-02 20:19',
                        'msg' => 'Perbaikan tombol di website features',
                    ],
                    [
                        'hash' => 'ed9d06f1516c9c5430207f16a4d13f2083062dfc',
                        'date' => '2026-08-02 20:37',
                        'msg' => 'Tambahan Menu Changelog',
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
                        'hash' => 'cda188cf065b071000e95666da8feb9c0d22e2d7',
                        'date' => '2026-07-29 19:52',
                        'msg' => 'Perbaikan Petunjuk Operasional Profil dan Fitur Website',
                    ],
                    [
                        'hash' => 'b2f0b98d44e06a9f7f6babbce5f8665a9402a7af',
                        'date' => '2026-07-29 21:25',
                        'msg' => 'Tambah halaman Page Content',
                    ],
                    [
                        'hash' => 'b9112af43c54ab1b47c376a366bb876efd4e2b4c',
                        'date' => '2026-07-29 21:54',
                        'msg' => 'Perbaikan dan tambahan fitur di route public',
                    ],
                    [
                        'hash' => '67205ec9d3b24b2c0288e38b5f84ecaff5b4821c',
                        'date' => '2026-07-29 21:58',
                        'msg' => 'Perbaikan seeder',
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
                        'hash' => '29df1d173bac867a2c4e236d85c41d8d53c9bc43',
                        'date' => '2026-07-29 14:36',
                        'msg' => 'Tambah halaman profil website',
                    ],
                    [
                        'hash' => '590aa01d30ec3df8f03fe05f4789eacadf4a66b2',
                        'date' => '2026-07-29 14:48',
                        'msg' => 'Implementasi nama aplikasi di title header html',
                    ],
                    [
                        'hash' => '6fce3798063695dd444174a4284f31d3fa486b07',
                        'date' => '2026-07-29 15:30',
                        'msg' => 'Tambah halaman fitur web site dan tambah sosial media di profil websiter',
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
                        'hash' => 'e18378e19fba0ca79b76da5fe6778ec63c498fb5',
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
                        'hash' => '178e6feede7c025d317eb71793e8bfe09d9d8490',
                        'date' => '2026-07-27 21:07',
                        'msg' => 'feat: add website data menu seeder and refactor education module to website (v1.0.2)',
                    ],
                    [
                        'hash' => 'b0e23f2f0279e3b94a53693375505dd7a3a99f6b',
                        'date' => '2026-07-27 22:56',
                        'msg' => 'tambah menu website data',
                    ],
                    [
                        'hash' => 'aed4fd22f83eddd994ec31ebbc0f2e4d65c56fbb',
                        'date' => '2026-07-27 23:05',
                        'msg' => 'tambah menu website data',
                    ],
                    [
                        'hash' => '975daf38f81aed0da05bee86679d2e385faf57de',
                        'date' => '2026-07-28 13:11',
                        'msg' => 'perbaikan menu',
                    ],
                    [
                        'hash' => 'c512f0c1db1f51592739f535e13a99759df6ea47',
                        'date' => '2026-07-28 13:53',
                        'msg' => 'Tambah Command Perintah Git',
                    ],
                    [
                        'hash' => 'c1f59d8cd665bd52c1fbef82075265c06b9889fb',
                        'date' => '2026-07-28 20:06',
                        'msg' => 'Perbikan GitManagerCommand',
                    ],
                    [
                        'hash' => '4addc99a58f1300c7d6ae1e5602731b7acb03775',
                        'date' => '2026-07-29 12:52',
                        'msg' => 'Perbaikan Tampilan Modul/Fitur Berurut Sesuai Tingkat Menu',
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
                        'hash' => '3d18a05cf75010eb5db09094c433db6105bc7189',
                        'date' => '2026-07-27 11:35',
                        'msg' => 'fix(docs): add explicit HTML anchors to README table of contents links',
                    ],
                    [
                        'hash' => '787e9223e8d748ea14d4de6230b97dbeede15fa0',
                        'date' => '2026-07-27 11:36',
                        'msg' => 'docs: add Back to Table of Contents buttons at the end of each section in README',
                    ],
                    [
                        'hash' => '21017d7c7348e54dd72ffa67403c0735b790cf55',
                        'date' => '2026-07-27 11:39',
                        'msg' => 'docs: add internal schema docs link to main README & review docs/skema-pemrograman/README.md',
                    ],
                    [
                        'hash' => '45dd6aa6497093896a3e45eb1b7ea7eb2e7b489e',
                        'date' => '2026-07-27 11:54',
                        'msg' => 'docs: add MVC architecture & view folder structure section to main README',
                    ],
                    [
                        'hash' => '5b9d8227a5c619b7cec9b763184495b82c8a2f2f',
                        'date' => '2026-07-27 11:57',
                        'msg' => 'docs: add Mermaid MVC architecture request flow diagram to README',
                    ],
                    [
                        'hash' => 'b2f85298a30c83684e3a28d366fa1d66adf948bc',
                        'date' => '2026-07-27 11:59',
                        'msg' => 'fix(docs): fix Mermaid syntax error by removing parentheses in edge labels',
                    ],
                    [
                        'hash' => '26de9d85143b63c03703b1167e479dbca491c4b5',
                        'date' => '2026-07-27 12:00',
                        'msg' => 'docs: add detailed step-by-step explanation for Mermaid MVC request flow diagram',
                    ],
                    [
                        'hash' => '1d7b43bcf103c6b13eb4b451558f3d78d2b53840',
                        'date' => '2026-07-27 12:02',
                        'msg' => 'docs: format Hierarki Folder Views ASCII tree and detailed explanations in README',
                    ],
                    [
                        'hash' => '665ee7715d386dd57b0df56421dab1cc908be3bb',
                        'date' => '2026-07-27 12:19',
                        'msg' => 'feat(security): add Lock Screen option to avatar dropdown & update README docs',
                    ],
                    [
                        'hash' => 'c0255d0e2c5fb2814efa8a3135283418bd33e022',
                        'date' => '2026-07-27 12:23',
                        'msg' => 'feat(security): implement interactive Lock Screen overlay modal with AJAX password verification',
                    ],
                    [
                        'hash' => 'e423233ce0b06600f39282175f849868aedb8d69',
                        'date' => '2026-07-27 12:26',
                        'msg' => 'fix(ui): use native Metronic data-kt-indicator for smooth lock screen button loading animation',
                    ],
                    [
                        'hash' => '92e77804ccb3832a1cd0e3956668385bc9c8f5eb',
                        'date' => '2026-07-27 12:28',
                        'msg' => 'docs(help): update Skema & Operasional Pemrograman views with Lock Screen overlay architecture',
                    ],
                    [
                        'hash' => '74b2ca35061cbe7796f1ad602ad1ab100b0384ba',
                        'date' => '2026-07-27 12:29',
                        'msg' => 'docs: add Version v1.0.1 badge to main README header',
                    ],
                    [
                        'hash' => '9eb1937140cfa0d5d59522342cb45a40a7127942',
                        'date' => '2026-07-27 12:31',
                        'msg' => 'docs: update Version badge URL to point to GitHub tags page',
                    ],
                    [
                        'hash' => '8640c0ec6fe75920c31011c40af597ec255d6264',
                        'date' => '2026-07-27 12:34',
                        'msg' => 'docs: add detailed Changelog section for v1.0.0 and v1.0.1 in README',
                    ],
                    [
                        'hash' => 'ee3fc7a2e267b669d5c88a091efc0f43915bcdad',
                        'date' => '2026-07-27 12:38',
                        'msg' => 'docs: move Changelog section right before Lisensi section in README',
                    ],
                    [
                        'hash' => 'cc5d9bbeb640e7a266bfe2e630b891fab5cfa813',
                        'date' => '2026-07-27 12:40',
                        'msg' => 'docs: remove GitHub Release guide and Topics setup sections from README',
                    ],
                    [
                        'hash' => '8406c28fa771af8b8bea68f4713147d69f2d861e',
                        'date' => '2026-07-27 12:47',
                        'msg' => 'docs: remove hardcoded version string from README description paragraph',
                    ],
                    [
                        'hash' => 'bd4c6a2f228fbe4cffa335ee4f4f7911b2f9a886',
                        'date' => '2026-07-27 12:55',
                        'msg' => 'feat(help): add Release & Git Tagging operational guide module and navigation configs',
                    ],
                    [
                        'hash' => '9bbb976230792773fdf8f107932dda7f647151e1',
                        'date' => '2026-07-27 12:59',
                        'msg' => 'style(help): remove icon tags from card headings in release guide & clean README badges',
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
                        'hash' => '7682a1338adb5aa1d68722657091a19f61c5f43d',
                        'date' => '2026-07-22 17:13',
                        'msg' => 'master-webadmin metronic laravel 12',
                    ],
                    [
                        'hash' => '25326fccee98d7934552b2c5995c64d6b2219bd8',
                        'date' => '2026-07-22 17:20',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '5b85610ef04151bb8a16da04a2e6c5664e3a8fd2',
                        'date' => '2026-07-22 17:22',
                        'msg' => 'perbaikan .env',
                    ],
                    [
                        'hash' => 'b5ca2977bec0a6512ea81c282fab6f7cef655a56',
                        'date' => '2026-07-22 17:34',
                        'msg' => 'perbaikan seeder',
                    ],
                    [
                        'hash' => '6a80f9e8ccb347eaee795117c27e11ad3020e94a',
                        'date' => '2026-07-22 20:29',
                        'msg' => 'tambah halaman profil pengguna',
                    ],
                    [
                        'hash' => '0a1c51cc0232717f58d63ce27e3d71062c2c33c7',
                        'date' => '2026-07-22 20:43',
                        'msg' => 'perbaikan overlad tanda error dengan eyes',
                    ],
                    [
                        'hash' => '0946493d58970c1d40c100f4a13474d1ee6166ab',
                        'date' => '2026-07-22 21:28',
                        'msg' => 'setting halaman profil-pengguna',
                    ],
                    [
                        'hash' => '30d7aed5b026fc77757ed412dda05b3bb0130201',
                        'date' => '2026-07-22 21:56',
                        'msg' => 'tambah content halaman menu',
                    ],
                    [
                        'hash' => '46332fb5f7e8d3804f221a833feef6d9967a8dbc',
                        'date' => '2026-07-22 23:22',
                        'msg' => 'tambah halaman app profil',
                    ],
                    [
                        'hash' => '1d7755ea7d4ac1bdb2245d609d7939ef04cca49f',
                        'date' => '2026-07-23 07:47',
                        'msg' => 'menambah seeder app profil',
                    ],
                    [
                        'hash' => 'a7a4cf79764f89ee62c52050959b4cfe2cea5606',
                        'date' => '2026-07-23 08:03',
                        'msg' => 'tambah halaman backup db',
                    ],
                    [
                        'hash' => '2b9f9ec0c97c19b618a6c93c79868e39d28cce3b',
                        'date' => '2026-07-23 08:23',
                        'msg' => 'melengkapi fungsi-fungsi di menu',
                    ],
                    [
                        'hash' => '360af1b1ac383ca96fee369cc5505a6f5195b896',
                        'date' => '2026-07-23 08:27',
                        'msg' => 'merubah halaman  appsupport/app-profil',
                    ],
                    [
                        'hash' => 'a47aef62167e9d38f85bf31d0a7f5df9871ecd18',
                        'date' => '2026-07-23 09:08',
                        'msg' => 'melengkapi halaman fitur aplikasi',
                    ],
                    [
                        'hash' => 'b2e77dc3301333efa0734d72d93a72305a21569b',
                        'date' => '2026-07-23 09:37',
                        'msg' => 'update halaman users/pengguna',
                    ],
                    [
                        'hash' => 'f1534b2d873a0ff95f112a52cdd2e4bb75077f9e',
                        'date' => '2026-07-23 09:45',
                        'msg' => 'update tampilan fitur',
                    ],
                    [
                        'hash' => 'e46a5e6909c13a8645ad5c756b153526f06c4d94',
                        'date' => '2026-07-23 10:24',
                        'msg' => 'tambahan poin login user',
                    ],
                    [
                        'hash' => 'f9054ebcc934fca41f24d80ab5878038f3518427',
                        'date' => '2026-07-23 11:01',
                        'msg' => 'tambahan point login user',
                    ],
                    [
                        'hash' => '2874759d412d1147d559acbde420f084921d55f3',
                        'date' => '2026-07-23 11:13',
                        'msg' => 'tambahan iddle dan logout otomatis',
                    ],
                    [
                        'hash' => '4a7169ae4ba4b67fc3eec1304e6b082344919f16',
                        'date' => '2026-07-23 11:37',
                        'msg' => 'tambahan data login',
                    ],
                    [
                        'hash' => '49528b58eb56a8c4fe6e54b66a0a6a3238231a17',
                        'date' => '2026-07-23 12:06',
                        'msg' => 'tambahan skema pemograman',
                    ],
                    [
                        'hash' => '3085d96dcbe35cfc337513cd6416108df719652c',
                        'date' => '2026-07-23 12:56',
                        'msg' => 'melengkapi halaman managemenpengguna',
                    ],
                    [
                        'hash' => '03c2e0aa0776f57f368710cf83b4a3ec223d4ce9',
                        'date' => '2026-07-23 13:04',
                        'msg' => 'tambah skema manajemen pengguna',
                    ],
                    [
                        'hash' => '31986d67a49317f9e1f0ff66a1c4cab7407b268c',
                        'date' => '2026-07-23 13:15',
                        'msg' => 'tambah upload massal user',
                    ],
                    [
                        'hash' => '322655f77883ac0a21673aee5a4a22a147120db7',
                        'date' => '2026-07-23 13:17',
                        'msg' => 'update perekaman waktu sesuai device',
                    ],
                    [
                        'hash' => 'f3ebf48f07712f393f5ea613547ae011bbe87c16',
                        'date' => '2026-07-23 13:45',
                        'msg' => 'membuat switch user',
                    ],
                    [
                        'hash' => '9f1176330fcfa3cc129eb26c73ab553154d1ddfd',
                        'date' => '2026-07-23 13:52',
                        'msg' => 'perbaikan di manajemenpengguna/roles',
                    ],
                    [
                        'hash' => '16f8e907364b4f9c5757e8f74aedcac448bdbd48',
                        'date' => '2026-07-23 14:33',
                        'msg' => 'perbaikan di notifikasi log',
                    ],
                    [
                        'hash' => 'fa09331921880fb80ca95b421e7823491e0fde50',
                        'date' => '2026-07-23 15:01',
                        'msg' => 'tambahan reset password',
                    ],
                    [
                        'hash' => '180c18f23dd915811bfc6599de0c5fa011b2dbcc',
                        'date' => '2026-07-23 15:27',
                        'msg' => 'perbaikan skema',
                    ],
                    [
                        'hash' => 'e3e1d4c190b0440cba29673b72d65aee927262e4',
                        'date' => '2026-07-23 15:36',
                        'msg' => 'perbaikan drop down avatar di user bagian kanan atas',
                    ],
                    [
                        'hash' => 'b2f7ddbdbde745a196311a68f5e71cc240058cf1',
                        'date' => '2026-07-23 15:54',
                        'msg' => 'tambahan register',
                    ],
                    [
                        'hash' => '608d0e481710c88061a4c2b0cf807ed8c085e6d4',
                        'date' => '2026-07-23 16:00',
                        'msg' => 'tambahan help register',
                    ],
                    [
                        'hash' => '0c2d56b38f0c66a6b4c71f724cc1ad9aa30ce46e',
                        'date' => '2026-07-23 16:26',
                        'msg' => 'perbaikan avatar, nama pengguna dan route menu',
                    ],
                    [
                        'hash' => 'b67bbb2f2eee42a23d7e7639da9cdb3c8e443dd9',
                        'date' => '2026-07-23 20:12',
                        'msg' => 'merapihkan operview',
                    ],
                    [
                        'hash' => 'f2a7c713dafad5c85023d266b53617bee6051560',
                        'date' => '2026-07-23 20:42',
                        'msg' => 'perbaikan app fitur dan reset password',
                    ],
                    [
                        'hash' => '000f778610c70c935dd7eff4c602f279177b4e0f',
                        'date' => '2026-07-23 20:55',
                        'msg' => 'perbaikan seeder',
                    ],
                    [
                        'hash' => '7f54328f7ad707309faf62816cc0e47b721ea28f',
                        'date' => '2026-07-23 20:58',
                        'msg' => 'perbaikan timer',
                    ],
                    [
                        'hash' => '8131ee34601417b1592e93b5418fa4168f0ad78b',
                        'date' => '2026-07-23 21:03',
                        'msg' => 'perbaikan seeder',
                    ],
                    [
                        'hash' => '6b44b1983e57a42ca87944b9ae03390cfcabf217',
                        'date' => '2026-07-23 21:07',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => 'e5757946e02e5c95a7f096ba5ba22dc38ef45272',
                        'date' => '2026-07-23 21:18',
                        'msg' => 'memindahkan bilingual',
                    ],
                    [
                        'hash' => '72727ad26ff629d83921cea9b12769c66bdbd77d',
                        'date' => '2026-07-23 21:39',
                        'msg' => 'tambahan widget di dashboard',
                    ],
                    [
                        'hash' => '7e0a1bce88afd339c3a8b4ab7a71f41b6e2b0d72',
                        'date' => '2026-07-23 21:51',
                        'msg' => 'perbaikan manajemen  pengguna',
                    ],
                    [
                        'hash' => 'f68c797dce6f3f0ccd6410a5e207c8b0aa3168c4',
                        'date' => '2026-07-23 22:37',
                        'msg' => 'perbaikan manajemen pengguna users',
                    ],
                    [
                        'hash' => '1b84590e3b961d89aa3c64881f62659f961c95ba',
                        'date' => '2026-07-23 22:49',
                        'msg' => 'perbaikan manajemen pengguna users',
                    ],
                    [
                        'hash' => 'd37d814699f8d5a9af1c5409f8020b780519f491',
                        'date' => '2026-07-23 22:56',
                        'msg' => 'tombol icon pakai tooltips',
                    ],
                    [
                        'hash' => 'a4130d1bb4a1e7707113f4a6fe9a83332c303a42',
                        'date' => '2026-07-23 23:04',
                        'msg' => 'perbaikan manajemen pengguna',
                    ],
                    [
                        'hash' => '6fffa403515bfc56348c4aec3fc125ef7fd5ca18',
                        'date' => '2026-07-23 23:50',
                        'msg' => 'perbaikan tampilan',
                    ],
                    [
                        'hash' => '41c80271bac6fe2211afcba64f31b4018f11fd67',
                        'date' => '2026-07-24 00:11',
                        'msg' => 'perbaikan tampilan',
                    ],
                    [
                        'hash' => 'cc9db3930a6a7f8c84c7dd9df6296e47cbba0a8e',
                        'date' => '2026-07-24 08:35',
                        'msg' => 'perbaikan dashboard',
                    ],
                    [
                        'hash' => 'ad7938ed2c533a01103159114da1e26eec03e1f5',
                        'date' => '2026-07-24 08:49',
                        'msg' => 'perbaikan notifikasi',
                    ],
                    [
                        'hash' => '18b806785856c836ae9b215e643ced1e42af87f7',
                        'date' => '2026-07-24 09:10',
                        'msg' => 'perbaikan permission',
                    ],
                    [
                        'hash' => 'ec68870c8cac1ef1a8785858424ef8b52af00559',
                        'date' => '2026-07-24 09:42',
                        'msg' => 'perbaikan help',
                    ],
                    [
                        'hash' => '49ed946ac7b46a89e692658f380696d377e260d2',
                        'date' => '2026-07-24 09:46',
                        'msg' => 'perbaikan help',
                    ],
                    [
                        'hash' => '23087c6b5a7a1ca58171730ad0015da12cea25a1',
                        'date' => '2026-07-24 09:53',
                        'msg' => 'perbaikan help',
                    ],
                    [
                        'hash' => 'f245f2ab8a92ce2b6387e3a0a3921c8bbdf9f0ee',
                        'date' => '2026-07-24 10:17',
                        'msg' => 'perbaikan help bilingual',
                    ],
                    [
                        'hash' => 'a1b65edd02d992798e15137e848d0361acc21490',
                        'date' => '2026-07-24 10:28',
                        'msg' => 'perbaikan help bilingual',
                    ],
                    [
                        'hash' => '2ca96b0326f4d4fdd9b786fb072b996135340d73',
                        'date' => '2026-07-24 10:32',
                        'msg' => 'update readme.md',
                    ],
                    [
                        'hash' => '5d4debfb9f393e889d7fe058ced9060d6929acf1',
                        'date' => '2026-07-24 10:36',
                        'msg' => 'update readme.md',
                    ],
                    [
                        'hash' => 'bbaf0b05b9ec53913cbd975d2a77f1cbab1f3df5',
                        'date' => '2026-07-24 10:39',
                        'msg' => 'update readme.md',
                    ],
                    [
                        'hash' => '358b117d65d2ba1d0befa5209d15ae56d8a5dbf9',
                        'date' => '2026-07-24 16:34',
                        'msg' => 'tambahan user detail dan pengamanan',
                    ],
                    [
                        'hash' => '3d41a304dc6d3e3101a5a501bbf3f3023d42e068',
                        'date' => '2026-07-24 16:42',
                        'msg' => 'perbaikan notifikasi',
                    ],
                    [
                        'hash' => 'db2e5441518df5b904fc196d3eea8f379310a125',
                        'date' => '2026-07-24 16:48',
                        'msg' => 'perbaikan notifikasi reset password',
                    ],
                    [
                        'hash' => 'b043a51d5b47456b7d4687ce99dbbd19e935366e',
                        'date' => '2026-07-24 16:52',
                        'msg' => 'perbaikan pengajuan akun baru',
                    ],
                    [
                        'hash' => '7a63fec8b9721af1487a0edcd3c934aecdbbe119',
                        'date' => '2026-07-24 22:46',
                        'msg' => 'perbaikan dan update help',
                    ],
                    [
                        'hash' => '702ca14d81ffd2f23f8ff6679dd989ec4bed4abc',
                        'date' => '2026-07-24 23:13',
                        'msg' => 'perbaikan dan update help',
                    ],
                    [
                        'hash' => 'b9cf876822d131e13c49ce4ff3492f5ce8440efd',
                        'date' => '2026-07-24 23:22',
                        'msg' => 'perbaikan dan update help',
                    ],
                    [
                        'hash' => '975b85f329f279081b171e36cdcac6168f19983d',
                        'date' => '2026-07-25 17:05',
                        'msg' => 'perbaikan tampilan help',
                    ],
                    [
                        'hash' => 'ecca40f752405a0f318e94d834a427b8097c20b6',
                        'date' => '2026-07-25 17:29',
                        'msg' => 'perbaikan tata letak file blade',
                    ],
                    [
                        'hash' => 'c2f12c7b8943a042f2eaeb24d332a29f9bb27b57',
                        'date' => '2026-07-25 17:38',
                        'msg' => 'perbaikan tata letak file',
                    ],
                    [
                        'hash' => '515c43abf1442f15ec52a9e29c3adbe844fd33ed',
                        'date' => '2026-07-25 17:53',
                        'msg' => 'perbaikan simpan avatar',
                    ],
                    [
                        'hash' => '1631e6318abff5561acdee8fc52792e62923878f',
                        'date' => '2026-07-25 17:56',
                        'msg' => 'hapus avatar',
                    ],
                    [
                        'hash' => '63c0a5e01ceb5133fcb3979881979124025a25c6',
                        'date' => '2026-07-25 18:06',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => 'cbbde539673e596cb8fac94bd713b0385704b923',
                        'date' => '2026-07-25 18:09',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => '3f9affe444737f62183f668e05f51ff7e4215fe5',
                        'date' => '2026-07-25 18:11',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => 'a127591e305cafa4d23cbd16b880a4a61983dac2',
                        'date' => '2026-07-25 18:17',
                        'msg' => 'perbaikan readme.md',
                    ],
                    [
                        'hash' => 'b494eba00d48f7ba9d698a23d27e848479f3ac80',
                        'date' => '2026-07-25 18:24',
                        'msg' => 'update',
                    ],
                    [
                        'hash' => 'e6d625e76eb3b5f10a707d3e7b1dda2bb99138ad',
                        'date' => '2026-07-25 18:28',
                        'msg' => 'update',
                    ],
                    [
                        'hash' => '611d2e2426d14e162d446603c48dcf066bfb4ec1',
                        'date' => '2026-07-26 14:20',
                        'msg' => 'perbaikan nama menu help',
                    ],
                    [
                        'hash' => '247e1eda03479d23761c3d97674851a1143500a9',
                        'date' => '2026-07-26 14:27',
                        'msg' => 'perbaikan halaman operasional',
                    ],
                    [
                        'hash' => '121afb6d1b9fff79efadb878579b4e0aff771a9e',
                        'date' => '2026-07-26 14:33',
                        'msg' => 'perbaikan bilingual menu',
                    ],
                    [
                        'hash' => '4e6290db984a8619eebec36d2af1402e79807b1d',
                        'date' => '2026-07-26 14:57',
                        'msg' => 'tambahan petunjuk',
                    ],
                    [
                        'hash' => '7a579e1e957b897fa206b3a012f85359be52cfdb',
                        'date' => '2026-07-26 15:10',
                        'msg' => 'petunjuk di halaman app support',
                    ],
                    [
                        'hash' => '4bb6e1a32409f2e2bbd55b56647ba11b3ff0ad56',
                        'date' => '2026-07-26 15:17',
                        'msg' => 'ganti bilingual di menu seeder',
                    ],
                    [
                        'hash' => '3cd6aa762e2d05afd1e8a766432fd0ef23e4c72d',
                        'date' => '2026-07-26 15:34',
                        'msg' => 'tambah halaman referensi',
                    ],
                    [
                        'hash' => '82f08397545461d16fac113d511e3fa47d730602',
                        'date' => '2026-07-26 15:38',
                        'msg' => 'tambah halaman referensi',
                    ],
                    [
                        'hash' => '2de54b7a23d79cccf72cfe82bb34b08567aa0eff',
                        'date' => '2026-07-26 15:43',
                        'msg' => 'memperbaiki atmpilam help-modal',
                    ],
                    [
                        'hash' => '31273224712324c50f77c23e3e6874694ef16d05',
                        'date' => '2026-07-26 15:54',
                        'msg' => 'perbaikan referensi',
                    ],
                    [
                        'hash' => '721650cfc33253237c08320235b964017065b782',
                        'date' => '2026-07-26 15:56',
                        'msg' => 'update',
                    ],
                    [
                        'hash' => 'b1f12296543c0ac44252c8d9cd0e89cf4758c0f4',
                        'date' => '2026-07-26 20:30',
                        'msg' => 'perbaikan profil pengguna',
                    ],
                    [
                        'hash' => '475789e2de50e2935e16d0f1f1861a84db65867a',
                        'date' => '2026-07-26 20:45',
                        'msg' => 'perbaikan dashboard',
                    ],
                    [
                        'hash' => '425b2efca07db144c8ad5ba8dd4aa1b984258fb0',
                        'date' => '2026-07-26 21:13',
                        'msg' => 'perbaikan register',
                    ],
                    [
                        'hash' => '6d40a3142691b52e42f4811f9da202047977e257',
                        'date' => '2026-07-26 21:16',
                        'msg' => 'perbaikan notifikasi keluar otomatis',
                    ],
                    [
                        'hash' => '9c6fd384f560c6891398ff16e904e6beb8448e9a',
                        'date' => '2026-07-26 21:30',
                        'msg' => 'perbaikan dashboard',
                    ],
                    [
                        'hash' => '258be61a2a5159246d56d6e53dfe773f2d0da168',
                        'date' => '2026-07-26 22:09',
                        'msg' => 'perbaikan akses user dan help',
                    ],
                    [
                        'hash' => '61c08d513b7974885a6998dc682b7136a3eaee7b',
                        'date' => '2026-07-26 23:18',
                        'msg' => 'perbaikan users',
                    ],
                    [
                        'hash' => '315e2eeccdeb13921f692e726709fd6407192be8',
                        'date' => '2026-07-27 07:32',
                        'msg' => 'perbaikan akses-user dan role',
                    ],
                    [
                        'hash' => 'f6f12075d823e38a39dbcab4e5eec4064287d676',
                        'date' => '2026-07-27 09:32',
                        'msg' => 'tambahan overviews help',
                    ],
                    [
                        'hash' => '4accfae34dd9f2018654d8ea171b0fb290b2593f',
                        'date' => '2026-07-27 11:12',
                        'msg' => 'tambahan log activity',
                    ],
                    [
                        'hash' => '8a067547201690fc3e95042abc4d8b84ada99163',
                        'date' => '2026-07-27 11:21',
                        'msg' => 'tambahan throttle',
                    ],
                    [
                        'hash' => '30a6b46d24b5f335323ab09f1c3afd7bdb07c041',
                        'date' => '2026-07-27 11:26',
                        'msg' => 'update overview help',
                    ],
                    [
                        'hash' => '0fdec635ed29a29d69a1225d859edcb0a7e26537',
                        'date' => '2026-07-27 11:31',
                        'msg' => 'docs: update README with development checklist roadmap & release guide',
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
