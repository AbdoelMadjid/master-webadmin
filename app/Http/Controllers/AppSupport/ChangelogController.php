<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\Changelog;
use App\Http\Requests\AppSupport\ChangelogRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

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

        $changelog = Changelog::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Catatan versi rilis ' . $changelog->version . ' berhasil ditambahkan!',
            'data'    => $changelog
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

        $changelog->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Catatan versi rilis ' . $changelog->version . ' berhasil diperbarui!',
            'data'    => $changelog
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
        }
    }

    /**
     * Remove specified version release from database.
     */
    public function destroy($id): JsonResponse
    {
        $changelog = Changelog::findOrFail($id);
        $ver = $changelog->version;
        $changelog->delete();

        return response()->json([
            'success' => true,
            'message' => 'Catatan versi rilis ' . $ver . ' berhasil dihapus dari database!'
        ]);
    }
}
