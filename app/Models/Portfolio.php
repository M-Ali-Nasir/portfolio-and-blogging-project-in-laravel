<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','sourceCode_url','project_url','image','cat_id'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
