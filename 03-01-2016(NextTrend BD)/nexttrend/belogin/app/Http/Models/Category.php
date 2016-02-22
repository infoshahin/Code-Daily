<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
     protected $table = 'category';

      public static function insertData($request){
    	 
      	  DB::table('category')           
            ->insert(
                [
            'parent_id' => $request->parent,
            'title' => $request->title,
            'details' =>  $request->details,
            'status' => 1,
            'user_id' =>  \Auth::user()->id,
            'show_home' =>  $request->show_home,            
            ]
            );
            return "ok";
        }

     public static function parentCheck($id){
     	  if ($id == 0) {
         return 'Root';
        }
        else{
        $data = DB::table('category')->where('id',$id)->get();
         return $data[0]->title;
         }
        }

    public static function updateData($id,$request){
      	  DB::table('category')
            ->where('id', $id)
            ->update(
                [
            'parent_id' => $request->parent,
            'title' => $request->title,
            'details' =>  $request->details,
            'status' => 1,
            'user_id' =>  \Auth::user()->id,
            ]
            );
            return "ok";
        }



}
