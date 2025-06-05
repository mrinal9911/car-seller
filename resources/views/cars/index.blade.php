@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Available Cars</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($cars as $car)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ asset('storage/' . $car->images->first()->image_path) }}" class="w-full h-48 object-cover mb-3 rounded">
                <h2 class="text-lg font-semibold">{{ $car->brand }} {{ $car->model }}</h2>
                <p class="text-sm text-gray-600">₹{{ number_format($car->price) }}</p>
                <a href="{{ url('/car/' . $car->id) }}" class="text-blue-600 hover:underline mt-2 inline-block">View Details</a>
            </div>
        @endforeach
    </div>
</div>
@endsection