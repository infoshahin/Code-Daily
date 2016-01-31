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
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    // Home Page
    public function index()
    {
        $slider_images = DB::table('slider')
                        ->where('status','=',1)
                        ->get();
        $categories = Category::all()->where('parent_id', '=', '0')->take(4);
        $new_arrivals = DB::table('categories')
            ->select('id')
            ->where('title','=','NEW ARRIVAL')->get();
        $new_arrivals_id = $new_arrivals[0]->id;
//        $products = DB::table('product')
//                                ->join('files','product.id','=','files.product_id')
//                                ->where('category_id','=',$new_arrivals_id)
//                                ->orderBy('files.file_path', 'asc')
//                                ->take(1)->get();
//        var_dump($products); exit;
        $new_arrivals_category_products = DB::table('product')
                                ->where('category_id','=',$new_arrivals_id)
                                ->select('id')
                                ->get();
        $number_of_rows = count($new_arrivals_category_products);
        $new_arrivals_product_image = array();
        for($i=0; $i<$number_of_rows;$i++)
        {
//            $products = DB::table('product')
//                                ->join('files','product.id','=','files.product_id')
//                                ->where('product.category_id','=',$new_arrivals_id)
//                                ->where('files.product_id', '=', $new_arrivals_category_product_image[$i]->id)
//                                ->select('product.*','files.file_path')
//                                ->orderBy('files.file_path', 'asc')
//                                ->get();
                    $new_arrivals_products_images = DB::table('files')
                                    ->where('product_id','=',$new_arrivals_category_products[$i]->id)
                                    ->where('files.thumb','=','1')
                                    ->select('product_id','file_path')
                                    ->take(1)->get();
            $new_arrivals_product_image['file_path_'. $i] = $new_arrivals_products_images[0]->file_path;

        }
        $products = Product::where('category_parent_id','=',$new_arrivals_id)->get();

        return view('pages.frontend.home')->with('categories',$categories)->with('products',$products)->with('new_arrivals_product_image',$new_arrivals_product_image)->with('slider_images',$slider_images);
    }


    //Category Details

    public function CategoryDetails($id)
    {

        $categories = Category::where('parent_id', '=', '0')->with('subCategory')->get();
//        var_dump($categories); exit;
        if(is_numeric($id)== true)
        {
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

    //Product Details

    public function ProductDetails($id)
    {
        if(is_numeric($id)==true)
        {
            $images = DB::table('files')
                ->where('product_id','=',$id)
                ->select('file_path', 'thumb')
                ->get();

            $product = Product::where('id','=',$id)->get();

            $related_products_category_parent_id = DB::table('product')
                ->where('id','=', $id)
                ->select('category_parent_id')
                ->get();

            $new_arrivals_id = $related_products_category_parent_id[0]->category_parent_id;
            $new_arrivals_category_products = DB::table('product')
                ->where('category_parent_id','=',$new_arrivals_id)
                ->select('id')
                ->get();
            $number_of_rows = count($new_arrivals_category_products);
            $new_arrivals_product_image = array();
            for($i=0; $i<$number_of_rows;$i++)
            {
//            $products = DB::table('product')
//                                ->join('files','product.id','=','files.product_id')
//                                ->where('product.category_id','=',$new_arrivals_id)
//                                ->where('files.product_id', '=', $new_arrivals_category_product_image[$i]->id)
//                                ->select('product.*','files.file_path')
//                                ->orderBy('files.file_path', 'asc')
//                                ->get();
                $new_arrivals_products_images = DB::table('files')
                    ->where('product_id','=',$new_arrivals_category_products[$i]->id)
                    ->select('product_id','file_path')
                    ->take(1)->get();
                $new_arrivals_product_image['file_path_'. $i] = $new_arrivals_products_images[0]->file_path;

            }
            $related_products = Product::where('category_parent_id','=',$new_arrivals_id)->get();
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
            var_dump($product); exit;
            $product = DB::table('product')
                ->leftJoin('categories','product.category_parent_id','=','categories.parent_id')
                ->where('product.id','=',$id)->get();
//            var_dump($product); exit;
            $related_products_category_parent_id = DB::table('product')
                ->where('id','=', $id)
                ->select('category_parent_id')
                ->get();

            $new_arrivals_id = $related_products_category_parent_id[0]->category_parent_id;
            $new_arrivals_category_products = DB::table('product')
                ->where('category_parent_id','=',$new_arrivals_id)
                ->select('id')
                ->get();
            $number_of_rows = count($new_arrivals_category_products);
            $new_arrivals_product_image = array();
            for($i=0; $i<$number_of_rows;$i++)
            {
//            $products = DB::table('product')
//                                ->join('files','product.id','=','files.product_id')
//                                ->where('product.category_id','=',$new_arrivals_id)
//                                ->where('files.product_id', '=', $new_arrivals_category_product_image[$i]->id)
//                                ->select('product.*','files.file_path')
//                                ->orderBy('files.file_path', 'asc')
//                                ->get();
                $new_arrivals_products_images = DB::table('files')
                    ->where('product_id','=',$new_arrivals_category_products[$i]->id)
                    ->select('product_id','file_path')
                    ->take(1)->get();
                $new_arrivals_product_image['file_path_'. $i] = $new_arrivals_products_images[0]->file_path;

            }
            $related_products = Product::where('category_parent_id','=',$new_arrivals_id)->get();
        }
//        var_dump($product); exit;

        return view('pages.frontend.product-view')->with('product',$product)->with('images',$images)->with('related_products',$related_products)->with('new_arrivals_product_image',$new_arrivals_product_image);
        //->with('related_products',$related_products)->with('related_products',$related_products)->with('new_arrivals_product_image',$new_arrivals_product_image)
    }











    /*
     * My code upwards
     * Other code downwards
     */

    public function adminIndex()
    {
        $data = Executive::all();
        return view('pages.backend.executive')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.backend.executive_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->file('file_3') != null) {
            $image = $request->file('file_3');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/executive' . $filename);
            Image::make($image->getRealPath())->resize(210, 210)->save($path);
        }
        else{
            $imageName = "n/a";
        }


        Executive::create([
            'name_en'      => $request->get('title_en'),
            'name_bn'      => $request->get('title_bn'),
            'designation_en'      => $request->get('d_en'),
            'designation_bn'      => $request->get('d_bn'),
            'details_en'      => $request->get('details_en'),
            'details_bn'      => $request->get('details_bn'),
            'image'      => $filename
        ]);

        return Redirect::to('admin-executive-body');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $editdata = Executive::findOrFail(json_decode($id));

        return view('pages.backend.executive_edit')->with('editdata',$editdata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('file_3') != null) {
            $image = $request->file('file_3');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/executive' . $filename);
            Image::make($image->getRealPath())->resize(210, 210)->save($path);
        }

        $editdata = Executive::findOrFail($id);
        $editdata->name_en = $request->get('title_en');
        $editdata->name_bn = $request->get('title_bn');
        $editdata->designation_en = $request->get('d_en');
        $editdata->designation_bn = $request->get('d_bn');
        $editdata->details_en = $request->get('details_en');
        $editdata->details_bn = $request->get('details_bn');
        if ($request->file('file_3') != null) {
            $editdata->image = $filename;
        }
        $editdata->save();
        return Redirect::to('admin-executive-body');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $todo = Executive::findOrFail($id);
        $todo->delete();
    }
}
