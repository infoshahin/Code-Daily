<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'history';

    protected $fillable = [
        'title_en',
        'title_bn',
        'description_en',
        'description_bn',
    ];
}
