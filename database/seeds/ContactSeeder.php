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
        Contact::create([
            "phone" => "0254121548",
            "mobile1" => "0101247895",
            "mobile2" => "01006542698",
            "contact_email" => "creative@gmail.com",
            "facebook_link" => "https://www.facebook.com/pepsi",
            "instagram_link" => "https://www.instagram.com/pepsi",
            "google_lat" => "33.52545",
            "google_long" => "55.265",
            "google_zoom"=> "2",
            "address" => "El-Dokki"
            ]);
    }
}
