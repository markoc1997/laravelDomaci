@extends('layout')

@section("content")



<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Welcome Content</h2>
                    <p>Trenutno vreme je {{$trenutnoVreme}}</p>
                    <p>Sat {{$sat}}</p>

                    @if ($sat >= 0 && $sat <= 12)
                        <p>Dobro jutro</p>
                    @else
                        <p>Dobar dan</p>
                    @endif

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
