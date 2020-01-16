@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
<div class="card">
  <div class="card-header">
  <b>Tambah Produk</b>
  </div>
  <div class="card-body">
    <form action="/admin" method="post" enctype="multipart/form-data">
    
        <h3>Nama</h3>
        <input type="text" name="name" value="{{ old('name')}}"/>
        @if($errors->has('name'))
          <p>{{ $errors->first('name') }}</p>
        @endif
        <h3>Availability</h3>
        <input type="text" name="details" value="{{ old('details')}}"/>
        @if($errors->has('details'))
          <p>{{ $errors->first('details') }}</p>
        @endif<br>
        <h3>Deskripsi</h3>
        <textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea>
        @if($errors->has('description'))
          <p>{{ $errors->first('description') }}</p>
        @endif<br>
        <h3>Kategori</h3>
        <select name="type">
        @foreach($types as $type)
            <option value="{{ $type->type }}">{{ $type->type }}</option>
        @endforeach
        </select>
        <h3>Harga</h3>
        <input type="number" name="price" value="{{ old('price') }}">
        @if($errors->has('price'))
          <p>{{ $errors->first('price') }}</p>
        @endif
        <h3>Gambar</h3><br>
        <input type="file" name="featured_img" >
        <br>
        Gambar Pendukung
        <br>
        <input type="file" name="featured_img2">
        <br>
        <input type="file" name="featured_img3">
        <br>
        <input type="file" name="featured_img4">     

        {{ csrf_field() }}   

        <input type="submit" name="submit" value="create">
        <input type="hidden" name="method" value="POST">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection