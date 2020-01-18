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
            'featured_img'=>'mimes:jpg,jpeg,png|max:2048',
            'featured_img2'=>'mimes:jpg,jpeg,png|max:2048',
            'featured_img3'=>'mimes:jpg,jpeg,png|max:2048',
            'featured_img4'=>'mimes:jpg,jpeg,png|max:2048',
        ]);

        $fileName = time().'img1';
        $request->file('featured_img')->storeAs('public/product', $fileName);

        if($request->hasFile('featured_img2')){
            $fileName2 = time().'img2';
            $request->file('featured_img2')->storeAs('public/product', $fileName2);
        }

        if($request->hasFile('featured_img3')){
            $fileName3 = time().'img3';
            $request->file('featured_img3')->storeAs('public/product', $fileName3);
        }

        if($request->hasFile('featured_img4')){
            $fileName4 = time().'img4';
            $request->file('featured_img4')->storeAs('public/product', $fileName4);
        }
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $request->name . $product->id;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->featured_img = $fileName;

        if($request->featured_img2){
            $product->featured_img2 = $fileName2;
        }
        if($request->featured_img3){
            $product->featured_img3 = $fileName3;
        }
        if($request->featured_img4){
            $product->featured_img4 = $fileName4;
        }
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
            'featured_img'=>'mimes:jpg,jpeg,png|max:2048',
            'featured_img2'=>'mimes:jpg,jpeg,png|max:2048',
            'featured_img3'=>'mimes:jpg,jpeg,png|max:2048',
            'featured_img4'=>'mimes:jpg,jpeg,png|max:2048',
        ]);

        if($request->hasFile('featured_img')){
            $fileName = time().'img1';
            $request->file('featured_img')->storeAs('public/product', $fileName);
        }
        
        if($request->hasFile('featured_img2')){
            $fileName2 = 'img2';
            $request->file('featured_img2')->storeAs('public/product', $fileName2);
        }

        if($request->hasFile('featured_img3')){
            $fileName3 = time().'img3';
            $request->file('featured_img3')->storeAs('public/product', $fileName3);
        }

        if($request->hasFile('featured_img4')){
            $fileName4 = time().'img4';
            $request->file('featured_img4')->storeAs('public/product', $fileName4);
        }
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = $request->name . $product->id;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = $request->price;

        if($request->hasFile('featured_img')){
            $product->featured_img = $fileName;
        }
        if($request->hasFile('featured_img2')){
            $product->featured_img2 = $fileName2;
        }
        if($request->hasFile('featured_img3')){
            $product->featured_img3 = $fileName3;
        }
        if($request->hasFile('featured_img4')){
            $product->featured_img4 = $fileName4;
        }
        $product->save();
        return redirect()->route('admin.home');        
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.home');
    }

    public function destroyImg2($id){
        $product = Product::find($id);
        $product->featured_img2 = null;
        $product->save();
        return redirect()->route('admin.edit',['id'=> $id]);        

    }
    public function destroyImg3($id){
        $product = Product::find($id);
        $product->featured_img3 = null;
        $product->save();       
         return redirect()->route('admin.edit',['id'=> $id]);  ; 
    }

    public function destroyImg4($id){
        $product = Product::find($id);
        $product->featured_img4 = null;
        $product->save();
        return redirect()->route('admin.edit',['id'=> $id]);   
    }
}
