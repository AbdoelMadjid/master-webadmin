<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class GitManagerCommand extends Command
{
    protected $signature = 'git:manager';

    protected $description = 'Master Git, Project Setup, Cache, File Utilities, & AGENTS.md CRUD Generator Manager';

    public function handle()
    {
        while (true) {
            $this->clearScreen();
            $this->showHeader();

            $this->info('--- GIT MANAGEMENT ---');
            $this->line(' 1.  Git Status');
            $this->line(' 2.  Git Pull');
            $this->line(' 3.  Git Push');
            $this->line(' 4.  Commit + Push');
            $this->line(' 5.  Release Baru (Tag)');
            $this->line(' 6.  Update Release (Force Tag)');
            $this->line(' 7.  Lihat Tag');
            $this->line(' 8.  Hapus Tag');
            $this->line(' 9.  Reset Perubahan Lokal');
            $this->line('10.  Sync Ulang dari GitHub');
            $this->line('11.  Ganti Branch');
            $this->line('12.  Daftar Branch');
            $this->line('13.  Git Log (10 Commit Terakhir)');
            $this->line('14.  Auto Release');

            $this->newLine();
            $this->info('--- SETUP & MAINTENANCE ---');
            $this->line('15.  Inisialisasi Project Awal (Post-Clone: composer, npm, build, .env, migrate)');
            $this->line('16.  Pembersihan Cache Aplikasi (optimize:clear)');

            $this->newLine();
            $this->info('--- CODE & CRUD GENERATOR (AGENTS.MD) ---');
            $this->line('17.  Generator 1-Click Fitur Lengkap (Model + Controller + Request + Blade + Help Modal)');
            $this->line('18.  Generator Model Saja');
            $this->line('19.  Generator Controller Saja');
            $this->line('20.  Generator Form Request Saja');
            $this->line('21.  Generator Blade View Saja (Main / Form / Help Modal)');

            $this->newLine();
            $this->info('--- UTILITAS FILE & TEMPLATE ---');
            $this->line('22.  Add Filename Prefix Massal');
            $this->line('23.  Remove Filename Prefix Massal');
            $this->line('24.  Rename Semua File .html → .blade.php (Recursive)');

            $this->newLine();
            $this->info('--- SYSTEM ---');
            $this->line('25.  Jalankan Development Server (php artisan serve)');
            $this->line('26.  Keluar');

            $this->newLine();
            $menu = $this->ask('Pilih Menu [1-26]');

            switch ($menu) {
                // ==================================
                // 1. STATUS
                // ==================================
                case 1:
                    passthru('git status');
                    break;

                // ==================================
                // 2. PULL
                // ==================================
                case 2:
                    passthru('git pull');
                    break;

                // ==================================
                // 3. PUSH
                // ==================================
                case 3:
                    passthru('git push');
                    break;

                // ==================================
                // 4. COMMIT + PUSH
                // ==================================
                case 4:
                    $msg = $this->ask('Commit Message');
                    if (!$msg) {
                        $this->error('Commit message wajib diisi.');
                        break;
                    }
                    $msgEscaped = escapeshellarg($msg);
                    passthru('git add .');
                    passthru("git commit -m {$msgEscaped}");
                    passthru('git push');
                    $this->info('Commit dan Push berhasil.');
                    break;

                // ==================================
                // 5. RELEASE BARU
                // ==================================
                case 5:
                    $version = $this->ask('Versi Baru (contoh: v1.0.3)');
                    if (!$version) {
                        $this->error('Versi wajib diisi.');
                        break;
                    }
                    $check = trim(shell_exec("git tag -l {$version}"));
                    if ($check) {
                        $this->error("Tag {$version} sudah ada.");
                        break;
                    }
                    passthru("git tag {$version}");
                    passthru("git push origin {$version}");
                    $this->info("Release {$version} berhasil dibuat.");
                    break;

                // ==================================
                // 6. UPDATE RELEASE
                // ==================================
                case 6:
                    $version = $this->ask('Versi yang akan diupdate');
                    if (!$version) {
                        $this->error('Versi wajib diisi.');
                        break;
                    }
                    if (!$this->confirm("Update tag {$version} dengan force?")) {
                        break;
                    }
                    passthru("git tag -f {$version}");
                    passthru("git push --force origin {$version}");
                    $this->info("Release {$version} berhasil diupdate.");
                    break;

                // ==================================
                // 7. LIHAT TAG
                // ==================================
                case 7:
                    passthru('git fetch --tags');
                    passthru('git tag');
                    break;

                // ==================================
                // 8. HAPUS TAG
                // ==================================
                case 8:
                    $version = $this->ask('Tag yang akan dihapus');
                    if (!$version) {
                        $this->error('Tag wajib diisi.');
                        break;
                    }
                    if (!$this->confirm("Hapus tag {$version}?")) {
                        break;
                    }
                    passthru("git tag -d {$version}");
                    passthru("git push origin :refs/tags/{$version}");
                    $this->info("Tag {$version} berhasil dihapus.");
                    break;

                // ==================================
                // 9. RESET PERUBAHAN LOKAL
                // ==================================
                case 9:
                    if (!$this->confirm('SEMUA perubahan lokal akan dihapus. Lanjutkan?')) {
                        break;
                    }
                    passthru('git reset --hard');
                    passthru('git clean -fd');
                    $this->info('Semua perubahan lokal berhasil dihapus.');
                    break;

                // ==================================
                // 10. SYNC ULANG DARI GITHUB
                // ==================================
                case 10:
                    $branch = $this->getCurrentBranch();
                    if (!$this->confirm("Repository akan disamakan dengan GitHub branch [{$branch}]. Semua perubahan lokal hilang. Lanjutkan?")) {
                        break;
                    }
                    passthru('git fetch origin');
                    passthru("git reset --hard origin/{$branch}");
                    passthru('git clean -fd');
                    $this->info("Repository berhasil disinkronkan dengan origin/{$branch}");
                    break;

                // ==================================
                // 11. GANTI BRANCH
                // ==================================
                case 11:
                    passthru('git branch');
                    $branch = $this->ask('Masukkan nama branch tujuan');
                    if (!$branch) {
                        $this->error('Branch wajib diisi.');
                        break;
                    }
                    if (!$this->confirm("Pindah ke branch {$branch}?")) {
                        break;
                    }
                    passthru("git checkout {$branch}");
                    $this->info("Berhasil pindah ke branch {$branch}");
                    break;

                // ==================================
                // 12. DAFTAR BRANCH
                // ==================================
                case 12:
                    $this->info('Daftar Branch Lokal:');
                    passthru('git branch');
                    $this->newLine();
                    $this->info('Daftar Branch Remote:');
                    passthru('git branch -r');
                    break;

                // ==================================
                // 13. GIT LOG
                // ==================================
                case 13:
                    passthru('git log --oneline -10');
                    break;

                // ==================================
                // 14. AUTO RELEASE
                // ==================================
                case 14:
                    $this->runAutoRelease();
                    break;

                // ==================================
                // 15. INISIALISASI PROJECT (POST-CLONE)
                // ==================================
                case 15:
                    $this->runProjectInit();
                    break;

                // ==================================
                // 16. CLEAR CACHE APLIKASI
                // ==================================
                case 16:
                    $this->runClearCache();
                    break;

                // ==================================
                // 17. GENERATOR FITUR LENGKAP
                // ==================================
                case 17:
                    $subfolder = $this->ask('Masukkan SubFolder (contoh: AppSupport, ManajemenPengguna)');
                    $feature = $this->ask('Masukkan Nama Fitur (contoh: UserGuide, Product)');
                    if ($subfolder && $feature) {
                        $this->generateFullFeature($subfolder, $feature);
                    } else {
                        $this->error('SubFolder dan Fitur wajib diisi.');
                    }
                    break;

                // ==================================
                // 18. GENERATOR MODEL SAJA
                // ==================================
                case 18:
                    $subfolder = $this->ask('Masukkan SubFolder (contoh: AppSupport)');
                    $feature = $this->ask('Masukkan Nama Model (contoh: UserGuide)');
                    if ($subfolder && $feature) {
                        $this->generateModel(Str::studly($subfolder), Str::studly($feature), Str::snake(Str::plural($feature)));
                    }
                    break;

                // ==================================
                // 19. GENERATOR CONTROLLER SAJA
                // ==================================
                case 19:
                    $subfolder = $this->ask('Masukkan SubFolder (contoh: AppSupport)');
                    $feature = $this->ask('Masukkan Nama Fitur/Controller (contoh: UserGuide)');
                    if ($subfolder && $feature) {
                        $this->generateController(Str::studly($subfolder), Str::studly($feature), Str::kebab($subfolder), Str::kebab($feature));
                    }
                    break;

                // ==================================
                // 20. GENERATOR FORM REQUEST SAJA
                // ==================================
                case 20:
                    $subfolder = $this->ask('Masukkan SubFolder (contoh: AppSupport)');
                    $feature = $this->ask('Masukkan Nama Fitur/Request (contoh: UserGuide)');
                    if ($subfolder && $feature) {
                        $this->generateFormRequest(Str::studly($subfolder), Str::studly($feature));
                    }
                    break;

                // ==================================
                // 21. GENERATOR BLADE VIEW SAJA
                // ==================================
                case 21:
                    $path = $this->ask('Masukkan path relatif view (contoh: appsupport/user-guide)');
                    $type = $this->choice('Pilih jenis blade view', ['main', 'form', 'help-modal'], 0);
                    if ($path) {
                        $this->generateBladeFile($path, $type);
                    }
                    break;

                // ==================================
                // 22. ADD FILENAME PREFIX MASSAL
                // ==================================
                case 22:
                    $this->runAddFilenamePrefix();
                    break;

                // ==================================
                // 23. REMOVE FILENAME PREFIX MASSAL
                // ==================================
                case 23:
                    $this->runRemoveFilenamePrefix();
                    break;

                // ==================================
                // 24. RENAME HTML TO BLADE
                // ==================================
                case 24:
                    $this->runRenameHtmlToBlade();
                    break;

                // ==================================
                // 25. JALANKAN DEV SERVER
                // ==================================
                case 25:
                    $this->info('Menjalankan php artisan serve... (Tekan Ctrl+C untuk berhenti)');
                    passthru('php artisan serve');
                    break;

                // ==================================
                // 26. EXIT
                // ==================================
                case 26:
                    $this->info('Keluar Git & Dev Manager. Sampai jumpa!');
                    return self::SUCCESS;

                default:
                    $this->error('Menu tidak tersedia.');
            }

            $this->newLine();
            $this->pause();
        }
    }

    // =========================================================================
    // HELPER: FILE UTILITIES
    // =========================================================================
    private function runAddFilenamePrefix(): void
    {
        $prefix = $this->ask('Masukkan prefix yang akan ditambahkan (contoh: promo-)');
        if (!$prefix) {
            $this->error('Prefix wajib diisi.');
            return;
        }

        $targetPath = $this->ask('Path folder target relatif terhadap root project', 'resources/views');
        $fullPath = base_path($targetPath);

        if (!File::isDirectory($fullPath)) {
            $this->error("Folder {$fullPath} tidak ditemukan.");
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($fullPath)
        );

        $count = 0;
        foreach ($iterator as $file) {
            if (!$file->isFile()) {
                continue;
            }

            $filename = $file->getFilename();

            if (str_starts_with($filename, $prefix)) {
                continue;
            }

            $oldPath = $file->getPathname();
            $newName = $prefix . $filename;
            $newPath = $file->getPath() . DIRECTORY_SEPARATOR . $newName;

            if (rename($oldPath, $newPath)) {
                $this->info("✔ {$filename} → {$newName}");
                $count++;
            } else {
                $this->error("✖ Gagal rename: {$filename}");
            }
        }

        $this->info("✅ Prefix '{$prefix}' berhasil ditambahkan ke {$count} file.");
    }

    private function runRemoveFilenamePrefix(): void
    {
        $prefix = $this->ask('Masukkan teks prefix yang akan dihapus (contoh: promo-)');
        if (!$prefix) {
            $this->error('Prefix wajib diisi.');
            return;
        }

        $targetPath = $this->ask('Path folder target relatif terhadap root project', 'resources/views');
        $fullPath = base_path($targetPath);

        if (!File::isDirectory($fullPath)) {
            $this->error("Folder {$fullPath} tidak ditemukan.");
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($fullPath)
        );

        $count = 0;
        foreach ($iterator as $file) {
            if (!$file->isFile()) {
                continue;
            }

            $filename = $file->getFilename();

            if (str_starts_with($filename, $prefix)) {
                $oldPath = $file->getPathname();
                $newName = substr($filename, strlen($prefix));
                $newPath = $file->getPath() . DIRECTORY_SEPARATOR . $newName;

                if (rename($oldPath, $newPath)) {
                    $this->info("✔ {$filename} → {$newName}");
                    $count++;
                } else {
                    $this->error("✖ Gagal rename: {$filename}");
                }
            }
        }

        $this->info("✅ Prefix '{$prefix}' berhasil dihapus secara massal dari {$count} file.");
    }

    private function runRenameHtmlToBlade(): void
    {
        $targetPath = $this->ask('Path folder target relatif terhadap root project', 'resources/views');
        $fullPath = base_path($targetPath);

        if (!File::isDirectory($fullPath)) {
            $this->error("Folder {$fullPath} tidak ditemukan.");
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($fullPath)
        );

        $count = 0;
        foreach ($iterator as $file) {
            if ($file->isFile() && $file->getExtension() === 'html') {
                $oldName = $file->getPathname();
                $newName = substr($oldName, 0, -5) . '.blade.php';

                if (rename($oldName, $newName)) {
                    $this->info("Renamed: {$oldName} → {$newName}");
                    $count++;
                } else {
                    $this->error("Gagal rename: {$oldName}");
                }
            }
        }

        $this->info("✅ Total {$count} file .html telah diubah menjadi .blade.php (recursive).");
    }

    // =========================================================================
    // HELPER: POST-CLONE INITIALIZATION
    // =========================================================================
    private function runProjectInit(): void
    {
        $this->info('==============================================');
        $this->info('      INISIALISASI PROJECT MASTER WEBADMIN     ');
        $this->info('==============================================');
        $this->newLine();

        $envFile = base_path('.env');
        $envExampleFile = base_path('.env.example');

        if (!File::exists($envFile)) {
            if (File::exists($envExampleFile)) {
                File::copy($envExampleFile, $envFile);
                $this->info('[1/7] File .env berhasil dibuat dari .env.example');
            } else {
                $this->warn('[1/7] File .env.example tidak ditemukan.');
            }
        } else {
            $this->line('[1/7] File .env sudah ada.');
        }

        $this->info('[2/7] Menjalankan composer install...');
        passthru('composer install');

        $this->info('[3/7] Menjalankan php artisan key:generate...');
        $this->call('key:generate');

        $this->info('[4/7] Menjalankan npm install...');
        passthru('npm install');

        $this->info('[5/7] Menjalankan npm run build...');
        passthru('npm run build');

        $this->info('[6/7] Menjalankan php artisan storage:link...');
        $this->call('storage:link');

        if ($this->confirm('Apakah Anda ingin menjalankan php artisan migrate:fresh --seed?', true)) {
            $this->info('Menjalankan php artisan migrate:fresh --seed...');
            $this->call('migrate:fresh', ['--seed' => true]);
        }

        $this->info('[7/7] Membersihkan cache aplikasi...');
        $this->call('optimize:clear');

        $this->newLine();
        $this->info('Inisialisasi project selesai!');
    }

    // =========================================================================
    // HELPER: CACHE CLEARING
    // =========================================================================
    private function runClearCache(): void
    {
        $this->info('Membersihkan seluruh cache aplikasi...');

        $this->call('optimize:clear');
        $this->call('cache:clear');
        $this->call('route:clear');
        $this->call('config:clear');
        $this->call('view:clear');
        $this->call('event:clear');

        $this->info('Pembersihan cache selesai.');
    }

    // =========================================================================
    // HELPER: FULL FEATURE GENERATOR (AGENTS.MD)
    // =========================================================================
    private function generateFullFeature(string $subfolder, string $feature): void
    {
        $subfolderStudly = Str::studly($subfolder);
        $featureStudly = Str::studly($feature);

        $subfolderKebab = Str::kebab($subfolderStudly);
        $featureKebab = Str::kebab($featureStudly);

        $featureTitle = Str::headline($featureStudly);
        $tableName = Str::snake(Str::plural($featureStudly));

        $this->info("Menjaga konsistensi arsitektur untuk:");
        $this->line(" - SubFolder      : {$subfolderStudly}");
        $this->line(" - Feature        : {$featureStudly}");
        $this->line(" - View Directory : resources/views/pages/{$subfolderKebab}");
        $this->newLine();

        $this->generateModel($subfolderStudly, $featureStudly, $tableName);
        $this->generateController($subfolderStudly, $featureStudly, $subfolderKebab, $featureKebab);
        $this->generateFormRequest($subfolderStudly, $featureStudly);

        $mainPath = "{$subfolderKebab}/{$featureKebab}";
        $formPath = "{$subfolderKebab}/partials/{$featureKebab}-form";
        $helpPath = "{$subfolderKebab}/partials/{$featureKebab}-help-modal";

        $this->generateBladeFile($mainPath, 'main');
        $this->generateBladeFile($formPath, 'form');
        $this->generateBladeFile($helpPath, 'help-modal');

        $this->newLine();
        $this->info("Fitur {$featureStudly} berhasil dibuat 100% sesuai AGENTS.md!");
    }

    private function generateModel(string $subfolder, string $feature, string $table): void
    {
        $path = app_path("Models/{$subfolder}/{$feature}.php");
        if (File::exists($path)) {
            $this->warn("[MODEL] File sudah ada, dilewati: {$path}");
            return;
        }

        File::ensureDirectoryExists(dirname($path));

        $content = <<<PHP
<?php

namespace App\Models\\{$subfolder};

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class {$feature} extends Model
{
    use HasFactory;

    protected \$table = '{$table}';

    protected \$fillable = [
        'name',
        'is_active',
    ];

    protected \$casts = [
        'is_active' => 'boolean',
    ];
}
PHP;

        File::put($path, $content);
        $this->info("[MODEL] Berhasil dibuat: App\Models\\{$subfolder}\\{$feature}");
    }

    private function generateController(string $subfolder, string $feature, string $subfolderKebab, string $featureKebab): void
    {
        $className = "{$feature}Controller";
        $path = app_path("Http/Controllers/{$subfolder}/{$className}.php");

        if (File::exists($path)) {
            $this->warn("[CONTROLLER] File sudah ada, dilewati: {$path}");
            return;
        }

        File::ensureDirectoryExists(dirname($path));

        $viewPath = "pages.{$subfolderKebab}.{$featureKebab}";
        $requestClass = "{$feature}Request";
        $modelClass = "{$feature}";

        $content = <<<PHP
<?php

namespace App\Http\Controllers\\{$subfolder};

use App\Http\Controllers\Controller;
use App\Models\\{$subfolder}\\{$modelClass};
use App\Http\Requests\\{$subfolder}\\{$requestClass};
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class {$className} extends Controller
{
    public function index(): View
    {
        \$items = {$modelClass}::latest()->paginate(10);
        return view('{$viewPath}', compact('items'));
    }

    public function store({$requestClass} \$request): JsonResponse
    {
        \$validated = \$request->validated();
        \$data = {$modelClass}::create(\$validated);

        return response()->json([
            'success' => true,
            'message' => __('Data berhasil disimpan'),
            'data'    => \$data,
        ]);
    }

    public function edit({$modelClass} \${$featureKebab}): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => \${$featureKebab},
        ]);
    }

    public function update({$requestClass} \$request, {$modelClass} \${$featureKebab}): JsonResponse
    {
        \$validated = \$request->validated();
        \${$featureKebab}->update(\$validated);

        return response()->json([
            'success' => true,
            'message' => __('Data berhasil diperbarui'),
            'data'    => \${$featureKebab},
        ]);
    }

    public function destroy({$modelClass} \${$featureKebab}): JsonResponse
    {
        \${$featureKebab}->delete();

        return response()->json([
            'success' => true,
            'message' => __('Data berhasil dihapus'),
        ]);
    }
}
PHP;

        File::put($path, $content);
        $this->info("[CONTROLLER] Berhasil dibuat: App\Http\Controllers\\{$subfolder}\\{$className}");
    }

    private function generateFormRequest(string $subfolder, string $feature): void
    {
        $className = "{$feature}Request";
        $path = app_path("Http/Requests/{$subfolder}/{$className}.php");

        if (File::exists($path)) {
            $this->warn("[REQUEST] File sudah ada, dilewati: {$path}");
            return;
        }

        File::ensureDirectoryExists(dirname($path));

        $content = <<<PHP
<?php

namespace App\Http\Requests\\{$subfolder};

use Illuminate\Foundation\Http\FormRequest;

class {$className} extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'      => ['required', 'string', 'max:255'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }
}
PHP;

        File::put($path, $content);
        $this->info("[REQUEST] Berhasil dibuat: App\Http\Requests\\{$subfolder}\\{$className}");
    }

    private function generateBladeFile(string $name, string $type = 'main'): void
    {
        $cleanPath = trim(str_replace(['\\', '.'], '/', $name), '/');
        $viewRelativePath = "pages/{$cleanPath}.blade.php";
        $fullPath = resource_path("views/{$viewRelativePath}");

        if (File::exists($fullPath)) {
            $this->warn("[BLADE] File sudah ada, dilewati: {$fullPath}");
            return;
        }

        File::ensureDirectoryExists(dirname($fullPath));

        $featureTitle = Str::headline(basename($cleanPath));
        $featureKebab = Str::kebab(basename($cleanPath));
        $subfolder = dirname($cleanPath);
        $subfolderKebab = Str::kebab($subfolder);
        $subfolderDot = str_replace('/', '.', $subfolderKebab);

        $content = match (strtolower($type)) {
            'form' => $this->getFormBladeTemplate($featureTitle, $featureKebab),
            'help-modal' => $this->getHelpModalBladeTemplate($featureTitle, $featureKebab),
            default => $this->getMainBladeTemplate($featureTitle, $featureKebab, $subfolderDot),
        };

        File::put($fullPath, $content);
        $this->info("[BLADE] Berhasil dibuat: {$fullPath}");
    }

    private function getMainBladeTemplate(string $title, string $kebab, string $subfolderDot): string
    {
        return <<<BLADE
@extends('layouts.master')

@section('title', '{$title}')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            
            {{-- Header Action Bar --}}
            <div class="card mb-5">
                <div class="card-body d-flex align-items-center justify-content-between py-4">
                    <h3 class="fw-bold text-gray-900 m-0">{$title}</h3>
                    
                    <div class="d-flex align-items-center gap-2 ms-auto">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Add New Data' : 'Tambah Data Baru' }}">
                            <button type="button" class="btn btn-primary shadow-xs d-inline-flex align-items-center justify-content-center w-35px w-sm-auto h-35px px-0 px-sm-4" onclick="openAddModal()">
                                <i class="ki-duotone ki-plus fs-2 p-0 m-0"><span class="path1"></span><span class="path2"></span></i>
                                <span class="d-none d-sm-inline ms-2">{{ app()->getLocale() == 'en' ? 'Add Data' : 'Tambah Data' }}</span>
                            </button>
                        </span>

                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Operational Guide' : 'Petunjuk Operasional' }}">
                            <button type="button" class="btn btn-icon btn-danger shadow-xs d-inline-flex align-items-center justify-content-center w-35px h-35px p-0" data-bs-toggle="modal" data-bs-target="#kt_modal_{$kebab}_help">
                                <i class="ki-duotone ki-question fs-1 p-0 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>

            {{-- Main Data Table Card --}}
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_{$kebab}">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">#</th>
                                    <th class="min-w-150px">{{ app()->getLocale() == 'en' ? 'Name' : 'Nama' }}</th>
                                    <th class="min-w-125px">{{ app()->getLocale() == 'en' ? 'Status' : 'Status' }}</th>
                                    <th class="text-end min-w-100px">{{ app()->getLocale() == 'en' ? 'Actions' : 'Aksi' }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                                {{-- Dynamic Data --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Form Modal Partial --}}
@include('pages.{$subfolderDot}.partials.{$kebab}-form')

{{-- Operational Guide Modal Partial --}}
@include('pages.{$subfolderDot}.partials.{$kebab}-help-modal')

@endsection

@section('scripts')
<script>
    function openAddModal() {
        $('#kt_modal_{$kebab}_form').modal('show');
    }
</script>
@endsection
BLADE;
    }

    private function getFormBladeTemplate(string $title, string $kebab): string
    {
        return <<<BLADE
<!-- Modal Form {$title} -->
<div class="modal fade" id="kt_modal_{$kebab}_form" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="kt_modal_{$kebab}_form_element" class="form" action="#">
                    @csrf
                    <input type="hidden" name="id" id="{$kebab}_id">
                    
                    <div class="text-center mb-13">
                        <h1 class="mb-3" id="modal_{$kebab}_title">{{ app()->getLocale() == 'en' ? 'Form {$title}' : 'Form {$title}' }}</h1>
                        <div class="text-muted fw-semibold fs-5">{{ app()->getLocale() == 'en' ? 'Fill in the required information' : 'Lengkapi data berikut dengan benar' }}</div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">{{ app()->getLocale() == 'en' ? 'Name' : 'Nama' }}</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="{{ app()->getLocale() == 'en' ? 'Enter name' : 'Masukkan nama' }}" name="name" id="field_name" required />
                    </div>

                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">{{ app()->getLocale() == 'en' ? 'Cancel' : 'Batal' }}</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">{{ app()->getLocale() == 'en' ? 'Save' : 'Simpan' }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
BLADE;
    }

    private function getHelpModalBladeTemplate(string $title, string $kebab): string
    {
        return <<<BLADE
<!-- Operational Guide Modal -->
<div class="modal fade" id="kt_modal_{$kebab}_help" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-5 mx-xl-15 mb-7">
                {{-- Header Branding --}}
                <div class="text-center mb-8">
                    <div class="symbol symbol-60px symbol-circle bg-light-danger mb-4 p-3">
                        <i class="ki-duotone ki-question fs-3x text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    </div>
                    <h1 class="mb-3 text-gray-900 fw-bold">
                        {{ app()->getLocale() == 'en' ? 'Operational Guide: {$title}' : 'Petunjuk Operasional: {$title}' }}
                    </h1>
                    <div class="text-muted fw-semibold fs-5">
                        {{ app()->getLocale() == 'en' ? 'Complete guide on how to manage {$title}' : 'Panduan lengkap cara mengelola fitur {$title}' }}
                    </div>
                </div>

                {{-- 4 Section Cards --}}
                <div class="d-flex flex-column gap-6">
                    {{-- Section 1: Overview --}}
                    <div class="card schema-card bg-light-primary border border-primary p-6 rounded">
                        <h4 class="text-primary fw-bold mb-3">
                            <i class="ki-duotone ki-abstract-26 fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'System Overview & Purpose' : 'Gambaran Umum System & Tujuan' }}
                        </h4>
                        <p class="text-gray-700 m-0">
                            @if(app()->getLocale() == 'en')
                                This module provides management functionalities for <strong>{$title}</strong>, allowing administrators to maintain data accuracy and integrity across the platform.
                            @else
                                Modul ini menyediakan fungsi pengelolaan data <strong>{$title}</strong> untuk membantu administrator menjaga keakuratan dan integritas data aplikasi.
                            @endif
                        </p>
                    </div>

                    {{-- Section 2: Architecture --}}
                    <div class="card schema-card bg-light-secondary border border-gray-300 p-6 rounded">
                        <h4 class="text-dark fw-bold mb-3">
                            <i class="ki-duotone ki-layers fs-2 text-dark me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Architecture & Features' : 'Arsitektur & Fitur Utama' }}
                        </h4>
                        <ul class="text-gray-700 m-0 ps-5">
                            @if(app()->getLocale() == 'en')
                                <li>Datatable server-side rendering for optimal performance.</li>
                                <li>Form validation powered by dedicated FormRequest class.</li>
                                <li>Standardized notifications via <code>SwalHelper</code>.</li>
                            @else
                                <li>Rendering tabel data cepat dan efisien.</li>
                                <li>Validasi form terintegrasi menggunakan FormRequest khusus.</li>
                                <li>Notifikasi standar menggunakan <code>SwalHelper</code>.</li>
                            @endif
                        </ul>
                    </div>

                    {{-- Section 3: Workflow --}}
                    <div class="card schema-card bg-light-info border border-info p-6 rounded">
                        <h4 class="text-info fw-bold mb-3">
                            <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Step-by-Step Workflow' : 'Langkah Operasional' }}
                        </h4>
                        <ol class="text-gray-700 m-0 ps-5">
                            @if(app()->getLocale() == 'en')
                                <li>Click <span class="badge badge-light-primary">Add Data</span> to open the form modal.</li>
                                <li>Fill out all mandatory fields and click <strong>Save</strong>.</li>
                                <li>Use action icons in the table row to Edit or Delete entries.</li>
                            @else
                                <li>Klik tombol <span class="badge badge-light-primary">Tambah Data</span> untuk membuka form modal.</li>
                                <li>Lengkapi data wajib lalu tekan tombol <strong>Simpan</strong>.</li>
                                <li>Gunakan tombol aksi pada baris tabel untuk mengubah atau menghapus data.</li>
                            @endif
                        </ol>
                    </div>

                    {{-- Section 4: Rules --}}
                    <div class="card schema-card bg-light-warning border border-warning p-6 rounded">
                        <h4 class="text-warning fw-bold mb-3">
                            <i class="ki-duotone ki-shield-cross fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            {{ app()->getLocale() == 'en' ? 'Safeguards & System Rules' : 'Aturan & Pengamanan Sistem' }}
                        </h4>
                        <p class="text-gray-700 m-0">
                            @if(app()->getLocale() == 'en')
                                Deleting entries will perform a soft delete where applicable. Ensure no dependency issues exist before permanent removal.
                            @else
                                Penghapusan data akan diamankan oleh sistem. Pastikan data tidak terikat dengan referensi transaksi lain sebelum dihapus.
                            @endif
                        </p>
                    </div>
                </div>

                {{-- Dismiss Button --}}
                <div class="text-center mt-10">
                    <button type="button" class="btn btn-primary min-w-150px" data-bs-dismiss="modal">
                        {{ app()->getLocale() == 'en' ? 'Understood' : 'Saya Mengerti' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
BLADE;
    }

    // =========================================================================
    // HELPER: AUTO RELEASE
    // =========================================================================
    private function runAutoRelease(): void
    {
        $branch = $this->getCurrentBranch();
        $this->info("Branch aktif : {$branch}");

        $status = trim(shell_exec('git status --porcelain'));
        if (!$status) {
            $this->warn('Tidak ada perubahan untuk direlease.');
            return;
        }

        $this->line('');
        $this->info('Perubahan ditemukan:');
        passthru('git status --short');

        if (!$this->confirm('Lanjutkan proses Auto Release?')) {
            return;
        }

        $message = $this->ask('Commit Message');
        if (!$message) {
            $message = "Update aplikasi {$branch}";
        }

        $version = $this->ask('Versi Release (contoh: v1.0.3)');
        if (!$version) {
            $this->error('Versi release wajib diisi.');
            return;
        }

        $checkTag = trim(shell_exec("git tag -l {$version}"));
        if ($checkTag) {
            $this->error("Tag {$version} sudah ada.");
            return;
        }

        $messageEscaped = escapeshellarg($message);

        passthru('git add .');
        passthru("git commit -m {$messageEscaped}");
        passthru("git push origin {$branch}");
        passthru("git tag {$version}");
        passthru("git push origin {$version}");

        $this->info("Auto Release {$version} berhasil.");
    }

    // =========================================================================
    // GENERAL HELPERS
    // =========================================================================
    private function showHeader(): void
    {
        $branch = $this->getCurrentBranch();
        $this->info('==============================================');
        $this->info('      MASTER WEBADMIN GIT & DEV MANAGER       ');
        $this->info('==============================================');
        $this->line(" Branch Aktif : {$branch}");
        $this->line(" Environment  : " . app()->environment());
        $this->newLine();
    }

    private function getCurrentBranch(): string
    {
        return trim(shell_exec('git branch --show-current') ?? 'main');
    }

    private function pause(): void
    {
        $this->ask('Tekan ENTER untuk kembali');
    }

    private function clearScreen(): void
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            system('cls');
        } else {
            system('clear');
        }
    }
}
