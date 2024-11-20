@extends('layout')

@section('content')
    <h1>Products</h1>

    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create product</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id)}}" class="btn btn-info">View</a>
                    <a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection