@extends('layouts.app')
@section('title','Product')
@section('content')
<section class="flex bg-gray-100 py-16 px-4" id="our-product">
  <div class="container mx-auto">
    <div class="flex flex-start mb-4">
      <h3 class="text-2xl capitalize font-semibold mt-3 text-center">
        Our <br class="" /> Product
      </h3>
    </div>
    <div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
      <span class="vc_empty_space_inner"></span>
    </div>
    @foreach($products->chunk(4) as $chunk)
    <div class="card-group mb-lg-3">
      @foreach($chunk as $product)
      <div class="card me-lg-5">
        <img src="{{ url('frontend/images/img_product_9.png') }}" alt="" class="card__img mb-3">
        <div class="card__data">
          <div class="card__title">{{ $product->name }}</div>
          <p class="card__description">{{ $product->description }}</p>
          <div class="card__preci">{{ $product->formattedPrice}}</div>
          <a href="" class="card__button">Buy Now</a>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach

    {{ $products->links() }}
  </div>
</section>
<div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
  <span class="vc_empty_space_inner"></span>
</div>
@endsection