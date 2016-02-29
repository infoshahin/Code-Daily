<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Category;


class Product extends Model
{
     protected $table = 'products';

     public static function checkCategory($id){
     	$data = Category::findOrFail($id);
     	return $data->title;
     	// {!! HTML::image('images/executive'.$value->image, 'a picture', array('width' => '100px','height' => '50px')) !!}
     }

       public static function checkProducttitle($id){
     	$data = Product::findOrFail($id);
     	return $data->product_title;     	
     }
       public static function getAllPicture($id){
          $data = Product::findOrFail($id);
          return $data->file_path;       
     }
}
