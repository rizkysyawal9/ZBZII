@extends('layouts.template')

@section('title', 'Confirmation')

@section('breadcrumb')
    <!-- breadcrumb start-->
    <!-- MASI HARDCODE :( -->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Keranjang Belanja / Checkout / Confirmation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->
@endsection

@section('content')
<section class="confirmation_part section_padding">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-lx-4">
              <div class="single_confirmation_details">
                  <h4>order info</h4>
                  <ul>
                      <li>
                          <p>Total</p><span>: @currency($sub)</span>
                        </li>
                        <li>
                            <p>Metode Pembayaran</p><span>: Transfer</span>
                        </li>
                        <li>
                            <p>Rekening Pembayaran</p><span>: BCA 2312451345 <br> ( Salsabilah )</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-lx-4">
                <div class="single_confirmation_details">
                    <h4>shipping Address</h4>
                    <ul>
                        <li>
                            <p>Street</p><span>: {{ $form->add1 }} {{$form->add2}} </span>
                        </li>
                        <li>
                            <p>city</p><span>: {{ $form->city }}</span>
                        </li>
                        <li>
                            <p>country</p><span>: United States</span>
                        </li>
                        <li>
                            <p>postcode</p><span>: {{ $form->zip }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="confirmation_tittle">
                <span>Terimakasih. Pesanan anda telah diterima. Tolong lakukan pembayaran sebelum pukul 16.00 WIB</span>
                </div>
            </div>
      </div>
    </div>
  </section>
@endsection