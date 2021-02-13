<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UserSeeder::class);
         $this->call(AboutSeeder::class);
         $this->call(AwardSeeder::class);
         $this->call(BlogCategorySeeder::class);
         $this->call(BlogSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(PortfolioSeeder::class);
         $this->call(SlideSeeder::class);
         $this->call(ContactSeeder::class);
    }
}
