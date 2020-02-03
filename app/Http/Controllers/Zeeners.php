<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



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

        // $fileName = time().'img1';
        $image = $request->file('featured_img');
        $extention = $image->getClientOriginalExtension();
       // $request->file('featured_img')->storeAs('public/product', $fileName);
        Storage::disk('public')->put($image->getFilename().'.'.$extention, File::get($image));

        if($request->hasFile('featured_img2')){
            $image2 = $request->file('featured_img2');
            $extention2 = $image2->getClientOriginalExtension();
            Storage::disk('public')->put($image2->getFilename().'.'.$extention2, File::get($image2));
        }

        if($request->hasFile('featured_img3')){
            $image3 = $request->file('featured_img3');
            $extention3 = $image3->getClientOriginalExtension();
            Storage::disk('public')->put($image3->getFilename().'.'.$extention3, File::get($image3));
        }

        if($request->hasFile('featured_img4')){
            $image4 = $request->file('featured_img4');
            $extention4 = $image4->getClientOriginalExtension();
            Storage::disk('public')->put($image4->getFilename().'.'.$extention4, File::get($image4));
        }

        // if($request->hasFile('featured_img3')){
        //     $fileName3 = time().'img3';
        //     $request->file('featured_img3')->storeAs('public/product', $fileName3);
        // }

        // if($request->hasFile('featured_img4')){
        //     $fileName4 = time().'img4';
        //     $request->file('featured_img4')->storeAs('public/product', $fileName4);
        // }
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $request->name . $product->id;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->featured_img = $image->getFilename().'.'.$extention;
        $product->mime = $image->getClientMimeType();
        $product->original_filename = $image->getClientOriginalName();


        
         if($request->featured_img2){
            $product->featured_img2 = $image2->getFilename().'.'.$extention2;
            $product->mime2 = $image2->getClientMimeType();
            $product->original_filename2 = $image2->getClientOriginalName();
         }

         if($request->featured_img3){
            $product->featured_img3 = $image3->getFilename().'.'.$extention3;
            $product->mime3 = $image3->getClientMimeType();
            $product->original_filename3 = $image3->getClientOriginalName();
         }

         if($request->featured_img4){
            $product->featured_img4 = $image4->getFilename().'.'.$extention4;
            $product->mime4 = $image4->getClientMimeType();
            $product->original_filename4 = $image4->getClientOriginalName();
         }
        // if($request->featured_img3){
        //     $product->featured_img3 = $fileName3;
        // }
        // if($request->featured_img4){
        //     $product->featured_img4 = $fileName4;
        // }
        $product->save();
        dd('success');
        return redirect()->route('admin.index');
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
            $image = $request->file('featured_img');
            $extention = $image->getClientOriginalExtension();
            // $request->file('featured_img')->storeAs('public/product', $fileName);
            Storage::disk('public')->put($image->getFilename().'.'.$extention, File::get($image));
        }
        
        if($request->hasFile('featured_img2')){
            $image2 = $request->file('featured_img2');
            $extention2 = $image2->getClientOriginalExtension();
            Storage::disk('public')->put($image2->getFilename().'.'.$extention2, File::get($image2));
        }

        if($request->hasFile('featured_img3')){
            $image3 = $request->file('featured_img3');
            $extention3 = $image3->getClientOriginalExtension();
            Storage::disk('public')->put($image3->getFilename().'.'.$extention3, File::get($image3));
        }
        
        if($request->hasFile('featured_img4')){
            $image4 = $request->file('featured_img4');
            $extention4 = $image4->getClientOriginalExtension();
            Storage::disk('public')->put($image4->getFilename().'.'.$extention4, File::get($image4));
        }

        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = $request->name . $product->id;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->price = $request->price;

        if($request->hasFile('featured_img')){
            $product->featured_img = $image->getFilename().'.'.$extention;
            $product->mime = $image->getClientMimeType();
            $product->original_filename = $image->getClientOriginalName();
        }

        if($request->hasFile('featured_img2')){
            $product->featured_img2 = $image2->getFilename().'.'.$extention2;
            $product->mime2 = $image2->getClientMimeType();
            $product->original_filename2 = $image2->getClientOriginalName();
        }
        if($request->hasFile('featured_img3')){   
            $product->featured_img3 = $image3->getFilename().'.'.$extention3;
            $product->mime3 = $image3->getClientMimeType();
            $product->original_filename3 = $image3->getClientOriginalName();
        }
        if($request->hasFile('featured_img4')){
            $product->featured_img4 = $image4->getFilename().'.'.$extention4;
            $product->mime4 = $image4->getClientMimeType();
            $product->original_filename4 = $image4->getClientOriginalName();
        }

        $product->save();
        dd('sucess');
        return redirect()->route('admin.index');        
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.index');
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
