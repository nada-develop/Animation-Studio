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
        Slide::create(["slide_name" => "slide1", "slide_image" => "slide.jpg"]);
        Slide::create(["slide_name" => "slide2", "slide_image" => "slide.jpg"]);
        Slide::create(["slide_name" => "slide3", "slide_image" => "slide.jpg"]);
        Slide::create(["slide_name" => "slide4", "slide_image" => "slide.jpg"]);
    }
}
