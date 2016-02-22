<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Input;
use Validator;
use Request;
use Response;
use App\Http\Models\Files;


class DropzoneController extends Controller {

      public function __construct(){
          $this->middleware('auth');
    }

    public function index() {
        return view('dropzone_demo');
    }

    public function uploadFiles() {

       $product_id = Input::get('product_id');
        $input = Input::all();

        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $destinationPath = 'uploads'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension
        $fileName = Input::get('product_id').rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

        if ($upload_success) {
            $image = New Files();
            $image->product_id = Input::get('product_id');
            $image->file_path = $fileName;
             $image->user_id = \Auth::user()->id;
            $image->save();

            $check = Files::where('product_id', '=', $product_id)->where('thumb','=','1')->get();

            if (count($check) < 1) {
              $data = Files::where('product_id', '=',  $product_id)->where('thumb','=','0')->get();
              $thumb = Files::findOrFail($data[0]->id);
              $thumb->thumb = 1;
              $thumb->save();
            }



            return Response::json('success', 200);

        } else {
            return Response::json('error', 400);
        }
    }

}
