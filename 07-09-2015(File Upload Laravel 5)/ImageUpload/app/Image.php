<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /*
     * Table name
     */
    protected $table = 'images';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'file',
        'caption',
        'description',
        'created_at',
        'updated_at'
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
