<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create(["image"=>"mission.jpg", "title"=>"mission", "description"=>"the objective is to combine proprietary technology and 
        world-class creative talent to develop computer-animated feature films with memorable characters 
        and heartwarming stories that appeal to audiences of all ages.",]);
        About::create(["image"=>"vision.jpg", "title"=>"vision", "description"=>"our goal is to make great films with great people.."]);
        About::create(["image"=>"whoWeAre.jpg", "title"=>"About", "description"=>"our goal is to make great films with great people.
        world-class creative talent to develop computer-animated feature films with memorable characters."]);
    }
}