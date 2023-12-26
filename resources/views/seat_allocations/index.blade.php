@extends('layouts.app')

@section('content')
    <h1>Your Seat Allocations</h1>

    <ul>
        @foreach($seatAllocations as $allocation)
            <li>{{ $allocation->trip->destination }} - {{ $allocation->trip->formatted_date }} - Seat {{ $allocation->seat_number }} - {{ $allocation->user_name }}</li>
        @endforeach
    </ul>
@endsection