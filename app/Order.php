<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product', 'quantity','first', 'last', 'number', 'add1', 'add2', 'city', 'district', 'zip' ];
}
