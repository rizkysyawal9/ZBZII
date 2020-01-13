<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['first', 'last', 'number', 'add1', 'add2', 'city', 'district', 'zip' ];
}
