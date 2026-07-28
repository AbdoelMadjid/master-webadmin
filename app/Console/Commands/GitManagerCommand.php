<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GitManagerCommand extends Command
{
    protected $signature = 'git:manager';

    protected $description = 'Git Repository Manager';

    public function handle()
    {
        while (true) {

            $this->clearScreen();

            $this->info('==============================================');
            $this->info('          MASTER WEBADMIN GIT MANAGER');
            $this->info('==============================================');
            $this->newLine();

            $this->line('1.  Git Status');
            $this->line('2.  Git Pull');
            $this->line('3.  Git Push');
            $this->line('4.  Commit + Push');
            $this->line('5.  Release Baru');
            $this->line('6.  Update Release');
            $this->line('7.  Lihat Tag');
            $this->line('8.  Hapus Tag');
            $this->line('9.  Exit');

            $this->newLine();

            $menu = $this->ask('Pilih Menu');


            switch ($menu) {


                // ==================================
                // STATUS
                // ==================================
                case 1:

                    passthru('git status');

                    break;



                // ==================================
                // PULL
                // ==================================
                case 2:

                    passthru('git pull');

                    break;



                // ==================================
                // PUSH
                // ==================================
                case 3:

                    passthru('git push');

                    break;



                // ==================================
                // COMMIT
                // ==================================
                case 4:

                    $msg = $this->ask('Commit Message');

                    if (!$msg) {

                        $this->error('Commit message wajib diisi.');

                        break;
                    }


                    $msg = escapeshellarg($msg);


                    passthru('git add .');


                    passthru(
                        "git commit -m {$msg}"
                    );


                    passthru('git push');


                    $this->info(
                        'Commit dan Push berhasil.'
                    );


                    break;



                // ==================================
                // RELEASE BARU
                // ==================================
                case 5:

                    $version = $this->ask(
                        'Versi Baru (contoh: v1.0.3)'
                    );


                    if (!$version) {

                        $this->error(
                            'Versi wajib diisi.'
                        );

                        break;
                    }


                    $check = trim(
                        shell_exec(
                            "git tag -l {$version}"
                        )
                    );


                    if ($check) {

                        $this->error(
                            "Tag {$version} sudah ada."
                        );

                        break;
                    }


                    passthru(
                        "git tag {$version}"
                    );


                    passthru(
                        "git push origin {$version}"
                    );


                    $this->info(
                        "Release {$version} berhasil dibuat."
                    );


                    break;



                // ==================================
                // UPDATE RELEASE
                // ==================================
                case 6:

                    $version = $this->ask(
                        'Versi yang akan diupdate'
                    );


                    if (!$version) {

                        $this->error(
                            'Versi wajib diisi.'
                        );

                        break;
                    }


                    $confirm = $this->confirm(
                        "Update tag {$version} dengan force?"
                    );


                    if (!$confirm) {

                        break;
                    }


                    passthru(
                        "git tag -f {$version}"
                    );


                    passthru(
                        "git push --force origin {$version}"
                    );


                    $this->info(
                        "Release {$version} berhasil diupdate."
                    );


                    break;



                // ==================================
                // LIST TAG
                // ==================================
                case 7:


                    passthru(
                        'git fetch --tags'
                    );


                    passthru(
                        'git tag'
                    );


                    break;



                // ==================================
                // DELETE TAG
                // ==================================
                case 8:


                    $version = $this->ask(
                        'Tag yang akan dihapus'
                    );


                    if (!$version) {

                        $this->error(
                            'Tag wajib diisi.'
                        );

                        break;
                    }



                    $confirm = $this->confirm(
                        "Hapus tag {$version}?"
                    );


                    if (!$confirm) {

                        break;
                    }



                    passthru(
                        "git tag -d {$version}"
                    );


                    passthru(
                        "git push origin :refs/tags/{$version}"
                    );


                    $this->info(
                        "Tag {$version} berhasil dihapus."
                    );


                    break;



                // ==================================
                // EXIT
                // ==================================
                case 9:


                    $this->info(
                        'Keluar Git Manager.'
                    );


                    return Command::SUCCESS;



                default:


                    $this->error(
                        'Menu tidak tersedia.'
                    );
            }



            $this->newLine();


            $this->ask(
                'Tekan ENTER untuk kembali'
            );
        }
    }



    /**
     * Clear terminal screen
     */
    private function clearScreen()
    {

        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {

            system('cls');

        } else {

            system('clear');

        }
    }
}
