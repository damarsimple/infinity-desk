@extends('layouts.dash')

@section('title','Home')

@section('content')
<section class="py-16 px-4" id="product-category">
    <div class="container text-center" style="padding-top: 70px">
        <div class="category-wrapper text-center">
            <div class="category-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="#">
                            <img src="{{ url('frontend/images/banner.png') }}" class="img-fluid mb-sm-3 mb-3"
                                alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="#">
                            <img src="{{ url('frontend/images/banner.png') }}" class="img-fluid mb-sm-3 mb-3"
                                alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="#">
                            <img src="{{ url('frontend/images/banner.png') }}" class="img-fluid mb-sm-3 mb-3"
                                alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="px-4" id="category-product">
    <div class="container mx-auto">
        <div class="mb-4 text-center">
            <h3 class="header">
                Trending
            </h3>
            <h4 class="header-title">Product</h4>
        </div>
    </div>
    <div class="card-product">
        @foreach($trendings as $product)
        <div class="card me-3">
            <a href="#">
                <img src="{{ url('frontend/images/img_product_1.png') }}" alt="" class="card__img mb-3" />
            </a>
            <div class="card__data">
                <h1 class="card__title">{{ $product->name }}</h1>
                <p class="card__description">{{ $product->description }}</p>
                <span class="card__price">{{ $product->formattedPrice }}</span>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="px-4" id="product-category">
    <div class="container mx-auto">
        <div class="container mx-auto">
            <div class="mb-4 text-center">
                <h3 class="header">
                    Category
                </h3>
                <h4 class="header-title">Product</h4>
            </div>
        </div>
        <section class="py-16 px-4" id="product-category">
            <div class="container text-center">
                <div class="category-wrapper text-center">
                    <div class="category-content">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#">
                                    <img src="{{ url('frontend/images/img_category_1.png') }}"
                                        class="img-fluid mb-sm-3 mb-3" alt="..." />
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#">
                                    <img src="{{ url('frontend/images/img_category_2.png') }}"
                                        class="img-fluid mb-sm-3 mb-3" alt="..." />
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <a href="#">
                                    <img src="{{ url('frontend/images/img_category_3.png') }}"
                                        class="img-fluid mb-sm-3 mb-3" alt="..." />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>



<section id="product-list">
    <div class="container">
        <div class="mb-4 text-center">
            <h3 class="header">
                Our
            </h3>
            <h3 class="header-title">
                Product
            </h3>
        </div>
        <div class="row">
            @foreach($ours->chunk(2) as $productChunks)
            <div class="col-lg-3">
                @foreach($productChunks as $product)
                <div class="product__inner">
                    <div class="d-flex">
                        <div class="section_img_product pe-2">
                            <a href="">
                                <img src="{{ url('frontend/images/product-sm.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="section__details">
                            <div class="category__product">{{ $product->name }}</div>
                            <div class="title__product">{{ $product->description }}</div>
                            <div class="owner__product">{{ $product->seller->name }}</div>
                            <div class="price">{{ $product->formattedPrice }}</div>
                            <small class="text-muted">
                              Last Update {{ $product->updated_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
