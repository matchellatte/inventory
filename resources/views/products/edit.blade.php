@extends('layout')

@section('content')
<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" value="{{ $product->category }}">
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}">
            @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
@endsection