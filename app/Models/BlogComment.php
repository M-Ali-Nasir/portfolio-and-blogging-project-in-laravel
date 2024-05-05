<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $fillable = ['name', 'email', 'comment', 'blog_post_id', 'replied_to_id'];

    public function post()
    {
        return $this->belongsTo(BlogPost::class, 'blog_post_id');
    }

    public function repliedTo()
    {
        return $this->belongsTo(BlogComment::class, 'replied_to_id');
    }

    public function replies()
    {
        return $this->hasMany(BlogComment::class, 'replied_to_id');
    }
}
