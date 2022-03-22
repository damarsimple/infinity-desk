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
            <li class="nav-item">
                <a href="wishlist.html" class="nav-link">
                    <i class="bi bi-heart-fill"></i>
                    WishList
                </a>
            </li>
            <li class="nav-item active">
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
                        <input type="text" class="form-control" placeholder="Find Outlet..." onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                    <!-- <button data-unify="Button">
                        <span>Change Wishlist<span>
                    </button> -->
                </div>
                <div class="card-group mb-3">
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-group mb-3">
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-group mb-3">
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-success mb-3 me-lg-3" style="max-width: 25%;">
                        <div class="card-header bg-transparent border-success">
                            <div class="row">
                                <div class="col">
                                    <div class="outlet-logo">
                                        <a href="#">
                                            <img src="img/figma-icon/640px-GMMTV_Logo.svg.png" width="30px" alt="...">
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="outlet-name">
                                        <a href="#">
                                            <h4 style="font-size: .55rem;">
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                GMMTV Official
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn bg-light btn-outline-info">Following</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-group">
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" alt="..." width="55%" class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                                <div class="card me-3">
                                    <a href="#">
                                        <img src="img/img_product_1.png" width="55%" alt="..." class="mb-3" style="margin-left: 0.85rem; margin-top: 1rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection