@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <ul class="nav">
            <li class="nav-item">
                <a href="recent-view.html" class="nav-link">
                    <i class="bi bi-eye-fill"></i>
                    Recent View
                </a>
            </li>
            <li class="nav-item active">
                <a href="wishlist.html" class="nav-link">
                    <i class="bi bi-heart-fill"></i>
                    WishList
                </a>
            </li>
            <li class="nav-item">
                <a href="outlet.html" class="nav-link">
                    <img src="img/figma-icon/store_major.svg" alt="...">
                    Favorite Outlet
                </a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <section class="flex bg-gray-100 py-16 px-4" id="our-product">
            <div class="container mx-auto">
                <div class="ms-md-auto ps-md-3 d-flex align-items-center">
                    <div class="input-group mb-3" style="width: 25%;">
                        <span class="input-group-text text-body">
                            <i class="bi bi-search" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search Product in Wishlist..." onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                    <!-- <button data-unify="Button">
                        <span>Change Wishlist<span>
                    </button> -->
                </div>
                <div class="card-group mb-3">
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="card-group mb-3">
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="card-group mb-3">
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="card-group mb-3">
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex bg-gray-100 py-16 px-4" id="our-product">
            <div class="container mx-auto">
                <div class=" mb-4">
                    <h3 class="text-2xl capitalize font-semibold ">
                        Recomendation For You
                    </h3>
                </div>
                <div class="card-group mb-3">
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="card-group mb-3">
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                    <div class="card me-lg-3">
                        <img src="img/img_product_1.png" alt="" class="card__img mb-3">
                        <div class="card__data">
                            <div class="card__title">Meja</div>
                            <p class="card__description">Meja antik enak banget</p>
                            <div class="card__price">$350</div>
                            <a href="" class="card__button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection