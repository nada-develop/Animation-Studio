<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogCategory;
class Blog extends Model
{
    public function BlogCategory(){

        return $this->belongsTo(BlogCategory::class);
    }
}
