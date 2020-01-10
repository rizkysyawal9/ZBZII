<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $rate = 10000;
        $sub = str_replace(',', '', Cart::subtotal()) + 10000;
        return view('pages/checkout')->with([
            'sub'=>$sub,
            'rate'=>$rate
        ]);
    }
}
