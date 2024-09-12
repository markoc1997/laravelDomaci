@extends('layout')

@section("content")

<div style="margin: 50px">
<h2>Product List</h2>
@foreach ($allProducts as $product)
    <p>{{$product["name"]}}</p>
@endforeach
</div>

<br>
<form style="margin: 50px" action="/admin/add-product" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Add Product</h2>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" class="form-control" rows="3"></textarea>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input id="amount" name="amount" class="form-control">
        @error('amount')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input id="price" name="price" class="form-control" step="0.01">
        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" id="image" name="image" class="form-control">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Add Product</button>
</form>

<br>
@endsection
