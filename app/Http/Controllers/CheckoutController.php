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
            'alamat'=>'required',
            'rtw'=>'required',
            'kelurahan'=>'required',
            'kecamatan'=>'required',
            'kota'=>'required',
            'provinsi'=>'required',
            'zip'=>'required'
        ]);

        $form = new Form;
        $form->first = $request->first;
        $form->last = $request->last;
        $form->number = $request->number;
        $form->alamat = $request->alamat;
        $form->rtw = $request->rtw;
        $form->kelurahan= $request->kelurahan;
        $form->kecamatan = $request->kecamatan;
        $form->kota = $request->kota;
        $form->provinsi = $request->provinsi;
        $form->zip = $request->zip;
        $form->save();
        $sub = str_replace(',', '', Cart::subtotal()) + 10000;
        //Mail::to('test@gmail.com')->send(new FormPosted($form));
        return view('pages/confirmation')->with([
            'form'=> $form,
            'sub' => $sub,
            ]);
    }
}
