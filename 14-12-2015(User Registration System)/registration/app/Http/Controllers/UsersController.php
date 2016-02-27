<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\User;

class UsersController extends Controller
{
    public function login()
    {
        return view('userlogin');
    }

    public function handleLogin()
    {
        $data = Input::only(['email', 'password']);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']]))
        {
            Session::flash('sucess','Login Successful!');
            return Redirect::to('/profile');
//            return redirect(Session::get('_previous')['url']);
//            return Redirect::intended();
//            return back();
        }
        else
        {
            Session::flash('error','Username & password combination is incorrect!');
//            return redirect::to('auth/login');
            return Redirect::to('/login')->withInput();
        }
//        return Redirect::route('login')->withInput();
    }

    public function profile()
    {
        return view('profile');
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return Redirect::to('/login');
    }

    public function create()
    {
        return view('usercreate');
    }

    public function store(Request $request)
    {
        if (User::where('email', '=', Input::get('email'))->exists()) {
            Session::flash('error','User already exists!');
            return view('usercreate');
        }

        else
        {
            $user = new User();

            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            Auth::login($user);
            return view('profile');
        }



//        $data = Input::only(['first_name','last_name','email','password']);

//        $newUser = User::create($data);
//        if($newUser){
//            Auth::login($newUser);
//            return view('profile');
//        }

//        return Redirect::route('user.create')->withInput();
    }
}