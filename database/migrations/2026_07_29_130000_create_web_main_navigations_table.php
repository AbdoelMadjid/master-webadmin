<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('web_main_navigations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('web_main_navigations')->onDelete('cascade');
            $table->string('title', 150);
            $table->string('title_en', 150)->nullable();
            $table->string('url', 255)->default('#');
            $table->string('type', 30)->default('link'); // link, mega_menu, dropdown, header
            $table->unsignedTinyInteger('mega_menu_column')->default(1); // 1, 2, 3, 4
            $table->string('target', 20)->default('_self'); // _self, _blank
            $table->string('icon', 100)->nullable();
            $table->string('badge', 50)->nullable();
            $table->string('badge_color', 30)->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_external')->default(false);
            $table->timestamps();
        });

        // Seed initial navigation data matching website navbar
        $now = now();

        // 1. Parent Mega Menu: Pages
        $pagesId = DB::table('web_main_navigations')->insertGetId([
            'parent_id' => null,
            'title' => 'Halaman',
            'title_en' => 'Pages',
            'url' => '#',
            'type' => 'mega_menu',
            'mega_menu_column' => 1,
            'target' => '_self',
            'icon' => 'ki-duotone ki-element-11',
            'badge' => null,
            'badge_color' => null,
            'order' => 1,
            'is_active' => true,
            'is_external' => false,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // Children under Pages Mega Menu (grouped across 4 columns)
        $megaMenuItems = [
            // Column 1
            [
                'parent_id' => $pagesId,
                'title' => 'Program Studi',
                'title_en' => 'Programs',
                'url' => 'website.programs',
                'type' => 'link',
                'mega_menu_column' => 1,
                'order' => 1,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Calon Mahasiswa',
                'title_en' => 'Future Students',
                'url' => 'website.future-students',
                'type' => 'link',
                'mega_menu_column' => 1,
                'order' => 2,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Mahasiswa Aktif',
                'title_en' => 'Current Students',
                'url' => 'website.current-students',
                'type' => 'link',
                'mega_menu_column' => 1,
                'order' => 3,
            ],

            // Column 2
            [
                'parent_id' => $pagesId,
                'title' => 'Dosen & Staf Akademik',
                'title_en' => 'Faculty & Staff',
                'url' => 'website.faculty-and-staff',
                'type' => 'link',
                'mega_menu_column' => 2,
                'order' => 4,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Agenda & Acara',
                'title_en' => 'Events',
                'url' => 'website.events',
                'type' => 'link',
                'mega_menu_column' => 2,
                'order' => 5,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Alumni & Karir',
                'title_en' => 'Alumni',
                'url' => 'website.alumni',
                'type' => 'link',
                'mega_menu_column' => 2,
                'order' => 6,
            ],

            // Column 3
            [
                'parent_id' => $pagesId,
                'title' => 'Kehidupan Kampus',
                'title_en' => 'Campus Life',
                'url' => 'website.campus-life',
                'type' => 'link',
                'mega_menu_column' => 3,
                'order' => 7,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Riset & Inovasi',
                'title_en' => 'Research',
                'url' => 'website.research',
                'type' => 'link',
                'mega_menu_column' => 3,
                'order' => 8,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Pendaftaran Online',
                'title_en' => 'Apply for All Intake',
                'url' => 'website.apply-all-intake',
                'type' => 'link',
                'mega_menu_column' => 3,
                'order' => 9,
            ],

            // Column 4
            [
                'parent_id' => $pagesId,
                'title' => 'Kontak Kami',
                'title_en' => 'Contacts',
                'url' => 'website.contacts',
                'type' => 'link',
                'mega_menu_column' => 4,
                'order' => 10,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Bantuan & FAQ',
                'title_en' => 'Help Center',
                'url' => 'website.help',
                'type' => 'link',
                'mega_menu_column' => 4,
                'order' => 11,
            ],
            [
                'parent_id' => $pagesId,
                'title' => 'Portal Utama Admin',
                'title_en' => 'Main Dashboard',
                'url' => 'home',
                'type' => 'link',
                'mega_menu_column' => 4,
                'order' => 12,
            ],
        ];

        foreach ($megaMenuItems as $item) {
            DB::table('web_main_navigations')->insert([
                'parent_id' => $item['parent_id'],
                'title' => $item['title'],
                'title_en' => $item['title_en'],
                'url' => $item['url'],
                'type' => $item['type'],
                'mega_menu_column' => $item['mega_menu_column'],
                'target' => '_self',
                'icon' => null,
                'badge' => null,
                'badge_color' => null,
                'order' => $item['order'],
                'is_active' => true,
                'is_external' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        // Top level navigation bar items (Programs, Future Students, Current Students, Faculty & Staff, Events, Alumni)
        $topLevelNavs = [
            [
                'title' => 'Program Studi',
                'title_en' => 'Programs',
                'url' => 'website.programs',
                'type' => 'link',
                'order' => 2,
            ],
            [
                'title' => 'Calon Mahasiswa',
                'title_en' => 'Future Students',
                'url' => 'website.future-students',
                'type' => 'link',
                'order' => 3,
            ],
            [
                'title' => 'Mahasiswa Aktif',
                'title_en' => 'Current Students',
                'url' => 'website.current-students',
                'type' => 'link',
                'order' => 4,
            ],
            [
                'title' => 'Dosen & Staf',
                'title_en' => 'Faculty & Staff',
                'url' => 'website.faculty-and-staff',
                'type' => 'link',
                'order' => 5,
            ],
            [
                'title' => 'Agenda & Acara',
                'title_en' => 'Events',
                'url' => 'website.events',
                'type' => 'link',
                'order' => 6,
            ],
            [
                'title' => 'Alumni & Karir',
                'title_en' => 'Alumni',
                'url' => 'website.alumni',
                'type' => 'link',
                'order' => 7,
            ],
        ];

        foreach ($topLevelNavs as $nav) {
            DB::table('web_main_navigations')->insert([
                'parent_id' => null,
                'title' => $nav['title'],
                'title_en' => $nav['title_en'],
                'url' => $nav['url'],
                'type' => $nav['type'],
                'mega_menu_column' => 1,
                'target' => '_self',
                'icon' => null,
                'badge' => null,
                'badge_color' => null,
                'order' => $nav['order'],
                'is_active' => true,
                'is_external' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_main_navigations');
    }
};
