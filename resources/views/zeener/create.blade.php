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
              <div class="container">
                <h5>Nama</h5>
                <input type="text" name="name" value="{{ old('name')}}"/>
                @if($errors->has('name'))
                <p class=error-massage>{{ $errors->first('name') }}</p>
                @endif
              </div>
              <div class="container">
                <h5>Availability</h5>
                <input type="text" name="details" value="{{ old('details')}}"/>
                @if($errors->has('details'))
                  <p class="error-massage">{{ $errors->first('details') }}</p>
                @endif<br>
              </div>
              <div class="container">
                <h5>Deskripsi</h5>
                <textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                  <p>{{ $errors->first('description') }}</p>
                @endif<br>
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
                <input type="number" name="price" value="{{ old('price') }}">
                @if($errors->has('price'))
                  <p>{{ $errors->first('price') }}</p>
                @endif
              </div>
              <div class="container edit-gambar">
                <h4>Gambar</h4><br>
                <div class="container">
                  <h5>Gambar Utama</h5>
                  <input type="file" name="featured_img" >
                </div>
                <br>
                <div class="container">
                    <div class="container">
                        Gambar Pendukung
                        <br>
                        <input type="file" name="featured_img2">
                        <br>
                        <input type="file" name="featured_img3">
                        <br>
                        <input type="file" name="featured_img4">
                        <br>     
                    </div>

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