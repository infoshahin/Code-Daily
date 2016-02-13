<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Form;

class BeloginController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function service()
    {
        return view('service');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        return view('contact');
    }

}