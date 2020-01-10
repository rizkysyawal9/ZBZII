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
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="first" name="name" />
                    <span class="placeholder" data-placeholder="First name"></span>
                  </div>
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="last" name="name" />
                    <span class="placeholder" data-placeholder="Last name"></span>
                  </div>
                  <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="number" name="number" />
                    <span class="placeholder" data-placeholder="Phone number"></span>
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" id="add1" name="add1" />
                    <span class="placeholder" data-placeholder="Address line 01"></span>
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" id="add2" name="add2" />
                    <span class="placeholder" data-placeholder="Address line 02"></span>
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <input type="text" class="form-control" id="city" name="city" />
                    <span class="placeholder" data-placeholder="Town/City"></span>
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <select class="country_select">
                      <option value="1">District</option>
                      <option value="2">District</option>
                      <option value="4">District</option>
                    </select>
                  </div>
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
                  </div>
                </form>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="/">Lanjutkan Pembayaran</a>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="order_box">
                  <h2>Your Order</h2>
                  <ul class="list">
                    <li>
                      <a href="#">Product
                        <span>Total</span>
                      </a>
                    </li>
                    @foreach(Cart::content() as $item)
                    <li>
                      <a href="#">{{ $item->name }}
                        <span class="middle">x {{ $item->qty }}</span>
                        <span class="last">@currency($item->price)</span>
                      </a>
                    </li>
                    @endforeach
                    <!--
                    <li>
                      <a href="#">Fresh Tomatoes
                        <span class="middle">x 02</span>
                        <span class="last">$720.00</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">Fresh Brocoli
                        <span class="middle">x 02</span>
                        <span class="last">$720.00</span>
                      </a>
                    </li>
                  </ul>-->
                  <ul class="list list_2">
                    <li>
                      <a href="#">Subtotal
                        <span>Rp. {{ Cart::subtotal() }}</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">Shipping
                        <span>Flat rate: @currency($rate)</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">Total
                        <span>@currency($sub)</span>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection