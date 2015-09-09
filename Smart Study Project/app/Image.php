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
        'caption_bn',
        'caption_en',
        'description_bn',
        'description_en',
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
