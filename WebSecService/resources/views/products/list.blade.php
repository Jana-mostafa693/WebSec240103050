@extends('layouts.master')

@section('title', 'Products List')

@section('content')
<div class="container mt-4">

    <!-- Header + Add Product Button -->
    <div class="row mb-3">
        <div class="col-10">
            <h1>Products</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('products_edit') }}" class="btn btn-success w-100">Add Product</a>
        </div>
    </div>

    <!-- Search Form -->
    <form method="GET" action="{{ route('products_list') }}">
        <div class="row mb-3">
            <div class="col-sm-2">
                <input name="keywords" type="text" class="form-control" placeholder="Search Keywords" value="{{ request()->keywords }}">
            </div>
            <div class="col-sm-2">
                <input name="min_price" type="number" class="form-control" placeholder="Min Price" value="{{ request()->min_price }}">
            </div>
            <div class="col-sm-2">
                <input name="max_price" type="number" class="form-control" placeholder="Max Price" value="{{ request()->max_price }}">
            </div>
            <div class="col-sm-2">
                <select name="order_by" class="form-select">
                    <option value="" disabled selected>Order By</option>
                    <option value="name" {{ request()->order_by=="name"?"selected":"" }}>Name</option>
                    <option value="price" {{ request()->order_by=="price"?"selected":"" }}>Price</option>
                </select>
            </div>
            <div class="col-sm-2">
                <select name="order_direction" class="form-select">
                    <option value="ASC" {{ request()->order_direction=="ASC"?"selected":"" }}>ASC</option>
                    <option value="DESC" {{ request()->order_direction=="DESC"?"selected":"" }}>DESC</option>
                </select>
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-1">
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>

    <!-- Products Grid -->
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <!-- Product Image -->
                <img src="{{ asset('images/' . $product->photo) }}" class="card-img-top" alt="{{ $product->name }}">
                
                <div class="card-body">
                    <!-- Product Name and Description -->
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    
                    <!-- Product Details Table -->
                    <table class="table table-sm">
                        <tr><th>Code</th><td>{{ $product->code }}</td></tr>
                        <tr><th>Model</th><td>{{ $product->model }}</td></tr>
                        <tr><th>Price</th><td>{{ $product->price }} LE</td></tr>
                    </table>

                    <!-- Edit & Delete Buttons -->
                    <div class="d-flex gap-2">
                        <a href="{{ route('products_edit', $product->id) }}" class="btn btn-warning w-50">Edit</a>
                        <a href="{{ route('products_delete', $product->id) }}" 
                           class="btn btn-danger w-50"
                           onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection