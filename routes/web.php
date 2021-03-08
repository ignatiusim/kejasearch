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

// Route::get('/', function () {
//     return view('welcome');


route::resource('/post','App\Http\Controllers\PostController');
route::get('/home','App\Http\Controllers\PageController@home');
route::get('/about','App\Http\Controllers\PageController@about');
route::get('/services','App\Http\Controllers\PageController@services');
route::get('/contact','App\Http\Controllers\PageController@contact');



// Route:: get("/home", function(){
//     return view('pages.home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
