<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class GitConvertTagCommand extends Command
{
    protected $signature = 'git:convert-tag';

    protected $description = 'Convert lightweight tag menjadi annotated tag';

    public function handle()
    {
        $this->info('=== Convert Lightweight Tag ke Annotated Tag ===');
        $this->newLine();


        $tag = $this->ask(
            'Masukkan nama versi/tag',
            'v1.4.1'
        );


        $commit = $this->ask(
            'Masukkan commit hash'
        );


        if (!$commit) {
            $this->error('Commit hash wajib diisi.');
            return Command::FAILURE;
        }


        $this->newLine();

        $this->table(
            ['Data', 'Nilai'],
            [
                ['Tag', $tag],
                ['Commit', $commit],
            ]
        );


        if (!$this->confirm('Lanjutkan proses convert?', true)) {

            $this->warn('Proses dibatalkan.');

            return Command::SUCCESS;
        }


        // Cek commit
        $this->info('Memeriksa commit...');

        if (!$this->runGit([
            'rev-parse',
            '--verify',
            $commit
        ])) {

            $this->error(
                'Commit hash tidak ditemukan.'
            );

            return Command::FAILURE;
        }


        // Cek tag
        $this->info('Memeriksa tag...');

        $tagExists = $this->runGit([
            'rev-parse',
            '--verify',
            "refs/tags/{$tag}"
        ]);


        if (!$tagExists) {

            $this->error(
                "Tag {$tag} tidak ditemukan."
            );

            return Command::FAILURE;
        }



        // Hapus tag lokal
        $this->info(
            'Menghapus tag lokal...'
        );

        $this->runGit([
            'tag',
            '-d',
            $tag
        ]);



        // Buat annotated tag
        $this->info(
            'Membuat annotated tag...'
        );


        if (!$this->runGit([
            'tag',
            '-a',
            $tag,
            $commit,
            '-m',
            "Release {$tag}"
        ])) {

            $this->error(
                'Gagal membuat annotated tag.'
            );

            return Command::FAILURE;
        }



        // Push ulang
        $this->info(
            'Push ke GitHub...'
        );


        if (!$this->runGit([
            'push',
            'origin',
            '--force',
            $tag
        ])) {

            $this->error(
                'Gagal push tag.'
            );

            return Command::FAILURE;
        }



        $this->newLine();

        $this->info(
            "Tag {$tag} berhasil dikonversi menjadi annotated tag."
        );


        $this->newLine();

        $this->line(
            'Cek dengan:'
        );

        $this->line(
            "git ls-remote --tags origin {$tag}"
        );


        return Command::SUCCESS;
    }



    private function runGit(array $arguments): bool
    {
        $process = new Process(
            array_merge(['git'], $arguments)
        );


        $process->run();


        if (!$process->isSuccessful()) {

            return false;
        }


        return true;
    }
}
