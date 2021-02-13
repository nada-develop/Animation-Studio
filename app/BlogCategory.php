<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;
class BlogCategory extends Model
{
    public function posts(){
        return $this->hasMany(Blog::class);
    }
}
