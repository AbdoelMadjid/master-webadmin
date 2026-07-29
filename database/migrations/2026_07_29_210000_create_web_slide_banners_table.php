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
        Schema::create('web_slide_banners', function (Blueprint $table) {
            $table->id();
            $table->string('title_prefix')->nullable();
            $table->string('title_prefix_en')->nullable();
            $table->string('title_highlight')->nullable();
            $table->string('title_highlight_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('image_url')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_url')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_slide_banners');
    }
};
