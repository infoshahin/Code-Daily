<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Career;
use App\Executive;
use Validator;
use Input;
use DB;
use File;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

class CareerController extends Controller
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
        $career = Career::all();
        return view('pages.backend.career-list')->with('career', $career);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //2. This method relates to the "add new image" view
        return view('pages.backend.career-create');
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
            'job_title_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'job_title_bn'     => 'required|regex:/^[A-Za-z ]+$/',
            'posting_date' => 'required',
            'end_date' => 'required',
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $career = new Career;

// to finally create image instances
        // upload the image //

        $file = $request->file('userfile');
        $filename = date('Y-m-d').'_'. str_random(6). '.'.$file->getClientOriginalExtension();
        $destination_path = public_path('career_uploads\\');
        $file-> move($destination_path, $filename);
//        \Image::make($file->getRealPath())->resize(200, 200)->save($destination_path);

        // save image data into database //
        $career->file = $filename;
        $career->job_title_en = $request->input('job_title_en');
        $career->job_title_bn = $request->input('job_title_bn');
        $career->posting_date = $request->input('posting_date');
        $career->end_date = $request->input('end_date');
        $career->save();
        return redirect('career');
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
        $editdata = Career::find($id);
        return view('pages.backend.career-edit')->with('career', $editdata);
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
            'job_title_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'job_title_bn'     => 'required|regex:/^[A-Za-z ]+$/',
            'posting_date' => 'required',
            'end_date' => 'required',
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }
        //image, caption & description edit
        if ($request->file('userfile') != null) {
            $delete_previous = DB::table('career')->where('id', $id)->first();
            $file= $delete_previous->file;
            $filename = public_path().'/career_uploads/'.$file;
            File::delete($filename);
            $image = $request->file('userfile');
            $filename  = date('Y-m-d').'_'. str_random(6). '.'.$image->getClientOriginalExtension();
            $destination_path = public_path('career_uploads\\');
            $image-> move($destination_path, $filename);
//            \Image::make($image->getRealPath())->resize(210, 210)->save($path);
        }

        $editdata = Career::findOrFail($id);
        $editdata->job_title_en = $request->get('job_title_en');
        $editdata->job_title_bn = $request->get('job_title_bn');
        $editdata->posting_date = $request->get('posting_date');
        $editdata->end_date = $request->get('end_date');
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
        $image = DB::table('career')->where('id', $id)->first();
        $file= $image->file;
        $filename = public_path().'/career_uploads/'.$file;
        File::delete($filename);
        $image = Career::find($id);
        $image->delete();
        return redirect('/career');
    }
}
