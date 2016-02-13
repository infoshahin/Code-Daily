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
Route::get('/', 'BeloginController@home');
Route::get('home', 'BeloginController@home');

Route::get('aboutus', 'BeloginController@aboutus');

Route::get('/service', 'BeloginController@service');

Route::get('/portfolio', 'BeloginController@portfolio');

Route::get('/contact', 'BeloginController@contact');

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/motto', function () {
    return view('motto');
});

Route::get('/clientvalue', function () {
    return view('clientvalue');
});

Route::get('/globalconnection', function () {
    return view('globalconnection');
});

Route::get('/chairmanspeech', function () {
    return view('chairmanspeech');
});

Route::get('/mdspeech', function () {
    return view('mdspeech');
});

Route::get('/ceospeech', function () {
    return view('ceospeech');
});

Route::get('/softwaredevelopment', function () {
    return view('softwaredevelopment');
});

Route::get('/websitedevelopment', function () {
    return view('websitedevelopment');
});

Route::get('/digitalmarketing', function () {
    return view('digitalmarketing');
});

Route::get('/webapp', function () {
    return view('webapp');
});

Route::get('/erp', function () {
    return view('erp');
});

Route::get('/mobileapp', function () {
    return view('mobileapp');
});

Route::get('/smsmarketing', function () {
    return view('smsmarketing');
});

Route::get('/cloudcomputing', function () {
    return view('cloudcomputing');
});


Route::get('/ecommerce', function () {
    return view('ecommerce');
});


Route::get('/notificamos', function () {
    return view('notificamos');
});


Route::get('/contentmanagement', function () {
    return view('contentmanagement');
});

Route::get('/hospitalmanagement', function () {
    return view('hospitalmanagement');
});

Route::get('/elearning', function () {
    return view('elearning');
});

Route::get('/schoolmanagement', function () {
    return view('schoolmanagement');
});







