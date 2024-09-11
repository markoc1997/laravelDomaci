@extends('layout')

@section("content")
<div class="container mt-5">
    <h2 class="mb-4">Contact Us</h2>
    <div class="row">
        <div class="col-lg-8 mb-5">
            <div class="form-container">
                <form>
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
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115990.16259000716!2d20.4151281847742!3d44.81763526436812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a66b07d37d003%3A0x95e9ebf0b2b58c!2sBelgrade!5e0!3m2!1sen!2srs!4v1636016988272!5m2!1sen!2srs" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


@endsection