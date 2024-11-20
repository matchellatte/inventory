@extends('layout')

@section('content')
    <h1>Product Details</h1>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Category:</strong> {{ $product->category }}</p>
    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Return to List</a>

@endsection