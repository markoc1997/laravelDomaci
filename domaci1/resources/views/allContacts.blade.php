@foreach ($allContacts as $contact)
    <p>Email:   {{$contact["email"]}}</p>
    <p>Subject: {{$contact["subject"]}}</p>
    <p>Message: {{$contact["message"]}}</p>
    <hr>
@endforeach
