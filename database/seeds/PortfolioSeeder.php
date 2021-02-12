<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create(["image"=>"potfolio-item.jpg", "name"=>"Onward", "description"=>"That was the jumping-off point,” continues Scanlon. “We’ve all lost someone,
         and if we could spend one more day with them—what an exciting opportunity that would be.", "production_date"=>2020, "category_id"=>1]);
         Portfolio::create(["image"=>"potfolio-item.jpg", "name"=>"soul", "description"=>"That was the jumping-off point,” continues Scanlon. “We’ve all lost someone,
         and if we could spend one more day with them—what an exciting opportunity that would be.
         The Good Dinosaur asks the question: What if the asteroid that forever changed life on Earth missed the planet completely and giant dinosaurs never became extinct?
          Pixar takes you on an epic journey into the world of dinosaurs where an Apatosaurus named Arlo makes an unlikely human friend.", "production_date"=>2010, "category_id"=>3]);
         Portfolio::create(["image"=>"potfolio-item.jpg", "name"=>"cars3", "description"=>"That was the jumping-off point,” continues Scanlon. “We’ve all lost someone,
         and if we could spend one more day with them—what an exciting opportunity that would be.The Good Dinosaur asks the question: What if the asteroid that forever changed life on Earth missed the planet completely and giant dinosaurs never became extinct?
          Pixar takes you on an epic journey into the world of dinosaurs where an Apatosaurus named Arlo makes an unlikely human friend.", "production_date"=>2012, "category_id"=>2]);
         Portfolio::create(["image"=>"potfolio-item.jpg", "name"=>"insideOut", "description"=>"That was the jumping-off point,” continues Scanlon. “We’ve all lost someone,
         and if we could spend one more day with them—what an exciting opportunity that would be.", "production_date"=>2019, "category_id"=>3]);
         Portfolio::create(["image"=>"potfolio-item.jpg", "name"=>"incridibles", "description"=>"That was the jumping-off point,” continues Scanlon. “We’ve all lost someone,
         and if we could spend one more day with them—what an exciting opportunity that would be.", "production_date"=>2018, "category_id"=>1]);
         Portfolio::create(["image"=>"potfolio-item.jpg", "name"=>"Finding Dory", "description"=>"That was the jumping-off point,” continues Scanlon. “We’ve all lost someone,
         and if we could spend one more day with them—what an exciting opportunity that would be.", "production_date"=>2014, "category_id"=>2]); 
    }
}
