<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Orders extends Model
{
     protected $table = 'orders';

     public static function getCustomerAddress($id){
     	$data = DB::table('customers')->where('id',$id)->first();
     	return $data->firstname.",".$data->lastname."<br>".$data->phone."&nbsp;|&nbsp;".$data->email."<br>".$data->addrsss_one;
     }
}
