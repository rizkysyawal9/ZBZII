<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Order</h1>
    @foreach(Cart::content() as $item)
    <p>Nama Produk = {{ $item->name }}</p>
    <p>Jumlah = {{ $item->qty }}</p>
    <p>Harga = @currency($item->price)</p>
    @endforeach
    <p>Subtotal = Rp.{{ Cart::subtotal() }}</p>
    <p>Total = @currency(str_replace(',', '', Cart::subtotal()) + 10000) </p>
    <h1>Detail Pelanggan</h1>
    <p>First Name = {{ $form->first }}</p>
    <p>Last Name = {{ $form->last }}</p>
    <p>Address = {{ $form->add1 }}, {{ $form->add2 }}</p>
    <p>City = {{ $form->city }}</p>
    <p>District = {{ $form->district }}</p>
    <p>Zip Code = {{ $form->zip }}</p>


</body>
</html>