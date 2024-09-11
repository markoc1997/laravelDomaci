@extends('layout')

@section("content")



<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Latest Products</h2>

                    @foreach ($latestProducts as $product)
                        <p>{{$product["name"]}}</p>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
