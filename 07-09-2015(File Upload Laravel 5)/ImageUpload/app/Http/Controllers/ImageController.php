<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Validator;
use Input;

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //1. This method relates to the "images list" view
        $images = Image::paginate(10);
        return view('images-list')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //2. This method relates to the "add new image" view
        return view('add-new-image');
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
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'userfile'     => 'required|image|mimes:jpeg,png|min:1|max:1000'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $image = new Image;

// to finally create image instances

        // upload the image //
//        $image = Input::file('userfile');
//        $filename  = time() . '.' . $image->getClientOriginalExtension();
//        $destination_path = public_path('uploads' . $filename);
//        \Image::make($image->getRealPath())->resize(128, 128)->save($destination_path);

        $file = $request->file('userfile');
        $filename = date('Y-m-d').'_'. str_random(6). '.'.$file->getClientOriginalExtension();
        $destination_path = public_path('uploads\\' . $filename);
        \Image::make($file->getRealPath())->resize(200, 200)->save($destination_path);
        //$file-> move($destination_path, $filename);

        // save image data into database //
        $image->file = 'uploads/'.$filename;
        $image->caption = $request->input('caption');
        $image->description = $request->input('description');
        $image->save();
        return redirect('/image')
            ->with('message', 'You just uploaded an image!' );
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
        $image = Image::find($id);
        return view('edit-image')->with('image', $image);
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
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'userfile'    => 'sometimes|image|mimes:jpeg,png|min:1|max:1000'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $image = Image::find($id);

        // if user choose a file, replace the old one //
        if( $request->hasFile('userfile') ){
            $file = $request->file('userfile');
            $filename = date('Y-m-d').'_'. str_random(6). '.'.$file->getClientOriginalExtension();
            $destination_path = public_path('uploads\\' . $filename);
            \Image::make($file->getRealPath())->resize(200, 200)->save($destination_path);
            $image->file = 'uploads/'.$filename;
        }

        // replace old data with new data from the submitted form //
        $image->caption = $request->input('caption');
        $image->description = $request->input('description');
        $image->save();

        return redirect('/image')->with('message','You just updated an image!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $image = Image::find($id);
        $image->delete();
        return redirect('/image')->with('message','You just deleted an image!');
    }
}
