@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Produk
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update', [ 'id' => $product->id ]) }}" method="post" enctype="multipart/form-data">
                            <div class="container">
                                <h5>Nama</h5>
                                <input type="text" name="name" value="{{ $product->name }}">
                            </div>
                            <div class="container">
                                <h5>Availability</h5>
                                <input type="text" name="details" value="{{ $product->details }}"><br>
                            </div>
                            <div class="container">
                                <h5>Deskripsi</h5>
                                <textarea name="description" rows="8" cols="40">{{ $product->description }}</textarea><br>
                            </div>
                            <div class="container">
                                <h5>Kategori</h5>
                                <select name="type">
                                @foreach($types as $type)
                                    <option value="{{ $type->type }}">{{ $type->type }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="container">
                                <h5>Harga</h5>
                                <input type="number" name="price" value="{{ $product->price }}">
                            </div>
                            <div class="container edit-gambar">
                                <h4>Gambar</h4>
                                <br>
                                <div class="container">
                                    <input type="file" name="featured_img">  
                                </div>
                                <br>
                                <div class="container">
                                    Gambar Pendukung
                                    <br>
                                    <input type="file" name="featured_img2">
                                    <br>
                                    <input type="file" name="featured_img3">
                                    <br>
                                    <input type="file" name="featured_img4">
                                    <br>     
                                    {{ csrf_field() }}   
                                    <input type="submit" name="submit" value="EDIT">
                                    <input type="hidden" name="_method" value="PUT">
                                </div>
                                <div class="container">
                                    <img src="{{ asset('storage/product/'. $product->featured_img2) }}" alt="" width="150">
                                    <h5>Delete Image 2 </h5>
                                    
                                    <form action="{{ route('admin.del2', [ 'id' => $product->id ]) }}" method="post">
                                        <input type="submit" name="submit" value="delete">
                                            {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                      </form>
                                      
                                    <img src="{{ asset('storage/product/'. $product->featured_img3) }}" alt="" width="150">
                                    <h5>Delete Image 3</h5>
                                    <form action="{{ route('admin.del3', [ 'id' => $product->id ]) }}" method="post">
                                        <input type="submit" name="submit" value="delete">
                                            {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                    </form>
                                    
                                    <img src="{{ asset('storage/product/'. $product->featured_img4) }}" alt="" width="150">
                                    <h5>Delete Image 4</h5>
                                    <form action="{{ route('admin.del4', [ 'id' => $product->id ]) }}" method="post">
                                        <input type="submit" name="submit" value="delete">
                                            {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">     
                                    </form>
                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection