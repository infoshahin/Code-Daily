<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    /*
     * Table name
     */
    protected $table = 'career';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'file',
        'job_title_en',
        'job_title_bn',
        'posting_date',
        'end_date',
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
