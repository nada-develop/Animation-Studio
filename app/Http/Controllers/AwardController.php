<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award ;
class AwardController extends Controller
{
    public function index(){
        $award_list = Award::all();
        return view('front.award', compact('award_list'));

    }
    public function show($id){
        $award_item = Award::find($id);
        return view('front.award-item', compact('award_item'));
    }
}
