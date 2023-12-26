@extends('layouts.app')

@section('content')
    <h1>Available Trips</h1>

    <ul>
        @foreach($trips as $trip)
            <li>{{ $trip->destination }} - {{ $trip->formatted_date }}</li>
        @endforeach
    </ul>
@endsection
