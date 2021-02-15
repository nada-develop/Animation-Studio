<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\About;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        return view('back.dashboard');
    }

    public function indexPages(){
        return view('back.pages');
    }

    //contact methods
    public function edit_contact(){
        $contact_info = Contact::find(1);
        return view('back.edit-contact',compact('contact_info'));
    }

    public function update_contact(){
        $contact_info = Contact::find(1);
        $contact_info->phone = request('phone');
        $contact_info->mobile1 = request('mobile1');
        $contact_info->mobile2 = request('mobile2');
        $contact_info->contact_email = request('contact_email');
        $contact_info->facebook_link = request('facebook_link');
        $contact_info->instagram_link = request('instagram_link');
        $contact_info->google_lat = request('google_lat');
        $contact_info->google_long = request('google_long');
        $contact_info->google_zoom = request('google_zoom');
        $contact_info->address = request('address');
        $contact_info->save();
        return redirect('/admin/pages');
    }

    //About Methods
    public function edit_about(){
        $about_info = About::all();
        return view('back.edit-about',compact('about_info'));
    }

    public function update_about(){
        $all = About::all();
        foreach($all as $one){
            $one->description = request(str_replace(" ", "", strtolower($one->title)));
            $one->save();
        }
        return redirect('/admin/pages');
    }
}
