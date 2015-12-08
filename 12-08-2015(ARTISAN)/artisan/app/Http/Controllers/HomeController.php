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
    // Home Page

    public function index()
    {
        // Get Slider Images

        $slider_images = DB::table('slider')
            ->where('status','=',1)
            ->get();

        // End of Get Slider Images

        // Get Categories

        $categories = Category::all()->where('parent_id', '=', '0')->take(4);

        // End of Get Categories

        // Get New Arrival Products

        $new_arrivals = DB::table('categories')
            ->select('id')
            ->where('show_home','=',1)->get();
        $new_arrivals_id = $new_arrivals[0]->id;
        $new_arrivals_category_products = DB::table('product')
            ->where('category_parent_id','=',$new_arrivals_id)
            ->select('id')
            ->get();
        $number_of_rows = count($new_arrivals_category_products);
        $new_arrivals_product_image = array();
        for($i=0; $i<$number_of_rows;$i++)
        {
            $new_arrivals_products_images = DB::table('files')
                ->where('product_id','=',$new_arrivals_category_products[$i]->id)
                ->where('files.thumb','=','1')
                ->select('product_id','file_path')
                ->take(1)->get();
            $new_arrivals_product_image['file_path_'. $i] = $new_arrivals_products_images[0]->file_path;

        }
        $products = Product::where('category_parent_id','=',$new_arrivals_id)->get();

        //End of Get New Arrival Products

        return view('pages.frontend.home')->with('categories',$categories)->with('products',$products)->with('new_arrivals_product_image',$new_arrivals_product_image)->with('slider_images',$slider_images);
    }

    // End of Home Page

    // Category Page

    public function CategoryDetails($id)
    {

        $categories = Category::where('parent_id', '=', '0')->with('subCategory')->get();

        if(is_numeric($id)== true)
        {
            $getProductCategory = DB::table('categories')
                ->select('parent_id')
                ->where('id','=',$id)->get();
//echo $getProductCategory[0]->parent_id; exit;
            if($getProductCategory[0]->parent_id == '0')
            {
                $products = DB::table('product')
                    ->leftJoin('files', 'product.id', '=', 'files.product_id')
                    ->where('product.category_parent_id','=',$id)
                    ->where('files.thumb','=','1')
//                    ->get();
//                var_dump($products); exit;
                    ->paginate(3);
            }
            else
            {
                $products = DB::table('product')
                    ->leftJoin('files', 'product.id', '=', 'files.product_id')
                    ->where('product.category_id','=',$id)
                    ->where('files.thumb','=','1')
                    ->paginate(3);
            }
        }

        else
        {
            $get_category_id = DB::table('categories')
                ->select('id')
                ->where('title','=',$id)->get();

            $id = $get_category_id[0]->id;

            $getProductCategory = DB::table('categories')
                ->select('parent_id')
                ->where('id','=',$id)->get();

            if($getProductCategory[0]->parent_id == '0')
            {
                $products = DB::table('product')
                    ->leftJoin('files', 'product.id', '=', 'files.product_id')
                    ->where('product.category_parent_id','=',$id)
                    ->where('files.thumb','=','1')
                    ->paginate(3);
            }
            else
            {
                $products = DB::table('product')
                    ->leftJoin('files', 'product.id', '=', 'files.product_id')
                    ->where('product.category_id','=',$id)
                    ->where('files.thumb','=','1')
                    ->paginate(3);
            }
        }

        return view('pages.frontend.product-list')->with('categories',$categories)->with('products',$products);
    }

    // End of Category Page

    // Product Details Page

    public function ProductDetails($id)
    {
        if(is_numeric($id)==true)
        {
            $images = DB::table('files')
                ->where('product_id','=',$id)
                ->select('file_path', 'thumb')
                ->get();

            $product = Product::where('id','=',$id)->get();

            $get_product_category_id = DB::table('product')
                ->where('id','=',$id)
                ->select('category_parent_id')
                ->get();

            $product_category_id = $get_product_category_id[0]->category_parent_id;

            $category = DB::table('categories')
                ->where('id','=',$product_category_id)
                ->select('title')
                ->get();

            $related_products_category_parent_id = DB::table('product')
                ->where('id','=', $id)
                ->select('category_parent_id')
                ->get();

            $related_products_id = $related_products_category_parent_id[0]->category_parent_id;
//            var_dump($related_products_id); exit;
            $related_category_products = DB::table('product')
                ->where('category_parent_id','=',$related_products_id)
                ->select('id')
                ->get();
//            var_dump($related_category_products); exit;
            $number_of_rows = count($related_category_products);
            $related_product_image = array();
            for($i=0; $i<$number_of_rows;$i++)
            {
                $related_products_images = DB::table('files')
                    ->where('product_id','=',$related_category_products[$i]->id)
                    ->select('product_id','file_path')
                    ->take(1)->get();
                $related_product_image['file_path_'. $i] = $related_products_images[0]->file_path;

            }
            $related_products = Product::where('category_parent_id','=',$related_products_id)->get();
        }

        else
        {
            $get_product_id = DB::table('product')
                ->select('id')
                ->where('product_title','=',$id)->get();

            $id = $get_product_id[0]->id;

            $images = DB::table('files')
                ->where('product_id','=',$id)
                ->select('file_path', 'thumb')
                ->get();
            $product = Product::where('id','=',$id)->get();

            $get_product_category_id = DB::table('product')
                                ->where('id','=',$id)
                                ->select('category_parent_id')
                                ->get();

            $product_category_id = $get_product_category_id[0]->category_parent_id;

            $category = DB::table('categories')
                        ->where('id','=',$product_category_id)
                        ->select('title')
                        ->get();

//            var_dump($category); exit;

            $related_products_category_parent_id = DB::table('product')
                ->where('id','=', $id)
                ->select('category_parent_id')
                ->get();

            $related_products_id = $related_products_category_parent_id[0]->category_parent_id;
            $related_category_products = DB::table('product')
                ->where('category_parent_id','=',$related_products_id)
                ->select('id')
                ->get();
            $number_of_rows = count($related_category_products);
            $related_product_image = array();
            for($i=0; $i<$number_of_rows;$i++)
            {
                $related_products_images = DB::table('files')
                    ->where('product_id','=',$related_category_products[$i]->id)
                    ->select('product_id','file_path')
                    ->take(1)->get();
                $related_product_image['file_path_'. $i] = $related_products_images[0]->file_path;

            }
            $related_products = Product::where('category_parent_id','=',$related_products_id)->get();
        }
//var_dump($related_products); exit;
        return view('pages.frontend.product-view')->with('product',$product)->with('category',$category)->with('images',$images)->with('related_products',$related_products)->with('new_arrivals_product_image',$related_product_image);
        //->with('related_products',$related_products)->with('related_products',$related_products)->with('new_arrivals_product_image',$new_arrivals_product_image)
    }

    // End of Product Details Page
}