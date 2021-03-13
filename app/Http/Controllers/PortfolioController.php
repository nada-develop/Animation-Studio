<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Category;
class PortfolioController extends Controller
{
    public function index(){
        $portfolio_list = Portfolio::all();
        return view('front.portfolio', compact('portfolio_list'));
    }

    public function show($id){
        $portfolio_item = Portfolio::find($id);
        return view('front.portfolio-item', compact('portfolio_item'));
    }

    public function show_category($name){
        $category = Category::where("category_name", $name)->get();
        return view('front.portfolio-category', compact('category'));

    }

    //--backend--\\
    public function index_back(){
        $portfolio_list = Portfolio::all();
        return view('back.portfolio.index', compact('portfolio_list'));
    }

    public function create(){
        $categories = Category::all();
        return view('back.portfolio.new',compact('categories'));
    }

    public function store(Request $request){
        $image_name = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/portfolio-img/',$image_name);
        $new_portfolio = new Portfolio();
        $new_portfolio->image = $image_name;
        $new_portfolio->title =  request('title');
        $new_portfolio->description = request('desc');
        $new_portfolio->author_name = request('author');
        $new_portfolio->date = request('date');
        $new_portfolio->category_id = request('cat_id');
        $new_portfolio->save();
        return redirect('/admin/portfolio');
    }

    public function edit($id){
        $categories = Category::all();
        $portfolio_item = Portfolio::find($id);
        return view('back.portfolio.edit',compact('portfolio_item','categories'));
    }

    public function update($id, Request $request){
        $image_name = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/portfolio-img/',$image_name);
        $update_portfolio = Portfolio::find($id);
        $update_portfolio->image =  $image_name;
        $update_portfolio->name =  request('name');
        $update_portfolio->description = request('desc');
        $update_portfolio->production_date = request('date');
        $update_portfolio->category_id = request('cat_id');
        $update_portfolio->save();
        return redirect('/admin/portfolio');
    }

}

