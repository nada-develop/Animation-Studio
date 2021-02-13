<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(["category_name" => "Movies"]);
        Category::create(["category_name" => "Series"]);
        Category::create(["category_name" => "Advertisements"]);
    }
}
