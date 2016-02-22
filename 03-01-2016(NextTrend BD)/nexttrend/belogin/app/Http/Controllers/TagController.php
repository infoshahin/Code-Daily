<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Tag;
use DB;
use Redirect;
use Session;
use Input;

class TagController extends Controller
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
        $data = Tag::all();
        return View('backend.pages.tag')->with('tags',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('backend.pages.tag_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new Tag;
       $data->tag_title = Input::get('title');
        $data->user_id = \Auth::user()->id;
       $data->save();
       Session::flash('sucess', 'Tag Saved!..');
       return Redirect::to('tag/create');
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
        $data = Tag::findOrFail($id);
        return View('backend.pages.tag_edit')->with('tag',$data);
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

        $data =  Tag::findOrFail($id);
          $data->tag_title = Input::get('title');
          $data->save();
        Session::flash('sucess', ' Tag Updated!..');
        return Redirect::to('tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
