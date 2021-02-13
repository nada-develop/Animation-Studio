<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogCategory;
class Blog extends Model
{
    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }
}
