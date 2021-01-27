@extends("layout");

@section ("content")
<div class="row">
    <div class="col-12 d-flex flex-wrap mt-5 user_container align-items-center justify-content-center">
        @foreach ($utenti as $utente )
            
            <div class= "col-3 ml-3  d-flex
            flex-column align-items-center justify-content-center
            flex-wrap utente mb-5">
                <div class="mb-2">
                <h4>{{ $utente->first_name }} {{ $utente->last_name }}</h4>      
                </div>
                <img src="{{ $utente->image }}" alt="profile_picture">
                <p class="mt-3"> <strong>Email: </strong> {{  $utente->email }}</p>
                <p> <strong>Sesso: </strong> {{  $utente->gender }}</p>

            </div>
        @endforeach
    
</div>
@endsection