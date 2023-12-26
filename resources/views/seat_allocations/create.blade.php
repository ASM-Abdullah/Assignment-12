@extends('layouts.app')

@section('content')
    <h1>Purchase a Ticket</h1>

    <form action="{{ route('seat_allocations.store') }}" method="post">
        @csrf
        <label for="trip_id">Select Trip:</label>
        <select name="trip_id" required>
            @foreach($trips as $trip)
                <option value="{{ $trip->id }}">{{ $trip->destination }} - {{ $trip->formatted_date }}</option>
            @endforeach
        </select>

        <label for="seat_number">Select Seat Number:</label>
        <select name="seat_number" required>
            @for($i = 1; $i <= 36; $i++)
                <option value="{{ $i }}">Seat {{ $i }}</option>
            @endfor
        </select>

        <label for="user_name">Your Name:</label>
        <input type="text" name="user_name" required>

        <button type="submit">Purchase Ticket</button>
    </form>
@endsection
