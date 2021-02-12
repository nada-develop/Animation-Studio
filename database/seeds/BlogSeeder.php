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
        Blog::create(["image"=>"blog-post.jpg", "title"=>"SOUL – SOMETHING TO LOOK FORWARD TO","descriptio"=>"We can all agree that this year has been an exceptionally weird one. Usually,
         the run-up to the year end’s festivities is cause for excitement,
        and while I – like countless others – will be happy to see the back of 2020,
        I can’t say that I’m exactly ‘looking forward’ to what 2021 might bring. Christmas,
        New Year and beyond are all clouded in uncertainty.", "author_name"=>"simoi", "date"=>2019]);
        Blog::create(["image"=>"blog-post.jpg.jpg", "title"=>"ANIMATING SOUL WITH LIFE, COLORS, AND LINES","description"=>"Soul is all about the essence of a person.
         In most religions, like mine for example (Catholicism), the soul lives on after death.
        We also believe that our souls will one day be reunited with our bodies. A person’s soul will either go to Heaven (an eternity of holy bliss),
        Purgatory (a purification process before reaching Heaven), or the dreaded Hell (an eternity of unholy agony).", "author_name"=>"jomanna", "date"=>2020]);
        Blog::create(["image"=>"blog-post.jpg", "title"=>"THE JOURNEY OF A SOUL – THERE AND BACK AGAIN","descriptio"=>"A trip to Pixar was out of the question this year,
         due to COVID-19’s travel and gathering restrictions. It definitely was a bummer, although minor in the grand scheme of things.
          But even if I couldn’t visit the studio in person,
         I was able to talk to the filmmakers of Soul and learn about the film virtually.
          As always, I’m grateful for the opportunity to go behind the scenes.", "author_name"=>"simoi", "date"=>1999]);
    }
}
