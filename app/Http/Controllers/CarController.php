<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('images')->where('status', 'approved')->latest()->paginate(10);

        $featuredCars = Car::selectRaw('MIN(id) as id, brand')
            ->with(['images' => function ($query) {
                $query->limit(1);
            }])
            ->where('status', 'approved')
            ->groupBy('brand')
            ->take(10)
            ->get();

        return view('cars.index', compact('cars', 'featuredCars'));
    }
    public function show($id)
    {
        $car = Car::with('images', 'user')->findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function dashboard()
    {
        $cars = auth()->user()->cars()->with('images')->latest()->get();
        return view('cars.dashboard', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'price' => 'required|numeric',
            'fuel_type' => 'required',
            'transmission' => 'required',
            'mileage' => 'required|numeric',
            'description' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $car = auth()->user()->cars()->create($request->only([
            'title',
            'brand',
            'model',
            'year',
            'price',
            'fuel_type',
            'transmission',
            'mileage',
            'description'
        ]));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $car->images()->create(['image_path' => $path]);
            }
        }

        return redirect('/dashboard')->with('success', 'Car listed successfully!');
    }
}
