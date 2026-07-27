<?php

namespace App\Console\Commands\AppSupport;

use Illuminate\Console\Command;
use App\Models\AppSupport\BackupDb;
use Illuminate\Support\Facades\Log;

class BackupDbCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:db {--name=scheduled_backup : Custom filename prefix for the backup} {--type=full : Backup type (full or structure)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run automated database export backup using BackupDb model.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $name = $this->option('name') ?? 'scheduled_backup';
        $type = $this->option('type') ?? 'full';

        $this->info("Starting automated database backup process...");

        try {
            $filename = BackupDb::createBackup($name, $type);
            $message = "Database backup created successfully: {$filename}";

            $this->info($message);
            Log::info("Automated Database Backup Command Success", [
                'filename' => $filename,
                'type'     => $type,
            ]);

            return self::SUCCESS;
        } catch (\Throwable $e) {
            $errorMessage = "Database backup failed: " . $e->getMessage();

            $this->error($errorMessage);
            Log::error("Automated Database Backup Command Failed", [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return self::FAILURE;
        }
    }
}
