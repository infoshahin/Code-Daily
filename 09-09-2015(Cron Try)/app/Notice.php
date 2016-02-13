<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    /*
     * Table name
     */
    protected $table = 'notice_board';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'file',
        'notice_name_bn',
        'notice_name_en',
        'notice_description_bn',
        'notice_description_en',
        'notice_from',
        'notice_to',
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
