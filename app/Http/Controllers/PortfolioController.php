<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

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
        $portfolio_category = Portfolio::where("name", $name);
        return view('front.portfolio-category', compact('portfolio_category'));
    }
}
