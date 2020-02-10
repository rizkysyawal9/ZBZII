@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Semua Order
                </div>
                <div class="card-body">
                    <div class="table-index-product">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="tr-list">
                                <th scope="col" colspan="5"> Waktu Pemesanan</th>
                                <th scope="col" > Nama Pelanggan</th>
                                <th scope="col" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr class="tr-list">
                                    <th colspan="5">{{ $order->created_at }}</th>
                                    <th >{{ $order->first }} {{ $order->last }}</th>
                                    <th>
                                    <button class="btn_5">
                                            <a href="{{ route('admin.details', [ 'id' => $order->id ]) }}">Detail</a></li><br>
                                        </button>
                                        <form  action="{{ route('admin.delete', [ 'id' => $order->id ]) }}" method="post">
                                            <input class="btn_5" type="submit" name="submit" value="delete">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form></th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection