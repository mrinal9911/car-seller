<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Enquiry;
use Exception;
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

    public function homePage()
    {
        return view('cars.home');
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
        return view('cars.create'); // Make sure the Blade file exists
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

    public function contactUs()
    {
        return view('cars.contact-us'); // Make sure the Blade file exists
    }

    public function postContactUs(Request $request)
    {
        try {

            $request->validate([
                'carId'          => 'nullable|numeric|max:100',
                'userSalutation' => 'required|string|max:100',
                'userName'       => 'required|string|max:100',
                'userPhone'      => 'required|string|max:20',
                'userEmail'      => 'nullable|email|max:100',
                'message'        => 'required|string|max:500'
            ]);

            $mEnquiry            =  new Enquiry();
            $mEnquiry->car_id     = $request->input('carId', null);
            $mEnquiry->salutation = $request->input('userSalutation');
            $mEnquiry->name       = $request->input('userName');
            $mEnquiry->phone      = $request->input('userPhone');
            $mEnquiry->email      = $request->input('userEmail');
            $mEnquiry->message    = $request->input('message');
            $mEnquiry->save();

            echo "Contact form submitted successfully!";

            return redirect('/contact')->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            return redirect('/contact')->with('error', $e->getMessage());
            // return redirect('/contact')->with('error', 'There was an error sending your message. Please try again later.');
        }
    }

    public function vehicleList()
    {
        $cars = Car::with('images')->where('status', 'approved')->latest()->paginate(10);
        return view('cars.vehicle-list', compact('cars'));
    }

    public function vehicleDetails()
    {
        // $car = Car::with('images', 'user')->findOrFail($id);
        // return view('cars.vehicle-details', compact('car'));
        return view('cars.vehicle-details');
    }

    public function accountListing()
    {
        return view('cars.account-listing');
    }

    public function addListing()
    {
        return view('cars.add-listing');
    }
}
