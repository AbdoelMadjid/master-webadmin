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

        foreach ($versions as $index => $v) {
            $changelog = Changelog::updateOrCreate(
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
                ]
            );

            // Sync Highlights
            $changelog->highlights()->delete();
            if (!empty($v['highlights']) && is_array($v['highlights'])) {
                foreach ($v['highlights'] as $hl) {
                    $changelog->highlights()->create([
                        'type'  => $hl['type'] ?? 'feat',
                        'label' => $hl['label'] ?? 'Feature',
                        'desc'  => $hl['desc'] ?? '',
                    ]);
                }
            }

            // Sync Commits
            $changelog->commits()->delete();
            if (!empty($v['commits']) && is_array($v['commits'])) {
                foreach ($v['commits'] as $cm) {
                    $changelog->commits()->create([
                        'hash' => $cm['hash'] ?? 'HEAD',
                        'date' => $cm['date'] ?? date('Y-m-d H:i'),
                        'msg'  => $cm['msg'] ?? ($cm['message'] ?? ''),
                    ]);
                }
            }
        }
    }
}
