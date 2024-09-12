@extends('layout')

@section("content")
<br>

<form style="margin: 50px" action="/admin/add-product" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" class="form-control" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" id="amount" name="amount" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" id="price" name="price" class="form-control" step="0.01" >
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" id="image" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>

<br>
@endsection

