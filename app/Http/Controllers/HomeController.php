<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    //contact methods
    public function edit_contact(){
     $company_info = Contact::all();
        return view('back.contact.edit',compact('company_info'));
    }

    public function update_contact(){
        // سؤال هنا في
        $contact_info = Contact::find($id);
        $contact_info->phone = request('cphone');
        $contact_info->mobile1 = request('cmobile1');
        $contact_info->mobile2 = request('cmobile2');
        $contact_info->contact_email = request('cmail');
        $contact_info->facebook_link = request('face_link');
        $contact_info->instagram_link = request('insta_link');
        $contact_info->google_lat = request('google_lat');
        $contact_info->google_long = request('google_long');
        $contact_info->google_zoom = request('google_zoom');
        $contact_info->address = request('caddress');
        $contact_info->save();
        // return redirect('/');

    }

    // public function store_contact(){
    //     $leader_contact = new Contact;
    //    $leader_contact->phone =  request('cname');
    //    $leader_contact->mobile1 =  request('cphone');
    //    $leader_contact->mobile2 =  request('caddress');
    //    $leader_contact->contact_email =  request('cmail');
    //    $leader_contact->city_id =  request('city');
    //    $leader_contact->save();
    //    //دي داله زي بالضبط الheader(location:)
    //    //ودي دايما بتبعت ب get
    //    return redirect('/customers');
    // }




}
