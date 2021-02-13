<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Portfolio;
class Category extends Model
{
    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
