<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog ;
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
        return view('back.blog.new');
    }

    public function store(){
        //هنا فاضل الimage
       $new_blog = new Blog();
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
        return view('back.blog.edit',compact('blog_item'));
    }

    public function update($id){
        //هنا فاضل الimage
       $update_blog = Blog::find($id);
       $update_blog->title =  request('title');
       $update_blog->description = request('desc');
       $update_blog->author_name = request('author');
       $update_blog->date = request('date');
       $update_blog->category_id = request('cat_id');
       $update_blog->save();
       return redirect('/admin/blog');
    }
}
