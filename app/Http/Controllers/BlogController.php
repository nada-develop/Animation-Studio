<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog ;
use App\BlogCategory;
class BlogController extends Controller
{
    public function index(){
        $blog_list = Blog::all();
        return view('front.blog', compact('blog_list'));
        // return view('back.blog.index', compact('blog_list'));
    }

    public function index_back(){
        $blog_list = Blog::all();
        return view('back.blog.index', compact('blog_list'));
    }

    public function show($id){
        $blog_item = Blog::find($id);
        return view('front.blog-post',compact('blog_item'));
    }

    public function create(){
        $categories = BlogCategory::all();
        return view('back.blog.new', compact('categories'));
    }

    public function store(Request $request){
        $image_name =  $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/blog-img/',$image_name);
       $new_blog = new Blog();
       $new_blog->image = $image_name;
       $new_blog->title =  request('title');
       $new_blog->description = request('desc');
       $new_blog->author_name = request('author');
       $new_blog->date = request('date');
       $new_blog->category_id = request('cat_id');
       $new_blog->save();
        return redirect('/admin/blog');
    }

    public function edit($id){
        $blog_item = Blog::find($id);
        $categories = BlogCategory::all();
        return view('back.blog.edit',compact('blog_item', 'categories'));
    }

    public function update($id, Request $request){
        $image_name =  $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/blog-img/',$image_name);
        $update_blog = Blog::find($id);
        $update_blog->image = $image_name;
       $update_blog->title =  request('title');
       $update_blog->description = request('desc');
       $update_blog->author_name = request('author');
       $update_blog->date = request('date');
       $update_blog->category_id = request('cat_id');
       $update_blog->save();
       return redirect('/admin/blog');
    }
}
