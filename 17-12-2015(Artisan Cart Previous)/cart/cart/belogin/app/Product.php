<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'product_title',
        'product_details',
        'product_price',
        'product_sku',
        'category_id',
        'image',
        'user_id',
    ];
}
