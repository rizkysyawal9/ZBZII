<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


use App\Type;
use App\Product;
class Zeeners extends Controller
{
    public function index(){
        $products = Product::orderBy('updated_at','desc')->paginate(10);
        return view('/zeener/index',['products'=> $products]);
    }

    public function create(){
        $type = Type::all();
        return view('/zeener/create')->with('types', $type);
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:100',
            'details'=>'required|max:100',
            'price'=>'required',
            'description'=>'required',
            'featured_img'=>'mimes:jpg,jpeg,png|max:2048'
        ]);

        $fileName = time().'png';
        $request->file('featured_img')->storeAs('public/product', $fileName);
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $request->name . $product->id;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->featured_img = $fileName;
        $product->save();
        return redirect()->route('admin.home');
    }

    public function show($id){

    }

    public function edit($id){
        $product = Product::find($id);
        $type = Type::all();
        return view('zeener/edit')->with([
            'product'=>$product, 
            'types'=> $type
            ]);
    }
    
    public function update(Request $request, $id){
        $this->validate($request, [
            'name'=>'required|max:100',
            'details'=>'required|max:100',
            'price'=>'required',
            'description'=>'required',
            'featured_img'=>'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);
        if($request->featured_img){
            $fileName = time().'png';
            $request->file('featured_img')->storeAs('public/product', $fileName);
        }
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = $request->name . $product->id;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = $request->price;
        if($request->featured_img){
            $product->featured_img = $fileName;
        }
        $product->save();
        return redirect()->route('admin.home');        
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.home');    }
}
