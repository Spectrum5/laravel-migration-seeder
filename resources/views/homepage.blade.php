@extends('layout.main')

@section('content')
    @foreach ($trains as $train)
    <div class="ticket">
        <h1> {{$train->company}}</h1>
        <div>
            <p>Stazione di partenza: {{$train->departure_station}}</p>
            <p>Stazione di arrivo: {{$train->arrival_station}}</p>
        </div>
        <div>
            <p>Ticket valido il giorno: {{$train->departure_time}}</p>
            <small>ID treno: {{$train->train_id}}</small>
        </div>

    </div>
    @endforeach
@endsection
