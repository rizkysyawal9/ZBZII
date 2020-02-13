@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Order
                </div>
                <div class="card-body">
                    <div class="confirmation_part">
                        <div class="single_confirmation_details">

                            <ul>
                                <li>
                                    <p>Nama Pelanggan</p><span>: {{ $form->first }} {{$form->last}} </span>
                                </li>
                                <li><p>Barang</p>
                                    @foreach(array_combine($qty, $product) as $quant=>$item)
                                        <span>Nama : {{ $item->name }}  </span> <br>
                                        <span>Harga : <?php $harga = $item->price ?> @currency($harga) </span> <br>
                                        <span>Jumlah : {{ $quant }} </span><br> 
                                        <span>Harga Total :<?php $price = ($item->price)*($quant); 
                                         ?> @currency($price) </span> 
                                    @endforeach

                                </li>
                                <li><p>Subtotal:</p><span>: 
                                    <?php 
                                    $lenght = count($product);
                                    $total = 0;
                                    for($i=0; $i<$lenght; $i++){
                                        $temp = ($product[$i]->price)*($qty[$i]);
                                        $total = $total + $temp;
                                    }
                                    // echo $total
                                ?>@currency($total)</span></li>
                                <li>
                                    <p>No telfon</p><span>: {{ $form->number }} </span>
                                </li>
                                <li>
                                <p>Alamat Lengkap</p><span>: {{ $form->alamat }}</span>
                                </li>
                                <li>
                                <p>RT/RW</p><span>: {{ $form->rtw }}</span>
                                </li>
                                <li>
                                <p>Kelurahan</p><span>: {{ $form->kelurahan }}</span>
                                </li>
                                <li>
                                <p>Kecamatan</p><span>: {{ $form->kecamatan }}</span>
                                </li>
                                <li>
                                <p>Kota/Kabupaten</p><span>: {{ $form->kota }}</span>
                                </li>
                                <li>
                                <p>Provinsi</p><span>: {{ $form->provinsi }}</span>
                                </li>
                                <li>
                                <p>Kode POS</p><span>: {{ $form->zip }}</span>
                                </li>
                              </ul>
                            </div>  
                        </div>
                            <!-- <div class="table-index-product">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="tr-list">
                                <th scope="col" > Nama Pelanggan </th>
                                <th scope="col" > Nama Produk </th>
                                <th scope="col" > Quantitas </th>
                                <th scope="col" width="200px" > Alamat </th>
                                <th scope="col" > Total</th>
                                <th scope="col" > Waktu Pemesanan </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-list">
                                    <th scope="col">yasmin lukman</th>
                                    <th scope="col">dress 1</th>
                                    <th scope="col"> 2 </th>
                                    <th scope="col" width="200px" > lalala </th>
                                    <th scope="col"> 345678 </th>
                                    <th scope="col">345678</th>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection

