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


//---- BACK-END ROUTES

//------HomeControlle ROUTES
Route::get('/admin', 'HomeController@dashboard');
Route::get('/auth_login', 'HomeController@index');
//loading contat form with info
Route::put('/admin/pages/contact/edit', 'HomeController@edit_contact');
//updat contact info
Route::get('/admin/pages/contact', 'HomeController@update_contact');
//------BlogController ROUTES
//display all blogs
Route::get('/admin/blog', 'BlogController@all');
//add new Blog
Route::get('/admin/blog/create', 'BlogController@create');
//storing creation
Route::post('/admin/blog', 'BlogController@store');
//show Blog Data to edit
Route::get('/admin/blog/blog{id}', 'BlogController@edit');

Route::put('/admin/blog/blog{id}', 'BlogController@update');
// Route::get('/admin/blog/blog{id}', 'BlogController@delete');


// AwardControler ROUTES
//display all awards
Route::get('/admin/award', 'AwardController@all');

Route::put('/admin/award/create', 'AwardController@create');

Route::put('/admin/award', 'AwardController@store');

Route::put('/admin/award/{id}/edit', 'AwardController@edit');

Route::put('/admin/award/{id}', 'AwardController@update');








