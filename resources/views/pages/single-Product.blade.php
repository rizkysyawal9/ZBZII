@extends('layouts.template')

@section('title', '{{ $products->name }}')

@section('breadcrumb')
    <!-- breadcrumb start-->
    <!-- MASI HARDCODE :( -->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / {{ $products->type }} / {{ $products->name }}</p>
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
                  <img src="{{ asset('storage/product/'. $products->featured_img) }}" alt="" width="400">
                  </div>
                  </div>
                  @if($products->featured_img2 != null){
                  <img src="{{ asset('storage/product/'. $products->featured_img2) }}" alt="" width="100">
                  @endif
                  @if($products->featured_img3){
                  <img src="{{ asset('storage/product/'. $products->featured_img3) }}" alt="" width="100">
                  }
                  @endif
                  @if($products->featured_img4){
                  <img src="{{ asset('storage/product/'. $products->featured_img4) }}" alt="" width="100">
                  }
                  @endif
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
                  <a> <span>Availibility</span> : {{ $products->details }}</a>
                </li>
              </ul>
              <p>
                 {{ $products->description }}
              </p>

                
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