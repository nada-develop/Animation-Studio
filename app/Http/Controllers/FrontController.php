<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\About;
use App\Contact;
class FrontController extends Controller
{
        public function homepage(){
            $slides = Slide::all();
            return view ('front.homepage', compact('slides'));
        }

        public function about(){
            $aboutus = About::all();
            return view ('front.about',compact('aboutus'));
        }

        public function contact(){
            $details = Contact::all();
            return view ('front.contact',compact('details'));
        }
}
