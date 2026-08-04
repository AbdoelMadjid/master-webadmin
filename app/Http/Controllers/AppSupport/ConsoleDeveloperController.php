<?php

namespace App\Http\Controllers\AppSupport;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppSupport\ConsoleDeveloperRequest;
use App\Models\AppSupport\ConsoleDeveloper;
use Illuminate\Http\Request;

class ConsoleDeveloperController extends Controller
{
    /**
     * Display the Console Developer page with sub-tabs.
     */
    public function index(Request $request)
    {
        $validTabs = ['git-manager', 'setup-maintenance', 'crud-generator', 'file-utilities'];
        $activeTab = $request->query('tab', 'git-manager');

        if (!in_array($activeTab, $validTabs, true)) {
            $activeTab = 'git-manager';
        }

        $systemInfo = ConsoleDeveloper::getSystemInfo();
        $gitSummary = ConsoleDeveloper::getGitSummary();
        $gitBranches = ConsoleDeveloper::getGitBranches();
        $gitLogs = ConsoleDeveloper::getGitLogs(10);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success'     => true,
                'active_tab'  => $activeTab,
                'system_info' => $systemInfo,
                'git_summary' => $gitSummary,
                'git_branches' => $gitBranches,
                'git_logs'    => $gitLogs,
            ]);
        }

        return view('pages.appsupport.console-developer', compact(
            'activeTab',
            'systemInfo',
            'gitSummary',
            'gitBranches',
            'gitLogs'
        ));
    }

    /**
     * Execute Git action via AJAX.
     */
    public function gitAction(ConsoleDeveloperRequest $request)
    {
        try {
            $action = $request->input('action');
            $params = $request->only(['commit_message', 'tag_name', 'branch_name']);

            $result = ConsoleDeveloper::runGitAction($action, $params);

            return response()->json([
                'success' => $result['success'],
                'message' => $result['action'] ?? 'Aksi Git Selesai',
                'command' => $result['command'] ?? '',
                'output'  => $result['output'] ?? '',
            ], $result['success'] ? 200 : 500);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengeksekusi aksi Git: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Execute Maintenance action via AJAX.
     */
    public function maintenance(ConsoleDeveloperRequest $request)
    {
        try {
            $action = $request->input('action');
            $result = ConsoleDeveloper::runMaintenanceAction($action);

            return response()->json([
                'success' => $result['success'],
                'message' => 'Aksi Maintenance Selesai',
                'output'  => $result['output'],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengeksekusi maintenance: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Execute Component/CRUD Generator via AJAX.
     */
    public function generator(ConsoleDeveloperRequest $request)
    {
        try {
            $subfolder = $request->input('subfolder');
            $feature   = $request->input('feature');
            $genType   = $request->input('generator_type');

            $result = ConsoleDeveloper::generateCrudComponent($subfolder, $feature, $genType);

            return response()->json([
                'success' => true,
                'message' => "Komponen {$result['feature']} pada folder {$result['subfolder']} berhasil dibuat!",
                'results' => $result['results'],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal generate komponen: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Execute File Utility action via AJAX.
     */
    public function fileUtility(ConsoleDeveloperRequest $request)
    {
        try {
            $type = $request->input('utility_type');
            $targetPath = $request->input('target_path');
            $prefix = $request->input('prefix');

            $result = ConsoleDeveloper::runFileUtility($type, $targetPath, $prefix);

            return response()->json([
                'success' => $result['success'],
                'message' => $result['output'] ? 'Proses Utilitas File Selesai' : 'Tidak ada perubahan',
                'output'  => $result['output'],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memproses utilitas file: ' . $e->getMessage(),
            ], 500);
        }
    }
}
