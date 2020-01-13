<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function category(){
        $name = "Party Dress Category";
        $products = Product::orderBy('updated_at','desc')->where('type','Party')->take(14)->get();
        return view('pages.Product-type')->with(
            [
                'products' => $products,
                'category' => $name
            ]
            );
    }

    public function show($slug){
        $products = Product::where('slug', $slug)->first();
        return view('pages.single-Product')->with('products', $products); 
    }
}
