<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    protected $table = 'executive';
 
  protected $fillable = [
        'name_en',
        'name_bn',
        'designation_en',
        'designation_bn',
         'details_en',
        'details_bn',
        'image',
    ];
}
