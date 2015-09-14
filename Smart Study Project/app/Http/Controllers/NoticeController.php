<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Notice;
use App\Executive;
use Validator;
use Input;
use DB;
use File;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

class NoticeController extends Controller
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
        $files = Notice::all();
        return view('pages.backend.notice-list')->with('files', $files);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //2. This method relates to the "add new image" view
        return view('pages.backend.notice-create');
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
            'notice_name_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'notice_name_bn'     => 'required|regex:/^[A-Za-z ]+$/',
            'notice_description_en' => 'required',
            'notice_description_bn' => 'required',
            'notice_from' => 'required',
            'notice_to',
            'userfile'     => 'mimes:jpeg,png,gif,pdf|min:1|max:2048'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $notice = new Notice;

// to finally create image instances
        // upload the image //
        if ($request->file('userfile') != null)
        {
            $file = $request->file('userfile');
            $filename = date('Y-m-d').'_'. str_random(6). '.'.$file->getClientOriginalExtension();
            $destination_path = public_path('notice_uploads\\');
            $file-> move($destination_path, $filename);
//            \Image::make($file->getRealPath())->resize(200, 200)->save($destination_path);
        }

        else
        {
            $filename = "no_image.jpg";
        }


        // save image data into database //
        $notice->file = $filename;
        $notice->notice_name_en = $request->input('notice_name_en');
        $notice->notice_name_bn = $request->input('notice_name_bn');
        $notice->notice_description_en = $request->input('notice_description_en');
        $notice->notice_description_bn = $request->input('notice_description_bn');
        $notice->notice_from = $request->input('notice_from');
        $notice->notice_to = $request->input('notice_to');
        $notice->save();
        return redirect('notice');
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
        $editdata = Notice::find($id);
        return view('pages.backend.notice-edit')->with('editdata', $editdata);
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
            'notice_name_en'     => 'required|regex:/^[A-Za-z ]+$/',
            'notice_name_bn'     => 'required|regex:/^[A-Za-z ]+$/',
            'notice_description_en' => 'required',
            'notice_description_bn' => 'required',
            'notice_from' => 'required',
            'notice_to',
            'userfile'     => 'mimes:jpeg,png,gif,pdf|min:1|max:1000'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }
        //image, caption & description edit
        if ($request->file('userfile') != null) {
            $delete_previous = DB::table('notice_board')->where('id', $id)->first();
            $file= $delete_previous->file;
            $filename = public_path().'/notice_uploads/'.$file;
            File::delete($filename);
            $image = $request->file('userfile');
            $filename  = date('Y-m-d').'_'. str_random(6). '.'.$image->getClientOriginalExtension();
            $destination_path = public_path('notice_uploads\\');
            $image-> move($destination_path, $filename);
//            \Image::make($image->getRealPath())->resize(210, 210)->save($path);
        }

        $editdata = Notice::findOrFail($id);
        $editdata->notice_name_en = $request->input('notice_name_en');
        $editdata->notice_name_bn = $request->input('notice_name_bn');
        $editdata->notice_description_en = $request->input('notice_description_en');
        $editdata->notice_description_bn = $request->input('notice_description_bn');
        $editdata->notice_from = $request->input('notice_from');
        $editdata->notice_to = $request->input('notice_to');
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
        $image = DB::table('notice_board')->where('id', $id)->first();
        $file= $image->file;
        if($file != "no_image.jpg")
        {
            $filename = public_path().'/notice_uploads/'.$file;
            File::delete($filename);
        }
        $image = Notice::find($id);
        $image->delete();
        return redirect('/notice');
    }
}
