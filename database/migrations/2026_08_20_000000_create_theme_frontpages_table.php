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
        Schema::create('theme_frontpages', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->unique();
            $table->string('name', 150);
            $table->string('name_en', 150)->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('author', 100)->nullable();
            $table->string('version', 50)->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->string('view_path', 150)->default('theme.default');
            $table->boolean('is_active')->default(false);
            $table->json('supports')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_frontpages');
    }
};