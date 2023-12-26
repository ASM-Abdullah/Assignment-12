
@extends('layouts.app')

@section('content')
    <h1>Create a Trip</h1>

    <form action="{{ route('trips.store') }}" method="post">
        @csrf
        <label for="trip_date">Trip Date:</label>
        <input type="date" name="trip_date" required>

        <label for="destination">Destination:</label>
        <select name="destination" required>
            <option value="Dhaka">Dhaka</option>
            <option value="Comilla">Comilla</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Cox's Bazaar">Cox's Bazaar</option>
        </select>

        <button type="submit">Create Trip</button>
    </form>
@endsection