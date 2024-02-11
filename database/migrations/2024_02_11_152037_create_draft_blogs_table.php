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
        Schema::create('draft_blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->foreignId('editor_id')->constrained('users')->cascadeOnDelete()->nullable();
            $table->foreignId('published_blog_id')->constrained('published_blogs')->cascadeOnDelete()->nullable();
            $table->string('title');
            $table->string('type');
            $table->string('slug')->unique();
            $table->string('meta_description');
            $table->text('content');
            $table->string('featured_image')->nullable();
            $table->text('videos')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draft_blogs');
    }
};
