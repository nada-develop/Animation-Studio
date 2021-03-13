<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\About;
use App\Contact;
use App\Portfolio;
use App\Blog ;
class FrontController extends Controller
{
        public function homepage(){
            $slides = Slide::all();
            $about = About::whereIn('id', [1,2])->get();
            // $users = User::where('id', '<', 3)->get();
            // $portfolios = Portfolio::inRandomOrder()->get();
            $portfolios = Portfolio::limit(3)->get();
            $blogs = Blog::limit(3)->get();
            return view ('front.homepage', compact('slides','about','portfolios','blogs'));
        }

        public function about(){
            // $slide = Slide::find([1, 2]);
            $slide = Slide::whereIn('id', [1,3])->get();
            //$slide1 = $slide[0];
            // $aboutus = About::all();
            $portfolios = Portfolio::inRandomOrder()->limit(3)->get();
            $aboutus = About::orderByDesc('id')->get();
            return view ('front.about',compact('aboutus','slide','portfolios'));
        }

        public function contact(){
            $details = Contact::find(1);
            return view ('front.contact',compact('details'));
        }
}
