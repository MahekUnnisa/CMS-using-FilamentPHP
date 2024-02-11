<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishedBlog extends Model
{
    use HasFactory;
    protected $table = 'published_blogs';
    protected $fillable = [
        'id',
        'author_id',
        'editor_id',
        'title',
        'meta_description',
        'slug',
        'content',
        'published_at',
        'created_at',
        'updated_at',
        'deleted_at',
        'featured_image'
    ];
    protected $casts = [
        'videos' => 'json'
    ];
}
