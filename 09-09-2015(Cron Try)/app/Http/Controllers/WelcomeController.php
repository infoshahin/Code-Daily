<?php namespace App\Http\Controllers;
// use App\Company;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use App;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use \App\User;


class WelcomeController extends Controller {
   
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return view('welcome');
		// $users = \App\Company::find(2);	

       return View('pages.backend.login');
	}

	public function test()
	{
		 return View('pages.backend.home');
	}


	public function doLogin()
{

    // create our user data for the authentication
    $userdata = array(
        'username'     => Input::get('username'),
        'password'  => Input::get('password')
    );

    // attempt to do the login
    if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        // echo 'SUCCESS!';
   
     //    return view('pages.home',compact('latest'));
	 
// ---------------------------- End login and end check company setting---------------------------
    	
     return Redirect::to('/admin-home');
    
    }
   else {       
      
       return View('layouts.backend.login');
    }

    	

}

public function logOut(){
	  Auth::logout();
	 return Redirect::to('/admin');

}

	

}