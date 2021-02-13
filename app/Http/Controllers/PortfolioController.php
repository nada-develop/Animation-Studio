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
        $category = Category::where("category_name", $name)->get(); //$category = "SELECT * FROM portfolio_categories WHERE category_name = $name"
        //$category_items = Portfolio::where('category_id', $category->id)->get(); //$items = "SELECT * FROM portfolios WHERE category_id = $category->id"
        // return view('front.portfolio-category', compact('category_items'));
        // OR ->
        return view('front.portfolio-category', compact('category'));

        // $category->category_name;
        // $category->id;
        // foreach $category->portfolios as $item
    }


}
