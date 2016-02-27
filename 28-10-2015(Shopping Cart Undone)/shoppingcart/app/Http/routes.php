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

Route::get('/app', function () {
    return view('app');
});

Route::get('/base', function () {
    return view('base');
});

Route::get('/account', function () {
    return view('account.index');
});

Route::group(config('shop.routes.admin', []), function() {

    Route::match( array( 'GET' ), 'admin/file', array(
        'as' => 'aimeos_shop_admin_file',
        'uses' => 'Aimeos\Shop\Controller\AdminController@fileAction'
    ));
    Route::match( array( 'POST' ), 'admin/do', array(
        'as' => 'aimeos_shop_admin_json',
        'uses' => 'Aimeos\Shop\Controller\AdminController@doAction'
    ));
    Route::match( array( 'GET' ), 'admin', array(
        'as' => 'aimeos_shop_admin',
        'uses' => 'Aimeos\Shop\Controller\AdminController@indexAction'
    ));

});
