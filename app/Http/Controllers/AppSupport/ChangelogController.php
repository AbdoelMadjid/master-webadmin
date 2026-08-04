<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\Changelog;
use App\Http\Requests\AppSupport\ChangelogRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ChangelogController extends Controller
{
    /**
     * Display the application changelog and git push release history.
     */
    public function index(Request $request)
    {
        $validTabs = ['timeline', 'git-log', 'version-summary'];
        $activeTab = $request->query('tab', 'timeline');

        if (!in_array($activeTab, $validTabs, true)) {
            $activeTab = 'timeline';
        }

        $rawVersions = Changelog::getVersions();
        $commits = Changelog::getLiveGitLog();

        // Fetch DB models if table exists so we have IDs for edit/delete
        $dbVersions = Changelog::query()->orderBy('date', 'desc')->orderBy('id', 'desc')->get()->keyBy('version');

        $versions = array_map(function ($v) use ($dbVersions) {
            $v['id'] = isset($dbVersions[$v['version']]) ? $dbVersions[$v['version']]->id : null;
            return $v;
        }, $rawVersions);

        $totalVersions = count($versions);
        $totalCommits = count($commits);
        $latestVersion = !empty($versions) ? $versions[0]['version'] : 'v1.0.0';
        $latestDate = !empty($versions) ? $versions[0]['date'] : date('Y-m-d');

        return view('pages.appsupport.changelog', compact(
            'activeTab',
            'versions',
            'commits',
            'totalVersions',
            'totalCommits',
            'latestVersion',
            'latestDate'
        ));
    }

    /**
     * Store a newly created version release in database.
     */
    public function store(ChangelogRequest $request): JsonResponse
    {
        $data = $request->validated();
        $this->parseRawArrays($data);

        $highlights = $data['highlights'] ?? [];
        $commits = $data['commits'] ?? [];
        unset($data['highlights'], $data['commits'], $data['highlights_raw'], $data['commits_raw']);

        $changelog = DB::transaction(function () use ($data, $highlights, $commits) {
            $changelog = Changelog::create($data);

            if (!empty($highlights)) {
                $changelog->highlights()->createMany($highlights);
            }

            if (!empty($commits)) {
                $changelog->commits()->createMany($commits);
            }

            return $changelog;
        });

        Changelog::exportToStaticDataset();

        return response()->json([
            'success' => true,
            'message' => 'Catatan versi rilis ' . $changelog->version . ' berhasil ditambahkan!',
            'data'    => $changelog->load(['highlights', 'commits'])
        ]);
    }

    /**
     * Update specified version release in database.
     */
    public function update(ChangelogRequest $request, $id): JsonResponse
    {
        $changelog = Changelog::findOrFail($id);
        $data = $request->validated();
        $this->parseRawArrays($data);

        $highlights = $data['highlights'] ?? [];
        $commits = $data['commits'] ?? [];
        unset($data['highlights'], $data['commits'], $data['highlights_raw'], $data['commits_raw']);

        DB::transaction(function () use ($changelog, $data, $highlights, $commits) {
            $changelog->update($data);

            $changelog->highlights()->delete();
            if (!empty($highlights)) {
                $changelog->highlights()->createMany($highlights);
            }

            $changelog->commits()->delete();
            if (!empty($commits)) {
                $changelog->commits()->createMany($commits);
            }
        });

        Changelog::exportToStaticDataset();

        return response()->json([
            'success' => true,
            'message' => 'Catatan versi rilis ' . $changelog->version . ' berhasil diperbarui!',
            'data'    => $changelog->load(['highlights', 'commits'])
        ]);
    }

    /**
     * Parse raw text lines for highlights and commits.
     */
    private function parseRawArrays(array &$data): void
    {
        $data['author'] = $data['author'] ?: 'Developer Team';
        $data['title_id'] = $data['title_id'] ?: $data['title'];
        $data['description_id'] = $data['description_id'] ?: $data['description'];

        if (!empty($data['highlights_raw'])) {
            $lines = array_filter(explode("\n", str_replace("\r", "", $data['highlights_raw'])));
            $highlights = [];
            foreach ($lines as $line) {
                $parts = array_map('trim', explode('|', $line, 2));
                if (count($parts) === 2) {
                    $highlights[] = ['type' => 'feat', 'label' => $parts[0], 'desc' => $parts[1]];
                } else if (count($parts) === 1 && $parts[0] !== '') {
                    $highlights[] = ['type' => 'feat', 'label' => 'Feature', 'desc' => $parts[0]];
                }
            }
            $data['highlights'] = $highlights;
        } elseif (isset($data['highlights']) && is_array($data['highlights'])) {
            $cleanHl = [];
            foreach ($data['highlights'] as $hl) {
                if (is_array($hl) && (!empty($hl['label']) || !empty($hl['desc']))) {
                    $cleanHl[] = [
                        'type'  => $hl['type'] ?? 'feat',
                        'label' => trim($hl['label'] ?? 'Feature'),
                        'desc'  => trim($hl['desc'] ?? ''),
                    ];
                }
            }
            $data['highlights'] = $cleanHl;
        } else {
            $data['highlights'] = $data['highlights'] ?? [];
        }

        if (!empty($data['commits_raw'])) {
            $lines = array_filter(explode("\n", str_replace("\r", "", $data['commits_raw'])));
            $commits = [];
            foreach ($lines as $line) {
                $parts = array_map('trim', explode('|', $line, 3));
                if (count($parts) === 3) {
                    $commits[] = ['hash' => $parts[0], 'date' => $parts[1], 'msg' => $parts[2]];
                } else if (count($parts) === 2) {
                    $commits[] = ['hash' => $parts[0], 'date' => date('Y-m-d H:i'), 'msg' => $parts[1]];
                } else if (count($parts) === 1 && $parts[0] !== '') {
                    $commits[] = ['hash' => 'HEAD', 'date' => date('Y-m-d H:i'), 'msg' => $parts[0]];
                }
            }
            $data['commits'] = $commits;
        } elseif (isset($data['commits']) && is_array($data['commits'])) {
            $cleanCm = [];
            foreach ($data['commits'] as $cm) {
                if (is_array($cm) && (!empty($cm['hash']) || !empty($cm['msg']))) {
                    $cleanCm[] = [
                        'hash' => trim($cm['hash'] ?? 'HEAD'),
                        'date' => trim($cm['date'] ?? date('Y-m-d H:i')),
                        'msg'  => trim($cm['msg'] ?? ''),
                    ];
                }
            }
            $data['commits'] = $cleanCm;
        } else {
            $data['commits'] = $data['commits'] ?? [];
        }
    }

    /**
     * Fetch real-time Git commit log history and optional sync to database for active version.
     */
    public function liveCommits(Request $request): JsonResponse
    {
        $changelogId = $request->query('changelog_id') ?: $request->query('id');
        $version = $request->query('version');

        if ($changelogId && !$version) {
            $changelog = Changelog::find($changelogId);
            if ($changelog) {
                $version = $changelog->version;
            }
        }

        $commits = Changelog::getLiveGitLog($version);

        if ($changelogId) {
            $changelog = Changelog::find($changelogId);
            if ($changelog) {
                DB::transaction(function () use ($changelog, $commits) {
                    $changelog->commits()->delete();
                    foreach ($commits as $cm) {
                        $changelog->commits()->create([
                            'hash' => $cm['hash'] ?? 'HEAD',
                            'date' => $cm['date'] ?? date('Y-m-d H:i'),
                            'msg'  => $cm['message'] ?? ($cm['msg'] ?? ''),
                        ]);
                    }
                });

                Changelog::exportToStaticDataset();
            }
        }

        $verLabel = $version ? " versi {$version}" : "";

        return response()->json([
            'success' => true,
            'commits' => $commits,
            'message' => $changelogId ? "Log commit Git{$verLabel} berhasil disinkronkan dan disimpan ke database!" : "Log commit Git{$verLabel} berhasil ditarik!"
        ]);
    }

    /**
     * Remove specified version release from database.
     */
    public function destroy($id): JsonResponse
    {
        $changelog = Changelog::findOrFail($id);
        $ver = $changelog->version;
        $changelog->delete();

        Changelog::exportToStaticDataset();

        return response()->json([
            'success' => true,
            'message' => 'Catatan versi rilis ' . $ver . ' berhasil dihapus dari database!'
        ]);
    }
}
