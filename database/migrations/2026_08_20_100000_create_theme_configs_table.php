<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('theme_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('theme_frontpage_id')->constrained('theme_frontpages')->onDelete('cascade');
            $table->string('logo_default', 255)->nullable();
            $table->string('logo_sticky', 255)->nullable();
            $table->string('logo_footer', 255)->nullable();
            $table->json('header_menu')->nullable();
            $table->json('footer_menu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_configs');
    }
};
