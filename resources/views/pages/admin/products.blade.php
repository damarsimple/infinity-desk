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
                                <h2 class="mt-2" style="align-items: center;">Product List</h2>
                            </div>
                          
                          <button><a href="/admin/products/products-data/create">Create</a></button>
                            <div class="table-responsive m-t-40 with-360 div_transition">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Serial</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->code }}</td>
                                                <td>{{ $product->serial }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>
                                                    <a href="/admin/products/products-data/{{ $product->id }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="/admin/products/products-data/{{ $product->id }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- row area start-->
        </div> 
    </div>
@endsection