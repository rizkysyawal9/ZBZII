@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Semua Produk
                </div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('admin.create') }}">Tambah Produk Baru</a>
                    <div class="table-index-product">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="tr-list">
                                <th scope="col" colspan="5"> Gambar Produk</th>
                                <th scope="col" > Nama Produk</th>
                                <th scope="col" >Harga</th>
                                <th scope="col" colspan="5">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr class="tr-list">
                                    <th colspan="5"><img src="{{ asset('storage/product/'. $product->featured_img) }}" alt="" width="150"></th>
                                    <th >{{ $product->name }}</th>
                                    <th > @currency($product->price)</th>
                                    <th colspan="5">
                                        <button class="btn_5">
                                            <a href="{{ route('admin.edit', [ 'id' => $product->id ]) }}">Edit</a></li><br>
                                        </button>
                                        <form  action="{{ route('admin.delete', [ 'id' => $product->id ]) }}" method="post">
                                            <input class="btn_5" type="submit" name="submit" value="delete">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
<!-- 
                    @foreach($products as $product)
                    <li>{{ $product->name }} - @currency($product->price)<br>
                    <img src="{{ asset('storage/product/'. $product->featured_img) }}" alt="" width="150">
                    <a class="btn_1" href="{{ route('admin.edit', [ 'id' => $product->id ]) }}">Edit</a></li><br>
                    <form action="{{ route('admin.delete', [ 'id' => $product->id ]) }}" method="post">
                        <input type="submit" name="submit" value="delete">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                    @endforeach
                    <br>
                    {{ $products->links() }} -->
                </div> <!-- end of card body -->
            </div>
        </div>
    </div>
</div>

@endsection