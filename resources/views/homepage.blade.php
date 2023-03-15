@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto d-flex flex-wrap justify-content-center">
                @foreach ($trains as $train)
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="ticket">
                            <h2> {{ $train->company }}</h2>
                            <div>
                                <p>Stazione di partenza: {{ $train->departure_station }}</p>
                                <p>Stazione di arrivo: {{ $train->arrival_station }}</p>
                            </div>
                            <div>
                                <p>Ticket valido il giorno: {{ $train->departure_time }}</p>
                                <small>ID treno: {{ $train->train_id }}</small>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection