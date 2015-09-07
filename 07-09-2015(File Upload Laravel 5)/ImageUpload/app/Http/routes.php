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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('/', 'ImageController');
//Route::get('/', function(){ return redirect('/image'); });
Route::resource('/image', 'ImageController');

//Route::resource('/', 'ImageController');
//Route::get('/', function(){ return redirect('/image'); });
Route::resource('/sliderimage', 'SliderImageController');