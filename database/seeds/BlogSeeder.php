<?php

use Illuminate\Database\Seeder;
use App\Blog;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            "image" => "blog-post.jpg",
            "title" => "SOUL – SOMETHING TO LOOK FORWARD TO",
            "description" => "We can all agree that this year has been an exceptionally weird one. Usually, the run-up to the year end’s festivities is cause for excitement, and while I – like countless others – will be happy to see the back of 2020, I can’t say that I’m exactly ‘looking forward’ to what 2021 might bring. Christmas, New Year and beyond are all clouded in uncertainty.",
            "author_name"=> "simoi",
            "date" => "2019-1-1",
            "category_id" => 1
            ]);

        Blog::create([
            "image" => "blog-post.jpg",
            "title" => "SOUL – SOMETHING TO LOOK FORWARD TO",
            "description" => "We can all agree that this year has been an exceptionally weird one. Usually, the run-up to the year end’s festivities is cause for excitement, and while I – like countless others – will be happy to see the back of 2020, I can’t say that I’m exactly ‘looking forward’ to what 2021 might bring. Christmas, New Year and beyond are all clouded in uncertainty.",
            "author_name"=> "simoi",
            "date" => "2019-1-1",
            "category_id" => 2
            ]);

        Blog::create([
            "image" => "blog-post.jpg",
            "title" => "SOUL – SOMETHING TO LOOK FORWARD TO",
            "description" => "We can all agree that this year has been an exceptionally weird one. Usually, the run-up to the year end’s festivities is cause for excitement, and while I – like countless others – will be happy to see the back of 2020, I can’t say that I’m exactly ‘looking forward’ to what 2021 might bring. Christmas, New Year and beyond are all clouded in uncertainty.",
            "author_name"=> "simoi",
            "date" => "2019-1-1",
            "category_id" => 3
            ]);
    }
}
