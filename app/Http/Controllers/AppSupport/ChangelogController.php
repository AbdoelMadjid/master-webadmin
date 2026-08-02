<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Models\AppSupport\Changelog;
use Illuminate\Http\Request;

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

        $versions = Changelog::getVersions();
        $commits = Changelog::getLiveGitLog();

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
}
