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
        Schema::create('changelogs', function (Blueprint $table) {
            $table->id();
            $table->string('version')->unique();
            $table->string('title');
            $table->string('title_id')->nullable();
            $table->date('date');
            $table->string('type')->default('minor');
            $table->string('badge')->default('badge-light-primary');
            $table->string('author')->default('Developer Team');
            $table->text('description')->nullable();
            $table->text('description_id')->nullable();
            $table->json('highlights')->nullable();
            $table->json('commits')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changelogs');
    }
};
