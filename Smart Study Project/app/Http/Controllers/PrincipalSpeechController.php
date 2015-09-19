<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PrincipalSpeech;
use App\Executive;
use Validator;
use Input;
use DB;
use File;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

class PrincipalSpeechController extends Controller
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
        $speech = PrincipalSpeech::all();
        return view('pages.backend.speech-list')->with('speech', $speech);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //2. This method relates to the "add new image" view
        return view('pages.backend.speech-create');
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
            'speech_title_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'speech_title_bn'     => 'required',
            'speech_en' => 'required',
            'speech_bn' => 'required'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $speech = new PrincipalSpeech;

// to finally create image instances
        // upload the image //

        $file = $request->file('userfile');
        $filename = date('Y-m-d').'_'. str_random(6). '.'.$file->getClientOriginalExtension();
        $destination_path = public_path('principal_uploads\\');
        $file-> move($destination_path, $filename);
//        \Image::make($file->getRealPath())->resize(200, 200)->save($destination_path);

        // save image data into database //
        $speech->file = $filename;
        $speech->speech_title_en = $request->input('speech_title_en');
        $speech->speech_title_bn = $request->input('speech_title_bn');
        $speech->speech_en = $request->input('speech_en');
        $speech->speech_bn = $request->input('speech_bn');
        $speech->save();
        return redirect('principal-speech');
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
        $editdata = PrincipalSpeech::find($id);
        return view('pages.backend.speech-edit')->with('principalspeech', $editdata);
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
            'speech_title_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'speech_title_bn'     => 'required',
            'speech_en' => 'required',
            'speech_bn' => 'required',
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }
        //image, caption & description edit
        if ($request->file('userfile') != null) {
            $delete_previous = DB::table('principal_speech')->where('id', $id)->first();
            $file= $delete_previous->file;
            $filename = public_path().'/principal_uploads/'.$file;
            File::delete($filename);
            $image = $request->file('userfile');
            $filename  = date('Y-m-d').'_'. str_random(6). '.'.$image->getClientOriginalExtension();
            $destination_path = public_path('principal_uploads\\');
            $image-> move($destination_path, $filename);
//            \Image::make($image->getRealPath())->resize(210, 210)->save($path);
        }

        $editdata = PrincipalSpeech::findOrFail($id);
        $editdata->speech_title_en = $request->input('speech_title_en');
        $editdata->speech_title_bn = $request->input('speech_title_bn');
        $editdata->speech_en = $request->input('speech_en');
        $editdata->speech_bn = $request->input('speech_bn');
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
        $image = DB::table('principal_speech')->where('id', $id)->first();
        $file= $image->file;
        $filename = public_path().'/principal_uploads/'.$file;
        File::delete($filename);
        $image = PrincipalSpeech::find($id);
        $image->delete();
        return redirect('/principal-speech');
    }
}
