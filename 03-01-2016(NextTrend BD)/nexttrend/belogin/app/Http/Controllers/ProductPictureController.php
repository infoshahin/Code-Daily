<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Tag;
use App\Http\Models\Product;
use App\Http\Models\ProductPicture;
use App\Http\Models\Category;
use DB;
use Redirect;
use Session;
use Input;

class ProductPictureController extends Controller
{
    public function __construct(Product $products){
        $this->middleware('auth');
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
        $data = ProductPicture::all();
        return View('backend.pages.productpicture')->with('products',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data = Product::all();
         return View('backend.pages.productpicture_create')->with('products',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::all();
        $editData = ProductPicture::findOrFail($id);
        return view('backend.pages.productpicture_edit')->with('editdata',$editData)->with('products',$data);
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

       if(Input::get('thumb') == 1){
          $data = \DB::table('files')->where('product_id', '=',Input::get('product_id'))->where('thumb', '=','1')->get();
          if(count($data) > 0){
          $thumb = ProductPicture::findOrFail($data[0]->id);
          $thumb->thumb =  0;
          $thumb->save();
        }

       }
        else{
        $data = \DB::table('files')->where('product_id', '=',Input::get('product_id'))->get();
          $thumb = ProductPicture::findOrFail($data[0]->id);
          $thumb->thumb =  0;
          $thumb->save();     
       }

        if ($request->file('image') != null) {
          $extension = Input::file('image')->getClientOriginalExtension(); // getting file extension
          $imageName = Input::get('image').rand(11111, 99999) . '.' . $extension; // renameing image
          $request->file('image')->move(
          base_path() . '/public/uploads/', $imageName
          );
        }
        else{
            $imageName =  Input::get('old_image');
         }
        $data = ProductPicture::findOrFail($id);
        $data->product_id = Input::get('product_id');
        $data->file_path =  $imageName;
        if(Input::get('thumb') == 1){
        $data->thumb =  Input::get('thumb');
        }
        $data->save();
        Session::flash('sucess', 'Product Image Updated!..');
        return Redirect::to('productpicture');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = DB::table('files')->where('id', $id)->first();
        $file= $image->file_path;
        $filename = public_path().'/uploads/'.$file;
        \File::delete($filename);
        ProductPicture::destroy($id);
        Session::flash('sucess', 'Image Deleted!..');
        return Redirect::to('productpicture');
    }

      public function batchDelete()
    {
        try {
            $datas =Input::get('ids_to_delete');
            foreach ($datas as $data) {
            $image = DB::table('files')->where('id',$data)->first();
            $file= $image->file_path;
            $filename = public_path().'/uploads/'.$file;
            \File::delete($filename);
            }
            ProductPicture::destroy(Input::get('ids_to_delete'));
            Session::flash('sucess', 'Image Deleted!..');
           return Redirect::to('productpicture');
         }
           catch(\Exception $e) {
          Session::flash('sucess', 'Please select image!..');
       return Redirect::to('productpicture');
            }
    }
}
