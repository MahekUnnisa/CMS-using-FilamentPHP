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
        Schema::create('published_blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->foreignId('editor_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->string('title');
            $table->string('type');
            $table->string('slug')->unique();
            $table->string('meta_description');
            $table->text('content');
            $table->string('featured_image');
            $table->text('videos')->nullable();
            $table->timestamp('published_at');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('published_blogs');
    }
};
