<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrincipalSpeech extends Model
{
    /*
     * Table name
     */
    protected $table = 'principal_speech';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'file',
        'speech_title_en',
        'speech_title_bn',
        'speech_en',
        'speech_bn',
    ];

    /*
     * Eloquent attribute casting
     */
    protected $casts = [
        'complete' => 'boolean'
    ];
}
