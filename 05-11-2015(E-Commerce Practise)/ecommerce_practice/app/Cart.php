<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /*
     * Table name
     */
    protected $table = 'item';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'product_id',
        'qty',
        'user_ip',
        'user_id',
        'status',
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
