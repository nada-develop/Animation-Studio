<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//----frontendRoutes
//loading the homepage
Route::get('/','FrontController@homepage');
//loading the aboutpage
Route::get('/about','FrontController@about');
//loading the contactpage
Route::get('/contact','FrontController@contact');
//loading portfolio items
Route::get('/portfolio','PortfolioController@index');
//loading blog posts
Route::get('/blog','BlogController@index');
//loading awards
Route::get('/awards','AwardController@index');
//loading a single portfolio item
Route::get('/portfolio/{id}','PortfolioController@show');
//loading a single blog post 
Route::get('/blog/{id}','BlogController@show');
//loading single award 
Route::get('/awards/{id}','AwardController@show');
//loading portfolio items for a specific category
Route::get('/portfolio/{name}','PortfolioController@show_category');





