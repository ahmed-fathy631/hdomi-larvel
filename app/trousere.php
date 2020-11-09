<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trousere extends Model
{
    protected $fillable = [
        'name', 'description', 'price','image',
    ];
}
