<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award ;
class AwardController extends Controller
{
    public function index(){
        $award_list = Award::all();
        return view('front.award', compact('award_list'));
        // return view('back.award.index', compact('award_list'));
    }
    public function all(){
        $award_list = Award::all();
        return view('back.award.index', compact('award_list'));
    }

    public function show($id){
        $award_item = Award::find($id);
        return view('front.award-item', compact('award_item'));
    }

    public function edit($id){
        $award_item = Award::find($id);
        return view('back.award.edit', compact('award_item'));
    }
    public function create(){
        return view('back.award.new');
    }
    public function store(){
        //هنا فاضل الimage
        $new_award = new Award;
       $new_award->title =  request('title');
       $new_award->description = request('desc');
       $new_award->date = request('date');
       $new_award->save();
        return view('back.blog.index');
    }
    public function update($id){
        //هنا فاضل الimage
        $update_award =Award::find($id);
       $update_award->title =  request('title');
       $update_award->description = request('desc');
       $update_award->date = request('date');
       $update_award->save();
        return view('back.award.index');
    }

}
