<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class ConsoleDeveloper extends Model
{
    /**
     * Get system environment & diagnostic info.
     */
    public static function getSystemInfo(): array
    {
        $dbConnected = false;
        $dbName = config('database.connections.mysql.database', 'master-webadmin');
        $dbDriver = config('database.default', 'mysql');
        $dbVersion = 'Unknown';
        try {
            \Illuminate\Support\Facades\DB::connection()->getPdo();
            $dbConnected = true;
            $dbVersionResult = \Illuminate\Support\Facades\DB::select('SELECT VERSION() as ver');
            $dbVersion = $dbVersionResult[0]->ver ?? 'MySQL';
        } catch (\Exception $e) {
            $dbConnected = false;
        }

        $storageLinked = File::exists(public_path('storage'));

        return [
            'php_version'    => PHP_VERSION,
            'laravel_version' => app()->version(),
            'environment'    => config('app.env'),
            'debug_mode'     => config('app.debug') ? 'ENABLED' : 'DISABLED',
            'os'             => PHP_OS_FAMILY . ' (' . php_uname('s') . ' ' . php_uname('r') . ')',
            'server_software' => $_SERVER['SERVER_SOFTWARE'] ?? 'PHP CLI / Dev Server',
            'timezone'       => config('app.timezone'),
            'memory_limit'   => ini_get('memory_limit'),
            'max_exec_time'  => ini_get('max_execution_time') . 's',
            'current_branch' => self::getCurrentBranch(),
            'db_connected'   => $dbConnected,
            'db_name'        => $dbName,
            'db_driver'      => strtoupper($dbDriver),
            'db_version'     => $dbVersion,
            'storage_linked' => $storageLinked,
        ];
    }

    /**
     * Get current Git branch name.
     */
    public static function getCurrentBranch(): string
    {
        $branch = trim((string) shell_exec('git rev-parse --abbrev-ref HEAD 2>&1'));
        return $branch ?: 'main';
    }

    /**
     * Get detailed Git status summary.
     */
    public static function getGitSummary(): array
    {
        $branch = self::getCurrentBranch();
        $remoteUrl = trim((string) shell_exec('git config --get remote.origin.url 2>&1'));
        $lastCommit = trim((string) shell_exec('git log -1 --format="%h - %s (%cr) <%an>" 2>&1'));
        $statusRaw = trim((string) shell_exec('git status -s 2>&1'));
        $tagsRaw = trim((string) shell_exec('git tag 2>&1'));

        $tags = array_values(array_filter(explode("\n", str_replace("\r", "", $tagsRaw))));
        rsort($tags);

        $changedFilesCount = empty($statusRaw) ? 0 : count(explode("\n", str_replace("\r", "", $statusRaw)));

        return [
            'branch'             => $branch,
            'remote_url'         => $remoteUrl,
            'last_commit'        => $lastCommit,
            'changed_files_count' => $changedFilesCount,
            'has_changes'        => $changedFilesCount > 0,
            'tags'               => $tags,
            'latest_tag'         => $tags[0] ?? 'N/A',
        ];
    }

    /**
     * Get list of local and remote branches.
     */
    public static function getGitBranches(): array
    {
        $localRaw = trim((string) shell_exec('git branch 2>&1'));
        $remoteRaw = trim((string) shell_exec('git branch -r 2>&1'));

        $locals = array_values(array_filter(array_map('trim', explode("\n", str_replace("\r", "", $localRaw)))));
        $remotes = array_values(array_filter(array_map('trim', explode("\n", str_replace("\r", "", $remoteRaw)))));

        return [
            'local'  => $locals,
            'remote' => $remotes,
        ];
    }

    /**
     * Get recent Git commits log.
     */
    public static function getGitLogs(int $limit = 10): array
    {
        $raw = trim((string) shell_exec("git log --oneline -{$limit} 2>&1"));
        if (empty($raw)) {
            return [];
        }

        $lines = explode("\n", str_replace("\r", "", $raw));
        $logs = [];

        foreach ($lines as $line) {
            $parts = explode(' ', trim($line), 2);
            if (count($parts) === 2) {
                $logs[] = [
                    'hash'    => $parts[0],
                    'message' => $parts[1],
                ];
            }
        }

        return $logs;
    }

    private static function runProcess(array $command, ?string $cwd = null): array
    {
        $descriptors = [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w'],
        ];

        $resolvedCwd = $cwd ?: (function_exists('getcwd') && getcwd() !== false ? getcwd() : dirname(__DIR__, 3));
        $process = proc_open($command, $descriptors, $pipes, $resolvedCwd);

        if (!is_resource($process)) {
            return [
                'success' => false,
                'output' => 'Gagal memulai proses command.',
                'exitCode' => 1,
            ];
        }

        fclose($pipes[0]);
        $stdout = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[2]);
        $exitCode = proc_close($process);

        return [
            'success' => $exitCode === 0,
            'output' => trim($stdout . ($stderr !== '' ? "\n" . $stderr : '')),
            'exitCode' => $exitCode,
        ];
    }

    private static function runGitProcess(array $command): array
    {
        return self::runProcess(array_merge(['git'], $command));
    }

    /**
     * Execute Git action safely and capture output.
     */
    public static function runGitAction(string $action, array $params = []): array
    {
        $command = '';
        $message = '';

        switch ($action) {
            case 'status':
                $command = 'git status';
                $output = trim((string) shell_exec('git status 2>&1'));
                $message = 'Git Status';
                break;
            case 'pull':
                $command = 'git pull';
                $output = trim((string) shell_exec('git pull 2>&1'));
                $message = 'Git Pull';
                break;
            case 'push':
                $command = 'git push';
                $output = trim((string) shell_exec('git push 2>&1'));
                $message = 'Git Push';
                break;
            case 'commit_push':
                $commitMessage = trim((string) ($params['commit_message'] ?? 'Update'));
                $gitAdd = self::runGitProcess(['add', '.']);
                $gitCommit = self::runGitProcess(['commit', '-m', $commitMessage]);
                $gitPush = self::runGitProcess(['push']);
                $command = "git add . \ngit commit -m {$commitMessage} \ngit push";
                $output = "--- GIT ADD ---\n" . ($gitAdd['output'] ?: 'OK') . "\n\n--- GIT COMMIT ---\n" . ($gitCommit['output'] ?: 'OK') . "\n\n--- GIT PUSH ---\n" . ($gitPush['output'] ?: 'OK');
                $message = 'Git Commit & Push';
                $success = $gitAdd['success'] && $gitCommit['success'] && $gitPush['success'];
                break;
            case 'create_tag':
                $tag = escapeshellarg($params['tag_name'] ?? '');
                $o1 = shell_exec("git tag {$tag} 2>&1");
                $o2 = shell_exec("git push origin {$tag} 2>&1");
                $command = "git tag {$tag} \ngit push origin {$tag}";
                $output = "--- CREATE TAG ---\n" . ($o1 ?: 'OK') . "\n\n--- PUSH TAG ---\n" . ($o2 ?: 'OK');
                $message = "Release Baru Tag {$params['tag_name']}";
                break;
            case 'force_tag':
                $tag = escapeshellarg($params['tag_name'] ?? '');
                $o1 = shell_exec("git tag -f {$tag} 2>&1");
                $o2 = shell_exec("git push --force origin {$tag} 2>&1");
                $command = "git tag -f {$tag} \ngit push --force origin {$tag}";
                $output = "--- FORCE TAG ---\n" . ($o1 ?: 'OK') . "\n\n--- PUSH FORCE TAG ---\n" . ($o2 ?: 'OK');
                $message = "Update Release Tag (Force Tag) {$params['tag_name']}";
                break;
            case 'view_tags':
                $command = 'git fetch --tags & git tag';
                $o1 = shell_exec('git fetch --tags 2>&1');
                $o2 = shell_exec('git tag 2>&1');
                $output = "--- TAGS LIST ---\n" . ($o2 ?: $o1);
                $message = 'Daftar Tag Release';
                break;
            case 'delete_tag':
                $tag = escapeshellarg($params['tag_name'] ?? '');
                $o1 = shell_exec("git tag -d {$tag} 2>&1");
                $o2 = shell_exec("git push origin :refs/tags/{$tag} 2>&1");
                $command = "git tag -d {$tag} \ngit push origin :refs/tags/{$tag}";
                $output = "--- DELETE TAG ---\n" . ($o1 ?: 'OK') . "\n\n--- PUSH DELETE REMOTE TAG ---\n" . ($o2 ?: 'OK');
                $message = "Hapus Tag Release {$params['tag_name']}";
                break;
            case 'reset_local':
                $o1 = shell_exec('git reset --hard 2>&1');
                $o2 = shell_exec('git clean -fd 2>&1');
                $command = "git reset --hard \ngit clean -fd";
                $output = "--- GIT RESET ---\n" . ($o1 ?: 'OK') . "\n\n--- GIT CLEAN ---\n" . ($o2 ?: 'OK');
                $message = 'Reset Perubahan Lokal';
                break;
            case 'sync_origin':
                $branch = self::getCurrentBranch();
                $o1 = shell_exec('git fetch origin 2>&1');
                $o2 = shell_exec("git reset --hard origin/{$branch} 2>&1");
                $o3 = shell_exec('git clean -fd 2>&1');
                $command = "git fetch origin \ngit reset --hard origin/{$branch} \ngit clean -fd";
                $output = "--- FETCH ORIGIN ---\n" . ($o1 ?: 'OK') . "\n\n--- RESET ORIGIN ---\n" . ($o2 ?: 'OK') . "\n\n--- CLEAN ---\n" . ($o3 ?: 'OK');
                $message = "Sync Ulang dari origin/{$branch}";
                break;
            case 'switch_branch':
                $targetBranch = escapeshellarg($params['branch_name'] ?? 'main');
                $command = "git checkout {$targetBranch}";
                $output = trim((string) shell_exec("git checkout {$targetBranch} 2>&1"));
                $message = "Ganti Branch ke {$params['branch_name']}";
                break;
            case 'list_branches':
                $command = 'git branch -a';
                $output = trim((string) shell_exec('git branch -a 2>&1'));
                $message = 'Daftar Branch Lokal & Remote';
                break;
            case 'log':
                $command = 'git log --oneline -10';
                $output = trim((string) shell_exec('git log --oneline -10 2>&1'));
                $message = 'Git Log 10 Commit Terakhir';
                break;
            case 'auto_release':
                $branch = self::getCurrentBranch();
                $commitMsg = escapeshellarg($params['commit_message'] ?? "Auto release {$branch}");
                $tag = escapeshellarg($params['tag_name'] ?? '');
                $o1 = shell_exec('git add . 2>&1');
                $o2 = shell_exec("git commit -m {$commitMsg} 2>&1");
                $o3 = shell_exec("git push origin {$branch} 2>&1");
                $o4 = shell_exec("git tag {$tag} 2>&1");
                $o5 = shell_exec("git push origin {$tag} 2>&1");
                $command = "git add . \ngit commit -m {$commitMsg} \ngit push origin {$branch} \ngit tag {$tag} \ngit push origin {$tag}";
                $output = "--- GIT ADD ---\n" . ($o1 ?: 'OK') . "\n\n--- GIT COMMIT ---\n" . ($o2 ?: 'OK') . "\n\n--- GIT PUSH ---\n" . ($o3 ?: 'OK') . "\n\n--- TAG ---\n" . ($o4 ?: 'OK') . "\n\n--- PUSH TAG ---\n" . ($o5 ?: 'OK');
                $message = "Auto Release Versi {$params['tag_name']}";
                break;
            case 'fetch_all':
                $command = 'git fetch --all --prune';
                $output = trim((string) shell_exec('git fetch --all --prune 2>&1'));
                $message = 'Git Fetch Remote All';
                break;
            case 'git_diff':
                $command = 'git diff --stat';
                $output = trim((string) shell_exec('git diff --stat 2>&1'));
                $message = 'Git Diff Summary';
                break;
            default:
                return ['success' => false, 'output' => 'Perintah Git tidak dikenal.', 'action' => $action];
        }

        if (!isset($output) || $output === '') {
            $output = trim((string) shell_exec($command . ' 2>&1'));
        }

        return [
            'success' => $success ?? true,
            'action'  => $message,
            'command' => $command,
            'output'  => $output ?: 'Perintah berhasil dieksekusi tanpa output.',
        ];
    }

    /**
     * Run setup & maintenance tasks.
     */
    public static function runMaintenanceAction(string $type): array
    {
        $output = '';

        switch ($type) {
            case 'clear_cache':
                Artisan::call('optimize:clear');
                $output = Artisan::output();
                break;

            case 'optimize':
                Artisan::call('optimize');
                $output = Artisan::output();
                break;

            case 'storage_link':
                Artisan::call('storage:link');
                $output = Artisan::output();
                break;

            case 'seed_menu':
                Artisan::call('db:seed', ['--class' => 'MenuSeeder', '--force' => true]);
                $output = Artisan::output() ?: "Perintah php artisan db:seed MenuSeeder berhasil dieksekusi.";
                break;

            case 'changelog_export':
                Artisan::call('changelog:export');
                $output = Artisan::output() ?: "Perintah php artisan changelog:export berhasil dieksekusi.";
                break;

            case 'migrate_fresh_seed':
                Artisan::call('migrate:fresh', ['--seed' => true, '--force' => true]);
                $output = Artisan::output() ?: "Perintah php artisan migrate:fresh --seed berhasil dieksekusi.";
                break;

            case 'migrate':
                Artisan::call('migrate', ['--force' => true]);
                $output = Artisan::output() ?: "Perintah php artisan migrate berhasil dieksekusi.";
                break;

            default:
                return ['success' => false, 'output' => 'Tipe maintenance tidak valid.'];
        }

        return [
            'success' => true,
            'output'  => $output ?: 'Tugas maintenance selesai.',
        ];
    }

    /**
     * Generate AGENTS.md compliant CRUD components or single components.
     */
    public static function generateCrudComponent(string $subfolderRaw, string $featureRaw, string $generatorType): array
    {
        $subfolderStudly = Str::studly($subfolderRaw);
        $featureStudly   = Str::studly($featureRaw);
        $subfolderKebab  = Str::kebab($subfolderRaw);
        $featureKebab    = Str::kebab($featureRaw);
        $subfolderSnake  = Str::snake($subfolderRaw);
        $featureSnake    = Str::snake($featureRaw);

        $results = [];

        if (in_array($generatorType, ['full', 'model'], true)) {
            $tableName = Str::snake(Str::plural($featureStudly));
            $results[] = self::makeModelFile($subfolderStudly, $featureStudly, $tableName);
        }

        if (in_array($generatorType, ['full', 'controller'], true)) {
            $results[] = self::makeControllerFile($subfolderStudly, $featureStudly, $subfolderKebab, $featureKebab);
        }

        if (in_array($generatorType, ['full', 'request'], true)) {
            $results[] = self::makeRequestFile($subfolderStudly, $featureStudly);
        }

        if (in_array($generatorType, ['full', 'blade'], true)) {
            $results[] = self::makeBladeFiles($subfolderKebab, $featureKebab, $subfolderSnake, $featureSnake);
        }

        return [
            'success'   => true,
            'subfolder' => $subfolderStudly,
            'feature'   => $featureStudly,
            'results'   => $results,
        ];
    }

    /**
     * File Utilities: Add/Remove Prefix, HTML to Blade rename.
     */
    public static function runFileUtility(string $type, string $targetPath, ?string $prefix = null): array
    {
        $fullPath = base_path($targetPath);

        if (!File::isDirectory($fullPath)) {
            return ['success' => false, 'output' => "Folder target tidak ditemukan: {$targetPath}"];
        }

        $count = 0;
        $logs = [];

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($fullPath)
        );

        foreach ($iterator as $file) {
            if (!$file->isFile()) {
                continue;
            }

            $filename = $file->getFilename();

            if ($type === 'add_prefix' && $prefix) {
                if (str_starts_with($filename, $prefix)) {
                    continue;
                }
                $oldPath = $file->getPathname();
                $newName = $prefix . $filename;
                $newPath = $file->getPath() . DIRECTORY_SEPARATOR . $newName;

                if (rename($oldPath, $newPath)) {
                    $logs[] = "Renamed: {$filename} -> {$newName}";
                    $count++;
                }
            } elseif ($type === 'remove_prefix' && $prefix) {
                if (str_starts_with($filename, $prefix)) {
                    $oldPath = $file->getPathname();
                    $newName = substr($filename, strlen($prefix));
                    $newPath = $file->getPath() . DIRECTORY_SEPARATOR . $newName;

                    if (rename($oldPath, $newPath)) {
                        $logs[] = "Removed prefix: {$filename} -> {$newName}";
                        $count++;
                    }
                }
            } elseif ($type === 'html_to_blade') {
                if (str_ends_with($filename, '.html')) {
                    $oldPath = $file->getPathname();
                    $newName = substr($filename, 0, -5) . '.blade.php';
                    $newPath = $file->getPath() . DIRECTORY_SEPARATOR . $newName;

                    if (rename($oldPath, $newPath)) {
                        $logs[] = "Converted: {$filename} -> {$newName}";
                        $count++;
                    }
                }
            }
        }

        return [
            'success' => true,
            'count'   => $count,
            'output'  => implode("\n", $logs) ?: "Tidak ada file yang diubah pada folder {$targetPath}.",
        ];
    }

    // Private Generators Helpers
    private static function makeModelFile(string $subfolder, string $feature, string $table): string
    {
        $dir = app_path("Models/{$subfolder}");
        File::ensureDirectoryExists($dir);
        $file = "{$dir}/{$feature}.php";

        if (File::exists($file)) {
            return "Skipped (Exists): Model {$subfolder}/{$feature}.php";
        }

        $code = <<<PHP
<?php

namespace App\Models\\{$subfolder};

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class {$feature} extends Model
{
    use HasFactory;

    protected \$table = '{$table}';

    protected \$guarded = ['id'];
}
PHP;
        File::put($file, $code);
        return "Created: Model App/Models/{$subfolder}/{$feature}.php";
    }

    private static function makeControllerFile(string $subfolder, string $feature, string $subfolderKebab, string $featureKebab): string
    {
        $dir = app_path("Http/Controllers/{$subfolder}");
        File::ensureDirectoryExists($dir);
        $file = "{$dir}/{$feature}Controller.php";

        if (File::exists($file)) {
            return "Skipped (Exists): Controller {$subfolder}/{$feature}Controller.php";
        }

        $code = <<<PHP
<?php

namespace App\Http\Controllers\\{$subfolder};

use App\Http\Controllers\Controller;
use App\Http\Requests\\{$subfolder}\\{$feature}Request;
use App\Models\\{$subfolder}\\{$feature};
use Illuminate\Http\Request;

class {$feature}Controller extends Controller
{
    public function index(Request \$request)
    {
        \$items = {$feature}::latest()->paginate(10);
        return view('pages.{$subfolderKebab}.{$featureKebab}', compact('items'));
    }
}
PHP;
        File::put($file, $code);
        return "Created: Controller App/Http/Controllers/{$subfolder}/{$feature}Controller.php";
    }

    private static function makeRequestFile(string $subfolder, string $feature): string
    {
        $dir = app_path("Http/Requests/{$subfolder}");
        File::ensureDirectoryExists($dir);
        $file = "{$dir}/{$feature}Request.php";

        if (File::exists($file)) {
            return "Skipped (Exists): Request {$subfolder}/{$feature}Request.php";
        }

        $code = <<<PHP
<?php

namespace App\Http\Requests\\{$subfolder};

use Illuminate\Foundation\Http\FormRequest;

class {$feature}Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Validation rules
        ];
    }
}
PHP;
        File::put($file, $code);
        return "Created: Form Request App/Http/Requests/{$subfolder}/{$feature}Request.php";
    }

    private static function makeBladeFiles(string $subfolderKebab, string $featureKebab, string $subfolderSnake, string $featureSnake): string
    {
        $mainViewDir = resource_path("views/pages/{$subfolderKebab}");
        $partialsDir = "{$mainViewDir}/partials";
        $tabsDir = resource_path("views/pages/{$subfolderKebab}/tabs/{$featureKebab}");

        File::ensureDirectoryExists($mainViewDir);
        File::ensureDirectoryExists($partialsDir);
        File::ensureDirectoryExists($tabsDir);

        $mainViewFile = "{$mainViewDir}/{$featureKebab}.blade.php";
        $helpModalFile = "{$partialsDir}/{$featureKebab}-help-modal.blade.php";
        $tabIndexFile = "{$tabsDir}/_main.blade.php";

        $logs = [];

        if (!File::exists($mainViewFile)) {
            $mainCode = <<<HTML
@extends('layouts.index')

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            {$subfolderKebab}
        @endslot
        @slot('li_2')
            {$featureKebab}
        @endslot
    @endcomponent
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-6 bg-white p-5 rounded border border-gray-200 shadow-xs">
            <div class="d-flex align-items-center gap-3">
                <h2 class="text-gray-900 fw-bold fs-3 m-0">
                    {$featureKebab}
                </h2>
            </div>
            <div class="d-flex align-items-center gap-2 ms-auto">
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                    <button type="button" class="btn btn-icon btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0" data-bs-toggle="modal" data-bs-target="#kt_modal_{$featureSnake}_help">
                        <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </button>
                </span>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                @include('pages.{$subfolderKebab}.tabs.{$featureKebab}._main')
            </div>
        </div>
    </div>
</div>

@include('pages.{$subfolderKebab}.partials.{$featureKebab}-help-modal')
@endsection
HTML;
            File::put($mainViewFile, $mainCode);
            $logs[] = "Created Main View: pages/{$subfolderKebab}/{$featureKebab}.blade.php";
        }

        if (!File::exists($tabIndexFile)) {
            $tabCode = <<<HTML
<div class="py-5">
    <h3 class="fw-bold text-gray-800">Content for {$featureKebab}</h3>
    <p class="text-muted">Multi-tab architectural partial ready under pages/{$subfolderKebab}/tabs/{$featureKebab}/_main.blade.php</p>
</div>
HTML;
            File::put($tabIndexFile, $tabCode);
            $logs[] = "Created Tab Partial: pages/{$subfolderKebab}/tabs/{$featureKebab}/_main.blade.php";
        }

        if (!File::exists($helpModalFile)) {
            $helpCode = <<<HTML
<div class="modal fade" id="kt_modal_{$featureSnake}_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <div class="text-center mb-9">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-question fs-3x text-danger">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                        </i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: ' . '{$featureKebab}' : 'Petunjuk Operasional: ' . '{$featureKebab}' }}
                    </h1>
                </div>

                <div class="d-flex flex-column gap-6">
                    <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                        <h4 class="text-primary fw-bold mb-3 d-flex align-items-center">
                            <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Module Overview' : 'Gambaran Umum Modul' }}
                        </h4>
                        <p class="text-gray-700 fs-6 mb-0">
                            {{ app()->getLocale() == 'en' ? 'This module manages {$featureKebab} entries.' : 'Modul ini mengelola data {$featureKebab}.' }}
                        </p>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;
            File::put($helpModalFile, $helpCode);
            $logs[] = "Created Help Modal: pages/{$subfolderKebab}/partials/{$featureKebab}-help-modal.blade.php";
        }

        return implode(' | ', $logs);
    }
}
