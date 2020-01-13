<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    public function category(){
        $name = "Daily Wear Category";
        $products = Product::orderBy('updated_at','desc')->where('type','Daily')->take(14)->get();
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
