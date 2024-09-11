@extends('layout')

@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Shop Content</h2>

                    @foreach ($products as $product)
                    @switch($product)
                        @case("Samsung A52s")
                            <p>{{$product}} - Snizenje</p>
                            @break
                        @case("Samsung A30")
                            <p>{{$product}} - Snizenje</p>
                            @break
                        @default
                            <p>{{$product}}</p>
                    @endswitch
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
