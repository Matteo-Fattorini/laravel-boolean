
@extends("layout")


@section("content")
<div class="row">
    <div class="col-6 offset-3 mt-5">
        <h3>Questi sono i dettagli di {{ $utente->first_name }}</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nesciunt sit distinctio blanditiis laborum rem saepe dolore, aperiam architecto debitis dignissimos, impedit tenetur! Tenetur, explicabo!</p>
    </div>
</div>

@endsection


