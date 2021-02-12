<?php

use Illuminate\Database\Seeder;
use App\Award;
class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Award::create(["image"=>"", "title"=>"Academy Awards" ,"description"=>"Best Individual Achievement: Animation 
        and Best Individual Achievement: Directing","date"=>"1988"]);
        Award::create(["image"=>"", "title"=>"ASCAP Film and Television Music Awards", "description"=>"Best Animation and
         Best Individual Achievement: Music", "date"=>"1978"]);
         Award::create(["image"=>"", "title"=>"Los Angeles Film Critics Association Awards", "description"=>"Best Original Musical or Comedy Score and
         Best Writing", "date"=>"2010"]);
    }
}
