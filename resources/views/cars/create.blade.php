@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">List Your Car</h1>

    <form action="{{ url('/car/store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <x-input name="title" label="Title" required />
        <x-input name="brand" label="Brand" required />
        <x-input name="model" label="Model" required />
        <x-input name="year" label="Year" type="number" required />
        <x-input name="price" label="Price" type="number" required />
        <x-input name="fuel_type" label="Fuel Type" required />
        <x-input name="transmission" label="Transmission" required />
        <x-input name="mileage" label="Driven (km)" type="number" required />

        <x-textarea name="description" label="Description" required />

        <label class="block font-medium">Car Images</label>
        <input type="file" name="images[]" multiple class="block w-full" required>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
    </form>
</div>
@endsection