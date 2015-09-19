<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use App\Executive;
use Validator;
use Input;
use DB;
use File;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($lang)
    {
        //1. This method relates to the "images list" view
//        $images = Image::paginate(10);
//        return view('pages.backend.images-list');
    }

    public function adminIndex()
    {
        $images = Image::all();
        return view('pages.backend.image-list')->with('images', $images);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //2. This method relates to the "add new image" view
        return view('pages.backend.add-image-for-gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validation //
        $validation = Validator::make($request->all(), [
            'caption_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'caption_bn'     => 'required|regex:/^[A-Za-z ]+$/',
            'description_en' => 'required',
            'description_bn' => 'required',
            'userfile'     => 'required|image|mimes:jpg,jpeg,png,gif|min:1|max:2048'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $image = new Image;

// to finally create image instances
        // upload the image //

        $file = $request->file('userfile');
        $filename = date('Y-m-d').'_'. str_random(6). '.'.$file->getClientOriginalExtension();
        $destination_path = public_path('gallery_uploads\\');
        $file-> move($destination_path, $filename);
//        \Image::make($file->getRealPath())->resize(200, 200)->save($destination_path);

        // save image data into database //
        $image->file = $filename;
        $image->caption_en = $request->input('caption_en');
        $image->caption_bn = $request->input('caption_bn');
        $image->description_en = $request->input('description_en');
        $image->description_bn = $request->input('description_bn');
        $image->save();
        return redirect('image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
//    public function show($id)
//    {
//        //3. This method relates to the "image detail" view
//        $image = Image::find($id);
//        return view('image-detail')->with('image', $image);
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //4. This method relates to the "edit image" view
        $editdata = Image::find($id);
        return view('pages.backend.image-gallery-edit')->with('image', $editdata);
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
        //
        // Validation //
        $validation = Validator::make($request->all(), [
            'caption_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'caption_bn'     => 'required|regex:/^[A-Za-z ]+$/',
            'description_en' => 'required',
            'description_bn' => 'required',
            'userfile'     => 'image|mimes:jpg,jpeg,png,gif|min:1|max:2048'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }
        //image, caption & description edit
        if ($request->file('userfile') != null) {
            $delete_previous = DB::table('images')->where('id', $id)->first();
            $file= $delete_previous->file;
            $filename = public_path().'/gallery_uploads/'.$file;
            File::delete($filename);
            $image = $request->file('userfile');
            $filename  = date('Y-m-d').'_'. str_random(6). '.'.$image->getClientOriginalExtension();
            $destination_path = public_path('gallery_uploads\\');
            $image-> move($destination_path, $filename);
//            \Image::make($image->getRealPath())->resize(210, 210)->save($path);
        }

        $editdata = Image::findOrFail($id);
        $editdata->caption_en = $request->get('caption_en');
        $editdata->caption_bn = $request->get('caption_bn');
        $editdata->description_en = $request->get('description_en');
        $editdata->description_bn = $request->get('description_bn');
        if ($request->file('userfile') != null) {
            $editdata->file = $filename;
        }
        $editdata->save();
        return $this->adminIndex();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $image = DB::table('images')->where('id', $id)->first();
        $file= $image->file;
        $filename = public_path().'/gallery_uploads/'.$file;
        File::delete($filename);
        $image = Image::find($id);
        $image->delete();
        return redirect('/image');
    }
}
