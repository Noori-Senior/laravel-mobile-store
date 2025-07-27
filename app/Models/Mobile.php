<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
   protected $fillable = [
        'brand',
        'model',
        'price',
        'description',
        'image',
    ];
}
