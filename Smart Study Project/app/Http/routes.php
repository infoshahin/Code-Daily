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

// ============================ user/frontend area Start ===================================

Route::get('/', function () {
	Session::flash('lang', 'en');
	return Redirect::to('en/home');   
});

Route::get('/home', function () {
	Session::flash('lang', 'en');
	return Redirect::to('en/home');   
});


Route::get('{lang}/home', 'HomeController@index');
Route::get('{lang}/about', 'HomeController@about');
Route::resource('{lang}/history', 'HomeController@history');
Route::get('{lang}/executive-body', 'ExecutiveController@index');



Route::group(['middleware' => 'guest'], function()
{
Route::get('admin', 'WelcomeController@index');

Route::post('login', 'WelcomeController@doLogin');
});

// ============================ restricted area Start ===================================


Route::get('logout', 'WelcomeController@logOut');



Route::group(['middleware' => 'auth'], function()
{
Route::get('admin-home', 'WelcomeController@test');
Route::get('test', 'WelcomeController@test');
Route::get('admin-history', 'AboutController@adminHistory');
Route::resource('history', 'AboutController');
Route::get('admin-executive-body', 'ExecutiveController@adminIndex');
Route::get('admin-history', 'AboutController@adminHistory');
Route::get('executive/edit/{id}', 'ExecutiveController@edit');
Route::resource('executive', 'ExecutiveController');
Route::any('admin-executive-body/create', 'ExecutiveController@create');

// ++++++++++++++++++++++++++++++++++ Irfan ++++++++++++++++++++++++++++++++++++++++
Route::resource('image', 'ImageController');
Route::get('image', 'ImageController@adminIndex');
Route::any('image/create', 'ImageController@create');
Route::resource('sliderimage', 'SliderImageController');
Route::get('sliderimage', 'SliderImageController@adminIndex');
Route::any('sliderimage/create', 'SliderImageController@create');
Route::resource('notice', 'NoticeController');
Route::get('notice', 'NoticeController@adminIndex');
Route::any('notice/create', 'NoticeController@create');
Route::resource('event', 'EventController');
Route::get('event', 'EventController@adminIndex');
Route::any('event/create', 'EventController@create');

});


// ============================ restricted area End ===================================


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',	
]);