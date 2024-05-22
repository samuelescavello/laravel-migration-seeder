@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>trains</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <p>
                    {{ $train->agency }} PARTENZA : {{ $train->departure_station }}  ARRIVO : {{ $train->arrival_station }} ORARIO PARTENZA : {{ $train->departure_time }}  ORARIO ARRIVO : {{ $train->arrival_time }} DATA PARTENZA : {{ $train->date }}
                </p>
            </li>
        @endforeach
    </ul>
</main>

@endsection
