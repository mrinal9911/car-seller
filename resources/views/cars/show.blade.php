@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <div class="grid md:grid-cols-2 gap-6">
        {{-- Car Image --}}
        <div>
            <img src="{{ asset('storage/' . $car->images->first()->image_path) }}"
                 alt="{{ $car->title }}"
                 class="w-full h-96 object-cover rounded shadow-md">
        </div>

        {{-- Car Details --}}
        <div class="space-y-4">
            <h1 class="text-3xl font-bold text-gray-900">{{ $car->title }}</h1>

            <p class="text-gray-700">Brand: <span class="font-medium">{{ $car->brand }}</span></p>
            <p class="text-gray-700">Model: <span class="font-medium">{{ $car->model }}</span></p>
            <p class="text-gray-700">Year: <span class="font-medium">{{ $car->year }}</span></p>
            <p class="text-gray-700">Fuel Type: <span class="font-medium">{{ $car->fuel_type }}</span></p>
            <p class="text-gray-700">Transmission: <span class="font-medium">{{ $car->transmission }}</span></p>
            <p class="text-gray-700">Driven: <span class="font-medium">{{ number_format($car->mileage) }} km</span></p>

            <div class="text-2xl font-bold text-red-600 mt-4">
                ₹{{ number_format($car->price, 2) }}
            </div>

            <p class="text-gray-600 mt-2">{{ $car->description }}</p>

            @if($car->user && $car->user->phone)
            <a href="https://wa.me/{{ $car->user->phone }}"
               target="_blank"
               class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg shadow">
                Contact Seller on WhatsApp
            </a>
            @endif
        </div>
    </div>

</div>
@endsection
