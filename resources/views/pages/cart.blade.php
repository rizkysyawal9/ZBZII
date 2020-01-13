@extends('layouts.template')

@section('title', 'Keranjang Belanja')

@section('breadcrumb')
    <!-- breadcrumb start-->
    <!-- MASI HARDCODE :( -->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Keranjang belanja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->
@endsection

@section('content')
<section class="cart_area section_padding">

@if(Cart::count()>0)
    <div class="container">
        <h3>{{ Cart::count() }} item(s) in shopping cart</h3>
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach(Cart::content() as $item)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                       <a href="/{{ $item->model->type }}/{{ $item->model->slug }}">
                       <img src="{{ asset('storage/product/'. $item->model->featured_img) }}" alt="" width="150">
                     <!--  <img src="{{asset('/frontend')}}/img/arrivel/arrivel_1.png" alt="" />--></a>
                    </div>
                    <div class="media-body">
                      <p>{{ $item->model->name }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>@currency($item->model->price)</h5>
                </td>
                <td>
                    <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                @for ($i = 1; $i < 5 + 1 ; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                    </select>
                </td>
                <td>
                  <h5>@currency($item->price * $item->qty)  </h5>
                </td>
                <td>
                     <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="cart-options">Remove</button>
                      </form>
                </td>
              </tr>
              @endforeach
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>Rp. {{ Cart::subtotal() }}</h5>
                </td>
              </tr>
            </tbody>
            </table>

          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="{{ route('daily.index') }}">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="{{ route('checkout.index') }}">Proceed to checkout</a>
          </div>
          

            @else
            <div class="container">
              <H3>No Items in Shopping Cart</H3>
            </div>  
            @endif
          
        </div>
      </div>
  </section>
@endsection


<!-- Javascript code untuk mengubah jumlah baju dalam cart -->
@section('extra-js')
 <script src="{{ asset('js/app.js') }}"></script>

 <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')
            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
</script>
@endsection
