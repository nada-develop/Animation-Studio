<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog ;
class BlogController extends Controller
{
    public function index(){
        $blog_list = Blog::all();
        return view('front.blog', compact('blog_list'));
    }

    public function show($id){
        $blog_item = Blog::find($id);
        return view('front.blog-post', compact('blog_item'));
    }

}
