<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AppSupport\Changelog;

class ExportChangelogSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'changelog:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export current database changelog records into static dataset array in Changelog model for seeder synchronization';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Exporting Changelog database records into static seeder dataset...');

        $success = Changelog::exportToStaticDataset();

        if ($success) {
            $this->info('[SUCCESS] Changelog dataset successfully exported and synchronized into Changelog::getStaticVersions()!');
            return 0;
        } else {
            $this->error('[ERROR] Failed to export Changelog database records.');
            return 1;
        }
    }
}
