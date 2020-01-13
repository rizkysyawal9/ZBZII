<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'details', 'descriptio', 'type', 'price' ];
    public function presentPrice(){
        return $this->price/100;
    }
}
