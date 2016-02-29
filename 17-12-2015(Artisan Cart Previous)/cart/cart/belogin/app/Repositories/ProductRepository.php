<?php

namespace App\Repositories;

use App\Http\Models\Tag;
use App\Http\Models\Product;
use App\Http\Models\Category;
use App\Http\Models\ProductPicture;
use DB;

class ProductRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forProductPic($id)
    {
         $images = DB::table('files')->where('product_id', $id)->get();               
        return $images;
    }
}
