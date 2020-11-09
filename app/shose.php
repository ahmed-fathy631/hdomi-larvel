<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shose extends Model
{
    protected $fillable = [
        'name', 'description', 'price','image',
    ];
}
