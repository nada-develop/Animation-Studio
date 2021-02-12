<?php

use Illuminate\Database\Seeder;
use BlogCategory;
class Blog_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::create(["category_name"=>"films"]);
        BlogCategory::create(["category_name"=>"series"]);
        BlogCategory::create(["category_name"=>"Advertisement"]); 
    }
}
