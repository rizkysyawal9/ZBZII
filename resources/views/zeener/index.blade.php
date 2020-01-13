<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Daftar Semua Produk</h1>
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

    {{ $products->links() }}

</body>
</html>