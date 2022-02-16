@extends('layouts.dash')

@section('title','Home')

@section('content')
<div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
  <span class="vc_empty_space_inner"></span>
</div>
<section class="py-16 px-4" id="product-category">
  <div class="container text-center" style="padding-top: 70px;">
    <div class="card-group" >
      <div class="card">
        <img src="{{ url('frontend/images/img_category_1.png') }}" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="{{ url('frontend/images/img_category_2.png') }}" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="{{ url('frontend/images/img_category_3.png') }}" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
</section>
<section class="px-4" id="category-product">
  <div class="container mx-auto">
    <div class="mb-4">
      <h3 class="text-2xl capitalize font-semibold text-lg-center">
        Trending <br class="" />
        <span style="color: #aa9539;" class="font-bold">Product</span>
      </h3>
    </div>
  </div>
  <div class="card-product">
    @foreach($trendings as $product)
    <div class="card me-3">
      <img src="{{ url('frontend/images/img_product_3.png') }}" alt="" class="card__img mb-3">
      <div class="card__data">
        <h1 class="card__title">{{ $product->name }}</h1>
        <p class="card__description">{{ $product->description }}</p>
        <span class="card__preci">{{ $product->formattedPrice }}</span>
        <a href="#" class="card__button">Buy Now</a>
      </div>
    </div>
    @endforeach
  </div>
</section>
<div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
  <span class="vc_empty_space_inner"></span>
</div>
<section class="px-4" id="product-category">
  <div class="container mx-auto">
    <div class="flex flex-start mb-4">
      <h3 class="text-2xl capitalize font-semibold text-lg-center">
        Category <br class="" /> Product
      </h3>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="{{ url('frontend/images/img_category_1.png') }}" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="{{ url('frontend/images/img_category_2.png') }}" class="card-img-top" alt="...">
      </div>
      <div class="card">
        <img src="{{ url('frontend/images/img_category_3.png') }}" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
</section>
<div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
  <span class="vc_empty_space_inner"></span>
</div>
<section id="product-list">
  <div class="container">
    <div class="b-4">
      <h3 class="text-center">
        Our <br class="" /> Product
      </h3>
    </div>
    <div class="row">
      <div class="col-lg-3">
        @foreach($ours->chunk(4) as $productChunks)
        <div class="card-group">
          @foreach($productChunks as $product)
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ url('frontend/images/img_product_O_8.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card__description">{{ $product->description }}</p>
                  <span class="card__preci">{{ $product->formattedPrice }}</span>
                  <p class="card__place">{{ $product->seller->name }}</p>
                  <a href="#" class="card__button">Buy Now</a>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last Update {{ $product->updated_at->diffForHumans() }}</small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
  <span class="vc_empty_space_inner"></span>
</div>
@endsection