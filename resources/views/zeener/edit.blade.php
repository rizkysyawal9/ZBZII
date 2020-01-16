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
<h1>Edit Produk</h1>
    <form action="{{ route('admin.update', [ 'id' => $product->id ]) }}" method="post" enctype="multipart/form-data">
        <h3>Nama</h3>
        <input type="text" name="name" value="{{ $product->name }}">
        <h3>Availability</h3>
        <input type="text" name="details" value="{{ $product->details }}"><br>
        <h3>Deskripsi</h3>
        <textarea name="description" rows="8" cols="40">{{ $product->description }}</textarea><br>
        <h3>Kategori</h3>
        <select name="type">
        @foreach($types as $type)
            <option value="{{ $type->type }}">{{ $type->type }}</option>
        @endforeach
        </select>
        <h3>Harga</h3>
        <input type="number" name="price" value="{{ $product->price }}">
        <h3>Gambar</h3><br>
        <input type="file" name="featured_img" value="{{ $product->featured_img }}">     
        Gambar Pendukung
        <br>
        <input type="file" name="featured_img2">
        <br>
        <input type="file" name="featured_img3">
        <br>
        <input type="file" name="featured_img4">     
        {{ csrf_field() }}   
        <input type="submit" name="submit" value="EDIT">
        <input type="hidden" name="_method" value="PUT">
    </form>
</body>
</html>

@endsection