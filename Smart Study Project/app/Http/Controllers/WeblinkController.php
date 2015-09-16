<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Weblink;
use App\Executive;
use Validator;
use Input;
use DB;
use File;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

class WeblinkController extends Controller
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
        $weblinks = Weblink::all();
        return view('pages.backend.weblink-list')->with('weblinks', $weblinks);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //2. This method relates to the "add new image" view
        return view('pages.backend.weblink-create');
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
            'weblink_title_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'weblink_title_bn'     => 'required',
            'weblink_url' => 'required'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $weblink = new Weblink;

        // save data into database //
        $weblink->weblink_title_en = $request->input('weblink_title_en');
        $weblink->weblink_title_bn = $request->input('weblink_title_bn');
        $weblink->weblink_url = $request->input('weblink_url');
        $weblink->save();
        return redirect('weblink');
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
        $editdata = Weblink::find($id);
        return view('pages.backend.weblink-edit')->with('weblink', $editdata);
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
            'weblink_title_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'weblink_title_bn'     => 'required|regex:/^[A-Za-z ]+$/',
            'weblink_url' => 'required'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $editdata = Weblink::findOrFail($id);
        $editdata->weblink_title_en = $request->get('weblink_title_en');
        $editdata->weblink_title_bn = $request->get('weblink_title_bn');
        $editdata->weblink_url = $request->get('weblink_url');
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
        $weblink = Weblink::find($id);
        $weblink->delete();
        return redirect('/weblink');
    }
}
