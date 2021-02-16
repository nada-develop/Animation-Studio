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


// Authentication
Auth::routes();
//---- FRONT-END ROUTES
Route::get('/','FrontController@homepage'); //loading the homepage
Route::get('/about','FrontController@about'); //loading the aboutpage
Route::get('/contact','FrontController@contact'); //loading the contactpage
Route::get('/portfolio','PortfolioController@index'); //loading portfolio items
Route::get('/portfolio/{id}','PortfolioController@show'); //loading a single portfolio item
Route::get('/portfolio/{name}','PortfolioController@show_category'); //loading portfolio items for a specific category
Route::get('/blog','BlogController@index'); //loading blog posts
Route::get('/blog/{id}','BlogController@show'); //loading a single blog post
Route::get('/award','AwardController@index'); //loading awards
Route::get('/award/{id}','AwardController@show'); //loading single award


//---- BACK-END ROUTES
//------Basic Pages ROUTES
Route::get('/admin', 'HomeController@dashboard');
Route::get('/admin/pages', 'HomeController@indexPages');
Route::get('/admin/pages/contact/edit', 'HomeController@edit_contact')->middleware('auth'); // loading contact form with info
Route::put('/admin/pages/contact', 'HomeController@update_contact')->middleware('auth'); // update contact info
Route::get('/admin/pages/about/edit', 'HomeController@edit_about')->middleware('auth'); // loading about with info
Route::put('/admin/pages/about', 'HomeController@update_about')->middleware('auth'); // update about

//------ BlogController ROUTES
Route::get('/admin/blog', 'BlogController@index_back')->middleware('auth'); //display all blogs
Route::get('/admin/blog/create', 'BlogController@create')->middleware('auth'); //add new Blog
Route::post('/admin/blog', 'BlogController@store')->middleware('auth'); //storing creation
Route::get('/admin/blog/{id}/edit', 'BlogController@edit')->middleware('auth'); //show Blog Data to edit
Route::put('/admin/blog/{id}', 'BlogController@update')->middleware('auth');
// Route::get('/admin/blog/blog{id}', 'BlogController@delete');

//------ AwardControler ROUTES
Route::get('/admin/award', 'AwardController@all')->middleware('auth');
Route::get('/admin/award/create', 'AwardController@create')->middleware('auth');
Route::post('/admin/award', 'AwardController@store')->middleware('auth');
Route::get('/admin/award/{id}/edit', 'AwardController@edit')->middleware('auth');
Route::put('/admin/award/{id}', 'AwardController@update')->middleware('auth');

//------ PortfolioController ROUTES
Route::get('/admin/portfolio', 'PortfolioController@index_back')->middleware('auth');
Route::get('/admin/portfolio/create', 'PortfolioController@create')->middleware('auth');
Route::post('/admin/portfolio', 'PortfolioController@store')->middleware('auth');
Route::get('/admin/portfolio/{id}/edit', 'PortfolioController@edit')->middleware('auth');
Route::put('/admin/portfolio/{id}', 'PortfolioController@update')->middleware('auth');
