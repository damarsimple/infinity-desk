@extends('layouts.app')

@section('title','Home')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="
        background-image: url('frontend/images/background.png');
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 700px;
        ">
      <!-- <img src="images/background.png" class="d-block w-100" alt="..."> -->
      <div class="carousel-main-inner me-auto">
        <div class="carousel-text">
          <div class="text-new-arrival">
            NEW ARRIVALS
          </div>
          <div class="text-comfort-chair">
            COMFORT CHAIR
          </div>
          <p>Lorem ipsum dolor, sit amet, <br> consectetur adipisicing elit.</p>
          <button class="btn btn-buy-now">
            BUY NOW
          </button>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="
        background-image: url('frontend/images/background2.png');
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 700px;
        ">
      <!-- <img src="images/background.png" class="d-block w-100" alt="..."> -->
      <div class="carousel-main-inner me-auto">
        <div class="carousel-text">
          <div class="text-new-arrival">
            BEST SELLER
          </div>
          <div class="text-comfort-chair">
            LARGE SOFA
          </div>
          <p>Lorem ipsum dolor, sit amet, <br> consectetur adipisicing elit.</p>
          <button class="btn btn-buy-now">
            BUY NOW
          </button>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="
        background-image: url('frontend/images/background3.png');
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 700px;
        ">
      <!-- <img src="images/background.png" class="d-block w-100" alt="..."> -->
      <div class="carousel-main-inner me-auto">
        <div class="carousel-text">
          <div class="text-new-arrival">
            MOST RECOMMENDATION
          </div>
          <div class="text-comfort-chair">
            DINING TABLE
          </div>
          <p>Lorem ipsum dolor, sit amet, <br> consectetur adipisicing elit.</p>
          <button class="btn btn-buy-now">
            BUY NOW
          </button>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
  <span class="vc_empty_space_inner"></span>
</div>
<section class="flex bg-gray-100 py-16 px-4" id="product-category">
  <div class="container mx-auto">
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
<section class="flex bg-gray-100 py-16 px-4 mb-lg-5" id="trending-product">
  <div class="container mx-auto">
    <div class="flex flex-start mb-4">
      <h3 class="text-2xl capitalize font-semibold text-lg-center">
        Trending <br class="" /> Product
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
<section class="flex bg-gray-100 py-16 px-4" id="product-category">
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
<section class="flex bg-gray-100 py-16 px-4" id="product-list">
  <div class="container mx-auto">
    <div class="flex flex-start mb-4">
      <h3 class="text-2xl capitalize font-semibold text-lg-center">
        Our <br class="" /> Product
      </h3>
    </div>
    <div class="row row-cols-1 row-cols-md-1 g-2 ms-lg-5 me-lg-5">
      <div class="col">
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