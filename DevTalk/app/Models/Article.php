<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'cover',
        'title',
        'content',
        'user_id',
        'topic_id',
        'is_published',
        'likes_count',
        'comments_count',
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function scopeIsPublished()
    {
        return $this->is_published;
    }

    public function scopeIsNotPublished()
    {
        return !$this->isPublished();
    }
}
