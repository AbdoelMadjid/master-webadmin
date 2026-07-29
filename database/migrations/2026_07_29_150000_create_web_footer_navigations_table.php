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
        Schema::create('web_footer_navigations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_navigation_id')->nullable()->constrained('web_main_navigations')->onDelete('set null');
            $table->tinyInteger('column')->default(1); // 1, 2, 3, 4
            $table->string('title', 150);
            $table->string('title_en', 150)->nullable();
            $table->string('url', 255)->default('#');
            $table->string('target', 20)->default('_self');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_external')->default(false);
            $table->timestamps();
        });

        // Seed initial 20 footer items matching resources/views/website/partials/footer.blade.php
        $now = now();

        $footerSeedData = [
            // Column 1
            ['column' => 1, 'title' => 'Calon Mahasiswa', 'title_en' => 'Future Students', 'url' => 'website.future-students', 'order' => 1],
            ['column' => 1, 'title' => 'Mahasiswa Aktif', 'title_en' => 'Current Students', 'url' => 'website.current-students', 'order' => 2],
            ['column' => 1, 'title' => 'Alumni & Karir', 'title_en' => 'Alumni', 'url' => 'website.alumni', 'order' => 3],
            ['column' => 1, 'title' => 'Fakultas & Staf', 'title_en' => 'Faculty & Staff', 'url' => 'website.faculty-and-staff', 'order' => 4],
            ['column' => 1, 'title' => 'Donatur & Mitra', 'title_en' => 'Donors', 'url' => '#', 'order' => 5],

            // Column 2
            ['column' => 2, 'title' => 'Berita & Media', 'title_en' => 'News & Media', 'url' => 'website.news-media', 'order' => 1],
            ['column' => 2, 'title' => 'Riset & Inovasi', 'title_en' => 'Research & Innovation', 'url' => 'website.research', 'order' => 2],
            ['column' => 2, 'title' => 'Akademik', 'title_en' => 'Academics', 'url' => 'website.academics', 'order' => 3],
            ['column' => 2, 'title' => 'Program Studi', 'title_en' => 'Programs of Study', 'url' => 'website.programs', 'order' => 4],
            ['column' => 2, 'title' => 'Kehidupan Kampus', 'title_en' => 'University Life', 'url' => 'website.campus-life', 'order' => 5],

            // Column 3
            ['column' => 3, 'title' => 'Kontak Kami', 'title_en' => 'Contacts', 'url' => 'website.contacts', 'order' => 1],
            ['column' => 3, 'title' => 'Karir & Lowongan', 'title_en' => 'Careers', 'url' => 'website.careers', 'order' => 2],
            ['column' => 3, 'title' => 'Aksesibilitas', 'title_en' => 'Accessibility', 'url' => '#', 'order' => 3],
            ['column' => 3, 'title' => 'Kebijakan Privasi', 'title_en' => 'Privacy', 'url' => '#', 'order' => 4],
            ['column' => 3, 'title' => 'Umpan Balik Situs', 'title_en' => 'Site Feedback', 'url' => '#', 'order' => 5],

            // Column 4
            ['column' => 4, 'title' => 'Kampus Utama Pusat', 'title_en' => 'Downtown Ontario Campus', 'url' => '#', 'order' => 1],
            ['column' => 4, 'title' => 'Kampus Mississauga', 'title_en' => 'Mississauga Campus', 'url' => '#', 'order' => 2],
            ['column' => 4, 'title' => 'Kampus Scarborough', 'title_en' => 'Scarborough Campus', 'url' => '#', 'order' => 3],
            ['column' => 4, 'title' => 'Peta Lokasi Kampus', 'title_en' => 'Campus Maps', 'url' => '#', 'order' => 4],
            ['column' => 4, 'title' => 'Keselamatan Kampus', 'title_en' => 'Campus Safety', 'url' => '#', 'order' => 5],
        ];

        foreach ($footerSeedData as $item) {
            // Check if there is a matching main navigation item by URL
            $mainNav = DB::table('web_main_navigations')->where('url', $item['url'])->first();

            DB::table('web_footer_navigations')->insert([
                'main_navigation_id' => $mainNav ? $mainNav->id : null,
                'column' => $item['column'],
                'title' => $item['title'],
                'title_en' => $item['title_en'],
                'url' => $item['url'],
                'target' => '_self',
                'order' => $item['order'],
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
        Schema::dropIfExists('web_footer_navigations');
    }
};
