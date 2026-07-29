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
        Schema::create('web_top_navigations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('web_top_navigations')->onDelete('cascade');
            $table->string('title', 150);
            $table->string('title_en', 150)->nullable();
            $table->string('url', 255)->default('#');
            $table->string('target', 20)->default('_self'); // _self, _blank
            $table->string('icon', 100)->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_external')->default(false);
            $table->timestamps();
        });

        // Seed initial top-bar navigation items matching website header links (Campus Life, Research, Help, Contacts)
        $now = now();

        $topBarNavs = [
            [
                'title' => 'Kehidupan Kampus',
                'title_en' => 'Campus Life',
                'url' => 'website.campus-life',
                'order' => 1,
            ],
            [
                'title' => 'Riset & Inovasi',
                'title_en' => 'Research',
                'url' => 'website.research',
                'order' => 2,
            ],
            [
                'title' => 'Bantuan & FAQ',
                'title_en' => 'Help Center',
                'url' => 'website.help',
                'order' => 3,
            ],
            [
                'title' => 'Kontak Kami',
                'title_en' => 'Contacts',
                'url' => 'website.contacts',
                'order' => 4,
            ],
        ];

        foreach ($topBarNavs as $nav) {
            DB::table('web_top_navigations')->insert([
                'parent_id' => null,
                'title' => $nav['title'],
                'title_en' => $nav['title_en'],
                'url' => $nav['url'],
                'target' => '_self',
                'icon' => null,
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
        Schema::dropIfExists('web_top_navigations');
    }
};
