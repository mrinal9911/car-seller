@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Featured Cars</h1>

    <ul class="flex space-x-6 border-b mb-6">
        <li><a href="#" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-2">Trending</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Popular</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Upcoming</a></li>
    </ul>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($cars as $car)
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition hover:shadow-lg">
                <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" class="w-full h-48 object-cover" alt="{{ $car->brand }} {{ $car->model }}">
                
                <div class="p-4">
                    <h2 class="text-lg font-bold text-gray-800">{{ $car->brand }} {{ $car->model }}</h2>
                    <p class="text-gray-600 text-sm mt-1">Rs. {{ number_format($car->price / 100000, 2) }} Lakh <span class="text-xs text-gray-400">Avg. Ex-Showroom price</span></p>
                    <a href="{{ url('/car/' . $car->id) }}" class="mt-3 inline-block text-blue-600 hover:underline text-sm">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
