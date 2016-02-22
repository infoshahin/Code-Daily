<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Session;
use Redirect;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    public function getLogin(){
       return view('backend.layout.login');
    }

    public function postLogin(){
        $email = \Input::get('email');
        $password = \Input::get('password');

        $validator = Validator::make(\Input::all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);
         if ($validator->fails()) {
            return redirect('auth/login')
                        ->withErrors($validator)
                        ->withInput();
        }

         if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            Session::flash('shahin_sucess','');
            return redirect::to('admin/index');
        }
        else{
            Session::flash('error','Username & password combination is incorrect!');
            return redirect::to('auth/login');
        }
    }

    public function getLogout(){
        \Auth::logout();
        Session::flash('sucess','Thank for using cart!');
            return redirect::to('auth/login');
    }












    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
