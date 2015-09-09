<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\About;
use App\Lang;
use Redirect;
use DB;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */



    public function adminHistory()
    {
        $about = About::find(1);

       return view('pages.backend.history')->with('data',$about);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
      About::create([
            'title_en'      => $request->get('title_en'),
            'title_bn'      => $request->get('title_bn'),
            'description_en'      => $request->get('history_en'),
            'description_bn'      => $request->get('history_bn')            
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
       $about = About::find(json_decode($id));
       $about->title_en = $request->get('title_en');
       $about->title_bn = $request->get('title_bn');
        $about->description_en = $request->get('history_en');
       $about->description_bn = $request->get('history_bn');
        $about->save();
        $lan_file = Lang::find(231);      
        $lan_file->english = $request->get('history_en');
        $lan_file->bengali = $request->get('history_bn');
        $lan_file->save();
         $lan_file_title =Lang::find(232);     
         $lan_file_title->english = $request->get('title_en');
        $lan_file_title->bengali = $request->get('title_bn');
        $lan_file_title->save();
        return Redirect::to('admin-history');
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
    }
}
