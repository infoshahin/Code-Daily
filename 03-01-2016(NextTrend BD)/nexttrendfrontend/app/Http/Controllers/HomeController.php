<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Get Slider Images

        $slider_images = DB::table('slider')
            ->where('status','=',1)
            ->get();

        // End of Get Slider Images

        return view('pages.frontend.home')->with('slider_images',$slider_images);
    }
}