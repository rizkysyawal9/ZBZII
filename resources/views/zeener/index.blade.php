@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Semua Produk</div>
                <div class="card-body">

                <a class="btn btn-primary" href="{{ route('admin.create') }}">Tambah Produk Baru</a>
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

    {{ $products->links() }}
</div>
</div>
</div>
</div>
</div>

@endsection