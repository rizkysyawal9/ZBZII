@extends('layouts.template')

@section('title')
<title>Zeen by Zi | Home </title>
@endsection

@section('banner')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <h5>Modest Fasion</h5>
                                    <h1>Moslem Women Wear</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
@endsection

@section('content')
<!-- new arrival part here -->
<section>
        <div class="featured-section">
        
            <div class="container">
                <h1 class="text-center">New Arrival</h1>
                <p class="section-description text-center">Produk terbaru minggu ini.</p>
                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="img/blazer-product.jpg" href="{{$product->type}}/{{$product->slug}}" alt="">
            
                                    <div class="category_product_text">
                                        <a href="{{$product->type}}/{{$product->slug}}"><h5>{{ $product->name }}</h5></a>
                                        <div class="product-price"><p>@currency($product->price)</p></div>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- end products -->
                <div class="text-center button-container">
                    <a href="/Daily" class="btn_1">View More Products</a>
                </div>
            </div>
        </div>
</section>
<!-- new arrival part end -->

@endsection