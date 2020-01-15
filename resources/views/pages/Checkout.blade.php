@extends('layouts.template')

@section('title', 'Checkout')

@section('breadcrumb')
    <!-- breadcrumb start-->
    <!-- MASI HARDCODE :( -->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Checkout</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->
@endsection

@section('content')
<section>
    <div class="container">
        <div class="billing_details section_padding">
            <div class="row">
              <div class="col-lg-8">
                <h3>Billing Details</h3>
                <form class="row contact_form" action="{{ route('checkout.store') }}" method="post" novalidate="novalidate">
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="first" name="first" value="{{ old('first') }}" placeholder="First name" />
                    @if($errors->has('first'))
                    <p>{{ $errors->first('first') }}</p>
                    @endif
                  </div>
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="last" name="last" value="{{ old('last') }}" placeholder="Last name"/>
                    @if($errors->has('last'))
                    <p>{{ $errors->first('last') }}</p>
                    @endif
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <input type="number" class="form-control" id="number" name="number" value="{{ old('number') }}" placeholder="Phone number" />
                    @if($errors->has('number'))
                    <p>{{ $errors->first('number') }}</p>
                    @endif
                  </div>
                  <!-- Alamat Lengkap -->
                  <div class="col-md-12 form-group p_star">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" ></textarea>
                  </div>
                  <!-- RT/RW -->
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control"  placeholder="RT/RW"/>
                  </div>
                  <!-- Kelurahan -->
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="add1" name="add1" value="{{ old('add1') }}" placeholder="Kelurahan"/>
                    @if($errors->has('add1'))
                    <p>{{ $errors->first('add1') }}</p>
                    @endif
                  </div>
                  <!-- Kecamatan -->
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="add2" name="add2" value="{{ old('add2') }}" placeholder="Kecamatan" />
                    @if($errors->has('add2'))
                    <p>{{ $errors->first('add2') }}</p>
                    @endif
                  </div>
                  <!-- Kota -->
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" placeholder="Kota/Kabupaten" />
                  </div>
                  <!-- Provinsi -->
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" placeholder="Provinsi"/>
                    @if($errors->has('city'))
                    <p>{{ $errors->first('city') }}</p>
                    @endif
                  </div>
                  <!-- post code -->
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Kode Pos" value="{{ old('zip') }}" />
                    @if($errors->has('zip'))
                    <p>{{ $errors->first('zip') }}</p>
                    @endif
                  </div>

                  <div class="col-lg-12">
                    <div class="order_box">
                      <h2>Your Order</h2>
                      <table class="table table-borderless">
                        <thead>
                          <tr class="tr-list">
                            <th scope="col" colspan="5">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach(Cart::content() as $item)
                          <tr class="tr-list">
                            <th colspan="5"><span>{{ $item->name }} </span></th>
                            <th>x {{ $item ->qty}} </th>
                            <th> <span>@currency($item->price)</span></th>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr class="tr-list">
                            <th scope="col" colspan="5">Subtotal</th>
                            <th scope="col" ></th>
                            <th scope="col">Rp. {{ Cart::subtotal() }} </th>
                          </tr>
                          <tr class="tr-list">
                            <th scope="col"colspan="5">Shipping</th>
                            <th scope="col" ></th>
                            <th scope="col">Flat rate: @currency($rate)</th>
                          </tr>
                          <tr class="tr-list">
                            <th scope="col" colspan="5">Total</th>
                            <th scope="col" ></th>
                            <th scope="col">@currency($sub)</th>
                          </tr>
                        </tfoot>
                      </table>
                  </div>
                  
                  {{ csrf_field() }}
                  <input type="hidden" name="method" value="POST">
                  <div class="checkout_btn_inner">
                    <input class= "btn_1" type="submit" name="submit" value="Lanjutkan Pembayaran">
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection