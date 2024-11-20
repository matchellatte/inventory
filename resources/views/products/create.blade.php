@extends('layout')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control">
                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control">
                @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>


@endsection