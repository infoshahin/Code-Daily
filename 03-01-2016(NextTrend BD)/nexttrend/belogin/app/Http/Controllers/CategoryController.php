<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use Input;
use DB;
use Session;
use Redirect;
use App\Http\Models\Product;

class CategoryController extends Controller
{


    public function __construct(Category $category,Product $products){
             $this->middleware('auth');
        $this->loadCategoryModel = $category;
        View()->share('parent_id', $this->loadCategoryModel);
         $this->loadProductModel = $products;
        View()->share('product_model', $this->loadProductModel);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('backend.pages.category')->with('categorys',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data = Category::all();
         return view('backend.pages.category_create')->with('categorys',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $data = Category::insertData($request);
            Session::flash('sucess','Category Saved...');
            return Redirect::to('category/create');
        }
        catch(\Exception $e){
           Session::flash('fail','oops! Something is went to wrong...');
           return Redirect::to('category/create');
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Category::all();
       $editData = Category::findOrFail($id);
       return View('backend.pages.category_edit')->with('editData',$editData)->with('categorys',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
        $status = Category::updateData($id,$request); 
         Session::flash('sucess','Updated Saved...');
        return Redirect::to('category');
        }
        catch(\Exception $e){
           Session::flash('fail','oops! Something is went to wrong...');
           return Redirect::to('category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id)->delete();
    }
}
