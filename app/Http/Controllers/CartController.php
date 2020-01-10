<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use Gloudemans\Shoppingcart\Contracts\Buyable;


class CartController extends Controller
{
    public function show(){
        return view('pages.cart');
    }   

    public function store(Product $product){

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });
        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add(
            $product->id, 
            $product->name, 
            1, 
            $product->price, 
            [ 'type' => $product->type ], 
            ['slug'=> $product->slug] )->associate('App\Product');;
        return redirect()->route('cart.index');
    }

    public function destroy($id){
        Cart::remove($id);
        return redirect()->route('cart.index');
    }

    public function update(Request $request, $id){
        Cart::update($id, $request->quantity);
        return $request->all();
    }
}
