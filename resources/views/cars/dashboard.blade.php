@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Your Car Listings</h1>
    <a href="{{ url('/create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ New Listing</a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        @foreach ($cars as $car)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" class="w-full h-48 object-cover rounded mb-2">
                <h2 class="font-bold">{{ $car->title }}</h2>
                <p>Status: {{ ucfirst($car->status) }}</p>
                <p>₹{{ number_format($car->price) }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection