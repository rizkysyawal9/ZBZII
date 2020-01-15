<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()  
    {
        $products = Product::orderBy('updated_at','desc')->take(4)->get();
        return view('pages.home')->with('products', $products);
    }
    public function ProductType()
    {
        $products = Product::inRandomOrder()->take(14)->get();
        return view('pages.Product-type')->with('products', $products);
    }

    public function category($type){

        if($type = "Daily") 
             $product = Product::inRandomOrder()->where('type', 'Daily')->take(14)->get();
        elseif($type == "Casual")
            $product = Product::inRandomOrder()->where('type', 'Casual')->take(14)->get();
        elseif($type == "Party")
            $product = Product::inRandomOrder()->where('type', 'Party')->take(14)->get(); 

        return view('pages.Product-type')->with('products', $products);
    }

 /*   public function Party(){
        $products = Product::inRandomOrder()->where('type','Party')->take(14)->get();
        return view('pages.Product-type')->with('products', $products);
    }

    public function Casual(){
        $products = Product::inRandomOrder()->where('type','Casual')->take(14)->get();
        return view('pages.Product-type')->with('products', $products);
    }*/

    public function single_product(){
        return view('pages.single-Product');
    }
    public function Cart(){
        return view('pages.cart');
    }    
    public function checkout(){
        return view('pages.checkout');
    }
    public function confirmation($id){
        $form = Form::find($id);
        $sub = str_replace(',', '', Cart::subtotal()) + 10000;
        return view('pages.confirmation')->with([
                'form'=> $form,
                'sub' => $sub
            ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      //  $product = Product::where('slug', $slug)->firstOrFail();
       // return view('product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }
}
