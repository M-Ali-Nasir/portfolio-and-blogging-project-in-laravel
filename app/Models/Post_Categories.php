<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blog_post;

class Post_Categories extends Model
{
    use HasFactory;
    protected $fillable = ['name','image'];

    public function blog_posts()
    {
        return $this->hasMany(blog_post::class);
    }
}
