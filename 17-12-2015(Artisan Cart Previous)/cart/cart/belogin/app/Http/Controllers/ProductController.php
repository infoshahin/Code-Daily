<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Tag;
use App\Http\Models\Product;
use App\Http\Models\Category;
use DB;
use Redirect;
use Session;
use Input;
use App\Repositories\ProductRepository;
use Gate;

class ProductController extends Controller
{
    public function __construct(Product $products, ProductRepository $productRepo){
        $this->middleware('auth');
        $this->loadProductModel = $products;
        $this->productRepo = $productRepo;
        View()->share('product_model', $this->loadProductModel);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return View('backend.pages.product')->with('products',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        $tags = Tag::all();
        return View('backend.pages.product_create')->with('categorys',$categorys)->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $category_parent_id = Category::findOrFail(Input::get('category'));
      $c_p_id = $category_parent_id->parent_id;
       $data = new Product;
       $data->product_title = Input::get('title');
       $data->product_details = Input::get('details');
       $data->category_id = Input::get('category');
       //   if( $c_p_id == 0){
       //  $data->category_parent_id =   Input::get('category');
       // }
       // else{
       //  $data->category_parent_id =   $c_p_id;
       // }
       
       $data->category_parent_id =   $c_p_id;
       $data->quantity = Input::get('quantity');
       $data->product_price = Input::get('price');
       $data->user_id = \Auth::user()->id;
       $data->save();
        Session::flash('sucess', 'Product Saved!..');
       return Redirect::to('product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categorys = Category::all();
         $editData = Product::findOrFail($id);
         return view('backend.pages.product_edit')->with('categorys',$categorys)->with('editdata',$editData);
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
      $category_parent_id_update = Category::findOrFail(Input::get('category'));
      $c_p_id_update = $category_parent_id_update->parent_id;

       $updateData = Product::findOrFail($id);
       $updateData->product_title = $request->get('title');
       $updateData->product_details = $request->get('details');
       $updateData->quantity = Input::get('quantity');
       $updateData->product_price = $request->get('price');
       $updateData->category_id = $request->get('category');
       $updateData->category_parent_id =   $c_p_id_update;
       $updateData->save();
        Session::flash('sucess', 'Product Updated!..');
       return Redirect::to('product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     $post = Product::findOrFail($id);

        if (Gate::denies('authorization', $post)) {
            echo "not ok";
               exit();
            }

       $allPic  = $this->productRepo->forProductPic($id);
       foreach ($allPic as $image) {
             $file= $image->file_path;
        $filename = public_path().'/uploads/'.$file;
        \File::delete($filename);
        DB::table('files')->where('product_id', $id)->delete();
         }
       $deleteData = Product::destroy($id);
        Session::flash('sucess', 'Product Updated!..');
       return Redirect::to('product');
    }
}
