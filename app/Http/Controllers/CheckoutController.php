<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Form;
use App\Mail\FormPosted;
use Illuminate\Support\Facades\Mail;



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

    public function create(){

        return redirect()->route('home');
    }

    public function store(Request $request){
        $this->validate($request, [
            'first'=> 'required',
            'last'=>'required',
            'number'=>'required',
            'add1'=>'required',
            'add2'=>'required',
            'city'=>'required',
            'zip'=>'required'
        ]);

        $form = new Form;
        $form->first = $request->first;
        $form->last = $request->last;
        $form->number = $request->number;
        $form->add1 = $request->add1;
        $form->add2 = $request->add2;
        $form->city = $request->city;
        $form->zip = $request->zip;
        $form->save();
        Mail::to('test@gmail.com')->send(new FormPosted($form));
        return redirect()->route('home');
    }
}
