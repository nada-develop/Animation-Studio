<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Portfolio extends Model
{
    public function Category(){
        
        return $this->belongsTo(Category::class);
    }
}
