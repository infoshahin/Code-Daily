<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weblink extends Model
{
    /*
     * Table name
     */
    protected $table = 'weblink';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'weblink_title_en',
        'weblink_title_bn',
        'weblink_url',
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
