<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSupport\Changelog;

class ChangelogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $versions = Changelog::getStaticVersions();

        foreach ($versions as $v) {
            Changelog::updateOrCreate(
                ['version' => $v['version']],
                [
                    'title'          => $v['title'],
                    'title_id'       => $v['title_id'] ?? $v['title'],
                    'date'           => $v['date'],
                    'type'           => $v['type'] ?? 'minor',
                    'badge'          => $v['badge'] ?? 'badge-light-primary',
                    'author'         => $v['author'] ?? 'Developer Team',
                    'description'    => $v['description'] ?? '',
                    'description_id' => $v['description_id'] ?? ($v['description'] ?? ''),
                    'highlights'     => $v['highlights'] ?? [],
                    'commits'        => $v['commits'] ?? [],
                ]
            );
        }
    }
}
