<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shirt extends Model
{
    protected $fillable = [
        'name', 'description', 'price','image',
    ];
}
