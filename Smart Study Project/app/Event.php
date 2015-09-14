<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /*
     * Table name
     */
    protected $table = 'events';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'file',
        'event_name_bn',
        'event_name_en',
        'event_description_bn',
        'event_description_en',
        'event_from',
        'event_to',
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
