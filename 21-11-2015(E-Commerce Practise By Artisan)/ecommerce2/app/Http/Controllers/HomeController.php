<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Input;
use Redirect;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all()->where('parent_id', '=', '0');
        $new_arrivals = DB::table('categories')
            ->select('id')
            ->where('title','=','NEW ARRIVAL')->get();
        $new_arrivals_id = $new_arrivals[0]->id;
        $products = Product::where('category_id','=',$new_arrivals_id)->get();
        return view('pages.frontend.home')->with('categories',$categories)->with('products',$products);
    }

    public function CategoryDetails($id)
    {
        if(is_numeric($id)== true)
        {
            $categories = Category::where('parent_id', '=', '0')->with('subCategory')->get();

            $getProductCategory = DB::table('categories')
                ->select('parent_id')
                ->where('id','=',$id)->get();

            if($getProductCategory[0]->parent_id == '0')
            {
                $products = Product::where('category_parent_id','=',$id)->paginate(3);
            }
            else
            {
                $products = Product::where('category_id','=',$id)->paginate(3);
            }
        }

        else
        {
            $get_category_id = DB::table('categories')
            ->select('id')
            ->where('title','=',$id)->get();

            $id = $get_category_id[0]->id;

            $categories = Category::where('parent_id', '=', '0')->with('subCategory')->get();

            $getProductCategory = DB::table('categories')
            ->select('parent_id')
            ->where('id','=',$id)->get();

            if($getProductCategory[0]->parent_id == '0')
            {
                $products = Product::where('category_parent_id','=',$id)->paginate(3);
            }
            else
            {
                $products = Product::where('category_id','=',$id)->paginate(3);
            }
        }

        return view('pages.frontend.product-list')->with('categories',$categories)->with('products',$products);
    }

    public function ProductDetails($id)
    {
        $product = Product::where('id','=',$id)->get();
//        print_r($product); exit;
        return view('pages.frontend.product-view')->with('product',$product);
    }

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
