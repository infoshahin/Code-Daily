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



// Route::get('home', function () {
//     return view('backend.pages.home');
// });



Route::get('/', 'HomeControllerWeb@index');

Route::get('categories/{id}', 'HomeControllerWeb@CategoryDetails');

Route::get('products/{id}','HomeControllerWeb@ProductDetails');

Route::get('/aboutus', function(){
    return view('pages.frontend.aboutus');
});

Route::get('/branches', function(){
    return view('pages.frontend.branches');
});



Route::get('usertype', 'UsertypeController@index');
// Route::get('/', 'Auth\AuthController@getLogin');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// ------------------------------------
Route::group(['middleware' => 'auth'], function () {

   Route::controller('admin', 'HomeController');
   Route::resource('category', 'CategoryController');
   Route::resource('tag','TagController');
   Route::resource('product','ProductController');
    Route::resource('productpicture','ProductPictureController');
Route::post('dropzone/uploadFiles', 'DropzoneController@uploadFiles');
Route::post('/batchdelete', 'ProductPictureController@batchDelete');
Route::resource('customers','CustomersController');
Route::resource('orders','OrdersController');
Route::post('setstatus', 'OrdersController@setstatus');
Route::resource('slider', 'SliderController');



});


// ---------------------------------------
