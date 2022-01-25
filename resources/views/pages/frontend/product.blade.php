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
        <div class="card-group mb-3">
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_1.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_2.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_3.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_4.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card-group mb-3">
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_5.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_6.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_7.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_8.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="card-group mb-lg-3">
            <div class="card me-lg-5">
                <img src="{{ url('images/img_product_9.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-5">
                <img src="{{ url('images/img_product_10.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-5">
                <img src="{{ url('images/img_product_11.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
            <div class="card me-lg-3">
                <img src="{{ url('images/img_product_12.png') }}" alt="" class="card__img mb-3">
                <div class="card__data">
                  <div class="card__title">Meja</div>
                  <p class="card__description">Meja antik enak banget</p>
                  <div class="card__preci">$350</div>
                  <a href="" class="card__button">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="vc_empty_space furniture_custom" style="height: 50px; background-color:#f2f2f2;">
  <span class="vc_empty_space_inner"></span>
</div>
@endsection