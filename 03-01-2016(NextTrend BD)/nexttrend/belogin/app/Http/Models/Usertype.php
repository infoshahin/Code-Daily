<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Usertype extends Model
{
    protected $table = 'user_type';

    public function getUsers(){
    	return	DB::table('user_type')->get();
    }

    public function getUsersWhere($id){
    	return	DB::table('user_type')->where('id',$id)->get();
    }

}
