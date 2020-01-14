<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Buat Produk</h1>
    <form action="/zeener" method="post" enctype="multipart/form-data">
    
        <h3>Nama</h3>
        <input type="text" name="name" value="{{ old('name')}}" >
        <h3>Availability</h3>
        <input type="text" name="details" value="{{ old('details')}}" ><br>
        <h3>Deskripsi</h3>
        <textarea name="description" rows="8" cols="40">{{ old('description') }}</textarea><br>
        <h3>Kategori</h3>
        <select name="type">
        @foreach($types as $type)
            <option value="{{ $type->type }}">{{ $type->type }}</option>
        @endforeach
        </select>
        <h3>Harga</h3>
        <input type="number" name="price" value="{{ old('price') }}">
        <h3>Gambar</h3><br>
        <input type="file" name="featured_img" >     
        {{ csrf_field() }}   
        <input type="submit" name="submit" value="create">
        <input type="hidden" name="method" value="POST">
    </form>
</body>
</html>