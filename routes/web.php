<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
   echo '<h1>Hello Laravel</h1>'; 
});

// Route::get('category','CategoryController@index');
Route::resource('category', 'CategoryController');
//arahkan ke product
Route::resource('product', 'ProductController');