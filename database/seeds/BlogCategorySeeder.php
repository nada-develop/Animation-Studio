<?php

use Illuminate\Database\Seeder;
use App\BlogCategory;
class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::create(["category_name" => "Latest News"]);
        BlogCategory::create(["category_name" => "Interviews"]);
        BlogCategory::create(["category_name" => "Social Media"]);
    }
}
