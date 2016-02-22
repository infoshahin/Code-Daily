<?php

namespace App\Http\Controllers;
use Illuminate\Http\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Usertype;

class UsertypeController extends Controller
{

    public function __construct(Usertype $usertype){
          $this->middleware('auth');
        $this->usertype = $usertype;
        // $objModelCons = $this->usertype;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
       $objModel = new Usertype();
       $dataOne = $objModel->getUsers();
       $data = $objModel->getUsersWhere(1);
       echo "<pre>";
       print_r($dataOne);
       echo "</pre><br><pre>";
       print_r($data);
    }

    public function index()
    {
      
       $dataOne =  $this->usertype->getUsers();
       $data =  $this->usertype->getUsersWhere(1);     
       echo "<br><pre>";
       print_r($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
