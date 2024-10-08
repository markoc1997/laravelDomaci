@extends("layout")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allProducts as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="/admin/delete-product/{{$product->id}}" class="btn btn-danger">Obrisi</a>
                <a class="btn btn-primary">Edituj</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection

