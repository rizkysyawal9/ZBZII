@extends('layouts.template')

@section('title', 'Product Name')

@section('breadcrumb')
    <!-- breadcrumb start-->
    <!-- MASI HARDCODE :( -->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Product Category / Single Product</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->
@endsection

@section('extra styles')
    <link rel="stylesheet" href="{{ asset('css/product-type.css') }}">
@endsection

@section('content')
      <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="lSSlideOuter">
              <div class="lSSlideWrapper usingCss" style="transition-duration: 600ms; transition-timing-function: ease">
                <div id="vertical" class="lightSliderIsGrab lSSlide" style="width: 2040px; height: 580px; padding-bottom: 0%; transform: tranlate3d(-1530px, 0px, 0px);">
                  <div data-thumb="img/product_details/prodect_details_1.png">
                    <img src="img/blazer-product.jpg" />
                  </div>
                  <!-- <div data-thumb="img/product_details/prodect_details_2.png">
                    <img src="img/detail_1.jpg"/>
                  </div>
                  <div data-thumb="img/product_details/prodect_details_3.png">
                    <img src="img/detail_2.jpg" />
                  </div>
                  <div data-thumb="img/product_details/prodect_details_4.png">
                    <img src="img/detail_3.jpg" /> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3>{{ $products->name }}</h3>
              <h2>@currency($products->price)</h2>
              <ul class="list">
                <li>
                  <a class="active">
                    <span>Category</span> : {{ $products->type }} </a>
                     
                </li>
                <li>
                  <a> <span>Availibility</span> : In Stock</a>
                </li>
              </ul>
              <p>
                 {{ $products->description }}
              </p>
              <div class="card_area">
                <div class="product_count d-inline-block">
                  <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                  <input class="input-number" type="text" value="1" min="0" max="10">
                  <span class="number-increment"> <i class="ti-plus"></i></span>
                </div>

                
                <div class="add_to_cart">
                  <form action="{{ route('cart.store', $products) }}" method="post">
                  {{ csrf_field() }}
                  <button type="submit" class="btn_3">add to cart</button>
                  <input type="hidden" name="method" value="POST">
                  </form>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

@endsection