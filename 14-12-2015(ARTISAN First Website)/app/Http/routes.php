<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', function () {
//    return view('pages.frontend.home');
//});

// Website Routes

Route::get('home', 'HomeController@index');

Route::get('category/{id}', 'HomeController@CategoryDetails');

Route::get('product/{id}','HomeController@ProductDetails');

Route::get('/aboutus', function(){
    return view('pages.frontend.aboutus');
});

Route::get('/branches', function(){
    return view('pages.frontend.branches');
});

// End of Website Routes

// Cart Routes

Route::get('product/{id}/add','CartController@GoToCart');

// End of Cart Routes
