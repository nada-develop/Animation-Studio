<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Contact::create(["phone"=>"021548", "mobile1"=>"0147895", "mobile2"=>"06542698",
        "contact_email"=>"creative@gmail.com",
         "facebook_link"=>"agency@", "instagram_link"=>"agency@",
          "google_lat", 33.52545, "google_long"=>55.265, "google_zoom"=>"-2", "address"=>"dkwjhflkndcn"]); 
    }
}
