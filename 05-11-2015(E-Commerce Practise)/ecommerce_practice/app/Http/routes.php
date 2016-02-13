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

Route::resource('image', 'CartContorller');
Route::get('image', 'CartContorller@adminIndex');
Route::any('image/create', 'CartContorller@create');

Route::resource('product', 'CartController@adminIndex');

Route::resource('cart/{id}/add', 'CartController@addToCart');
