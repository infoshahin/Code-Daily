<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Slider;
use DB;
use Redirect;
use Session;
use Input;

class SliderController extends Controller
{

      public function __construct(){
          $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('slider')->orderBy('sequence', 'asce')->get();
        return View('backend.pages.slider')->with('sliders',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.pages.slider_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->file('image') != null) {
         $destinationPath = 'uploads'; // upload path
         $extension = Input::file('image')->getClientOriginalExtension(); // getting file extension
          $fileName  = Input::get('image').rand(11111, 99999) . '.' . $extension; // renameing image
         $upload_success = Input::file('image')->move($destinationPath, $fileName);
        }
      else{
          $fileName = "n/a";
         }
        $data = new Slider;
        $data->title = Input::get('title');
        $data->details = Input::get('details');
        $data->sequence = Input::get('sequence');
        $data->new_window = Input::get('new_window');
        $data->image =   $fileName;
        $data->status =  1;
         $data->user_id = \Auth::user()->id;
        $data->save();
       Session::flash('sucess', 'Slider Saved!..');
       return Redirect::to('slider/create');
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
      $editdata = Slider::findOrFail($id);
      return view('backend.pages.slider_edit')->with('editdata', $editdata);
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


     $data = Slider::findOrFail($id);
     $data->title = Input::get('title');
     $data->details = Input::get('details');
     $data->sequence = Input::get('sequence');
     $data->title = Input::get('title');
     $data->image =  $imageName;
      $data->status =  1;
     $data->save();
    Session::flash('sucess', 'Slider Image Updated!..');
    return Redirect::to('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $image =Slider::findOrFail($id);
       $file= $image->image;
       $filename = public_path().'/uploads/'.$file;
       \File::delete($filename);
        Slider::destroy($id);
       Session::flash('sucess', 'Slider Deleted!..');
      return Redirect::to('slider');
    }
}
