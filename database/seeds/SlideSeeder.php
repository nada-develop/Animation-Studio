<?php

use Illuminate\Database\Seeder;
use App\Slide;
class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Slide::create(["name"=>"slide1","image"=>"slide.jpg"]);
      Slide::create(["name"=>"slide2","image"=>"slide.jpg"]);
      Slide::create(["name"=>"slide3","image"=>"slide.jpg"]);
      Slide::create(["name"=>"slide4","image"=>"slide.jpg"]);

    }
}
