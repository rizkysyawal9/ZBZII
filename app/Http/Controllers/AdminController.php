<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Support\Facades\Storage;
use App\Type;

class AdminController extends Controller
{
    public function index(){
        $products = Product::paginate(10);

        return view('/admin/index')->with('$products', $products);
    }

    public function create(){
        $type = Type::all();
        return view('/admin/create')->with('types', $type);
    }
    public function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $request->name . $product->id;
        $product->details = $request->details;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->save();

        dd("success");
    }

    public function show($id){

    }

    public function edit($id){

    }
    
    public function update(Request $request){

    }

    public function destroy($id){

    }
}
