@extends('layouts.master')

@section('title', 'Add/Edit Product')

@section('content')
<div class="container mt-4">
    <h2>{{ $product->exists ? 'Edit Product' : 'Add Product' }}</h2>

    <form action="{{ route('products_save', $product->id) }}" method="post">
        @csrf

        <div class="row mb-2">
            <div class="col-6">
                <label class="form-label">Code:</label>
                <input type="text" class="form-control" name="code" required value="{{ $product->code }}">
            </div>
            <div class="col-6">
                <label class="form-label">Model:</label>
                <input type="text" class="form-control" name="model" required value="{{ $product->model }}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required value="{{ $product->name }}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-6">
                <label class="form-label">Price:</label>
                <input type="number" class="form-control" name="price" required value="{{ $product->price }}">
            </div>
            <div class="col-6">
                <label class="form-label">Photo:</label>
                <input type="text" class="form-control" name="photo" required value="{{ $product->photo }}">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label class="form-label">Description:</label>
                <textarea class="form-control" name="description" required>{{ $product->description }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection