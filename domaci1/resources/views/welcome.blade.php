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

                    <form method="post" action="send-contact">

                        @if($errors->any())
                            <p>Greska: {{ $errors->first() }}</p>
                        @endif

                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                            <p>Greska: {{ $errors->first('message') }}</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
