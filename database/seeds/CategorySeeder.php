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
        Category::create(["category_name"=>"films"]);
        Category::create(["category_name"=>"series"]);
        Category::create(["category_name"=>"advertisement"]);
    }
}
