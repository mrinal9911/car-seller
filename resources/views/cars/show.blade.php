@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" class="w-full rounded">
        </div>
        <div>
            <h1 class="text-2xl font-bold mb-2">{{ $car->title }}</h1>
            <p class="text-gray-700 mb-1">Brand: {{ $car->brand }}</p>
            <p class="text-gray-700 mb-1">Model: {{ $car->model }}</p>
            <p class="text-gray-700 mb-1">Year: {{ $car->year }}</p>
            <p class="text-gray-700 mb-1">Fuel: {{ $car->fuel_type }}</p>
            <p class="text-gray-700 mb-1">Transmission: {{ $car->transmission }}</p>
            <p class="text-gray-700 mb-1">Mileage: {{ $car->mileage }} km</p>
            <p class="text-xl font-bold mt-4 mb-2">₹{{ number_format($car->price) }}</p>
            <a href="https://wa.me/{{ $car->user->phone }}" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Contact Seller on WhatsApp</a>
        </div>
    </div>
</div>
@endsection