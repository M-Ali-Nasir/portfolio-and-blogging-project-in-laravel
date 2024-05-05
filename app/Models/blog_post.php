<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post_Categories;

class blog_post extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','cat_id'];

    public function post__categories(){
        return $this->belongsTo(Post_Categories::class,'cat_id');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class, 'replied_to_id');
    }
}
