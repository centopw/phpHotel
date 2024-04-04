@extends('layouts.app')

@section('content')
    <h1>Filtered Bookings</h1>

    @foreach ($bookings as $booking)
        <div>
            <h2>{{ $booking->name }}</h2>
            <p>{{ $booking->name }}</p>
            <p>{{ $booking->phone_number }}</p>
            <p>{{ $booking->status }}</p>
        </div>
    @endforeach

    {{ $bookings->links() }}
@endsection
