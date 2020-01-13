<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class CasualController extends Controller
{
    public function category(){
        $name = "Casual Wear Category";
        $products = Product::orderBy('updated_at','desc')->where('type','Casual')->get();
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
