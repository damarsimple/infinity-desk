@extends('layouts.admin')
@section('content')
<!-- main content area start -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="main-content-inner">
            <!-- market value area start -->
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title d-sm-flex justify-content-between align-items-center">
                                <h2 class="mt-2" style="align-items: center;">Product Create</h2>
                            </div>
                            <div class="table-responsive m-t-40 with-360 div_transition">
                                <form method="POST" action="/admin/products/products-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="" aria-describedby="" name="name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="" aria-describedby="" name="code">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Serial</label>
                                        <input type="text" class="form-control" id="" aria-describedby="" name="serial">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="" aria-describedby=""
                                            name="description">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="" aria-describedby="" name="price">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Price Type</label>
                                        <input type="text" class="form-control" id="" aria-describedby=""
                                            name="price_type">
                                    </div>
                                    <select class="form-select" aria-label="Default select example" name="seller_id">
                                        <option selected>Seller</option>
                                        @foreach ($sellers as $seller)
                                        <option value="{{ $seller->id }}">{{ $seller->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Stock</label>
                                        <input type="text" class="form-control" id="" aria-describedby="" name="stock">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- row area start-->
        </div>
    </div>
    @endsection