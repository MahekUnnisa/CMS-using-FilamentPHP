<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DraftBlog extends Model
{
    use HasFactory;
    protected $table = 'draft_blogs';
    protected $fillable = [
        'id',
        'author_id',
        'editor_id',
        'published_blog_id',
        'title',
        'meta_description',
        'slug',
        'content',
        'created_at',
        'updated_at',
        'deleted_at',
        'featured_image'
    ];
    protected $casts = [
        'videos' => 'json'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
